@extends('layouts.main')


@section('content')
	<div class="page-website" id="wrapper-website">
<div class="owl-wrapper owl-news-wrapper hidden-xs hidden-sm">
    <div class="owl-carousel owl-theme owl-banner-home">
        @foreach ($banner as $item)
        <div class="item news-items">
            <div class="img-wrapper">
                <a href="{{$item->link}}">
                    <img style="object-fit: cover; height: 200px;" src="{{asset($item->background)}}" alt="Promat" class="img-fluid" />
                </a>
            </div>
        </div>
        @endforeach
		
    </div>
</div>
<div class="owl-wrapper owl-news-wrapper visible-xs visible-sm h-full">
    <div class="owl-carousel owl-theme owl-banner-home">
        @foreach ($banner as $item)
        <div class="item news-items">
            <div class="img-wrapper">
                <a href="{{$item->link}}">
                    <img src="{{asset($item->background)}}" alt="Promat" class="img-fluid" />
                </a>
            </div>
        </div>
        @endforeach
        
    </div>
</div>

<section class="about-us height-full">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5">
				<div class="title">
					<div class="border-bottom-after">
						<h2>TENTANG KAMI</h2>
					</div>
				</div>
				<div class="content-text grey my-5 f-20 justify">
					<span>{!!Illuminate\Support\Str::limit($sejarah->content,150)!!} </span>
				</div>
				<div class="button-wrapper">
					<a href="/tentang-kami/sejarah-perusahaan" class="button fleet-button fleet-button-primary">SELENGKAPNYA</a>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="img-wrapper">
					<img src="{{$sejarah->thumbnail}}" alt="ANDALAN BISNIS SEJATI" class="img-fluid" style="width: 100%; object-fit: cover;" />
				</div>
			</div>
		</div>
	</div>
</section>

