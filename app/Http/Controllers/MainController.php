<?php

namespace App\Http\Controllers;

use App\Models\Aftersales\Maintenance;
use App\Models\Banner;
use App\Models\Berita;
use App\Models\Kendaraan\Kendaraan;
use App\Models\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        $banner = Banner::all();
        $youtube = Youtube::all();
        $berita = Berita::where('kategori','Fuso Update')->limit(3)->get();
        $pers = Berita::where('kategori','Siaran Pers')->limit(3)->get();
        $kendaraan = Kendaraan::all();
        $sejarah = DB::table('sejarah_perusahaan')->first();
        return view('welcome',compact('banner','youtube','berita','pers','kendaraan','sejarah'));
    }
}
