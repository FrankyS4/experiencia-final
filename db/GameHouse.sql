-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2017 at 07:22 AM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `GameHouse`
--
CREATE DATABASE IF NOT EXISTS `GameHouse` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `GameHouse`;

-- --------------------------------------------------------

--
-- Table structure for table `juego`
--

CREATE TABLE `juego` (
  `fabricante` varchar(50) DEFAULT NULL,
  `consola` varchar(30) DEFAULT NULL,
  `titulo` varchar(50) NOT NULL,
  `unidades` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `juego`
--

INSERT INTO `juego` (`fabricante`, `consola`, `titulo`, `unidades`) VALUES
('capcom', 'ps2', 'juego1', 5),
('kojima', 'ps3', 'metal gear rising', 2),
('gamebreak', 'sega', 'pokemon', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`titulo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
