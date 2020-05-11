-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2018 at 08:34 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cleanliness`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `adminname` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `adminname`) VALUES
(1, 'admin@gmail.com', 'Admin@123', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complaintdate` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `userdepartment` varchar(100) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `crimedate` varchar(10) NOT NULL,
  `accused` int(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `complaintdate`, `user_id`, `userdepartment`, `Username`, `crimedate`, `accused`, `department`, `area`, `email`, `description`, `photo`, `status`) VALUES
(15, '18/03/04', 10, 'Shrimad Rajchandra Institute of Management and Computer Application', 'Hariom', '03/05/2018', 2, 'Maliba Pharmacy College', 'DOM', 'hariompandit26@gmail.com', 'Test', '2r9tad4kn7.jpg,7942nrdakt.jpg,an7d924trk.png,d42nar79tk.png', 'Active'),
(16, '18/03/04', 12, 'Babu Madhav Institute of Information Technology', 'Priyank', '03/06/2018', 5, 'Department of Mathematics', 'DOM', 'priyank5897@gmail.com', 'Test', 'd4t97rna2k.jpg,atrn92dk74.jpg', 'Active'),
(17, '18/03/04', 10, 'Shrimad Rajchandra Institute of Management and Computer Application', 'Hariom', '03/07/2018', 1, 'Babu Madhav Institute of Information Technology', 'DOM', 'hariompandit26@gmail.com', 'Test', 'k29dt7ar4n.png,d7knr24t9a.jpg', 'Active'),
(18, '18/03/04', 12, 'Babu Madhav Institute of Information Technology', 'Priyank', '03/14/2018', 5, 'Bhulabhai Vanmalibhai Patel Institute of Business Management, Computer & Information Technology', 'DOM', 'priyank5897@gmail.com', 'Test', 'kna2t9r47d.jpg,4k7n2rda9t.jpg', 'Active'),
(19, '18/03/04', 11, 'Shrimad Rajchandra Institute of Management and Computer Application', 'Deep', '03/14/2018', 3, 'Shrimad Rajchandra College of Physiotherapy', 'DOM', 'deeppatel710@gmail.com', 'Test', 'd7k24rn9ta.png,4rnkt92d7a.png,r94t2ak7nd.png', 'Active'),
(20, '18/03/04', 11, 'Shrimad Rajchandra Institute of Management and Computer Application', 'Deep', '03/10/2018', 6, 'C. G. Bhakta Institute of Biotechnology', 'DOM', 'deeppatel710@gmail.com', 'Test', '92an47rdkt.png,4nad9k2rt7.png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE IF NOT EXISTS `coordinator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`id`, `email`, `password`, `status`) VALUES
(1, 'crd@gmail.com', 'Crd@12345', 'Active'),
(2, 'coordinator@gmail.com', 'Crd@12345', 'Pending'),
(3, 'coor@gmail.com', 'Crd@123456', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE IF NOT EXISTS `userregister` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `que` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`user_id`, `fullname`, `username`, `usertype`, `gender`, `mobile`, `dob`, `address`, `city`, `state`, `country`, `zipcode`, `email`, `password`, `department`, `que`, `ans`, `status`) VALUES
(10, 'Hariom Ishvarbhai Pandit', 'Hariom', 'Student', 'Male', '8347661668', '09/21/1995', 'Desara', 'Bilimora', 'Gujarat', 'India', 396321, 'hariompandit26@gmail.com', 'Hariom@12345', 'Shrimad Rajchandra Institute of Management and Computer Application', 'What is Your Childhood Name?', 'lalu', 'Active'),
(11, 'Deep Patel', 'Deep', 'Student', 'Male', '9988774455', '02/21/2018', 'Ena', 'Bardoli', 'Gujarat', 'India', 396321, 'deeppatel710@gmail.com', 'Deep@12345', 'Shrimad Rajchandra Institute of Management and Computer Application', 'What is Your Childhood Name?', 'depu', 'Active'),
(12, 'Priyank Patel', 'Priyank', 'Student', 'Male', '8899887777', '03/07/2018', 'Bardoli', 'Bardoli', 'Gujarat', 'India', 396321, 'priyank5897@gmail.com', 'Priyank@123', 'Babu Madhav Institute of Information Technology', 'What is Your Childhood Name?', 'priyank', 'Active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
