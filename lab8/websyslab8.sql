-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 04:59 PM
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
-- Database: `websyslab8`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `id` int(11) NOT NULL,
  `RCSID` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`id`, `RCSID`, `title`, `descrip`, `link`) VALUES
(1, '$RCSID', '$title', '$description', '$link'),
(3, 'mejiac', 'The Basics WebSys F21, 2021-09-03', 'Learn the basics of Web Systems Development at RPI.', 'https://docs.google.com/presentation/d/1gvCq-nWWM4ggARP6liG94KJZeRBpaNoRm9CkmxbzWT0/edit?usp=sharing'),
(4, 'mejiac', 'The Basics WebSys F21, 2021-09-03', 'Learn the basics of Web Systems Development at RPI.', 'https://docs.google.com/presentation/d/1gvCq-nWWM4ggARP6liG94KJZeRBpaNoRm9CkmxbzWT0/edit?usp=sharing'),
(5, 'mejiac', 'The Basics WebSys F21, 2021-09-03', 'Learn the basics of Web Systems Development at RPI.', 'https://docs.google.com/presentation/d/1gvCq-nWWM4ggARP6liG94KJZeRBpaNoRm9CkmxbzWT0/edit?usp=sharing'),
(6, 'mejiac', 'The Basics WebSys F21, 2021-09-03', 'Learn the basics of Web Systems Development at RPI.', 'https://docs.google.com/presentation/d/1gvCq-nWWM4ggARP6liG94KJZeRBpaNoRm9CkmxbzWT0/edit?usp=sharing'),
(7, 'mejiac', 'The Basics WebSys F21, 2021-09-03', 'Learn the basics of Web Systems Development at RPI.', 'https://docs.google.com/presentation/d/1gvCq-nWWM4ggARP6liG94KJZeRBpaNoRm9CkmxbzWT0/edit?usp=sharing'),
(8, 'mejiac', 'Optimizations', 'We are going to optimize a game I made called Free Bee game as found at https://freebee.fun/play/. It is a clone of the New York Times game Spelling Bee. You can find the source code for the game here: https://github.com/freebee-game/web-client.', 'https://docs.google.com/document/d/19fi99OeR6RFPDIMtio7xAyk7EkbvWlhiQzxi5LrS8hs/edit?usp=sharing'),
(9, 'mejiac', 'Optimizations', 'We are going to optimize a game I made called Free Bee game as found at https://freebee.fun/play/. It is a clone of the New York Times game Spelling Bee. You can find the source code for the game here: https://github.com/freebee-game/web-client.', 'https://docs.google.com/document/d/19fi99OeR6RFPDIMtio7xAyk7EkbvWlhiQzxi5LrS8hs/edit?usp=sharing'),
(10, 'mejiac', 'Optimizations', 'We are going to optimize a game I made called Free Bee game as found at https://freebee.fun/play/. It is a clone of the New York Times game Spelling Bee. You can find the source code for the game here: https://github.com/freebee-game/web-client.', 'https://docs.google.com/document/d/19fi99OeR6RFPDIMtio7xAyk7EkbvWlhiQzxi5LrS8hs/edit?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `RCSID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `RCSID`) VALUES
(1, 'crisme95', 'password', 'mejiac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
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
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
