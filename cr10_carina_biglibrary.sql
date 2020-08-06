-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 04:30 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_carina_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_carina_biglibrary` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cr10_carina_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `surname` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `name`, `surname`) VALUES
(10, 'Linda', 'Groß'),
(11, 'Konstanze', 'Berg'),
(15, 'Hugo', 'Pichler'),
(23, 'Oscar', 'Wagner'),
(51, 'Christoph', 'Schwarz'),
(52, 'Olga', 'Muti'),
(66, 'Grethe', 'Magnus'),
(72, 'Gerti', 'Baum'),
(90, 'Norbert', 'Bern'),
(97, 'Bruno', 'Müller'),
(98, 'Agathe', 'Großfurthner');

-- --------------------------------------------------------

--
-- Table structure for table `media_item`
--

CREATE TABLE `media_item` (
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `content_description` text DEFAULT NULL,
  `fk_publisher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `isbn` bigint(13) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `type` enum('book','CD','DVD') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media_item`
--

INSERT INTO `media_item` (`author_id`, `content_description`, `fk_publisher_id`, `image`, `isbn`, `title`, `type`) VALUES
(66, 'Thai recipes', 253, 'https://images.pexels.com/photos/1234535/pexels-photo-1234535.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 1115556669987, 'Thai Cuisine', 'book'),
(72, 'very refreshing and new', 253, 'https://images.pexels.com/photos/1032650/pexels-photo-1032650.jpeg?auto=compress&cs=tinysrgb&h=650&w=940', 1317651275157, 'Something New', 'book'),
(11, 'spannendes Buch', 118, 'https://images.pexels.com/photos/923681/pexels-photo-923681.jpeg?auto=compress&cs=tinysrgb&h=650&w=940', 1824716532827, 'Suspense', 'DVD'),
(66, 'very relaxing music', 219, 'https://images.pexels.com/photos/1230665/pexels-photo-1230665.jpeg?auto=compress&cs=tinysrgb&h=650&w=940', 1937679808262, 'Chill Vol.5', 'CD'),
(11, 'fantastic book', 219, 'https://images.pexels.com/photos/326055/pexels-photo-326055.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940', 3694572865213, 'Fantasy Rush', 'book'),
(98, 'Great summer vibes', 398, 'https://images.pexels.com/photos/3355788/pexels-photo-3355788.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 6058670115884, 'Summer Music Vol. 10', 'CD'),
(15, 'Love songs', 131, 'https://images.pexels.com/photos/4474767/pexels-photo-4474767.jpeg?auto=compress&cs=tinysrgb&h=650&w=940', 6298595794875, 'Love Songs', 'CD'),
(23, 'very sad story', 154, 'https://images.pexels.com/photos/247314/pexels-photo-247314.jpeg?auto=compress&cs=tinysrgb&h=650&w=940', 7490304443172, 'Heavy Tears', 'DVD'),
(90, 'lovely story', 295, 'https://images.pexels.com/photos/208326/pexels-photo-208326.jpeg?auto=compress&cs=tinysrgb&h=650&w=940', 8192627974219, 'Olaf the Dragon', 'DVD'),
(51, 'lots of funny moments in this story', 155, 'https://images.pexels.com/photos/1030794/pexels-photo-1030794.jpeg?auto=compress&cs=tinysrgb&h=650&w=940', 8675855217163, 'HAHAHA', 'book'),
(10, 'liebes story, wunderschön', 113, 'https://images.pexels.com/photos/3617517/pexels-photo-3617517.jpeg?auto=compress&cs=tinysrgb&h=650&w=940', 9179896176592, 'Liebesbuch', 'book'),
(97, 'Great adventure story for kids', 315, 'https://images.pexels.com/photos/697244/pexels-photo-697244.jpeg?auto=compress&cs=tinysrgb&h=650&w=940', 9833015794252, 'Hide if you can', 'book');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `address` varchar(70) DEFAULT NULL,
  `name` varchar(55) DEFAULT NULL,
  `publisher_id` bigint(20) UNSIGNED NOT NULL,
  `size` enum('big','small','medium') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`address`, `name`, `publisher_id`, `size`) VALUES
('Couchgasse 7, 7777 Couchtown', 'publisher55', 113, 'small'),
('Readstreet 9, 9999 Readtown', 'publisher48', 118, 'medium'),
('Verlaggasse 3, 3333 Booktown', 'publisher3', 131, 'medium'),
('Niederndorf 4, 4000 Lesstadt', 'publisher40', 154, 'big'),
('Lampenstraße 11, 8888 Lamphausen', 'publisher78', 155, 'big'),
('Buchregalgasse 7, 7777 Regaldorf', 'publisher7', 180, 'big'),
('Berggasse 8, 1080 Bergdorf', 'publisher10', 219, 'small'),
('Buchstraße 2, 2222 Buchhausen', 'publisher2', 253, 'big'),
('Lesestraße 1, 1111 Lesdorf', 'publisher1', 295, 'big'),
('Oberndorf 5, 5000 Buchstadt', 'publisher5', 315, 'medium'),
('Verlagstraße 4, 4444 Verlaghausen', 'publisher4', 398, 'small');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `media_item`
--
ALTER TABLE `media_item`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `fk_publisher_id` (`fk_publisher_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media_item`
--
ALTER TABLE `media_item`
  ADD CONSTRAINT `media_item_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `media_item_ibfk_2` FOREIGN KEY (`fk_publisher_id`) REFERENCES `publisher` (`publisher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
