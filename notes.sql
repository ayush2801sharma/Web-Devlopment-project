-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 04:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `sno` int(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `customername` varchar(255) NOT NULL,
  `contactperson` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `dispatchdetail` varchar(255) NOT NULL,
  `projecttype` varchar(255) NOT NULL,
  `linenumber` varchar(255) NOT NULL,
  `plant` varchar(255) NOT NULL,
  `productplatform` varchar(255) NOT NULL,
  `equipmentlinewise` varchar(255) NOT NULL,
  `serialnumber` varchar(255) NOT NULL,
  `numberofequipment` varchar(255) NOT NULL,
  `thirdparty` varchar(255) NOT NULL,
  `planstartdate` varchar(255) NOT NULL,
  `planenddate` varchar(255) NOT NULL,
  `numberoftempativesdays` varchar(255) NOT NULL,
  `salestechclearancesdate` varchar(255) NOT NULL,
  `printer` varchar(255) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `motherboardtype` varchar(255) NOT NULL,
  `halcontype` varchar(255) NOT NULL,
  `hdd` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `cameramodule` varchar(255) NOT NULL,
  `partitionsize` varchar(255) NOT NULL,
  `platformorosdetails` varchar(255) NOT NULL,
  `ipaddress` varchar(255) NOT NULL,
  `serverversioni` varchar(255) NOT NULL,
  `oldclientversion` varchar(255) NOT NULL,
  `reportversioni` varchar(255) NOT NULL,
  `dbversioni` varchar(255) NOT NULL,
  `plcversioni` varchar(255) NOT NULL,
  `360versioni` varchar(255) NOT NULL,
  `osversioni` varchar(255) NOT NULL,
  `serverversiond` varchar(255) NOT NULL,
  `newclientversion` varchar(255) NOT NULL,
  `reportversiond` varchar(255) NOT NULL,
  `dbversiond` varchar(255) NOT NULL,
  `plcversiond` varchar(255) NOT NULL,
  `360versiond` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `actionplan` varchar(255) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
