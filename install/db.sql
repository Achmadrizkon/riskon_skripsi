-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 08 Agu 2021 pada 07.16
-- Versi server: 5.7.31
-- Versi PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aset`
--

DROP TABLE IF EXISTS `aset`;
CREATE TABLE IF NOT EXISTS `aset` (
  `id_aset` int(11) NOT NULL AUTO_INCREMENT,
  `id_pegawai` int(11) DEFAULT NULL,
  `nama_aset` varchar(255) DEFAULT NULL,
  `jenis_aset` varchar(255) NOT NULL,
  PRIMARY KEY (`id_aset`),
  KEY `id_pegawai` (`id_pegawai`)
) ENGINE=MyISAM AUTO_INCREMENT=4173850 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aset`
--

INSERT INTO `aset` (`id_aset`, `id_pegawai`, `nama_aset`, `jenis_aset`) VALUES
(1, 1, 'Motor Honda R330', 'Kendaraan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

DROP TABLE IF EXISTS `barang`;
CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`) VALUES
(1, 'Gunting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

DROP TABLE IF EXISTS `barang_keluar`;
CREATE TABLE IF NOT EXISTS `barang_keluar` (
  `id_barang_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `id_pegawai` int(11) DEFAULT NULL,
  `tanggal_barang_keluar` date DEFAULT NULL,
  PRIMARY KEY (`id_barang_keluar`),
  KEY `id_pegawai` (`id_pegawai`)
) ENGINE=MyISAM AUTO_INCREMENT=660002 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_barang_keluar`, `id_pegawai`, `tanggal_barang_keluar`) VALUES
(660001, 1, '2021-08-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

DROP TABLE IF EXISTS `bidang`;
CREATE TABLE IF NOT EXISTS `bidang` (
  `id_bidang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bidang` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_bidang`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `nama_bidang`) VALUES
