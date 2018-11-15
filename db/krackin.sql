-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2018 at 02:52 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krackin`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_master`
--

CREATE TABLE `course_master` (
  `origin` int(11) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_type` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_master`
--

INSERT INTO `course_master` (`origin`, `course_id`, `course_name`, `course_type`, `updated_at`, `created_at`) VALUES
(6, 'FlptMGk3EeSiViIACw8GlA', 'Design: Creation of Artifacts in Society', 'v2.ondemand', '2018-11-15 02:30:28', '2018-11-15 02:30:28'),
(5, 'v9CQdBkhEeWjrA6seF25aw', 'Modern Art & Ideas', 'v2.ondemand', '2018-11-15 02:29:47', '2018-11-15 02:29:47'),
(4, '69Bku0KoEeWZtA4u62x6lQ', 'Gamification', 'v2.ondemand', '2018-11-15 02:28:21', '2018-11-15 02:28:21'),
(7, '5zjIsJq-EeW_wArffOXkOw', 'Vital Signs: Understanding What the Body Is Telling Us', 'v2.ondemand', '2018-11-15 02:51:35', '2018-11-15 02:51:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_master`
--
ALTER TABLE `course_master`
  ADD PRIMARY KEY (`origin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_master`
--
ALTER TABLE `course_master`
  MODIFY `origin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
