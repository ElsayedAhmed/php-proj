-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2016 at 04:39 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `prod_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`prod_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`prod_id`, `user_id`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(3, 'boys'),
(4, 'girls'),
(1, 'men'),
(2, 'women');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) unsigned NOT NULL,
  PRIMARY KEY (`id`,`user_id`,`product_id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `quantity`, `order_date`, `status`) VALUES
(1, 12, 11, 1, '2016-01-31 19:06:25', 1),
(2, 2, 12, 3, '2016-01-18 22:00:00', 1),
(3, 26, 12, 1, '2016-01-31 19:06:30', 1),
(4, 12, 12, 3, '2016-01-31 19:06:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sub_cat_id` int(10) unsigned NOT NULL,
  `name` varchar(25) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL,
  `quantity` int(10) unsigned DEFAULT NULL,
  `add_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `sub_cat_id`, `name`, `image`, `price`, `color`, `size`, `quantity`, `add_date`, `status`) VALUES
(11, 18, 'blouse', 'productimages/pic1.jpg', 1200, 'White,Red', 'S,M,L', 5, '2016-01-31 19:23:16', 1),
(12, 1, 'lacost', 'productimages/Lacoste-Live-Teddy-Bomber-Jacket.jpg', 1000, 'Red,Blue', 'L,XL,XXL,XXXL', 4, '2014-08-12 08:14:54', 1),
(14, 17, 'blue blouse', 'productimages/si1.jpg', 200, 'White,Red,Blue', 'S,M,L', 5, '2014-08-12 08:14:54', 1),
(16, 19, 'shirts', 'productimages/pi.jpg', 100, 'White,Red,Blue,Yellow,Green', 'S,M,L,XL,XXL', 8, '2014-08-12 08:14:54', 1),
(18, 9, 'shirt-one', 'productimages/boys.jpg', 120, 'White,Red,Blue', 'S,M,L,XL', 4, '2016-02-02 09:16:06', 1),
(20, 16, 'holiday-dress', 'productimages/kids-holiday-dresses-500x500.jpg', 500, 'White,Red,Green', 'M,L,XL,XXL', 6, '2014-08-12 08:14:54', 1),
(22, 5, 'cut shirt', 'productimages/p1.jpg', 250, 'White,Red,Blue', 'S,M,L,XXL', 5, '2014-08-12 08:14:54', 1),
(24, 5, 'regular shirt', 'productimages/pi.jpg', 200, 'Red,Blue,Yellow,Green,OffWhite', 'M,L,XL,XXL,XXXL', 25, '2014-08-12 08:14:54', 1),
(26, 1, 'Air shoes', 'productimages/pi1.jpg', 500, 'White,Red,Blue', 'S,M,L,XL,XXL', 20, '2014-08-12 08:14:54', 1),
(28, 1, 'nike', 'productimages/pi5.jpg', 450, 'Red,Blue,Yellow', 'S,M,L,XL,XXL', 30, '2014-08-12 08:14:54', 1),
(30, 5, 'blue-shirt', 'productimages/pic2.jpg', 150, 'Yellow,Green,OffWhite', 'S,M,L,XL,XXL,XXXL', 20, '2014-08-12 08:14:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=17 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `cat_id`, `name`) VALUES
(1, 1, 'shoes'),
(2, 2, 'shoes'),
(3, 1, 'jeans'),
(4, 2, 'jeans'),
(5, 1, 'shirt'),
(6, 2, 'dress'),
(7, 1, 'tie'),
(8, 2, 'T-shirts'),
(9, 3, 'shirts'),
(10, 4, 'shirts'),
(11, 3, 'shoes'),
(12, 4, 'shoes'),
(15, 3, 'jeans'),
(16, 4, 'dress');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `birthdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `job` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tel` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `c_limit` double NOT NULL,
  `interest` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `admin` int(1) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `image`, `birthdate`, `job`, `tel`, `address`, `c_limit`, `interest`, `admin`, `active`) VALUES
(1, 'ahmed salama', 'admin', 'admin', 'profileimages/me.jpg', '2016-01-31 11:34:12', 'Web developer', '+201067403898', 'El-monofia, Shebien El kom', 2000, NULL, 1, 1),
(2, 'asmaa', 'admin2', 'admin', 'profileimages/asmaa.png', '2016-01-30 10:06:43', 'ay haga', '01067403898', 'hena', 1200, 'no thing', 1, 1),
(12, 'sayed', 'sayed@yahoo.com', '123', 'profileimages/co.png', '1992-02-01 22:00:00', 'ay haga', '01021466854688', 'hena bardo', 3, 'no thing', 0, 1),
(26, 'lacost', 'admin@ddd.dcd', '123', 'profileimages/', '0000-00-00 00:00:00', '', '', '', 0, '', 0, 1),
(28, 'ahmeds', 'admin@yahoo.com', 'Salama_2010', 'profileimages/co.png', '0000-00-00 00:00:00', '', '', '', 0, '', 0, 1),
(30, 'salama', 'salama@yahoo.com', 'Salama_2010', 'profileimages/f.png', '0000-00-00 00:00:00', '', '', '', 0, '', 0, 0),
(32, 'asmaafatma', 'asmaafatma@yahoo.com', 'asmaaA_2010', 'profileimages/m.png', '0000-00-00 00:00:00', '', '', '', 0, '', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
