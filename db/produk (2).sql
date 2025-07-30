-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2025 at 11:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chicmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `gambar`, `deskripsi`) VALUES
(1, 'Blouse Casual', 120000, 'blouse-casual.jpeg', 'Blouse nyaman untuk sehari-hari.'),
(2, 'Celana Kulot', 150000, 'celana-kulot.jpeg', 'Celana longgar cocok untuk semua aktivitas.'),
(3, 'Hijab Polos', 45000, 'hijab-polos.jpeg', 'Hijab polos voal ukuran 110x110.'),
(4, 'Men Flap Pocket Shirt', 120000, 'kemeja-pria.jpeg', 'Kemeja pria dengan gaya santai.'),
(5, 'RENELLE Baju Pria', 51000, 'kaos-renelle.jpeg', 'Kaos pria oversize bahan combed.'),
(6, 'PANARYBODY Sepatu Sneakers', 195000, 'sneakers-pria.jpeg', 'Sneakers pria gaya kekinian.'),
(7, 'BOSTANTEN Tas Selempang Wanita', 160000, 'tas-wanita.jpeg', 'Tas selempang elegan untuk wanita.'),
(8, 'Women\'s Cutbray Highwaist Jeans', 70000, 'jeans-wanita.jpeg', 'Jeans wanita model cutbray highwaist.'),
(9, 'KEMEJA Zenke', 45000, 'kemeja-zenke.jpeg', 'Kemeja wanita jumbo kasual.'),
(10, 'Jam Tangan Wanita Rantai Kasual', 32000, 'jam-wanita.jpeg', 'Jam tangan kasual dengan rantai elegan.'),
(11, 'Kaos Polos Cream', 35000, 'baju-cream.jpg', 'Kaos regular fit full coton dengan gramasi 20`s '),
(12, 'Kaos Polos Mocca Oversize', 35000, 'baju-mocca.jpg', 'Kaos menggunakan cotton Airism yang adem digunakan untuk aktivitas apapun.'),
(13, 'Cardigan Hitam Wanita', 50000, 'cardigan.jpg', 'Cardigan dibuat dari bahan knit yang cocok digunakan pada musim dingin.'),
(14, 'Hoodie Pria', 75000, 'hoodie-pria.jpg', 'Hoodie abu abu overisize'),
(15, 'Stripped Sweater', 50000, 'stripped-sweater.jpg', 'Stripped sweater berbahan cotton wool cocok digunakan di musim dingin'),
(16, 'Half Zipper Sweatshirt', 60000, 'halfzip-sweatshirt', 'Halfzipper sweatshirt dengan bahan cotton fleece ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
