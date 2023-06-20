-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 12:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `dailyreport`
--

CREATE TABLE `dailyreport` (
  `employee_id` int(20) NOT NULL,
  `Check_in` time NOT NULL,
  `Check_out` time NOT NULL,
  `Date` date NOT NULL,
  `office_hour` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dailyreport`
--

INSERT INTO `dailyreport` (`employee_id`, `Check_in`, `Check_out`, `Date`, `office_hour`) VALUES
(1, '10:38:58', '12:38:58', '2023-06-19', '2'),
(1, '05:38:03', '12:45:03', '2023-06-18', '7'),
(1, '02:45:03', '08:45:03', '2023-06-18', '6'),
(2, '10:38:58', '16:45:03', '2023-06-18', '6'),
(2, '10:38:58', '12:38:58', '2023-06-20', '2'),
(2, '03:48:14', '03:48:22', '2023-06-21', '0'),
(3, '03:51:23', '03:51:25', '2023-06-21', '0'),
(1, '03:51:31', '03:51:34', '2023-06-21', '0');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(20) NOT NULL,
  `employee_name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_name`, `username`, `email`, `department`, `password`) VALUES
(1, 'Shoawn Paul', 'shaown224', 'shaown@gmail.com', 'Software Engineer', '1234'),
(2, 'Sazzad Hasan', 'sazzad221', 'sazzad@gmail.com', 'Machine Learning Eng', '1234'),
(3, 'rakib', 'rakib220', 'rakib@gmail.com', 'Software Engineer', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`Username`, `Password`) VALUES
('admin', '1234'),
('admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
