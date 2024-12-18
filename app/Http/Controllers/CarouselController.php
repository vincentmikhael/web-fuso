<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarouselController extends Controller
{
    public function index(){
        $banner = Banner::all();
        $youtube = Youtube::all();
        return view('dashboard/carousel',compact('banner','youtube'));
    }

    public function add_banner(Request $request){
        $data = [];
        // Banner::truncate();
        // File::deleteDirectory(public_path('images/banner'));
        foreach($request->item as $idx => $item){
            if(!$item['id']){
                if($item['background']){
                    $imageName = $idx + time().'.'.$item['background']->extension();
                    $item['background']->move(public_path('images/banner/'), $imageName);
                }
                if($item['background_mobile']){
                    $imageName2 = $idx + time().'.'.$item['background_mobile']->extension();
                    $item['background_mobile']->move(public_path('images/banner/'), $imageName);
                }
                $data[] = [
                    "background" => $imageName ? 'images/banner/'.$imageName : '',
                    "background_mobile" => $imageName ? 'images/banner/'.$imageName2 : ''
                ];
            }else{
                $updated = [];
                if(isset($item['background'])){
                    $banner = Banner::where('id',$item['id'])->first();
                    File::delete(public_path($banner->background));
                    $imageName = $idx + time().'.'.$item['background']->extension();
                    $item['background']->move(public_path('images/banner/'), $imageName);
                    $updated["background"] ='images/banner/' . $imageName;
                }
                if(isset($item['background_mobile'])){
                    $banner = Banner::where('id',$item['id'])->first();
                    File::delete(public_path($banner->background_mobile));
                    $imageName = $idx + time().'.'.$item['background_mobile']->extension();
                    $item['background_mobile']->move(public_path('images/banner/'), $imageName);
                    $updated["background_mobile"] ='images/banner/' . $imageName;
                }
                if(count($updated) > 0){
                    Banner::where('id',$item['id'])->update($updated);
                }
                
            }
        }

        Banner::insert($data);
        return redirect()->back()->with('success','Data berhasil ditambahkan');
    }

    public function add_youtube(Request $request){
        $data = [];
        Youtube::truncate();
        foreach($request->item as $item){
            $data[] = [
                "link" => $item
            ];
        }
        Youtube::insert($data);
        return redirect()->back()->with('success','Link embed youtube berhasil ditambahkan');
    }

    public function delete_banner($id){
        $banner = Banner::where('id',$id)->first();
        File::delete(public_path('images/banner/'.$banner->background));
        Banner::destroy($id);
        return redirect()->back()->with('success','Data berhasil dihapus');
    }
}
