<?php

namespace App\Http\Controllers\Aftersales;

use App\Http\Controllers\Controller;
use App\Models\Aftersales\Service;
use App\Models\Kendaraan\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index(){
        $service = Service::first();
        return view('dashboard/aftersales/service/index',compact('service'));
    }

    public function add_action(Request $request){
        $data = $request->except(['_token','gambar']);

        Service::where('id',1)->update($data);
        return redirect()->back()->with('success','Data berhasil ditambahkan');
    }

    public function show(){
        $service = Service::first();
        // $kendaraan = Kendaraan::all();
        return view('main/aftersales/service',compact('service'));
    }
}
