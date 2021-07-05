-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: -- Generation Time: 6pm يوليو 2021
127.0.0.2
-- إصدار الخادم: 10.4.49-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `control of robot arm`
--

-- --------------------------------------------------------

--
-- بنية الجدول `Round`
--

CREATE TABLE `range` (
  `Round1` int(11) NOT NULL,
  `Round2` int(11) NOT NULL,
  `Round3` int(11) NOT NULL,
  `Round4` int(11) NOT NULL,
  `Round5` int(11) NOT NULL,
  `Round6` int(11) NOT NULL,
  `on or off` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `Round`
--

INSERT INTO `Round` (`Round1`, `Round2`, `Round3`, `Round4`, `Round5`, `Round6`, `on or off`) VALUES
(50, 128, 50, 50, 50, 50, 'OFF');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;