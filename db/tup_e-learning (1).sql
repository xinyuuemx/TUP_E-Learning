-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 08:06 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tup_e-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `Account_ID` varchar(15) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Account_ID`, `Password`) VALUES
('1', '123456'),
('15-027-001', '123456'),
('15-027-002', '123456'),
('15-027-003', '123456'),
('15-027-004', '123456'),
('15-027-005', '123456'),
('15-027-036', '123456'),
('15-027-054', '123456'),
('2', '123456'),
('3', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Class_ID` int(10) NOT NULL,
  `Subject_code` int(10) NOT NULL,
  `Prof_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Class_ID`, `Subject_code`, `Prof_ID`) VALUES
(1111, 111, '1'),
(2221, 222, '2'),
(3331, 333, '3'),
(4441, 444, '4'),
(5551, 555, '5'),
(6661, 222, '1');

-- --------------------------------------------------------

--
-- Table structure for table `class_members`
--

CREATE TABLE `class_members` (
  `Class_key` int(12) NOT NULL,
  `Class_ID` int(10) NOT NULL,
  `Student_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_members`
--

INSERT INTO `class_members` (`Class_key`, `Class_ID`, `Student_ID`) VALUES
(1, 1111, '15-027-001'),
(2, 2221, '15-027-002'),
(3, 3331, '15-027-003'),
(4, 4441, '15-027-004'),
(5, 5551, '15-027-005'),
(6, 2221, '15-027-001'),
(7, 3331, '15-027-001');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Account_ID` varchar(15) NOT NULL,
  `Topic_ID` int(10) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Account_ID`, `Topic_ID`, `Comment`) VALUES
('15-027-001', 11111, 'amam om');

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `Prof_ID` varchar(10) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `M_name` varchar(20) NOT NULL,
  `E-mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`Prof_ID`, `L_name`, `F_name`, `M_name`, `E-mail`) VALUES
('1', 'Bituonan', 'Butch', 'A', 'bituonan.butch@example.com'),
('2', 'Garcia', 'May', 'B', 'garcia.may@example.com'),
('3', 'Calayag', 'Ernita', 'C', 'calayag.nitz@example.com'),
('4', 'Molino', 'Yany', 'D', 'molino.yany@example.com'),
('5', 'Renegado', 'Fernando', 'E', 'renegado.fernando@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `profile_elements`
--

CREATE TABLE `profile_elements` (
  `Account_ID` varchar(11) NOT NULL,
  `img_ID` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_elements`
--

INSERT INTO `profile_elements` (`Account_ID`, `img_ID`) VALUES
('15-027-036', 'j_pp'),
('15-027-054', 'david_pp'),
('15-027-003', 'm'),
('15-027-004', 'm'),
('15-027-005', 'm'),
('15-027-002', 'm'),
('15-027-001', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `Quiz_ID` int(10) NOT NULL,
  `Topic_ID` int(10) NOT NULL,
  `Question` varchar(30) NOT NULL,
  `Answer` varchar(20) NOT NULL,
  `Choices` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Student_ID` varchar(10) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `M_name` varchar(20) NOT NULL,
  `Course` varchar(6) NOT NULL,
  `Section` varchar(2) NOT NULL,
  `E-mail` varchar(30) NOT NULL,
  `gender` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Student_ID`, `L_name`, `F_name`, `M_name`, `Course`, `Section`, `E-mail`, `gender`) VALUES
('15-027-001', 'Dela Cruz', 'Juan', 'A', 'BSCS', 'A', 'delacruz.juan@example.com', 'm'),
('15-027-002', 'Dela Cruz', 'Pedro', 'B', 'BSCS', 'B', 'delacruz.pedro@example.com', 'm'),
('15-027-003', 'Dela Cruz', 'Bugoy', 'C', 'BSCS', 'A', 'delacruz.bugoy@example.com', 'm'),
('15-027-004', 'Dela Cruz', 'Auderic', 'D', 'BSCS', 'B', 'delacruz.auderic@example.com', 'm'),
('15-027-005', 'Dela Cruz', 'Wilberto', 'E', 'BSCS', 'A', 'delacruz.wilberto@example.com', 'm'),
('15-027-036', 'Ramirez', 'Janine', 'Brecia', 'BSCS', 'B', 'janine.ramirez@tup.edu.ph', 'f'),
('15-027-054', 'Boado', 'Jose Angelo David', 'San Gabriel', 'BSCS', 'B', 'davidsgboado@gmail.com', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `Subject_code` int(10) NOT NULL,
  `S_description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`Subject_code`, `S_description`) VALUES
(111, 'Web Development'),
(222, 'Software Engineering'),
(333, 'Linear Algebra'),
(444, 'Object Oriented Programming'),
(555, 'Data Structures');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `Topic_ID` int(10) NOT NULL,
  `Class_ID` int(10) NOT NULL,
  `T_file` varchar(32) NOT NULL,
  `T_description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`Topic_ID`, `Class_ID`, `T_file`, `T_description`) VALUES
(11111, 1111, 'html_tutorial.pdf', 'topic 1'),
(11112, 1111, 'css_tutorial.pdf', 'Topic 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Account_ID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Class_ID`);

--
-- Indexes for table `class_members`
--
ALTER TABLE `class_members`
  ADD PRIMARY KEY (`Class_key`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`Prof_ID`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`Quiz_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`Subject_code`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`Topic_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
