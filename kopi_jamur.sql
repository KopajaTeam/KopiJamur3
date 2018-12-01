-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 11:28 AM
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
  `password_admin` varchar(30) NOT NULL,
  `foto_admin` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat_admin`, `email_admin`, `password_admin`, `foto_admin`) VALUES
(2, 'panji', 'rumah jember 123', 'panjibudi467@gmail.com', 'panjibudi123', ''),
(3, 'toni', 'jl.drsoetome', 'sultonihawk732@gmail.com', 'tonihawk999', 'assets/images_upload/004f4818e2af51c3869b6529886e2e14.jpg'),
(4, 'bahrul', 'jember', 'bahrul@e.ac', '1234', '');

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
(6, 2, 1, 'Kopi Jamur, Tren \"Superfood\" Selanjutnya', '<p>KOMPAS.com - Setelah susu kunyit, saat ini sedang naik daun kopi jamur. Menurut Four Sigmatic, perusahaan dari Finlandia yang memproduksi produk minuman seperti kopi dan cokelat yang diinfus jamur, minuman ini bakal jadi superfood baru. Tujuan produksi minuman itu sederhana saja, memudahkan masyarakat mengonsumsi makanan yang berkhasiat sehat. &nbsp;yang dipilih adalah jamur liar yang sehat. Tak ada jamur shitake yang terlihat mengapung pada kopi jamur ini. Untuk membuat kopi, Four Sigmatic membuatnya menjadi ekstrak jamur dengan mengisolasi dan mengeringkan bahan kunci pada jamur. Bubuk itu disebut memiliki senyawa sehat dari jamur liar dalam konsentrasi tinggi. Setelah diuji keamanan dan kualitas, bubuk itu dikombinasikan dengan kopi instan organik menjadi campuran yang siap diberi air panas dan segera dinikmati. Tetapi mengapa kita perlu menambahkan jamur di kopi, bukannya mencampurnya dengan telur dadar? Four Sigmatic mengatakan, produk mereka meningkatkan manfaat sehat secangkir kopi. Jamur maitake, misalnya, dikatakan mengatur kadar gula darah, sedangkan jamur chaga mengurangi keasaman kopi sehingga kopi jadi baik untuk lambung. Kedua jamur ini ditemukan pada kopi tersebut. Menurut ahli gizi Cynthia Sass, klaim itu bukannya tak berdasar. &quot;Ada beberapa riset yang membuktikan jamur maitake mungkin menurunkan gula darah pada pasien diabetes tipe 2,&quot; katanya. Chagas dipercaya punya kemampuan mendukung kesehatan organ pencernaan dan mengusir bakteri serta virus. Tetapi ini tak berarti kita harus mengisi pola makan kita dengan jamur saja. Memang banyak riset mendukung manfaat medis jamur seperti yang sudah dikenal bangsa China kuno berabad-abad silam. &quot;Penting untuk tahu zat-zat medis termasuk dalam bahan alami dan tanaman. Ini juga punya efek samping dan interaksi dengan obat,&quot; jelas Sass. Ketika kita mengonsumsi obat pengencer darah atau pengontrol diabetes maupun tekanan darah, kita sebaiknya menghindari konsumsi jamur maitake, karena interaksi dengan obat-obatan tersebut berpotensi bahaya untuk kesehatan. Begitu pula, chagas ditemukan menurunkan kolesterol jahat, menaikkan kolesterol baik dan mengurangi inflamasi pada tikus. Tetapi studi pada tubuh manusia masih kurang. &quot;Penting untuk dicatat, chagas punya efek mengencerkan darah sehingga tak boleh dikonsumsi menjelang dioperasi,&quot; katanya. Daripada pusing dengan efek medis jamur, lebih baik jika jamur itu dimakan langsung ketimbang mengonsumsi ekstraknya. &quot;Jamur yang dimakan seperti jamur kancing dan portobello termasuk rendah kalori dan kaya antioksidan,&quot; kata Sass. &quot;Di samping itu jamur tersebut merupakan satu-satunya sumber vitamin D dari tumbuhan. Ini vitamin kunci yang seringkali tak cukup kita dapatkan,&quot; katanya. Vitamin D berkaitan dengan menurunnya risiko obesitas, diabetes tipe 2, penyakit jantung, osteoporosis dan bahkan kanker. Untuk mendapatkan kopi jamur yang serupa dengan produksi Four Sigmatic, Sass menyarankan menyerahkannya pada panduan profesional. &quot;Saya tak merekomendasikan untuk membuat kopi jamur sendiri,&quot; katanya. Sebaiknya mengonsumsi jamur dengan khasiat medis, perlu konsultasi pada ahli yang benar-benar paham riwayat kesehatan Anda dan tahu interaksi potensial dengan jamu, suplemen atau obat-obatan yang sedang dikonsumsi.</p>', '', 'assets/images_upload/foto_forum/MRIP3.jpg', '2018-10-22');

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
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(5) NOT NULL,
  `judul_prestasi` varchar(45) NOT NULL,
  `isi_prestasi` varchar(1000) NOT NULL,
  `gambar_prestasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `tanggal_r` date NOT NULL,
  `replykom` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply_forum`
--

INSERT INTO `reply_forum` (`id_reply`, `id_forum`, `id_user`, `isi_reply`, `tanggal_r`, `replykom`) VALUES
(2, 1, 1, 'Cek Isi Kopi', '2018-07-01', ''),
(4, 1, 2, 'knknnkl', '2018-11-22', ''),
(5, 1, 2, 'bklklbo;lb;obobb', '2018-11-22', ''),
(7, 1, 2, 'hahaha', '2018-11-26', '');

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
(0, 6, 7, 0, 'Alhamdulilah y', 'assets/images/portfolio/MRIP2.jpg'),
(7, 2, 7, 0, 'fdsfsfsd', 'assets/images/portfolio/xz1.JPG'),
(8, 2, 7, 0, 'enak lohj', 'assets/images/portfolio/xz2.JPG'),
(11, 2, 7, 0, 'Ini baru 1', 'assets/images/portfolio/MRIP.jpg'),
(12, 2, 7, 0, 'asdasdasdasdasdasdasdasdasdasd', 'assets/images/portfolio/next.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `unggulan`
--

CREATE TABLE `unggulan` (
  `id_unggulan` int(5) NOT NULL,
  `judul_unggulan` varchar(45) NOT NULL,
  `isi_unggulan` varchar(1000) NOT NULL,
  `gambar_unggulan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unggulan`
--

INSERT INTO `unggulan` (`id_unggulan`, `judul_unggulan`, `isi_unggulan`, `gambar_unggulan`) VALUES
(1, 'Produk Unggulan', 'Kopi jamur sebenarnya sudah sejak lama digunakan dalam pengobatan tradisional China. Bubuk ekstrak jamur yang kemudian dicampur dengan kopi instan organik ternyata efektif untuk mencegah diabetes dan mengurangi risiko kanker.', 'assets/images/portfolio/gambar6.jpg'),
(2, 'Produk Unggulan 2', 'Kopi jamur sebenarnya sudah sejak lama digunakan dalam pengobatan tradisional China. Bubuk ekstrak jamur yang kemudian dicampur dengan kopi instan organik ternyata efektif untuk mencegah diabetes dan mengurangi risiko kanker.', 'assets/images/portfolio/gambar7.jpg'),
(3, 'Produk Unggulan 3', 'Kopi jamur sebenarnya sudah sejak lama digunakan dalam pengobatan tradisional China. Bubuk ekstrak jamur yang kemudian dicampur dengan kopi instan organik ternyata efektif untuk mencegah diabetes dan mengurangi risiko kanker. Kopi jamur sebenarnya sudah sejak lama digunakan dalam pengobatan tradisional China. Bubuk ekstrak jamur yang kemudian dicampur dengan kopi instan organik ternyata efektif untuk mencegah diabetes dan mengurangi risiko kanker.', 'assets/images/portfolio/gambar8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` char(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `member_sejak` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `foto`, `telp`, `member_sejak`) VALUES
(5, 'panjibudi467@gmail.com', '12345', 'panji budi satria', '1997-12-21', 'Laki - Laki', 'jalan baru 123', 'assets/images_upload/author-14.jpg', '082143211521', '2018-11-27'),
(6, 'bahrul@gmail.com', '1234', 'bahrul', '1998-09-15', 'laki - laki', 'Jember', 'assets/images_upload/xz.JPG', '085746036053', '2018-12-01');

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
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

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
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_produk_2` (`id_produk`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_user_3` (`id_user`),
  ADD KEY `id_produk_3` (`id_produk`);

--
-- Indexes for table `unggulan`
--
ALTER TABLE `unggulan`
  ADD PRIMARY KEY (`id_unggulan`);

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
  MODIFY `id_admin` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reply_forum`
--
ALTER TABLE `reply_forum`
  MODIFY `id_reply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `unggulan`
--
ALTER TABLE `unggulan`
  MODIFY `id_unggulan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `forum_ibfk_2` FOREIGN KEY (`id_kategori_forum`) REFERENCES `kategori_forum` (`id_kategori_forum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
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
  ADD CONSTRAINT `reply_forum_ibfk_1` FOREIGN KEY (`id_forum`) REFERENCES `forum` (`id_forum`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
