-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2015 at 05:03 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `photo_id`, `comment`, `created`, `email`) VALUES
(1, 6, 'lovely image', '2015-10-17 04:59:04', 'salameh.yaseen@gmail.com');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photo_id`, `name`, `caption`, `created`, `user_id`) VALUES
(4, 'Desert.jpg', 'Desert', '2015-10-12 03:33:13', 0),
(5, 'Jellyfish.jpg', 'jelly fish', '2015-10-12 04:36:40', 0),
(6, 'animi.jpg', 'Animi', '2015-10-12 04:37:25', 0),
(7, 'autumn.jpg', 'Autumn', '2015-10-12 04:37:32', 0),
(8, 'ballons.jpg', 'Ballons', '2015-10-12 04:37:39', 0),
(9, 'bessfour.jpg', 'Bridge', '2015-10-12 04:37:49', 0),
(10, 'birds.jpg', 'Birds', '2015-10-12 04:37:55', 0),
(11, 'cat.jpg', 'Cat', '2015-10-12 04:38:01', 0),
(12, 'dies.jpg', 'Dies', '2015-10-12 04:38:07', 0),
(13, 'flower.jpg', 'Flower', '2015-10-12 04:38:14', 0),
(14, 'fores.jpg', 'Forest', '2015-10-12 04:38:21', 0),
(15, 'mac.jpg', 'MAC OS', '2015-10-12 04:38:32', 0),
(16, 'path.jpeg', 'Sea View', '2015-10-12 04:38:54', 0),
(17, 'tree.jpg', 'Nice Tree', '2015-10-12 04:39:03', 0),
(18, 'tuornedo.jpg', 'Turnedo', '2015-10-12 04:39:13', 0),
(19, 'win.jpg', 'Cotton Flower', '2015-10-12 04:39:28', 0);

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
