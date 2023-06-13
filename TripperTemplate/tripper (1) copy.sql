-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 01:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tripper`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `AreaID` int(5) NOT NULL,
  `AreaName` varchar(30) NOT NULL,
  `AreaEvents` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`AreaID`, `AreaName`, `AreaEvents`) VALUES
(13890, 'Hofuf', 713901),
(13891, 'Almubariz', 713912),
(13892, 'Aleuyun', 713913),
(13893, 'Altaraf', 713904),
(13894, 'Jafr', 713905);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(10) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `StartDate` date NOT NULL,
  `EndData` date NOT NULL,
  `Budget` varchar(20) DEFAULT NULL,
  `AreaID` varchar(200) DEFAULT NULL,
  `Preferences` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `StartDate`, `EndData`, `Budget`, `AreaID`, `Preferences`) VALUES
(1, 'سلمان فهد', '0000-00-00', '2023-06-19', '1200RS', 'Array', 'Array'),
(2, '', '0000-00-00', '0000-00-00', '', '', ''),
(3, 'محمد سالم', '2023-06-12', '2023-06-19', '1200RS', 'Hufof| Aleuyun', 'Food| Familial'),
(4, 'محمد سالم', '2023-06-13', '2023-06-28', '1200RS', 'Hufof; Aleuyun; Jafr', 'Food; Sport; Festival; Familial'),
(5, 'محمد فهد سعود', '2023-06-26', '2023-06-22', '800RS', 'Hufof; Almubariz', 'Food; Entertainment');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EmployeeID` int(10) NOT NULL,
  `EmpFirstName` varchar(20) NOT NULL,
  `EmpLastName` varchar(20) NOT NULL,
  `Job` varchar(30) NOT NULL,
  `PhoneNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EmployeeID`, `EmpFirstName`, `EmpLastName`, `Job`, `PhoneNo`) VALUES
