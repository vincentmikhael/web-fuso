<?php

namespace App\Http\Controllers\Aftersales;

use App\Http\Controllers\Controller;
use App\Models\Aftersales\Purnajual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PurnajualController extends Controller
{
    public function index(){
        $purnajual = Purnajual::first();
        return view('dashboard/aftersales/purnajual/index',compact('purnajual'));
    }

    public function add_action(Request $request){
        $data = $request->except(['_token']);
        Purnajual::where('id',1)->update($data);
        return redirect()->back()->with('success','Data berhasil ditambahkan');
    }

    public function show(){
        $purnajual = Purnajual::first();
        return view('main/aftersales/purnajual',compact('purnajual'));
    }
}
