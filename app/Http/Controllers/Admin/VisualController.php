<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VisualRequest;
use App\Models\Visual;
use Illuminate\Http\Request;

class VisualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $visuals=Visual::latest()->paginate(15);

        return view('admin.visuals.index',[
            'visuals'=>$visuals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.visuals.create',[
            'visual'=>new Visual(),
            'title'=>'Create visual'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VisualRequest $request)
    {

        try {
            $visual=Visual::create($request->only(['title','brief_details','status','link']));
            return redirect()->route('visuals.index')->with(['success'=>'Create Visual success']);

        }catch (\Exception $e){
            return redirect()->route('visuals.index')->with(['error'=>'Something error try again']);
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

        $visual=Visual::find($id);
        $title="Edit Visual";
        if (is_null($visual)){
            return redirect()->route('visuals.index')->with('error','Visual does not exist');
        }
        return view('admin.visuals.edit',[
            'visual'=>$visual,
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
    public function update(VisualRequest $request, $id)
    {
        $visual=Visual::whereId($id)->first();
        if (is_null($visual)){
            return redirect()->route('visuals.index')->with('error','Visual does not exist');
        }
        try {

            $visual->update( $request->only(['title','brief_details','status','link']));
            return redirect()->route('visuals.index')->with('success','Updated successful');
        }catch (\Exception $exception){
            return redirect()->route('visuals.index')->with(['error'=>'Something error try again']);

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

        Visual::destroy($id);
        return redirect(route('visuals.index'))
            ->with('success', 'Visual deleted');
    }
}
