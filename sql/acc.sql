-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2018 at 04:55 AM
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
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotgirl`
--

CREATE TABLE `hotgirl` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotgirl`
--

INSERT INTO `hotgirl` (`name`, `email`) VALUES
('hotgirl', 'hot@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `jing999`
--

CREATE TABLE `jing999` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `phone`, `active`) VALUES
(1, 'gideon', 'grey', 'agbobakehinde@gmail.com', '$2y$10$yGv72wSUzVy9opKxp7TFTe.VBgI272FMx96eWUXUgipzBpfdgIMg6', '2f37d10131f2a483a8dd005b3d14b0d9', '', 0),
(2, 'gg', 'ff', 'gideonju1738@gmail.com', '$2y$10$zBGqN/WbHoWttk5HEZrwvOknl5B1MKz2FV4USr/SXyZquu6UPQBXe', '045117b0e0a11a242b9765e79cbf113f', '', 0),
(3, 'agboba kehinde', 'gideon.grey', 'agbobataiwo@gmail.com', '$2y$10$BHqlOUPGMFCfQ3TtRW5e3.QXVXTM4UotVKehHiIbj14l2uZ/nPOLe', '59c33016884a62116be975a9bb8257e3', '', 0),
(4, 'gidffg', 'gggg', 'te@gmail.com', '$2y$10$eowL6NkydvUagQsMrR5poO.m0nJdieuIoimtNoDwzJ/NboOiRrsCG', '0d0871f0806eae32d30983b62252da50', '', 0),
(5, 'mhgtiu7g.i', ',.mj.kuh,j', 'gu@gmail.com', '$2y$10$CgQOeLfCJi3O7VwpvVNnFujK/Uq8tnr55bg7uG11B6/iSFlFeEnCa', '2b24d495052a8ce66358eb576b8912c8', '', 0),
(6, 'black', '', 'black@gmail.com', '$2y$10$rWqteJhQFXjbJni8v0nlpup5MUjIEUjqT8e/XvvfXTZWfyTjckeyC', 'cedebb6e872f539bef8c3f919874e9d7', 'phone', 0),
(7, 'king', '', 'king@test.com', '$2y$10$lXmH7.MfdnpYoahEqsZV6.2/VP1gMRuEJbQN.pjA1xzySvORii0dq', '49182f81e6a13cf5eaa496d51fea6406', 'phone', 0),
(8, 'jing', '', 'jing@test.com', '$2y$10$kg3IKnsyGLm1eDnEm.YFU.pItj18d0Y9LrYQ1aOsKNJp5nhsugzsm', '9cc138f8dc04cbf16240daa92d8d50e2', 'phone', 0),
(9, 'girl', '', 'hot@test.com', '$2y$10$ZI9Gaky1KgX86hJ5JwoR6uM.CoPnhtxPqvcizv7WWYMlTEj7vKix6', '4c5bde74a8f110656874902f07378009', 'phone', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
