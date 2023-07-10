-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2023 pada 09.09
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id` int(11) NOT NULL,
  `mahasiswa_npm` char(13) DEFAULT NULL,
  `matakuliah_kodemk` char(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `krs`
--

INSERT INTO `krs` (`id`, `mahasiswa_npm`, `matakuliah_kodemk`) VALUES
(1, '211063125001', 'MK001'),
(2, '211063125002', 'MK002'),
(3, '211063125003', 'MK001'),
(4, '211063125004', 'MK003'),
(5, '211063125005', 'MK004'),
(6, '211063125006', 'MK001'),
(7, '211063125007', 'MK001'),
(8, '211063125008', 'MK002'),
(9, '211063125009', 'MK002'),
(10, '2110631250010', 'MK003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` char(13) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` enum('Teknik Informatika','Sistem Informasi') NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`, `jurusan`, `alamat`) VALUES
('211063125001', 'Siska Putri', 'Sistem Informasi', 'Karawang'),
('2110631250010', 'Andri Muhammad', 'Teknik Informatika', 'Medan'),
('211063125002', 'Ujang Aziz', 'Sistem Informasi', 'Bandung'),
('211063125003', 'Veronica Setyano', 'Teknik Informatika', 'Banten'),
('211063125004', 'Rizka Nurmala Putri', 'Sistem Informasi', 'Malang'),
('211063125005', 'Eren Putra', 'Teknik Informatika', 'Tangerang'),
('211063125006', 'Putra Abdul Rahman', 'Teknik Informatika', 'Depok'),
('211063125007', 'Rahmat Andriyani', 'Teknik Informatika', 'Lampung'),
('211063125008', 'Ayu Puspita Sari', 'Sistem Informasi', 'Jakarta'),
('211063125009', 'Putri Ayuni', 'Sistem Informasi', 'Bogor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kodemk` char(6) NOT NULL,
  `namamk` varchar(50) NOT NULL,
  `jumlah_sks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kodemk`, `namamk`, `jumlah_sks`) VALUES
('MK001', 'Basis Data', 3),
('MK002', 'Pemrograman Berbasis Web', 3),
('MK003', 'Algoritma Struktur Data', 3),
('MK004', 'Kajian Jurnal Informatika', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswa_npm` (`mahasiswa_npm`),
  ADD KEY `matakuliah_kodemk` (`matakuliah_kodemk`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kodemk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `krs`
--
ALTER TABLE `krs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `krs_ibfk_1` FOREIGN KEY (`mahasiswa_npm`) REFERENCES `mahasiswa` (`npm`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `krs_ibfk_2` FOREIGN KEY (`matakuliah_kodemk`) REFERENCES `matakuliah` (`kodemk`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
