-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 04:10 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopocus`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `signUpDate` datetime NOT NULL,
  `profilePic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `email`, `password`, `signUpDate`, `profilePic`) VALUES
(0, '1947235', 'Manish', 'Bharti', 'Mbharti321@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-03-28 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(0, 'manish', 'Manish', 'Bharti', 'Manish.bharti@mca.christuniversity.in', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-03-28 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(0, 'manish_bharti', 'Mano', 'Bharti', 'Mbharti@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2021-04-16 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(0, 'ganesh780', 'Ganesh', 'Kumar', 'Ganesh@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-05-05 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(0, 'prabhu', 'Cewcewc', 'Cwece', 'Cwecewcwe@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-05-05 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(0, 'mbharti321', 'Manish', 'Bharti', 'Mbharti4321@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-05-05 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(0, 'mbharti54321', 'Manish', 'Bharti', 'Mbharti54321@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-05-05 00:00:00', 'assets/images/profile-pics/head_emerald.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
