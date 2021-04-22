-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 03:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'erik', 'erik', 'erik');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `kode_kelas` int(11) NOT NULL,
  `start_event` datetime DEFAULT NULL,
  `end_event` datetime DEFAULT NULL,
  `jenis` int(1) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `allDay` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `kode_kelas`, `start_event`, `end_event`, `jenis`, `class_name`, `allDay`) VALUES
(109, 'sadsadasd', 1, '2021-04-15 00:00:00', '0000-00-00 00:00:00', 2, 'success', NULL),
(111, 'dasdsada', 1, '2021-04-01 00:00:00', '2021-04-03 00:00:00', 1, 'info', NULL),
(116, 'assasdsadsa', 1, '2021-04-01 00:00:00', '2021-04-01 00:00:00', 2, 'success', NULL),
(117, 'sadsadsadsadsad', 1, '2021-04-07 00:00:00', '2021-04-07 00:00:00', 1, 'info', NULL),
(118, 'sasaddsadas', 2, '2021-04-06 00:00:00', '2021-04-06 00:00:00', 2, 'success', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `link-meeting` varchar(255) NOT NULL,
  `kode_paket` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `link-meeting`, `kode_paket`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, '3si2', 'asdsadsada', 3, '2021-04-17 02:44:40', '2021-04-17 02:44:40', '2021-04-17 02:44:40'),
