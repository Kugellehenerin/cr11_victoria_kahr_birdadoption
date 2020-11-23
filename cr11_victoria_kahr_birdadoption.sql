-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 09:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_victoria_kahr_birdadoption`
--

-- --------------------------------------------------------

--
-- Table structure for table `birds`
--

CREATE TABLE `birds` (
  `id` int(11) NOT NULL,
  `bird_img` varchar(250) NOT NULL,
  `bird_breed` varchar(30) DEFAULT NULL,
  `bird_name` varchar(30) DEFAULT NULL,
  `bird_age` varchar(30) DEFAULT NULL,
  `bird_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `birds`
--

INSERT INTO `birds` (`id`, `bird_img`, `bird_breed`, `bird_name`, `bird_age`, `bird_description`) VALUES
(1, 'img/parrot_1.jpg', 'African Grey', 'Leyla', '2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non. Vel turpis nunc eget lorem dolor sed viverra ipsum. Dui ut ornare lectus sit amet est placerat in egestas. Nisl tincidunt eget nullam non nisi est. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Sapien et ligula ullamcorper malesuada.'),
(2, 'img/parrot_2.jpg', 'African Grey', 'Rio', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non. Vel turpis nunc eget lorem dolor sed viverra ipsum. Dui ut ornare lectus sit amet est placerat in egestas. Nisl tincidunt eget nullam non nisi est. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Sapien et ligula ullamcorper malesuada. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Mauris ultrices eros in cursus turpis massa. Euismod in pellentesque massa placerat. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst. '),
(3, 'img/parrot_3.jpg', 'African Grey', 'Leroy', '3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non. Vel turpis nunc eget lorem dolor sed viverra ipsum. Dui ut ornare lectus sit amet est placerat in egestas. Nisl tincidunt eget nullam non nisi est. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Sapien et ligula ullamcorper malesuada. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Mauris ultrices eros in cursus turpis massa. Euismod in pellentesque massa placerat. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst. '),
(4, 'img/parrot_4.jpg', 'African Grey', 'Hanni', '4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non. Vel turpis nunc eget lorem dolor sed viverra ipsum. Dui ut ornare lectus sit amet est placerat in egestas. Nisl tincidunt eget nullam non nisi est. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Sapien et ligula ullamcorper malesuada. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Mauris ultrices eros in cursus turpis massa. Euismod in pellentesque massa placerat. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst. '),
(5, 'img/parrot_5.jpg', 'African Grey', 'Rachel', '5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non. Vel turpis nunc eget lorem dolor sed viverra ipsum. Dui ut ornare lectus sit amet est placerat in egestas. Nisl tincidunt eget nullam non nisi est. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Sapien et ligula ullamcorper malesuada. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Mauris ultrices eros in cursus turpis massa. Euismod in pellentesque massa placerat. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst. '),
(6, 'img/parrot_6.jpg', 'African Grey', 'Levi', '10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non. Vel turpis nunc eget lorem dolor sed viverra ipsum. Dui ut ornare lectus sit amet est placerat in egestas. Nisl tincidunt eget nullam non nisi est. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Sapien et ligula ullamcorper malesuada. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Mauris ultrices eros in cursus turpis massa. Euismod in pellentesque massa placerat. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst. '),
(7, 'img/parrot_7.jpg', 'African Grey', 'Lini', '22', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non. Vel turpis nunc eget lorem dolor sed viverra ipsum. Dui ut ornare lectus sit amet est placerat in egestas. Nisl tincidunt eget nullam non nisi est. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Sapien et ligula ullamcorper malesuada. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Mauris ultrices eros in cursus turpis massa. Euismod in pellentesque massa placerat. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst. '),
(8, 'img/parrot_8.jpg', 'African Grey', 'Didi', '38', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non. Vel turpis nunc eget lorem dolor sed viverra ipsum. Dui ut ornare lectus sit amet est placerat in egestas. Nisl tincidunt eget nullam non nisi est. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Sapien et ligula ullamcorper malesuada. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Mauris ultrices eros in cursus turpis massa. Euismod in pellentesque massa placerat. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst. '),
(9, 'img/parrot_9.jpg', 'African Grey', 'Henry', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non. Vel turpis nunc eget lorem dolor sed viverra ipsum. Dui ut ornare lectus sit amet est placerat in egestas. Nisl tincidunt eget nullam non nisi est. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Sapien et ligula ullamcorper malesuada. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Mauris ultrices eros in cursus turpis massa. Euismod in pellentesque massa placerat. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst. '),
(10, 'img/parrot_10.jpg', 'African Grey', 'Lynn', '55', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non. Vel turpis nunc eget lorem dolor sed viverra ipsum. Dui ut ornare lectus sit amet est placerat in egestas. Nisl tincidunt eget nullam non nisi est. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Sapien et ligula ullamcorper malesuada. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Mauris ultrices eros in cursus turpis massa. Euismod in pellentesque massa placerat. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst. '),
(11, 'img/parrot_11.jpg', 'African Grey', 'Mietzi', '60', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non. Vel turpis nunc eget lorem dolor sed viverra ipsum. Dui ut ornare lectus sit amet est placerat in egestas. Nisl tincidunt eget nullam non nisi est. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Sapien et ligula ullamcorper malesuada. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Mauris ultrices eros in cursus turpis massa. Euismod in pellentesque massa placerat. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst. '),
(12, 'img/parrot_12.jpg', 'African Grey', 'Manolo', '57', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non. Vel turpis nunc eget lorem dolor sed viverra ipsum. Dui ut ornare lectus sit amet est placerat in egestas. Nisl tincidunt eget nullam non nisi est. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Sapien et ligula ullamcorper malesuada. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Mauris ultrices eros in cursus turpis massa. Euismod in pellentesque massa placerat. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `userStatus` enum('User','Admin') DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `userStatus`) VALUES
(1, 'User', 'user@email.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'User'),
(2, 'admin', 'admin@email.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birds`
--
ALTER TABLE `birds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birds`
--
ALTER TABLE `birds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
