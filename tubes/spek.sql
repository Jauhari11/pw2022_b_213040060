-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 05:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2022_b_213040044`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `npm` char(9) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `npm`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(1, '213040044', 'Rd. Deni Pajrianingrat', 'radenii2002@gmail.com', 'Teknik Informatika', 'img/unknown1.jpg'),
(2, '213040040', 'Acep Imam Hambali', 'acepimam@gmail.com', 'Teknik Informatika', 'img/unknown2.jpg'),
(3, '213040042', 'Rendi Sopian', 'rendisopian@gmail.com', 'Teknik Informatika', 'img/unknown3.jpg'),
(4, '213040057', 'Muhamad Jamaludin', 'jamjam22@gmail.com', 'Teknik Informatika', 'img/unknown2.jpg'),
(5, '213040064', 'Salma Salsabila', 'salma@yahoo.com', 'Teknik Informatika', 'img/unknown1.jpg'),
(6, '213040055', 'Putri Aulia Maulidina', 'putriaulia@yahoo.com', 'Teknik Informatika', 'img/unknown2.jpg'),
(7, '213040041', 'Najwa Septiana Arimbi Limbangan', 'najwasepti@gmail.com', 'Teknik Informatika', 'img/unknown3.jpg'),
(8, '213040065', 'M. Paisal Ambari', 'paisalambari@gmail.com', 'Teknik Informatika', 'img/unknown1.jpg'),
(9, '213040053', 'Juan Aditya Wikarma', 'juan22@yahoo.com', 'Teknik Informatika', 'img/unknown2.jpg'),
(10, '213040067', 'Audia Hezra Destamedra', 'audihezra@gmail.com', 'Teknik Informatika', 'img/unknown3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
