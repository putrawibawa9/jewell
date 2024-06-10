-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2024 at 04:30 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jewell`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `kode_dokter` int NOT NULL,
  `nama_dokter` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `spesialis_dokter` varchar(100) NOT NULL,
  `jk_dokter` varchar(100) NOT NULL,
  `alamat_praktek_dokter` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_telp_dokter` varchar(100) NOT NULL,
  `tgl_lahir_dokter` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kode_dokter`, `nama_dokter`, `spesialis_dokter`, `jk_dokter`, `alamat_praktek_dokter`, `no_telp_dokter`, `tgl_lahir_dokter`) VALUES
(1, 'Dr. Alice Tan', 'Cardiologist', 'Female', '123 Heartbeat Lane, Jakarta', '081234567890', '1980-05-15'),
(2, 'Dr. Bob Williams', 'Neurologist', 'Male', '456 Brainwave St, Surabaya', '081234567891', '1975-09-10'),
(3, 'Dr. Clara Smith', 'Pediatrician', 'Female', '789 Childcare Ave, Bandung', '081234567892', '1988-03-22'),
(4, 'Dr. David Johnson', 'Dermatologist', 'Male', '321 Skinhealth Rd, Medan', '081234567893', '1983-11-05'),
(5, 'Dr. Emily Davis anjay', 'Orthopedic', 'Female', '654 Bonecare Blvd, Bali', '081234567894', '1979-07-18'),
(6, 'Dr. Frank Miller', 'General Surgeon', 'Male', '987 Surgery Ln, Yogyakarta', '081234567895', '1969-02-25'),
(7, 'Dr. Grace Lee', 'Ophthalmologist', 'Female', '159 Vision St, Semarang', '081234567896', '1990-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int NOT NULL,
  `id_user` int NOT NULL,
  `id_barang` int NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_beli` int NOT NULL,
  `totalharga` bigint NOT NULL,
  `status` varchar(20) NOT NULL,
  `metode_pembayaran` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_user`, `id_barang`, `nama_barang`, `jumlah_beli`, `totalharga`, `status`, `metode_pembayaran`) VALUES
(2, 1, 1, 'White Rock Necklace', 2, 1000000, 'LUNAS', 'cod'),
(3, 2, 1, 'White Rock Necklace', 2, 0, 'Belum Lunas', 'paylater');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`, `no_hp`) VALUES
(1, 'admin', 'admin', 'admin', 8562561565);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `stok` int NOT NULL,
  `harga` double NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `deskripsi`, `stok`, `harga`, `gambar`, `tanggal_input`) VALUES
(1, 'White Rock Necklace', 'test', 100, 2000000, 'jewel1.jpg', '2024-01-19'),
(3, 'White Snow Bracelet', 'test', 10, 100000, 'jewel2.jpg', '2024-01-19'),
(4, 'Gold Ring', 'test', 100, 500000, 'jewel3.jpg', '2024-01-19'),
(5, 'Gold Bracelet', 'test', 100, 200000, 'jewel4.jpg', '2024-01-19'),
(6, 'Double Gld Ring', 'test', 200, 400000, 'jewel5.jpg', '2024-01-19'),
(7, '6 Sins bracelet', 'test', 200, 1000000, 'jewel6.jpg', '2024-01-19'),
(8, 'DIOR Gold Bracelet', 'test', 100, 1000000, 'jewel7.jpg', '2024-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis` varchar(2) NOT NULL,
  `no_hp` bigint NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `alamat`, `jenis`, `no_hp`, `tanggal_lahir`) VALUES
(1, 'Yohanes Surya Wijaya', 'yohansw', 'yohansw', 'Denpasar', 'L', 85858781375, '0000-00-00'),
(2, 'test', 'test', 'test', 'test', 'L', 867167613, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kode_dokter`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`,`id_user`,`id_barang`),
  ADD KEY `fkiduser` (`id_user`),
  ADD KEY `fkidikan` (`id_barang`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `kode_dokter` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
