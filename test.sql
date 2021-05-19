-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 19, 2021 at 11:17 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `lastname`, `phone`) VALUES
(1, 'Askar', 'Askar', '7071112233'),
(2, 'Aidyn', 'Altay', '7071234545'),
(3, 'Nura', 'Nura', '7077778899'),
(4, 'Нурхан', 'Кайролла', '7777555888'),
(5, 'Адиль', 'Казкенов', '87075477485'),
(6, 'Кыран', 'Талапбек', '8702456789'),
(7, 'Султан', 'Альмухан', '87759638521'),
(8, 'Шынгыс', 'Самархан', '87075472799'),
(9, 'Адильхан', 'Нургалиев', '87779658585'),
(10, 'Айдос', 'Болат', '87074415263'),
(11, 'Бекзат', 'Сагынтай', '87005256262'),
(12, 'Джони', 'Касымов', '7715263666'),
(13, 'Том', 'Харди', '87075472799'),
(14, 'Джонни', 'Дэп', '87077748596'),
(15, 'Сержан', 'Братан', '87056362666');

-- --------------------------------------------------------

--
-- Table structure for table `mycontacts`
--

CREATE TABLE `mycontacts` (
  `myPhone` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mycontacts`
--

INSERT INTO `mycontacts` (`myPhone`, `name`, `lastname`, `phone`) VALUES
('7075472799', 'Askar', 'Askar', '7071112233'),
('7075472799', 'Askar', 'Askar', '7071112233'),
('7075472799', 'Aidyn', 'Altay', '7071234545'),
('7075472799', 'Nura', 'Nura', '7077778899'),
('7075472799', 'Aidyn', 'Altay', '7071234545'),
('87075472799', 'Aidyn', 'Altay', '7071234545'),
('87075472799', 'Askar', 'Askar', '7071112233'),
('87075472799', 'Нурхан', 'Кайролла', '7777555888'),
('87075472799', 'Кыран', 'Талапбек', '8702456789');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `phone`, `pass`) VALUES
(1, 'Zhans@gmail.com', '7075472799', 'aaa'),
(2, 'chingisss01@gmail.com', '87075472799', 'qqq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
