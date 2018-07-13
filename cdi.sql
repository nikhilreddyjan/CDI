-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 03:11 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdi`
--

-- --------------------------------------------------------

--
-- Table structure for table `addevent`
--

CREATE TABLE `addevent` (
  `eventid` varchar(30) NOT NULL,
  `eventname` varchar(100) NOT NULL,
  `eventtype` varchar(30) NOT NULL,
  `eventdesc` longtext NOT NULL,
  `expirydate` varchar(15) NOT NULL,
  `branch` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addevent`
--

INSERT INTO `addevent` (`eventid`, `eventname`, `eventtype`, `eventdesc`, `expirydate`, `branch`) VALUES
('1', 'srre', 'tech', 'coding', '07-11-2018', 'CSE,IT'),
('10', 'kqwendkwed', 'nontch', 'wk;edqwkjehdqhediqjbjqwehdouwhefuhefugeufguefgyuegfyegfyqgweyj', '2018-07-05', 'IT'),
('14', 'codevita', 'tech', ' its all about enhancing your coding skills', '2018-07-19', 'IT,CSE'),
('3', 'c', 'nontch', 'erfwerf', '07-20-2018', 'CSE,ECE,EEE,CHEM,IT'),
('6', 'chg', 'nontch', 'erfwerfjg', '08-20-2018', 'CIVIL,MECH');

-- --------------------------------------------------------

--
-- Table structure for table `eventregister`
--

CREATE TABLE `eventregister` (
  `eventid` varchar(30) NOT NULL,
  `eventname` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `teammember1` varchar(40) NOT NULL,
  `teammember2` varchar(40) NOT NULL,
  `teamname` varchar(40) NOT NULL,
  `htno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventregister`
--

INSERT INTO `eventregister` (`eventid`, `eventname`, `fullname`, `phno`, `email`, `teammember1`, `teammember2`, `teamname`, `htno`) VALUES
('14', 'codevita', 'vinay', 8341643686, 'vinayraghav39@gmail.com', 'nikhil', 'karthik', 'coders', '15h61a1260'),
('3', 'c', 'vinay', 8341643686, 'vinayraghav39@gmail.com', 'pilli', 'lallu', 'PILLI VINAY RAGHAV', '15h61a1260');

-- --------------------------------------------------------

--
-- Table structure for table `faclogin`
--

CREATE TABLE `faclogin` (
  `logid` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faclogin`
--

INSERT INTO `faclogin` (`logid`, `pwd`) VALUES
('raviraju', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fullname` varchar(50) NOT NULL,
  `htno` varchar(10) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fullname`, `htno`, `branch`, `phno`, `email`, `pwd`) VALUES
('ravib', '1232', 'IT', 9848171600, 'ravi', 'ravi'),
('abcd', '123456', 'IT', 8341643686, '39@gmail.com', 'qwerty'),
('123456789', '15h61a111', 'CSE', 123456789, 'qwert@gmail.com', '15h61a111'),
('karthik', '15h61a1224', 'IT', 9999999999, 'karthik@gmail.com', 'qwerty'),
('varun', '15h61a1233', 'IT', 8341643686, 'varun39@gmail.com', 'qwerty'),
('nikhil', '15h61a1253', 'IT', 9999999999, 'nikhil@gmail.com', 'nikhil'),
('preetham', '15h61a1259', 'IT', 8341643686, '9@gmail.com', 'qwerty'),
('vi', '15h61a126', 'IT', 9999999999, 'nhjikil', '9999999999'),
('vinay', '15h61a1260', 'IT', 8341643686, 'vinayraghav39@gmail.com', 'qwerty'),
('qwertyuio', '15h61a1266', 'CSE', 987654321, 'vinayraghav3@gmail.co', '123456'),
('gdhdg', 'gdgdgdgd', 'CSE', 900989990, 'hddg', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addevent`
--
ALTER TABLE `addevent`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `eventregister`
--
ALTER TABLE `eventregister`
  ADD UNIQUE KEY `eventid` (`eventid`);

--
-- Indexes for table `faclogin`
--
ALTER TABLE `faclogin`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`htno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
