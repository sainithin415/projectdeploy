-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 03:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `passenger_name` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `boarding_place` varchar(255) NOT NULL,
  `Your_destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `passenger_name`, `telephone`, `email`, `boarding_place`, `Your_destination`) VALUES
(234382, 'Sai Krishna', '09010061859', 'test@email.com', 'vijaywada', 'Hyd'),
(234383, 'Sai Krishna', '09010061859', 'test@email.com', 'vijaywada', 'Hyd'),
(234391, 'Sai Krishna000', '09010061859', 'test@email.com', 'vijaywada', 'Hyd'),
(234397, 'Sai Krishna', '09010061859', 'test@email.com', 'vijaywada', 'Hyd'),
(234398, 'Sai Krishna', '09010061859', 'test@email.com', 'vijaywada', 'Hyd'),
(234399, 'Sai Krishna', '09010061859', 'test@email.com', 'vijaywada', 'Hyd'),
(234400, 'Sai Krishna', '09010061859', 'test@email.com', 'vijaywada', 'Hyd'),
(234401, 'Sai Krishna', '99010061859', 'test@email.com', 'vijaywada', 'Hyd'),
(234402, 'Sai Krishna', '9010061859', 'test@email.com', 'vijaywada', 'Hyd'),
(234403, 'Sai Krishna', '9010061859', 'test@email.com', 'vijaywada', 'Hyd'),
(234404, 'Sai Krishna', '9010061859', 'test@email.com', 'vijaywada', 'Hyderabad'),
(234405, 'Sai Krishna', '9010061859', 'test@email.com', 'vijaywada', 'Tirupati'),
(234406, 'Sai Krishna', '9010061859', 'test@email.com', 'vijaywada', 'Tirupati'),
(234407, 'Sai KrishnaT', '9901006185', 'test@email.com', 'vijaywada', 'Tirupati'),
(234408, 'Sai Krishna', '1111111111', 'asf@gmail.com', 'vijaywada', 'Hyderabad'),
(234409, 'Sai Krishna', '9999999999', 'test@email.com', 'vijaywada', 'Hyderabad'),
(234411, 'sai', '6999999999', 'test@email.com', 'kadiri', 'hyderabad');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `via_city` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `bus_name` varchar(255) NOT NULL,
  `departure_date` date NOT NULL,
  `departure_time` time(6) NOT NULL,
  `cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `via_city`, `destination`, `bus_name`, `departure_date`, `departure_time`, `cost`) VALUES
(5, 'vijaywada', 'Hyd', 'Abhi', '2023-04-25', '22:12:00.000000', '500'),
(6, 'vijaywada', 'Hyderabad', 'Abhi', '2023-05-11', '15:00:00.000000', '500'),
(7, 'vijaywada', 'Tirupati', 'TTD', '2023-05-11', '17:00:00.000000', '700'),
(8, 'vijaywada', 'Hyderabad', 'abhi', '2023-07-19', '12:02:00.000000', '100'),
(9, 'kadiri', 'hyderabad', 'kdr', '2023-07-19', '02:08:00.000000', '3500');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `First_Name`, `Last_Name`, `username`, `email`, `password`) VALUES
(6, 'Sai', 'Krishna', 'sai', 'test@email.com', '1234'),
(8, 't', 's', 'asdf', 'ss@gmail.com', '1234'),
(10, 'sai', 'k', 'qwerty', 'asf@gmail.com', '1111'),
(11, 'gvhjkm,', 'hnjlmk', 'hnjmk', 'fchjbk', 'gfchh'),
(12, 'sai', 'nithin', 'sainithin', 'sainithin.21bce9415@vitapstudent.ac.in', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234412;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
