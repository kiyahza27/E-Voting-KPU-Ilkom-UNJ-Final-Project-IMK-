-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 12:38 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_calon`
--

CREATE TABLE `tb_calon` (
  `id_calon` varchar(2) NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `foto_calon` varchar(200) NOT NULL,
  `level` enum('Prodi') NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_calon`
--

INSERT INTO `tb_calon` (`id_calon`, `nama_calon`, `foto_calon`, `level`, `keterangan`) VALUES
('1', 'Nama Kandidat Prodi', 'prodi.png', 'Prodi', 'Prodi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_calon2`
--

CREATE TABLE `tb_calon2` (
  `id_calon` varchar(2) NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `foto_calon` varchar(200) NOT NULL,
  `level` enum('Fakultas') NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_calon2`
--

INSERT INTO `tb_calon2` (`id_calon`, `nama_calon`, `foto_calon`, `level`, `keterangan`) VALUES
('1', 'Nama Kandidat Fakultas', 'fak.png', 'Fakultas', 'Fakultas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_calon3`
--

CREATE TABLE `tb_calon3` (
  `id_calon` varchar(2) NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `foto_calon` varchar(200) NOT NULL,
  `level` enum('Universitas') NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_calon3`
--

INSERT INTO `tb_calon3` (`id_calon`, `nama_calon`, `foto_calon`, `level`, `keterangan`) VALUES
('1', 'Nama Kandidat Universitas', 'uni.png', 'Universitas', 'Universitas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `angkatan` varchar(50) NOT NULL,
  `level` enum('Administrator','Pemilih') NOT NULL,
  `status` enum('1','0') NOT NULL,
  `status2` enum('1','0') NOT NULL,
  `status3` enum('1','0') NOT NULL,
  `jenis` enum('PAN','PST') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `angkatan`, `password`, `level`, `status`, `status2`, `status3`, `jenis`) VALUES
(1, 'Novitasari', 'admin1', '2018', '1', 'Administrator', '1', '1', '1', 'PAN'),
(2, 'Zakiyah Hamidah', 'admin2', '2018','2', 'Administrator', '1', '1', '1', 'PAN'),
(3, 'Lisa Arief', 'admin3', '3', '2018','Administrator', '1', '1', '1', 'PAN'),
(11, 'Lisa Arief', '1233', '2018','1006', 'Pemilih', '1', '1', '1', 'PST'),
(12, 'Novitasari', '1234', '2018','1127', 'Pemilih', '1', '1', '1', 'PST'),
(13, 'Zakiyah Hamidah', '1235', '2018','2456', 'Pemilih', '0', '0', '0', 'PST');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vote`
--

CREATE TABLE `tb_vote` (
  `id_vote` int(11) NOT NULL,
  `id_calon` varchar(2) NOT NULL,
  `id_pemilih` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_vote`
--

INSERT INTO `tb_vote` (`id_vote`, `id_calon`, `id_pemilih`, `date`) VALUES
(25, '1', 1235, '2020-12-14 18:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vote2`
--

CREATE TABLE `tb_vote2` (
  `id_vote` int(11) NOT NULL,
  `id_calon` varchar(2) NOT NULL,
  `id_pemilih` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_vote2`
--

INSERT INTO `tb_vote2` (`id_vote`, `id_calon`, `id_pemilih`, `date`) VALUES
(25, '1', 1235, '2020-12-14 18:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vote3`
--

CREATE TABLE `tb_vote3` (
  `id_vote` int(11) NOT NULL,
  `id_calon` varchar(2) NOT NULL,
  `id_pemilih` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_vote3`
--

INSERT INTO `tb_vote3` (`id_vote`, `id_calon`, `id_pemilih`, `date`) VALUES
(25, '1', 1235, '2020-12-14 18:34:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_calon`
--
ALTER TABLE `tb_calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `tb_calon2`
--
ALTER TABLE `tb_calon2`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `tb_calon3`
--
ALTER TABLE `tb_calon3`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_vote`
--
ALTER TABLE `tb_vote`
  ADD PRIMARY KEY (`id_vote`),
  ADD KEY `id_calon` (`id_calon`);

--
-- Indexes for table `tb_vote2`
--
ALTER TABLE `tb_vote2`
  ADD PRIMARY KEY (`id_vote`),
  ADD KEY `id_calon` (`id_calon`);

--
-- Indexes for table `tb_vote3`
--
ALTER TABLE `tb_vote3`
  ADD PRIMARY KEY (`id_vote`),
  ADD KEY `id_calon` (`id_calon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_vote`
--
ALTER TABLE `tb_vote`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_vote2`
--
ALTER TABLE `tb_vote2`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_vote3`
--
ALTER TABLE `tb_vote3`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;