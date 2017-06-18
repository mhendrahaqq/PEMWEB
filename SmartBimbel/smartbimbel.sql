-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2017 at 09:41 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartbimbel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `username` varchar(5) NOT NULL,
  `password` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `mapel` varchar(15) NOT NULL,
  `ruangan` varchar(5) NOT NULL,
  `pengajar` varchar(25) NOT NULL,
  `hari` varchar(25) NOT NULL,
  `waktu` varchar(25) NOT NULL,
  `kuota` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`mapel`, `ruangan`, `pengajar`, `hari`, `waktu`, `kuota`) VALUES
('Biologi', 'A-01', 'Dimas', 'Senin', '13.15 - 14.45 WIB', '9'),
('Ekonomi', 'B-02', 'Pindya', 'Kamis', '15.00 - 17.30 WIB', '19'),
('Fisika', 'A-02', 'Buki', 'Rabu', '15.00 - 16.30 WIB', '5'),
('Kimia', 'A-03', 'Boim', 'Minggu', '09.00 - 10.30 WIB', '24'),
('Matematika', 'A-03', 'Yosa', 'Selasa', '14.00 - 15.30 WIB', '13'),
('Sosiologi', 'Z-99', 'Esti', 'Jumat', '15.00 - 17.30', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `no` int(3) NOT NULL,
  `mapel` varchar(15) NOT NULL,
  `qty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `pesan`
--
DELIMITER $$
CREATE TRIGGER `kuota` AFTER INSERT ON `pesan` FOR EACH ROW UPDATE kelas SET kuota = kuota - NEW.qty
WHERE mapel = NEW.mapel
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`username`, `password`, `nama`) VALUES
('hendra', 'nailul', 'Muhammad Hendra'),
('muhsin', '54321', 'Muhsin Ahadi');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_pesan`
--

CREATE TABLE `siswa_pesan` (
  `id` int(3) NOT NULL,
  `username` varchar(15) NOT NULL,
  `mapel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_pesan`
--

INSERT INTO `siswa_pesan` (`id`, `username`, `mapel`) VALUES
(29, 'hendra', 'Biologi'),
(30, 'hendra', 'Kimia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`mapel`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `siswa_pesan`
--
ALTER TABLE `siswa_pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `siswa_pesan`
--
ALTER TABLE `siswa_pesan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
