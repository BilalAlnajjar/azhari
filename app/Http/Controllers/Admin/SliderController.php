<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sliders=Slider::latest()->paginate(15);

        return view('admin.sliders.index',[
            'sliders'=>$sliders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create',[
            'slider'=>new Slider(),
            'title'=>'Create Slider'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'path_image'=>'required|image',
        'status'=>'required|in:0,1'
    ]);

        try {
            if ($request->hasFile('path_image')){
                $file = $request->file('path_image');

                $image_path= $file->store('/sliders',[
                    'disk'=>'uploads'
                ]);

                $request->merge([
                    'image'=>$image_path,
                ]);
            }
            $slider=Slider::create($request->only(['status','image']));
            return redirect()->route('sliders.index')->with(['success'=>'Create Slider success']);

        }catch (\Exception $e){
            return redirect()->route('sliders.index')->with(['error'=>'Something error try again']);
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

        $slider=Slider::find($id);
        $title="Edit Slider";
        if (is_null($slider)){
            return redirect()->route('sliders.index')->with('error','Slider does not exist');
        }
        return view('admin.sliders.edit',[
            'slider'=>$slider,
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
    public function update(Request $request, $id)
    {
        $request->validate([
           'path_image'=>'image',
           'status'=>'required|in:0,1'
        ]);
        $slider=Slider::whereId($id)->first();
        if (is_null($slider)){
            return redirect()->route('sliders.index')->with('error','Slider does not exist');
        }
        try {
            if ($request->hasFile('path_image')){
                $file = $request->file('path_image');

                $image_path= $file->store('/sliders',[
                    'disk'=>'uploads'
                ]);
                Storage::disk('uploads')->delete($slider->image);

                $request->merge([
                    'image'=>$image_path,
                ]);
            }

            $slider->update( $request->only(['status','image']));
            return redirect()->route('sliders.index')->with('success','Updated successful');
        }catch (\Exception $exception){
            return redirect()->route('sliders.index')->with(['error'=>'Something error try again']);

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
        $slider=Slider::find($id);

        Storage::disk('uploads')->delete($slider->image);

        Slider::destroy($id);
        return redirect(route('sliders.index'))
            ->with('success', 'Slider deleted');
    }
}
