-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2021 pada 21.01
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

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
  `Name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Detail` varchar(100) NOT NULL,
  `Price` varchar(500) NOT NULL,
  `StokItem` varchar(1000) NOT NULL,
  `Picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `itemdota`
--

INSERT INTO `itemdota` (`id`, `Name`, `Description`, `Detail`, `Price`, `StokItem`, `Picture`) VALUES
(1, 'Exalted Manifold Paradox (Arcana Phantom Assassin)', 'Full Unlocked 3 Style of Arcana Phantom Assasin', 'NEW - ARCANA - UNLOCKED - PREMIUM QUALITY RARE ITEM', '420400', '60', 'PA1.jpg'),
(2, 'Fractal Horns of Inner Abysm (Arcana Terrorblade)', 'Only Unlocked 1 Style of Arcana Terrorblade', 'ARCANA - NEW - UNLOCKED - PREMIUM ITEM', '285000', '50', 'TB1.jpg'),
(3, 'Exalted Great Sage\'s Reckoning (Arcana Monkey King)', 'Exalted Great Sage\'s Reckoning', 'NEW - ARCANA - PREMIUM QUALITY ITEM ', '314000', '5', 'MK1.jpg'),
(4, 'Demon Eater (Arcana Shadow Fiend)', 'Demon Eater (RED Arcana Shadow Fiend)', 'NEW - ARCANA - ULTRA PREMIUM RARE QUALITY', '285000', '2', 'SF1.jpg'),
(5, 'Blades of Voth Domosh (Arcana Legion Commander)', 'Arcana LC (Legion Commander) Blades of voth Domosh', 'NEW - ARCANA - UNLOCKED - SUPER RARE ITEM', '304900', '3', 'LC1.jpg'),
(6, 'Tempest Helm of the Thundergod (Arcana Zeus)', 'UNLOCKED Tempest Helm of the Thundergod ', 'NEW - ARCANA - UNLOCKED - PREMIUM ITEM QUALITY', '368000', '81', 'ZS1.jpg'),
(7, 'Exalted Flockheart\'s Gamble (Arcana Ogre Magi)', 'Arcan Ogre Magi (Slot : Head) Exalted Flockheart\'s Gamble', 'NEW - ARCANA - UNLOCKED - RARE PREMIUM ITEM 2 HEADS', '439000', '2', 'OM1.jpg'),
(8, 'Swine of the Sunken Galley (Arcana Techies Set)', 'Arcana Techies (Set) Swine of the Sunken Galley', 'NEW - ARCANA - PREMIUM RARE QUALITY ITEM', '230000', '90', 'TC1.jpg\r\n'),
(9, 'Exalted Magus Cypher (Arcana Rubick)', 'Arcana Rubick (CAN UNLOCK FULL SKILL EFFECT)', 'NEW - LIMITED - ARCANA - PREMIUM HOT RARE QUALITY ITEM', '374000', '35', 'RB1.jpg'),
(10, 'Exalted Feast of Abscession (Arcana Pudge)', 'Arcana Pudge (Slot : Back) Exalted Feast of Abscession', 'NEW - ARCANA - ITEM - PREMIUM QUALITY RARE ITEM ', '289900', '3', 'PG1.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
