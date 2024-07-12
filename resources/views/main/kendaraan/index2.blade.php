@extends('layouts.main') 
@section('content') 
<main class="product-types">
    
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" data-wpel-link="internal">Beranda</a></li><li class="breadcrumb-item"><a href="#type">Produk</a></li><li class="breadcrumb-item active" aria-current="page">Light Duty</li>				
				
            </ol>
        </nav>
    </div>
</section>
    <section id="truck" class="truck">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section__title">
                        <h1>Truk Muatan Ringan<br>
Canter</h1>
<p>{{$kendaraan->deskripsi}}</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <img src="{{asset($kendaraan->gambar)}}" alt="">
                </div>
            </div>
            <div class="section__title section__title--white">
                
                <h2>{{$kendaraan->muatan}}</h2>
                
            </div>
        </div>
    </section>

    <section id="variant" class="variant">
        <div class="container">
            <div class="section__title section__title--white">
                <h2>
                    Varian Produk
                </h2>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li class="current" id="all">All</li>
                        @forelse (getTipeLineup($kendaraan->id) as $idx => $item)
                        <li id="{{$item}}">
                          <div class="variant__icon">
                              <img src="https://www.ktbfuso.co.id/wp-content/uploads/2023/02/logo-bus.webp" alt="bus">
                          </div>
                          {{$item}}</li>
                        @empty
                                
                        @endforelse
                                            </ul>
                </div>
                <div class="col-md-8">
                    <div id="variantFilterNav">

                        @forelse (getTipeLineup($kendaraan->id) as $idx => $item)
                        <div class="row variant__row" data-variant="{{$item}}">
                            <div class="variant__name">
                                <h3>
                                    {{$item}}                                    </h3>
                            </div>
                            @forelse (getLineup($kendaraan->id,$item) as $item2)
                            <div class="col-lg-4 col-6 variant__col">
                              <img src="{{asset($item2->thumbnail)}}" alt="{{$item2->nama}}">
                              <a class="stretched-link" href="/fuso/light-duty/{{$item2->slug}}" data-wpel-link="internal">
                                 {{$item2->nama}}                                            </a>

                          </div>
                            @empty
                                
                            @endforelse
       
              </div>
              @empty
                  
              @endforelse
            
                                            </div>
                </div>
            </div>
        </div>
    </section>

            <section class="feature feature" id="feature">
            <div class="container">

                                    <div class="row">
                        <div class="col-md-6 feature__description">
                            <div class="section__title">
                                <h2>Fitur Lengkap</h2>
<p>{{$kendaraan->fitur_lengkap ?? ''}}</p>
                            </div>
                        </div>
                        <div class="col-md-6 feature__images">
                            <img src="{{asset($kendaraan->foto_fitur_lengkap)}}" alt="Light Duty">
                        </div>
                    </div>
                                    <div class="row">
                        <div class="col-md-6 feature__description">
                            <div class="section__title">
                                <h2>Mesin Canggih</h2>
<p>{{$kendaraan->mesin_canggih ?? ''}}</p>
                            </div>
                        </div>
                        <div class="col-md-6 feature__images">
                            <img src="{{asset($kendaraan->mesin_canggih)}}" alt="Light Duty">
                        </div>
                    </div>
                                    <div class="row">
                        <div class="col-md-6 feature__description">
                            <div class="section__title">
                                <h2>Chasis Kokoh</h2>
<p>{{$kendaraan->chasis ?? ''}}</p>
<p>&nbsp;</p>
<h3>Brake Shoe</h3>
<p>{{$kendaraan->brake ?? ''}}</p>
                            </div>
                        </div>
                        <div class="col-md-6 feature__images">
                            <img src="{{asset($kendaraan->foto_chasis)}}" alt="Light Duty">
                        </div>
                    </div>
                            </div>
        </section>

        <section id="highlight" class="highlight">
          <div class="swiper swiperHighlight swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
              <div class="swiper-wrapper" id="swiper-wrapper-aa878ba4ed24dafe" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-3030px, 0px, 0px);">
                @forelse ($kendaraan_slider as $idx => $item)
                <div class="swiper-slide" role="group" aria-label="1 / 3" style="margin-right: 20px;" data-swiper-slide-index="{{$idx}}">
                                      <img src="{{asset($item->background)}}" alt="<h2>{{$item->judul}}</h2>
                  <p>{{$item->deskripsi}}</p>
                  ">

                                      <div class="highlight__desc">
                                          <h2>{{$item->judul}}</h2>
                  <p>{{$item->deskripsi}}</p>
                                      </div>
                                  </div>
                @empty
                    
                @endforelse

</div>
              <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-aa878ba4ed24dafe"></div>
              <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-aa878ba4ed24dafe"></div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
      </section>
    
</main>
  @endsection