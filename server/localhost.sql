-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 13, 2020 at 11:22 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Youtube_Simulator`
--
CREATE DATABASE IF NOT EXISTS `Youtube_Simulator` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Youtube_Simulator`;

-- --------------------------------------------------------

--
-- Table structure for table `History`
--

CREATE TABLE `History` (
  `User_ID` int(11) NOT NULL,
  `History_ID` int(11) NOT NULL,
  `Video_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `History`
--

INSERT INTO `History` (`User_ID`, `History_ID`, `Video_ID`) VALUES
(1, 1, 2),
(1, 2, 3),
(1, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `Playlist`
--

CREATE TABLE `Playlist` (
  `User_ID` int(11) DEFAULT NULL,
  `Playlist_ID` int(11) NOT NULL,
  `Playlist_Name` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Playlist`
--

INSERT INTO `Playlist` (`User_ID`, `Playlist_ID`, `Playlist_Name`) VALUES
(1, 1, 'Gaming');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `User_ID` int(11) NOT NULL,
  `Password` text NOT NULL,
  `First_Name` varchar(45) NOT NULL,
  `Last_Name` varchar(45) NOT NULL,
  `Email` varchar(90) NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` text NOT NULL,
  `Total_Views` int(11) DEFAULT NULL,
  `Total_Likes` int(11) DEFAULT NULL,
  `Total_Videos` int(11) DEFAULT NULL,
  `Total_Subscribers` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`User_ID`, `Password`, `First_Name`, `Last_Name`, `Email`, `Age`, `Address`, `Total_Views`, `Total_Likes`, `Total_Videos`, `Total_Subscribers`) VALUES
(1, 'Nour@ll@h99', 'Mark', 'Nourallah', 'mgn17@mail.aub.edu', 21, 'Lebanon, Hazmieh', NULL, NULL, NULL, NULL),
(2, 'MARKO123', 'MARK', 'NOURALLAH', 'nourallahmark@hotmail.com', 21, 'MA KHASSAK', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Video`
--

CREATE TABLE `Video` (
  `Playlist_ID` int(11) NOT NULL,
  `Video_ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Date` date NOT NULL,
  `Views` int(11) DEFAULT NULL,
  `Likes` int(11) DEFAULT NULL,
  `Description` text,
  `Category` varchar(45) NOT NULL,
  `Thumbnail` text NOT NULL,
  `Video_Link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Video`
--

INSERT INTO `Video` (`Playlist_ID`, `Video_ID`, `Title`, `Date`, `Views`, `Likes`, `Description`, `Category`, `Thumbnail`, `Video_Link`) VALUES
(1, 2, 'Test1', '2020-12-01', NULL, NULL, NULL, 'Gaming', 'www.test1.com', 'soiadhiosda'),
(1, 3, 'Test1', '2020-12-01', NULL, NULL, NULL, 'Gaming', 'www.test2.com', 'soiadhiosda'),
(1, 4, 'Test1', '2020-12-01', NULL, NULL, NULL, 'Gaming', 'www.test3.com', 'soiadhiosda'),
(1, 5, 'Test1', '2020-12-01', NULL, NULL, NULL, 'Gaming', 'www.test4.com', 'soiadhiosda'),
(1, 6, 'Test1', '2020-12-01', NULL, NULL, NULL, 'Gaming', 'www.test5.com', 'soiadhiosda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `History`
--
ALTER TABLE `History`
  ADD PRIMARY KEY (`History_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Video_ID` (`Video_ID`);

--
-- Indexes for table `Playlist`
--
ALTER TABLE `Playlist`
  ADD PRIMARY KEY (`Playlist_ID`),
  ADD KEY `Foreign_Key_ID` (`User_ID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `Video`
--
ALTER TABLE `Video`
  ADD PRIMARY KEY (`Video_ID`),
  ADD KEY `FK_Playlist_ID` (`Playlist_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `History`
--
ALTER TABLE `History`
  MODIFY `History_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Playlist`
--
ALTER TABLE `Playlist`
  MODIFY `Playlist_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Video`
--
ALTER TABLE `Video`
  MODIFY `Video_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `History`
--
ALTER TABLE `History`
  ADD CONSTRAINT `User_ID` FOREIGN KEY (`User_ID`) REFERENCES `Users` (`User_ID`),
  ADD CONSTRAINT `Video_ID` FOREIGN KEY (`Video_ID`) REFERENCES `Video` (`Video_ID`);

--
-- Constraints for table `Playlist`
--
ALTER TABLE `Playlist`
  ADD CONSTRAINT `Foreign_Key_ID` FOREIGN KEY (`User_ID`) REFERENCES `Users` (`User_ID`) ON DELETE CASCADE;

--
-- Constraints for table `Video`
--
ALTER TABLE `Video`
  ADD CONSTRAINT `FK_Playlist_ID` FOREIGN KEY (`Playlist_ID`) REFERENCES `Playlist` (`Playlist_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
