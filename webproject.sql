-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 04:34 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingcourts`
--

CREATE TABLE `bookingcourts` (
  `Sport` varchar(100) NOT NULL,
  `noOfCourts` int(3) NOT NULL,
  `fDate` date NOT NULL,
  `timeFrom` time NOT NULL,
  `timeTo` time NOT NULL,
  `noOfPlayers` int(4) NOT NULL,
  `couchNeed` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingcourts`
--

INSERT INTO `bookingcourts` (`Sport`, `noOfCourts`, `fDate`, `timeFrom`, `timeTo`, `noOfPlayers`, `couchNeed`) VALUES
('Tennis', 0, '2018-07-11', '00:00:00', '00:00:00', 3, '0'),
('Badminton', 0, '2018-07-04', '00:00:00', '00:00:00', 3, '0'),
('Badminton', 0, '2018-07-01', '00:00:00', '00:00:00', 10, '0'),
('Badminton', 0, '2018-07-12', '00:00:00', '00:00:00', 3, '0'),
('Badminton', 0, '2018-07-12', '00:00:00', '00:00:00', 10, '0'),
('Badminton', 0, '2018-07-13', '17:30:00', '00:00:00', 7, '0'),
('Badminton', 0, '2018-07-17', '07:00:00', '09:00:00', 5, 'Yes'),
('Table Tennis', 0, '2018-06-13', '15:00:00', '18:00:00', 6, 'Yes'),
('Tennis', 1, '2018-08-09', '16:00:00', '18:00:00', 2, 'Yes'),
('Badminton', 1, '2018-07-17', '07:00:00', '08:00:00', 5, 'Yes'),
('Badminton', 1, '2018-07-17', '07:00:00', '09:00:00', 2, 'Yes'),
('Badminton', 3, '2018-07-17', '07:00:00', '09:00:00', 3, 'Yes'),
('Badminton', 3, '2018-07-17', '07:00:00', '09:00:00', 5, 'Yes'),
('Badminton', 1, '2018-07-17', '07:00:00', '09:00:00', 3, 'Yes'),
('Badminton', 1, '2018-07-17', '07:00:00', '09:00:00', 3, 'Yes'),
('Badminton', 1, '2018-07-17', '07:00:00', '09:00:00', 3, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileNumber` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`fname`, `lname`, `email`, `mobileNumber`, `password`) VALUES
('heshani', 'Bandaranayake', 'heshanbandaranayake@gmail.com', '0812384339', '123@srilanka'),
('Imesha', 'Bandaranayake', 'imebandaranayake@gmail.com', '0812384339', 'imeshabandaranayake'),
('Imesha', 'Bandaranayake', 'imebandaranayake@gmail.com', '0812384339', 'imeshabandaranayake');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
