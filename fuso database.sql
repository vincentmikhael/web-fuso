-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2024 at 02:01 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
  `link` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `link`, `background`) VALUES
(10, 'jj', 'images/banner/1717778064.webp');

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
(1, 'images/cms_sparepart/bg2.png', 'Haeijd', 'd', '<html>\r\n<head>\r\n	<title></title>\r\n	<style type=\"text/css\">body, div, a, p, span{ user-select: text !important; }p, h1, h2, h3, h4, h5, h6{ cursor: auto; user-select: text !important; }::selection{ background-color: #338FFF !important; color: #fff !important; }\r\n	</style>\r\n	<style data-asas-style=\"\" type=\"text/css\">body, div, a, p, span{ user-select: text !important; }p, h1, h2, h3, h4, h5, h6{ cursor: auto; user-select: text !important; }::selection{ background-color: #338FFF !important; color: #fff !important; }\r\n	</style>\r\n</head>\r\n<body>\r\n<h1>Test content</h1>\r\n\r\n<p>Tes Contenta</p>\r\n</body>\r\n</html>', 'superadminfuso');

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
  `gambar2` varchar(255) NOT NULL,
  `muatan` varchar(100) NOT NULL,
  `fitur_lengkap` varchar(255) NOT NULL,
  `foto_fitur_lengkap` varchar(255) NOT NULL,
  `mesin_canggih` varchar(255) NOT NULL,
  `foto_mesin_canggih` varchar(255) NOT NULL,
  `chasis` varchar(255) NOT NULL,
  `foto_chasis` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nama`, `gambar`, `gambar2`, `muatan`, `fitur_lengkap`, `foto_fitur_lengkap`, `mesin_canggih`, `foto_mesin_canggih`, `chasis`, `foto_chasis`, `slug`) VALUES
(1, 'LIGHT DUTY', 'images/gambar_kendaraan/11717737129bak-kayu.png', 'images/gambar_kendaraan/21717737129Light-Duty.jpg', 'GVW 5 - 8.5 Ton', 'Animi fugiat quia e', 'images/gambar_kendaraan/31717691939Box-Alumunium-hitam.png', 'Ad lorem facilis exc', 'images/gambar_kendaraan/41717691939fuso.png', 'Aliquid sint earum', 'images/gambar_kendaraan/51717691939pajero.png', 'light-duty'),
(2, 'MEDIUM DUTY', 'images/gambar_kendaraan/11717737084bak-kayu.png', 'images/gambar_kendaraan/21717737084Light-Duty.jpg', 'GVW 5 - 8.5 Ton', 'Animi fugiat quia e', 'images/gambar_kendaraan/31717692079Light-Duty.jpg', 'Tempora consequatur', 'images/gambar_kendaraan/41717692079Box-Alumunium-hitam.png', 'Aliquid sint earum', 'images/gambar_kendaraan/51717692079abu.png', 'medium-duty'),
(3, 'TRACTOR HEAD', 'images/gambar_kendaraan/11717692183Box-Alumunium-hitam.png', 'images/gambar_kendaraan/21717692183Light-Duty.jpg', 'GVW 5 - 8.5 Ton', 'Animi fugiat quia e', 'images/gambar_kendaraan/31717692183bak-kayu.png', 'Ad lorem facilis exc', 'images/gambar_kendaraan/41717692183bak-kayu.png', 'Aliquid sint earum', 'images/gambar_kendaraan/51717692183Light-Duty.jpg', 'tractor-head');

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
(12, 'Aut edit aa', 'images/lineup_kendaraan/21717703740fuso.png', 'images/lineup_kendaraan/11717697768bak-kayu.png', 'images/lineup_kendaraan/21717697768bg-slide-fitur-light-duty-01-tachometer11.jpg', 'Medium Duty', '6x4', '10', '12', 2, 'aut-edit-aa', 'brosur/lineup_kendaraan/11717782540cf7dbde2d0347d73466e519bed1e4f81.pdf', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lineup_slider`
--