<section class="product-type-home height-full">
	<div class="row no-gutters h-100">
		<div class="col-lg-4 col-type">
			<div class="type-box bg-1 text-center">
				<div class="title">
					<a href="/fuso/light-duty" title="Light Duty">
						<h2>LIGHT DUTY</h2>
						<div class="big light">TRUCK</div>
					</a>
				</div>
				<div class="icon-list">
					<div class="row no-gutters text-center justify-content-center">
						<div class="col-auto col-icon">
							<div class="icon-wrapper">
								<img src="wp-content/themes/miratfuso/img/economis.png" alt="SUPER ECONOMICAL " class="img-fluid" />
							</div>
							<div class="icon-text bold">SUPER ECONOMICAL</div>
						</div>
						<div class="col col-separator"></div>
						<div class="col-auto col-icon">
							<div class="icon-wrapper">
								<img src="wp-content/themes/miratfuso/img/1-Superpower.png" alt="SUPER POWER " class="img-fluid" />
							</div>
							<div class="icon-text bold">SUPER POWER</div>
						</div>
						<div class="col col-separator"></div>
						<div class="col-auto col-icon">
							<div class="icon-wrapper">
								<img src="wp-content/themes/miratfuso/img/2-SuperSpeed.png" alt="SUPER SPEED " class="img-fluid" />
							</div>
							<div class="icon-text bold">SUPER SPEED</div>
						</div>
						<div class="col col-separator"></div>
						<div class="col-auto col-icon">
							<div class="icon-wrapper">
								<img src="wp-content/themes/miratfuso/img/3-SuperCapacity.png" alt="SUPER CAPACITY " class="img-fluid" />
							</div>
							<div class="icon-text bold">SUPER CAPACITY</div>
						</div>
						<div class="col col-separator"></div>
						<div class="col-auto col-icon">
							<div class="icon-wrapper">
								<img src="wp-content/themes/miratfuso/img/4-Bus.png" alt="BUS " class="img-fluid" />
							</div>
							<div class="icon-text bold">BUS</div>
						</div>
						<div class="col col-separator"></div>
					</div>
				</div>
			</div>
			<div class="type-box-image">
				<a href="fuso/light-duty" title="Light Duty">
					<img src="wp-content/themes/miratfuso/img/Light-Duty.jpg" alt="LIGHT DUTY" class="img-fluid" />
				</a>
			</div>
		</div>
		<div class="col-lg-4 col-type">
			<div class="type-box bg-2 text-center">
				<div class="title">
					<a href="/fuso/medium-duty" title="Medium Duty">
						<h2>MEDIUM DUTY</h2>
						<div class="big light">TRUCK</div>
					</a>
				</div>
				<div class="icon-list w-80">
					<div class="row no-gutters text-center justify-content-center">
						<div class="col-auto col-icon">
							<div class="icon-wrapper">
								<img src="wp-content/themes/miratfuso/img/1-4x2.png" alt="4x2" class="img-fluid" />
							</div>
							<div class="icon-text bold">4x2</div>
						</div>
						<div class="col-1 col-separator"></div>
						<div class="col-auto col-icon">
							<div class="icon-wrapper">
								<img src="wp-content/themes/miratfuso/img/6x2-Small.png" alt="6x2" class="img-fluid" />
							</div>
							<div class="icon-text bold">6x2</div>
						</div>
						<div class="col-1 col-separator"></div>
						<div class="col-auto col-icon">
							<div class="icon-wrapper">
								<img src="wp-content/themes/miratfuso/img/3-6x4.png" alt="6x4" class="img-fluid" />
							</div>
							<div class="icon-text bold">6x4</div>
						</div>
						<div class="col-1 col-separator"></div>
					</div>
				</div>
			</div>
			<div class="type-box-image">
				<a href="fuso/medium-duty" title="Medium Duty">
					<img src="wp-content/themes/miratfuso/img/Medium-Duty.jpg" alt="MEDIUM DUTY" class="img-fluid" />
				</a>
			</div>
		</div>
		<div class="col-lg-4 col-type">
			<div class="type-box bg-3 text-center">
				<div class="title">
					<a href="/fuso/tractor-head" title="Tractor Head">
						<h2>TRACTOR HEAD</h2>
						<div class="big light">TRUCK</div>
					</a>
				</div>
				<div class="icon-list w-80">
					<div class="row no-gutters text-center justify-content-center">
						<div class="col-auto col-icon">
							<div class="icon-wrapper">
								<img src="wp-content/themes/miratfuso/img/6x4.png" alt="6X4" class="img-fluid" />
							</div>
							<div class="icon-text bold">6X4</div>
						</div>
						<div class="col-1 col-separator"></div>
					</div>
				</div>
			</div>
			<div class="type-box-image">
				<a href="fuso/tractor-head" title="Tractor Head">
					<img src="wp-content/themes/miratfuso/img/Tracktor-Head.jpg" alt="TRACTOR HEAD" class="img-fluid" />
				</a>
			</div>
		</div>
	</div>
</section>

<section style="background-image: none;" class="dealer-detail bg-orange height-full">
	<div class="container">
		<div class="row align-items-center no-gutters">
			<div class="col-lg-12 text-center">
				<div class="title">
					<h2>DEKAT & AKRAB</h2>
					<h1 class="light">SEINDONESIA</h1>
				</div>
				<div class="content-text my-5 f-16 ml-lg-2">Kami memberikan layanan purna jual unggulan untuk kebutuhan truk Anda selama 24 jam non-stop. Didukung oleh jaringan dealer dan bengkel terluas di Kawasan Timur Indonesia, dan siap mengawal dan menjalankan roda niaga Indonesia.</div>
                <div class="button-wrapper">
                    <a href="/dealer" class="button fleet-button fleet-button-primary">CEK LOKASI DEALER</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-youtube swiper-container">
    <div class="swiper-wrapper">
        @foreach ($youtube as $item)
        <div class="swiper-slide">
            <div class="swiper-item">
                <div class="swiper-item-wrapper">
                    <iframe width="560" height="315" src="{{$item->link}}" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        @endforeach
                                    
                 
                        </div>
    <div class="swiper-button-prev swiper-button-youtube-prev icon-after-before"></div>
    <div class="swiper-button-next swiper-button-youtube-next icon-after-before"></div>
</section>

