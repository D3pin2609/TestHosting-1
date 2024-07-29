-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2023 pada 13.17
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pelanggaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_pelanggar`
--

CREATE TABLE `siswa_pelanggar` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `jurusan` varchar(40) DEFAULT NULL,
  `guru` varchar(50) DEFAULT NULL,
  `jenis_pelanggaran` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa_pelanggar`
--

INSERT INTO `siswa_pelanggar` (`nis`, `nama`, `kelas`, `jurusan`, `guru`, `jenis_pelanggaran`) VALUES
('177013', 'Olivia', 'XI (11)', 'BR', 'Gerard Way', 'Bolos'),
('206314', 'Warinamana', 'X (10)', 'DKV', 'baba', 'Membawa HP'),
('225641', 'Kenima', 'X (10)', 'RPL', 'Gerard Way', 'Merusak Fasilitas Sekolah'),
('270370', 'Karina', 'XII (12)', 'DKV', 'Sheeran', 'Terlambat'),
('498076', 'Bernard', 'XI (11)', 'AKL', 'Gerard Way', 'Merokok di Lingkungan Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tatatertib`
--

CREATE TABLE `tatatertib` (
  `jenis_pelanggaran` varchar(100) NOT NULL,
  `poin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tatatertib`
--

INSERT INTO `tatatertib` (`jenis_pelanggaran`, `poin`) VALUES
('Bolos', 15),
('Membawa HP', 125),
('Mencuri', 50),
('Merokok di Lingkungan Sekolah', 75),
('Merusak Fasilitas Sekolah', 100),
('Terlambat', 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa_pelanggar`
--
ALTER TABLE `siswa_pelanggar`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `FK_JenPel` (`jenis_pelanggaran`);

--
-- Indeks untuk tabel `tatatertib`
--
ALTER TABLE `tatatertib`
  ADD PRIMARY KEY (`jenis_pelanggaran`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `siswa_pelanggar`
--
ALTER TABLE `siswa_pelanggar`
  ADD CONSTRAINT `FK_JenPel` FOREIGN KEY (`jenis_pelanggaran`) REFERENCES `tatatertib` (`jenis_pelanggaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
