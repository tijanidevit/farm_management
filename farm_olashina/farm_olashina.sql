-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2020 at 03:00 PM
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
-- Database: `farm_olashina`
--

-- --------------------------------------------------------

--
-- Table structure for table `bought_goods`
--

CREATE TABLE `bought_goods` (
  `id` int(11) NOT NULL,
  `good_name` varchar(190) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quanity` int(11) NOT NULL,
  `time_bought` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(300) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `email`, `password`, `address`) VALUES
(1, 'Mustapha Tijani', 'thenewxpat@gmail.com', 'a38e5a87365594bed6c23814bfdaf7fd', '6, Taiwo STreet, Sango,Ogun');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(180) NOT NULL,
  `username` varchar(180) NOT NULL,
  `email` varchar(180) NOT NULL,
  `password` varchar(280) NOT NULL,
  `address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `fullname`, `username`, `email`, `password`, `address`) VALUES
(3, 'Mustapha Tijani', 'tijanidevit', 'thenewxpat@gmail.com', '80047cbb7ee39b73a48fd22ccec81042', 8),
(5, 'Mustapha Tijani', 'tijanidevit', 'xpat@gmail.com', '13e34442011c6459ed4b5c96d8876dd0', 8);

-- --------------------------------------------------------

--
-- Table structure for table `farms`
--

CREATE TABLE `farms` (
  `id` int(11) NOT NULL,
  `farmer_id` bigint(20) NOT NULL,
  `farm_name` varchar(180) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` varchar(2000) NOT NULL,
  `quantity` int(11) NOT NULL,
  `ordered_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `quantity`, `ordered_time`, `status`) VALUES
(4, 1, '2', 1, '2020-09-08 12:19:48', 1),
(5, 1, '6', 1, '2020-09-08 12:28:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `farmer_id` bigint(20) NOT NULL,
  `product_name` varchar(180) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` text NOT NULL,
  `product_image` varchar(300) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `farmer_id`, `product_name`, `price`, `description`, `product_image`, `status`) VALUES
(2, 3, 'Banana', '89', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2279-Banana-e1500721809473.jpg', 1),
(5, 3, 'Yam', '200', 'Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction Addiction ', '8617-yam-farming-in-nigeria.jpg', 0),
(6, 5, 'Basket of Tomatoes', '2000', 'Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes Basket of Tomatoes ', '6512-Tomato-1280x720.jpg', 1),
(7, 5, 'Onions', '200', 'Fresh Hausa Onions sold at #200 per 40 pieces', '4366-Onions-Farming.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bought_goods`
--
ALTER TABLE `bought_goods`
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
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farms`
--
ALTER TABLE `farms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bought_goods`
--
ALTER TABLE `bought_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `farms`
--
ALTER TABLE `farms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
