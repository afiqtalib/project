-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2024 at 09:19 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ad_img` varchar(100) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_phone`, `email`, `password`, `ad_img`, `last_login`) VALUES
(1, 'MUHAMMAD AFIQ BIN TALIB ALI', '015435466', 'admin@gmail.com', '12345', 'family.jpeg', NULL),
(2, 'MUHAMMAD AMSYAR', '01121828562', 'amsyar@gmail.com', '12345', 'task_multimedia.PNG', NULL),
(3, 'nama user', '099999', 'user@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, '2023-06-28 23:42:32'),
(433, 'abu', NULL, 'abu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, '2023-05-27 15:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `lv_id` int(11) NOT NULL,
  `lv_type` varchar(255) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `lv_duration` varchar(255) NOT NULL,
  `lv_reasons` varchar(255) NOT NULL,
  `created_date` date DEFAULT NULL,
  `lv_status` varchar(255) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`lv_id`, `lv_type`, `from_date`, `to_date`, `lv_duration`, `lv_reasons`, `created_date`, `lv_status`, `emp_id`, `admin_id`) VALUES
(1, 'Cuti Kecemasan', '2022-11-30', '2022-12-01', '1', 'test submit', NULL, NULL, NULL, 1),
(2, 'Cuti sakit', '2022-12-01', '2022-11-20', '2', 'test submit leave form', NULL, NULL, NULL, 2),
(3, 'Tanpa Gaji', '2022-12-01', '2022-12-30', '30', 'fdrfsadf test ', NULL, NULL, NULL, 2),
(4, 'Cuti Tahunan', '2022-11-22', '2022-11-29', '11', 'dsdfsfsf', '2022-12-12', NULL, NULL, 1),
(5, 'Cuti Tahunan', '2022-11-30', '2022-12-06', '2', 'wtrtd', '2022-11-12', NULL, NULL, 1),
(6, 'Tanpa Gaji', '2022-11-30', '2022-11-21', '222', '535srfsafsf', '2022-11-12', NULL, NULL, 1),
(7, 'Cuti Sakit', '2022-11-29', '2022-11-28', '5', 'dsdd', '2022-11-15', NULL, NULL, 2),
(8, 'Cuti Sakit', '2022-11-29', '2022-11-28', '5', 'dsdd', '2022-11-15', NULL, NULL, 2),
(9, 'Cuti Tahunan', '2022-11-19', '2022-12-02', '7', 'UIYIUHO', '2022-11-16', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_phonenum` varchar(255) NOT NULL,
  `emp_age` int(10) DEFAULT NULL,
  `emp_pemail` varchar(255) NOT NULL,
  `emp_address` varchar(255) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `emp_position` varchar(255) NOT NULL,
  `emp_status` varchar(255) NOT NULL,
  `start_work` date NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `emp_pass` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `emp_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_phonenum`, `emp_age`, `emp_pemail`, `emp_address`, `dept_name`, `emp_position`, `emp_status`, `start_work`, `emp_email`, `emp_pass`, `status`, `emp_img`) VALUES
(1, 'MUHAMMAD AFIQ BIN TALIB ALI ', '0132444353', 25, 'rjcasilan@gmail.com', 'LOT 804/B JALAN PASIR PUTEH KAMPUNG PERINGAT', 'Creative & Design', 'Web Developer', 'Full-Time', '2022-09-21', 'hai@gmail.com', '12345', NULL, ''),
(2, 'Muhammad Abu', '0124343', 43, 'hai@gmail.com', 'LOT 804/B JALAN PASIR PUTEH KAMPUNG PERINGAT', 'IT & Web Development', 'Tak Tahu', 'Intern', '2022-11-22', 'admin@gmail.com', '12345', NULL, 'Slide2.png'),
(3, 'MUHAMMAD ALI', '01546554', 43, 'ali@gmail.com', 'LOT 804/B JALAN PASIR PUTEH KAMPUNG PERINGAT', 'IT & Web Development', 'Tak Tahu', 'Full-Time', '2022-11-14', 'admin@gmail.com', '12345', NULL, 'Timetable  SEM 6.png'),
(4, 'TEST', '01121828562', 54, 'student@uitm.edu.my', 'LOT 804/B JALAN PASIR PUTEH KAMPUNG PERINGAT', 'IT & Web Development', 'Tak Tahu', 'Contract', '2022-11-14', 'rjcasilan@gmail.com', '12345', 'active', '');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filename`) VALUES
(38, 'marketing strategy.png'),
(39, 'EMPKOST.png'),
(40, 'logo.png'),
(41, 'BP - TDB.png'),
(42, 'receipt_bengkelphp.png'),
(43, 'SB Admin 2 - Tables.pdf'),
(44, 'Slide1.png'),
(45, 'family.jpeg'),
(46, 'Muhammad Afiq Bin Talib Ali_Sijil SPM.pdf'),
(47, 'JS_EMPLOYMENT_APPLICATION_FORM_2023.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phonenum` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `start_work` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `phonenum`, `position`, `department`, `start_work`) VALUES
(3, 'ela', '202cb962ac59075b964b07152d234b70', 'Ela', NULL, NULL, NULL, NULL),
(4, 'elias', '202cb962ac59075b964b07152d234b70', 'elias', NULL, NULL, NULL, NULL),
(5, 'afiqtalib', '34c80ad0ae0c2ff63c5894805ddd1602', 'MUHAMMAD AFIQ TALIB ALI', NULL, NULL, NULL, NULL),
(6, 'afiq1710', '6b22b6915602dbe03740735d679cff27', 'afiq1710', NULL, NULL, NULL, NULL),
(7, 'abbu', 'c1a635a03762bff6ff865994fd178a78', 'MUHAMMAD AFI', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`lv_id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=434;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `lv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
