-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 03:29 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Account_ID`, `Password`) VALUES
('01-01-1980', '123456'),
('01-02-1980', '123456'),
('01-03-1980', '123456'),
('01-04-1980', '123456'),
('01-05-1980', '123456'),
('01-06-1980', '123456'),
('01-07-1980', '123456'),
('01-08-1980', '123456'),
('01-09-1980', '123456'),
('01-10-1980', '123456'),
('01-11-1980', '123456'),
('01-12-1980', '123456'),
('01-13-1980', '123456'),
('01-14-1980', '123456'),
('01-15-1980', '123456'),
('01-16-1980', '123456'),
('01-17-1980', '123456'),
('01-18-1980', '123456'),
('01-19-1980', '123456'),
('01-20-1980', '123456'),
('02-01-1980', '123456'),
('02-02-1980', '123456'),
('1', '123456'),
('14-021-001', '123456'),
('14-021-002', '123456'),
('14-021-003', '123456'),
('14-021-004', '123456'),
('14-021-005', '123456'),
('14-021-006', '123456'),
('14-021-007', '123456'),
('14-021-008', '123456'),
('14-021-009', '123456'),
('14-021-010', '123456'),
('15-027-001', '123456'),
('15-027-002', '123456'),
('15-027-003', '123456'),
('15-027-004', '123456'),
('15-027-005', '123456'),
('15-027-036', '123456'),
('15-027-054', '123456'),
('15-037-001', '123456'),
('15-037-002', '123456'),
('15-037-003', '123456'),
('15-037-004', '123456'),
('15-037-005', '123456'),
('15-037-006', '123456'),
('15-037-007', '123456'),
('15-037-008', '123456'),
('15-037-009', '123456'),
('15-037-010', '123456'),
('16-019-001', '123456'),
('16-019-002', '123456'),
('16-019-003', '123456'),
('16-019-004', '123456'),
('16-019-005', '123456'),
('16-019-006', '123456'),
('16-019-007', '123456'),
('16-019-008', '123456'),
('16-019-009', '123456'),
('16-019-010', '123456'),
('17-037-001', '$2y$10$zpcA7UAk7c26Nadm4dV8o.8R.tf.3GBWdCyYKqJZGegseNlljfnf2'),
('17-037-002', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('17-037-003', '$2y$10$d3czZ7ey3IJ1RNDzbK8O8e1INMLGshqxqTBN/B1fTBmOaDyJZmD8e'),
('17-037-004', '$2y$10$VlGOPPcaFbHUk72ztm9RjuY/ppelA8gFEUW9xXRzAobR4qFGOopZW'),
('17-037-005', '$2y$10$4qf3a9bfyjdibFblcGdnLu2Fq/x7gCvbcqMBdHF2XJGn1Q.U/fPpO'),
('17-037-006', '$2y$10$RH1oN3jCxh0A3Kom00vgOe.YfR31SFmTH84MGCBxT//bfAXsmMNvq'),
('17-037-007', '$2y$10$VXn31B7F7Awunb5B8zN6H.2ANbm8SNPimtkbfGzn0bg20Srgb9dTq'),
('17-037-008', '$2y$10$UgIbTZJr8YHWV1wOda.mUuRrSGpFSve3.n766rdNk.P52/Q11UA5a'),
('17-037-009', '$2y$10$/Z2iG7.iPmbtiwcozwrVreXXlbZKpx3xAeSD0AVqyu1CgX.5SL9uG'),
('17-037-010', '$2y$10$a3rfG6WUKzo8bBmoEukUrOwEdMmsRKgYnt7tidUdKwA9eDaN7G6FG'),
('2', '123456'),
('3', '123456')
('admin','admin');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Class_ID` int(10) NOT NULL,
  `Subject_code` varchar(10) NOT NULL,
  `Prof_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Class_ID`, `Subject_code`, `Prof_ID`) VALUES
