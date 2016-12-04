-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2016 at 11:55 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `myinput2`
--

CREATE TABLE `myinput2` (
  `id` int(40) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `cellphone` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `myinput2`
--

INSERT INTO `myinput2` (`id`, `name`, `nickname`, `email`, `home_address`, `comment`, `gender`, `cellphone`) VALUES
(1, 'Jheriza Tan', 'Cheri-tan', 'kitsunenoshrio@gmail.com', 'Paranaque Las Pinas BF Homes', 'Hi crush ni alpe na di ko aagawin kahit kelan kasi masakit', 'Female', '8296339'),
(3, 'Allyssa Millar', 'Allyssa', 'jinxmugen@gmail.com', 'Makati', 'test', 'Female', '123123'),
(6, 'Nieva Jane Balungcas', 'Nieva', 'johnbrianmgutierrez@yahoo.com', 'Somewhere in LRT', 'AB Psychology and Miss Psychology ', 'Female', '8296339');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myinput2`
--
ALTER TABLE `myinput2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myinput2`
--
ALTER TABLE `myinput2`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
