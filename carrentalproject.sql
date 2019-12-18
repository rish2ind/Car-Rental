-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 01:16 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carrentalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `Name`) VALUES
(1, 'Rishabh@123', 'Rishabh12345', 'Rishabh Mathur');

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE IF NOT EXISTS `car_details` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `pic` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `seat` int(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `bags` int(10) NOT NULL,
  `minimum` varchar(100) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`id`, `pic`, `name`, `seat`, `type`, `bags`, `minimum`, `rate`, `price`) VALUES
(3, 'honda.jpg', 'Honda City', 5, 'Sedan', 4, '1,000 for 100 KM', '15 Rs./KM', 1000),
(4, 'hyundai.jpg', 'Maruti Alto K10', 5, 'Mini', 2, '900 for 100 KM', '10 Rs./KM', 900),
(5, 'mahindra1.jpg', 'Hyundai Creta', 5, 'SUV', 4, '1,500 for 100 KM', '20 Rs./KM', 1500),
(6, 'tata.jpg', 'TATA Safari', 9, 'SUV', 4, '2,500 for 100 KM', '30 Rs./KM', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `driver_details`
--

CREATE TABLE IF NOT EXISTS `driver_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Mobile` bigint(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `driver_details`
--

INSERT INTO `driver_details` (`id`, `Name`, `Mobile`) VALUES
(1, 'Rahul', 8560838179);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'Rishabh Mathur', 'mathur.rishabh123@gmail.com', 8756098123, 'Rishabh2ind'),
(2, 'Himanshu ', 'himanshu@gmail.com', 1234567890, 'himanshu'),
(3, 'Hemant Singh', 'hemant@gmail.com', 9876890978, 'hemant');

-- --------------------------------------------------------

--
-- Table structure for table `user_journey`
--

CREATE TABLE IF NOT EXISTS `user_journey` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `booking_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pick_date` varchar(20) NOT NULL,
  `drop_date` varchar(20) NOT NULL,
  `card_number` bigint(15) NOT NULL,
  `CVV` int(5) NOT NULL,
  `expire` varchar(255) NOT NULL,
  `Drop_location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_journey`
--

INSERT INTO `user_journey` (`id`, `booking_id`, `name`, `email`, `mobile`, `address`, `pick_date`, `drop_date`, `card_number`, `CVV`, `expire`, `Drop_location`) VALUES
(1, 25117, 'Rishabh Mathur', 'mathur.rishabh123@gmail.com', 8560838257, 'Pratap nagar', '10/11/2019', '10/15/2019', 1234567890123456, 543, '12/2028', 'Ajmer'),
(3, 25117, 'Rishabh Mathur', 'mathur.rishabh123@gmail.com', 8756098123, 'Jaipur', '10/22/2019', '10/24/2019', 1234567890123456, 543, '12/2028', 'Ajmer'),
(4, 25117, 'Rishabh Mathur', 'mathur.rishabh123@gmail.com', 8756098123, 'Ajmer Sharif Dargah, dargah shareef, Diggi Bazaar, Ajmer, Rajasthan', '11/28/2019', '11/29/2019', 1234567890123456, 543, '12/2028', 'Jaipur'),
(5, 25117, 'Rishabh Mathur', 'mathur.rishabh123@gmail.com', 8756098123, 'Pratap Nagar, Jaipur, Rajasthan, India', '11/30/2019', '12/03/2019', 1234567890123456, 543, '12/2028', 'Ajmer'),
(6, 25117, 'Rishabh Mathur', 'mathur.rishabh123@gmail.com', 8756098123, 'Jaipur', '04-12-2019', '06-12-2019', 1234567890123456, 543, '12/2028', 'Kashmir'),
(7, 79852, 'Hemant Singh', 'hemant@gmail.com', 9876890978, 'Jaipur, Rajasthan, India', '04-12-2019', '13-12-2019', 1234567890123456, 567, '12/2028', 'Delhi'),
(8, 0, 'Rishabh Mathur', 'mathur.rishabh123@gmail.com', 8756098123, 'Kolkata, West Bengal, India', '18-12-2019', '20-12-2019', 0, 0, '', 'Goa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
