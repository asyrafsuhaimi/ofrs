-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 04:05 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ofrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerdetail`
--

CREATE TABLE `customerdetail` (
  `customerid` int(20) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `icno` varchar(18) DEFAULT NULL,
  `phoneno` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerdetail`
--

INSERT INTO `customerdetail` (`customerid`, `firstname`, `lastname`, `icno`, `phoneno`, `email`, `username`, `password`) VALUES
(1, 'asyraf', 'suhaimi', '960831086529', '0125067752', 'asyrafsuhaimi31@gmail.com', 'asyraf', 'burstbison'),
(2, 'muhamad haziq', 'zulkifli', '123', '0124341121', 'haziq464202@yahoo.co', 'haziq', '12345'),
(3, 'muiz', 'fakhri', '96', '123', 'muiz@gmil.com', 'muiz', '12345'),
(4, 'Rochd ', 'Maliki', 'b031620467', '01457850', 'malikirochd@gmail.co', 'Rochd', '12345'),
(5, 'Ghani', 'Mohd', '865741253', '0154120178', 'ghani@gmail.com', 'Ghani96', '12345'),
(6, 'Izzat Syakir', 'Suhaimi', '8512748596', '0134265214', 'izzat@gmail.com', 'izzat12', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `staffid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `typeofuser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`staffid`, `username`, `password`, `name`, `typeofuser`) VALUES
('A1243', 'Rahman12', '12345', 'Rahman', 'Admin'),
('A1321', 'halim12', '12345', 'Abdul Halim Bin Mohd Kassim', 'Admin'),
('A3212', 'Zaim', '12345', 'Zulhilmi Zaim Bin Mohd Razali', 'Admin'),
('A44312', 'fazlie', '12345', 'Mohd Fazlie Yahya', 'Admin'),
('A456461', 'khiran', '12345', 'Khiran Raj', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `facilityid` int(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `facilitydescription` varchar(400) DEFAULT NULL,
  `facilityimage` varchar(50) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`facilityid`, `name`, `facilitydescription`, `facilityimage`, `location`, `price`) VALUES
(1, 'Main Hall', 'Fit 4000 People In One Session.\r\nSound System And Projectors Available.\r\nSuitable For Any Type Of Award Ceremony', '/ofrs/img/dewan.jpg', 'utem malacca', 'RM 2000'),
(2, 'Bunga Raya', 'The Hostel Can Fit Up TO 8 People In A House', '/ofrs/img/asrama.jpg', 'KOLEJ KEDIAMAN UTeM BUNGA RAYA\r\nPejabat Kolej Kediaman Bunga Raya \r\nPangsapuri Bunga Raya, \r\n75450 Bukit Beruang, Melaka', '200'),
(3, 'Aljazari', 'Can Fit Up To 10 Person In A House. A Total Number of 970 People Can Fit In This Facility', '/ofrs/img/aljazari.jpg', 'Hang Tuah Jaya, 76100 Durian Tunggal, Melaka Malaysia', 'RM 150'),
(4, 'Lestari', 'Can Fit Up TO 1200 People. A Room Can Fit 2 Person. Football Field And Badminton Court Available', '/ofrs/img/lestari.jpg', 'Kolej Kediaman Lestari, Hang Tuah Jaya. 76100 Durian Tunggal, Melaka', 'RM 70'),
(5, 'Banquet Hall', 'Suitable For Many Occasions, Can FIt 500 People In A single Session', '/ofrs/img/banquethall.jpg', 'Dewan Besar UTeM', 'RM 500'),
(6, 'VVIP Banquet Room', 'This Room Is Used To Serve VVIP', '/ofrs/img/vvip.jpg', 'Dewan Besar UteM', 'RM 500'),
(7, 'Main Praying Hall', 'Suitable For Islamic Program Such Religious Lectures', '/ofrs/img/mainprayinghall.jpg', 'Masjid Sayyidina Abu Bakar', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `occupancy`
--

CREATE TABLE `occupancy` (
  `id` int(20) NOT NULL,
  `facilityname` varchar(20) DEFAULT NULL,
  `customerid` varchar(20) DEFAULT NULL,
  `bookingdate` varchar(50) DEFAULT NULL,
  `bookingtime` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `occupancy`
--

INSERT INTO `occupancy` (`id`, `facilityname`, `customerid`, `bookingdate`, `bookingtime`) VALUES
(1, 'Main Hall', '1', '2017-05-16', '0.00-23.00'),
(2, 'Main Hall', '1', '2017-05-17', '0.00-23.00'),
(3, 'Main Hall', '1', '2017-05-18', '12.00-14.00'),
(4, 'Banquet Hall', '1', '2017-05-10', '0.00-23.00'),
(5, 'Banquet Hall', '1', '2017-05-11', '0.00-23.00'),
(6, 'Aljazari', '1', '2017-05-26', '0.00-23.00'),
(7, 'Aljazari', '1', '2017-05-27', '0.00-23.00'),
(8, 'Aljazari', '1', '2017-05-28', '0.00-23.00'),
(9, 'Main Praying Hall', '1', '2017-05-16', '16.00-18.00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_Id` varchar(20) NOT NULL,
  `Customer_Id` varchar(20) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Credit_card_no` varchar(20) NOT NULL,
  `Expire_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationid` int(10) NOT NULL,
  `customerid` varchar(50) DEFAULT NULL,
  `facilityname` varchar(50) DEFAULT NULL,
  `bookingdatefrom` varchar(50) DEFAULT NULL,
  `bookingdateto` varchar(30) DEFAULT NULL,
  `bookingtime` varchar(30) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservationid`, `customerid`, `facilityname`, `bookingdatefrom`, `bookingdateto`, `bookingtime`, `status`) VALUES
(3, '1', 'Main Hall', '2017-05-16', '2017-05-17', '0.00-23.00', 'Approve'),
(4, '1', 'Main Hall', '2017-05-18', '2017-05-18', '12.00-14.00', 'Disapprove'),
(5, '1', 'Banquet Hall', '2017-05-10', '2017-05-11', '0.00-23.00', 'Approve'),
(6, '1', 'Aljazari', '2017-05-26', '2017-05-28', '0.00-23.00', 'Approve'),
(7, '1', 'Main Praying Hall', '2017-05-16', '2017-05-16', '16.00-18.00', 'Approve'),
(8, '5', 'Main Hall', '2017-05-25', '2017-05-25', '18.00-20.00', 'Approve'),
(9, '1', 'Lestari', '2017-05-09', '2017-05-10', '0.00-23.00', 'Disapprove'),
(11, '6', 'Lestari', '2017-05-03', '2017-05-04', '0.00-23.00', 'Approve'),
(12, '6', 'Aljazari', '2017-05-01', '2017-05-02', '0.00-23.00', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Transaction_Id` varchar(20) NOT NULL,
  `Staff_Id` varchar(20) NOT NULL,
  `Reservation_Id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerdetail`
--
ALTER TABLE `customerdetail`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`facilityid`);

--
-- Indexes for table `occupancy`
--
ALTER TABLE `occupancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_Id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Transaction_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerdetail`
--
ALTER TABLE `customerdetail`
  MODIFY `customerid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `facilityid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `occupancy`
--
ALTER TABLE `occupancy`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
