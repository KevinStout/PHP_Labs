-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 09:25 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtbforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum_category`
--

CREATE TABLE `forum_category` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(150) DEFAULT NULL,
  `category_create_time` datetime DEFAULT NULL,
  `category_owner` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_category`
--

INSERT INTO `forum_category` (`category_id`, `category_title`, `category_create_time`, `category_owner`) VALUES
(1, 'dafadfs', '2018-04-08 17:57:20', 'stuffandthings@gmail.com'),
(2, 'cool', '2018-04-08 17:58:40', 'stuffandthings@gmail.com'),
(3, 'bike for life', '2018-04-08 18:22:55', 'stout14@mail.nmc.edu');

-- --------------------------------------------------------

--
-- Table structure for table `forum_thread`
--

CREATE TABLE `forum_thread` (
  `thread_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `thread_text` text,
  `thread_create_time` datetime DEFAULT NULL,
  `thread_owner` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_thread`
--

INSERT INTO `forum_thread` (`thread_id`, `category_id`, `thread_text`, `thread_create_time`, `thread_owner`) VALUES
(1, 1, '', '2018-04-08 17:57:20', 'stuffandthings@gmail.com'),
(2, 2, 'hello', '2018-04-08 17:58:41', 'stuffandthings@gmail.com'),
(3, 2, 'cool indeed', '2018-04-08 18:06:40', 'stout14@mail.nmc.edu'),
(4, 3, 'ride hard live free', '2018-04-08 18:22:55', 'stout14@mail.nmc.edu'),
(5, 3, 'hell ya!!!!', '2018-04-08 18:24:15', 'stfsdfs@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forum_category`
--
ALTER TABLE `forum_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `forum_thread`
--
ALTER TABLE `forum_thread`
  ADD PRIMARY KEY (`thread_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum_category`
--
ALTER TABLE `forum_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `forum_thread`
--
ALTER TABLE `forum_thread`
  MODIFY `thread_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
