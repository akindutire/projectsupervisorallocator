-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2015 at 10:11 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectallocator`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` text NOT NULL,
  `pass` text NOT NULL,
  `name` text NOT NULL,
  `pix` varchar(180) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `mail`, `pass`, `name`, `pix`) VALUES
(1, 'akins@gmail.com', 'dale', 'Akindele Julius G.', '14139541821 (34).jpg'),
(2, 'myproject@gmail.com', 'myproject', 'Fumilayo', 'hgvvjhj.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bksreg`
--

CREATE TABLE IF NOT EXISTS `bksreg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pix` varchar(180) NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `level` varchar(8) NOT NULL,
  `matric` varchar(18) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `bksreg`
--

INSERT INTO `bksreg` (`id`, `pix`, `name`, `phone`, `mail`, `level`, `matric`) VALUES
(1, '14140498261655973_503166073163227_5795726148081480107_n.jpg', 'Akindutire Ayomide Sam', '08107926083', 'akins@gmail.com', 'ND2', 'SO5/COM/2012/495'),
(2, '1414049844996062_10152018109372241_1949938189_n.jpg', 'Bokipo Dayo Tola', '08107926083', 'akins@gmail.com', 'ND2', 'SO5/COM/2012/535'),
(3, '1414049862263566_10150227096707253_2511550_n.jpg', 'Akindele Seyi Sam', '08107926083', 'akins@gmail.com', 'ND2', 'SO5/COM/2012/578'),
(4, '141404987510453342_628656083897371_6826697104154071171_n.jpg', 'Akindele Seyi Sam', '08107926083', 'akindutireayo@yahoo.com', 'ND2', 'SO5/COM/2012/516'),
(5, '1414049915625453_576824212377050_1920596886_n.jpg', 'Akpobasa Ayomide Sam', '08107926083', 'akindutireayo@yahoo.com', 'ND2', 'SO5/COM/2012/535'),
(6, '1414049968MSO5COM2012490.jpg', 'Balogun Raymond Sam', '081038984999999', 'akindutireayo@yahoo.com', 'ND2', 'SO5/COM/2012/581'),
(7, '1414049987MSO6EET2012759.jpg', 'Akpobasa Ayomide Sam', '08107926083', 'akindutireayo@yahoo.com', 'HND2', 'SO5/COM/2012/515'),
(8, '141405003410442530_309048295946437_3698453582927776378_n.jpg', 'Arogun Seyi Sam', '08107926083', 'akins@gmail.com', 'HND2', 'SO5/COM/2012/511'),
(9, '141407351010500270_10152500236542870_34634460653132335_n.jpg', 'Akinbuluma Bunmi', '099393999493992', 'john@yahoo.com', 'HND2', 'SO5/COM/2012/590');

-- --------------------------------------------------------

--
-- Table structure for table `joint`
--

CREATE TABLE IF NOT EXISTS `joint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pix` varchar(180) NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `level` varchar(8) NOT NULL,
  `matric` varchar(18) NOT NULL,
  `sup` int(11) NOT NULL,
  `pt` text NOT NULL,
  `pd` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `joint`
--

INSERT INTO `joint` (`id`, `pix`, `name`, `phone`, `mail`, `level`, `matric`, `sup`, `pt`, `pd`) VALUES
(1, '14140498261655973_503166073163227_5795726148081480107_n.jpg', 'Akindutire Ayomide Sam', '08107926083', 'akins@gmail.com', 'ND2', 'SO5/COM/2012/495', 3, 'COMPUTERIZATION OF PROJECT STUDENT ALLOCATION', '` Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit. Maecenas Porttitor Congue Massa. Fusce Posuere, Magna Sed Pulvinar Ultricies, Purus Lectus Malesuada Libero, Sit Amet Commodo Magna Eros Quis Urna.\r\nNunc Viverra Imperdiet Enim. Fusce Est. Vivamus A Tellus.\r\nPellentesque Habitant Morbi Tristique Senectus Et Netus Et Malesuada Fames Ac Turpis Egestas. Proin Pharetra Nonummy Pede. Mauris Et Orci.\r\n\r\n'),
(2, '1414049862263566_10150227096707253_2511550_n.jpg', 'Akindele Seyi Sam', '08107926083', 'akins@gmail.com', 'ND2', 'SO5/COM/2012/578', 2, ' ', ' '),
(3, '141404987510453342_628656083897371_6826697104154071171_n.jpg', 'Akindele Seyi Sam', '08107926083', 'akindutireayo@yahoo.com', 'ND2', 'SO5/COM/2012/516', 2, ' ', ' '),
(4, '1414049915625453_576824212377050_1920596886_n.jpg', 'Akpobasa Ayomide Sam', '08107926083', 'akindutireayo@yahoo.com', 'ND2', 'SO5/COM/2012/535', 2, ' ', ' '),
(5, '1414049968MSO5COM2012490.jpg', 'Balogun Raymond Sam', '081038984999999', 'akindutireayo@yahoo.com', 'ND2', 'SO5/COM/2012/581', 4, ' ', ' '),
(6, '1414049987MSO6EET2012759.jpg', 'Akpobasa Ayomide Sam', '08107926083', 'akindutireayo@yahoo.com', 'HND2', 'SO5/COM/2012/515', 4, ' ', ' '),
(7, '141405003410442530_309048295946437_3698453582927776378_n.jpg', 'Arogun Seyi Sam', '08107926083', 'akins@gmail.com', 'HND2', 'SO5/COM/2012/511', 4, ' ', ' '),
(8, '1414049844996062_10152018109372241_1949938189_n.jpg', 'Bokipo Dayo Tola', '08107926083', 'akins@gmail.com', 'ND2', 'SO5/COM/2012/535', 2, ' ', ' '),
(9, '141407351010500270_10152500236542870_34634460653132335_n.jpg', 'Akinbuluma Bunmi', '099393999493992', 'john@yahoo.com', 'HND2', 'SO5/COM/2012/590', 4, ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `sreg`
--

CREATE TABLE IF NOT EXISTS `sreg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pix` varchar(180) NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `level` varchar(8) NOT NULL,
  `matric` varchar(18) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE IF NOT EXISTS `supervisors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `rank` text NOT NULL,
  `office` text NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`id`, `name`, `rank`, `office`, `mail`, `phone`) VALUES
(2, 'Engr. Owa K.', 'LECTURER', '7003', 'alah@yahoo.com', '08107926083'),
(3, 'Mrs Agbelusi O.', 'HOD', '9003', 'akins@gmail.com', '08103898499'),
(4, 'Mr Johnson', 'LECTURER', '9003', 'johnson@gmail.com', '08299399399');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