<section class="home-purna-jual height-full">
	<div class="container-fluid">
		<div class="row align-content-center no-gutters">
			<div class="col-lg-4 offset-lg-1 text-left col-left">
				<div class="title">
					<div class="border-bottom-after">
						<h5 class="bold">MEMBERIKAN YANG TERBAIK</h5>
						<h2 class="light">LAYANAN PURNA JUAL</h2>
					</div>
				</div>
				<div class="content-text my-lg-4 my-4 f-16">
					<p>Mitsubishi <b>Fuso</b> membarikan layanan purna jual unggulan untuk kebutuhan perawatan truk Anda selama 24 jam non stop.</p>
				</div>
				<div class="button-wrapper">
					<a href="layanan/purnajual" class="button fleet-button fleet-button-secondary">SELENGKAPNYA</a>
				</div>
			</div>
			<div class="col-lg-7 text-left col-right">
				<div class="owl-purna-jual-wrapper">
					<div class="owl-carousel owl-theme owl-purna-jual">
						<div class="item">
							<a href="javascript:void(0);">
								<div class="img-wrapper">
									<img src="wp-content/uploads/2022/12/purna-jual-new-1.jpg" alt="purna jual" class="img-fluid" />
								</div>
							</a>
						</div>
						<div class="item">
							<a href="javascript:void(0);">
								<div class="img-wrapper">
									<img src="wp-content/uploads/2022/12/purna-jual-new-1.jpg" alt="purna jual" class="img-fluid" />
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="home-news">
    <div class="top">
        <div class="title text-center">
            <div class="small bold">YANG TERBARU</div>
            <div class="big light">BERITA FUSO</div>
        </div>
        <div class="tabs-title">
            <nav>
                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-artikel-tab" data-toggle="tab" href="#nav-artikel" role="tab" aria-controls="nav-artikel" aria-selected="false">SIARAN PERS</a>
                    <a class="nav-item nav-link" id="nav-tanya-ahli-tab" data-toggle="tab" href="#nav-tanya-ahli" role="tab" aria-controls="nav-tanya-ahli" aria-selected="true">FUSO UPDATE</a>
                </div>
            </nav>
        </div>
    </div>
    <div class="tabs-content-wrapper">
        <div class="container">
            <div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-artikel" role="tabpanel" aria-labelledby="nav-artikel-tab">
					<div class="owl-wrapper owl-news-wrapper">
						<div class="owl-carousel owl-theme owl-news-home">
							
															
								@foreach ($pers as $item)
                                <div class="item news-items">
                                    <div class="img-wrapper">
                                        <img width="872" height="520" src="{{asset($item->gambar)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></div>
                                    <div class="news-date bold">{{date('d M Y',strtotime($item->tanggal))}}</div>
                                    <div class="news-title bold">
                                        <p>{{$item->judul}}</p>
                                        
                                    </div>
                                    <div class="news-more book my-3">
                                        <a href="/berita/{{$item->slug}}" title="{{$item->judul}}">Selengkapnya <i class="fa fa-long-arrow-right ml-2" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                @endforeach
									
							
						</div>
					</div>
					<div class="button-wrapper text-center my-5"><a href="/berita?kategori=Siaran Pers" class="btn btn-white bg-transparent f-18 py-2 px-4 bold">SELENGKAPNYA</a></div>
				</div>
				<div class="tab-pane fade" id="nav-tanya-ahli" role="tabpanel" aria-labelledby="nav-tanya-ahli-tab">
					<div class="owl-wrapper owl-news-wrapper">
						<div class="owl-carousel owl-theme owl-news-home">

                            @foreach ($berita as $item)
                            <div class="item news-items">
                                <div class="img-wrapper">
                                    <img width="872" height="520" src="{{asset($item->gambar)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" /></div>
                                <div class="news-date bold">{{date('d M Y',strtotime($item->tanggal))}}</div>
                                <div class="news-title bold">
                                    <p>{{$item->judul}}</p>
                                    
                                </div>
                                <div class="news-more book my-3">
                                    <a href="/berita/{{$item->slug}}" title="{{$item->judul}}">Selengkapnya <i class="fa fa-long-arrow-right ml-2" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            @endforeach				
							
						</div>
					</div>
					<div class="button-wrapper text-center my-5"><a href="/berita?kategori=Fuso Update" class="btn btn-white bg-transparent f-18 py-2 px-4 bold">SELENGKAPNYA</a></div>
				</div>
			</div>
		</div>
	</div>
</section>

</div>
@endsection
