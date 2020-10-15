-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 07:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phplogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `php` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `totalobtained` int(11) NOT NULL,
  `totalmarks` int(11) NOT NULL,
  `percent` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`id`, `name`, `username`, `password`, `php`, `mysql`, `html`, `totalobtained`, `totalmarks`, `percent`) VALUES
(1, 'kasturi', 'kasturis', 'cd1d0935d803670829998d3e1ac50022', 90, 80, 80, 250, 300, 83.33),
(2, 'snehal', 'snehals', '8840dc1ea8c9d08319ca6e330a3b9fa8', 80, 70, 80, 230, 300, 76.66),
(3, 'sunil', 'sunils', '62d69f032b79021111dab59ced2015d3', 90, 70, 80, 240, 300, 80),
(4, 'ishita', 'ishitap', '979743289fca6334972ad32c67291c62', 80, 70, 60, 210, 300, 70);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
