-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 17, 2023 at 08:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `pupil` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `breakfast` tinyint(1) DEFAULT NULL,
  `lunch` tinyint(1) DEFAULT NULL,
  `dinner` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`pupil`, `date`, `breakfast`, `lunch`, `dinner`) VALUES
('cs22btech11051@iith.ac.in', '29-06-2023', 1, NULL, NULL),
('cs22btech11052@iith.ac.in', '29-06-2023', 1, NULL, NULL),
('cs22btech11051@iith.ac.in', '29-06-2023', NULL, 1, NULL),
('cs22btech11051@iith.ac.in', '29-06-2023', NULL, NULL, 1),
('cs22btech11038', '02-07-2023', 1, NULL, NULL),
('cs22btech11051', '03-07-2023', 1, NULL, NULL),
('cs22btech11038', '03-07-2023', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `break_fast`
--

CREATE TABLE `break_fast` (
  `day` varchar(30) NOT NULL,
  `menu` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `break_fast`
--

INSERT INTO `break_fast` (`day`, `menu`) VALUES
('Monday', 'Idli1'),
('Tuesday', 'Idli2'),
('Wednesday', 'Idli3'),
('Thursday', 'Idli4'),
('Friday', 'Idli5'),
('Saturday', 'Idli6'),
('Sunday', 'Idli7');

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE `dinner` (
  `day` varchar(30) NOT NULL,
  `menu` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`day`, `menu`) VALUES
('Monday', 'Roti1'),
('Tuesday', 'Roti2'),
('Wednesday', 'Roti3'),
('Thursday', 'Roti4'),
('Friday', 'Roti5'),
('Saturday', 'Roti6'),
('Sunday', 'Roti7');

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `day` varchar(30) NOT NULL,
  `menu` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`day`, `menu`) VALUES
('Monday', 'Rice1'),
('Tuesday', 'Rice2'),
('Wednesday', 'Rice3'),
('Thursday', 'Rice4'),
('Friday', 'Rice5'),
('Saturday', 'Rice6'),
('Sunday', 'Rice7');

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `emailid` varchar(30) NOT NULL,
  `mess` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`emailid`, `mess`) VALUES
('cs22btech11051@iith.ac.in', 'LDH'),
('cs22btech11038@iith.ac.in', 'UDH');

-- --------------------------------------------------------

--
-- Table structure for table `MessRegistration`
--

CREATE TABLE `MessRegistration` (
  `MessRegistration` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `MessRegistration`
--

INSERT INTO `MessRegistration` (`MessRegistration`) VALUES
(0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `name`) VALUES
('cs22btech11038@iith.ac.in', '12345678', 'Sriman'),
('cs22btech11051@iith.ac.in', '123456', 'Armaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
