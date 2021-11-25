-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 06:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `s_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`s_no`, `amount`, `date`) VALUES
(1, 50000, ''),
(4, 70000, '17-02-2004');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `s_no` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_no`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `s_no` int(11) NOT NULL,
  `DBMS` int(11) DEFAULT NULL,
  `CNS` int(11) DEFAULT NULL,
  `TOC` int(11) DEFAULT NULL,
  `SPOS` int(11) DEFAULT NULL,
  `DS` int(11) DEFAULT NULL,
  `percentage` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`s_no`, `DBMS`, `CNS`, `TOC`, `SPOS`, `DS`, `percentage`) VALUES
(1, 90, 85, 69, 97, 80, '84'),
(4, 87, 76, 69, 97, 80, '82'),
(5, 89, 68, 69, 90, 85, '80'),
(7, 87, 76, 69, 97, 80, '82');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `i_no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `query` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`i_no`, `name`, `email`, `query`) VALUES
(3, 'Ajay', 'ajay@gmail.com', 'Change in address'),
(4, 'Sakshi', 'sakshi@gmail.com', 'Correction in marks'),
(5, 'Shreya', 'shreya@gmail.com', 'Change the department'),
(6, 'John', 'john@gmail.com', 'Marks not updated'),
(7, 'Ajay', 'ajay@gmail.com', 'Marks update');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_no` int(10) NOT NULL,
  `roll_no` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `department` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_no`, `roll_no`, `name`, `father_name`, `class`, `department`, `mobile`, `email`, `password`, `remark`) VALUES
(1, 1, 'John', 'Jack', 'SE', 'Entc', '1234567898', 'john@gmail.com', '123', 'Good'),
(4, 2, 'Ajay', 'Viraj', 'BE', 'Electrical', '45637891', 'ajay@gmail.com', 'abcde', 'Good'),
(5, 3, 'Sakshi', 'Mahesh', 'TE', 'Instrumentation', '56789320', 'sakshi@gmail.com', 'sakshi', 'Good'),
(7, 4, 'Shreya', 'Suresh', 'SE', 'IT', '56273891', 'shreya@gmail.com', 'shreya', 'good'),
(8, 5, 'Harsh', 'Prakash', 'SE', 'AIDS', '753684900', 'harsh@gmail.com', 'harsh12', 'good'),
(9, 6, 'Shruti', 'Rajendra', 'TE', 'Computer', '9420049109', 'shruti@gmail.com', 'shruti13', 'Good'),
(10, 7, 'Preeti', 'Rahul', 'SE', 'Entc', '9420049109', 'preeti@gmail.com', 'preeti', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `s_no` int(10) NOT NULL,
  `t_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `courses` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`s_no`, `t_id`, `name`, `mobile`, `courses`, `email`, `password`) VALUES
(1, 1, 'Prachi', '87652318', 'DBMS, TOC', 'prachi@gmail.com', '12345'),
(2, 2, 'Swati', '461789320', 'CNS, DSA', 'swati@gmail.com', '1234'),
(4, 3, 'Sheetal', '34178932', 'Graphics, OOP', 'sheetal@gmail.com', 'abc123'),
(5, 4, 'Mina', '7843920', 'Graphics, DSA', 'mina@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `t_name` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `end_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`t_name`, `subject`, `class`, `start_time`, `end_time`) VALUES
('Swati', 'DBMS', '8', '8.30am', '10am'),
('Prachi', 'TOC', '7', '9am', '10.45am'),
('Sheetal', 'DSA', '9', '11.45am', '1pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD KEY `s_no` (`s_no`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD KEY `s_no` (`s_no`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`i_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `i_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fees`
--
ALTER TABLE `fees`
  ADD CONSTRAINT `fees_ibfk_1` FOREIGN KEY (`s_no`) REFERENCES `students` (`s_no`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`s_no`) REFERENCES `students` (`s_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
