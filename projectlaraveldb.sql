-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 10:45 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectlaraveldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `myusers`
--

CREATE TABLE `myusers` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telpnumber` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `myusers`
--

INSERT INTO `myusers` (`id`, `firstname`, `lastname`, `email`, `telpnumber`, `message`) VALUES
(1, 'Sin', 'Ta', 'dadas@asd.com', '081234567890', 'Bacon ipsum dolor amet shoulder pork loin ribeye corned beef ball tip jerky filet mignon jowl, beef frankfurter sirloin alcatra fatback. Rump shankle pastrami picanha venison landjaeger frankfurter tail beef short ribs corned beef cupim porchetta. Filet m'),
(13, 'dadad', 'sdasda', 'sin@ta.com', '092102019090`2', 'sadadadaD'),
(14, 'adada', 'adadad', 'dadas@asd.com', '012019103019', 'sdasdasdadadadad'),
(15, 'dasdasdad', 'adadad', 'asda@sada.com', '09828172712', 'Input heredasdasdadad'),
(17, 'Dewi', 'Dewi', 'dewi@gmail.com', '087654321234', 'Ini adalah pesanku'),
(21, 'Febry', 'Syafitry', 'dadas@asd.com', '081234567890', 'Haiiiiiii Semangat Ebyy'),
(22, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myusers`
--
ALTER TABLE `myusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myusers`
--
ALTER TABLE `myusers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
