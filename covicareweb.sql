-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 03:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covicareweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kesimpulan`
--

CREATE TABLE `tb_kesimpulan` (
  `kode_kesimpulan` int(11) NOT NULL,
  `solusi` varchar(50) NOT NULL,
  `fakta` varchar(100) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kesimpulan`
--

INSERT INTO `tb_kesimpulan` (`kode_kesimpulan`, `solusi`, `fakta`, `oleh`, `status`) VALUES
(1, 'mild1', 'Anda sedang mengalami demam', 'pakar', 'setuju'),
(2, 'mild2', 'Anda sedang mengalami demam', 'pakar', 'setuju'),
(3, 'mild2', 'Anda sedang mengalami sakit tenggorokan', 'pakar', 'setuju'),
(4, 'mild2', 'Anda sedang mengalami nyeri', 'pakar', 'setuju'),
(5, 'mild2', 'Anda sedang mengalami hidung meler', 'pakar', 'setuju'),
(6, 'mild3', 'Anda sedang mengalami demam', 'pakar', 'setuju'),
(7, 'mild3', 'Anda sedang mengalami sakit tenggorokan', 'pakar', 'setuju'),
(8, 'mild4', 'Anda sedang mengalami mudah lelah', 'pakar', 'setuju'),
(9, 'mild4', 'Anda sedang mengalami sesak nafas', 'pakar', 'setuju'),
(10, 'mild4', 'Anda sedang mengalami sakit tenggorokan', 'pakar', 'setuju'),
(11, 'mild5', 'Anda sedang mengalami mudah lelah', 'pakar', 'setuju'),
(12, 'mild5', 'Anda sedang mengalami sesak nafas', 'pakar', 'setuju'),
(13, 'mild5', 'Anda sedang mengalami nyeri', 'pakar', 'setuju'),
(14, 'mild5', 'Anda sedang mengalami hidung tersumbat', 'pakar', 'setuju'),
(15, 'mild6', 'Anda sedang mengalami batuk kering', 'pakar', 'setuju'),
(16, 'mild6', 'Anda sedang mengalami nyeri', 'pakar', 'setuju'),
(17, 'mild6', 'Anda sedang mengalami diare', 'pakar', 'setuju'),
(18, 'mild6', 'Anda sedang mengalami kesulitan bernafas', 'pakar', 'setuju'),
(19, 'md1', 'Anda sedang mengalami demam', 'pakar', 'setuju'),
(20, 'md1', 'Anda sedang mengalami sakit tenggorokan\r\n', 'pakar', 'setuju'),
(21, 'md1', 'Anda sedang mengalami nyeri\r\n', 'pakar', 'setuju'),
(22, 'none1', 'Anda tidak mengalami gejala apapun', 'pakar', 'setuju'),
(23, 'none2', 'Anda sedang mengalami kelelahan', 'pakar', 'setuju'),
(24, 'md2', 'Anda sedang mengalami kelelahan', 'pakar', 'setuju'),
(25, 'md2', 'Anda sedang mengalami kesulitan bernafas', 'pakar', 'setuju'),
(26, 'md3', 'Anda sedang mengalami Batuk Kering', 'pakar', 'setuju'),
(27, 'md4', 'Anda sedang mengalami Kelelahan', 'pakar', 'setuju'),
(28, 'md4', 'Anda sedang mengalami Kesulitan Bernafas', 'pakar', 'setuju'),
(29, 'md4', 'Anda sedang mengalami Nyeri\r\n', 'pakar', 'setuju'),
(30, 'md5', 'Anda sedang mengalami Batuk Kering', 'pakar', 'setuju'),
(31, 'md5', 'Anda sedang mengalami Nyeri\r\n', 'pakar', 'setuju'),
(32, 'md6', 'Anda sedang mengalami Batuk Kering', 'pakar', 'setuju'),
(33, 'md6', 'Anda sedang mengalami Nyeri\r\n', 'pakar', 'setuju'),
(34, 'md6', 'Anda sedang mengalami Diare', 'pakar', 'setuju'),
(16936, 'Disarankan', '', 'pakar', 'setuju');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `kode_pertanyaan` varchar(50) NOT NULL,
  `isi_pertanyaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`kode_pertanyaan`, `isi_pertanyaan`) VALUES
('m1', 'Apakah anda mengalami demam ?'),
('m10', 'Apakah anda mengalami hidung meler ?'),
('m2-a', 'Apakah anda mengalami radang tenggorokan ?'),
('m2-b', 'Apakah anda mengalami radang tenggorokan ?'),
('m2-c', 'Apakah anda mengalami radang tenggorokan ?'),
('m3-a', 'Apakah anda mengalami nyeri ? '),
('m3-b', 'Apakah anda mengalami nyeri ?'),
('m3-c', 'Apakah anda mengalami nyeri ?'),
('m4-a', 'Apakah anda mengalami kesulitan bernafas ?'),
('m4-b', 'Apakah anda mengalami kesulitan bernafas ?'),
('m5', 'Apakah anda tidak mengalami gejala apapun ?'),
('m6', 'Apakah anda merasa mudah lelah ?'),
('m7', 'Apakah anda mengalami batuk kering ?'),
('m8', 'Apakah anda mengalami hidung tersumbat ?'),
('m9', 'Apakah anda mengalami diare ?');

-- --------------------------------------------------------

--
-- Table structure for table `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `kode_solusi` varchar(50) NOT NULL,
  `isi_solusi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_solusi`
--

INSERT INTO `tb_solusi` (`kode_solusi`, `isi_solusi`) VALUES
('md1', 'Disarankan untuk melakukan cek lanjutan di rumah sakit terdekat'),
('md2', 'Disarankan untuk melakukan cek lanjutan di rumah sakit terdekat'),
('md3', 'Disarankan untuk melakukan cek lanjutan di rumah sakit terdekat'),
('md4', 'Disarankan untuk melakukan cek lanjutan di rumah sakit terdekat'),
('md5', 'Disarankan untuk melakukan cek lanjutan di rumah sakit terdekat'),
('md6', 'Disarankan untuk melakukan cek lanjutan di rumah sakit terdekat'),
('mild1', 'Disarankan untuk mengurangi aktivitas dan menjaga pola hidup sehat'),
('mild2', 'Disarankan untuk mengurangi aktivitas dan menjaga pola hidup sehat'),
('mild3', 'Disarankan untuk mengurangi aktivitas dan menjaga pola hidup sehat'),
('mild4', 'Disarankan untuk mengurangi aktivitas dan menjaga pola hidup sehat'),
('mild5', 'Disarankan untuk mengurangi aktivitas dan menjaga pola hidup sehat'),
('mild6', 'Disarankan untuk mengurangi aktivitas dan menjaga pola hidup sehat'),
('none1', 'Anda tidak terindikasi terjangkit Covid-19'),
('none2', 'Anda tidak terindikasi terjangkit Covid-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kesimpulan`
--
ALTER TABLE `tb_kesimpulan`
  ADD PRIMARY KEY (`kode_kesimpulan`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`kode_pertanyaan`);

--
-- Indexes for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`kode_solusi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kesimpulan`
--
ALTER TABLE `tb_kesimpulan`
  MODIFY `kode_kesimpulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16937;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
