<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdvertisementRequest;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisements=Advertisement::latest()->paginate(15);

        return view('admin.advertisements.index',[
            'advertisements'=>$advertisements
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advertisements.create',[
            'advertisement'=>new Advertisement(),
            'title'=>'Create advertisements'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdvertisementRequest $request)
    {

        try {
            if ($request->hasFile('image')){
                $file = $request->file('image');

                $image_path= $file->store('/advertisements',[
                    'disk'=>'uploads'
                ]);

                $request->merge([
                    'url'=>$image_path,
                ]);
            }
            $advertisement=Advertisement::create($request->only(['title','text','status','url']));
            return redirect()->route('advertisements.index')->with(['success'=>'Create Advertisement success']);

        }catch (\Exception $e){
            return redirect()->route('advertisements.index')->with(['error'=>'Something error try again']);
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

        $advertisement=Advertisement::find($id);
        $title="Edit Advertisement";
        if (is_null($advertisement)){
            return redirect()->route('advertisements.index')->with('error','Advertisement does not exist');
        }
        return view('admin.advertisements.edit',[
            'advertisement'=>$advertisement,
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
    public function update(AdvertisementRequest $request, $id)
    {
        $advertisement=Advertisement::whereId($id)->first();
        if (is_null($advertisement)){
            return redirect()->route('advertisements.index')->with('error','Advertisement does not exist');
        }
        try {
            if ($request->hasFile('image')){
                $file = $request->file('image');

                $image_path= $file->store('/advertisements',[
                    'disk'=>'uploads'
                ]);

                $request->merge([
                    'url'=>$image_path,
                ]);
                Storage::disk('uploads')->delete($advertisement->url);

            }

            $advertisement->update( $request->only(['title','text','status','url']));
            return redirect()->route('advertisements.index')->with('success','Updated successful');
        }catch (\Exception $exception){
            return redirect()->route('advertisements.index')->with(['error'=>'Something error try again']);

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
        $advertisement=Advertisement::find($id);
            $image_path=   $advertisement->url;
            Storage::disk('uploads')->delete($image_path);

        Advertisement::destroy($id);
        return redirect(route('advertisements.index'))
            ->with('success', 'Advertisement deleted');
    }
}
