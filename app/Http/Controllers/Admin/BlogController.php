<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Advertisement;
use App\Models\Blog;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        return Blog::with('images')
        $blogs=Blog::with('images')->latest()->paginate(15);

        return view('admin.blogs.index',[
            'blogs'=>$blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create',[
            'blog'=>new Blog(),
            'title'=>'Create Blog'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {

        try {
            if ($request->hasFile('image')){
                $file = $request->file('image');

                $image_path= $file->store('/blogs',[
                    'disk'=>'uploads'
                ]);

                $request->merge([
                    'main_image'=>$image_path,
                ]);
            }
            $blog=Blog::create($request->only(['title','details','brief_details','status','main_image']));
            return redirect()->route('blogs.index')->with(['success'=>'Create Blog success']);

        }catch (\Exception $e){
          return redirect()->route('blogs.index')->with(['error'=>'Something error try again']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $blog=Blog::find($id);
        $title="Edit Blog";
        if (is_null($blog)){
            return redirect()->route('blogs.index')->with('error','Blog does not exist');
        }
        return view('admin.blogs.edit',[
            'blog'=>$blog,
            'title'=>$title
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        $blog=Blog::whereId($id)->first();
        if (is_null($blog)){
            return redirect()->route('blogs.index')->with('error','Blog does not exist');
        }
        try {
            if ($request->hasFile('image')){
                $file = $request->file('image');
                Storage::disk('uploads')->delete($blog->main_image);

                $image_path= $file->store('/blogs',[
                    'disk'=>'uploads'
                ]);

                $request->merge([
                    'main_image'=>$image_path,
                ]);
            }

            $blog->update( $request->only(['title','details','brief_details','status','main_image']));
            return redirect()->route('blogs.index')->with('success','Updated successful');
        }catch (\Exception $exception){
            return redirect()->route('blogs.index')->with(['error'=>'Something error try again']);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::find($id);
        if ($blog->images){
            foreach ($blog->images as $image){
                Storage::disk('uploads')->delete($image->url);
            }
        }
        Storage::disk('uploads')->delete($blog->main_image);

        Blog::destroy($id);
        return redirect(route('blogs.index'))
            ->with('success', 'Blog deleted');
    }

    public function uploadImage(Request $request){
        if ($request->hasFile('file')){
            $file=$request->file('file');
            $image_path= $file->store('/blogs',[
                'disk'=>'uploads'
            ]);
            $blog=Blog::findOrFail($request->blog_id);
            $blog->images()->create([
                'url'=>$image_path
            ]);
            return response()->json([
                'status'=>200,
                'message'=>'Add image Successful'
            ]);

        }


        return response()->json([
            'status'=>400,
            'message'=>'error'
        ]);
    }
    public function deleteImage(Request $request){
        $request->validate([
            'image_id'=>'required'
        ]);

      $image=  Image::find($request->post('image_id'));
      Image::destroy($request->post('image_id'));
        Storage::disk('uploads')->delete($image->url);
        return response()->json([
            'status'=>200,
            'message'=>'delete image success'
        ]);

    }
}
