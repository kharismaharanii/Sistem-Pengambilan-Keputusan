-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2021 pada 14.33
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE `bobot` (
  `idbobot` int(11) NOT NULL,
  `ratarata` varchar(10) NOT NULL,
  `penghasilan` varchar(10) NOT NULL,
  `tanggungan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`idbobot`, `ratarata`, `penghasilan`, `tanggungan`) VALUES
(1, '5', '3', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `idhasil` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hasilakhir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`idhasil`, `nama`, `hasilakhir`) VALUES
(46, 'Andri', '7.5'),
(47, 'Budi', '7.0833333333333'),
(48, 'Dedi', '8.3333333333333'),
(49, 'Andri', '7.5'),
(50, 'Budi', '7.0833333333333'),
(51, 'Dedi', '8.3333333333333'),
(54, 'Andri', '7.5'),
(55, 'Budi', '7.0833333333333'),
(56, 'Dedi', '8.3333333333333'),
(57, 'Andri', '7.5'),
(58, 'Budi', '7.0833333333333'),
(59, 'Dedi', '8.3333333333333'),
(60, 'Andri', '7.5'),
(61, 'Budi', '7.0833333333333'),
(62, 'Dedi', '8.3333333333333'),
(63, 'Andri', '7.5'),
(64, 'Budi', '7.0833333333333'),
(65, 'Dedi', '8.3333333333333'),
(66, 'Andri', '7.5'),
(67, 'Budi', '7.0833333333333'),
(68, 'Dedi', '8.3333333333333');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `idpendaftaran` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ratarata` varchar(10) NOT NULL,
  `penghasilan` varchar(50) NOT NULL,
  `tanggungan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`idpendaftaran`, `nama`, `ratarata`, `penghasilan`, `tanggungan`) VALUES
(5, 'Andri', '4', '2', '3'),
(6, 'Budi', '5', '4', '2'),
(7, 'Dedi', '4', '1', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(6, 'user', '202cb962ac59075b964b07152d234b70', 'user'),
(7, 'admin', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`idbobot`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`idhasil`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`idpendaftaran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bobot`
--
ALTER TABLE `bobot`
  MODIFY `idbobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `idhasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `idpendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
