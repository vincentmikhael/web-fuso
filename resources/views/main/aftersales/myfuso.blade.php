@extends('layouts.main')

@section('content')

<main class="telematics">
    
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" data-wpel-link="internal">Beranda</a></li><li class="breadcrumb-item"><a href="/service" data-wpel-link="internal">Layanan</a></li><li class="breadcrumb-item active" aria-current="page">MyFUSO</li>				
                    
                </ol>
            </nav>
        </div>
    </section>
        <section id="telematic" class="telematic">
            <div class="container">
                <div class="section__title section__title--half">
                    <h1>
                        MyFUSO
                    </h1>
                    <p>
                        Aplikasi digital SBM yang ditujukan untuk pelanggan truk Fuso yang untuk membantu dan mempermudah dalam mendapatkan informasi produk, layanan, serta program-program lainnya.
                    </p>
                </div>
                <div class="telematic__link download__myfuso">
                    <a href="http://runner.ktbfuso.co.id/" target="_blank" class="btn btn__primary" data-wpel-link="external" rel="nofollow noopener noreferrer">
                        Download sekarang
                    </a>
                </div>
    
                <div class="row justify-content-center download__myfuso-google">
                    <div class="col-md-3 mt-4 pt-2">
                        <a href="https://play.google.com/store/apps/details?id=com.myfuso.prod&amp;pcampaignid=web_share" target="_blank" data-wpel-link="external" rel="nofollow noopener noreferrer">
                            <img src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/google-play.webp" width="250" alt="Google Store">
                        </a>
                    </div>
                </div>
    
                <img src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/MyFUSO.webp" alt="MyFUSO" class="telematic__main">
            </div>
        </section>
    
        <section id="feature" class="feature">
            <div class="container">
                <div class="section__title section__title--half mb-5">
                    <h2>
                        Keunggulan MyFUSO
                    </h2>
                </div>
    
                <div class="row g-3">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="mb-3 col-md-4 feature__col px-2 d-none">
                                <div class="feature__content" style="border: 1px solid #fe5e00;"></div>
                            </div>
                            <div class="mb-3 col-md-4 feature__col px-2">
                                <div class="feature__content">
                                    <img src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/fyl.webp" alt="Fitur yang lengkap">
                                    <p>
                                        Fitur yang lengkap
                                    </p>
                                    <p>
                                        Kelola segala kebutuhan dalam satu aplikasi
                                    </p>
                                </div>
                            </div>
                            <div class="mb-3 col-md-4 feature__col px-2">
                                <div class="feature__content">
                                    <img src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/abp.webp" alt="Akses di Berbagai Platform">
                                    <p>
                                        Akses di Berbagai Platform
                                    </p>
                                    <p>
                                        Dapat diakses melalui berbagai perangkat elektronik dan didownload dengan sistem android ataupun IOS
                                    </p>
                                </div>
                            </div>
                            <div class="mb-3 col-md-4 feature__col px-2">
                                <div class="feature__content">
                                    <img src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/abp-1.webp" alt="Akses Informasi Kendaraan">
                                    <p>
                                        Akses Informasi Kendaraan
                                    </p>
                                    <p>
                                        Dengan mudah melakukan pengecekan riwayat service sertifikat garansi, PKT, dsb
                                    </p>
                                </div>
                            </div>
                            <div class="mb-3 col-md-4 feature__col px-2">
                                <div class="feature__content">
                                    <img src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/sdr.webp" alt="Single Sign On dengan Runner">
                                    <p>
                                        Single Sign On dengan Runner
                                    </p>
                                    <p>
                                        Hanya perlu melakukan satu kali login untuk mengakses MyFUSO dan Runner
                                    </p>
                                </div>
                            </div>
                            <div class="mb-3 col-md-4 feature__col px-2">
                                <div class="feature__content">
                                    <img src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/tdd.webp" alt="Terintegrasi dengan Dealer">
                                    <p>
                                        Terintegrasi dengan Dealer
                                    </p>
                                    <p>
                                        Dapat menyampaikan informasi kepada dealer yang bersangkutan pada MyFUSO
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="fitur-bengkel" class="services pt-2">
            <div class="container">
                <div class="section__title row justify-content-center mb-5">
                    <div class="col-lg-6 text-center">
                        <h2>Fitur MyFUSO</h2>
                        <p>MyFUSO dilengkapi dengan berbagai fitur yang lengkap untuk memberikan kemudahan pagi pelanggan SBM</p>
                    </div>
                </div>
                
                <div class="row g-3 justify-content-center">
                    <div class="col-lg-4 col-6 ourserv__col">
                        <a class="services_modal" href="#" data-bs-toggle="modal" data-bs-target="#servicesModal1">
                            <div class="ourserv__content">
                                <figure class="ourserv__content-figure">
                                    <img class="img__full" src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/pk.webp" alt="Pengelolaan Kendaraan">
                                </figure>
                                <h3>Pengelolaan Kendaraan</h3>
                            </div>
                        </a>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="servicesModal1" tabindex="-1" aria-labelledby="servicesModalLabel1" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-5" id="servicesModalLabel1">Pengelolaan Kendaraan</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="code__modal--body">
                                            <p>test</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn__news btn__news--padd" data-bs-dismiss="modal">Tutup</button>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-6 ourserv__col">
                        <a class="services_modal" href="#" data-bs-toggle="modal" data-bs-target="#servicesModal2">
                            <div class="ourserv__content">
                                <figure class="ourserv__content-figure">
                                    <img class="img__full" src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/rs.webp" alt="Riwayat Service">
                                </figure>
                                <h3>Riwayat Service</h3>
                            </div>
                        </a>
    
                        <!-- Modal -->
                        <div class="modal fade" id="servicesModal2" tabindex="-1" aria-labelledby="servicesModalLabel2" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-5" id="servicesModalLabel2">
                                        Riwayat Service                                          </h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="code__modal--body">
                                            <p><span style="font-weight: 400;">Layanan antar jemput gratis bagi pengemudi setelah memasukkan kendaraan ke bengkel untuk diservis.</span></p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn__news btn__news--padd" data-bs-dismiss="modal">Tutup</button>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-6 ourserv__col">
                        <a class="services_modal" href="#" data-bs-toggle="modal" data-bs-target="#servicesModal3">
                            <div class="ourserv__content">
                                <figure class="ourserv__content-figure">
                                    <img class="img__full" src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/sb.webp" alt="Service Booking">
                                </figure>
                                <h3>Service Booking</h3>
                            </div>
                        </a>
    
                        <!-- Modal -->
                        <div class="modal fade" id="servicesModal3" tabindex="-1" aria-labelledby="servicesModalLabel3" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-5" id="servicesModalLabel3">
                                        Service Booking                                          </h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="code__modal--body">
                                            <p><span style="font-weight: 400;">Merupakan layanan berupa fasilitas servis dengan menggunakan Truk Mitsubishi Colt Diesel &amp; Fuso yang dilengkapi dengan peralatan servis yang dapat melayani layanan servis layaknya di bengkel resmi. Layanan servis ini dapat langsung menjangkau customer yang membutuhkan bantuan layanan servis di tempat.</span></p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn__news btn__news--padd" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-6 ourserv__col">
                        <a class="services_modal" href="#" data-bs-toggle="modal" data-bs-target="#servicesModal4">
                            <div class="ourserv__content">
                                <figure class="ourserv__content-figure">
                                    <img class="img__full" src="https://www.ktbfuso.co.id/wp-content/uploads/2023/05/mws.webp" alt="MWS Service">
                                </figure>
                                <h3>MWS Service</h3>
                            </div>
                        </a>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="servicesModal4" tabindex="-1" aria-labelledby="servicesModalLabel4" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-5" id="servicesModalLabel4">
                                        MWS Service                                </h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="code__modal--body">
                                            <p><span style="font-weight: 400;">Service Booking merupakan layanan yang diberikan oleh MITSUBISHI FUSO dalam memberikan kepastian waktu &amp; ketersediaan spare part kendaraan konsumen.</span></p>
                                            <p><span style="font-weight: 400;">Konsumen dapat mengatur jadwal service yang diinginkan &amp; tidak perlu mengantri saat melakukan service kendaraannya.</span></p>
                                            <p><span style="font-weight: 400;">Didukung tenaga mekanik yang ahli dan terlatih, kami siap memberikan pelayanan servis terbaik dan terdepan bagi konsumen. Dilengkapi dengan fasilitas seperti truck center, mobile workshop service dan service booking untuk menunjang kinerja pelayanan servis kami kepada konsumen.</span></p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn__news btn__news--padd" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-6 ourserv__col">
                        <a class="services_modal" href="#" data-bs-toggle="modal" data-bs-target="#servicesModal5">
                            <div class="ourserv__content">
                                <figure class="ourserv__content-figure">
                                    <img class="img__full" src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/kg.webp" alt="Klaim Garansi">
                                </figure>
                                <h3>Klaim Garansi</h3>
                            </div>
                        </a>
    
                        <!-- Modal -->
                        <div class="modal fade" id="servicesModal5" tabindex="-1" aria-labelledby="servicesModalLabel5" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-5" id="servicesModalLabel5">Klaim Garansi</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="code__modal--body">
                                            <p><span style="font-weight: 400;">Mitsubishi FUSO senantiasa memberikan pelatihan kepada driver dan mekanik customer fleet dengan tujuan agar dapat meningkatkan kemampuan dan produktivitas dalam menjalankan tugas mereka.</span></p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn__news btn__news--padd" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-6 ourserv__col">
                        <a class="services_modal" href="#" data-bs-toggle="modal" data-bs-target="#servicesModal6">
                            <div class="ourserv__content">
                                <figure class="ourserv__content-figure">
                                    <img class="img__full" src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/kp.webp" alt="Katalog Produk">
                                </figure>
                                <h3>Katalog Produk</h3>
                            </div>
                        </a>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="servicesModal6" tabindex="-1" aria-labelledby="servicesModalLabel6" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-5" id="servicesModalLabel6">Katalog Produk</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="code__modal--body">
                                            <p><span style="font-weight: 400;">Mitsubishi FUSO menyediakan layanan terbaik kepada konsumen berupa Service Cepat untuk penggantian Oli &amp; Filter, sehingga aktivitas Servis tidak akan mengganggu bisnis konsumen.</span></p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn__news btn__news--padd" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-6 ourserv__col">
                        <a class="services_modal" href="#" data-bs-toggle="modal" data-bs-target="#servicesModal7">
                            <div class="ourserv__content">
                                <figure class="ourserv__content-figure">
                                    <img class="img__full" src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/ksc.webp" alt="Katalog Suku Cadang">
                                </figure>
                                <h3>Katalog Suku Cadang</h3>
                            </div>
                        </a>
    
                        <!-- Modal -->
                        <div class="modal fade" id="servicesModal7" tabindex="-1" aria-labelledby="servicesModalLabel7" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-5" id="servicesModalLabel7">Katalog Suku Cadang</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="code__modal--body">
                                            <p><span style="font-weight: 400;">Fuso Customer Care di nomor 1500144 untuk meningkatkan layanan dan kepuasaan pada konsumen. Layanan ini dapat diakses oleh seluruh pelanggan yang membutuhkan informasi seputar produk, service, spare parts, Runner Telematics, ataupun keluhan lainnya. Silahkan menghubungi kami di nomer tersebut yang beroperasi pada pukul 08:00 – 17:00 (pada jam kerja).</span></p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn__news btn__news--padd" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-6 ourserv__col">
                        <a class="services_modal" href="#" data-bs-toggle="modal" data-bs-target="#servicesModal8">
                            <div class="ourserv__content">
                                <figure class="ourserv__content-figure">
                                    <img class="img__full" src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/sk.webp" alt="Simulasi Kredit">
                                </figure>
                                <h3>Simulasi Kredit</h3>
                            </div>
                        </a>
    
                        <!-- Modal -->
                        <div class="modal fade" id="servicesModal8" tabindex="-1" aria-labelledby="servicesModalLabel8" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-5" id="servicesModalLabel8">Simulasi Kredit</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="code__modal--body">
                                            <p><span style="font-weight: 400;">Dalam rangka memenuhi peraturan Indonesia yaitu Peraturan Menteri Perhubungan No.33/2018 Tentang Pengujian Tipe Kendaraan Bermotor, dan Peraturan Menteri Perhubungan No.53/2019 tentang Tata Cara Penarikan Kembali Kendaraan Bermotor, PT Krama Yudha Tiga Berlian Motors (“PT SBM”) sebagai distributor resmi Mitsubishi Fuso Truck and Bus Corporation di Indonesia memberikan informasi di website SBM dengan penjelasan sebagai berikut.</span></p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn__news btn__news--padd" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-6 ourserv__col">
                        <a class="services_modal" href="#" data-bs-toggle="modal" data-bs-target="#servicesModal9">
                            <div class="ourserv__content">
                                <figure class="ourserv__content-figure">
                                    <img class="img__full" src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/hk.webp" alt="Hubungi Kami">
                                </figure>
                                <h3>Hubungi Kami</h3>
                            </div>
                        </a>
    
                        <!-- Modal -->
                        <div class="modal fade" id="servicesModal9" tabindex="-1" aria-labelledby="servicesModalLabel9" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-5" id="servicesModalLabel9">Hubungi Kami</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="code__modal--body">
                                            <p>Layanan purna jual yang pertama di Indonesia di bawah standarisasi PT. SBM yang menyediakan layanan perbaikan chassis, perbaikan kabin, penggantian suku cadang resmi, dan pengecatan ulang dimana semua fasilitas ini sesuai dengan standard Mitsubishi Fuso di Indonesia</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn__news btn__news--padd" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-6 ourserv__col">
                        <a class="services_modal" href="#" data-bs-toggle="modal" data-bs-target="#servicesModal10">
                            <div class="ourserv__content">
                                <figure class="ourserv__content-figure">
                                    <img class="img__full" src="https://www.ktbfuso.co.id/wp-content/uploads/2024/04/nt.webp" alt="Notifikasi">
                                </figure>
                                <h3>Notifikasi</h3>
    
                            </div>
                        </a>
    
                        <!-- Modal -->
                        <div class="modal fade" id="servicesModal10" tabindex="-1" aria-labelledby="servicesModalLabel10" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-5" id="servicesModalLabel10">Notifikasi</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="code__modal--body">
                                            <p>Layanan purna jual yang pertama di Indonesia di bawah standarisasi PT. SBM yang menyediakan layanan perbaikan chassis, perbaikan kabin, penggantian suku cadang resmi, dan pengecatan ulang dimana semua fasilitas ini sesuai dengan standard Mitsubishi Fuso di Indonesia</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn__news btn__news--padd" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    </main>

@endsection
