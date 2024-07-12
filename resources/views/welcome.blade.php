@extends('layouts.main')


@section('content')
<main class="homes">
    
        
	<section id="hero" class="hero">

		<div class="swiper swiperHero swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
			<div class="swiper-wrapper" id="swiper-wrapper-dd2ff03946bcd4b10" aria-live="off" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">

				@foreach ($banner as $item)
					<div class="swiper-slide swiper-slide-active" style="width: 414px;" role="group" aria-label="1 / 3">
													<!-- 2 June -->
							<a href="{{$item->link}}" target="_self" aria-label="Canter Bus" data-wpel-link="internal">
															<img fetchpriority="high" class="only__desktop" src="{{asset($item->background)}}" height="784" width="1920" alt="Canter Bus">
							<!-- 16 Jan 24 reducing Page Speed LCP
							<img class="only__mobile only__large" src="https://www.ktbfuso.co.id/wp-content/uploads/2024/01/IMG_6678.webp" height="1920" width="1080" alt="Canter Bus">
							-->
							<img fetchpriority="high" class="only__mobile only__large" src="{{asset($item->background_mobile)}}" height="700" width="400" alt="Canter Bus">
															</a>
												</div>
				@endforeach
					{{-- <div class="swiper-slide swiper-slide-next" style="width: 414px;" role="group" aria-label="2 / 3">
														<img fetchpriority="high" class=['
														']"only__desktop" src="https://www.ktbfuso.co.id/wp-content/uploads/2023/11/IMG_1286.webp" height="784" width="1920" alt="">
							<!-- 16 Jan 24 reducing Page Speed LCP
							<img class="only__mobile only__large" src="https://www.ktbfuso.co.id/wp-content/uploads/2023/11/IMG_1314.webp" height="1920" width="1080" alt="">
							-->
							<img fetchpriority="high" class="only__mobile only__large" src="https://www.ktbfuso.co.id/wp-content/uploads/2023/11/IMG_1314.webp" height="700" width="400" alt="">
													</div>
				
					<div class="swiper-slide" role="group" aria-label="3 / 3" style="width: 414px;">
													<!-- 2 June -->
							<a href="https://www.ktbfuso.co.id/service/telematics" target="_self" aria-label="" data-wpel-link="internal">
															<img fetchpriority="high" class="only__desktop" src="https://www.ktbfuso.co.id/wp-content/uploads/2023/07/Pantau-armada-Fuso.webp" height="784" width="1920" alt="">
							<!-- 16 Jan 24 reducing Page Speed LCP
							<img class="only__mobile only__large" src="https://www.ktbfuso.co.id/wp-content/uploads/2023/07/Pantau-armada-Fuso-vertical.webp" height="1920" width="1080" alt="">
							-->
							<img fetchpriority="high" class="only__mobile only__large" src="https://www.ktbfuso.co.id/wp-content/uploads/2023/07/Pantau-armada-Fuso-vertical.webp" height="700" width="400" alt="">
															</a>
												</div> --}}
				

			</div>
			<div class="swiper-button-next only__desktop" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-dd2ff03946bcd4b10" aria-disabled="false"></div>
			<div class="swiper-button-prev only__desktop swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-dd2ff03946bcd4b10" aria-disabled="true"></div>
			<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
		<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

	</section>


<section id="type" class="type">
	<div class="container">
		<div class="section__title text-center mx-auto">
			<h2>
				Andalan Bisnis Sejati

			</h2>
			<p>
				Memilih Mitsubishi FUSO adalah sebuah keputusan tepat yang akan menjadikan usaha berkembang pesat. Didukung oleh jaringan terluas di Indonesia.
			</p>
		</div>

		<div class="type__card">
			<div class="card-group">

				

<div class="card">
<img class="card-img-top" src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/home/light-duty.webp" alt="Light Duty">

<div class="card-body">
	<h3 class="card-title">
		Light Duty        </h3>
	<ul class="card-text">
		<li>Super economical</li><li>Super Power</li><li>Super speed</li><li>Super capacity</li><li>Bus</li>        </ul>

</div>
<div class="card-footer">
	<a href="/fuso/light-duty/" class="stretched-link btn btn__primary" data-wpel-link="internal">
		Lihat             <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.28409 7.3403L6.28509 7.3413L7.34193 6.28444L2.05772 1.00012L1.00087 2.05698L5.22725 6.28344L0.998535 10.512L2.05541 11.5688L6.28409 7.3403Z" fill="white"></path>
<path d="M6.28509 7.3413L5.93153 7.69485L6.28509 8.04841L6.63864 7.69485L6.28509 7.3413ZM6.28409 7.3403L6.63764 6.98675L6.2841 6.6332L5.93054 6.98674L6.28409 7.3403ZM7.34193 6.28444L7.69549 6.63799L8.04903 6.28444L7.69549 5.93089L7.34193 6.28444ZM2.05772 1.00012L2.41127 0.646572L2.05772 0.293009L1.70416 0.646572L2.05772 1.00012ZM1.00087 2.05698L0.647317 1.70343L0.293774 2.05698L0.647317 2.41053L1.00087 2.05698ZM5.22725 6.28344L5.58079 6.637L5.93436 6.28345L5.5808 5.92989L5.22725 6.28344ZM0.998535 10.512L0.644989 10.1584L0.291415 10.512L0.644989 10.8656L0.998535 10.512ZM2.05541 11.5688L1.70186 11.9224L2.05541 12.2759L2.40895 11.9224L2.05541 11.5688ZM6.63864 6.98775L6.63764 6.98675L5.93054 7.69386L5.93153 7.69485L6.63864 6.98775ZM6.98837 5.93089L5.93153 6.98775L6.63864 7.69485L7.69549 6.63799L6.98837 5.93089ZM1.70416 1.35367L6.98837 6.63799L7.69549 5.93089L2.41127 0.646572L1.70416 1.35367ZM1.35443 2.41053L2.41127 1.35367L1.70416 0.646572L0.647317 1.70343L1.35443 2.41053ZM5.5808 5.92989L1.35443 1.70343L0.647317 2.41053L4.87369 6.63699L5.5808 5.92989ZM1.35208 10.8656L5.58079 6.637L4.8737 5.92988L0.644989 10.1584L1.35208 10.8656ZM2.40895 11.2153L1.35208 10.1584L0.644989 10.8656L1.70186 11.9224L2.40895 11.2153ZM5.93054 6.98674L1.70186 11.2153L2.40895 11.9224L6.63764 7.69386L5.93054 6.98674Z" fill="white"></path>
</svg>


	</a>
</div>
</div>
				

<div class="card">
<img class="card-img-top" src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/home/medium-duty.webp" alt="Medium Duty">

<div class="card-body">
	<h3 class="card-title">
		Medium Duty        </h3>
	<ul class="card-text">
		<li>4x2</li><li>6x2</li><li>6x4</li>        </ul>

</div>
<div class="card-footer">
	<a href="/fuso/medium-duty/" class="stretched-link btn btn__primary" data-wpel-link="internal">
		Lihat             <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.28409 7.3403L6.28509 7.3413L7.34193 6.28444L2.05772 1.00012L1.00087 2.05698L5.22725 6.28344L0.998535 10.512L2.05541 11.5688L6.28409 7.3403Z" fill="white"></path>
<path d="M6.28509 7.3413L5.93153 7.69485L6.28509 8.04841L6.63864 7.69485L6.28509 7.3413ZM6.28409 7.3403L6.63764 6.98675L6.2841 6.6332L5.93054 6.98674L6.28409 7.3403ZM7.34193 6.28444L7.69549 6.63799L8.04903 6.28444L7.69549 5.93089L7.34193 6.28444ZM2.05772 1.00012L2.41127 0.646572L2.05772 0.293009L1.70416 0.646572L2.05772 1.00012ZM1.00087 2.05698L0.647317 1.70343L0.293774 2.05698L0.647317 2.41053L1.00087 2.05698ZM5.22725 6.28344L5.58079 6.637L5.93436 6.28345L5.5808 5.92989L5.22725 6.28344ZM0.998535 10.512L0.644989 10.1584L0.291415 10.512L0.644989 10.8656L0.998535 10.512ZM2.05541 11.5688L1.70186 11.9224L2.05541 12.2759L2.40895 11.9224L2.05541 11.5688ZM6.63864 6.98775L6.63764 6.98675L5.93054 7.69386L5.93153 7.69485L6.63864 6.98775ZM6.98837 5.93089L5.93153 6.98775L6.63864 7.69485L7.69549 6.63799L6.98837 5.93089ZM1.70416 1.35367L6.98837 6.63799L7.69549 5.93089L2.41127 0.646572L1.70416 1.35367ZM1.35443 2.41053L2.41127 1.35367L1.70416 0.646572L0.647317 1.70343L1.35443 2.41053ZM5.5808 5.92989L1.35443 1.70343L0.647317 2.41053L4.87369 6.63699L5.5808 5.92989ZM1.35208 10.8656L5.58079 6.637L4.8737 5.92988L0.644989 10.1584L1.35208 10.8656ZM2.40895 11.2153L1.35208 10.1584L0.644989 10.8656L1.70186 11.9224L2.40895 11.2153ZM5.93054 6.98674L1.70186 11.2153L2.40895 11.9224L6.63764 7.69386L5.93054 6.98674Z" fill="white"></path>
</svg>


	</a>
</div>
</div>
				

<div class="card">
<img class="card-img-top" src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/home/tractor-head.webp" alt="Tractor Head">

<div class="card-body">
	<h3 class="card-title">
		Tractor Head        </h3>
	<ul class="card-text">
		<li>6x4</li>        </ul>

</div>
<div class="card-footer">
	<a href="/fuso/tractor-head/" class="stretched-link btn btn__primary" data-wpel-link="internal">
		Lihat             <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.28409 7.3403L6.28509 7.3413L7.34193 6.28444L2.05772 1.00012L1.00087 2.05698L5.22725 6.28344L0.998535 10.512L2.05541 11.5688L6.28409 7.3403Z" fill="white"></path>
<path d="M6.28509 7.3413L5.93153 7.69485L6.28509 8.04841L6.63864 7.69485L6.28509 7.3413ZM6.28409 7.3403L6.63764 6.98675L6.2841 6.6332L5.93054 6.98674L6.28409 7.3403ZM7.34193 6.28444L7.69549 6.63799L8.04903 6.28444L7.69549 5.93089L7.34193 6.28444ZM2.05772 1.00012L2.41127 0.646572L2.05772 0.293009L1.70416 0.646572L2.05772 1.00012ZM1.00087 2.05698L0.647317 1.70343L0.293774 2.05698L0.647317 2.41053L1.00087 2.05698ZM5.22725 6.28344L5.58079 6.637L5.93436 6.28345L5.5808 5.92989L5.22725 6.28344ZM0.998535 10.512L0.644989 10.1584L0.291415 10.512L0.644989 10.8656L0.998535 10.512ZM2.05541 11.5688L1.70186 11.9224L2.05541 12.2759L2.40895 11.9224L2.05541 11.5688ZM6.63864 6.98775L6.63764 6.98675L5.93054 7.69386L5.93153 7.69485L6.63864 6.98775ZM6.98837 5.93089L5.93153 6.98775L6.63864 7.69485L7.69549 6.63799L6.98837 5.93089ZM1.70416 1.35367L6.98837 6.63799L7.69549 5.93089L2.41127 0.646572L1.70416 1.35367ZM1.35443 2.41053L2.41127 1.35367L1.70416 0.646572L0.647317 1.70343L1.35443 2.41053ZM5.5808 5.92989L1.35443 1.70343L0.647317 2.41053L4.87369 6.63699L5.5808 5.92989ZM1.35208 10.8656L5.58079 6.637L4.8737 5.92988L0.644989 10.1584L1.35208 10.8656ZM2.40895 11.2153L1.35208 10.1584L0.644989 10.8656L1.70186 11.9224L2.40895 11.2153ZM5.93054 6.98674L1.70186 11.2153L2.40895 11.9224L6.63764 7.69386L5.93054 6.98674Z" fill="white"></path>
</svg>


	</a>
</div>
</div>
			</div>
		</div>
	</div>
</section>

<section id="about" class="about">
	<div class="container">
		<div class="section__title">
			<h2>
				Mitsubishi FUSO siap mengawal dan menjalankan roda niaga Indonesia
			</h2>
			<p>
				Dibangun sejak tahun 1970, sebagai pionir kendaraan niaga Indonesia Mitsubishi FUSO sukses mempertahankan kepemimpinan pasar secara absolut dengan populasi truk terbesar di Indoensia.
			</p>
		</div>

		<a href="/tentang-kami/sejarah-perusahaan" class="btn btn__primary" data-wpel-link="internal">
			Lihat Selengkapnya
		</a>

	</div>
	<div class="about__bg">
		<img src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/home/fuso-office.webp" alt="Fuso Office">
	</div>
</section>

<section id="dealer" class="dealer">
	<div class="container">
		<div class="row dealer__row">
			<div class="col-lg-9">
				<div class="section__title">
					<h2>
					   kami memiliki dealer yang tersebar di seluruh Indonesia
					</h2>
				</div>
			</div>
			<div class="col-lg-3">
				<a href="/dealer" class="btn btn__primary" data-wpel-link="internal">
					Temukan Dealer terdekat
				</a>
			</div>
		</div>
		<div class="row">
			<div id="mapmain" style="height:340px;"></div>
		</div>
		{{-- <div class="row dealer__row">
			<div class="col-lg-3 col-6 dealer__col">
				<a href="/dealer/bengkel-siaga-24-jam/" style="text-decoration: none" data-wpel-link="internal">
					<h3>
						17
						<span>
							Bengkel Siaga 24 Jam
						</span>
					</h3>
				</a>
			</div>
			<div class="col-lg-3 col-6 dealer__col">
				<a href="/dealer/bengkel-siaga-24-jam/" style="text-decoration: none" data-wpel-link="internal">
					<h3>
						21
						<span>
							Parts Depo
						</span>
					</h3>
				</a>
			</div>
			<div class="col-lg-3 col-6 dealer__col">
				<a href="dealer/mobile-workshop-services/" style="text-decoration: none" data-wpel-link="internal">
					<h3>
						132 
						<span>
							Mobile Workshop Service
						</span>
						 </h3>
				</a>
			</div>
			<div class="col-lg-3 col-6 dealer__col">
				<a href="service/spareparts/" style="text-decoration: none" data-wpel-link="internal">
					<h3>
						6999
						<span>
							Outlet Spare Parts
						</span>
					</h3>
				</a>
			</div>
		</div> --}}

		<!--<img class="dealer__map" src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/home/dealers-map.webp" alt="Dealers Map">-->
		{{-- <img class="dealer__map" src="https://www.ktbfuso.co.id/wp-content/uploads/2024/06/newmap3.webp" alt="Dealers Map"> --}}
	</div>
</section>

<section id="call" class="call">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 gy-3">
				<div class="section__title">
					<p>
						Butuh bantuan atau informasi selengkapnya<br>
						Hubungi WhatsApp Interaktif Mitsubishi FUSO Indonesia
					</p>
					<h2>
						{{getSetting()->whatsapp}}
					</h2>
					<a href="https://wa.me/{{getSetting()->whatsapp}}" target="_blank" class="btn btn__primary" data-wpel-link="external" rel="noopener noreferrer nofollow">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1132_2366)">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12C2 13.89 2.525 15.66 3.438 17.168L2.546 20.2C2.49478 20.3741 2.49141 20.5587 2.53624 20.7346C2.58107 20.9104 2.67245 21.0709 2.80076 21.1992C2.92907 21.3276 3.08958 21.4189 3.26542 21.4638C3.44125 21.5086 3.62592 21.5052 3.8 21.454L6.832 20.562C8.39068 21.5051 10.1782 22.0025 12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2ZM9.738 14.263C11.761 16.285 13.692 16.552 14.374 16.577C15.411 16.615 16.421 15.823 16.814 14.904C16.8636 14.7897 16.8816 14.6641 16.8661 14.5405C16.8507 14.4168 16.8023 14.2996 16.726 14.201C16.178 13.501 15.437 12.998 14.713 12.498C14.5618 12.3935 14.3761 12.3516 14.1947 12.381C14.0133 12.4105 13.8503 12.509 13.74 12.656L13.14 13.571C13.1085 13.6202 13.0593 13.6555 13.0026 13.6696C12.9459 13.6837 12.8859 13.6756 12.835 13.647C12.428 13.414 11.835 13.018 11.409 12.592C10.983 12.166 10.611 11.6 10.402 11.219C10.3761 11.1706 10.3686 11.1144 10.3809 11.0609C10.3932 11.0074 10.4245 10.9602 10.469 10.928L11.393 10.242C11.5249 10.1273 11.61 9.9682 11.6321 9.79486C11.6542 9.62153 11.6118 9.44611 11.513 9.302C11.065 8.646 10.543 7.812 9.786 7.259C9.68831 7.1882 9.57386 7.14406 9.45393 7.13091C9.334 7.11776 9.21271 7.13606 9.102 7.184C8.182 7.578 7.386 8.588 7.424 9.627C7.449 10.309 7.716 12.24 9.738 14.263Z" fill="white"></path>
