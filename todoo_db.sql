-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 04:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `_todoo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CAT_ID` int(11) NOT NULL,
  `CAT_TAG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `LIST_ID` int(11) NOT NULL,
  `LIST_TITLE` varchar(200) NOT NULL,
  `LIST_DESC` text NOT NULL,
  `LIST_COLOR` varchar(10) NOT NULL,
  `LIST_PRIV` tinyint(4) NOT NULL DEFAULT 0,
  `LIST_CAT_ID` int(11) DEFAULT NULL,
  `LIST_START` timestamp NOT NULL DEFAULT current_timestamp(),
  `LIST_END` timestamp NULL DEFAULT NULL,
  `LIST_USER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `TASK_ID` int(11) NOT NULL,
  `TASK_TEXT` text NOT NULL,
  `TASK_STATE` tinyint(4) NOT NULL DEFAULT 0,
  `TASK_START` timestamp NOT NULL DEFAULT current_timestamp(),
  `TASK_END` timestamp NULL DEFAULT NULL,
  `TASK_LIST_ID` int(11) NOT NULL,
  `TASK_USER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `USER_EMAIL` varchar(30) NOT NULL,
  `USER_NAME` varchar(20) NOT NULL,
  `USER_PASS` varchar(180) NOT NULL,
  `USER_BD` date DEFAULT NULL,
  `USER_TYPE` tinyint(4) NOT NULL DEFAULT 0,
  `USER_DATE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `USER_EMAIL`, `USER_NAME`, `USER_PASS`, `USER_BD`, `USER_TYPE`, `USER_DATE`) VALUES
(1, 'ceryne2ziane@gmail.com', 'Admin01', '$2y$10$tlS6Wn/40hmODlBKAXcwuu4vA35eKbOmXxyXQa.QoKJ93fBWkoZPu', NULL, 1, '2022-11-05 14:33:52'),
(2, 'sabrina@gmail.com', 'Admin02', '$2y$10$bHM5HYxaRty3OHqT7PWPhOcaauo8DtoDpf21Ft8WRrJfdKEIRiRAe', NULL, 1, '2022-11-05 16:28:30'),
(3, 'lili@hotmail.com', 'lou', 'Lou0123', NULL, 0, '2022-11-05 16:31:33'),
(4, 'Admin01', 'ceryne2ziane@gmail.c', '$2y$10$M83lDnSZlEtmSEuoO.WzyObJ44PYFMJ/kdPGjkd0PWFtgzBLUfCje', NULL, 0, '2022-11-05 17:25:35'),
(5, 'sab@hotmail.co', 'sab', '$2y$10$HRZ87JsJwCph3jM4q9UEmOpRStbznMQUeEwnYO.4W2chsnVQ1xN9q', NULL, 0, '2022-11-08 08:38:12'),
(6, '', 'jj', '$2y$10$c6/4Ij2IEiEzOmcuFPADVeMr2HOohpYW4dCIx0PQXO84DqvdhxAbO', NULL, 0, '2022-11-14 13:12:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CAT_ID`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`LIST_ID`),
  ADD KEY `list_category` (`LIST_CAT_ID`),
  ADD KEY `list_user` (`LIST_USER_ID`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`TASK_ID`),
  ADD KEY `task_list` (`TASK_LIST_ID`),
  ADD KEY `task_user` (`TASK_USER_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CAT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `LIST_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `TASK_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `list`
--
ALTER TABLE `list`
  ADD CONSTRAINT `list_category` FOREIGN KEY (`LIST_CAT_ID`) REFERENCES `category` (`CAT_ID`),
  ADD CONSTRAINT `list_user` FOREIGN KEY (`LIST_USER_ID`) REFERENCES `user` (`USER_ID`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_list` FOREIGN KEY (`TASK_LIST_ID`) REFERENCES `list` (`LIST_ID`),
  ADD CONSTRAINT `task_user` FOREIGN KEY (`TASK_USER_ID`) REFERENCES `user` (`USER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
