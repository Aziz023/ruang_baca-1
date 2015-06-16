-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2015 at 03:11 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbbuku`
--

CREATE TABLE IF NOT EXISTS `tbbuku` (
  `IDbuku` int(20) NOT NULL,
  `Judul` varchar(20) NOT NULL,
  `Penulis` varchar(20) NOT NULL,
  `Pengarang` varchar(20) NOT NULL,
  `Index` int(20) NOT NULL,
  `Tahun` int(20) NOT NULL,
  `Jumlah` int(20) NOT NULL,
  `Rak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbbuku`
--

INSERT INTO `tbbuku` (`IDbuku`, `Judul`, `Penulis`, `Pengarang`, `Index`, `Tahun`, `Jumlah`, `Rak`) VALUES
(1123001, 'LASKAR PELANGI', 'ANDREA HIRATA', 'ANDREA HIRATA', 1, 2010, 5, 'MELATI'),
(1123004, 'NEGERI 5 MENARA', 'AHMAD FUADI', 'AHMAD FUADI', 2, 2012, 5, 'MAWAR');

-- --------------------------------------------------------

--
-- Table structure for table `tbpegawai`
--

CREATE TABLE IF NOT EXISTS `tbpegawai` (
  `ID` int(20) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `address` varchar(20) NOT NULL,
  `NoTelepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpegawai`
--

INSERT INTO `tbpegawai` (`ID`, `Nama`, `password`, `address`, `NoTelepon`) VALUES
(135623001, 'AHMAD SHOLEH', 'admin', 'JL. BANJAR NEGARA NO', '087766888'),
(135623002, 'DENDY WAHYUDI', 'admin', 'JL.SEMOLOWARU NO.8', '0876577755');

-- --------------------------------------------------------

--
-- Table structure for table `tbpelanggan`
--

CREATE TABLE IF NOT EXISTS `tbpelanggan` (
  `ID` int(20) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `Address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpelanggan`
--

INSERT INTO `tbpelanggan` (`ID`, `Nama`, `password`, `Address`) VALUES
(1, 'NUNIK MIRANKA', '105623001', 'JL. MANYAR NO.8'),
(2, 'DUDO RAHARDIAN', '105623002', 'JL. SUKODADI NO.5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
