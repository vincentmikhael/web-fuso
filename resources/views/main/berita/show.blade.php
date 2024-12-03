@extends('layouts.main')

@section('content')
{{-- <div class="container mt-5">
    <p class="mt-3 mb-0 pb-0">{{date('d M Y',strtotime($berita->tanggal))}}</p>
     <h2 class="my-0 py-0">{{$berita->judul}}</h2>
    <div class="d-flex mb-5 mt-4 justify-content-center">
        <img src="{{asset($berita->gambar)}}" alt="">
    </div>
    
    

     {!! $berita->content !!}

     <div class="d-flex justify-content-center gap-3 mt-5">
        <a href="/list-brosur" class="btn btn-danger">DOWNLOAD BROSUR</a>
        <a href="/dealer" class="btn btn-outline-dark">CARI DEALER</a>
     </div>

     <div class="d-flex justify-content-center mt-5">
        <div onclick="copy()" style="border: 1px solid black; border-radius: 50%; padding-top: 12px; padding-bottom: 8px; padding-left: 10px; padding-right: 14px; cursor: pointer;"><i style="font-size: 23px;" class="fa fa-share-alt"></i></div>
     </div>

</div> --}}
<main class="news-details">
	
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" data-wpel-link="internal">Beranda</a></li><li class="breadcrumb-item active" aria-current="page">Berita SBM</li>				
                    
                </ol>
            </nav>
        </div>
    </section>
        <section id="newsDetail" class="newsDetail">
            <div class="container">
                <div class="position-relative">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="news__content mx-0">
                                <div class="news__cat">
                                    <span class="news__date">
                                        {{date('d M Y',strtotime($berita->tanggal))}}								</span>
                                </div>
                                <h1 class="news__title">
                                    {{$berita->judul}}						</h1>
                                <img class="news__img" src="{{asset($berita->gambar)}}" alt="">
    
                                
                                {!! $berita->content !!}
    
    
                                
                                    <div id="news__share" class="news__share">
    
        <div class="share__group">
            <h2>
                Share
            </h2>
            <div class="socmed">
                <button class="btn btn__news" data-sharer="facebook" data-hashtag="fusoartikel" data-url="{{ url()->current() }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M17 3.50005C17 3.36745 16.9473 3.24027 16.8536 3.1465C16.7598 3.05273 16.6326 3.00005 16.5 3.00005H14C12.7411 2.93734 11.5086 3.37544 10.5717 4.21863C9.63485 5.06182 9.06978 6.24155 9 7.50005V10.2001H6.5C6.36739 10.2001 6.24021 10.2527 6.14645 10.3465C6.05268 10.4403 6 10.5674 6 10.7001V13.3001C6 13.4327 6.05268 13.5598 6.14645 13.6536C6.24021 13.7474 6.36739 13.8001 6.5 13.8001H9V20.5001C9 20.6327 9.05268 20.7598 9.14645 20.8536C9.24021 20.9474 9.36739 21.0001 9.5 21.0001H12.5C12.6326 21.0001 12.7598 20.9474 12.8536 20.8536C12.9473 20.7598 13 20.6327 13 20.5001V13.8001H15.62C15.7312 13.8017 15.8397 13.7661 15.9285 13.6991C16.0172 13.6321 16.0811 13.5374 16.11 13.4301L16.83 10.8301C16.8499 10.7562 16.8526 10.6787 16.8378 10.6036C16.8231 10.5286 16.7913 10.4579 16.7449 10.397C16.6985 10.3362 16.6388 10.2868 16.5704 10.2526C16.5019 10.2185 16.4265 10.2005 16.35 10.2001H13V7.50005C13.0249 7.25253 13.1411 7.02317 13.326 6.85675C13.5109 6.69033 13.7512 6.59881 14 6.60005H16.5C16.6326 6.60005 16.7598 6.54737 16.8536 6.45361C16.9473 6.35984 17 6.23266 17 6.10005V3.50005Z" fill="white"></path>
    </svg>
                </button>
                <button class="btn btn__news" data-sharer="twitter" data-title="Sampoerna Menjadi Perusahaan Ke 10 Yang Melakukan Uji Coba Fuso eCanter" data-hashtags="fusoartikel" data-url="{{ url()->current() }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M21.7504 5.96017C21.0332 6.26954 20.2527 6.4922 19.4488 6.57892C20.2835 6.08306 20.9085 5.2997 21.2066 4.37579C20.4234 4.8417 19.5654 5.16841 18.6707 5.34142C18.2967 4.94163 17.8445 4.62315 17.342 4.40581C16.8396 4.18847 16.2978 4.07693 15.7504 4.07813C13.5355 4.07813 11.7543 5.87345 11.7543 8.07657C11.7543 8.38595 11.7918 8.69532 11.8527 8.99298C8.53633 8.81954 5.57852 7.23517 3.61211 4.80938C3.25381 5.42137 3.06605 6.1182 3.06836 6.82735C3.06836 8.21485 3.77383 9.43829 4.84961 10.1578C4.21564 10.1329 3.59651 9.9586 3.04258 9.64923V9.69845C3.04258 11.6414 4.41602 13.2516 6.24648 13.6219C5.90279 13.7112 5.54924 13.7568 5.19414 13.7578C4.93398 13.7578 4.68789 13.732 4.43945 13.6969C4.9457 15.2813 6.41992 16.432 8.17539 16.4695C6.80195 17.5453 5.08164 18.1781 3.21367 18.1781C2.87852 18.1781 2.56914 18.1664 2.24805 18.1289C4.01992 19.2656 6.12227 19.9219 8.38633 19.9219C15.7363 19.9219 19.7582 13.8328 19.7582 8.54767C19.7582 8.37423 19.7582 8.20079 19.7465 8.02735C20.5246 7.45782 21.2066 6.75235 21.7504 5.96017Z" fill="white"></path>
    </svg>
                </button>
                <button class="btn btn__news" data-sharer="linkedin" data-url="{{ url()->current() }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.429 8.969H13.143V10.819C13.678 9.755 15.05 8.799 17.111 8.799C21.062 8.799 22 10.917 22 14.803V22H18V15.688C18 13.475 17.465 12.227 16.103 12.227C14.214 12.227 13.429 13.572 13.429 15.687V22H9.429V8.969ZM2.57 21.83H6.57V8.799H2.57V21.83ZM7.143 4.55C7.14315 4.88528 7.07666 5.21724 6.94739 5.52659C6.81812 5.83594 6.62865 6.11651 6.39 6.352C5.9064 6.83262 5.25181 7.10165 4.57 7.1C3.88939 7.09954 3.23631 6.8312 2.752 6.353C2.51421 6.11671 2.32539 5.83582 2.19634 5.52643C2.0673 5.21704 2.00058 4.88522 2 4.55C2 3.873 2.27 3.225 2.753 2.747C3.23689 2.26816 3.89024 1.9997 4.571 2C5.253 2 5.907 2.269 6.39 2.747C6.872 3.225 7.143 3.873 7.143 4.55Z" fill="white"></path>
    </svg>
                </button>
                <button class="btn btn__news" data-sharer="whatsapp" data-title="Sampoerna Menjadi Perusahaan Ke 10 Yang Melakukan Uji Coba Fuso eCanter" data-url="{{ url()->current() }}" data-description="<p>Jakarta, Indonesia – PT Krama Yudha Tiga Berlian Motors (KTB), distributor resmi kendaraan niaga Mitsubishi Fuso Truck and Bus Corporation (MFTBC) di Indonesia, melanjutkan rangkaian uji coba Fuso eCanter yang kali ini dilakukan dengan Sampoerna. Ini merupakan uji coba ke 10 yang dilakukan oleh PT SBM bersama perusahaan-perusahaan yang merupakan konsumen setia sebagai inisiatif untuk […]</p>
    ">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M7.25301 18.494L7.97701 18.917C9.19795 19.6291 10.5866 20.0029 12 20C13.5823 20 15.129 19.5308 16.4446 18.6518C17.7602 17.7727 18.7855 16.5233 19.3911 15.0615C19.9966 13.5997 20.155 11.9911 19.8463 10.4393C19.5376 8.88743 18.7757 7.46197 17.6569 6.34315C16.538 5.22433 15.1126 4.4624 13.5607 4.15372C12.0089 3.84504 10.4004 4.00346 8.93855 4.60896C7.47674 5.21447 6.22731 6.23984 5.34826 7.55544C4.46921 8.87103 4.00001 10.4177 4.00001 12C3.99709 13.4139 4.37129 14.8029 5.08401 16.024L5.50601 16.748L4.85301 19.149L7.25301 18.494ZM2.00401 22L3.35601 17.032C2.46515 15.5049 1.99711 13.768 2.00001 12C2.00001 6.477 6.47701 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C10.2328 22.0029 8.49667 21.5352 6.97001 20.645L2.00401 22ZM8.39101 7.308C8.52501 7.298 8.66001 7.298 8.79401 7.304C8.84801 7.308 8.90201 7.314 8.95601 7.32C9.11501 7.338 9.29001 7.435 9.34901 7.569C9.64701 8.245 9.93701 8.926 10.217 9.609C10.279 9.761 10.242 9.956 10.124 10.146C10.0429 10.2745 9.95507 10.3986 9.86101 10.518C9.74801 10.663 9.50501 10.929 9.50501 10.929C9.50501 10.929 9.40601 11.047 9.44401 11.194C9.45801 11.25 9.50401 11.331 9.54601 11.399L9.60501 11.494C9.86101 11.921 10.205 12.354 10.625 12.762C10.745 12.878 10.862 12.997 10.988 13.108C11.456 13.521 11.986 13.858 12.558 14.108L12.563 14.11C12.648 14.147 12.691 14.167 12.815 14.22C12.877 14.246 12.941 14.269 13.006 14.286C13.0732 14.3031 13.1439 14.2999 13.2093 14.2767C13.2746 14.2536 13.3316 14.2116 13.373 14.156C14.097 13.279 14.163 13.222 14.169 13.222V13.224C14.2193 13.1771 14.2791 13.1415 14.3443 13.1196C14.4095 13.0977 14.4786 13.09 14.547 13.097C14.607 13.101 14.668 13.112 14.724 13.137C15.255 13.38 16.124 13.759 16.124 13.759L16.706 14.02C16.804 14.067 16.893 14.178 16.896 14.285C16.9 14.352 16.906 14.46 16.883 14.658C16.851 14.917 16.773 15.228 16.695 15.391C16.6416 15.5022 16.5707 15.6042 16.485 15.693C16.3841 15.7989 16.2736 15.8954 16.155 15.981C16.114 16.0119 16.0723 16.0419 16.03 16.071C15.9056 16.1499 15.7778 16.2233 15.647 16.291C15.3895 16.4278 15.1052 16.5063 14.814 16.521C14.629 16.531 14.444 16.545 14.258 16.535C14.25 16.535 13.69 16.448 13.69 16.448C12.2683 16.074 10.9534 15.3735 9.85001 14.402C9.62401 14.203 9.41501 13.989 9.20101 13.776C8.31101 12.891 7.63901 11.936 7.23101 11.034C7.02218 10.5913 6.90938 10.1094 6.90001 9.62C6.89589 9.01285 7.09436 8.42167 7.46401 7.94C7.53701 7.846 7.60601 7.748 7.72501 7.635C7.85201 7.515 7.93201 7.451 8.01901 7.407C8.13469 7.34903 8.26088 7.31502 8.39001 7.307L8.39101 7.308Z" fill="white"></path>
    </svg>
                </button>
                <button onclick="copy()" class="btn btn__news btn__copy">
                    <svg id="shareCopy" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M8.46588 11.2929C9.59888 10.1599 11.5749 10.1599 12.7079 11.2929L13.4149 11.9999L14.8289 10.5859L14.1219 9.87894C13.1789 8.93494 11.9229 8.41394 10.5869 8.41394C9.25088 8.41394 7.99488 8.93494 7.05188 9.87894L4.92988 11.9999C3.99417 12.9387 3.46875 14.21 3.46875 15.5354C3.46875 16.8609 3.99417 18.1322 4.92988 19.0709C5.39375 19.5355 5.94484 19.9038 6.55149 20.1547C7.15814 20.4056 7.80839 20.5341 8.46488 20.5329C9.12154 20.5343 9.77199 20.4058 10.3788 20.1549C10.9857 19.904 11.5369 19.5356 12.0009 19.0709L12.7079 18.3639L11.2939 16.9499L10.5869 17.6569C10.0233 18.2179 9.26055 18.5329 8.46538 18.5329C7.67021 18.5329 6.90741 18.2179 6.34388 17.6569C5.78238 17.0937 5.46708 16.3308 5.46708 15.5354C5.46708 14.7401 5.78238 13.9772 6.34388 13.4139L8.46588 11.2929Z" fill="white"></path>
    <path d="M11.9999 4.92899L11.2929 5.63599L12.7069 7.04999L13.4139 6.34299C13.9774 5.78198 14.7402 5.46702 15.5354 5.46702C16.3305 5.46702 17.0933 5.78198 17.6569 6.34299C18.2184 6.90626 18.5337 7.66916 18.5337 8.46449C18.5337 9.25983 18.2184 10.0227 17.6569 10.586L15.5349 12.707C14.4019 13.84 12.4259 13.84 11.2929 12.707L10.5859 12L9.17188 13.414L9.87887 14.121C10.8219 15.065 12.0779 15.586 13.4139 15.586C14.7499 15.586 16.0059 15.065 16.9489 14.121L19.0709 12C20.0066 11.0613 20.532 9.78991 20.532 8.46449C20.532 7.13908 20.0066 5.86771 19.0709 4.92899C18.1324 3.9928 16.861 3.46704 15.5354 3.46704C14.2098 3.46704 12.9383 3.9928 11.9999 4.92899V4.92899Z" fill="white"></path>
    </svg>
                </button>
            </div>
        </div>
    
            
        
    </div>
    
                            </div>
                        </div>
                        <div class="col-md-4 rm-desktop-only">
                        
                            <div class="news__sidebar">
                                <div class="news__sidebar-panel" style="position: absolute; top: 0px; height: 657.338px; bottom: 0px;">
                                    <h4 class="text-center text-md-start">Lainnya dari Siaran Pers</h4>
                                    <div class="news__sidebar-inner">
                                        @forelse ($list as $item)
                                        <div class="news__sidebar-list">
                                            <div class="row align-items-center">
                                                <div class="col-md-4 pe-md-0 mb-2 mb-md-0">
                                                    <img width="988" height="878" src="https://www.ktbfuso.co.id/wp-content/uploads/2024/06/FUSO-2.jpeg" class="card-img-left wp-post-image" alt="" decoding="async" loading="lazy" srcset="{{asset($item->gambar)}}" sizes="(max-width: 988px) 100vw, 988px">												</div>
                                                <div class="col-md-8">
                                                    <strong>{{date('d M Y',strtotime($item->tanggal))}}</strong>
                                                    <h5><a href="https://www.ktbfuso.co.id/siaran-pers/mitsubishi-fuso-raih-penghargaan-indonesia-best-living-legend-companies-2024/" data-wpel-link="internal">{{$item->judul}}</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        @endforelse
                                                                        </div>
                                    <div class="news__sidebar-view text-md-end text-center">
                                        <a class="news__tag" href="/berita?kategori={{$item->kategori}}" data-wpel-link="internal">Lihat Semuanya</a>
                                    </div>
                                </div>
                            </div>
                                            </div>
                    </div>
                </div>
    
    
            </div>
        </section>
    
    
        <section class="rm-mobile-only">
            
                            <div class="news__sidebar">
                                <div class="news__sidebar-panel" style="position: absolute; top: 0px; height: 657.338px; bottom: 0px;">
                                    <h4 class="text-center text-md-start">Lainnya dari Siaran Pers</h4>
                                    <div class="news__sidebar-inner">
                                        @forelse ($list as $item)
                                        <div class="news__sidebar-list">
                                            <div class="row align-items-center">
                                                <div class="col-md-4 pe-md-0 mb-2 mb-md-0">
                                                    <img width="988" height="878" src="https://www.ktbfuso.co.id/wp-content/uploads/2024/06/FUSO-2.jpeg" class="card-img-left wp-post-image" alt="" decoding="async" loading="lazy" srcset="{{asset($item->gambar)}}" sizes="(max-width: 988px) 100vw, 988px">												</div>
                                                <div class="col-md-8">
                                                    <strong>{{date('d M Y',strtotime($item->tanggal))}}</strong>
                                                    <h5><a href="https://www.ktbfuso.co.id/siaran-pers/mitsubishi-fuso-raih-penghargaan-indonesia-best-living-legend-companies-2024/" data-wpel-link="internal">{{$item->judul}}</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        @endforelse
                           
                                                                        </div>
                                    <div class="news__sidebar-view text-md-end text-center">
                                        <a class="news__tag" href="/berita?kategori={{$item->kategori}}" data-wpel-link="internal">Lihat Semuanya</a>
                                    </div>
                                </div>
                            </div>
                            </section>
    </main>
@endsection

@section('script')
    <script>
        function copy(){
            navigator.clipboard.writeText(window.location.href + "/{{$berita->slug}}");
            alert('Copied the text!')
        }
    </script>
@endsection