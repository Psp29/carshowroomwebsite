-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 03:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `br_id` int(255) NOT NULL,
  `br_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pswd` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `pswd`, `cpass`, `token`, `status`) VALUES
(4, 'Prasad', 'prasad@prasad', '$2y$10$0qz8zs3EvEOJQrrbabq43OHpPrCp/i9jf4dwu1eb0bjK0IFQrERgS', '$2y$10$g2Kv3Zp4QFXdcOqGL/0VOu5l5f0tGFzzP8Nc8zOeupL28o53lLHoS', '5d19f3c9fc36441f235d3abdd296bb', 'inactive'),
(7, 'aditya', 'aditya@aditya', '$2y$10$7o6brJH3qVX2xxRyGLbmO.UkZ02s5zgYIx9gUAsT0U7YWn0euEzGK', '$2y$10$ip6XPpvxM83PrKbV2ND9G..OETSwBZuJnHLUTrBHdYXkrDVOQd5b6', '3de5c881ca371760046060b6ef848b', 'inactive'),
(27, 'Patole Prasad', 'patoleprasad2@gmail.com', '$2y$10$3NcvJXCh5KeaXEQyWn71/.kTmIwDQu/5meZJU6g.OO6/.BM.nmP.G', '$2y$10$qShYEhg5Aa6bRc933dfkNetCB6ybi0mbcJxU6mBEu5QNFHLFnQSt6', '2910a110a6c11320ea3cfe290c8199', 'active'),
(28, 'Prasadpatole', 'prasadpatolerocks@gmail.com', '$2y$10$xoiaAouRPdEqi4p5p7CgBON4u6H96Ng7GWpQbF9HJX1B5A2ETc6w6', '$2y$10$SzJs8vYeta1Zebftw4GcHejTsOcxvaRGZGN2gxUc2MDYyszpQv5D2', '6967f34846c539a9bdb9f0e468589f', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `bemail` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `bname`, `bemail`, `mobile`, `address`, `model`, `color`) VALUES
(15, 'Prasad', 'patoleprasad@hnn', '9087654321', 'Adrress', 'sDrive 20i SportX', 'Black'),
(16, 'Piyush', 'piyush@piyush', '09998888', 'Adddeee', 'sDrive20d M Sport', 'White'),
(17, 'Aditya', 'aditya@aditya', '9087654321', 'addss', ' sDrive 20i SportX', 'Blue'),
(19, 'prasad', 'patole@patole', '9087654321', 'add', 'sDrive20i xLine', 'Grey'),
(20, 'Prasad', 'patole@patole', '9087654321', 'add', 'Honda Amaze Exclusive Edition CVT Diesel', 'Grey'),
(21, 'Patole', 'patole@patole', '9087654321', 'add', 'BMW X1 sDrive 20i SportX', 'White'),
(22, 'Prasad', 'patole@patole', '9087654321', 'add\r\n', 'Honda Civic V CVT Petrol', 'White'),
(23, 'Aditya Totade', 'aditya@aditya', '9087654321', 'add', 'Honda City SV Petrol', 'Blue'),
(24, 'Aditya', 'aditya@aditya', '9087654321', 'Add', 'BMW 3 Series 330i Sport', 'Blue'),
(25, 'Prasad', 'patole@patole', '9087654321', 'Add', 'BMW Z4 sDrive 20i', 'Red'),
(26, 'Piyush', 'piyush@piyush', '9087654321', 'a', 'Hyundai i20 Asta (O) 1.0 Turbo DCT Dual Tone', 'White'),
(27, 'name', 'mail@mail', '9087654321', 'a', 'Hyundai Venue Sport SX Plus 1.0 Turbo DCT', 'Denim Blue'),
(28, 'dsds', 'dsdsd@ss', '7667587967', 'ssdsd', 'Hyundai Creta SX (O) 1.4 Turbo 7 DCT Dual Tone', 'Red'),
(29, 'dfdfs', 'sff@fsf', '347838333', 'cvn x', 'Hyundai Santro Sportz CNG', 'Beige'),
(30, 'sdffff', 'sfs@kjh', '9087654321', 'dhghgh', 'Mercedes AMG 43 Coupe 4MATIC', 'Blue'),
(31, 'efs', 'sef@fggh', '4564746742', 'dhfdhg', 'Mercedes C-Class C 300d AMG line', 'Black'),
(32, 'zsffd', 'fdxf@skjdsv', '9087654321', 'dfsdfsv', 'Mercedes S-Class S 350d', 'Black'),
(35, 'prsdsgdnbv', 'ddddddh@jhsgbr', '90877645445', 'errdthdtht', 'BMW X1 sDrive 20i SportX', 'Black'),
(36, 'Prasad Patole', 'prasadpatolerocks@gmail.com', '987493648', 'fhdghhhfj', 'Mercedes AMG 43 Coupe 4MATIC', 'Red');

-- --------------------------------------------------------

--
-- Table structure for table `queryinfo`
--

CREATE TABLE `queryinfo` (
  `id` int(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cno` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queryinfo`
--

INSERT INTO `queryinfo` (`id`, `cname`, `cno`, `cemail`, `msg`) VALUES
(5, 'Prasad', '9087654321', 'patole@prasad', 'Hii'),
(7, 'Prasad Sanjay Patole', '543565657', 'patole@prasad.com', 'serserer'),
(9, 'Prasad', '9087654321', 'patole@prasad', 'Hii'),
(10, 'prasad', '9087654321', 'patole@prasad', 'mello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queryinfo`
--
ALTER TABLE `queryinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `br_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `queryinfo`
--
ALTER TABLE `queryinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
