-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 12:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unipms`
--

-- --------------------------------------------------------

--
-- Table structure for table `unipms_admin`
--

CREATE TABLE `unipms_admin` (
  `ADMIN_ID` varchar(12) DEFAULT NULL,
  `ADMIN_Password` varchar(50) DEFAULT NULL,
  `ADMIN_FirstName` varchar(50) DEFAULT NULL,
  `ADMIN_LastName` varchar(50) DEFAULT NULL,
  `ADMIN_CNIC` varchar(15) DEFAULT NULL,
  `ADMIN_PhoneNo` varchar(12) DEFAULT NULL,
  `ADMIN_Address` varchar(50) DEFAULT NULL,
  `ADMIN_Email` varchar(50) DEFAULT NULL,
  `ADMIN_Gender` varchar(6) DEFAULT NULL,
  `ADMIN_City` varchar(5) DEFAULT NULL,
  `ADMIN_Country` varchar(5) DEFAULT NULL,
  `ADMIN_Picture` varchar(150) DEFAULT NULL,
  `ADMIN_FatherName` varchar(50) DEFAULT NULL,
  `ADMIN_FatherPhone` varchar(12) DEFAULT NULL,
  `ADMIN_FatherHome` varchar(50) DEFAULT NULL,
  `ADMIN_FatherCNIC` varchar(15) DEFAULT NULL,
  `ADMIN_PKID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unipms_admin`
--

INSERT INTO `unipms_admin` (`ADMIN_ID`, `ADMIN_Password`, `ADMIN_FirstName`, `ADMIN_LastName`, `ADMIN_CNIC`, `ADMIN_PhoneNo`, `ADMIN_Address`, `ADMIN_Email`, `ADMIN_Gender`, `ADMIN_City`, `ADMIN_Country`, `ADMIN_Picture`, `ADMIN_FatherName`, `ADMIN_FatherPhone`, `ADMIN_FatherHome`, `ADMIN_FatherCNIC`, `ADMIN_PKID`) VALUES
('a2019027012', '123456', 'Haroon', 'Mahmood', '35201-2593126-5', '0303-4243233', 'Lahore, Pakistan', 'iyetech99@gmail.com', 'Male', '00001', '00001', NULL, 'Nasir Mahmood', NULL, NULL, '11111-1111111-1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unipms_citycountry`
--

