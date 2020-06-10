-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 10:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_uid` varchar(15) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_uid`, `fname`, `lname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, '5edb2de245cda', 'saurabh', 'shukla', 'saurabh.shukla@prudigital.in', '25d55ad283aa400af464c76d713c07ad', '2020-06-06 05:47:14', '2020-06-06 06:12:01'),
(2, '5edb34662e63e', 'admin', 'panel', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-06-06 06:15:02', '2020-06-06 06:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_uid` varchar(15) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `category_stock` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_uid`, `category_name`, `category_image`, `category_stock`, `created_at`, `updated_at`) VALUES
(1, '5edb846dd0cff', 'Mens category', 'men1.png', 200, '2020-06-06 11:56:29', '2020-06-08 12:34:56'),
(2, '5edb86c15c204', 'Women\'s Category', 'women1.jpg', 240, '2020-06-06 12:06:25', '2020-06-08 12:35:29'),
(3, '5edb8736515b1', 'Children\'s Category', 'child1.jpg', 980, '2020-06-06 12:08:22', '2020-06-08 12:35:51'),
(4, '5edb896dd0cff', 'Devices\'s Category', 'device1.png', 2800, '2020-06-06 11:56:29', '2020-06-08 12:36:21'),
(5, '5edb8f75b1727', 'Technology Category', 'technical1.jpg', 800, '2020-06-06 12:43:33', '2020-06-08 12:37:35'),
(10, '5edcfa92e0b59', 'Others', 'burger-king.png', 1000, '2020-06-07 14:32:50', '2020-06-08 12:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_uid` varchar(15) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_price` varchar(15) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_uid`, `product_name`, `product_category`, `product_price`, `product_stock`, `product_image`, `created_at`, `updated_at`) VALUES
(1, '5edbad2157080', 'Lee cooper Jeans', 'Mens Category', '1270 Rs.', 225, 'lee-cooper1.jpg', '2020-06-06 14:50:09', '2020-06-06 14:51:02'),
(2, '5edbae464631c', 'Lee cooper T-shirt', 'Mens Category', '799 Rs.', 400, 'shirt-1.jpg', '2020-06-06 14:55:02', '2020-06-06 15:05:35'),
(3, '5edbb44e497eb', 'Dongel Device', 'Devices\'s Category', '999 Rs.', 225, 'dongal.png', '2020-06-06 15:20:46', '2020-06-06 15:23:27'),
(4, '5edbb52c52cca', 'Mobile Redmi', 'Devices\'s Category', '6777 Rs.', 555, 'mobile-redmi1.png', '2020-06-06 15:24:28', '2020-06-06 15:24:28'),
(5, '5edbb5622e2eb', 'Mobile pro', 'Devices\'s Category', '7999 Rs.', 999, 'mobile1.jpg', '2020-06-06 15:25:22', '2020-06-06 15:29:11'),
(6, '5edbb62d1bbcc', 'Mobile Set ', 'Devices\'s Category', '2500 $', 20, 'mobile-set.png', '2020-06-06 15:28:45', '2020-06-06 15:28:45'),
(7, '5edbb829bcac9', 'Formal Clothes Womens', 'Women\'s Category', '1899 Rs.', 19, 'formal-cloth-women1.jpg', '2020-06-06 15:37:13', '2020-06-06 15:37:13'),
(8, '5edbb8a4ca2ea', 'Best Cotton top', 'Women\'s Category', '2225 Rs.', 120, 'best-cloten-top.jpg', '2020-06-06 15:39:16', '2020-06-06 15:39:16'),
(9, '5edbb8f954803', 'Offdrival Cloth Women', 'Women\'s Category', '2500 Rs.', 100, 'offdrival-cloth.jpg', '2020-06-06 15:40:41', '2020-06-06 15:40:41'),
(15, '5ede318187a04', 'Product ', 'Others', '799 rs.', 555, 'burger-king.png', '2020-06-08 12:39:29', '2020-06-08 12:39:29'),
(16, '5ede31a83d8e8', 'Lee top ', 'Women\'s Category', '999 rs.', 555, 'women1.jpg', '2020-06-08 12:40:08', '2020-06-08 12:40:08'),
(17, '5ede31c73f903', 'text Dark ', 'Others', '1270 rs.', 225, 'technical1.jpg', '2020-06-08 12:40:39', '2020-06-08 13:12:19'),
(18, '5edf0e4b7105e', 'mobile pro', 'Devices\'s Category', '11999', 99, 'mobile-set.png', '2020-06-09 04:21:31', '2020-06-09 04:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `images` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`, `images`) VALUES
(1, 'Willie Whited', '2524 White River Way', 'Salt Lake City', '84106', 'USA', 'willie-whited.jpg'),
(2, 'Lisa Squires', 'Fehringer Strasse 27', 'MARIA BUCH', '8750', 'Austria', 'lisa-squires.jpg'),
(3, 'Sean Patterson', 'Rue des Ecoles 426', 'Vlierzele', '9520', 'Belgium', 'sean-patterson.jpg'),
(4, 'Anna Scott', 'Rua C 66, 1384', 'Goiania-GO', '74305-450', 'Brazil', 'anna-scott.jpg'),
(5, 'Desmond Peterson', '1414 Grey Rd', 'Feversham', 'ON N0C 1C0', 'Canada', 'desmond-peterson.jpg'),
(6, 'Samuel Hogan', '13, Avenue De Marlioz', 'ARGENTEUIL', '95100', 'France', 'samuel-hogan.jpg'),
(7, 'John Miller', 'Pappelallee 21', 'Arnsdorf', '09661', 'Germany', 'john-miller.jpg'),
(8, 'Rose Joyce', 'Via Galileo Ferraris, 38', 'Malavicina MN', '46040', 'Italy', 'rose-joyce.jpg'),
(9, 'Phillip Tilton', 'Huibertplaat 120', 'DH  Zwolle', '8032', 'Netherland', 'phillip-tilton.jpg'),
(10, 'Anita McGurk', '128 St Pauls Court Cloverlea', 'Palmerston North', '4412', 'New Zealand', 'anita-mcgurk.jpg'),
(11, 'John Morgan', '286 Stanza Bopape St', 'Louis Trichardt', '0923', 'South Africa', 'john-morgan.jpg'),
(12, 'Margaret Teets', 'Grossmatt 62', 'Betschwanden', '8777', 'Switzerland', 'margaret-teets.jpg'),
(13, 'Dara Adams', '21 Fraserburgh Rd', 'LINNELS', 'NE46 8YB', 'United Kingdom', 'dara-adams.jpg'),
(14, 'Bennie J. Martin', '34 Masthead Drive', 'PARK AVENUE QLD', '4701', 'Australia', 'bennie-j-martin.jpg'),
(15, 'Gladys Ashford', 'Holzstrasse 14', 'SALCHENDORF', '9064', 'Austria', 'gladys-ashford.jpg'),
(16, 'William Lavallie', 'Heirstraat 31', 'Marchin', '4570', 'Belgium', 'william-lavallie.jpg'),
(17, 'Antonio Wayman', '2331 Carlson Road', 'Prince George', 'BC V2L 5E5', 'Canada', 'antonio-wayman.jpg'),
(18, 'Carol Selders', 'Ysitie 44', 'TAMPERE', '33240', 'Finland', 'carol-selders.jpg'),
(19, 'David Sato', '30, Rue de la Pompe', 'MANOSQUE', '04100', 'France', 'david-sato.jpg'),
(20, 'Amy Vanmatre', 'Friedrichstrasse 4', 'Dusseldorf Flehe', '40223', 'Germany', 'amy-vanmatre.jpg'),
(21, 'Kenny Todd', 'Corso Porta Nuova, 10', 'Quara RE', '42010', 'Italy', 'kenny-todd.jpg'),
(22, 'Marla Alvarez', 'Tielstraat 17', 'Amsterdam-Zuidoost', '1107 RC', 'Netherland', 'marla-alvarez.jpg'),
(23, 'George Stanley', '95 Belle Verde Drive Rothesay Bay', 'North Shore', '0630', 'New Zealand', 'george-stanley.jpg'),
(24, 'David Bennett', 'Torvbakkgata 219', 'OSLO', '0550', 'Norway', 'david-bennett.jpg'),
(25, 'Donald Garrett', '86 St Denys Road', 'POYS STREET', 'IP17 9TF', 'United Kingdom', 'donald-garrett.jpg'),
(26, 'Horace Morgan', '3435 Jarvis Street', 'Buffalo', '14202', 'United States', 'horace-morgan.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
