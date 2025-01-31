-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 11:35 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `addsnack`
--

CREATE TABLE `addsnack` (
  `snackid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `subcategoryid` int(11) NOT NULL,
  `snackname` varchar(100) NOT NULL,
  `description` varchar(150) NOT NULL,
  `image` tinyblob NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addsnack`
--

INSERT INTO `addsnack` (`snackid`, `categoryid`, `subcategoryid`, `snackname`, `description`, `image`, `price`, `status`) VALUES
(1, 22, 34, 'Sado Locho', 'sado locho without oil', 0x75706c6f6164732f6275747465726c6f63686f2e6a7067, 40, 'Active'),
(36, 34, 47, 'nylon khaman', 'khman', 0x75706c6f6164732f636875746e796b68616d616e2e6a7067, 120, 'Active'),
(37, 32, 48, 'Cheese Patudi', 'cheeses patudi with amul cheese', 0x75706c6f6164732f63687061747564692e6a7067, 80, 'Deactive'),
(44, 40, 55, 'Cheese Khamani', 'dksdsa', 0x75706c6f6164732f6b68616d616e692e6a7067, 100, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `snackid` int(11) NOT NULL,
  `snackname` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `snackid`, `snackname`, `price`, `quantity`, `image`, `uname`) VALUES
(80, 32, 'Oil Locho', 50, 1, 'uploads/oillocho.jpg', 'niraj123'),
(92, 36, 'nylon khaman', 120, 3, 'uploads/chutnykhaman.jpg', 'dev039');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `status`) VALUES
(9, 'khaman', 'Active'),
(22, 'locho', 'Active'),
(32, 'patudi', 'Active'),
(33, 'samosa', 'Active'),
(34, 'nylon khaman', 'Active'),
(37, 'Idara', 'Active'),
(40, 'khamni', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `name` char(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(3, 'Dev Solanki', '777devsolanki123@gmail.com', 'Delicious Food\r\n'),
(4, 'Dev Solanki', '777devsolanki123@gmail.com', 'Delicious Food\r\n'),
(5, 'Niraj Oza', 'niraj@gmail.com', 'nice'),
(9, 'harsh modi', 'harsh@gmail.com', 'ijijfhds'),
(11, 'lalu', 'lalu@gmail.com', 'nice product byguygiuhkj');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryboyregister`
--

CREATE TABLE `deliveryboyregister` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `mobileno` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  `pincode` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveryboyregister`
--

INSERT INTO `deliveryboyregister` (`id`, `fname`, `uname`, `mobileno`, `email`, `dateofbirth`, `address`, `password`, `city`, `pincode`, `gender`) VALUES
(4, 'Nilesh Solanki', 'nilesh11', 8401042106, '777nileshsolanki123@gmail.com', '2023-11-10', 'Bangalore', '$2y$10$5Waf2o9szRRVGAHB27//CeFnV7kfQFQQV4xP8geC9kJ', 'surat', 0, 'Male'),
(5, 'Oza Niraj Bintukumar', 'niraj@gmail.com', 80010129029, 'ozaniraj19@gmail.com', '2023-11-01', '4/1318 begampura rangunwala ni sheri,surat', '$2y$10$QTM4T0mbxSZD/HToi7/8P.20AtxuifOZFT4zv2jXpbE', 'surat', 0, 'Male'),
(6, 'Oza Niraj Bintukumar', 'niraj@gmail.com', 80010129029, 'ozaniraj19@gmail.com', '2023-11-01', '4/1318 begampura rangunwala ni sheri,surat', '$2y$10$bEVlB3K/D2K3QQ/R8yph8u..znB/guct5HaekaCPMLL', 'surat', 0, 'Male'),
(11, 'dhruv', 'dhruv1', 80010129029, 'ozaniraj19@gmail.com', '2023-11-11', '4/1318 begampura rangunwala ni sheri,surat', '$2y$10$4RAXb0YQKv0XYlgtp.2fH.NdNudW4zq7Azgd06jlhMe', 'surat', 0, 'Male'),
(12, 'ds', 'adniraj84', 0, 'abc@gmail.com', '2023-12-07', 'sdsd', '$2y$10$M.XAsTV3rml2u73iVoe.WegKQSkZw0Wd/dQQAHELLzu', 'Surat', 0, 'Male'),
(13, 'mitul parekh', 'mitul123', 9578648561, 'mitul@gmail.com', '2023-12-02', 'begampura', '$2y$10$SC3A5Ehc5A4o4Bx0fs0B0ebdIk41h3dQMB57tmiybT9', 'Surat', 0, 'Male'),
(14, 'om rana', 'dfsdrer', 8563214587, 'om@gmail.com', '2008-01-09', 'dsdsd', 'Om@123', 'surat', 0, 'male'),
(15, 'ds', 'ojdtue', 9874563258, 'abc@gmail.com', '2000-02-02', 'sdsd', 'Dse@123', 'surat', 0, 'male'),
(16, 'oza ufdf', 'dsfdsfdg', 9876325412, 'ema@gmail.com', '2000-02-03', '4/1318 begampura rangunwala ni sheri,surat', 'Drs@123', 'surat', 395008, 'male'),
(17, 'Oza Niraj Bintukumar', 'adniraj844', 80010129029, 'ozaniraj19@gmail.com', '2023-12-22', '4/1318 begampura rangunwala ni sheri,surat', '', '', 0, ''),
(22, 'plpkjhb', 'ijunniol', 9879654856, 'aaa@gmail.com', '2003-02-03', 'ftftugi', 'Oza@1234', 'surat', 0, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `snackname` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `snackname`, `date`, `price`, `quantity`, `total`) VALUES
(11, 'Samosa', '2023-11-04 15:43:08', 100, 1, 0),
(12, 'Oil Locho', '2023-11-04 15:46:20', 50, 1, 0),
(13, 'Vagarela Khaman', '2023-11-04 15:47:38', 50, 2, 0),
(16, 'Oil Locho', '2023-11-04 15:51:15', 50, 6, 300),
(17, 'Oil Locho', '2023-11-04 15:53:38', 50, 6, 300),
(18, 'Oil Locho', '2023-11-04 15:55:09', 50, 6, 300),
(20, 'Vagarela Khaman', '2023-11-04 15:56:29', 50, 3, 150),
(21, 'nylon khaman', '2023-11-05 10:26:43', 120, 3, 360),
(22, 'Oil Locho', '2023-11-05 14:02:52', 50, 4, 200),
(23, 'nylon khaman', '2023-11-05 16:30:12', 120, 2, 240),
(24, 'nylon khaman', '2023-11-05 16:31:19', 120, 2, 240),
(25, 'nylon khaman', '2023-11-05 16:34:27', 120, 2, 240),
(26, 'nylon khaman', '2023-11-05 16:36:19', 120, 2, 240),
(27, 'nylon khaman', '2023-11-05 16:38:32', 120, 2, 240),
(28, 'nylon khaman', '2023-11-05 16:39:28', 120, 2, 240),
(29, 'Samosa', '2023-11-05 16:40:43', 60, 6, 360),
(30, 'Samosa', '2023-11-05 16:43:26', 60, 3, 180),
(31, 'Oil Locho', '2023-11-05 16:46:55', 50, 1, 50),
(32, 'Oil Locho', '2023-11-05 17:05:21', 50, 1, 50),
(33, 'Sado Locho ', '2023-11-05 17:09:24', 40, 1, 40),
(34, 'nylon khaman', '2023-11-05 17:11:59', 120, 2, 240),
(35, 'Vagarela Khaman', '2023-11-05 17:15:30', 50, 1, 50),
(36, 'Samosa', '2023-11-05 17:18:03', 60, 2, 120),
(37, 'Vagarela Khaman', '2023-11-05 17:27:57', 50, 6, 300),
(38, 'Vagarela Khaman', '2023-11-06 02:47:49', 50, 4, 200),
(39, 'Oil Locho', '2023-11-06 03:31:12', 50, 4, 200),
(40, 'Oil Locho', '2023-11-06 08:03:19', 50, 4, 200),
(41, 'Oil Locho', '2023-11-06 10:14:18', 50, 4, 200),
(42, 'nylon khaman', '2023-11-06 13:25:35', 120, 10, 1200),
(43, 'Oil Locho', '2023-11-06 13:30:37', 50, 10, 500),
(44, 'nylon khaman', '2023-11-06 13:38:43', 120, 1, 120),
(45, 'nylon khaman', '2023-11-07 15:59:54', 120, 1, 120),
(46, 'vivek', '2023-11-08 07:54:02', 120, 3, 360),
(47, 'Samosa', '2023-11-08 08:56:11', 60, 1, 60),
(48, 'Oil Locho', '2023-11-10 14:02:04', 50, 0, 0),
(49, 'Oil Locho', '2023-11-10 14:27:40', 50, 1, 50),
(52, 'nylon khaman', '2023-11-10 14:27:40', 120, 2, 240),
(55, 'vivek', '2023-11-10 14:29:27', 120, 5, 600),
(57, 'vivek', '2023-11-10 14:33:23', 120, 1, 120),
(58, 'Cheese Patudi', '2023-11-10 14:33:23', 80, 4, 320),
(60, 'Samosa', '2023-11-10 14:35:52', 60, 2, 120),
(65, 'Samosa', '2023-11-10 14:39:44', 60, 4, 240),
(66, 'Cheese Patudi', '2023-11-10 14:47:03', 80, 5, 400),
(67, 'nylon khaman', '2023-11-10 14:51:37', 120, 1, 120),
(68, 'nylon khaman', '2023-11-13 18:22:02', 120, 2, 240),
(69, 'nylon khaman', '2023-11-30 11:19:10', 120, 6, 720),
(70, 'Oil Locho', '2023-11-30 11:22:44', 50, 1, 50),
(71, 'Oil Locho', '2023-11-30 11:45:57', 50, 1, 50),
(72, 'Oil Locho', '2023-11-30 12:01:12', 50, 2, 100),
(73, 'Cheese Patudi', '2023-12-08 13:57:11', 80, 1, 80),
(74, 'nylon khaman', '2023-12-08 13:57:11', 120, 1, 120),
(75, 'Sado Locho ', '2023-12-08 13:57:11', 40, 2, 80),
(76, 'nylon khaman', '2023-12-09 09:11:29', 120, 2, 240),
(77, 'nylon khaman', '2023-12-09 15:11:56', 120, 3, 360);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_id` varchar(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `amount`, `payment_id`, `status`, `date`) VALUES
(7, '', 60, 'pay_MwJFftr', 'Success', '2023-11-04 12:40:42'),
(8, '', 60, 'pay_MwJijCj', 'Success', '2023-11-04 13:08:12'),
(9, 'niraj123', 60, 'pay_MwJvSif', 'Success', '2023-11-04 13:20:16'),
(10, 'dev039', 160, 'pay_MwJxFG9', 'Success', '2023-11-04 13:21:56'),
(11, 'dev039', 200, 'pay_MwKXAco', 'Success', '2023-11-04 13:55:57'),
(12, 'dev039', 500, 'pay_MwLrw78', 'Success', '2023-11-04 15:14:19'),
(13, 'dev039', 150, 'pay_MwPtjfG', 'Success', '2023-11-04 19:10:47'),
(14, 'dev039', 250, 'pay_MwPyesD', 'Success', '2023-11-04 19:15:29'),
(15, 'dev039', 250, 'pay_MwQ1Vjn', 'Success', '2023-11-04 19:18:08'),
(16, 'dev039', 350, 'pay_MwQ6UCi', 'Success', '2023-11-04 19:22:50'),
(17, 'dev039', 350, 'pay_MwQeLd2', 'Success', '2023-11-04 19:54:55'),
(18, 'dev039', 350, 'pay_MwQiBCT', 'Success', '2023-11-04 19:58:32'),
(19, 'dev039', 350, 'pay_MwQkJOL', 'Success', '2023-11-04 20:00:36'),
(20, 'dev039', 350, 'pay_MwQkqXM', 'Success', '2023-11-04 20:01:04'),
(21, 'dev039', 350, 'pay_MwQqnIK', 'Success', '2023-11-04 20:06:43'),
(22, 'dev039', 350, 'pay_MwQw77y', 'Success', '2023-11-04 20:11:44'),
(23, 'dev039', 350, 'pay_MwQxZ9x', 'Success', '2023-11-04 20:13:08'),
(24, 'dev039', 250, 'pay_MwR0zsa', 'Success', '2023-11-04 20:16:20'),
(25, 'dev039', 100, 'pay_MwR2MDC', 'Success', '2023-11-04 20:17:38'),
(26, 'dev039', 300, 'pay_MwR6BrK', 'Success', '2023-11-04 20:21:15'),
(27, 'dev039', 300, 'pay_MwR8hQy', 'Success', '2023-11-04 20:23:38'),
(28, 'dev039', 300, 'pay_MwRAIlD', 'Success', '2023-11-04 20:25:09'),
(29, 'dev039', 150, 'pay_MwRBhr8', 'Success', '2023-11-04 20:26:29'),
(30, 'harshmodi1', 360, 'pay_Mwk6SvM', 'Success', '2023-11-05 14:56:43'),
(31, 'dev039', 380, 'pay_Mwnmosg', 'Success', '2023-11-05 18:32:52'),
(32, 'niraj123', 240, 'pay_MwqIRA2', 'Success', '2023-11-05 21:00:12'),
(33, 'niraj123', 240, 'pay_MwqJb23', 'Success', '2023-11-05 21:01:19'),
(34, 'niraj123', 600, 'pay_MwqMvim', 'Success', '2023-11-05 21:04:27'),
(35, 'niraj123', 600, 'pay_MwqOua0', 'Success', '2023-11-05 21:06:19'),
(36, 'niraj123', 600, 'pay_MwqR8R0', 'Success', '2023-11-05 21:08:32'),
(37, 'niraj123', 600, 'pay_MwqSDxx', 'Success', '2023-11-05 21:09:28'),
(38, 'niraj123', 410, 'pay_MwqTXSz', 'Success', '2023-11-05 21:10:43'),
(39, 'dev039', 180, 'pay_MwqWPTs', 'Success', '2023-11-05 21:13:26'),
(40, 'tejal111', 50, 'pay_Mwqa4Ts', 'Success', '2023-11-05 21:16:55'),
(41, 'tejal111', 90, 'pay_MwqtYFR', 'Success', '2023-11-05 21:35:21'),
(42, 'tejal111', 40, 'pay_Mwqxl8e', 'Success', '2023-11-05 21:39:24'),
(43, 'tejal111', 240, 'pay_Mwr0Yqk', 'Success', '2023-11-05 21:41:59'),
(44, 'niraj123', 50, 'pay_Mwr4J7T', 'Success', '2023-11-05 21:45:30'),
(45, 'niraj123', 120, 'pay_Mwr6srv', 'Success', '2023-11-05 21:48:03'),
(46, 'niraj123', 300, 'pay_MwrHRdg', 'Success', '2023-11-05 21:57:57'),
(47, 'henil123', 200, 'pay_Mx0opfB', 'Success', '2023-11-06 07:17:49'),
(48, 'dev039', 200, 'pay_Mx1YbS6', 'Success', '2023-11-06 08:01:12'),
(49, 'dev039', 250, 'pay_Mx1au4e', 'Success', '2023-11-06 08:03:19'),
(50, 'dev039', 300, 'pay_Mx3pGqY', 'Success', '2023-11-06 10:14:18'),
(51, 'dev039', 1200, 'pay_Mx75JEz', 'Success', '2023-11-06 13:25:35'),
(52, 'adniraj84', 500, 'pay_Mx7AeFV', 'Success', '2023-11-06 13:30:37'),
(53, 'niraj123', 120, 'pay_Mx7JBd2', 'Success', '2023-11-06 13:38:43'),
(54, 'niraj123', 170, 'pay_MxYFSlL', 'Success', '2023-11-07 15:59:54'),
(55, 'dev039', 360, 'pay_MxoVIR3', 'Success', '2023-11-08 07:54:02'),
(56, 'dev039', 60, 'pay_MxpYsO8', 'Success', '2023-11-08 08:56:11'),
(57, 'niraj123', 170, 'pay_MyhqLRM', 'Success', '2023-11-10 14:02:04'),
(58, 'niraj123', 290, 'pay_MyiHNgS', 'Success', '2023-11-10 14:27:40'),
(59, 'niraj123', 290, 'pay_MyiHNgS', 'Success', '2023-11-10 14:27:40'),
(60, 'niraj123', 290, 'pay_MyiHNgS', 'Success', '2023-11-10 14:27:40'),
(61, 'niraj123', 290, 'pay_MyiHNgS', 'Success', '2023-11-10 14:27:40'),
(62, 'niraj123', 600, 'pay_MyiJGYd', 'Success', '2023-11-10 14:29:27'),
(63, 'niraj123', 600, 'pay_MyiJGYd', 'Success', '2023-11-10 14:29:27'),
(64, 'niraj123', 600, 'pay_MyiJGYd', 'Success', '2023-11-10 14:29:27'),
(65, 'niraj123', 440, 'pay_MyiNPTX', 'Success', '2023-11-10 14:33:23'),
(66, 'niraj123', 440, 'pay_MyiNPTX', 'Success', '2023-11-10 14:33:23'),
(67, 'niraj123', 440, 'pay_MyiNPTX', 'Success', '2023-11-10 14:33:23'),
(68, 'niraj123', 440, 'pay_MyiNPTX', 'Success', '2023-11-10 14:33:23'),
(69, 'niraj123', 120, 'pay_MyiPrJS', 'Success', '2023-11-10 14:35:52'),
(70, 'niraj123', 120, 'pay_MyiPrJS', 'Success', '2023-11-10 14:35:52'),
(71, 'niraj123', 120, 'pay_MyiPrJS', 'Success', '2023-11-10 14:35:52'),
(72, 'niraj123', 240, 'pay_MyiU9uY', 'Success', '2023-11-10 14:39:44'),
(73, 'niraj123', 240, 'pay_MyiU9uY', 'Success', '2023-11-10 14:39:44'),
(74, 'niraj123', 240, 'pay_MyiU9uY', 'Success', '2023-11-10 14:39:44'),
(75, 'niraj123', 400, 'pay_MyibqjI', 'Success', '2023-11-10 14:47:03'),
(76, 'niraj123', 120, 'pay_Myige7N', 'Success', '2023-11-10 14:51:37'),
(77, 'niraj123', 240, 'pay_MzxsI9R', 'Success', '2023-11-13 18:22:02'),
(78, 'niraj123', 720, 'pay_N6ZkdPx', 'Success', '2023-11-30 11:19:10'),
(79, 'niraj123', 50, 'pay_N6ZoSVs', 'Success', '2023-11-30 11:22:44'),
(80, 'niraj123', 50, 'pay_N6aCxaL', 'Success', '2023-11-30 11:45:57'),
(81, 'niraj123', 100, 'pay_N6aT5PJ', 'Success', '2023-11-30 12:01:12'),
(82, 'dev039', 280, 'pay_N9miYTT', 'Success', '2023-12-08 13:57:11'),
(83, 'dev039', 280, 'pay_N9miYTT', 'Success', '2023-12-08 13:57:11'),
(84, 'dev039', 280, 'pay_N9miYTT', 'Success', '2023-12-08 13:57:11'),
(85, 'harshmodi1', 240, 'pay_NA6NqzY', 'Success', '2023-12-09 09:11:29'),
(86, 'dev039', 360, 'pay_NACWaxV', 'Success', '2023-12-09 15:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sid`, `cid`, `sname`, `status`) VALUES
(34, 22, 'sado-locho', 'Active'),
(41, 22, 'butter-locho', 'Active'),
(46, 33, 'fried samosa', 'Active'),
(47, 34, 'nylon khaman', 'Deactive'),
(48, 32, 'cheese patudi', 'Active'),
(54, 32, 'Sadi patudi', 'Deactive'),
(55, 40, 'cheese', 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `mobileno` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dateofbirth` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `token` varchar(100) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `uname`, `mobileno`, `email`, `dateofbirth`, `address`, `password`, `token`, `city`, `pincode`, `gender`) VALUES
(1, 'Dev Solanki', 'devxx77', 9586770982, '777devsolanki123@gmail.com', '2002-11-16', '101,Subhplaza,surat', '$2y$10$u36QF3xxWWS0aNZs.x9Wo.LZgIfiaPmhmYejxIDD9K2', '018b56beb1c6100ba8afc57128f72ed1', NULL, NULL, NULL),
(2, 'Helly Metha', 'helly039', 9586770986, 'helly@gmail.com', '2002-11-16', '202 - mumbai', '$2y$10$2Pqgk.h1Y91MBvplFvB4u.szPaNACzJfBeHuNpeX/0Z', '', NULL, NULL, NULL),
(3, 'Nilesh Solanki', 'nilesh77', 8401042102, '777nileshsolanki123@gmail.com', '1972-11-07', '101,Subhplaza,surat', '412134f251683973df3dcdf8da754d3e', '', NULL, NULL, NULL),
(4, 'Bhavna Solanki', 'bhavna123', 9974456789, 'bhavna@gmail.com', '1977-12-22', '101,Subhplaza,surat', 'Bhavna@123', '', NULL, NULL, NULL),
(5, 'Oza Niraj Bintukumar', 'adniraj84', 8000129029, 'ozaniraj19@gmail.com', '2020-01-01', '4/1318 begampura rangunwala ni sheri,surat', 'Niraj@123', '11bb8eeb0f9874168d5d05d0f09bc10e', NULL, NULL, NULL),
(6, 'Dev solanki', 'dev039', 8965789654, '21bmiit039@gmail.com', '2020-01-02', 'london', 'Dev@123', '3aaf2191447553ed015f37a4967de81a', NULL, NULL, NULL),
(7, 'Harsh Modi', 'harshmodi1', 9428590333, '21bmiit090@gmail.com', '2003-01-04', 'swastik society', 'H@123', '110ab5b3c6f5ce28ea12587b2c9dd105', NULL, NULL, NULL),
(8, 'Harsh Modi', 'harshmodi90', 9428590337, '21bmiit0090@gmail.com', '2002-11-12', 'swastik society', 'Modi@123', '', 'surat', 395003, 'male'),
(9, 'kajal123', 'kajal123', 8460801508, 'kajal.patil@utu.ac.in', '2023-09-05', 'bardoli', 'Kajal@12345', '', 'surat', 395007, 'female'),
(10, 'Oza Niraj Bintukumar', 'niraj123', 8000129029, 'ozaniraj19@gmail.com', NULL, NULL, 'Niraj@123', '11bb8eeb0f9874168d5d05d0f09bc10e', NULL, NULL, NULL),
(11, 'Tejal oza', 'tejal111', 6589786548, 'ozaniraj19@gmail.com', '2023-11-03', '4/1318 begampura rangunwala ni sheri,surat', 'Tejal@123', '11bb8eeb0f9874168d5d05d0f09bc10e', 'surat', 395010, 'female'),
(12, 'henil oza', 'henil123', 9874562158, 'henil@gmail.com', '2023-11-01', 'london', 'Henil@123', '', 'surat', 0, 'male'),
(13, 'om rana', 'om123', 8320114031, 'om@gmail.com', '2019-02-07', 'salabat pura', 'Om@123', '', 'surat', 395004, 'male'),
(14, 'mitul parekh', 'mitul123', 9578648561, 'mitul@gmail.com', '2003-01-09', 'dfsdf', 'Mitul@123', '', 'surat', 0, 'male'),
(15, 'priyanshu oza', 'pri123', 7896541478, 'priyanshuoza50@gmail.com', '1993-01-07', 'begampura', 'Pri@123', '', 'surat', 395003, 'male'),
(16, 'ds', 'oza123', 9856325412, 'abc@gmail.com', '2011-01-06', 'sdsd', 'Oza@123', '', 'surat', 0, 'male'),
(17, 'harshil pan', 'harshil123', 8654127896, 'harshilpan@gmail.com', '2000-02-02', 'adajan gam', 'Harshil@12', '', 'surat', 395006, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `user_snacks`
--

CREATE TABLE `user_snacks` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `snack_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_snacks`
--

INSERT INTO `user_snacks` (`id`, `user_id`, `snack_id`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addsnack`
--
ALTER TABLE `addsnack`
  ADD PRIMARY KEY (`snackid`),
  ADD KEY `categoryid` (`categoryid`),
  ADD KEY `subcategoryid` (`subcategoryid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cname` (`cname`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveryboyregister`
--
ALTER TABLE `deliveryboyregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `sname` (`sname`),
  ADD KEY `subcategory_ibfk_1` (`cid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_snacks`
--
ALTER TABLE `user_snacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `snack_id` (`snack_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addsnack`
--
ALTER TABLE `addsnack`
  MODIFY `snackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `deliveryboyregister`
--
ALTER TABLE `deliveryboyregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_snacks`
--
ALTER TABLE `user_snacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addsnack`
--
ALTER TABLE `addsnack`
  ADD CONSTRAINT `addsnack_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`cid`),
  ADD CONSTRAINT `addsnack_ibfk_2` FOREIGN KEY (`subcategoryid`) REFERENCES `subcategory` (`sid`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`);

--
-- Constraints for table `user_snacks`
--
ALTER TABLE `user_snacks`
  ADD CONSTRAINT `user_snacks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_snacks_ibfk_2` FOREIGN KEY (`snack_id`) REFERENCES `addsnack` (`snackid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