</g>
<defs>
<clipPath id="clip0_1132_2366">
<rect width="24" height="24" fill="white"></rect>
</clipPath>
</defs>
</svg>
						Hubungi Kami
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 gy-3">
				<p>
					Operasional:
				</p>
				<h3>
					{{getSetting()->hari_operasional}}<br>
					{{getSetting()->jam_operasional}}
				</h3>
			</div>
		</div>
	</div>
</section>

<section id="office" class="office">
	<div class="container">
		<div class="section__title">
			<h2>
				Our Offices
			</h2>
		</div>
		<div class="row">
			<div class="col-lg-6">
				@forelse (getOffice() as $item)
				<div class="row office__row">
					<div class="col-md-6 office__address">
						<h3>
							{{$item->nama}}
						</h3>
						<p>
							{!!nl2br($item->alamat)!!}
						</p>
					</div>
					<div class="col-md-4 office__map">
						<a href="{{$item->gmaps}}" target="_blank" class="btn btn__dealer" data-wpel-link="external" rel="nofollow noopener noreferrer">
							<svg width="18" height="23" viewBox="0 0 18 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_408_2447)">
<path d="M8.9987 8.04134C7.57787 8.04134 6.41537 9.20384 6.41537 10.6247C6.41537 12.0455 7.57787 13.208 8.9987 13.208C10.4195 13.208 11.582 12.0455 11.582 10.6247C11.582 9.20384 10.4195 8.04134 8.9987 8.04134ZM8.9987 1.58301C13.2225 1.58301 18.0404 4.76051 18.0404 10.8184C18.0404 14.6676 15.2891 18.7234 9.78662 22.9472C9.32162 23.3088 8.67578 23.3088 8.21078 22.9472C2.70828 18.7105 -0.0429688 14.6676 -0.0429688 10.8184C-0.0429688 4.76051 4.77495 1.58301 8.9987 1.58301Z" fill="#FE5E00"></path>
</g>
<defs>
<clipPath id="clip0_408_2447">
<rect width="18" height="23" fill="white"></rect>
</clipPath>
</defs>
</svg>
							Petunjuk Map
						</a>
					</div>
				</div>
				@empty
					
				@endforelse
								</div>
			<div class="col-lg-5">
				<div class="office__address contact">
					<h3>
						<span>Phone number</span>
						{{getSetting()->no_telp}}
					</h3>

				</div>
				<div class="office__address contact">
					<h3>
						<span>Email</span>
						{{getSetting()->email}}
					</h3>

				</div>
				<div class="office__wa">
					<a href="https://wa.me/{{getSetting()->whatsapp}}" target="_blank" class="btn btn__primary" data-wpel-link="external" rel="nofollow noopener noreferrer">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1132_2366)">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12C2 13.89 2.525 15.66 3.438 17.168L2.546 20.2C2.49478 20.3741 2.49141 20.5587 2.53624 20.7346C2.58107 20.9104 2.67245 21.0709 2.80076 21.1992C2.92907 21.3276 3.08958 21.4189 3.26542 21.4638C3.44125 21.5086 3.62592 21.5052 3.8 21.454L6.832 20.562C8.39068 21.5051 10.1782 22.0025 12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2ZM9.738 14.263C11.761 16.285 13.692 16.552 14.374 16.577C15.411 16.615 16.421 15.823 16.814 14.904C16.8636 14.7897 16.8816 14.6641 16.8661 14.5405C16.8507 14.4168 16.8023 14.2996 16.726 14.201C16.178 13.501 15.437 12.998 14.713 12.498C14.5618 12.3935 14.3761 12.3516 14.1947 12.381C14.0133 12.4105 13.8503 12.509 13.74 12.656L13.14 13.571C13.1085 13.6202 13.0593 13.6555 13.0026 13.6696C12.9459 13.6837 12.8859 13.6756 12.835 13.647C12.428 13.414 11.835 13.018 11.409 12.592C10.983 12.166 10.611 11.6 10.402 11.219C10.3761 11.1706 10.3686 11.1144 10.3809 11.0609C10.3932 11.0074 10.4245 10.9602 10.469 10.928L11.393 10.242C11.5249 10.1273 11.61 9.9682 11.6321 9.79486C11.6542 9.62153 11.6118 9.44611 11.513 9.302C11.065 8.646 10.543 7.812 9.786 7.259C9.68831 7.1882 9.57386 7.14406 9.45393 7.13091C9.334 7.11776 9.21271 7.13606 9.102 7.184C8.182 7.578 7.386 8.588 7.424 9.627C7.449 10.309 7.716 12.24 9.738 14.263Z" fill="white"></path>
