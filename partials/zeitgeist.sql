-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2014 at 08:19 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zeitgeist`
--

-- --------------------------------------------------------

--
-- Table structure for table `duet_events`
--

CREATE TABLE IF NOT EXISTS `duet_events` (
  `duet_events_id` int(11) NOT NULL,
  `user_id` varchar(45) NOT NULL,
  `event_name` varchar(45) NOT NULL,
  `name1` varchar(45) NOT NULL,
  `name2` varchar(45) DEFAULT NULL,
  `participants` int(11) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`duet_events_id`),
  UNIQUE KEY `duet_events_id_UNIQUE` (`duet_events_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='For junoon and saaz';

--
-- Dumping data for table `duet_events`
--

INSERT INTO `duet_events` (`duet_events_id`, `user_id`, `event_name`, `name1`, `name2`, `participants`, `contact`, `email`) VALUES
(1, '9', 'junoon', 'Ankit Khokhar', '', 1, '2342434344', 'ankitkhokhar@iitrpr.ac.in'),
(2, '9', 'saaz', 'Ankit Khokhar', 'Aniket', 2, '2342434344', 'ankitkhokhar@iitrpr.ac.in'),
(3, '3', 'junoon', 'Aniket', ' ', 1, '9876543210', 'aniket18sachdeva@gmail.com'),
(4, '3', 'saaz', 'Aniket', ' ', 1, '9876543210', 'aniket18sachdeva@gmail.com'),
(5, '3', 'saaz', 'atri', 'mohit', 2, '8984712874', 'aniket18sachdeva@gmail.com'),
(6, '3', 'smack', 'aniket', 'rchk', 2, '9992890230', 'aniket18sachdeva@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `literary_events`
--

CREATE TABLE IF NOT EXISTS `literary_events` (
  `literary_events_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_name` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `college_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contact` varchar(15) NOT NULL,
  PRIMARY KEY (`literary_events_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `literary_events`
--

INSERT INTO `literary_events` (`literary_events_id`, `user_id`, `event_name`, `name`, `college_name`, `email`, `contact`) VALUES
(1, 9, 'conclave', 'Ankit Khokhar', 'IIT Ropar', 'ankitkhokhar@iitrpr.ac.in', ''),
(2, 9, 'blind_painting', 'Ankit Khokhar', 'IIT Ropar', 'ankitkhokhar@iitrpr.ac.in', ''),
(3, 9, 'graffiti', 'Ankit Khokhar', 'IIT Ropar', 'ankitkhokhar@iitrpr.ac.in', ''),
(5, 3, 'blind_painting', 'Aniket', 'IIT Ropar', 'aniket18sachdeva@gmail.com', '9876543210'),
(6, 3, 'conclave', 'Aniket', 'IIT Ropar', 'aniket18sachdeva@gmail.com', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `single_event`
--

CREATE TABLE IF NOT EXISTS `single_event` (
  `single_event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `college_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `event_name` varchar(45) NOT NULL,
  PRIMARY KEY (`single_event_id`),
  UNIQUE KEY `titan_event_id_UNIQUE` (`single_event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='for event titan';

--
-- Dumping data for table `single_event`
--

INSERT INTO `single_event` (`single_event_id`, `user_id`, `name`, `college_name`, `email`, `contact`, `event_name`) VALUES
(1, 3, 'Aniket', 'IIT Ropar', 'aniket18sachdeva@gmail.com', '9876543210', 'titan');

-- --------------------------------------------------------

--
-- Table structure for table `team_events`
--

CREATE TABLE IF NOT EXISTS `team_events` (
  `team_events_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_name` varchar(45) NOT NULL,
  `team_name` varchar(45) NOT NULL,
  `team_size` int(11) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `college_name` varchar(45) NOT NULL,
  `leader_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`team_events_id`),
  UNIQUE KEY `team_events_id_UNIQUE` (`team_events_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Events which include team torque and tarang';

--
-- Dumping data for table `team_events`
--

INSERT INTO `team_events` (`team_events_id`, `user_id`, `event_name`, `team_name`, `team_size`, `contact`, `college_name`, `leader_name`, `email`) VALUES
(2, 3, 'torque', 'qwqw', 1, '223324', 'IIT Ropar', 'asd', 'aniket18sachdeva@gmail.com'),
(3, 3, 'yatharth', 'lp', 2, '213132112', 'IIT Ropar', 'jsahj', 'aniket18sachdeva@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `technical_events`
--

CREATE TABLE IF NOT EXISTS `technical_events` (
  `technical_event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `name2` varchar(45) NOT NULL,
  `name3` varchar(45) NOT NULL,
  `team_name` varchar(45) NOT NULL,
  `college_name` varchar(45) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `event_name` varchar(45) NOT NULL,
  PRIMARY KEY (`technical_event_id`),
  UNIQUE KEY `dekode_event_id_UNIQUE` (`technical_event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='For technical events dekode and time lining with members upto 3';

--
-- Dumping data for table `technical_events`
--

INSERT INTO `technical_events` (`technical_event_id`, `user_id`, `name`, `name2`, `name3`, `team_name`, `college_name`, `contact`, `email`, `event_name`) VALUES
(1, 9, 'Ankit Khokhar', 'Amogh', 'Anshuman Yadav', 'Hell', 'IIT Ropar', '2342434344', 'ankitkhokhar@iitrpr.ac.in', ''),
(2, 3, 'Ankit', '', '', 'HeyBabby', 'IIT Ropar', '9876543210', 'aniket18sachdeva@gmail.com', 'timelining'),
(3, 3, 'kasjkadkj', '', '', 'sajd', 'IIT Ropar', '9876543210', 'aniket18sachdeva@gmail.com', 'dekode'),
(4, 3, 'abcd', '', '', 'dcba', 'IIT Ropar', '9876543210', 'aniket18sachdeva@gmail.com', 'timelining'),
(5, 3, 'aniket', 'sdfg', '', 'wert', 'IIT Ropar', '9876543210', 'aniket18sachdeva@gmail.com', 'dekode');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `college_name` varchar(45) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `contact`, `college_name`, `verified`) VALUES
(1, 'Aniket', 'aniket.sachdeva@gmail.com', 'vbnm', '1232378372', 'IIT Ropar', 0),
(2, 'deepak', 'deepakc@iitrpr.ac.in', '1234', '9646412888', 'IIT Ropar', 1),
(3, 'Aniket', 'aniket18sachdeva@gmail.com', 'ishq', '9876543210', 'IIT Ropar', 1),
(4, 'r', 'r@r.r', 'r', '1', 'r', 0);

-- --------------------------------------------------------

--
-- Table structure for table `verf_text`
--

CREATE TABLE IF NOT EXISTS `verf_text` (
  `user_id` int(11) NOT NULL,
  `text` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Text for verification sent in the email';

--
-- Dumping data for table `verf_text`
--

INSERT INTO `verf_text` (`user_id`, `text`) VALUES
(1, 'P4xUmVoV4aV7jfcIU8Po'),
(2, '1RU8U9Ir6JGIFOCVd8Ux'),
(3, 'U55LUoyzZSPAZtwwhFIA'),
(4, '6pUyCcKOFQls4ihdc2Fi');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `verf_text`
--
ALTER TABLE `verf_text`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
