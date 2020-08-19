-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 04:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `adlogin`
--

CREATE TABLE `adlogin` (
  `NAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adlogin`
--

INSERT INTO `adlogin` (`NAME`, `PASSWORD`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `AIRLINEID` int(4) NOT NULL,
  `AIRLINETYPE` varchar(25) NOT NULL,
  `STARTPLACE` varchar(20) NOT NULL,
  `ENDPLACE` varchar(20) NOT NULL,
  `STARTTIME` time NOT NULL,
  `ENDTIME` time NOT NULL,
  `MAXSEATS` int(4) NOT NULL,
  `AVAILSEATS` int(4) NOT NULL,
  `FARE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`AIRLINEID`, `AIRLINETYPE`, `STARTPLACE`, `ENDPLACE`, `STARTTIME`, `ENDTIME`, `MAXSEATS`, `AVAILSEATS`, `FARE`) VALUES
(1, 'Air Asia', 'Chennai(MAA)', 'Singapore(SIN)', '08:15:00', '18:30:00', 55, 38, 7218),
(2, 'Srilankan Airlines', 'Chennai(MAA)', 'Singapore(SIN)', '10:00:00', '18:55:00', 44, 23, 7956),
(3, 'Vistara', 'Chennai(MAA)', 'Singapore(SIN)', '12:30:00', '08:15:00', 55, 34, 21301),
(4, 'Air India', 'Chennai(MAA)', 'Singapore(SIN)', '17:00:00', '07:30:00', 45, 23, 24376),
(5, 'Srilankan Airlines', 'Chennai(MAA)', 'Singapore(SIN)', '21:15:00', '07:20:00', 55, 48, 73352);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `BUSID` int(3) NOT NULL,
  `BUSTYPE` varchar(20) NOT NULL,
  `STARTPLACE` varchar(15) NOT NULL,
  `ENDPLACE` varchar(15) NOT NULL,
  `STARTTIME` time NOT NULL,
  `ENDTIME` time NOT NULL,
  `MAXSEATS` int(5) NOT NULL,
  `AVAILSEATS` int(5) NOT NULL,
  `FARE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`BUSID`, `BUSTYPE`, `STARTPLACE`, `ENDPLACE`, `STARTTIME`, `ENDTIME`, `MAXSEATS`, `AVAILSEATS`, `FARE`) VALUES
(1, 'A/C Seater (2+2)', 'Mayiladuthurai', 'Chennai', '09:15:00', '16:15:00', 25, 20, 309),
(2, 'A/C Seater (2+2)', 'Mayiladuthurai', 'Chennai', '09:45:00', '15:45:00', 30, 25, 314),
(3, 'DELUXE', 'Mayiladuthurai', 'Chennai', '10:00:00', '17:00:00', 38, 32, 255),
(4, 'ULTRA DELUXE', 'Mayiladuthurai', 'Chennai', '11:30:00', '17:30:00', 24, 18, 287),
(5, 'A/C Seater / Sleeper', 'Mayiladuthurai', 'Chennai', '12:15:00', '18:15:00', 36, 24, 373),
(6, 'DELUXE', 'Mayiladuthurai', 'Chennai', '13:30:00', '19:30:00', 29, 25, 273),
(7, 'ULTRA DELUXE', 'Mayiladuthurai', 'Chennai', '15:10:00', '20:40:00', 34, 28, 287),
(8, 'ULTRA DELUXE', 'Mayiladuthurai', 'Chennai', '21:30:00', '02:45:00', 41, 33, 287),
(9, 'A/C Seater / Sleeper', 'Mayiladuthurai', 'Chennai', '22:00:00', '04:00:00', 28, 27, 317),
(10, 'A/C Seater / Sleeper', 'Mayiladuthurai', 'Chennai', '23:00:00', '04:20:00', 41, 36, 287),
(11, 'A/C Seater (2+2)', 'Mayiladuthurai', 'Banglore', '09:15:00', '17:30:00', 30, 25, 373),
(12, 'DELUXE', 'Mayiladuthurai', 'Banglore', '10:00:00', '19:30:00', 34, 24, 314),
(13, 'ULTRA DELUXE', 'Mayiladuthurai', 'Banglore', '12:15:00', '20:40:00', 28, 22, 379),
(14, 'A/C Seater / Sleeper', 'Mayiladuthurai', 'Banglore', '15:10:00', '02:45:00', 41, 27, 420),
(15, 'DELUXE', 'Mayiladuthurai', 'Banglore', '22:00:00', '04:20:00', 36, 28, 432),
(16, 'DELUXE', 'Mayiladuthurai', 'Salem', '09:15:00', '15:45:00', 55, 34, 379),
(17, 'A/C Seater (2+2)', 'Mayiladuthurai', 'Salem', '10:00:00', '17:30:00', 30, 23, 381),
(18, 'A/C Seater / Sleeper', 'Mayiladuthurai', 'Salem', '12:15:00', '19:30:00', 48, 34, 387),
(19, 'ULTRA DELUXE', 'Mayiladuthurai', 'Salem', '22:00:00', '04:20:00', 52, 38, 462),
(20, 'A/C Seater (2+2)', 'Mayiladuthurai', 'Salem', '23:00:00', '04:50:00', 51, 43, 359),
(21, 'A/C Seater (2+2)', 'Chennai', 'Banglore', '09:15:00', '13:15:00', 30, 25, 258),
(22, 'DELUXE', 'Chennai', 'Banglore', '10:00:00', '14:00:00', 34, 24, 294),
(23, 'ULTRA DELUXE', 'Chennai', 'Banglore', '12:15:00', '15:10:00', 36, 22, 314),
(24, 'A/C Seater / Sleeper', 'Chennai', 'Banglore', '15:10:00', '18:55:00', 39, 27, 364),
(25, 'ULTRA DELUXE', 'Chennai', 'Banglore', '20:00:00', '23:30:00', 43, 22, 276),
(26, 'A/C Seater (2+2)', 'Chennai', 'Mayiladuthurai', '10:00:00', '17:00:00', 38, 18, 314),
(27, 'DELUXE', 'Chennai', 'Mayiladuthurai', '11:30:00', '18:30:00', 34, 22, 416),
(28, 'ULTRA DELUXE', 'Chennai', 'Mayiladuthurai', '12:15:00', '18:15:00', 42, 21, 284),
(29, 'A/C Seater / Sleeper', 'Chennai', 'Mayiladuthurai', '15:10:00', '20:40:00', 35, 19, 276),
(30, 'A/C Seater (2+2)', 'Chennai', 'Mayiladuthurai', '21:30:00', '02:45:00', 33, 18, 296),
(31, 'A/C Seater / Sleeper', 'Chennai', 'Salem', '09:15:00', '12:15:00', 38, 24, 175),
(32, 'DELUXE', 'Chennai', 'Salem', '12:15:00', '15:15:00', 48, 22, 205),
(33, 'A/C Seater (2+2)', 'Chennai', 'Salem', '13:30:00', '16:30:00', 31, 23, 128),
(34, 'ULTRA DELUXE	', 'Chennai', 'Salem', '15:10:00', '18:10:00', 28, 14, 153);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(9) NOT NULL,
  `CONFIRMPASSWORD` varchar(9) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `MOBILENO` int(20) NOT NULL,
  `AGE` int(5) NOT NULL,
  `GENDER` varchar(8) NOT NULL,
  `ADDRESS` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`USERNAME`, `PASSWORD`, `CONFIRMPASSWORD`, `EMAIL`, `MOBILENO`, `AGE`, `GENDER`, `ADDRESS`) VALUES