</g>
<defs>
<clipPath id="clip0_1132_2366">
<rect width="24" height="24" fill="white"></rect>
</clipPath>
</defs>
</svg>

						Hubungi Kami
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="service" class="service">
	<div class="service__img">
		<img class="only__desktop" src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/home/services.webp" alt="Layanan Purna Jual">
		<img class="only__large only__mobile" src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/home/services-mobile.webp" alt="Layanan Purna Jual">
	</div>
	<div class="container service__container">
		<div class="row service__row">
		<div class="col-lg-6" style="margin-left: auto;">
				<div class="service__wrapper float__wrapper">
					<div class="section__title">
						<h2>
							Memberikan Layanan Purna Jual yang Terbaik
						</h2>
						<p>
							Mitsubishi Fuso membarikan layanan purna jual unggulan untuk kebutuhan perawatan truk Anda selama 24 jam non stop.
						</p>
					</div>
					<a href="/layanan/purnajual" class="btn btn__primary" data-wpel-link="internal">
						Lihat selengkapnya
					</a>
				</div>
			</div>
		</div>

	</div>

</section>

<section id="telematic" class="telematic">
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<img class="telematic__img" src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/telematic/telematics-logo.webp" alt="Logo Telematics">
			<div class="section__title">
				<h2>
					Pantau Armada Fuso Anda Secara Real TIme
				</h2>
				<p>
					Telematics memungkinkan Anda untuk memantau lokasi kendaraan Anda secara real-time dan otomatis. Informasi terkait posisi, arah, kecapatan dan sejarah rute yang diambil oleh kendaraan bisa dengan mudah di akses melalui layar komputer ataupun smartphone Anda.
				</p>
			</div>
			<a href="/service/telematics" class="btn btn__primary" data-wpel-link="internal">
				Lihat Selengkapnya
			</a>
		</div>

		<div class="col-lg-6">
			<img src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/telematic/telematics-img.webp" alt="UI Telematics">
		</div>
	</div>
