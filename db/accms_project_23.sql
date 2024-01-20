-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 05:37 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', '2016-04-04 20:31:45', '2024-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` int(11) NOT NULL,
  `course` varchar(75) NOT NULL,
  `froms` time NOT NULL DEFAULT current_timestamp(),
  `tos` time NOT NULL DEFAULT current_timestamp(),
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `course`, `froms`, `tos`, `date`) VALUES
(2, 'Python', '11:26:00', '12:26:00', '2023-04-10 00:00:00'),
(3, 'Cyber Security', '12:52:00', '13:52:00', '2023-04-30 00:00:00'),
(4, 'azure', '01:20:00', '02:20:00', '2023-12-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ccs`
--

CREATE TABLE `ccs` (
  `id` int(75) NOT NULL,
  `name` varchar(75) NOT NULL,
  `fname` varchar(75) NOT NULL,
  `sname` varchar(75) NOT NULL,
  `mname` varchar(75) NOT NULL,
  `cphone` varchar(75) NOT NULL,
  `wphone` varchar(75) NOT NULL,
  `dept` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccs`
--

INSERT INTO `ccs` (`id`, `name`, `fname`, `sname`, `mname`, `cphone`, `wphone`, `dept`, `email`, `password`) VALUES
(8, 'Shubhams', 'Mahesh', 'Loke', 'Mansi', '9405795916', '9405795916', 'IT', 'lokeshubham@gmail.com', '$2y$10$KefVOmcxtkiioIfzR43r.uNzHhS4EJEwfnVrK6apX279u.VEY5Xqi'),
(9, 'noni', 'sukla', 'gupta', 'shila', '1234567890', '1234567890', 'IT', 'abc@gmail.com', '$2y$10$TBTnChXlJqIjngsyS1ZbwOqmRCLPCPO6C.3YB/.c1fhYaes52wRSW');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `course_code` varchar(200) DEFAULT NULL,
  `course_fn` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `stream` varchar(200) DEFAULT NULL,
  `course_cat` varchar(200) DEFAULT NULL,
  `duration` varchar(200) DEFAULT NULL,
  `course_amt` int(200) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_code`, `course_fn`, `stream`, `course_cat`, `duration`, `course_amt`, `posting_date`) VALUES
(3, '101', 'abc', 'B.Sc.IT', 'Sem-I', '12hr', 1200, '2024-01-02 14:54:02'),
(5, '301', 'azure', 'B.Sc.IT', 'Sem-II', '40hr.', 30000, '2024-01-02 15:53:28'),
(6, '201', 'python', 'B.Sc.CS', 'Sem-I', '30hr.', 2800, '2024-01-04 14:44:13'),
(7, '204', 'wp', 'B.Sc.CS', 'Sem-II', '30hr.', 2800, '2024-01-04 14:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(75) NOT NULL,
  `course_code` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `fee` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `stream`, `category`, `duration`, `fee`) VALUES
