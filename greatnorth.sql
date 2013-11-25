-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2013 at 03:00 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `greatnorth`
--
CREATE DATABASE IF NOT EXISTS `greatnorth` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `greatnorth`;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `caption` varchar(100) DEFAULT NULL,
  `services` varchar(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `image`, `caption`, `services`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Home', '\n    \n    \n    <h1>Weeeelcome to Great North Auto</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.</p><h2>What we do best is what you<span style="background-color: rgb(255, 255, 255);"> need </span>most</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>', 'image_1.jpg', 'This is a placeholder caption', '0', '2013-11-25 01:41:20', '2013-11-24 12:16:07', '0000-00-00 00:00:00'),
(2, 'About', 'About us', 'image_2.jpg', 'This is a placeholder caption', '0', '2013-11-25 01:41:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Overview', 'Overview of our services', 'image_3.jpg', 'This is a placeholder caption', '1', '2013-11-25 01:41:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Warrant of Fitness', 'Talking about Warrant of Fitness', 'image_4.jpg', 'This is a placeholder caption', '1', '2013-11-25 01:42:08', '2013-11-21 11:41:18', '0000-00-00 00:00:00'),
(5, 'Vehicle Servicing', 'Talking about Servicing', 'image_5.jpg', 'This is a placeholder caption', '1', '2013-11-25 01:42:15', '2013-11-21 11:41:45', '0000-00-00 00:00:00'),
(6, 'Brakes', 'Talking about Tyres', 'image_6.jpg', 'This is a placeholder caption', '1', '2013-11-25 01:42:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Battery', 'Talking about Battery', 'image_7.jpg', 'This is a placeholder caption', '1', '2013-11-25 01:42:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Exhaust & Muffler', 'Talking about Exhaust & Muffler', 'image_8.jpg', 'This is a placeholder caption', '1', '2013-11-25 01:45:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Things', 'dsssssddddddddddddddddd', 'image_12.jpg', 'dddssdsd', '0', '2013-11-25 01:48:43', '2013-11-24 12:48:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', '$2y$08$CfDMb9thcxnxX3pjDVBpG.dNAhG9EFiktD32fV2.2maba17HBBYMu', '2013-11-13 01:39:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'peter.smith', '$2y$08$rFx8QnbLoCMdY2PzMNiiueGdbjA2ISlD7zCE.CiAiYD7nvraxDCwe', '2013-11-21 12:19:52', '2013-11-21 12:19:52', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
