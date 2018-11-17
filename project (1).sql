-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2018 at 11:23 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `cities_id` int(5) NOT NULL AUTO_INCREMENT,
  `state_id` int(5) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  PRIMARY KEY (`cities_id`)
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cities_id`, `state_id`, `city_name`) VALUES
(1, 1, 'Aba'),
(2, 1, 'Arochukwu'),
(3, 1, 'Umuahia'),
(4, 2, 'Mubi'),
(5, 2, 'Jimeta'),
(6, 2, 'Numan'),
(7, 2, 'Yola'),
(8, 3, 'Ikot Abasi'),
(9, 3, 'Ikot Ekpene'),
(10, 3, 'Oron'),
(11, 3, 'Uyo'),
(12, 4, 'Awka'),
(13, 4, 'Onitsha'),
(14, 5, 'Azare'),
(15, 5, 'Bauchi'),
(16, 5, 'Jamaare'),
(17, 5, 'Katagum'),
(18, 5, 'Misau'),
(19, 6, 'Brass'),
(20, 7, 'Makurdi'),
(21, 8, 'Biu'),
(22, 8, 'Dikwa'),
(23, 8, 'Maiduguri'),
(24, 9, 'Calabar'),
(25, 9, 'Ogoja'),
(26, 10, 'Asaba'),
(27, 10, 'Burutu'),
(28, 10, 'Koko'),
(29, 10, 'Sapele'),
(30, 10, 'Ughelli'),
(31, 10, 'Warri'),
(32, 11, 'Abakaliki'),
(33, 12, 'Benin City'),
(34, 12, 'Uromi'),
(35, 13, 'Ado-Ekiti'),
(36, 13, 'Effon-Alaiye'),
(37, 13, 'Ikere-Ekiti'),
(38, 13, 'Ise Ekiti'),
(39, 13, 'Ilawe Ekiti'),
(40, 13, 'Ijero'),
(41, 14, 'Enugu'),
(42, 14, 'Nsukka'),
(43, 37, 'Abuja'),
(44, 15, 'Deba Habe'),
(45, 15, 'Gombe'),
(46, 15, 'Kumo'),
(47, 16, 'Owerri'),
(48, 16, 'Okigwe'),
(49, 16, 'Okigwe'),
(50, 17, 'Birnin Kudu'),
(51, 17, 'Dutse'),
(52, 17, 'Gumel'),
(53, 17, 'Hadejia'),
(54, 17, 'Garki'),
(55, 17, 'Kazaure'),
(56, 18, 'Jemaa'),
(57, 18, 'Kaduna'),
(58, 18, 'Zaria'),
(59, 19, 'Kano'),
(60, 20, 'Daura'),
(61, 20, 'Katsina'),
(62, 21, 'Argungu'),
(63, 21, 'Birnin Kebbi'),
(64, 21, 'Gwandu'),
(65, 21, 'Yelwa'),
(66, 22, 'Idah'),
(67, 22, 'Kabba'),
(68, 22, 'Lokoja'),
(69, 22, 'Okene'),
(70, 20, 'Funtua'),
(71, 23, 'Ilorin'),
(72, 23, 'Jebba'),
(73, 23, 'Lafiagi'),
(74, 23, 'Offa'),
(75, 23, 'Pategi'),
(76, 24, 'Badagry'),
(77, 24, 'Ikorodu'),
(78, 24, 'Lagos'),
(79, 24, 'Epe'),
(80, 24, 'Mushin'),
(81, 24, 'Shomolu'),
(82, 25, 'Keffi'),
(83, 25, 'Lafia'),
(84, 25, 'Nasarawa'),
(85, 26, 'Agaie'),
(86, 26, 'Baro'),
(87, 26, 'Bida'),
(88, 26, 'Kontagora'),
(89, 26, 'Lapai'),
(90, 26, 'Minna'),
(91, 26, 'Suleja'),
(92, 27, 'Abeokuta'),
(93, 27, 'Ijebu-Ode'),
(94, 27, 'Ilaro'),
(95, 27, 'Shagamu'),
(96, 28, 'Akure'),
(97, 28, 'Ikare'),
(98, 28, 'Oka-Akoko'),
(99, 28, 'Ondo'),
(100, 28, 'Owo'),
(101, 29, 'Ede'),
(102, 29, 'Ikire'),
(103, 29, 'Ikirun'),
(104, 29, 'Ila'),
(105, 29, 'Ile-Ife'),
(106, 29, 'Ilesha'),
(107, 29, 'Ilobu'),
(108, 29, 'Inisa'),
(109, 29, 'Iwo'),
(110, 29, 'Oshogbo'),
(111, 30, 'Ibadan'),
(112, 30, 'Iseyin'),
(113, 30, 'Ogbomosho'),
(114, 30, 'Oyo'),
(115, 30, 'Saki'),
(116, 31, 'Bukuru'),
(117, 31, 'Jos'),
(118, 31, 'Vom'),
(119, 31, 'Wase'),
(120, 32, 'Bonny'),
(121, 32, 'Okrika'),
(122, 32, 'Port Harcourt'),
(123, 27, 'Sagamu'),
(124, 27, 'Obafemi Owode'),
(125, 29, 'Gbongan'),
(126, 30, '	Shaki'),
(127, 30, 'Kisi'),
(128, 30, 'Igboho'),
(129, 32, 'Buguma'),
(130, 33, 'Sokoto'),
(131, 34, 'Ibi'),
(132, 34, 'Jalingo'),
(133, 34, 'Muri'),
(134, 35, 'Damaturu'),
(135, 35, 'Nguru'),
(136, 35, 'Potiskum'),
(137, 35, 'Gashua'),
(138, 36, 'Gusau'),
(139, 36, 'Kaura Namoda');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(5) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`) VALUES
(6, 'milo'),
(5, 'peak milk'),
(4, 'biscuit'),
(7, 'map'),
(8, 'maple'),
(9, 'pizza');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(2) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Cashier 1'),
(2, 'Admin'),
(3, 'Database Officer'),
(4, 'Human Resource Department');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `sales_id` int(5) NOT NULL AUTO_INCREMENT,
  `stock_id` int(5) NOT NULL,
  `staff_id` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `item_id` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `remaining` int(5) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`sales_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(5) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `state_id` int(2) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT '0' COMMENT '0=regular 1=admin',
  `role_id` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `phone`, `email`, `state_id`, `admin`, `role_id`, `username`, `password`) VALUES
(1, 'tobi', '08100000', 'tekdhe@gmail.com', 37, 0, 1, 'user', 'user'),
(3, 'austin', '09074741077', 'austinogiza@gmail.com', 12, 1, 2, 'admin', 'admin'),
(12, 'ogiza', '09876543', 'ogiza@gmail.com', 12, 0, 3, 'ogiza', 'ogiza');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(2) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(20) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'Abia'),
(2, 'Adamawa'),
(3, 'Akwa Ibom'),
(4, 'Anambra'),
(5, 'Bauchi'),
(6, 'Bayelsa'),
(7, 'Benue'),
(8, 'Borno'),
(9, 'Cross River'),
(10, 'Delta'),
(11, 'Ebonyi'),
(12, 'Edo'),
(13, 'Ekiti'),
(14, 'Enugu'),
(15, 'Gombe'),
(16, 'Imo'),
(17, 'Jigawa'),
(18, 'Kaduna'),
(19, 'Kano'),
(20, 'Katsina'),
(21, 'Kebbi'),
(22, 'Kogi'),
(23, 'Kwara'),
(24, 'Lagos'),
(25, 'Nasarawa'),
(26, 'Niger'),
(27, 'Ogun'),
(28, 'Ondo'),
(29, 'Osun'),
(30, 'Oyo'),
(31, 'Plateau'),
(32, 'Rivers'),
(33, 'Sokoto'),
(34, 'Taraba'),
(35, 'Yobe'),
(36, 'Zamfara'),
(37, 'FCT');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `stock_id` int(5) NOT NULL AUTO_INCREMENT,
  `item_id` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(4) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `item_id`, `price`, `quantity`, `date`) VALUES
(1, 6, '245.00', 10, '2018-11-05 10:21:54'),
(2, 5, '340.00', 20, '2018-11-05 17:20:40'),
(3, 6, '24.00', 345, '2018-11-05 20:43:08'),
(4, 8, '200.00', 15, '2018-11-05 20:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userno` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `state_id` varchar(50) NOT NULL,
  PRIMARY KEY (`userno`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userno`, `username`, `firstname`, `lastname`, `email`, `password`, `state_id`) VALUES
(1, 'qa', 'a', 'a', 'a@gmail.com', 'aiuy', '5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