(13, 123, 'azure', 'BSC-IT', 'Sem-1', '30hr.', 2800),
(15, 111, 'web programmin', 'BSC-IT', 'Sem-1', '30hr.', 2800);

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
(6, 12323456, 'rj', 'rj', 'rj', 'male', 1234567890, 'abdcd@gmail.com', 987654321, 'asdf', 'sdfg', 123457890, 'abc123', 'WAGLE ESTATE', 'THANE', 'Maharashtra', 400604, 'WAGLE ESTATE', 'THANE', 'Maharashtra', 400604, '2024-01-07 17:57:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `State`) VALUES
(1, 'Andaman and Nicobar Island (UT)'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh (UT)'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli (UT)'),
(9, 'Daman and Diu (UT)'),
(10, 'Delhi (NCT)'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep (UT)'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry (UT)'),
(28, 'Punjab'),
(29, 'Rajastha'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttarakhand'),
(35, 'Uttar Pradesh'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(75) NOT NULL,
  `name` varchar(75) NOT NULL,
  `fname` varchar(75) NOT NULL,
  `sname` varchar(75) NOT NULL,
  `mname` varchar(75) NOT NULL,
  `cphone` varchar(75) NOT NULL,
  `wphone` varchar(75) NOT NULL,
  `dept` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `fname`, `sname`, `mname`, `cphone`, `wphone`, `dept`, `email`, `password`) VALUES
(6, 'Priya', 'Suresh', 'Prajapati', 'Sumitra', '1234567890', '1234567890', 'IT', 'priya@gmail.com', '$2y$10$e.9BbRF6wqIxyDRY6nwop.g4rcJcm1AbDiN7nornuecQJLf54v2v.'),
(7, 'abc', 'xyz', 'pqr', 'abcd', '1234567890', '1234567890', 'IT', 'abc@gmail.com', '$2y$10$24tovpbLn63ToxLVOVvoKuu1DmGw78nI/wR7DPiyrq6FZ854m5356');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verification_code` varchar(255) NOT NULL,
  `is_verified` int(10) NOT NULL DEFAULT 0,
  `dob` date DEFAULT NULL,
  `category` varchar(75) NOT NULL,
  `programme` varchar(75) NOT NULL,
  `district` varchar(75) NOT NULL,
  `state` varchar(75) NOT NULL,
  `pincode` int(75) NOT NULL,
  `photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `name`, `fname`, `sname`, `mname`, `contact_number`, `gender`, `address`, `email_id`, `password`, `verification_code`, `is_verified`, `dob`, `category`, `programme`, `district`, `state`, `pincode`, `photo`) VALUES
(54, 'Aakash', 'Ravindra', 'Sethi', 'Sunita', '1234567890', 'Male', 'Bhandup West', 'sethiaakash@gmail.com', '$2y$10$ZaWemwwQiovZTp4LA2f8KuJidi1n6x8MnoNFF4i/A4qaYIDb54Kay', '', 0, '2002-05-02', 'OPEN', 'BCS-IT', 'Mumbai Suburban', 'Maharashtra', 400078, 0x32303230313233313232343034385f494d475f303630322e4a5047),
(55, 'Harsh', 'Manish', 'Nalawade', 'Mansi', '1234567890', 'Male', 'm', 'harshnalawade833@gmail.com', '$2y$10$Kvy/z.03lk4NgVkYQyLr9uqk75p9a9y3GI7kSNNLkN7XvMMl0SIui', '9823fc49dc118b6a353453e44764a564', 0, '2002-10-10', 'OPEN', 'BCS-IT', 'Mumbai Suburban', 'Maharashtra', 40, 0x32303230313032383232323231375f494d475f333731362e4a5047),
(56, 'Harsh', 'Manish', 'Nalawade', 'Mansi', '1234567890', 'Male', 'm', 'harshnalawade833@gmail.com', '$2y$10$.7s02c1gMw67wXiYaQyRiePnB4jfmroVFbRxUejcSdur150asSDbC', 'd8261c83e608059601e570e151a2c604', 0, '2002-10-10', 'OPEN', 'BCS-IT', 'Mumbai Suburban', 'Maharashtra', 40, 0x32303230313032383232323231375f494d475f333731362e4a5047),
(57, 'Tanisha', 'Tapan', 'Karamkar', 'Mansi', '1234567890', 'Female', 'Mulund', 'tanishakarmakar62@gmail.com', '$2y$10$cHHcfBlwEXhpJXnU3Mazyu2eMBBzTETQ.kI1ZhdEbSzRO78C2XwL2', '9db1eb881b2a353fdccb3f8261ac6a49', 0, '2002-10-10', 'OPEN', 'BSC-CS', 'Mumbai Suburban', 'Maharashtra', 400612, 0x32303230313032383232333634395f494d475f333734392e4a5047),
(58, 'Tanisha', 'Tapan', 'Karamkar', 'Mansi', '1234567890', 'Female', 'Mulund', 'tanishakarmakar62@gmail.com', '$2y$10$1NPcCHGmXsVFDhyQOscTJO35V.mSM6IzOaJrWh53Y0yKhBpp6IFxO', 'c429798fc7897a4af335a4b002558525', 0, '2002-10-10', 'OPEN', 'BSC-CS', 'Mumbai Suburban', 'Maharashtra', 400612, 0x32303230313032383232333634395f494d475f333734392e4a5047),
(59, 'Tanisha', 'Tapan', 'Karamkar', 'Mansi', '1234567890', 'Female', 'Mulund', 'tanishakarmakar62@gmail.com', '$2y$10$pGC5dWAY6kZ/kxmtvrQIz.LDyXCFuq2LTQ4FBoQyGmIY5LOmwnmw2', 'f125ab99d796c5a8709c2b376b45c89f', 0, '2002-10-10', 'OPEN', 'BSC-CS', 'Mumbai Suburban', 'Maharashtra', 400612, 0x32303230313032383232333634395f494d475f333734392e4a5047),
(60, 'Tanisha', 'Tapan', 'Karamkar', 'Mansi', '1234567890', 'Female', 'Mulund', 'tanishakarmakar62@gmail.com', '$2y$10$8Uxm1ccxO3AQ94jPkghuX.0Gok7LWIwvTcGo2X6gSXM41hSc9AB5u', 'e744d5eb23f1ca19b1958ac834afea8f', 0, '2002-10-10', 'OPEN', 'BSC-CS', 'Mumbai Suburban', 'Maharashtra', 400612, 0x32303230313032383232333634395f494d475f333734392e4a5047),
(61, 'Naresh', 'Manish', 'Salvi', 'Mansi', '9326366069', 'Female', 'Bhandup', 'salvinaresh62@gmail.com', '$2y$10$HhXO7LP.mOY//K7i1IaeUeevUghg1hAYERNyuR9otqBXoz5H618xi', 'd597efd89aba3d5c3a27bac610e41b03', 0, '2002-10-10', 'SC', 'BCOM', 'Mumbai Suburban', 'Maharashtra', 400612, 0x32303230313032383232333634395f494d475f333734392e4a5047),
(62, 'Naresh', 'Manish', 'Salvi', 'Mansi', '9326366069', 'Female', 'Bhandup', 'salvinaresh62@gmail.com', '$2y$10$B8BhNELY3IdMLWg6XoRPaOXdU3KQacaG0Kn6dSnjL.e/6DQjMzF06', '0a2e7477a4d154d07aa218c0d069e3a7', 0, '2002-10-10', 'SC', 'BCOM', 'Mumbai Suburban', 'Maharashtra', 400612, 0x32303230313032383232333634395f494d475f333734392e4a5047),
(63, 'Naresh', 'Manish', 'Salvi', 'Mansi', '9326366069', 'Female', 'Bhandup', 'salvinaresh62@gmail.com', '$2y$10$9QYABxgtRNi/0LFoXiQaPO0fiARmfuZhWBGpYSkFdtjN3ruPbvnmy', 'eb7d83046c6a426f0989938dc54831f0', 0, '2002-10-10', 'SC', 'BCOM', 'Mumbai Suburban', 'Maharashtra', 400612, 0x32303230313032383232333634395f494d475f333734392e4a5047),
(64, 'abc', 'xyz', 'pqr', 'zyx', '1234567890', 'Male', 'hello bindesh', 'abc@gmail.com', '$2y$10$vbENglqGVvWRD0gl6m.E2.gVfzE23Cs1LaTfbuY1gSePN0CXi5.u2', '', 0, '2023-12-16', 'OBC', 'BCS-IT', 'thane', 'MAHARASHTRA', 400604, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ccs`
--
ALTER TABLE `ccs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ccs`
--
ALTER TABLE `ccs`
  MODIFY `id` int(75) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(75) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(75) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
