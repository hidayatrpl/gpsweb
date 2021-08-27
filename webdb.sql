-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 05:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aplikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `webdb`
--

CREATE TABLE `webdb` (
  `latitude` varchar(100) NOT NULL,
  `longtitude` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webdb`
--

INSERT INTO `webdb` (`latitude`, `longtitude`, `lokasi`, `tanggal`, `deskripsi`, `gambar`, `id`) VALUES
('-2134152523232', '3232423432', 'pantai', '2021-08-10', 'libur', 'pantai.jpg', 3),
('-325325325', '235235325', 'pantai trunk bay', '2021-08-02', 'week', 'pantai1.jpg', 5),
('-6.3417015740266445', '106.63722685439525', 'pombensin', '2021-08-19', 'ss', '', 99),
('2312312', '1231312', '123123', '2021-08-19', 'k', '', 100),
('-6.3417015740266445', '106.63722685439525', 'pombensin', '2021-08-26', 'a', '', 104),
('-6.3417015740266445', '106.63722685439525', 'pombensin', '2021-08-25', 's', '', 105),
('-6.3417015740266445', '106.63722685439525', '123123', '2021-08-12', 'ssss', '', 111),
('-6.3417015740266445', '106.63722685439525', 'pombensin', '2021-08-17', 'aaaa', '', 112),
('-6.3417015740266445', '106.63722685439525', 'sssss', '2021-08-20', 'sss', NULL, 113),
('-6.3417015740266445', '106.63722685439525', 'pombensin', '0000-00-00', 'z', NULL, 114),
('-6.3417015740266445', '106.63722685439525', 'samudra', '2021-08-26', 'sss', NULL, 116),
('-6.3417015740266445', '106.63722685439525', 'sss', '2021-09-03', 'aaaaass', NULL, 117);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `webdb`
--
ALTER TABLE `webdb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `latitude` (`latitude`,`longtitude`,`lokasi`,`tanggal`,`deskripsi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `webdb`
--
ALTER TABLE `webdb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
