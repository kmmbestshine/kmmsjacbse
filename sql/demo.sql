-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2017 at 12:35 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

CREATE TABLE `amount` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amount`
--

INSERT INTO `amount` (`id`, `school_id`, `class_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '8500', '0000-00-00 00:00:00', '2017-01-21 02:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `section_id` varchar(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `attendance` varchar(20) NOT NULL,
  `remarks` text NOT NULL,
  `date` varchar(100) NOT NULL,
  `attendance_by` varchar(100) NOT NULL,
  `platfom` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `school_id`, `teacher_id`, `class_id`, `section_id`, `student_id`, `attendance`, `remarks`, `date`, `attendance_by`, `platfom`, `created_at`, `updated_at`) VALUES
(1, 1, '2', '1', '1', '4', 'P', '', '15-12-2016', 'school', '', '2016-12-19 15:02:10', '2016-12-19 23:04:41'),
(2, 1, '2', '1', '1', '1', 'L', '', '15-12-2016', 'school', '', '2016-12-19 15:02:10', '2016-12-19 23:04:41'),
(3, 1, '2', '1', '1', '2', 'A', '13', '15-12-2016', 'school', '', '2016-12-19 15:02:10', '2016-12-19 23:04:41'),
(4, 1, '1', '1', '1', '4', 'P', '', '22-12-2016', 'school', '', '2016-12-23 03:10:15', '0000-00-00 00:00:00'),
(5, 1, '1', '1', '1', '1', 'L', '', '22-12-2016', 'school', '', '2016-12-23 03:10:15', '0000-00-00 00:00:00'),
(6, 1, '1', '1', '1', '2', 'A', '', '22-12-2016', 'school', '', '2016-12-23 03:10:15', '0000-00-00 00:00:00'),
(7, 1, '1', '1', '1', '4', 'P', '', '25-12-2016', 'school', '', '2016-12-26 03:46:40', '0000-00-00 00:00:00'),
(8, 1, '1', '1', '1', '1', 'P', '', '25-12-2016', 'school', '', '2016-12-26 03:46:40', '0000-00-00 00:00:00'),
(9, 1, '1', '1', '1', '2', 'P', '', '25-12-2016', 'school', '', '2016-12-26 03:46:40', '0000-00-00 00:00:00'),
(16, 1, '1', '1', '1', '1', 'P', '', '28-12-2016', 'teacher', '', '2016-12-29 04:57:58', '2016-12-29 12:58:53'),
(17, 1, '1', '1', '1', '2', 'L', '', '28-12-2016', 'teacher', '', '2016-12-29 04:57:58', '2016-12-29 12:58:54'),
(18, 1, '1', '1', '1', '4', 'P', '', '28-12-2016', 'teacher', '', '2016-12-29 04:57:58', '2016-12-29 12:58:54'),
(19, 1, '1', '1', '1', '1', 'P', '', '29-12-2016', 'teacher', '', '2016-12-29 04:57:58', '2016-12-29 12:58:53'),
(20, 1, '1', '1', '1', '4', 'P', '', '30-12-2016', 'school', '', '2016-12-30 17:06:30', '0000-00-00 00:00:00'),
(21, 1, '1', '1', '1', '1', 'L', '', '30-12-2016', 'school', '', '2016-12-30 17:06:30', '0000-00-00 00:00:00'),
(22, 1, '1', '1', '1', '2', 'A', '', '30-12-2016', 'school', '', '2016-12-30 17:06:30', '0000-00-00 00:00:00'),
(23, 1, '4', '2', '2', '5', 'A', 'Helo', '02-01-2017', 'teacher', '', '2017-01-02 05:20:36', '2017-01-02 10:21:13'),
(24, 1, '4', '2', '2', '6', 'P', 'Helo', '02-01-2017', 'teacher', '', '2017-01-02 05:20:36', '2017-01-02 10:21:13'),
(25, 1, '4', '2', '2', '5', 'P', 'Helo', '03-01-2017', 'teacher', '', '2017-01-02 05:21:22', '0000-00-00 00:00:00'),
(26, 1, '4', '2', '2', '6', 'P', 'Helo', '03-01-2017', 'teacher', '', '2017-01-02 05:21:22', '0000-00-00 00:00:00'),
(27, 1, '4', '2', '2', '5', 'P', 'Helo', '04-01-2017', 'teacher', '', '2017-01-02 05:21:26', '0000-00-00 00:00:00'),
(28, 1, '4', '2', '2', '6', 'P', 'Helo', '04-01-2017', 'teacher', '', '2017-01-02 05:21:26', '0000-00-00 00:00:00'),
(29, 1, '4', '2', '2', '5', 'P', 'Helo', '05-01-2017', 'teacher', '', '2017-01-02 05:21:30', '0000-00-00 00:00:00'),
(30, 1, '4', '2', '2', '6', 'P', 'Helo', '05-01-2017', 'teacher', '', '2017-01-02 05:21:30', '0000-00-00 00:00:00'),
(31, 1, '4', '2', '2', '5', 'A', 'Helo', '06-01-2017', 'teacher', '', '2017-01-02 05:21:50', '0000-00-00 00:00:00'),
(32, 1, '4', '2', '2', '6', 'A', 'Helo', '06-01-2017', 'teacher', '', '2017-01-02 05:21:50', '0000-00-00 00:00:00'),
(33, 1, '4', '2', '2', '5', 'M', 'Helo', '07-01-2017', 'teacher', '', '2017-01-02 05:23:43', '0000-00-00 00:00:00'),
(34, 1, '4', '2', '2', '6', 'M', 'Helo', '07-01-2017', 'teacher', '', '2017-01-02 05:23:43', '0000-00-00 00:00:00'),
(35, 1, '4', '2', '2', '5', 'HF', 'Helo', '09-01-2017', 'teacher', '', '2017-01-02 05:23:56', '0000-00-00 00:00:00'),
(36, 1, '4', '2', '2', '6', 'HF', 'Helo', '09-01-2017', 'teacher', '', '2017-01-02 05:23:56', '0000-00-00 00:00:00'),
(37, 1, '4', '2', '2', '5', 'A', 'Hi', '10-01-2017', 'teacher', '', '2017-01-02 05:24:06', '2017-01-10 08:21:47'),
(38, 1, '4', '2', '2', '6', 'A', 'Hi', '10-01-2017', 'teacher', '', '2017-01-02 05:24:06', '2017-01-10 08:21:47'),
(39, 1, '4', '2', '2', '5', 'L', 'Helo', '11-01-2017', 'teacher', '', '2017-01-02 05:25:47', '2017-01-10 05:56:26'),
(40, 1, '4', '2', '2', '6', 'L', 'Helo', '11-01-2017', 'teacher', '', '2017-01-02 05:25:47', '2017-01-10 05:56:26'),
(41, 1, '1', '1', '1', '4', 'P', '', '05-01-2017', 'school', '', '2017-01-05 14:24:15', '2017-01-05 08:55:37'),
(42, 1, '1', '1', '1', '1', 'L', '', '05-01-2017', 'school', '', '2017-01-05 14:24:15', '2017-01-05 08:55:38'),
(43, 1, '1', '1', '1', '2', 'A', '', '05-01-2017', 'school', '', '2017-01-05 14:24:15', '2017-01-05 08:55:38'),
(44, 1, '1', '1', '1', '7', 'M', '', '05-01-2017', 'school', '', '2017-01-05 14:24:15', '2017-01-05 08:55:38'),
(45, 1, '1', '1', '1', '8', 'HF', '', '05-01-2017', 'school', '', '2017-01-05 14:24:15', '2017-01-05 08:55:38'),
(46, 4, '13', '8', '16', '11', 'P', 'check for remark', '07-01-2017', 'school', '', '2017-01-07 17:55:48', '0000-00-00 00:00:00'),
(47, 1, '4', '2', '2', '5', '', '', '12-01-2017', 'teacher', '', '2017-01-10 06:19:00', '0000-00-00 00:00:00'),
(48, 1, '4', '2', '2', '6', '', '', '12-01-2017', 'teacher', '', '2017-01-10 06:19:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blood_group`
--

CREATE TABLE `blood_group` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_group`
--

INSERT INTO `blood_group` (`id`, `school_id`, `blood_group`, `platform`, `created_at`, `updated_at`) VALUES
(1, 1, 'A+', 'application', '2016-11-29 01:38:19', '0000-00-00 00:00:00'),
(2, 1, 'A-', 'application', '2016-11-29 01:38:24', '0000-00-00 00:00:00'),
(3, 1, 'AB-', 'application', '2016-11-29 01:38:29', '0000-00-00 00:00:00'),
(4, 1, 'AB+', 'application', '2016-11-29 01:38:32', '0000-00-00 00:00:00'),
(5, 1, 'O+', 'application', '2016-11-29 01:38:38', '0000-00-00 00:00:00'),
(6, 1, 'O-', 'application', '2016-11-29 01:38:42', '0000-00-00 00:00:00'),
(7, 1, 'NA', '', '2017-01-05 12:14:53', '0000-00-00 00:00:00'),
(8, 4, 'A', '', '2017-01-07 17:32:00', '0000-00-00 00:00:00'),
(9, 4, 'A+', '', '2017-01-07 17:32:04', '0000-00-00 00:00:00'),
(10, 4, 'B', '', '2017-01-07 17:32:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `bus_no` varchar(50) NOT NULL,
  `bus_type` varchar(50) NOT NULL,
  `bus_owned_by` varchar(50) NOT NULL,
  `gps_no` varchar(200) NOT NULL,
  `route` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `school_id`, `bus_no`, `bus_type`, `bus_owned_by`, `gps_no`, `route`, `city`, `capacity`, `created_at`, `updated_at`) VALUES
(1, 1, 'HR26J2001', 'AC', 'school', '7855454578421245', 'Chopta Route', 'Sirsa', '45', '2016-11-27 06:47:54', '2016-11-27 14:49:01'),
(2, 1, 'HR26J2000', 'AC', 'School', '784144212154454', 'Begu Route', 'Sirsa', '45', '2016-11-29 01:41:11', '0000-00-00 00:00:00'),
(3, 1, 'HR26J2002', 'AC', 'School', '9751212124112', 'Kherkan Route', 'Sirsa ', '48', '2016-12-17 03:33:27', '2016-12-17 11:46:26'),
(4, 4, 'RJ-13-t-2014', 'AC', 'School', '723897248978297', 'Jawahar Nagar', 'Sri Ganganagar', '64', '2017-01-07 17:36:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bus_stop`
--

CREATE TABLE `bus_stop` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `stop` text NOT NULL,
  `stop_index` varchar(50) NOT NULL,
  `lattitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_stop`
--

INSERT INTO `bus_stop` (`id`, `school_id`, `bus_id`, `stop`, `stop_index`, `lattitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Dera, Nezia Khera, Darba', '5', '25.454545445', '75.1454', '2016-11-29 01:42:52', '2016-12-17 12:38:51'),
(2, 1, 2, 'Begu, Rangri, Nattar', '3', '29.44545454', '73.565656', '2016-12-17 04:23:31', '0000-00-00 00:00:00'),
(3, 4, 4, 'Mira Marg', '1', '3233', '3233', '2017-01-07 17:39:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `caste`
--

CREATE TABLE `caste` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caste`
--

INSERT INTO `caste` (`id`, `school_id`, `caste`, `platform`, `created_at`, `updated_at`) VALUES
(1, 1, 'General', 'application', '2016-11-29 01:37:18', '2017-01-07 07:31:13'),
(2, 1, 'BC', 'application', '2016-11-29 01:37:24', '0000-00-00 00:00:00'),
(3, 1, 'SC', 'application', '2016-11-29 01:37:30', '0000-00-00 00:00:00'),
(4, 1, 'SBC', 'application', '2016-11-29 01:37:34', '0000-00-00 00:00:00'),
(5, 1, 'EPGB', 'application', '2016-11-29 01:37:40', '0000-00-00 00:00:00'),
(6, 1, 'ST', '', '2017-01-05 12:14:40', '0000-00-00 00:00:00'),
(7, 4, 'Gen', '', '2017-01-07 17:31:44', '0000-00-00 00:00:00'),
(8, 4, 'OBC', '', '2017-01-07 17:31:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `class` varchar(100) NOT NULL,
  `code` varchar(20) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `school_id`, `class`, `code`, `platform`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nursery', '', 'application', '2016-11-29 01:17:44', '2016-12-16 12:34:27'),
(2, 1, '1st', '', 'application', '2016-11-29 01:17:52', '0000-00-00 00:00:00'),
(3, 1, '2nd', '', 'application', '2016-11-29 01:17:58', '0000-00-00 00:00:00'),
(4, 1, '3rd', '', 'application', '2016-11-29 01:18:02', '0000-00-00 00:00:00'),
(5, 1, '4th', '', 'application', '2016-11-29 01:18:09', '0000-00-00 00:00:00'),
(6, 1, '5th', '', 'application', '2016-11-29 01:18:14', '0000-00-00 00:00:00'),
(7, 1, '6th', '', '', '2017-01-05 12:12:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `id` int(11) NOT NULL,
  `day` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`id`, `day`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `driver_name` varchar(100) NOT NULL,
  `driver_mobile` varchar(200) NOT NULL,
  `driver_address` text NOT NULL,
  `driver_city` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `school_id`, `bus_id`, `driver_name`, `driver_mobile`, `driver_address`, `driver_city`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Ramesh', '7896547832', 'Sirsa', 'Sirsa', '2016-11-29 01:44:00', '0000-00-00 00:00:00'),
(2, 1, 2, 'Rohit', '7894568965', 'Dabwali', 'Dabwali', '2016-12-17 04:55:22', '2016-12-17 13:02:24'),
(4, 4, 4, 'pta nahi', '7777777777789375897895738957', 'kljdskjfksjflkjksljfkslfjfdjk', 'pta nahi', '2017-01-07 17:40:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `events` varchar(200) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `school_id`, `events`, `platform`, `created_at`, `updated_at`) VALUES
(1, 1, '26 Aug Celebration', 'application', '2016-11-29 01:36:07', '0000-00-00 00:00:00'),
(2, 1, 'Youth Festival Celebration on 26 December', 'application', '2016-11-29 01:36:33', '0000-00-00 00:00:00'),
(3, 4, 'Diwali', '', '2017-01-07 17:31:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `exam_type` varchar(200) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `school_id`, `exam_type`, `platform`, `created_at`, `updated_at`) VALUES
(1, 1, 'Monthly', 'application', '2016-11-29 01:32:59', '0000-00-00 00:00:00'),
(2, 1, '1st Term', 'application', '2016-11-29 01:33:07', '0000-00-00 00:00:00'),
(3, 1, '2nd Term', 'application', '2016-11-29 01:33:13', '0000-00-00 00:00:00'),
(4, 1, '3rd Term', 'application', '2016-11-29 01:33:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `frequency_id` int(11) NOT NULL,
  `registration_no` varchar(20) NOT NULL,
  `months` varchar(200) NOT NULL,
  `platfom` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`id`, `school_id`, `frequency_id`, `registration_no`, `months`, `platfom`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1212', '', '', '2016-12-28 05:50:47', '0000-00-00 00:00:00'),
(2, 1, 2, '1212', '[\"January\"]', '', '2016-12-28 06:27:06', '0000-00-00 00:00:00'),
(3, 4, 3, '1', '[\"January\",\"February\",\"March\",\"April\"]', '', '2017-01-07 18:05:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `feedback` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(50) NOT NULL,
  `platfom` varchar(50) NOT NULL,
  `feedback_by` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `student_id`, `school_id`, `teacher_id`, `feedback`, `date`, `platfom`, `feedback_by`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 1, 'Hello ', '27-12-2016', '', 'teacher', '2016-12-28 04:41:56', '0000-00-00 00:00:00'),
(2, 4, '1', 1, 'Good', '29-12-2016', '', 'teacher', '2016-12-30 03:59:46', '0000-00-00 00:00:00'),
(3, 5, '1', 1, 'So bad Staff', '31-12-2016', '', 'teacher', '2016-12-31 17:12:36', '0000-00-00 00:00:00'),
(4, 5, '1', 4, 'hgfghffjh', '02-01-2017', '', 'teacher', '2017-01-02 04:34:01', '0000-00-00 00:00:00'),
(5, 5, '1', 4, 'very poor student', '09-01-2017', '', 'teacher', '2017-01-09 12:15:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fee_frequency`
--

CREATE TABLE `fee_frequency` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `frequency` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_frequency`
--

INSERT INTO `fee_frequency` (`id`, `school_id`, `frequency`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admission Time', '2016-12-25 17:40:01', '0000-00-00 00:00:00'),
(2, 1, 'Monthly Term', '2016-12-25 17:40:12', '0000-00-00 00:00:00'),
(3, 4, 'Rs', '2017-01-07 18:01:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fee_structure`
--

CREATE TABLE `fee_structure` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `structure` varchar(200) NOT NULL,
  `platfom` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_structure`
--

INSERT INTO `fee_structure` (`id`, `school_id`, `structure`, `platfom`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tution Fee', '', '2016-12-25 06:33:47', '2016-12-25 14:49:18'),
(2, 1, 'Examination Fee', '', '2016-12-25 06:33:47', '0000-00-00 00:00:00'),
(3, 1, 'Internet Charges', '', '2016-12-25 06:33:47', '0000-00-00 00:00:00'),
(4, 1, 'Library Charges', '', '2016-12-25 06:33:47', '0000-00-00 00:00:00'),
(5, 1, 'Message Charges', '', '2016-12-25 06:33:47', '0000-00-00 00:00:00'),
(9, 4, 'Admission Fee', '', '2017-01-07 18:04:18', '0000-00-00 00:00:00'),
(10, 4, 'Tution', '', '2017-01-07 18:04:18', '0000-00-00 00:00:00'),
(11, 4, 'Class', '', '2017-01-07 18:04:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fee_summary`
--

CREATE TABLE `fee_summary` (
  `id` int(11) NOT NULL,
  `fee_id` int(11) NOT NULL,
  `fee_structure_id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_summary`
--

INSERT INTO `fee_summary` (`id`, `fee_id`, `fee_structure_id`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '784', '2016-12-28 05:50:47', '0000-00-00 00:00:00'),
(2, 1, 2, '754', '2016-12-28 05:50:47', '0000-00-00 00:00:00'),
(3, 1, 3, '854', '2016-12-28 05:50:47', '0000-00-00 00:00:00'),
(4, 1, 4, '745', '2016-12-28 05:50:47', '0000-00-00 00:00:00'),
(5, 1, 5, '455', '2016-12-28 05:50:47', '0000-00-00 00:00:00'),
(6, 2, 1, '788', '2016-12-28 06:27:06', '0000-00-00 00:00:00'),
(7, 2, 2, '751', '2016-12-28 06:27:06', '0000-00-00 00:00:00'),
(8, 2, 3, '120', '2016-12-28 06:27:06', '0000-00-00 00:00:00'),
(9, 2, 4, '60', '2016-12-28 06:27:06', '0000-00-00 00:00:00'),
(10, 2, 5, '85', '2016-12-28 06:27:06', '0000-00-00 00:00:00'),
(11, 3, 9, '200', '2017-01-07 18:05:49', '0000-00-00 00:00:00'),
(12, 3, 10, '200', '2017-01-07 18:05:49', '0000-00-00 00:00:00'),
(13, 3, 11, '200', '2017-01-07 18:05:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `event` text NOT NULL,
  `header` text NOT NULL,
  `footer` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `platfom` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `school_id`, `event`, `header`, `footer`, `date`, `platfom`, `created_at`, `updated_at`) VALUES
(1, 1, 'Annual Function', 'Header', 'Footer', '24-12-2016', '', '2016-12-25 04:45:16', '0000-00-00 00:00:00'),
(2, 4, '', 'fjskfjskl', 'fjkslsj', '02-10-2016', '', '2017-01-07 18:34:09', '0000-00-00 00:00:00'),
(3, 4, '', 'fjskfjskl', 'fjkslsj', '02-10-2016', '', '2017-01-07 18:34:09', '0000-00-00 00:00:00'),
(4, 1, '26 January', '', '', '21-01-2017', '', '2017-01-21 05:08:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_img`
--

CREATE TABLE `gallery_img` (
  `id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_img`
--

INSERT INTO `gallery_img` (`id`, `gallery_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'gallery/bf043c4a34.jpg', '2016-12-25 04:45:29', '0000-00-00 00:00:00'),
(2, 1, 'gallery/e18cf196fe.gif', '2016-12-25 04:45:29', '0000-00-00 00:00:00'),
(3, 1, 'gallery/0a22a6d05e.jpg', '2016-12-25 04:45:29', '0000-00-00 00:00:00'),
(4, 1, 'gallery/f84879a882.gif', '2016-12-25 04:45:30', '0000-00-00 00:00:00'),
(5, 1, 'gallery/7fbb79a194.gif', '2016-12-25 04:45:30', '0000-00-00 00:00:00'),
(6, 1, 'gallery/0dfbaab82b.png', '2016-12-25 04:45:30', '0000-00-00 00:00:00'),
(7, 1, 'gallery/39ebc697bf.jpg', '2016-12-25 04:45:31', '0000-00-00 00:00:00'),
(8, 1, 'gallery/a5b0df0738.jpg', '2016-12-25 04:45:31', '0000-00-00 00:00:00'),
(9, 3, 'gallery/1cda8b293f.jpg', '2017-01-07 18:34:37', '0000-00-00 00:00:00'),
(10, 3, 'gallery/22f0e817cc.jpg', '2017-01-07 18:34:37', '0000-00-00 00:00:00'),
(11, 3, 'gallery/d7b3180f2d.jpg', '2017-01-07 18:34:39', '0000-00-00 00:00:00'),
(12, 3, 'gallery/b84bf08b48.jpg', '2017-01-07 18:34:39', '0000-00-00 00:00:00'),
(13, 3, 'gallery/04b79ed5bc.jpg', '2017-01-07 18:34:40', '0000-00-00 00:00:00'),
(14, 3, 'gallery/3f56f93a44.jpg', '2017-01-07 18:34:40', '0000-00-00 00:00:00'),
(15, 3, 'gallery/d905bd4dd7.jpg', '2017-01-07 18:34:42', '0000-00-00 00:00:00'),
(16, 3, 'gallery/70735f3c12.jpg', '2017-01-07 18:34:42', '0000-00-00 00:00:00'),
(17, 4, 'gallery/4b96d3ebb0.jpg', '2017-01-21 05:09:01', '0000-00-00 00:00:00'),
(18, 4, 'gallery/cbd8b5b6c0.jpg', '2017-01-21 05:09:01', '0000-00-00 00:00:00'),
(19, 4, 'gallery/f6fb1a1214.jpg', '2017-01-21 05:09:02', '0000-00-00 00:00:00'),
(20, 4, 'gallery/feba16118a.jpg', '2017-01-21 05:09:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `min` varchar(10) NOT NULL,
  `max` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `school_id`, `min`, `max`, `grade`, `created_at`, `updated_at`) VALUES
(1, 1, '0', '39', 'F', '2017-01-21 09:13:56', '2017-01-21 03:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `holiday` varchar(200) NOT NULL,
  `date` varchar(50) NOT NULL,
  `remarks` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`id`, `school_id`, `holiday`, `date`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sunday', '27-11-2016', '', '2016-11-29 01:45:57', '2016-12-17 13:23:44'),
(2, 1, 'Sunday', '05-12-2016', '', '2016-11-29 01:46:18', '0000-00-00 00:00:00'),
(3, 1, 'Sunday', '12-12-2016', '', '2016-11-29 01:46:25', '0000-00-00 00:00:00'),
(4, 1, 'Sunday', '19-12-2016', '', '2016-11-29 01:46:28', '0000-00-00 00:00:00'),
(5, 1, 'Sunday', '26-12-2016', '', '2016-11-29 01:46:32', '0000-00-00 00:00:00'),
(6, 1, 'Eid-Ul-Fitter', '13-12-2016', '', '2016-12-17 05:17:16', '0000-00-00 00:00:00'),
(7, 1, 'Sunday', '08-01-2017', '', '2017-01-05 12:15:28', '0000-00-00 00:00:00'),
(8, 4, 'fjkdslj', '02-1-2017', 'fsdfsfdfsf', '2017-01-07 17:33:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `section_id` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `pdf` varchar(200) NOT NULL,
  `date` varchar(50) NOT NULL,
  `homework_by` varchar(200) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`id`, `school_id`, `class_id`, `section_id`, `subject_id`, `teacher_id`, `description`, `image`, `pdf`, `date`, `homework_by`, `platform`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '1', '1', '1', 'First Day Homework', 'homework/583faf813530d.png', '', '30-11-2016', 'teacher', 'application', '2016-12-01 05:05:05', '0000-00-00 00:00:00'),
(2, 1, '1', '1', '1', '1', 'Hello', 'homework/5850b99c55353.png', '', '13-12-2016', 'teacher', 'application', '2016-12-14 03:16:44', '0000-00-00 00:00:00'),
(3, 1, '1', '1', '2', '1', 'First Lesson Homework', 'homework/4fec602d7e.jpg', '', '16-12-2016', 'school', '', '2016-12-20 14:10:03', '0000-00-00 00:00:00'),
(4, 1, '1', '1', '2', '1', 'Second Lesson', 'homework/5c7542ddb3.jpg', '', '20-12-2016', 'school', '', '2016-12-21 04:52:38', '0000-00-00 00:00:00'),
(5, 1, '1', '1', '2', '1', 'Hello New', 'homework/586340dac5318.png', '', '27-12-2016', 'teacher', '', '2016-12-28 04:29:18', '2016-12-28 12:34:34'),
(6, 1, '1', '1', '2', '1', 'First Chapter', 'homework/6485a8ac10.jpg', '', '28-12-2016', 'teacher', '', '2016-12-29 05:21:30', '0000-00-00 00:00:00'),
(7, 1, '1', '1', '3', '1', 'Second Chapter', 'homework/4b6cf25f1c.jpg', '', '28-12-2016', 'teacher', '', '2016-12-29 05:31:21', '0000-00-00 00:00:00'),
(8, 1, '1', '1', '4', '1', 'First Chapter', 'homework/68104edb09.jpg', '', '28-12-2016', 'school', '', '2016-12-29 05:31:57', '0000-00-00 00:00:00'),
(9, 1, '1', '1', '2', '1', 'a772ff5', '', '', '29-12-2016', 'teacher', '', '2016-12-30 03:49:53', '2016-12-30 11:55:16'),
(10, 1, '1', '1', '4', '1', 'Hello Data', '', '', '31-12-2016', 'teacher', '', '2016-12-31 15:59:35', '2016-12-31 10:32:14'),
(11, 1, '2', '2', '4', '4', 'kjhsdjkfgsdfgjkdgd', 'homework/58688e32d2cd7.png', '', '29-12-2016', 'teacher', '', '2017-01-01 05:05:54', '0000-00-00 00:00:00'),
(12, 1, '2', '2', '3', '4', 'thx gcfhch', '', '', '02-01-2017', 'teacher', '', '2017-01-02 03:47:07', '0000-00-00 00:00:00'),
(13, 1, '2', '2', '2', '4', 'hd', '', '', '02-01-2017', 'teacher', '', '2017-01-02 03:51:15', '2017-01-02 04:21:21'),
(14, 1, '2', '2', '4', '4', 'thx gcfhch', 'homework/5869cec7c6233.png', '', '02-01-2017', 'teacher', '', '2017-01-02 03:53:43', '0000-00-00 00:00:00'),
(15, 1, '2', '2', '5', '4', 'xdhdjv', '', '', '02-01-2017', 'teacher', '', '2017-01-02 04:19:48', '0000-00-00 00:00:00'),
(16, 1, '1', '1', '2', '1', 'Hello', 'homework/106c28709f.jpg', '', '05-01-2017', 'school', '', '2017-01-05 15:10:16', '0000-00-00 00:00:00'),
(17, 1, '2', '2', '2', '4', 'xjdjd', 'homework/5870d0199cf66.png', '', '08-01-2017', 'teacher', '', '2017-01-07 11:25:13', '0000-00-00 00:00:00'),
(18, 1, '2', '2', '2', '4', 'cg', '', '', '07-01-2017', 'teacher', '', '2017-01-07 11:32:36', '0000-00-00 00:00:00'),
(19, 1, '2', '2', '3', '4', 'd', 'homework/5870d1f89fd2e.png', '', '07-01-2017', 'teacher', '', '2017-01-07 11:33:12', '0000-00-00 00:00:00'),
(20, 1, '2', '2', '4', '4', 'hd', 'homework/5870d33cb742e.png', '', '07-01-2017', 'teacher', '', '2017-01-07 11:38:36', '0000-00-00 00:00:00'),
(21, 1, '2', '2', '5', '4', 'hd', 'homework/5870d46cc3354.png', '', '07-01-2017', 'teacher', '', '2017-01-07 11:42:59', '2017-01-07 11:43:40'),
(22, 4, '8', '16', '9', '13', 'jfkslfjskjklsjfksjkfldsjkflsjkljfsfjfjsdjfkfsjfdsjj', 'homework/4c76fcfb00.jpg', '', '09-1-2017', 'school', '', '2017-01-07 17:57:38', '0000-00-00 00:00:00'),
(23, 4, '8', '16', '9', '13', 'jfkldsfjskfsjfskl', 'homework/4ce542334c.jpg', '', '07-01-2017', 'school', '', '2017-01-07 17:58:25', '0000-00-00 00:00:00'),
(24, 4, '8', '16', '9', '13', 'bdndnxnx', 'homework/587136b2eba13.png', '', '08-01-2017', 'teacher', '', '2017-01-07 18:42:58', '0000-00-00 00:00:00'),
(25, 4, '8', '16', '10', '13', 'vdjdndbdndn', 'homework/5871373b294f6.png', '', '07-01-2017', 'teacher', '', '2017-01-07 18:45:15', '0000-00-00 00:00:00'),
(26, 1, '2', '2', '2', '4', 'shkxjj', '', '', '09-01-2017', 'teacher', '', '2017-01-09 04:25:09', '0000-00-00 00:00:00'),
(27, 1, '2', '2', '3', '4', 'xnejjw', 'homework/587310c57ed7f.png', '', '09-01-2017', 'teacher', '', '2017-01-09 04:25:41', '0000-00-00 00:00:00'),
(28, 1, '2', '4', '3', '11', 'Hello', '', '', '09-01-2017', 'teacher', '', '2017-01-09 07:43:11', '0000-00-00 00:00:00'),
(29, 1, '2', '2', '2', '4', 'entered description', 'homework/587497b33bb4c.png', '', '10-01-2017', 'teacher', '', '2017-01-10 08:13:39', '0000-00-00 00:00:00'),
(30, 1, '1', '1', '2', '1', 'Hello', 'homework/33487dcc4f.JPG', 'homework/f3cca2cc57.pdf', '10-01-2017', 'school', '', '2017-01-10 15:21:34', '0000-00-00 00:00:00'),
(31, 1, '1', '1', '4', '1', 'Hello', '', '', '10-01-2017', 'school', '', '2017-01-10 15:28:28', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `issue_date` varchar(100) NOT NULL,
  `return_date` varchar(50) NOT NULL,
  `fine` int(11) NOT NULL,
  `return_flag` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`id`, `book_id`, `student_id`, `issue_date`, `return_date`, `fine`, `return_flag`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '01-01-2017', '08-01-2017', 5, 1, '2017-01-13 09:04:16', '0000-00-00 00:00:00'),
(2, 2, 1, '13-01-2017', '20-01-2017', 0, 0, '2017-01-13 09:05:25', '0000-00-00 00:00:00'),
(3, 3, 1, '13-01-2017', '20-01-2017', 0, 0, '2017-01-13 09:05:42', '0000-00-00 00:00:00'),
(4, 4, 2, '13-01-2017', '20-01-2017', 0, 0, '2017-01-13 10:50:44', '0000-00-00 00:00:00'),
(5, 5, 1, '15-12-2016', '22-12-2016', 22, 1, '2017-01-13 11:02:40', '0000-00-00 00:00:00'),
(6, 5, 1, '13-01-2017', '20-01-2017', 0, 0, '2017-01-13 11:21:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `from_leave` varchar(50) NOT NULL,
  `to_leave` varchar(50) NOT NULL,
  `status` enum('approved','cancelled','process') NOT NULL,
  `by_request` varchar(100) NOT NULL,
  `platfom` varchar(50) NOT NULL,
  `remarks` text NOT NULL,
  `teacher_remarks` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`id`, `student_id`, `user_id`, `school_id`, `from_leave`, `to_leave`, `status`, `by_request`, `platfom`, `remarks`, `teacher_remarks`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 1, '27-12-2016', '30-12-2016', 'process', 'student', '', '', '', '2016-12-28 04:48:02', '0000-00-00 00:00:00'),
(2, 4, 0, 1, '29-12-2016', '30-12-2016', 'process', 'Parent', '', 'Marriage Function', '', '2016-12-29 06:21:16', '0000-00-00 00:00:00'),
(3, 4, 0, 1, '30-12-2016', '02-01-2017', 'process', 'parent', '', '', '', '2016-12-30 04:04:09', '0000-00-00 00:00:00'),
(5, 2, 0, 1, '30-12-2016', '02-01-2017', 'approved', 'parent', '', '', '', '2016-12-30 05:29:08', '2016-12-31 11:38:00'),
(6, 1, 0, 1, '31-12-2016', '02-01-2017', 'process', 'parent', '', '', '', '2016-12-31 17:45:15', '0000-00-00 00:00:00'),
(7, 5, 0, 1, '02-01-2017', '03-01-2017', 'cancelled', 'parent', '', 'Nothing', '', '2017-01-02 05:27:56', '2017-01-02 06:09:55'),
(8, 5, 0, 1, '06-01-2017', '09-01-2017', 'cancelled', 'parent', '', 'Boht sardi hai', 'Teacher Remarks: ', '2017-01-02 05:28:23', '2017-01-10 08:14:25'),
(9, 9, 57, 1, '06-01-2017', '09-01-2017', 'process', 'parent', '', 'Boht sardi hai', '', '2017-01-02 05:28:23', '2017-01-02 06:10:30'),
(10, 6, 0, 1, '11-1-2017', '12-1-2017', 'process', 'parent', '', ' work \n\n\n\n\n', '', '2017-01-10 08:28:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `book_no` varchar(20) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `school_id`, `book_no`, `subject_id`, `price`, `available`, `created_at`, `updated_at`) VALUES
(1, 1, '1000', '2', 150, 0, '2016-12-24 04:09:18', '2017-01-13 05:31:20'),
(2, 1, '1001', '2', 125, 1, '2016-12-24 04:14:01', '2017-01-13 03:35:25'),
(3, 1, '1002', '3', 100, 1, '2016-12-24 04:33:25', '2017-01-13 03:35:42'),
(4, 1, '1003', '4', 123, 1, '2016-12-24 04:33:32', '2017-01-13 05:20:44'),
(5, 1, '1004', '5', 158, 1, '2016-12-24 04:33:39', '2017-01-13 05:51:05'),
(6, 1, '1005', '2', 458, 0, '2016-12-24 04:33:44', '0000-00-00 00:00:00'),
(7, 1, '1006', '2', 156, 0, '2016-12-24 04:33:53', '0000-00-00 00:00:00'),
(8, 1, '1007', '2', 148, 0, '2016-12-24 04:34:03', '0000-00-00 00:00:00'),
(9, 4, '2', '9', 200, 0, '2017-01-07 18:11:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `item_type` enum('bus','student') NOT NULL,
  `lat` varchar(200) NOT NULL,
  `long` varchar(200) NOT NULL,
  `altitude` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `notice` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` varchar(50) NOT NULL,
  `type` enum('student','teacher') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `school_id`, `notice`, `image`, `date`, `type`, `created_at`) VALUES
(3, 1, 'Fee Notice', 'notice/7e02c32b4f.GIF', '10-01-2017', 'student', '2017-01-10 16:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `notification_history`
--

CREATE TABLE `notification_history` (
  `id` int(11) NOT NULL,
  `notification_type_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `role_id` int(11) NOT NULL,
  `role` enum('student','teacher','parent') NOT NULL,
  `message_type` enum('push_msg','text_msg') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_history`
--

INSERT INTO `notification_history` (`id`, `notification_type_id`, `date`, `role_id`, `role`, `message_type`, `created_at`, `updated_at`) VALUES
(1, 2, '07-01-2017', 11, 'student', 'text_msg', '2017-01-07 18:00:35', '0000-00-00 00:00:00'),
(2, 2, '07-01-2017', 5, 'parent', 'text_msg', '2017-01-07 18:00:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notification_type`
--

CREATE TABLE `notification_type` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_type`
--

INSERT INTO `notification_type` (`id`, `school_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Fee', 'Hello Hello', '2017-01-04 15:36:50', '2017-01-04 10:10:27'),
(2, 4, 'fee', 'jsdkfljskjdsjfksfj\r\n', '2017-01-07 17:41:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mother` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `father_occupation` varchar(200) NOT NULL,
  `mother_occupation` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `avatar` text NOT NULL,
  `platform` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `user_id`, `school_id`, `state`, `name`, `mother`, `mobile`, `email`, `father_occupation`, `mother_occupation`, `city`, `address`, `pin_code`, `avatar`, `platform`, `created_at`, `updated_at`) VALUES
(1, 15, 1, 'Haryana', 'Subham', 'Sharmila', '8945655656', '', '', '', 'Sirsa', '', '125055', 'parent/ac57cc0891.jpg', '', '2016-12-18 10:04:44', '0000-00-00 00:00:00'),
(2, 19, 1, 'Haryana', 'Subham', 'Sharmila', '8945655613', 'subham@gmail.com', '', '', 'Sirsa', '', '125055', 'parent/2f04203904.jpg', '', '2016-12-18 10:16:38', '0000-00-00 00:00:00'),
(3, 24, 1, 'Haryana', 'Hari Lal', 'Smita Devi', '8564129870', 'hari@gmail.com', '', '', 'Sirsa', 'Sirsa', '125055', 'parent/default_avatar.png', '', '2016-12-23 05:51:48', '0000-00-00 00:00:00'),
(4, 30, 1, 'Haryana', 'Ram Singh', 'Rmita Devi', '8564129871', '', '', '', 'Sirsa', '', '125055', 'parent/default_avatar.png', '', '2017-01-05 12:34:57', '0000-00-00 00:00:00'),
(5, 37, 4, 'Haryana', 'jsdklf', 'slkdjf', '08504000064', 'info@functionae.com', '', '', 'sirsa', 'md technologies pvt.ltd. chotala house road, mitc colony', '125055', 'parent/fab0a1f941.jpg', '', '2017-01-07 17:48:03', '0000-00-00 00:00:00'),
(6, 39, 4, 'required and numeric', 'required', 'required', 'required and numeric', 'optional', '', '', 'required', 'optional', 'required and numeric', 'parent/default_avatar.png', '', '2017-01-07 18:23:26', '0000-00-00 00:00:00'),
(7, 57, 1, 'Haryana', 'Ramdhaari', 'Kaushalya Devi', '9878451230', '', '', '', 'Bhiwani', '', '135056', 'parent/default_avatar.png', '', '2017-01-11 15:42:31', '0000-00-00 00:00:00'),
(8, 61, 1, 'Haryana', 'Raman Singh', 'Seema Devi', '9878458989', '', '', '', 'Sirsa', '', '125055', 'parent/default_avatar.png', '', '2017-01-13 06:31:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `school_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'post/265bba863c.JPG', '2016-12-22 04:50:26', '2016-12-30 11:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE `principal` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `platfom` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`id`, `user_id`, `school_id`, `name`, `email`, `mobile`, `username`, `image`, `platfom`, `created_at`, `updated_at`) VALUES
(100, 50, 1, 'Rakesh', 'rakesh@gmail.com', '9991902730', 'rakesh76', 'zytjgmnfhcjmyg vnb', 'Application', '2017-01-01 00:00:00', '2017-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `push_notification`
--

CREATE TABLE `push_notification` (
  `id` int(11) NOT NULL,
  `device_id` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `role` enum('teacher','parent','student') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `push_notification`
--

INSERT INTO `push_notification` (`id`, `device_id`, `role_id`, `title`, `description`, `image`, `role`, `created_at`, `updated_at`) VALUES
(1, 'sdhsjdhsjdhjdsjdsdjsh', 1, 'Welcome', 'Welcome Welcome Welcome Welcome Welcome Welcome', '', 'student', '2016-12-31 17:39:57', '2016-12-31 17:39:57'),
(2, 'sdhsjdhsjdhjdsjdsdjsh', 2, 'Welcome', 'Welcome Welcome Welcome Welcome Welcome Welcome', '', 'student', '2016-12-31 17:39:57', '2016-12-31 17:41:28'),
(3, 'sdhsjdhsjdhjdsjdsdjsh', 1, 'Welcome', 'Welcome Parent Welcome Parent Welcome Parent  Welcome Parent  Welcome Parent  Welcome Parent ', '', 'parent', '2016-12-31 17:39:57', '2016-12-31 17:50:06'),
(5, 'fTXcCf65vzY:APA91bH2PuN-fkS-QEupYAXhZli9U2VR5opZHXmpgLjJSsZCK8vLdHoOZn46bbnWzLTgLwtHm9VkBEoqkB4z3vVsdncUCnrEn36z31DQxuIZU2e3zQeotpqClNfpd2IM1dwiG4Z1lL7P', 5, '', '', '', 'student', '2017-01-02 10:34:02', '0000-00-00 00:00:00'),
(6, 'cImDUbgx1qk:APA91bE0fF1yaqJxBZL8lbcimNP4MGlWR3Ks9nFFkWjVnBURJkhdDqbaPldLYwhXSrZusEKDYgeSR_A42_mPu7RITndnR7GPj2DBR0B4_DWqfQF4V-NQnRWbvb3iBasBhAFAP8rCxhO8', 5, '', '', '', 'student', '2017-01-02 10:37:39', '0000-00-00 00:00:00'),
(7, 'cCKAZvKUalo:APA91bEWMckJJn8TvF352iANwiWSE0quyVN8KHVsB4yWer9POzReYZzFkPoKGoVpuCFI0SjiY5xiMZktSfMVLR-orsiJOXAuRd57NwgQSkv3tTjkUsEqgHb05o3EYlpbbQ807aEqLGsX', 3, '', '', '', 'parent', '2017-01-02 10:54:55', '0000-00-00 00:00:00'),
(8, 'cCKAZvKUalo:APA91bEWMckJJn8TvF352iANwiWSE0quyVN8KHVsB4yWer9POzReYZzFkPoKGoVpuCFI0SjiY5xiMZktSfMVLR-orsiJOXAuRd57NwgQSkv3tTjkUsEqgHb05o3EYlpbbQ807aEqLGsX', 3, '', '', '', 'parent', '2017-01-02 10:55:45', '0000-00-00 00:00:00'),
(9, 'eUniu5lykhw:APA91bGrPip8AlvndjfTplFYNl_g7CzmGxQH3NcKftzM6ARTbKeNsM6EBAoiOvZ8nQU-pxIMopElPxgMjLZ4cfFUELYJsvutg7GjGk079saHrz1ce3kz3TRUXDstno6f--war6ZGwCjo', 3, '', '', '', 'parent', '2017-01-06 10:08:06', '0000-00-00 00:00:00'),
(10, 'c77zJVV4Oiw:APA91bExzAVq3WvVAvE0-dV31FVBB-TeHOORqJ8Q6p0AwVdrRmqtfcZJAnzj_YHqki1xWpoabRINmtpPcZCuX2o_qbdt_frNsGGbgak2MuMhC0f4eLE5z1Z4VtLQbKOxQ-6tP6ON7X_u', 3, '', '', '', 'parent', '2017-01-06 12:40:29', '0000-00-00 00:00:00'),
(11, 'dLgtjG1Ceu8:APA91bF_Iixaffgozv9FSMXnKgSoLe259V2Q-kZt0C6D9VaPO3OPowcNSIr6lndj5VqlmNESKmES5iOvonPxhTe1X6YaIKq09LxmE09JtPpi56OsZHvQJL_-T6qnnzzzRXLZkqf-_zKC', 3, '', '', '', 'parent', '2017-01-06 13:55:35', '0000-00-00 00:00:00'),
(12, 'dLgtjG1Ceu8:APA91bF_Iixaffgozv9FSMXnKgSoLe259V2Q-kZt0C6D9VaPO3OPowcNSIr6lndj5VqlmNESKmES5iOvonPxhTe1X6YaIKq09LxmE09JtPpi56OsZHvQJL_-T6qnnzzzRXLZkqf-_zKC', 3, '', '', '', 'parent', '2017-01-06 15:16:21', '0000-00-00 00:00:00'),
(13, 'eUniu5lykhw:APA91bGrPip8AlvndjfTplFYNl_g7CzmGxQH3NcKftzM6ARTbKeNsM6EBAoiOvZ8nQU-pxIMopElPxgMjLZ4cfFUELYJsvutg7GjGk079saHrz1ce3kz3TRUXDstno6f--war6ZGwCjo', 3, '', '', '', 'parent', '2017-01-07 04:30:08', '0000-00-00 00:00:00'),
(14, 'eUniu5lykhw:APA91bGrPip8AlvndjfTplFYNl_g7CzmGxQH3NcKftzM6ARTbKeNsM6EBAoiOvZ8nQU-pxIMopElPxgMjLZ4cfFUELYJsvutg7GjGk079saHrz1ce3kz3TRUXDstno6f--war6ZGwCjo', 3, '', '', '', 'parent', '2017-01-07 05:14:28', '0000-00-00 00:00:00'),
(15, 'dqTQqIXeCFI:APA91bFHn2-ae6W1ATQUzdxXN8Npx7FuGvnY6Onx3KmznWaXH0cHTLEVBCWF4tYIM7gmrCAR5QTCyS4FwzeD2z6n0KzBGT-4-ScfVEohVOSzURCDkoT7jjHd_ylGtMvJFDD0Qa-nEnyB', 3, '', '', '', 'parent', '2017-01-07 11:17:00', '0000-00-00 00:00:00'),
(16, 'cb45HL9U9n0:APA91bH40sH6fJOOWwROJ690k_blEmLTqcMFJ0O5PtakwVJdgM9JnQgoZFue8uXUQjY8a5-ERUu2mcxhXiUNPdQT4Xf--cWiKbXNeZ4hf1GU9ykGvf76WwiNTofVDpvoig27vkblsyhu', 3, '', '', '', 'parent', '2017-01-07 13:32:38', '0000-00-00 00:00:00'),
(17, 'frPpYxxqEzY:APA91bGUucgfF5NkZRWkq-Sdfn0c0BzMP53zPIyEm7t-i2uu5pkEgcCIIX67of8mZtQdlbfs8cZNEqwUMq3lvxiJDYuv1qAudJibGLIYKBlfDBwWuhaHmClIkkk0zWE6ASXirJCUXwrh', 3, '', '', '', 'parent', '2017-01-08 08:43:01', '0000-00-00 00:00:00'),
(18, 'eyDxzGyFvvE:APA91bGqPpB_f9e8gVXlH9f_d6yxkZyCmmjVrouw8GYED49sbdEEdJsbRp3e85f555knt4bFB3qFDiieTHl1M9UAC4dKdF_0NPE1jtBbzwd1NZ7MKrYcqE3XO-K4JEY_FA-O84jwoJ3o', 5, '', '', '', 'student', '2017-01-08 10:02:14', '0000-00-00 00:00:00'),
(19, 'd5Xb9mjcYg4:APA91bFPaAQIyu7tgA6RE0bIY3_kx0zd3iK5JMLUDSfcUHnY5W8HHEJFiq6_D8tsCvsJE9xi8r5g4XVO8g-RV7X1QkMe-SbwLVuq-RJraM2HTfO-QPfTW_2sVhTqXL_v9sdYVC3MZRjP', 3, '', '', '', 'parent', '2017-01-08 15:22:55', '0000-00-00 00:00:00'),
(20, 'dhQ6ntXILss:APA91bFma7Q5-LJ6AS136Om8-pbcx7CsWeq07SJZwNOQRcVFeJYYVmUMWWZcYLH-IMgu6e_VenyYeGx0pHF2pQJANuo4aQVW5Aiqt9L2QtaXT6UmDVZyZ0iko-kNpN3q6MhL5JG0xITO', 3, '', '', '', 'parent', '2017-01-09 03:59:29', '0000-00-00 00:00:00'),
(21, 'cQoq_0zdfe8:APA91bE3wrawCrvzhRUkTfdm9tJ1IZqDNTxVDfvBsyDhlrHyUo3mjS1wUf6EOaBR0FIq7R573zQmbsmJTSN7WU7MzT0Iv0Wg0JXEV1Z7UBvvqpB6yiTJDACRNfYrftxih73BxtsfVnqf', 5, '', '', '', 'student', '2017-01-09 04:27:19', '0000-00-00 00:00:00'),
(22, 'dhQ6ntXILss:APA91bFma7Q5-LJ6AS136Om8-pbcx7CsWeq07SJZwNOQRcVFeJYYVmUMWWZcYLH-IMgu6e_VenyYeGx0pHF2pQJANuo4aQVW5Aiqt9L2QtaXT6UmDVZyZ0iko-kNpN3q6MhL5JG0xITO', 5, '', '', '', 'student', '2017-01-09 04:30:05', '0000-00-00 00:00:00'),
(23, 'cD-WyV-PyLE:APA91bFTsyl3yg0OTdhmFWmT2nq8hafMvxHf7t5x93iR_g7KwvRSqO6VYkAscYQ0wmHXKMtzyEZ1JdsTq6y_YIbENuu07mD-SL2WN-sO3yw5sBThGQ6ZFwdb8-p8D_WlpsBvzXPLjVq1', 3, '', '', '', 'parent', '2017-01-09 05:38:14', '0000-00-00 00:00:00'),
(24, 'f164asr_nJM:APA91bFDF09LznerTK7anpu0bxT41ppHjZA_peGlyy32FQ3EIsga4UrA5qg9oHVE0cCww07q2VRDqEBR7QzXkZm_-2YrKFaKq60Cj2K_L597hU8vr9gI51smiVyru_pb_-CiR4HZueeP', 3, '', '', '', 'parent', '2017-01-09 05:39:51', '0000-00-00 00:00:00'),
(25, 'cD-WyV-PyLE:APA91bFTsyl3yg0OTdhmFWmT2nq8hafMvxHf7t5x93iR_g7KwvRSqO6VYkAscYQ0wmHXKMtzyEZ1JdsTq6y_YIbENuu07mD-SL2WN-sO3yw5sBThGQ6ZFwdb8-p8D_WlpsBvzXPLjVq1', 5, '', '', '', 'student', '2017-01-09 05:58:12', '0000-00-00 00:00:00'),
(26, 'cD-WyV-PyLE:APA91bFTsyl3yg0OTdhmFWmT2nq8hafMvxHf7t5x93iR_g7KwvRSqO6VYkAscYQ0wmHXKMtzyEZ1JdsTq6y_YIbENuu07mD-SL2WN-sO3yw5sBThGQ6ZFwdb8-p8D_WlpsBvzXPLjVq1', 3, '', '', '', 'parent', '2017-01-09 05:59:29', '0000-00-00 00:00:00'),
(27, 'ePlU17mFMeI:APA91bEDjwpzCHcXGa_j9wIb06qNxCokKyIC7HolKQV-XrnixGflAN9b7r9LG7BcGgxXUSzanOVfqFOGlq9OKdmalx-Q8aNVGYr0XB-Jm7glryGpVFywTp1Jh3Mj0c0WjgsDYIbRyBha', 3, '', '', '', 'parent', '2017-01-09 06:46:44', '0000-00-00 00:00:00'),
(28, 'ePlU17mFMeI:APA91bEDjwpzCHcXGa_j9wIb06qNxCokKyIC7HolKQV-XrnixGflAN9b7r9LG7BcGgxXUSzanOVfqFOGlq9OKdmalx-Q8aNVGYr0XB-Jm7glryGpVFywTp1Jh3Mj0c0WjgsDYIbRyBha', 3, '', '', '', 'parent', '2017-01-09 07:00:50', '0000-00-00 00:00:00'),
(29, 'eEqsGwYKhsg:APA91bHJD8T1bNvhBjym5Kqy0U4eYSFNHDpMJHZ3jxukQSz700956O9WxjiiF9-ed20u2i-j9-ppinNE_8Nm3o8hVAkBAyloQ4jPFTAFuLeCMkeCCfcgxAYmD3lDlMlYzkOpsKGpVNBb', 5, '', '', '', 'student', '2017-01-09 07:28:13', '0000-00-00 00:00:00'),
(30, 'dkvh7QchyCE:APA91bEZegyVxUjrti5rszk_zV9CBHmkiqVpa_77X2FGywAw4Ylw7AYqBZ_ChVbh73tedco-oJApiwGY7kLiABh12MynkrP7GrjfeNawFaaSIq9FVuY61-DGx17XhpxNDpbvRfFnkhQa', 1, '', '', '', 'parent', '2017-01-09 08:19:49', '0000-00-00 00:00:00'),
(31, 'fVdJnAjjcA4:APA91bG-Y0vb7rTJ2bLkncNapa59XDUgv47IqVrWzI9D4kO31JQvDKfuuojEaoigBvp_5tZaA8jvoXBBpEEGFbu-RbSnLt0LD6ienE-7vIONoFLiRhp_JAvbH6Sml7FcE2OiuszzhFJZ', 3, '', '', '', 'parent', '2017-01-09 09:35:07', '0000-00-00 00:00:00'),
(32, 'dI9A7CJ_AVk:APA91bGlQibakz5O_NTNnxPpWjbn2uXU3Y9Odrs0-NWA75Cqo1z9SvKFwexLKkctUr0anvfWAAUZ0a0mx3UlrGgq2OModCqACoSq5GjyIkc3KhHUHiJcbd0AfZtWnJdqt7U-VSV2q3Oa', 3, '', '', '', 'parent', '2017-01-09 10:20:40', '0000-00-00 00:00:00'),
(33, 'dI9A7CJ_AVk:APA91bGlQibakz5O_NTNnxPpWjbn2uXU3Y9Odrs0-NWA75Cqo1z9SvKFwexLKkctUr0anvfWAAUZ0a0mx3UlrGgq2OModCqACoSq5GjyIkc3KhHUHiJcbd0AfZtWnJdqt7U-VSV2q3Oa', 3, '', '', '', 'parent', '2017-01-09 10:20:48', '0000-00-00 00:00:00'),
(34, 'dI9A7CJ_AVk:APA91bGlQibakz5O_NTNnxPpWjbn2uXU3Y9Odrs0-NWA75Cqo1z9SvKFwexLKkctUr0anvfWAAUZ0a0mx3UlrGgq2OModCqACoSq5GjyIkc3KhHUHiJcbd0AfZtWnJdqt7U-VSV2q3Oa', 3, '', '', '', 'parent', '2017-01-09 10:22:03', '0000-00-00 00:00:00'),
(35, 'dI9A7CJ_AVk:APA91bGlQibakz5O_NTNnxPpWjbn2uXU3Y9Odrs0-NWA75Cqo1z9SvKFwexLKkctUr0anvfWAAUZ0a0mx3UlrGgq2OModCqACoSq5GjyIkc3KhHUHiJcbd0AfZtWnJdqt7U-VSV2q3Oa', 3, '', '', '', 'parent', '2017-01-09 10:38:51', '0000-00-00 00:00:00'),
(36, 'frcxYxzg4qY:APA91bE9d9VVH28-hbBzuMyI3CBxbd3AoiZKWnk_eCiLwEyY4_4w4U7wKHY9vy2jvpM-yZlErZQ2o6F-jnuMZJls3YiFKmeMkxkTByVQW9Fbz2pDMnANS6eqoF0Yc8AguHq5vqarWsRp', 3, '', '', '', 'parent', '2017-01-09 10:43:24', '0000-00-00 00:00:00'),
(37, 'f8_6cGJb8v4:APA91bG2u32LhELFO8G5sJLb-nI80zsC-ZapvSNP4WbzS-aP_zRb2M_j3RllJoXP2sad98GMdAtIZdT2Gx76vfy6oumelYmI2nNKrN_SKc1uRscupaeMYk0stzk2K1v8-jZqQB_Gyk7r', 3, '', '', '', 'parent', '2017-01-09 11:35:50', '0000-00-00 00:00:00'),
(38, 'f8_6cGJb8v4:APA91bG2u32LhELFO8G5sJLb-nI80zsC-ZapvSNP4WbzS-aP_zRb2M_j3RllJoXP2sad98GMdAtIZdT2Gx76vfy6oumelYmI2nNKrN_SKc1uRscupaeMYk0stzk2K1v8-jZqQB_Gyk7r', 5, '', '', '', 'student', '2017-01-09 12:17:21', '0000-00-00 00:00:00'),
(39, 'f8_6cGJb8v4:APA91bG2u32LhELFO8G5sJLb-nI80zsC-ZapvSNP4WbzS-aP_zRb2M_j3RllJoXP2sad98GMdAtIZdT2Gx76vfy6oumelYmI2nNKrN_SKc1uRscupaeMYk0stzk2K1v8-jZqQB_Gyk7r', 3, '', '', '', 'parent', '2017-01-09 12:44:09', '0000-00-00 00:00:00'),
(40, 'f8_6cGJb8v4:APA91bG2u32LhELFO8G5sJLb-nI80zsC-ZapvSNP4WbzS-aP_zRb2M_j3RllJoXP2sad98GMdAtIZdT2Gx76vfy6oumelYmI2nNKrN_SKc1uRscupaeMYk0stzk2K1v8-jZqQB_Gyk7r', 3, '', '', '', 'parent', '2017-01-09 13:17:49', '0000-00-00 00:00:00'),
(41, 'cw-yzRG9LQk:APA91bGzDMn40YzQX6PsDLpeLaZfI19IlZ3spZjJUhhfM2rhE3-q_s2OXTZYRVSe1f1RQSMQtxVR_GWbBIdslJTZ5AoBeGUsdPESvNjBJE9RurClqMH1BxrMGkUolYJIoN1GnlDnoGZE', 3, '', '', '', 'parent', '2017-01-09 13:49:11', '0000-00-00 00:00:00'),
(42, 'cw-yzRG9LQk:APA91bGzDMn40YzQX6PsDLpeLaZfI19IlZ3spZjJUhhfM2rhE3-q_s2OXTZYRVSe1f1RQSMQtxVR_GWbBIdslJTZ5AoBeGUsdPESvNjBJE9RurClqMH1BxrMGkUolYJIoN1GnlDnoGZE', 5, '', '', '', 'student', '2017-01-09 13:50:19', '0000-00-00 00:00:00'),
(43, 'f3tjyDzkkDc:APA91bHXGxb9hzKboBlU8ISSeFojuwZCnTnQIm3KNn5-oCYyP9uYJauA36qwq3I6jHnOODtmybS7W3-2UaC_OFHj5B7J8DO9w52_HzzG8FhmPQiWNdjonSwmtnc_LgJMp-4Vvblb8N9E', 3, '', '', '', 'parent', '2017-01-10 02:47:38', '0000-00-00 00:00:00'),
(44, 'cw-yzRG9LQk:APA91bGzDMn40YzQX6PsDLpeLaZfI19IlZ3spZjJUhhfM2rhE3-q_s2OXTZYRVSe1f1RQSMQtxVR_GWbBIdslJTZ5AoBeGUsdPESvNjBJE9RurClqMH1BxrMGkUolYJIoN1GnlDnoGZE', 3, '', '', '', 'parent', '2017-01-10 03:24:57', '0000-00-00 00:00:00'),
(45, 'eZq33qfZAPg:APA91bGNrNlQyBndSzpRWvEiFfE-xzLIU95HGX9elWk_3mLIIm-wt7UxHpC9YPo0xcGgeclaxttznFgLWs7flqcK2RRlWl_9Zgwbb7KIUQCRxS489YbB1UCxlsMfRMuL5RApUiMku5fL', 3, '', '', '', 'parent', '2017-01-10 03:30:58', '0000-00-00 00:00:00'),
(46, 'f_RTFKL8IjE:APA91bFpRSfqho9t1bw4VgRDcL7Q5tpdHyzfYMxmZj9lx-1tw-fOrLZmDU_FcFuAwqthw9EZNUHXKlB8WGKC8Rc_9JmqqM3QsCU0mOf-7x9rj8jKzEV0_MXVB7MYGC31Glw2zlh1n6x3', 3, '', '', '', 'parent', '2017-01-10 03:39:34', '0000-00-00 00:00:00'),
(47, 'dHA53Hntrx4:APA91bGU9Qw4uYhm2JIBXYjxqU-_znMPt-Wl3A0EOGtDU_hPF5LhTiC8mPFqMmaanyA1mLQB_wK9rfC9Q7KixqMafUhjGJgZviSjbelvK-tnLv_za-sKaiOoq3K4SrkvdHu5Ft04Pxx4', 3, '', '', '', 'parent', '2017-01-10 03:44:49', '0000-00-00 00:00:00'),
(48, 'cw-yzRG9LQk:APA91bGzDMn40YzQX6PsDLpeLaZfI19IlZ3spZjJUhhfM2rhE3-q_s2OXTZYRVSe1f1RQSMQtxVR_GWbBIdslJTZ5AoBeGUsdPESvNjBJE9RurClqMH1BxrMGkUolYJIoN1GnlDnoGZE', 3, '', '', '', 'parent', '2017-01-10 04:03:17', '0000-00-00 00:00:00'),
(49, 'fSQiLtbnDts:APA91bFIoLbpOA1yF6zzxa18r3fzZmS4kxBQNXE6RUgagUJTFNehCVFhXADYVe0RossQjTThbzg2L2Sqf07e7tKA-eqYKOMsp0hiZKa7YlnhPa5eOjRtCNSRO2dQWyrDGopj-E0QhOcM', 3, '', '', '', 'parent', '2017-01-10 04:06:23', '0000-00-00 00:00:00'),
(50, 'faM8O69iGEk:APA91bFDAYxHqWVpFpVCOkJZiiqdu_fdPauZKU_sLgZbnANVXPGNXwmFkuAKLKRKm-soqvxYxtJBGknr2w6WR0kME2aBtmEiAzNFlvIQcVOfZn03Hm81HXTQK6La5JXKoFlvXR9xDr9q', 3, '', '', '', 'parent', '2017-01-10 04:11:05', '0000-00-00 00:00:00'),
(51, 'dFvN8jn-d98:APA91bEa1pNGDiUsZ6PWpsl94RLrmEUvvyK09wK44lLbE2OTvmKQ8uqbPWxtOnXmKqu2iHpUgQb5CHBguAECSLRSPOCgFSrtfhQY61O2N8QtOnR3FFvjzn16o5kmoOkQ7d2ABEyMx_5F', 3, '', '', '', 'parent', '2017-01-10 04:26:14', '0000-00-00 00:00:00'),
(52, 'exBrGemofYo:APA91bFoIAhuFpBiLGFZOwu2OJHFtCQ8Jy20oPrNlf43TGKPJbFsfJQ84dHbOBGORpBH1PHaG3PZ0NrH7QSp_6aFgPwoREJMZoewnqJkZRglLyTyPxnHMFSVfXMvjGh5NbuZT6SNt1aO', 5, '', '', '', 'student', '2017-01-10 04:39:52', '0000-00-00 00:00:00'),
(53, 'dFvN8jn-d98:APA91bEa1pNGDiUsZ6PWpsl94RLrmEUvvyK09wK44lLbE2OTvmKQ8uqbPWxtOnXmKqu2iHpUgQb5CHBguAECSLRSPOCgFSrtfhQY61O2N8QtOnR3FFvjzn16o5kmoOkQ7d2ABEyMx_5F', 3, '', '', '', 'parent', '2017-01-10 06:41:58', '0000-00-00 00:00:00'),
(54, 'fInd0kXkGeA:APA91bGWgsVdf8c26ceehOp6lInMdwg_7zoprkbYZvMDaysP7DQ8YtgbdMO2gOiEpz8uptpKgBBwXKjLuSxjAe6ZFdUWKp86Zt4iPtqsIXkZD_Fhf8xkgfYnK9X1lKtZBYJj_8TQTpA_', 5, '', '', '', 'student', '2017-01-10 08:17:44', '0000-00-00 00:00:00'),
(55, 'fInd0kXkGeA:APA91bGWgsVdf8c26ceehOp6lInMdwg_7zoprkbYZvMDaysP7DQ8YtgbdMO2gOiEpz8uptpKgBBwXKjLuSxjAe6ZFdUWKp86Zt4iPtqsIXkZD_Fhf8xkgfYnK9X1lKtZBYJj_8TQTpA_', 3, '', '', '', 'parent', '2017-01-10 08:26:08', '0000-00-00 00:00:00'),
(56, 'chZ3klUNLlM:APA91bFBInqqBQKac8CbFih_Yr-BaLMF2xL37HzCz8DFxMSfklRbwCFhB6X2AeLSTLCsoUpzT3L6w1DzeiEj0Loa04rzwQWv36x7sK3cVlR-TKC0Jbl8c8jYBnFzlEpA0SQyHh2EMiNG', 3, '', '', '', 'parent', '2017-01-10 09:09:01', '0000-00-00 00:00:00'),
(57, 'chZ3klUNLlM:APA91bFBInqqBQKac8CbFih_Yr-BaLMF2xL37HzCz8DFxMSfklRbwCFhB6X2AeLSTLCsoUpzT3L6w1DzeiEj0Loa04rzwQWv36x7sK3cVlR-TKC0Jbl8c8jYBnFzlEpA0SQyHh2EMiNG', 3, '', '', '', 'parent', '2017-01-10 09:25:07', '0000-00-00 00:00:00'),
(58, 'fInd0kXkGeA:APA91bGWgsVdf8c26ceehOp6lInMdwg_7zoprkbYZvMDaysP7DQ8YtgbdMO2gOiEpz8uptpKgBBwXKjLuSxjAe6ZFdUWKp86Zt4iPtqsIXkZD_Fhf8xkgfYnK9X1lKtZBYJj_8TQTpA_', 5, '', '', '', 'student', '2017-01-10 09:25:24', '0000-00-00 00:00:00'),
(59, 'fInd0kXkGeA:APA91bGWgsVdf8c26ceehOp6lInMdwg_7zoprkbYZvMDaysP7DQ8YtgbdMO2gOiEpz8uptpKgBBwXKjLuSxjAe6ZFdUWKp86Zt4iPtqsIXkZD_Fhf8xkgfYnK9X1lKtZBYJj_8TQTpA_', 3, '', '', '', 'parent', '2017-01-10 09:30:28', '0000-00-00 00:00:00'),
(60, 'chZ3klUNLlM:APA91bFBInqqBQKac8CbFih_Yr-BaLMF2xL37HzCz8DFxMSfklRbwCFhB6X2AeLSTLCsoUpzT3L6w1DzeiEj0Loa04rzwQWv36x7sK3cVlR-TKC0Jbl8c8jYBnFzlEpA0SQyHh2EMiNG', 5, '', '', '', 'student', '2017-01-10 09:43:30', '0000-00-00 00:00:00'),
(61, 'fLpvA4W7KMI:APA91bFTka6y40T8WXCTIQzyZFC70G7kqCJk6_DUEdtFMeFhcL00eyxBuw5re-UnLs1qPWRcIxWxp_oN0PwWDHoEpsHcsosJBXTbV35IDeyEGNmbXlXYPFVZ9fRk7xNbHZltxYETonxt', 5, '', '', '', 'student', '2017-01-10 09:49:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`id`, `school_id`, `religion`, `platform`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hindu', 'application', '2016-11-29 01:39:26', '0000-00-00 00:00:00'),
(2, 1, 'Sikhism', 'application', '2016-11-29 01:39:32', '0000-00-00 00:00:00'),
(3, 1, 'Muslims', 'application', '2016-11-29 01:39:37', '0000-00-00 00:00:00'),
(4, 1, 'Jainism', 'application', '2016-11-29 01:39:42', '0000-00-00 00:00:00'),
(5, 1, 'Buddhism', 'application', '2016-11-29 01:39:47', '0000-00-00 00:00:00'),
(6, 4, 'Hindu', '', '2017-01-07 17:32:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `exam_type_id` int(11) NOT NULL,
  `month` varchar(100) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `max_marks` varchar(10) NOT NULL,
  `pass_marks` varchar(10) NOT NULL,
  `obtained_marks` varchar(100) NOT NULL,
  `result` varchar(20) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `result_by` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `class_id`, `section_id`, `exam_type_id`, `month`, `subject_id`, `student_id`, `teacher_id`, `date`, `max_marks`, `pass_marks`, `obtained_marks`, `result`, `grade`, `result_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 'january', 2, 4, 1, '2017-01-13', '100', '40', '44', 'Fail', '', '', '2017-01-13 14:09:35', '0000-00-00 00:00:00'),
(2, 1, 1, 2, 'january', 2, 12, 1, '2017-01-13', '100', '40', '55', 'Pass', '', '', '2017-01-13 14:09:35', '0000-00-00 00:00:00'),
(3, 1, 1, 2, 'january', 2, 1, 1, '2017-01-13', '100', '40', '66', 'Excellent', '', '', '2017-01-13 14:09:35', '0000-00-00 00:00:00'),
(4, 1, 1, 2, 'january', 2, 2, 1, '2017-01-13', '100', '40', '77', 'Remarkable', '', '', '2017-01-13 14:09:35', '0000-00-00 00:00:00'),
(5, 1, 1, 2, 'january', 2, 7, 1, '2017-01-13', '100', '40', '88', 'Outstanding', '', '', '2017-01-13 14:09:35', '0000-00-00 00:00:00'),
(6, 1, 1, 2, 'january', 2, 8, 1, '2017-01-13', '100', '40', '99', 'Awesome', '', '', '2017-01-13 14:09:35', '0000-00-00 00:00:00'),
(7, 1, 1, 2, 'january', 3, 4, 1, '2017-01-13', '100', '40', '44', 'Fail', '', '', '2017-01-13 14:09:35', '0000-00-00 00:00:00'),
(8, 1, 1, 2, 'january', 3, 12, 1, '2017-01-13', '100', '40', '55', 'Pass', '', '', '2017-01-13 14:09:35', '0000-00-00 00:00:00'),
(9, 1, 1, 2, 'january', 3, 1, 1, '2017-01-13', '100', '40', '66', 'Excellent', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(10, 1, 1, 2, 'january', 3, 2, 1, '2017-01-13', '100', '40', '77', 'Remarkable', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(11, 1, 1, 2, 'january', 3, 7, 1, '2017-01-13', '100', '40', '88', 'Outstanding', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(12, 1, 1, 2, 'january', 3, 8, 1, '2017-01-13', '100', '40', '99', 'Awesome', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(13, 1, 1, 2, 'january', 4, 4, 1, '2017-01-13', '100', '40', '44', 'Fail', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(14, 1, 1, 2, 'january', 4, 12, 1, '2017-01-13', '100', '40', '55', 'Pass', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(15, 1, 1, 2, 'january', 4, 1, 1, '2017-01-13', '100', '40', '66', 'Excellent', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(16, 1, 1, 2, 'january', 4, 2, 1, '2017-01-13', '100', '40', '77', 'Remarkable', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(17, 1, 1, 2, 'january', 4, 7, 1, '2017-01-13', '100', '40', '88', 'Outstanding', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(18, 1, 1, 2, 'january', 4, 8, 1, '2017-01-13', '100', '40', '99', 'Awesome', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(19, 1, 1, 2, 'january', 5, 4, 1, '2017-01-13', '100', '40', '44', 'Fail', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(20, 1, 1, 2, 'january', 5, 12, 1, '2017-01-13', '100', '40', '55', 'Pass', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(21, 1, 1, 2, 'january', 5, 1, 1, '2017-01-13', '100', '40', '66', 'Excellent', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(22, 1, 1, 2, 'january', 5, 2, 1, '2017-01-13', '100', '40', '77', 'Remarkable', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(23, 1, 1, 2, 'january', 5, 7, 1, '2017-01-13', '100', '40', '88', 'Outstanding', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(24, 1, 1, 2, 'january', 5, 8, 1, '2017-01-13', '100', '40', '99', 'Awesome', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(25, 1, 1, 2, 'january', 6, 4, 1, '2017-01-13', '100', '40', '44', 'Fail', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(26, 1, 1, 2, 'january', 6, 12, 1, '2017-01-13', '100', '40', '55', 'Pass', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(27, 1, 1, 2, 'january', 6, 1, 1, '2017-01-13', '100', '40', '66', 'Excellent', '', '', '2017-01-13 14:09:36', '0000-00-00 00:00:00'),
(28, 1, 1, 2, 'january', 6, 2, 1, '2017-01-13', '100', '40', '77', 'Remarkable', '', '', '2017-01-13 14:09:37', '0000-00-00 00:00:00'),
(29, 1, 1, 2, 'january', 6, 7, 1, '2017-01-13', '100', '40', '88', 'Outstanding', '', '', '2017-01-13 14:09:37', '0000-00-00 00:00:00'),
(30, 1, 1, 2, 'january', 6, 8, 1, '2017-01-13', '100', '40', '99', 'Awesome', '', '', '2017-01-13 14:09:37', '0000-00-00 00:00:00'),
(31, 1, 1, 2, 'january', 7, 4, 1, '2017-01-13', '100', '40', '44', 'Fail', '', '', '2017-01-13 14:09:37', '0000-00-00 00:00:00'),
(32, 1, 1, 2, 'january', 7, 12, 1, '2017-01-13', '100', '40', '55', 'Pass', '', '', '2017-01-13 14:09:37', '0000-00-00 00:00:00'),
(33, 1, 1, 2, 'january', 7, 1, 1, '2017-01-13', '100', '40', '66', 'Excellent', '', '', '2017-01-13 14:09:37', '0000-00-00 00:00:00'),
(34, 1, 1, 2, 'january', 7, 2, 1, '2017-01-13', '100', '40', '77', 'Remarkable', '', '', '2017-01-13 14:09:37', '0000-00-00 00:00:00'),
(35, 1, 1, 2, 'january', 7, 7, 1, '2017-01-13', '100', '40', '88', 'Outstanding', '', '', '2017-01-13 14:09:37', '0000-00-00 00:00:00'),
(36, 1, 1, 2, 'january', 7, 8, 1, '2017-01-13', '100', '40', '99', 'Awesome', '', '', '2017-01-13 14:09:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `result_mod`
--

CREATE TABLE `result_mod` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `exam_type_id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `result` int(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `remarks` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `school_id`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 150, '2016-12-29 04:22:33', '2016-12-29 12:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school_name` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `user_id`, `school_name`, `email`, `mobile`, `address`, `city`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'DAV Sirsa', 'dav@gmail.com', '7894564560', 'Sirsa', 'Sirsa', 'school/9ef92091e3.jpg', NULL, '2016-11-28 22:05:42', '0000-00-00 00:00:00'),
(2, 3, 'GPS Sirsa', 'gpssirsa@gmail.com', '8456789123', 'Sirsa', 'Sirsa', 'school/fdcbce561d.jpg', NULL, '2016-11-29 00:01:14', '0000-00-00 00:00:00'),
(3, 4, 'The Sirsa School', 'thesirsaschool@gmail.com', '7894567890', 'Sirsa', 'Sirsa', 'school/e3c04e27a9.jpg', NULL, '2016-11-29 01:11:44', '2016-11-29 09:11:45'),
(4, 34, 'DL Public School', 'dlpublic@gmail.com', '9660341550', '25-D-Block', 'Sri Ganganagar', 'school/504fc2b4e5.png', NULL, '2017-01-07 17:15:21', '2017-01-07 17:15:21'),
(5, 43, 'The Daffodils Public School', 'daffodils@gmail.com', '8875008001', 'Mouran, Sri Karanpur , Distt. Sri Ganganagar(Raj.)', 'Sri Karanpur', 'school/f799302831.JPG', NULL, '2017-01-09 08:20:09', '2017-01-09 08:20:09'),
(6, 44, 'Tagore international school', 'bhadraschool@gmail.com', '7597388524', 'Bhadra Balsamand-Hisar Road, Bhadra, Hanumangarh (Raj)', 'Bhadra', 'school/bf5df0ea2b.png', NULL, '2017-01-09 10:28:38', '2017-01-09 10:28:38'),
(7, 45, 'Northern International School', 'principal@northerninternational.org', '9466400007', 'Daroli Road, mandi Adampur', 'Fatehabad', 'school/2990ce9470.jpg', NULL, '2017-01-09 10:30:53', '2017-01-09 10:30:53'),
(8, 46, 'Rama Krishna Sr. Sec.School', 'rksssbrbk@gmail.com', '9996267024', 'Bhattu Road, Bhodia Khera Fatehabad Haryana ( india )', 'Fatehabad', 'school/8e0a9aea4e.jpg', NULL, '2017-01-09 10:33:06', '2017-01-09 10:33:06'),
(9, 47, 'KOTA PUBLIC SCHOOL', 'kpsjandlikhurd2015@gmail.com', '8685990124', 'Fatehabad-Bhunna Road,Jandli Khurd', 'Fatehabad', 'school/a0b46bbf91.png', NULL, '2017-01-09 10:35:49', '2017-01-09 10:35:50'),
(10, 48, 'SANJEEVANI INTERNATIONAL SCHOOL', 'pawangodara485@gmail.com', '9414515606', '23 DWD, Mega Highway, Rawatsa', 'Rawatsar', 'school/f7d4e0ae2b.jpg', NULL, '2017-01-09 10:37:36', '2017-01-09 10:37:36'),
(11, 49, 'Satluj Public School', 'satlujbhattukalan@gmail.com', '9896977711', 'Fatehabad Road Bhattu Mandi', 'Sirsa', 'school/81754c0e36.png', NULL, '2017-01-09 10:52:24', '2017-01-09 10:52:24'),
(12, 50, 'Bhovisha International School', 'info@bhovishainternationalschool.com', '8059600019', 'Gigorani (Sirsa Bhadra Highway,Near Kagdana)', 'Sirsa', 'school/dedcc43a5d.jpg', NULL, '2017-01-09 10:53:44', '2017-01-09 10:53:44'),
(13, 51, 'Sir Chhotu Ram Public School', 'vinodkhoth33@gmail.com', '9728466992', 'Jamal Sirsa Haryana ( India )', 'Sirsa', 'school/a569d0f603.JPG', NULL, '2017-01-09 10:54:59', '2017-01-09 10:54:59'),
(14, 52, 'Dinesh Memorial Haryana Sr.Sec.School', 'dmhsssbrwla@gmail.com', '9812418809', 'Barwala(Hisar)', 'Hisar', 'school/91a177a641.jpg', NULL, '2017-01-09 10:57:24', '2017-01-09 10:57:24');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `subjects` varchar(200) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `school_id`, `class_id`, `section`, `subjects`, `platform`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'A', '[\"2\",\"3\",\"4\",\"5\",\"6\",\"7\"]', 'application', '2016-11-29 01:20:09', '2016-12-20 00:38:16'),
(2, '1', '1', 'B', '[\"2\",\"3\",\"4\",\"5\"]', 'application', '2016-11-29 01:20:13', '2016-12-20 00:33:27'),
(3, '1', '2', 'A', '[\"3\",\"4\",\"5\",\"6\"]', 'application', '2016-11-29 01:20:20', '2016-12-20 00:33:42'),
(4, '1', '2', 'B', '[\"2\",\"3\",\"4\"]', 'application', '2016-11-29 01:20:24', '2016-12-20 00:33:50'),
(5, '1', '3', 'A', '[\"2\",\"3\",\"4\",\"5\",\"6\"]', 'application', '2016-11-29 01:20:31', '2016-12-20 00:37:02'),
(6, '1', '3', 'B', '[\"2\",\"3\",\"4\"]', 'application', '2016-11-29 01:20:35', '2016-12-20 00:34:06'),
(7, '1', '4', 'A', '[\"2\",\"3\",\"4\",\"5\",\"6\",\"7\"]', 'application', '2016-11-29 01:20:41', '2016-12-20 00:34:22'),
(8, '1', '4', 'B', '[\"2\",\"3\",\"4\"]', 'application', '2016-11-29 01:20:45', '2016-12-20 00:33:59'),
(9, '1', '5', 'A', '[\"2\",\"3\",\"4\",\"5\"]', 'application', '2016-11-29 01:21:01', '2016-12-20 00:37:36'),
(10, '1', '5', 'B', '[\"2\",\"3\",\"4\",\"5\"]', 'application', '2016-11-29 01:21:05', '2016-12-20 00:37:58'),
(11, '1', '6', 'A', '[\"4\",\"5\",\"6\"]', 'application', '2016-11-29 01:21:10', '2016-12-20 00:38:08'),
(12, '1', '6', 'B', '[\"3\",\"4\",\"5\",\"6\",\"7\"]', 'application', '2016-11-29 01:21:14', '2016-12-20 00:37:46'),
(13, '1', '1', 'C', '[\"2\",\"3\",\"4\"]', '', '2016-12-19 15:59:09', '2016-12-20 00:33:34'),
(14, '1', '2', 'C', '[\"3\",\"2\",\"5\",\"4\",\"6\"]', '', '2016-12-19 16:00:34', '0000-00-00 00:00:00'),
(15, '1', '7', 'A', '[\"3\",\"2\",\"5\",\"7\",\"4\",\"6\"]', '', '2017-01-05 12:13:00', '0000-00-00 00:00:00'),
(16, '4', '8', 'A', '[\"10\",\"9\",\"11\"]', '', '2017-01-07 17:42:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `session` varchar(100) NOT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '0',
  `platform` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `school_id`, `session`, `active`, `platform`, `created_at`, `updated_at`) VALUES
(1, 1, '2016-17', '1', '', '2016-12-16 04:13:16', '2016-12-19 04:37:20'),
(3, 4, '2016-2017', '1', '', '2017-01-07 17:24:24', '2017-01-07 17:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `splash`
--

CREATE TABLE `splash` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `platfom` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `staff_type` varchar(200) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `school_id`, `staff_type`, `platform`, `created_at`, `updated_at`) VALUES
(1, 1, 'Teacher', 'application', '2016-11-29 01:34:03', '0000-00-00 00:00:00'),
(2, 1, 'Clerk', 'application', '2016-11-29 01:34:29', '0000-00-00 00:00:00'),
(3, 1, 'Principal', 'application', '2016-11-29 01:34:37', '0000-00-00 00:00:00'),
(4, 1, 'Driver', 'application', '2016-11-29 01:34:43', '0000-00-00 00:00:00'),
(6, 4, 'Teacher', '', '2017-01-07 17:31:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`) VALUES
(1, 'Haryana'),
(2, 'Punjab'),
(3, 'Rajasthan'),
(4, 'Himachal Pradesh'),
(5, 'Gujarat'),
(6, 'Maharasthra'),
(7, 'Andhra Pradesh'),
(8, 'Uttrakhand'),
(9, 'Uttar Pradesh'),
(10, 'Bihar'),
(11, 'Jharkhand'),
(12, 'Madhya Pradesh'),
(13, 'Telangana'),
(14, 'Goa'),
(15, 'West Bengal'),
(16, 'Jammu & Kashmir'),
(17, 'Karnataka'),
(18, 'Kerla'),
(19, 'Tamilnadu'),
(20, 'Sikkim'),
(21, 'Nagaland'),
(22, 'Mizoram'),
(23, 'Meghalya'),
(24, 'Tripura'),
(25, 'Assam');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `caste_id` int(11) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `religion` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `bus_stop_id` int(11) NOT NULL,
  `registration_no` varchar(50) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `date_of_admission` varchar(50) NOT NULL,
  `date_of_joining` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `previous_school` text NOT NULL,
  `avatar` text NOT NULL,
  `pick_time` varchar(100) NOT NULL,
  `drop_time` varchar(100) NOT NULL,
  `documents` text NOT NULL,
  `platform` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `user_id`, `session_id`, `class_id`, `section_id`, `school_id`, `parent_id`, `caste_id`, `blood_group`, `religion`, `bus_id`, `bus_stop_id`, `registration_no`, `roll_no`, `name`, `dob`, `date_of_admission`, `date_of_joining`, `gender`, `nationality`, `contact_no`, `email`, `previous_school`, `avatar`, `pick_time`, `drop_time`, `documents`, `platform`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 14, 1, 1, 1, 1, 1, 1, 'A+', 1, 0, 0, '1212', '12', 'Avantika', '25-05-2005', '12-12-2016', '12-12-2016', 'Female', 'Indian', '', '', '', 'student/1f28e7fc94.JPG', '', '', '[\"document\\/5a45124e45.jpg\",\"document\\/c5d7c31556.jpg\"]', '', '2016-12-18 10:04:43', '2017-01-13 10:25:04', NULL),
(2, 16, 1, 1, 1, 1, 1, 1, 'B+', 1, 0, 0, '1213', '13', 'Arun', '25-05-2005', '12-12-2016', '15-12-2016', 'Male', 'Indian', '', '', '', 'student/19c5557cc6.jpg', '', '', '', '', '2016-12-18 10:09:41', '0000-00-00 00:00:00', NULL),
(4, 18, 1, 1, 1, 1, 2, 1, 'AB+', 1, 0, 0, '1245', '01', 'Kaval', '25-05-2005', '12-12-2016', '15-12-2016', 'Male', 'Indian', '', '', '', 'student/fe277645d0.gif', '', '', '', '', '2016-12-18 10:16:38', '2016-12-18 18:16:39', NULL),
(5, 23, 1, 2, 2, 1, 3, 3, 'AB-', 2, 0, 0, '2010', '20', 'Sameer', '15-10-2000', '27-11-2016', '27-11-2016', 'Male', 'Indian', '0', '', '', 'student/e25fd89f76.jpeg', '', '', '', '', '2016-12-23 05:51:48', '2016-12-23 13:51:48', NULL),
(6, 25, 1, 2, 2, 1, 3, 3, 'NA', 2, 0, 0, '2011', '21', 'Sulekha', '14-07-2001', '27-11-2016', '27-11-2016', 'Female', 'Indian', '0', '', '', 'student/8618480d4f.jpeg', '', '', '', '', '2016-12-23 05:51:49', '0000-00-00 00:00:00', NULL),
(7, 28, 1, 1, 1, 1, 3, 1, 'B+', 1, 0, 0, '1216', '16', 'Rajeev', '05-01-2011', '05-01-2017', '05-01-2017', 'Male', 'Indian', '', '', '', 'student/8e12e763a3.jpg', '', '', '', '', '2017-01-05 12:25:28', '0000-00-00 00:00:00', NULL),
(8, 29, 1, 1, 1, 1, 4, 2, 'B+', 1, 1, 1, '1218', '18', 'Aman', '05-01-2010', '05-01-2017', '05-01-2017', 'Female', 'Indian', '', '', '', 'student/69468d633c.jpg', '', '', '', '', '2017-01-05 12:34:57', '2017-01-05 07:56:59', NULL),
(9, 32, 1, 3, 5, 1, 3, 3, 'B+', 1, 0, 0, '3010', '1', 'Sunder', '15-10-2000', '27-11-2016', '27-11-2016', 'Male', 'Indian', '0', '', '', 'student/a6f4fcdbdf.jpeg', '', '', '', '', '2017-01-05 16:40:51', '0000-00-00 00:00:00', NULL),
(10, 33, 1, 3, 5, 1, 3, 3, 'A-', 1, 0, 0, '3011', '2', 'Sumona', '15-10-2000', '27-11-2016', '27-11-2016', 'Female', 'Indian', '0', '', '', 'student/481962accb.jpeg', '', '', '', '', '2017-01-05 16:40:52', '0000-00-00 00:00:00', NULL),
(11, 36, 3, 8, 16, 4, 5, 7, 'A+', 6, 4, 3, '1', '01', 'Dinesh', '28-09-1993', '02-10-2013', '20-1-2017', 'Male', 'Indian', '9813304031', 'dineshx33@gmail.com', '', 'student/6f24ac78a4.jpg', '', '', '', '', '2017-01-07 17:48:03', '2017-01-07 17:48:03', NULL),
(12, 56, 1, 1, 1, 1, 7, 1, 'A+', 1, 0, 0, '5656', '09', 'Rohit', '', '', '', 'Male', 'Indian', '', '', '', 'student/0c6af9d5a4.jpg', '', '', '[\"document\\/c7d2925b2b.JPG\",\"document\\/6fb674ed4c.JPG\",\"document\\/74e8669c33.jpg\",\"document\\/533f7d92ad.jpg\"]', '', '2017-01-11 15:42:31', '2017-01-13 10:26:41', NULL),
(14, 59, 1, 3, 5, 1, 7, 1, 'NA', 1, 0, 0, '4512', '11', 'Seema', '', '', '', 'Male', 'Indian', '', '', '', 'student/776e9678c4.jpg', '', '', '[\"document\\/2ddabb6ba8.jpg\"]', '', '2017-01-11 16:44:19', '2017-01-13 01:29:03', NULL),
(15, 60, 1, 7, 15, 1, 8, 1, 'B+', 1, 3, 0, '7840', '25', 'Rohan', '', '', '', 'Male', 'Indian', '', '', '', 'student/a3f3cf2b40.jpg', '', '', '[\"document\\/86a83ea801.jpg\",\"document\\/687863eccf.gif\",\"document\\/8077cacc91.gif\",\"document\\/88b7d00fbc.jpg\"]', '', '2017-01-13 06:31:10', '2017-01-13 01:40:14', NULL),
(16, 62, 1, 3, 5, 1, 7, 1, 'B+', 1, 0, 0, '8402', '19', 'Meena', '05-05-2009', '13-01-2017', '15-01-2017', 'Female', 'Indian', '', '', '', 'student/7b7dfca2fa.jpg', '', '', '[\"document\\/a65f9db326.JPG\",\"document\\/2e1d22ae12.JPG\",\"document\\/7481c2f363.jpg\",\"document\\/18428c6127.JPG\",\"document\\/b363060979.JPG\",\"document\\/5f6442533e.jpg\"]', '', '2017-01-13 07:09:49', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `school_id`, `subject`, `platform`, `created_at`, `updated_at`) VALUES
(2, 1, 'Hindi', '', '2016-12-19 15:34:43', '2016-12-19 23:37:18'),
(3, 1, 'English', '', '2016-12-19 15:52:52', '0000-00-00 00:00:00'),
(4, 1, 'Science', '', '2016-12-19 15:52:57', '0000-00-00 00:00:00'),
(5, 1, 'Maths', '', '2016-12-19 15:53:01', '0000-00-00 00:00:00'),
(6, 1, 'Social Science', '', '2016-12-19 15:53:09', '0000-00-00 00:00:00'),
(7, 1, 'Sanskrit', '', '2016-12-19 15:53:13', '0000-00-00 00:00:00'),
(8, 1, 'Physics', '', '2017-01-05 12:13:53', '0000-00-00 00:00:00'),
(9, 4, 'hindi', '', '2017-01-07 17:30:34', '0000-00-00 00:00:00'),
(10, 4, 'english', '', '2017-01-07 17:30:41', '0000-00-00 00:00:00'),
(11, 4, 'math', '', '2017-01-07 17:30:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `section` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `avatar` varchar(200) NOT NULL DEFAULT 'default.jpg',
  `platform` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `user_id`, `school_id`, `type`, `class`, `section`, `name`, `mobile`, `email`, `avatar`, `platform`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 1, 1, 1, 'Rajneesh', '7895623102', 'rajneesh@gmail.com', 'employee/4a2b527bf1.jpg', 'application', '2016-12-01 03:51:46', '2017-01-05 08:38:45'),
(2, 6, 1, 1, 1, 2, 'Raman', '7895624569', 'raman@gmail.com', 'employee/default_avatar.png', 'application', '2016-12-01 03:59:03', '0000-00-00 00:00:00'),
(3, 7, 1, 1, 2, 1, 'Neeraj', '7895624123', 'neeraj@gmail.com', 'employee/default_avatar.png', 'application', '2016-12-01 04:01:44', '0000-00-00 00:00:00'),
(4, 8, 1, 1, 2, 2, 'Hardik', '7895624100', 'hardik@gmail.com', 'employee/default_avatar.png', 'application', '2016-12-01 04:02:32', '0000-00-00 00:00:00'),
(5, 9, 1, 1, 3, 1, 'Mansul Khan', '7895624200', 'mansulkhan@gmail.com', 'employee/default_avatar.png', 'application', '2016-12-01 04:03:35', '0000-00-00 00:00:00'),
(6, 10, 1, 1, 3, 2, 'Monika', '7895624300', 'monika@gmail.com', 'employee/default_avatar.png', 'application', '2016-12-01 04:04:16', '0000-00-00 00:00:00'),
(9, 22, 1, 1, 5, 9, 'Jagat Ram', '7894561230', '', 'employee/7abdc99a3e.jpg', '', '2016-12-18 11:30:04', '0000-00-00 00:00:00'),
(10, 26, 1, 1, 2, 2, 'Rajesh', '85465478952', 'rajesh@gmail.com', 'employee/default_avatar.png', 'website', '2016-12-24 05:01:27', '0000-00-00 00:00:00'),
(11, 27, 1, 1, 2, 4, 'Hari Singh', '96355677708', 'harisingh@gmail.com', 'employee/default_avatar.png', 'website', '2016-12-24 05:01:27', '0000-00-00 00:00:00'),
(12, 31, 1, 1, 1, 1, 'Rajvir', '7894578569', '', 'employee/0d02a83556.jpg', '', '2017-01-05 13:39:46', '0000-00-00 00:00:00'),
(13, 35, 4, 6, 8, 16, 'Pta Nahi KOn ha', '9999999999', 'info@functionae.com', 'employee/4330849f50.jpg', '', '2017-01-07 17:43:40', '0000-00-00 00:00:00'),
(14, 40, 4, 0, 2, 2, 'Rajesh', '8564561230', 'rajesh@gmail.com', 'employee/default_avatar.png', 'website', '2017-01-07 18:25:15', '0000-00-00 00:00:00'),
(15, 41, 4, 0, 2, 2, 'Hari Singh', '8945612300', 'harisingh@gmail.com', 'employee/default_avatar.png', 'website', '2017-01-07 18:25:15', '0000-00-00 00:00:00'),
(16, 42, 4, 0, 2, 3, 'Sunil Kumar', '9992228889', 'ptanahi@gmail.com', 'employee/default_avatar.png', 'website', '2017-01-07 18:25:16', '0000-00-00 00:00:00'),
(17, 64, 1, 2, 0, 0, 'Sunil Singh', '7845657890', '', 'employee/6d9a417489.JPG', '', '2017-01-13 16:18:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `time-table`
--

CREATE TABLE `time-table` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `period` varchar(50) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `platfom` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time-table`
--

INSERT INTO `time-table` (`id`, `school_id`, `class_id`, `section_id`, `subject_id`, `teacher_id`, `period`, `start_time`, `end_time`, `day`, `platfom`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 2, 1, 'Period 1', '08:20', '09:00', 'Monday', '', '2016-12-22 03:56:48', '0000-00-00 00:00:00'),
(2, 1, 2, 2, 3, 10, 'period 3', '10:40 AM', '11:20 AM', 'Monday', '', '2016-12-31 16:14:34', '0000-00-00 00:00:00'),
(3, 4, 8, 16, 9, 13, '1', '11:00', '12:00', 'Monday', '', '2017-01-07 18:08:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `type` enum('admin','principal','teacher','student','parent','school') NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `hint_password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `school_id`, `username`, `password`, `hint_password`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'admin', '', 'yaashvi', '$2y$10$Bji00mG3H8B8gNkmXqD1peGMcqXPqf2UYN9ts/JrkKoHLrl4IwBhC', 'yaashvi', '2016-11-28 21:48:10', '2017-01-10 08:34:35', 'YKMkpNZaFslgFOagui43LsiOb9HOGz0GWVpjYaRMpSwfyRb4qP'),
(2, 'school', '1', '8201Sch', '$2y$10$J2Hygc8I1Kcdt0cfO0dBceFMZfi622fmho5jlTZAf9m57sz48GA2a', '7894564560', '2016-11-28 22:05:42', '2017-01-10 05:47:46', 'RGs3780c60c7Ljm2GTQLHlb1PfZydL6YChHmPguD5E6FT3z6ZX'),
(3, 'school', '2', '7802Sch', '$2y$10$dnbMulshJWL.m0xEfml.2OwKSkDVd2XjCtOxJfn36NzrQCYJEJ9B.', '8456789123', '2016-11-29 00:01:15', '0000-00-00 00:00:00', ''),
(4, 'school', '3', '6203Sch', '$2y$10$wvko6odZfvhvkEShuWzqG.vHdEBCoBy/oeAsMnseWa3p3FAGGA3Jy', '7894567890', '2016-11-29 01:11:45', '0000-00-00 00:00:00', ''),
(5, 'teacher', '1', 'rajne5t', '$2y$10$dmcGD9Hlo0XbxHNrTf6ZYewOYRL6ZX7dxrzvgKGdW8XQfg/vURBL6', 'a772fff', '2016-12-01 03:51:46', '2016-12-31 10:15:35', ''),
(6, 'teacher', '1', 'raman6t', '$2y$10$KyVbi/qEl2xOCvE33VLNrO9iEUxmBsb8hGS7E0RKerl5SMU7AURuO', '5a6a39', '2016-12-01 03:59:02', '2016-12-01 11:59:02', ''),
(7, 'teacher', '1', 'neera7t', '$2y$10$T0u3GvvANryNMfuPiROA.uVxHbVXCASeOrnE/QeMnJr.Wte/hqzou', 'ba4b0b', '2016-12-01 04:01:43', '2016-12-01 12:01:43', ''),
(8, 'teacher', '1', 'hardi8t', '$2y$10$J8Z5G00LzEg/HmxNkQDWBu69K9zEQhJDLYR9oAH4XVpas5JLTtcSu', '35d82a', '2016-12-01 04:02:32', '2016-12-01 12:02:32', ''),
(9, 'teacher', '1', 'mansu9t', '$2y$10$FeDOnYxAaxF6Vd/FlG9uu.AIG9bsSfbhGbJRSJWU5ktZSIbo2sF2q', '1310ee', '2016-12-01 04:03:34', '2016-12-01 12:03:35', ''),
(10, 'teacher', '1', 'monik10t', '$2y$10$4wMIF5cY90ix1YLOt1aAe.AmRD8azTzOogdrP0kInUarvUpJO9LY2', '26f7a3', '2016-12-01 04:04:16', '2016-12-01 12:04:16', ''),
(14, 'student', '1', 'avant14s', '$2y$10$wVeZWskVW7ERnlcK3PX1oeKj7O.qM9XqHQ2gFKvrUcWrGpObYsSXe', '89456556456', '2016-12-18 10:04:43', '0000-00-00 00:00:00', ''),
(15, 'parent', '1', 'subha1p', '$2y$10$wOi5TcDwHlnynF5rv6jq8upc9cB8dsMzi9AoC9qgxJdlAPjv3.KvW', '89456556456', '2016-12-18 10:04:44', '0000-00-00 00:00:00', ''),
(16, 'student', '1', 'arun16s', '$2y$10$T8eEdFBWGWps0/Kd5HVOouXlJ/l4342YQs3RAPPk3bG5tKJ8PlNea', '89456556456', '2016-12-18 10:09:40', '0000-00-00 00:00:00', ''),
(18, 'student', '1', 'kaval18s', '$2y$10$M8o058WNQsJa.sS4ciL9TeRYkmdQ0YcZ.yRSdLA72KQUSSilDRMfi', '89456556123', '2016-12-18 10:16:38', '0000-00-00 00:00:00', ''),
(19, 'parent', '1', 'subha2p', '$2y$10$16qgv3rrNSJTvqyYAqRln.prxgHUr2nE2aJHQrRdivgE/bjRbx8zu', '89456556123', '2016-12-18 10:16:38', '0000-00-00 00:00:00', ''),
(22, 'teacher', '1', 'jagat22t', '$2y$10$fXMHvAV97zgPahdnHcFEpeDXRzHD7m01tVqD0k9CBxBGvVY0rGSAK', 'ea3ef6', '2016-12-18 11:30:04', '2016-12-18 19:30:04', ''),
(23, 'student', '1', 'samee23s', '$2y$10$JamHBB27gc10.WSkRU5j1uEMC5Ozcla6pRGz32HQIxITNZ/ibYUmq', '8564129870', '2016-12-23 05:51:48', '0000-00-00 00:00:00', ''),
(24, 'parent', '1', 'haril3p', '$2y$10$iuTuXKPMiQzx.jjUPKL7ROrvavrz3HZbWPVFqZMqX/i7tBJGk4z96', '8564129870', '2016-12-23 05:51:48', '0000-00-00 00:00:00', ''),
(25, 'student', '1', 'sulek25s', '$2y$10$uwPIkOJOGpCCdYlTiJDvWOVg8htjeQBg7ThKJZOCZJPA37mNp7vrq', '8564129870', '2016-12-23 05:51:49', '0000-00-00 00:00:00', ''),
(26, 'teacher', '1', 'rajes26t', '$2y$10$TdBgS3jmfX.NrC4rfD1bn.Di25d5ZzVktH.11KigX7PVB.x2JBOD.', '78b3e7', '2016-12-24 05:01:27', '2016-12-24 13:01:27', ''),
(27, 'teacher', '1', 'haris27t', '$2y$10$xa/k6smRZwOa0DfqWGyPY./ElM58A.LK8TIC.q20PAhBEQgLtRJly', '05a3f2', '2016-12-24 05:01:27', '2016-12-24 13:01:27', ''),
(28, 'student', '1', 'rajee28s', '$2y$10$MvEalV05JV/0qOLSv3lpe.I2vJVUDPZUZjnrcoIRG5NhmArk5RhSm', '8564129870', '2017-01-05 12:25:27', '0000-00-00 00:00:00', ''),
(29, 'student', '1', 'aman29s', '$2y$10$31Ki8pT2klg3oZgwPc0ruuVKQ/XHayIRRuD0c02c3PgOqIFe2qaT2', '8564129871', '2017-01-05 12:34:57', '0000-00-00 00:00:00', ''),
(30, 'parent', '1', 'haril4p', '$2y$10$2nwRBZfZnrkqVllkOOVaauc7Sr0gAPrYkzFU42bRLC131B5FCM0xK', '8564129871', '2017-01-05 12:34:58', '0000-00-00 00:00:00', ''),
(31, 'teacher', '1', 'rajvi31t', '$2y$10$V3VWdBb9T37F4cC8Wmtnv./6is/P/B9HusGBR7sDB4OFOJzVp15CO', '0566d0', '2017-01-05 13:39:45', '2017-01-05 08:09:46', ''),
(32, 'student', '1', 'sunde32s', '$2y$10$PbW0uzGLrQ208/aE2oTk8uxoVb3TyhZQTo0E7zEoO73YdoxmxEYJK', '8564129870', '2017-01-05 16:40:51', '0000-00-00 00:00:00', ''),
(33, 'student', '1', 'sumon33s', '$2y$10$JJqQ4L8i.psbGOwC3PYpTu7ix6MrXtivKYHKqHNEIILoHR4bBpZau', '8564129870', '2017-01-05 16:40:52', '0000-00-00 00:00:00', ''),
(34, 'school', '4', '6704Sch', '$2y$10$4Yr2.O.NWoBHyun2V.sP2.NlROmCI462HJD1NO2C5r9q/uTdeg06K', '9660341550', '2017-01-07 17:15:21', '0000-00-00 00:00:00', ''),
(35, 'teacher', '4', 'ptana35t', '$2y$10$e9ZiK7Soxj8EWFxcdauGzuSmWOmlL4rxtnTanATPi/BxmWlpuUg02', '831fb1', '2017-01-07 17:43:40', '2017-01-07 17:43:40', ''),
(36, 'student', '4', 'dines36s', '$2y$10$yb3h9zm3v5sO68asC3kjIedYYnIFHHKNhSAsjGYF0i/hP2FezLqiG', '08504000064', '2017-01-07 17:48:03', '0000-00-00 00:00:00', ''),
(37, 'parent', '4', 'jsdkl5p', '$2y$10$injp0FtvAe2tqHUVgEQa5OvSMi1faa1FEsfZCj.5z70bOHmHZOUrm', '08504000064', '2017-01-07 17:48:03', '0000-00-00 00:00:00', ''),
(38, 'student', '4', 'requi38s', '$2y$10$lum7FfRxzgCnVhGNET1HwuQBqaV6z.wkWY.EO28vYOJ5Qq08FL0hS', 'required and numeric', '2017-01-07 18:23:26', '0000-00-00 00:00:00', ''),
(39, 'parent', '4', 'requi6p', '$2y$10$ZoH21hIifKWlnUPRivHL0.A65wNYMJACJgQnGIXgPkYcx.EoFXmgm', 'required and numeric', '2017-01-07 18:23:26', '0000-00-00 00:00:00', ''),
(40, 'teacher', '4', 'rajes40t', '$2y$10$rMHrbYNwvmN4aT1Se.2MqO.A/8oCZBOnA5vu9SV03xjPC0zQSMj4y', '5b9983', '2017-01-07 18:25:15', '2017-01-07 18:25:15', ''),
(41, 'teacher', '4', 'haris41t', '$2y$10$7mcZBAI6swS7ziZsljlHMOHx/8UUWwwa.pJdRcaaBuzCAZNsrkCvC', '48d224', '2017-01-07 18:25:15', '2017-01-07 18:25:15', ''),
(42, 'teacher', '4', 'sunil42t', '$2y$10$65un9F.OO5HwAWMAeYkzvOECOV1dGuPMJZ8Fpfxsp2PcDkNyBy2IO', '6e7424', '2017-01-07 18:25:16', '2017-01-07 18:25:16', ''),
(43, 'school', '5', '6905Sch', '$2y$10$TM1Gjh0jfAkFyfC.7H6WtuM2O720izkQrCzMO2PYp/98vcwWKoBu.', '8875008001', '2017-01-09 08:20:09', '0000-00-00 00:00:00', ''),
(44, 'school', '6', '8706Sch', '$2y$10$Z0mMo.3QM7hF7UxBBO8.oefmN7byPWQKnTiG3P5NGu7brIxWdS/c.', '7597388524', '2017-01-09 10:28:38', '0000-00-00 00:00:00', ''),
(45, 'school', '7', '2307Sch', '$2y$10$KMArirvoBsaTEgg2GnI1h.yiaov3kCetn0V2bZkH7Qm/N6vSU9mUa', '9466400007', '2017-01-09 10:30:53', '0000-00-00 00:00:00', ''),
(46, 'school', '8', '9408Sch', '$2y$10$k5lTwAKCfZq6NJ.HHYA/oO8PjD7kZo3cgW9cchTUt7AaFW.d/MA2G', '9996267024', '2017-01-09 10:33:06', '0000-00-00 00:00:00', ''),
(47, 'school', '9', '3109Sch', '$2y$10$ilF.Js2c1YiCeUyef/rSO.udh9kWUIjGCIHpPHUOuwk592cGiPt62', '8685990124', '2017-01-09 10:35:50', '0000-00-00 00:00:00', ''),
(48, 'school', '10', '3710Sch', '$2y$10$tWaGb6emiqiaY4EBpXyweOV7S6zCVwZOaQjatS0Xk6U9BFJ3mgPbS', '9414515606', '2017-01-09 10:37:36', '0000-00-00 00:00:00', ''),
(49, 'school', '11', '5411Sch', '$2y$10$pv26MYXs8l.k2DIL4HpG.OreokWH7bCt4iGD2/EuvOJPXZGm761H6', '9896977711', '2017-01-09 10:52:24', '0000-00-00 00:00:00', ''),
(50, 'school', '12', '8512Sch', '$2y$10$n7qFuMqQd5G2rYMkp6JcAOyIRofvd0wdkpd5hFkbROK.tXt8oQ/ra', '8059600019', '2017-01-09 10:53:44', '0000-00-00 00:00:00', ''),
(51, 'school', '13', '6313Sch', '$2y$10$D5J4bHgqHyt7u0Dz8bUTce5HFUuBDviwsf29LKElGQ74Wce1gS5DK', '9728466992', '2017-01-09 10:54:59', '0000-00-00 00:00:00', ''),
(52, 'school', '14', '2114Sch', '$2y$10$g6dUZlnoi/0TunNMpbyDg.7pmRDOiDdjpvBOflqca19hzEpy37ZIK', '9812418809', '2017-01-09 10:57:24', '0000-00-00 00:00:00', ''),
(53, 'student', '1', 'rohit53s', '$2y$10$u6SYGsJoym2aKY31al9Yu.6if1t6tXX.zUxhOT4/AN2eSZN6chqpC', '9878451230', '2017-01-11 15:38:21', '0000-00-00 00:00:00', ''),
(54, 'student', '1', 'rohit54s', '$2y$10$myCbyChDaLuZu2w/hgeU7.XSingwABXNIoN8HXOA1y3OzNlhU8CxS', '9878451230', '2017-01-11 15:40:05', '0000-00-00 00:00:00', ''),
(55, 'student', '1', 'rohit55s', '$2y$10$q1Zc1bc9R9i/e92YV6gOauyIngpM3ZBQO8UtpYfFouEsjEp5Q9c72', '9878451230', '2017-01-11 15:41:24', '0000-00-00 00:00:00', ''),
(56, 'student', '1', 'rohit56s', '$2y$10$MTp54ISeXMGybNU90HFilOBDyghRHuEJ2Nq1r/3k3VRRlRXgnSy/G', '9878451230', '2017-01-11 15:42:30', '0000-00-00 00:00:00', ''),
(57, 'parent', '1', 'ramdh7p', '$2y$10$TU5WSLIP4tLzqT9FmiPVtOuWx04kLTsaZbgzhXk9SzucB9Gi8b2OG', '9878451230', '2017-01-11 15:42:31', '0000-00-00 00:00:00', ''),
(59, 'student', '1', 'seema59s', '$2y$10$/febH7tOZJkgVTJ7e02nwuRt4gRm4pUn.sZRLQZjt9UnaqSWLpCam', '9878451230', '2017-01-11 16:44:18', '0000-00-00 00:00:00', ''),
(60, 'student', '1', 'rohan60s', '$2y$10$aSTq5K.FyXuPLep/3kncM.M.XWHbBxzflLyIDYPz5xvQ./Bghfhga', '9878458989', '2017-01-13 06:31:10', '0000-00-00 00:00:00', ''),
(61, 'parent', '1', 'raman8p', '$2y$10$L6NmkxwoWf3zqLwitITQquC6xUINUfb9EQe/3iIOOBzQFCZN5FKFe', '9878458989', '2017-01-13 06:31:11', '0000-00-00 00:00:00', ''),
(62, 'student', '1', 'meena62s', '$2y$10$vSLFn6gIdBeFVIj3rM9z/ufuYhefgUTvrS3.ms8cjrrn0nfQYDUXK', '9878451230', '2017-01-13 07:09:49', '0000-00-00 00:00:00', ''),
(63, 'teacher', '1', 'sunil63t', '$2y$10$O5F2m0JnAJijFWbz30V1rebZS9O576953qmbQjyvsW6Jx9fzbbBUq', '7845657890', '2017-01-13 16:17:19', '2017-01-13 10:47:19', ''),
(64, 'teacher', '1', 'sunil64t', '$2y$10$abTAbLeZElZwEcGZc//GbO1BVDDBveIv0KJdELRu4kC3k4agviBia', '7845657890', '2017-01-13 16:18:33', '2017-01-13 10:48:34', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amount`
--
ALTER TABLE `amount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_group`
--
ALTER TABLE `blood_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_stop`
--
ALTER TABLE `bus_stop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caste`
--
ALTER TABLE `caste`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_frequency`
--
ALTER TABLE `fee_frequency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_structure`
--
ALTER TABLE `fee_structure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_summary`
--
ALTER TABLE `fee_summary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_img`
--
ALTER TABLE `gallery_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_history`
--
ALTER TABLE `notification_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_type`
--
ALTER TABLE `notification_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `push_notification`
--
ALTER TABLE `push_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_mod`
--
ALTER TABLE `result_mod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `splash`
--
ALTER TABLE `splash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time-table`
--
ALTER TABLE `time-table`
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
-- AUTO_INCREMENT for table `amount`
--
ALTER TABLE `amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `blood_group`
--
ALTER TABLE `blood_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bus_stop`
--
ALTER TABLE `bus_stop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `caste`
--
ALTER TABLE `caste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fee_frequency`
--
ALTER TABLE `fee_frequency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fee_structure`
--
ALTER TABLE `fee_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `fee_summary`
--
ALTER TABLE `fee_summary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gallery_img`
--
ALTER TABLE `gallery_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `leave_request`
--
ALTER TABLE `leave_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notification_history`
--
ALTER TABLE `notification_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notification_type`
--
ALTER TABLE `notification_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `principal`
--
ALTER TABLE `principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `push_notification`
--
ALTER TABLE `push_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `result_mod`
--
ALTER TABLE `result_mod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `splash`
--
ALTER TABLE `splash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `time-table`
--
ALTER TABLE `time-table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
