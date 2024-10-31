<?php

namespace App\Http\Controllers\Kendaraan;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Kendaraan\Kendaraan;
use App\Models\Kendaraan\Lineup;
use App\Models\Kendaraan\LineupSlider;
use App\Models\Kendaraan\LineupSlider2;
use App\Models\Kendaraan\LineupSpesifikasi;
use App\Models\Kendaraan\LineupWarna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class LineupController extends Controller
{
    public function index($id_kendaraan){
        $lineup = Lineup::where('kendaraan_id',$id_kendaraan)->get();
        return view('dashboard/kendaraan/lineup/index',compact('lineup','id_kendaraan'));
    }

    public function add($id_kendaraan){
        return view('dashboard/kendaraan/lineup/add',compact('id_kendaraan'));
    }

    public function show($slug,$lineup_slug){
        $lineup = Lineup::where('slug',$lineup_slug)->first();
        $lineup_slider = LineupSlider::where('lineup_id',$lineup->id)->get();
        $lineup_slider2 = LineupSlider2::where('lineup_id',$lineup->id)->get();
        $lineup_spek = LineupSpesifikasi::where('lineup_id',$lineup->id)->get();
        $lineup_spesifikasi = [];
        foreach($lineup_spek as $item){
            $lineup_spesifikasi[$item->jenis][] = [
                'text1' => $item->text1,
                'text2' => $item->text2,
                'text3' => $item->text3,
            ];
        }
        return view('main/kendaraan/lineup/index',compact('lineup','lineup_slider','lineup_spesifikasi','lineup_slider2'));
    }

    public function edit($id_kendaraan,$id_lineup){
        $lineup = Lineup::find($id_lineup);
        $lineup_slider = LineupSlider::where('lineup_id',$id_lineup)->get();
        $lineup_slider2 = LineupSlider2::where('lineup_id',$id_lineup)->get();
        $lineup_spesifikasi = LineupSpesifikasi::where('lineup_id',$id_lineup)->get();
        return view('dashboard/kendaraan/lineup/edit',compact('id_kendaraan','lineup','lineup_slider','lineup_spesifikasi','lineup_slider2'));
    }

    public function add_action(Request $request,$id_kendaraan){
        $insert = $request->except(['_token','thumbnail','gambar','banner','item','spesifikasi','item2']);
        $insert['kendaraan_id'] = $id_kendaraan;
        $insert['created_by'] = Auth::user()->username;

        $brosur = '1' . time() . $request->brosur->getClientOriginalName();
        $request->brosur->move(public_path('brosur/lineup_kendaraan/'), $brosur);
        $insert['brosur'] = "brosur/lineup_kendaraan/" . $brosur;

        $thumbnail = '2' . time() . $request->thumbnail->getClientOriginalName();
        $request->thumbnail->move(public_path('images/lineup_kendaraan/'), $thumbnail);
        $insert['thumbnail'] = "images/lineup_kendaraan/" . $thumbnail;

        $banner = '2' . time() . $request->banner->getClientOriginalName();
        $request->banner->move(public_path('images/lineup_kendaraan/'), $banner);
        $insert['banner'] = "images/lineup_kendaraan/" . $banner;
        
        if($id_kendaraan == 1){
            $insert['kategori'] = 'Light Duty';
        }else if($id_kendaraan == 2){
            $insert['kategori'] = 'Medium Duty';
        }else if($id_kendaraan == 3){
            $insert['kategori'] = 'Tractor Duty';
        }

        $insert['slug'] = Str::slug($request->nama,'-');
        $id = Lineup::insertGetId($insert);

        $data = [];
        foreach($request->item as $idx => $item){
            $gambar = $idx . time() . $item['gambar']->getClientOriginalName();
            $item['gambar']->move(public_path('images/lineup_kendaraan/'), $gambar);

            $data[] = [
                "gambar" => "images/lineup_kendaraan/" . $gambar,
                "text" => $item['text'],
                "lineup_id" => $id,
                "judul" => $item['judul']
            ];
        }
        LineupSlider::insert($data);

        $data2 = [];
        foreach($request->item2 as $idx => $item){
            $gambar = $idx . time() . $item['gambar']->getClientOriginalName();
            $item['gambar']->move(public_path('images/lineup_kendaraan/'), $gambar);

            $data2[] = [
                "gambar" => "images/lineup_kendaraan/" . $gambar,
                "text" => $item['text'],
                "lineup_id" => $id,
            ];
        }
        LineupSlider2::insert($data2);

        $spesifikasi = [];
        foreach($request->spesifikasi as $spek){
            $spesifikasi[] = [
                'jenis' => $spek['jenis'],
                'text1' => $spek['text1'],
                'text2' => $spek['text2'],
                'text3' => $spek['text3'],
                'lineup_id' => $id
            ];
        }

        LineupSpesifikasi::insert($spesifikasi);
        return redirect()->to('/kendaraan/'.$request->id_kendaraan.'/lineup')->with('success','Data berhasil ditambahkan');
    }

    public function update(Request $request,$id_kendaraan,$id_lineup){
        $insert = $request->except(['_token','thumbnail','gambar','banner','item','spesifikasi','item2']);
        $insert['kendaraan_id'] = $id_kendaraan;
        $insert['updated_by'] = Auth::user()->username;
        $lineup = Lineup::find($id_lineup);
        if($request->brosur){
            File::delete(public_path($lineup->brosur));
            $brosur = '1' . time() . $request->brosur->getClientOriginalName();
            $request->brosur->move(public_path('brosur/lineup_kendaraan/'), $brosur);
            $insert['brosur'] = "brosur/lineup_kendaraan/" . $brosur;
        }

        
        if($request->thumbnail){
            File::delete(public_path($lineup->thumbnail));
            $thumbnail = '2' . time() . $request->thumbnail->getClientOriginalName();
            $request->thumbnail->move(public_path('images/lineup_kendaraan/'), $thumbnail);
            $insert['thumbnail'] = "images/lineup_kendaraan/" . $thumbnail;
        }
        
        if($request->banner){
            File::delete(public_path($lineup->banner));
            $banner = '2' . time() . $request->banner->getClientOriginalName();
            $request->banner->move(public_path('images/lineup_kendaraan/'), $banner);
            $insert['banner'] = "images/lineup_kendaraan/" . $banner;
        }
        
        $insert['slug'] = Str::slug($request->nama,'-');
        Lineup::where('id',$id_lineup)->update($insert);

        $data = [];
        foreach($request->item as $idx => $item){
            if(!$item['id']){
                $gambar = $idx . time() . $item['gambar']->getClientOriginalName();
                $item['gambar']->move(public_path('images/lineup_kendaraan/'), $gambar);
    
                $data[] = [
                    "gambar" => "images/lineup_kendaraan/" . $gambar,
                    "text" => $item['text'],
                    "lineup_id" => $id_lineup,
                    'judul' => $item['judul']
                ];
            }else{
                $updated = [
                    "text" => $item['text'],
                    'judul' => $item['judul']
                ];
                if(isset($item['gambar'])){
                    $slider = LineupSlider::find($item['id']);
                    File::delete(public_path($slider->gambar));
                    $gambar = $idx . time() . $item['gambar']->getClientOriginalName();
                    $item['gambar']->move(public_path('images/lineup_kendaraan/'), $gambar);
                    $updated['gambar'] = 'images/lineup_kendaraan/' . $gambar;
                }
                
                LineupSlider::where('id',$item['id'])->update($updated);
            }
            
        }

        if(count($data) > 0){
            LineupSlider::insert($data);
        }

        $data2 = [];
        foreach($request->item2 as $idx => $item){
            if(!$item['id']){
                $gambar = $idx . time() . $item['gambar']->getClientOriginalName();
                $item['gambar']->move(public_path('images/lineup_kendaraan/'), $gambar);
    
                $data2[] = [
                    "gambar" => "images/lineup_kendaraan/" . $gambar,
                    "text" => $item['text'],
                    "lineup_id" => $id_lineup,
                ];
            }else{
                $updated = [
                    "text" => $item['text'],
                ];
                if(isset($item['gambar'])){
                    $slider = LineupSlider::find($item['id']);
                    $gambar = $idx . time() . $item['gambar']->getClientOriginalName();
                    $item['gambar']->move(public_path('images/lineup_kendaraan/'), $gambar);
                    $updated['gambar'] = 'images/lineup_kendaraan/' . $gambar;
                }
                
                LineupSlider::where('id',$item['id'])->update($updated);
            }
            
        }

        if(count($data2) > 0){
            LineupSlider2::insert($data2);
        }
        
        $spesifikasi_data = [];
        // dd($request->spesifikasi);
        foreach($request->spesifikasi as $spek){
            if(!$spek['id']){
                $spesifikasi_data[] = [
                    'jenis' => $spek['jenis'],
                    'text1' => $spek['text1'],
                    'text2' => $spek['text2'],
                    'text3' => $spek['text3'],
                    'lineup_id' => $id_lineup
                ];
            }else{
                $update = [
                    'jenis' => $spek['jenis'],
                    'text1' => $spek['text1'],
                    'text2' => $spek['text2'],
                    'text3' => $spek['text3'],
                ];
                LineupSpesifikasi::where('id',$spek['id'])->update($update);
            }
            
        }
        if(count($spesifikasi_data) > 0){
            LineupSpesifikasi::insert($spesifikasi_data);
        }
        

        return redirect()->to('/kendaraan/'.$request->id_kendaraan.'/lineup')->with('success','Data berhasil diubah');
    }

    public function delete($id_kendaraan,$lineup_id){
        $lineup = Lineup::find($lineup_id);

        File::delete(public_path($lineup->brosur));
        File::delete(public_path($lineup->thumbnail));
        File::delete(public_path($lineup->banner));

        $lineupWarna = LineupSlider::where('lineup_id',$lineup_id)->get();
        foreach($lineupWarna as $item){
    
            LineupSlider::destroy($item->id);
        }
        LineupSpesifikasi::where('lineup_id',$lineup_id)->delete();
        Lineup::destroy($lineup_id);
        return redirect()->to('/kendaraan/'.$id_kendaraan.'/lineup')->with('success','Data berhasil dihapus');
    }

    public function delete_spesifikasi($id){
        LineupSpesifikasi::destroy($id);
        return redirect()->back()->with('success','Data berhasil dihapus');
    }

    public function delete_slider($id){
        $lineup = LineupSlider::find($id);
        LineupSlider2::destroy($id);
        return redirect()->back()->with('success','Data berhasil dihapus');
    }
}
