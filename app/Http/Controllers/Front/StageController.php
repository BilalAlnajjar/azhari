<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    public function index(){
        $data['transport_stage']=Stage::where('main_stage','transport_stage')->get();
        $data['high_school']=Stage::where('main_stage','high_school')->get();
        return view('front.stages',$data);
    }
    public function getSubjects($id){
      $stage=Stage::with('subjects')->findOrFail($id);

      return [
          'stage'=>$stage->refresh(),
          'image'=>$stage->path_image
      ];
    }
}
