-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2017 at 01:28 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 5.6.30-7+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cook`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`ID`, `Name`) VALUES
(1, 'Red Chilli'),
(2, 'Salt'),
(3, 'Vinegar'),
(4, 'Olive Oil'),
(5, 'Celery'),
(6, 'Turmeric '),
(7, 'Onion'),
(8, 'Garlic'),
(9, 'Garam Masala'),
(10, 'Black Pepper');

-- --------------------------------------------------------

--
-- Table structure for table `Recipies`
--

CREATE TABLE `Recipies` (
  `Recipie` varchar(20) NOT NULL,
  `URL` varchar(200) NOT NULL,
  `Red Chilli` tinyint(1) NOT NULL,
  `Salt` tinyint(1) NOT NULL,
  `Vinegar` tinyint(1) NOT NULL,
  `Olive Oil` tinyint(1) NOT NULL,
  `Celery` tinyint(1) NOT NULL,
  `Turmeric` tinyint(1) NOT NULL,
  `Onion` tinyint(1) NOT NULL,
  `Garlic` tinyint(1) NOT NULL,
  `Garam Masala` tinyint(1) NOT NULL,
  `Black Pepper` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Recipies`
--

INSERT INTO `Recipies` (`Recipie`, `URL`, `Red Chilli`, `Salt`, `Vinegar`, `Olive Oil`, `Celery`, `Turmeric`, `Onion`, `Garlic`, `Garam Masala`, `Black Pepper`) VALUES
('Chilli Chicken', 'http://www.sanjeevkapoor.com/Recipe/Chinese-Chilli-Chicken-Sirf-30-minute-FoodFood.html', 1, 1, 1, 0, 0, 1, 1, 0, 0, 1),
('Lemon Coconut Rice', 'http://www.sanjeevkapoor.com/Recipe/Lemon-Coconut-Rice-Sirf-30-minute-FoodFood.html', 1, 1, 0, 0, 0, 1, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
