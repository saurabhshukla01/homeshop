-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 07:23 AM
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
-- Table structure for table `bankdetails`
--

CREATE TABLE `bankdetails` (
  `bank_id` int(11) NOT NULL,
  `bank_uid` varchar(15) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `address_status` varchar(255) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `exp_date` date NOT NULL,
  `cvv` varchar(5) NOT NULL,
  `pay_ammount` varchar(20) NOT NULL DEFAULT '1000',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankdetails`
--

INSERT INTO `bankdetails` (`bank_id`, `bank_uid`, `fname`, `lname`, `username`, `email`, `address`, `country`, `state`, `zipcode`, `address_status`, `payment_type`, `card_name`, `card_number`, `exp_date`, `cvv`, `pay_ammount`, `created_at`, `updated_at`) VALUES
(1, '5ee37d006dbc9', 'saurabh', 'shukla', 'saurabh1234', 'saurabh.shukla@prudigital.in', 'Noida 137 , near metro', 'India', 'Uttar pradesh', 239088, 'Shipping address is the same as my billing address', 'Credit card', 'Saurabh shukla', '9876 9807 7890 0019', '2020-06-12', '123', '1000', '2020-06-12 14:23:20', '2020-06-12 14:23:20'),
(2, '5ee3816229286', 'Hello', 'G', 'hello123', 'hello@gmail.com', 'Noida sector 12 , Bm nager', 'India', 'Dehli', 239098, 'Shipping address is the same as my billing address', 'Credit card', 'hello G', '9876 0990 1223 6780', '2020-06-12', '987', '1000', '2020-06-12 13:27:28', '2020-06-12 13:27:28'),
(3, '5ee3835de9d63', 'text', 'core', 'text@1234', 'core.text@gmail.com', 'sector 12 , delhi corona calony', 'India', 'Dehli', 120990, 'Shipping address is the same as my billing address', 'Debit card', 'text core', '9876 5678 0980 7856', '2022-08-01', '955', '1000', '2020-06-12 13:33:16', '2020-06-12 13:33:16'),
(4, '5ee38500ac8dd', 'mira', 'kumari', 'mira1234', 'mira@gmail.in', 'Greater nodia', 'India', 'Uttar pradesh', 123456, 'Shipping address is the same as my billing address', 'Credit card', 'mira kumari', '9870 9876 0987 1234', '2022-09-01', '908', '1000', '2020-06-12 13:38:13', '2020-06-12 13:38:13'),
(5, '5ee389648b92f', 'vipin', 'pal', 'pal1234', 'pal.vipin@gmail.com', 'Greater noida vihan', 'India', 'Uttar pradesh', 123456, 'Shipping address is the same as my billing address', 'Credit card', 'vipin pal', '0987 9087 0987 8901', '2022-11-09', '098', '1000', '2020-06-12 13:55:48', '2020-06-12 13:55:48'),
(6, '5ee3a2e05086f', 'vijay', 'kumar', 'vijay2411', 'vijay@gmail.com', 'Haryana Sector 220 , Ganipat', 'India', 'Hariyana', 109990, 'Shipping address is the same as my billing address', 'Credit card', 'vijay', '0987 7865 9087 7654', '2022-09-01', '100', '1000', '2020-06-12 15:44:32', '2020-06-12 15:44:32');

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
(1, '5edb846dd0cff', 'Mens category', 'men1.png', 200, '2020-06-06 06:26:29', '2020-06-08 07:04:56'),
(2, '5edb86c15c204', 'Women\'s Category', 'women1.jpg', 240, '2020-06-06 06:36:25', '2020-06-08 07:05:29'),
(3, '5edb8736515b1', 'Children\'s Category', 'child1.jpg', 980, '2020-06-06 06:38:22', '2020-06-08 07:05:51'),
(4, '5edb896dd0cff', 'Devices\'s Category', 'device1.png', 2800, '2020-06-06 06:26:29', '2020-06-08 07:06:21'),
(5, '5edb8f75b1727', 'Technology Category', 'technical1.jpg', 800, '2020-06-06 07:13:33', '2020-06-08 07:07:35'),
(6, '5edcfa92e0b59', 'Others', 'burger-king.png', 1000, '2020-06-07 09:02:50', '2020-06-12 21:13:32');

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
  `product_status` varchar(255) NOT NULL DEFAULT 'Unsold',
  `product_text` text NOT NULL DEFAULT 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_uid`, `product_name`, `product_category`, `product_price`, `product_stock`, `product_image`, `product_status`, `product_text`, `created_at`, `updated_at`) VALUES
