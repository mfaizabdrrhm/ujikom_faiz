-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 07:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailpenjualan`
--

CREATE TABLE `detailpenjualan` (
  `DetailID` int(11) NOT NULL,
  `PenjualanID` int(11) NOT NULL,
  `ProdukID` int(11) NOT NULL,
  `JumlahProduk` int(11) NOT NULL,
  `Subtotal` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detailpenjualan`
--

INSERT INTO `detailpenjualan` (`DetailID`, `PenjualanID`, `ProdukID`, `JumlahProduk`, `Subtotal`, `created_at`) VALUES
(16, 1, 6, 2, 6000, '2024-01-24 01:58:31'),
(17, 1, 6, 1, 3000, '2024-01-24 02:35:41'),
(18, 1, 6, 2, 6000, '2024-01-24 02:39:04'),
(19, 1, 7, 12, 72000, '2024-01-24 03:08:20'),
(20, 1, 7, 1, 6000, '2024-01-24 03:10:40'),
(21, 1, 6, 1, 3000, '2024-01-24 03:11:26'),
(22, 2, 6, 11, 33000, '2024-01-24 03:18:17'),
(23, 3, 6, 3, 9000, '2024-01-24 03:20:03'),
(24, 3, 7, 1, 6000, '2024-01-24 03:20:16'),
(25, 4, 6, 2, 6000, '2024-01-24 03:20:29'),
(26, 4, 7, 3, 18000, '2024-01-24 03:20:39'),
(27, 5, 7, 11, 66000, '2024-01-24 03:25:20'),
(28, 6, 7, 1, 6000, '2024-01-24 03:33:35'),
(29, 6, 7, 15, 90000, '2024-01-24 03:37:09'),
(30, 7, 6, 1, 3000, '2024-01-30 00:51:56'),
(31, 7, 7, 1, 6000, '2024-01-30 00:55:14'),
(32, 8, 7, 2, 12000, '2024-01-30 01:01:40'),
(33, 9, 7, 8, 48000, '2024-02-06 02:09:25'),
(34, 10, 7, 2, 12000, '2024-02-17 01:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `telp` varchar(16) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `username`, `password`, `telp`, `level`) VALUES
(1, 'aden', 'elaina', '$2y$12$lO0nG1CgqQVmDpqtWyptFuIph7sxiT2HY84k5m5OxO656tBFQ5ZN2', '0888', 'admin'),
(3, 'andre', 'likin', '$2y$12$38SisiaMGzpkNcLMRD2DLub0gmg1klU0SWfhPfogdSnR7IvD7oYyy', '08', 'petugas'),
(4, 'izz', 'endi', '$2y$12$U3MuEIab71LMY/0YH.Hs0OcLmEe/tE55b14HdmYYlXLqLAY7VX.oW', '08999999', 'admin'),
(5, 'izz', 'endi', '$2y$12$Tvm4w1WfLKbMcL7ZLmdg.uzkupi94uTDib.6nxxRpX0KHVz.W7yP.', '08999999', 'admin'),
(6, 'izz', 'endi', '$2y$12$thPX.ZbXD4.Mt8A96QNLPeEZ0us9NrBVoEu6fRyoeQSB1NdDobHUu', '08999999', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `PelangganID` int(11) NOT NULL,
  `NamaPelanggan` varchar(225) NOT NULL,
  `Alamat` text NOT NULL,
  `NomorTelepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`PelangganID`, `NamaPelanggan`, `Alamat`, `NomorTelepon`) VALUES
(1, 'didik', 'GPA', '0885444'),
(4, 'Maol', 'kotbar', '08977'),
(6, 'faiz', 'GPA', '0897444');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `PenjualanID` int(11) NOT NULL,
  `TanggalPenjualan` date NOT NULL,
  `TotalHarga` decimal(10,3) NOT NULL,
  `PelangganID` int(11) NOT NULL,
  `status` enum('pending','selesai') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`PenjualanID`, `TanggalPenjualan`, `TotalHarga`, `PelangganID`, `status`, `created_at`) VALUES
(1, '2024-01-23', '96000.000', 1, 'selesai', '2024-01-23 02:11:04'),
(2, '2024-01-24', '33000.000', 1, 'selesai', '2024-01-24 03:18:17'),
(3, '2024-01-24', '15000.000', 1, 'selesai', '2024-01-24 03:19:09'),
(4, '2024-01-24', '24000.000', 4, 'selesai', '2024-01-24 03:20:29'),
(5, '2024-01-24', '66000.000', 1, 'selesai', '2024-01-24 03:25:20'),
(6, '2024-01-24', '96000.000', 1, 'selesai', '2024-01-24 03:33:35'),
(7, '2024-01-30', '9000.000', 1, 'selesai', '2024-01-30 00:48:02'),
(8, '2024-01-30', '12000.000', 1, 'selesai', '2024-01-30 01:01:23'),
(9, '2024-02-06', '48000.000', 1, 'selesai', '2024-02-06 02:09:25'),
(10, '2024-02-17', '0.000', 4, 'pending', '2024-02-17 01:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `ProdukID` int(11) NOT NULL,
  `NamaProduk` varchar(225) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ProdukID`, `NamaProduk`, `Harga`, `Stok`) VALUES
(6, 'Granita', 3000, 200),
(7, 'Marimas', 6000, 190),
(8, 'Maribu', 5000, 100),
(9, 'Teh piring', 2500, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD PRIMARY KEY (`DetailID`),
  ADD KEY `PenjualanID` (`PenjualanID`),
  ADD KEY `ProdukID` (`ProdukID`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`PelangganID`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`PenjualanID`),
  ADD KEY `PelangganID` (`PelangganID`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ProdukID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  MODIFY `DetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `PelangganID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `PenjualanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ProdukID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD CONSTRAINT `detailpenjualan_ibfk_1` FOREIGN KEY (`PenjualanID`) REFERENCES `penjualan` (`PenjualanID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detailpenjualan_ibfk_2` FOREIGN KEY (`ProdukID`) REFERENCES `produk` (`ProdukID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`PelangganID`) REFERENCES `pelanggan` (`PelangganID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
