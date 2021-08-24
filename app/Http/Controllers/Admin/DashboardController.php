<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Acoustic;
use App\Models\Advertisement;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\Stage;
use App\Models\Subject;
use App\Models\User;
use App\Models\Visual;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[];
        $data['count_blogs']=Blog::all()->count();
        $data['count_advertisement']=Advertisement::all()->count();
        $data['count_acoustic']=Acoustic::all()->count();
        $data['count_visual']=Visual::all()->count();
        $data['count_user']=User::where('type','=','user')->get()->count();
        $data['count_admin']=User::where('type','=','admin')->get()->count();
        $data['count_slider']=Slider::get()->count();
        $data['count_subjects']=Subject::get()->count();
        $data['count_stages']=Stage::get()->count();

        return view('admin.dashboard',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
