-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2016 at 03:25 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `allotted`
--

CREATE TABLE IF NOT EXISTS `allotted` (
  `p_id` int(11) NOT NULL,
  `bed_no` int(11) NOT NULL,
  `ward_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `app_id` int(11) NOT NULL,
  `d_id` int(11) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `PhNo` int(11) DEFAULT NULL,
  `D_O_Appointment` date DEFAULT NULL,
  `D_O_Request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `casualty`
--

CREATE TABLE IF NOT EXISTS `casualty` (
  `p_id` int(11) NOT NULL,
  `D_O_Admit` date NOT NULL,
  `D_O_Expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casualty`
--

INSERT INTO `casualty` (`p_id`, `D_O_Admit`, `D_O_Expiry`) VALUES
(12354, '0000-00-00', '0000-00-00'),
(12362, '0000-00-00', '0000-00-00'),
(12364, '0000-00-00', '0000-00-00'),
(12372, '0000-00-00', '0000-00-00'),
(12378, '0000-00-00', '0000-00-00'),
(12379, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `e_id` int(11) NOT NULL,
  `Dept` varchar(20) DEFAULT NULL,
  `Designation` varchar(20) DEFAULT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`e_id`, `Dept`, `Designation`, `password`) VALUES
(11100252, 'Medicine', 'Professor', ''),
(11100253, 'Medicine', 'Professor', ''),
(11100254, 'ENT', 'Assistant Professor', ''),
(11100255, 'Pediatrics', 'Professor', ''),
(11100256, 'Anatomy', 'Assistant Professor', ''),
(11100257, 'Pediatrics', 'Professor', ''),
(11100258, 'Pediatrics', 'Professor', ''),
(11100259, 'Medicine', 'Associate Professor', ''),
(11100260, 'Pediatrics', 'Associate Professor', ''),
(11100261, 'Biochemistry', 'Professor', ''),
(11100262, 'Anatomy', 'Assistant Professor', ''),
(11100263, 'Biochemistry', 'Assistant Professor', ''),
(11100264, 'Biochemistry', 'Professor', ''),
(11100265, 'Pediatrics', 'Assistant Professor', ''),
(11100266, 'Medicine', 'Assistant Professor', ''),
(11100267, 'ENT', 'Associate Professor', ''),
(11100268, 'Pediatrics', 'Assistant Professor', ''),
(11100269, 'Medicine', 'Associate Professor', ''),
(11100270, 'ENT', 'Associate Professor', ''),
(11100271, 'ENT', 'Assistant Professor', ''),
(11100272, 'Anatomy', 'Associate Professor', ''),
(11100273, 'ENT', 'Assistant Professor', ''),
(11100274, 'ENT', 'Associate Professor', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `e_id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `sex` char(5) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `quailfication` text,
  `experience` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inpatient`
--

CREATE TABLE IF NOT EXISTS `inpatient` (
  `p_id` int(11) NOT NULL,
  `D_O_Admit` date NOT NULL,
  `ward_no` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inpatient`
--

INSERT INTO `inpatient` (`p_id`, `D_O_Admit`, `ward_no`) VALUES
(12347, '0000-00-00', NULL),
(12348, '0000-00-00', NULL),
(12349, '0000-00-00', NULL),
(12351, '0000-00-00', NULL),
(12352, '0000-00-00', NULL),
(12353, '0000-00-00', NULL),
(12363, '0000-00-00', NULL),
(12368, '0000-00-00', NULL),
(12369, '0000-00-00', NULL),
(12371, '0000-00-00', NULL),
(12373, '0000-00-00', NULL),
(12374, '0000-00-00', NULL),
(12375, '0000-00-00', NULL),
(12376, '0000-00-00', NULL),
(12377, '0000-00-00', NULL),
(12380, '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE IF NOT EXISTS `medical_history` (
  `p_id` int(11) NOT NULL,
  `Dept` varchar(50) NOT NULL,
  `m_id` int(5) DEFAULT NULL,
  `units` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `m_id` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
  `e_id` int(10) NOT NULL,
  `ward_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outpatient`
--

CREATE TABLE IF NOT EXISTS `outpatient` (
  `p_id` int(11) NOT NULL,
  `D_O_Admit` date DEFAULT NULL,
  `D_O_Discharge` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outpatient`
--

INSERT INTO `outpatient` (`p_id`, `D_O_Admit`, `D_O_Discharge`) VALUES
(12345, '0000-00-00', NULL),
(12346, '0000-00-00', NULL),
(12350, '0000-00-00', NULL),
(12355, '0000-00-00', NULL),
(12356, '0000-00-00', NULL),
(12357, '0000-00-00', NULL),
(12358, '0000-00-00', NULL),
(12359, '0000-00-00', NULL),
(12360, '0000-00-00', NULL),
(12361, '0000-00-00', NULL),
(12365, '0000-00-00', NULL),
(12366, '0000-00-00', NULL),
(12367, '0000-00-00', NULL),
(12370, '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `p_id` int(5) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `PhNo` int(20) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'in'
) ENGINE=InnoDB AUTO_INCREMENT=12381 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `Name`, `Sex`, `DOB`, `Age`, `Address`, `PhNo`, `password`, `status`) VALUES
(12345, 'Satinder Gombar', 'M', '1988-04-15', 28, 'A211, Amravati Apartments, Dhanbad', 2565499, '', 'in'),
(12346, 'Sukanya Mitra', 'M', '2004-03-11', 12, 'H56, Gurgaon ', 2899545, '', 'in'),
(12347, 'Lakesh Anand', 'M', '2001-01-25', 15, '13B, Mayur Vihar, New Delhi', 2086009, '', 'in'),
(12348, 'Sanjeev Palta ', 'M', '1999-10-16', 17, '1A, Kamla Nehru Block, Delhi', 2078603, '', 'in'),
(12349, 'Deepak Thapa', 'M', '2004-07-15', 12, 'HJ-1, Amravati Builders, Varanasi', 2220786, '', 'in'),
(12350, 'Richa Saroa', 'F', '1984-07-07', 32, '11- 1st floor,Police Campus, Dhanbad', 2434345, '', 'in'),
(12351, 'Dheeraj Kapoor', 'M', '1986-09-17', 30, '771, Surya Enclave, Durgapur', 2190020, '', 'in'),
(12352, 'Manpreet Singh', 'F', '1973-11-20', 43, '1123, Civil Lines, Allahabad', 2197688, '', 'in'),
(12353, 'Vanita Ahuja', 'F', '1990-07-12', 26, '2231, Chitkara Block, Hassanpur', 2011198, '', 'in'),
(12354, 'Jasbeer Singh', 'F', '1984-01-11', 32, 'A211, Sunny Builders, Mohali', 2241526, '', 'in'),
(12356, 'Swati Jindal ', 'F', '1970-01-27', 46, '14B,PEC, Amritsar', 2200894, '', 'in'),
(12357, 'Puja Saxena', 'F', '1980-01-30', 36, 'A11, Sheela Bazar, Kanpur', 2487654, '', 'in'),
(12358, 'Mahesh Sharma', 'M', '1985-02-08', 31, '132, Hirapur, Dhanbad', 2348943, '', 'in'),
(12359, 'Kanchan Kapoor', 'F', '1961-10-27', 65, 'Sector 46 B , 172, Chandigarh', 2994854, '', 'in'),
(12360, 'Avinash Abhaya', 'M', '1979-09-26', 37, 'House no 67,ICMR Road,Ferozpur', 2333423, '', 'in'),
(12361, 'Ansh Sharma', 'M', '1990-01-29', 26, 'IX, Phase 3 , Mohali', 2101932, '', 'in'),
(12362, 'Anupriya Kaur', 'F', '1997-12-17', 19, '1A, MLN Medical College, varanasi', 2223093, '', 'in'),
(12363, 'Jyotsna Singh', 'F', '1989-09-06', 27, '13- Phase 20, Jalandhar', 2212345, '', 'in'),
(12364, 'Jasjot Singh', 'F', '1989-01-09', 27, 'Sector 62 B , 172, Chandigarh', 2098789, '', 'in'),
(12365, 'Sushma Sood ', 'F', '1979-01-09', 37, '231/B, GMCH, Chandigarh', 2436789, '', 'in'),
(12366, 'Arjun Dass', 'M', '1979-09-07', 37, 'Kheer ganga enclave, mohali', 2394093, '', 'in'),
(12367, 'Nitin Nagarkar', 'M', '1966-12-24', 50, '16, Darbangha road', 2089453, '', 'in'),
(12368, 'Amish Patel ', 'M', '1965-01-13', 51, '13/B, Kharar Enclave', 2231058, '', 'in'),
(12369, 'Akhilesh Jindal ', 'M', '1985-01-09', 31, '334A, Ring Road, Kolkata', 2091234, '', 'in'),
(12370, 'Mitul Soni ', 'M', '1960-05-07', 66, 'Army block, Govindpur', 2768574, '', 'in'),
(12371, 'Rahul Desai ', 'M', '1980-01-26', 36, 'Sector 6 H , 17, Chandigarh', 2444310, '', 'in'),
(12372, 'Vaibhav Saini ', 'M', '1984-10-04', 32, '34XH, Ring Road, Kolkata', 2070705, '', 'in'),
(12373, 'Nitin Gupta', 'M', '1999-01-20', 17, '34XH, Ring Road, Kolkata', 2090956, '', 'in'),
(12374, 'Surinder SInghal ', 'F', '1987-12-17', 29, 'HH-22, Paramatrix, sector 32B, Panchkula', 2778444, '', 'in'),
(12375, 'Rishabh Mehta ', 'M', '1993-09-10', 22, 'Sector 26A , 72, Chandigarh', 2523908, '', 'in'),
(12376, 'Milind Rohit', 'M', '1950-04-29', 66, '192, Kharar Kurali Highway, Kharar', 2366778, '', 'in'),
(12377, 'Daamini Agarwal ', 'F', '1987-11-11', 29, '17HA, Symbiosis District, Pune', 2039303, '', 'in'),
(12378, 'Shantanu Singh', 'M', '1983-11-26', 33, 'A221, Kormangla Chowk, Aurangabad', 2233090, '', 'in'),
(12379, 'Prince Gupta', 'M', '1994-08-25', 21, '9092- Science City Road, Bangalore', 2110292, '', 'in'),
(12380, 'Nagendra Kumar', 'M', '1999-11-05', 17, '32/B, Powai, IIT Mumbai', 2437590, '', 'in');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE IF NOT EXISTS `receptionist` (
  `e_id` int(5) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `d_id` int(11) NOT NULL,
  `Mon` int(11) NOT NULL,
  `Tue` int(11) NOT NULL,
  `Wed` int(11) NOT NULL,
  `Thu` int(11) NOT NULL,
  `Fri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `treats`
--

CREATE TABLE IF NOT EXISTS `treats` (
  `p_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE IF NOT EXISTS `ward` (
  `ward_no` int(5) NOT NULL,
  `bed_occupied` int(5) NOT NULL,
  `bed_empty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `casualty`
--
ALTER TABLE `casualty`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `inpatient`
--
ALTER TABLE `inpatient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `outpatient`
--
ALTER TABLE `outpatient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `m_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12381;
--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `e_id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
