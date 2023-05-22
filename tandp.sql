-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2023 at 08:19 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tandp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admint`
--

CREATE TABLE `admint` (
  `user` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admint`
--

INSERT INTO `admint` (`user`, `pass`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `diplo`
--

CREATE TABLE `diplo` (
  `names` text NOT NULL,
  `mobiles` text NOT NULL,
  `emails` text NOT NULL,
  `states` text NOT NULL,
  `citys` text NOT NULL,
  `quali` text NOT NULL,
  `diplomarks` text NOT NULL,
  `_10marks` text NOT NULL,
  `state1` text NOT NULL,
  `city2` text NOT NULL,
  `state2` text NOT NULL,
  `state3` text NOT NULL,
  `city3` text NOT NULL,
  `city1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diplo`
--

INSERT INTO `diplo` (`names`, `mobiles`, `emails`, `states`, `citys`, `quali`, `diplomarks`, `_10marks`, `state1`, `city2`, `state2`, `state3`, `city3`, `city1`) VALUES
('Ganesh Shriram Jagdale', '9309553784', 'jagdaleganesh9545@gmail.com', 'Andhra Pradesh', 'Anantapur', 'Diploma', '67', '76', 'Andhra Pradesh', 'Anjaw', 'Arunachal Pradesh', 'Arunachal Pradesh', 'Anjaw', 'Anantapur');

-- --------------------------------------------------------

--
-- Table structure for table `pg`
--

CREATE TABLE `pg` (
  `names` text NOT NULL,
  `mobiles` text NOT NULL,
  `emails` text NOT NULL,
  `states` text NOT NULL,
  `citys` text NOT NULL,
  `qualitype` text NOT NULL,
  `pgmarks` text NOT NULL,
  `gradumarks` text NOT NULL,
  `_12marks` text NOT NULL,
  `_10marks` text NOT NULL,
  `state1` text NOT NULL,
  `city1` text NOT NULL,
  `state2` text NOT NULL,
  `city2` text NOT NULL,
  `state3` text NOT NULL,
  `city3` text NOT NULL,
  `quali` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pg`
--

INSERT INTO `pg` (`names`, `mobiles`, `emails`, `states`, `citys`, `qualitype`, `pgmarks`, `gradumarks`, `_12marks`, `_10marks`, `state1`, `city1`, `state2`, `city2`, `state3`, `city3`, `quali`) VALUES
('Ganesh Shriram Jagdale', '9309553784', 'jagdaleganesh9545@gmail.com', 'Andhra Pradesh', 'Anantapur', 'Engineering', '76', '77', '77', '66', 'Andhra Pradesh', 'Anantapur', 'Arunachal Pradesh', 'Anjaw', 'Arunachal Pradesh', 'Anjaw', 'Post Graduate');

-- --------------------------------------------------------

--
-- Table structure for table `ug`
--

CREATE TABLE `ug` (
  `names` text NOT NULL,
  `mobiles` text NOT NULL,
  `emails` text NOT NULL,
  `states` text NOT NULL,
  `citys` text NOT NULL,
  `quali` text NOT NULL,
  `qualitype` text NOT NULL,
  `gradumarks` text NOT NULL,
  `_12marks` text NOT NULL,
  `_10marks` text NOT NULL,
  `state1` text NOT NULL,
  `city1` text NOT NULL,
  `state2` text NOT NULL,
  `city2` text NOT NULL,
  `state3` text NOT NULL,
  `city3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ug`
--

INSERT INTO `ug` (`names`, `mobiles`, `emails`, `states`, `citys`, `quali`, `qualitype`, `gradumarks`, `_12marks`, `_10marks`, `state1`, `city1`, `state2`, `city2`, `state3`, `city3`) VALUES
('Ganesh Shriram Jagdale', '9309553784', 'jagdaleganesh9545@gmail.com', 'Andhra Pradesh', 'Anantapur', 'Under Graduate', 'Engineering', '78', '76', '67', 'Andhra Pradesh', 'Anantapur', 'Arunachal Pradesh', 'Anjaw', 'Arunachal Pradesh', 'Anjaw');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
