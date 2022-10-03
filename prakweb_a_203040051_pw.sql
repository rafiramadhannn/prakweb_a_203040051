-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Sep 2022 pada 10.27
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_a_203040051_pw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `penulis` varchar(155) NOT NULL,
  `penerbit` varchar(155) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `nama`, `penulis`, `penerbit`, `gambar`) VALUES
(1, 'Catatan juang: sebuah konspirasi alam semesta', 'Fiersa Besari', 'Fiersa Besari', '1.jpg'),
(2, 'Jatuh dan Cinta', 'Boy Candra', 'Boy Candra', '2.jpg'),
(3, 'Merayakan Kehilangan', 'Brian Khrisna', 'Brian Khrisna', '3.jpg'),
(4, 'Sebuah Usaha Melupakan', 'Boy Chandra', 'Boy Chandra', '4.jpg'),
(5, 'Konspirasi Alam Semesta', 'Fiersa Besari', 'Fiersa Besari', '5.jpg'),
(6, 'Hilang: Sebuah Kekalahan tanpa Pemenang', 'Nawang Nidlo Titisari', 'Nawang Nidlo Titisari', '6.jpg'),
(7, 'Aku', 'Chairil Anwar', 'Chairil Anwar', '7.jfif'),
(8, 'Disforia Inersia', 'Wira Nagara', 'Wira Nagara', '8.jpg'),
(9, 'Distilasi Alkena', 'Wira Nagara', 'Wira Nagara', '9.jpg'),
(10, 'Garis Waktu', 'Fiersa Besari', 'Fiersa Besari', '10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
