-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Okt 2018 pada 12.02
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kopi_jamur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(9) NOT NULL,
  `id_notifikasi` int(9) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `alamat_admin` varchar(100) NOT NULL,
  `email_admin` varchar(30) NOT NULL,
  `password_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori_forum` int(9) NOT NULL,
  `judul` text NOT NULL,
  `isi_forum` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `gambar_headline` varchar(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id_gallery` int(9) NOT NULL,
  `nama_gallery` varchar(30) NOT NULL,
  `deskripsi_gallery` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_forum`
--

CREATE TABLE IF NOT EXISTS `kategori_forum` (
  `id_kategori_forum` int(9) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE IF NOT EXISTS `kategori_produk` (
  `id_kategori_produk` int(9) NOT NULL,
  `nama_kategori_produk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id_kecamatan` int(9) NOT NULL,
  `nama_kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE IF NOT EXISTS `keranjang` (
  `kd_keranjang` int(9) NOT NULL,
  `id_produk` int(9) NOT NULL,
  `qty` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `key_features`
--

CREATE TABLE IF NOT EXISTS `key_features` (
  `id_key` int(9) NOT NULL,
  `judul_key` text NOT NULL,
  `isi_key` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `key_features`
--

INSERT INTO `key_features` (`id_key`, `judul_key`, `isi_key`) VALUES
(1, 'Sejarah Perusahaan', ''),
(2, 'Produk Unggulan', ''),
(3, 'Prestasi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik_saran`
--

CREATE TABLE IF NOT EXISTS `kritik_saran` (
  `id_kritik_saran` int(9) NOT NULL,
  `nama_kritik_saran` text NOT NULL,
  `email_kritik_saran` varchar(30) NOT NULL,
  `isi_kritik_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurir`
--

CREATE TABLE IF NOT EXISTS `kurir` (
  `id_kurir` int(9) NOT NULL,
  `nama_kurir` varchar(30) NOT NULL,
  `harga_ongkir` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE IF NOT EXISTS `notifikasi` (
  `id_notifikasi` int(100) NOT NULL,
  `jenis_notif` varchar(100) NOT NULL,
  `judul_notif` varchar(100) NOT NULL,
  `isi_notif` text NOT NULL,
  `status_notif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE IF NOT EXISTS `order` (
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(100) NOT NULL,
  `detail_produk` varchar(100) NOT NULL,
  `id_kategori_produk` int(9) NOT NULL,
  `gambar_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reply_forum`
--

CREATE TABLE IF NOT EXISTS `reply_forum` (
  `id_reply` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi_reply` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
  `id_testimoni` int(100) NOT NULL,
  `id_user` int(9) NOT NULL,
  `id_produk` int(100) NOT NULL,
  `rate` int(100) NOT NULL,
  `komentar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` char(100) NOT NULL,
  `alamat` int(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`), ADD KEY `id_notifikasi` (`id_notifikasi`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`), ADD KEY `id_user` (`id_user`), ADD KEY `id_kategori_forum` (`id_kategori_forum`);

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
  ADD PRIMARY KEY (`kd_keranjang`), ADD KEY `id_produk` (`id_produk`);

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
  ADD PRIMARY KEY (`id_notifikasi`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`), ADD KEY `id_user` (`id_user`), ADD KEY `id_kurir` (`id_kurir`), ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`), ADD KEY `id_kategori_produk` (`id_kategori_produk`);

--
-- Indexes for table `reply_forum`
--
ALTER TABLE `reply_forum`
  ADD PRIMARY KEY (`id_reply`), ADD KEY `id_forum` (`id_forum`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`), ADD KEY `id_user` (`id_user`), ADD KEY `id_produk` (`id_produk`);

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
  MODIFY `id_admin` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori_forum`
--
ALTER TABLE `kategori_forum`
  MODIFY `id_kategori_forum` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori_produk` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `key_features`
--
ALTER TABLE `key_features`
  MODIFY `id_key` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id_kritik_saran` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reply_forum`
--
ALTER TABLE `reply_forum`
  MODIFY `id_reply` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_notifikasi`) REFERENCES `notifikasi` (`id_notifikasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `forum`
--
ALTER TABLE `forum`
ADD CONSTRAINT `forum_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `forum_ibfk_2` FOREIGN KEY (`id_kategori_forum`) REFERENCES `kategori_forum` (`id_kategori_forum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `order`
--
ALTER TABLE `order`
ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_kurir`) REFERENCES `kurir` (`id_kurir`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori_produk`) REFERENCES `kategori_produk` (`id_kategori_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `reply_forum`
--
ALTER TABLE `reply_forum`
ADD CONSTRAINT `reply_forum_ibfk_1` FOREIGN KEY (`id_forum`) REFERENCES `forum` (`id_forum`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `reply_forum_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `testimoni_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
