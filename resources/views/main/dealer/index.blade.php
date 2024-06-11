@extends('layouts/main')
@section('css')
<link rel='stylesheet' id='leaflet-styles-css'  href='wp-content/themes/miratfuso/css/leaflet4868.css?ver=0.9.4.1658254206' type='text/css' media='all' />
<link rel='stylesheet' id='markercluster-styles-css'  href='wp-content/themes/miratfuso/css/markercluster345f.css?ver=0.9.4.1657487916' type='text/css' media='all' />
<link rel='stylesheet' id='markercluster-default-styles-css'  href='wp-content/themes/miratfuso/css/markercluster-defaultc2f0.css?ver=0.9.4.1657566660' type='text/css' media='all' />
@endsection
@section('content')
<div class="page-advanced" id="wrapper-advanced">

    <section class="breadcrumb-wrapper">
        <div class="container">
            <div class="top">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Beranda</a></li><li class="breadcrumb-item active" aria-current="page">Lokasi Dealer</li></ol>            </nav>
            </div>
            <div class="bottom">
                <div class="pages-title">Lokasi Dealer</div>
            </div>
        </div>
    </section>
    
    <section class="maps-wrapper">
        <div class="floating-items">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-auto col-12 mb-4 mb-lg-0">
                        <div class="maps-title title">
                            <h1 class="light">DEALER KAMI</h1>
                        </div>
                    </div>
                    <div class="col-lg d-none d-lg-block"></div>
                    <div class="d-none search-box col-lg-4 col-sm col-12">
                        <form action="/" method="GET">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" value="" name="location" placeholder="Temukan Kota" aria-describedby="button-addon2" />
                                <div class="input-group-append">
                                    <button class="btn btn-yellow" type="submit" id="button-addon2"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="map" style="height:650px;"></div>
    </section>
    
    <div class="container my-5">
        <div class="row">
        @forelse ($cabang as $item)
            <div class="col-md-12">
                <div class="d-md-flex justify-content-between align-items-center">
                    <div>
                        <h4>{{$item->nama}}</h4>
                        <p>{{$item->alamat}}</p>
                    </div>
                    <div>
                        <a class="btn btn-outline" style="border-color: #FE5E00 !important; color:#FE5E00 !important; font-weight: bold;" href="https://wa.me/{{$item->whatsapp}}"> <i style="font-weight: bold;" class="fa fa-whatsapp"></i> {{$item->whatsapp}}</a>
                        <a style="border-color: #FE5E00 !important; color:#FE5E00 !important; font-weight: bold;" class="btn btn-outline mx-1 my-2" href="https://wa.me/{{$item->telepon}}"> <i style="font-weight: bold;" class="fa fa-phone"></i> {{$item->telepon}}</a>
                        <a style="border-color: #FE5E00 !important; color:#FE5E00 !important; font-weight: bold;" class="btn btn-outline" href="https://maps.google.com/?q={{$item->lon}},{{$item->lat}}" target="_BLANK"> <i style="font-weight: bold;" class="fas fa-map-marker-alt"></i> Petunjuk Maps</a>
                    </div>
                </div>
                <hr>
                    
            </div>
        @empty
            
        @endforelse
    </div>
    </div>
    
    </div>
@endsection

@section('js')
<script type='text/javascript' src='wp-content/themes/miratfuso/js/leafleta191.js?ver=0.9.4.1657484526' id='leaflet-scripts-js'></script>
<script type='text/javascript' src='wp-content/themes/miratfuso/js/markerclustererb84d.js?ver=0.9.4.1657479942' id='markerclusterer-scripts-js'></script>
<script>
    let dataCabang = @json($cabang);
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

    const map = L.map("map").setView([-3.944836, 118.389827], 5);
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
                '</div>' +
                '<div class="logo-map-wrapper">' +
                    '<img src="/wp-content/themes/miratfuso/img/bbm-logo-dealer.png" />' +
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