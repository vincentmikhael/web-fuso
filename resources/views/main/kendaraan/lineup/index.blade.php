@extends('layouts.main') 
@section('content') 
<div class="page-product" id="wrapper-product">
    <section class="breadcrumb-wrapper">
        <div class="container">
            <div class="top">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Beranda</a></li><li class="breadcrumb-item active" aria-current="page">{{$lineup->nama}}</li></ol>            </nav>
            </div>
            <div class="bottom">
                <div class="pages-title">{{$lineup->nama}}</div>
            </div>
        </div>
    </section>
        
    <section style="background-color: rgb(161, 127, 2)" class="product-detail-images-wrapper">
        <div class="image-top">
            <img src="{{asset($lineup->banner)}}" class="w-100" alt="{{$lineup->nama}}" />
        </div>
        <div class="image-middle py-5 theta-carousel-wrapper height-full height-full-mobile">
            <div class="container brand-container mb-4">
                <div class="brand-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row no-gutters row-brand mb-3">
                                <div class="col-lg-auto col-6 pr-3 col-left">
                                    <div class="diesel-type">
                                        <img src="../../wp-content/themes/miratfuso/img/Canter-New20203.png" class="img-fluid" alt="{{$lineup->nama}}" />
                                    </div>
                                    <div class="type light">{{$lineup->nama}}</div>
                                </div>
                                <div class="col-6 col-lg pl-3 col-right border-left">
                                    <div class="muri">
                                        <img src="../../wp-content/themes/miratfuso/img/muri71.png" class="img-fluid" alt="{{$lineup->nama}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row row-brand">
                                <div class="col">
                                    <div class="box-detail box-red">
                                        <div class="img-wrapper mr-2 2">
                                            <img src="../../wp-content/themes/miratfuso/img/speed212.png" alt="SUPER ECONOMICAL" />
                                        </div>
                                        <div class="text">{{$lineup->kategori}}</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="box-detail box-yellow">
                                        <div class="text">{{$lineup->ps}}PS | {{$lineup->ban}} BAN</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-detail" class="owl-wrapper theta-product-post">
                @forelse ($lineup_slider as $item)
                <div class="ex-item">
                    <img src="{{asset($item->gambar)}}" alt="{{$item->text}}" />
                    <div class="item-name text-right">
                        <div class="container">
                            <div class="content-name">{{$item->text}}</div>
                        </div>
                    </div>
                </div>
                @empty
                    
                @endforelse
                
            </div>
        </div>
    </section>
    
    {{-- <section class="product-detail-hotspot">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="images-hotspot-wrapper text-center">
                        <div id="hotspotImg" class="responsive-hotspot-wrap hotspot-hover">
                            <img src="../../wp-content/themes/miratfuso/img/chassis-FE-711.png" alt="Canter FE 71" class="img-fluid img-responsive" />
                            <div class="hot-spot" x="480" y="70">
                                <div class="circle"></div>
                                <div class="inner-circle"></div>
                                <div class="tooltip position-top bg-white-hotspot">
                                    <div class="img-row">
                                        <img src="../../wp-content/themes/miratfuso/img/kabin-jungkit7.jpg" alt="KABIN JUNGKIT" />
                                    </div>
                                    <div class="text-row">
                                        <h4>KABIN JUNGKIT</h4>
                                        <p>Mudah dalam pemeriksaan dan perawatan mesin.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="hot-spot" x="800" y="310">
                                <div class="circle"></div>
                                <div class="inner-circle"></div>
                                <div class="tooltip position-left bg-white-hotspot">
                                    <div class="img-row">
                                        <img src="../../wp-content/themes/miratfuso/img/inspection-lid.png" alt="INSPECTION LID" />
                                    </div>
                                    <div class="text-row">
                                        <h4>INSPECTION LID</h4>
                                        <p>Berada di bagian bawah jok penumpang, pengecekan mesin lebih mudah</p>
                                    </div>
                                </div>
                            </div>
                            <div class="hot-spot" x="510" y="630">
                                <div class="circle"></div>
                                <div class="inner-circle"></div>
                                <div class="tooltip position-bottom bg-white-hotspot">
                                    <div class="img-row">
                                        <img src="../../wp-content/themes/miratfuso/img/hotspot-fitur-FM-65L-chassis-kuat31.jpg" alt="CHASSIS KOKOH" />
                                    </div>
                                    <div class="text-row">
                                        <h4>CHASSIS KOKOH</h4>
                                        <p>Chasis kokoh, tangguh dan tahan lama</p>
                                    </div>
                                </div>
                            </div>
                            <div class="hot-spot" x="930" y="400">
                                <div class="circle"></div>
                                <div class="inner-circle"></div>
                                <div class="tooltip position-bottom bg-white-hotspot">
                                    <div class="img-row">
                                        <img src="../../wp-content/themes/miratfuso/img/tangki2.png" alt="TANGKI RADIATOR" />
                                    </div>
                                    <div class="text-row">
                                        <h4>TANGKI RADIATOR</h4>
                                        <p>Posisi di bagian luar sehingga mudah di kontrol</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    
    <section class="spesifikasi-wrapper py-5">
        <div class="container">
          <div class="top-title">Spesifikasi</div>
          <div class="accordion-wrapper">
            @foreach ($lineup_spesifikasi as $idx => $item)
            <div class="accordion">
                <div class="accordion-title">
                  <div class="title mr-auto">{{$idx}}</div>
                  <div class="icon-wrapper ml-auto">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="accordion-content" style="display: none;">
                    @foreach ($item as $data)
                    <div class="row row-spec no-gutters">
                        <div class="col-lg-4 col-4">{{$data['text1']}}</div>
                        <div class="col-lg-4 col-4 text-center">{{$data['text2']}}</div>
                        <div class="col-lg-4 col-4 text-center">{{$data['text3']}}</div>
                      </div>
                    @endforeach
                  
                </div>
              </div>
            @endforeach
            
          </div>
        </div>
      </section>
    
    <div class="float-sidemenu">
        <div class="sidemenu-item">
            <a href="../../compare/index.html" class="sidemenu-link">
                <span class="material-symbols-outlined">sync</span>
                <div class="sidemenu-name">Compare</div>
            </a>
        </div>
        <div class="sidemenu-item">
            <div class="dropdown">
                <a class="sidemenu-link" data-toggle="dropdown">
                    <span class="material-symbols-outlined">share</span>
                    <div class="sidemenu-name">Share</div>
                </a>
                <ul class="dropdown-menu dropdown-sidemenu">
                    <li><a href="http://www.facebook.com/share.php?u={{request()->fullUrl()}}/&amp;t=Canter%20FE%2071" target="_blank"><i class="fa fa-facebook mr-2" aria-hidden="true"></i> FACEBOOK</a></li>
                    <li><a href="http://twitter.com/intent/tweet?url={{request()->fullUrl()}}/&amp;text=Canter%20FE%2071&amp;hashtags=Canter%20FE%2071&amp;hashtags=FUSO&amp;hashtags=Mitsubishi" target="_blank"><i class="fa fa-twitter mr-2" aria-hidden="true"></i> TWITTER</a></li>
                </ul>
            </div>
        </div>
        <div class="sidemenu-item">
            <a href="/dealer" class="sidemenu-link">
                <span class="material-symbols-outlined">location_on</span>
                <div class="sidemenu-name">Dealer</div>
            </a>
        </div>
        <div class="sidemenu-item">
            <a href="{{asset($lineup->brosur)}}" download="" target="_blank" class="sidemenu-link">
                <span class="material-symbols-outlined">picture_as_pdf</span>
                <div class="sidemenu-name">Download</div>
            </a>
        </div>
    </div>
        
    
    
    </div>
@endsection