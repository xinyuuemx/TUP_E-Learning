-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 08:02 PM
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
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Account_ID`, `Password`) VALUES
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
('16', '123456'),
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
('admin', 'admin');

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
(1011, 'CS 101', '6'),
(1111, 'CS 111', '16'),
(1112, 'CS 111L', '16');

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
('1', 'Bituonan', 'Butch', 'A', 'bituonan.butch@example.com'),
('10', 'Caiña', 'Jonathan', 'V', 'jonathan.caina@example.com'),
('11', 'Latip', 'Latip', 'L', 'latip@example.com'),
('12', 'Huang', 'Maam', 'C', 'huang@example.com'),
('13', 'Bondoc', 'Sir', 'L', 'bondoc@example.com'),
('14', 'Sotelo', 'Precy', 'B', 'psotelo@example.com'),
('15', 'Logmao', 'Dario', 'P', 'dlogmao@example.com'),
('16', 'Amador', 'Madz', 'P', 'madz.amador@example.com'),
('2', 'Garcia', 'May', 'B', 'garcia.may@example.com'),
('3', 'Calayag', 'Ernita', 'C', 'calayag.nitz@example.com'),
('4', 'Molino', 'Yany', 'D', 'molino.yany@example.com'),
('5', 'Renegado', 'Fernando', 'E', 'renegado.fernando@example.com'),
('6', 'Tarnate', 'Ken', 'F', 'ken.tarnate@example.com'),
('7', 'Duron', 'Miller', 'F', 'singko@example.com'),
('8', 'Bonsol', 'Giselle', 'B', 'giselle.bonsol@example.com'),
('9', 'Baquiran', 'Jedel', 'B', 'jedel.baquiran@example.com');

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
('RIZAL', 'Rizal''s Life, Works and Writings'),
('SIT', 'Supervised Industrial Training'),
('SS 1', 'General Sociology with Family Planning'),
('SS 2', 'General Psychology with Intro. to Ind''l. Psychology'),
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
(1, 1111, 'html_tutorial.pdf', 'HTML'),
(2, 1111, 'css_tutorial.pdf', 'CSS');

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `Class_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1113;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
