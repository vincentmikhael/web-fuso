<?php

use App\Http\Controllers\Aftersales\AksesorisController;
use App\Http\Controllers\Aftersales\BodicatController;
use App\Http\Controllers\Aftersales\CmsSparepartController;
use App\Http\Controllers\Aftersales\PurnajualController;
use App\Http\Controllers\Aftersales\ServiceController;
use App\Http\Controllers\Aftersales\SparepartController;
use App\Http\Controllers\Aftersales\SparepartKategoriController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\Kendaraan\ExteriorController;
use App\Http\Controllers\Kendaraan\InteriorController;
use App\Http\Controllers\Kendaraan\KendaraanAksesorisController;
use App\Http\Controllers\Kendaraan\KendaraanController;
use App\Http\Controllers\Kendaraan\LineupController;
use App\Http\Controllers\Kendaraan\PerformaceController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\Karir\KarirApplyController;
use App\Http\Controllers\Karir\KarirController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/layanan/myfuso',function(){
    return view('main/aftersales/myfuso');
});
Route::get('/contact-us',function(){
    return view('main/contact-us');
});
Route::get('/main-karir',function(){
    return view('main/karir/main');
});
Route::get('/', [MainController::class,'index']);
Route::get('/service/telematics',function(){
    return view('main.aftersales.telematics');
});
Route::get('/tentang-kami/sejarah-perusahaan',[SejarahController::class,'show']);


Route::middleware(['auth'])->group(function () {
    //After Login the routes are accept by the loginUsers...
    Route::get('/carousel',[CarouselController::class,'index']);
Route::post('/banner',[CarouselController::class,'add_banner']);
Route::get('/banner/{id}',[CarouselController::class,'delete_banner']);
Route::post('/youtube',[CarouselController::class,'add_youtube']);

Route::get('/karir',[KarirController::class,'index']);
Route::get('/karir/add',[KarirController::class,'add']);
Route::post('/karir/add',[KarirController::class,'add_action']);
Route::get('/karir/edit/{id}',[KarirController::class,'edit']);
Route::post('/karir/edit/{id}',[KarirController::class,'update']);
Route::get('/karir/delete/{id}',[KarirController::class,'delete']);

Route::get('/cms',[BeritaController::class,'index']);
Route::get('/cms/add',[BeritaController::class,'add']);
Route::post('/cms/add',[BeritaController::class,'add_action']);
Route::get('/cms/edit/{id}',[BeritaController::class,'edit']);
Route::post('/cms/edit/{id}',[BeritaController::class,'update']);
Route::get('/cms/delete/{id}',[BeritaController::class,'delete']);
Route::post('/uploadGambarFormBerita',[BeritaController::class,'image_upload'])->name('ckeditor.upload');
Route::post('/deleteGambarFormBerita',[BeritaController::class,'image_delete'])->name('ckeditor.deleteImage');

Route::get('/kendaraan',[KendaraanController::class,'index']);
Route::get('/kendaraan/add',[KendaraanController::class,'add']);
Route::post('/kendaraan/add',[KendaraanController::class,'add_action']);
Route::get('/kendaraan/edit/{id}',[KendaraanController::class,'edit']);
Route::post('/kendaraan/edit/{id}',[KendaraanController::class,'update']);
Route::get('/kendaraan/delete/{id}',[KendaraanController::class,'delete']);
Route::get('/kendaraan_slider/delete/{id}',[KendaraanController::class,'delete_slider']);

Route::get('/lineup_spesifikasi/delete/{id}',[LineupController::class,'delete_spesifikasi']);
Route::get('/lineup_slider/delete/{id}',[LineupController::class,'delete_slider']);

Route::get('/kendaraan/{id_kendaraan}/lineup',[LineupController::class,'index']);
Route::get('/kendaraan/{id_kendaraan}/lineup/add',[LineupController::class,'add']);
Route::post('/kendaraan/{id_kendaraan}/lineup/add',[LineupController::class,'add_action']);
Route::get('/kendaraan/{id_kendaraan}/lineup/edit/{id_safety}',[LineupController::class,'edit']);
Route::post('/kendaraan/{id_kendaraan}/lineup/edit/{id_safety}',[LineupController::class,'update']);
Route::get('/kendaraan/{id_kendaraan}/lineup/delete/{lineup_id}',[LineupController::class,'delete']);

Route::get('/cabang',[CabangController::class,'index']);
Route::get('/cabang/add',[CabangController::class,'add']);
Route::post('/cabang/add',[CabangController::class,'add_action']);
Route::get('/cabang/edit/{id}',[CabangController::class,'edit']);
Route::post('/cabang/edit/{id}',[CabangController::class,'update']);
Route::get('/cabang/delete/{id}',[CabangController::class,'delete']);

Route::get('/office',[OfficeController::class,'index']);
Route::get('/office/add',[OfficeController::class,'add']);
Route::post('/office/add',[OfficeController::class,'add_action']);
Route::get('/office/edit/{id}',[OfficeController::class,'edit']);
Route::post('/office/edit/{id}',[OfficeController::class,'update']);
Route::get('/office/delete/{id}',[OfficeController::class,'delete']);

Route::get('/service',[ServiceController::class,'index']);
Route::post('/service',[ServiceController::class,'add_action']);


Route::get('/cms_sparepart',[CmsSparepartController::class,'index']);
Route::post('/cms_sparepart',[CmsSparepartController::class,'add_action']);

Route::get('/aftersales/sparepart/{id}',[CmsSparepartController::class,'detail']);


Route::get('/purnajual',[PurnajualController::class,'index']);
Route::post('/purnajual',[PurnajualController::class,'add_action']);


Route::get('/setting',[SettingController::class,'index']);
Route::post('/setting',[SettingController::class,'add_action']);

Route::get('/users',[AuthController::class,'index']);
Route::get('/users/add',[AuthController::class,'add']);
Route::post('/users/add',[AuthController::class,'add_action']);
Route::get('/users/edit/{id}',[AuthController::class,'edit']);
Route::post('/users/edit/{id}',[AuthController::class,'update']);
Route::get('/users/delete/{id}',[AuthController::class,'delete']);
});


