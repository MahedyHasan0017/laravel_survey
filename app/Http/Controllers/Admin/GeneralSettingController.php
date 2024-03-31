<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralSettingController extends Controller
{
    public function general(){

        $id = Auth::guard('admin')->id() ; 
        $user = Admin::find($id) ; 
        $setting = "" ; 

        $sett = Setting::all() ; 

        if(Setting::count() != 0){
            $sett = Setting::all() ; 
            $setting = $sett[0] ; 
        }
       
        // $setting = $sett[0] ; 

        // dd($setting) ; 


        return view('survey_admin.general_setting' , compact('user' , 'setting'));
    }

    public function general_store(Request $request){


        $sett = Setting::all() ; 
     

        if(Setting::count() == 0){
            Setting::insert([
                'company_name' => $request->company_name,
                'logo' => $request->logo,
                'about_company' => $request->about_company,
                'facebook_url' => $request->facebook_url,
                'youtube_url' => $request->youtube_url,
                'twitter_url' => $request->twitter_url,
                'instagram_url' => $request->instagram_url,
                'others_url' => "others", 
                'active_phone_number' => $request->active_phone_number
            ]);
            toastr()->success("Saved");
            return redirect()->route('admin_dashboard');
        }
        else{

            $id = $sett[0]->id ; 
            $setting = Setting::find($id) ; 

            $image = "" ; 
            if($request->logo == null){
                $image = $setting->logo ; 
            }
            else{
                

                if($request->file('logo')){
                    $file = $request->file('logo') ; 
                    $filename = date('YmdHi').$file->getClientOriginalName();
                    $file->move(public_path('upload/admin_images'),$filename);
                    $image = $filename ; 
                }

            }


            $setting->update([
                'company_name' => $request->company_name,
                'logo' => $image , 
                'about_company' => $request->about_company,
                'facebook_url' => $request->facebook_url,
                'youtube_url' => $request->youtube_url,
                'twitter_url' => $request->twitter_url,
                'instagram_url' => $request->instagram_url,
                'others_url' => "others", 
                'active_phone_number' => $request->active_phone_number
            ]);

            toastr()->success("Updated");
            return redirect()->route('admin_dashboard');
            // dd($setting->id) ; 
        }

     
       

        
    }

}
