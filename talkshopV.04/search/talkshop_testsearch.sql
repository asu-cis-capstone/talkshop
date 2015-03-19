-- phpMyAdmin SQL Dump 
-- version 4.2.10 
-- http://www.phpmyadmin.net 
-- 
-- Host: localhost:8889 
-- Generation Time: Mar 05, 2015 at 08:04 PM 
-- Server version: 5.5.38 
-- PHP Version: 5.6.2  

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; 
SET time_zone = "+00:00";  

-- 
-- Database: `Talk Shop` 
--  
-- --------------------------------------------------------  
-- 
-- Table structure for table `Speakers` 
--  

CREATE TABLE `Speakers` (   
`UUID` int(255) NOT NULL,   
`Profession` varchar(99) NOT NULL,   
`Age Group` varchar(15) NOT NULL,   
`Topic` varchar(99) NOT NULL,   
`Topic2` varchar(99) DEFAULT NULL,   
`Topic3` varchar(99) DEFAULT NULL,   
`BIO` varchar(1300) NOT NULL,   
`FBURL` varchar(99) DEFAULT NULL,   
`TURL` varchar(99) DEFAULT NULL,   
`GURL` varchar(99) DEFAULT NULL,   
`LURL` varchar(99) DEFAULT NULL,   
`picture` varchar(99) NOT NULL ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;  

-- --------------------------------------------------------  

-- 
-- Table structure for table `Teachers` 
--  

CREATE TABLE `Teachers` (  
`UUID` int(255) DEFAULT NULL ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;  

-- --------------------------------------------------------  

-- 
-- Table structure for table `Users` 
--  

CREATE TABLE `Users` (   
`Email` varchar(99) NOT NULL,   
`FName` varchar(99) NOT NULL,   
`Lname` varchar(99) NOT NULL,   
`pword` varchar(10) NOT NULL,   
`address1` varchar(99) NOT NULL,   
`address2` varchar(25) DEFAULT NULL,   
`city` varchar(99) NOT NULL,   
`state` varchar(2) NOT NULL,   
`zip` int(6) NOT NULL,   
`phone` decimal(10,0) NOT NULL, 
`UUID` int(255) NOT NULL ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;  

-- 
-- Indexes for dumped tables 
-- 
 
-- 
-- Indexes for table `Speakers` 
-- 

ALTER TABLE `Speakers`  ADD KEY `UUID` (`UUID`);  

-- 
-- Indexes for table `Teachers` 
-- 

ALTER TABLE `Teachers`  ADD KEY `UUID` (`UUID`);  

-- 
-- Indexes for table `Users` 
-- 

ALTER TABLE `Users`  ADD PRIMARY KEY (`UUID`);  

--
-- AUTO_INCREMENT for dumped tables 
--
  
-- 
-- AUTO_INCREMENT for table `Users` 
-- 

ALTER TABLE `Users` MODIFY `UUID` int(255) NOT NULL AUTO_INCREMENT; 

-- 
-- Constraints for dumped tables 
--  

-- 
-- Constraints for table `Speakers` 
-- 

ALTER TABLE `Speakers` ADD CONSTRAINT `UUID` FOREIGN KEY (`UUID`) REFERENCES `Users` (`UUID`);  

-- 
-- Constraints for table `Teachers` 
-- 

ALTER TABLE `Teachers` ADD CONSTRAINT `UUIS` FOREIGN KEY (`UUID`) REFERENCES `Users` (`UUID`);