(1, '5edbad2157080', 'Lee cooper Jeans', 'Mens category', '1270 Rs.', 225, 'lee-cooper1.jpg', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-06 09:20:09', '2020-06-12 00:28:12'),
(2, '5edbae464631c', 'Lee cooper T-shirt', 'Mens Category', '799 Rs.', 400, 'shirt-1.jpg', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-06 09:25:02', '2020-06-06 09:35:35'),
(3, '5edbb44e497eb', 'Dongel Device', 'Devices\'s Category', '999 Rs.', 225, 'dongal.png', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-06 09:50:46', '2020-06-06 09:53:27'),
(4, '5edbb52c52cca', 'Mobile Redmi', 'Devices\'s Category', '6777 Rs.', 555, 'mobile-redmi1.png', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-06 09:54:28', '2020-06-06 09:54:28'),
(5, '5edbb5622e2eb', 'Mobile pro', 'Devices\'s Category', '7999 Rs.', 999, 'mobile1.jpg', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-06 09:55:22', '2020-06-06 09:59:11'),
(6, '5edbb62d1bbcc', 'Mobile Set ', 'Devices\'s Category', '2500 $', 20, 'mobile-set.png', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-06 09:58:45', '2020-06-06 09:58:45'),
(7, '5edbb829bcac9', 'Formal Clothes Womens', 'Women\'s Category', '1899 Rs.', 19, 'formal-cloth-women1.jpg', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-06 10:07:13', '2020-06-06 10:07:13'),
(8, '5edbb8a4ca2ea', 'Best Cotton top', 'Women\'s Category', '2225 Rs.', 120, 'best-cloten-top.jpg', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-06 10:09:16', '2020-06-06 10:09:16'),
(9, '5edbb8f954803', 'Offdrival Cloth Women', 'Women\'s Category', '2500 Rs.', 100, 'offdrival-cloth.jpg', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-06 10:10:41', '2020-06-06 10:10:41'),
(10, '5ede318187a04', 'Product ', 'Others', '799 rs.', 555, 'burger-king.png', 'unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-08 07:09:29', '2020-06-11 23:02:54'),
(11, '5ede31a83d8e8', 'Lee top ', 'Women\'s Category', '999 rs.', 555, 'women1.jpg', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-08 07:10:08', '2020-06-08 07:10:08'),
(12, '5ede31c73f903', 'text Dark ', 'Others', '1270 rs.', 225, 'technical1.jpg', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-08 07:10:39', '2020-06-08 07:42:19'),
(13, '5edf0e4b7105e', 'mobile pro', 'Devices\'s Category', '11999 rs.', 99, 'mobile-set.png', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-08 22:51:31', '2020-06-12 01:18:08'),
(14, '5ee3030f33d7e', 'Jeans', 'Mens category', '1270 rs.', 225, 'lee-cooper1.jpg', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-11 22:52:39', '2020-06-12 01:15:01'),
(15, '5ee3251247023', 'Dongel Device 2', 'Technology Category', '11999 rs.', 500, 'dongal.png', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-12 01:17:46', '2020-06-12 01:17:46'),
(16, '5ee325bf6229f', 'Play toys', 'Children\'s Category', '1270 rs.', 100, 'child1.jpg', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-12 01:20:39', '2020-06-12 01:20:39'),
(17, '5ee33393ef983', 'tablet @4.7', 'Technology Category', '9889', 99, 'adminstration.jpg', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-12 02:19:39', '2020-06-12 02:19:39'),
(18, '5ee33401cbd79', 'Computer Apple', 'Technology Category', '90099 Rs.', 400, 'Computer.jpg', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-12 02:21:29', '2020-06-12 02:21:29'),
(19, '5edead2157080', 'Lee cooper Jeans', 'Mens category', '1270 Rs.', 225, 'lee-cooper1.jpg', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-06 09:20:09', '2020-06-12 00:28:12'),
(20, '5edbae464631d', 'Lee cooper T-shirt', 'Mens Category', '799 Rs.', 400, 'shirt-1.jpg', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-06 09:25:02', '2020-06-06 09:35:35'),
(21, '5edbb44e497ef', 'Dongel Device', 'Devices\'s Category', '999 Rs.', 225, 'dongal.png', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-06 09:50:46', '2020-06-06 09:53:27'),
(22, '5edbb52c52ccg', 'Mobile Redmi', 'Devices\'s Category', '6777 Rs.', 555, 'mobile-redmi1.png', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-06 09:54:28', '2020-06-06 09:54:28'),
(23, '5edbb5622e2eh', 'Mobile pro', 'Devices\'s Category', '7999 Rs.', 999, 'mobile1.jpg', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-06 09:55:22', '2020-06-06 09:59:11'),
(24, '5edbb62d1bbcd', 'Mobile Set ', 'Devices\'s Category', '2500 $', 20, 'mobile-set.png', 'Unsold', 'Product content is, simply, the text, imagery and other information that a brand or retailer provides to describe its offerings. This includes product names, prices, dimensions, descriptions and anything else that further helps consumers to understand the items they are viewing.', '2020-06-06 09:58:45', '2020-06-06 09:58:45'),
(25, '5ee464ba3b8af', 'JBL Wireless', 'Devices\'s Category', '130 $', 190, 'music.png', 'Unsold', 'Naturally, product content is absolutely imperative for any basic ecommerce (and distributed commerce) effort. After all, when you\'re shopping on the internet, you can\'t physically view or handle the products you\'re considering purchasing in, so the consumer is entirely dependent on the content that the brand or retailer provides.', '2020-06-13 05:31:38', '2020-06-13 05:31:38'),
(26, '5ee4651701ba0', 'Apple Watch', 'Devices\'s Category', '7900 Rs.', 100, 'apple-watch.png', 'Unsold', 'Salsify combines a comprehensive set of core data services under a flexible architecture that allows you to win on the digital shelf.', '2020-06-13 05:33:11', '2020-06-13 05:33:11'),
(27, '5ee46581b1fee', 'The Apple iPhone X', 'Devices\'s Category', '1330 $', 400, 'iphone.png', 'Unsold', 'The Global Data Synchronization Network (GDSN) is the world’s largest product data network. GDSN makes it possible for any company, in any market, to share high-quality product information seamlessly. Because companies of all sizes need the same thing—timely and reliable product information—to ultimately benefit consumers and patients.', '2020-06-13 05:34:57', '2020-06-13 05:34:57');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_uid` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_uid`, `fname`, `lname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, '5ee8486a543e3', 'saurabh', 'shukla', 'saurabh@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-06-16 04:19:54', '2020-06-16 04:19:54');

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
-- Indexes for table `bankdetails`
--
ALTER TABLE `bankdetails`
  ADD PRIMARY KEY (`bank_id`),
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bankdetails`
--
ALTER TABLE `bankdetails`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
