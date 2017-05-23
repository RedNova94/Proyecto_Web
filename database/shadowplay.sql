-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 07:38 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shadowplay`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_artist` varchar(30) NOT NULL,
  `product_image` varchar(140) NOT NULL,
  `product_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`product_id`, `product_name`, `product_artist`, `product_image`, `product_price`) VALUES
(1, 'Highway to Hell', 'AC/DC', 'https://upload.wikimedia.org/wikipedia/en/a/ac/Acdc_Highway_to_Hell.JPG', 100.49),
(2, 'The Valley of the Dammned', 'Dragonforce', 'https://upload.wikimedia.org/wikipedia/en/a/a9/DragonForce-ValleyOfTheDamned-AlbumCover.jpg', 120.49),
(3, 'High Voltage', 'AC/DC', 'https://upload.wikimedia.org/wikipedia/en/f/fc/Acdc_high_voltage_international_album.jpg', 147),
(4, 'Bridge Burning', 'Foo Fighters', 'https://upload.wikimedia.org/wikipedia/en/7/76/Foo_Fighters_-_Bridge_Burning_-_cover_art.jpg', 200),
(5, 'Night at the Opera', 'Queen', 'https://upload.wikimedia.org/wikipedia/en/4/4d/Queen_A_Night_At_The_Opera.png', 250),
(6, 'Random Acces Memories', 'Daft Punk', 'https://upload.wikimedia.org/wikipedia/en/a/a7/Random_Access_Memories.jpg', 200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(15) NOT NULL,
  `password` varchar(27) NOT NULL,
  `email` varchar(30) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `admin`) VALUES
('gerry', 'chalo123', 'gerry_hd@live.com.mx', 1),
('kirby', 'kirby', 'rtd@hotmail.com', 0),
('misu', 'ojovioleta27', 'nomeacuerdo@gmail.com', 1),
('nova', 'dragondance', 'rnvasquez94@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
