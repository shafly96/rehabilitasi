-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 02:01 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rehabilitasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `gerak1` int(11) NOT NULL DEFAULT '0',
  `gerak2` int(11) NOT NULL DEFAULT '0',
  `gerak3` int(11) NOT NULL DEFAULT '0',
  `gerak4` int(11) NOT NULL DEFAULT '0',
  `gerak5` int(11) NOT NULL DEFAULT '0',
  `gerak6` int(11) NOT NULL DEFAULT '0',
  `gerak7` int(11) NOT NULL DEFAULT '0',
  `gerak8` int(11) NOT NULL DEFAULT '0',
  `gerak9` int(11) NOT NULL DEFAULT '0',
  `gerak10` int(11) NOT NULL DEFAULT '0',
  `gerak11` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `gerak1`, `gerak2`, `gerak3`, `gerak4`, `gerak5`, `gerak6`, `gerak7`, `gerak8`, `gerak9`, `gerak10`, `gerak11`) VALUES
(1, 'Bambang', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Winda', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Didi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Nisa', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Dimas', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Dedi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Santri', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Aqua', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'tes', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'hehe', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'coba tes', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