('ashwin', 'ashwin', 'ashwin', 'ashwin@gmail.com', 65448920, 21, 'male', 'Trichy'),
('atchiya', 'atchiya', 'atchiya', 'atchiya@gmail.com', 865455445, 16, 'female', 'bangalore'),
('janani', 'janani', 'janani', 'janani@gmail.com', 257965696, 21, 'female', 'perambur'),
('madhu', 'madhu', 'madhu', 'madhu@gmail.com', 65448920, 21, 'female', 'mayilauthurai'),
('madhu mitha', 'madhu', 'madhu', 'madhu@gmaul.com', 856516244, 22, 'female', 'mayiladuthurai'),
('mahi', 'mahi', 'mahi', 'mahi@gmail.com', 865421156, 23, 'male', 'perambur'),
('mahiban', '1911', '1911', 'mahiban@gmail.com', 847483647, 19, 'male', 'mayiladuthurai'),
('nalini', 'nalini', 'nalini', 'nalini@gmail.com', 548755654, 37, 'female', 'perambur'),
('rajan', 'rajan', 'rajan', 'rajan@gmail.com', 816473641, 45, 'male', 'chennai'),
('ramya', 'ramya', 'ramya', 'ramyaram@gmail.com', 654827169, 18, 'female', 'thanjavur'),
('sneka', 'saisurya', 'saisurya', 'snekamariyappan@gmai', 988462831, 20, 'female', 'thiruvavaduthurai'),
('soundharya', 'sou', 'sou', 'soundharyamahiraji@g', 805678245, 23, 'female', 'coimbatore'),
('swathi', '1808', '1808', 'swathisundar18@gmail', 956886584, 20, 'female', 'aduthurai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adlogin`
--
ALTER TABLE `adlogin`
  ADD PRIMARY KEY (`PASSWORD`);

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`AIRLINEID`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`BUSID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`EMAIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
