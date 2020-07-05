-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 08:42 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE `addstudent` (
  `student_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `class` varchar(20) NOT NULL,
  `compnayname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`student_name`, `email`, `class`, `compnayname`) VALUES
('Nagbhushan Kumbar', 'k.abhikumbar.ak@gmail.com', 'technocrats', 'Wipro'),
('Prajakta Patil', '123prajaktapatil@gmail.com', 'Technocrats', 'TCS'),
('Leena Sonawane', 'leena@gmail.com', 'Technocrats', 'Google'),
('Mahesh Solanke', 'maheshsolanke69@gmail.com', 'Codewarrior', 'Wipro');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Prajakta ', '123'),
('Nagbhushan', '123');

-- --------------------------------------------------------

--
-- Table structure for table `company_reg`
--

CREATE TABLE `company_reg` (
  `compnay_name` varchar(20) NOT NULL,
  `compnay_details` longtext NOT NULL,
  `email` varchar(30) NOT NULL,
  `cperson` varchar(10) NOT NULL,
  `pass1` varchar(20) NOT NULL,
  `pass2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_reg`
--

INSERT INTO `company_reg` (`compnay_name`, `compnay_details`, `email`, `cperson`, `pass1`, `pass2`) VALUES
('Systools', 'systeools', 'abc@gmail.com', '7845124578', '123456', '123456'),
('abh', 'sdfghjkl', 'dfghj@dfgh.co', '4578451245', '123456', '123456'),
('Google', 'google', 'google@gmail.com', '9887455622', '123456', '123456'),
('Infosys', 'Infosystems are located in Hinjewadi Phase 3', 'infosys@system.com', '9021642208', '753.0', '753.0'),
('Leena Info', 'Leena Sonawane is a owner of this company', 'lasonawane1997@gmail.com', '9028423991', '123456', '123456'),
('TCS', 'tc', 'tcs@gmail.com', '9579648080', '45782', '45785'),
('Tech.M', 'tech Mahendra', 'tech@m.com', '2587452145', '124578', '124578'),
('wipro', 'Wipro located At hinjewadi', 'wipro@gmail.com', '6598784578', '85208', '85208');

-- --------------------------------------------------------

--
-- Table structure for table `complogin`
--

CREATE TABLE `complogin` (
  `drivedate` datetime(6) NOT NULL,
  `reqskills` varchar(100) NOT NULL,
  `rounddetail` longtext NOT NULL,
  `eligibility` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complogin`
--

INSERT INTO `complogin` (`drivedate`, `reqskills`, `rounddetail`, `eligibility`) VALUES
('2019-10-06 00:00:00.000000', 'kjghkrh', 'khkdhgk', 'ndkfjhk'),
('2019-10-27 00:00:00.000000', 'tryui', 'hvgjbhknjm', 'fgvbhjnlkm'),
('2019-10-04 23:59:00.000000', 'Php based', 'Apti', '60%'),
('2019-10-09 08:58:00.000000', 'java', '1234554', 'min 60%'),
('2019-10-05 00:59:00.000000', 'java developer', 'APTI', '60%');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `student_name` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `skills` longtext NOT NULL,
  `qualification` text NOT NULL,
  `passyear` year(4) NOT NULL,
  `pass1` varchar(15) NOT NULL,
  `pass2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`student_name`, `email`, `contact`, `gender`, `skills`, `qualification`, `passyear`, `pass1`, `pass2`) VALUES
('Ankita Agrawal', 'ankita@gmail.com', '4578457844', 'F', 'Sw Developer', 'MCA II', 2019, '123456', '123456'),
('tanuja', 'tanu@gmail.com', '7768594857', 'F', 'skjgjsgfjsgjsg', 'MCA I', 2004, '132132', '123123'),
('Abhishek Kumbar', 'k.abhikumbar.ak@gmail.com', '9028423992', 'M', 'I am a software Developer...\r\nChilll ', 'MCA II', 2019, 'kabhi', 'kabhi'),
('Leena', 'lasonawane1997@gmail.com', '9078457845', 'F', 'Food Lover', 'MCA II', 2019, '123456', '123456'),
('Mahesh Solanke', 'maheshsolanke69@gmail.com', '7770031032', 'M', 'Pagal Developer', 'MCA II', 2019, 'mahwsh', 'mahesh'),
('Rupesh', 'rupesh@gmail.com', '4578451255', 'M', 'sdfghj\r\nvjk', 'MCA II', 2012, '123456', '123456'),
('Shrikant ', 'shri@gmail.com', '4578895645', 'M', 'asdfghjkl;sdcfvhnjk.\r\nsdfghjklfvgbhjkl;', 'MCA II', 2018, '123', ''),
('Prajakta patil', '123prajaktapatil@gmail.co', '8854124576', 'F', 'coding typing', 'MCA II', 2019, '1234', '1234'),
('Jyoti', 'jy@gmail.com', '8527412587', 'F', 'jyotii', 'MCA III', 2002, '123456', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tempcompany`
--

CREATE TABLE `tempcompany` (
  `compnay_name` varchar(30) NOT NULL,
  `compnay_details` longtext NOT NULL,
  `email` varchar(30) NOT NULL,
  `cperson` varchar(10) NOT NULL,
  `pass1` varchar(15) NOT NULL,
  `pass2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempcompany`
--

INSERT INTO `tempcompany` (`compnay_name`, `compnay_details`, `email`, `cperson`, `pass1`, `pass2`) VALUES
('Infosys', 'sdfghjkl;', 'fghjk@gmail.com', '8754785421', '123456', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tempstudent`
--

CREATE TABLE `tempstudent` (
  `student_name` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `skills` longtext NOT NULL,
  `qualification` text NOT NULL,
  `passyear` year(4) NOT NULL,
  `pass1` varchar(15) NOT NULL,
  `pass2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(4) NOT NULL,
  `notify` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `notify`) VALUES
(5, 'TCS is going to Conduct Aptitude Training Sessions'),
(6, 'Wipro arriving for pool campus selection process on 20th oct  @ 10:00 am Sharp.'),
(7, 'L&T is going to Conduct Aptitude Training Sessions for 1st years form 25 Oct 2019.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_reg`
--
ALTER TABLE `company_reg`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tempcompany`
--
ALTER TABLE `tempcompany`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tempstudent`
--
ALTER TABLE `tempstudent`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
