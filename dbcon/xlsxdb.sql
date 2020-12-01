-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 12:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xlsxdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `asin`
--

CREATE TABLE `asin` (
  `id` int(11) NOT NULL,
  `asin_id` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `storefront_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asin`
--

INSERT INTO `asin` (`id`, `asin_id`, `price`, `storefront_id`) VALUES
(1, 'B071KNFR6R\r\n', 52.83, 1),
(2, 'B07H7QYLMW\r\n', 33.99, 1),
(3, 'B000CRFJ3E\r\n', 43.99, 1),
(4, 'B07TVGYP4F\r\n', 53.29, 1),
(5, 'B000C2WEFU\r\n', 31.99, 1),
(6, 'B004UEC3NO\r\n', 74.64, 1),
(7, 'B07GTCW3LD\r\n', 30.99, 1),
(8, 'B00I4MAROK\r\n', 36.45, 1),
(9, 'B07SRS8LW2\r\n', 69.99, 1),
(10, 'B083ZSNBX4\r\n', 88.99, 1),
(11, 'B01MU2VJO4\r\n', 55.99, 1),
(12, 'B07MMY9KTZ\r\n', 45.99, 1),
(13, 'B07CP5DGNV\r\n', 207.2, 1),
(14, 'B07PWZFP6F\r\n', 37.5, 1),
(15, 'B08395P6VJ\r\n', 74.94, 1),
(16, 'B083VSX6QG\r\n', 43.38, 1),
(17, 'B01M9C9NOH\r\n', 236.22, 1),
(18, 'B00449QK98\r\n', 52.99, 1),
(19, 'B07PMHK38X\r\n', 94.21, 1),
(20, 'B000C2SJDG\r\n', 66.99, 1),
(21, 'B07N31LXL6\r\n', 68.28, 1),
(22, 'B07P8YSJ3D\r\n', 42.16, 1),
(23, 'B002R863WW\r\n', 72.99, 1),
(24, 'B000C2SC10\r\n', 41.99, 1),
(25, 'B07VNKSZ5G\r\n', 45.99, 1),
(26, 'B073XBZY35\r\n', 47.99, 1),
(27, 'B000CHMLDU\r\n', 31.99, 1),
(28, 'B07KGNHDCJ\r\n', 166.09, 1),
(29, 'B001C9E504\r\n', 69.99, 1),
(30, 'B002R87EXY\r\n', 42.99, 1),
(31, 'B07RKTMWD7\r\n', 49.29, 1),
(32, 'B07SR3BRWQ\r\n', 70.24, 1),
(33, 'B07M7WHNSV\r\n', 52.99, 1),
(34, 'B07D7MR2T7\r\n', 51.18, 1),
(35, 'B07VV7K3T9\r\n', 50.99, 1),
(36, 'B076H1BBWZ\r\n', 84.26, 1),
(37, 'B073X6ZZQL\r\n', 46.99, 1),
(38, 'B07F2Q6VXT\r\n', 25.32, 1),
(39, 'B00199L320\r\n', 70.99, 1),
(40, 'B07B9TDW7M\r\n', 50.3, 1),
(41, 'B087LV1CK9\r\n', 94.54, 1),
(42, 'B07PFY6HRY\r\n', 64.99, 1),
(43, 'B01NBC4AN9\r\n', 43.99, 1),
(44, 'B07GGG15R9\r\n', 93.83, 1),
(45, 'B07SVXSF78\r\n', 103.17, 1),
(46, 'B00170OE5E\r\n', 51.99, 1),
(47, 'B07MQ7HXL6\r\n', 62.99, 1),
(48, 'B07T366PL5\r\n', 52.99, 1),
(49, 'B000C2S85K\r\n', 37.99, 1),
(50, 'B07GB1S17W\r\n', 55.99, 1),
(51, 'B001GES7EK\r\n', 61.99, 1),
(52, 'B001C97W5O\r\n', 35.99, 1),
(53, 'B000CHKIS0\r\n', 34.99, 1),
(54, 'B07T29HV4L\r\n', 37.54, 1),
(55, 'B001QU97IY\r\n', 51.3, 1),
(56, 'B01GUOQLK2\r\n', 243.9, 1),
(57, 'B000C2SBT8\r\n', 33.99, 1),
(58, 'B081RCZ71F\r\n', 43.99, 1),
(59, 'B07KCHH45Z\r\n', 38.99, 1),
(60, 'B07SXR7FCK\r\n', 43.99, 1),
(61, 'B07D13PGK6\r\n', 50.99, 1),
(62, 'B076H2QW1N\r\n', 105.21, 1),
(63, 'B0096W6E12\r\n', 60.99, 1),
(64, 'B000C2UDKS\r\n', 47.6, 1),
(65, 'B07CZNZGND\r\n', 35.99, 1),
(66, 'B014QWKF3O\r\n', 149.14, 1),
(67, 'B07Q8QM1HB\r\n', 50.19, 1),
(68, 'B07RZNV1XR\r\n', 101.99, 1),
(69, 'B00KDNUL44\r\n', 50.99, 1),
(70, 'B083BPQVBJ\r\n', 62.54, 1),
(71, 'B000C2Y21E\r\n', 38.99, 1),
(72, 'B07KYNNMKH\r\n', 63.99, 1),
(73, 'B000C2UKP6\r\n', 60.99, 1),
(74, 'B006VE5ID8\r\n', 35.96, 1),
(75, 'B07564DCR5\r\n', 729.49, 1),
(76, 'B074KCHM58\r\n', 184.99, 1),
(77, 'B07GY1DPPL\r\n', 176.48, 1),
(78, 'B000BOAB7W\r\n', 59.99, 1),
(79, 'B081RHLN4Q\r\n', 72.35, 1),
(80, 'B0873BCLYV\r\n', 78.5, 1),
(81, 'B07RS1VLDQ\r\n', 123.99, 1),
(82, 'B0856337JZ\r\n', 62.99, 1),
(83, 'B012MBG48Q\r\n', 34.99, 1),
(84, 'B07T7MZ7CM\r\n', 54.99, 1);

-- --------------------------------------------------------

--
-- Table structure for table `storefront`
--

CREATE TABLE `storefront` (
  `id` int(11) NOT NULL,
  `storefront_name` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storefront`
--

INSERT INTO `storefront` (`id`, `storefront_name`, `day`) VALUES
(1, 'Belts, Hoses & Pulleys', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asin`
--
ALTER TABLE `asin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storefront`
--
ALTER TABLE `storefront`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asin`
--
ALTER TABLE `asin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `storefront`
--
ALTER TABLE `storefront`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
