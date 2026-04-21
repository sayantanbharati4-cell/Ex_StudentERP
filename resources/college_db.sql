-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2026 at 07:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `admission_number` varchar(50) NOT NULL,
  `registration_no` varchar(50) DEFAULT NULL,
  `roll` varchar(50) DEFAULT NULL,
  `roll_extra` varchar(50) DEFAULT NULL,
  `roll_number` varchar(50) DEFAULT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT 'Indian',
  `religion` varchar(100) DEFAULT NULL,
  `caste_category` varchar(100) DEFAULT NULL,
  `aadhaar_number` varchar(20) DEFAULT NULL,
  `identification_mark` text DEFAULT NULL,
  `identification_mark_extra` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `personal_email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `alternate_phone` varchar(20) DEFAULT NULL,
  `permanent_address` text NOT NULL,
  `current_address` text DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pincode` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT 'India',
  `program_id` int(11) DEFAULT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `admission_date` date NOT NULL,
  `admission_type` varchar(50) DEFAULT 'regular',
  `admission_category` varchar(50) DEFAULT 'general',
  `current_semester` int(11) DEFAULT 1,
  `father_name` varchar(200) DEFAULT NULL,
  `father_email` varchar(100) DEFAULT NULL,
  `father_phone` varchar(20) DEFAULT NULL,
  `father_occupation` varchar(255) DEFAULT NULL,
  `mother_name` varchar(200) DEFAULT NULL,
  `mother_phone` varchar(20) DEFAULT NULL,
  `mother_occupation` varchar(255) DEFAULT NULL,
  `mother_email` varchar(100) DEFAULT NULL,
  `guardian_name` varchar(200) DEFAULT NULL,
  `guardian_relation` varchar(100) DEFAULT NULL,
  `guardian_phone` varchar(20) DEFAULT NULL,
  `parent_address` text DEFAULT NULL,
  `guardian_email` varchar(100) DEFAULT NULL,
  `status` enum('active','inactive','graduated','suspended','discontinued','completed') DEFAULT 'active',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `admission_number`, `registration_no`, `roll`, `roll_extra`, `roll_number`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `gender`, `blood_group`, `nationality`, `religion`, `caste_category`, `aadhaar_number`, `identification_mark`, `identification_mark_extra`, `email`, `personal_email`, `phone`, `alternate_phone`, `permanent_address`, `current_address`, `city`, `state`, `pincode`, `country`, `program_id`, `batch_id`, `admission_date`, `admission_type`, `admission_category`, `current_semester`, `father_name`, `father_email`, `father_phone`, `father_occupation`, `mother_name`, `mother_phone`, `mother_occupation`, `mother_email`, `guardian_name`, `guardian_relation`, `guardian_phone`, `parent_address`, `guardian_email`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 6, 'ADM2024001', NULL, NULL, NULL, 'CSE24001', 'Aarav', 'K', 'Mehta', '2005-06-15', 'male', NULL, 'Indian', NULL, NULL, NULL, NULL, NULL, 'aarav.mehta@nitdelhi.ac.in', NULL, '9810012345', NULL, '12, Green Park, Delhi', NULL, NULL, NULL, NULL, 'India', 1, 1, '2024-08-10', 'regular', 'general', 2, 'Rajesh Mehta', 'rajesh.mehta@example.com', '9810011111', NULL, 'Sunita Mehta', '9810022222', NULL, 'sunita.mehta@example.com', NULL, NULL, NULL, NULL, NULL, 'active', 1, '2026-03-18 10:43:07', '2026-03-18 10:43:07'),
