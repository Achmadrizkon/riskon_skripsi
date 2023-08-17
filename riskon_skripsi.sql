-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Agu 2023 pada 12.58
-- Versi server: 10.8.3-MariaDB-log
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riskon_skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon`
--

CREATE TABLE `calon` (
  `id_calon` int(11) NOT NULL,
  `id_seleksi` int(11) DEFAULT NULL,
  `tanggal_calon` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon`
--

INSERT INTO `calon` (`id_calon`, `id_seleksi`, `tanggal_calon`) VALUES
(8, 9, '2023-08-16'),
(9, 10, '2023-08-16'),
(10, 11, '2023-08-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_aparat`
--

CREATE TABLE `calon_aparat` (
  `id_calon_aparat` int(11) NOT NULL,
  `id_seleksi_aparat` int(11) DEFAULT NULL,
  `tanggal_calon_aparat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_aparat`
--

INSERT INTO `calon_aparat` (`id_calon_aparat`, `id_seleksi_aparat`, `tanggal_calon_aparat`) VALUES
(1, 2, '2023-02-22'),
(3, 3, '2023-02-22'),
(4, 4, '2023-02-22'),
(5, 6, '2023-02-22'),
(6, 7, '2023-02-22'),
(7, 14, '2023-07-23'),
(8, 15, '2023-08-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_calon` int(11) DEFAULT NULL,
  `tanggal_hasil` date DEFAULT NULL,
  `hasil_polling` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_calon`, `tanggal_hasil`, `hasil_polling`) VALUES
(6, 8, '2023-08-16', '721'),
(7, 9, '2023-08-16', '928'),
(8, 10, '2023-08-16', '177');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Kecamatan Martapura'),
(2, 'Kecamatan Karang Intan '),
(3, 'Kecamatan Gambut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepaladesa`
--

CREATE TABLE `kepaladesa` (
  `id_kepaladesa` int(11) NOT NULL,
  `id_hasil` int(11) DEFAULT NULL,
  `tanggal_pelantikan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kepaladesa`
--

INSERT INTO `kepaladesa` (`id_kepaladesa`, `id_hasil`, `tanggal_pelantikan`) VALUES
(5, 7, '2023-11-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkat_aparat`
--

CREATE TABLE `pangkat_aparat` (
  `id_pangkat_aparat` int(11) NOT NULL,
  `pangkat_aparat_desa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pangkat_aparat`
--

INSERT INTO `pangkat_aparat` (`id_pangkat_aparat`, `pangkat_aparat_desa`) VALUES
(1, 'Kaur Keamanan'),
(2, 'Sekretaris Desa '),
(3, 'kaaur keuangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembukaan_pendaftaran`
--

CREATE TABLE `pembukaan_pendaftaran` (
  `id_pembukaan_pendaftaran` int(11) NOT NULL,
  `id_kecamatan` int(11) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `status_pembukaan_pendaftaran` enum('Mulai','Selesai') DEFAULT NULL,
  `desa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembukaan_pendaftaran`
--

INSERT INTO `pembukaan_pendaftaran` (`id_pembukaan_pendaftaran`, `id_kecamatan`, `tanggal_mulai`, `tanggal_selesai`, `status_pembukaan_pendaftaran`, `desa`) VALUES
(5, 1, '2023-01-01', '2023-08-31', 'Mulai', 'Bincau'),
(6, 2, '2023-01-01', '2023-08-31', 'Mulai', 'Jingah Habang ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembukaan_pendaftaran_aparat`
--

CREATE TABLE `pembukaan_pendaftaran_aparat` (
  `id_pembukaan_pendaftaran_aparat` int(11) NOT NULL,
  `id_kecamatan` int(11) DEFAULT NULL,
  `id_pangkat_aparat` int(11) NOT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `status_pembukaan_pendaftaran_aparat` enum('Mulai','Selesai') DEFAULT NULL,
  `desa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembukaan_pendaftaran_aparat`
--

INSERT INTO `pembukaan_pendaftaran_aparat` (`id_pembukaan_pendaftaran_aparat`, `id_kecamatan`, `id_pangkat_aparat`, `tanggal_mulai`, `tanggal_selesai`, `status_pembukaan_pendaftaran_aparat`, `desa`) VALUES
(1, 5, 1, '2023-01-01', '2023-03-31', 'Mulai', 'Indrasari'),
(3, 6, 1, '2023-02-01', '2023-02-28', 'Mulai', 'Tunggul Irang'),
(4, 7, 1, '2023-01-02', '2023-03-30', 'Mulai', 'Bincau'),
(5, 1, 1, '2023-01-11', '2023-09-01', 'Mulai', 'Desa Mandikapau Timur'),
(6, 1, 2, '2023-01-01', '2023-08-31', 'Mulai', 'Desa Bincau'),
(7, 1, 2, '2023-01-01', '2023-10-11', 'Mulai', 'Desa Mandikapau Timur'),
(8, 3, 3, '2023-01-01', '2023-08-31', 'Mulai', 'Desa Gambut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_pembukaan_pendaftaran` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kontak` varchar(20) DEFAULT NULL,
  `jk` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `ktp` text DEFAULT NULL,
  `ijasah` text DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_pembukaan_pendaftaran`, `id_user`, `nama_lengkap`, `alamat`, `kontak`, `jk`, `tanggal_lahir`, `tempat_lahir`, `ktp`, `ijasah`, `tanggal`) VALUES
(8, 5, 1, 'Muhammad Mawardi', 'jl pekauman ilir rt 05 rw 03', '085173333433', 'Laki-Laki', '1888-01-01', 'Kandangan', 'Laporan-Kepala-Desa-Terpilih.png', 'Pendaftaran-Calon-Kepala-Desa (4).png', '2023-08-16'),
(9, 5, 5, 'Muhammad Mawardi', 'jl pekauman ilir rt 05 rw 03', '085173333433', 'Laki-Laki', '1980-01-01', 'Kandangan', 'Laporan-Calon-Kepala-Desa.png', 'WhatsApp Image 2023-03-08 at 07.43.48.jpeg', '2023-08-16'),
(10, 5, 8, 'ahmad', 'jl pekauman no 57 ', '082234567891', 'Laki-Laki', '1970-01-16', 'barabai', 'ktp 2.jpeg', 'kartu keluarga 2.jpg', '2023-08-16'),
(11, 6, 11, 'hasby maulana', 'jl pekauman gang brunei no 54', '081237653789', 'Laki-Laki', '1999-01-20', 'banjarbaru', 'kartu keluarga 1.jpg', 'ktp 1.jpg', '2023-08-16'),
(12, 6, 9, 'rizkon', 'jl Gambut', '082250145361', 'Laki-Laki', '1999-01-05', 'banjarbaru', 'Coats_of_arms_of_Banjar_Regency.svg.png', 'Coats_of_arms_of_Banjar_Regency.svg.png', '2023-08-16'),
(13, 6, 8, 'imak', 'jl pekauman no 57 ', '082234567891', 'Laki-Laki', '2002-01-01', 'banjarbaru', 'Coats_of_arms_of_Banjar_Regency.svg.png', 'kartu keluarga 2.jpg', '2023-08-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_aparat`
--

CREATE TABLE `pendaftaran_aparat` (
  `id_pendaftaran_aparat` int(11) NOT NULL,
  `id_pembukaan_pendaftaran_aparat` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kontak` varchar(20) DEFAULT NULL,
  `jk` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `ktp` text DEFAULT NULL,
  `ijasah` text DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran_aparat`
--

INSERT INTO `pendaftaran_aparat` (`id_pendaftaran_aparat`, `id_pembukaan_pendaftaran_aparat`, `id_user`, `nama_lengkap`, `alamat`, `kontak`, `jk`, `tanggal_lahir`, `tempat_lahir`, `ktp`, `ijasah`, `tanggal`) VALUES
(1, 1, 0, 'AA', 'AA', '087704447271', 'Laki-Laki', '1970-01-06', 'Banua Kupang', 'chart (2).png', 'chart (1).png', '2023-02-04'),
(2, 3, 0, 'Heru', 'Barabai', '087704447276', 'Laki-Laki', '1970-01-01', 'Banua Kupang', 'ed382843-47d6-420b-99c3-0027565a2e85.jpg', 'ed382843-47d6-420b-99c3-0027565a2e85.jpg', '2023-01-04'),
(3, 3, 0, 'Aulia', 'Landasan Ulin', '087704447271', 'Perempuan', '1970-01-01', 'hulu sungai tengah', '200 KB 1_2060.jpg', '200 KB 1_2060.jpg', '2023-02-04'),
(4, 3, 0, 'Hasby', 'Landasan Ulin', '087704447271', 'Laki-Laki', '1995-01-01', 'Banua Kupang', 'WhatsApp Image 2022-09-29 at 20.11.56.jpeg', 'WhatsApp Image 2022-09-29 at 20.11.56.jpeg', '2023-02-04'),
(5, 4, 0, 'Hasby', 'Landasan', '085173333433', 'Laki-Laki', '1970-01-06', 'Banua Kupang', '2.png', '2.png', '2023-02-04'),
(6, 4, 0, 'Heru', 'Landasan ulin', '087704447276', 'Laki-Laki', '1970-01-01', 'hulu sungai tengah', '2.png', '2.png', '2023-02-04'),
(7, 4, 0, 'Aulia', 'Landasan Ulin', '087704447276', 'Perempuan', '1970-01-01', 'kadundung', '2.png', '2.png', '2023-02-04'),
(8, 7, 9, 'rizkon', 'jl pekauman ilir rt 05 rw 03', '087815629998', 'Laki-Laki', '2000-01-01', 'Pekauman ', 'Coats_of_arms_of_Banjar_Regency.svg.png', 'Coats_of_arms_of_Banjar_Regency.svg.png', '2023-08-16'),
(9, 7, 5, 'adam', 'jl pekauman no 57 ', '081237653789', 'Laki-Laki', '1970-01-01', 'Pekauman ', 'kartu keluarga 1.jpg', 'ktp 2.jpeg', '2023-08-16'),
(10, 7, 8, 'imak', 'jl pekauman no 57 ', '082234567891', 'Laki-Laki', '2002-01-01', 'barabai', 'Coats_of_arms_of_Banjar_Regency.svg.png', 'ktp 2.jpeg', '2023-08-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seleksi`
--

CREATE TABLE `seleksi` (
  `id_seleksi` int(11) NOT NULL,
  `id_tes` int(11) DEFAULT NULL,
  `tanggal_seleksi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seleksi`
--

INSERT INTO `seleksi` (`id_seleksi`, `id_tes`, `tanggal_seleksi`) VALUES
(9, 11, '2023-08-16'),
(10, 12, '2023-08-16'),
(11, 13, '2023-08-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seleksi_aparat`
--

CREATE TABLE `seleksi_aparat` (
  `id_seleksi_aparat` int(11) NOT NULL,
  `id_tes_aparat` int(11) DEFAULT NULL,
  `tanggal_seleksi_aparat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seleksi_aparat`
--

INSERT INTO `seleksi_aparat` (`id_seleksi_aparat`, `id_tes_aparat`, `tanggal_seleksi_aparat`) VALUES
(2, 2, '2023-02-22'),
(3, 3, '2023-02-22'),
(4, 4, '2023-02-22'),
(5, 5, '2023-02-22'),
(6, 6, '2023-02-22'),
(7, 7, '2023-02-22'),
(9, 8, '2023-07-23'),
(14, 9, '2023-07-23'),
(15, 11, '2023-08-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(11) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `nama_ketua` text NOT NULL,
  `nip_ketua` text NOT NULL,
  `logo_kantor` text NOT NULL,
  `background_login` text NOT NULL,
  `background_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id_setting`, `nama`, `alamat`, `nama_ketua`, `nip_ketua`, `logo_kantor`, `background_login`, `background_user`) VALUES
(1, 'APLIKASI PENDAFTARAN KEPALA DESA DAN APARAT DESA', 'Jl. A. Yani KM.38 No.17, Sungai Sipai, Kec. Martapura, Kabupaten Banjar, Kalimantan Selatan 70614', 'a', ' ', 'Coats_of_arms_of_Banjar_Regency.svg.png', 'background.jpg', 'background.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tes`
--

CREATE TABLE `tes` (
  `id_tes` int(11) NOT NULL,
  `id_pendaftaran` int(11) DEFAULT NULL,
  `tanggal_tes` date DEFAULT NULL,
  `lokasi_tes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tes`
--

INSERT INTO `tes` (`id_tes`, `id_pendaftaran`, `tanggal_tes`, `lokasi_tes`) VALUES
(11, 11, '2023-09-01', 'aula dinas PMD'),
(12, 12, '2023-09-01', 'aula dinas PMD'),
(13, 13, '2023-09-01', 'aula dinas PMD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tes_aparat`
--

CREATE TABLE `tes_aparat` (
  `id_tes_aparat` int(11) NOT NULL,
  `id_pendaftaran_aparat` int(11) DEFAULT NULL,
  `tanggal_tes_aparat` date DEFAULT NULL,
  `lokasi_tes_aparat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tes_aparat`
--

INSERT INTO `tes_aparat` (`id_tes_aparat`, `id_pendaftaran_aparat`, `tanggal_tes_aparat`, `lokasi_tes_aparat`) VALUES
(3, 2, '2023-03-02', 'Gedung Susu'),
(4, 3, '2023-03-02', 'Gedung Susu'),
(5, 4, '2023-03-02', 'Gedung Susu'),
(6, 5, '2023-04-01', 'Gedung Susu'),
(7, 6, '2023-04-01', 'Gedung Susu'),
(8, 7, '2023-04-01', 'Gedung Susu'),
(9, 1, '2023-01-05', 'aaaaa'),
(11, 8, '2023-09-04', 'aula Desa ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `level_user` enum('User','Administrator') NOT NULL,
  `token` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level_user`, `token`) VALUES
(1, 'Administrator', 'admin', 'admin', 'Administrator', NULL),
(5, 'Adam', 'Adam', 'adam', 'User', NULL),
(6, 'udin', 'udin', 'udin', 'User', NULL),
(7, 'ahmad', 'ahmad', 'ahmad', 'User', NULL),
(8, 'imak', 'imak', 'imak', 'User', NULL),
(9, 'rizkon', 'rizkon', 'rizkon', 'User', '19046'),
(10, 'amad', 'amad', 'amad', 'User', '19244'),
(11, 'hasby', 'hasby', 'hasby', 'User', NULL),
(13, '', '', '640076464904', 'User', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id_calon`),
  ADD KEY `id_seleksi` (`id_seleksi`);

--
-- Indeks untuk tabel `calon_aparat`
--
ALTER TABLE `calon_aparat`
  ADD PRIMARY KEY (`id_calon_aparat`),
  ADD KEY `id_seleksi` (`id_seleksi_aparat`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_calon` (`id_calon`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `kepaladesa`
--
ALTER TABLE `kepaladesa`
  ADD PRIMARY KEY (`id_kepaladesa`),
  ADD KEY `id_hasil` (`id_hasil`);

--
-- Indeks untuk tabel `pangkat_aparat`
--
ALTER TABLE `pangkat_aparat`
  ADD PRIMARY KEY (`id_pangkat_aparat`);

--
-- Indeks untuk tabel `pembukaan_pendaftaran`
--
ALTER TABLE `pembukaan_pendaftaran`
  ADD PRIMARY KEY (`id_pembukaan_pendaftaran`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indeks untuk tabel `pembukaan_pendaftaran_aparat`
--
ALTER TABLE `pembukaan_pendaftaran_aparat`
  ADD PRIMARY KEY (`id_pembukaan_pendaftaran_aparat`),
  ADD KEY `id_kecamatan` (`id_kecamatan`),
  ADD KEY `id_pangkat_aparat` (`id_pangkat_aparat`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_pembukaan_pendaftaran` (`id_pembukaan_pendaftaran`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pendaftaran_aparat`
--
ALTER TABLE `pendaftaran_aparat`
  ADD PRIMARY KEY (`id_pendaftaran_aparat`),
  ADD KEY `id_pembukaan_pendaftaran` (`id_pembukaan_pendaftaran_aparat`),
  ADD KEY `id_pembukaan_pendaftaran_aparat` (`id_pembukaan_pendaftaran_aparat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `seleksi`
--
ALTER TABLE `seleksi`
  ADD PRIMARY KEY (`id_seleksi`),
  ADD KEY `id_tes` (`id_tes`);

--
-- Indeks untuk tabel `seleksi_aparat`
--
ALTER TABLE `seleksi_aparat`
  ADD PRIMARY KEY (`id_seleksi_aparat`),
  ADD KEY `id_tes` (`id_tes_aparat`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indeks untuk tabel `tes`
--
ALTER TABLE `tes`
  ADD PRIMARY KEY (`id_tes`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indeks untuk tabel `tes_aparat`
--
ALTER TABLE `tes_aparat`
  ADD PRIMARY KEY (`id_tes_aparat`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran_aparat`),
  ADD KEY `id_pendaftaran_aparat` (`id_pendaftaran_aparat`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon`
--
ALTER TABLE `calon`
  MODIFY `id_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `calon_aparat`
--
ALTER TABLE `calon_aparat`
  MODIFY `id_calon_aparat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kepaladesa`
--
ALTER TABLE `kepaladesa`
  MODIFY `id_kepaladesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pangkat_aparat`
--
ALTER TABLE `pangkat_aparat`
  MODIFY `id_pangkat_aparat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembukaan_pendaftaran`
--
ALTER TABLE `pembukaan_pendaftaran`
  MODIFY `id_pembukaan_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pembukaan_pendaftaran_aparat`
--
ALTER TABLE `pembukaan_pendaftaran_aparat`
  MODIFY `id_pembukaan_pendaftaran_aparat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_aparat`
--
ALTER TABLE `pendaftaran_aparat`
  MODIFY `id_pendaftaran_aparat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `seleksi`
--
ALTER TABLE `seleksi`
  MODIFY `id_seleksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `seleksi_aparat`
--
ALTER TABLE `seleksi_aparat`
  MODIFY `id_seleksi_aparat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tes`
--
ALTER TABLE `tes`
  MODIFY `id_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tes_aparat`
--
ALTER TABLE `tes_aparat`
  MODIFY `id_tes_aparat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `calon`
--
ALTER TABLE `calon`
  ADD CONSTRAINT `calon_ibfk_1` FOREIGN KEY (`id_seleksi`) REFERENCES `seleksi` (`id_seleksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_calon`) REFERENCES `calon` (`id_calon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kepaladesa`
--
ALTER TABLE `kepaladesa`
  ADD CONSTRAINT `kepaladesa_ibfk_1` FOREIGN KEY (`id_hasil`) REFERENCES `hasil` (`id_hasil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`id_pembukaan_pendaftaran`) REFERENCES `pembukaan_pendaftaran` (`id_pembukaan_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `seleksi`
--
ALTER TABLE `seleksi`
  ADD CONSTRAINT `seleksi_ibfk_1` FOREIGN KEY (`id_tes`) REFERENCES `tes` (`id_tes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tes`
--
ALTER TABLE `tes`
  ADD CONSTRAINT `tes_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran` (`id_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
