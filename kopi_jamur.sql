-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 03:38 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopi_jamur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(9) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `alamat_admin` varchar(100) NOT NULL,
  `email_admin` varchar(30) NOT NULL,
  `password_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat_admin`, `email_admin`, `password_admin`) VALUES
(2, 'panji', 'rumah jember 123', 'panjibudi467@gmail.com', 'panjibudi123');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori_forum` int(9) NOT NULL,
  `judul` text NOT NULL,
  `isi_forum` text NOT NULL,
  `desc_forum` varchar(10000) NOT NULL,
  `gambar_headline` varchar(110) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id_forum`, `id_user`, `id_kategori_forum`, `judul`, `isi_forum`, `desc_forum`, `gambar_headline`, `tanggal`) VALUES
(1, 1, 1, 'Tak Hanya Nikmat, Kopi Jamur yang Lagi Tren Ini Juga Sehat', 'JAKARTA - Produsen dan makanan sehat asal Finlandia, Four Sigmatic berhasil menciptakan kopi jamur atau mushroom coffee. Dengan nama Mushroom Coffee Mix, kopi ini diklaim sebagai kopi sehat dan dapat menjadi pilihan pecinta kopi untuk menikmati kopi tanpa harus khawatir akan kesehatan.\r\n\r\nDilansir The Daily Meal, Mushroom Coffee Mix hadir dalam bentuk bubuk yang terbuat dari campuran jamur Cordyceps, Lion\'s Mane atau Chaga yang telah dihaluskan menjadi satu. Kopi ini juga bisa menjadi latte dengan menambahkan susu sehingga menghasilkan rasa yang lezat. \r\n\r\nPenggunaan biji Arabika bercita rasa ringan asal Amerika Tengah, membuat rasa ekstrak jamur tidak terlalu kuat. Mushroom Coffee Mix diklaim sebagai kopi sehat karena menyimpan banyak manfaat bagi kesehatan dibandingkan kopi lain. Salah satunya meningkatkan energi.\r\n\r\nBuku Herbal Medicine: Bimolecular and Clinical Aspect menyebut bahwa jamur mampu mengobati kanker, mengontrol gula darah, tekanan darah, meningkatkan sistem kekebalan dan kesehatan hati. Jamur pun telah digunakan sejak lama sebagai pengobatan di negara Asia. \r\n\r\nSelain meningkatkan energi, kopi jamur juga baik untuk kesehatan usus lantaran kandungan pH pada kopi ini dapat meningkatkan pertumbuhan bakteri baik dalam melindungi usus. Jamur juga dipercaya bisa mengatasi efek samping dari konsumsi kopi yaitu gelisah hingga rasa panas di perut.\r\n\r\n(tdy)', 'JAKARTA - Produsen dan makanan sehat asal Finlandia, Four Sigmatic berhasil menciptakan kopi jamur aJAKARTA - Produsen dan makanan sehat asal Finlandia, Four Sigmatic berhasil menciptakan kopi jamur atau mushroom coffee. ', 'assets/images_upload/forum/kopis.jpg', '2018-10-07'),
(2, 2, 2, 'Dia yang Melawan dengan Kopi', 'Liputan6.com, Aceh - Ngopi, bukan sekadar cerita mencecap segelas robusta (Coffea canephora) atau arabica(Coffea arabica) dengan berbagai variannya. Tidak sesimpel itu.\r\n\r\nKarena, di tiap gelas kopi yang diseruput para penikmatnya, tertuang pula harapan petani pemetik biji kopi. Lebih jauh, ada alam yang tak selamanya \'sehat\' dan mesti di konservasi. Agar kopi, alam, dan petani tetap hidup berkemakmuran, dan berkelanjutan.\r\nHal itu, kiranya menstimulus seorang Danurfan (32) untuk berpikir keras melangkahi renungan-renungan para kopiholic yang sejatinya hanya menjadi maniak si hitam ber-kafein tanpa ber-filosofi lebih jauh. Ia ingin menyentuh cakrawala yang selama ini jarang disentuh oleh para penggila kopi lain.\r\n\r\nAlam dan petani kopi, bagi seorang Danurfan adalah satu tubuh yang equilateral. Tak boleh terpilah atau saling tindih namun berdialektika melahirkan sebuah harmonisasi.\r\n\r\nPria kelahiran Bireuen 25 September 1986 ini, suka jika kopi Aceh prestisius dan dikenal dunia. Namun, ia tak suka jika kopi menjadi alasan kalau alam halal di ekploitasi tanpa konservasi. Baginya kopi senjata. Alat untuk melawan.\r\n\r\n\"Kopi menjadi andalan untuk melawan perusakan hutan di sebagian Aceh. Ini menjadi faktor kesejahteraan bagi masyarakat sekitar, tentunya,\" demikian Danurfan, kepada Liputan6.com, Jum\'at, 9 November 2018.\r\n\r\nDidorong kecintaanya terhadap kopi serta tekadnya melestarikan alam, Danurfan mendirikan Leuser Coffee pada 2013 lalu. Warungnya itu menjadi wadah dalam menggandeng para petani kopi di daerahnya.\r\n\r\nAlam yang kian rentan serta kesejahteraan petani kopi yang kian tersudut oleh perubahan iklim yang membuat siklus panen kopi terganggu, menjadi alasan utama pria yang tergabung dalam Gayo Cupper Team ini.\r\nLeuser Coffe yang dinahkodainya diperuntukkan khusus melayani pemesanan kopi yang pengemasannya dikerjakan di rumah saja. Biji-biji kopi tersebut khusus dipesannya dari para petani kopi kelas proletar.\r\n\r\n\"Langkah kita merajut perubahan untuk petani adalah bekerjasama, membeli dengan harga pasar, memberikan premium fee atas komitmen dalam menjaga hutan disekitar,\" ujar pria yang masa kecilnya sebagian besar dihabiskan di dataran tinggi Gayo.\r\n\r\nSelanjutnya, dari setiap kemasan bubuk kopi dengan berat 250 gram yang terjual, Danurfan menyisihkan Rp 2500. Uang inilah yang dia sisihkan untuk menjalankan niatnya melawan kerusakan alam.\r\n\r\n\"Dengan uang itu, kita menggandeng para petani untuk melakukan penanaman tanaman buah kopi sebagai ‘tabungan’ para petani sewaktu-waktu harga kopi anjlok atau mengalami gagal panen,\" ungkapnya.\r\n\r\nKonservasi yang diuji-terapkannya itu bukan tanpa sebab. Masa kecilnya yang dihabiskan bersama petani di dataran tinggi Gayo memantik kegundahan-kegundahan di jiwa seorang Danurfan.\r\n\r\nMata seorang Danurfan kenyang oleh drama bagaimana alam dirajang orang tidak bertanggungjawab. Perambahan kayu ilegal, perburuan satwa langka, pembukaan lahan dengan tidak memandang segenap pakem dan norma alam, membuatnya geram.\r\n\r\nKegundahan itu kiranya mengejawantah menjadi tekad melawan eksploitasi alam kali ia jatuh hati pada kopi. Dia paham betul, Tuhan hanya mencurah berkahnya jika alam baik dan dikelola oleh petani kopi yang baik pula.\r\n\r\nPetani kopi yang baik, tentunya menghasilkan biji kopi terbaik. Biji kopi yang berkualitas pasti dibidik oleh pembeli. Pada titik ini, dirinya tahu betul ekses seperti apa yang akan didapat petani kopi.\r\n\r\n\"Mengelola hutan menjadi sumber daya ekonomi perlu. Namun semua itu perlu dilakukan dengan bijak, sebab apa diambil dari alam harus dikembalikan ke alam,\" cetus Ketua Global March Elephant and Rhino Aceh itu.\r\n\r\nDemikian Danurfan. Baginya, kopi tidak melulu soal eksplorasi rasa, seni meracik, dan menyeduh atau sejumput kisah eksotis kala para pemikir atau seniman duduk di meja kopi lalu mencabar dunia dengan sajak-sajaknya.\r\n\r\nBukan pula sebatas melihat kopi sebagai tanaman yang punya prospek ekonomi yang menggiurkan, baik jika dijual dalam bentuk biji atau disajikan di warung-warung. Danurfan melampaui semua itu. Ia melawan dengan kopi.\r\n\r\n\"Melalui warung kopi Leuser Coffee ini, saya bertekad melestarikan hutan di Aceh. Misalnya, hutan Leuser Aceh, harus terus dikelola secara baik karena ada empat juta lebih penduduk yang bergantung dari sumber air kawasan ekosistem tersebut,\" pungkasnya.', 'Liputan6.com, Aceh - Ngopi, bukan sekadar cerita mencecap segelas robusta (Coffea canephora) atau arabica(Coffea arabica) dengan berbagai variannya. ', 'assets/images_upload/forum/kopis2.jpg', '2018-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(9) NOT NULL,
  `nama_gallery` varchar(30) NOT NULL,
  `deskripsi_gallery` varchar(30) NOT NULL,
  `gambar_galeri` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `nama_gallery`, `deskripsi_gallery`, `gambar_galeri`) VALUES
