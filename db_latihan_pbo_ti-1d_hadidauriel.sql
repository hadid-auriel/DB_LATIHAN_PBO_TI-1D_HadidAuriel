-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2026 at 07:28 AM
-- Server version: 8.4.3
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_pbo_ti-1d_hadidauriel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_tiket`
--

CREATE TABLE `tb_tiket` (
  `id_tiket` int NOT NULL,
  `nama_film` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_tayang` datetime NOT NULL,
  `jumlah_kursi` int NOT NULL,
  `harga_dasar_tiket` decimal(10,2) NOT NULL,
  `jenis_studio` enum('regular','IMAX','Velvet') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_audio` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_baris` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kacamata_3d_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `efek_gerak_fitur` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bantal_selimut_pack` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layanan_butler` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_tiket`
--

INSERT INTO `tb_tiket` (`id_tiket`, `nama_film`, `jadwal_tayang`, `jumlah_kursi`, `harga_dasar_tiket`, `jenis_studio`, `tipe_audio`, `lokasi_baris`, `kacamata_3d_id`, `efek_gerak_fitur`, `bantal_selimut_pack`, `layanan_butler`) VALUES
(1, 'The Batman Part II', '2026-07-01 13:00:00', 120, 45000.00, 'regular', 'Dolby Digital 5.1', NULL, NULL, NULL, NULL, NULL),
(2, 'The Batman Part II', '2026-07-01 16:00:00', 120, 45000.00, 'regular', 'Dolby Digital 5.1', NULL, NULL, NULL, NULL, NULL),
(3, 'Avengers: Secret Wars', '2026-07-02 14:15:00', 150, 50000.00, 'regular', 'DTS:X', NULL, NULL, NULL, NULL, NULL),
(4, 'Avengers: Secret Wars', '2026-07-02 19:30:00', 150, 55000.00, 'regular', 'DTS:X', NULL, NULL, NULL, NULL, NULL),
(5, 'Avatar 3: Fire and Ash', '2026-07-03 12:00:00', 100, 45000.00, 'regular', 'Dolby Digital 5.1', NULL, NULL, NULL, NULL, NULL),
(6, 'Avatar 3: Fire and Ash', '2026-07-03 15:30:00', 100, 45000.00, 'regular', 'Dolby Digital 5.1', NULL, NULL, NULL, NULL, NULL),
(7, 'Spiderman: Beyond the Spiderverse', '2026-07-04 10:00:00', 120, 40000.00, 'regular', 'Dolby Digital 7.1', NULL, NULL, NULL, NULL, NULL),
(8, 'Avatar 3: Fire and Ash', '2026-07-01 14:00:00', 300, 85000.00, 'IMAX', 'Dolby Atmos 12.1', 'Baris G-K', 'KM-3D-001', 'Standard Laser', NULL, NULL),
(9, 'Avatar 3: Fire and Ash', '2026-07-01 18:00:00', 300, 95000.00, 'IMAX', 'Dolby Atmos 12.1', 'Baris G-K', 'KM-3D-002', 'Standard Laser', NULL, NULL),
(10, 'Interstellar (Rerelease)', '2026-07-02 13:00:00', 250, 75000.00, 'IMAX', 'IMAX 6-Track', 'Baris E-J', NULL, 'Shaking Seats', NULL, NULL),
(11, 'Interstellar (Rerelease)', '2026-07-02 17:00:00', 250, 75000.00, 'IMAX', 'IMAX 6-Track', 'Baris E-J', NULL, 'Shaking Seats', NULL, NULL),
(12, 'Avengers: Secret Wars', '2026-07-03 13:00:00', 350, 90000.00, 'IMAX', 'Dolby Atmos 12.1', 'Baris H-L', 'KM-3D-099', 'Full 4DX Motion', NULL, NULL),
(13, 'Avengers: Secret Wars', '2026-07-03 17:30:00', 350, 100000.00, 'IMAX', 'Dolby Atmos 12.1', 'Baris H-L', 'KM-3D-100', 'Full 4DX Motion', NULL, NULL),
(14, 'Star Wars: New Jedi Order', '2026-07-04 20:00:00', 300, 95000.00, 'IMAX', 'IMAX 12-Track', 'Baris F-K', NULL, 'Standard Laser', NULL, NULL),
(15, 'The Batman Part II', '2026-07-01 15:00:00', 40, 150000.00, 'Velvet', NULL, NULL, NULL, NULL, 'Premium Quilt Pack A', 'Personal Butler Service'),
(16, 'The Batman Part II', '2026-07-01 20:00:00', 40, 175000.00, 'Velvet', NULL, NULL, NULL, NULL, 'Premium Quilt Pack A', 'Personal Butler Service'),
(17, 'Avatar 3: Fire and Ash', '2026-07-02 16:00:00', 30, 150000.00, 'Velvet', NULL, NULL, NULL, NULL, 'Luxury Silk Pack B', 'VIP Food & Beverage Delivery'),
(18, 'Avatar 3: Fire and Ash', '2026-07-02 21:00:00', 30, 175000.00, 'Velvet', NULL, NULL, NULL, NULL, 'Luxury Silk Pack B', 'VIP Food & Beverage Delivery'),
(19, 'Spiderman: Beyond the Spiderverse', '2026-07-03 14:00:00', 40, 130000.00, 'Velvet', NULL, NULL, NULL, NULL, 'Standard Velvet Pack', 'On-Call Butler'),
(20, 'Spiderman: Beyond the Spiderverse', '2026-07-03 19:00:00', 40, 150000.00, 'Velvet', NULL, NULL, NULL, NULL, 'Standard Velvet Pack', 'On-Call Butler');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
  MODIFY `id_tiket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
