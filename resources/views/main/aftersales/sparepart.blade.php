@extends('layouts.main')

@section('content')

    {!!$sparepart->content!!}

    <section id="gallery" class="rm-gallery">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <h2 class="mb-4 mb-md-0">Daftar Genuine Sparepart Truk Mitsubishi Fuso</h2>
                </div>
                <div class="col-md-3 text-md-end">
                    <a class="btn btn__primary" href="/contact-us" data-wpel-link="internal">Hubungi Kami</a>
                </div>
            </div>
            <ul class="rm-gallery__cat">
                <li><a class="btn btn__sort" href="/layanan/sparepart/#gallery" data-wpel-link="internal">Semua</a></li>
                <li><a class="btn btn__sort" href="/layanan/sparepart?kategori_id=Engine#gallery" data-wpel-link="internal">Engine</a></li>
                <li><a class="btn btn__sort" href="/layanan/sparepart?kategori_id=Fuel#gallery" data-wpel-link="internal">Fuel</a></li>
                <li><a class="btn btn__sort" href="/layanan/sparepart?kategori_id=Cooling#gallery" data-wpel-link="internal">Cooling</a></li>
                <li><a class="btn btn__sort" href="/layanan/sparepart?kategori_id=Clutch#gallery" data-wpel-link="internal">Clutch</a></li>
                <li><a class="btn btn__sort" href="/layanan/sparepart?kategori_id=Intake & Exhaust#gallery" data-wpel-link="internal">Intake & Exhaust</a></li>
                <li><a class="btn btn__sort" href="/layanan/sparepart?kategori_id=Front Axle#gallery" data-wpel-link="internal">Front Axle</a></li>
                <li><a class="btn btn__sort" href="/layanan/sparepart?kategori_id=Front Suspension#gallery" data-wpel-link="internal">Front Suspension</a></li>
                <li><a class="btn btn__sort" href="/layanan/sparepart?kategori_id=Rear Axle#gallery" data-wpel-link="internal">Rear Axle</a></li>
                <li><a class="btn btn__sort" href="/layanan/sparepart?kategori_id=Oil & Fluid & Chemical#gallery" data-wpel-link="internal">Oil & Fluid & Chemical</a></li>
                <li><a class="btn btn__sort" href="/layanan/sparepart?kategori_id=Steering#gallery" data-wpel-link="internal">Steering</a></li>
                <li><a class="btn btn__sort" href="/layanan/sparepart?kategori_id=Brake#gallery" data-wpel-link="internal">Brake</a></li>
                <li><a class="btn btn__sort" href="/layanan/sparepart?kategori_id=Wheel & Tire#gallery" data-wpel-link="internal">Wheel & Tire</a></li>
                <li><a class="btn btn__sort" href="/layanan/sparepart?kategori_id=Propeller Shaft#gallery" data-wpel-link="internal">Propeller Shaft</a></li>
                <li><a class="btn btn__sort" href="/layanan/sparepart?kategori_id=Rear Suspension#gallery" data-wpel-link="internal">Rear Suspension</a></li>
                <li><a class="btn btn__sort" href="/layanan/sparepart?kategori_id=Interior#gallery" data-wpel-link="internal">Interior</a></li>
                
                                    </ul>
            
                                    
                                    <div class="row mr-gallery__pannel">
                                        @forelse ($data as $item)
                                        <div class="col mr-gallery__list">
                                                        <a href="#" class="mr-gallery__inner" data-bs-toggle="modal" data-bs-target="#{{$item->id}}">
                                                <img width="800" height="533" src="{{asset($item->gambar)}}" class="card-img-top wp-post-image" alt="Liquid Gasket Grey 75gr" decoding="async" loading="lazy" sizes="(max-width: 800px) 100vw, 800px">                                    <div class="mr-gallery__content">
                                                    <span>{{$item->kategori_id}}</span>                                        <h3>{{$item->nama}}</h3>
                                                                                                <p>{{$item->material}}</p>
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path></svg>
                                                </div>
                                            </a>
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="{{$item->id}}" tabindex="-1" aria-labelledby="galleryModalLabel1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title fs-5" id="galleryModalLabel1">
                                                                {{$item->nama}}                                                </h3>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="code__modal--body">
                                                                <ul>
                <li>Kode material: {{$item->material}}</li>
                <li>Deskripsi: {{$item->deskripsi}}</li>
                <li>Material grup: {{$item->material_grup}}</li>
                </ul>                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn__news btn__news--padd" data-bs-dismiss="modal">Tutup</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                </div>
                                                                @empty
                                        
                                                                @endforelse
                                                </div>
                                    
            
        </div>
    </section>
@endsection
