<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    public function index(){
        $cabang = Cabang::all();
        return view('dashboard/cabang/index',compact('cabang'));
    }

    public function add(){
        return view('dashboard/cabang/add');
    }

    public function edit($id){
        $cabang = Cabang::find($id);
        return view('dashboard/cabang/edit',compact('cabang'));
    }

    public function add_action(Request $request){
        $data = $request->except(['_token']);
        Cabang::insert($data);

        return redirect()->to('/cabang')->with('success','Data berhasil ditambahkan');
    }

    public function update(Request $request,$id){
        $data = $request->except(['_token']);
        Cabang::where('id',$id)->update($data);
        return redirect()->to('/cabang')->with('success','Data berhasil diubah');
    }

    public function delete($id){
        Cabang::destroy($id);
        return redirect()->to('/cabang')->with('success','Data berhasil dihapus');
    }

    public function show(Request $request){
        $cabang = Cabang::all();
        return view('main/dealer/index',compact('cabang'));
    }

    public function api(Request $request){
        $cabang = Cabang::query();
        if($request->get('kota')){
            $cabang->where('kota','=',$request->get('kota'));
        }
        return $cabang->get();
    }
}
