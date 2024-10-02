-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 07:09 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `easyservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `bookingdate` date NOT NULL,
  `serviceid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `professionalid` int(11) NOT NULL,
  `servicedate` date NOT NULL,
  `amount` int(11) NOT NULL,
  `bookingstatus` varchar(11) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `bookingdate`, `serviceid`, `customerid`, `professionalid`, `servicedate`, `amount`, `bookingstatus`) VALUES
(1, '2022-12-15', 1, 4, 2, '2022-12-23', 20, 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `cityid` int(11) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(255) NOT NULL,
  `stateid` int(11) NOT NULL,
  PRIMARY KEY (`cityid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cityid`, `cityname`, `stateid`) VALUES
(1, 'Bathinda', 1),
(2, 'Ludhiana', 1),
(3, 'Jalandhar', 1),
(4, 'Amritsar', 1),
(5, 'Mumbai', 2),
(6, 'Nagpur', 2),
(7, 'Nasik', 2),
(8, 'Pune', 2),
(9, 'Bhopal', 3),
(10, 'Indore', 3),
(11, 'Betul', 3),
(12, 'Jabalpur', 3),
(13, 'Jaipur\r\n', 4),
(14, 'Udaipur', 4),
(15, 'Jodhpur', 4),
(16, 'Ajmer', 4),
(17, 'Ahmedabad', 5),
(18, 'Surat', 5),
(19, 'Gandhinagar', 5),
(20, 'Vadodara', 5),
(21, 'Delhi', 6),
(22, 'Noida', 6),
(23, 'Gurgaon', 6),
(24, 'Ghaziabad', 6);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `address`, `zipcode`) VALUES
(1, 'Akshit Arora', 'abc@gmail.com', 'abc', '546-a, club lange, model town', 141003),
(2, 'Jashandeep Singh', 'Jashan', 'Jashan', 'House no 473, St no 4, Brs Nagar, Ludhiana', 141012),
(3, 'Jashandeep Singh', 'jashan123@gmail.com', 'Jashan', 'Dugrij, Ludhiana.', 141001),
(4, 'Ashish', 'ashish@gmail.com', 'ashish', 'Ludhiana', 141012);

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE IF NOT EXISTS `professional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `about` varchar(500) NOT NULL,
  `charges` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`id`, `name`, `email`, `password`, `address`, `zipcode`, `image`, `about`, `charges`) VALUES
(1, 'Sonal', 'sonal@gmail.com', 'sonal', 'Ludhiana', 141012, 'sonal.jfif', 'I am a professional hair care specialist. Get in touch and book now for a refreshing experience.', 15),
(2, 'Jas', 'jas@gmail.com', 'jas', 'Mumbai', 141003, 'jas1.jpg', 'I am a professional carpenter. I master the art of woodwork and creations. Book your consultation now.', 20),
(3, 'Harkirat', 'kirat@gmail.com', 'kirat', 'Delhi', 152032, 'kirat.jfif', 'Hey! I am a professional make up artist and hair dresser. Get your slot now for the glam up.', 25),
(4, 'Divpreet', 'divpreet@gmail.com', 'divpreet', 'Bhatinda', 156330, 'div.jfif', 'Hello! I am a professional salon specialist. COntact me for the services.', 30);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reviewstars` int(11) NOT NULL,
  `review` varchar(255) NOT NULL,
  `professionalid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `reviewstars`, `review`, `professionalid`, `customerid`) VALUES
(2, 5, 'Got my Haircut  from him. Very friendly and Supportive', 1, 1),
(3, 4, 'Relaxing Head Massage at best price', 1, 3),
(5, 4, 'Very Good Service. In Time and At best Price', 2, 1),
(6, 4, 'Very Good Person. Simar is Honest', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `serviceid` int(11) NOT NULL AUTO_INCREMENT,
  `servicename` varchar(255) NOT NULL,
  `serve_image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  PRIMARY KEY (`serviceid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceid`, `servicename`, `serve_image`, `status`, `package`) VALUES
(1, 'Hair & Care', 'salon.png', 'available', 'womenpackage.php'),
(2, 'Saloon for Women', 'beauty.png', 'available', 'womenpackage.php'),
(3, 'Women Therapy', 'therapy.png', 'available', 'womenpackage.php'),
(4, 'Manicure & Pedicure', 'manicure.png', 'available', 'womenpackage.php'),
(5, 'Saloon for Men', 'haircut.png', 'available', 'menpackage.php'),
(6, 'Men Therapy', 'mentharapy.png', 'available', 'menpackage.php'),
(7, 'Skin Care ', 'skincare.png', 'available', 'menpackage.php'),
(8, 'Massages', 'massage.png', 'available', 'menpackage.php'),
(9, 'Pest Control', 'disinfection.png', 'available', 'otherpackages.php'),
(10, 'Carpenter', 'homerepair.png', 'available', 'otherpackages.php'),
(11, 'Plumber', 'plumber.png', 'available', 'otherpackages.php'),
(12, 'Appliance & Repair', 'tools.png', 'available', 'otherpackages.php'),
(13, 'Car Repair', 'car.png', 'available', 'otherpackages.php'),
(14, 'Floor Cleaning', 'floor.png', 'available', 'otherpackages.php'),
(15, 'Covid-19', 'covid.png', 'available', 'otherpackages.php'),
(16, 'Sofa Cleaning', 'sofa.png', 'available', 'otherpackages.php');

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE IF NOT EXISTS `service_provider` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `serviceid` int(11) NOT NULL,
  `professionalid` int(11) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`sid`, `serviceid`, `professionalid`) VALUES
(1, 1, 1),
(2, 3, 1),
(3, 4, 2),
(4, 5, 2),
(5, 13, 4),
(6, 14, 4),
(7, 15, 4),
(8, 2, 3),
(9, 3, 3),
(10, 7, 3),
(11, 2, 1),
(12, 6, 2),
(13, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `stateid` int(11) NOT NULL AUTO_INCREMENT,
  `states` varchar(255) NOT NULL,
  PRIMARY KEY (`stateid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`stateid`, `states`) VALUES
(1, 'Punjab\r\n'),
(2, 'Maharashtra'),
(3, 'Madhya Pradesh'),
(4, 'Rajasthan'),
(5, 'Gujarat'),
(6, 'Delhi - NCR');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
