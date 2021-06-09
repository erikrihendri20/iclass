-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 10:33 AM
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
(6, '213123213213213213', 1, '2021-04-30 00:00:00', '2021-04-30 00:00:00', 1, 'info', NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `kuis_hasil`
--

CREATE TABLE `kuis_hasil` (
  `id` int(11) NOT NULL,
  `kuis_id` int(11) NOT NULL,
  `events_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `jawaban_benar` int(11) NOT NULL,
  `jawaban_salah` int(11) NOT NULL,
  `jawaban_kosong` int(11) NOT NULL,
  `jawaban_jumlah` int(11) NOT NULL,
  `skor` int(11) NOT NULL
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
-- Table structure for table `latihan`
--

CREATE TABLE `latihan` (
  `id` int(11) NOT NULL,
  `materi` varchar(100) NOT NULL,
  `pdf_path` varchar(150) NOT NULL,
  `kelas_id` int(11) NOT NULL
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
(4, 'Akhmad Fadil Mubarok', 1, 'IPA', 2, '082226602929', '221810129@stis.ac.id', 'Dummy', '$2y$10$76TVuHvbxMqa6KniCCtw9uFPfgsYU6191LUB0naoe.8Bqxl4SN6gS', '1618813387_006ad5fcecd46f9f9feb.png', 2, '2021-04-12 06:25:07', '2021-04-13 07:21:44', '2021-04-12 06:25:07'),
(124, 'Jeffry Rice', 0, 'IPA', 2, '+18054461910', 'harris.vita@yahoo.com', 'ruthie46', '=CX(|\\OkxD/+ojSnj', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(125, 'Miss Elta Towne', 0, 'IPA', 2, '+1.959.515.0006', 'gerhold.cortney@gmail.com', 'fahey.lavinia', ')0,.sKE', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(126, 'Mrs. Kattie Wiegand', 0, 'IPA', 3, '+14848720056', 'cathryn68@yahoo.com', 'ellie45', '3JB6~aIY]JVaH1ulc!89', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(127, 'Nedra Nolan', 0, 'IPA', 3, '+1.702.749.9748', 'bernadette.hills@gmail.com', 'ihauck', 'CUPihTWgNtq+mjMT,bYk', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(128, 'Elouise Hessel', 0, 'IPA', 2, '1-248-960-7145', 'rjakubowski@gmail.com', 'jose.legros', '.!^:;^^L', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(129, 'Mr. Alvah Johns', 0, 'IPA', 3, '(801) 546-5750', 'lavinia55@hotmail.com', 'ophelia39', '</$\'ax9E', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(130, 'Vince Bauch', 0, 'IPA', 2, '832-512-9317', 'shannon.abernathy@botsford.org', 'lisette.sipes', 'nZKDhM>oo<dh@LK', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(131, 'Duncan O\'Connell', 0, 'IPA', 2, '+12514237522', 'uparisian@bernier.com', 'rice.xander', 'wVKN&/', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(132, 'Erin Schowalter', 0, 'IPA', 2, '+1.443.957.0034', 'hessel.madelynn@pacocha.com', 'yhauck', 'fWRNpqp0h3D2`T2>', 'lalala', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(133, 'Ms. Izabella Wilkinson', 0, 'IPA', 2, '+1 (843) 216-85', 'roel11@gmail.com', 'pierre.gorczany', 'd$hz@tB,\'QP*m@', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(134, 'Anabel Hand', 0, 'IPA', 3, '+1 (240) 491-79', 'jamel94@hotmail.com', 'morissette.frances', 'nF^.hM^cI\\}^Vf\\)%X', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(135, 'Cara Kihn', 0, 'IPA', 3, '+1.720.430.5799', 'rippin.kirstin@schulist.com', 'icremin', 'g\"dviNNIK~)>*^#9', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(136, 'Prof. Jaydon Feeney Sr.', 0, 'IPA', 3, '1-540-566-0669', 'ludie56@miller.biz', 'sheldon18', '#`@CHXH,QP-{yaW+I`Jn', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(137, 'Helen Purdy', 0, 'IPA', 2, '+1-251-499-4882', 'jeanne49@wilderman.com', 'dach.justice', '|U&%r<Xa*64/7o\'\\', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(138, 'Mara O\'Conner', 0, 'IPA', 3, '(334) 817-5786', 'keenan.barton@brakus.biz', 'marlin30', '@xun>9n\\', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(139, 'Hosea Rempel', 0, 'IPA', 2, '352.433.8072', 'nkuvalis@hotmail.com', 'grayce78', 'r7<a,}v^1mJi7_GC;c', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(140, 'Elinore Ankunding', 0, 'IPA', 2, '251-777-1445', 'queen94@heidenreich.net', 'abshire.monte', 'd6Q(Nkr%8ui[t`P=$1b^', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(141, 'Katarina Weber DVM', 0, 'IPA', 2, '1-410-352-7698', 'rfahey@greenfelder.net', 'darrin.gleichner', '[e-!XrQW3', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:14'),
(142, 'Eve Sanford', 0, 'IPA', 3, '435.874.7836', 'abraun@lehner.biz', 'ebecker', 'E#Y.U(:VeR', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(143, 'Jo Kutch', 0, 'IPA', 2, '(785) 213-9632', 'lawson01@renner.com', 'darren45', '7!GlOj/(r03ca?{@', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(144, 'Olaf Altenwerth', 0, 'IPA', 2, '920-619-2476', 'ikoelpin@gmail.com', 'aniya73', 'Qtq8(QwO+fuBFVp,$1', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(145, 'Mr. Maximus Roob III', 0, 'IPA', 3, '605-824-8883', 'lorena.jacobs@stroman.info', 'gia18', '-g62pV', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(146, 'Allan Wuckert', 0, 'IPA', 3, '270-986-9006', 'purdy.herman@parisian.info', 'hudson.dustin', 'tBu,}!/', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(147, 'Cary Miller', 0, 'IPA', 2, '(912) 673-1694', 'spencer.maynard@leffler.com', 'vpurdy', 'I-:Zs1uDD', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(148, 'Luigi Hettinger MD', 0, 'IPA', 3, '743.990.8634', 'lucius47@gmail.com', 'pollich.jaqueline', 'WO,k9(@B[', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(149, 'Dr. Vena Mertz', 0, 'IPA', 3, '872.774.9460', 'allison.krajcik@shields.org', 'abbott.lina', '~MP04k\'>Rq:*@ed0ZIl', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(150, 'Mr. Ludwig Huels PhD', 0, 'IPA', 2, '+1-445-835-9654', 'schiller.philip@fay.com', 'josefina.daugherty', 'F(=_BO9xLV)Ba!bS5-Nh', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(151, 'Loma Howe', 0, 'IPA', 2, '+1 (281) 886-15', 'srau@hotmail.com', 'mmonahan', ':xzxj&O`5o|n4', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(152, 'Cleve Kuhlman II', 0, 'IPA', 3, '346.452.8504', 'lincoln01@hotmail.com', 'schmeler.harley', 'l6b4CRyTU&s18f+u/y~', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(153, 'Ms. Rebeca Swaniawski IV', 0, 'IPA', 3, '505-728-9722', 'maximillian73@hotmail.com', 'uzboncak', '>3sZ(yES', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(154, 'Will Deckow Sr.', 0, 'IPA', 2, '(857) 471-3925', 'wward@hotmail.com', 'pkertzmann', ')X&Pa\'?zTq*;', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(155, 'Frances Bosco V', 0, 'IPA', 3, '860.255.3521', 'ymorissette@johnston.com', 'greenfelder.jerald', 'YG*9\\Rc``?Z!k', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(156, 'Mrs. Kaylie Barrows', 0, 'IPA', 2, '+12546794133', 'selena.pacocha@ortiz.biz', 'cristian77', 'ukALx&', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(157, 'Amani Lakin', 0, 'IPA', 2, '805-355-9358', 'damon.emmerich@jaskolski.com', 'madelyn28', 'QjeOZGVu|wZwQGOZ?$pd', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(158, 'Collin Wisozk', 0, 'IPA', 3, '+1 (559) 631-01', 'njohns@yahoo.com', 'fay.monserrate', 'qAK@$Mr>ngLNP', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(159, 'Haylie Gutmann', 0, 'IPA', 3, '706-635-8287', 'nicolas.zachary@abshire.info', 'sanford.german', 'qIr-Jr|X', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(160, 'Prof. Arno Windler DVM', 0, 'IPA', 3, '574.577.5425', 'elaina.buckridge@kautzer.org', 'brekke.virgie', '`%6XL,re', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(161, 'Mr. Fern Howell', 0, 'IPA', 3, '1-716-468-5605', 'arlie16@yahoo.com', 'tillman69', 'rQW?Tk#uCp', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(162, 'Mr. Jayden Hyatt Sr.', 0, 'IPA', 3, '+1-727-243-0677', 'zconsidine@bailey.net', 'logan.goyette', '&ryx3It:gipH7(}snb', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(163, 'Freda Von', 0, 'IPA', 2, '+13032980245', 'bogisich.milford@thompson.biz', 'chris38', '12QDQ4r-f5}lo~', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(164, 'Prof. Roxane Pfannerstill', 0, 'IPA', 3, '+1.646.897.6317', 'wcormier@ledner.com', 'vhayes', '8WadM`', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(165, 'Estel Mante', 0, 'IPA', 3, '1-364-259-6272', 'raynor.lester@gmail.com', 'felicita34', 'h;CM?Z~<qk>jSH', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(166, 'Prof. Lavinia Feil', 0, 'IPA', 3, '661-474-2755', 'lempi.johnston@becker.com', 'keebler.coleman', 'SZ/jBaV[', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(167, 'Dr. Reymundo Roberts', 0, 'IPA', 3, '785.487.8622', 'camille13@steuber.com', 'kiehn.elinor', '/0Ko2BWW{p^', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(168, 'Percival Torphy', 0, 'IPA', 2, '+1.818.967.4181', 'ngaylord@ferry.info', 'ona39', 'pwcd+5hq`NXp&2.', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(169, 'Clementina Corkery', 0, 'IPA', 2, '636.857.5321', 'aurore84@larkin.org', 'keaton.herman', 'khMv1mU~c(#$@Z', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(170, 'Dillan Metz', 0, 'IPA', 2, '229.974.0295', 'bailey.leslie@stoltenberg.com', 'nicola63', 'uJgt#eMBFE]L*Yvvd1', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(171, 'Yvonne Rutherford', 0, 'IPA', 3, '+1.956.239.5590', 'elliott49@osinski.com', 'pkerluke', '.fZXU16C`j\'32L^3i|9', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(172, 'Mose VonRueden', 0, 'IPA', 3, '(832) 601-0600', 'maximus30@gulgowski.info', 'ashly67', 'y6|:$)qe]qRZxx0m:d', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(173, 'Chadrick Marks', 0, 'IPA', 2, '1-678-543-3171', 'douglas.mateo@breitenberg.biz', 'langworth.luciano', '`9|Q|5Bt=Q?', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(174, 'Obie Goodwin V', 0, 'IPA', 3, '254-333-1367', 'ryan.pinkie@abernathy.com', 'tlueilwitz', '{!}B3<{!', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(175, 'Selina Osinski', 0, 'IPA', 2, '864.712.0903', 'jpouros@hotmail.com', 'burdette75', 'b(|\"75GYT', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(176, 'Myrtice Berge MD', 0, 'IPA', 3, '763-266-1629', 'yullrich@hotmail.com', 'hermiston.simone', '9l7{*DC3_}f\"e0f\">A', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(177, 'Oda Medhurst DVM', 0, 'IPA', 3, '(520) 621-7286', 'qcummings@yahoo.com', 'amanda24', 'JUWn*n2mVQ!a', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(178, 'Nikko Raynor', 0, 'IPA', 3, '+1-657-742-6639', 'alexanne70@yahoo.com', 'lgutmann', '(!}@6>z31iuzV0', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(179, 'Sven Frami V', 0, 'IPA', 2, '1-770-480-2822', 'kshlerin.chaim@hotmail.com', 'schumm.jarret', 'U3Bsbko?N@(6\'aC', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(180, 'Brook Brown I', 0, 'IPA', 3, '(283) 592-5050', 'keira.cassin@casper.org', 'rebecca.kassulke', 'Kj7wmQK9hlZN4_9', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(181, 'Dr. Terrence Paucek I', 0, 'IPA', 3, '+1 (754) 403-09', 'coby10@gmail.com', 'hilma.casper', ',8L\\=J:.({/s', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(182, 'Mrs. Vivien Zulauf Jr.', 0, 'IPA', 2, '863-970-7650', 'udaugherty@feil.org', 'vladimir.terry', '#;~LWfD', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(183, 'Mr. Orrin McKenzie III', 0, 'IPA', 3, '1-458-279-4518', 'swaniawski.misty@yahoo.com', 'lula58', 'CB{iToHXlw<[)\\v\"w', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(184, 'Vivien Bednar PhD', 0, 'IPA', 2, '786-416-9950', 'orland.kutch@gmail.com', 'boyd13', '.+Z?CWZk8H', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(185, 'Jayme Lesch Jr.', 0, 'IPA', 2, '(304) 951-4361', 'freddie08@hotmail.com', 'rogahn.alessia', 'J:nkr_U', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(186, 'Jana Hane', 0, 'IPA', 3, '+1.281.787.3820', 'ashton07@osinski.info', 'tjacobson', 'HRcw~-+Y', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(187, 'Maudie Hand', 0, 'IPA', 2, '872.225.8424', 'mueller.braeden@bailey.com', 'bpagac', '5yridNp', 'lalala', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(188, 'Kenna Lakin', 0, 'IPA', 3, '+1.737.758.9537', 'swaniawski.anissa@langworth.biz', 'mertz.roberto', 'p6[K{w7%8GYYGdsM\\V/', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(189, 'Trisha Grant', 0, 'IPA', 2, '(857) 881-4715', 'malinda83@hotmail.com', 'wisozk.fredrick', 'd^HZ{$1', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(190, 'Amina Christiansen', 0, 'IPA', 3, '1-351-357-0622', 'brielle39@rosenbaum.com', 'mackenzie.corwin', 'Dbf1\'gI', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(191, 'Ms. Maryse Heathcote V', 0, 'IPA', 3, '+1-347-352-6435', 'lolita84@gmail.com', 'kreynolds', '!$gvUfRF[DtVS5]7bH', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(192, 'Dena Turcotte', 0, 'IPA', 2, '(769) 718-6267', 'ajohnson@bernhard.biz', 'orie64', ';}AH\"egm', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(193, 'Mallie Bernhard', 0, 'IPA', 2, '323.722.2844', 'stephon.gaylord@breitenberg.net', 'icole', 'U|jC=A^$OwJHzw-', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(194, 'Deondre Shanahan', 0, 'IPA', 3, '+1-831-397-0156', 'osenger@gmail.com', 'royal48', 'vd:c&oGvu)', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(195, 'Brianne Ziemann', 0, 'IPA', 2, '+1-458-488-8624', 'sabrina58@bergstrom.com', 'vernie.skiles', 'cA&g3FJ1Lp', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(196, 'Mr. Jayce Russel', 0, 'IPA', 2, '313-707-1822', 'retha.schulist@corkery.com', 'schimmel.tad', '&8my?^.]<@4', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(197, 'Margret Daugherty', 0, 'IPA', 3, '417.639.3525', 'tevin.roob@bauch.net', 'tracy.brakus', '%.\"]J~]=K(;k$bh`Cs', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(198, 'Tevin Schaden II', 0, 'IPA', 2, '+1.432.747.0889', 'viva81@jacobs.biz', 'cordie.eichmann', '[O1;XomQXW%r', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(199, 'Wilber Keeling', 0, 'IPA', 3, '+1 (505) 955-83', 'syble84@hotmail.com', 'gutkowski.asa', '2&fGL;6a(', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(200, 'Peter Padberg MD', 0, 'IPA', 2, '417.741.5262', 'vincenzo01@mayert.com', 'abdul.hodkiewicz', '-0K3|[JQ', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(201, 'Alexander Schroeder Sr.', 0, 'IPA', 3, '1-785-368-4715', 'dangelo.schroeder@grimes.com', 'general.hahn', 'c=\"qM<sxn$q', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(202, 'Mayra Stracke', 0, 'IPA', 2, '+1.423.621.2323', 'therese68@zboncak.biz', 'labadie.cordelia', 't6lV0w^dnwF<B}', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(203, 'Miss Yolanda Heathcote', 0, 'IPA', 3, '+13419574865', 'chet19@leuschke.org', 'nhackett', 'h&p4u@uV]N&\"&SDW@W', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(204, 'Mallie Hintz PhD', 0, 'IPA', 2, '+1-559-312-9048', 'spinka.madie@gmail.com', 'edoyle', '%o\\,24#<Yj-l4Y', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(205, 'Ellsworth Wilderman', 0, 'IPA', 2, '+1-754-473-0514', 'danyka18@abernathy.com', 'durward.gleason', 'WZ!Al0952|NL)qb]i~lB', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(206, 'Mrs. Brandyn Renner', 0, 'IPA', 2, '+1 (534) 637-20', 'cathryn.mckenzie@damore.com', 'grady.kenny', 't1/,HX+\\U', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(207, 'Prof. Dayne Marks', 0, 'IPA', 2, '+1.248.882.1090', 'tyreek69@gulgowski.com', 'jana53', '=>EKB?{', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(208, 'Prof. Kattie Gislason III', 0, 'IPA', 3, '+1-838-983-7982', 'jflatley@ohara.com', 'ffritsch', '6M`rN05Yy+', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(209, 'Lewis Gutmann', 0, 'IPA', 2, '920.899.9821', 'ada.hayes@gmail.com', 'virginie.dickens', '_+-GO<RRk<)7;7[', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(210, 'Lyda Reichert', 0, 'IPA', 2, '830.612.1011', 'heber26@yahoo.com', 'waelchi.nettie', '1gqqA;QL7,[o&!', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(211, 'Angel Mertz MD', 0, 'IPA', 2, '1-530-626-7255', 'ohackett@hotmail.com', 'brandt01', 'Yv|HXr9`z<q\"[', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(212, 'Bridget Johns', 0, 'IPA', 3, '1-217-538-6016', 'vstrosin@wiza.org', 'fwintheiser', 'ay>MslOUdX', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(213, 'Forest Jones', 0, 'IPA', 3, '+18324837167', 'ljast@yahoo.com', 'imani85', ';4#y~x.77$w\"lf', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(214, 'Lois Halvorson', 0, 'IPA', 3, '+19739293743', 'rconsidine@windler.org', 'micah.romaguera', 'CD8~L;W,6Z', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(215, 'Dr. Jose Weber DVM', 0, 'IPA', 2, '220.879.9986', 'trycia20@reilly.com', 'herzog.jordi', 'A:jTRo/', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(216, 'Prof. Shanel Mayer', 0, 'IPA', 3, '+1.541.914.4565', 'lemmerich@reynolds.biz', 'frami.whitney', '::_j@$=-j', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(217, 'Ike Miller', 0, 'IPA', 2, '+1 (308) 342-45', 'sigurd21@nitzsche.com', 'collins.hermina', '$?Nl,STR-lJmh3k\'0V', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(218, 'Meta Nader Sr.', 0, 'IPA', 2, '+1.919.902.1229', 'isom.walter@brakus.com', 'quitzon.elinor', '0idEQ>,69E>>w!', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(219, 'Hyman Graham', 0, 'IPA', 3, '281.823.7410', 'qbailey@hotmail.com', 'vkihn', ',Y?!W_Zj`/oV@ue', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(220, 'Otilia Reilly', 0, 'IPA', 3, '+1.774.498.2720', 'lesch.sim@cassin.com', 'thodkiewicz', 'KfyF1^})(', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(221, 'Blair Stark MD', 0, 'IPA', 3, '740-309-7258', 'little.casimer@gmail.com', 'emanuel26', '-I&.e`3xF+t?i7C#', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(222, 'Ola Bednar', 0, 'IPA', 2, '1-425-836-7843', 'veum.nico@hand.biz', 'damion72', ']JuO\\=1_P]i}4u>\'?rK', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15'),
(223, 'Ludie Altenwerth', 0, 'IPA', 3, '1-504-716-6937', 'lcummings@yahoo.com', 'nolan.jarvis', 'W8w;Sl9a}', 'lalala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-06-09 05:16:15');

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
-- Indexes for table `kuis_hasil`
--
ALTER TABLE `kuis_hasil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kuis_id` (`kuis_id`,`events_id`,`users_id`),
  ADD KEY `events_id` (`events_id`),
  ADD KEY `users_id` (`users_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_id` (`kelas_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- AUTO_INCREMENT for table `kuis_hasil`
--
ALTER TABLE `kuis_hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuis_soal_jawaban`
--
ALTER TABLE `kuis_soal_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `latihan`
--
ALTER TABLE `latihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kuis_hasil`
--
ALTER TABLE `kuis_hasil`
  ADD CONSTRAINT `kuis_hasil_ibfk_1` FOREIGN KEY (`events_id`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kuis_hasil_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kuis_hasil_ibfk_3` FOREIGN KEY (`kuis_id`) REFERENCES `kuis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kuis_soal_jawaban`
--
ALTER TABLE `kuis_soal_jawaban`
  ADD CONSTRAINT `kuis_soal_jawaban_ibfk_1` FOREIGN KEY (`kode_kuis`) REFERENCES `kuis` (`kode_kuis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `latihan`
--
ALTER TABLE `latihan`
  ADD CONSTRAINT `latihan_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
