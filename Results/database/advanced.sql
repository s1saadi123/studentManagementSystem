-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2017 at 01:43 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advanced`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(11) NOT NULL,
  `companies_company_id` int(11) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `branch_address` varchar(50) NOT NULL,
  `branch_created_date` datetime NOT NULL,
  `brach_status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branch_id`, `companies_company_id`, `branch_name`, `branch_address`, `branch_created_date`, `brach_status`) VALUES
(1, 1, 'gulshn', 'khrdr', '2017-06-30 10:06:02', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_email` varchar(50) NOT NULL,
  `company_address` varchar(50) NOT NULL,
  `company_created_date` datetime NOT NULL,
  `company_status` enum('active','inactive','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `company_name`, `company_email`, `company_address`, `company_created_date`, `company_status`) VALUES
(1, 'Designers', 'ABC@gmail.com', 'Karachi', '2017-06-30 10:06:25', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `branches_branch_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `companies_company_id` int(11) NOT NULL,
  `department_created_date` datetime NOT NULL,
  `department_status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `branches_branch_id`, `department_name`, `companies_company_id`, `department_created_date`, `department_status`) VALUES
(1, 1, 'designers', 1, '2017-06-30 11:06:57', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1498842075),
('m130524_201442_init', 1498842077);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `rs_id` int(11) NOT NULL,
  `students_std_id` int(11) NOT NULL,
  `maths` int(11) NOT NULL,
  `physics` int(11) NOT NULL,
  `chemistry` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `urdu` int(11) NOT NULL,
  `total_marks` int(11) NOT NULL,
  `grade` enum('A','B','C','D','F') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`rs_id`, `students_std_id`, `maths`, `physics`, `chemistry`, `english`, `urdu`, `total_marks`, `grade`) VALUES
(1, 1, 50, 50, 50, 50, 50, 250, 'C'),
(2, 1, 50, 50, 50, 50, 50, 55, 'A'),
(3, 3, 50, 50, 50, 50, 50, 270, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `std_id` int(11) NOT NULL,
  `std_name` varchar(50) NOT NULL,
  `std_email` varchar(50) NOT NULL,
  `std_contact_no` bigint(20) NOT NULL,
  `std_address` text NOT NULL,
  `std_class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`std_id`, `std_name`, `std_email`, `std_contact_no`, `std_address`, `std_class`) VALUES
(1, 'Ravish Kumar', 'ravish5star@gmail.com', 3343733141, 'Karachix', 12),
(3, 'love', 'ravish5star@gmail.com', 3343733141, 'cxcxcx', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Ravish', 'Kumar', 'Ravish Kumar', 'wrgdcPNuONTI__hRufxwdsEXtGegkBHz', '$2y$13$iynLExL1RY6ULFtz5PHLpe3bfuSDa2oOIRjbOYGMobCd5ginTfZmm', 'Xn4ifb8czD-8vbVn3f_CuTIlDIXV60JX_1498847946', 'ravish5star@gmail.com', 10, 1498847645, 1498847946),
(3, '', '', 'Ravish', 'x4aX-ewzabESVA_SQl14v7rbXshamJB9', '$2y$13$dlYbaalKqgPoJ2VE1xZbd.P0EZyAgwnQq9tcv1zADlEEIt/p9JlpG', NULL, 'ravish6star@gmail.com', 10, 1498903047, 1498903047);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_id`),
  ADD KEY `companies_company_id` (`companies_company_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`),
  ADD KEY `companies_company_id` (`companies_company_id`),
  ADD KEY `branches_branch_id` (`branches_branch_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`rs_id`),
  ADD KEY `students_std_id` (`students_std_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `rs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `branches_ibfk_1` FOREIGN KEY (`companies_company_id`) REFERENCES `companies` (`company_id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`companies_company_id`) REFERENCES `companies` (`company_id`),
  ADD CONSTRAINT `departments_ibfk_2` FOREIGN KEY (`branches_branch_id`) REFERENCES `branches` (`branch_id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`students_std_id`) REFERENCES `students` (`std_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
