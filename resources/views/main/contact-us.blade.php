@extends('layouts.main') 
@section('content') 
<section id="call" class="call mt-5 pt-5">
    <br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 gy-3">
				<div class="section__title">
					<p>
						Butuh bantuan atau informasi selengkapnya<br>
						Hubungi WhatsApp Interaktif Sulawesi Berlian Motor
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
				<h3>
					{{getSetting()->hari_operasional2}}<br>
					{{getSetting()->jam_operasional2}}
				</h3>
			</div>
		</div>
	</div>
</section>

<section id="office" class="office mb-5 pb-5" style="background: rgb(51,51,51); color: white;">
	<div class="container">
		<div class="section__title">
			<h2 style="color: white;">
				Our Main Branch
			</h2>
		</div>
		<div class="row">
			<div class="col-lg-6">
				@forelse (getOffice() as $item)
				<div class="row office__row">
					<div class="col-md-6 office__address">
						<h3 style="color: white;">
							{{$item->nama}}
						</h3>
						<p style="color: white;">
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
                    <span>Phone number</span>
					<h3 style="color: white;">
						
						{{getSetting()->no_telp}}
					</h3>

				</div>
				<div class="office__address contact">
                    <span>Email</span>
					<h3 style="color: white;">
						
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
@endsection