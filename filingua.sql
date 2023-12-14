-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 01:47 PM
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
-- Database: `filingua`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `email` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `progress` int(3) NOT NULL,
  `profile_image_path` varchar(255) DEFAULT NULL,
  `AccType` varchar(20) NOT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `bio` varchar(50) DEFAULT NULL,
  `language` varchar(50) NOT NULL,
  `lesson` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`email`, `first_name`, `last_name`, `age`, `sex`, `password`, `progress`, `profile_image_path`, `AccType`, `nationality`, `bio`, `language`, `lesson`) VALUES
('harvy@gmail.com', 'Javie', 'Soriano', 20, 'Lalaki', 'soriano22', 0, 'default.png', 'user', 'none', 'none', 'Tagalog', 'Aralin 6'),
('harvysdlc@gmail.com', 'Harvy', 'Dela Cruz', 20, 'Lalaki', 'soriano22', 0, 'harvysdlc@gmail.com - 2023.12.09 - 07.29.14am.jpg', 'developer', 'Filipino', 'Wala ka na sa search list ko! Tandaan mo yan...', 'Tagalog', 'Aralin 5'),
('joshelland@gmail.com', 'Josh Elland', 'Sombrano', 21, 'Lalaki', 'ejsombrano', 0, 'joshelland@gmail.com - 2023.12.08 - 12.56.39pm.jpg', 'developer', 'Filipino', 'Ashen Intrepid', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
