-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 08:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obs_login_dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `resetpasswords`
--

CREATE TABLE `resetpasswords` (
  `id` int(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resetpasswords`
--

INSERT INTO `resetpasswords` (`id`, `code`, `email`) VALUES
(1, '639b7e88f0048cc34926126aada6f829', '4175.akash@gmail.com'),
(2, '216f2ba437b47bf4b9c3bf805f6b372a', 'abdullahxaied@gmail.com'),
(3, '57a23ab8344bf6e3d703d45061d3b270', 'abdullahxaied@gmail.com'),
(4, 'f9b6a23ef84453be1cca9291bde722cd', '4175.akash@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `userid` mediumint(7) UNSIGNED NOT NULL,
  `Email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `num` bigint(11) UNSIGNED NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`userid`, `Email`, `address`, `num`, `Password`) VALUES
(1603091, 'snahashis.shuvon@gmail.com', 'Room #205, RH Students Bhaban ', 1715602633, 'shuvon12'),
(1603107, 'abdullahxaied@gmail.com', 'Room #204, Zia Hall, RUET', 1521436020, 'Abzps05'),
(1603108, '4175.akash@gmail.com', 'vodra ', 1794598178, '4175');

-- --------------------------------------------------------

--
-- Table structure for table `user_req_relationship`
--

CREATE TABLE `user_req_relationship` (
  `userid` int(255) UNSIGNED NOT NULL,
  `req_books` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_req_relationship`
--

INSERT INTO `user_req_relationship` (`userid`, `req_books`) VALUES
(1603108, 'Integral Calculus by Das and Mukherjee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resetpasswords`
--
ALTER TABLE `resetpasswords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_req_relationship`
--
ALTER TABLE `user_req_relationship`
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resetpasswords`
--
ALTER TABLE `resetpasswords`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
