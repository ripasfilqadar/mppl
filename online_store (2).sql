-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2015 at 12:56 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `ID_BARANG` varchar(10) NOT NULL,
  `NAMA_BARANG` varchar(50) NOT NULL,
  `HARGA` int(11) NOT NULL,
  `FOTO` varchar(20) NOT NULL,
  `DESKRIPSI` text NOT NULL,
  PRIMARY KEY (`ID_BARANG`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID_BARANG`, `NAMA_BARANG`, `HARGA`, `FOTO`, `DESKRIPSI`) VALUES
('BRG_1', 'coba', 20000, 'BRG_1', 'lalalal'),
('BRG_2', 'cobaqw', 20000, 'BRG_2', 'sdaf');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE IF NOT EXISTS `detail_transaksi` (
  `ID_BARANG` varchar(10) NOT NULL,
  `ID_TRANSAKSI` int(10) NOT NULL AUTO_INCREMENT,
  `QUANTITY` int(11) NOT NULL,
  PRIMARY KEY (`ID_BARANG`,`ID_TRANSAKSI`),
  KEY `ID_TRANSAKSI` (`ID_TRANSAKSI`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`ID_BARANG`, `ID_TRANSAKSI`, `QUANTITY`) VALUES
('BRG_1', 3, 1),
('BRG_1', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `ID_TRANSAKSI` int(10) NOT NULL AUTO_INCREMENT,
  `NAMA_PEMBELI` varchar(50) NOT NULL,
  `ALAMAT_PEMBELI` varchar(150) NOT NULL,
  `NO_HP` varchar(15) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `TANGGAL` date NOT NULL,
  PRIMARY KEY (`ID_TRANSAKSI`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`ID_TRANSAKSI`, `NAMA_PEMBELI`, `ALAMAT_PEMBELI`, `NO_HP`, `TOTAL`, `STATUS`, `TANGGAL`) VALUES
(3, 'ripas', 'allala', '082', 200000, 1, '2015-03-01'),
(4, 'Ripas ', 'lalal', '082', 200000, 0, '2015-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERNAME`, `PASSWORD`) VALUES
('admin', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
