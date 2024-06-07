@extends('layouts.main') @section('content') <div class="page-category" id="wrapper-category">
    <section class="breadcrumb-wrapper">
      <div class="container">
        <div class="top">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/">BERANDA</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">{{$kendaraan->nama}}</li>
            </ol>
          </nav>
        </div>
        <div class="bottom">
          <div class="pages-title">Light Duty Truck</div>
        </div>
      </div>
    </section>
    <section class="product-category">
      <div class="height-full">
        <div class="top title-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="title border-bottom-image">
                  <h2>TRUK MUATAN RINGAN</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-img">
                <div class="img-wrapper product-category-top-image">
                  <img style="width: 100%;" src="{{asset($kendaraan->gambar)}}" alt="LIGHT DUTY" class="img-fluid" />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="product-detail">
                  <div class="title border-bottom-image mb-1">
                    <h5 class="f-24">Beban Muatan</h5>
                  </div>
                  <div class="title border-bottom-image">
                    <h2 class="mb-1">{{$kendaraan->muatan}}</h2>
                  </div>
                  <div class="icon-list text-center">
                    <div class="row no-gutters">
                      <div class="col-auto col-icon">
                        <div class="icon-wrapper">
                          <img src="/wp-content/themes/miratfuso/img/economis.png" alt="SUPER ECONOMICAL" class="img-fluid" />
                        </div>
                        <div class="icon-text bold">SUPER ECONOMICAL</div>
                      </div>
                      <div class="col-auto col-icon">
                        <div class="icon-wrapper">
                          <img src="/wp-content/themes/miratfuso/img/1-Superpower.png" alt="SUPER POWER" class="img-fluid" />
                        </div>
                        <div class="icon-text bold">SUPER POWER</div>
                      </div>
                      <div class="col-auto col-icon">
                        <div class="icon-wrapper">
                          <img src="/wp-content/themes/miratfuso/img/2-SuperSpeed.png" alt="SUPER SPEED" class="img-fluid" />
                        </div>
                        <div class="icon-text bold">SUPER SPEED</div>
                      </div>
                      <div class="col-auto col-icon">
                        <div class="icon-wrapper">
                          <img src="/wp-content/themes/miratfuso/img/3-SuperCapacity.png" alt="SUPER CAPACITY" class="img-fluid" />
                        </div>
                        <div class="icon-text bold">SUPER CAPACITY</div>
                      </div>
                      <div class="col-auto col-icon">
                        <div class="icon-wrapper">
                          <img src="/wp-content/themes/miratfuso/img/4-Bus.png" alt="BUS" class="img-fluid" />
                        </div>
                        <div class="icon-text bold">BUS</div>
                      </div>
                    </div>
                  </div>
                  <div class="text-bottom f-14 book d-none">Canter</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="category-tab-wrapper">
        <div class="container">
          <div class="tabs-title">
            <div class="top-title">
              <h2>VARIAN PRODUK</h2>
            </div>
            <nav>
              <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-semua-tab" data-toggle="tab" href="#nav-semua" role="tab" aria-controls="nav-semua" aria-selected="true">ALL</a>
                @forelse (getTipeLineup($kendaraan->id) as $idx => $item)
                <a class="nav-item nav-link" id="nav-{{$idx}}-tab" data-toggle="tab" href="#nav-{{$idx}}" role="tab" aria-controls="nav-{{$idx}}" aria-selected="false">{{$item}}</a>
                @empty
                    
                @endforelse
              </div>
            </nav>
          </div>
          
          <div class="tabs-content">
            <div class="tab-content" id="nav-tabContent">
                
              <div class="tab-pane fade show active" id="nav-semua" role="tabpanel" aria-labelledby="nav-semua-tab">
                <div class="row" id="page">
                    @forelse (getLineup($kendaraan->id,'') as $item)
                    <div class="col-lg-custom-5 col-4 text-center col-product">
                        <div class="img-wrapper">
                          <a href="/fuso/{{$slug}}/{{$item->slug}}">
                            <img width="300" height="300" src="{{asset($item->thumbnail)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Canter Espasio" loading="lazy" sizes="(max-width: 300px) 100vw, 300px" />
                          </a>
                        </div>
                        <div class="product-name mt-3">
                          <a href="/fuso/{{$slug}}/{{$item->slug}}">
                            <h3>{{$item->nama}}</h3>
                          </a>
                        </div>
                      </div>
                    @empty
                        
                    @endforelse
                  
                </div>
              </div>

              @forelse (getTipeLineup($kendaraan->id) as $idx => $item)
              <div class="tab-pane fade" id="nav-{{$idx}}" role="tabpanel" aria-labelledby="nav-{{$idx}}-tab">
                <div class="row">
                    @forelse (getLineup($kendaraan->id,$item) as $kend)
                    <div class="col-lg-custom-5 col-4 text-center col-product">
                        <div class="img-wrapper">
                          <a href="../../light-duty/canter-espasio/index.html">
                            <img width="300" height="300" src="{{asset($kend->thumbnail)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Canter Espasio" loading="lazy" sizes="(max-width: 300px) 100vw, 300px" />
                          </a>
                        </div>
                        <div class="product-name mt-3">
                          <a href="../../light-duty/canter-espasio/index.html">
                            <h3>{{$kend->nama}}</h3>
                          </a>
                        </div>
                      </div>
                    @empty
                        
                    @endforelse
                </div>
              </div>
              @empty
                  
              @endforelse
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="fitur-product">
      <div class="top">
        <div class="container">
          <div class="row no-gutters align-items-center">
            <div class="col-lg-9 col-left order-lg-2">
              <div class="img-wrapper img-opacity-none">
                <img src="/wp-content/themes/miratfuso/img/Box-Alumunium-hitam.png" alt="Fitur Lengkap" class="img-fluid" />
              </div>
            </div>
            <div class="col-lg-3 order-lg-1 col-right">
              <div class="title border-bottom-white">
                <h2>Fitur Lengkap</h2>
              </div>
              <div class="desc">{{$kendaraan->fitur_lengkap}}</div>
            </div>
          </div>
        </div>
        <div class="floating-images img-truck-wrapper">
          <img src="{{asset($kendaraan->foto_fitur_lengkap)}}" alt="Fitur Lengkap" />
        </div>
      </div>
      <div class="middle">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 col-left">
              <div class="img-part">
                <div class="img-wrapper text-right">
                  <img class="section_kendaraan" style="width: 100%" src="{{asset($kendaraan->foto_mesin_canggih)}}" alt="Mesin Canggih" />
                </div>
              </div>
            </div>
            <div class="col-lg col-right f-white">
              <div class="title">
                <div class="border-bottom-after">
                  <h2 class="f-white">Mesin Canggih</h2>
                </div>
              </div>
              <div class="subtitle"></div>
              <div class="desc">{{$kendaraan->mesin_canggih}}</div>
            </div>
          </div>
        </div>
      </div>
      <div class="top">
        <div class="container">
          <div class="row no-gutters align-items-center">
            <div class="col-lg-9 col-left order-lg-2">
              <div class="img-wrapper img-opacity-none">
                <img src="/wp-content/themes/miratfuso/img/Box-Alumunium-hitam.png" alt="Fitur Lengkap" class="img-fluid" />
              </div>
            </div>
            <div class="col-lg-3 order-lg-1 col-right">
              <div class="title border-bottom-white">
                <h2>Chasis Kokoh</h2>
              </div>
              <div class="desc">{{$kendaraan->chasis}}</div>
            </div>
          </div>
        </div>
        <div class="floating-images img-truck-wrapper">
          <img class="section_kendaraan" src="{{asset($kendaraan->foto_fitur_lengkap)}}" alt="Fitur Lengkap" />
        </div>
      </div>
    </section>
    <section class="fitur-interior">
      <div class="container">
        <div class="owl-interior-wrapper">
          <div class="owl-carousel owl-theme owl-fitur-interior"> @forelse ($kendaraan_slider as $item) <div class="item">
              <div class="img-wrapper desktop">
                <img src="{{asset($item->background)}}" alt="Tachometer" class="img-fluid" />
              </div>
              <div class="img-wrapper mobile">
                <img src="{{asset($item->background)}}" alt="Tachometer" class="img-fluid" />
              </div>
              {{-- <div class="img-wrapper mobile">
                              <img src="/wp-content/themes/miratfuso/img/bg-slide-fitur-light-duty-01-tachometer-mob11.jpg" alt="Tachometer" class="img-fluid" />
                          </div> --}}
              <div class="text-wrapper interior-list interior-list-right interior-mobile-bottom">
                <div class="title">
                  <div class="border-bottom-after f-white">
                    <h3 class="f-white">{{$item->judul}}</h3>
                  </div>
                </div>
                <div class="desc f-white f-14 book">{{$item->deskripsi}}</div>
              </div>
            </div> @empty @endforelse </div>
        </div>
      </div>
    </section>
  </div> @endsection