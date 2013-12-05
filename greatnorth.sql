-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2013 at 02:02 PM
-- Server version: 5.1.70-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `annakyle_greatnorth`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `image`, `caption`, `services`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Home', '\n    <h1>Welcome to Great North Auto</h1><p>We take care of you and your vehicle, taking the worry out of keeping your it up to scratch. We have an established reputation and only have fully qualified mechanics working on your vehicle.</p><h2>What we do best is what you need most</h2><p>With a high number of cars that come in and out of our doors weekly we have excellent diagnostic abilities for common problems and are able to spot inconsistencies in the way your vehicle is running before the cost mounts up. Our specialities include Warrant of Fitness, Vehicle Servicing and Brakes.</p>', 'image_1.jpg', 'Our workshop on Great North Road', '0', '2013-11-26 01:22:01', '2013-11-25 12:22:01', '0000-00-00 00:00:00'),
(2, 'About', '<p>Great North Auto was first established as a family business in 1962 by Jim Lang and his three sons. We have been faithfully servicing the local area since then, though the team has grown and technology has improved greatly.</p>\r\n<p>In 1993 Rob Lang, Jim''s oldest son, took over the ownership and operation of the workshop to continue to provide the service the locals know and trust.</p>\r\n<p>We are passionate about cars and trucks, striving to do the very best for our customers.</p>', 'image_2.jpg', 'Our team of qualified mechanics', '0', '2013-12-05 00:55:43', '2013-12-04 11:48:18', '0000-00-00 00:00:00'),
(3, 'Overview', 'Great North Auto is a fully equipped workshop that keeps up to date with diagnostic tools and new technologies. We believe car ownership should be a hassle free experience. We strive to ensure you have a reliable service that prevents avoidable breakdowns and problems. We do this using scheduled maintenance services.', 'image_3.jpg', 'Rob Lang, the company owner and operator working on an engine', '1', '2013-12-05 00:57:28', '2013-12-04 11:57:28', '0000-00-00 00:00:00'),
(4, 'Warrant of Fitness', '\n    <p>$49 for the full Warrant test</p>\n<p>We contact you if we find anything out of order before going ahead with repairs so there are no surprises when you come to pick up your vehicle.We also can do it while you wait, on appointment, which usually takes 30 minutes</p>', 'image_4.jpg', 'This is a placeholder caption', '1', '2013-12-05 00:16:28', '2013-12-04 11:16:28', '0000-00-00 00:00:00'),
(5, 'Vehicle Servicing', '<p>All vehicles benifit from frequent professional servicing, regardless of age and condition.</p>', 'image_5.jpg', 'Thorough and regular checks of all these parts will improve the life and durability of your vehicle', '1', '2013-12-05 00:18:55', '2013-12-04 11:18:55', '0000-00-00 00:00:00'),
(6, 'Brakes', '<p>If you have any concerns about your brakes, come in to see us immedietly. Brakes can degrade slowly due to general wear and tear, which makes it harder to notice over time. To improve performance can be as simple of clearing dust and debris, but our experts can assess and remedy the problem, giving you a worry-free driving experience.</p>\n<p>As brakes are an important safety issue, they are checked every time your car comes in for a Warrant of Fittness or Service.</p>', 'image_6.jpg', 'Good brakes will help you stop in time, keeping you and others safe', '1', '2013-12-05 00:20:10', '2013-12-04 11:20:10', '0000-00-00 00:00:00'),
(7, 'Battery', '<p>The battery is vital in the chain of trust in your vehicle performing the way it should. It is also a commen source of problems. We have trained technicians who will expertly fit the right battery to your vehicle.</p>\n<p>We use the latest equipment in battery testing to accurately predict how much life is left in the battery.</p>\n<p>New batteries cost from $130 incl. GST</p>', 'image_7.jpg', 'We only fit your vehicle with trusted and true battery brands', '1', '2013-12-05 00:22:02', '2013-12-04 11:22:02', '0000-00-00 00:00:00'),
(8, 'Exhaust & Muffler', 'Clean and unobstructed emissions indicates that the engine is running smoothly, is quieter and more efficient. As we are committed to respect for the environment, it''s part of our normal routine to run an emissions test during your service. We will also check to see if your system has an exhaust leak. There are carbon monoxide fumes in the emissions that could be toxic to you and your passengers if there is a leak into the cabin of the vehicle.<div><br></div><div>If you are worried about your exhaust and muffler in between times drop in and we can take a quick look free of charge.</div>', 'image_8.jpg', 'We keep your exhaust and muffler in good working order', '1', '2013-12-05 01:00:13', '2013-12-04 12:00:13', '0000-00-00 00:00:00');

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
