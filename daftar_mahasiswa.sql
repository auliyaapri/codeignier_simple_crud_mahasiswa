-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 07:31 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` int(10) NOT NULL,
  `email` text NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`) VALUES
(1, 'Auliya Apri', 19210480, 'apri.wiguna@gmail.com', 'Sistem Informasi'),
(2, 'Bang Dea Afrizal Youtuber ', 19210481, 'dea@gmail.com', 'Teknik Informatika'),
(6, 'Alan Walker', 19210481, 'alan@gmail.com', 'Sistem Informasi'),
(9, 'Ayu Windows', 19210485, 'ayu@gmail.com', 'Sistem Informasi'),
(14, 'Nuri Putri Amelia', 19210489, 'nuri@gmail.com', 'Sistem Informasi'),
(15, 'hiwdiwi', 1212, 'aaaadddd@gmail.com', 'Teknik Informatika'),
(16, 'Meri Astuti', 19210450, 'astuti@gmail.com', 'Sistem Informasi'),
(17, 'M. Daffa ', 19210485, 'daffa@gmail.com', 'Teknik Informatika'),
(18, 'Adib Wibi', 19210450, 'adib@gmail.com', 'Teknik Informatika'),
(19, 'Widodo Dwianto', 19210580, 'widodo@gmail.com', 'Teknik Industri'),
(20, 'Rizdhan', 19210345, 'rizdhan@gmail.com', 'Teknologi Informasi'),
(21, 'M. Raihan', 19210321, 'raihan@gmail.com', 'Desain Komunikasi Visual'),
(22, 'Hapis', 192101234, 'hapis@gmail.com', 'Manajemen');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