CREATE TABLE `lineup_slider` (
  `id` int NOT NULL,
  `lineup_id` int NOT NULL,
  `text` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lineup_slider`
--

INSERT INTO `lineup_slider` (`id`, `lineup_id`, `text`, `gambar`) VALUES
(3, 12, 'Alias in alias irure edit', 'images/lineup_kendaraan/01717697768Light-Duty.jpg'),
(4, 12, 'nnj iinni', 'images/lineup_kendaraan/11717697768bak-kayu.png');

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
(11, 12, 'TRANSMISI', 'jkknk', 'jkknk', 'jkknk');

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
(1, 'images/maintenance/carousel-bg-1.jpg', 'ad', 'Layanan perawatan dan perbaikan kendaraan dilakukan oleh tenaga mekanik yang profesional dengan menggunakan peralatan yang modern.', '<p><a href=\"javascript:;\"><img alt=\"\" src=\"https://static.mitsubishi-motors.co.id/assets/img/aftersales/bengkel-buka-minggu-31082022.png\" /></a></p>\r\n\r\n<p>Layanan service juga tersedia di hari Minggu. Silahkan hubungi dealer terdekat di kota Anda untuk mendapatkan informasi lebih lanjut.</p>\r\n\r\n<p><a href=\"javascript:;\"><img alt=\"\" src=\"https://static.mitsubishi-motors.co.id/assets/img/aftersales/quick-pit-service-31082022.png\" /></a></p>\r\n\r\n<p>Layanan Quick PIT tersedia untuk rangkaian service ringan, dengan estimasi waktu maksimal 2 jam kerja.</p>\r\n\r\n<p><a href=\"javascript:;\"><img alt=\"\" src=\"https://static.mitsubishi-motors.co.id/assets/img/aftersales/service-booking-31082022.png\" /></a></p>\r\n\r\n<p>Layanan Service Booking memastikan kendaraan Anda servis tepat waktu dan tanpa antrian. aa</p>', 'superadminfuso');

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
(5, '2019_12_14_000001_create_personal_access_tokens_table', 2);

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
  `content` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `updated_by` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sejarah_perusahaan`
--

INSERT INTO `sejarah_perusahaan` (`id`, `content`, `thumbnail`, `updated_by`) VALUES
(1, '<p>Perusahaan ini bermula dari sebuah perusahaan yang bergerak di bidang perdagangan umum bernama CV Moneter di kota Makassar, Sulawesi Selatan, pada 22 Februari 1973 oleh Aksa Mahmud.</p>\r\n\r\n<p>Pada tahun 1978, perusahaan itu mendapatkan hak eksklusif sebagai dealer resmi mobil produksi Jepang yakni Datsun untuk kawasan timur Indonesia. Pada tahun yang sama, nama perusahaan diganti menjadi PT Moneter Motor.</p>\r\n\r\n<p>Pada Oktober 1980, PT Moneter Motor mendapatkan kepercayaan dari Mitsubishi Motors menjadi sales dan distributor mobil merek Mitsubishi untuk kawasan timur Indonesia. Perusahaan ini kemudian berganti nama menjadi PT Bosowa Berlian Motor yang menjadi tonggak penting mengawali kemajuan Bosowa Corp. Nama Bosowa berasal dari singkatan nama tiga kabupaten di Sulawesi Selatan, yaitu Bone, Soppeng dan Wajo.</p>', 'images/tentangkami/Light-Duty.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sejarah_perusahaan_timeline`
--

CREATE TABLE `sejarah_perusahaan_timeline` (
  `id` int NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sejarah_perusahaan_timeline`
--

INSERT INTO `sejarah_perusahaan_timeline` (`id`, `tahun`, `deskripsi`) VALUES
(1, '2018', 'alalalla'),
(2, '2019', 'alalalla'),
(3, '2020', 'alalalla'),
(4, '2021', 'alalalla'),
(5, '2022', 'alalalla'),
(6, '2023', 'alalalla'),
(7, '2024', 'alalalla');

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
(1, 'images/aksesoris_aftersales/bg2.png', 'halah', '1', '<p>aaana</p>', 'superadminfuso');

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
  `updated_by` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `deskripsi`, `title`, `meta_title`, `meta_deskripsi`, `meta_sitename`, `icon`, `favicon`, `whatsapp`, `linkedin`, `instagram`, `youtube`, `facebook`, `twitter`, `alamat`, `hotline`, `updated_by`) VALUES
(1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in</p><ul><li>Lorem ipsum sit dolor amet</li><li><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text</li></ul>', 'FUSO', 'Beralih bersama sama dengan kami', 'Beralih bersama kami', 'mmksi.com', 'images/icon_website/11717084947logo-light.svg', 'images/icon_website/21717084947logo-light.svg', '62898204044', 'https://www.com', 'https://www.com', 'https://www.com', 'https://www.com', 'https://www.com', 'Jl. Urip Sumoharjo No.266\r\nKarampuang, Kecamatan Panakkukang, Kota Makassar\r\nSulawesi Selatan 90231', 'Jl. Urip Sumoharjo No.266\r\nKarampuang, Kecamatan Panakkukang, Kota Makassar\r\nSulawesi Selatan 90231', 'superadminfuso');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `id` int NOT NULL,
  `kategori_id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`id`, `kategori_id`, `nama`, `harga`, `gambar`) VALUES
(2, 2, 'Oli Motul 10-40W Edit', 'Rp 45.000', 'images/sparepart/new-mmc.png');

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

--
-- Dumping data for table `sparepart_link`
--

INSERT INTO `sparepart_link` (`id`, `sparepart_id`, `nama`, `link`) VALUES
(11, 2, 'Tokopedia', 'httpss://ww.com'),
(12, 2, 'Lazada', 'www.alzda.om'),
(13, 2, 'Bukalapak', 'sjsj');

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
(1, 'superadmin', '$2y$12$GoSslldBH3pUtUzgs8C0rOYTHV65yCEOMUnd5rRFHM0DxpTpt1Unq', 'BT63UMy2OyfitaEb3X7KFoAaDKiFBsh6kyTdbpTGrcc4HnAUSnDIFpK82mo3', '2024-06-07 11:29:12', '2024-06-10 06:54:45'),
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lineup_slider`
--
ALTER TABLE `lineup_slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lineup_spesifikasi`
--
ALTER TABLE `lineup_spesifikasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
