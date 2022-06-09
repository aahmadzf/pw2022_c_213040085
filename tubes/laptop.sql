-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2022 pada 09.20
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acer`
--

CREATE TABLE `acer` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `acer`
--

INSERT INTO `acer` (`id`, `gambar`, `nama`, `deskripsi`) VALUES
(1, 'Asus1.png', 'ACER Nitro 5', 'RAM 8 SSD 128 Intel i5 gen 821312'),
(2, 'card1.png', 'ACER C5', 'RAM 8 SSD 128 Intel i5 gen 821312'),
(3, 'Asus1.png', 'ASUS Nitro 5123', 'RAM 8 SSD 128 Intel i5 gen 8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hp`
--

CREATE TABLE `hp` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hp`
--

INSERT INTO `hp` (`id`, `gambar`, `nama`, `deskripsi`) VALUES
(2, 'Asus1.png', 'HP tuff gaming', 'RAM 8 SSD 128 Intel i5 gen 8'),
(3, 'lenovonano.jpg', 'HP nitro 5', 'RAM 8 SSD 128 Intel i5 gen 8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lenovo`
--

CREATE TABLE `lenovo` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lenovo`
--

INSERT INTO `lenovo` (`id`, `gambar`, `nama`, `deskripsi`) VALUES
(2, 'lenovonano.jpg', 'Lenovo Thinkpad X1 Nano Carbon Touch', 'Processor : 11th Gen Intel Core i7 1180G7 vPro, OS : Windows 10 Pro Display : 13&quot; 2K Touchscreen (2160 x 1350) with Dolby Vision, 450 nits, 100% sRGB Memory : 16GB LPDDR4x Battery : Up to 13 hours* 48Wh (MM18), Rapid Charge included Storage : 1TB PCI'),
(7, 'lenovoflex5.jpg', 'Lenovo IdeaPad Flex 5 ', '- Intel Core i5-1135G7 (Cache 8 MB, hingga 4,20 GHz), RAM 8GB, Storage 512GB SSD, Intel Iris Xe Graphics (For 11th Gen) - 14&quot; diagonal, Full HD IPS Touchscreen - Windows 10 Home Edition / Windows 11 Home Edition');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spek`
--

CREATE TABLE `spek` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spek`
--

INSERT INTO `spek` (`id`, `gambar`, `nama`, `deskripsi`) VALUES
(13, 'Asus1.png', 'ASUS tuff gaming', 'RAM 16 SSD 256 Intel i7 gen 10'),
(20, 'Asus1.png', 'ASUS Nitro 5123', 'RAM 8 SSD 128 Intel i5 gen 821312');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(10, 'admin', '$2y$10$el1cS7VlqGwWZLokmyv7m..55ZzZkIA/e.VdZ.pbrQ8HhiTb/LDxG'),
(11, 'ahmad', '$2y$10$NAmvnD0.w/DvRPA3IYXfmuDiVlXe3..e5O/bqB1Lr1IRWKEqosyt6'),
(12, 'fatur', '$2y$10$Nn9uemvUGOhYdtSJFEpiBO4T5eZPQUFnfGFgxF6u4hUKun6xaoNyq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acer`
--
ALTER TABLE `acer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lenovo`
--
ALTER TABLE `lenovo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `spek`
--
ALTER TABLE `spek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `acer`
--
ALTER TABLE `acer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `hp`
--
ALTER TABLE `hp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lenovo`
--
ALTER TABLE `lenovo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `spek`
--
ALTER TABLE `spek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
