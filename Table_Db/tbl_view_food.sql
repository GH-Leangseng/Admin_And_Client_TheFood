-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2023 at 04:34 AM
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
-- Table structure for table `tbl_view_food`
--

DROP TABLE IF EXISTS `tbl_view_food`;
CREATE TABLE IF NOT EXISTS `tbl_view_food` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `urlyoutube` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `view` int NOT NULL,
  `type_food` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_view_food`
--

INSERT INTO `tbl_view_food` (`id`, `title`, `category`, `urlyoutube`, `view`, `type_food`, `img`) VALUES
(3, 'ពងទា1', 'ស្ក1', 'www.youtube.come1', 3, 'ម្ហូបស្លរ', '11106-photo_2019-12-29_08-46-25.jpg'),
(5, 'ពងទា1', 'ស្ក1', 'www.youtube.come1', 0, 'ម្ហូបស្លរ', '11106-photo_2019-12-29_08-46-25.jpg'),
(6, 'ពងទា1', 'ស្ក1', 'www.youtube.come1', 1, 'ម្ហូបស្លរ', '11106-photo_2019-12-29_08-46-25.jpg'),
(7, 'ពងទា1', 'ស្ក1', 'www.youtube.come1', 0, 'ម្ហូបស្លរ', '11106-photo_2019-12-29_08-46-25.jpg'),
(8, 'ពងទា1', 'ស្ក1', 'www.youtube.come1', 1, 'ម្ហូបស្លរ', '11106-photo_2019-12-29_08-46-25.jpg'),
(9, 'ពងទា1', 'ស្ក1', 'www.youtube.come1', 1, 'ម្ហូបស្លរ', '11106-photo_2019-12-29_08-46-25.jpg'),
(10, 'ពងទា1', 'ស្ក1', 'www.youtube.come1', 4, 'ម្ហូបស្លរ', '11106-photo_2019-12-29_08-46-25.jpg'),
(11, 'ពងទា1', 'ស្ក1', 'www.youtube.come1', 4, 'ម្ហូបឆា', '11106-photo_2019-12-29_08-46-25.jpg'),
(12, 'ពងទា1', 'ស្ក1', 'www.youtube.come1', 0, 'ម្ហូបស្លរ', '11106-photo_2019-12-29_08-46-25.jpg'),
(13, 'ពងទា1', 'ស្ក1', 'www.youtube.come1', 0, 'ម្ហូបឆា', '11106-photo_2019-12-29_08-46-25.jpg'),
(14, 'ពងទា1', 'ស្ក1', 'www.youtube.come1', 5, 'ម្ហូបចៀន', '11106-photo_2019-12-29_08-46-25.jpg'),
(15, 'ពងទា1', 'ស្ក1', 'www.youtube.come1', 3, 'ម្ហូបពិសេស', '7971-photo_2019-12-29_08-48-52.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
