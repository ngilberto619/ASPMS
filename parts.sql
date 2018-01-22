-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2018 at 07:59 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parts`
--

-- --------------------------------------------------------

--
-- Table structure for table `actual_storage`
--

CREATE TABLE IF NOT EXISTS `actual_storage` (
  `partID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  KEY `partID` (`partID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actual_storage`
--

INSERT INTO `actual_storage` (`partID`, `quantity`) VALUES
(1, 43),
(2, 10),
(3, 4),
(4, 50),
(5, 19);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `province` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  PRIMARY KEY (`district`),
  KEY `province` (`province`),
  KEY `province_2` (`province`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`province`, `district`) VALUES
('East', 'Bugesera'),
('East', 'Ngoma'),
('Kigali City', 'Gasabo'),
('Kigali City', 'Kicukiro'),
('Kigali City', 'Nyarugenge'),
('North', 'Gakenke'),
('North', 'Musanze'),
('South', 'Gisagara'),
('South', 'Huye'),
('South', 'Nyamagabe'),
('South', 'Nyanza'),
('South', 'Nyaruguru'),
('South', 'Ruhango'),
('West', 'Nyamasheke'),
('West', 'Rubavu');

-- --------------------------------------------------------

--
-- Table structure for table `loging`
--

CREATE TABLE IF NOT EXISTS `loging` (
  `Id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `PassWord` varchar(60) NOT NULL,
  PRIMARY KEY (`Username`),
  KEY `UserId` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loging`
--

INSERT INTO `loging` (`Id`, `Username`, `PassWord`) VALUES
(2, 'gilberto', 'bafff1df7d916f99fbe8be1a81dc326f'),
(5, 'ignace', 'e7dcb76610adff90d15a8deb8c745468'),
(1, 'janvier', '76951ecb731b3d2f3b11b062bd538dc3'),
(3, 'justine', 'b55050b2f605b7cf0d48346ff3d432d3'),
(4, 'patrick', '6c84cbd30cf9350a990bad2bcc1bec5f');

-- --------------------------------------------------------

--
-- Table structure for table `party_type`
--

CREATE TABLE IF NOT EXISTS `party_type` (
  `partID` int(11) NOT NULL AUTO_INCREMENT,
  `partName` varchar(124) NOT NULL,
  `price` bigint(20) NOT NULL,
  PRIMARY KEY (`partID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `party_type`
--

INSERT INTO `party_type` (`partID`, `partName`, `price`) VALUES
(1, 'armotisor', 500),
(2, 'Tyres', 10000),
(3, 'Engine', 400000),
(4, 'Side-mirror', 5000),
(5, 'engine-oil', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `part_store`
--

CREATE TABLE IF NOT EXISTS `part_store` (
  `storeID` int(11) NOT NULL AUTO_INCREMENT,
  `partID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `location` varchar(128) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(30) NOT NULL DEFAULT 'IN',
  PRIMARY KEY (`storeID`),
  KEY `partID` (`partID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `part_store`
--

INSERT INTO `part_store` (`storeID`, `partID`, `userID`, `quantity`, `location`, `time`, `status`) VALUES
(1, 1, 1, 45, 'a12/b1/c5', '2015-09-15 04:13:46', 'IN'),
(2, 2, 2, 10, '2/3/4', '2018-01-22 18:33:29', 'IN'),
(3, 3, 2, 5, '4/5/6', '2018-01-22 18:34:10', 'IN'),
(4, 4, 2, 50, '1/2/3', '2018-01-22 18:34:57', 'IN'),
(5, 5, 2, 20, '7/8/9', '2018-01-22 18:35:53', 'IN');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE IF NOT EXISTS `province` (
  `province` varchar(40) NOT NULL,
  PRIMARY KEY (`province`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province`) VALUES
('East'),
('Kigali City'),
('North'),
('South'),
('West');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE IF NOT EXISTS `transaction_details` (
  `transactionID` int(11) NOT NULL,
  `partID` int(11) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'OUT',
  KEY `transactionID` (`transactionID`),
  KEY `partID` (`partID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`transactionID`, `partID`, `quantity`, `status`) VALUES
(1, 1, 2, 'OUT'),
(2, 5, 1, 'OUT'),
(3, 3, 1, 'OUT');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_full`
--

CREATE TABLE IF NOT EXISTS `transaction_full` (
  `transactionID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `customerName` varchar(128) NOT NULL,
  `customerAdress` varchar(128) NOT NULL,
  `customerPhone` int(11) NOT NULL,
  `paymentType` varchar(128) NOT NULL DEFAULT 'Cash',
  `creditExpirationDate` varchar(30) DEFAULT NULL,
  `totalMoney` bigint(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`transactionID`),
  KEY `userID` (`userID`),
  KEY `customerAdress` (`customerAdress`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `transaction_full`
--

INSERT INTO `transaction_full` (`transactionID`, `userID`, `customerName`, `customerAdress`, `customerPhone`, `paymentType`, `creditExpirationDate`, `totalMoney`, `time`) VALUES
(1, 1, 'ignace', 'Gakenke', 783218734, 'Cash', NULL, 1000, '2017-11-21 11:43:45'),
(2, 3, 'Emmy', 'Nyarugenge', 788593013, 'Cash', NULL, 2500, '2018-01-22 18:43:48'),
(3, 4, 'Desire', 'Gasabo', 788730333, 'Cash', NULL, 400000, '2018-01-22 18:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(120) NOT NULL,
  `Lastname` varchar(120) NOT NULL,
  `Email` varchar(124) NOT NULL,
  `Gender` int(11) NOT NULL,
  `Picture` varchar(124) NOT NULL DEFAULT 'images/unknown.jpg',
  `Status` varchar(120) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`),
  KEY `Phone` (`Phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Firstname`, `Lastname`, `Email`, `Gender`, `Picture`, `Status`, `Phone`, `state`) VALUES
(1, 'Janvier', 'MUGISHA', 'mugijanvier@gmail.com', 1, 'uploads/WWW.YTS.RE.jpg', 'Manager', '+250786008812', 0),
(2, 'Gilberto', 'NGENDAHAYO', 'ngilberto619@gmail.com', 1, 'uploads/Gilbert.jpg', 'Manager', '+250783218734', 0),
(3, 'justine', 'Ishimwe', 'justine.ishimwe23@gmail.com', 0, 'uploads/veronterry.JPG', 'Seller', '+250784545236', 0),
(4, 'Patrick', 'Habyarimana', 'pathab05@gmail.com', 1, 'uploads/20160822_112417.jpg', 'Supervisor', '+250788222321', 0),
(5, 'Ignace', 'Tuyizere', 'ignace97@hotmail.com', 1, 'uploads/vlcsnap-2017-11-13-19h41m12s821.png', 'Seller', '+250785772449', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actual_storage`
--
ALTER TABLE `actual_storage`
  ADD CONSTRAINT `actual_storage_ibfk_1` FOREIGN KEY (`partID`) REFERENCES `party_type` (`partID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`province`) REFERENCES `province` (`province`);

--
-- Constraints for table `loging`
--
ALTER TABLE `loging`
  ADD CONSTRAINT `loging_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `user` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `part_store`
--
ALTER TABLE `part_store`
  ADD CONSTRAINT `part_store_ibfk_1` FOREIGN KEY (`partID`) REFERENCES `party_type` (`partID`),
  ADD CONSTRAINT `part_store_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`Id`);

--
-- Constraints for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_ibfk_1` FOREIGN KEY (`transactionID`) REFERENCES `transaction_full` (`transactionID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_details_ibfk_2` FOREIGN KEY (`partID`) REFERENCES `party_type` (`partID`);

--
-- Constraints for table `transaction_full`
--
ALTER TABLE `transaction_full`
  ADD CONSTRAINT `transaction_full_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_full_ibfk_2` FOREIGN KEY (`customerAdress`) REFERENCES `district` (`district`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
