<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('dashboard/setting/index',compact('setting'));
    }
    public function add_action(Request $request){
        $data = $request->except(['_token','icon_website']);
        $data['updated_by'] = Auth::user()->username;
        $setting = Setting::first();
        if($request->icon){
            File::delete(public_path($setting->icon));
            $icon = '1' . time() . $request->icon->getClientOriginalName();
            $request->icon->move(public_path('images/icon_website/'), $icon);
            $data['icon'] = "images/icon_website/" . $icon;
        }
        if($request->favicon){
            File::delete(public_path($setting->favicon));
            $favicon = '2' . time() . $request->favicon->getClientOriginalName();
            $request->favicon->move(public_path('images/icon_website/'), $favicon);
            $data['favicon'] = "images/icon_website/" . $favicon;
        }
        if($request->icon2){
            File::delete(public_path($setting->icon2));
            $icon2 = '2' . time() . $request->icon2->getClientOriginalName();
            $request->icon2->move(public_path('images/icon_website/'), $icon2);
            $data['icon2'] = "images/icon_website/" . $icon2;
        }
        if($request->icon3){
            File::delete(public_path($setting->icon3));
            $icon3 = '2' . time() . $request->icon3->getClientOriginalName();
            $request->icon3->move(public_path('images/icon_website/'), $icon3);
            $data['icon3'] = "images/icon_website/" . $icon3;
        }

        Setting::where('id',1)->update($data);
        return redirect()->back()->with('success','Data berhasil diubah');
    }
}
