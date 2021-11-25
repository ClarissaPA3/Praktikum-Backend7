-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 05:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compform`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabpas`
--

CREATE TABLE `tabpas` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `keluhan` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` varchar(250) NOT NULL,
  `warga_negara` varchar(250) NOT NULL,
  `jenis_kelamin` varchar(250) NOT NULL,
  `agreement` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabpas`
--

INSERT INTO `tabpas` (`id`, `nama`, `keluhan`, `email`, `password`, `tgl_lahir`, `foto`, `warga_negara`, `jenis_kelamin`, `agreement`) VALUES
(1, 'sdgwgwrg', 'wrgreggr', 'esfewqe@gmail.com', 'ewfewf', '2021-11-25', 'efefef.jpg', 'WNA', 'Pria', 'Agree'),
(2, 'wertytrewq', '', 'esfewqe@gmail.com', 'ewfewf', '2021-11-25', '', '', '', ''),
(4, 'Sari', '<p><s><em><strong>fefwewegegewgewgewg</strong></em></s></p>\r\n', 'sfefefeffef@gmail.com', 'efefefefef', '2021-11-25', '3x4.jpg', 'WNA', 'Wanita', 'Agree'),
(6, 'afeffefewfqefqef', '<p>eqfwgwgrwrgwrgwrg</p>\r\n', 'efefefefefefef@gmail.com', 'efefefefef', '2021-11-25', '25.jpg', 'WNA', 'Pria', 'Agree'),
(7, 'wqfqefefewg', '<p>wegwegewegwegrgwg</p>\r\n', 'rgrgrgrgrg@gmail.com', 'rgrgrgrg', '2021-11-25', '13.jpg', '', 'Pria', 'Agree'),
(8, 'gewgwrgrgrwgw', '<p>gwrgrwgwrgwrgrwg</p>\r\n', 'rgrgrgrggr@gmail.com', 'rgrggrrggr', '2021-11-25', 'press-release_03.jpg', 'WNA', 'Pria', 'Agree'),
(9, 'Sari', '<p>tdkulydidfulfyi</p>\r\n', 'yfyfyfyfyfyfyf@gmail.com', 'uyfifififif', '2021-11-25', 'press-release_05.jpg', 'WNA', 'Pria', 'Agree'),
(10, 'asagwegew', '<p>ewgewgewgwewe</p>\r\n', 'egegeggege@gmail.com', 'gewegrwwfsr', '2021-11-25', 'press-release_04.jpg', 'WNI', 'Pria', 'Agree'),
(11, 'fewfewgewgewg', '<p>wegewgwegewgewg</p>\r\n', 'eggwegwegewg@gmail.com', 'egwegewgegw', '2021-11-25', 'press-release_04.jpg', 'WNI', 'Pria', 'Agree'),
(12, 'Joko', '<p>geewgrhwrht</p>\r\n', 'wrhrreweegqefqefqe@gmail.com', 'qefwrgethethgh3rw', '2021-11-25', 'press-release_04.jpg', 'WNI', 'Pria', 'Agree'),
(13, 'Joko', '<p>geewgrhwrht</p>\r\n', 'wrhrreweegqefqefqe@gmail.com', '', '2021-11-25', 'press-release_04.jpg', 'WNI', 'Pria', 'Agree'),
(14, 'Joko', '<p>geewgrhwrht</p>\r\n', 'wrhrreweegqefqefqe@gmail.com', '', '2021-11-25', 'press-release_04.jpg', 'WNI', 'Pria', 'Agree'),
(15, 'Joko', '<p>geewgrhwrht</p>\r\n', 'wrhrreweegqefqefqe@gmail.com', '', '2021-11-25', 'press-release_04.jpg', 'WNI', 'Pria', 'Agree'),
(16, 'Joko', '<p>geewgrhwrht</p>\r\n', 'wrhrreweegqefqefqe@gmail.com', '', '2021-11-25', 'press-release_04.jpg', 'WNI', 'Pria', 'Agree'),
(17, 'Joko', '<p>geewgrhwrht</p>\r\n', 'wrhrreweegqefqefqe@gmail.com', '', '2021-11-25', 'press-release_04.jpg', 'WNI', 'Pria', 'Agree'),
(18, 'Joko', '<p>geewgrhwrht</p>\r\n', 'wrhrreweegqefqefqe@gmail.com', '', '2021-11-25', 'press-release_04.jpg', 'WNI', 'Pria', 'Agree'),
(19, 'Joko', '<p>geewgrhwrht</p>\r\n', 'wrhrreweegqefqefqe@gmail.com', '', '2021-11-25', 'press-release_04.jpg', 'WNI', 'Pria', 'Agree'),
(20, 'wdfwqfqwffw', '<p>qwfqwfwfw</p>\r\n', 'wfwfwfw@gmail.com', 'fwffwfw', '2021-11-25', 'press-release_02.jpg', 'WNI', 'Wanita', 'Agree'),
(21, ' Muhammad S', '<p>segrwhwrhwh</p>\r\n', 'gegeggege@gmail.com', 'egegegeg', '2021-11-25', 'press-release_03.jpg', 'WNA', 'Pria', 'Agree'),
(22, 'joko', '<p>segrwhwrhwh</p>\r\n', 'gegeggege@gmail.com', '', '2021-11-25', 'press-release_03.jpg', 'WNA', 'Pria', 'Agree'),
(23, 'qqqqqqqqqqqqqqqqqqqqqqqqqq', '', 'gegeggege@gmail.com', '', '2021-11-25', '', '', '', ''),
(24, 'egwrgrwgwg', '<p>rwgrgrwgwg</p>\r\n', 'grgrggrrg@gmail.com', 'rgwgwgrw', '2021-11-25', 'press-release_04.jpg', 'WNA', 'Pria', 'Agree');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabpas`
--
ALTER TABLE `tabpas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabpas`
--
ALTER TABLE `tabpas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
