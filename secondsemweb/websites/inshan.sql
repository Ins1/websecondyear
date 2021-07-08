-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 10:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inshan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'regular'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin2', '$2y$10$StLB.TCObC2U/UYIi7WqCuvIZiIXbETu4C7kMxqzeUcCVEpB/2R86', 'regular'),
(6, 'admin3', '$2y$10$ROwaKseAEIPJffDmtWmI6.bWi1o1D376k9HK8uwbwOTYnfiCn/Sam', 'regular'),
(14, 'admin', '$2y$10$VkFyelB3AKgi.lHNktjoxO.m..20diOUmaIm/eZCvGDIF0KxqZqYe', 'super');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Starters'),
(2, 'Mains'),
(3, 'Deserts'),
(56, 'Specials');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `display` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `price`, `category_id`, `display`) VALUES
(1, 'Burger and chips', 'This pub classic is made  fresh in house with your choice of chunky chips or curly fries.', '8.99', 2, 1),
(2, ' Nachos', ' A big bowl of nachos with guacamole, salsa, sour cream and plenty of melted cheese.', '3.99', 1, 0),
(3, 'Chocolate sundae', 'Three scoops of ice cream dripping in chocolate sauce and topped with a wafer', '2.99', 3, 1),
(4, 'Soup of the day', 'Ask one of our team what the soup of the day is. They are all home made fresh each day!', '4.99', 1, 1),
(5, 'Fish and chips', 'Battered cod with plenty of chips, served with mushy peas', '8.99', 2, 1),
(6, 'Vegetable stir fry', 'Noodles, beansprouts and plenty of vegetables. Topped with crushed peanuts and chilies (Ve)', '7.99', 2, 1),
(7, ' Reuben ', 'we are selling reuven. ', '1.99', 56, 1);

-- --------------------------------------------------------

--
-- Table structure for table `resevation`
--

CREATE TABLE `resevation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noofguests` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `admin` varchar(255) DEFAULT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resevation`
--

INSERT INTO `resevation` (`id`, `name`, `email`, `noofguests`, `datetime`, `admin`, `completed`) VALUES
(9, 'inshan', 'inshankc310@gmail.com', '8y3874y189', '2000-02-02 02:00:00', 'mainadmin', 1),
(10, ' a', 'inshankc310@gmail.com', '21', '2021-05-30 10:47:00', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `r_id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `completed` tinyint(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`r_id`, `name`, `email`, `rating`, `comment`, `admin`, `completed`, `id`) VALUES
(37, 'inshan ', 'inshankc310@gmail.com', '5', 'its a good dish', 'mainadmin', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_file` text NOT NULL,
  `offer_starting` date NOT NULL,
  `offer_ending` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`id`, `name`, `image_file`, `offer_starting`, `offer_ending`, `description`) VALUES
(13, 'Sale', '', '2021-02-02', '2021-04-04', 'We have arranged a sale');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resevation`
--
ALTER TABLE `resevation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `fk` (`id`);

--
-- Indexes for table `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resevation`
--
ALTER TABLE `resevation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `r_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `special`
--
ALTER TABLE `special`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk` FOREIGN KEY (`id`) REFERENCES `menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
