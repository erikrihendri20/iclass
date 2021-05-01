-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 05:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL DEFAULT 2,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `role`, `status`) VALUES
(1, 'erik', 'erik', 'erik', 1, 1),
(2, 'pengajar1', 'pengajar1', 'pengajar1', 2, 0),
(3, 'erikik', 'erikerik', 'erik2005', 2, 1);

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
(1, 'sadsadasd', 1, '2021-04-15 00:00:00', '0000-00-00 00:00:00', 2, 'success', NULL),
(2, 'dasdsada', 1, '2021-04-01 00:00:00', '2021-04-03 00:00:00', 1, 'info', NULL),
(3, 'assasdsadsa', 1, '2021-04-01 00:00:00', '2021-04-01 00:00:00', 2, 'success', NULL),
(4, 'sadsadsadsadsad', 1, '2021-04-07 00:00:00', '2021-04-07 00:00:00', 1, 'info', NULL),
(5, 'sasaddsadas', 2, '2021-04-06 00:00:00', '2021-04-06 00:00:00', 2, 'success', NULL),
(6, '213123213213213213', 1, '2021-04-30 00:00:00', '2021-04-30 00:00:00', 1, 'info', NULL),
(8, 'coba', 1, '2021-04-28 00:00:01', '2021-04-28 23:59:01', 3, 'important', 1);

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
(2, 'sadsadsadad', 'test', 1, '2021-04-17 02:52:09', '2021-04-17 02:52:09', '2021-04-17 02:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `kuis`
--

CREATE TABLE `kuis` (
  `id` int(11) NOT NULL,
  `materi` varchar(50) NOT NULL,
  `kode_kuis` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuis`
--

INSERT INTO `kuis` (`id`, `materi`, `kode_kuis`) VALUES
(2, 'coba', 'ScVat');

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

--
-- Dumping data for table `kuis_soal_jawaban`
--

INSERT INTO `kuis_soal_jawaban` (`id`, `kode_kuis`, `no_kuis`, `soal`, `jawaban`, `pembahasan`) VALUES
(1, 'ScVat', 0, 'tumpak-sewu.jpg', 'C', 'VB APEL TK 3.png');

-- --------------------------------------------------------

--
-- Table structure for table `latihan`
--

CREATE TABLE `latihan` (
  `id` int(11) NOT NULL,
  `index_latihan` int(11) NOT NULL,
  `materi` varchar(100) NOT NULL,
  `pdf_path` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latihan`
--

INSERT INTO `latihan` (`id`, `index_latihan`, `materi`, `pdf_path`) VALUES
(1, 1, 'Percobaan', 'soal 1.pdf'),
(2, 2, 'Persamaan Trigonometri', 'Persamaan Trigonometri.pdf'),
(3, 3, 'Aljabar Linear', 'Aljabar Linear.pdf'),
(4, 4, 'Algoritma dan Struktur Data', 'Algoritma dan Struktur Data.pdf');

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
(18, 'Statistika 1', 4),
(19, 'Geometri Bidang Datar', 4),
(20, 'Geometri Bidang Ruang', 3),
(21, 'Statistika 2', 7);

-- --------------------------------------------------------

--
-- Table structure for table `mindmap`
--

CREATE TABLE `mindmap` (
  `id` int(11) NOT NULL,
  `materi` varchar(50) NOT NULL,
  `ext` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mindmap`
--

INSERT INTO `mindmap` (`id`, `materi`, `ext`) VALUES
(1, 'Aljabar', 'jpg'),
(2, 'Barisan dan Deret', 'png'),
(3, 'Eksponen', 'jpg'),
(4, 'Fungsi Kuadrat', 'jpg'),
(5, 'Fungsi', 'jpg'),
(6, 'Integral', 'jpg'),
(7, 'Limit', 'png'),
(8, 'Logaritma', 'jpg'),
(9, 'Matematika Keuangan', 'jpg'),
(10, 'Matriks', 'jpg'),
(11, 'Peluang', 'jpg'),
(12, 'Persamaan Garis', 'jpg'),
(13, 'Persamaan Kuadrat', 'jpg'),
(14, 'Persamaan Lingkaran', 'jpg'),
(15, 'Pertidaksamaan', 'jpg'),
(16, 'Statistika', 'png'),
(17, 'Suku Banyak', 'jpg'),
(18, 'Transformasi Geometri', 'jpg'),
(19, 'Trigonometri', 'jpg'),
(20, 'Turunan', 'jpg'),
(21, 'Vektor', 'jpg');

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
  `id` smallint(6) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `pertemuan` smallint(3) NOT NULL,
  `materi` varchar(50) NOT NULL,
  `ext_tn` varchar(10) NOT NULL,
  `ext_ppt` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekaman`
--

INSERT INTO `rekaman` (`id`, `kelas`, `pertemuan`, `materi`, `ext_tn`, `ext_ppt`) VALUES
(1, 'sadsadsadad', 1, 'Awwkwkwk', 'jpg', 'pptx'),
(2, 'sadsadsadad', 2, 'Aljabar', 'jpg', 'pptx');

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
(1, 'erik', 0, 'erik', 1, '09876543', '221810270@stis.ac.id', 'erca2005', '$2y$10$QYUYjLDOF.o4fwCaOA/6iOnVGtQ0MayXWT1aX4J3Xl3U1YCoBLtgG', '', 0, '2021-03-25 19:14:35', '2021-03-25 19:14:35', '2021-03-25 19:14:35'),
(2, 'erik', 1, 'erik', 3, '09876543', 'erik@gmail.com', 'erik2005', '$2y$10$3T24mxeFiyj5fgzw2J7xcO83hsDXmpNf3/AQQYJNutfGIgwEN3jpq', '1619615032_a013148b0a009edf16ff.jpg', 2, '2021-04-12 01:23:13', '2021-04-12 01:23:13', '2021-04-12 01:23:13'),
(3, 'Rian Alfa', 1, 'IPA', 3, '083180405022', 'rianalfa14@gmail.com', 'rianalfa', '$2y$10$g9bEiHvKLsPzVc9bTvm71.QTvl/sEFHqf/5OmIJMZ/Qwiqw5urZQy', '1619800159_deafae0883f0cb11029a.jpg', 2, '2021-04-11 04:10:40', '2021-04-11 04:10:40', '2021-04-11 04:10:40'),
(4, 'Akhmad Fadil Mubarok', 1, 'IPA', 1, '082226602929', '221810129@stis.ac.id', 'Dummy', '$2y$10$76TVuHvbxMqa6KniCCtw9uFPfgsYU6191LUB0naoe.8Bqxl4SN6gS', '1618813387_006ad5fcecd46f9f9feb.png', 2, '2021-04-12 06:25:07', '2021-04-13 07:21:44', '2021-04-12 06:25:07');

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
  ADD UNIQUE KEY `materi` (`materi`),
  ADD KEY `kode_kuis_2` (`kode_kuis`),
  ADD KEY `kode_kuis_3` (`kode_kuis`);

--
-- Indexes for table `kuis_soal_jawaban`
--
ALTER TABLE `kuis_soal_jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_kuis` (`kode_kuis`);

--
-- Indexes for table `latihan`
--
ALTER TABLE `latihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mindmap`
--
ALTER TABLE `mindmap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekaman`
--
ALTER TABLE `rekaman`
  ADD UNIQUE KEY `id` (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kuis`
--
ALTER TABLE `kuis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kuis_soal_jawaban`
--
ALTER TABLE `kuis_soal_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `latihan`
--
ALTER TABLE `latihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mindmap`
--
ALTER TABLE `mindmap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rekaman`
--
ALTER TABLE `rekaman`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
