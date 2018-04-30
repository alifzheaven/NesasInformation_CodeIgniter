-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 03:16 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nesas_informations`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_discus`
--

CREATE TABLE `chat_discus` (
  `cd_id` int(11) NOT NULL,
  `cd_discus_id` int(11) DEFAULT NULL,
  `cd_user_id` int(11) DEFAULT NULL,
  `cd_text` text,
  `cd_entry` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discus`
--

CREATE TABLE `discus` (
  `discus_id` int(11) NOT NULL,
  `discus_category_id` int(11) DEFAULT NULL,
  `discus_user_id` int(11) DEFAULT NULL,
  `discus_entry` datetime DEFAULT NULL,
  `discus_poster` varchar(255) DEFAULT NULL,
  `discus_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_user_id` int(11) DEFAULT NULL,
  `news_title` varchar(50) DEFAULT NULL,
  `news_description` varchar(255) DEFAULT NULL,
  `news_poster` varchar(255) DEFAULT NULL,
  `news_entry` datetime DEFAULT NULL,
  `news_category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_user_id`, `news_title`, `news_description`, `news_poster`, `news_entry`, `news_category`) VALUES
(2, 1, 'hb', 'hbh', 'default.png', '2018-04-27 03:27:34', 'b'),
(3, 1, 'Vendor Iklan Sampo Masa Kini', 'inilah tampaknya :''v', 'default.png', '2018-04-27 03:37:03', 'Iklan'),
(4, 1, 'ju', 'juk', 'default.png', '2018-04-27 05:00:21', 'jkk'),
(5, 1, 'penyebaran virus game Dragon Nest :v', 'game baru yang lebih seru dari pada DN ', 'default.png', '2018-04-29 14:29:28', 'Gameplay');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` int(11) NOT NULL,
  `siswa_nis` int(11) DEFAULT NULL,
  `siswa_nisn` int(11) DEFAULT NULL,
  `siswa_nama` varchar(255) DEFAULT NULL,
  `siswa_tmp_lahir` varchar(255) DEFAULT NULL,
  `siswa_tgl_lahir` date DEFAULT NULL,
  `siswa_agama` varchar(255) DEFAULT NULL,
  `siswa_alamat` varchar(255) DEFAULT NULL,
  `siswa_entry` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `user_level` varchar(50) DEFAULT NULL,
  `user_photo` varchar(255) DEFAULT NULL,
  `user_entry` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_level`, `user_photo`, `user_entry`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_discus`
--
ALTER TABLE `chat_discus`
  ADD PRIMARY KEY (`cd_id`);

--
-- Indexes for table `discus`
--
ALTER TABLE `discus`
  ADD PRIMARY KEY (`discus_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_discus`
--
ALTER TABLE `chat_discus`
  MODIFY `cd_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `discus`
--
ALTER TABLE `discus`
  MODIFY `discus_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