(1, 'CS 321', '01-01-1980'),
(2, 'CS 321L', '01-01-1980'),
(3, 'CS 212', '01-11-1980'),
(4, 'CS 212L', '01-11-1980'),
(5, 'CS 123', '01-10-1980'),
(6, 'CHEM 11', '01-17-1980'),
(7, 'CHEM 11L', '01-17-1980'),
(8, 'CS 101', '01-13-1980'),
(9, 'CS 111', '01-08-1980'),
(10, 'CS 111L', '01-08-1980'),
(11, 'ENG 1', '01-15-1980'),
(12, 'MATH 1', '01-18-1980'),
(13, 'MATH 2A', '01-04-1980'),
(14, 'NSTP 1', '01-19-1980'),
(15, 'PE 1', '01-20-1980'),
(16, 'CS 122', '01-12-1980'),
(17, 'CS 122L', '01-12-1980'),
(18, 'ENG 2', '01-02-1980'),
(19, 'FIL 1', '01-02-1980'),
(20, 'MATH 5A', '02-01-1980'),
(21, 'NSTP 2', '01-19-1980'),
(22, 'PE 2', '02-02-1980'),
(23, 'PHYS 1A', '01-07-1980'),
(24, 'PHYS 1AL', '01-07-1980'),
(25, 'CS 211', '01-12-1980'),
(26, 'CS 211L', '01-12-1980'),
(27, 'CS 212', '01-11-1980'),
(28, 'CS 212L', '01-11-1980'),
(29, 'ENG 3', '01-15-1980'),
(30, 'CS 213', '01-10-1980'),
(31, 'PHYS 2B', '01-10-1980'),
(32, 'PHYS 2BL', '01-10-1980'),
(33, 'CS 311', '01-12-1980'),
(34, 'CS 311L', '01-12-1980'),
(35, 'CS 312', '01-12-1980'),
(36, 'CS 312L', '01-12-1980'),
(37, 'CSE 1', '01-06-1980'),
(38, 'CSF 1', '01-06-1980'),
(39, 'CSF 2', '01-06-1980'),
(40, 'CSF 3', '01-06-1980'),
(41, 'CSF 4', '01-06-1980'),
(42, 'CSE 2', '01-06-1980'),
(43, 'MATH 2A', '01-05-1980'),
(44, 'MATH 10', '01-05-1980'),
(45, 'MATH 2', '01-05-1980'),
(46, 'MATH 8', '01-09-1980'),
(47, 'MATH 6', '01-09-1980'),
(48, 'ME 1', '01-09-1980'),
(49, 'ME 2', '01-09-1980'),
(50, 'ME 12D', '01-09-1980');

-- --------------------------------------------------------

--
-- Table structure for table `class_members`
--

