-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 09:08 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `webboard`
--

CREATE TABLE `webboard` (
  `questionID` int(5) NOT NULL,
  `createDate` date NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `details` text COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `reply` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `webboard`
--

INSERT INTO `webboard` (`questionID`, `createDate`, `question`, `details`, `name`, `reply`) VALUES
(1, '2019-11-16', 'คิดว่าใน Fanstic Beats จะมีสัตว์วิเศษทั้งหมดกี่ตัวคะ', 'ตามหัวข้อเลยค่ะ อยากรู้มาก', 'admin', 3),
(2, '2019-11-18', 'ไม้กายสิทธิ์มีกี่แบบหรอ', 'ตามหัวข้อเลย อยากรู้มากกกก', 'nithiwat', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `webboard`
--
ALTER TABLE `webboard`
  ADD PRIMARY KEY (`questionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