(1054678990, 'Manar', 'Abdulhadi', 'Manger', 592588075),
(1056789001, 'Fatimah', 'Abdlmuhsin', 'Manger', 593456789),
(1057863911, 'Norah', 'Saleh', 'Software Engineer', 567890031),
(1058902134, 'Afnan', 'Ali', 'Tour guide', 546789011),
(1059023401, 'Lina', 'Mohammed', 'Software Engineer', 567890021);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `EventID` int(6) NOT NULL,
  `EventName` varchar(50) NOT NULL,
  `AreaID` int(5) NOT NULL,
  `EventDate` date NOT NULL,
  `EventTime` time(6) NOT NULL,
  `Reservation` varchar(30) NOT NULL,
  `EventType` varchar(30) NOT NULL,
  `TimeLine` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventID`, `EventName`, `AreaID`, `EventDate`, `EventTime`, `Reservation`, `EventType`, `TimeLine`) VALUES
(713901, 'Al-Ahsa Municipality Football Championship', 13890, '2023-03-27', '18:00:00.101000', 'open event', 'sport', '27/3/ To 10/4/2023'),
(713912, 'Sana coffee', 13891, '2023-03-12', '06:17:14.375000', 'open event', 'Entrepreneurship', 'OneTime Event'),
(713913, 'Art gallery', 13891, '2023-03-16', '18:00:00.101000', 'open event', 'art', '16/3/TO 22/3/2023'),
(713904, 'Al-Ahsa Dates Marketing Festival', 13890, '2023-03-03', '18:00:00.101000', 'open event', 'marketing', '3/3/To 11/3/2023'),
(713905, 'Founding Day celebrations', 13890, '2023-02-22', '08:17:14.375000', 'open event', 'National', '22/2/ To24/2/2023'),
(713916, 'Alhasa runs', 13891, '2023-03-04', '06:17:14.375000', 'Register by link', 'sport', 'OneTime Event');

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `MentorID` int(10) NOT NULL,
  `AreaID` int(5) NOT NULL,
  `MentorName` varchar(20) NOT NULL,
  `PhoneNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service places`
--

CREATE TABLE `service places` (
  `PlaceID` int(10) NOT NULL,
  `PlaceName` varchar(30) NOT NULL,
  `AreaID` int(5) NOT NULL,
  `ServierType` varchar(30) NOT NULL,
  `Google maps link` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `service places`
--

INSERT INTO `service places` (`PlaceID`, `PlaceName`, `AreaID`, `ServierType`, `Google maps link`) VALUES
(578901, 'Grand day', 13890, 'Hotel', 'https://goo.gl/maps/Fa33J6iCzoPSxHKk7'),
(578902, 'Top View', 13891, 'Hotel', 'https://goo.gl/maps/jbbpKy7doTq45xfX9'),
(578903, 'Triple Tree', 13891, 'Hotel', 'https://goo.gl/maps/BWj2YMQbhcuagwQh9'),
(578904, 'Al-Annabi grilled', 13891, 'Restaurant', 'https://goo.gl/maps/t1GqhEucYByr7CxTA'),
(578905, 'Canaan', 13891, 'Restaurant', 'https://goo.gl/maps/HtgLos1hRvx7uV8T6'),
(578906, 'Warm oven', 13892, 'Restaurant', 'https://goo.gl/maps/jyResKdQdPsHVhBV8'),
(578907, 'Al Ali Foodstuff', 13890, 'Supermarket', 'https://goo.gl/maps/ikpEbpUKsyP1Xfor9'),
(578908, 'Samir Bosrour Sweets and Nuts', 13890, 'Supermarket', 'https://goo.gl/maps/2PJ9swLXcfYT47Ur7'),
(578909, 'Al Yahya Markets', 13890, 'Supermarket', 'https://goo.gl/maps/sZQUZfvTTTzrPJrPA'),
(578910, 'Dot Bakery & Cafe', 13890, 'Cafe', 'https://goo.gl/maps/rG63aabzPhARbBuy8'),
(578911, 'Triple 9 Cafe & Brakfast', 13891, 'Cafe', 'https://goo.gl/maps/JACdVjeq4TvyUEFf6'),
(578912, 'KYAN Cafe', 13890, 'Cafe', 'https://goo.gl/maps/79dSZpnXPJgqPNod8'),
(578913, 'HARMONY’S Cafe', 13890, 'Cafe', 'https://goo.gl/maps/wSuXAYeYaXEZXSCp7'),
(578914, 'Berry Cafe', 13890, 'Cafe', 'https://goo.gl/maps/Ca46R639RWET6LJv5'),
(578915, 'Black swan Cafe', 13891, 'Cafe', 'https://goo.gl/maps/8pGzZE9SgnZEEgMeA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(10) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `UserEmail` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Birthday` date NOT NULL,
  `PhoneNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `UserEmail`, `Password`, `Country`, `Sex`, `Birthday`, `PhoneNo`) VALUES
(1, 'قاسم', 'qasem@mail.com', '134345', 'Saudi Arabia', '0', '2023-05-31', 123456),
(2, 'محمد', 'mohammed@mail.com', '156546846', 'Saudi Arabia', 'Male', '2023-12-30', 123456),
(3, 'قاسم', 'qasem@mail.com', '123456', '', 'Male', '2023-11-28', 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`AreaID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD KEY `AreaID` (`AreaID`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`MentorID`);

--
-- Indexes for table `service places`
--
ALTER TABLE `service places`
  ADD PRIMARY KEY (`PlaceID`),
  ADD KEY `AreaID` (`AreaID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `AreaID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13895;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `EmployeeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1059023402;

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `MentorID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service places`
--
ALTER TABLE `service places`
  MODIFY `PlaceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=578916;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`AreaID`) REFERENCES `area` (`AreaID`);

--
-- Constraints for table `service places`
--
ALTER TABLE `service places`
  ADD CONSTRAINT `service places_ibfk_1` FOREIGN KEY (`AreaID`) REFERENCES `area` (`AreaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
