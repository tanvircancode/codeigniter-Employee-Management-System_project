-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 10:04 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_udemy`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `e_id` int(11) NOT NULL,
  `e_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `e_name` varchar(255) NOT NULL,
  `e_email` varchar(255) NOT NULL,
  `e_phone` varchar(255) NOT NULL,
  `e_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`e_id`, `e_date`, `e_name`, `e_email`, `e_phone`, `e_job`) VALUES
(1, '2021-04-16 16:07:57', 'Hasan Sarkar', 'hasan@mail.com', '019932123', 'Scientist'),
(2, '2021-04-16 16:10:51', 'Karim Ali', 'karimali29@gmail.com', '123321', 'Doctor'),
(3, '2021-04-17 02:36:51', 'Sabbir Rezwan', 'sabrez@mail.com', '0192321', 'Principal'),
(8, '2021-04-18 01:52:53', 'Safwan Ahmed Chowdhury', 'safwan@mail.com', '12390932123', 'UX Designer'),
(9, '2021-04-18 01:53:51', 'Tanjir Ahmed', 'tanjir@exm.com', '10931329031', 'Content Writer'),
(15, '2021-04-22 16:23:15', 'Rabin Ahmed', 'robin@gmail.com', '31311313', 'Dentist'),
(16, '2021-04-22 16:24:48', 'Jumman Chy', 'jumman0293@mail.com', '1332424', 'Lawyer'),
(17, '2021-04-23 03:05:58', 'Rabi Karmokar', 'roni123@gmail.com', '1231321', 'Postman');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `j_id` int(11) NOT NULL,
  `j_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `j_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`j_id`, `j_date`, `j_name`) VALUES
(1, '2021-04-06 08:28:36', 'UX Designer'),
(3, '2021-04-07 00:52:59', 'Designer'),
(4, '2021-04-09 16:51:39', 'Postman'),
(6, '2021-04-10 04:10:26', 'Teacher'),
(7, '2021-04-10 04:10:30', 'Content Writer'),
(8, '2021-04-10 04:10:42', 'Chemist'),
(10, '2021-04-11 13:39:25', 'Engineer'),
(11, '2021-04-11 13:58:44', 'Web Designer'),
(12, '2021-04-13 01:51:49', 'Scientist'),
(13, '2021-04-13 13:50:58', 'Pharmacist'),
(14, '2021-04-15 05:32:46', 'Lawyer'),
(15, '2021-04-16 00:05:11', 'Doctor'),
(16, '2021-04-16 14:57:11', 'Dentist'),
(17, '2021-04-17 01:15:44', 'Principal'),
(18, '2021-04-22 16:23:45', 'Marketer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_email` varchar(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_date`, `u_email`, `u_name`, `u_pass`) VALUES
(1, '2021-03-17 01:38:01', 'exm@gmail.com', 'Tanvir Ahmed', '123123'),
(3, '2021-03-17 01:38:41', 'hasan@gmail.com', 'Hasan Ali', '112233'),
(4, '2021-03-17 01:39:56', 'hasan@gmail.com', 'Hasan Ali', '112233'),
(5, '2021-03-17 01:40:56', 'naim@gmail.com', 'naim123', '112233'),
(6, '2021-03-17 01:42:19', 'tanvir@mail.com', 'tanvir123', '98989800'),
(7, '2021-03-20 12:37:54', 'example@ggmail.com', 'exam112', '123123'),
(8, '2021-03-20 12:50:02', 'trigger@gamil.com', 'trigger', '123123'),
(9, '2021-03-20 12:51:30', 'name@gamil.com', 'name2', '123123'),
(10, '2021-03-21 01:06:11', 'tanvir@mail.com', 'tanv', '123123'),
(11, '2021-03-21 01:07:24', 'test@mail.com', 'test', '1111'),
(12, '2021-04-28 02:40:25', 'tanvirf@mail.com', 'tan', '1111'),
(13, '2021-05-25 01:51:49', 'tanvir@mail.com', 'Tanvir Ahmed', '0000'),
(14, '2021-05-25 02:01:07', 'tanvir321@gmail.com', 'tanvir231', '1111'),
(15, '2021-05-25 02:01:40', 'tanvir342@gmail.com', 'tanvir342', '2222'),
(16, '2021-07-07 14:43:49', 'tanvirjuly@gmail.com', 'tanvir_july', '1212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
