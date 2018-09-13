-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2018 at 06:36 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `diaries`
--

CREATE TABLE `diaries` (
  `diary_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `diary_datecreated` date NOT NULL,
  `diary_label` varchar(50) NOT NULL,
  `diary_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diaries`
--

INSERT INTO `diaries` (`diary_id`, `owner_id`, `diary_datecreated`, `diary_label`, `diary_status`) VALUES
(1, 0, '0000-00-00', 'samolp', 0),
(2, 0, '0000-00-00', 'sample455', 0),
(3, 0, '0000-00-00', 'sample0909', 0),
(4, 0, '0000-00-00', 'sample123', 0),
(5, 0, '0000-00-00', 'sample1234', 0),
(6, 0, '0000-00-00', 'another diary', 0),
(7, 0, '0000-00-00', 'new diary', 0),
(8, 0, '0000-00-00', 'new', 0),
(9, 0, '0000-00-00', 'edit', 0),
(10, 0, '0000-00-00', 'edit 2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `owner_id` int(11) NOT NULL,
  `owner_lastname` varchar(50) NOT NULL,
  `owner_firstname` varchar(50) NOT NULL,
  `owner_mi` varchar(5) NOT NULL,
  `owner_username` varchar(50) NOT NULL,
  `owner_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`owner_id`, `owner_lastname`, `owner_firstname`, `owner_mi`, `owner_username`, `owner_password`) VALUES
(1, 'sample', 'demo', 's', 'demo', 'demo'),
(2, 'bogo', 'bogo', 'bogo', 'bogo', 'bogo'),
(3, 'jay', 'jayj', 'j', 'jay123', 'jay'),
(4, 'demo', 'sample', 's', 'sample', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `story_id` int(11) NOT NULL,
  `diary_id` int(11) NOT NULL,
  `story_date` varchar(20) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `story_title` varchar(100) NOT NULL,
  `story_content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diaries`
--
ALTER TABLE `diaries`
  ADD PRIMARY KEY (`diary_id`),
  ADD UNIQUE KEY `diary_label` (`diary_label`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`story_id`),
  ADD UNIQUE KEY `story_title` (`story_title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diaries`
--
ALTER TABLE `diaries`
  MODIFY `diary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