</div>
</section>
<section id="news" class="news">
	<div class="container">
		<div class="section__title text-center">
			<h2>
				Berita Fuso
			</h2>
		</div>
		
<div class="row">


@forelse (getBerita() as $idx => $item)
<div class="{{$idx == 0 ? 'col-lg-4' : 'col-lg-4'}} col-md-6 news__col">
	<div class="card">
		<img width="988" height="878" src="https://www.ktbfuso.co.id/wp-content/uploads/2024/06/FUSO-2.jpeg" class="card-img-top wp-post-image" alt="" decoding="async" fetchpriority="high" srcset="https://www.ktbfuso.co.id/wp-content/uploads/2024/06/FUSO-2.jpeg 988w, https://www.ktbfuso.co.id/wp-content/uploads/2024/06/FUSO-2-768x682.jpeg 768w" sizes="(max-width: 988px) 100vw, 988px">                    <div class="card-body">


			<a class="news__tag" href="https://www.ktbfuso.co.id/news-list/siaran-pers/" data-wpel-link="internal">
				{{$item->kategori}}                        </a>


			<span class="news__date">
				{{date('d M Y',strtotime($item->tanggal))}}                       </span>
			<h3 class="card-title news__title">
				<a href="/berita/{{$item->slug}}" class="news__link stretched-link" data-wpel-link="internal">
					{{$item->judul}}                            </a>
				<button class="btn btn__third">
					Selengkapnya
					<svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.28409 7.3403L6.28509 7.3413L7.34193 6.28444L2.05772 1.00012L1.00087 2.05698L5.22725 6.28344L0.998535 10.512L2.05541 11.5688L6.28409 7.3403Z" fill="white"></path>
