-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2024 at 03:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuso`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksesoris`
--

CREATE TABLE `aksesoris` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_kendaraan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `aksesoris`
--

INSERT INTO `aksesoris` (`id`, `nama`, `harga`, `gambar`, `id_kendaraan`) VALUES
(2, 'Dolorem alala', 'Voluptates blanditii', 'images/aksesoris_kendaraan/1716778904new-mmc.png', 1),
(3, 'Engine Hood Emblem Black', 'Rp 500.000', 'images/aksesoris_kendaraan/171703526629.jpg', 3),
(4, 'Luggage Tray', 'Rp 399.999', 'images/aksesoris_kendaraan/1717035454luggage.jpg', 3),
(5, 'Mud Guard', 'Rp 800.000', 'images/aksesoris_kendaraan/1717035515mud guard.webp', 3),
(6, 'Tailgate Spoiler', 'Rp 2.000.000', 'images/aksesoris_kendaraan/1717035583tailgate.jpg', 3),
(7, 'Side Visor', 'Rp 400.000', 'images/aksesoris_kendaraan/1717035642Black-Car-Exterior-Accessories-Window-Sun-Visor-for-Toyota-Camry-70-2017.webp', 3),
(8, 'Lorem Ipsum', 'Rp 20.000', 'images/aksesoris_kendaraan/171703566729.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int NOT NULL,
  `background` varchar(255) NOT NULL,
  `background_mobile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `background`, `background_mobile`) VALUES
(10, 'images/banner/1717778064.webp', NULL),
(11, 'images/banner/1719239050.webp', 'images/banner/1719239050.webp');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `slug` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `content` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `slug`, `judul`, `gambar`, `content`, `kategori`, `tanggal`, `created_by`, `updated_by`) VALUES
(2, 'program-penjualan-mitsubishi-mei-2024', 'Program Penjualan – Mitsubishi MEI 2024', 'images/cover_berita/promo1.png', '<p>Pada periode April 2024 ini kami memberikan berbagai kemudahan dalam melakukan pembelian dan proses kepemilikan kendaraan melalui program penjualan menarik untuk konsumen yang ingin melakukan pembelian kendaraan di bulan April 2024.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1. Program Pembiayaan Melalui PT. Dipo Star Finance (S&amp;K berlaku):</p>\r\n\r\n<p>o &nbsp; Program DP ringan:</p>\r\n\r\n<ul>\r\n	<li>DP ringan mulai dari 15%</li>\r\n</ul>\r\n\r\n<p>o &nbsp; Program Bunga ringan:</p>\r\n\r\n<ul>\r\n	<li>bunga ringan mulai dari 0% hingga 2 tahun</li>\r\n	<li>DP mulai dari 25% (2 tahun 0% berlaku DP min. 55%)</li>\r\n</ul>\r\n\r\n<p>o &nbsp; Program Konsumen Loyal Mitsubishi Motors:</p>\r\n\r\n<ul>\r\n	<li>DP mulai dari 55% dengan bunga mulai dari 0% hingga 2 tahun</li>\r\n</ul>\r\n\r\n<p>o &nbsp;Program SMART CASH:</p>\r\n\r\n<ul>\r\n	<li>bunga 0%</li>\r\n	<li>DP mulai dari 55%</li>\r\n	<li>Bonus asuransi &amp; tanpa biaya administrasi</li>\r\n</ul>\r\n\r\n<p>2. Gratis kaca film Solargard.</p>\r\n\r\n<p>3. Gratis perawatan/servis berkala hingga 50.000 km atau 4 tahun.</p>\r\n\r\n<p>4. Extended Warranty 1 tahun atau 20.000 KM apabila melakukan perawatan berkala secara teratur sampai dengan 3 (tiga) tahun atau 40.000 KM.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><a href=\"https://bosowaberlian.co.id/mitsubishi/produk/new-xpander-cross/\" rel=\"noreferrer noopener\" target=\"_blank\">New Xpander Cross</a></strong></p>\r\n\r\n<p>1. Program Cashback hingga jutaan rupiah berlaku untuk semua varian (S&amp;K berlaku)</p>\r\n\r\n<p>2. Program pilihan pembiayaan melalui PT. Dipo Star Finance (S&amp;K berlaku):</p>\r\n\r\n<p>o &nbsp; Program DP ringan:</p>\r\n\r\n<ul>\r\n	<li>DP mulai 10% (Tidak mengikat seluruh cabang), dan</li>\r\n</ul>\r\n\r\n<p>o &nbsp; Program Bunga Rendah:</p>\r\n\r\n<ul>\r\n	<li>Bunga 0% sampai dengan tenor 2 tahun, dan</li>\r\n	<li>Gratis biaya administrasi</li>\r\n</ul>\r\n\r\n<p>o &nbsp; Program SMART CASH:</p>\r\n\r\n<ul>\r\n	<li>Bunga 0% hingga 1 tahun, dan&nbsp;</li>\r\n	<li>Gratis biaya asuransi, dan</li>\r\n	<li>Gratis biaya administrasi</li>\r\n</ul>\r\n\r\n<p>o &nbsp; Program Konsumen Loyal Mitsubishi Motors:</p>\r\n\r\n<ul>\r\n	<li>DP mulai dari 55%, dan&nbsp;</li>\r\n	<li>Bunga 0% hingga 2 tahun, dan&nbsp;</li>\r\n	<li>Gratis biaya administrasi</li>\r\n</ul>\r\n\r\n<p>o &nbsp; Program Cicilan Pintar:</p>\r\n\r\n<ul>\r\n	<li>Buyback guarantee sampai dengan 73%, atau&nbsp;</li>\r\n	<li>Angsuran sampai dengan 7 tahun</li>\r\n</ul>\r\n\r\n<p>3. Gratis kaca film V-Kool untuk variant Premium CVT dan kaca film Konica Minolta atau Solargard untuk variant MT.</p>', 'Promo', '2024-05-29 11:06:58', '', NULL),
(3, 'l100-ev-kendaraan-operasional-tangguh-dipakai-oleh-banyak-perusahaan-besar-di-jepang', 'L100 EV KENDARAAN OPERASIONAL TANGGUH DIPAKAI OLEH BANYAK PERUSAHAAN BESAR DI JEPANG', 'images/cover_berita/Mitsubishi-L100.jpg', '<p>Mitsubishi L100 EV adalah kendaraan niaga bertenaga listrik yang diproduksi dan dijual Mitsubishi Indonesia. Menariknya, sebelum resmi dijual untuk pasar dalam negeri, L100 EV telah melakukan serangkaian uji coba (<em>Proof of Concept</em>&nbsp;) bersama beberapa perusahaan logistik dan jasa di Indonesia untuk melakukan berbagai aktivitas usaha sejak 2020 silam.</p>\r\n\r\n<p>Misalnya dengan PT Pos Indonesia, PT Haleyora Power, Gojek, DHL Supply Chain Indonesia, dan yang terbaru dijadikan gerai Lawson terkecil di dunia. Dalam aktivitas POC tersebut pada akhirnya menyimpulkan bahwa Mitsubishi L100 EV mampu mengakomodasi kebutuhan aktivitas operasional sehari-hari, dengan ukuran yang ringkas, kemudahan pengendaraan, bebas aturan ganjil-genap, dan paling penting sangat efisien!</p>\r\n\r\n<p>FYI, Mitsubishi L100 EV sebenarnya telah lama dimanfaatkan juga oleh perusahaan-perusahaan ternama di Jepang sebagai mobil operasional. Nah, beberapa di antaranya adalah:</p>\r\n\r\n<p><strong>1. Hakuyosha Co., Ltd. (Layanan kebersihan)</strong></p>\r\n\r\n<p>Perusahaan ini memakai Mitsubishi L100 EV untuk untuk sarana transportasi antara kantor cabang di Tokyo. Selain itu juga digunakan untuk mengumpulkan dan mengembalikan produk pembersih. &ndash; &ldquo;Biaya listrik mobil ini cuma 1/3 jika dibandingkan mobil berbahan bakar minyak, sehingga ada keuntungan dari segi biaya.&rdquo;</p>\r\n\r\n<p><strong>2. Mediceo Corp. (Layanan medis dan farmasi)</strong></p>\r\n\r\n<p>Menggunakan Mitsubishi L100 EV sebagai mobil pengiriman obat-obatan sampai jarak 100 km dari Tokyo. Mobil ini rata-rata juga dipakai menempuh jarak sekitar 30 km per harinya. &ndash; &ldquo;Dengan semua keunggulan mobil ini, berat rasanya kalau kami harus kembali memakai mobil berbahan bakar minyak.&rdquo;</p>\r\n\r\n<p><strong>3. Japan POST Co., Ltd. (Layanan kurir dan logistik)</strong></p>\r\n\r\n<p>Mitsubishi L100 EV dijadikan peran utama untuk melakukan sirkulasi pengiriman dan pengumpulan surat atau paket di seluruh Jepang. &ndash; &ldquo;Tanggapan pelanggan sangat positif, dan kami merasa telah berkontribusi terhadap pengurangan emisi karbon.&rdquo;</p>\r\n\r\n<p><strong>4. Cainz Corporation (Retail)</strong></p>\r\n\r\n<p>Memakai Mitsubishi L100 EV untuk mengunjungi pelanggan dalam memberikan layanan seperti penggantian dan perakitan produk retail yang mereka jual. &ndash; &ldquo;Mobil ini bahkan bisa dipakai menaiki dan menuruni daerah perbukitan dalam suhu cuaca panas sekali pun. Kami juga merasa yakin dengan kemampuan baterainya.&rdquo;</p>\r\n\r\n<p><strong>5. Pal System Tokyo (Layanan &nbsp;logistik)</strong></p>\r\n\r\n<p>Membuat mobil operasional Mitsubishi L100 EV untuk kendaraan pengiriman bahan makanan dan komoditas lainnya ke konsumen. &ndash; &ldquo;Mobil ini mengurangi beban pengemudi karena tidak perlu lagi berpikiran untuk mengisi bahan bakar.&rdquo;&nbsp;</p>', 'Fuso Update', '2024-05-29 11:35:50', '', NULL),
(4, 'respon-antusiasme-pasar-terhadap-model-spesial-mmksi-luncurkan-pajero-sport-dan-new-xpander-cross-limited-edition', 'RESPON ANTUSIASME PASAR TERHADAP MODEL SPESIAL, MMKSI LUNCURKAN PAJERO SPORT DAN NEW XPANDER CROSS LIMITED EDITION', 'images/cover_berita/1715156796-picture1png.webp', '<p>PT Mitsubishi Motors Krama Yudha Sales Indonesia (PT MMKSI) akan memperkenalkan varian edisi terbatas untuk model Mitsubishi Pajero Sport dan Mitsubishi Xpander Cross, yang dipasarkan dengan jumlah terbatas dengan nama&nbsp;<strong>Mitsubishi Pajero Sport Elite Limited Edition</strong>, dan&nbsp;<strong>Mitsubishi&nbsp;Xpander Cross Elite Limited Edition</strong>.&nbsp;</p>\r\n\r\n<p>Mengusung&nbsp;<em>tagline</em>&nbsp;&ldquo;Experience the Unlimited Excitement of Adventures&rdquo;, peluncuran dua varian terbatas ini akan dilaksanakan dengan mendisplay varian edisi terbatas tersebut pada event Mitsubishi Motors Large Auto Show Exhibition pada periode 9 &ndash; 12 Mei 2024 di Bekasi, Palembang, dan Bandung, dan akan di lanjutkan di kota-kota lainnya pada event pameran Mitsubishi Motors selama bulan Mei (lokasi dan jadwal dari pameran disampaikan pada siaran persi ini). Peluncuran kedua model ini merupakan respon yang baik atas terhadap dua model tersebut sebelumnya, yang sangat diapresiasi di pasar.</p>\r\n\r\n<p>&ldquo;Varian spesial dan terbatas untuk model Mitsubishi Motors selalu mendapatkan apresiasi dan respon positif dari pasar Indonesia. Melalui peluncuran varian Elite Limited Edition Mitsubishi Pajero Sport dan Mitsubishi Xpander Cross, kami ingin memberikan penyegaran produk serta pilihan yang lebih luas bagi konsumen yang menginginkan model yang lebih tegas, lebih mewah, dan lebih eksklusif dibandingkan dengan model reguler. Dengan warna two-tone eksklusif dan aksesoris eksklusif, kami percaya model terbatas ini akan memenuhi keinginan dari konsumen yang penuh passion, dan akan mendapat feedback positif dari konsumen kami. Varian ini akan dirilis dengan jumlah terbatas, oleh karena itu saya ingin mengajak konsumen kami untuk segera mengunjungi pameran kami untuk melihatnya,&rdquo; ungkap Atsushi Kurita, President Director PT MMKSI.</p>\r\n\r\n<p><strong>Mitsubishi Pajero Sport Elite Limited Edition</strong>, merupakan varian edisi terbatas yang dikembangkan dengan basis Mitsubishi Pajero Sport Dakar 4x2, dan tersedia hanya dalam 1 varian dan 1 pilihan warna, yakni Quartz White Pearl. Pada Mitsubishi Pajero Sport Elite Limited Edition disematkan penyegaran pada sisi eksterior dengan sebuah desain yang&nbsp;<em>elite&nbsp;</em>dan<em>&nbsp;</em>stylish, melalui&nbsp;<em>highlight&nbsp;</em>utama warna&nbsp;<em>two-tone</em>&nbsp;putih dan hitam, serta beragam aksesoris&nbsp;<em>Elite</em>, seperti&nbsp;<em>Black Front Grille, Black Front Under Garnish, Black Headlamp Extension, Black Alloy Wheel, Black Roof, Black Roof Rail, Engine Hood Emblem</em>,&nbsp;<em>Black Shark-Fin Antenna</em>,&nbsp;<em>Black Rear Spoiler</em>,&nbsp;<em>Elite Limited Edition Emblem</em>,&nbsp;<em>Black Rear Under Garnish</em>, dan&nbsp;<em>Exhaust Finisher.</em>&nbsp;Sedangkan pada sisi interior Mitsubishi Pajero Sport Elite Limited Edition dibenamkan audio premium, yang meningkatkan kenyamanan hiburan dalam kabin dan juga prestise bagi penggunanya. Dengan basis Mitsubishi Pajero Sport Dakar 4x2, Mitsubishi Pajero Sport Elite Limited Edition tidak hanya mendapatkan penyegaran dari sisi eksterior, dan interior, namun juga dilengkapi dengan semua fitur unggulan yang terdapat pada Pajero Sport Dakar 4x2. Mitsubishi Pajero Sport Elite Edition dipasarkan di Indonesia sebanyak hanya sebanyak 800 unit, dengan harga&nbsp;<em>on the road</em>&nbsp;Rp 661.400.000 untuk wilayah Jabode</p>', 'Siaran Pers', '2024-05-29 11:36:49', '', NULL),
(5, 'ea-sit-voluptatem-do', 'Ea sit voluptatem do', 'images/cover_berita/Box-Alumunium-hitam.png', '<p>Quas debitis tempor .</p>', 'Siaran Pers', '2024-06-10 13:49:03', 'superadminfuso', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lon` varchar(100) NOT NULL,
  `website` varchar(125) NOT NULL,
  `created_by` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id`, `nama`, `alamat`, `telepon`, `whatsapp`, `lat`, `lon`, `website`, `created_by`, `updated_by`) VALUES
(4, 'MAKASSAR (URIP)', 'Jl. Urip Sumoharjo No. 266, Makassar, Sulawesi Selatan', '081924049859', '628982339049', '119.44721718938965', '-5.139919364044441', 'https://www.com', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_sparepart`
--

CREATE TABLE `cms_sparepart` (
  `id` int NOT NULL,
  `background` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `text1` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `text2` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `content` text NOT NULL,
  `updated_by` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `cms_sparepart`
--

INSERT INTO `cms_sparepart` (`id`, `background`, `text1`, `text2`, `content`, `updated_by`) VALUES
(1, 'images/cms_sparepart/bg2.png', 'Haeijd', 'd', '<main class=\"spareparts\">\r\n<section class=\"breadcrumbs\" id=\"breadcrumbs\">\r\n<div class=\"container\">\r\n<nav aria-label=\"breadcrumb\">\r\n<ol class=\"breadcrumb\">\r\n	<li class=\"breadcrumb-item\"><a data-wpel-link=\"internal\" href=\"/\">Beranda</a></li>\r\n	<li class=\"breadcrumb-item\"><a data-wpel-link=\"internal\" href=\"/service\">Layanan</a></li>\r\n	<li aria-current=\"page\" class=\"breadcrumb-item active\">Spare Part</li>\r\n</ol>\r\n</nav>\r\n</div>\r\n</section>\r\n\r\n<section class=\"sparepart\" id=\"sparepart\">\r\n<div class=\"container\">\r\n<div class=\"section__title section__title--half\">\r\n<h1>Layanan Spare parts</h1>\r\n\r\n<p>Dengan 6.500+ lebih jaringan parts shop yang tersebar secara nasional dan didukung fasilitas parts depo semakin memudahkan konsumen mendapatkan spare parts Mitsubishi FUSO, dan dukungan dari spare parts center KTB yang menjamin ketersediaan suku cadang bagi konsumen.</p>\r\n</div>\r\n\r\n<div class=\"row sparepart__row float__row\">\r\n<div class=\"col-md-6 sparepart__col float__col\">\r\n<div class=\"sparepart__wrapper float__wrapper\">\r\n<h2>Mitsubishi FUSO<br />\r\nGenuine Parts</h2>\r\n\r\n<p>Genuine Part kendaraan Mitsubishi FUSO merupakan suku cadang asli yang didesain dan dibuat melalui proses dengan tingkat presisi tinggi dan sesuai dengan karakteristik</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-7 sparepart__col\"><img alt=\"Layanan Service\" class=\"img__full\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/sparepart-main.webp\" /></div>\r\n</div>\r\n\r\n<div class=\"row gy-3 row--center\">\r\n<div class=\"col-md-4 col--center\"><img alt=\"Spare Parts Center\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/sparepart-1.webp\" />\r\n<p>Spare Parts Center</p>\r\n\r\n<p>Spare Part Center yang tersebar luas di seluruh Indonesia memudahkan pada konsumen Mitsubishi Fuso</p>\r\n</div>\r\n\r\n<div class=\"col-md-4 col--center\"><img alt=\"Konsinyasi Spare Parts\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/sparepart-2.webp\" />\r\n<p>Konsinyasi Spare Parts</p>\r\n\r\n<p>Dealer kami akan menempatkan atau menitipkan spare parts di gudang Anda tanpa perlu membayar terlebih dahulu.</p>\r\n</div>\r\n\r\n<div class=\"col-md-4 col--center\"><img alt=\"Parts Depo\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/sparepart-3.webp\" />\r\n<p>Parts Depo</p>\r\n\r\n<p>Merupakan gudang berukuran 40 feet yang tersebar di dealer-dealer menjamin ketersediaan suku cadang.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</main>', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karir`
--

CREATE TABLE `karir` (
  `id` int NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `tempat` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `kualifikasi` text NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `karir`
--

INSERT INTO `karir` (`id`, `perusahaan`, `pekerjaan`, `tempat`, `kualifikasi`, `slug`) VALUES
(1, 'CV Biru Muda Edit', 'Administrator Utama', 'Jakarta - Main Office, Surabaya', 'Pendidikan minimal S1\r\nMaksimal umur 25 Tahun\r\nMinimal pengalaman 1 tahun', 'cv-biru-muda-edit-administrator-utama'),
(3, 'Ullamco in nulla min', 'Do suscipit autem ni', 'Deleniti repellendus', 'Corporis lorem labor', 'ullamco-in-nulla-min-do-suscipit-autem-ni'),
(4, 'Mollit tempor cillum', 'Magnam at proident', 'Sint vero autem magn', 'Cupidatat quos moles', 'mollit-tempor-cillum-magnam-at-proident');

-- --------------------------------------------------------

--
-- Table structure for table `karir_apply`
--

CREATE TABLE `karir_apply` (
  `id` int NOT NULL,
  `karir_id` int NOT NULL,
  `sumber_informasi` varchar(50) NOT NULL,
  `gaji_diharapkan` varchar(50) NOT NULL,
  `gaji_sebelumnya` varchar(50) DEFAULT NULL,
  `fasilitas_diharapkan` varchar(255) NOT NULL,
  `fasilitas_sebelumnya` varchar(255) DEFAULT NULL,
  `lokasi_kerja` varchar(100) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telp` varchar(18) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `karir_apply`
--

INSERT INTO `karir_apply` (`id`, `karir_id`, `sumber_informasi`, `gaji_diharapkan`, `gaji_sebelumnya`, `fasilitas_diharapkan`, `fasilitas_sebelumnya`, `lokasi_kerja`, `cv`, `nama`, `no_telp`, `email`) VALUES
(1, 1, 'Media Indonesia', 'xebyh@mailinator.com', 'fucatiqy@mailinator.com', 'fonowy@mailinator.com', 'jofe@mailinator.com', 'Jakarta - Main Office', 'karir/cv/about-us.png', 'xihamybu@mailinator.com', '37', 'focuwucyh@mailinator.com');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `muatan` varchar(100) NOT NULL,
  `fitur_lengkap` varchar(255) NOT NULL,
  `foto_fitur_lengkap` varchar(255) NOT NULL,
  `mesin_canggih` varchar(255) NOT NULL,
  `foto_mesin_canggih` varchar(255) NOT NULL,
  `chasis` varchar(255) NOT NULL,
  `foto_chasis` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` text,
  `brake` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nama`, `gambar`, `muatan`, `fitur_lengkap`, `foto_fitur_lengkap`, `mesin_canggih`, `foto_mesin_canggih`, `chasis`, `foto_chasis`, `slug`, `deskripsi`, `brake`) VALUES
(1, 'LIGHT DUTY', 'images/gambar_kendaraan/11720463712Light-Duty-888-x-518.webp', 'GVW 5 - 8.5 Ton', 'Animi fugiat quia e', 'images/gambar_kendaraan/31717691939Box-Alumunium-hitam.png', 'Ad lorem facilis exc', 'images/gambar_kendaraan/41717691939fuso.png', 'Aliquid sint earum', 'images/gambar_kendaraan/51717691939pajero.png', 'light-duty', 'lorem lorem lorem lorem ipsum sit dolor amet', 'djd'),
(2, 'MEDIUM DUTY', 'images/gambar_kendaraan/11717737084bak-kayu.png', 'GVW 5 - 8.5 Ton', 'Animi fugiat quia e', 'images/gambar_kendaraan/31717692079Light-Duty.jpg', 'Tempora consequatur', 'images/gambar_kendaraan/41717692079Box-Alumunium-hitam.png', 'Aliquid sint earum', 'images/gambar_kendaraan/51717692079abu.png', 'medium-duty', NULL, NULL),
(3, 'TRACTOR HEAD', 'images/gambar_kendaraan/11717692183Box-Alumunium-hitam.png', 'GVW 5 - 8.5 Ton', 'Animi fugiat quia e', 'images/gambar_kendaraan/31717692183bak-kayu.png', 'Ad lorem facilis exc', 'images/gambar_kendaraan/41717692183bak-kayu.png', 'Aliquid sint earum', 'images/gambar_kendaraan/51717692183Light-Duty.jpg', 'tractor-head', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan_slider`
--

CREATE TABLE `kendaraan_slider` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `kendaraan_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `kendaraan_slider`
--

INSERT INTO `kendaraan_slider` (`id`, `judul`, `deskripsi`, `background`, `kendaraan_id`) VALUES
(6, 'Voluptas reprehender', 'djfnjdfnf fdjnfjfnndf jdnf', 'images/gambar_kendaraan/61717691939bg-slide-fitur-light-duty-01-tachometer11.jpg', 1),
(7, 'Voluptas reprehender', 'lorem ipsum', 'images/gambar_kendaraan/61717692079bg-slide-fitur-light-duty-01-tachometer11.jpg', 1),
(8, 'Voluptas reprehender', 'aalala', 'images/gambar_kendaraan/61717692183bg-slide-fitur-light-duty-01-tachometer11.jpg', 1),
(9, 'jnjn', 'djnjd', 'images/gambar_kendaraan/61717737084bg-slide-fitur-light-duty-01-tachometer11.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lineup`
--

CREATE TABLE `lineup` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `banner` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `ban` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ps` varchar(50) NOT NULL,
  `kendaraan_id` int NOT NULL,
  `slug` varchar(255) NOT NULL,
  `brosur` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lineup`
--

INSERT INTO `lineup` (`id`, `nama`, `thumbnail`, `gambar`, `banner`, `kategori`, `tipe`, `ban`, `ps`, `kendaraan_id`, `slug`, `brosur`, `created_by`, `updated_by`) VALUES
(12, 'Aut edit aa', 'images/lineup_kendaraan/21724783574CANTER-FE-84G-1.webp', 'images/lineup_kendaraan/11717697768bak-kayu.png', 'images/lineup_kendaraan/21717697768bg-slide-fitur-light-duty-01-tachometer11.jpg', 'Medium Duty', '6x4', '10', '12', 2, 'aut-edit-aa', 'brosur/lineup_kendaraan/11717782540cf7dbde2d0347d73466e519bed1e4f81.pdf', '', 'superadmin'),
(14, 'Quaerat aliquam alia', 'images/lineup_kendaraan/21723387462tailgate.jpg', NULL, 'images/lineup_kendaraan/21723387462tailgate.jpg', 'Tractor Duty', '6x4', '0', '0', 3, 'quaerat-aliquam-alia', 'brosur/lineup_kendaraan/11723387462CV Vincent Mikhael.pdf', 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `lineup_slider`
--

CREATE TABLE `lineup_slider` (
  `id` int NOT NULL,
  `judul` varchar(200) NOT NULL,
  `lineup_id` int NOT NULL,
  `text` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lineup_slider`
--

INSERT INTO `lineup_slider` (`id`, `judul`, `lineup_id`, `text`, `gambar`) VALUES
(3, 'dh', 12, 'Alias in alias irure edit', 'images/lineup_kendaraan/01717697768Light-Duty.jpg'),
(4, 'dh', 12, 'nnj iinni', 'images/lineup_kendaraan/11717697768bak-kayu.png'),
(7, '', 14, 'Dolore enim consequa', 'images/lineup_kendaraan/01723387462tailgate.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lineup_slider2`
--

CREATE TABLE `lineup_slider2` (
  `id` int NOT NULL,
  `lineup_id` int NOT NULL,
  `text` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lineup_slider2`
--

INSERT INTO `lineup_slider2` (`id`, `lineup_id`, `text`, `gambar`) VALUES
(1, 12, 'fkjfgjf', 'images/lineup_kendaraan/01724746449111.png');

-- --------------------------------------------------------

--
-- Table structure for table `lineup_spesifikasi`
--

CREATE TABLE `lineup_spesifikasi` (
  `id` int NOT NULL,
  `lineup_Id` int NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `text3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lineup_spesifikasi`
--

INSERT INTO `lineup_spesifikasi` (`id`, `lineup_Id`, `jenis`, `text1`, `text2`, `text3`) VALUES
(10, 12, 'TRANSMISI', 'jkknk', 'jkknk', 'jkknk'),
(11, 12, 'TRANSMISI', 'jkknk', 'jkknk', 'jkknk'),
(14, 14, 'RODA', 'Repudiandae quia ips', 'Impedit voluptatem', 'Ea possimus error q'),
(15, 14, 'KAPASITAS BAHAN BAKAR', 'jj', 'jj', 'kk'),
(16, 14, 'RODA', 'iji', 'nn', 'dd'),
(17, 12, 'SISTEM KELISTRIKAN', 'dj', 'nn', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int NOT NULL,
  `background` varchar(255) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `updated_by` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `background`, `text1`, `text2`, `content`, `updated_by`) VALUES
(1, 'images/maintenance/carousel-bg-1.jpg', 'ad', 'Layanan perawatan dan perbaikan kendaraan dilakukan oleh tenaga mekanik yang profesional dengan menggunakan peralatan yang modern.', '<link href=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/style.css?ver=1.0.1\" id=\"ktb_fuso-style-css\" media=\"all\" rel=\"stylesheet\" />\r\n<link href=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/dist/assets/css/styles.css?ver=6.5.2\" id=\"main-css\" media=\"all\" rel=\"stylesheet\" />\r\n<link href=\"https://www.ktbfuso.co.id/wp-includes/css/dist/block-library/style.css?ver=6.5.2\" id=\"wp-block-library-css\" media=\"all\" rel=\"stylesheet\" />\r\n<link href=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/style.css?ver=1.0.1\" id=\"ktb_fuso-style-css\" media=\"all\" rel=\"stylesheet\" />\r\n<link href=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/dist/assets/css/styles.css?ver=6.5.2\" id=\"main-css\" media=\"all\" rel=\"stylesheet\" />\r\n<link href=\"https://www.ktbfuso.co.id/wp-includes/css/dist/block-library/style.css?ver=6.5.2\" id=\"wp-block-library-css\" media=\"all\" rel=\"stylesheet\" />\r\n<link href=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/style.css?ver=1.0.1\" id=\"ktb_fuso-style-css\" media=\"all\" rel=\"stylesheet\" />\r\n<link href=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/dist/assets/css/styles.css?ver=6.5.2\" id=\"main-css\" media=\"all\" rel=\"stylesheet\" />\r\n<link href=\"https://www.ktbfuso.co.id/wp-includes/css/dist/block-library/style.css?ver=6.5.2\" id=\"wp-block-library-css\" media=\"all\" rel=\"stylesheet\" />\r\n<link href=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/style.css?ver=1.0.1\" id=\"ktb_fuso-style-css\" media=\"all\" rel=\"stylesheet\" />\r\n<link href=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/dist/assets/css/styles.css?ver=6.5.2\" id=\"main-css\" media=\"all\" rel=\"stylesheet\" />\r\n<link href=\"https://www.ktbfuso.co.id/wp-includes/css/dist/block-library/style.css?ver=6.5.2\" id=\"wp-block-library-css\" media=\"all\" rel=\"stylesheet\" />\r\n<main class=\"service\">\r\n<section class=\"breadcrumbs\" id=\"breadcrumbs\">\r\n<div class=\"container\">\r\n<nav aria-label=\"breadcrumb\">\r\n<ol class=\"breadcrumb\">\r\n	<li class=\"breadcrumb-item\"><a data-wpel-link=\"internal\" href=\"/\">Beranda</a></li>\r\n	<li aria-current=\"page\" class=\"breadcrumb-item active\">Layanan KTB</li>\r\n</ol>\r\n</nav>\r\n</div>\r\n</section>\r\n\r\n<section class=\"service\" id=\"service\">\r\n<div class=\"container\">\r\n<div class=\"section__title section__title--half\">\r\n<h1>Layanan Purna Jual</h1>\r\n\r\n<p>KTB menyediakan berbagai fasilitas layanan purna jual pendukung demi mempermudah konsumen dalam menjangkau layanan Mitsubishi Fuso. Dengan berpedoman pada 3 Pilar Andalan Bisnis Sejati yang mengedepankan:</p>\r\n</div>\r\n\r\n<div class=\"row gy-3\">\r\n<div class=\"col-md-4 service__col col--center\"><img alt=\"Zero Downtime\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/service-1.webp\" />\r\n<p>Zero Downtime</p>\r\n\r\n<p>Memaksimalkan jam operasional kendaraan niaga Anda dengan layanan service kendaraan 24 jam / 365 hari.</p>\r\n</div>\r\n\r\n<div class=\"col-md-4 service__col col--center\"><img alt=\"Best Life Cycle Value\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/service-2.webp\" />\r\n<p>Best Life Cycle Value</p>\r\n\r\n<p>Senantiasa menyediakan produk yang handal dan lengkap dengan karoseri terbaik sejak dari pembelian, operasional, purna jual hingga usia masa pakai.</p>\r\n</div>\r\n\r\n<div class=\"col-md-4 service__col col--center\"><img alt=\"Customer Business Consultant\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/service-3.webp\" />\r\n<p>Customer Business Consultant</p>\r\n\r\n<p>Siap membekali Anda dengan berbagai program pelatihan bagi mekanik dan driver, sehingga operasional truk Anda semakin&nbsp;terjamin.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row gy-3 service__row\">\r\n<div class=\"col-md-6\">\r\n<div class=\"service__child\"><img alt=\"Layanan service\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/service-child-1.webp\" />\r\n<h2>Layanan service</h2>\r\n\r\n<p>Memaksimal jam opersional kendaraan niaga Anda dengan layanan service kendaraan 24 jam/ 365 hari</p>\r\n<a class=\"btn btn__primary\" data-wpel-link=\"internal\" href=\"/layanan/service\"> Lihat Selengkapnya </a></div>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<div class=\"service__child\"><img alt=\"Layanan Parts\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/service-child-2.webp\" />\r\n<h2>Layanan Parts</h2>\r\n\r\n<p>Memaksimal jam operasional kendaraan niaga Anda dengan layanan service kendaraan 24 jam/ 365 hari</p>\r\n<a class=\"btn btn__primary\" data-wpel-link=\"internal\" href=\"/layanan/sparepart\"> Lihat Selengkapnya </a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n\r\n<section class=\"superior\" id=\"superior\">\r\n<div class=\"container\">\r\n<div class=\"section__title section__title--half\">\r\n<h2>Layanan Unggulan</h2>\r\n</div>\r\n\r\n<div class=\"superior__tab\">\r\n<ul class=\"nav nav-tabs\" id=\"superiorTab\" role=\"tablist\">\r\n	<li class=\"nav-item\" role=\"presentation\"><button aria-controls=\"contract-tab-pane\" aria-selected=\"true\" class=\"nav-link active\" data-bs-target=\"#contract-tab-pane\" data-bs-toggle=\"tab\" id=\"contract-tab\" role=\"tab\" type=\"button\"><!-- <img src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/tab-1.webp\" alt=\"Kontrak servis & suku cadang\"> --><img alt=\"Kontrak servis &amp; suku cadang\" srcset=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/tab-1.webp\" style=\"height: 25%; width: 25%; margin: 10px;\" /> <span style=\"font-size: 65%\"> Kontrak servis<br />\r\n	&amp; suku cadang </span></button></li>\r\n	<li class=\"nav-item\" role=\"presentation\"><button aria-controls=\"training-tab-pane\" aria-selected=\"false\" class=\"nav-link\" data-bs-target=\"#training-tab-pane\" data-bs-toggle=\"tab\" id=\"training-tab\" role=\"tab\" tabindex=\"-1\" type=\"button\"><img alt=\"Pembelajaran &amp; suku cadang\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/tab-2.webp\" style=\"height: 25%; width: 25%; margin: 8px;\" /> <span style=\"font-size: 60%\"> Pembelajaran &amp; suku cadang </span></button></li>\r\n	<li class=\"nav-item\" role=\"presentation\"><button aria-controls=\"warranty-tab-pane\" aria-selected=\"false\" class=\"nav-link\" data-bs-target=\"#warranty-tab-pane\" data-bs-toggle=\"tab\" id=\"warranty-tab\" role=\"tab\" tabindex=\"-1\" type=\"button\"><img alt=\"Warranty &amp; suku cadang\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/tab-3.webp\" style=\"height: 25%; width: 25%; margin: 10px;\" /> <span style=\"font-size: 65%\"> Warranty<br />\r\n	&amp; suku cadang </span></button></li>\r\n</ul>\r\n\r\n<div class=\"tab-content\" id=\"superiorTabContent\">\r\n<div aria-labelledby=\"contract-tab\" class=\"tab-pane fade active show\" id=\"contract-tab-pane\" role=\"tabpanel\" tabindex=\"0\">\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<h3>Kontrak servis &amp; suku cadang</h3>\r\n\r\n<p>After Sales Contract adalah komitmen PT.KTB dalam memberikan kenyamanan untuk pelanggan setia Mitsubishi Fuso dalam melakukan perawatan dan perbaikan kendaraan Niaga konsumen.</p>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<h3>Keuntungan</h3>\r\n\r\n<ul>\r\n	<li>Servis dilakukan oleh mekanik handal</li>\r\n	<li>Jaminan Suku Cadang Asli (Genuine Parts)</li>\r\n	<li>Waktu dan tempat servis yang dapat dipilih dan disesuaikan.</li>\r\n	<li>Diskon khusus untuk suku cadang dan ongkos kerja.</li>\r\n	<li>Waktu pembayaran yang dapat disesuaikan.</li>\r\n</ul>\r\n</div>\r\n<img alt=\"Kontrak servis &amp; suku cadang\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/tab-content-1.webp\" /></div>\r\n</div>\r\n\r\n<div aria-labelledby=\"training-tab\" class=\"tab-pane fade\" id=\"training-tab-pane\" role=\"tabpanel\" tabindex=\"0\">\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<h3>Pembelajaran &amp; Spare part</h3>\r\n\r\n<p>After Sales Contract adalah komitmen PT.KTB dalam memberikan kenyamanan untuk pelanggan setia Mitsubishi Fuso dalam melakukan perawatan dan perbaikan kendaraan Niaga konsumen.</p>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<h3>Keuntungan</h3>\r\n\r\n<ul>\r\n	<li>Servis dilakukan oleh mekanik handal</li>\r\n	<li>Jaminan Suku Cadang Asli (Genuine Parts)</li>\r\n	<li>Waktu dan tempat servis yang dapat dipilih dan disesuaikan.</li>\r\n	<li>Diskon khusus untuk suku cadang dan ongkos kerja.</li>\r\n	<li>Waktu pembayaran yang dapat disesuaikan.</li>\r\n</ul>\r\n</div>\r\n<img alt=\"Pembelajaran &amp; Spare parts\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/tab-content-2.webp\" /></div>\r\n</div>\r\n\r\n<div aria-labelledby=\"warranty-tab\" class=\"tab-pane fade\" id=\"warranty-tab-pane\" role=\"tabpanel\" tabindex=\"0\">\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<h3>Warranty &amp; suku cadang</h3>\r\n\r\n<p>After Sales Contract adalah komitmen PT.KTB dalam memberikan kenyamanan untuk pelanggan setia Mitsubishi Fuso dalam melakukan perawatan dan perbaikan kendaraan Niaga konsumen.</p>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<h3>Keuntungan</h3>\r\n\r\n<ul>\r\n	<li>Servis dilakukan oleh mekanik handal</li>\r\n	<li>Jaminan Suku Cadang Asli (Genuine Parts)</li>\r\n	<li>Waktu dan tempat servis yang dapat dipilih dan disesuaikan.</li>\r\n	<li>Diskon khusus untuk suku cadang dan ongkos kerja.</li>\r\n	<li>Waktu pembayaran yang dapat disesuaikan.</li>\r\n</ul>\r\n</div>\r\n<img alt=\"Warranty &amp; suku cadang\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/tab-content-3.webp\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n\r\n<section class=\"telematic\" id=\"telematic\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-6\"><img alt=\"Logo Telematics\" class=\"telematic__img\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/telematic/telematics-logo.webp\" />\r\n<div class=\"section__title\">\r\n<h2>Pantau Armada Fuso Anda Secara Real TIme</h2>\r\n\r\n<p>Telematics memungkinkan Anda untuk memantau lokasi kendaraan Anda secara real-time dan otomatis. Informasi terkait posisi, arah, kecapatan dan sejarah rute yang diambil oleh kendaraan bisa dengan mudah di akses melalui layar komputer ataupun smartphone Anda.</p>\r\n</div>\r\n<a class=\"btn btn__primary\" data-wpel-link=\"internal\" href=\"/runner\"> Lihat Selengkapnya </a></div>\r\n\r\n<div class=\"col-lg-6\"><img alt=\"UI Telematics\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/telematic/telematics-img.webp\" /></div>\r\n</div>\r\n</div>\r\n</section>\r\n</main>', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 2),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(6, '2024_06_24_141434_update_table_carousel', 3),
(7, '2024_06_24_145530_add_columns_to_setting_table', 4),
(8, '2024_07_08_080919_create_offices_table', 5),
(9, '2024_07_08_081919_add_gmaps_to_offices_table', 6),
(10, '2024_07_08_082225_add_created_by_and_updated_by_to_offices_table', 7),
(11, '2024_07_08_082326_change_created_by_and_updated_by_to_varchar_in_offices_table', 8),
(12, '2024_07_08_182828_update_kendaraan_table', 9),
(13, '2024_07_09_191902_modify_content_column_in_sejarah_perusahaan_table', 10),
(14, '2024_07_10_081504_modify_sparepart_table', 11),
(15, '2024_07_10_153201_add_icons_to_setting_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmaps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `nama`, `alamat`, `gmaps`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Kantot A', 'Jl. Jenderal A. Yani, Pulomas, \r\nJakarta 13210, Indonesia', 'https://w.com', 'superadmin', NULL, NULL, NULL),
(2, 'Kantor B', 'Jl. Jenderal A. Yani, Pulomas, \r\nJakarta 13210, Indonesia', 'Optio expedita inci', 'superadmin', 'superadmin', NULL, '2024-07-08 01:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah_perusahaan`
--

CREATE TABLE `sejarah_perusahaan` (
  `id` int NOT NULL,
  `content` longtext NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `updated_by` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sejarah_perusahaan`
--

INSERT INTO `sejarah_perusahaan` (`id`, `content`, `thumbnail`, `updated_by`) VALUES
(1, '<div class=\"abouts\">\n<div class=\"container\">\n<div class=\"gy-3 row\">\n<div class=\"col-lg-6\">\n<div class=\"section__title\">\n<h1>Sulawesi Berlian Motor siap mengawal dan menjalankan roda niaga Indonesia</h1>\n</div>\n</div>\n\n<div class=\"col-lg-6\">\n<div class=\"section__title\">\n<p>PT Sulawesi Berlian Motor (SBM) merupakan dealer resmi Mitsubishi Fuso Truck &amp; Bus Corporation (MFTBC) yang memasarkan kendaraan niaga merk Mitsubishi FUSO diantaranya, Canter, Fighter X dan Tractor Head.</p>\n\n<p>Berdiri sejak tahun 2017, SBM hadir sebagai dealer 3S (Sales, Service, Sparepart) yang menawarkan pelayanan penjualan kendaraan, servis kendaraan, dan penjualan suku cadang. Selama bertahun-tahun, SBM telah berkomitmen untuk memberikan pengalaman terbaik bagi para pelanggannya dengan mengutamakan kepuasan dan kenyamanan dalam setiap transaksi.</p>\n</div>\n</div>\n</div>\n\n<div class=\"about__middle\"><!-- replaced on 25 Aug 2023\n                <img src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/tentang-perusahaan-1.webp\" alt=\"Tentang Perusahaan\">\n				--><img alt=\"FN62FR\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/FX-Mining-ver-2-Web-Banner.webp\" />\n<div class=\"section__title\">\n<p>Sejak awal berdirinya, SBM telah menjadi pilihan utama bagi masyarakat Sulawesi yang mencari kendaraan niaga dan kendaraan niaga ringan berkualitas tinggi. Menjadi dealer CV-LCV, SBM telah menjual berbagai jenis kendaraan niaga dan kendaraan niaga ringan yang handal dan efisien.</p>\n\n<p>Pelayanan penjualan di SBM tidak hanya sekadar menjual kendaraan, tetapi juga memberikan konsultasi yang mendalam untuk membantu pelanggan memilih kendaraan yang tepat. Tim sales kami yang profesional memberikan informasi lengkap tentang setiap produk. Di bidang servis, SBM memiliki bengkel lengkap dengan peralatan modern dan teknisi berpengalaman, menawarkan layanan servis berkala dan perbaikan efisien. SBM juga menyediakan suku cadang asli Mitsubishi dengan stok lengkap dan harga kompetitif. Kami berusaha memberikan yang terbaik dalam setiap aspek pelayanan, mengutamakan kualitas, kepercayaan dan kepuasan&nbsp;pelanggan.</p>\n</div>\n</div>\n</div>\n\n<p><img alt=\"Tentang Perusahaan\" class=\"about__img\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/tentang-perusahaan-2.webp\" /></p>\n</div>', 'images/tentangkami/Light-Duty.jpg', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah_perusahaan_timeline`
--

CREATE TABLE `sejarah_perusahaan_timeline` (
  `id` int NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int NOT NULL,
  `background` varchar(255) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `updated_by` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `background`, `text1`, `text2`, `content`, `updated_by`) VALUES
(1, 'images/aksesoris_aftersales/bg2.png', 'halah', '1', '<main class=\"services\">\r\n<section class=\"breadcrumbs\" id=\"breadcrumbs\">\r\n<div class=\"container\">\r\n<nav aria-label=\"breadcrumb\">\r\n<ol class=\"breadcrumb\">\r\n	<li class=\"breadcrumb-item\"><a data-wpel-link=\"internal\" href=\"/\">Beranda</a></li>\r\n	<li class=\"breadcrumb-item\"><a data-wpel-link=\"internal\" href=\"/service\">Layanan</a></li>\r\n	<li aria-current=\"page\" class=\"breadcrumb-item active\">Service</li>\r\n</ol>\r\n</nav>\r\n</div>\r\n</section>\r\n\r\n<section class=\"service\" id=\"service\">\r\n<div class=\"container\">\r\n<div class=\"section__title section__title--half\">\r\n<h2>Layanan Service</h2>\r\n\r\n<p>Didukung tenaga mekanik yang ahli dan terlatih, kami siap memberikan pelayanan servis terbaik dan terdepan bagi konsumen. Dilengkapi dengan fasilitas seperti truck center, mobile workshop service dan service booking untuk menunjang kinerja pelayanan servis kami kepada konsumen.</p>\r\n</div>\r\n\r\n<div class=\"row service__row float__row\"><!-- <div class=\"col-md-6 service__col float__col\"> -->\r\n<div class=\"col-md-6 service__col float__col\">\r\n<div class=\"service__wrapper float__wrapper\"><img align=\"right\" alt=\"Zero Down Time\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/service-zero.webp\" />\r\n<h3>Servis berkala tanpa mengganggu waktu operasional kendaraan</h3>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-7 service__col\" style=\"margin-left: auto;\"><!-- 19 Jul added width and height to satisfy pagespeed --><!-- replaced on 25 Aug\r\n                    <img class=\"img__full\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/service-main.webp\" width=\"429\" height=\"305\"  alt=\"Layanan Service\">\r\n					--><img alt=\"Layanan Service\" class=\"img__full\" height=\"305\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/DSC06768-edited-tiny.webp\" width=\"429\" /></div>\r\n</div>\r\n</div>\r\n</section>\r\n\r\n<section class=\"ourserv\" id=\"ourserv\">\r\n<div class=\"container\">\r\n<div class=\"section__title section__title--half\">\r\n<h2>Layanan Kami</h2>\r\n\r\n<p>Kami siap memberikan pelayanan terbaik bagi konsumen</p>\r\n</div>\r\n\r\n<div class=\"row g-3\">\r\n<div class=\"col-lg-3 col-6 ourserv__col\">\r\n<div class=\"ourserv__content\"><a class=\"services_modal\" data-bs-target=\"#servicesModal1\" data-bs-toggle=\"modal\" href=\"#\"><img alt=\"Bengkel Siaga 24 Jam\" class=\"img__full\" src=\"https://www.ktbfuso.co.id/wp-content/uploads/2023/05/bengkel-siaga.webp\" /> </a>\r\n\r\n<h3><a class=\"services_modal\" data-bs-target=\"#servicesModal1\" data-bs-toggle=\"modal\" href=\"#\">BENGKEL SIAGA 24 JAM</a></h3>\r\n<a class=\"services_modal\" data-bs-target=\"#servicesModal1\" data-bs-toggle=\"modal\" href=\"#\"> </a></div>\r\n<!-- Modal -->\r\n\r\n<div aria-hidden=\"true\" aria-labelledby=\"servicesModalLabel1\" class=\"modal fade\" id=\"servicesModal1\" style=\"display: none;\" tabindex=\"-1\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-header\">\r\n<h3 class=\"modal-title fs-5\" id=\"servicesModalLabel1\">Bengkel Siaga 24 Jam</h3>\r\n<button aria-label=\"Close\" class=\"btn-close\" data-bs-dismiss=\"modal\" type=\"button\"></button></div>\r\n\r\n<div class=\"modal-body\">\r\n<div class=\"code__modal--body\">\r\n<p>BELUM TERSEDIA</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"modal-footer\"><button class=\"btn btn__news btn__news--padd\" data-bs-dismiss=\"modal\" type=\"button\">Tutup</button></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-6 ourserv__col\">\r\n<div class=\"ourserv__content\"><a class=\"services_modal\" data-bs-target=\"#servicesModal2\" data-bs-toggle=\"modal\" href=\"#\"><img alt=\"PickUp Service\" class=\"img__full\" src=\"https://www.ktbfuso.co.id/wp-content/uploads/2023/05/pick-up.webp\" /> </a>\r\n\r\n<h3><a class=\"services_modal\" data-bs-target=\"#servicesModal2\" data-bs-toggle=\"modal\" href=\"#\">PICKUP SERVICE</a></h3>\r\n<a class=\"services_modal\" data-bs-target=\"#servicesModal2\" data-bs-toggle=\"modal\" href=\"#\"> </a></div>\r\n<!-- Modal -->\r\n\r\n<div aria-hidden=\"true\" aria-labelledby=\"servicesModalLabel2\" class=\"modal fade\" id=\"servicesModal2\" tabindex=\"-1\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-header\">\r\n<h3 class=\"modal-title fs-5\" id=\"servicesModalLabel2\">PickUp Service</h3>\r\n<button aria-label=\"Close\" class=\"btn-close\" data-bs-dismiss=\"modal\" type=\"button\"></button></div>\r\n\r\n<div class=\"modal-body\">\r\n<div class=\"code__modal--body\">\r\n<p><span style=\"font-weight: 400;\">Layanan antar jemput gratis bagi pengemudi setelah memasukkan kendaraan ke bengkel untuk diservis.</span></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"modal-footer\"><button class=\"btn btn__news btn__news--padd\" data-bs-dismiss=\"modal\" type=\"button\">Tutup</button></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-6 ourserv__col\">\r\n<div class=\"ourserv__content\"><a class=\"services_modal\" data-bs-target=\"#servicesModal3\" data-bs-toggle=\"modal\" href=\"#\"><img alt=\"Mobile Workshop Service\" class=\"img__full\" src=\"https://www.ktbfuso.co.id/wp-content/uploads/2023/05/mws.webp\" /> </a>\r\n\r\n<h3><a class=\"services_modal\" data-bs-target=\"#servicesModal3\" data-bs-toggle=\"modal\" href=\"#\">MOBILE WORKSHOP SERVICE</a></h3>\r\n<a class=\"services_modal\" data-bs-target=\"#servicesModal3\" data-bs-toggle=\"modal\" href=\"#\"> </a></div>\r\n<!-- Modal -->\r\n\r\n<div aria-hidden=\"true\" aria-labelledby=\"servicesModalLabel3\" class=\"modal fade\" id=\"servicesModal3\" tabindex=\"-1\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-header\">\r\n<h3 class=\"modal-title fs-5\" id=\"servicesModalLabel3\">Mobile Workshop Service</h3>\r\n<button aria-label=\"Close\" class=\"btn-close\" data-bs-dismiss=\"modal\" type=\"button\"></button></div>\r\n\r\n<div class=\"modal-body\">\r\n<div class=\"code__modal--body\">\r\n<p><span style=\"font-weight: 400;\">Merupakan layanan berupa fasilitas servis dengan menggunakan Truk Mitsubishi Colt Diesel &amp; Fuso yang dilengkapi dengan peralatan servis yang dapat melayani layanan servis layaknya di bengkel resmi. Layanan servis ini dapat langsung menjangkau customer yang membutuhkan bantuan layanan servis di tempat.</span></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"modal-footer\"><button class=\"btn btn__news btn__news--padd\" data-bs-dismiss=\"modal\" type=\"button\">Tutup</button></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-6 ourserv__col\">\r\n<div class=\"ourserv__content\"><a class=\"services_modal\" data-bs-target=\"#servicesModal4\" data-bs-toggle=\"modal\" href=\"#\"><img alt=\"Service Booking\" class=\"img__full\" src=\"https://www.ktbfuso.co.id/wp-content/uploads/2023/06/service-booking.webp\" /> </a>\r\n\r\n<h3><a class=\"services_modal\" data-bs-target=\"#servicesModal4\" data-bs-toggle=\"modal\" href=\"#\">SERVICE BOOKING</a></h3>\r\n<a class=\"services_modal\" data-bs-target=\"#servicesModal4\" data-bs-toggle=\"modal\" href=\"#\"> </a></div>\r\n<!-- Modal -->\r\n\r\n<div aria-hidden=\"true\" aria-labelledby=\"servicesModalLabel4\" class=\"modal fade\" id=\"servicesModal4\" tabindex=\"-1\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-header\">\r\n<h3 class=\"modal-title fs-5\" id=\"servicesModalLabel4\">Service Booking</h3>\r\n<button aria-label=\"Close\" class=\"btn-close\" data-bs-dismiss=\"modal\" type=\"button\"></button></div>\r\n\r\n<div class=\"modal-body\">\r\n<div class=\"code__modal--body\">\r\n<p><span style=\"font-weight: 400;\">Service Booking merupakan layanan yang diberikan oleh MITSUBISHI FUSO dalam memberikan kepastian waktu &amp; ketersediaan spare part kendaraan konsumen.</span></p>\r\n\r\n<p><span style=\"font-weight: 400;\">Konsumen dapat mengatur jadwal service yang diinginkan &amp; tidak perlu mengantri saat melakukan service kendaraannya.</span></p>\r\n\r\n<p><span style=\"font-weight: 400;\">Didukung tenaga mekanik yang ahli dan terlatih, kami siap memberikan pelayanan servis terbaik dan terdepan bagi konsumen. Dilengkapi dengan fasilitas seperti truck center, mobile workshop service dan service booking untuk menunjang kinerja pelayanan servis kami kepada konsumen.</span></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"modal-footer\"><button class=\"btn btn__news btn__news--padd\" data-bs-dismiss=\"modal\" type=\"button\">Tutup</button></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-6 ourserv__col\">\r\n<div class=\"ourserv__content\"><a class=\"services_modal\" data-bs-target=\"#servicesModal5\" data-bs-toggle=\"modal\" href=\"#\"><img alt=\"Fleet Customer Training\" class=\"img__full\" src=\"https://www.ktbfuso.co.id/wp-content/uploads/2023/06/fleet-cust.webp\" /> </a>\r\n\r\n<h3><a class=\"services_modal\" data-bs-target=\"#servicesModal5\" data-bs-toggle=\"modal\" href=\"#\">FLEET CUSTOMER TRAINING</a></h3>\r\n<a class=\"services_modal\" data-bs-target=\"#servicesModal5\" data-bs-toggle=\"modal\" href=\"#\"> </a></div>\r\n<!-- Modal -->\r\n\r\n<div aria-hidden=\"true\" aria-labelledby=\"servicesModalLabel5\" class=\"modal fade\" id=\"servicesModal5\" tabindex=\"-1\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-header\">\r\n<h3 class=\"modal-title fs-5\" id=\"servicesModalLabel5\">Fleet Customer Training</h3>\r\n<button aria-label=\"Close\" class=\"btn-close\" data-bs-dismiss=\"modal\" type=\"button\"></button></div>\r\n\r\n<div class=\"modal-body\">\r\n<div class=\"code__modal--body\">\r\n<p><span style=\"font-weight: 400;\">Mitsubishi FUSO senantiasa memberikan pelatihan kepada driver dan mekanik customer fleet dengan tujuan agar dapat meningkatkan kemampuan dan produktivitas dalam menjalankan tugas mereka.</span></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"modal-footer\"><button class=\"btn btn__news btn__news--padd\" data-bs-dismiss=\"modal\" type=\"button\">Tutup</button></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-6 ourserv__col\">\r\n<div class=\"ourserv__content\"><a class=\"services_modal\" data-bs-target=\"#servicesModal6\" data-bs-toggle=\"modal\" href=\"#\"><img alt=\"FUSO Last Lane\" class=\"img__full\" src=\"https://www.ktbfuso.co.id/wp-content/uploads/2023/06/fast-lane.webp\" /> </a>\r\n\r\n<h3><a class=\"services_modal\" data-bs-target=\"#servicesModal6\" data-bs-toggle=\"modal\" href=\"#\">FUSO LAST LANE</a></h3>\r\n<a class=\"services_modal\" data-bs-target=\"#servicesModal6\" data-bs-toggle=\"modal\" href=\"#\"> </a></div>\r\n<!-- Modal -->\r\n\r\n<div aria-hidden=\"true\" aria-labelledby=\"servicesModalLabel6\" class=\"modal fade\" id=\"servicesModal6\" tabindex=\"-1\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-header\">\r\n<h3 class=\"modal-title fs-5\" id=\"servicesModalLabel6\">FUSO Last Lane</h3>\r\n<button aria-label=\"Close\" class=\"btn-close\" data-bs-dismiss=\"modal\" type=\"button\"></button></div>\r\n\r\n<div class=\"modal-body\">\r\n<div class=\"code__modal--body\">\r\n<p><span style=\"font-weight: 400;\">Mitsubishi FUSO menyediakan layanan terbaik kepada konsumen berupa Service Cepat untuk penggantian Oli &amp; Filter, sehingga aktivitas Servis tidak akan mengganggu bisnis konsumen.</span></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"modal-footer\"><button class=\"btn btn__news btn__news--padd\" data-bs-dismiss=\"modal\" type=\"button\">Tutup</button></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-6 ourserv__col\">\r\n<div class=\"ourserv__content\"><a class=\"services_modal\" data-bs-target=\"#servicesModal7\" data-bs-toggle=\"modal\" href=\"#\"><img alt=\"Fuso Customer Care\" class=\"img__full\" src=\"https://www.ktbfuso.co.id/wp-content/uploads/2023/06/cust-care.webp\" /> </a>\r\n\r\n<h3><a class=\"services_modal\" data-bs-target=\"#servicesModal7\" data-bs-toggle=\"modal\" href=\"#\">FUSO CUSTOMER CARE</a></h3>\r\n<a class=\"services_modal\" data-bs-target=\"#servicesModal7\" data-bs-toggle=\"modal\" href=\"#\"> </a></div>\r\n<!-- Modal -->\r\n\r\n<div aria-hidden=\"true\" aria-labelledby=\"servicesModalLabel7\" class=\"modal fade\" id=\"servicesModal7\" tabindex=\"-1\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-header\">\r\n<h3 class=\"modal-title fs-5\" id=\"servicesModalLabel7\">Fuso Customer Care</h3>\r\n<button aria-label=\"Close\" class=\"btn-close\" data-bs-dismiss=\"modal\" type=\"button\"></button></div>\r\n\r\n<div class=\"modal-body\">\r\n<div class=\"code__modal--body\">\r\n<p><span style=\"font-weight: 400;\">Fuso Customer Care di nomor 1500144 untuk meningkatkan layanan dan kepuasaan pada konsumen. Layanan ini dapat diakses oleh seluruh pelanggan yang membutuhkan informasi seputar produk, service, spare parts, Runner Telematics, ataupun keluhan lainnya. Silahkan menghubungi kami di nomer tersebut yang beroperasi pada pukul 08:00 &ndash; 17:00 (pada jam kerja).</span></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"modal-footer\"><button class=\"btn btn__news btn__news--padd\" data-bs-dismiss=\"modal\" type=\"button\">Tutup</button></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-6 ourserv__col\">\r\n<div class=\"ourserv__content\"><a class=\"services_modal\" data-bs-target=\"#servicesModal8\" data-bs-toggle=\"modal\" href=\"#\"><img alt=\"Field Fix Campaign\" class=\"img__full\" src=\"https://www.ktbfuso.co.id/wp-content/uploads/2023/05/field-fix.webp\" /> </a>\r\n\r\n<h3><a class=\"services_modal\" data-bs-target=\"#servicesModal8\" data-bs-toggle=\"modal\" href=\"#\">FIELD FIX CAMPAIGN</a></h3>\r\n<a class=\"services_modal\" data-bs-target=\"#servicesModal8\" data-bs-toggle=\"modal\" href=\"#\"> </a></div>\r\n<!-- Modal -->\r\n\r\n<div aria-hidden=\"true\" aria-labelledby=\"servicesModalLabel8\" class=\"modal fade\" id=\"servicesModal8\" tabindex=\"-1\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-header\">\r\n<h3 class=\"modal-title fs-5\" id=\"servicesModalLabel8\">Field Fix Campaign</h3>\r\n<button aria-label=\"Close\" class=\"btn-close\" data-bs-dismiss=\"modal\" type=\"button\"></button></div>\r\n\r\n<div class=\"modal-body\">\r\n<div class=\"code__modal--body\">\r\n<p><span style=\"font-weight: 400;\">Dalam rangka memenuhi peraturan Indonesia yaitu Peraturan Menteri Perhubungan No.33/2018 Tentang Pengujian Tipe Kendaraan Bermotor, dan Peraturan Menteri Perhubungan No.53/2019 tentang Tata Cara Penarikan Kembali Kendaraan Bermotor, PT Krama Yudha Tiga Berlian Motors (&ldquo;PT KTB&rdquo;) sebagai distributor resmi Mitsubishi Fuso Truck and Bus Corporation di Indonesia memberikan informasi di website KTB dengan penjelasan sebagai berikut.</span></p>\r\n\r\n<p><span style=\"font-weight: 400;\">Dalam hal kendaraan yang diindikasikan untuk dilakukan pemeriksaan, maka anda akan diinformasikan oleh Dealer kami dan kampanye perbaikan kendaraan dapat dilakukan di seluruh Dealer resmi PT KTB untuk kendaraan resmi Mitsubishi Fuso yang dipasarkan oleh PT KTB di Indonesia. Perbaikan kendaraan dan/atau penggantian part kendaraan dilakukan sesuai dengan prosedur yang berlaku.</span></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"modal-footer\"><button class=\"btn btn__news btn__news--padd\" data-bs-dismiss=\"modal\" type=\"button\">Tutup</button></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-6 ourserv__col\">\r\n<div class=\"ourserv__content\"><a class=\"services_modal\" data-bs-target=\"#servicesModal9\" data-bs-toggle=\"modal\" href=\"#\"><img alt=\"Chasis &amp; Cabin\" class=\"img__full\" src=\"https://www.ktbfuso.co.id/wp-content/uploads/2023/09/Cabin-_-Chasis-Repair-Hitam-resized-tiny.webp\" /> </a>\r\n\r\n<h3><a class=\"services_modal\" data-bs-target=\"#servicesModal9\" data-bs-toggle=\"modal\" href=\"#\">CHASIS &amp; CABIN</a></h3>\r\n<a class=\"services_modal\" data-bs-target=\"#servicesModal9\" data-bs-toggle=\"modal\" href=\"#\"> </a></div>\r\n<!-- Modal -->\r\n\r\n<div aria-hidden=\"true\" aria-labelledby=\"servicesModalLabel9\" class=\"modal fade\" id=\"servicesModal9\" tabindex=\"-1\">\r\n<div class=\"modal-dialog modal-dialog-centered\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-header\">\r\n<h3 class=\"modal-title fs-5\" id=\"servicesModalLabel9\">Chasis &amp; Cabin</h3>\r\n<button aria-label=\"Close\" class=\"btn-close\" data-bs-dismiss=\"modal\" type=\"button\"></button></div>\r\n\r\n<div class=\"modal-body\">\r\n<div class=\"code__modal--body\">\r\n<p>Layanan purna jual yang pertama di Indonesia di bawah standarisasi PT. KTB yang menyediakan layanan perbaikan chassis, perbaikan kabin, penggantian suku cadang resmi, dan pengecatan ulang dimana semua fasilitas ini sesuai dengan standard Mitsubishi Fuso di Indonesia</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"modal-footer\"><button class=\"btn btn__news btn__news--padd\" data-bs-dismiss=\"modal\" type=\"button\">Tutup</button></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n\r\n<section class=\"sunday\" id=\"sunday\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-7\"><img alt=\"Mitusubishi Open Sunday\" class=\"img__full\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/open-sunday.webp\" /></div>\r\n\r\n<div class=\"col-lg-5\">\r\n<div class=\"sunday__content\"><img alt=\"Mitusubishi Open Sunday\" class=\"img__full\" src=\"https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img//service/open-sunday-logo.webp\" />\r\n<p>Salah satu bentuk layanan Mitsubishi FUSO untuk penanganan niaga adalah layanan service pada hari Minggu atau hari libur.</p>\r\n\r\n<p>Konsumen dapat memaksimalkan waktu operasional Mitsubishi Fuso menyediakan layanan non-stop selama 24 jam / 365 hari. Konsumen dapat memaksimalkan waktu operasional kendaraan pada hari kerja dan melakukan perawatan pada hari libur atau pada saat kendaraan tidak beroperasi.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</main>', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int NOT NULL,
  `deskripsi` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_deskripsi` varchar(255) NOT NULL,
  `meta_sitename` varchar(255) NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `whatsapp` varchar(25) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hotline` varchar(255) NOT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hari_operasional` varchar(255) DEFAULT NULL,
  `jam_operasional` varchar(255) DEFAULT NULL,
  `hari_operasional2` varchar(255) DEFAULT NULL,
  `jam_operasional2` varchar(255) DEFAULT NULL,
  `icon2` varchar(255) DEFAULT NULL,
  `icon3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `deskripsi`, `title`, `meta_title`, `meta_deskripsi`, `meta_sitename`, `icon`, `favicon`, `whatsapp`, `linkedin`, `instagram`, `youtube`, `facebook`, `twitter`, `alamat`, `hotline`, `updated_by`, `no_telp`, `email`, `hari_operasional`, `jam_operasional`, `hari_operasional2`, `jam_operasional2`, `icon2`, `icon3`) VALUES
(1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in</p><ul><li>Lorem ipsum sit dolor amet</li><li><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text</li></ul>', 'FUSO', 'Beralih bersama sama dengan kami', 'Beralih bersama kami', 'mmksi.com', 'images/icon_website/11723388283tailgate.jpg', 'images/icon_website/21723388283tailgate.jpg', '62898204044', 'https://www.com', 'https://www.com', 'https://www.com', 'https://www.com', 'tiktok', 'Jl. Urip Sumoharjo No.266\r\nKarampuang, Kecamatan Panakkukang, Kota Makassar\r\nSulawesi Selatan 90231', 'Jl. Urip Sumoharjo No.266\r\nKarampuang, Kecamatan Panakkukang, Kota Makassar\r\nSulawesi Selatan 90231', 'superadmin', '0811 4 1500144', 'email@gmail.com', 'Setiap Hari', '07.00 - 00.00 WIB', 'Sabtu', '07.00 - 00.00 WIB', 'images/icon_website/21723388283tailgate.jpg', 'images/icon_website/21723388284tailgate.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `id` int NOT NULL,
  `kategori_id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `material` varchar(255) DEFAULT NULL,
  `material_grup` varchar(255) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`id`, `kategori_id`, `nama`, `gambar`, `material`, `material_grup`, `deskripsi`) VALUES
(3, 'Front Suspension', 'bufg djfj', 'images/sparepart/1720600058HEADLINING-1-P1.webp', '3i3i4', '43j', 'rjenfjn'),
(4, 'Steering', 'Proident corrupti', 'images/sparepart/1720601335HEADLINING-1-P1.webp', 'Autem consequat At', 'Quis rerum cum dicta', 'Aut adipisci cillum');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart_kategori`
--

CREATE TABLE `sparepart_kategori` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sparepart_kategori`
--

INSERT INTO `sparepart_kategori` (`id`, `nama`, `gambar`) VALUES
(2, 'Oli Mesin', 'images/sparepart_kategori/fuso.png');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart_link`
--

CREATE TABLE `sparepart_link` (
  `id` int NOT NULL,
  `sparepart_id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '$2y$12$GoSslldBH3pUtUzgs8C0rOYTHV65yCEOMUnd5rRFHM0DxpTpt1Unq', 'Z5QwyaU6GtsPAFvubQ4Orhc1vM0lpgWpg4NbEgWXGN36ySAzu80IWPLqDNiV', '2024-06-07 11:29:12', '2024-06-10 06:54:45'),
(2, 'admin1', '$2y$12$.QWRugAhr5bzg71.juxq3eKoVgaxyXK7MlGsqctcIn8cczGRBcEoy', NULL, '2024-06-09 23:40:12', '2024-06-09 23:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id` int NOT NULL,
  `link` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`id`, `link`) VALUES
(1, 'https://www.youtube.com/embed/egnFETk0JC4?si=4I8XYEAANpiIkywe'),
(2, 'https://www.youtube.com/embed/fJR_KmGC0Yg?si=dvnpa6Xf1e0xcWg4'),
(3, 'https://www.youtube.com/embed/BATKvswgBEQ?si=f2W4-MrDHa55qJ4G'),
(4, 'https://www.youtube.com/embed/5YPxhlmi8gw?si=wK2NHlwS0WRO0hz5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksesoris`
--
ALTER TABLE `aksesoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_sparepart`
--
ALTER TABLE `cms_sparepart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `karir`
--
ALTER TABLE `karir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karir_apply`
--
ALTER TABLE `karir_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraan_slider`
--
ALTER TABLE `kendaraan_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lineup`
--
ALTER TABLE `lineup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lineup_slider`
--
ALTER TABLE `lineup_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lineup_slider2`
--
ALTER TABLE `lineup_slider2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lineup_spesifikasi`
--
ALTER TABLE `lineup_spesifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sejarah_perusahaan`
--
ALTER TABLE `sejarah_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah_perusahaan_timeline`
--
ALTER TABLE `sejarah_perusahaan_timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sparepart_kategori`
--
ALTER TABLE `sparepart_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sparepart_link`
--
ALTER TABLE `sparepart_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aksesoris`
--
ALTER TABLE `aksesoris`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cms_sparepart`
--
ALTER TABLE `cms_sparepart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karir`
--
ALTER TABLE `karir`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karir_apply`
--
ALTER TABLE `karir_apply`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kendaraan_slider`
--
ALTER TABLE `kendaraan_slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lineup`
--
ALTER TABLE `lineup`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lineup_slider`
--
ALTER TABLE `lineup_slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lineup_slider2`
--
ALTER TABLE `lineup_slider2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lineup_spesifikasi`
--
ALTER TABLE `lineup_spesifikasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sejarah_perusahaan`
--
ALTER TABLE `sejarah_perusahaan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sejarah_perusahaan_timeline`
--
ALTER TABLE `sejarah_perusahaan_timeline`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sparepart_kategori`
--
ALTER TABLE `sparepart_kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sparepart_link`
--
ALTER TABLE `sparepart_link`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
