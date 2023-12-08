-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 10:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) DEFAULT 0,
  `text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 1, 'saying'),
(2, 1, 0, 'speaking'),
(3, 1, 0, 'telling'),
(4, 1, 0, 'talking'),
(5, 2, 0, 'saw'),
(6, 2, 0, 'looked'),
(7, 2, 0, 'viewed'),
(8, 2, 1, 'watched'),
(9, 3, 1, 'near'),
(10, 3, 0, 'next'),
(11, 3, 0, 'by'),
(12, 3, 0, 'nearby'),
(13, 4, 0, 'as'),
(14, 4, 0, 'similar'),
(15, 4, 0, 'same'),
(16, 4, 1, 'like'),
(17, 5, 0, 'later'),
(18, 5, 0, 'last'),
(19, 5, 1, 'latest'),
(20, 5, 0, 'least'),
(21, 6, 1, 'made'),
(22, 6, 0, 'done'),
(23, 6, 0, 'did'),
(24, 6, 0, 'make'),
(25, 7, 0, 'all'),
(26, 7, 0, 'exact'),
(27, 7, 0, 'real'),
(28, 7, 1, 'whole'),
(29, 8, 1, 'for'),
(30, 8, 0, 'at'),
(31, 8, 0, 'in'),
(32, 8, 0, 'on'),
(33, 9, 0, 'at'),
(34, 9, 1, 'for'),
(35, 9, 0, 'in'),
(36, 9, 0, 'on'),
(37, 10, 0, 'careless'),
(38, 10, 0, 'carefree'),
(39, 10, 1, 'careful'),
(40, 10, 0, 'caring');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'Can you hear what he is .....?'),
(2, 'I ..... TV yesterday evening.'),
(3, 'We live ..... the city centre.'),
(4, 'She looks ..... a famous film star.'),
(5, 'This television gives you the ..... news.'),
(6, 'I only ..... one mistake in last night\'s test.'),
(7, 'I want you to tell me the ..... truth.'),
(8, 'He is looking ..... a present to buy his wife.'),
(9, 'That\'s what I would like ..... Christmas.'),
(10, 'Please be ..... when you cross this road.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_number` (`question_number`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `choices`
--
ALTER TABLE `choices`
  ADD CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_number`) REFERENCES `questions` (`question_number`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
