-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 04:56 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edwarddj3441`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(31) NOT NULL,
  `password` varchar(255) NOT NULL,
  `clicks` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `clicks`) VALUES
('abdooo', '$2y$10$uiiRvhkcK8dHWLymL0XEeuwFhz1CtoHAOGCOuWl4r/CjmdrIzt/Oa', 0),
('bitch', '$2y$10$bhmlNu0xfu/RmIjaoph58O5SdWOuQuFyScGhKSzvKO0g.kxrbFyyu', 0),
('david1234', '$2y$10$pQsjePm2xaU31Vhp5RneWun9Mh6rDzgsrcqhINjtBPi8lYodeCeWy', 2),
('david12345', '$2y$10$5QI3CxnYtP7Vn2nYM5SGDOSX/yrOQ1PMELQHYJebHnCo7mE22vu9e', 0),
('david123456', '$2y$10$G/8i0v8dhLfNdauwyH//meaebuDNHzJB5LsLGVDhvfIHlHVrb2Gbq', 0),
('david1234567', '$2y$10$U0paO7ozAekqsFlydK7KduL1Nrtpgsg0KdPjq/7eVoXJUooFS0FRW', 0),
('david12345678', '$2y$10$sodFKzUtjZT8lmoyhiFlZexXr3VJHEhgg/fuDpKx.zo1Riffnyx5C', 0),
('davidedw', '$2y$10$OgEZDsVQ6zUUDXnjxuKvJeFoqIXH8cvpG1Vu1px9DpVewqEGIjn/K', 0),
('davidedwa', '$2y$10$8OWQy7rJk4LWdSHR3qRoBOITJ8gbOLWGVj378c66uspChAL2GeOzm', 0),
('davidedward', '$2y$10$WH1IF4mpcTmBk0pPNeVCDO01O9TS.Xjgp3M6IZwg5DFXVxcm5XLPi', 0),
('kyleman341', 'Password#1', 10),
('kyleman3411', '$2y$10$wtFBD0me6gUqFFjq.7CBhOM9dymbvqoJ5L7VZd57V5QLvOrx.4rwy', 2),
('kyleman34111', '$2y$10$eDRoC3OZLcT1jbnZIwdA/uooMegRPa8x4h8MU6ePYBzX74UFo6KMu', 0),
('LanaDelRey', '$2y$10$KDJOR0sWxnwQEnDOGFCOLePVy9YRx/GEFTe96l4DnUP7dSeH7kdZ2', 0),
('lilychua1', '$2y$10$rJO.Y7RPlCBnVffGK0H6PeSjF7w0fBg7koR2Xw5ze1Q4SlIvZ6VG6', 0),
('sammamasms', '$2y$10$MHmnjwzPPno4EaRxJIFsDelXnSe4WFKd2bdJ.o37n5HiJFDRv7OLK', 0),
('steven123', '$2y$10$5gLva.iul6ehB5dEEPfAMOO.BSl.rAVfm8f020OzhAvdbhfDLBHdy', 0),
('steven3456', '$2y$10$VyKJcJQ73/vaFrZBxVIwxeZ74miZ4a/3HB0MtVFZDeXSKjMSEQ1i.', 14),
('stevenass', '$2y$10$W3ikuKw4i/gMWQmQNO8Rrurn7/5tb./jz3YJd9C4mGcTxyRYnLyVq', 0),
('Walid1234', '$2y$10$T7aUPXWDnEp10s7gu6xcXeJz/g8SPowdK/zE8ABS77qlc50QdAe8m', 9);

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `zip_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `zip_code`) VALUES
(1, 'David', 'Edwardson', 'davidedwardson1@gmail.com', 7038416, 54768),
(2, 'abdelrahman', 'ashraf', 'a@yahoo.com', 7038416, 11311),
(3, 'Mara', 'Becakjdfn ', 'hellodonaldtrumpandmelania@gma', 1475329057, 54723);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
