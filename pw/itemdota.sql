-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Okt 2022 pada 13.47
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040086`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `itemdota`
--

CREATE TABLE `itemdota` (
  `id` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `tahun_terbit` varchar(100) NOT NULL,
  `harga` varchar(500) NOT NULL,
  `StokItem` varchar(1000) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `itemdota`
--

INSERT INTO `itemdota` (`id`, `nama_buku`, `penulis`, `tahun_terbit`, `harga`, `StokItem`, `gambar`) VALUES
(1, 'Laskar Pelangi', 'Andrea Hirata', '2005', '80000', '20', 'LP1.jpg'),
(2, 'Bumi Manusia', 'Pramoedya Ananta Toer', '1980', '65000', '10', 'BM1.jpg'),
(3, '5cm', 'Donny Dhirgantoro', '2005', '72000', '5', 'CM1.jpg'),
(4, 'Ronggeng Dukuh Paruk', 'Ahmad Tohari', '2003', '70000', '30', 'RD1.jpg'),
(5, 'Negeri 5 Menara', 'Ahmad Fuadi', '2012', '50000', '7', 'NM1.jpg'),
(6, 'Sang Pemimpi', 'Andrea Hirata', '2006', '71000', '15', 'SP1.jpg'),
(7, 'Perahu Kertas', 'Dee Lestari', '2003', '87000', '25', 'PK1.jpg'),
(8, 'Edensor', 'Andrea Hirata', '2007', '35000', '35', 'ED1.jpg'),
(9, 'Robohnya Surau Kami', 'A.A. Navis', '1956', '50000', '40', 'RS1.jpg'),
(10, 'Aku Ini Binatang Jalang', 'Chairil Anwar', '1986', '56000', '45', 'AB1.jpg'),
(23, 'Coba Coba', 'Gue', '2001', '20000', '2', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `itemdota`
--
ALTER TABLE `itemdota`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `itemdota`
--
ALTER TABLE `itemdota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