<path d="M6.28509 7.3413L5.93153 7.69485L6.28509 8.04841L6.63864 7.69485L6.28509 7.3413ZM6.28409 7.3403L6.63764 6.98675L6.2841 6.6332L5.93054 6.98674L6.28409 7.3403ZM7.34193 6.28444L7.69549 6.63799L8.04903 6.28444L7.69549 5.93089L7.34193 6.28444ZM2.05772 1.00012L2.41127 0.646572L2.05772 0.293009L1.70416 0.646572L2.05772 1.00012ZM1.00087 2.05698L0.647317 1.70343L0.293774 2.05698L0.647317 2.41053L1.00087 2.05698ZM5.22725 6.28344L5.58079 6.637L5.93436 6.28345L5.5808 5.92989L5.22725 6.28344ZM0.998535 10.512L0.644989 10.1584L0.291415 10.512L0.644989 10.8656L0.998535 10.512ZM2.05541 11.5688L1.70186 11.9224L2.05541 12.2759L2.40895 11.9224L2.05541 11.5688ZM6.63864 6.98775L6.63764 6.98675L5.93054 7.69386L5.93153 7.69485L6.63864 6.98775ZM6.98837 5.93089L5.93153 6.98775L6.63864 7.69485L7.69549 6.63799L6.98837 5.93089ZM1.70416 1.35367L6.98837 6.63799L7.69549 5.93089L2.41127 0.646572L1.70416 1.35367ZM1.35443 2.41053L2.41127 1.35367L1.70416 0.646572L0.647317 1.70343L1.35443 2.41053ZM5.5808 5.92989L1.35443 1.70343L0.647317 2.41053L4.87369 6.63699L5.5808 5.92989ZM1.35208 10.8656L5.58079 6.637L4.8737 5.92988L0.644989 10.1584L1.35208 10.8656ZM2.40895 11.2153L1.35208 10.1584L0.644989 10.8656L1.70186 11.9224L2.40895 11.2153ZM5.93054 6.98674L1.70186 11.2153L2.40895 11.9224L6.63764 7.69386L5.93054 6.98674Z" fill="white"></path>
</svg>
				</button>
			</h3>

		</div>
	</div>
