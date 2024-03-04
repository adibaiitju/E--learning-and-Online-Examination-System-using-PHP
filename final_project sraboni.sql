-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 03:57 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Description` varchar(1000) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Email_ID` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Description`, `Full_Name`, `Email_ID`) VALUES
('Many things should be change', 'Sraboni Ghosh', 'sraboniit08@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

CREATE TABLE IF NOT EXISTS `mcq` (
  `MCQ_ID` varchar(100) NOT NULL,
  `Question` text NOT NULL,
  `Correct_Answer` text NOT NULL,
  `Wrong_one` text NOT NULL,
  `Wrong_two` text NOT NULL,
  `Wrong_three` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcq`
--

INSERT INTO `mcq` (`MCQ_ID`, `Question`, `Correct_Answer`, `Wrong_one`, `Wrong_two`, `Wrong_three`) VALUES
('', '', ' ', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ques1`
--

CREATE TABLE IF NOT EXISTS `ques1` (
  `qs_id` varchar(100) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques1`
--

INSERT INTO `ques1` (`qs_id`, `question`) VALUES
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `User_Id` int(50) NOT NULL,
  `Full_Name` char(100) NOT NULL,
  `Batch` varchar(100) NOT NULL,
  `Email_ID` varchar(500) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`User_Id`, `Full_Name`, `Batch`, `Email_ID`, `Password`) VALUES
(1960, 'Nafsan Liman', '46th', 'liman.stu2016@juniv.edu', '461960'),
(1961, 'Tahmina Harun Faria', '46th', 'faria.stu2016@juniv.edu', '461961'),
(1980, 'Maysha Fahmida', '46th', 'maysha.stu2016@juniv.edu', '461980'),
(1983, 'Sraboni Ghosh', '46th', 'sraboniit08@gmail.com', '461983');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `Name` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Name`, `Email`, `Password`) VALUES
('Shamim Al Mamun', 'mamun@juniv.edu', '2222'),
('Manan Binth Taj Noor', 'manan@juniv.edu', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`Email_ID`);

--
-- Indexes for table `mcq`
--
ALTER TABLE `mcq`
 ADD PRIMARY KEY (`MCQ_ID`);

--
-- Indexes for table `ques1`
--
ALTER TABLE `ques1`
 ADD PRIMARY KEY (`qs_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`Email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
