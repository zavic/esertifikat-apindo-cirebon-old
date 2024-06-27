-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 08:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_esertifikat_apindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perusahaan`
--

CREATE TABLE `tbl_perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `jenis_anggota` varchar(30) NOT NULL,
  `no_sertifikat` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(30) NOT NULL,
  `jenis_usaha` varchar(50) NOT NULL,
  `no_kbli` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_berakhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_perusahaan`
--

INSERT INTO `tbl_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `jenis_anggota`, `no_sertifikat`, `email`, `no_telp`, `alamat`, `kota`, `jenis_usaha`, `no_kbli`, `tgl_masuk`, `tgl_berakhir`) VALUES
(1, 'PT. BIMA KARYA SEMESTA', 'Anggota Biasa', '007.04.010.120.133.05.103', 'bima@gmail.com', '085473267834', 'Jl. Tangkuban Perahu No. 12, Larangan, Harjamukti', 'Cirebon', 'Jasa Konstruksi', 32456, '2022-03-18', '2023-03-17'),
(2, 'PT. JAPFA COMFEED INDONESIA', 'Anggota Biasa', '007.04.010.120.133.05.102', 'japfacomfeedindo@gmail.com', '+628122063655', 'Jl. Gatot Subroto, Larangan, Harjamukti', 'Cirebon', 'Industri Pakan Ternak', 43452, '2022-04-05', '2022-04-19'),
(4, 'PT. ARTERIA DAYA MULIA', 'Anggota Biasa', '007.04.010.120.133.05.104', 'arteriamulia@gmail.com', '082356441201', 'Jl. Dukuh Duwur No.46 Pegambiran', 'Cirebon', 'Industri Jala Ikan', 17321, '2022-04-07', '2022-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `username`, `password`, `isAdmin`) VALUES
(1, 'admin', 'admin', 1),
(2, 'ketua', 'ketua', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
