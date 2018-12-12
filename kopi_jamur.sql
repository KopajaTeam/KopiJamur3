-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 04:07 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kopi_jamur`
--
CREATE DATABASE IF NOT EXISTS `kopi_jamur` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kopi_jamur`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(9) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) NOT NULL,
  `alamat_admin` varchar(100) NOT NULL,
  `email_admin` varchar(30) NOT NULL,
  `password_admin` varchar(30) NOT NULL,
  `foto_admin` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat_admin`, `email_admin`, `password_admin`, `foto_admin`) VALUES
(2, 'panji', 'rumah jember 123', 'panjibudi467@gmail.com', 'panjibudi123', 'assets/images_upload/xz.jpg'),
(3, 'toni', 'jl.drsoetome', 'sultonihawk732@gmail.com', 'tonihawk999', 'assets/images_upload/author-14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE IF NOT EXISTS `detail_transaksi` (
  `id_transaksi` int(9) NOT NULL,
  `id_produk` int(9) NOT NULL,
  `harga` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_transaksi`, `id_produk`, `harga`, `qty`, `total_harga`) VALUES
(1, 10, 245345, 1, 245345),
(1, 12, 334535, 1, 334535),
(2, 10, 245345, 2, 490690),
(2, 12, 334535, 1, 334535),
(3, 10, 245345, 2, 490690),
(3, 12, 334535, 1, 334535),
(4, 10, 245345, 4, 981380),
(5, 12, 334535, 2, 669070),
(6, 12, 334535, 3, 1003605),
(7, 13, 7000, 3, 21000);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id_forum` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_kategori_forum` int(9) NOT NULL,
  `judul` text NOT NULL,
  `isi_forum` text NOT NULL,
  `desc_forum` varchar(10000) NOT NULL,
  `gambar_headline` varchar(110) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_forum`),
  KEY `id_user` (`id_user`),
  KEY `id_kategori_forum` (`id_kategori_forum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id_forum`, `id_user`, `id_kategori_forum`, `judul`, `isi_forum`, `desc_forum`, `gambar_headline`, `tanggal`) VALUES
(4, 6, 1, 'TribunTravel Kopi Jamur', '<p><strong><br>TRIBUNTRAVEL.COM - &nbsp;</strong>Pernah mendengar <a href="http://travel.tribunnews.com/tag/kopi-jamur" title="kopi jamur">kopi jamur</a>?</p><p>Mungkin sebagian dari kamu merasa asing dengan kopi yang satu ini.</p><p>Kopi jamur dapat kamu temukan saat berkunjung ke <a href="http://travel.tribunnews.com/tag/finlandia" title="Finlandia">Finlandia</a>.</p><p><br></p><p>Dikatakan jika <a href="http://travel.tribunnews.com/tag/kopi-jamur" title="kopi jamur">kopi jamur</a> memiliki banyak manfaat bagi tubuh tanpa efek samping yang biasa kita temui jika terlalu banyak mengkonsumsi kopi.</p><p>Dilansir dari independent.co.uk, Four Sigmatic, perusahaan yang memproduksi kopi ini mengatakan, produknya bisa meningkatkan daya pikir dan produktivitas.</p><p>Efek jangka panjang kopi seperti peningkatan metabolisme, pencegah Alzheimer, dan penurunan risiko depresi juga bisa kita dapatkan.</p><p>Kopi jamur&nbsp;Finlandia&nbsp;terbuat dari campuran jamur maitake dan chaga yang dicampur dengan biji kopi biasa.</p><p>Proses pembuatan <a href="http://travel.tribunnews.com/tag/kopi-jamur" title="kopi jamur">kopi jamur</a> ini dimulai dari mengejus jamur maitake dan chaga untuk mendapatkan ekstraknya, lalu mengeringkan jus tersebut jadi bubuk.</p><p>Dilansir <a href="http://travel.tribunnews.com/tag/tribuntravel" title="TribunTravel">TribunTravel</a>.com dari sajiansedap.com, bubuk inilah yang kemudian jadi tambahan kopi reguler.</p><p>Jamur maitake memiliki khasiat menyeimbangkan kadar gula darah.</p><p>Sementara itu, jamur chaga yang bersifat alkali bisa menangkis efek asam kopi yang tidak baik untuk lambung.</p><p>Menurut para pencicip kopi yang sudah merasakan <a href="http://travel.tribunnews.com/tag/kopi-jamur" title="kopi jamur">kopi jamur</a> Finlandia produksi Four Sigmatic ini, rasa kopinya lebih kaya, namun lembut.</p><p>Saking lembut dan kompleksnya, para kritikus mengatakan, sensasi meminum kopi jamur ini mirip dengan meminum campuran kopi dan teh.</p><p><br></p><p><br></p>', '', 'assets/images_upload/foto_forum/8f2e01b3-2615-4747-bcd8-84e5fb345272.png', '2018-12-12'),
(5, 6, 1, 'Tak Hanya Nikmat, Kopi Jamur yang Lagi Tren Ini Juga Sehat', '<p><strong>JAKARTA</strong> - Produsen dan makanan sehat asal Finlandia, Four Sigmatic berhasil menciptakan kopi jamur atau mushroom coffee. Dengan nama Mushroom Coffee Mix, kopi ini diklaim sebagai kopi sehat dan dapat menjadi pilihan pecinta kopi untuk menikmati kopi tanpa harus khawatir akan kesehatan.<br><br>Dilansir The Daily Meal, Mushroom Coffee Mix hadir dalam bentuk bubuk yang terbuat dari campuran jamur Cordyceps, Lion&#39;s Mane atau Chaga yang telah dihaluskan menjadi satu. Kopi ini juga bisa menjadi latte dengan menambahkan susu sehingga menghasilkan rasa yang lezat.<br><br>Penggunaan biji Arabika bercita rasa ringan asal Amerika Tengah, membuat rasa ekstrak jamur tidak terlalu kuat. Mushroom Coffee Mix diklaim sebagai kopi sehat karena menyimpan banyak manfaat bagi kesehatan dibandingkan kopi lain. Salah satunya meningkatkan energi.<br><br>Buku Herbal Medicine: Bimolecular and Clinical Aspect menyebut bahwa jamur mampu mengobati kanker, mengontrol gula darah, tekanan darah, meningkatkan sistem kekebalan dan kesehatan hati. Jamur pun telah digunakan sejak lama sebagai pengobatan di negara Asia. &nbsp;</p><p>Selain meningkatkan energi, kopi jamur juga baik untuk kesehatan usus lantaran kandungan pH pada kopi ini dapat meningkatkan pertumbuhan bakteri baik dalam melindungi usus. Jamur juga dipercaya bisa mengatasi efek samping dari konsumsi kopi yaitu gelisah hingga rasa panas di perut. </p>', '', 'assets/images_upload/foto_forum/tak-hanya-nikmat-kopi-jamur-yang-lagi-tren-ini-juga-sehat-pZr.jpg', '2018-12-12'),
(6, 6, 2, 'Kopi Jawa', '<p><strong>Kopi Jawa</strong><br>Kopi yang berasal dari Pulau Jawa ini ternyata<br>memiliki keunikan cita rasa sendiri. Aroma<br>rempah yang lahir secara alami menjadikan kopi<br>jenis ini dinikmati karena memiliki karakteristik<br>yang berbeda. Meskipun kopi Jawa tidak sekuat<br>kopi Sumatera dan Sulawesi dari segi cita rasa<br>dan aroma, tetapi dia tetap memiliki penikmat<br>sendiri karena aroma tipis rempah yang<br>dihasikan. Menjadikan pengalaman minum kopi<br>terasa lebih unik dan berbeda. Sebagian besar<br>kopi Jawa melalui proses giling basah. Itu jugalah<br>yang membuat cita rasanya tidak terlalu kuat.<br>Meski begitu kopi Jawa tetap diminati karena<br>menurut beberapa ahli, tidak semua kopi<br>nusantara mampu menghasikan kopi yang<br>beraroma &lsquo;rempah&rsquo;. </p>', '', 'assets/images_upload/foto_forum/IMG-20180915-WA00102.jpg', '2018-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id_gallery` int(9) NOT NULL AUTO_INCREMENT,
  `nama_gallery` varchar(30) NOT NULL,
  `deskripsi_gallery` varchar(30) NOT NULL,
  `gambar_galeri` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_gallery`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

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

CREATE TABLE IF NOT EXISTS `kategori_forum` (
  `id_kategori_forum` int(9) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kategori_forum`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kategori_forum`
--

INSERT INTO `kategori_forum` (`id_kategori_forum`, `nama_kategori`) VALUES
(1, 'Informasi'),
(2, 'Komunitas');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE IF NOT EXISTS `kategori_produk` (
  `id_kategori_produk` int(9) NOT NULL AUTO_INCREMENT,
  `nama_kategori_produk` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kategori_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id_kecamatan` int(9) NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'KALIWATES'),
