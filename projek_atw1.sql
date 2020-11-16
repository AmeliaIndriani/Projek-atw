-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2020 pada 11.19
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_atw1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Baju kaos', '2020-11-16 00:17:01', '2020-11-16 00:17:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `berat`, `stok`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Tshirt Kaos Baju Distro Hustle Rise and Grind - Hitam, S', 35000, 165, 20, 'Deskripsi BAJU KAOS PRIA COTTON COMBED 30,s FASHION CASUAL BAJU DISTRO htm Bahan : Cotton Combeds 30\'s, bahan adem, Nyaman Dipakai.', '2020-11-14 06:47:50', '2020-11-14 08:24:42'),
(6, 'Celana Pendek Pria Surfing Distro Premium Renang Pantai Santai Kolor RIP', 35000, 150, 10, 'Deskripsi PROMO CELANA CHINO PENDEK RIP PINGGANG KARET PRIA - RIP Cream, 22\r\nBUDAYAKAN BACA DESKRIPSI PRODUK SEBELUM BERTANYA YA GUYS.\r\n\r\nBEDA UKURAN BEDA HARGA\r\n*Produk dikirim sesuai pesanan yg diklik\r\n*Tidak melayani tukar size,warna atau alamat di chat\r\n*Periksa pesanan anda sebelum melakukan pembayaran\r\n\r\n\r\nDeskripsi Produk\r\n\r\nReady warna\r\nKrem 22-38\r\nBlack 22-38\r\nMocca 22-38\r\nGrey /Abu 22-38\r\n\r\nBahan : katun twill', '2020-11-14 18:41:35', '2020-11-14 18:41:35'),
(8, 'KEMEJA GARIS SALUR STRIPE KEMEJA PRIA STRIP BAJU STRIPE - Maron, M', 100000, 230, 15, 'Deskripsi KEMEJA GARIS SALUR STRIPE KEMEJA PRIA STRIP BAJU STRIPE - Maron, M\r\nSUPPLIER UTAMA BAJU PRIA 1 St Hand\r\nReal Picture\r\n\r\nHARAP BACA SEBELUM ORDER :\r\nSemua barang ready stock ( No PO )\r\n-Estimasi Ukuran\r\nM : 70 x 50 cm\r\nL : 72 x 52 cm\r\nXL: 74 x 54 cm\r\n\r\n- Bahan: Viscose', '2020-11-14 19:03:06', '2020-11-14 19:03:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'amelia indriani', 'amel', 'ameliaindriani25@gmail.com', 'da0e22de18e3fbe1e96bdc882b912ea4', NULL, '2020-11-16 02:30:10', '2020-11-16 09:44:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
