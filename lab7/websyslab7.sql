-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 04:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websyslab7`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `crn` int(11) NOT NULL,
  `prefix` varchar(4) NOT NULL,
  `number` smallint(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `section` smallint(2) NOT NULL,
  `schoolyear` smallint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`crn`, `prefix`, `number`, `title`, `section`, `schoolyear`) VALUES
(18314, 'ECSE', 2610, 'Computer Components and Operations', 6, 2021),
(48792, 'MATH', 2400, 'Introduction to Differential Equations', 4, 2021),
(59495, 'IHSS', 1220, 'Principles of Economics', 9, 2021),
(60272, 'ECSE', 1100, 'Introduction to ECSE', 2, 2021),
(81523, 'ITWS', 2110, 'Web Systems Development', 2, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `crn` int(11) DEFAULT NULL,
  `RIN` int(9) DEFAULT NULL,
  `grade` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `crn`, `RIN`, `grade`) VALUES
(2, 81523, 814917980, 93),
(3, 81523, 661993623, 85),
(4, 18314, 839237621, 90),
(5, 48792, 661993623, 72),
(6, 60272, 354362433, 78),
(7, 48792, 814917980, 82),
(8, 59495, 661993623, 89),
(9, 48792, 941942702, 95),
(10, 48792, 814917980, 99),
(11, 18314, 814917980, 87),
(12, 48792, 473724539, 80),
(13, 59495, 814917980, 92);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `RIN` int(9) NOT NULL,
  `RCSID` char(7) DEFAULT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`RIN`, `RCSID`, `firstname`, `lastname`, `alias`, `phone`, `address`) VALUES
(354362433, 'gomezj', 'Mary', 'Gomez', 'MJ', 8182506771, '1941 Oakway Lane, Los Angeles, CA 90017'),
(473724539, 'payner', 'Robert', 'Payne', 'RP', 5417639700, '3624 Skinner Hollow Road, Fossil, OR 97830'),
(661993623, 'mejiac', 'Cristian', 'Mejia', 'CM', 2017746503, '123 Forest Ave, Paramus, NJ 07652'),
(814917980, 'gomezj', 'Mary', 'Gomez', 'MG', 8182506771, '1941 Oakway Lane, Los Angeles, CA 90017'),
(839237621, 'pridej', 'Jane', 'Pridemore', 'JP', 3106867865, '1371 Jett Lane, Irvine, CA 92664'),
(941942702, 'dominj', 'John', 'Dominguez', 'JD', 9857273669, '3483 Lowndes Hill Park Road, Los Angeles, CA 90017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`crn`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crn` (`crn`),
  ADD KEY `RIN` (`RIN`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`RIN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`crn`) REFERENCES `courses` (`crn`),
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`RIN`) REFERENCES `students` (`RIN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
