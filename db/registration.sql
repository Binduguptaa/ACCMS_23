-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2024 at 05:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `regno` int(11) DEFAULT NULL,
  `firstName` varchar(500) DEFAULT NULL,
  `middleName` varchar(500) DEFAULT NULL,
  `lastName` varchar(500) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `emailid` varchar(500) DEFAULT NULL,
  `egycontactno` bigint(11) DEFAULT NULL,
  `guardianName` varchar(500) DEFAULT NULL,
  `guardianRelation` varchar(500) DEFAULT NULL,
  `guardianContactno` bigint(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `corresAddress` varchar(500) DEFAULT NULL,
  `corresCIty` varchar(500) DEFAULT NULL,
  `corresState` varchar(500) DEFAULT NULL,
  `corresPincode` int(11) DEFAULT NULL,
  `pmntAddress` varchar(500) DEFAULT NULL,
  `pmntCity` varchar(500) DEFAULT NULL,
  `pmnatetState` varchar(500) DEFAULT NULL,
  `pmntPincode` int(11) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `regno`, `firstName`, `middleName`, `lastName`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `password`, `corresAddress`, `corresCIty`, `corresState`, `corresPincode`, `pmntAddress`, `pmntCity`, `pmnatetState`, `pmntPincode`, `postingDate`, `updationDate`) VALUES
(2, 10806121, 'Anuj', '', 'kumar', 'male', 1234567890, 'ak@gmail.com', 1236547890, 'ABC', 'XYZ', 98756320000, NULL, 'ABC 12345 XYZ Street', 'New Delhi', 'Delhi (NCT)', 110001, 'ABC 12345 XYZ Street', 'New Delhi', 'Delhi (NCT)', 110001, '2020-07-20 14:58:26', NULL),
(3, 12345678, 'bindesh', 'suresh', 'gupta', 'male', 9082596783, 'abc@gmail.com', 1234567890, 'pinku', 'beta', 123456789, NULL, 'WAGLE ESTATE', 'THANE', 'Maharashtra', 400604, 'WAGLE ESTATE', 'THANE', 'Maharashtra', 400604, '2023-12-29 09:28:15', NULL),
(5, 98765234, 'bindesh', 'sg', 'GG', 'male', 9821123456, 'abcd@gmail.com', 987654321, 'ashd', 'ashv', 1234567890, 'hello', 'WAGLE ESTATE', 'THANE', 'Maharashtra', 123456, 'WAGLE ESTATE', 'THANE', 'Maharashtra', 123456, '2024-01-07 15:16:49', NULL),
(6, 12323456, 'rj', 'rj', 'rj', 'male', 1234567890, 'abdcd@gmail.com', 987654321, 'asdf', 'sdfg', 123457890, 'abc123', 'WAGLE ESTATE', 'THANE', 'Maharashtra', 400604, 'WAGLE ESTATE', 'THANE', 'Maharashtra', 400604, '2024-01-07 17:57:59', NULL),
(7, 1234567, 'sdfgh', 'sdfg', 'dfghj', 'male', 1234567098765, 'mmm@gmail.com', NULL, NULL, NULL, NULL, '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-13 15:38:53', NULL),
(8, 100, 'hajj', 'mnjk', 'uy', 'male', 1234567890, 'hero@gmail.com', NULL, NULL, NULL, NULL, '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-13 16:16:28', NULL),
(9, 12, 'mam', 'kjaskjk', 'kjkjaj', 'male', 123457890, 'abc@gmail.com', NULL, NULL, NULL, NULL, '12345678 ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-13 16:30:05', NULL),
(10, 12, 'mam', 'kjaskjk', 'kjkjaj', 'male', 123457890, 'abc@gmail.com', NULL, NULL, NULL, NULL, '12345678 ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-13 16:35:03', NULL),
(11, 12, 'jjh', 'jjj', 'hhh', 'male', 12345678, 'abc@gmail.com', NULL, NULL, NULL, NULL, '12345678 ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-13 16:35:58', NULL),
(12, 12345656, 'abc', 'pqr', 'xyz', 'male', 1234567890, 'abc@gmail.com', NULL, NULL, NULL, NULL, 'abc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-13 16:39:28', NULL),
(13, 12345656, 'abc', 'pqr', 'xyz', 'male', 1234567890, 'abc@gmail.com', NULL, NULL, NULL, NULL, 'abc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-13 16:39:48', NULL),
(14, 12345656, 'abc', 'pqr', 'xyz', 'male', 1234567890, 'abc@gmail.com', NULL, NULL, NULL, NULL, 'abc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-13 16:42:22', NULL),
(15, 12345656, 'abc', 'pqr', 'xyz', 'male', 1234567890, 'abc@gmail.com', NULL, NULL, NULL, NULL, 'abc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-13 16:44:40', NULL),
(16, 12, 'jhjhjh', 'hhh', 'thhh', 'male', 1234567890, 'abc@gmail.com', NULL, NULL, NULL, NULL, '12345678 ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-13 16:47:23', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
