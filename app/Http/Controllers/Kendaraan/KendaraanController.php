<?php

namespace App\Http\Controllers\Kendaraan;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan\Aksesoris;
use App\Models\Kendaraan\Exterior;
use App\Models\Kendaraan\Interior;
use App\Models\Kendaraan\Kendaraan;
use App\Models\Kendaraan\KendaraanSlider;
use App\Models\Kendaraan\Lineup;
use App\Models\Kendaraan\Performance;
use App\Models\Kendaraan\Safety;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class KendaraanController extends Controller
{
    public function index(){
        $kendaraan = Kendaraan::all();
        return view('dashboard/kendaraan/index',compact('kendaraan'));
    }

    public function add(){
        return view('dashboard/kendaraan/add');
    }

    public function edit($id){
        $kendaraan = Kendaraan::find($id);
        $kendaraan_slider = KendaraanSlider::where('kendaraan_id',$id)->get();
        return view('dashboard/kendaraan/edit',compact('kendaraan','kendaraan_slider'));
    }
    public function add_action(Request $request){
        $data = $request->except(['_token','item']);

        $gambar = '1' . time() . $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('images/gambar_kendaraan/'), $gambar);
        $data['gambar'] = "images/gambar_kendaraan/" . $gambar;

        $foto_fitur_lengkap = '3' . time() . $request->foto_fitur_lengkap->getClientOriginalName();
        $request->foto_fitur_lengkap->move(public_path('images/gambar_kendaraan/'), $foto_fitur_lengkap);
        $data['foto_fitur_lengkap'] = "images/gambar_kendaraan/" . $foto_fitur_lengkap;

        $foto_mesin_canggih = '4' . time() . $request->foto_mesin_canggih->getClientOriginalName();
        $request->foto_mesin_canggih->move(public_path('images/gambar_kendaraan/'), $foto_mesin_canggih);
        $data['foto_mesin_canggih'] = "images/gambar_kendaraan/" . $foto_mesin_canggih;

        $foto_chasis = '5' . time() . $request->foto_chasis->getClientOriginalName();
        $request->foto_chasis->move(public_path('images/gambar_kendaraan/'), $foto_chasis);
        $data['foto_chasis'] = "images/gambar_kendaraan/" . $foto_chasis;

        $data['slug'] = Str::slug($data['nama'],'-');

        $id = Kendaraan::insertGetId($data);

        $data2 = [];
        foreach($request->item as $idx => $item){
            $background = '';

            $bg = (6 + $idx) . time() . $item['background']->getClientOriginalName();
            $item['background']->move(public_path('images/gambar_kendaraan/'), $bg);
            $background = "images/gambar_kendaraan/" . $bg;

            $data2[] = [
                'judul' => $item['judul'],
                'deskripsi' => $item['deskripsi'],
                'background' => $background,
                'kendaraan_id' => $id
            ];
        } 
        KendaraanSlider::insert($data2);   
        return redirect()->to('/kendaraan')->with('success','Data berhasil ditambahkan');
    }

    public function update(Request $request,$id){
        $data = $request->except(['_token','item','id']);
        $kendaraan_data = Kendaraan::find($id);
        
        if($request->gambar){
            File::delete(public_path($kendaraan_data->gambar));
            $gambar = '1' . time() . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/gambar_kendaraan/'), $gambar);
            $data['gambar'] = "images/gambar_kendaraan/" . $gambar;
        }
        
        if($request->foto_fitur_lengkap){
            File::delete(public_path($kendaraan_data->foto_fitur_lengkap));
            $foto_fitur_lengkap = '3' . time() . $request->foto_fitur_lengkap->getClientOriginalName();
            $request->foto_fitur_lengkap->move(public_path('images/gambar_kendaraan/'), $foto_fitur_lengkap);
            $data['foto_fitur_lengkap'] = "images/gambar_kendaraan/" . $foto_fitur_lengkap;
        }
        
        if($request->foto_mesin_canggih){
            File::delete(public_path($kendaraan_data->foto_mesin_canggih));
            $foto_mesin_canggih = '4' . time() . $request->foto_mesin_canggih->getClientOriginalName();
            $request->foto_mesin_canggih->move(public_path('images/gambar_kendaraan/'), $foto_mesin_canggih);
            $data['foto_mesin_canggih'] = "images/gambar_kendaraan/" . $foto_mesin_canggih;
        }
        
        if($request->foto_chasis){
            File::delete(public_path($kendaraan_data->foto_chasis));
            $foto_chasis = '5' . time() . $request->foto_chasis->getClientOriginalName();
            $request->foto_chasis->move(public_path('images/gambar_kendaraan/'), $foto_chasis);
            $data['foto_chasis'] = "images/gambar_kendaraan/" . $foto_chasis;
        }
        
        $data['slug'] = Str::slug($data['nama'],'-');

        Kendaraan::where('id',$id)->update($data);

        $data2 = [];
        foreach($request->item as $idx => $item){
            
            if(!$item['id']){
                $background = '';
                $bg = (6 + $idx) . time() . $item['background']->getClientOriginalName();
                $item['background']->move(public_path('images/gambar_kendaraan/'), $bg);
                $background = "images/gambar_kendaraan/" . $bg;
    
                $data2[] = [
                    'judul' => $item['judul'],
                    'deskripsi' => $item['deskripsi'],
                    'background' => $background,
                    'kendaraan_id' => $id
                ];
            }else{
                $updated = [
                    'judul' => $item['judul'],
                    'deskripsi' => $item['deskripsi'],
                    'kendaraan_id' => $id
                ];
                if(isset($item['background'])){
                    $slider = KendaraanSlider::find($item['id']);
                    File::delete(public_path($slider->background));
                    $bg = (6 + $idx) . time() . $item['background']->getClientOriginalName();
                    $item['background']->move(public_path('images/gambar_kendaraan/'), $bg);
                    $updated['background'] = "images/gambar_kendaraan/" . $bg;
                }
                KendaraanSlider::where('id',$item['id'])->update($updated);
            }
        } 

        if(count($data2) > 0){
            KendaraanSlider::insert($data2);   
        }
        
        return redirect()->to('/kendaraan')->with('success','Data berhasil ditambahkan');
    }

    public function delete($id){
        $kendaraan = Kendaraan::where('id',$id)->first();
        $slider = KendaraanSlider::where('kendaraan_id',$id)->get();
        File::delete(public_path($kendaraan->gambar));
        File::delete(public_path($kendaraan->gambar2));
        File::delete(public_path($kendaraan->foto_fitur_lengkap));
        File::delete(public_path($kendaraan->foto_mesin_canggih));
        File::delete(public_path($kendaraan->foto_chasis));

        foreach($slider as $item){
            File::delete(public_path($item->background));
            KendaraanSlider::destroy($item->id);
        }


        Kendaraan::destroy($id);
        return redirect()->to('/kendaraan')->with('success','Data berhasil dihapus');
    }

    public function delete_slider($id){
        $slider = KendaraanSlider::find($id);
        File::delete(public_path($slider->background));

        KendaraanSlider::destroy($id);
        return redirect()->back()->with('success','Data berhasil dihapus');
    }
    
    public function show($slug){
        $kendaraan = Kendaraan::where('slug',$slug)->first();
        $kendaraan_slider = KendaraanSlider::where('kendaraan_id',$kendaraan->id)->get();
        return view('main/kendaraan/index',compact('kendaraan','kendaraan_slider','slug'));
    }
}
