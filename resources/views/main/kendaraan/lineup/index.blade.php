@extends('layouts.main') 
@section('content') 
<style>
.btn.btn__primary.btn__float{
    display: none;
}
.swiper-wrapper{
    height: unset;
}
</style>

<main class="product-details">
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" data-wpel-link="internal">Beranda</a></li><li class="breadcrumb-item"><a href="/#type" data-wpel-link="internal">Produk</a></li><li class="breadcrumb-item"><a href="/fuso/{{$lineup->kategori}}" data-wpel-link="internal">{{$lineup->kategori}}</a></li><li class="breadcrumb-item active" aria-current="page">{{$lineup->nama}}</li>				
                    
                </ol>
            </nav>
        </div>
    </section>	
        
        
    
        
        <section id="hero" class="hero">
                        <img src="{{asset($lineup->banner)}}" height="1920" width="784" alt="Fighter X FM65FL Hi-Gear">
                                </section>
    
                                @forelse ($lineup_slider as $idx => $item)
                                <section id="feature" class="feature">
                                    <div class="container">
                                        <div class="section__title section__title--half">
                                            <h1>
                                                                 </h1>
                                        </div>
                                    </div>
                                    <div class="swiper swiperFeature swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                        <div class="swiper-wrapper" id="swiper-wrapper-df64d9db21b3f3c0" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-0.2px, 0px, 0px);">
                                                                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 1" style="margin-right: 5px;">
                                                    <img loading="lazy" src="{{asset($item->gambar)}}" alt="Fighter X FM65FL Hi-Gear">
                                                    <div class="feature__desc">
                                                        {{$item->text}}
                                                    </div>
                                                </div>
                                                            </div>
                                        <div class="swiper-button-next swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-df64d9db21b3f3c0" aria-disabled="true"></div>
                                        <div class="swiper-button-prev swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-df64d9db21b3f3c0" aria-disabled="true"></div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        
                                </section>
        @empty
            
        @endforelse
                
    
    
        
    
                
                    <section id="spec" class="spec">
                        <div class="container">
                            <div class="section__title section__title--half">
                                <h2>
                                    Spesifikasi
                                </h2>
                            </div>
    
                            <div class="accordion accordion-flush" id="specAccordion">
                                @foreach ($lineup_spesifikasi as $idx => $item)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            {{$idx}}
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#specAccordion" style="">
                                        <div class="accordion-body">
                                            <div class="table-responsive-sm">
                                                <table class="table align-middle">
                                                    <tbody>
                                                        @forelse ($item as $data)
                                                        <tr>
                                                            <th>{{$data['text1']}}</th>
                                                            <td>{{$data['text2']}}</td>
                                                            <td>{{$data['text3']}}</td>
                                                        </tr>
                                                        @empty
                                                            
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
            
                                 </div>
          
                            </div>
                        </div>
                    </section>
                    <br><br><br><br><br>
                            
        <!-- -------------------------------------------------------------- -->
    
