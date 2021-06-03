-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 09:52 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `kantordesa`
--

CREATE TABLE `kantordesa` (
  `NIP` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kantordesa`
--

INSERT INTO `kantordesa` (`NIP`, `Pass`) VALUES
('123', 'pass'),
('12345678910', '12345678910');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `NamaLengkap` varchar(50) NOT NULL,
  `NIK` varchar(50) NOT NULL,
  `Usia` int(3) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NoHP` varchar(15) NOT NULL,
  `NamaKegiatan` varchar(50) NOT NULL,
  `DalamRangka` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL,
  `Waktu` time(4) NOT NULL,
  `Tempat` varchar(50) NOT NULL,
  `PenanggungJawab` varchar(50) NOT NULL,
  `Keterangan` varchar(70) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`NamaLengkap`, `NIK`, `Usia`, `Alamat`, `Email`, `NoHP`, `NamaKegiatan`, `DalamRangka`, `Tanggal`, `Waktu`, `Tempat`, `PenanggungJawab`, `Keterangan`, `Status`) VALUES
('lutfi', '1234', 20, 'Darussalam', 'lutfi@gmail.com', '08243456', 'Pengajian', 'Mengaji', '2021-07-01', '21:04:00.0000', 'Balai Desa', 'Lutfi', 'Gerakan mengaji bersama warga desa', '3'),
('Intan Malahayati', '1234567890', 20, 'Darussalam', 'intan@gmail.com', '08123456789', 'Musyawarah Pemilihan Panitia Pemilu', 'Memilih anggota panitia pemilu', '2021-06-16', '12:21:00.0000', 'Balai Desa', 'Intan Malahayati', 'Kegiatan diadakan untuk memilih anggota panitia pemilu', '3');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `NIK` varchar(50) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`NIK`, `namalengkap`, `nohp`, `pass`) VALUES
('1234', '', '', 'password'),
('1234567890', 'Intan Malahayati', '08123456789', '1234'),
('b', 'b', 'b', 'b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kantordesa`
--
ALTER TABLE `kantordesa`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
