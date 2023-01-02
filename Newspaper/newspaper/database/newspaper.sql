-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 04:49 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newspaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'sohel', 'mhsohel017@gmail.com', '12345'),
(2, 'Rifat', 'ri@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `breaking_news`
--

CREATE TABLE `breaking_news` (
  `id` bigint(20) NOT NULL,
  `news` varchar(150) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breaking_news`
--

INSERT INTO `breaking_news` (`id`, `news`) VALUES
(1, 'Breaking news goes here'),
(2, 'Breaking news goes here 2');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) NOT NULL,
  `headline` varchar(150) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(100) NOT NULL,
  `details` text CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` bigint(20) NOT NULL,
  `featured` varchar(3) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `headline`, `photo`, `details`, `date`, `category`, `featured`) VALUES
(1, 'BNP is in crisis', '45675dfgh.jpg', 'This is a W3C compliant free website template from OS Templates. For full terms of use of this template please read our website template licence.', '2018-03-24 03:03:18', 1, ''),
(3, 'dfghfg', '', ' fgjhgjm  gfjghjm ', '2018-03-24 04:01:31', 2, ''),
(4, 'ghmkhjm', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. In fringilla massa ut nisi ullamcorper.', '2018-03-24 04:03:49', 1, ''),
(5, 'hjk,hj', 'img_63351521.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. In fringilla massa ut nisi ullamcorper.', '2018-03-27 14:20:22', 2, ''),
(6, 'htrh', 'images.jpg', 'cv c b', '2018-03-27 14:20:13', 1, ''),
(7, 'grd', 'download.jpg', 'v d bd c', '2018-03-27 14:19:58', 2, ''),
(8, 'Requires JavaScript plugin', '1.jpg', 'Changing the collapsed mobile navbar breakpoint\r\nThe navbar collapses into its vertical mobile view when the viewport is narrower than @grid-float-breakpoint, and expands into its horizontal non-mobile view when the viewport is at least @grid-float-breakpoint in width. Adjust this variable in the Less source to control when the navbar collapses/expands. The default value is 768px', '2018-03-27 13:34:04', 4, ''),
(14, 'Kemerovo fire: Russia crowd condemns officials over disaster', '_100582488_kemcrowdafp27.jpg', 'Relatives say as many as 85 people are still missing, most of them children, according to Interfax news agency.\r\nInvestigators say the fire alarm was switched off and exits were blocked.\r\nSeveral thousand people rallied outside the local government headquarters on Tuesday, demanding that officials be sacked over the fire safety shortcomings', '2018-03-27 14:30:52', 3, 'yes'),
(15, 'Kemerovo fire: Russia crowd condemns officials over disaster', '_100582488_kemcrowdafp27.jpg', 'Relatives say as many as 85 people are still missing, most of them children, according to Interfax news agency.\r\nInvestigators say the fire alarm was switched off and exits were blocked.\r\nSeveral thousand people rallied outside the local government headquarters on Tuesday, demanding that officials be sacked over the fire safety shortcomings', '2018-03-27 14:30:14', 3, 'yes'),
(16, 'BNP IS IN CRISIS', 'img_63351521.jpg', 'This is a W3C compliant free website template from OS Templates. For full terms of use of this template please read our website template licence. This is a W3C compliant free website template from OS Templates. For full terms of use of this template please read our website template licence.This is a W3C compliant free website template from OS Templates. For full terms of use of this template please read our website template licence.This is a W3C compliant free website template from OS Templates. For full terms of use of this template please read our website template licence.', '2018-04-05 13:49:05', 1, 'yes'),
(17, 'BNP IS IN CRISIS', 'images.jpg', 'This is a W3C compliant free website template from OS Templates. For full terms of use of this template please read our website template licence.This is a W3C compliant free website template from OS Templates. For full terms of use of this template please read our website template licence.This is a W3C compliant free website template from OS Templates. For full terms of use of this template please read our website template licence.This is a W3C compliant free website template from OS Templates. For full terms of use of this template please read our website template licence.This is a W3C compliant free website template from OS Templates. For full terms of use of this template please read our website template licence.', '2018-04-05 13:49:19', 1, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `main_menu` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `name`, `main_menu`) VALUES
(1, 'National', 'yes'),
(2, 'Sports', 'yes'),
(3, 'Polytics', 'yes'),
(4, 'Entertainmaent', 'no'),
(5, 'Business', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` bigint(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `photo`, `date`) VALUES
(1, '1.jpg', '2018-03-27 13:59:55'),
(3, 'download.jpg', '2018-03-27 14:04:14'),
(4, 'img_63351521.jpg', '2018-03-27 14:04:22'),
(5, 'images.jpg', '2018-03-27 14:04:33'),
(6, 'img_67920257.jpg', '2018-03-27 14:14:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breaking_news`
--
ALTER TABLE `breaking_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `breaking_news`
--
ALTER TABLE `breaking_news`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category`) REFERENCES `news_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
