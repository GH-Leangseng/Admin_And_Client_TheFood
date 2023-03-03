-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2023 at 04:33 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `comment_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `comment`, `comment_id`) VALUES
(1, 'ខ្ញំុចូលចិត្តម្ហូបបែបនេះណាស់', 6),
(2, 'ខ្ញំុចូលចិត្តម្ហូបបែបនេះណាស់', 6),
(3, 'ខ្ញំុចូលចិត្តម្ហូបបែបនេះណាស់', 6),
(4, '123123', 6),
(5, '123', 21),
(6, '123', 21),
(7, 'sdfsdfsdf', 20),
(8, 'kljklj', 10),
(9, '123123', 16),
(10, 'សមគ្នាណាស់ពួកម៉ាក', 16),
(11, 'ណាគេស្អាតមេះ', 19),
(12, 'ស្អាតណាស់អាពួកម៉ាក', 15),
(13, 'អង្គុយសង្ហាយ៉ាងនេះប្រូមានសង្សានៅ', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
