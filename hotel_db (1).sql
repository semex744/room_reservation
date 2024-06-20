-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 08:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
('EQYJaB96HcaTtxag6J7d', 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
('ZrMZsVbi0nxzmVdw5E9C', 'urago', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `user_id` varchar(20) NOT NULL,
  `booking_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `rooms` int(1) NOT NULL,
  `check_in` varchar(10) NOT NULL,
  `check_out` varchar(10) NOT NULL,
  `adults` int(1) NOT NULL,
  `childs` int(1) NOT NULL,
  `confirmation_code` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`user_id`, `booking_id`, `name`, `email`, `number`, `rooms`, `check_in`, `check_out`, `adults`, `childs`, `confirmation_code`) VALUES
('aejzuJaCsCnq2oHvQadB', 'QajXWfhFw6TePjlCftir', 'urago', 'admin111@gmail.com', '2333', 1, '2024-06-27', '2024-06-29', 1, 0, 561961);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `name` varchar(44) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`) VALUES
(0, 'urenebe6@gmail.com', 'urago', '$2y$10$C1uG6UUPtNjk62r0L0wEGel2/27jUSrfhjCwkxwHuqxlbSF2'),
(0, 'osanakidane12@gmail.com', 'urago', '$2y$10$gwwWg7aCLphAtdi8t3.FX.0rabZK1Afk/TqEve5jTze80SmM'),
(0, 'urenebe69@gmail.com', 'admin', '$2y$10$/zwvk31D48DMpoeXlf6l1.3aMMVcQzER6vERHK1e2qdK/YuM'),
(0, 'urenebe12@gmail.com', 'ure', '$2y$10$SnUei6X7QPiz7UlVI0BrSO5I7psabwRjK/gQr20/DC15YI0F'),
(0, 'urenebe@gmail.com', 'uresax', '$2y$10$7zfFkmUFgXuBXa0S.U3z3uc1ogIgo2Glph7HcGbMfoKuu1BM'),
(0, 'urenebe24@gmail.com', 'aaa', '$2y$10$zaiCE.1GFT7Y43XgpxwhPO9JoY1.ZOcV6C1rRl6YTiH5MGG7'),
(0, 'kidoosani@gmail.com', 'urago', '$2y$10$VNvmADs9Cp0HaUJyafAAXOSU0XU9hjvDZXFwwRtwz8biFGET'),
(0, 'osanakidane@gmail.com', 'urago', '121212'),
(0, 'urenebe00@gmail.com', 'baye', '1234'),
(0, 'urenebe6yyy@gmail.com', 'ttt', '1234'),
(0, 'urenebe111@gmail.com', 'urago', '1212'),
(0, 'urenebe6111@gmail.com', 'urago', '1234'),
(0, 'uenebe6@gmail.com', 'urago', '1212'),
(0, 'uenebeee6@gmail.com', 'urago', '1111'),
(0, 'kidoosan11i@gmail.com', 'abs', '1234'),
(0, 'urenebe16@gmail.com', 'urago', '121212');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
