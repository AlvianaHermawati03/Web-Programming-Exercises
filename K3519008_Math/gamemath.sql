-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Mei 2021 pada 17.04
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamemath`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `score` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `player`
--

INSERT INTO `player` (`id`, `name`, `email`, `score`) VALUES
(1, 'Marinka', 'marin@gmail.com', '0'),
(28, 'Nana', 'nana@gmail.com', '30'),
(29, 'Nana', 'nana@gmail.com', '30'),
(30, 'Nana', 'nana@gmail.com', '30'),
(45, 'Marinka', 'marin@gmail.com', '70'),
(46, 'Nana', 'nana@gmail.com', '100'),
(47, 'Nana', 'nana@gmail.com', '100'),
(53, 'Nana', 'nana@gmail.com', '110'),
(54, 'Nana', 'nana@gmail.com', '110'),
(55, 'Nana', 'nana@gmail.com', '110'),
(56, 'Nana', 'nana@gmail.com', '110'),
(57, 'Nana', 'nana@gmail.com', '110'),
(58, 'Nana', 'nana@gmail.com', '110'),
(59, 'Nana', 'nana@gmail.com', '110'),
(60, 'Nana', 'nana@gmail.com', '110'),
(61, 'Nana', 'nana@gmail.com', '110'),
(62, 'Nana', 'nana@gmail.com', '110'),
(63, 'Nana', 'nana@gmail.com', '110'),
(64, 'Nana', 'nana@gmail.com', '110'),
(65, 'Nana', 'nana@gmail.com', '110'),
(66, 'Nana', 'nana@gmail.com', '110'),
(72, 'Nana', 'nana@gmail.com', '80'),
(73, 'Nana', 'nana@gmail.com', '80'),
(74, 'Nana', 'nana@gmail.com', '80'),
(75, 'Nana', 'nana@gmail.com', '80');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
