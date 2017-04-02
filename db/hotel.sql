-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2016 at 07:15 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_hotel`
--

CREATE TABLE IF NOT EXISTS `add_hotel` (
`hid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dist` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_hotel`
--

INSERT INTO `add_hotel` (`hid`, `name`, `dist`, `manager`, `contact`, `username`, `password`) VALUES
(21, 'Bolgatty Palace', 'Eranakulam', 'ravindran', '9985471236', 'bol1', '12345'),
(22, 'Lake Palace', 'Idukki', 'christy', '9965478214', 'lak1', '12345'),
(23, 'Tamarind Peermedu', 'Idukki', 'suku', '9966554412', 'tam1', '12345'),
(24, 'Tamarind Kannur', 'Kannur', 'raman', '9745862345', 'tam11', '12345'),
(25, 'Tamarind Kollam', 'Kasargod', 'edwin', '9966331144', 'tam111', '12345'),
(27, 'Water Scapes', 'Kottayam', 'alby', '8574569632', 'wat1', '12345'),
(28, 'Garden House', 'Kollam', 'hrithik', '9966554411', 'gar11', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `add_room`
--

CREATE TABLE IF NOT EXISTS `add_room` (
`rid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `rmtype` varchar(50) NOT NULL,
  `rate` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `free` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_room`
--

INSERT INTO `add_room` (`rid`, `hid`, `rmtype`, `rate`, `qty`, `free`) VALUES
(1, 21, 'Super-Deluxe', 1000, 10, 7),
(2, 21, 'Deluxe', 500, 10, 8),
(3, 21, 'Standard', 100, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE IF NOT EXISTS `destinations` (
`did` int(11) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `dist` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `descript` varchar(600) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`did`, `dname`, `dist`, `location`, `descript`, `contact`) VALUES
(11, 'Gavi', 'Pathanamthitta', 'pathanamthita', 'Gavi is an eco-tourist spot in Kerala which has widely become popular after ''Alistair International'' the world acclaimed tourism major listed it among the leading eco-tourism centres and one of the must-see places in India. A must visit place for all nature lovers as Gavi is preserved in its natural scenic beauty untainted by the mighty hands of modernity', '9854414236'),
(12, 'munnar', 'Idukki', 'idukki', 'Munnar - breathtakingly beautiful - a haven of peace and tranquility - the idyllic tourist destination in God''s own country. Set at an altitude of 6000 ft in Idukki district, Munnar was the favored summer resort of the erstwhile British rulers in the colonial days. Unending expanse of tea plantations - pristine valleys and mountains- exotic species of flora and fauna in its wild sanctuaries and forests - aroma of spice scented cool air - yes! Munnar has all these and more. It''s the place you would love to visit - it''s the place you would wish never to leave.', '9958745231');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`fedid` int(11) NOT NULL,
  `ymsg` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `mob` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fedid`, `ymsg`, `name`, `mob`, `email`, `date`) VALUES
(15, 'am satisfied', 'don', '8523697412', 'don@g.com', '2016-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_info`
--

CREATE TABLE IF NOT EXISTS `hotel_info` (
  `hid` int(11) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `dist` varchar(50) NOT NULL,
  `location` varchar(20) NOT NULL,
  `facilities` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_info`
--

INSERT INTO `hotel_info` (`hid`, `hname`, `dist`, `location`, `facilities`, `description`, `email`, `phno`) VALUES
(21, 'Bolgatty Palace', 'Eranakulam', 'vyppin', 'ac,wifi', '\r\nBest in class hospitality and care', 'bolgatty@gmail.com', '8524136974');

-- --------------------------------------------------------

--
-- Table structure for table `imp_event`
--

CREATE TABLE IF NOT EXISTS `imp_event` (
`eid` int(11) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `loca` varchar(50) NOT NULL,
  `edetails` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imp_event`
--

INSERT INTO `imp_event` (`eid`, `ename`, `loca`, `edetails`, `date`) VALUES
(4, 'Theyyam fest', 'Lake Palace kannur', '\r\nTheyyam fest will be conducted by kalamanadalam kunjukuttimarar from 10am to 2pm', '2016-05-26'),
(5, 'International cancer seminar', 'Bolgatti palace ekm', 'International seminar on the topic is cancer is curable by pro David melan\r\n', '2016-06-06'),
(6, 'Kathakali fest', 'tamarind kollam', '\r\nKathakali fest by kalamandalam shivan ', '2016-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`uid` int(11) NOT NULL,
  `utype` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `utype`, `username`, `password`) VALUES
(1, 'admin', 'admin', '12345'),
(37, 'hotel', 'bol1', '12345'),
(38, 'hotel', 'lak1', '12345'),
(39, 'hotel', 'tam1', '12345'),
(40, 'hotel', 'tam11', '12345'),
(41, 'hotel', 'tam111', '12345'),
(43, 'hotel', 'wat1', '12345'),
(44, 'hotel', 'gar11', '12345'),
(45, 'user', 'don1', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `address` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `username` varchar(19) NOT NULL,
  `password` varchar(21) NOT NULL,
  `repassword` varchar(22) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `address`, `email`, `phoneno`, `gender`, `username`, `password`, `repassword`) VALUES
(15, 'DON', ' KALAPURACKAL', 'don@g.com', 2147483647, 'm', 'don1', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
`id` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `uniq_id` varchar(50) NOT NULL,
  `room_type` varchar(22) NOT NULL,
  `in_date` date NOT NULL,
  `out_date` date NOT NULL,
  `rooms` int(11) NOT NULL,
  `adults` int(11) NOT NULL,
  `childrens` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `hid`, `uname`, `uniq_id`, `room_type`, `in_date`, `out_date`, `rooms`, `adults`, `childrens`) VALUES
(62, 21, 'don1', 'ktdckl57301700ea3ee', 'Super-Deluxe ', '2016-05-26', '2016-05-28', 1, 2, 2),
(63, 21, 'don1', 'ktdckl57304bca8ad70', 'Deluxe ', '2016-05-11', '2016-05-13', 2, 1, 1),
(64, 21, 'don1', 'ktdckl573059809ef48', 'Super-Deluxe ', '2016-05-12', '2016-05-15', 1, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_hotel`
--
ALTER TABLE `add_hotel`
 ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `add_room`
--
ALTER TABLE `add_room`
 ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
 ADD PRIMARY KEY (`did`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`fedid`);

--
-- Indexes for table `hotel_info`
--
ALTER TABLE `hotel_info`
 ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `imp_event`
--
ALTER TABLE `imp_event`
 ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_hotel`
--
ALTER TABLE `add_hotel`
MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `add_room`
--
ALTER TABLE `add_room`
MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
MODIFY `did` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `fedid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `imp_event`
--
ALTER TABLE `imp_event`
MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
