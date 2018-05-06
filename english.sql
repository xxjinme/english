-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 05:49 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `english`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_password`, `email`, `user_role`, `user_avatar`, `user_gender`) VALUES
(9, 'admin', 'admin', 'testadmin@gmail.com', '1', 'large.jpg', 'Gei'),
(10, 'admin', 'admin', 'test2admin@gmail.com', '1', '', 'Gei'),
(11, 'admin', 'admin', 'test3@gmai.com', '1', '51fCud2BXlYL.jpg', 'gei'),
(12, 'admin', 'admin123', 'test4@gmai.com', '1', '51fCud2BXlYL.jpg', 'boy'),
(13, 'admin', 'admin', 'test5@gmail.com', '1', '139680-space.png', 'boi'),
(14, 'adminlatao', 'admin1234', 'test6@gmail.com', '1', '139680-space.png', 'boi'),
(15, 'adminlatui', 'admin123', 'test8@gmail.com', '1', '04f280e57f275e4aa52739a727bcfdc8f28a4535_hq.jpg', 'go'),
(16, '', '', '', '', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
