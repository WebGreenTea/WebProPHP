-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 06:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookit`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BookID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `BookName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TypeID` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `StatusID` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `Publish` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UnitPrice` int(11) NOT NULL,
  `UnitRent` int(11) NOT NULL,
  `DayAmount` int(11) DEFAULT NULL,
  `Picture` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BookDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BookID`, `BookName`, `TypeID`, `StatusID`, `Publish`, `UnitPrice`, `UnitRent`, `DayAmount`, `Picture`, `BookDate`) VALUES
('00001', 'Doraemon', '001', '01', 'KPN', 150, 3, 2, 'Doraemon.png', '2021-03-01'),
('00002', 'เก็บตะวัน', '002', '03', 'WRP', 250, 5, 3, 'เก็บตะวัน.jpg', '2021-03-10'),
('00003', 'สิ่งมีชีวิต', '002', '01', 'YPR', 185, 3, 3, 'สิ่งมีชีวิต.jpg', '2021-03-18'),
('00004', 'Konan', '003', '01', 'DDR', 20, 1, 2, 'konan.jpg', '2021-03-17'),
('00005', 'FHM', '001', '02', 'KPN', 80, 2, 2, 'FHM.jpg', '2021-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerSurname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerAddr` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CustomerPhone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerName`, `CustomerSurname`, `CustomerAddr`, `CustomerPhone`) VALUES
('0001', 'นิติการ', 'นาคเจือทอง', 'ปราจีนบุรี', '037217300'),
('0002', '๋๋John', 'Smith', 'กรุงเทพ', '027341293');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `passWord` varchar(50) DEFAULT NULL,
  `level` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`userID`, `userName`, `passWord`, `level`) VALUES
(1, 'sahawuth', '123456', 'user'),
(3, 'AdminMan', '123456', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `statusbook`
--

CREATE TABLE `statusbook` (
  `StatusID` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `StatusName` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statusbook`
--

INSERT INTO `statusbook` (`StatusID`, `StatusName`) VALUES
('01', 'ปกติ'),
('02', 'ชำรุด'),
('03', 'ส่งซ่อม');

-- --------------------------------------------------------

--
-- Table structure for table `typebook`
--

CREATE TABLE `typebook` (
  `TypeID` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `TypeName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `typebook`
--

INSERT INTO `typebook` (`TypeID`, `TypeName`) VALUES
('001', 'การ์ตูน'),
('002', 'นิยาย'),
('003', 'นิตยสาร');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `statusbook`
--
ALTER TABLE `statusbook`
  ADD PRIMARY KEY (`StatusID`);

--
-- Indexes for table `typebook`
--
ALTER TABLE `typebook`
  ADD PRIMARY KEY (`TypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