</div>
@empty
	
@endforelse

	
</div>


		<div class="news__etc">
			<a href="/berita" class="btn btn__primary" data-wpel-link="internal">
				Lihat Lainnya
			</a>
		</div>
	</div>
</section>

</main>
@endsection
@section('script')
<script>
    let dataCabang = @json(getCabang());
    let features = dataCabang.map(e=>{
        return {
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [e.lat, e.lon]
                },
                "properties": {
                    "name": e.nama,
                    "street": e.alamat,
                    "website": e.website,
                    "lon": e.lon,
                    "lat": e.lat,
                    "handphone": e.telepon,
                    "whatsapp": e.whatsapp,
                    "prop0": "value0",
                    "color": "blue"
                }
            }
    })
    const data = {
        type: "FeatureCollection",
        features: features,
    };

    const map = L.map("mapmain").setView([-3.944836, 118.389827], 5);
    const osm = L.tileLayer(
        "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
        {
            maxZoom: 19,
            attribution:
            '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        }
    ).addTo(map);
    
    const geojsonMarkerOptions = {
        radius: 8,
        fillColor: "red",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8,
    };
    
    const lightData = L.geoJSON(data, {
        onEachFeature: function (feature, layer) {
            const popupContent = 
                '<div class="dealer-box dealer-map text-center">' +
                    '<div class="dealer-name">' + feature.properties.name + '</div>' +
                        '<div class="dealer-address">' +
                            '<p>' + feature.properties.street + '</p>' +
                            '<p>' + feature.properties.website + '</p>' +
                            '<br>' +
                            '<a href="https://maps.google.com/?q=' + feature.properties.lon + ', ' + feature.properties.lat + '" target="_BLANK" tabindex="0">Lihat di Google Maps</a>' +
                        '</div>' +
                        '<div class="map-row row no-gutters">' +
                            '<div class="col-6 col-map col-left">' +
                                '<div class="icon-top"><i class="fa fa-phone" aria-hidden="true"></i></div>' +
                                '<div class="call">' + feature.properties.handphone + '</div>' +
                            '</div>' +
                            '<div class="col-6 col-map">' +
                                '<div class="icon-top"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>' +
                                '<div class="call">' + feature.properties.whatsapp + '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>';
            
            layer.bindPopup(popupContent);
        },
        pointToLayer: function (feature, latlng) {
            return L.circleMarker(latlng, geojsonMarkerOptions);
        },
    });
    
    const markers = L.markerClusterGroup().addLayer(lightData);
    
    map.addLayer(markers);

</script>
@endsection
