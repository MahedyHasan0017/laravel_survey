<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\MissionVission;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MissionAndVissionController extends Controller
{
    public function index(){
        $sett = Setting::all() ; 

        $setting = $sett[0] ; 

        $MV = MissionVission::all() ; 
        $id = $MV[0]->id ; 
        $mission_vission = $MV[0] ; 
       
        $mission_vission = MissionVission::find($id);

        return view('survey.mission_and_vision', compact('setting', 'mission_vission'));
    }

    public function mission_and_vision(){

        $id = Auth::guard('admin')->id() ; 
        $user = Admin::find($id) ; 

        $MV = MissionVission::all() ; 
        $id = $MV[0]->id ; 
        $mission_vission = $MV[0] ; 
       
        $mission_vission = MissionVission::find($id);
        

        return view('survey_admin.admin_mission_and_vision', compact('user','mission_vission')) ; 
    }


    public function mission_and_vision_store(Request $request){
       
        $MV = MissionVission::all() ; 
        $id = $MV[0]->id ; 
        $mission_vission = $MV[0] ; 
       
        $mission_vission = MissionVission::find($id);

        $mission_vission->update([
            'mission_desc' => $request->mission_desc ,
            'vission_desc' => $request->vission_desc 
        ]);

        toastr()->success("Updated");
        return redirect()->route('admin_dashboard') ; 
    }

}
