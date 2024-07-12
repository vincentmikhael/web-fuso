@extends('layouts.main')

@section('content')

<main class="telematics">
    
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" data-wpel-link="internal">Beranda</a></li><li class="breadcrumb-item"><a href="/service" data-wpel-link="internal">Layanan</a></li><li class="breadcrumb-item active" aria-current="page">Telematics</li>				
                    
                </ol>
            </nav>
        </div>
    </section>
        <section id="telematic" class="telematic">
            <div class="container">
                <div class="section__title section__title--half">
                    <h1>
                        Runner Telematic System
                    </h1>
                    <p>
                        Solusi manajemen kendaraan yang dikembangkan oleh PT. Krama Yudha Tiga Berlian Motors untuk memantau kendaraan secara real-time (Posisi, Kecepatan dan Riwayat Perjalanan Kendaraan) yang didukung dengan laporan yang lengkap dan mudah di akses melalui layar komputer ataupun smartphone Anda
                    </p>
                </div>
                <div class="telematic__link">
                    <a href="http://runner.ktbfuso.co.id/" target="_blank" class="btn btn__primary" data-wpel-link="external" rel="nofollow noopener noreferrer">
                        Login ke Aplikasi Telematics
                    </a>
                </div>
    
                <img src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//telematic/telematic-main.webp" alt="Telematics" class="telematic__main">
            </div>
        </section>
    
        {{-- <section id="feature" class="feature">
            <div class="container">
                <div class="row g-3">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 feature__col">
                            <div class="feature__content">
                                <div class="section__title telematic">
                                    <h2>
                                        Runner Telematics Features
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 d-md-flex align-items-center justify-content-center justify-content-md-end d-none">
                            <div class="section__title">
                                <a href="/service/telematics/aplikasi-runner" data-wpel-link="internal">
                                    <button class="btn btn__primary">
                                        Lihat Selengkapnya
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="mb-3 col-md-4 feature__col d-none">
                                <div class="feature__content" style="border: 1px solid #fe5e00;">
                                    <img src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//telematic/telematic-features-1.webp" alt="Job order planning">
                                    <p>
                                    </p>
                                    <p>
                                </p></div>
                            </div>
                            <div class="mb-3 col-md-4 feature__col px-2">
                                <a href="/service/telematics/aplikasi-runner#fiturutama" style="text-decoration: none; color: inherit;" data-wpel-link="internal">
                                    <div class="feature__content" style="border: 1px solid #fe5e00;">
                                        <img src="/wp-content/uploads/2023/07/map-pin-2-line.png" alt="Job order planning">
                                        <p>
                                            Fitur Utama
                                        </p>
                                        <p>
                                            Fitur-fitur andalan Runner Telematics System yang dapat memudahkan operasional bisnis Anda
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="mb-3 col-md-4 feature__col px-2">
                                <a href="/service/telematics/aplikasi-runner#sensortambahan" style="text-decoration: none; color: inherit;" data-wpel-link="internal">
                                    <div class="feature__content">
                                        <img src="/wp-content/uploads/2023/07/temp-cold-line.png" alt="Job order planning">
                                        <p>
                                            Sensor Tambahan
                                        </p>
                                        <p>
                                            Sensor tambahan pada Runner Telematics System untuk menunjang kebutuhan bisnis Anda yang lebih spesifik
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="mb-3 col-md-4 feature__col px-2">
                                <a href="/service/telematics/aplikasi-runner#infolainnya" style="text-decoration: none; color: inherit;" data-wpel-link="internal">
                                    <div class="feature__content">
                                        <img src="/wp-content/uploads/2023/07/stack-line.png" alt="Job order planning">
                                        <p>
                                            Informasi Lainnya
                                        </p>
                                        <p>
                                            Informasi menarik lainnya terkait Runner Telematics System
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-12 d-flex align-items-center justify-content-center justify-content-md-end d-md-none">
                                <div class="section__title">
                                    <a href="/service/telematics/aplikasi-runner" data-wpel-link="internal">
                                        <button class="btn btn__primary">
                                            Lihat Selengkapnya
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    
        <section id="app" class="app">
            <div class="container">
                <div class="section__title section__title--half">
                    <h2>
                        Cara kerja Aplikasi Telematics
                    </h2>
                    <p>
                        Cara kerja Telematics dimulai saat alat menerima signal dari satelit GPS, lalu sinyal diolah oleh penerima/receiver, sehingga data lokasi, kecepatan, waktu, dan arah pergerakan kendaraan tercatat, kemudian data tersebut dikirim melalui jaringan untuk ditampilkan pada peta digital di aplikasi pengguna. Dengan menggunakan Telematics, Anda memiliki data-data penting tentang pengemudi dan kendaraan, hal ini sangat berguna untuk menjadi bahan evaluasi dan menjaga supaya kendaraan Anda selalu dalam kondisi prima, efisien, efektif dan optimal dalam menjalankan bisnis.
                    </p>
                </div>
    
                <img class="app__img" src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//telematic/app-img.webp" alt="Cara Kerja Telematics">
            </div>
        </section>
    
        <section id="bengkel-runner" class="bengkel-runner">
            <div class="container">
                <figure>
                    <img src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/bengkel-runner.webp" alt="Telematics" class="mt-4">
                </figure>
                <div class="section__title section__title--half mt-5 pt-3">
                    <h2>Bengkel Runner</h2>
                    <p>Bengkel Runner merupakan sebuah sistem manajemen bengkel berbasis komputer yang dapat mendukung manajemen servis, operasional bengkel, perputaran inventory suku cadang serta dapat diintegrasikan dengan data telematik
                    </p>
                </div>
            </div>
        </section>
    
        <section id="fitur-bengkel" class="fitur-bengkel">
            <div class="container">
                <div class="section__title section__title--half mt-5"><h2>Fitur Bengkel Runner</h2>
                    <p>Bengkel Runner juga dapat mengelola berbagai aktivitas maintenance lain seperti: Multi-level approval, pencatatan riwayat servis, service delivery monitoring dll.</p>
                    <figure>
                        <img src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/fitur-bengkel.webp" alt="Telematics" class="mt-5">
                    </figure>
                </div>
            </div>
        </section>
    
        <section id="manfaat-bengkel" class="manfaat-bengkel">
            <div class="container">
                <div class="section__title section__title--half mt-5">
                    <h2>Manfaat Bengkel Runner</h2>  
                    </div>
                <figure>
                    <img src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/manfaat-bengkel.webp" alt="Telematics" class="mt-5">
                </figure>
            </div>
        </section>
{{--     
        <section id="cs" class="cs">
            <div class="container">
                <div class="row gy-3 cs__row">
                    <div class="col-md-6">
                        <div class="cs__child">
                            <img src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//telematic/cs-1.webp" alt="Download Brosur">
                            <h2>
                                Download Brosur
                            </h2>
                            <p>
                                Aktifkan Runner Telematics System Anda melalui dealer Mitsubishi FUSO dan nikmati manfaatnya. Untuk informasi lebih lanjut, silahkan download brosur di bawah ini
                            </p>
                            <a href="https://www.ktbfuso.co.id/wp-content/uploads/2023/07/MITSUBISHI_RUNNER-Flyer.pdf" download="" class="btn btn__primary" data-wpel-link="internal">
                                Download
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cs__child">
                            <img src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//telematic/cs-2.webp" alt="Call Center">
                            <h2>
                                Call Center
                            </h2>
                            <p>
                                Layanan Call Center Runner 24/7 yang siap membantu Anda di mana saja dan kapan saja:
                            </p>
                            <p>
                                <strong>Whatsapp (Chat only):</strong> 0811-1526-947 / 0811-3386-953
                            </p>
                            <p>
                                <strong>Call Center:</strong> 021-47899200
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     --}}
    
    </main>

@endsection
