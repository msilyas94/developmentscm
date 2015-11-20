-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2015 at 08:57 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newmyta`
--

-- --------------------------------------------------------

--
-- Table structure for table `smd01detail`
--

CREATE TABLE IF NOT EXISTS `smd01detail` (
  `detail_id` varchar(25) NOT NULL,
  `jenis_inf` varchar(50) NOT NULL,
  `field_name` varchar(50) NOT NULL,
  `varchar_1` varchar(255) NOT NULL,
  `varchar_2` varchar(255) NOT NULL,
  `varchar_3` varchar(255) NOT NULL,
  `date_1` date NOT NULL,
  `date_2` date NOT NULL,
  `decimal_1` decimal(10,0) NOT NULL,
  `decimal_2` decimal(10,0) NOT NULL,
  `value_1` int(11) NOT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smd01detail`
--

INSERT INTO `smd01detail` (`detail_id`, `jenis_inf`, `field_name`, `varchar_1`, `varchar_2`, `varchar_3`, `date_1`, `date_2`, `decimal_1`, `decimal_2`, `value_1`) VALUES
('DET_VTACVBU001', 'Contact Personal', 'Nama', 'Test Nama', '', '', '0000-00-00', '0000-00-00', '0', '0', 0),
('DET_VTACVBU002', 'Contact Personal', 'Jabatan', 'Manager Dept. of marketing', '', '', '0000-00-00', '0000-00-00', '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `smd02performance`
--

CREATE TABLE IF NOT EXISTS `smd02performance` (
  `performance_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `smm01classification`
--

CREATE TABLE IF NOT EXISTS `smm01classification` (
  `class_id` varchar(50) NOT NULL,
  `parent_name` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `id_kbli` varchar(50) NOT NULL,
  `is_showing` tinyint(1) NOT NULL,
  `lvl` int(11) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `smm02supplier`
--

CREATE TABLE IF NOT EXISTS `smm02supplier` (
  `supplier_id` varchar(12) NOT NULL,
  `fk_username` varchar(16) NOT NULL,
  `supname` varchar(100) DEFAULT NULL,
  `badanusaha` varchar(12) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `zip` varchar(8) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `website` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `afiliation` varchar(45) DEFAULT NULL,
  `staffnumber` varchar(45) DEFAULT NULL,
  `ismitratlk` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`supplier_id`),
  KEY `fk_username` (`fk_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smm02supplier`
--

INSERT INTO `smm02supplier` (`supplier_id`, `fk_username`, `supname`, `badanusaha`, `address`, `city`, `province`, `zip`, `country`, `phone`, `website`, `email`, `afiliation`, `staffnumber`, `ismitratlk`) VALUES
('VTACVBU001', 'VTACVBU', 'BERTINDO UTAMA', 'CV', 'Jl. Wulan No.8 Kiara Condong Bandung Jawa Barat 40', 'Bandung', 'Jawa Barat', '40274', 'Indonesia', '022-7311571', NULL, 'bertindoutama@yahoo.com', NULL, '15', 'YA');

-- --------------------------------------------------------

--
-- Table structure for table `smr01supdetail`
--

CREATE TABLE IF NOT EXISTS `smr01supdetail` (
  `fk_supplierid` varchar(12) NOT NULL,
  `fk_detail_id` varchar(25) NOT NULL,
  KEY `fk_supplierid` (`fk_supplierid`),
  KEY `fk_detail_id` (`fk_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smr01supdetail`
--

INSERT INTO `smr01supdetail` (`fk_supplierid`, `fk_detail_id`) VALUES
('VTACVBU001', 'DET_VTACVBU001'),
('VTACVBU001', 'DET_VTACVBU002');

-- --------------------------------------------------------

--
-- Table structure for table `smr02supclass`
--

CREATE TABLE IF NOT EXISTS `smr02supclass` (
  `fk_supplier_id` varchar(12) NOT NULL,
  `fk_class_id` varchar(50) NOT NULL,
  KEY `fk_supplier_id` (`fk_supplier_id`),
  KEY `fk_class_id` (`fk_class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `umd02logapproval`
--

CREATE TABLE IF NOT EXISTS `umd02logapproval` (
  `fk_approval_id` varchar(25) NOT NULL,
  `approved_by` varchar(16) NOT NULL,
  `approve_time` datetime NOT NULL,
  `last_status` varchar(10) NOT NULL,
  `approved_level` int(11) NOT NULL,
  KEY `fk_approval_id` (`fk_approval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `umm01user`
--

CREATE TABLE IF NOT EXISTS `umm01user` (
  `user_id` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `umm01user`
--

INSERT INTO `umm01user` (`user_id`, `username`, `password`, `email`, `type`) VALUES
('user001', 'ilyas', '3ea4a8e4d7a95ace878f907ab8b72d1b', 'ilyas.jtk11@gmail.com', 2),
('user1', 'VTAPTTA', 'ed32278d35a95ec52da3c182198cf46c', '9106d022fced32c50a52b193d4648192', 1),
('user2', 'VTACVBU', 'ed32278d35a95ec52da3c182198cf46c', '9106d022fced32c50a52b193d4648192', 1);

-- --------------------------------------------------------

--
-- Table structure for table `umm02role`
--

CREATE TABLE IF NOT EXISTS `umm02role` (
  `role_id` varchar(16) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `access` varchar(7) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `umm03approval`
--

CREATE TABLE IF NOT EXISTS `umm03approval` (
  `approval_id` varchar(25) NOT NULL,
  `approval_name` varchar(255) NOT NULL,
  `last_status` varchar(20) NOT NULL,
  `last_user` varchar(16) NOT NULL,
  PRIMARY KEY (`approval_id`),
  KEY `approval_name` (`approval_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `umm04menu`
--

CREATE TABLE IF NOT EXISTS `umm04menu` (
  `menu_id` varchar(8) NOT NULL,
  `nama_menu` int(50) NOT NULL,
  `parent` int(50) NOT NULL,
  `deskripsi` int(255) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `umr01roleuser`
--

CREATE TABLE IF NOT EXISTS `umr01roleuser` (
  `fk_user_id` varchar(16) NOT NULL,
  `fk_role_id` varchar(16) NOT NULL,
  KEY `fk_user_id` (`fk_user_id`),
  KEY `fk_role_id` (`fk_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `umr02usermenu`
--

CREATE TABLE IF NOT EXISTS `umr02usermenu` (
  `user_id` varchar(16) NOT NULL,
  `menu_id` varchar(8) NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `menu_id` (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `smm02supplier`
--
ALTER TABLE `smm02supplier`
  ADD CONSTRAINT `smm02supplier_ibfk_1` FOREIGN KEY (`fk_username`) REFERENCES `umm01user` (`username`);

--
-- Constraints for table `smr01supdetail`
--
ALTER TABLE `smr01supdetail`
  ADD CONSTRAINT `smr01supdetail_ibfk_1` FOREIGN KEY (`fk_supplierid`) REFERENCES `smm02supplier` (`supplier_id`),
  ADD CONSTRAINT `smr01supdetail_ibfk_2` FOREIGN KEY (`fk_detail_id`) REFERENCES `smd01detail` (`detail_id`);

--
-- Constraints for table `smr02supclass`
--
ALTER TABLE `smr02supclass`
  ADD CONSTRAINT `smr02supclass_ibfk_1` FOREIGN KEY (`fk_supplier_id`) REFERENCES `smm02supplier` (`supplier_id`),
  ADD CONSTRAINT `smr02supclass_ibfk_2` FOREIGN KEY (`fk_class_id`) REFERENCES `smm01classification` (`class_id`);

--
-- Constraints for table `umd02logapproval`
--
ALTER TABLE `umd02logapproval`
  ADD CONSTRAINT `umd02logapproval_ibfk_1` FOREIGN KEY (`fk_approval_id`) REFERENCES `umm03approval` (`approval_id`);

--
-- Constraints for table `umm03approval`
--
ALTER TABLE `umm03approval`
  ADD CONSTRAINT `umm03approval_ibfk_1` FOREIGN KEY (`approval_name`) REFERENCES `umm01user` (`username`);

--
-- Constraints for table `umr01roleuser`
--
ALTER TABLE `umr01roleuser`
  ADD CONSTRAINT `umr01roleuser_ibfk_1` FOREIGN KEY (`fk_user_id`) REFERENCES `umm01user` (`user_id`),
  ADD CONSTRAINT `umr01roleuser_ibfk_2` FOREIGN KEY (`fk_role_id`) REFERENCES `umm02role` (`role_id`);

--
-- Constraints for table `umr02usermenu`
--
ALTER TABLE `umr02usermenu`
  ADD CONSTRAINT `umr02usermenu_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `umm01user` (`user_id`),
  ADD CONSTRAINT `umr02usermenu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `umm04menu` (`menu_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