Route::get('/layanan/service',[ServiceController::class,'show']);
Route::get('/layanan/purnajual',[PurnajualController::class,'show']);
Route::get('/layanan/sparepart',[CmsSparepartController::class,'show']);

Route::get('/list-karir',[KarirController::class,'show']);
Route::get('/karir/pelamar/{id}',[KarirController::class,'pelamar']);
Route::get('/list-karir/{slug}',[KarirApplyController::class,'index']);
Route::post('/list-karir/{slug}',[KarirApplyController::class,'add_action']);

Route::get('/berita',[BeritaController::class,'list']);
Route::get('/berita/{slug}',[BeritaController::class,'show']);



Route::get('/fuso/{slug}',[KendaraanController::class,'show']);
Route::get('/fuso/{slug}/{lineup_slug}',[LineupController::class,'show']);

Route::get('/kendaraan/{id_kendaraan}/aksesoris',[KendaraanAksesorisController::class,'index']);
Route::get('/kendaraan/{id_kendaraan}/aksesoris/add',[KendaraanAksesorisController::class,'add']);
Route::post('/kendaraan/{id_kendaraan}/aksesoris/add',[KendaraanAksesorisController::class,'add_action']);
Route::get('/kendaraan/{id_kendaraan}/aksesoris/edit/{id_aksesoris}',[KendaraanAksesorisController::class,'edit']);
Route::post('/kendaraan/{id_kendaraan}/aksesoris/edit/{id_aksesoris}',[KendaraanAksesorisController::class,'update']);
Route::get('/kendaraan/{id_kendaraan}/aksesoris/delete/{id_aksesoris}',[KendaraanAksesorisController::class,'delete']);


Route::get('/kendaraan/{id_kendaraan}/performance',[PerformaceController::class,'index']);
Route::get('/kendaraan/{id_kendaraan}/performance/add',[PerformaceController::class,'add']);
Route::post('/kendaraan/{id_kendaraan}/performance/add',[PerformaceController::class,'add_action']);
Route::get('/kendaraan/{id_kendaraan}/performance/edit/{id_safety}',[PerformaceController::class,'edit']);
Route::post('/kendaraan/{id_kendaraan}/performance/edit/{id_safety}',[PerformaceController::class,'update']);
Route::get('/kendaraan/{id_kendaraan}/performance/delete/{id_safety}',[PerformaceController::class,'delete']);

Route::get('/kendaraan/{id_kendaraan}/interior',[InteriorController::class,'index']);
Route::get('/kendaraan/{id_kendaraan}/interior/add',[InteriorController::class,'add']);
Route::post('/kendaraan/{id_kendaraan}/interior/add',[InteriorController::class,'add_action']);
Route::get('/kendaraan/{id_kendaraan}/interior/edit/{id_safety}',[InteriorController::class,'edit']);
Route::post('/kendaraan/{id_kendaraan}/interior/edit/{id_safety}',[InteriorController::class,'update']);
Route::get('/kendaraan/{id_kendaraan}/interior/delete/{id_safety}',[InteriorController::class,'delete']);

Route::get('/kendaraan/{id_kendaraan}/exterior',[ExteriorController::class,'index']);
Route::get('/kendaraan/{id_kendaraan}/exterior/add',[ExteriorController::class,'add']);
Route::post('/kendaraan/{id_kendaraan}/exterior/add',[ExteriorController::class,'add_action']);
Route::get('/kendaraan/{id_kendaraan}/exterior/edit/{id_safety}',[ExteriorController::class,'edit']);
Route::post('/kendaraan/{id_kendaraan}/exterior/edit/{id_safety}',[ExteriorController::class,'update']);
Route::get('/kendaraan/{id_kendaraan}/exterior/delete/{id_safety}',[ExteriorController::class,'delete']);




Route::get('/dealer',[CabangController::class,'show']);
Route::get('/api/dealer',[CabangController::class,'api']);

Route::get('/sejarah_perusahaan',[SejarahController::class,'index']);
Route::post('/sejarah_perusahaan',[SejarahController::class,'add_action']);
Route::get('/sejarah_perusahaan_timeline/{id}',[SejarahController::class,'delete']);



Route::get('/sparepart_kategori',[SparepartKategoriController::class,'index']);
Route::get('/sparepart_kategori/add',[SparepartKategoriController::class,'add']);
Route::post('/sparepart_kategori/add',[SparepartKategoriController::class,'add_action']);
Route::get('/sparepart_kategori/edit/{id}',[SparepartKategoriController::class,'edit']);
Route::post('/sparepart_kategori/edit/{id}',[SparepartKategoriController::class,'update']);
Route::get('/sparepart_kategori/delete/{id}',[SparepartKategoriController::class,'delete']);

Route::get('/sparepart',[SparepartController::class,'index']);
Route::get('/sparepart/add',[SparepartController::class,'add']);
Route::post('/sparepart/add',[SparepartController::class,'add_action']);
Route::get('/sparepart/edit/{id}',[SparepartController::class,'edit']);
Route::post('/sparepart/edit/{id}',[SparepartController::class,'update']);
Route::get('/sparepart/delete/{id}',[SparepartController::class,'delete']);


// Route::get('/kontak',[KontakController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register',function(){

});