-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2014 at 05:06 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `99yrs`
--
CREATE DATABASE IF NOT EXISTS `99yrs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `99yrs`;

-- --------------------------------------------------------

--
-- Table structure for table `99yrs_client`
--

CREATE TABLE IF NOT EXISTS `99yrs_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(512) DEFAULT NULL,
  `buisness` varchar(512) DEFAULT NULL,
  `company_name` varchar(512) DEFAULT NULL,
  `location` varchar(512) DEFAULT NULL,
  `email` mediumtext,
  `phone` varchar(512) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1031 ;

--
-- Dumping data for table `99yrs_client`
--

INSERT INTO `99yrs_client` (`id`, `client_name`, `buisness`, `company_name`, `location`, `email`, `phone`, `date_created`) VALUES
(1001, 'Niraj Tekrjwal', 'Interiors & Flowers', 'Four Walls', 'Mumbai', 'niraj.fourwalls@gmail.com', '9820608761', '0000-00-00 00:00:00'),
(1002, 'Sonia Bajaj', 'Divine Products + Handicraft Products', 'Divino Arts', 'Mumbai', 'sonia.handicraft@gmail.com', '9969089537', '0000-00-00 00:00:00'),
(1003, 'Sharad Alwe', 'Sulptures', 'The Artist', 'Mumbai', 'sharadalwe@theartist.bz, thearteffects@gmail.com', '9833000022', '0000-00-00 00:00:00'),
(1004, 'Rafiq Merchant', 'Leather Fashion Accessories', 'Olive Gifts', 'Mumbai', 'sales@olivegifts.in', '9820831271', '0000-00-00 00:00:00'),
(1005, 'Pawan Jhajharia', 'Imitation Jewellery', 'Agrawal Store', 'Mumbai', 'pawansjhajharia@gmail.com', '9820827717', '0000-00-00 00:00:00'),
(1006, 'Abid Ali Khan', 'Mordern Space Saving Products', 'Prab Space Savings', 'Mumbai', 'abid@prab.co.in', '9930066470', '0000-00-00 00:00:00'),
(1007, 'Ravindra Malvankar', 'Diamond Jewellry', 'Shashi', 'Mumbai', 'ravindra.malvankar@edabba.com', '9892568226', '0000-00-00 00:00:00'),
(1008, 'Kavi Shahani', 'Fashion Accessories', 'Get Wrapped', 'Mumbai', 'kavi@indiaconnection.co.in', '9819490635', '0000-00-00 00:00:00'),
(1009, 'Devyani', 'Steal Consumer Produc', 'Lavisha Corporation', 'Mumbai', 'devi@motwani.co.in', '', '0000-00-00 00:00:00'),
(1010, 'Sanjay', 'IT & Acc', 'Pacific Infotech', 'Mumbai', 'pacificinfotechindia@gmail.com', '9320288155', '0000-00-00 00:00:00'),
(1011, '', 'Consumer Electronics', 'Ezone', 'Mumbai', '', '', '0000-00-00 00:00:00'),
(1012, 'Vishal Mewani', 'Consumer Electronics', 'Kohinoor', 'Mumbai', 'vm@kohinoortv.com', '9930099000', '0000-00-00 00:00:00'),
(1013, 'Rajeev Singh', 'IT & Acc', 'Next USB', 'Mumbai', 'rajeev@nextusb.com', '9920070584', '0000-00-00 00:00:00'),
(1014, '', 'Cleaning Products', 'Nano', 'Mumbai', '', '', '0000-00-00 00:00:00'),
(1015, 'Praful Cheeda', 'Lingerie', 'Lovable', 'Mumbai', 'praful111@gmail.com', '9892564741', '0000-00-00 00:00:00'),
(1016, 'Vijay', 'Digital camera', 'Realtime IT Concepts', 'Mumbai', 'vijay@itconceptindia.com', '9892564741', '0000-00-00 00:00:00'),
(1017, 'Mitali', 'Pens & Stationery', 'Anchor', 'Mumbai', 'export@myanchor.in ', '9819630549', '0000-00-00 00:00:00'),
(1018, 'Neeta', 'Gadgets', 'Gizmobaba', 'Mumbai', 'ugizmobazaar@gmail.com', '9821184250', '0000-00-00 00:00:00'),
(1019, '', 'Office & Home D?cor', 'Tagtual Technologies', 'Bangalore', 'sharjeel.ahmed@tagtual.com', '', '0000-00-00 00:00:00'),
(1020, 'Bharat Dhaka', 'Sarees, Dress Materials, Leather Wallets, Artificial Jewellery', 'Araham Designers', 'Mysore', 'arahamdesigners@gmail.com', '9741166800', '0000-00-00 00:00:00'),
(1021, 'Nikhil Pokale', 'Consumer  Products', 'Unikthelals', 'Pune', 'sales@unikthelals.com', '9822870097', '0000-00-00 00:00:00'),
(1022, 'Bobby', 'Paintings', 'Mouth & Foot Painting Artists', 'Mumbai', '', '9821219431', '0000-00-00 00:00:00'),
(1023, '', 'Home Furnishing', 'Stitch Art', 'Mumbai', '', '9323908118', '0000-00-00 00:00:00'),
(1024, 'Ramesh Bhai', ' ', 'lacuzini', 'Mumbai', 'crystalkitchenware@yahoo.com', '9322889600', '0000-00-00 00:00:00'),
(1025, '', '', 'Buxsa', 'Mumbai', 'vibhav@buxsa.com; purvi@buxsa.com; ketan@ecreativeindia.com; manas@buxsa.com', '', '0000-00-00 00:00:00'),
(1026, '', 'Fashion Accessories', 'Arena Fashions', 'Mulund', 'sales@fashionarena.in; kt@fashionarena.in; namrata@fashionarena.in', '9022703003 - namrata', '0000-00-00 00:00:00'),
(1027, 'Leena', '', 'Foresight Vision Care Company Pvt. Ltd', '', 'Leena Pawar <leena.pawar@foresightopticals.in>,prashant Chauhan <prashant.chauhan@foresightopticals.in>', '', '0000-00-00 00:00:00'),
(1028, '', '', 'Salasar Lifestyle Pvt Ltd.', 'Mumbai', '', '', '0000-00-00 00:00:00'),
(1029, '', '', 'Zedds', '', 'zeddsattire@gmail.com; lekhisunil@gmail.com; zeddsattire@gmail.com', '', '0000-00-00 00:00:00'),
(1030, 'Madhuri', '', 'Trixie', '', '', '2227831123', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `99yrs_task`
--

CREATE TABLE IF NOT EXISTS `99yrs_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `99yrs_task`
--

INSERT INTO `99yrs_task` (`id`, `name`) VALUES
(1, 'Cheque Received'),
(2, 'chq. PND.'),
(3, 'No of chq DPST.'),
(4, 'Value of CHQ. DPST.'),
(5, 'Total Sales'),
(6, 'commission %'),
(7, 'commission Value'),
(8, 'Comm. Chq. RCD.'),
(9, 'Type of panel'),
(10, 'Training material send'),
(11, 'Personal trainging given'),
(12, 'Call Training given'),
(13, 'Check panel'),
(14, 'Account Manager'),
(15, 'Category'),
(16, 'Month'),
(17, 'Mode'),
(18, 'Pkg'),
(19, 'Date of Join'),
(20, 'No of Mp''s'),
(21, 'Live Mp''s'),
(22, 'Products'),
(23, 'Summary'),
(24, 'Amazon'),
(25, 'ebay(SU)'),
(26, 'eBay'),
(27, 'Craftsvilla'),
(28, 'Snapdeal'),
(29, 'Dhamaal'),
(30, 'Jabong'),
(31, 'Edabba'),
(32, 'Flipkart'),
(33, 'Groupon'),
(34, 'Indiebazaar'),
(35, 'HS 18'),
(36, 'Indiatimes shopping'),
(37, 'Infibeam'),
(38, 'Lady Blush'),
(39, 'Myntra'),
(40, 'Naaptol'),
(41, 'Olx'),
(42, 'PepperFry'),
(43, 'Quikr'),
(44, 'Rediff'),
(45, 'Shopclues'),
(46, 'Tradus'),
(47, 'eBay.com'),
(48, 'Final Remark');

-- --------------------------------------------------------

--
-- Table structure for table `99yrs_task_assign`
--

CREATE TABLE IF NOT EXISTS `99yrs_task_assign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `use_id` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `task_value` mediumtext,
  `admin_comment` mediumtext,
  `expected_closing_date` datetime DEFAULT '0000-00-00 00:00:00',
  `target_date` datetime DEFAULT '0000-00-00 00:00:00',
  `closing_date` datetime DEFAULT '0000-00-00 00:00:00',
  `date_created` datetime DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(1) DEFAULT NULL COMMENT '0=inactive,1=pending,2=coplete by user,3=close',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `99yrs_task_assign`
--

INSERT INTO `99yrs_task_assign` (`id`, `client_id`, `use_id`, `task_id`, `task_value`, `admin_comment`, `expected_closing_date`, `target_date`, `closing_date`, `date_created`, `status`) VALUES
(1, NULL, 102, 1, '7', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 3),
(2, NULL, 102, 2, '0', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(3, NULL, 102, 3, 'Fill', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(4, NULL, 102, 4, 'Fill', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(5, NULL, 116, 5, 'Fill', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(6, NULL, 102, 6, '2%', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(7, NULL, 102, 7, 'Fill', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(8, NULL, 102, 8, 'Fill', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(9, NULL, 105, 9, 'Basic', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(10, NULL, 105, 10, 'Fill', 'Check & Confirm', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(11, NULL, 110, 11, 'Fill', 'Check & Confirm', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(12, NULL, 110, 12, 'Fill', 'Check & Confirm', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(13, NULL, 105, 13, 'Fill', 'Daily', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(14, NULL, 110, 14, 'Nilofer', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(15, NULL, 109, 15, 'Home', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(16, NULL, 102, 16, 'DEC END', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(17, NULL, 102, 17, 'Advance', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(18, NULL, 102, 18, '4500', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(19, NULL, 109, 20, '10', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(20, NULL, 109, 21, '0', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(21, NULL, 109, 22, '8', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(22, NULL, 116, 23, 'Account is on hold as new location of dispatch is not confirm. And PIS is not received.', 'Mehul', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 3),
(23, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(24, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(25, NULL, 109, NULL, 'Done', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(26, NULL, 106, NULL, 'PIS NOT RECEIVED', 'Dmail', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:53', 1),
(27, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:53', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(28, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(29, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(30, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(31, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(32, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(33, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(34, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(35, NULL, 106, NULL, 'Agg. sent to you but signed Agg. is awaited.', 'Dmail-Mehul', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(36, NULL, 106, NULL, 'PIS NOT RECEIVED', 'dmail', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(37, NULL, 106, NULL, 'Sign up in Process.', 'Dmail-Mehul', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(38, NULL, 109, NULL, 'Sign up pending', '', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(39, NULL, 106, NULL, 'Agg. sent to you but signed Agg. is awaited.', 'Dmail-Mehul', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(40, NULL, 109, NULL, 'Sign up pending', '', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(41, NULL, 106, NULL, 'Sign up is Done. Revised PIS Not Rcd.', 'Dmail-Mehul', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(42, NULL, 109, NULL, 'Sign up pending', '', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(43, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(44, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(45, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(46, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:54', 1),
(47, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:54', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(48, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(49, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(50, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(51, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(52, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(53, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(54, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(55, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(56, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(57, NULL, 106, NULL, 'Sign up is Done. Revised PIS Not Rcd.', 'Dmail-Mehul', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(58, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(59, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(60, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(61, NULL, 106, NULL, 'Agg. sent to you but signed Agg. is awaited.', 'Dmail-Mehul', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(62, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(63, NULL, 106, NULL, 'Sign up is Done. Revised PIS Not Rcd.', 'Dmail-Mehul', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(64, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(65, NULL, 106, NULL, 'Sign up is Done. Revised PIS Not Rcd.', 'Dmail-Mehul', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(66, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:55', 1),
(67, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:55', '0000-00-00 00:00:00', '2014-03-11 12:17:56', 1),
(68, NULL, 117, NULL, 'NA', '', '0000-00-00 00:00:00', '2014-03-11 12:17:56', '0000-00-00 00:00:00', '2014-03-11 12:17:56', 1),
(69, NULL, 112, 48, 'Mehul to confirm who will supply stocks', '', '0000-00-00 00:00:00', '2014-03-11 12:17:56', '0000-00-00 00:00:00', '2014-03-11 12:17:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `99yrs_user`
--

CREATE TABLE IF NOT EXISTS `99yrs_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(512) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `mobile` int(10) DEFAULT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(512) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=122 ;

--
-- Dumping data for table `99yrs_user`
--

INSERT INTO `99yrs_user` (`id`, `full_name`, `parent_id`, `user_email`, `mobile`, `user_name`, `password`, `created_date`, `updated_date`) VALUES
(101, 'Amol Patil', 116, 'amol.patil@99yrs.com', 0, 'amol.patil@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Aarti Patil', 116, 'aarti.patil@99yrs.com', 0, 'aarti.patil@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Sachin Wadam', 116, 'sachin.wadam@99yrs.com', 0, 'sachin.wadam@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'Anthony Jewelson', 116, 'anthony.jewelson@99yrs.com', 0, 'anthony.jewelson@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Sajjan Dhobale', 116, 'sajjan.dhobale@gmail.com', 0, 'sajjan.dhobale@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Geeta Magar', 116, 'geeta.magar@99yrs.com', 0, 'geeta.magar@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Priya Amberkar', 116, 'priya.amberkar@99yrs.com', 0, 'priya.amberkar@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Sushma Mourya', 116, 'sushma.mourya@99yrs.com', 0, 'sushma.mourya@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Nilofer Shaikh', 116, 'nilofer.shaikh@99yrs.com', 0, 'nilofer.shaikh@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Hemangi Patil', 0, 'hemangi@99yrs.com', 0, 'hemangi@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Rohit Bajaj', 0, 'rohit@99yrs.com', 0, 'rohit@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'Mehul Andani', 116, 'mehul@99yrs.com', 0, 'mehul@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Priyanka Bhuwad', 116, 'priyanka.bhuvad@99yrs.com', 0, 'priyanka.bhuvad@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'Bashid Shaikh', 116, 'bashid.shaikh@99yrs.com', 0, 'bashid.shaikh@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'Sumeet Shinde', 116, 'sumeet.shinde@99yrs.com', 0, 'sumeet.shinde@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'Dhanraj Chaugule', 0, 'dhanraj.chaugule@99yrs.com', 0, 'dhanraj.chaugule@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'Anand Katke', 116, 'katke56@gmail.com', 0, 'katke56@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'Mamta Patil', 116, '', 0, '', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'Vijay', 0, 'vijay@99yrs.com', 0, 'vijay@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'Pratik Chheda', 116, 'pratik.chheda@99yrs.com', 0, 'pratik.chheda@99yrs.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'vijay', 0, 'vijay@99yrs.com', 2147483647, 'vijay', 'e10adc3949ba59abbe56e057f20f883e', '2014-03-03 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `99yrs_user_comment`
--

CREATE TABLE IF NOT EXISTS `99yrs_user_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_assign_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_comment` mediumtext NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `99yrs_user_comment`
--

INSERT INTO `99yrs_user_comment` (`id`, `task_assign_id`, `user_id`, `user_comment`, `date_created`) VALUES
(4, 22, 117, 'adsadfdsfsd', '2014-03-11 13:05:06'),
(8, 22, 117, 'undefined', '2014-03-11 14:07:19'),
(9, 22, 117, 'gfhfhgf', '2014-03-11 14:25:41'),
(10, 22, 117, 'added test data', '2014-03-11 14:30:10'),
(11, 22, 117, 'by vijay', '2014-03-11 14:45:17'),
(12, 22, 117, 'by vijay 1', '2014-03-11 14:47:46'),
(13, 22, 117, 'by vijay 2', '2014-03-11 14:47:59'),
(14, 22, 117, 'by vijay 2', '2014-03-11 14:47:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
