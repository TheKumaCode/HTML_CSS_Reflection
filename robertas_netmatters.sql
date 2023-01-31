-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 30, 2023 at 11:57 AM
-- Server version: 8.0.30
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `robertas_netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `Article_ID` int NOT NULL,
  `Article_Category` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Article_ImgURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Article_ImgAlt` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Article_Title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Article_About` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Article_AvatarURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Article_AvatarAlt` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Article_Date` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Article_Style` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`Article_ID`, `Article_Category`, `Article_ImgURL`, `Article_ImgAlt`, `Article_Title`, `Article_About`, `Article_AvatarURL`, `Article_AvatarAlt`, `Article_Date`, `Article_Style`) VALUES
(1, 'Careers', 'Assets/Images/business-development-account-zUub.jpg', 'Buisness Development Acount Manager', 'Business Development Account Manager', 'Salary Range £35k+ per annum + Bonus + Benefits Hours 40 hours per week, Mon – Fri Location Wymondha...', 'Assets/Images/elliott-peacock-w8vu.jpg', 'Elliott Peacock', '9th August 2022', 'c-1'),
(2, 'News', 'Assets/Images/the-risks-of-kEsp.jpg', 'Netmatters Road To Net Zero', 'The Risks Of Not Being Cookie Compliant', 'Are You Cookie Compliant? We’ve all heard of website cookies. Most people understand the premise of...', 'Assets/Images/netmatters-ltd-VXAv.png', 'Netmatters', '4th August 2022', 'c-2'),
(3, 'Environmental News', 'Assets/Images/netmatters-road-to-MEcu.jpg', 'Netmatters Road To Net Zero', 'Netmatters Road To Net Zero', 'Driving through our Road to Net Zero We have some fantastic news to share regarding our latest add...', 'Assets/Images/netmatters-ltd-VXAv.png', 'Netmatters', '3rd August 2022', 'c-2');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_ID` int NOT NULL,
  `Contact_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Contact_Company` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Contact_Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Contact_Number` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Contact_Subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Contact_Message` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Contact_ID`, `Contact_Name`, `Contact_Company`, `Contact_Email`, `Contact_Number`, `Contact_Subject`, `Contact_Message`) VALUES
(1, 'Kratos', '', 'Kratos@godof.war', '66606660666', 'AAAAH', 'God of boy.'),
(2, 'Yuna', '', 'Yuna@Kuma.jp', '07675635465', 'Sub Jection', 'Kekede'),
(3, 'Kratos', 'Kratos', 'Kratos@kratos.kratos', '07666666666', 'Kratos', 'Kratos'),
(4, 'test', '', 'test@test.com', '000000000000', 'test', 'test test');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `Newsletter_ID` int NOT NULL,
  `Newsletter_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Newsletter_Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`Newsletter_ID`, `Newsletter_Name`, `Newsletter_Email`) VALUES
(1, 'Kratos', 'Kratos@godof.war'),
(2, 'Kratos', 'Kratos@kratos.kratos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`Article_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_ID`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`Newsletter_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `Article_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `Newsletter_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
