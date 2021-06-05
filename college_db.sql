-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 03:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_page`
--

CREATE TABLE `active_page` (
  `page_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `active_page`
--

INSERT INTO `active_page` (`page_name`, `status`) VALUES
('latenight-permission', -1),
('teacher_appointment', 1),
('room-service', -1);

-- --------------------------------------------------------

--
-- Table structure for table `active_page_teacher`
--

CREATE TABLE `active_page_teacher` (
  `page_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `active_page_teacher`
--

INSERT INTO `active_page_teacher` (`page_name`, `status`) VALUES
('student_appointment', -1),
('teacher_room', -1);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `emp_id` varchar(255) NOT NULL,
  `student_reg_no` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`emp_id`, `student_reg_no`, `message`, `status`) VALUES
('1111', '19BIT0403', 'hhh', 1),
('1111', '18BIT0084', 'nbmbnmnbm', 0),
('2222', '18BIT0084', 'hhh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `student_reg_no` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `slot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`student_reg_no`, `course_id`, `slot`) VALUES
('18BIT0084', 'ITE1008', 'A1+TA1'),
('19BIT0403', 'ITE1008', 'A1+TA1'),
('20BIT0027', 'ITE1008', 'A2+TA2'),
('18BIT0084', 'CLE1010', 'B1+TB1'),
('20BIT0027', 'CLE1010', 'B1+TB1'),
('19BIT0403', 'CLE1010', 'B2+TB2'),
('19BIT0403', 'CSE1007', 'C1+TC1'),
('20BIT0027', 'CSE1007', 'C1+TC1'),
('18BIT0084', 'CSE1007', 'C2+TC2');

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `course_id` varchar(255) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `slot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`course_id`, `emp_id`, `course_name`, `slot`) VALUES
('ITE1008', '1111', 'Open Source Programming', 'A1+TA1'),
('ITE1008', '1111', 'Open Source Programming', 'A2+TA2'),
('CLE1010', '2222', 'Natural Disaster Management', 'B1+TB1'),
('CLE1010', '3333', 'Natural Disaster Management', 'B2+TB2'),
('CSE1007', '4444', 'Java Programming', 'C1+TC1'),
('CSE1007', '4444', 'Java Programming', 'C2+TC2');

-- --------------------------------------------------------

--
-- Table structure for table `late_night_hostel_database`
--

CREATE TABLE `late_night_hostel_database` (
  `student_reg_no` varchar(255) NOT NULL,
  `hostel_id` varchar(255) NOT NULL,
  `time_of_departure` datetime NOT NULL,
  `time_of_arrival` datetime NOT NULL,
  `student_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `late_night_library_database`
--

CREATE TABLE `late_night_library_database` (
  `student_reg_no` int(11) NOT NULL,
  `student_code` int(11) NOT NULL,
  `time_of_entry` datetime NOT NULL,
  `time_of_exit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_name` varchar(255) NOT NULL,
  `student_reg_no` varchar(255) NOT NULL,
  `student_passwd` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_name`, `student_reg_no`, `student_passwd`, `student_email`) VALUES
('Immani Sri Satya Sai', '18BIT0084', '1234satya', 'immanisri.satyasai2018@vitstudent.ac.in'),
('Rohith Raut', '19BIT0403', 'raut1234', 'rohithraut1234@gmail.com'),
('Sai Bhargav', '20BIT0027', 'bhargav1234', 'bhargavsai1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_name` varchar(255) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_passwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_name`, `emp_id`, `teacher_email`, `teacher_passwd`) VALUES
('JayaKumar Sadha Shivam', '1111', 'jayakumar@vit.ac.in', '1111'),
('Malathy J', '2222', 'malathy@vit.ac.in', '2222'),
('Senthilnathan M', '3333', 'senthil@vit.ac.in', '3333'),
('Subha Shantini', '4444', 'subha@vit.ac.in', '4444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `late_night_hostel_database`
--
ALTER TABLE `late_night_hostel_database`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_reg_no`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
