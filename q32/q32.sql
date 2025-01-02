-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 06:11 PM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aarya_20`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `ID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT 0,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`ID`, `Title`, `Rank`, `Status`, `Created_at`, `updated_at`) VALUES
(1, 'bhhvhh', 1, 0, '2024-08-26 13:15:50', NULL),
(2, 'fhch', 2, 0, '2024-08-27 11:38:29', NULL),
(3, 'Sequi excepteur quas', 26, 1, '2024-12-12 13:56:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_collection`
--

CREATE TABLE `book_collection` (
  `ID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT 1,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `edition` int(11) NOT NULL,
  `publication` varchar(100) NOT NULL,
  `isbn` bigint(20) DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `noofpage` int(11) NOT NULL,
  `book_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_collection`
--

INSERT INTO `book_collection` (`ID`, `Title`, `Status`, `Created_at`, `updated_at`, `author`, `edition`, `publication`, `isbn`, `price`, `noofpage`, `book_category_id`) VALUES
(1, 'gchfc', 1, '2024-08-27 11:45:13', NULL, '  chfchf', 4, 'bot', 12358702641, 250, 15, 0),
(4, 'wev', 1, '2024-08-27 11:51:35', NULL, ' mahesh', 2, 'vfdvd', 123, 1200, 50, 0),
(5, 'edddd', 1, '2024-08-27 12:00:33', NULL, ' mahesh', 4, 'bot', 12322, 50, 85, 5),
(6, 'sl', 0, '2024-08-27 12:04:51', NULL, ' kkkk', 51, 'fcgfxgdx', 164651, 20, 8, 10),
(7, '250', 127, '2024-08-27 12:15:11', NULL, '2', 0, '50', 1, 0, 0, 0),
(8, '1200', 123, '2024-08-27 15:45:12', NULL, '5', 0, '200', 6, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`ID`, `username`, `phone`, `email`, `dob`) VALUES
(1, 'aaryashrestha', 9800000000, 'shrestha@gmail.com', '2024-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `name`, `rank`, `status`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 'Shea Perry', '25', 0, 'uploads/logo.png', '', '', '2024-12-13 16:59:24', '2024-12-13 16:59:24'),
(5, 'pala', '34', 1, 'uploads/hero4.png', 'aarya', 'aarya', '2024-12-13 17:07:00', '2024-12-13 17:10:37'),
(6, 'Nell Foley', '19', 1, 'uploads/Mineral wash hoodie for men.png', 'aarya', '', '2024-12-13 17:07:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `image` varchar(255) DEFAULT NULL,
  `created_by` varchar(100) NOT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `name`, `rank`, `status`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Whilemina Espinoza', 'Aut tempora est est ', 'inactive', 'Screenshot 2024-12-12 191535.png', 'Molestiae ipsum lor', '2', '2024-12-12 15:48:27', '2024-12-12 15:51:40'),
(3, 'aarya', 'Cupidatat sed quisqu', 'inactive', 'Screenshot 2024-12-12 191535.png', 'Odit voluptate occae', 'aarya', '2024-12-12 15:52:19', '2024-12-12 15:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `ID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`ID`, `Title`) VALUES
(1, 'first'),
(4, 'fourth'),
(2, 'second'),
(3, 'third');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `fee` decimal(10,0) NOT NULL,
  `rollno` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `course`, `fee`, `rollno`, `address`, `dob`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Aarya Shrestha', 'BCA', 2500, 1, 'Kathmandu', '2024-08-07', 0, '2024-08-27 05:28:18', NULL),
(6, 'Baxter Shaw', 'BBA', 92, 92, 'Perspiciatis amet ', '2003-07-12', 0, '2024-12-12 15:26:40', NULL),
(7, 'Hannah Frost', 'BBA', 22, 35, 'Sint fugit voluptas', '2010-02-28', 0, '2024-12-12 15:27:14', NULL),
(8, 'Iliana Sweeney', 'CSIT', 37, 14, 'Excepturi aliquam si', '2002-11-25', 0, '2024-12-12 15:28:31', NULL),
(9, 'Arden Rowland', 'CSIT', 82, 71, 'Aperiam natus repreh', '2013-10-25', 0, '2024-12-12 15:31:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `ID` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`ID`, `semester_id`, `title`) VALUES
(1, 1, 'CFA'),
(2, 1, 'Dl'),
(3, 2, 'c'),
(4, 2, 'mp'),
(5, 3, 'web');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `username`, `password`) VALUES
(1, 'aarya', 'asdfg'),
(2, 'hari', 'hari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `book_collection`
--
ALTER TABLE `book_collection`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Title` (`Title`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `semester_id` (`semester_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book_collection`
--
ALTER TABLE `book_collection`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
