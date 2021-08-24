<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AcousticRequest;
use App\Models\Acoustic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AcousticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $acoustics=Acoustic::latest()->paginate(15);

        return view('admin.acoustics.index',[
            'acoustics'=>$acoustics
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.acoustics.create',[
            'acoustic'=>new Acoustic(),
            'title'=>'Create Acoustic'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcousticRequest $request)
    {

        try {
            if ($request->hasFile('image_path')) {
                $file = $request->file('image_path');

                $image_path = $file->store('/acoustics', [
                    'disk' => 'uploads'
                ]);

                $request->merge([
                    'image' => $image_path,
                ]);
            }
            $acoustic=Acoustic::create($request->only(['title','code','brief_details','image','status']));
            return redirect()->route('acoustics.index')->with(['success'=>'Create Acoustic success']);

        }catch (\Exception $e){
            return redirect()->route('acoustics.index')->with(['error'=>'Something error try again']);
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

        $acoustic=Acoustic::find($id);
        $title="Edit Acoustic";
        if (is_null($acoustic)){
            return redirect()->route('acoustics.index')->with('error','Acoustic does not exist');
        }
        return view('admin.acoustics.edit',[
            'acoustic'=>$acoustic,
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
    public function update(AcousticRequest $request, $id)
    {
        $acoustic=Acoustic::whereId($id)->first();
        if (is_null($acoustic)){
            return redirect()->route('acoustics.index')->with('error','Acoustic does not exist');
        }
        try {
            if ($request->hasFile('image_path')) {
                $file = $request->file('image_path');

                $image_path = $file->store('/acoustics', [
                    'disk' => 'uploads'
                ]);
                Storage::disk('uploads')->delete($acoustic->image);

                $request->merge([
                    'image' => $image_path,
                ]);
            }
            $acoustic->update( $request->only(['title','code','brief_details','image','status']));
            return redirect()->route('acoustics.index')->with('success','Updated successful');
        }catch (\Exception $exception){
            return redirect()->route('acoustics.index')->with(['error'=>'Something error try again']);

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
        $acoustic=Acoustic::find($id);
        Storage::disk('uploads')->delete($acoustic->image);
        Acoustic::destroy($id);
        return redirect(route('acoustics.index'))
            ->with('success', 'Acoustic deleted');
    }
}
