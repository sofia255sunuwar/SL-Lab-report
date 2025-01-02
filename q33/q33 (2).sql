-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 05:48 PM
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
-- Database: `q33`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `duration`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lysandra Cochran', 90, 1, '2024-12-13 23:31:46', '2024-12-13 23:47:36'),
(3, 'Bell Mendez', 90, 1, '2024-12-13 23:32:00', '2024-12-14 00:00:46'),
(4, 'Lacey Stuart', 34, 1, '2024-12-13 23:32:02', '2024-12-15 23:04:23'),
(5, 'Mathematics', 40, 1, '2024-12-14 18:57:38', NULL),
(6, 'English', 50, 1, '2024-12-14 19:00:01', NULL),
(7, 'Science', 40, 1, '2024-12-14 19:00:53', NULL),
(8, 'Destiny Villarreal', 22, 1, '2024-12-15 23:03:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `rollno` int(11) DEFAULT NULL,
  `english` int(11) DEFAULT NULL,
  `science` int(11) DEFAULT NULL,
  `mathematics` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `rollno`, `english`, `science`, `mathematics`) VALUES
(2, 7, 16, 17, 66),
(3, 7, 65, 96, 61),
(5, 6, 52, 49, 48);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `fee` decimal(10,2) NOT NULL,
  `rollno` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` text DEFAULT NULL,
  `dob` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `course_id`, `fee`, `rollno`, `phone`, `address`, `dob`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Breanna Herman', 1, 100.00, 101, '9843989270', 'Accusamus dolorum nu', '1981-07-25', 0, '2024-12-14 15:42:21', '2024-12-14 15:54:31'),
(6, 'Anika Dennis', 3, 42.00, 82, '9812412412', 'Omnis hic ex ea maxi', '1981-05-04', 0, '2024-12-14 15:48:08', NULL),
(7, 'Lunea Cooper', 3, 57.00, 74, '9843590034', 'Ut dolor minim ut co', '1999-03-05', 1, '2024-12-14 15:48:24', '2024-12-15 23:05:43'),
(9, 'Cassady Workman', 1, 68.00, 41, '9843989277', 'Officia dolores repr', '1986-05-23', 1, '2024-12-15 23:11:48', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rollno` (`rollno`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`),
  ADD KEY `fk_course` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_course` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
