-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 03:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_majors`
--

CREATE TABLE `tb_majors` (
  `id_majors` int(11) NOT NULL,
  `majors_code` varchar(16) NOT NULL,
  `majors_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_majors`
--

INSERT INTO `tb_majors` (`id_majors`, `majors_code`, `majors_name`) VALUES
(1, 'EEDD', 'English Education Department'),
(2, 'ELD', 'English Literature Department'),
(3, 'BIOE', 'Biology Education Department'),
(4, 'MATE', 'Mathematics Education Department'),
(5, 'ECOE', 'Economics Education Department'),
(6, 'IEE', 'Informatics Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE `tb_student` (
  `sidn` int(8) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(64) NOT NULL,
  `major` int(11) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`sidn`, `fullname`, `dateofbirth`, `gender`, `major`, `email`) VALUES
(15119380, 'Roosevelt', '1996-10-10', 'Male', 5, 'roose@email.com'),
(15119388, 'Brandon', '1996-07-23', 'Male', 4, 'brandon@email.com'),
(15119389, 'Richard Bird', '1996-05-12', 'Male', 6, 'richard@email.com'),
(15119396, 'Michelle', '1996-05-18', 'Female', 2, 'micimici@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_majors`
--
ALTER TABLE `tb_majors`
  ADD PRIMARY KEY (`id_majors`);

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`sidn`),
  ADD KEY `major` (`major`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_majors`
--
ALTER TABLE `tb_majors`
  MODIFY `id_majors` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD CONSTRAINT `tb_student_ibfk_1` FOREIGN KEY (`major`) REFERENCES `tb_majors` (`id_majors`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