(2, 'AMBULU'),
(3, 'SUKORAMBI'),
(4, 'RAMBIPUJI'),
(5, 'PATRANG'),
(6, 'KALISAT'),
(7, 'MAYANG'),
(8, 'SUMBER SARI'),
(10, 'PANTI'),
(11, 'BANGSALSARI'),
(12, 'TANGGUL'),
(13, 'SUMBER BARU'),
(14, 'SEMBORO'),
(15, 'BALUNG'),
(16, 'WULUHAN'),
(17, 'PUGER'),
(18, 'GUMUK MAS'),
(19, 'UMBULSARI'),
(20, 'KENCONG'),
(21, 'JOMBANG'),
(22, 'JENGGAWAH'),
(23, 'AMBULU'),
(24, 'TEMPUREJO'),
(25, 'MUMBULSARI'),
(26, 'AJUNG'),
(27, 'PAKUSARI'),
(28, 'MAYANG'),
(29, 'SILO'),
(30, 'ARJASA'),
(31, 'JELBUK'),
(32, 'SUKOWONO'),
(33, 'SUMBER JAMBE');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE IF NOT EXISTS `keranjang` (
  `kd_keranjang` int(9) NOT NULL AUTO_INCREMENT,
  `id_user` int(9) NOT NULL,
  `id_produk` int(9) NOT NULL,
  `qty` int(100) NOT NULL,
  PRIMARY KEY (`kd_keranjang`),
  KEY `id_produk` (`id_produk`),
  KEY `id_produk_2` (`id_produk`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pembayaran`
--

CREATE TABLE IF NOT EXISTS `konfirmasi_pembayaran` (
  `id_transaksi` int(13) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `atas_nama` varchar(30) NOT NULL,
  `jumlah_transfer` int(100) NOT NULL,
  `tgl_transfer` datetime NOT NULL,
  `bukti` varchar(100) NOT NULL,
  KEY `id_transaksi` (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi_pembayaran`
--

INSERT INTO `konfirmasi_pembayaran` (`id_transaksi`, `bank`, `atas_nama`, `jumlah_transfer`, `tgl_transfer`, `bukti`) VALUES
(7, 'bni', 'Panji', 15, '2018-12-12 00:14:00', 'assets/images_upload/upload_bukti/BNI.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kritik_saran`
--

CREATE TABLE IF NOT EXISTS `kritik_saran` (
  `id_kritik_saran` int(9) NOT NULL AUTO_INCREMENT,
  `nama_kritik_saran` text NOT NULL,
  `email_kritik_saran` varchar(30) NOT NULL,
  `isi_kritik_saran` text NOT NULL,
  PRIMARY KEY (`id_kritik_saran`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kritik_saran`
--

INSERT INTO `kritik_saran` (`id_kritik_saran`, `nama_kritik_saran`, `email_kritik_saran`, `isi_kritik_saran`) VALUES
(1, 'tAKTIKTOK@GANDUL.COM', 'ayeaye@ses.com', 'oit oit oit'),
(2, 'panji', 'rudiaa@asss.com', 'hihhhiih');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE IF NOT EXISTS `notifikasi` (
  `id_notifikasi` int(100) NOT NULL AUTO_INCREMENT,
  `id_admin` int(9) NOT NULL,
  `jenis_notif` varchar(100) NOT NULL,
  `judul_notif` varchar(100) NOT NULL,
  `isi_notif` text NOT NULL,
  `status_notif` text NOT NULL,
  PRIMARY KEY (`id_notifikasi`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id_notifikasi`, `id_admin`, `jenis_notif`, `judul_notif`, `isi_notif`, `status_notif`) VALUES
(1, 2, 'Pesanan', 'Ping', 'Ada pesanan 100', 'masuk pak edi');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE IF NOT EXISTS `prestasi` (
  `id_prestasi` int(5) NOT NULL AUTO_INCREMENT,
  `judul_prestasi` varchar(45) NOT NULL,
  `isi_prestasi` varchar(1000) NOT NULL,
  `gambar_prestasi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_prestasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `judul_prestasi`, `isi_prestasi`, `gambar_prestasi`) VALUES
(1, 'Prestasi', 'Kopi jamur sebenarnya sudah sejak lama digunakan dalam pengobatan tradisional China. Bubuk ekstrak jamur yang kemudian dicampur dengan kopi instan organik ternyata efektif untuk mencegah diabetes dan mengurangi risiko kanker.', 'assets/images/portfolio/gambar6.jpg'),
(2, 'Prestasi 2', 'Kopi jamur sebenarnya sudah sejak lama digunakan dalam pengobatan tradisional China. Bubuk ekstrak jamur yang kemudian dicampur dengan kopi instan organik ternyata efektif untuk mencegah diabetes dan mengurangi risiko kanker.', 'assets/images/portfolio/gambar7.jpg'),
(3, 'Prestasi 3', 'Kopi jamur sebenarnya sudah sejak lama digunakan dalam pengobatan tradisional China. Bubuk ekstrak jamur yang kemudian dicampur dengan kopi instan organik ternyata efektif untuk mencegah diabetes dan mengurangi risiko kanker.', 'assets/images/portfolio/gambar8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(100) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(100) NOT NULL,
  `berat_produk` int(100) NOT NULL,
  `satuan_produk` varchar(100) NOT NULL,
  `jenis_satuan_produk` varchar(100) NOT NULL,
  `detail_produk` varchar(1000) NOT NULL,
  `id_kategori_produk` int(9) NOT NULL,
  `gambar_produk` varchar(100) NOT NULL,
  PRIMARY KEY (`id_produk`),
  KEY `id_kategori_produk` (`id_kategori_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat_produk`, `satuan_produk`, `jenis_satuan_produk`, `detail_produk`, `id_kategori_produk`, `gambar_produk`) VALUES
(13, 'Kopi Jamur Lingzhi + Susu', 7000, 320, 'Gram', 'Botol', 'Kopi jamur Lingzhi + Susu, adalah perpaduan antara kopi yang terbuat dari jamur lingzhi dengan tambahan susu cair putih alami ', 1, 'assets/images_upload/foto_produk/gambar61.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reply_forum`
--

CREATE TABLE IF NOT EXISTS `reply_forum` (
  `id_reply` int(11) NOT NULL AUTO_INCREMENT,
  `id_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi_reply` varchar(100) NOT NULL,
  `tanggal_reply` date NOT NULL,
  PRIMARY KEY (`id_reply`),
  KEY `id_forum` (`id_forum`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reply_forum`
--

INSERT INTO `reply_forum` (`id_reply`, `id_forum`, `id_user`, `isi_reply`, `tanggal_reply`) VALUES
(1, 4, 7, 'iya sip  bagus', '2018-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
  `id_testimoni` int(100) NOT NULL AUTO_INCREMENT,
  `id_user` int(9) NOT NULL,
  `id_produk` int(100) NOT NULL,
  `rate` int(100) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `gambar_testi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_testimoni`),
  KEY `id_user` (`id_user`),
  KEY `id_produk` (`id_produk`),
  KEY `id_produk_2` (`id_produk`),
  KEY `id_user_2` (`id_user`),
  KEY `id_user_3` (`id_user`),
  KEY `id_produk_3` (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `id_user`, `id_produk`, `rate`, `komentar`, `gambar_testi`) VALUES
(2, 6, 13, 0, 'Enak Sehat Berhasiat didalam tubuh dan menghangatkan tubuh', 'assets/images/portfolio/images.jpg'),
(3, 7, 13, 0, 'Sehat dibadan saya dan membuat energik ke tubuh', 'assets/images/portfolio/fc05d283-ffa2-4161-8ec8-8c587491d241.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(9) NOT NULL AUTO_INCREMENT,
  `id_user` int(9) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_transaksi` int(9) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `tgl_transaksi`, `total_transaksi`, `alamat`, `no_telp`, `status`) VALUES
(2, 4, '2018-12-08', 835225, 'kasdkj asdagdjhsgdysagk jsh augd kjgsdkag ', 4123141, 2),
(3, 4, '2018-12-09', 835225, 'jalan baru', 123456677, 0),
(4, 4, '2018-12-09', 991380, 'jalan baru', 12123123, 0),
(5, 4, '2018-12-10', 679070, 'dsadsad', 921031, 0),
(6, 5, '2018-12-12', 1013605, 'osoadkoq', 89320432, 0),
(7, 7, '2018-12-12', 31000, 'Jl. Dr. Soetomo No 80 Rambipuji Gedung Kuning', 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `unggulan`
--

CREATE TABLE IF NOT EXISTS `unggulan` (
  `id_unggulan` int(5) NOT NULL AUTO_INCREMENT,
  `judul_unggulan` varchar(45) NOT NULL,
  `isi_unggulan` varchar(1000) NOT NULL,
  `gambar_unggulan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_unggulan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `unggulan`
--

INSERT INTO `unggulan` (`id_unggulan`, `judul_unggulan`, `isi_unggulan`, `gambar_unggulan`) VALUES
(1, 'Produk Unggulan', 'Kopi jamur sebenarnya sudah sejak lama digunakan dalam pengobatan tradisional China. Bubuk ekstrak jamur yang kemudian dicampur dengan kopi instan organik ternyata efektif untuk mencegah diabetes dan mengurangi risiko kanker.', 'assets/images/portfolio/gambar6.jpg'),
(2, 'Produk Unggulan 2', 'Kopi jamur sebenarnya sudah sejak lama digunakan dalam pengobatan tradisional China. Bubuk ekstrak jamur yang kemudian dicampur dengan kopi instan organik ternyata efektif untuk mencegah diabetes dan mengurangi risiko kanker.', 'assets/images_upload/gambar_unggulan/IMG-20180915-WA00101.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` char(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `profiluser` varchar(100) NOT NULL,
  `telp` int(15) NOT NULL,
  `member_sejak` date NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`, `alamat`, `tgl_lahir`, `jenis_kelamin`, `foto`, `profiluser`, `telp`, `member_sejak`) VALUES
(6, 'sultonihawk732@gmail.com', '12345', 'toni', 'Jl.dr soetomono Rambipuji No: 80', '2010-02-01', 'Laki-Laki', 'assets/images_upload/about-img.png', '', 2147483647, '2018-12-12'),
(7, 'panjibudi467@gmail.com', '12345', 'Panji', 'Jl. Besuki rahmad gang sman 3 Jember', '1213-02-09', 'Laki-Laki', 'assets/images_upload/author-141.jpg', '', 2147483647, '2018-12-12'),
(8, 'bahrul123@gmail.com', '12345', 'Bahrul', 'Jl.widuri no.1 pecoro-rambipuji smpn 2 rambipuji', '2010-10-10', 'Laki-Laki', 'assets/images_upload/author-1411.jpg', '', 2147483647, '2018-12-12');

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
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keranjang_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD CONSTRAINT `konfirmasi_pembayaran_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
