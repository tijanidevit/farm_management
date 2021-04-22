-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 01:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `food_package_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `time_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `customer_id`, `food_package_id`, `quantity`, `time_added`) VALUES
(18, 10, 6, 1, '2021-01-21 16:12:56'),
(19, 15, 5, 1, '2021-01-26 12:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `username` varchar(60) NOT NULL,
  `phone` varchar(140) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `username`, `phone`, `image`, `password`) VALUES
(11, 'Adegboye J.O', 'Adegboye', '07038195169', '7461-zaddy.jpg', 'c9fa7f3e92537a49e8aec3729b121b6d'),
(12, 'Ogunlesi Christiana', 'Ogunlesi', '08133915327', '6768-ogunlesi.jpg', 'ab5389397fd61e31065576cce9696eaf'),
(13, 'Adegboye Favour', 'Favour', '08056050164', '5099-favour.jpg', '73f20762cbb7a28168a2c7c5cc8a58cf'),
(14, 'Oloyede Suliat', 'Oloyede', '08160864918', '7282-lara.jpg', '30adc86c5928b4a9d7f0cec702ef2606'),
(15, 'Elegbede Opeyemi', 'Opeyemi', '09064871557', '6608-ope.jpg', 'ecc75c72148ea4f5c883a032fc09807d');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_spots`
--

CREATE TABLE `delivery_spots` (
  `id` int(11) NOT NULL,
  `delivery_spot` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_spots`
--

INSERT INTO `delivery_spots` (`id`, `delivery_spot`) VALUES
(1, 'Queen Palace Hostel'),
(2, 'Pavilion'),
(3, 'Complex'),
(4, 'Auditorium 2'),
(5, 'Beautiful Gate'),
(6, 'School Gate'),
(7, 'Auditorium 1');

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `id` int(11) NOT NULL,
  `food_item` varchar(60) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`id`, `food_item`, `price`) VALUES
(1, 'Rice', '100'),
(2, 'Pepsi', '100'),
(3, 'Spagetti', '0'),
(4, 'A bottle of Pepsi', '0'),
(5, 'Plantain', '0'),
(6, 'Egg', '0'),
(7, 'Fish', '0'),
(8, 'Bread', '0'),
(11, 'Jollof Rice', '0'),
(12, 'Fried Rice', '0');

-- --------------------------------------------------------

--
-- Table structure for table `food_packages`
--

CREATE TABLE `food_packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(90) NOT NULL,
  `package_image` varchar(203) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_packages`
--

INSERT INTO `food_packages` (`id`, `package_name`, `package_image`, `price`, `description`) VALUES
(1, 'Amala Package', 'amala.jpg', '500', 'Enjoy your amala made in Lagos. The amala package comes with ewedu soup'),
(2, 'Pounded Yam (Iyan)', 'iyan.jpg', '1000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                                    quis nostrud exercitation '),
(3, 'Ofada Rice', 'ofada.jpg', '1000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                                    quis nostrud exercitation '),
(4, 'Semo Package', 'semo.jpg', '1500', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                                    quis nostrud exercitation '),
(5, 'Porridge', 'porrige.jpg', '300', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                                    quis nostrud exercitation '),
(6, 'Jollof Rice', 'jollof.gif', '2300', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                                    quis nostrud exercitation '),
(7, 'Moinmoin', '5622-moinmoin-pulseng.jpg', '500', 'Moinmoin tastes better with ogi');

-- --------------------------------------------------------

--
-- Table structure for table `food_package_items`
--

CREATE TABLE `food_package_items` (
  `id` int(11) NOT NULL,
  `food_package_id` int(11) NOT NULL,
  `food_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_package_items`
--

INSERT INTO `food_package_items` (`id`, `food_package_id`, `food_item_id`) VALUES
(1, 1, 1),
(3, 1, 7),
(5, 1, 4),
(6, 1, 2),
(7, 1, 8),
(8, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `food_packages` varchar(225) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `delivery_spot_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `delivery_time` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `food_packages`, `customer_id`, `delivery_spot_id`, `order_date`, `delivery_time`, `status`) VALUES
(2, 'Fried Rice With Spices, Royal Rice and Beans, Chinesse Kilishi, ', 13, 7, '2020-07-17 17:50:09', '14:34:00', 1),
(3, 'Fried Rice With Spices, Royal Rice and Beans, Chinesse Kilishi, Royal Bread and Beans, ', 11, 7, '2020-07-17 18:21:19', '19:23:00', 1),
(4, 'Fried Rice With Spices, ', 13, 7, '2020-07-17 19:27:28', '23:27:00', 0),
(5, 'Porridge, ', 11, 7, '2020-07-23 20:12:31', '00:00:00', 0),
(6, 'Semo Package, Moinmoin, ', 12, 3, '2020-07-23 22:32:06', '16:36:00', 1),
(7, 'Porridge, Jollof Rice, ', 10, 7, '2020-07-23 22:44:52', '12:22:00', 0),
(8, 'Jollof Rice, Porridge, ', 12, 7, '2020-07-23 22:55:22', '23:54:00', 0),
(9, 'Jollof Rice, Porridge, ', 14, 7, '2020-07-23 23:13:20', '16:58:00', 1),
(10, 'Moinmoin, Porridge, ', 14, 5, '2020-07-25 02:06:41', '13:12:00', 0),
(11, 'Jollof Rice, ', 14, 7, '2020-07-25 02:10:52', '12:34:00', 1),
(12, 'Moinmoin, Ofada Rice, Semo Package, ', 14, 7, '2020-07-25 02:19:23', '12:23:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_spots`
--
ALTER TABLE `delivery_spots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_items`
--
ALTER TABLE `food_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_packages`
--
ALTER TABLE `food_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_package_items`
--
ALTER TABLE `food_package_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `delivery_spots`
--
ALTER TABLE `delivery_spots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `food_items`
--
ALTER TABLE `food_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `food_packages`
--
ALTER TABLE `food_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `food_package_items`
--
ALTER TABLE `food_package_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
