-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 10:01 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookid` int(3) NOT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf_file` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prn` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`Name`, `Prn`) VALUES
('Rahul', 27218),
('Kunal', 1741018),
('Rohit', 1741029),
('raj', 1741043),
('rachi', 1741044),
('ketan', 1741050),
('sachin', 1741055),
('sagar', 1741056),
('surya', 1741058),
('yogesh', 1741060);

-- --------------------------------------------------------

--
-- Table structure for table `sagar1`
--

CREATE TABLE `sagar1` (
  `Full_Name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mobile` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `otp` int(6) NOT NULL,
  `Verified` int(1) NOT NULL,
  `LastLogin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sagar1`
--

INSERT INTO `sagar1` (`Full_Name`, `Email`, `Mobile`, `Password`, `Time`, `otp`, `Verified`, `LastLogin`) VALUES
('sagar', 'sagarsssvat@gmail.com', '3434343434', 'YqiGUBKp', '2020-03-04 13:35:11.097143', 474378, 1, '2020-03-04 19:02:46'),
('sa', 'sag3@hm.com', '3632810182', 'ss', '2019-10-06 16:13:45.632695', 776584, 1, '2019-10-06 21:43:45'),
('Sagar', 'sonarsagarvat@gmail.com', '7945745495', 'ss', '2019-11-05 08:22:18.786324', 888250, 1, '2019-11-05 13:52:18'),
('sagar', 'sagar@gm.com', '7343733233', 'ss', '2019-10-07 14:02:09.247485', 565391, 1, 'NA'),
('ketan', 'ketan@gm.com', '7343746343', 'ss', '2019-10-07 14:04:56.511594', 420132, 1, 'NA'),
('mayur', 'mayur@gm.com', '7423487348', 'ss', '2019-10-07 14:10:30.804362', 660929, 1, 'NA'),
('sagar sonar', 'sagarsonarsssvat@gmail.com', '9518976940', '1741056', '2019-11-05 08:46:22.587812', 612652, 1, '2019-11-05 14:16:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD UNIQUE KEY `Prn` (`Prn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
