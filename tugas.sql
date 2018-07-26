-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2018 pada 16.18
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id_abs` int(5) NOT NULL,
  `nippos` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kodeabsensi` enum('1','2') NOT NULL,
  `jammasuk` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_absensi`
--

INSERT INTO `tb_absensi` (`id_abs`, `nippos`, `tanggal`, `kodeabsensi`, `jammasuk`) VALUES
(1, 111, '2015-06-18', '1', '06:06:09'),
(2, 111, '2015-06-18', '2', '06:08:28'),
(3, 111, '2018-07-25', '1', '09:48:43'),
(4, 111, '2018-07-25', '2', '09:48:47'),
(5, 123, '2018-07-25', '1', '10:04:54'),
(6, 123, '2018-07-25', '2', '10:04:57'),
(7, 999, '2018-07-25', '1', '10:05:26'),
(8, 999, '2018-07-25', '2', '10:05:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jab` int(2) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tgl_input_jab` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jab`, `jabatan`, `tgl_input_jab`) VALUES
(1, 'Kepala Dinas', '2015-06-18 05:17:35'),
(2, 'Sender', '2015-06-18 03:48:19'),
(3, 'Resepsionis', '2015-06-18 04:30:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_kar` int(2) NOT NULL,
  `id_jab` int(2) NOT NULL,
  `nippos` int(20) NOT NULL,
  `nama_kar` varchar(50) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `nohp` int(12) NOT NULL,
  `tgl_input_kar` datetime NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_kar`, `id_jab`, `nippos`, `nama_kar`, `pekerjaan`, `nohp`, `tgl_input_kar`, `foto`) VALUES
(1, 1, 999, 'Herman Lantang', 'Tak Tahu', 843347883, '2015-06-18 11:23:20', '1922253_840651915960630_2004795134_n1.jpg'),
(2, 2, 111, 'Ahmad Zuckerburg', 'Pengirim', 843834883, '2015-06-18 04:39:35', 'yell2.jpg'),
(3, 2, 123, 'Qolbil', 'mengirim', 84, '2018-07-25 10:04:35', 'walaah._._.!_.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_user` int(2) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `pass_user` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_user`, `nama_user`, `pass_user`, `nama`, `level`, `status`) VALUES
(1, 'ad', 'ad', 'Admin KADIS', '1', '1'),
(2, 'Qolbil', 'admin', 'Qolbil', '8', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id_abs`);

--
-- Indeks untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jab`);

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_kar`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id_abs` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jab` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_kar` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
