-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2015 at 07:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `talkshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE IF NOT EXISTS `listings` (
  `posting_id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'Posting Id',
  `Location` varchar(99) NOT NULL COMMENT 'Location',
  `Age Group` varchar(99) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `phone` int(10) NOT NULL,
  `Contacts_Email` varchar(99) NOT NULL,
  PRIMARY KEY (`posting_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `speaker`
--

CREATE TABLE IF NOT EXISTS `speaker` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `fname` varchar(99) NOT NULL COMMENT 'First Name',
  `lname` varchar(99) NOT NULL COMMENT 'Last Name',
  `uname` varchar(10) NOT NULL COMMENT 'uname',
  `password` varchar(8) NOT NULL COMMENT 'password',
  `email` varchar(99) NOT NULL COMMENT 'email',
  `address` varchar(99) NOT NULL COMMENT 'address',
  `phone` int(10) NOT NULL COMMENT 'Phone Number',
  `topics` varchar(250) NOT NULL COMMENT 'Topics/Resume',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `fname` varchar(99) NOT NULL COMMENT 'First Name',
  `lname` varchar(99) NOT NULL COMMENT 'Last Name',
  `uname` varchar(12) NOT NULL COMMENT 'Username',
  `password` varchar(8) NOT NULL COMMENT 'Password',
  `org` varchar(99) NOT NULL COMMENT 'Organization',
  `address` varchar(99) NOT NULL COMMENT 'Address',
  `phone` int(10) NOT NULL COMMENT 'Phone Number',
  `email` varchar(99) NOT NULL COMMENT 'Email',
  `age_group` char(3) NOT NULL COMMENT 'Age Group',
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
