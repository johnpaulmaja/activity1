-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 09:07 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rss`
--

-- --------------------------------------------------------

--
-- Table structure for table `rss_info`
--

CREATE TABLE `rss_info` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rss_info`
--

INSERT INTO `rss_info` (`id`, `title`, `link`, `description`) VALUES
(1, 'Cnn-news', 'Cnn.com.ph', 'News all over the world\r\n'),
(2, 'GoogleNews', 'Googlenews.com.ph', 'Google new updates all over the world\r\n'),
(3, 'Facebook', 'Facebook.com', 'Trending of news'),
(4, 'Twitter', 'Twitter.com.ph', 'New tweets from pinoy celebrities');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rss_info`
--
ALTER TABLE `rss_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rss_info`
--
ALTER TABLE `rss_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