(3, 'kopi1', 'Kopi Jamur Prestasi', 'assets/images/portfolio/gambar1.jpg'),
(4, 'Kopi Jamur', 'Kopi Sehat Untuk diminum', 'assets/images/portfolio/gambar2.jpg'),
(5, 'Kopi Prestasi', 'Kopi Sehat Untuk Diminum', 'assets/images/portfolio/gambar3.jpg'),
(6, 'Jamur Prestasi', 'Sehat Untuk Diminum', 'assets/images/portfolio/gambar4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_forum`
--

CREATE TABLE `kategori_forum` (
  `id_kategori_forum` int(9) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori_forum`
--

INSERT INTO `kategori_forum` (`id_kategori_forum`, `nama_kategori`) VALUES
(1, 'Alice'),
(2, 'Hana');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori_produk` int(9) NOT NULL,
  `nama_kategori_produk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori_produk`, `nama_kategori_produk`) VALUES
(1, 'Cair'),
(2, 'Bubuk');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(9) NOT NULL,
  `nama_kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'rambi puji'),
(2, 'tanggul'),
(3, 'tegal boto'),
(4, 'tegal gede');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `kd_keranjang` int(9) NOT NULL,
  `id_produk` int(9) NOT NULL,
  `qty` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`kd_keranjang`, `id_produk`, `qty`, `harga`, `total`, `status`) VALUES
(2, 1, 2, 10000, 20000, 'sukses');

-- --------------------------------------------------------

--
-- Table structure for table `key_features`
--

CREATE TABLE `key_features` (
  `id_key` int(9) NOT NULL,
  `judul_key` text NOT NULL,
  `isi_key` text NOT NULL,
  `gambar_features` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `key_features`
--

INSERT INTO `key_features` (`id_key`, `judul_key`, `isi_key`, `gambar_features`) VALUES
(1, 'Produk Unggulan', 'Kopi jamur sebenarnya sudah sejak lama digunakan dalam pengobatan tradisional China. Bubuk ekstrak jamur yang kemudian dicampur dengan kopi instan organik ternyata efektif untuk mencegah diabetes dan mengurangi risiko kanker.', 'assets/images/portfolio/gambar2.jpg'),
(2, 'Sejarah Perusahaan', '', ''),
(3, 'Prestasi', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id_kritik_saran` int(9) NOT NULL,
  `nama_kritik_saran` text NOT NULL,
  `email_kritik_saran` varchar(30) NOT NULL,
  `isi_kritik_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kritik_saran`
--

INSERT INTO `kritik_saran` (`id_kritik_saran`, `nama_kritik_saran`, `email_kritik_saran`, `isi_kritik_saran`) VALUES
(1, 'tAKTIKTOK@GANDUL.COM', 'ayeaye@ses.com', 'oit oit oit'),
(2, 'panji', 'rudiaa@asss.com', 'hihhhiih');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int(9) NOT NULL,
  `nama_kurir` varchar(30) NOT NULL,
  `harga_ongkir` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `nama_kurir`, `harga_ongkir`) VALUES
