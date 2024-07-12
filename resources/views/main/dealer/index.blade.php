@extends('layouts/main')
@section('css')
<link rel='stylesheet' id='leaflet-styles-css'  href='wp-content/themes/miratfuso/css/leaflet4868.css?ver=0.9.4.1658254206' type='text/css' media='all' />
<link rel='stylesheet' id='markercluster-styles-css'  href='wp-content/themes/miratfuso/css/markercluster345f.css?ver=0.9.4.1657487916' type='text/css' media='all' />
<link rel='stylesheet' id='markercluster-default-styles-css'  href='wp-content/themes/miratfuso/css/markercluster-defaultc2f0.css?ver=0.9.4.1657566660' type='text/css' media='all' />
@endsection
@section('content')
<main style="overflow: hidden;" class="dealers">
    
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" data-wpel-link="internal">Beranda</a></li><li class="breadcrumb-item active" aria-current="page">Dealer</li>				
                    
                </ol>
            </nav>
        </div>
    </section>
        <section id="dealer" class="dealer">
    
            <div class="container">
                <div class="section__title mb-md-5">
                    <h1>
                        Temukan Lokasi Fuso Dealer
                    </h1>
                </div>
            </div>
    
            <div class="row">
                <div id="mapmain" style="height:340px;"></div>
            </div>
    
                <div class="container">

                    @forelse ($cabang as $item)
                    <div class="row g-3 dealer__row dealer__row--list">
                        <div class="col-lg-6">
                            <h2>{{$item->nama}}</h2>
                            <p>{{$item->alamat}}</p>
                        </div>
                                                        <div class="col-lg-2 col-md-4 col-6">
                                <a class="btn btn__dealer" href="https://wa.me/{{$item->whatsapp}}" target="_blank" data-wpel-link="external" rel="nofollow noopener noreferrer">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1880_1763)">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.00065 1.33325C4.31865 1.33325 1.33398 4.31792 1.33398 7.99992C1.33398 9.25992 1.68398 10.4399 2.29265 11.4453L1.69798 13.4666C1.66384 13.5826 1.66159 13.7058 1.69148 13.823C1.72137 13.9402 1.78228 14.0472 1.86782 14.1327C1.95337 14.2183 2.06037 14.2792 2.1776 14.3091C2.29482 14.339 2.41793 14.3367 2.53398 14.3026L4.55532 13.7079C5.59443 14.3366 6.78613 14.6682 8.00065 14.6666C11.6827 14.6666 14.6673 11.6819 14.6673 7.99992C14.6673 4.31792 11.6827 1.33325 8.00065 1.33325ZM6.49265 9.50859C7.84132 10.8566 9.12865 11.0346 9.58332 11.0513C10.2747 11.0766 10.948 10.5486 11.21 9.93592C11.2431 9.8597 11.2551 9.776 11.2447 9.69356C11.2344 9.61112 11.2022 9.53296 11.1513 9.46725C10.786 9.00059 10.292 8.66525 9.80932 8.33192C9.70854 8.26224 9.5847 8.23429 9.46377 8.25393C9.34283 8.27356 9.2342 8.33927 9.16065 8.43725L8.76065 9.04725C8.73962 9.08005 8.70685 9.10356 8.66905 9.11298C8.63125 9.1224 8.59128 9.11701 8.55732 9.09792C8.28598 8.94259 7.89065 8.67859 7.60665 8.39459C7.32265 8.11059 7.07465 7.73325 6.93532 7.47925C6.91804 7.44698 6.91305 7.40954 6.92126 7.37387C6.92947 7.3382 6.95034 7.30672 6.97998 7.28525L7.59598 6.82792C7.68389 6.75148 7.74063 6.64538 7.75538 6.52983C7.77013 6.41427 7.74187 6.29732 7.67598 6.20125C7.37732 5.76392 7.02932 5.20792 6.52465 4.83925C6.45952 4.79205 6.38323 4.76263 6.30327 4.75386C6.22332 4.74509 6.14246 4.75729 6.06865 4.78925C5.45532 5.05192 4.92465 5.72525 4.94998 6.41792C4.96665 6.87259 5.14465 8.15992 6.49265 9.50859V9.50859Z" fill="#FE5E00"></path>
</g>
<defs>
<clipPath id="clip0_1880_1763">
<rect width="16" height="16" fill="white"></rect>
</clipPath>
</defs>
</svg>
                                    {{$item->whatsapp}}                                    </a>
                            </div>
                        
                        
                                                        <div class="col-lg-2 col-md-4 col-6">
                                <a class="btn btn__dealer" href="tel:{{$item->telepon}}" target="_blank" data-wpel-link="internal">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.68913 8.31525C10.3485 10.9739 10.9518 7.89814 12.6451 9.5902C14.2775 11.2222 15.2157 11.5491 13.1475 13.6168C12.8884 13.825 11.2424 16.3298 5.4577 10.5468C-0.327683 4.76299 2.17569 3.11529 2.38395 2.85629C4.45721 0.782889 4.77854 1.72658 6.41096 3.35854C8.10421 5.05132 5.02974 5.6566 7.68913 8.31525Z" fill="#FE5E00"></path>
</svg>
                                    {{$item->telepon}}                                    </a>
                            </div>
                        
                                                        <div class="col-lg-2 col-md-4">
                                <a class="btn btn__dealer" href="https://maps.google.com/?q={{$item->lon}},{{$item->lat}}" target="_blank" data-wpel-link="external" rel="nofollow noopener noreferrer">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.28986 4.49275C7.30145 4.49275 6.49275 5.30145 6.49275 6.28985C6.49275 7.27826 7.30145 8.08696 8.28986 8.08696C9.27826 8.08696 10.087 7.27826 10.087 6.28985C10.087 5.30145 9.27826 4.49275 8.28986 4.49275ZM8.28986 0C11.2281 0 14.5797 2.21043 14.5797 6.42464C14.5797 9.10232 12.6658 11.9238 8.83797 14.862C8.51449 15.1136 8.06522 15.1136 7.74174 14.862C3.91391 11.9148 2 9.10232 2 6.42464C2 2.21043 5.35159 0 8.28986 0Z" fill="#FE5E00"></path>
</svg>
                                    Petunjuk Map
                                </a>
                            </div>
                        
                    </div>
                    @empty
                        
                    @endforelse
    
    
                </div>
                    <div class="d-flex justify-content-center pb-4">
    
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