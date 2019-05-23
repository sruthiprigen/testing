-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2019 at 06:24 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_master`
--

CREATE TABLE IF NOT EXISTS `application_master` (
  `ApplicationId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Resume` varchar(200) NOT NULL,
  `InterviewDate` date NOT NULL,
  PRIMARY KEY (`ApplicationId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `application_master`
--

INSERT INTO `application_master` (`ApplicationId`, `JobSeekId`, `JobId`, `JobTitle`, `Status`, `Resume`, `InterviewDate`) VALUES
(18, 7, 8, 'Accounting', 'Approve', 'templatemo_ads.jpg', '2019-05-22'),
(22, 9, 8, 'Accounting', 'Reject', 'templatemo_ads.jpg', '2019-05-15'),
(23, 8, 13, 'a', 'Approve', 'templatemo_055_blog.jpg', '2019-05-22'),
(24, 10, 11, ' Software Trainee', 'Apply', 'templatemo_062_white.jpg', '0000-00-00'),
(25, 10, 13, 'a', 'Apply', 'templatemo_062_white.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `employer_reg`
--

CREATE TABLE IF NOT EXISTS `employer_reg` (
  `EmployerId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `ContactPerson` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Area_Work` varchar(40) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`EmployerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `employer_reg`
--

INSERT INTO `employer_reg` (`EmployerId`, `CompanyName`, `ContactPerson`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Status`, `UserName`, `Password`) VALUES
(8, 'abc', 'anu', 'no.7688,kannur', 'kannur', 'abc@gmail.com', 9874563210, 'accounting', 'Approve', 'anu', 'anu'),
(9, 'd', 'd', 'd', 'd', 'd@gmail.com', 9874563210, 'd', 'Reject', 'd', 'd'),
(10, 'TCS', 'ANJU', 'NO.153,CKNAGASR,BANGALORE', 'BANGALORE', 'anju@gmail.com', 9865320147, 'software trainee', 'Approve', 'anju', '123');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_reg`
--

CREATE TABLE IF NOT EXISTS `jobseeker_reg` (
  `JobSeekId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekerName` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`JobSeekId`),
  KEY `JobSeekId` (`JobSeekId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `jobseeker_reg`
--

INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Gender`, `Status`, `UserName`, `Password`) VALUES
(7, 'abi', 'zxcvb', 'kannur', 'abi@gmail.com', 3210654987, 'B.B.A', 'Male', 'pending', 'abi', 'abi'),
(8, 'a', 'a', 'a', 'a@gmail.com', 123654987, 'M.B.A', 'Female', 'pending', 'a', 'a'),
(9, 'b', 'b', 'b', 'b', 0, 'B.C.A', 'Male', 'pending', 'b', 'b'),
(10, 'ammu', 'no.543,bangalore', 'BANGALORE', 'ammu@gmail.com', 9638527410, 'B.Sc.I.T', 'Female', 'pending', 'ammu', 'ammu123');

-- --------------------------------------------------------

--
-- Table structure for table `job_master`
--

CREATE TABLE IF NOT EXISTS `job_master` (
  `JobId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`JobId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `job_master`
--

INSERT INTO `job_master` (`JobId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`) VALUES
(8, 'abc', 'Accounting', 5, 'B.B.A', 'freshers invited'),
(9, 'abc', 'a', 0, 'a', 'a'),
(11, 'TCS', ' Software Trainee', 2, 'B.Sc.I.T', 'php developer'),
(13, 'TCS', 'a', 1, 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE IF NOT EXISTS `user_master` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`UserId`, `UserName`, `Password`) VALUES
(6, 'admin', '123'),
(10, 'xyz', 'xyz');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
