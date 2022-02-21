-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 06:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_information`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `id` int(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `age` int(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address` varchar(90) NOT NULL,
  `contactno` varchar(60) NOT NULL,
  `birthday` varchar(60) NOT NULL,
  `mothersname` varchar(60) NOT NULL,
  `fathersname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`id`, `fname`, `mname`, `lname`, `age`, `email`, `address`, `contactno`, `birthday`, `mothersname`, `fathersname`) VALUES
(2019115464, 'edgar', 'pablo', 'alconera', 20, 'aedgardominic@gmail.com', 'Dreamcrest Malolos Bulacan', '09567455681', 'April 24 , 2001', 'belinda alconera', 'edgar alconera'),
(2019118996, 'celeste', 'marquez', 'adriane', 20, 'adriano_celeste@gmail.com', 'longos, malolos, bulacan', '09897455681', 'December 11, 2000', 'marites agoncillo', 'james castro'),
(2019200011, 'Charlie', 'Santos', 'De Guzman', 21, 'charls21@gmail.com', 'Plaridel, Bulacan', '09801455385', 'January 01, 2000', 'Trina De Guzman', 'Arthur De Guzman'),
(2020100110, 'irving', 'dela cruz', 'santos', 20, 'delacruz_irving21@gmail.com', 'Balagtas, Bulacan', '09521405972', 'August 28, 2001', 'hillary santos', 'jonas santos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
