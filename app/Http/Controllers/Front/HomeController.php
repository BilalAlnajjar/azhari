<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Blog;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function Symfony\Component\String\u;

class HomeController extends Controller
{
    public function index(){
        $data=[];
        $data['sliders']=Slider::publish()->latest()->get()->take(5);
        $data['blogs']=Blog::publish()->latest()->get()->take(4)->chunk(2);
        $data['advertisements']=Advertisement::publish()->latest()->get()->take(5);
        return view('front.home',$data);
    }
    public function showBlog($id){
        $data['blogs']=Blog::publish()->latest()->get()->take(4);
        $data['blog']=Blog::find($id);
        $data['blog']->chunkImages=$data['blog']->images->take(4)->chunk(2);
        unset($data['blog']->images);
           return view('front.blog',$data);
    }
    public function about(){
        return view('front.about_Institute');
    }
    public function song(){
        return view('front.song');
    }
    public function dean(){
        return view('front.dean');
    }
    public function academic(){
        return view('front.academic');
    }
    public function management(){
        return view('front.management');
    }
    public function admission(){
        return view('front.admission');
    }
    public function staff(){
        return view('front.staff_management');
    }
    public function student(){
        return view('front.student_management');
    }
    public function shafi(){
        return view('front.shafi');
    }
}