(2, 7, 'ADM2024002', NULL, NULL, NULL, 'CSE24002', 'Vihaan', 'S', 'Khanna', '2005-09-20', 'male', NULL, 'Indian', NULL, NULL, NULL, NULL, NULL, 'vihaan.khanna@nitdelhi.ac.in', NULL, '9810012346', NULL, '34, Model Town, Delhi', NULL, NULL, NULL, NULL, 'India', 1, 1, '2024-08-10', 'regular', 'general', 2, 'Sanjay Khanna', 'sanjay.khanna@example.com', '9810033333', NULL, 'Anita Khanna', '9810044444', NULL, 'anita.khanna@example.com', NULL, NULL, NULL, NULL, NULL, 'active', 1, '2026-03-18 10:43:07', '2026-03-18 10:43:07'),
(3, 8, 'ADM2024003', NULL, NULL, NULL, 'CSE24003', 'Vivaan', 'R', 'Saxena', '2005-11-02', 'male', NULL, 'Indian', NULL, NULL, NULL, NULL, NULL, 'vivaan.saxena@nitdelhi.ac.in', NULL, '9810012347', NULL, '56, Patel Nagar, Delhi', NULL, NULL, NULL, NULL, 'India', 1, 1, '2024-08-10', 'regular', 'general', 2, 'Rakesh Saxena', 'rakesh.saxena@example.com', '9810055555', NULL, 'Poonam Saxena', '9810066666', NULL, 'poonam.saxena@example.com', NULL, NULL, NULL, NULL, NULL, 'active', 1, '2026-03-18 10:43:07', '2026-03-18 10:43:07'),
(4, 9, 'ADM2024004', NULL, NULL, NULL, 'ECE24001', 'Ananya', 'P', 'Singh', '2005-04-18', 'female', NULL, 'Indian', NULL, NULL, NULL, NULL, NULL, 'ananya.singh@nitdelhi.ac.in', NULL, '9810012348', NULL, '78, Vikaspuri, Delhi', NULL, NULL, NULL, NULL, 'India', 2, 2, '2024-08-10', 'regular', 'general', 2, 'Arun Singh', 'arun.singh@example.com', '9810077777', NULL, 'Meena Singh', '9810088888', NULL, 'meena.singh@example.com', NULL, NULL, NULL, NULL, NULL, 'active', 1, '2026-03-18 10:43:07', '2026-03-18 10:43:07'),
(5, 10, 'ADM2024005', NULL, NULL, NULL, 'ECE24002', 'Diya', 'M', 'Patel', '2005-07-25', 'female', NULL, 'Indian', NULL, NULL, NULL, NULL, NULL, 'diya.patel@nitdelhi.ac.in', NULL, '9810012349', NULL, '90, Janakpuri, Delhi', NULL, NULL, NULL, NULL, 'India', 2, 2, '2024-08-10', 'regular', 'general', 2, 'Mahesh Patel', 'mahesh.patel@example.com', '9810099999', NULL, 'Geeta Patel', '9810000001', NULL, 'geeta.patel@example.com', NULL, NULL, NULL, NULL, NULL, 'active', 1, '2026-03-18 10:43:07', '2026-03-18 10:43:07'),
(6, 11, 'ADM2024006', NULL, NULL, NULL, 'ECE24003', 'Advik', 'N', 'Joshi', '2005-12-12', 'male', NULL, 'Indian', NULL, NULL, NULL, NULL, NULL, 'advik.joshi@nitdelhi.ac.in', NULL, '9810012350', NULL, '23, Rohini, Delhi', NULL, NULL, NULL, NULL, 'India', 2, 2, '2024-08-10', 'regular', 'general', 2, 'Nitin Joshi', 'nitin.joshi@example.com', '9810000111', NULL, 'Sangeeta Joshi', '9810000222', NULL, 'sangeeta.joshi@example.com', NULL, NULL, NULL, NULL, NULL, 'active', 1, '2026-03-18 10:43:07', '2026-03-18 10:43:07'),
(8, 13, 'ADM2024008', NULL, NULL, NULL, 'ME24002', 'Arjun', 'V', 'Nair', '2004-08-19', 'male', NULL, 'Indian', NULL, NULL, NULL, NULL, NULL, 'arjun.nair@nitdelhi.ac.in', NULL, '9810012352', NULL, '67, Noida', NULL, NULL, NULL, NULL, 'India', 3, 3, '2024-08-10', 'regular', 'general', 3, 'Vijay Nair', 'vijay.nair@example.com', '9810000555', NULL, 'Radha Nair', '9810000666', NULL, 'radha.nair@example.com', NULL, NULL, NULL, NULL, NULL, 'active', 1, '2026-03-18 10:43:07', '2026-03-18 10:43:07'),
(9, 14, 'ADM2024009', NULL, NULL, NULL, 'ME24003', 'Ishita', 'D', 'Desai', '2004-10-10', 'female', NULL, 'Indian', NULL, NULL, NULL, NULL, NULL, 'ishita.desai@nitdelhi.ac.in', NULL, '9810012353', NULL, '89, Ghaziabad', NULL, NULL, NULL, NULL, 'India', 3, 3, '2024-08-10', 'regular', 'general', 3, 'Dinesh Desai', 'dinesh.desai@example.com', '9810000777', NULL, 'Minal Desai', '9810000888', NULL, 'minal.desai@example.com', NULL, NULL, NULL, NULL, NULL, 'active', 1, '2026-03-18 10:43:07', '2026-03-18 10:43:07'),
(10, 15, 'ADM2024010', NULL, NULL, NULL, 'CSE25001', 'Rohan', 'K', 'Das', '2006-01-05', 'male', NULL, 'Indian', NULL, NULL, NULL, NULL, NULL, 'rohan.das@nitdelhi.ac.in', NULL, '9810012354', NULL, '12, Salt Lake, Delhi', NULL, NULL, NULL, NULL, 'India', 1, 4, '2025-08-10', 'regular', 'general', 1, 'Kalyan Das', 'kalyan.das@example.com', '9810000999', NULL, 'Nandini Das', '9810001000', NULL, 'nandini.das@example.com', NULL, NULL, NULL, NULL, NULL, 'active', 1, '2026-03-18 10:43:07', '2026-03-18 10:43:07'),
(11, 16, 'ADM2024011', NULL, NULL, NULL, 'CSE25002', 'Kavya', 'R', 'Menon', '2006-02-14', 'female', NULL, 'Indian', NULL, NULL, NULL, NULL, NULL, 'kavya.menon@nitdelhi.ac.in', NULL, '9810012355', NULL, '34, Andheri, Delhi', NULL, NULL, NULL, NULL, 'India', 1, 4, '2025-08-10', 'regular', 'general', 1, 'Ramesh Menon', 'ramesh.menon@example.com', '9810001111', NULL, 'Shobha Menon', '9810001222', NULL, 'shobha.menon@example.com', NULL, NULL, NULL, NULL, NULL, 'active', 1, '2026-03-18 10:43:07', '2026-03-18 10:43:07'),
(12, 17, 'ADM2024012', NULL, NULL, NULL, 'CSE25003', 'Reyansh', 'G', 'Gupta', '2006-03-22', 'male', NULL, 'Indian', NULL, NULL, NULL, NULL, NULL, 'reyansh.gupta@nitdelhi.ac.in', NULL, '9810012356', NULL, '56, Connaught Place, Delhi', NULL, NULL, NULL, NULL, 'India', 1, 4, '2025-08-10', 'regular', 'general', 1, 'Gaurav Gupta', 'gaurav.gupta@example.com', '9810001333', NULL, 'Anjali Gupta', '9810001444', NULL, 'anjali.gupta@example.com', NULL, NULL, NULL, NULL, NULL, 'active', 1, '2026-03-18 10:43:07', '2026-03-18 10:43:07'),
(13, 19, 'ADM20265479', NULL, NULL, NULL, NULL, 'Sayantan Bharati', '', 'Bharati', '2026-03-31', 'male', '', 'Indian', NULL, NULL, NULL, NULL, NULL, NULL, 'abcs@domain.com', '+911234125125', '', 'asdf', 'asdfas', 'dfasdf', 'asdfa', 'sdfasdf', 'India', NULL, NULL, '2026-03-18', 'transfer', 'general', 1, '', NULL, '', NULL, '', '', NULL, NULL, '', '', '', NULL, NULL, 'active', NULL, '2026-03-18 12:07:03', '2026-03-18 12:18:53'),
(14, NULL, 'ADM20260001', 'REG2024101', NULL, NULL, NULL, 'Arjun', NULL, 'Mehta', '2005-06-15', 'male', 'O+', 'Indian', 'Hinduism', 'General', '123456789012', 'Mole on right cheek', NULL, NULL, NULL, '9876543210', NULL, '123, Rose Villa, MG Road, Mumbai', NULL, NULL, NULL, NULL, 'India', 1, 1, '2026-04-05', 'regular', 'general', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2026-04-05 15:44:42', '2026-04-05 15:44:42'),
(15, NULL, 'ADM20260002', 'REG2024102', NULL, NULL, NULL, 'Sanya', NULL, 'Iyer', '2005-09-22', 'female', 'B+', 'Indian', 'Hinduism', 'OBC', '987654321098', 'Scar on left arm', NULL, NULL, NULL, '9876543211', NULL, '45, Skyline Apts, Adyar, Chennai', NULL, NULL, NULL, NULL, 'India', 1, 1, '2026-04-05', 'regular', 'general', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2026-04-05 15:44:42', '2026-04-05 15:44:42'),
(18, NULL, 'ADM2026_T01', 'REG2024_01', NULL, NULL, NULL, 'Arjun', NULL, 'Mehta', '2005-06-15', 'male', 'O+', 'Indian', 'Hinduism', 'General', '123456789012', 'Mole on right cheek', NULL, NULL, NULL, '9876543210', NULL, '123, Rose Villa, Mumbai', NULL, NULL, NULL, NULL, 'India', 1, 1, '2026-04-05', 'regular', 'general', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2026-04-05 15:47:04', '2026-04-05 15:47:04'),
(19, NULL, 'ADM2026_T02', 'REG2024_02', NULL, NULL, NULL, 'Sanya', NULL, 'Iyer', '2005-09-22', 'female', 'B+', 'Indian', 'Hinduism', 'OBC', '987654321098', 'Scar on left arm', NULL, NULL, NULL, '9876543211', NULL, '45, Skyline Apts, Chennai', NULL, NULL, NULL, NULL, 'India', 1, 1, '2026-04-05', 'regular', 'general', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2026-04-05 15:47:04', '2026-04-05 15:47:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admission_number` (`admission_number`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
