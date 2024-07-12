@extends('layouts/main')

@section('content')

<section id="breadcrumbs" style="margin-top: 52px;" class="breadcrumbs mb-5">
  <div class="container">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/" data-wpel-link="internal">Beranda</a></li><li class="breadcrumb-item"><a href="#!">Tentang KTB</a></li><li class="breadcrumb-item active" aria-current="page">Profil Perusahaan</li>				
      
          </ol>
      </nav>
  </div>
</section>
{!!$sejarah->content!!}


@endsection
@section('script')
<script src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/dist/assets/js/scripts.js?ver=6.5.2" id="main-js"></script>
<script src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/js/navigation.js?ver=1.0.1" id="ktb_fuso-navigation-js"></script>
@endsection