-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 06:13 AM
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
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_dons`
--

CREATE TABLE `chi_tiet_hoa_dons` (
  `id` int(11) NOT NULL,
  `cthd_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hd_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chi_tiet_hoa_dons`
--

INSERT INTO `chi_tiet_hoa_dons` (`id`, `cthd_id`, `hd_id`, `course_id`, `course_price`) VALUES
(1, '', '', '', ''),
(2, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_price` tinyint(4) NOT NULL,
  `course_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `course_time` datetime DEFAULT NULL,
  `course_teacher` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `course_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_price`, `course_description`, `course_time`, `course_teacher`, `course_image`) VALUES
(4, 'fesfdf', 127, NULL, NULL, 'dsfdsfds', '20180503_213603.jpg'),
(5, 'fesfdf', 127, NULL, NULL, 'dsfdsfds', '20180503_214054.jpg'),
(6, 'sdfs', 127, NULL, NULL, 'sdfsdf', '20180503_214109.jpg'),
(7, 'dsfdf', 127, NULL, NULL, 'dfgdf', '20180503_214857.jpg'),
(8, 'EngOne', 127, NULL, '2018-05-04 17:09:00', 'mr.Eng', '20180505_001012.jpg'),
(9, '', 0, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_dons`
--

CREATE TABLE `hoa_dons` (
  `id` int(11) NOT NULL,
  `hd_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hd_tong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hd_ngaylap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa_dons`
--

INSERT INTO `hoa_dons` (`id`, `hd_id`, `user_id`, `hd_tong`, `hd_ngaylap`) VALUES
(1, '', '', '', '0000-00-00 00:00:00'),
(2, '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `khoa_hocs`
--

CREATE TABLE `khoa_hocs` (
  `id` int(11) NOT NULL,
  `kh_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kh_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khoa_hocs`
--

INSERT INTO `khoa_hocs` (`id`, `kh_name`, `kh_description`) VALUES
(1, '', ''),
(2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20180501103612, 'CreateUsers', '2018-05-03 07:29:05', '2018-05-03 07:29:06', 0),
(20180501104503, 'CreateHoaDons', '2018-05-03 07:29:06', '2018-05-03 07:29:06', 0),
(20180501104606, 'CreateChiTietHoaDons', '2018-05-03 07:29:06', '2018-05-03 07:29:06', 0),
(20180503135440, 'CreateCourses', '2018-05-03 07:30:38', '2018-05-03 07:30:39', 0),
(20180504174939, 'CreateKhoaHocs', '2018-05-04 10:50:32', '2018-05-04 10:50:33', 0),
(20180505162049, 'CreateCarts', '2018-05-05 09:21:35', '2018-05-05 09:21:35', 0);

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
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chi_tiet_hoa_dons`
--
ALTER TABLE `chi_tiet_hoa_dons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoa_dons`
--
ALTER TABLE `hoa_dons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khoa_hocs`
--
ALTER TABLE `khoa_hocs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chi_tiet_hoa_dons`
--
ALTER TABLE `chi_tiet_hoa_dons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hoa_dons`
--
ALTER TABLE `hoa_dons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khoa_hocs`
--
ALTER TABLE `khoa_hocs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