(1, 'sulton', 10000),
(2, 'romadhon', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` int(100) NOT NULL,
  `id_admin` int(9) NOT NULL,
  `jenis_notif` varchar(100) NOT NULL,
  `judul_notif` varchar(100) NOT NULL,
  `isi_notif` text NOT NULL,
  `status_notif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id_notifikasi`, `id_admin`, `jenis_notif`, `judul_notif`, `isi_notif`, `status_notif`) VALUES
(1, 2, 'Pesanan', 'Ping', 'Ada pesanan 100', 'masuk pak edi');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_kurir` int(9) NOT NULL,
  `id_kecamatan` int(9) NOT NULL,
  `jumlah_item_order` int(100) NOT NULL,
  `harga_total_order` int(100) NOT NULL,
  `alamat_pengiriman_order` varchar(100) NOT NULL,
  `nama_pengiriman_order` varchar(100) NOT NULL,
  `status_order` varchar(100) NOT NULL,
  `gmbar_transaksi_order` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_user`, `id_kurir`, `id_kecamatan`, `jumlah_item_order`, `harga_total_order`, `alamat_pengiriman_order`, `nama_pengiriman_order`, `status_order`, `gmbar_transaksi_order`) VALUES
(1, 2, 1, 1, 2, 20000, 'jalan tegal besar', 'pani', 'sukses', 'noh'),
(2, 1, 1, 1, 3, 30000, 'jatiroto', 'joni', 'sukses', 'kiki');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(100) NOT NULL,
  `berat_produk` int(100) NOT NULL,
  `satuan_produk` varchar(100) NOT NULL,
  `jenis_satuan_produk` varchar(100) NOT NULL,
  `detail_produk` varchar(1000) NOT NULL,
  `id_kategori_produk` int(9) NOT NULL,
  `gambar_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat_produk`, `satuan_produk`, `jenis_satuan_produk`, `detail_produk`, `id_kategori_produk`, `gambar_produk`) VALUES
(7, 'Kopi Jamur Ligzi', 15000, 500, 'gram', 'Botol', 'Kopi Ini dibungkus dengan botol yang praktis.Kopi Ini dibungkus dengan botol yang praktis.Kopi Ini dibungkus dengan botol yang praktis.', 1, 'assets/images/featured-page/about-img.png');

-- --------------------------------------------------------

--
-- Table structure for table `reply_forum`
--

CREATE TABLE `reply_forum` (
  `id_reply` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi_reply` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply_forum`
--

INSERT INTO `reply_forum` (`id_reply`, `id_forum`, `id_user`, `isi_reply`, `tanggal`) VALUES
(2, 1, 1, 'Cek Isi Kopi', '2018-07-01'),
(3, 2, 2, 'Masih dengan kopi jamur', '2018-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(100) NOT NULL,
  `id_user` int(9) NOT NULL,
  `id_produk` int(100) NOT NULL,
  `rate` int(100) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `gambar_testi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `id_user`, `id_produk`, `rate`, `komentar`, `gambar_testi`) VALUES