{{--     
            
            <section id="other" class="other">
                <div class="container">
                    <div class="section__title section__title--half">
                        <h2>
                            Produk Mistubishi FUSO Lainnya
                        </h2>
                        <p>
                            Memilih Mitsubishi FUSO adalah sebuah keputusan tepat yang akan menjadikan usaha berkembang pesat. Didukung oleh jaringan terluas di Indonesia.
                        </p>
                    </div>
                </div>
                <div class="swiper swiperOther swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight">
                    <div class="swiper-wrapper" id="swiper-wrapper-38799dcafa581ed0" aria-live="polite" style="height: 340px; transform: translate3d(-200px, 0px, 0px); transition-duration: 0ms;">
                        @forelse (getLineup($lineup->kendaraan_id,'') as $idx => $item)
                        <div class="swiper-slide" data-swiper-slide-index="{{$idx}}" style="width: 190px; margin-right: 10px;" role="group" aria-label="1 / 11">
                            <div class="other__wrapper">
                                <!-- Wed 18 Oct 2023 moved the next img tag inside a tag to allow clickable thumbnail-->
                                    <!-- the next img tag was from outside the a tag -->
                                <!-- <a class="stretched-link" href="https://www.ktbfuso.co.id/product-detail/45/fighter-x-fn62f-hd-r-mining-equipment/" data-wpel-link="internal"> -->
                                <a class="stretched-link" href="/fuso/{{$item->kategori}}/{{$item->slug}}">
                                    <img class="product-bottom-thumbnail" src="{{asset($item->thumbnail)}}" alt="{{$item->nama}}  ">
                                
                                    {{$item->nama}}                               </a>
                            </div>
                        </div>

                                            @empty
                                                
                                            @endforelse
    
                        
    
                    </div>
                    <div class="swiper-button-next only__desktop" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-38799dcafa581ed0" aria-disabled="false"></div>
                    <div class="swiper-button-prev only__desktop" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-38799dcafa581ed0" aria-disabled="false"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </section> --}}
                    
        <div class="quick-menu">
            <div class="quick-menu__wrapper">
                <div id="quickMenu" class="wave">
                    <div class="quick-menu__button">
    
                        <div class="quick">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect width="9" height="9" rx="2" fill="white"></rect>
    <rect y="12" width="9" height="9" rx="2" fill="white"></rect>
    <rect x="12" width="9" height="9" rx="2" fill="white"></rect>
    <rect x="12" y="12" width="9" height="9" rx="2" fill="white"></rect>
    </svg>
                            <span>Quick Menu</span>
                        </div>
                        <div class="close">
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.3828 3.53553L15.8473 0L10.1912 5.65612L4.53517 0.000110686L0.999633 3.53564L6.65564 9.19165L0.998047 14.8492L4.53358 18.3848L10.1912 12.7272L15.8489 18.3849L19.3844 14.8494L13.7267 9.19165L19.3828 3.53553Z" fill="white"></path>
    </svg>
                            <span>Close</span>
                        </div>
                    </div>
                </div>
                            <a class="dropdown dropstart">
                    <button class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <svg width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_816_5409)">
    <path d="M14.1429 13.125C13.2345 13.125 12.3996 13.4457 11.7406 13.982L7.62284 11.3548C7.74478 10.7917 7.74478 10.2082 7.62284 9.64515L11.7406 7.01794C12.3996 7.5543 13.2345 7.875 14.1429 7.875C16.2731 7.875 18 6.11211 18 3.9375C18 1.76289 16.2731 0 14.1429 0C12.0126 0 10.2857 1.76289 10.2857 3.9375C10.2857 4.23109 10.3175 4.51705 10.3772 4.79231L6.25942 7.41952C5.60037 6.8832 4.7655 6.5625 3.85714 6.5625C1.72692 6.5625 0 8.32539 0 10.5C0 12.6746 1.72692 14.4375 3.85714 14.4375C4.7655 14.4375 5.60037 14.1168 6.25942 13.5805L10.3772 16.2077C10.3163 16.4884 10.2856 16.775 10.2857 17.0625C10.2857 19.2371 12.0126 21 14.1429 21C16.2731 21 18 19.2371 18 17.0625C18 14.8879 16.2731 13.125 14.1429 13.125Z" fill="#FE5E00"></path>
    </g>
    <defs>
    <clipPath id="clip0_816_5409">
    <rect width="18" height="21" fill="white"></rect>
    </clipPath>
    </defs>
    </svg>
                        <span>Share</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <button class="dropdown-item btn btn__news" data-sharer="facebook" data-hashtag="KTBFuso" data-url="{{ url()->current() }}">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M17 3.50005C17 3.36745 16.9473 3.24027 16.8536 3.1465C16.7598 3.05273 16.6326 3.00005 16.5 3.00005H14C12.7411 2.93734 11.5086 3.37544 10.5717 4.21863C9.63485 5.06182 9.06978 6.24155 9 7.50005V10.2001H6.5C6.36739 10.2001 6.24021 10.2527 6.14645 10.3465C6.05268 10.4403 6 10.5674 6 10.7001V13.3001C6 13.4327 6.05268 13.5598 6.14645 13.6536C6.24021 13.7474 6.36739 13.8001 6.5 13.8001H9V20.5001C9 20.6327 9.05268 20.7598 9.14645 20.8536C9.24021 20.9474 9.36739 21.0001 9.5 21.0001H12.5C12.6326 21.0001 12.7598 20.9474 12.8536 20.8536C12.9473 20.7598 13 20.6327 13 20.5001V13.8001H15.62C15.7312 13.8017 15.8397 13.7661 15.9285 13.6991C16.0172 13.6321 16.0811 13.5374 16.11 13.4301L16.83 10.8301C16.8499 10.7562 16.8526 10.6787 16.8378 10.6036C16.8231 10.5286 16.7913 10.4579 16.7449 10.397C16.6985 10.3362 16.6388 10.2868 16.5704 10.2526C16.5019 10.2185 16.4265 10.2005 16.35 10.2001H13V7.50005C13.0249 7.25253 13.1411 7.02317 13.326 6.85675C13.5109 6.69033 13.7512 6.59881 14 6.60005H16.5C16.6326 6.60005 16.7598 6.54737 16.8536 6.45361C16.9473 6.35984 17 6.23266 17 6.10005V3.50005Z" fill="white"></path>
    </svg>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item btn btn__news" data-sharer="twitter" data-title="Fighter X FM65FL Hi-Gear" data-hashtags="KTBFuso" data-url="{{ url()->current() }}">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M21.7504 5.96017C21.0332 6.26954 20.2527 6.4922 19.4488 6.57892C20.2835 6.08306 20.9085 5.2997 21.2066 4.37579C20.4234 4.8417 19.5654 5.16841 18.6707 5.34142C18.2967 4.94163 17.8445 4.62315 17.342 4.40581C16.8396 4.18847 16.2978 4.07693 15.7504 4.07813C13.5355 4.07813 11.7543 5.87345 11.7543 8.07657C11.7543 8.38595 11.7918 8.69532 11.8527 8.99298C8.53633 8.81954 5.57852 7.23517 3.61211 4.80938C3.25381 5.42137 3.06605 6.1182 3.06836 6.82735C3.06836 8.21485 3.77383 9.43829 4.84961 10.1578C4.21564 10.1329 3.59651 9.9586 3.04258 9.64923V9.69845C3.04258 11.6414 4.41602 13.2516 6.24648 13.6219C5.90279 13.7112 5.54924 13.7568 5.19414 13.7578C4.93398 13.7578 4.68789 13.732 4.43945 13.6969C4.9457 15.2813 6.41992 16.432 8.17539 16.4695C6.80195 17.5453 5.08164 18.1781 3.21367 18.1781C2.87852 18.1781 2.56914 18.1664 2.24805 18.1289C4.01992 19.2656 6.12227 19.9219 8.38633 19.9219C15.7363 19.9219 19.7582 13.8328 19.7582 8.54767C19.7582 8.37423 19.7582 8.20079 19.7465 8.02735C20.5246 7.45782 21.2066 6.75235 21.7504 5.96017Z" fill="white"></path>
    </svg>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item btn btn__news" data-sharer="linkedin" data-url="{{ url()->current() }}">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.429 8.969H13.143V10.819C13.678 9.755 15.05 8.799 17.111 8.799C21.062 8.799 22 10.917 22 14.803V22H18V15.688C18 13.475 17.465 12.227 16.103 12.227C14.214 12.227 13.429 13.572 13.429 15.687V22H9.429V8.969ZM2.57 21.83H6.57V8.799H2.57V21.83ZM7.143 4.55C7.14315 4.88528 7.07666 5.21724 6.94739 5.52659C6.81812 5.83594 6.62865 6.11651 6.39 6.352C5.9064 6.83262 5.25181 7.10165 4.57 7.1C3.88939 7.09954 3.23631 6.8312 2.752 6.353C2.51421 6.11671 2.32539 5.83582 2.19634 5.52643C2.0673 5.21704 2.00058 4.88522 2 4.55C2 3.873 2.27 3.225 2.753 2.747C3.23689 2.26816 3.89024 1.9997 4.571 2C5.253 2 5.907 2.269 6.39 2.747C6.872 3.225 7.143 3.873 7.143 4.55Z" fill="white"></path>
    </svg>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item btn btn__news" data-sharer="whatsapp" data-title="Fighter X FM65FL Hi-Gear" data-url="{{ url()->current() }}" data-description="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M7.25301 18.494L7.97701 18.917C9.19795 19.6291 10.5866 20.0029 12 20C13.5823 20 15.129 19.5308 16.4446 18.6518C17.7602 17.7727 18.7855 16.5233 19.3911 15.0615C19.9966 13.5997 20.155 11.9911 19.8463 10.4393C19.5376 8.88743 18.7757 7.46197 17.6569 6.34315C16.538 5.22433 15.1126 4.4624 13.5607 4.15372C12.0089 3.84504 10.4004 4.00346 8.93855 4.60896C7.47674 5.21447 6.22731 6.23984 5.34826 7.55544C4.46921 8.87103 4.00001 10.4177 4.00001 12C3.99709 13.4139 4.37129 14.8029 5.08401 16.024L5.50601 16.748L4.85301 19.149L7.25301 18.494ZM2.00401 22L3.35601 17.032C2.46515 15.5049 1.99711 13.768 2.00001 12C2.00001 6.477 6.47701 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C10.2328 22.0029 8.49667 21.5352 6.97001 20.645L2.00401 22ZM8.39101 7.308C8.52501 7.298 8.66001 7.298 8.79401 7.304C8.84801 7.308 8.90201 7.314 8.95601 7.32C9.11501 7.338 9.29001 7.435 9.34901 7.569C9.64701 8.245 9.93701 8.926 10.217 9.609C10.279 9.761 10.242 9.956 10.124 10.146C10.0429 10.2745 9.95507 10.3986 9.86101 10.518C9.74801 10.663 9.50501 10.929 9.50501 10.929C9.50501 10.929 9.40601 11.047 9.44401 11.194C9.45801 11.25 9.50401 11.331 9.54601 11.399L9.60501 11.494C9.86101 11.921 10.205 12.354 10.625 12.762C10.745 12.878 10.862 12.997 10.988 13.108C11.456 13.521 11.986 13.858 12.558 14.108L12.563 14.11C12.648 14.147 12.691 14.167 12.815 14.22C12.877 14.246 12.941 14.269 13.006 14.286C13.0732 14.3031 13.1439 14.2999 13.2093 14.2767C13.2746 14.2536 13.3316 14.2116 13.373 14.156C14.097 13.279 14.163 13.222 14.169 13.222V13.224C14.2193 13.1771 14.2791 13.1415 14.3443 13.1196C14.4095 13.0977 14.4786 13.09 14.547 13.097C14.607 13.101 14.668 13.112 14.724 13.137C15.255 13.38 16.124 13.759 16.124 13.759L16.706 14.02C16.804 14.067 16.893 14.178 16.896 14.285C16.9 14.352 16.906 14.46 16.883 14.658C16.851 14.917 16.773 15.228 16.695 15.391C16.6416 15.5022 16.5707 15.6042 16.485 15.693C16.3841 15.7989 16.2736 15.8954 16.155 15.981C16.114 16.0119 16.0723 16.0419 16.03 16.071C15.9056 16.1499 15.7778 16.2233 15.647 16.291C15.3895 16.4278 15.1052 16.5063 14.814 16.521C14.629 16.531 14.444 16.545 14.258 16.535C14.25 16.535 13.69 16.448 13.69 16.448C12.2683 16.074 10.9534 15.3735 9.85001 14.402C9.62401 14.203 9.41501 13.989 9.20101 13.776C8.31101 12.891 7.63901 11.936 7.23101 11.034C7.02218 10.5913 6.90938 10.1094 6.90001 9.62C6.89589 9.01285 7.09436 8.42167 7.46401 7.94C7.53701 7.846 7.60601 7.748 7.72501 7.635C7.85201 7.515 7.93201 7.451 8.01901 7.407C8.13469 7.34903 8.26088 7.31502 8.39001 7.307L8.39101 7.308Z" fill="white"></path>
    </svg>
                            </button>
                        </li>
                        <li>
                            <button id="copyBtn" onclick="copy()" class="dropdown-item btn btn__news btn__copy">
                                <svg id="shareCopy" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M8.46588 11.2929C9.59888 10.1599 11.5749 10.1599 12.7079 11.2929L13.4149 11.9999L14.8289 10.5859L14.1219 9.87894C13.1789 8.93494 11.9229 8.41394 10.5869 8.41394C9.25088 8.41394 7.99488 8.93494 7.05188 9.87894L4.92988 11.9999C3.99417 12.9387 3.46875 14.21 3.46875 15.5354C3.46875 16.8609 3.99417 18.1322 4.92988 19.0709C5.39375 19.5355 5.94484 19.9038 6.55149 20.1547C7.15814 20.4056 7.80839 20.5341 8.46488 20.5329C9.12154 20.5343 9.77199 20.4058 10.3788 20.1549C10.9857 19.904 11.5369 19.5356 12.0009 19.0709L12.7079 18.3639L11.2939 16.9499L10.5869 17.6569C10.0233 18.2179 9.26055 18.5329 8.46538 18.5329C7.67021 18.5329 6.90741 18.2179 6.34388 17.6569C5.78238 17.0937 5.46708 16.3308 5.46708 15.5354C5.46708 14.7401 5.78238 13.9772 6.34388 13.4139L8.46588 11.2929Z" fill="white"></path>
    <path d="M11.9999 4.92899L11.2929 5.63599L12.7069 7.04999L13.4139 6.34299C13.9774 5.78198 14.7402 5.46702 15.5354 5.46702C16.3305 5.46702 17.0933 5.78198 17.6569 6.34299C18.2184 6.90626 18.5337 7.66916 18.5337 8.46449C18.5337 9.25983 18.2184 10.0227 17.6569 10.586L15.5349 12.707C14.4019 13.84 12.4259 13.84 11.2929 12.707L10.5859 12L9.17188 13.414L9.87887 14.121C10.8219 15.065 12.0779 15.586 13.4139 15.586C14.7499 15.586 16.0059 15.065 16.9489 14.121L19.0709 12C20.0066 11.0613 20.532 9.78991 20.532 8.46449C20.532 7.13908 20.0066 5.86771 19.0709 4.92899C18.1324 3.9928 16.861 3.46704 15.5354 3.46704C14.2098 3.46704 12.9383 3.9928 11.9999 4.92899V4.92899Z" fill="white"></path>
    </svg>
                            </button>
                        </li>
    
                    </ul>
                </a>
    
                <a href="/dealer" data-wpel-link="internal">
                    <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M7 5.07463C5.9 5.07463 5 5.98806 5 7.10448C5 8.22089 5.9 9.13433 7 9.13433C8.1 9.13433 9 8.22089 9 7.10448C9 5.98806 8.1 5.07463 7 5.07463ZM7 0C10.27 0 14 2.49672 14 7.25672C14 10.2812 11.87 13.4681 7.61 16.7869C7.25 17.071 6.75 17.071 6.39 16.7869C2.13 13.4579 0 10.2812 0 7.25672C0 2.49672 3.73 0 7 0Z" fill="#FE5E00"></path>
    </svg>
                    <span>Dealer</span>
                </a>
                <a href="{{asset($lineup->brosur)}}" attributes-list="" download="{{$lineup->nama}} - Brosur" data-wpel-link="internal">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.416 8.25H13.7493V2.75H8.24935V8.25H4.58268L10.9993 15.5833L17.416 8.25ZM3.66602 17.4167H18.3327V19.25H3.66602V17.4167Z" fill="#FE5E00"></path>
    </svg>
                    <span>Brosur</span>
                </a>
                <a href="https://wa.me/{{getSetting()->whatsapp}}" target="_blank" data-wpel-link="external" rel="nofollow noopener noreferrer">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M1.83766 20.1663L3.077 15.6123C2.26037 14.2125 1.83133 12.6203 1.834 10.9997C1.834 5.93692 5.93791 1.83301 11.0007 1.83301C16.0634 1.83301 20.1673 5.93692 20.1673 10.9997C20.1673 16.0624 16.0634 20.1663 11.0007 20.1663C9.38071 20.169 7.78927 19.7402 6.38983 18.9243L1.83766 20.1663ZM7.69241 6.69867C7.57404 6.70602 7.45837 6.7372 7.35233 6.79034C7.25289 6.84665 7.16212 6.91705 7.08283 6.99934C6.97283 7.10292 6.9105 7.19276 6.84358 7.27984C6.50479 7.72075 6.32256 8.26197 6.32566 8.81801C6.3275 9.26717 6.44483 9.70442 6.62816 10.1133C7.00308 10.9401 7.62 11.8155 8.43491 12.6268C8.63108 12.822 8.82266 13.0182 9.02891 13.2006C10.0404 14.0911 11.2456 14.7333 12.5489 15.0761L13.0705 15.1558C13.2401 15.165 13.4097 15.1522 13.5802 15.1439C13.8471 15.1301 14.1078 15.0579 14.3437 14.9322C14.4638 14.8703 14.5809 14.803 14.6948 14.7305C14.6948 14.7305 14.7342 14.7048 14.8094 14.648C14.9332 14.5563 15.0092 14.4913 15.1119 14.384C15.188 14.3052 15.254 14.2126 15.3044 14.1072C15.3759 13.9578 15.4474 13.6727 15.4767 13.4353C15.4987 13.2538 15.4923 13.1548 15.4896 13.0933C15.4859 12.9953 15.4043 12.8935 15.3154 12.8504L14.7819 12.6112C14.7819 12.6112 13.9844 12.2638 13.4977 12.0419C13.4463 12.0196 13.3913 12.0068 13.3354 12.0043C13.2727 11.9979 13.2093 12.005 13.1496 12.025C13.0898 12.0451 13.035 12.0778 12.9889 12.1208V12.1189C12.9843 12.1189 12.9229 12.1712 12.2602 12.9742C12.2221 13.0253 12.1697 13.0639 12.1096 13.0851C12.0496 13.1064 11.9845 13.1092 11.9228 13.0933C11.8631 13.0774 11.8046 13.0572 11.7477 13.0328C11.6341 12.9852 11.5947 12.9668 11.5167 12.9329L11.5122 12.9311C10.9877 12.7021 10.5022 12.3929 10.073 12.0144C9.9575 11.9136 9.85025 11.8036 9.74025 11.6973C9.37961 11.3519 9.06532 10.9612 8.80525 10.5349L8.75116 10.4478C8.71232 10.3893 8.68091 10.3262 8.65766 10.2599C8.62283 10.1252 8.71358 10.017 8.71358 10.017C8.71358 10.017 8.93633 9.77317 9.03991 9.64117C9.12616 9.53147 9.20663 9.41734 9.281 9.29926C9.38916 9.12509 9.42308 8.94634 9.36625 8.80792C9.10958 8.18092 8.84375 7.55667 8.57058 6.93701C8.5165 6.81417 8.35608 6.72617 8.21033 6.70876C8.16083 6.70326 8.11133 6.69776 8.06183 6.69409C7.93873 6.68798 7.81537 6.6892 7.69241 6.69776V6.69867Z" fill="#FE5E00"></path>
    </svg>
                    <span>WhatsApp</span>
                </a>
    
            </div>
        </div>
    
    </main>
@endsection
@section('script')

    <script>
           const quickMenu = document.getElementById('quickMenu');
    quickMenu.addEventListener('click', function () {
        // this.children.item(0).classList.toggle('fa-times');
        this.classList.toggle('open');
    });
    </script>
    <script>
        function copy(){
            navigator.clipboard.writeText(window.location.href + "/fuso/{{$lineup->kategori}}/{{$lineup->slug}}");
            alert('Copied the text!')
        }
    </script>
@endsection
