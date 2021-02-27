-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2020 at 01:21 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `ce`
--

DROP TABLE IF EXISTS `ce`;
CREATE TABLE IF NOT EXISTS `ce` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `regno` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `branch` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ce`
--

INSERT INTO `ce` (`ID`, `regno`, `fname`, `mname`, `lname`, `gender`, `contact`, `email`, `password`, `branch`) VALUES
(1, '2020UGCE001', 'shs', 'Kumar', 'gartd', 'male', '3696369', '457@gmail.com', '00', 'CE'),
(3, '2020UGCE003', 'jay', 'deep', 'raj', 'male', '5555', 'civil@gmail.cm', '100', 'CE');

-- --------------------------------------------------------

--
-- Table structure for table `cse`
--

DROP TABLE IF EXISTS `cse`;
CREATE TABLE IF NOT EXISTS `cse` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `regno` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `branch` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse`
--

INSERT INTO `cse` (`ID`, `regno`, `fname`, `mname`, `lname`, `gender`, `contact`, `email`, `password`, `branch`) VALUES
(1, '2020UGCS001', 'shs', 'sdd', 'g', 'male', '55222', 'cse@gmail.com', '100', 'CSE'),
(2, '2020UGCS002', 'Dinesh', 'Kumar', 'Dynamo', 'male', '7093211749', 'dinesh123@gmail.com', '100', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `ece`
--

DROP TABLE IF EXISTS `ece`;
CREATE TABLE IF NOT EXISTS `ece` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `regno` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `branch` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ece`
--

INSERT INTO `ece` (`ID`, `regno`, `fname`, `mname`, `lname`, `gender`, `contact`, `email`, `password`, `branch`) VALUES
(1, '2020UGEC001', 'teg', 'gah', 'sh', 'female', '3696369', 'ece@gmail.com', '100', 'ECE');

-- --------------------------------------------------------

--
-- Table structure for table `ee`
--

DROP TABLE IF EXISTS `ee`;
CREATE TABLE IF NOT EXISTS `ee` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `regno` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `branch` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `me`
--

DROP TABLE IF EXISTS `me`;
CREATE TABLE IF NOT EXISTS `me` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `regno` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `branch` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `me`
--

INSERT INTO `me` (`ID`, `regno`, `fname`, `mname`, `lname`, `gender`, `contact`, `email`, `password`, `branch`) VALUES
(1, '2020UGME001', 'shs', 'sdd', 'dsdd', 'male', '3696369', 'me@gmail.com', '100', 'ME');

-- --------------------------------------------------------

--
-- Table structure for table `mme`
--

DROP TABLE IF EXISTS `mme`;
CREATE TABLE IF NOT EXISTS `mme` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `regno` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `branch` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pie`
--

DROP TABLE IF EXISTS `pie`;
CREATE TABLE IF NOT EXISTS `pie` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `regno` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `branch` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(60) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `course` varchar(60) NOT NULL,
  `branch` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `emergencycontact` varchar(60) NOT NULL,
  `guardianname` varchar(60) NOT NULL,
  `guardianrelation` varchar(60) NOT NULL,
  `guardiancontact` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(60) NOT NULL,
  `pincode` varchar(60) NOT NULL,
  `roomnumber` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `fname`, `mname`, `lname`, `gender`, `course`, `branch`, `contact`, `email`, `emergencycontact`, `guardianname`, `guardianrelation`, `guardiancontact`, `address`, `city`, `state`, `pincode`, `roomnumber`) VALUES
(1, 'shs', 'sdd', 'g', 'Male', 'B.Tech', 'CSE', '5555', 'cse@gmail.com', '12133231', 'Dinesh', 'Father', '7093211749', 'dbucdsc dbsdc dbsdb dbkjbdsc', 'Hyderabad', 'Telangana', '522104', 'A-001'),
(33, 'Dinesh', 'Kumar', 'Dynamo', 'Male', 'B.Tech', 'CSE', '7093211749', 'dinesh123@gmail.com', '6303163025', 'Kishore', 'Father', '9849843175', '21-6-163, ramalingewar pet', 'tenali', 'Andhra Pradesh', '522201', 'A-002'),
(27, 'kumar', 'aditya', 'varma', 'Female', 'B.Tech', 'ECE', '639636933', 'ece@gmail.com', '52566554', 'dany', 'Father', '5654416841', 'hyran street,9 colony', 'rajham', 'Puducherry', '785255', 'B-001'),
(32, 'jay', 'deep', 'raj', 'Male', 'B.Tech', 'CE', '11365', 'civil@gmail.cm', '32154896', 'ganesh', 'father', '123456789', 'boase road , kotha pet', 'tenali', 'Andhra Pradesh', '522201', 'E-003');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(60) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `branch` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `fname`, `mname`, `lname`, `gender`, `contact`, `email`, `password`, `branch`) VALUES
(1, '000', 'fdv', 'dvdf', 'dvv', 'dvdfvd', 'dvdfvdv', 'dvdvdv', ''),
(2, 'Dinesh', 'sdd', 'dsdd', 'male', '3696369', 'doctor@gmail.com', '100', ''),
(4, 'shs', 'sdd', 'dsdd', 'male', '3696369', 'pdinesh.ms7@gmail.com', '000', ''),
(5, 'shs', 'sdd', 'dsdd', 'male', '3696369', 'rrr@gmail.com', '00', 'CSE'),
(6, 'Dinesh', 'Kumar', 'faduay', 'male', '222222', 'dsjkcjd@gmail.com', '123', ''),
(7, 'shs', 'sdd', 'dsdd', 'female', '1220333', 'gg@gmail.com', '230', 'EE'),
(8, 'shs', 'sdd', 'dsdd', 'male', '0000', 'cs@gmail.com', '100', ''),
(27, 'Dinesh', 'Kumar', 'Dynamo', 'male', '7093211749', 'dinesh123@gmail.com', '100', 'CSE'),
(10, 'shs', 'sdd', 'dsdd', 'male', '3696369', 'doctor@gmail.com', '100', ''),
(11, 'shs', 'sdd', 'dsdd', 'male', '3696369', 'doctor@gmail.com', '100', ''),
(12, 'shs', 'sdd', 'dsdd', 'male', '222222', 'hjhj@gmail.com', 'g', ''),
(23, 'shs', 'Kumar', 'gartd', 'male', '3696369', '457@gmail.com', '00', 'CE'),
(24, 'teg', 'gah', 'sh', 'female', '3696369', 'ece@gmail.com', '100', 'ECE'),
(25, 'shs', 'sdd', 'dsdd', 'male', '3696369', 'me@gmail.com', '100', 'ME'),
(26, 'jay', 'deep', 'raj', 'male', '5555', 'civil@gmail.cm', '100', 'CE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