CREATE TABLE `unipms_citycountry` (
  `CC_CntryCode` varchar(5) DEFAULT NULL,
  `CC_CntryName` varchar(50) DEFAULT NULL,
  `CC_CityCode` varchar(5) DEFAULT NULL,
  `CC_CityName` varchar(50) DEFAULT NULL,
  `CC_PKID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unipms_citycountry`
--

INSERT INTO `unipms_citycountry` (`CC_CntryCode`, `CC_CntryName`, `CC_CityCode`, `CC_CityName`, `CC_PKID`) VALUES
('00001', 'Pakistan', '00001', 'Lahore', 1),
('00001', 'Pakistan', '00002', 'Multan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `unipms_programs`
--

CREATE TABLE `unipms_programs` (
  `STDP_PCode` varchar(2) DEFAULT NULL,
  `STDP_Programs` varchar(50) DEFAULT NULL,
  `STDP_SCode` varchar(2) DEFAULT NULL,
  `STDP_PSection` varchar(50) DEFAULT NULL,
  `STDP_PKID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unipms_programs`
--

INSERT INTO `unipms_programs` (`STDP_PCode`, `STDP_Programs`, `STDP_SCode`, `STDP_PSection`, `STDP_PKID`) VALUES
('02', 'MIT', '01', 'A', 1),
('01', 'MCS', '01', 'A', 4),
('01', 'MCS', '02', 'B', 5);

-- --------------------------------------------------------

--
-- Table structure for table `unipms_roadmap`
--

CREATE TABLE `unipms_roadmap` (
  `RM_CourseCode` varchar(6) DEFAULT NULL,
  `RM_CourseName` varchar(50) DEFAULT NULL,
  `RM_CourseType` varchar(50) DEFAULT NULL,
  `RM_CreditHr` varchar(1) DEFAULT NULL,
  `RM_Semester` varchar(1) DEFAULT NULL,
  `RM_PKID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unipms_roadmap`
--

INSERT INTO `unipms_roadmap` (`RM_CourseCode`, `RM_CourseName`, `RM_CourseType`, `RM_CreditHr`, `RM_Semester`, `RM_PKID`) VALUES
('XC-350', 'Introduction to Computer Programming', 'Core Course', '3', '1', 1),
('XC-355', 'Database Systems', 'Core Course', '3', '1', 2),
('XC-360', 'Computer Networks', 'Core Course', '3', '1', 3),
('XC-370', 'Digital Logic Design', 'Core Course', '3', '1', 4),
('XC-375', 'English Comprehension', 'Core Course', '3', '1', 5),
('XC-421', 'Object Oriented Programming', 'Core Course', '3', '2', 6),
('XC-365', 'Software Engineering', 'Core Course', '3', '2', 7),
('XC-435', 'Computer Organization and Architecture', 'Core Course', '3', '2', 8),
('XC-380', 'Algorithm Analysis and Design', 'Core Course', '3', '2', 9),
('XC-385', 'Web Programming', 'Core Course', '3', '2', 10),
('XC-465', 'Software Project Management', 'Core Course', '3', '3', 11),
('XC-445', 'Data and File Structure', 'Core Course', '3', '3', 12),
('XC-451', 'Theory of Automata', 'Core Course', '3', '3', 13),
('XC-430', 'Operating Systems', 'Core Course', '3', '3', 14),
('XC-450', 'Distributed Database Systems', 'Elective Course', '3', '4', 15),
('XC-455', 'Android Application Development', 'Elective Course', '3', '4', 16),
('XC-460', 'Software Quality Assurance', 'Elective Course', '3', '4', 17),
('XC-470', 'Data Mining', 'Elective Course', '3', '4', 18),
('XC-492', 'Advance Object Oriented Programming', 'Elective Course', '3', '4', 19),
('XC-490', 'Advance Software Development Techniques', 'Elective Course', '3', '4', 20),
('XI-499', 'Final Project', 'Project', '3', '6', 21);

-- --------------------------------------------------------

--
-- Table structure for table `unipms_schools`
--

CREATE TABLE `unipms_schools` (
  `SCL_SchoolCode` varchar(2) DEFAULT NULL,
  `SCL_SchoolName` varchar(50) DEFAULT NULL,
  `SCL_SchoolAbb` varchar(5) DEFAULT NULL,
  `SCL_PKID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unipms_schools`
--

INSERT INTO `unipms_schools` (`SCL_SchoolCode`, `SCL_SchoolName`, `SCL_SchoolAbb`, `SCL_PKID`) VALUES
('01', 'School of Professional Advancement', 'SPA', 1),
('02', 'School of System and Technology', 'SST', 2);

-- --------------------------------------------------------

--
-- Table structure for table `unipms_stdattendance`
--

CREATE TABLE `unipms_stdattendance` (
  `SA_STDRollNo` varchar(12) DEFAULT NULL,
  `SA_SubName` varchar(50) DEFAULT NULL,
  `SA_STDPPCode` varchar(5) DEFAULT NULL,
  `SA_STDPSCode` varchar(5) DEFAULT NULL,
  `SA_Date` varchar(15) DEFAULT NULL,
  `SA_StartTime` varchar(15) DEFAULT NULL,
  `SA_EndTime` varchar(50) DEFAULT NULL,
  `SA_Status` varchar(1) DEFAULT NULL,
  `SA_PKID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unipms_stdattendance`
--

INSERT INTO `unipms_stdattendance` (`SA_STDRollNo`, `SA_SubName`, `SA_STDPPCode`, `SA_STDPSCode`, `SA_Date`, `SA_StartTime`, `SA_EndTime`, `SA_Status`, `SA_PKID`) VALUES
('s2019027012', 'OOP', '01', '01', '2020-06-16', '21:42', '19:41', 'Y', 5),
('s2019027012', 'OOP', '01', '01', '2020-06-17', '16:47', '16:47', 'N', 6);

-- --------------------------------------------------------

--
-- Table structure for table `unipms_stdmarks`
--

CREATE TABLE `unipms_stdmarks` (
  `SM_STDRollNo` varchar(12) DEFAULT NULL,
  `SM_ExamType` varchar(5) DEFAULT NULL,
  `SM_ExamName` varchar(50) DEFAULT NULL,
  `SM_SubjectName` varchar(50) DEFAULT NULL,
  `SM_SunjectCrHr` varchar(1) DEFAULT NULL,
  `SM_STDPPCode` varchar(5) DEFAULT NULL,
  `SM_STDPSCode` varchar(5) DEFAULT NULL,
  `SM_Date` varchar(15) DEFAULT NULL,
  `SM_TotalMarks` varchar(3) DEFAULT NULL,
  `SM_ObtainedMarks` varchar(3) DEFAULT NULL,
  `SM_PKID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unipms_stdmarks`
--

INSERT INTO `unipms_stdmarks` (`SM_STDRollNo`, `SM_ExamType`, `SM_ExamName`, `SM_SubjectName`, `SM_SunjectCrHr`, `SM_STDPPCode`, `SM_STDPSCode`, `SM_Date`, `SM_TotalMarks`, `SM_ObtainedMarks`, `SM_PKID`) VALUES
('s2019027012', 'Mids', 'OOP', 'OOP', '3', '01', '01', '2020-06-21', '50', '45', 2),
('s2019027012', 'Quiz', 'OOP', 'OOP', '3', '01', '01', '2020-06-22', '50', '45', 3),
('s2019027012', 'Quiz', 'OOP', 'OOP', '3', '01', '01', '2020-06-18', '10', '10', 4);

-- --------------------------------------------------------

--
-- Table structure for table `unipms_students`
--

CREATE TABLE `unipms_students` (
  `STD_RollNo` varchar(11) NOT NULL,
  `STD_Password` varchar(50) NOT NULL,
  `STD_FirstName` varchar(50) NOT NULL,
  `STD_LastName` varchar(50) NOT NULL,
  `STD_CNIC` varchar(15) NOT NULL,
  `STD_Program` varchar(2) NOT NULL,
  `STD_CrrSemester` varchar(1) NOT NULL,
  `STD_PhoneNo` varchar(12) NOT NULL,
  `STD_Email` varchar(60) NOT NULL,
  `STD_Gender` varchar(6) NOT NULL,
  `STD_City` varchar(5) NOT NULL,
  `STD_Country` varchar(5) NOT NULL,
  `STD_Picture` varchar(250) NOT NULL,
  `STD_FatherName` varchar(100) NOT NULL,
  `STD_FatherPhone` varchar(12) NOT NULL,
  `STD_FatherHome` varchar(50) NOT NULL,
  `STD_FatherCNIC` varchar(15) NOT NULL,
  `STD_Section` varchar(2) NOT NULL,
  `STD_Address` varchar(250) NOT NULL,
  `STD_SCLSchoolCode` varchar(2) NOT NULL,
  `STD_PKID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unipms_students`
--

INSERT INTO `unipms_students` (`STD_RollNo`, `STD_Password`, `STD_FirstName`, `STD_LastName`, `STD_CNIC`, `STD_Program`, `STD_CrrSemester`, `STD_PhoneNo`, `STD_Email`, `STD_Gender`, `STD_City`, `STD_Country`, `STD_Picture`, `STD_FatherName`, `STD_FatherPhone`, `STD_FatherHome`, `STD_FatherCNIC`, `STD_Section`, `STD_Address`, `STD_SCLSchoolCode`, `STD_PKID`) VALUES
('s2019027012', '123456', 'Haroon', 'Mahmood', '35201-2019126-5', '01', '1', '03034243233', 'iyetech99@gmail.com', 'Male', '00001', '00001', '', 'Nasir Mahmood', '03034243233', '', '33333-3333333-3', '01', '', '01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unipms_teacher`
--

CREATE TABLE `unipms_teacher` (
  `TCHR_ID` varchar(12) DEFAULT NULL,
  `TCHR_Password` varchar(50) DEFAULT NULL,
  `TCHR_FirstName` varchar(50) DEFAULT NULL,
  `TCHR_LastName` varchar(50) DEFAULT NULL,
  `TCHR_CNIC` varchar(15) DEFAULT NULL,
  `TCHR_PhoneNo` varchar(12) DEFAULT NULL,
  `TCHR_Email` varchar(50) DEFAULT NULL,
  `TCHR_Gender` varchar(6) DEFAULT NULL,
  `TCHR_Specialty` varchar(6) DEFAULT NULL,
  `TCHR_City` varchar(5) DEFAULT NULL,
  `TCHR_Country` varchar(5) DEFAULT NULL,
  `TCHR_Picture` varchar(150) DEFAULT NULL,
  `TCHR_Address` varchar(250) DEFAULT NULL,
  `TCHR_FatherName` varchar(50) DEFAULT NULL,
  `TCHR_FatherPhone` varchar(12) DEFAULT NULL,
  `TCHR_FatherHome` varchar(50) DEFAULT NULL,
  `TCHR_FatherCNIC` varchar(15) DEFAULT NULL,
  `TCHR_SCLSchoolCode` varchar(15) DEFAULT NULL,
  `TCHR_PKID` int(11) NOT NULL,
  `TCHR_Post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unipms_teacher`
--

INSERT INTO `unipms_teacher` (`TCHR_ID`, `TCHR_Password`, `TCHR_FirstName`, `TCHR_LastName`, `TCHR_CNIC`, `TCHR_PhoneNo`, `TCHR_Email`, `TCHR_Gender`, `TCHR_Specialty`, `TCHR_City`, `TCHR_Country`, `TCHR_Picture`, `TCHR_Address`, `TCHR_FatherName`, `TCHR_FatherPhone`, `TCHR_FatherHome`, `TCHR_FatherCNIC`, `TCHR_SCLSchoolCode`, `TCHR_PKID`, `TCHR_Post`) VALUES
('t2019027012', '123456', 'Haroon', 'Mahmood', '35201-2019126-5', '03034243233', 'iyetech99@gmail.com', 'Male', 'Comput', '00000', '00000', '', '', '', '', '', '', '01', 1, 'Lecturer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `unipms_admin`
--
ALTER TABLE `unipms_admin`
  ADD PRIMARY KEY (`ADMIN_PKID`);

--
-- Indexes for table `unipms_citycountry`
--
ALTER TABLE `unipms_citycountry`
  ADD PRIMARY KEY (`CC_PKID`);

--
-- Indexes for table `unipms_programs`
--
ALTER TABLE `unipms_programs`
  ADD PRIMARY KEY (`STDP_PKID`);

--
-- Indexes for table `unipms_roadmap`
--
ALTER TABLE `unipms_roadmap`
  ADD PRIMARY KEY (`RM_PKID`);

--
-- Indexes for table `unipms_schools`
--
ALTER TABLE `unipms_schools`
  ADD PRIMARY KEY (`SCL_PKID`);

--
-- Indexes for table `unipms_stdattendance`
--
ALTER TABLE `unipms_stdattendance`
  ADD PRIMARY KEY (`SA_PKID`);

--
-- Indexes for table `unipms_stdmarks`
--
ALTER TABLE `unipms_stdmarks`
  ADD PRIMARY KEY (`SM_PKID`);

--
-- Indexes for table `unipms_students`
--
ALTER TABLE `unipms_students`
  ADD PRIMARY KEY (`STD_PKID`);

--
-- Indexes for table `unipms_teacher`
--
ALTER TABLE `unipms_teacher`
  ADD PRIMARY KEY (`TCHR_PKID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `unipms_admin`
--
ALTER TABLE `unipms_admin`
  MODIFY `ADMIN_PKID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `unipms_citycountry`
--
ALTER TABLE `unipms_citycountry`
  MODIFY `CC_PKID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unipms_programs`
--
ALTER TABLE `unipms_programs`
  MODIFY `STDP_PKID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `unipms_roadmap`
--
ALTER TABLE `unipms_roadmap`
  MODIFY `RM_PKID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `unipms_schools`
--
ALTER TABLE `unipms_schools`
  MODIFY `SCL_PKID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unipms_stdattendance`
--
ALTER TABLE `unipms_stdattendance`
  MODIFY `SA_PKID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unipms_stdmarks`
--
ALTER TABLE `unipms_stdmarks`
  MODIFY `SM_PKID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `unipms_students`
--
ALTER TABLE `unipms_students`
  MODIFY `STD_PKID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `unipms_teacher`
--
ALTER TABLE `unipms_teacher`
  MODIFY `TCHR_PKID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