CREATE TABLE `class_members` (
  `Class_ID` int(10) NOT NULL,
  `Student_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_members`
--

INSERT INTO `class_members` (`Class_ID`, `Student_ID`) VALUES
(1, '14-021-001'),
(1, '14-021-002'),
(1, '14-021-003'),
(2, '14-021-001'),
(3, '14-021-001'),
(4, '14-021-001'),
(5, '14-021-001'),
(2, '14-021-002'),
(3, '14-021-002'),
(4, '14-021-002'),
(5, '14-021-002'),
(2, '14-021-003'),
(3, '14-021-003'),
(4, '14-021-003'),
(5, '14-021-003'),
(1, '14-021-004'),
(2, '14-021-004'),
(3, '14-021-004'),
(4, '14-021-004'),
(5, '14-021-004'),
(1, '14-021-005'),
(2, '14-021-005'),
(3, '14-021-005'),
(4, '14-021-005'),
(5, '14-021-005'),
(1, '14-021-006'),
(2, '14-021-006'),
(3, '14-021-006'),
(4, '14-021-006'),
(5, '14-021-006'),
(1, '14-021-007'),
(2, '14-021-007'),
(3, '14-021-007'),
(4, '14-021-007'),
(5, '14-021-007'),
(1, '14-021-008'),
(2, '14-021-008'),
(3, '14-021-008'),
(4, '14-021-008'),
(5, '14-021-008'),
(1, '14-021-009'),
(2, '14-021-009'),
(3, '14-021-009'),
(4, '14-021-009'),
(5, '14-021-009'),
(1, '14-021-010'),
(2, '14-021-010'),
(3, '14-021-010'),
(4, '14-021-010'),
(5, '14-021-010'),
(11, '15-037-001'),
(12, '15-037-001'),
(13, '15-037-001'),
(14, '15-037-001'),
(15, '15-037-001'),
(16, '15-037-001'),
(17, '15-037-001'),
(18, '15-037-001'),
(19, '15-037-001'),
(20, '15-037-001'),
(11, '15-037-002'),
(12, '15-037-002'),
(13, '15-037-002'),
(14, '15-037-002'),
(15, '15-037-002'),
(16, '15-037-002'),
(17, '15-037-002'),
(18, '15-037-002'),
(19, '15-037-002'),
(20, '15-037-002'),
(11, '15-037-003'),
(12, '15-037-003'),
(13, '15-037-003'),
(14, '15-037-003'),
(15, '15-037-003'),
(16, '15-037-003'),
(17, '15-037-003'),
(18, '15-037-003'),
(19, '15-037-003'),
(20, '15-037-003'),
(11, '15-037-004'),
(12, '15-037-004'),
(13, '15-037-004'),
(14, '15-037-004'),
(15, '15-037-004'),
(16, '15-037-004'),
(17, '15-037-004'),
(18, '15-037-004'),
(19, '15-037-004'),
(20, '15-037-004'),
(11, '15-037-005'),
(12, '15-037-005'),
(13, '15-037-005'),
(14, '15-037-005'),
(15, '15-037-005'),
(16, '15-037-005'),
(17, '15-037-005'),
(18, '15-037-005'),
(19, '15-037-005'),
(20, '15-037-005'),
(21, '15-037-006'),
(22, '15-037-006'),
(23, '15-037-006'),
(24, '15-037-006'),
(25, '15-037-006'),
(26, '15-037-006'),
(27, '15-037-006'),
(28, '15-037-006'),
(29, '15-037-006'),
(30, '15-037-006'),
(11, '15-037-007'),
(12, '15-037-007'),
(13, '15-037-007'),
(14, '15-037-007'),
(15, '15-037-007'),
(16, '15-037-007'),
(17, '15-037-007'),
(18, '15-037-007'),
(19, '15-037-007'),
(20, '15-037-007'),
(11, '15-037-008'),
(12, '15-037-008'),
(13, '15-037-008'),
(14, '15-037-008'),
(15, '15-037-008'),
(11, '15-037-009'),
(12, '15-037-009'),
(13, '15-037-009'),
(14, '15-037-009'),
(15, '15-037-009'),
(11, '15-037-010'),
(12, '15-037-010'),
(13, '15-037-010'),
(14, '15-037-010'),
(15, '15-037-010'),
(41, '15-027-001'),
(42, '15-027-001'),
(43, '15-027-001'),
(44, '15-027-001'),
(45, '15-027-001'),
(41, '15-027-002'),
(42, '15-027-002'),
(43, '15-027-002'),
(44, '15-027-002'),
(45, '15-027-002'),
(41, '15-027-003'),
(42, '15-027-003'),
(43, '15-027-003'),
(44, '15-027-003'),
(45, '15-027-003'),
(41, '15-027-004'),
(42, '15-027-004'),
(43, '15-027-004'),
(44, '15-027-004'),
(45, '15-027-004'),
(41, '15-027-005'),
(42, '15-027-005'),
(43, '15-027-005'),
(44, '15-027-005'),
(45, '15-027-005'),
(31, '15-027-036'),
(32, '15-027-036'),
(33, '15-027-036'),
(34, '15-027-036'),
(35, '15-027-036'),
(31, '15-027-054'),
(32, '15-027-054'),
(33, '15-027-054'),
(34, '15-027-054'),
(35, '15-027-054'),
(1, '16-019-001'),
(2, '16-019-001'),
(1, '16-019-002'),
(2, '16-019-002'),
(1, '16-019-003'),
(2, '16-019-003'),
(1, '16-019-004'),
(2, '16-019-004'),
(1, '16-019-005'),
(2, '16-019-006'),
(1, '16-019-007'),
(2, '16-019-007'),
(1, '16-019-008'),
(2, '16-019-008'),
(1, '16-019-009'),
(1, '16-019-009'),
(2, '16-019-009'),
(1, '16-019-010'),
(2, '16-019-010'),
(3, '17-037-001'),
(4, '17-037-001'),
(1, '17-037-002'),
(2, '17-037-002'),
(3, '17-037-003'),
(4, '17-037-003'),
(3, '17-037-004'),
(4, '17-037-004'),
(3, '17-037-005'),
(4, '17-037-005'),
(3, '17-037-006'),
(4, '17-037-006'),
(3, '17-037-007'),
(4, '17-037-007'),
(1, '17-037-008'),
(4, '17-037-008'),
(3, '17-037-009'),
(4, '17-037-009'),
(3, '17-037-010'),
(4, '17-037-010');

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
('01-01-1980', 'Bituonan', 'Butch', 'A', 'bituonan.butch@example.com'),
('01-02-1980', 'Caiña', 'Jonathan', 'V', 'jonathan.caina@example.com'),
('01-03-1980', 'Latip', 'Latip', 'L', 'latip@example.com'),
('01-04-1980', 'Huang', 'Maam', 'C', 'huang@example.com'),
('01-05-1980', 'Bondoc', 'Sir', 'L', 'bondoc@example.com'),
('01-06-1980', 'Sotelo', 'Precy', 'B', 'psotelo@example.com'),
('01-07-1980', 'Logmao', 'Dario', 'P', 'dlogmao@example.com'),
('01-08-1980', 'Amador', 'Madz', 'P', 'madz.amador@example.com'),
('01-09-1980', 'Garcia', 'May', 'B', 'garcia.may@example.com'),
('01-10-1980', 'Calayag', 'Ernita', 'C', 'calayag.nitz@example.com'),
('01-11-1980', 'Molino', 'Yany', 'D', 'molino.yany@example.com'),
('01-12-1980', 'Renegado', 'Fernando', 'E', 'renegado.fernando@example.com'),
('01-13-1980', 'Tarnate', 'Ken', 'F', 'ken.tarnate@example.com'),
('01-14-1980', 'Duron', 'Miller', 'F', 'singko@example.com'),
('01-15-1980', 'Bonsol', 'Giselle', 'B', 'giselle.bonsol@example.com'),
('01-16-1980', 'Baquiran', 'Jedel', 'B', 'jedel.baquiran@example.com'),
('01-17-1980', 'Santos', 'Irma', 'S', 'i.santos@example.com'),
('01-18-1980', 'De Lima', 'Maam', 'M', 'm.desingko@example.com'),
('01-19-1980', 'Cardenas', 'Sir', 'S', 's.cardenas@example.com'),
('01-20-1980', 'Pe', 'Sir', 'P', 'sp@example.com'),
('02-01-1980', 'Dono', 'Maam', 'M', 'mdono@example.com'),
('02-02-1980', 'Bediones', 'Paolo', 'B', 'pbediones@example.com');

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
('15-027-001', 'm')
('admin','tup');

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
('14-021-001', 'Squarepants', 'Spongebob', 'S', 'BSIT', 'B', 'sbob.squarepants@example.com', 'm'),
('14-021-002', 'Tentacles', 'Squidward', 'S', 'BSIT', 'C', 'stentacles@example.com', 'm'),
('14-021-003', 'Sheldon', 'Plankton', 'P', 'BSIT', 'A', 's.plankton@example.com', 'm'),
('14-021-004', 'Star', 'Patrick', 'M', 'BSIT', 'A', 'patrick.star@example.com', 'm'),
('14-021-005', 'Krabs', 'Eugene', 'A', 'BSIT', 'C', 'e.krabs@example.com', 'm'),
('14-021-006', 'Cheeks', 'Sandy', 'S', 'BSIT', 'B', 's.cheecks@example.com', 'f'),
('14-021-007', 'Leg', 'My', 'I', 'BSIT', 'B', 'm.leg@example.com', 'm'),
('14-021-008', 'Comp', 'Karen', 'C', 'BSIT', 'C', 'k.comp@example.com', 'f'),
('14-021-009', 'Lobster', 'Larry', 'L', 'BSIT', 'C', 'l.lobster@example.com', 'm'),
('14-021-010', 'Pirate', 'Patchy', 'P', 'BSIT', 'A', 'p.pirate@example.com', 'm'),
('15-027-001', 'Dela Cruz', 'Juan', 'A', 'BSCS', 'A', 'delacruz.juan@example.com', 'm'),
('15-027-002', 'Dela Cruz', 'Pedro', 'B', 'BSCS', 'B', 'delacruz.pedro@example.com', 'm'),
('15-027-003', 'Dela Cruz', 'Bugoy', 'C', 'BSCS', 'A', 'delacruz.bugoy@example.com', 'm'),
('15-027-004', 'Dela Cruz', 'Auderic', 'D', 'BSCS', 'B', 'delacruz.auderic@example.com', 'm'),
('15-027-005', 'Dela Cruz', 'Wilberto', 'E', 'BSCS', 'A', 'delacruz.wilberto@example.com', 'm'),
('15-027-036', 'Ramirez', 'Janine', 'Brecia', 'BSCS', 'B', 'janine.ramirez@tup.edu.ph', 'f'),
('15-027-054', 'Boado', 'Jose Angelo David', 'San Gabriel', 'BSCS', 'B', 'davidsgboado@gmail.com', 'm'),
('15-037-001', 'Rivera', 'Allan', 'C', 'BaSLT', 'A', 'allan.rivera@example.com', 'm'),
('15-037-002', 'Rivera', 'Angel', 'A', 'BaSLT', 'A', 'angel.rivera@example.com', 'f'),
('15-037-003', 'Rivera', 'Aeinreb', 'S', 'BaSLT', 'A', 'a.rivera@example.com', 'f'),
('15-037-004', 'Rivera', 'Ronald', 'D', 'BaSLT', 'A', 'rronald@example.com', 'm'),
('15-037-005', 'Lopez', 'Cierene', 'F', 'BaSLT', 'A', 'clopez@example.com', 'f'),
('15-037-006', 'Salao', 'Mariea', 'S', 'BaSLT', 'B', 'msalao@example.com', 'f'),
('15-037-007', 'Zuniga', 'Alicia', 'G', 'BaSLT', 'C', 'azuniga@example.com', 'f'),
('15-037-008', 'Macabanti', 'Rosario', 'C', 'BaSLT', 'C', 'rmacabanti@example.com', 'f'),
('15-037-009', 'Jagmis', 'Dean', 'H', 'BaSLT', 'C', 'djagmis@example.com', 'm'),
('15-037-010', 'Nolasco', 'Reynz', 'J', 'BaSLT', 'C', 'rnolasco@example.com', 'm'),
('16-019-001', 'Bautista', 'Jayson', 'L', 'BSES', 'A', 'j.bautista@example.com', 'm'),
('16-019-002', 'Bautista', 'Cecille', 'S', 'BSES', 'A', 'c.bautista@example.com', 'f'),
('16-019-003', 'Bautista', 'Aaron', 'N', 'BSES', 'A', 'a.bautista@example.com', 'm'),
('16-019-004', 'Bautista', 'Francis', 'M', 'BSES', 'A', 'f.bautista@example.com', 'm'),
('16-019-005', 'Sandiego', 'Ana', 'Q', 'BSES', 'B', 'a.sandiego@example.com', 'f'),
('16-019-006', 'Sandiego', 'Jabel', 'W', 'BSES', 'B', 'j.sandiego@example.com', 'm'),
('16-019-007', 'Sandiego', 'Kenneth', 'D', 'BSES', 'B', 'k.sandiego@example.com', 'm'),
('16-019-008', 'Dimayuga', 'Auderic', 'M', 'BSES', 'B', 'auderic.dimayuga@example.com', 'm'),
('16-019-009', 'Dimayuga', 'Aldrich', 'M', 'BSES', 'B', 'aldrich.dimayuga@example.com', 'm'),
('16-019-010', 'Dimayuga', 'Alyanna', 'M', 'BSES', 'B', 'alyanna.dimayuga@example.com', 'f'),
('17-037-001', 'Jagmis', 'Philippe', 'D', 'BSNFT', 'A', 'pj@example.com', 'm'),
('17-037-002', 'Nagera', 'Jov', 'P', 'BSNFT', 'A', 'jnagera@example.com', 'm'),
('17-037-003', 'Cornelius', 'Cathy', 'K', 'BSNFT', 'A', 'catcat@example.com', 'f'),
('17-037-004', 'Mateo', 'Emmanuelle', 'M', 'BSNFT', 'A', 'mmm@example.com', 'm'),
('17-037-005', 'Garcia', 'Joseph', 'M', 'BSNFT', 'B', 'jgarcia@example.com', 'm'),
('17-037-006', 'Cueto', 'Tierce', 'N', 'BSNFT', 'B', 'mereeh@example.com', 'f'),
('17-037-007', 'Cueto', 'Mary', 'B', 'BSNFT', 'C', 'mcueto@example.com', 'f'),
('17-037-008', 'Putin', 'Nathan', 'I', 'BSNFT', 'C', 'nputin@example.com', 'm'),
('17-037-009', 'Perez', 'Franco', 'B', 'BSNFT', 'C', 'fperez@example.com', 'm'),
('17-037-010', 'Buendia', 'Ely', 'V', 'BSNFT', 'C', 'ely.buendia@example.com', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `Subject_code` varchar(10) NOT NULL,
  `S_description` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`Subject_code`, `S_description`) VALUES
('CHEM 11', 'General Chemistry, Lec'),
('CHEM 11L', 'General Chemistry, Lab'),
('COE 1', 'Computer Fundamentals and Programming (Lec)'),
('COE 1L', 'Computer Fundamentals and Programming (Lab)'),
('CS 101', 'Computer Fundamentals'),
('CS 111', 'Computer Programming 1, Lec'),
('CS 111L', 'Computer Programming 1, Lab'),
('CS 122', 'Computer Programming 2, Lec'),
('CS 122L', 'Computer Programming 2, Lab'),
('CS 123', 'Discrete Structures'),
('CS 211', 'Data Structure, Lec'),
('CS 211L', 'Data Structure, Lab'),
('CS 212', 'Object Oriented Programming, lec.'),
('CS 212L', 'Object Oriented Programming, lab.'),
('CS 213', 'Combinatorics and Graph Theory'),
('CS 221', 'Design and Analysis of Algorithms, Lec'),
('CS 222', 'Digital Design'),
('CS 222L', 'Digital Design, Lab'),
('CS 223', 'Programming Languages, Lec'),
('CS 223L', 'Programming Languages, Lab'),
('CS 311', 'Database Systems, Lec'),
('CS 311L', 'Database Systems, Lab'),
('CS 312', 'Computer Organization, Lec'),
('CS 312L', 'Computer Organization, Lab'),
('CS 313', 'Automata and Language Theory'),
('CS 314', 'Research Methods'),
('CS 321', 'Web Programming, Lec'),
('CS 321L', 'Web Programming, Lab'),
('CS 322', 'Software Engineering, Lec'),
('CS 322L', 'Software Engineering, Lab'),
('CS 323', 'Operating Systems, Lec'),
('CS 323L', 'Operating Systems, Lab'),
('CS 411', 'Modelling and Simulation'),
('CS 412', 'Network Principles & Programming, Lec'),
('CS 412L', 'Network Principles & Programming, Lab'),
('CS 413', 'Professional Ethics'),
('CSE', 'CS Elective 1'),
('CSE 2', 'CS Elective 2'),
('CSE 3', 'CS Elective 3'),
('CSE 4', 'CS Elective 4'),
('CSF 1', 'Free Elective 1'),
('CSF 2', 'Free Elective 2'),
('CSF 3', 'Free Elective 3'),
('CSF 4', 'Free Elective 4'),
('DRAW 1L', 'Basic Engineering Drawing'),
('DRAW 2L', 'Applied Drawing in Technology'),
('DRAW 3', 'Basic Computer-Aided Drawing (Lec)'),
('DRAW 3L', 'Basic Computer-Aided Drawing (Lab)'),
('DRAW 4', 'Applied Computer-Aided Drawing (Lec)'),
('DRAW 4L', 'Applied Computer-Aided Drawing (Lab)'),
('ECE 1A', 'Basic Electronics (Lec)'),
('ECE 1AL', 'Basic Electronics (Lab)'),
('EE 1', 'Elementary Electrical Engineering (Lec)'),
('EE 1L', 'Elementary Electrical Engineering (Lab)'),
('EE 3', 'AC & DC Machinery (Lec)'),
('EE 3AL', 'AC & DC Machinery (Lab)'),
('ENG 1', 'Basic Communication and Thinking Skills'),
('ENG 2', 'Oral Communications'),
('ENG 3', 'Technical Writing'),
('ESS 1', 'Statics and Dynamics of Rigid Body'),
('ESS 3A', 'Mechanics of Deformable Bodies'),
('ESS 3B', 'Materials Science and Engineering (Lec)'),
('ESS 3BL', 'Materials Science and Engineering (Lab)'),
('ESS 4', 'Engineering Economy'),
('ESS 6A', 'Fluid Mechanics'),
('ESS 7', 'Environmental Science and Engineering'),
('ESS 8', 'Engineering Management, Productivity and Entrepreneurship'),
('FIL 1', 'Sining at Pakikipagtalastasan'),
('FIL 2', 'Retorikang Pangkolehiyo'),
('HUM 1', 'World Literature'),
('HUM 2', 'Introduction to Philosophy'),
('HUM 3', 'Art Appreciation'),
('MATH 1', 'College Algebra'),
('MATH 10', 'Advance Algebra'),
('MATH 2', 'Plane and Spherical Trigonometry'),
('MATH 2A', 'Plane and Spherical Trigonometry'),
('MATH 3', 'Solid Mensuration'),
('MATH 4', 'Analytic Geometry'),
('MATH 5', 'Differential Calculus'),
('MATH 5A', 'Differential Calculus with Anal Geometry'),
('MATH 6', 'Integral Calculus'),
('MATH 7', 'Differential Equation'),
('MATH 8', 'Probability and Statistics'),
('MATH 9', 'Advance Engineering Mathematics w/ Numerical Methods'),
('ME 1', 'Machine Elements 1 (Lec)'),
('ME 11L', 'Mechanical Engineering Laboratory 2'),
('ME 12', 'Machine Design 2 (Lec)'),
('ME 12D', 'Machine Design 2 (Lab)'),
('ME 13', 'Refrigeration Engineering'),
('ME 14', 'Safety Management and Mechanical Engineering Safety'),
('ME 15L', 'Mechanical Engineering Laboratory 3'),
('ME 16', 'Industrial Processes and Plant Inspection (Lec)'),
('ME 16L', 'Industrial Processes and Plant Inspection (Lab)'),
('ME 17', 'ME Laws, Ethics, Contracts, Codes, and Standards'),
('ME 1D', 'Machine Elements 1 (Lab)'),
('ME 2', 'Thermodynamics 1'),
('ME 20', 'Power Plant Engineering (Lec)'),
('ME 20D', 'Power Plant Engineering (Lab)'),
('ME 21', 'Industrial Plant Engineering (Lec)'),
('ME 21D', 'Industrial Plant Engineering (Lab)'),
('ME 23', 'Instrumentation and Control Engineering (Lec)'),
('ME 23L', 'Instrumentation and Control Engineering (Lab)'),
('ME 26', 'Vibration Engineering'),
('ME 27', 'Heating, Ventilating and Air-conditioning (Lec)'),
('ME 27L', 'Heating, Ventilating and Air-conditioning (Lab)'),
('ME 3', 'Machine Elements 2 (Lec)'),
('ME 3D', 'Machine Elements 2 (Lab)'),
('ME 4', 'Thermodynamics 2'),
('ME 5L', 'Mechanical Engineering Laboratory 1'),
('ME 6', 'Fluid Machinery'),
('ME 7', 'Heat and Mass Transfer'),
('ME 8', 'Machine Design 1 (Lec)'),
('ME 8D', 'Machine Design 1 (Lab)'),
('ME 9', 'Combustion Engineering'),
('MEE 2', 'Technical Elective 2'),
('MEE 3', 'Technical Elective 3'),
('MEE 4', 'Technical Elective 4'),
('MEO 1', 'Mechanical Engineering Orientation'),
('MEPS 1L', 'Mechanical Engineering Project Study 1'),
('MEPS 2L', 'Mechanical Engineering Project Study 2'),
('MES 1P', 'Mechanical Engineering Shopwork 1'),
('MES 2P', 'Mechanical Engineering Shopwork 2'),
('MES 3P', 'Mechanical Engineering Shopwork 3'),
('MES 4P', 'Mechanical Engineering Shopwork 4'),
('MESIT', 'Mechanical Engineering Supervised Industrial Training'),
('MGMT 3', 'Human Resource Management'),
('NSTP 1', 'CWTS 1/ROTC 1/LTS 1'),
('NSTP 2', 'CWTS 2/ROTC 2/LTS 2'),
('PE 1', 'Physical Fitnes & Exercises'),
('PE 2', 'Individual and Dual Sports'),
('PE 3', 'Recreational Activities'),
('PE 4', 'Team Sports'),
('PHYS 1', 'Physics 1 (Lec)'),
('PHYS 1A', 'Mechanics, Lec'),
('PHYS 1AL', 'Mechanics, Lab'),
('PHYS 1L', 'Physics 1 (Lab)'),
('PHYS 2B', 'Electricity & Magnetism, Lec'),
('PHYS 2BL', 'Electricity & Magnetism, Lab'),
('RIZAL', 'Rizal\'s Life, Works and Writings'),
('SIT', 'Supervised Industrial Training'),
('SS 1', 'General Sociology with Family Planning'),
('SS 2', 'General Psychology with Intro. to Ind\'l. Psychology'),
('SS 3', 'Economics with Land Reform and Taxation'),
('SS 4', 'Philippine History and Government with Constitution'),
('THESIS 1', 'Thesis Writing'),
('THESIS 2', 'Thesis Writing 2');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
