-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 04:32 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dating`
--

-- --------------------------------------------------------

--
-- Table structure for table `dateplan`
--

CREATE TABLE `dateplan` (
  `id` int(225) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `partnerid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dateplan`
--

INSERT INTO `dateplan` (`id`, `date_time`, `location`, `partnerid`) VALUES
(8, '2017-03-31 12:00:00.000000', 'delho', '3353'),
(9, '2017/03/31 12:08', 'indore', '7575'),
(10, '26/05/2017 13:10', 'qwert', '9098098');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `view` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `comment` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `view`, `rate`, `comment`) VALUES
(7, 'swati choudhary', 'yes', 'good', 'this website is very nice....'),
(8, 'kajal', 'yes', 'good', 'good'),
(9, 'sukanto', 'yes', 'good', 'nice'),
(10, 'sukanto', 'yes', 'good', 'nice'),
(11, '', '', 'select', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(255) NOT NULL,
  `register_id` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `complexion` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `photo_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `register_id`, `gender`, `age`, `name`, `complexion`, `city`, `height`, `religion`, `photo_path`) VALUES
(11, 0, 'female', 21, 'swati choudhary', 'whitish', 'indore', '5.2', 'hindu', 'profile_picture/58d9eb7d53223IMG_20161017_114307.jpg'),
(12, 0, 'female', 23, 'kajal', 'fair', 'indore', '5.6', 'muslim', 'profile_picture/58da6b0c4530558d93a5bf2e6bimg6.jpg'),
(13, 0, 'female', 21, 'priya', 'fair', 'delhi', '5.5', 'hindu', 'profile_picture/58da6e9d20d2558d93f3ee8ffaimg3.jpg'),
(15, 0, 'male', 21, 'sukanta', 'black', 'delhi', '5.6', 'hindu', 'profile_picture/58da8d203eacc58d94e23b6cd5img7.jpg'),
(16, 0, 'male', 22, 'yash', 'fair', 'indore', '192', 'hindu', 'profile_picture/58de48aba1553img1.jpg'),
(17, 0, 'male', 22, 'yash', 'fair', 'indore', '22', 'hindu', 'profile_picture/58de504eb1739img1.jpg'),
(18, 0, 'male', 22, 'yash', 'fair', 'indore', '22', 'hindu', 'profile_picture/58de52171ee07img1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `offer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `email`, `offer`) VALUES
(63, 'yash', 'yash', 'yashsharma1622@gmail.com', ''),
(64, 'yasha', 'yash', 'yashsharma1622@gmail.com', ''),
(65, 'dd', '123', 'yashsharma1622@gmail.com', ''),
(66, 'dd', '123', 'yashsharma1622@gmail.com', ''),
(67, 'dd', '111111111111111', 'yashsharma1622@gmail.com', ''),
(68, 'swati', 'swati', 'Swati1603@gmail.com', ''),
(69, 'q', 'q', '', 'q@gmail.com'),
(70, 'q22', 'q', '', 'q@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dateplan`
--
ALTER TABLE `dateplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dateplan`
--
ALTER TABLE `dateplan`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
