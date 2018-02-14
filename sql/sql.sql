-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2018 at 07:30 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `title`, `price`, `description`, `image`, `quantity`) VALUES
(1, 'Off-white', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/offwhite.png', '4'),
(19, 'Tile-red', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/tilered.png', '5');

-- --------------------------------------------------------

--
-- Table structure for table `admin101`
--

CREATE TABLE `admin101` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin101`
--

INSERT INTO `admin101` (`id`, `title`, `price`, `description`, `image`, `quantity`) VALUES
(1, 'Off-white', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/offwhite.png', '5');

-- --------------------------------------------------------

--
-- Table structure for table `emulsion_exterior`
--

CREATE TABLE `emulsion_exterior` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emulsion_exterior`
--

INSERT INTO `emulsion_exterior` (`id`, `title`, `price`, `description`, `image`, `date_added`) VALUES
(1, 'Off-white', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/offwhite.png', '2017-02-01'),
(2, 'Sunflower', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/sunflower.png', '2017-02-02'),
(3, 'Lilac-haze', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/lilachaze.png', '2017-02-03'),
(4, 'Light-green', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/lightgreen.png', '2017-02-04'),
(5, 'Lilac-romantic', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/Lilacromantic.png', '2017-02-04'),
(6, 'Harmony-pink', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/harmonypink.png', '2017-02-04'),
(7, 'Golden-yellow', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/goldenyellow.png', '2017-02-04'),
(8, 'Rose-pink', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/rosepink.png', '2017-02-04'),
(9, 'Sky-blue', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/skyblue.png', '2017-02-04'),
(10, 'Leaf-green', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/leafgreen.png', '2017-02-04'),
(11, 'Silver-grey', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/silvergrey.png', '2017-02-04'),
(12, 'Pale-beige', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/palebeige.png', '2017-02-04'),
(13, 'Orange', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/orange.png', '2017-02-04'),
(14, 'Rose', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/rose.png', '2017-02-04'),
(15, 'Light-blue', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/lightblue.png', '2017-02-04'),
(16, 'Aloevera', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/aloevera.png', '2017-02-04'),
(17, 'Mushroom', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/mushroom.png', '2017-02-04'),
(18, 'Russet', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/russet.png', '2017-02-04'),
(19, 'Tile-red', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/tilered.png', '2017-02-04'),
(20, 'Pacific-blue', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/pacificblue.png', '2017-02-04'),
(21, 'Apple-green', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/applegreen.png', '2017-02-04'),
(22, 'Ice-grey', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/icegrey.png', '2017-02-04'),
(23, 'Cream', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/cream.png', '2017-02-04'),
(24, 'Coffee', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/coffee.png', '2017-02-04'),
(25, 'Hazel-brown', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/hazelbrown.png', '2017-02-04'),
(26, 'Brilliant-blue', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/brilliantblue.png', '2017-02-04'),
(27, 'National-green', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/nationalgreen.png', '2017-02-04'),
(28, 'Dove-grey', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/davegrey.png', '2017-02-04'),
(29, 'Sand', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/sand.png', '2017-02-04'),
(30, 'Rich-brown', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/richbrown.png', '2017-02-04'),
(31, 'Literat-red', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/literatered.png', '2017-02-04'),
(32, 'Sexy-pink', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/sexypink.png', '2017-02-04'),
(33, 'Purple', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/purple.png', '2017-02-04'),
(34, 'Ash-grey', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/ashgrey.png', '2017-02-04'),
(35, 'Bamboo', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/bamboo.png', '2017-02-04'),
(36, 'Chocolate', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/chocolate.png', '2017-02-04'),
(37, 'Dusted-damson', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/dusteddamson.png', '2017-02-04'),
(38, 'Strawberry', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/strawberry.png', '2017-02-04'),
(39, 'Dark-grey', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/darkgrey.png', '2017-02-04'),
(40, 'Pale-blue', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/paleblue.png', '2017-02-04'),
(41, 'Neutral', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/neutral.png', '2017-02-04'),
(42, 'Postoffice-red', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/postofficered.png', '2017-02-04'),
(43, 'White', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/white.png', '2017-02-04'),
(44, 'Black', '8500', 'Emulsion-exterior', 'imgs/eml-gls-colors/black.png', '2017-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `emulsion_interior`
--

CREATE TABLE `emulsion_interior` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emulsion_interior`
--

INSERT INTO `emulsion_interior` (`id`, `title`, `price`, `description`, `image`, `date_added`) VALUES
(1, 'Off-white', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/offwhite.png', '2017-02-01'),
(2, 'Sunflower', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/sunflower.png', '2017-02-02'),
(3, 'Lilac-haze', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/lilachaze.png', '2017-02-03'),
(4, 'Light-green', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/lightgreen.png', '2017-02-04'),
(5, 'Lilac-romantic', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/Lilacromantic.png', '2017-02-04'),
(6, 'Harmony-pink', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/harmonypink.png', '2017-02-04'),
(7, 'Golden-yellow', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/goldenyellow.png', '2017-02-04'),
(8, 'Rose-pink', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/rosepink.png', '2017-02-04'),
(9, 'Sky-blue', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/skyblue.png', '2017-02-04'),
(10, 'Leaf-green', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/leafgreen.png', '2017-02-04'),
(11, 'Silver-grey', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/silvergrey.png', '2017-02-04'),
(12, 'Pale-beige', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/palebeige.png', '2017-02-04'),
(13, 'Orange', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/orange.png', '2017-02-04'),
(14, 'Rose', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/rose.png', '2017-02-04'),
(15, 'Light-blue', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/lightblue.png', '2017-02-04'),
(16, 'Aloevera', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/aloevera.png', '2017-02-04'),
(17, 'Mushroom', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/mushroom.png', '2017-02-04'),
(18, 'Russet', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/russet.png', '2017-02-04'),
(19, 'Tile-red', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/tilered.png', '2017-02-04'),
(20, 'Pacific-blue', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/pacificblue.png', '2017-02-04'),
(21, 'Apple-green', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/applegreen.png', '2017-02-04'),
(22, 'Ice-grey', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/icegrey.png', '2017-02-04'),
(23, 'Cream', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/cream.png', '2017-02-04'),
(24, 'Coffee', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/coffee.png', '2017-02-04'),
(25, 'Hazel-brown', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/hazelbrown.png', '2017-02-04'),
(26, 'Brilliant-blue', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/brilliantblue.png', '2017-02-04'),
(27, 'National-green', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/nationalgreen.png', '2017-02-04'),
(28, 'Dove-grey', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/davegrey.png', '2017-02-04'),
(29, 'Sand', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/sand.png', '2017-02-04'),
(30, 'Rich-brown', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/richbrown.png', '2017-02-04'),
(31, 'Literat-red', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/literatered.png', '2017-02-04'),
(32, 'Sexy-pink', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/sexypink.png', '2017-02-04'),
(33, 'Purple', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/purple.png', '2017-02-04'),
(34, 'Ash-grey', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/ashgrey.png', '2017-02-04'),
(35, 'Bamboo', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/bamboo.png', '2017-02-04'),
(36, 'Chocolate', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/chocolate.png', '2017-02-04'),
(37, 'Dusted-damson', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/dusteddamson.png', '2017-02-04'),
(38, 'Strawberry', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/strawberry.png', '2017-02-04'),
(39, 'Dark-grey', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/darkgrey.png', '2017-02-04'),
(40, 'Pale-blue', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/paleblue.png', '2017-02-04'),
(41, 'Neutral', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/neutral.png', '2017-02-04'),
(42, 'Postoffice-red', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/postofficered.png', '2017-02-04'),
(43, 'White', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/white.png', '2017-02-04'),
(44, 'Black', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/black.png', '2017-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `ff`
--

CREATE TABLE `ff` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ff`
--

INSERT INTO `ff` (`id`, `title`, `price`, `description`, `image`, `quantity`) VALUES
(2, 'Sunflower', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/sunflower.png', '4'),
(3, 'Lilac-haze', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/lilachaze.png', '3'),
(42, 'Postoffice-red', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/postofficered.png', '3');

-- --------------------------------------------------------

--
-- Table structure for table `gideon`
--

CREATE TABLE `gideon` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gideon`
--

INSERT INTO `gideon` (`id`, `title`, `price`, `description`, `image`, `quantity`) VALUES
(1, 'Off-white', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/offwhite.png', '4'),
(27, 'National-green', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/nationalgreen.png', '5'),
(2, 'Sunflower', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/sunflower.png', '9');

-- --------------------------------------------------------

--
-- Table structure for table `gloss`
--

CREATE TABLE `gloss` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gloss`
--

INSERT INTO `gloss` (`id`, `title`, `price`, `description`, `image`, `date_added`) VALUES
(1, 'Off-white', '4500', 'Gloss', 'imgs/eml-gls-colors/offwhite.png', '2017-02-01'),
(2, 'Sunflower', '4500', 'Gloss', 'imgs/eml-gls-colors/sunflower.png', '2017-02-02'),
(3, 'Lilac-haze', '4500', 'Gloss', 'imgs/eml-gls-colors/lilachaze.png', '2017-02-03'),
(4, 'Light-green', '4500', 'Gloss', 'imgs/eml-gls-colors/lightgreen.png', '2017-02-04'),
(5, 'Lilac-romantic', '4500', 'Gloss', 'imgs/eml-gls-colors/Lilacromantic.png', '2017-02-04'),
(6, 'Harmony-pink', '4500', 'Gloss', 'imgs/eml-gls-colors/harmonypink.png', '2017-02-04'),
(7, 'Golden-yellow', '4500', 'Gloss', 'imgs/eml-gls-colors/goldenyellow.png', '2017-02-04'),
(8, 'Rose-pink', '4500', 'Gloss', 'imgs/eml-gls-colors/rosepink.png', '2017-02-04'),
(9, 'Sky-blue', '4500', 'Gloss', 'imgs/eml-gls-colors/skyblue.png', '2017-02-04'),
(10, 'Leaf-green', '4500', 'Gloss', 'imgs/eml-gls-colors/leafgreen.png', '2017-02-04'),
(11, 'Silver-grey', '4500', 'Gloss', 'imgs/eml-gls-colors/silvergrey.png', '2017-02-04'),
(12, 'Pale-beige', '4500', 'Gloss', 'imgs/eml-gls-colors/palebeige.png', '2017-02-04'),
(13, 'Orange', '4500', 'Gloss', 'imgs/eml-gls-colors/orange.png', '2017-02-04'),
(14, 'Rose', '4500', 'Gloss', 'imgs/eml-gls-colors/rose.png', '2017-02-04'),
(15, 'Light-blue', '4500', 'Gloss', 'imgs/eml-gls-colors/lightblue.png', '2017-02-04'),
(16, 'Aloevera', '4500', 'Gloss', 'imgs/eml-gls-colors/aloevera.png', '2017-02-04'),
(17, 'Mushroom', '4500', 'Gloss', 'imgs/eml-gls-colors/mushroom.png', '2017-02-04'),
(18, 'Russet', '4500', 'Gloss', 'imgs/eml-gls-colors/russet.png', '2017-02-04'),
(19, 'Tile-red', '4500', 'Gloss', 'imgs/eml-gls-colors/tilered.png', '2017-02-04'),
(20, 'Pacific-blue', '4500', 'Gloss', 'imgs/eml-gls-colors/pacificblue.png', '2017-02-04'),
(21, 'Apple-green', '4500', 'Gloss', 'imgs/eml-gls-colors/applegreen.png', '2017-02-04'),
(22, 'Ice-grey', '4500', 'Gloss', 'imgs/eml-gls-colors/icegrey.png', '2017-02-04'),
(23, 'Cream', '4500', 'Gloss', 'imgs/eml-gls-colors/cream.png', '2017-02-04'),
(24, 'Coffee', '4500', 'Gloss', 'imgs/eml-gls-colors/coffee.png', '2017-02-04'),
(25, 'Hazel-brown', '4500', 'Gloss', 'imgs/eml-gls-colors/hazelbrown.png', '2017-02-04'),
(26, 'Brilliant-blue', '4500', 'Gloss', 'imgs/eml-gls-colors/brilliantblue.png', '2017-02-04'),
(27, 'National-green', '4500', 'Gloss', 'imgs/eml-gls-colors/nationalgreen.png', '2017-02-04'),
(28, 'Dove-grey', '4500', 'Gloss', 'imgs/eml-gls-colors/davegrey.png', '2017-02-04'),
(29, 'Sand', '4500', 'Gloss', 'imgs/eml-gls-colors/sand.png', '2017-02-04'),
(30, 'Rich-brown', '4500', 'Gloss', 'imgs/eml-gls-colors/richbrown.png', '2017-02-04'),
(31, 'Literat-red', '4500', 'Gloss', 'imgs/eml-gls-colors/literatered.png', '2017-02-04'),
(32, 'Sexy-pink', '4500', 'Gloss', 'imgs/eml-gls-colors/sexypink.png', '2017-02-04'),
(33, 'Purple', '4500', 'Gloss', 'imgs/eml-gls-colors/purple.png', '2017-02-04'),
(34, 'Ash-grey', '4500', 'Gloss', 'imgs/eml-gls-colors/ashgrey.png', '2017-02-04'),
(35, 'Bamboo', '4500', 'Gloss', 'imgs/eml-gls-colors/bamboo.png', '2017-02-04'),
(36, 'Chocolate', '4500', 'Gloss', 'imgs/eml-gls-colors/chocolate.png', '2017-02-04'),
(37, 'Dusted-damson', '4500', 'Gloss', 'imgs/eml-gls-colors/dusteddamson.png', '2017-02-04'),
(38, 'Strawberry', '4500', 'Gloss', 'imgs/eml-gls-colors/strawberry.png', '2017-02-04'),
(39, 'Dark-grey', '4500', 'Gloss', 'imgs/eml-gls-colors/darkgrey.png', '2017-02-04'),
(40, 'Pale-blue', '4500', 'Gloss', 'imgs/eml-gls-colors/paleblue.png', '2017-02-04'),
(41, 'Neutral', '4500', 'Gloss', 'imgs/eml-gls-colors/neutral.png', '2017-02-04'),
(42, 'Postoffice-red', '4500', 'Gloss', 'imgs/eml-gls-colors/postofficered.png', '2017-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `title`, `price`, `description`, `image`, `quantity`) VALUES
(4, 'Light-green', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/lightgreen.png', '3'),
(43, 'White', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/white.png', '5'),
(20, 'Pacific-blue', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/pacificblue.png', '6'),
(2, 'Sunflower', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/sunflower.png', '5'),
(2, 'Sunflower', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/sunflower.png', '5'),
(2, 'Sunflower', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/sunflower.png', '5'),
(43, 'White', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/white.png', '2'),
(4, 'Light-green', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/lightgreen.png', '7'),
(19, 'Tile-red', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/tilered.png', '3');

-- --------------------------------------------------------

--
-- Table structure for table `hennyholah`
--

CREATE TABLE `hennyholah` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hennyholah`
--

INSERT INTO `hennyholah` (`id`, `title`, `price`, `description`, `image`, `quantity`) VALUES
(43, 'White', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/white.png', '18'),
(2, 'Sunflower', '4200', 'Emulsion-interior', 'imgs/eml-gls-colors/sunflower.png', '20');

-- --------------------------------------------------------

--
-- Table structure for table `texcote_exterior`
--

CREATE TABLE `texcote_exterior` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `texcote_exterior`
--

INSERT INTO `texcote_exterior` (`id`, `title`, `price`, `description`, `image`, `date_added`) VALUES
(1, 'Brilliant white', '10500', 'Texcote-exterior', 'imgs/texcote-colors/brilliantwhite.png', '2017-02-01'),
(2, 'Delta green', '10500', 'Texcote-exterior', 'imgs/texcote-colors/deltagreen.png', '2017-02-02'),
(3, 'Gossamer', '10500', 'Texcote-exterior', 'imgs/texcote-colors/gossamer.png', '2017-02-03'),
(4, 'Salmon brown', '10500', 'Texcote-exterior', 'imgs/texcote-colors/salmonbrown.png', '2017-02-04'),
(5, 'Magnolia', '10500', 'Texcote-exterior', 'imgs/texcote-colors/magnolia.png', '2017-02-04'),
(6, 'Butter cream', '10500', 'Texcote-exterior', 'imgs/texcote-colors/buttercream.png', '2017-02-04'),
(7, 'Brick red', '10500', 'Texcote-exterior', 'imgs/texcote-colors/brickred.png', '2017-02-04'),
(8, 'Oka maize', '10500', 'Texcote-exterior', 'imgs/texcote-colors/okamaize.png', '2017-02-04'),
(9, 'Cameo', '10500', 'Texcote-exterior', 'imgs/texcote-colors/cameo.png', '2017-02-04'),
(10, 'Hamattan grey', '10500', 'Texcote-exterior', 'imgs/texcote-colors/hamattangrey.png', '2017-02-04'),
(11, 'Tarqua green', '10500', 'Texcote-exterior', 'imgs/texcote-colors/tarquagreen.png', '2017-02-04'),
(12, 'Russet', '10500', 'Texcote-exterior', 'imgs/texcote-colors/russet.png', '2017-02-04'),
(13, 'Sienna', '10500', 'Texcote-exterior', 'imgs/texcote-colors/sienna.png', '2017-02-04'),
(14, 'Bamboo', '10500', 'Texcote-exterior', 'imgs/texcote-colors/bamboo.png', '2017-02-04'),
(15, 'Casuarina', '10500', 'Texcote-exterior', 'imgs/texcote-colors/casuarina.png', '2017-02-04'),
(16, 'Coral red', '10500', 'Texcote-exterior', 'imgs/texcote-colors/coralred.png', '2017-02-04'),
(17, 'Off-white', '10500', 'Texcote-exterior', 'imgs/texcote-colors/offwhite.png', '2017-02-04'),
(18, 'Laterite red', '10500', 'Texcote-exterior', 'imgs/texcote-colors/laterite.png', '2017-02-04'),
(19, 'Abuja brown', '10500', 'Texcote-exterior', 'imgs/texcote-colors/abujabrown.png', '2017-02-04'),
(20, 'Concorde grey', '10500', 'Texcote-exterior', 'imgs/texcote-colors/concordegrey.png', '2017-02-04'),
(21, 'Chocolate', '10500', 'Texcote-exterior', 'imgs/texcote-colors/chocolate.png', '2017-02-04'),
(22, 'Coconut brown', '10500', 'Texcote-exterior', 'imgs/texcote-colors/coconutbrown.png', '2017-02-04'),
(23, 'Light green', '10500', 'Texcote-exterior', 'imgs/texcote-colors/lightgreen.png', '2017-02-04'),
(24, 'Pale beige', '10500', 'Texcote-exterior', 'imgs/texcote-colors/palebeige.png', '2017-02-04'),
(25, 'White', '10500', 'Texcote-exterior', 'imgs/texcote-colors/whie.png', '2017-02-04'),
(26, 'Black', '10500', 'Texcote-exterior', 'imgs/texcote-colors/black.png', '2017-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `texcote_interior`
--

CREATE TABLE `texcote_interior` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `texcote_interior`
--

INSERT INTO `texcote_interior` (`id`, `title`, `price`, `description`, `image`, `date_added`) VALUES
(1, 'Brilliant white', '6000', 'Texcote-interior', 'imgs/texcote-colors/brilliantwhite.png', '2017-02-01'),
(2, 'Delta green', '6000', 'Texcote-interior', 'imgs/texcote-colors/deltagreen.png', '2017-02-02'),
(3, 'Gossamer', '6000', 'Texcote-interior', 'imgs/texcote-colors/gossamer.png', '2017-02-03'),
(4, 'Salmon brown', '6000', 'Texcote-interior', 'imgs/texcote-colors/salmonbrown.png', '2017-02-04'),
(5, 'Magnolia', '6000', 'Texcote-interior', 'imgs/texcote-colors/magnolia.png', '2017-02-04'),
(6, 'Butter cream', '6000', 'Texcote-interior', 'imgs/texcote-colors/buttercream.png', '2017-02-04'),
(7, 'Brick red', '6000', 'Texcote-interior', 'imgs/texcote-colors/brickred.png', '2017-02-04'),
(8, 'Oka maize', '6000', 'Texcote-interior', 'imgs/texcote-colors/okamaize.png', '2017-02-04'),
(9, 'Cameo', '6000', 'Texcote-interior', 'imgs/texcote-colors/cameo.png', '2017-02-04'),
(10, 'Hamattan grey', '6000', 'Texcote-interior', 'imgs/texcote-colors/hamattangrey.png', '2017-02-04'),
(11, 'Tarqua green', '6000', 'Texcote-interior', 'imgs/texcote-colors/tarquagreen.png', '2017-02-04'),
(12, 'Russet', '6000', 'Texcote-interior', 'imgs/texcote-colors/russet.png', '2017-02-04'),
(13, 'Sienna', '6000', 'Texcote-interior', 'imgs/texcote-colors/sienna.png', '2017-02-04'),
(14, 'Bamboo', '6000', 'Texcote-interior', 'imgs/texcote-colors/bamboo.png', '2017-02-04'),
(15, 'Casuarina', '6000', 'Texcote-interior', 'imgs/texcote-colors/casuarina.png', '2017-02-04'),
(16, 'Coral red', '6000', 'Texcote-interior', 'imgs/texcote-colors/coralred.png', '2017-02-04'),
(17, 'Off-white', '6000', 'Texcote-interior', 'imgs/texcote-colors/offwhite.png', '2017-02-04'),
(18, 'Laterite red', '6000', 'Texcote-interior', 'imgs/texcote-colors/laterite.png', '2017-02-04'),
(19, 'Abuja brown', '6000', 'Texcote-interior', 'imgs/texcote-colors/abujabrown.png', '2017-02-04'),
(20, 'Concorde grey', '6000', 'Texcote-interior', 'imgs/texcote-colors/concordegrey.png', '2017-02-04'),
(21, 'Chocolate', '6000', 'Texcote-interior', 'imgs/texcote-colors/chocolate.png', '2017-02-04'),
(22, 'Coconut brown', '6000', 'Texcote-interior', 'imgs/texcote-colors/coconutbrown.png', '2017-02-04'),
(23, 'Light green', '6000', 'Texcote-interior', 'imgs/texcote-colors/lightgreen.png', '2017-02-04'),
(24, 'Pale beige', '6000', 'Texcote-interior', 'imgs/texcote-colors/palebeige.png', '2017-02-04'),
(25, 'White', '6000', 'Texcote-interior', 'imgs/texcote-colors/whie.png', '2017-02-04'),
(26, 'Black', '6000', 'Texcote-interior', 'imgs/texcote-colors/black.png', '2017-02-04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
