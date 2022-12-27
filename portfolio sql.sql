-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 07:36 AM
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
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about_section_title` varchar(255) NOT NULL,
  `about_section_welcome` varchar(255) NOT NULL,
  `about_section_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_section_title`, `about_section_welcome`, `about_section_details`) VALUES
(8, 'About Me', 'WELCOME TO MY WEBSITE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquet tempus nibh. Sed lobortis lacus id nunc sodales, vel eleifend nunc tempus. Proin vitae rutrum lectus. Pellentesque quis libero a odio iaculis tempor. Sed volutpat ut urna vel molestie.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `sub_title` varchar(256) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `sub_title`, `name`, `email`, `phone`, `message`) VALUES
(4, 'Find me', 'Contact us now', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_title` varchar(256) NOT NULL,
  `service_sub_title` varchar(256) NOT NULL,
  `service_1` varchar(250) NOT NULL,
  `service_2` varchar(250) NOT NULL,
  `service_3` varchar(250) NOT NULL,
  `service_4` varchar(250) NOT NULL,
  `service_5` varchar(250) NOT NULL,
  `service_6` varchar(250) NOT NULL,
  `description_1` varchar(255) NOT NULL,
  `description_2` varchar(255) NOT NULL,
  `description_3` varchar(255) NOT NULL,
  `description_4` varchar(255) NOT NULL,
  `description_5` varchar(255) NOT NULL,
  `description_6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_title`, `service_sub_title`, `service_1`, `service_2`, `service_3`, `service_4`, `service_5`, `service_6`, `description_1`, `description_2`, `description_3`, `description_4`, `description_5`, `description_6`) VALUES
(9, 'What I DO', 'MY SERVICES', 'PROFESSIONAL CODE', 'CREATIVE IDEAS', 'USER FRIENDLY', 'SEO MARKETING', 'WEB DEVELOPMENT', 'PHOTOGRAPHY', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_1` varchar(50) NOT NULL,
  `skill_2` varchar(50) NOT NULL,
  `skill_3` varchar(50) NOT NULL,
  `skill_4` varchar(50) NOT NULL,
  `skill_5` varchar(50) NOT NULL,
  `skill_6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `skill_6`) VALUES
(2, 'WEB DESIGN', 'BRANDING', 'PHP DEVELOPMENT', 'PHOTOGRAPHY', 'SEO', 'MARKETING');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_title` varchar(256) NOT NULL,
  `slider_info` varchar(256) NOT NULL,
  `slider_promo` varchar(250) NOT NULL,
  `slider_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_title`, `slider_info`, `slider_promo`, `slider_image`) VALUES
(28, 'INTRODUCTION', 'Hi I am Nazmul Hossain', 'I am a programmer ', 'me.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