(1, 'PTIP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_barang_keluar`
--

DROP TABLE IF EXISTS `detail_barang_keluar`;
CREATE TABLE IF NOT EXISTS `detail_barang_keluar` (
  `id_detail_barang_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang_keluar` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah_barang_keluar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail_barang_keluar`),
  KEY `id_barang_keluar` (`id_barang_keluar`),
  KEY `id_barang` (`id_barang`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_barang_keluar`
--

INSERT INTO `detail_barang_keluar` (`id_detail_barang_keluar`, `id_barang_keluar`, `id_barang`, `jumlah_barang_keluar`) VALUES
(1, 660001, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pembelian_barang`
--

DROP TABLE IF EXISTS `detail_pembelian_barang`;
CREATE TABLE IF NOT EXISTS `detail_pembelian_barang` (
  `id_detail_pembelian_barang` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembelian_barang` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah_pembelian_barang` int(11) DEFAULT NULL,
  `harga_pembelian_barang` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail_pembelian_barang`),
  KEY `id_pembelian_barang` (`id_pembelian_barang`),
  KEY `id_barang` (`id_barang`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pembelian_barang`
--

INSERT INTO `detail_pembelian_barang` (`id_detail_pembelian_barang`, `id_pembelian_barang`, `id_barang`, `jumlah_pembelian_barang`, `harga_pembelian_barang`) VALUES
(1, 885255, 1, 3, 400000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Kepala Seksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_perawatan`
--

DROP TABLE IF EXISTS `jadwal_perawatan`;
CREATE TABLE IF NOT EXISTS `jadwal_perawatan` (
  `id_jadwal_perawatan` int(11) NOT NULL AUTO_INCREMENT,
  `id_aset` int(11) DEFAULT NULL,
  `bulan_jadwal_perawatan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jadwal_perawatan`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_perawatan`
--

INSERT INTO `jadwal_perawatan` (`id_jadwal_perawatan`, `id_aset`, `bulan_jadwal_perawatan`) VALUES
(1, 1, 'Januari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `id_jabatan` int(11) DEFAULT NULL,
  `id_bidang` int(11) DEFAULT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `tanggal_lahir_pegawai` date DEFAULT NULL,
  `jenis_kelamin_pegawai` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `agama_pegawai` enum('Islam','Kristen','Konghuchu','Hindu','Budha','Katolik') DEFAULT NULL,
  `goldar_pegawai` enum('A','B','AB','O') DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`),
  KEY `id_jabatan` (`id_jabatan`),
  KEY `id_bidang` (`id_bidang`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_jabatan`, `id_bidang`, `nama_pegawai`, `tanggal_lahir_pegawai`, `jenis_kelamin_pegawai`, `agama_pegawai`, `goldar_pegawai`) VALUES
(1, 1, 1, 'Mega Dahliana', '2021-08-06', 'Laki-Laki', 'Islam', 'O');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_aset`
--

DROP TABLE IF EXISTS `pembelian_aset`;
CREATE TABLE IF NOT EXISTS `pembelian_aset` (
  `id_pembelian_aset` int(11) NOT NULL AUTO_INCREMENT,
  `id_aset` int(11) DEFAULT NULL,
  `tanggal_pembelian` date DEFAULT NULL,
  `harga_pembelian` int(11) DEFAULT NULL,
  `keterangan_pembelian` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pembelian_aset`),
  KEY `id_aset` (`id_aset`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_barang`
--

DROP TABLE IF EXISTS `pembelian_barang`;
CREATE TABLE IF NOT EXISTS `pembelian_barang` (
  `id_pembelian_barang` int(11) NOT NULL AUTO_INCREMENT,
  `id_pegawai` int(11) DEFAULT NULL,
  `tanggal_pembelian_barang` date DEFAULT NULL,
  `bukti_pembelian_barang` text,
  PRIMARY KEY (`id_pembelian_barang`),
  KEY `id_pegawai` (`id_pegawai`)
) ENGINE=MyISAM AUTO_INCREMENT=885256 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian_barang`
--

INSERT INTO `pembelian_barang` (`id_pembelian_barang`, `id_pegawai`, `tanggal_pembelian_barang`, `bukti_pembelian_barang`) VALUES
(885255, 1, '2021-08-23', '8a05cd000bdd8476571f257e50fd69b5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemusnahan_aset`
--

DROP TABLE IF EXISTS `pemusnahan_aset`;
CREATE TABLE IF NOT EXISTS `pemusnahan_aset` (
  `id_pemusnahan_aset` int(11) NOT NULL AUTO_INCREMENT,
  `id_perbaikan_aset` int(11) DEFAULT NULL,
  `tanggal_pemusnahan_aset` date DEFAULT NULL,
  `keterangan_pemusnahan_aset` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pemusnahan_aset`),
  KEY `id_perbaikan_aset` (`id_perbaikan_aset`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemusnahan_aset`
--

INSERT INTO `pemusnahan_aset` (`id_pemusnahan_aset`, `id_perbaikan_aset`, `tanggal_pemusnahan_aset`, `keterangan_pemusnahan_aset`) VALUES
(1, 1, '2021-08-13', 'fgdfgdg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `akses`) VALUES
(1, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbaikan_aset`
--

DROP TABLE IF EXISTS `perbaikan_aset`;
CREATE TABLE IF NOT EXISTS `perbaikan_aset` (
  `id_perbaikan_aset` int(11) NOT NULL AUTO_INCREMENT,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_aset` int(11) DEFAULT NULL,
  `tanggal_perbaikan_aset` date DEFAULT NULL,
  `status_aset` enum('Normal','Rusak Berat') DEFAULT NULL,
  PRIMARY KEY (`id_perbaikan_aset`),
  KEY `id_pegawai` (`id_pegawai`),
  KEY `id_aset` (`id_aset`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perbaikan_aset`
--

INSERT INTO `perbaikan_aset` (`id_perbaikan_aset`, `id_pegawai`, `id_aset`, `tanggal_perbaikan_aset`, `status_aset`) VALUES
(1, 1, 1, '2021-08-27', 'Rusak Berat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sistem`
--

DROP TABLE IF EXISTS `sistem`;
CREATE TABLE IF NOT EXISTS `sistem` (
  `id_sistem` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `judul_tabel_sistem` varchar(255) NOT NULL,
  `nama_tabel_sistem` varchar(255) NOT NULL,
  `judul_field_sistem` varchar(255) NOT NULL,
  `nama_field_sistem` varchar(255) NOT NULL,
  `tipe_field_sistem` varchar(255) NOT NULL,
  `values_field_sistem` varchar(255) NOT NULL,
  `keterangan_field_sistem` varchar(255) NOT NULL,
  PRIMARY KEY (`id_sistem`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sistem`
--

INSERT INTO `sistem` (`id_sistem`, `judul_tabel_sistem`, `nama_tabel_sistem`, `judul_field_sistem`, `nama_field_sistem`, `tipe_field_sistem`, `values_field_sistem`, `keterangan_field_sistem`) VALUES
(29, 'Barang', 'barang', 'id_barang', 'id_barang', 'int', '11', 'primary'),
(30, 'Barang', 'barang', 'Nama Barang', 'nama_barang', 'varchar', '255', ''),
(31, 'Aset', 'aset', 'id_aset', 'id_aset', 'int', '11', 'primary'),
(32, 'Aset', 'aset', 'Nama Aset', 'nama_aset', 'varchar', '255', ''),
(33, 'Aset', 'aset', 'Jenis Aset', 'Jenis Aset', 'varchar', '255', ''),
(34, 'Aset', 'aset', 'Penanggung Jawab', 'id_pegawai', 'int', '11', 'index'),
(35, 'Pegawai', 'pegawai', 'id_pegawai', 'id_pegawai', 'int', '11', 'primary'),
(36, 'Pegawai', 'pegawai', 'Nama Pegawai', 'nama_pegawai', 'varchar', '255', ''),
(37, 'Pegawai', 'pegawai', 'Tanggal Lahir', 'tanggal_lahir_pegawai', 'date', '', ''),
(38, 'Pegawai', 'pegawai', 'Jabatan', 'id_jabatan', 'int', '11', 'index'),
(39, 'Pegawai', 'pegawai', 'Bidang', 'id_bidang', 'int', '11', 'index'),
(40, 'Pegawai', 'pegawai', 'Jenis Kelamin', 'jenis_kelamin_pegawai', 'enum', '\"Laki-Laki\",\"Perempuan\"', ''),
(41, 'Pegawai', 'pegawai', 'Agama', 'agama_pegawai', 'enum', '\"Islam\",\"Kristen\",\"Konghuchu\",\"Hindu\",\"Budha\",\"Katolik\"', ''),
(42, 'Pegawai', 'pegawai', 'Golongan Darah', 'goldar_pegawai', 'enum', '\"A\",\"B\",\"AB\",\"O\"', ''),
(43, 'Jabatan', 'jabatan', 'id_jabatan', 'id_jabatan', 'int', '11', 'primary'),
(44, 'Jabatan', 'jabatan', 'Nama Jabatan', 'nama_jabatan', 'varchar', '255', ''),
(45, 'Bidang', 'bidang', 'id_bidang', 'id_bidang', 'int', '11', 'primary'),
(46, 'Bidang', 'bidang', 'Nama Bidang', 'nama_bidang', 'varchar', '255', ''),
(47, 'Pembelian Barang', 'pembelian_barang', 'id_pembelian_barang', 'id_pembelian_barang', 'int', '11', 'primary'),
(48, 'Pembelian Barang', 'pembelian_barang', 'Nama Penanggung Jawab', 'id_pegawai', 'int', '11', 'index'),
(49, 'Pembelian Barang', 'pembelian_barang', 'Tanggal Pembelian', 'tanggal_pembelian_barang', 'date', '', ''),
(50, 'Pembelian Barang', 'pembelian_barang', 'Bukti Pembelian', 'bukti_pembelian_barang', 'file', '255', ''),
(51, 'Detail Pembelian', 'detail_pembelian_barang', 'id_detail_pembelian_barang', 'id_detail_pembelian_barang', 'int', '11', 'primary'),
(52, 'Detail Pembelian', 'detail_pembelian_barang', 'id_pembelian_barang', 'id_pembelian_barang', 'int', '11', 'index'),
(53, 'Detail Pembelian', 'detail_pembelian_barang', 'Nama Barang', 'id_barang', 'int', '11', 'index'),
(54, 'Detail Pembelian', 'detail_pembelian_barang', 'Jumlah Barang', 'jumlah_pembelian_barang', 'int', '11', ''),
(55, 'Detail Pembelian', 'detail_pembelian_barang', 'Harga Barang', 'harga_pembelian_barang', 'int', '11', ''),
(56, 'Barang Keluar', 'barang_keluar', 'id_barang_keluar', 'id_barang_keluar', 'int', '11', 'primary'),
(57, 'Barang Keluar', 'barang_keluar', 'Peminta Barang', 'id_pegawai', 'int', '11', 'index'),
(58, 'Barang Keluar', 'barang_keluar', 'Tanggal Barang Keluar', 'tanggal_barang_keluar', 'date', '', ''),
(59, 'Detail Barang Keluar', 'detail_barang_keluar', 'id_detail_barang_keluar', 'id_detail_barang_keluar', 'int', '11', 'primary'),
(60, 'Detail Barang Keluar', 'detail_barang_keluar', 'id_barang_keluar', 'id_barang_keluar', 'int', '11', 'index'),
(61, 'Detail Barang Keluar', 'detail_barang_keluar', 'Nama Barang', 'id_barang', 'int', '11', 'index'),
(62, 'Detail Barang Keluar', 'detail_barang_keluar', 'Jumlah Barang', 'jumlah_barang_keluar', 'int', '11', ''),
(63, 'Perbaikan Aset', 'perbaikan_aset', 'id_perbaikan_aset', 'id_perbaikan_aset', 'int', '11', 'primary'),
(64, 'Perbaikan Aset', 'perbaikan_aset', 'Penanggung Jawab', 'id_pegawai', 'int', '11', 'index'),
(65, 'Perbaikan Aset', 'perbaikan_aset', 'Tanggal Perbaikan', 'tanggal_perbaikan_aset', 'date', '', ''),
(66, 'Perbaikan Aset', 'perbaikan_aset', 'Status Aset', 'status_aset', 'enum', '\"Normal\",\"Rusak Berat\"', ''),
(67, 'Perbaikan Aset', 'perbaikan_aset', 'Aset', 'id_aset', 'int', '11', 'index'),
(68, 'Pemusnahan Aset', 'pemusnahan_aset', 'id_pemusnahan_aset', 'id_pemusnahan_aset', 'int', '11', 'primary'),
(69, 'Pemusnahan Aset', 'pemusnahan_aset', 'Nama Aset', 'id_perbaikan_aset', 'int', '11', 'index'),
(70, 'Pemusnahan Aset', 'pemusnahan_aset', 'Tanggal Pemusnahan', 'tanggal_pemusnahan_aset', 'date', '', ''),
(71, 'Pemusnahan Aset', 'pemusnahan_aset', 'Keterangan Pemusnahan', 'keterangan_pemusnahan_aset', 'varchar', '255', ''),
(72, 'Pembelian Aset', 'pembelian_aset', 'id_pembelian_aset', 'id_pembelian_aset', 'int', '11', 'primary'),
(73, 'Pembelian Aset', 'pembelian_aset', 'Nama Aset', 'id_aset', 'int', '11', 'index'),
(74, 'Pembelian Aset', 'pembelian_aset', 'Tanggal Pembelian', 'tanggal_pembelian', 'date', '', ''),
(75, 'Pembelian Aset', 'pembelian_aset', 'Harga Pembelian', 'harga_pembelian', 'int', '11', ''),
(76, 'Pembelian Aset', 'pembelian_aset', 'Keterangan Pembelian', 'keterangan_pembelian', 'varchar', '255', ''),
(77, 'Jadwal Perawatan', 'jadwal_perawatan', 'id_jadwal_perawatan', 'id_jadwal_perawatan', 'int', '11', 'primary'),
(78, 'Jadwal Perawatan', 'jadwal_perawatan', 'Nama Aset', 'id_aset', 'int', '11', ''),
(79, 'Jadwal Perawatan', 'jadwal_perawatan', 'Bulan Perawatan', 'bulan_jadwal_perawatan', 'month', '', ''),
(80, 'Ahli Waris', 'ahliwaris', 'id_ahliwaris', 'id_ahliwaris', 'int', '11', 'primary'),
(81, 'Ahli Waris', 'ahliwaris', 'Nama Penduduk', 'id_penduduk', 'int', '11', 'index'),
(82, 'Ahli Waris', 'ahliwaris', 'Tanggal Permohonan', 'tanggal_ahliwaris', 'date', '', ''),
(83, 'Ahli Waris', 'ahliwaris', 'Ahli Waris', 'ahliwaris_ahliwaris', 'varchar', '255', ''),
(84, 'Ahli Waris', 'ahliwaris', 'Tanggal Konfirmasi', 'tanggal_konfirmasi_ahliwaris', 'date', '', ''),
(85, 'Ahli Waris', 'ahliwaris', 'Status Surat', 'status_ahliwaris', 'enum', '\"Proses\",\"Diterima\",\"Ditolak\"', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