(1, 1, 1, 500, 'asasasas', 'assets/images/portfolio/portfolio-3.jpg'),
(2, 2, 2, 500, 'hohohoho', 'assets/images/portfolio/portfolio-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` char(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `profiluser` varchar(100) NOT NULL,
  `telp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`, `alamat`, `foto`, `profiluser`, `telp`) VALUES
(1, 'panjibudi467@gmail.com', 'blitzkrieg123', 'Panji Budi', 'jvsbkv', 'assets/images_upload/panji.jpg', 'saya sangat suka sekali minumm kopi dan makan roti', 282313214),
(2, 'bahrularif007@gmail.com', '1234', 'Rangga Akhir', 'jalan baru 123', 'assets/images_upload/rga.jpg', 'makan adalah sebagian dari kebutuhan', 672319312),
(3, 'panjibudi467@gmail.com', '12345', 'Bahrul Arif', 'jalan baru 123', 'assets/images_upload/author-12.jpg', 'makan dan minum saya selalu utamakan', 807831232);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori_forum` (`id_kategori_forum`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `kategori_forum`
--
ALTER TABLE `kategori_forum`
  ADD PRIMARY KEY (`id_kategori_forum`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori_produk`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`kd_keranjang`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `key_features`
--
ALTER TABLE `key_features`
  ADD PRIMARY KEY (`id_key`);

--
-- Indexes for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id_kritik_saran`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kurir` (`id_kurir`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori_produk` (`id_kategori_produk`);

--
-- Indexes for table `reply_forum`
--
ALTER TABLE `reply_forum`
  ADD PRIMARY KEY (`id_reply`),
  ADD KEY `id_forum` (`id_forum`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori_forum`
--
ALTER TABLE `kategori_forum`
  MODIFY `id_kategori_forum` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori_produk` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `key_features`
--
ALTER TABLE `key_features`
  MODIFY `id_key` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id_kritik_saran` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reply_forum`
--
ALTER TABLE `reply_forum`
  MODIFY `id_reply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `forum_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `forum_ibfk_2` FOREIGN KEY (`id_kategori_forum`) REFERENCES `kategori_forum` (`id_kategori_forum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `notifikasi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_kurir`) REFERENCES `kurir` (`id_kurir`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori_produk`) REFERENCES `kategori_produk` (`id_kategori_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reply_forum`
--
ALTER TABLE `reply_forum`
  ADD CONSTRAINT `reply_forum_ibfk_1` FOREIGN KEY (`id_forum`) REFERENCES `forum` (`id_forum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reply_forum_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
