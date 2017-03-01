-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2016 at 07:48 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `av`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sem_1` double NOT NULL,
  `sem_2` double NOT NULL,
  `sem_3` double NOT NULL,
  `sem_4` double NOT NULL,
  `sem_5` double NOT NULL,
  `sem_6` double NOT NULL,
  `sem_7` double NOT NULL,
  `sem_8` double NOT NULL,
  `ongoin_proj` varchar(255) NOT NULL,
  `cert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `password`, `sem_1`, `sem_2`, `sem_3`, `sem_4`, `sem_5`, `sem_6`, `sem_7`, `sem_8`, `ongoin_proj`, `cert`) VALUES
(100, 'mnop', 'ac', 9, 9, 9, 9, 9, 9, 9, 9, 'all', 'all');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
