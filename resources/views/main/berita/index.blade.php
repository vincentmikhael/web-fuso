@extends('layouts.main')

@section('content')
<main class="news-list">
    
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/berita?kategori=Siaran Pers" data-wpel-link="internal">Beranda</a></li><li class="breadcrumb-item active" aria-current="page">Berita SBM</li>				
                    
                </ol>
            </nav>
        </div>
    </section>
        <section id="news" class="news">
            <div class="container">
                <div class="section__title">
                    <h1>
                                            Berita SBM                </h1>
                </div>
                
                
    <div class="row">

        @forelse ($berita as $idx => $item)
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
    
            </div>
        </section>
    
    </main>
@endsection