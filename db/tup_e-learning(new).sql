-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 06:27 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/* auto drop tables */
SET FOREIGN_KEY_CHECKS = 0;
SET GROUP_CONCAT_MAX_LEN=32768;
SET @tables = NULL;
SELECT GROUP_CONCAT('`', table_name, '`') INTO @tables
  FROM information_schema.tables
  WHERE table_schema = (SELECT DATABASE());
SELECT IFNULL(@tables,'dummy') INTO @tables;

SET @tables = CONCAT('DROP TABLE IF EXISTS ', @tables);
PREPARE stmt FROM @tables;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
SET FOREIGN_KEY_CHECKS = 1;
/* please copy until here after exporting the db */


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
('01-01-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-02-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-03-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-04-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-05-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-06-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-07-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-08-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-09-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-10-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-11-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-12-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-13-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-14-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-15-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-16-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-17-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-18-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-19-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-20-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-21-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-22-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-23-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-24-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-25-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-26-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-27-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-28-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-29-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('01-30-1980', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('14-021-001', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('14-021-002', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('14-021-003', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('14-021-004', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('14-021-005', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('14-021-006', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('14-021-007', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('14-021-008', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('14-021-009', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('14-021-010', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-022-001', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-022-002', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-022-003', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-022-004', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-022-005', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-022-006', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-022-007', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-022-008', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-022-009', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-022-010', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-025-001', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-025-002', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-025-003', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-025-004', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-025-005', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-025-006', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-025-007', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-025-008', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-025-009', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-025-010', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-027-001', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-027-002', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-027-003', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-027-004', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-027-005', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-027-036', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-027-054', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-037-001', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-037-002', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-037-003', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-037-004', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-037-005', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-037-006', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-037-007', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-037-008', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-037-009', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('15-037-010', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('16-019-001', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('16-019-002', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('16-019-003', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('16-019-004', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('16-019-005', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('16-019-006', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('16-019-007', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('16-019-008', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('16-019-009', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
('16-019-010', '$2y$10$1tReOZnTjCXtjDjhjJyu1OQwkEUizGdNOi0JckwEHwrdOww5JqcDW'),
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
('admin', '$2y$10$1ayszW/EJHvxwqwYZNOlM.zVOwXEeoW2qGqASotMZ60DQDNfGLWhO');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Class_ID` int(10) NOT NULL,
  `SY_ID` int(10) NOT NULL,
  `Subject_code` varchar(10) NOT NULL,
  `Prof_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Class_ID`, `SY_ID`, `Subject_code`, `Prof_ID`) VALUES
(1011, 4, 'CS 101', '01-06-1980'),
(1111, 4, 'CS 111', '01-16-1980'),
(1112, 4, 'CS 111L', '01-16-1980'),
(1113, 4, 'PHYS 2B', '01-15-1980'),
(1114, 4, 'PHYS 2BL', '01-15-1980'),
(1115, 4, 'CS 212', '01-04-1980'),
(1116, 4, 'CS 212L', '01-04-1980'),
(1117, 4, 'CSE', '01-04-1980'),
(1118, 4, 'CSE 2', '01-04-1980'),
(1119, 4, 'CSE 3', '01-04-1980'),
(1120, 4, 'CSE 4', '01-04-1980'),
(1121, 4, 'CSF 1', '01-03-1980'),
(1122, 4, 'CSF 2', '01-03-1980'),
(1123, 4, 'CSF 3', '01-03-1980'),
(1124, 4, 'CSF 4', '01-03-1980'),
(1125, 4, 'ENG 1', '01-07-1980'),
(1126, 4, 'ENG 2', '01-07-1980'),
(1127, 4, 'FIL 2', '01-09-1980'),
(1128, 4, '111', '01-04-1980'),
(1129, 4, '222', '01-04-1980'),
(1130, 4, '111', '01-04-1980');

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
(1111, '15-027-001'),
(2221, '15-027-001'),
(2221, '15-027-002'),
(3331, '15-027-001'),
(3331, '15-027-003'),
(4441, '15-027-004'),
(5551, '15-027-005');

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
('15-027-001', 11111, 'amam om'),
('1', 1, 'This is a sample data'),
('15-027-001', 1, '123123123asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `Account_ID` varchar(15) NOT NULL,
  `Notification` text NOT NULL,
  `Notif_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`Account_ID`, `Notification`, `Notif_date`) VALUES
