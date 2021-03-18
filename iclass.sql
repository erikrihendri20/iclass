-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 06:51 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iclass`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas_id` int(1) NOT NULL DEFAULT 0,
  `jurusan` varchar(50) NOT NULL,
  `pilih-paket` int(1) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bukti-pembayaran` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `kelas_id`, `jurusan`, `pilih-paket`, `telepon`, `email`, `username`, `password`, `bukti-pembayaran`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 'erik', 0, 'dfdsfsfsd', 3, '1234567890', 'erca.rihendri@gmail.com', 'user2', '$2y$10$JGr4vxGCKlbRPdVzDoNhguOIcxbwLJF22ToGZ2HOa8I3a3xpu7JGy', '', 0, '2021-03-15 09:31:05', '2021-03-15 09:31:05', '2021-03-15 09:31:05'),
(14, 'sad', 0, '12345', 1, '12345678', '221810270@stis.ac.id', '1234567890', '$2y$10$WcgjXbFsx9X/Z7.W1KKdFeAJNsXbpqfVQKhIk2xHQv7pGQJ2jOSw.', '', 0, '2021-03-15 09:33:16', '2021-03-15 09:33:16', '2021-03-15 09:33:16');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
