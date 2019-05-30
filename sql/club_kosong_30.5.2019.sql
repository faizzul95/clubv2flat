-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2019 at 06:21 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity` (
  `act_id` int(11) NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `act_post_by` text,
  `act_description` text NOT NULL,
  `act_date` date NOT NULL,
  `act_time` time NOT NULL,
  `act_venue` varchar(100) NOT NULL,
  `act_category` enum('member','guest') NOT NULL,
  `act_image` varchar(150) DEFAULT NULL,
  `act_fee` int(11) DEFAULT NULL,
  PRIMARY KEY (`act_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `application_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `application_date` date DEFAULT NULL,
  `application_evaluate_date` date DEFAULT NULL,
  `application_status` enum('pending','approve','reject','') NOT NULL,
  PRIMARY KEY (`app_id`),
  KEY `user_application` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`app_id`, `application_id`, `user_id`, `application_date`, `application_evaluate_date`, `application_status`) VALUES
(1, 'CM000001', 1, '2019-05-29', NULL, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(150) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_comment` text NOT NULL,
  `contact_date_issue` date DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `join_member_activity`
--

DROP TABLE IF EXISTS `join_member_activity`;
CREATE TABLE IF NOT EXISTS `join_member_activity` (
  `member_activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `act_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `join_status` enum('attend','not attend') DEFAULT NULL,
  PRIMARY KEY (`member_activity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `join_public_activity`
--

DROP TABLE IF EXISTS `join_public_activity`;
CREATE TABLE IF NOT EXISTS `join_public_activity` (
  `public_activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `act_id` int(11) DEFAULT NULL,
  `public_name` varchar(100) DEFAULT NULL,
  `public_ic_no` varchar(12) DEFAULT NULL,
  `public_contact_no` int(11) DEFAULT NULL,
  `public_email` varchar(100) DEFAULT NULL,
  `public_apply_date` date DEFAULT NULL,
  PRIMARY KEY (`public_activity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_username` varchar(150) DEFAULT NULL,
  `usr_password` varchar(255) DEFAULT NULL,
  `usr_role` varchar(11) DEFAULT NULL,
  `usr_status` enum('active','inactive','pending','') DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_to_user_level` (`usr_role`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `usr_username`, `usr_password`, `usr_role`, `usr_status`) VALUES
(1, 'admin', '$2y$10$Ec0VOQuG4RB7vXdNqV2Oa.SEmf7HovNhejKtM0ANNq5dfjMPXaw9O', 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

DROP TABLE IF EXISTS `userlog`;
CREATE TABLE IF NOT EXISTS `userlog` (
  `username` varchar(10) NOT NULL,
  `PHP_SELF` varchar(255) NOT NULL,
  `SERVER_NAME` varchar(255) NOT NULL,
  `HTTP_HOST` varchar(255) NOT NULL,
  `REQUEST_TIME` varchar(255) NOT NULL,
  `HTTP_USER_AGENT` varchar(255) NOT NULL,
  `SCRIPT_NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

DROP TABLE IF EXISTS `user_detail`;
CREATE TABLE IF NOT EXISTS `user_detail` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `detail_fullname` varchar(255) NOT NULL,
  `detail_phone` varchar(11) NOT NULL,
  `detail_email` varchar(150) DEFAULT NULL,
  `detail_address` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`detail_id`),
  KEY `user_detail` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`detail_id`, `detail_fullname`, `detail_phone`, `detail_email`, `detail_address`, `user_id`) VALUES
(1, 'Administrator', '0189031045', 'fahmy_izwan@gmail.com', 'PT20320K, Taman Permint Perdana Fasa 3, Kg Batin\r\nSeberang Takir, 21300 Kuala Terengganu, Terengganu', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `user_application` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD CONSTRAINT `user_detail` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;