('15-027-001', 'Welcome to your E-Learning profile!', '2017-11-21'),
('15-027-001', 'You have registered to CS311 Class. You can now read your modules.', '2017-12-06');

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
('01-02-1980', 'Garcia', 'May', 'B', 'garcia.may@example.com'),
('01-03-1980', 'Calayag', 'Ernita', 'C', 'calayag.nitz@example.com'),
('01-04-1980', 'Molino', 'Yany', 'D', 'molino.yany@example.com'),
('01-05-1980', 'Renegado', 'Fernando', 'E', 'renegado.fernando@example.com'),
('01-06-1980', 'Tarnate', 'Ken', 'F', 'ken.tarnate@example.com'),
('01-07-1980', 'Duron', 'Miller', 'F', 'singko@example.com'),
('01-08-1980', 'Bonsol', 'Giselle', 'B', 'giselle.bonsol@example.com'),
('01-09-1980', 'Baquiran', 'Jedel', 'B', 'jedel.baquiran@example.com'),
('01-10-1980', 'Caiña', 'Jonathan', 'V', 'jonathan.caina@example.com'),
('01-11-1980', 'Latip', 'Latip', 'L', 'latip@example.com'),
('01-12-1980', 'Huang', 'Maam', 'C', 'huang@example.com'),
('01-13-1980', 'Bondoc', 'Sir', 'L', 'bondoc@example.com'),
('01-14-1980', 'Sotelo', 'Precy', 'B', 'psotelo@example.com'),
('01-15-1980', 'Logmao', 'Dario', 'P', 'dlogmao@example.com'),
('01-16-1980', 'Amador', 'Madz', 'P', 'madz.amador@example.com'),
('01-17-1980', 'Narisma', 'Michael ', 'L', 'm.narisma@example.com'),
('01-18-1980', 'Estember', 'Vicente', 'E ', 'v.estember@example.com'),
('01-19-1980', 'Maltezo', 'Melbern Rose ', 'C', 'mmaltezo@example.com'),
('01-20-1980', 'Sareno', 'Julius ', 'A', 'j.sareno@example.com'),
('01-21-1980', 'Basa', 'Gina ', 'L', 'g.basa@example.com'),
('01-22-1980', 'Macalintal', 'Edwin  ', 'G', 'e.macalintal@example.com'),
('01-23-1980', 'Torralba', 'Amelia ', 'C', 'a.torralba@example.com'),
('01-24-1980', 'Virrey', 'Elpidio ', 'S', 'e.virrey@example.com'),
('01-25-1980', 'Floresca', 'Bilomar', 'N ', 'b.floreca@example.com'),
('01-26-1980', 'Nora', 'Teresita ', 'C', 't.nora@example.com'),
('01-27-1980', 'Celarta', 'Cristina ', 'B', 'c.celarta@example.com'),
('01-28-1980', 'Sangalang', 'Elmer ', 'M', 'e.sangalang@example.com'),
('01-29-1980', 'Ranay', 'Teresa ', 'M', 't.ransay@example.com'),
('01-30-1980', 'Agudon', 'Rita  ', 'G', 'r.agudon@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `profile_elements`
--

CREATE TABLE `profile_elements` (
  `Account_ID` varchar(11) NOT NULL,
  `img_ID` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_elements`
--

INSERT INTO `profile_elements` (`Account_ID`, `img_ID`) VALUES
('15-027-036', 'j_pp.jpg'),
('15-027-054', 'david_pp.jpg'),
('15-027-003', 'm.jpg'),
('15-027-004', 'm.jpg'),
('15-027-005', 'm.jpg'),
('15-027-002', 'm.jpg'),
('15-027-001', 'm.jpg'),
('1', 'sir-butch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Question_ID` int(10) NOT NULL,
  `Prof_ID` varchar(10) NOT NULL,
  `Subject_Code` varchar(10) NOT NULL,
  `Question` varchar(55) NOT NULL,
  `Choice1` varchar(55) NOT NULL,
  `Choice2` varchar(55) NOT NULL,
  `Choice3` varchar(55) NOT NULL,
  `Choice4` varchar(55) NOT NULL,
  `Answer` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `Quiz_ID` int(10) NOT NULL,
  `Prof_ID` varchar(10) NOT NULL,
  `Class_ID` int(10) NOT NULL,
  `Question_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_years`
--

CREATE TABLE `school_years` (
  `SY_ID` int(10) NOT NULL,
  `SY_Start` year(4) NOT NULL,
  `SY_End` year(4) NOT NULL,
  `Semester` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_years`
--

INSERT INTO `school_years` (`SY_ID`, `SY_Start`, `SY_End`, `Semester`) VALUES
(1, 2016, 2017, '1st'),
(2, 2016, 2017, '2nd'),
(3, 2017, 2018, '1st'),
(4, 2017, 2018, '2nd');

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
  `E-mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Student_ID`, `L_name`, `F_name`, `M_name`, `Course`, `Section`, `E-mail`) VALUES
('14-021-001', 'Squarepants', 'Spongebob', 'S', 'BSIT', 'B', 'sbob.squarepants@example.com'),
('14-021-002', 'Tentacles', 'Squidward', 'S', 'BSIT', 'C', 'stentacles@example.com'),
('14-021-003', 'Sheldon', 'Plankton', 'P', 'BSIT', 'A', 's.plankton@example.com'),
('14-021-004', 'Star', 'Patrick', 'M', 'BSIT', 'A', 'patrick.star@example.com'),
('14-021-005', 'Krabs', 'Eugene', 'A', 'BSIT', 'C', 'e.krabs@example.com'),
('14-021-006', 'Cheeks', 'Sandy', 'S', 'BSIT', 'B', 's.cheecks@example.com'),
('14-021-007', 'Leg', 'My', 'I', 'BSIT', 'B', 'm.leg@example.com'),
('14-021-008', 'Comp', 'Karen', 'C', 'BSIT', 'C', 'k.comp@example.com'),
('14-021-009', 'Lobster', 'Larry', 'L', 'BSIT', 'C', 'l.lobster@example.com'),
('14-021-010', 'Pirate', 'Patchy', 'P', 'BSIT', 'A', 'p.pirate@example.com'),
('15-022-001', 'Petronel', 'Loke', 'Serafino', 'BSEE', 'A', 'l.petronel@example.com'),
('15-022-002', 'Destinee', 'Stacee', 'Lesleigh', 'BSEE', 'A', 's.destinee@example.com'),
('15-022-003', 'Sidney', 'Fredric', 'Kyleigh', 'BSEE', 'A', 'f.sidney@gmail.com'),
('15-022-004', 'Jessie', 'Kasandra', 'Glen', 'BSEE', 'B', 'k.jessie@example.com'),
('15-022-005', 'Beryl', 'Sloan', 'Slade', 'BSEE', 'C', 's.beryl@example.com'),
('15-022-006', 'Rochelle', 'Max', 'Alesia', 'BSEE', 'A', 'm.rochelle@example.com'),
('15-022-007', 'Fae', 'Jaynie', 'Kendal', 'BSEE', 'B', 'j.fae@example.com'),
('15-022-008', 'Janae', 'Normina', 'Harris', 'BSEE', 'A', 'n.janae@example.com'),
('15-022-009', 'Van', 'Jemmy', 'Liza', 'BSEE', 'D', 'j.van@example.com'),
('15-022-010', 'King', 'Pippa', 'Lacey', 'BSEE', 'C', 'p.king@example.com'),
('15-025-001', 'Merideth', 'Elle  ', 'Storm', 'BSCE', 'A', 'e.merideth@example.com'),
('15-025-002', 'Greer', 'Peta ', 'Jorja ', 'BSCE', 'B', 'p.greer@example.com'),
('15-025-003', 'Carlyle', 'Deonne ', 'Steph', 'BSCE', 'C', 'd.carlyle@example.com'),
('15-025-004', 'Derek', 'Darryl ', 'Simon ', 'BSCE', 'D', 'd.derek@example.com'),
('15-025-005', 'Carlyn', 'Cathleen ', 'Alicia ', 'BSCE', 'A', 'c.cathleen@example.com'),
('15-025-006', 'Tommy', 'Clarinda ', 'Aveline ', 'BSCE', 'B', 'c.tommy@example.com'),
('15-025-007', 'Allen', 'Lisette ', 'Doretta ', 'BSCE', 'C', 'l.allen@example.com'),
('15-025-008', 'Curt', 'Isebella ', 'Shanna ', 'BSCE', 'D', 'i.cur@example.com'),
('15-025-009', 'Errol', 'Pansy ', 'Eben ', 'BSCE', 'A', 'p.errol@example.com'),
('15-025-010', 'Erick', 'Rhianna ', 'Christie ', 'BSCE', 'B', 'r.erick@example.com'),
('15-027-001', 'Dela Cruz', 'Juan', 'A', 'BSCS', 'A', 'delacruz.juan@example.com'),
('15-027-002', 'Dela Cruz', 'Pedro', 'B', 'BSCS', 'B', 'delacruz.pedro@example.com'),
('15-027-003', 'Dela Cruz', 'Bugoy', 'C', 'BSCS', 'A', 'delacruz.bugoy@example.com'),
('15-027-004', 'Dela Cruz', 'Auderic', 'D', 'BSCS', 'B', 'delacruz.auderic@example.com'),
('15-027-005', 'Dela Cruz', 'Wilberto', 'E', 'BSCS', 'A', 'delacruz.wilberto@example.com'),
('15-027-036', 'Ramirez', 'Janine', 'Brecia', 'BSCS', 'B', 'janine.ramirez@tup.edu.ph'),
('15-027-054', 'Boado', 'Jose Angelo David', 'San Gabriel', 'BSCS', 'B', 'davidsgboado@gmail.com'),
('15-037-001', 'Rivera', 'Allan', 'C', 'BaSLT', 'A', 'allan.rivera@example.com'),
('15-037-002', 'Rivera', 'Angel', 'A', 'BaSLT', 'A', 'angel.rivera@example.com'),
('15-037-003', 'Rivera', 'Aeinreb', 'S', 'BaSLT', 'A', 'a.rivera@example.com'),
('15-037-004', 'Rivera', 'Ronald', 'D', 'BaSLT', 'A', 'rronald@example.com'),
('15-037-005', 'Lopez', 'Cierene', 'F', 'BaSLT', 'A', 'clopez@example.com'),
('15-037-006', 'Salao', 'Mariea', 'S', 'BaSLT', 'B', 'msalao@example.com'),
('15-037-007', 'Zuniga', 'Alicia', 'G', 'BaSLT', 'C', 'azuniga@example.com'),
('15-037-008', 'Macabanti', 'Rosario', 'C', 'BaSLT', 'C', 'rmacabanti@example.com'),
('15-037-009', 'Jagmis', 'Dean', 'H', 'BaSLT', 'C', 'djagmis@example.com'),
('15-037-010', 'Nolasco', 'Reynz', 'J', 'BaSLT', 'C', 'rnolasco@example.com'),
('16-019-001', 'Bautista', 'Jayson', 'L', 'BSES', 'A', 'j.bautista@example.com'),
('16-019-002', 'Bautista', 'Cecille', 'S', 'BSES', 'A', 'c.bautista@example.com'),
('16-019-003', 'Bautista', 'Aaron', 'N', 'BSES', 'A', 'a.bautista@example.com'),
('16-019-004', 'Bautista', 'Francis', 'M', 'BSES', 'A', 'f.bautista@example.com'),
('16-019-005', 'Sandiego', 'Ana', 'Q', 'BSES', 'B', 'a.sandiego@example.com'),
('16-019-006', 'Sandiego', 'Jabel', 'W', 'BSES', 'B', 'j.sandiego@example.com'),
('16-019-007', 'Sandiego', 'Kenneth', 'D', 'BSES', 'B', 'k.sandiego@example.com'),
('16-019-008', 'Dimayuga', 'Auderic', 'M', 'BSES', 'B', 'auderic.dimayuga@example.com'),
('16-019-009', 'Dimayuga', 'Aldrich', 'M', 'BSES', 'B', 'aldrich.dimayuga@example.com'),
('16-019-010', 'Dimayuga', 'Alyanna', 'M', 'BSES', 'B', 'alyanna.dimayuga@example.com'),
('17-037-001', 'Jagmis', 'Philippe', 'D', 'BSNFT', 'A', 'pj@example.com'),
('17-037-002', 'Nagera', 'Jov', 'P', 'BSNFT', 'A', 'jnagera@example.com'),
('17-037-003', 'Cornelius', 'Cathy', 'K', 'BSNFT', 'A', 'catcat@example.com'),
('17-037-004', 'Mateo', 'Emmanuelle', 'M', 'BSNFT', 'A', 'mmm@example.com'),
('17-037-005', 'Garcia', 'Joseph', 'M', 'BSNFT', 'B', 'jgarcia@example.com'),
('17-037-006', 'Cueto', 'Tierce', 'N', 'BSNFT', 'B', 'mereeh@example.com'),
('17-037-007', 'Cueto', 'Mary', 'B', 'BSNFT', 'C', 'mcueto@example.com'),
('17-037-008', 'Putin', 'Nathan', 'I', 'BSNFT', 'C', 'nputin@example.com'),
('17-037-009', 'Perez', 'Franco', 'B', 'BSNFT', 'C', 'fperez@example.com'),
('17-037-010', 'Buendia', 'Ely', 'V', 'BSNFT', 'C', 'ely.buendia@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `Subject_code` varchar(10) NOT NULL,
  `S_description` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`Subject_code`, `S_description`) VALUES
('111', 'Web Development'),
('222', 'Software Engineering'),
('333', 'Linear Algebra'),
('444', 'Object Oriented Programming'),
('555', 'Data Structures'),
('CHEM11', 'General Chemistry, Lec'),
('CHEM11L', 'General Chemistry, Lab'),
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
('ENG 1', 'Basic Communication and Thinking Skills'),
('ENG 2', 'Oral Communications'),
('ENG 3', 'Technical Writing'),
('FIL 1', 'Sining at Pakikipagtalastasan'),
('FIL 2', 'Retorikang Pangkolehiyo'),
('HUM 1', 'World Literature'),
('HUM 2', 'Introduction to Philosophy'),
('MATH 1', 'College Algebra'),
('MATH 2A', 'Plane and Spherical Trigonometry'),
('MATH 5A', 'Differential Calculus with Anal Geometry'),
('MATH 6', 'Integral Calculus'),
('MATH 8', 'Probability and Statistics'),
('MGMT 3', 'Human Resource Management'),
('NSTP 1', 'CWTS 1/ROTC 1/LTS 1'),
('NSTP 2', 'CWTS 2/ROTC 2/LTS 2'),
('PE 1', 'Physical Fitnes & Exercises'),
('PE 2', 'Individual and Dual Sports'),
('PE 3', 'Recreational Activities'),
('PE 4', 'Team Sports'),
('PHYS 1A', 'Mechanics, Lec'),
('PHYS 1AL', 'Mechanics, Lab'),
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
-- Table structure for table `sy_subjects`
--

CREATE TABLE `sy_subjects` (
  `SY_ID` int(10) NOT NULL,
  `Subject_Code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sy_subjects`
--

INSERT INTO `sy_subjects` (`SY_ID`, `Subject_Code`) VALUES
(1, '333'),
(2, '444'),
(2, '555'),
(4, '111'),
(4, '222');

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
(1, 1111, 'TAP_NOTES.pdf', 'HTML');

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
  ADD PRIMARY KEY (`Class_ID`,`Student_ID`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`Prof_ID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Question_ID`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`Quiz_ID`);

--
-- Indexes for table `school_years`
--
ALTER TABLE `school_years`
  ADD PRIMARY KEY (`SY_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
