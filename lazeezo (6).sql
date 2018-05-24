-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2017 at 06:00 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lazeezo`
--
CREATE DATABASE IF NOT EXISTS `lazeezo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lazeezo`;

-- --------------------------------------------------------

--
-- Table structure for table `booktable_tbl`
--

CREATE TABLE IF NOT EXISTS `booktable_tbl` (
  `table_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user_email` varchar(100) NOT NULL,
  `fk_rest_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `no_of_people` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `additional_request` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`table_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE IF NOT EXISTS `category_tbl` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cusines` varchar(70) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`cat_id`, `cusines`) VALUES
(13, 'chinese'),
(14, 'mexican'),
(15, 'italian'),
(16, 'punjabi'),
(17, 'North Indian');

-- --------------------------------------------------------

--
-- Table structure for table `cusine_tbl`
--

CREATE TABLE IF NOT EXISTS `cusine_tbl` (
  `cui_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_rest_id` int(11) NOT NULL,
  `cui_name` varchar(200) NOT NULL,
  PRIMARY KEY (`cui_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `cusine_tbl`
--

INSERT INTO `cusine_tbl` (`cui_id`, `fk_rest_id`, `cui_name`) VALUES
(3, 13, 'Noodles'),
(4, 13, 'Manchurian'),
(5, 14, 'Tacos'),
(6, 14, 'Nachos'),
(7, 15, 'Pizza'),
(8, 15, 'Pasta'),
(9, 16, 'Sabji'),
(10, 16, 'Roti'),
(11, 16, 'Biryani'),
(12, 17, 'Panini'),
(13, 17, 'Sea Food'),
(14, 18, 'Nasto'),
(15, 18, 'Veg Sabji'),
(16, 18, 'Roti'),
(17, 19, 'Dosa'),
(18, 19, 'Idli'),
(19, 19, 'Uttapa'),
(20, 20, 'Fried Rice'),
(21, 20, 'Green Curry'),
(22, 20, 'Red Curry');

-- --------------------------------------------------------

--
-- Table structure for table `discount_tbl`
--

CREATE TABLE IF NOT EXISTS `discount_tbl` (
  `discount_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_rest_id` int(11) NOT NULL,
  `discount_desc` varchar(150) NOT NULL,
  PRIMARY KEY (`discount_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `discount_tbl`
--

INSERT INTO `discount_tbl` (`discount_id`, `fk_rest_id`, `discount_desc`) VALUES
(1, 14, 'jfhsjhiuw'),
(2, 19, 'charcol'),
(3, 41, '10% off on Triple Chilli Pizza....'),
(4, 41, 'Buy two pasta and pay for 1...'),
(5, 28, '10% off on Tandoori Paneer Tikka Pizza'),
(6, 28, 'One on one free on happy Wednesdays'),
(7, 39, '20% off on advance bookings'),
(8, 40, 'Buy any beverage and get 1 free'),
(9, 40, '10% off on any pizza'),
(10, 45, 'Order online and get 10% off'),
(11, 46, 'Free home delivery'),
(12, 47, 'Buy 2 Unlimited Lunch Get 1 Free. Every Monday To Friday. Morning 11.00 AM To 2.30 PM. Use this promo with check in with Lazeezo'),
(13, 47, 'Banquets at cheaper rates'),
(14, 48, 'Cash&nbsp;and&nbsp;Cards accepted'),
(15, 49, 'Get 10% off all home-delivery. Valid only when you order online on Lazeezo.<br>Valid from&nbsp;Sat, 31 Dec, 2016&nbsp;to&nbsp;Fri, 31 Mar, 2017'),
(16, 51, 'Buy Any Pizza And Get 25% Off | Call Now'),
(17, 52, '<span>Get 10% off on all home-delivery orders orders above Rs. 199. Valid only when you order online on Lazeezo.<br>Valid from&nbsp;Thu, 9 Mar, 2017</'),
(18, 53, '15% off on Axis Bank Credit &amp; Debit Cards&nbsp;&nbsp;[<a target="_blank" rel="nofollow">T&amp;C</a>]<br>Valid till: 30th June, 2017'),
(19, 54, 'Cash&nbsp;and&nbsp;Cards accepted'),
(20, 55, 'Get 25% off on all home-delivery orders orders above Rs. 400.');

-- --------------------------------------------------------

--
-- Table structure for table `famous_tbl`
--

CREATE TABLE IF NOT EXISTS `famous_tbl` (
  `famous_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_rest_id` int(11) NOT NULL,
  `fk_subcui_id` int(11) NOT NULL,
  PRIMARY KEY (`famous_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `famous_tbl`
--

INSERT INTO `famous_tbl` (`famous_id`, `fk_rest_id`, `fk_subcui_id`) VALUES
(1, 19, 2),
(2, 19, 1),
(3, 27, 2),
(4, 27, 9),
(5, 27, 17),
(6, 27, 14),
(7, 41, 28),
(8, 28, 40),
(9, 28, 46),
(10, 45, 54),
(11, 45, 65),
(12, 46, 69),
(13, 47, 81),
(14, 47, 82),
(15, 47, 84),
(16, 48, 90),
(17, 49, 95),
(18, 49, 98),
(19, 50, 103),
(20, 52, 123),
(21, 53, 126),
(22, 54, 133),
(23, 55, 141),
(24, 56, 144),
(25, 56, 148),
(26, 57, 160),
(27, 57, 163);

-- --------------------------------------------------------

--
-- Table structure for table `fav_tbl`
--

CREATE TABLE IF NOT EXISTS `fav_tbl` (
  `fav_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_rest_id` int(11) NOT NULL,
  `fk_user_email` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fav_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `menuitem_tbl`
--

CREATE TABLE IF NOT EXISTS `menuitem_tbl` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_rest_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` int(11) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `menuitem_tbl`
--

INSERT INTO `menuitem_tbl` (`item_id`, `fk_rest_id`, `item_name`, `item_price`) VALUES
(28, 14, 'indiana', 295),
(29, 14, 'mocha salad bowl', 150),
(41, 14, 'qwer', 88),
(42, 14, 'dcd', 99);

-- --------------------------------------------------------

--
-- Table structure for table `menuphoto_tbl`
--

CREATE TABLE IF NOT EXISTS `menuphoto_tbl` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menupic_path` varchar(200) NOT NULL,
  `fk_rest_id` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `menuphoto_tbl`
--

INSERT INTO `menuphoto_tbl` (`menu_id`, `menupic_path`, `fk_rest_id`) VALUES
(23, 'menuphotos/mocha1.jpg', 27),
(24, 'mocha2.jpg', 27),
(25, 'mocha3.jpg', 27),
(27, 'mocha4.jpg', 27),
(28, 'mocha5.jpg', 27),
(29, 'mocha6.jpg', 27),
(30, 'baracomenu1.jpg', 28),
(31, 'baracomenu2.jpg', 28),
(32, 'baracomenu3.jpg', 28),
(33, 'baracomenu4.jpg', 28),
(34, 'baracomenu5.jpg', 28),
(35, 'baracomenu6.jpg', 28),
(36, 'project1.jpeg', 40),
(37, 'project2.jpeg', 40),
(38, 'project3.jpeg', 40),
(39, 'project4.jpeg', 40),
(40, 'project5.jpeg', 40),
(41, 'incasamenu1.jpg', 45),
(42, 'incasamenu2.jpg', 45),
(43, 'incasamenu3.jpg', 45),
(44, 'incasamenu4.jpg', 45),
(45, 'incasamenu5.jpg', 45),
(46, 'incasamenu6.jpg', 45),
(47, 'freezemenu1.jpg', 46),
(48, 'freezemenu2.jpg', 46),
(49, 'freezemenu3.jpg', 46),
(50, 'freezemenu4.jpg', 46),
(51, 'freezemenu5.jpg', 46),
(52, 'freezemenu6.jpg', 46),
(53, 'seasonmenu1.jpg', 47),
(54, 'seasonmenu2.jpg', 47),
(55, 'seasonmenu3.jpg', 47),
(56, 'seasonmenu4.jpg', 47),
(57, 'seasonmenu5.jpg', 47),
(58, 'mangomenu1.jpg', 48),
(59, 'mangomenu2.jpg', 48),
(60, 'mangomenu3.jpg', 48),
(61, 'mangomenu4.jpg', 48),
(62, 'amezomenu1.jpg', 49),
(63, 'amezomenu2.jpg', 49),
(64, 'amezomenu3.jpg', 49),
(65, 'amezomenu4.jpg', 49),
(66, 'amezomenu5.jpg', 49),
(67, 'amezomenu6.jpg', 49),
(68, 'bellamenu2.jpg', 50),
(69, 'bellaimage1.jpg', 50),
(70, 'bellamenu3.jpg', 50),
(71, 'bellamenu4.jpg', 50),
(72, 'bellamenu5.jpg', 50),
(73, 'bellamenu6.jpg', 50),
(74, 'peppmenu1.jpg', 51),
(75, 'peppmenu2.jpg', 51),
(76, 'peppmenu3.jpg', 51),
(77, 'peppmenu4.jpg', 51),
(78, 'peppmenu5.jpg', 51),
(79, 'drmenu1.jpg', 52),
(80, 'drmenu2.jpg', 52),
(81, 'drmenu3.jpg', 52),
(82, 'drmenu4.jpg', 52),
(83, 'drmenu5.jpg', 52),
(84, 'drmenu6.jpg', 52),
(85, 'automenu1.jpg', 53),
(86, 'automenu2.jpg', 53),
(87, 'automenu3.jpg', 53),
(88, 'automenu4.jpg', 53),
(89, 'automenu5.jpg', 53),
(90, 'chinamenu1.jpg', 54),
(91, 'chinamenu3.jpg', 54),
(92, 'chinamenu4.jpg', 54),
(93, 'chinamenu5.jpg', 54),
(94, 'chinamenu6.jpg', 54),
(95, 'wokmenu1.jpg', 55),
(96, 'wokmenu2.jpg', 55),
(97, 'wokmenu3.jpg', 55),
(98, 'wokmenu4.jpg', 55),
(99, 'wokmenu5.jpg', 55),
(100, 'cafemenu1.jpg', 56),
(101, 'cafemenu2.jpg', 56),
(102, 'cafemenu3.jpg', 56),
(103, 'cafemenu4.jpg', 56),
(104, 'cafemenu5.jpg', 56),
(105, 'cafemenu6.jpg', 56),
(106, '440menu1.jpg', 57),
(107, '440menu2.jpg', 57),
(108, '440menu3.jpg', 57),
(109, '440menu4.jpg', 57),
(110, '440menu5.jpg', 57),
(111, '440menu6.jpg', 57);

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE IF NOT EXISTS `order_tbl` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_rest_id` int(11) NOT NULL,
  `fk_user_email` varchar(100) NOT NULL,
  `fk_subcui_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `total_amount` int(11) DEFAULT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  `date_of_order` varchar(30) NOT NULL,
  `delivery_area` varchar(200) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- Table structure for table `otherphoto_tbl`
--

CREATE TABLE IF NOT EXISTS `otherphoto_tbl` (
  `other_id` int(11) NOT NULL AUTO_INCREMENT,
  `otherpic_path` varchar(200) NOT NULL,
  `fk_rest_id` int(11) NOT NULL,
  PRIMARY KEY (`other_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `otherphoto_tbl`
--

INSERT INTO `otherphoto_tbl` (`other_id`, `otherpic_path`, `fk_rest_id`) VALUES
(10, 'mocha.jpg', 27),
(11, 'mochaother1.jpg', 27),
(12, 'mochaother2.jpg', 27),
(13, 'mochaother3.jpg', 27),
(14, 'mochaother4.jpg', 27),
(15, 'baraco1.jpg', 28),
(17, 'baraco3.jpg', 28),
(19, 'baraco4.jpg', 28),
(20, 'baraco5.jpg', 28),
(21, 'baraco6.jpg', 28),
(23, '6501.jpg', 39),
(24, '6503.jpg', 39),
(25, '6504.jpg', 39),
(26, '6505.jpg', 39),
(27, 'projectother1.jpg', 40),
(28, 'projectother2.jpg', 40),
(29, 'projectother3.jpg', 40),
(30, 'projectother4.jpg', 40),
(31, 'projectother5.jpg', 40),
(32, 'projectother6.jpg', 40),
(33, 'incasa1.jpg', 45),
(34, 'incasa2.png', 45),
(35, 'incasa3.jpg', 45),
(36, 'incasa4.jpg', 45),
(37, 'freeze1.jpg', 46),
(38, 'freeze2.jpg', 46),
(39, 'freeze3.jpg', 46),
(40, 'freeze4.jpg', 46),
(41, 'freeze5.jpg', 46),
(42, 'freeze6.jpg', 46),
(43, 'season1.jpg', 47),
(44, 'season2.jpg', 47),
(45, 'season3.jpg', 47),
(46, 'season4.jpg', 47),
(47, 'season5.jpg', 47),
(48, 'mango1.jpg', 48),
(49, 'mango2.jpg', 48),
(50, 'mango3.jpg', 48),
(51, 'mango4.jpg', 48),
(52, 'mango5.jpg', 48),
(53, 'amezo1.jpg', 49),
(54, 'amezo2.jpg', 49),
(55, 'amezo3.jpg', 49),
(56, 'amezo4.jpg', 49),
(57, 'bella1.jpg', 50),
(58, 'bella2.jpg', 50),
(59, 'bella3.jpg', 50),
(60, 'bella4.jpg', 50),
(61, 'bella5.jpg', 50),
(62, 'bella6.jpg', 50),
(63, 'pepp1.jpg', 51),
(64, 'pepp2.jpg', 51),
(65, 'pepp3.jpg', 51),
(66, 'pepp4.jpg', 51),
(67, 'pepp5.jpg', 51),
(68, 'dr1.jpg', 52),
(69, 'dr2.jpg', 52),
(70, 'dr3.jpg', 52),
(71, 'dr4.jpg', 52),
(72, 'dr5.jpg', 52),
(73, 'dr6.jpg', 52),
(74, 'auto1.jpg', 53),
(75, 'auto2.jpg', 53),
(76, 'auto3.jpg', 53),
(77, 'auto5.jpg', 53),
(78, 'auto4.jpg', 53),
(79, 'china1.jpg', 54),
(80, 'china2.jpg', 54),
(81, 'china3.jpg', 54),
(82, 'china4.jpg', 54),
(83, 'china5.jpg', 54),
(84, 'wok1.jpg', 55),
(85, 'wok2.jpg', 55),
(86, 'wok3.jpg', 55),
(87, 'wok4.jpg', 55),
(88, 'wok5.jpg', 55),
(89, 'cafe1.jpg', 56),
(90, 'cafe2.jpg', 56),
(91, 'cafe3.jpg', 56),
(92, 'cafe4.jpg', 56),
(93, 'cafe5.jpg', 56),
(94, '4401.jpg', 57),
(95, '4402.jpg', 57),
(96, '4403.jpg', 57),
(97, '4404.jpg', 57),
(98, '4405.jpg', 57);

-- --------------------------------------------------------

--
-- Table structure for table `payment_tbl`
--

CREATE TABLE IF NOT EXISTS `payment_tbl` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `card_number` int(20) DEFAULT NULL,
  `card_name` varchar(50) NOT NULL,
  `cv_code` int(10) NOT NULL,
  `date` date NOT NULL,
  `fk_order_id` int(11) NOT NULL,
  `fk_user_email` varchar(100) NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment_tbl`
--

INSERT INTO `payment_tbl` (`pay_id`, `card_number`, `card_name`, `cv_code`, `date`, `fk_order_id`, `fk_user_email`) VALUES
(1, 1233, 'xsds', 123, '0000-00-00', 95, 'devi@gmail.com'),
(2, 1233, 'xsds', 123, '0000-00-00', 95, 'devi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_tbl`
--

CREATE TABLE IF NOT EXISTS `restaurant_tbl` (
  `rest_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_email` varchar(100) NOT NULL,
  `fk_cat_id` int(11) NOT NULL,
  `rest_name` varchar(80) NOT NULL,
  `area` varchar(200) NOT NULL,
  `rest_add` varchar(100) NOT NULL,
  `pincode` int(11) DEFAULT NULL,
  `rest_number` varchar(13) NOT NULL,
  `rest_email` varchar(100) NOT NULL,
  `opening_status` varchar(50) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  `rest_image` varchar(200) DEFAULT NULL,
  `cost` varchar(100) NOT NULL,
  `highlights` varchar(200) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  PRIMARY KEY (`rest_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `restaurant_tbl`
--

INSERT INTO `restaurant_tbl` (`rest_id`, `owner_email`, `fk_cat_id`, `rest_name`, `area`, `rest_add`, `pincode`, `rest_number`, `rest_email`, `opening_status`, `flag`, `rest_image`, `cost`, `highlights`, `longitude`, `latitude`) VALUES
(27, 'maitri@gmail.com', 16, 'Mocha', 'Bodakdev', '6-9 , Ground Floor ,  Devashish Business Park , Opposite Krishna Complex ,  Bodakdev, Ahmedabad', 380054, '7838652803', 'mocha@gmail.com', '11AM-1AM', 0, 'mocha.jpg', '1000', 'Outdoor Seating, Wifi, Desserts and Bakes ,Valet Parking Available ,Smoking Area', '72.5112851', '23.0318841'),
(28, 'maitrimodi97@gmail.com', 15, 'The Cafe Baraco', 'Navrangpura', '34 ,  Shribhuvan Complex ,  Near Memnagar Fire Station ,  Navrangpura ,  Ahmedabad', 380051, '07930641668', 'https://www.zomato.com/ahmedabad/the-cafe-baraco-navrangpura/info', 'Today  10 AM to 1 AM', 0, '70menu2.jpg', '600', 'Breakfast Wheelchair Accessible Vegetarian Only Table booking not available Live Music Free Parking All Day Breakfast Wallet Accepted Smoking Area Wifi Serves Jain Food Mobile Chargers On Table', '72.55053', '23.044277'),
(39, 'devishasurti1@gmail.com', 14, '650 - The Global Kitchen', 'Ambavadi', 'Shreekunj Mandapam , Beside Golden Tulip Bunglows & Tulip Citadel , Manekbaug , Ambavadi ,  Ahmedaba', 380006, '919824090111', 'https://www.zomato.com/ahmedabad/650-the-global-kitchen-ambavadi/info', 'Today  12 Noon to 2:30 PM, 7 PM to 10:30 PM', 0, '1f71906f581af15238ea5ab21765b895.jpg', '900', 'Vegetarian Only Valet Parking Available Outdoor Seating', '72.53748', '23.010596'),
(40, 'kinnarigandhi@gmail.com', 14, 'The Project Cafe', 'Ambavadi', 'Yellow House No 7 , Polytechnic Road , Ambavadi , Ahmedabad', 380062, '07960506060', 'https://www.zomato.com/the-project-cafe', 'Today  10 AM to 11 PM', 0, '4cea86497d55e373906fc2e7e500645d.jpg', '500', 'Breakfast Home Delivery Smoking Area Outdoor Seating', '72.548114', '23.024821'),
(41, 'kinnarigandhi96jan@gmail.com', 13, 'Turquoise Villa', 'Vastrapur', '										\r\n													\r\n			Ground Floor , Shanay - 1 , Near AMA , IIM Road , Vastrapur , Ahmedaba', 380015, '07940373000', 'https://www.zomato.com/ahmedabad/turquoise-villa-vastrapur', 'Today  11 AM to 1 AM', 1, 'DSC03626.JPG', '1200', 'Outdoor Seating Wifi', '72.543352', '23.028511'),
(45, 'preet7shah11@gmail.com', 17, 'INCASA ', 'Ambavadi', 'Pramukh Plaza , Opposite Ketav Petrol Pump , Ambavadi , Ahmedabad', 380006, '7926309990', 'https://www.zomato.com/ahmedabad/incasa-ambavadi?zref=restaurant&ref_id=11301&ref_type=subzone', 'Today  12 Noon to 3 PM, 7 PM to 11 PM', 1, 'incasaimage.jpg', '800', 'Home Delivery Vegetarian Only', '72.5480134', '23.0242134'),
(46, 'sahilsurani84@yahoo.in', 15, 'New Freeze Land ', 'Navrangpura', 'G-3 , Yash Aqua Building , Vijay Cross , Navrangpura , Ahmedabad', 380002, '07930641693', 'https://www.zomato.com/ahmedabad/new-freeze-land-navrangpura?zref=restaurant&ref_id=11301&ref_type=s', 'Today  10 AM to 11 PM', 1, 'freezeimage.jpg', '500', 'Home Delivery Vegetarian Only', '72.5486518', '23.0423579'),
(47, 'zack@gmail.com', 13, 'Season 9 ', 'Navrangpura', '103 , Shivalik Yash , 132 Feet Ring Road , Naranpura , Ahmedabad', 380008, '07930641874', 'https://www.zomato.com/ahmedabad/season-9-naranpura?zref=restaurant&ref_id=11306&ref_type=subzone', 'Today  11 AM to 3 PM, 7 PM to 11 PM', 0, 'seasonimage.jpg', '700', 'Home Delivery Vegetarian Only', '72.553212', '23.0619545'),
(48, 'saumyamodi@gmail.com', 17, '@Mango', 'Bodakdev', 'Opposite Sindhu Bhawan , Bodakdev , Ahmedabad', 380015, '919925238231', 'https://www.zomato.com/ahmedabad/mango-bodakdev', 'Today  12 Noon to 3 PM, 7 PM to 11 PM', 0, 'mangoimage.jpg', '800', 'Vegetarian Only Outdoor Seating', '72.5049483', '23.0404952'),
(49, 'vikrant31@gmail.com', 15, 'Amazo Bistro ', 'Bodakdev', 'Armeida , Sindhu Bhavan Road , Off SG Road , Bodakdev , Ahmedabad', 380015, '07930920638', 'https://www.zomato.com/ahmedabad/amazo-bistro-bodakdev?zref=restaurant&ref_id=11314&ref_type=subzone', 'Today  12 Noon to 11 PM', 0, 'amezoimage.jpg', '800', 'Home Delivery Vegetarian Only Serves Jain Food', '72.5092662', '23.040015'),
(50, 'megha@gmail.com', 15, 'Bella - Crowne Plaza', 'Crowne Plaza, Satellite', 'Crowne Plaza , Shapath 5 , S G Road , Satellite , Ahmedabad', 380009, '07966195148', 'https://www.zomato.com/ahmedabad/bella-crowne-plaza-satellite', 'Today  7 PM to 11 PM', 0, 'bellaimage.jpg', '2200', 'Home Delivery Luxury Dining Rooftop', '72.5041', '23.014454'),
(51, 'yahoo@gmail.com', 13, 'Pepperazzi - The Diner', 'Parahladnagar', '1 , Ground Floor , Formule 1 , Near Venus Atlantis , Prahlad Nagar , Ahmedabad', 380045, '7965433666', 'https://www.zomato.com/ahmedabad/pepperazzi-the-diner-prahlad-nagar', 'Today  11 AM to 3 PM, 7 PM to 11 PM', 0, 'peppimage.jpg', '850', 'Home Delivery Vegetarian Only Valet Parking Available', '72.510619', '23.011392'),
(52, 'rushik@gmail.com', 20, 'Darshan Restaurant', 'Gulbai Tekra', '1st Floor , Heritage Square , Opposite Atlanta Tower , Gulbai Tekra , Ahmedabad', 380009, '9512499444', 'https://www.zomato.com/ahmedabad/darshan-restaurant-gulbai-tekra?zref=subzone&ref_id=11304&ref_type=', 'Today  11 AM to 3:15 PM, 7 PM to 10:45 PM', 0, 'drimage.jpeg', '900', 'Home Delivery Valet Parking Available', '72.5528111', '23.0265868'),
(53, 'saumilmodi11@gmail.com', 17, 'Autograph - Armoise Hotel ', 'C G Road ', 'Armoise Hotel , Next to Havmor Restaurant , Behind Navarangpura Bus Stand , Off C G Road , C G Road ', 380006, '07926402288', 'https://www.zomato.com/autograph', 'Today  7:30 AM to 10:30 AM, 11:30 AM to 3 PM, 7 PM', 1, 'autoimage.jpg', '900', 'Breakfast Wheelchair Accessible Vegetarian Only Valet Parking Available Wifi', '72.566455', '23.03752'),
(54, 'disha@gmail.com', 13, 'China House - Hyatt Regency', 'Ashram Road', '17 A , Ashram Road , Ahmedabad', 380008, '07930920676', 'https://www.zomato.com/ahmedabad/china-house-hyatt-regency-ashram-road', 'Today  12:30 PM to 3 PM, 7 PM to 11:30 PM', 0, 'chinaimage.jpg', '2400', 'Valet Parking Available Wifi Luxury Dining', '72.5688495', '23.037162'),
(55, 'rajvee@gmail.com', 13, 'Wok On Fire', 'Navrangpura', '1 , Aeon Complex , Opposite Navkar Institute , Vijay Cross Roads , Navrangpura , Ahmedabad', 380006, '07930920307', 'https://www.zomato.com/ahmedabad/wok-on-fire-navrangpura?zref=restaurant&ref_id=11002&ref_type=subzo', 'Today  11 AM to 11 PM', 0, 'wokimage.jpg', '1200', 'Home Delivery Vegetarian Only', '72.5498271', '23.0432556'),
(56, 'raj@gmail.com', 19, 'Cafe 15 A- Starottel ', 'Ashram Road', '15 Starottel , Ashram Road , Ahmedabad', 380076, '07930920335', 'https://www.zomato.com/ahmedabad/cafe-15-a-starottel-ashram-road?zref=restaurant&ref_id=11307&ref_ty', 'Today  24 Hours', 0, 'cafeimage.jpg', '1300', 'Breakfast Wheelchair Accessible Valet Parking Available Buffet', '72.5719298', '23.0525877'),
(57, 'priyansh@gmail.com', 13, '440 Banquets & Restaurant', 'Thaltej', '3rd Floor , Acropolis Mall , S G Highway , Thaltej ,  Ahmedabad', 380005, '07940095440', 'https://www.zomato.com/ahmedabad/440-banquets-restaurant-thaltej', 'Today  11:30 AM to 2:30 PM, 6:30 PM to 10:30 PM', 0, '440image.jpg', '800', 'Vegetarian Only', '72.5158611', '23.048826');

-- --------------------------------------------------------

--
-- Table structure for table `restowner_tbl`
--

CREATE TABLE IF NOT EXISTS `restowner_tbl` (
  `owner_email` varchar(100) NOT NULL,
  `fk_rest_id` int(11) NOT NULL,
  `rest_owner_name` varchar(50) NOT NULL,
  `owner_mob_no` varchar(13) NOT NULL,
  `password` varchar(50) NOT NULL,
  `owner_image` varchar(200) NOT NULL,
  PRIMARY KEY (`owner_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restowner_tbl`
--

INSERT INTO `restowner_tbl` (`owner_email`, `fk_rest_id`, `rest_owner_name`, `owner_mob_no`, `password`, `owner_image`) VALUES
('devishasurti1@gmail.com', 39, 'devisha', '9825020947', 'devisha650', '650image.jpg'),
('devishasurti@gmail.com', 27, 'Devisha', '9979920947', '123', 'xyz.jpg'),
('disha@gmail.com', 54, 'disha', '6758493', 'disha', 'chinaimage.jpg'),
('kinnarigandhi96jan@gmail.com', 41, 'kinnari', '9428237900', 'kinnari', 'EHszu42673.png'),
('kinnarigandhi@gmail.com', 40, 'Kinnari', '9979920947', 'kinnariproject', 'projectimage.jpg'),
('maitri@gmail.com', 19, 'Maitri', '9428237900', 'maitri', ''),
('maitrimodi97@gmail.com', 28, 'maitri', '9979920947', 'maitri1', 'baraco2.jpg'),
('megha@gmail.com', 50, 'megha', '123456789', 'megha', 'bellaimage.jpg'),
('preet7shah11@gmail.com', 45, 'Preet', '98983456', 'preet', 'incasaimage.jpg'),
('priyansh@gmail.com', 57, 'priyansh', '8745001233', 'priyansh', '440image.jpg'),
('raj@gmail.com', 56, 'raj', '9409645400', 'raj', 'cafeimage.jpg'),
('rajvee@gmail.com', 55, 'rajvee', '45673829', 'rajvee', 'wokimage.jpg'),
('rushik@gmail.com', 52, 'rushik', '98999408', 'rushik', 'drimage.jpeg'),
('sahilsurani84@yahoo.in', 46, 'sahil', '75896092', 'sahil', 'freezeimage.jpg'),
('saumilmodi11@gmail.com', 53, 'saumil', '9825020947', 'saumil', 'autoimage.jpg'),
('saumyamodi@gmail.com', 48, 'saumya', '9979920947', 'saumya', 'mangoimage.jpg'),
('vikrant31@gmail.com', 49, 'vikrant', '9979920947', 'vikrant', 'amezoimage.jpg'),
('yahoo@gmail.com', 51, 'yahoo', '123456789', 'yahoo', 'peppimage.jpg'),
('zack@gmil.com', 47, 'zack', '123456789', 'zack', 'seasonimage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviewlike_tbl`
--

CREATE TABLE IF NOT EXISTS `reviewlike_tbl` (
  `fk_review_id` int(11) NOT NULL,
  `like_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user_email` varchar(100) NOT NULL,
  `fk_rest_id` int(11) NOT NULL,
  PRIMARY KEY (`like_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `review_tbl`
--

CREATE TABLE IF NOT EXISTS `review_tbl` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user_email` varchar(100) NOT NULL,
  `fk_rest_id` int(11) NOT NULL,
  `review_message` varchar(200) NOT NULL,
  `review_date` varchar(20) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `subcui_tbl`
--

CREATE TABLE IF NOT EXISTS `subcui_tbl` (
  `subcui_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_cui_id` int(11) NOT NULL,
  `subcui_name` varchar(200) NOT NULL,
  `subcui_price` varchar(100) NOT NULL,
  `fk_rest_id` int(11) NOT NULL,
  PRIMARY KEY (`subcui_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=164 ;

--
-- Dumping data for table `subcui_tbl`
--

INSERT INTO `subcui_tbl` (`subcui_id`, `fk_cui_id`, `subcui_name`, `subcui_price`, `fk_rest_id`) VALUES
(11, 7, 'Margerita Pizza', '250', 27),
(12, 7, 'Farm Fresh Pizza', '325', 27),
(13, 7, 'Three Chilli Pizza', '275', 27),
(14, 7, 'Barbequed Smoked Paneer Pizza', '325', 27),
(15, 7, 'Half n Half Pizza', '350', 27),
(16, 12, 'The BMT Panini', '200', 27),
(17, 12, 'Garden Fresh Panini', '200', 27),
(18, 12, 'Cottage Cheese Panini', '200', 27),
(19, 12, 'Kadhai Paneer Panini', '200', 27),
(20, 8, 'Wild Mushroom Spaghetti', '325', 27),
(21, 8, 'Pink Sauce Penne', '295', 27),
(22, 8, 'Baked Mac n Cheese', '295', 27),
(23, 8, 'Mocha Aglio Olio Spaghetti', '295', 27),
(24, 8, 'Create your own', '280', 27),
(25, 7, 'Margherita Pizza', '275', 41),
(26, 7, '4 Cheese Pizza', '360', 41),
(27, 7, 'Antipasti with parmesan Pizza', '330', 41),
(28, 7, 'Piri Piri Veg pizza ', '295', 41),
(29, 7, 'Triple Chilli Pizza', '390', 41),
(30, 8, 'Spaghetti aglio oilo', '250', 41),
(31, 8, 'Spaghetti tomato and basil', '275', 41),
(32, 8, 'Arrabiata Pasta', '275', 41),
(33, 8, 'Creamy mushroom pasta', '295', 41),
(35, 8, 'Pasta Arrabiata', '200', 28),
(36, 8, 'Pasta Alla Contadina', '210', 28),
(37, 8, 'Kiddie Pasta', '200', 28),
(38, 8, 'Mama Rossa Pasta', '220', 28),
(39, 8, 'Con Pesto', '220', 28),
(40, 8, 'Baraco Love Bite Pasta', '240', 28),
(41, 7, 'Margherita Pizza', '200', 28),
(42, 7, 'Verdura Pizza', '200', 28),
(43, 7, 'Capriciosa Pizza', '220', 28),
(44, 7, 'Fantasia Pizza', '230', 28),
(45, 7, 'Tandoori Paneer Tikka Pizza', '250', 28),
(46, 3, 'Hakka Noodles in Sambal Sauce', '180', 28),
(47, 22, 'Thai Bowl', '180', 28),
(48, 5, 'Mexican Tacos', '240', 40),
(49, 6, 'Fully Loaded Nachos', '229', 40),
(50, 7, 'Classic Margherita Pizza', '354', 40),
(51, 7, 'Tabasco Pizza', '380', 40),
(52, 7, 'Velentino Pizza', '380', 40),
(53, 9, 'Kabab paneer ka mel', '260', 45),
(54, 9, 'Teen mirchi ka paneer', '250', 45),
(55, 9, 'paneer rasala', '240', 45),
(56, 9, 'paneer makhani', '240', 45),
(57, 10, 'c3 naan', '130', 45),
(58, 10, 'cheese naan', '130', 45),
(59, 10, 'lachcha paratha', '60', 45),
(60, 10, 'Tandoori roti', '40', 45),
(61, 10, 'Butter roti', '45', 45),
(62, 11, 'Nargisi Biryani', '230', 45),
(63, 11, 'Hydrabadi Birayani', '260', 45),
(64, 11, 'Guchchi Birayani', '240', 45),
(65, 11, 'Mumbaiya Tawa Biryani', '240', 45),
(66, 8, 'Al Alfredo Pasta', '169', 46),
(67, 8, 'Al Arrabiata Pasta', '179', 46),
(68, 7, 'Margherita Pizza', '133', 46),
(69, 7, 'Ahmedabadi Touch Pizza', '139', 46),
(70, 7, 'Veggie Delight', '139', 46),
(71, 7, 'Tandoori Paneer Pizza', '169', 46),
(72, 7, 'Crispy Cheese Pizza', '119', 46),
(73, 7, 'Crispy Paneer Pizza', '119', 46),
(74, 3, 'Veg. Hakka Noodles', '145', 47),
(75, 3, 'Veg. Manchurian Noodles', '150', 47),
(76, 3, 'Schezwan Noodles', '160', 47),
(77, 20, 'Machurian Fried Rice', '160', 47),
(78, 20, 'Mushroom Fried Rice', '160', 47),
(79, 6, 'Nachos with salsa sauce', '160', 47),
(80, 5, 'Mexican Tacos', '165', 47),
(81, 22, 'Pattaya Red Curry', '200', 47),
(82, 9, 'Season9 Special ', '185', 47),
(83, 9, 'Cheese butter masala', '170', 47),
(84, 9, 'Paneer balti', '165', 47),
(85, 10, 'Paratha', '50', 47),
(86, 10, 'Kulchcha', '48', 47),
(87, 7, 'Margherita Pizza', '450', 48),
(88, 7, 'Oriolana Pizza', '500', 48),
(89, 7, 'Flamma Pizza', '450', 48),
(90, 7, 'All in one Pizza', '500', 48),
(91, 9, 'Ravioli Butter Masala', '340', 48),
(92, 9, 'Kybari kadai paneer', '320', 48),
(93, 9, 'Twin cottage cheese', '340', 48),
(94, 6, 'in-house nachos', '250', 49),
(95, 6, 'Bruschetta Nachos', '250', 49),
(96, 7, 'Margherita Pizza', '350', 49),
(97, 7, 'Works Pizza', '375', 49),
(98, 7, 'Fiery Pizza', '375', 49),
(99, 9, 'Paneer butter masala', '350', 49),
(100, 9, 'Cheese butter masala', '375', 49),
(101, 9, 'Hydrabadi Kofta', '325', 49),
(102, 7, 'Margherita Pizza', '500', 50),
(103, 7, 'Pizza Vendure', '500', 50),
(104, 7, 'Pizza Quadtratta', '600', 50),
(105, 7, 'Pizza Calzone', '525', 50),
(106, 8, 'Vegetable lasagna', '500', 50),
(107, 8, 'Hand rolled spaghetti', '600', 50),
(108, 9, 'Tawa Paneer Kamalka', '262', 51),
(109, 9, 'Paneer Peshawari', '262', 51),
(110, 9, 'Paneer Lababdar', '262', 51),
(111, 11, 'Parda dum Birayani', '262', 51),
(112, 11, 'Tarkari Kesari Birayani', '262', 51),
(113, 11, 'Hyderabadi Birayani', '262', 51),
(114, 4, 'Vegetable Manchurian', '262', 51),
(115, 3, 'Chilli Garlic/Hakka/Shezwan Noodles', '262', 51),
(116, 9, 'Tandoori Platter', '375', 52),
(117, 9, 'Peshwari Paneer Tikka', '295', 52),
(118, 9, 'Badami Tandoori Aloo', '270', 52),
(119, 9, 'Lasuni Gobi', '260', 52),
(120, 3, 'Chilli Garlic Noodles', '215', 52),
(121, 3, 'Schezwan Noodles', '225', 52),
(122, 3, 'Hakka Noodles', '215', 52),
(123, 3, 'Schezwan Garlic Noodles', '245', 52),
(124, 9, 'Paneer butter masala', '215', 53),
(125, 9, 'Cheese Butter Masala', '250', 53),
(126, 9, 'Autograph special paneer', '275', 53),
(127, 9, 'Malai Kofta', '230', 53),
(128, 10, 'roti', '30', 53),
(129, 10, 'Naan', '45', 53),
(130, 10, 'Lachcha Paratha', '50', 53),
(131, 3, 'Udon Noodles', '525', 54),
(132, 3, 'Fried Noodles', '550', 54),
(133, 3, 'Dan-dan Noodles', '550', 54),
(134, 3, 'Manchurian Gravy', '225', 55),
(135, 3, 'Mushroom Manchurian', '290', 55),
(136, 3, 'Cottage cheese manchurian', '290', 55),
(137, 3, 'Schezwan Noodles', '225', 55),
(138, 3, 'Wok on fire Noodles', '290', 55),
(139, 3, 'Chilli Garlic Noodles', '215', 55),
(140, 3, 'Phad Thai Noodles', '250', 55),
(141, 3, 'Korean thai noodles', '230', 55),
(142, 3, 'Zai Thai Noodles', '260', 55),
(143, 20, 'Veg. Fried Rice', '250', 56),
(144, 9, 'Paneer tikka ajwaini', '250', 56),
(145, 9, 'Hara bhara kabab', '275', 56),
(146, 9, 'Princess paneer platter', '425', 56),
(147, 9, 'Paneer tikka lababdar', '275', 56),
(148, 16, 'Missi Roti', '35', 56),
(149, 16, 'Lachcha Paratha', '45', 56),
(150, 16, 'Naan', '70', 56),
(151, 9, 'Paneer tikka masala', '220', 57),
(152, 9, 'Paneer butter masala', '220', 57),
(153, 9, 'cheese butter masala', '240', 57),
(154, 9, 'Rani kofta', '190', 57),
(155, 10, 'Butter roti', '35', 57),
(156, 10, 'Khasta roti', '55', 57),
(157, 10, 'Stuffed paratha', '70', 57),
(158, 20, 'Veg fried rice', '160', 57),
(159, 20, 'Schezwan fried rice', '170', 57),
(160, 20, 'TRiple fried rice', '210', 57),
(161, 5, 'Tacos', '170', 57),
(162, 6, 'Cheese Nachos', '170', 57),
(163, 6, 'Beans Nachos', '180', 57);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile_no` varchar(13) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `pro_pic` varchar(150) DEFAULT NULL,
  `DOB` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_email`, `user_name`, `password`, `address`, `mobile_no`, `gender`, `city`, `pro_pic`, `DOB`, `type`) VALUES
('devi@gmail.com', 'devisha surti', '123', 'kjsdfhksfjols', '9409645400', 'Female', 'abad', 'DSCN4051.jpg', '1997-3-9', '2'),
('dharini@gmail.com', 'Dharini', 'dharini', 'e-32 takshsila apartment near mansi\ncirc;e', '9428238567', 'female', 'Ahemedabad', 'EHszu42673.png', '27-may-1995', '2'),
('dhaval@gmail.com', 'dhaval', 'dhacdhaval', 'e 32 takshsila flts abad', '9428237900', 'male', 'Baroda', 'disha.jpg', '04-01-1992', 'user'),
('dhwaniparikh@gmail.com', 'Dhwani', 'dhwani', '25, management enclave, vastrapur ', '123456789', 'Female', 'baroda', '', '15-6-1995', '2'),
('kinnu@gmail.com', 'kinnari', 'kinnari', 'e-32 takshsila', '9427237900', 'female', 'Ahemedabad', 'A643P22500.png', '05-01-1996', 'user'),
('megha@gmail.com', 'Megha', 'megha', '8,vallabh row house, vastrapur', '123456789', 'Female', 'abad', '', '2-2-1991', '2'),
('preet7shah11@gmail.com', 'Preet', 'preet', '10, Dhara appartment, paldi', '9998090507', 'Female', 'abad', '', '7-11-1996', '2'),
('sahilsurani84@yahoo.in', 'Sahil', 'sahil', 'A-11, bagh e nawab flats, sah-alam', '75896092', 'Male', 'abad', '', '10-9-1996', '2'),
('saumyamodi@gmail.com', 'Saumya', 'saumya', '', '9979920947', 'Male', 'surat', '', '4-12-2000', '2'),
('vikrant31@gmail.com', 'Vikrant', 'vikrant', '8, vallabh row house, vastrapur', '9825020947', 'Male', 'abad', '', '31-8-1991', '2'),
('zack@gmail.com', 'Zack', 'zack', '12,abc,pqr', '123456789', 'Male', 'abad', '', '13-2-1997', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
