-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2024 at 07:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourinsti_nes_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblissuedbookdetails`
--

CREATE TABLE `tblissuedbookdetails` (
  `id` int(11) NOT NULL,
  `memcard_no` varchar(10) DEFAULT NULL,
  `stu_name` varchar(50) DEFAULT NULL,
  `acs_no` varchar(100) DEFAULT NULL,
  `author_name` varchar(200) DEFAULT NULL,
  `BookId` int(11) DEFAULT NULL,
  `StudentID` varchar(150) DEFAULT NULL,
  `IssuesDate` timestamp NULL DEFAULT current_timestamp(),
  `duedate` varchar(10) DEFAULT NULL,
  `ReturnDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `RetrunStatus` int(1) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `unit` varchar(4) DEFAULT NULL,
  `fine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblissuedbookdetails`
--

INSERT INTO `tblissuedbookdetails` (`id`, `memcard_no`, `stu_name`, `acs_no`, `author_name`, `BookId`, `StudentID`, `IssuesDate`, `duedate`, `ReturnDate`, `RetrunStatus`, `price`, `unit`, `fine`) VALUES
(7, NULL, NULL, NULL, NULL, 5, 'SID011', '2024-02-01 05:45:57', NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, 1, 'SID002', '2024-02-01 05:45:57', NULL, '2024-02-04 06:33:08', 1, NULL, NULL, 0),
(9, NULL, NULL, NULL, NULL, 10, 'SID009', '2024-02-01 05:45:57', NULL, '2024-02-04 06:33:08', 1, NULL, NULL, 0),
(10, NULL, NULL, NULL, NULL, 11, 'SID009', '2024-02-01 05:45:57', NULL, '2024-02-04 06:33:08', 1, NULL, NULL, 0),
(11, NULL, NULL, NULL, NULL, 1, 'SID012', '2024-02-01 05:45:57', NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, 10, 'SID012', '2024-02-01 05:45:57', NULL, '2024-02-04 06:33:08', 1, NULL, NULL, 5),
(13, '3450', 'rutuja', '7890', 'A.P.Patil', 23, '45', '2024-08-02 06:37:22', NULL, '2024-08-11 06:37:22', 0, '80', '1', 0),
(14, '3450', 'rutuja', '7890', 'A.P.Patil', 23, '45', '2024-08-02 06:37:22', NULL, '2024-08-11 06:37:22', 0, '80', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblissuedbookdetails`
--
ALTER TABLE `tblissuedbookdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblissuedbookdetails`
--
ALTER TABLE `tblissuedbookdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
