-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2015 at 04:43 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flickr`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(3) NOT NULL AUTO_INCREMENT,
  `photo_id` int(3) NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `photo_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `user_id` int(3) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photo_id`, `name`, `caption`, `created`, `user_id`) VALUES
(8, 'Desert.jpg', 'test', '0000-00-00 00:00:00', 0),
(9, 'Lighthouse.jpg', 'issa', '2015-10-14 03:57:34', 0),
(11, 'animi.jpg', 'Claods', '2015-10-14 04:38:37', 0),
(12, 'autumn.jpg', 'Autumn', '2015-10-14 04:38:47', 0),
(13, 'ballons.jpg', 'Ballons', '2015-10-14 04:39:00', 0),
(14, 'bessfour.jpg', 'Bidge', '2015-10-14 04:39:07', 0),
(15, 'birds.jpg', 'Birds', '2015-10-14 04:39:15', 0),
(16, 'cat.jpg', 'Cat', '2015-10-14 04:39:22', 0),
(17, 'dies.jpg', '', '2015-10-14 04:39:26', 0),
(18, 'flower.jpg', 'Flower', '2015-10-14 04:39:33', 0),
(19, 'fores.jpg', 'Foest.', '2015-10-14 04:39:39', 0),
(20, 'mac.jpg', 'Mac Icon', '2015-10-14 04:39:47', 0),
(21, 'path.jpeg', 'Path', '2015-10-14 04:40:54', 0),
(22, 'tree.jpg', 'Tree', '2015-10-14 04:41:48', 0),
(23, 'tuornedo.jpg', 'Tunedo', '2015-10-14 04:41:58', 0),
(24, 'win.jpg', 'Windows', '2015-10-14 04:42:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`) VALUES
(1, 'admin', '123456', 'mohammad', 'husni');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
