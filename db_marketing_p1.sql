-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2020 pada 13.28
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_marketing_p1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `camaba`
--

CREATE TABLE `camaba` (
  `id_camaba` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `jurusan_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `camaba`
--

INSERT INTO `camaba` (`id_camaba`, `nama`, `email`, `alamat`, `no_hp`, `asal_sekolah`, `jurusan_sekolah`) VALUES
(1, '', '', '', '', '', ''),
(2, 'Niken Amelia', 'niken.amelia123@gmail.com', 'Jl. Meruya Selatan No. 01', '085311321124', 'SMA Hangtuah 1', 'Multimedia'),
(3, '', '', '', '', '', ''),
(4, '', '', '', '', '', ''),
(5, '', '', '', '', '', ''),
(6, '', '', '', '', '', ''),
(7, '', '', '', '', '', ''),
(8, 'Niken Amelia', 'niken.amelia123@digitalent2019.id', 'Jl. Meruya Selatan No. 01', '085510069500', 'PM UMMUL QURO AL ISLAMI', 'Multimedia'),
(9, 'Niken Amelia', 'niken.amelia123@gmail.com', 'Jl. Meruya Selatan No. 01', '12345678999991', 'Man 16 Jakarta', 'Multimedia'),
(10, 'Niken Amelia', 'niken.amelia123@gmail.com', 'Jl. Meruya Selatan No. 01', '085311321124', 'Madrasah Aliyah Negeri 22', 'Multimedia'),
(11, 'Mashuri', 'nikenkenaml@gmail.com', 'Jl. Meruya Selatan No. 01', '085311321124', 'Man 16 Jakarta', 'Multimedia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `camaba`
--
ALTER TABLE `camaba`
  ADD PRIMARY KEY (`id_camaba`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `camaba`
--
ALTER TABLE `camaba`
  MODIFY `id_camaba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
