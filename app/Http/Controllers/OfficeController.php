<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficeController extends Controller
{
    public function index(){
        $office = Office::all();
        return view('dashboard/office/index',compact('office'));
    }

    public function add(){
        return view('dashboard/office/add');
    }

    public function edit($id){
        $office = Office::find($id);
        return view('dashboard/office/edit',compact('office'));
    }

    public function add_action(Request $request){
        $data = $request->except(['_token']);
        $data['created_by'] = Auth::user()->username;
        Office::insert($data);

        return redirect()->to('/office')->with('success','Data berhasil ditambahkan');
    }

    public function update(Request $request,$id){
        $data = $request->except(['_token']);
        $data['updated_by'] = Auth::user()->username;
        Office::where('id',$id)->update($data);
        return redirect()->to('/office')->with('success','Data berhasil diubah');
    }

    public function delete($id){
        Office::destroy($id);
        return redirect()->to('/office')->with('success','Data berhasil dihapus');
    }

    public function show(Request $request){
        $office = Office::all();
        return view('main/dealer/index',compact('office'));
    }

    public function api(Request $request){
        $office = Office::query();
        if($request->get('kota')){
            $office->where('kota','=',$request->get('kota'));
        }
        return $office->get();
    }
}
