-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 06:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `numverify`
--

-- --------------------------------------------------------

--
-- Table structure for table `numbers`
--

CREATE TABLE `numbers` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `country_code` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `carrier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `numbers`
--

INSERT INTO `numbers` (`id`, `number`, `country_code`, `country_name`, `carrier`) VALUES
(15, '201286011876', 'EG', 'Egypt (Arab Republic of)', 'Orange Egypt for Telecommunications SAE'),
(16, '18773812877', 'US', 'United States of America', ''),
(17, '201286011876', 'EG', 'Egypt (Arab Republic of)', 'Orange Egypt for Telecommunications SAE'),
(18, '201227070561', 'EG', 'Egypt (Arab Republic of)', 'Orange Egypt for Telecommunications SAE'),
(19, '201227070562', 'EG', 'Egypt (Arab Republic of)', 'Orange Egypt for Telecommunications SAE'),
(20, '201027070562', 'EG', 'Egypt (Arab Republic of)', 'Vodafone Egypt Telecommunications SAE'),
(21, '201056122356', 'EG', 'Egypt (Arab Republic of)', 'Vodafone Egypt Telecommunications SAE'),
(22, '201286011876', 'EG', 'Egypt (Arab Republic of)', 'Orange Egypt for Telecommunications SAE'),
(23, '201286011876', 'EG', 'Egypt (Arab Republic of)', 'Orange Egypt for Telecommunications SAE'),
(24, '201286011876', 'EG', 'Egypt (Arab Republic of)', 'Orange Egypt for Telecommunications SAE'),
(25, '201286011876', 'EG', 'Egypt (Arab Republic of)', 'Orange Egypt for Telecommunications SAE'),
(26, '201286011876', 'EG', 'Egypt (Arab Republic of)', 'Orange Egypt for Telecommunications SAE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `numbers`
--
ALTER TABLE `numbers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `numbers`
--
ALTER TABLE `numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