(2, 'sadsadsadad', '', 1, '2021-04-17 02:52:09', '2021-04-17 02:52:09', '2021-04-17 02:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `kuis`
--

CREATE TABLE `kuis` (
  `id` int(11) NOT NULL,
  `materi` varchar(50) NOT NULL,
  `kode_kuis` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kuis_soal_jawaban`
--

CREATE TABLE `kuis_soal_jawaban` (
  `id` int(11) NOT NULL,
  `kode_kuis` varchar(5) NOT NULL,
  `no_kuis` int(11) NOT NULL,
  `soal` varchar(150) NOT NULL,
  `jawaban` varchar(1) NOT NULL,
  `pembahasan` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` smallint(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `parts` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `name`, `parts`) VALUES
(1, 'Barisan dan Deret', 3),
(2, 'Persamaan Eksponensial', 3),
(3, 'Suku Banyak', 2),
(4, 'Persamaan dan Fs Kuadrat', 5),
(5, 'Fungsi Komposisi dan Invers', 4),
(6, 'Persamaan garis lurus', 3),
(7, 'Logaritma', 4),
(8, 'Matriks', 4),
(9, 'Trigonometri', 5),
(10, 'Limit', 0),
(11, 'Limit Fungsi Trigonometri', 3),
(12, 'Turunan', 4),
(13, 'Turunan Fungsi Trigonometri', 0),
(14, 'Integral subs, parsial, aplikatif', 0),
(15, 'Integral tak tentu', 0),
(16, 'Lingkaran', 5),
(17, 'Transformasi Geometri', 3),
(18, 'Kaidah Pencacahan, Permutasi, Kombinasi, dan Pelua', 4),
(19, 'Geometri Bidang Datar', 4),
(20, 'Geometri Bidang Ruang', 3),
(21, 'Statistika', 7);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama`) VALUES
(1, 'reguler'),
(2, 'premium'),
(3, 'premium+');

-- --------------------------------------------------------

--
-- Table structure for table `rekaman`
--

CREATE TABLE `rekaman` (
  `id` smallint(3) NOT NULL,
  `materi` varchar(50) NOT NULL,
  `ext_tn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekaman`
--

INSERT INTO `rekaman` (`id`, `materi`, `ext_tn`) VALUES
(1, 'Aljabar', 'jpeg'),
(2, 'Baris dan Deret', 'png'),
(3, 'Awwkwkwk', 'jpg'),
(4, 'Bablabla', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kode_kelas` int(1) NOT NULL DEFAULT 0,
  `jurusan` varchar(50) NOT NULL,
  `kode_paket` int(1) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `kode_kelas`, `jurusan`, `kode_paket`, `telepon`, `email`, `username`, `password`, `bukti_pembayaran`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(16, 'erik', 0, 'erik', 1, '09876543', '221810270@stis.ac.id', 'erca2005', '$2y$10$QYUYjLDOF.o4fwCaOA/6iOnVGtQ0MayXWT1aX4J3Xl3U1YCoBLtgG', '', 0, '2021-03-25 19:14:35', '2021-03-25 19:14:35', '2021-03-25 19:14:35'),
(17, 'erik', 0, 'erik', 1, '09876543', 'erik@gmail.com', 'erik2005', '$2y$10$3T24mxeFiyj5fgzw2J7xcO83hsDXmpNf3/AQQYJNutfGIgwEN3jpq', '', 0, '2021-04-12 01:23:13', '2021-04-12 01:23:13', '2021-04-12 01:23:13'),
(18, 'Rian Alfa', 0, 'IPA', 1, '083180405022', 'rianalfa14@gmail.com', 'rianalfa', '$2y$10$g9bEiHvKLsPzVc9bTvm71.QTvl/sEFHqf/5OmIJMZ/Qwiqw5urZQy', '', 0, '2021-04-11 04:10:40', '2021-04-11 04:10:40', '2021-04-11 04:10:40'),
(19, 'Akhmad Fadil Mubarok', 2, 'IPA', 1, '082226602929', '221810129@stis.ac.id', 'Dummy', '$2y$10$76TVuHvbxMqa6KniCCtw9uFPfgsYU6191LUB0naoe.8Bqxl4SN6gS', '1618813387_006ad5fcecd46f9f9feb.png', 2, '2021-04-12 06:25:07', '2021-04-13 07:21:44', '2021-04-12 06:25:07'),
(20, 'erikrca', 0, 'fddfdf', 1, '121212121', 'erca.rihendri@gmail.com', 'erikrca', '$2y$10$5PQCIT.O3k8uNwxhJ2Wstuwj.KNUB64nsZ8Sa5iphRCoN1ygGo8.G', '', 0, '2021-04-15 07:11:52', '2021-04-15 07:11:52', '2021-04-15 07:11:52'),
(21, 'erererere', 0, 'rererer', 3, '231238213213', 'nurani.aprilia@bps.go.id', 'erererer', '$2y$10$bukIa4t85bbjZipz2MPZuuH4021dgpSYkFORQmHmwGDHj3/flAHE6', '', 0, '2021-04-15 07:12:41', '2021-04-15 07:12:41', '2021-04-15 07:12:41'),
(22, 'sadaskldjkl', 0, 'sadasdsadadas', 0, '832191273981278', 'kasdsl@sakd.sad', 'dasdsadsadfwr', '$2y$10$wtP7I1/UXX7Pmw4JoxtiFuLpdIhVKJt9cGV7R88ePOU9FvAeY7NFy', '', 0, '2021-04-17 02:38:57', '2021-04-17 02:38:57', '2021-04-17 02:38:57'),
(23, 'sadsadaskjdsakjh', 0, 'sadksakldjadklasj', 3, '098765432', 'sadsad@sad.sada', 'sadjsakdkasdakj', '$2y$10$gHNz9C79ogUwY84wCB9xLOj18xX20AMshC5fDD3ZyoJ0x0DsJytWC', '', 0, '2021-04-17 02:40:35', '2021-04-17 02:40:35', '2021-04-17 02:40:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_kuis` (`kode_kuis`),
  ADD KEY `kode_kuis_2` (`kode_kuis`),
  ADD KEY `kode_kuis_3` (`kode_kuis`);

--
-- Indexes for table `kuis_soal_jawaban`
--
ALTER TABLE `kuis_soal_jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_kuis` (`kode_kuis`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kuis`
--
ALTER TABLE `kuis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuis_soal_jawaban`
--
ALTER TABLE `kuis_soal_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kuis_soal_jawaban`
--
ALTER TABLE `kuis_soal_jawaban`
  ADD CONSTRAINT `kuis_soal_jawaban_ibfk_1` FOREIGN KEY (`kode_kuis`) REFERENCES `kuis` (`kode_kuis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
