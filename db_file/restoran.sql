-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 02:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_makanan`
--

CREATE TABLE `menu_makanan` (
  `id` int(11) NOT NULL,
  `nama_restoran` varchar(100) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_makanan`
--

INSERT INTO `menu_makanan` (`id`, `nama_restoran`, `nama_menu`, `harga`) VALUES
(1, 'RM. DAPUR SYANTIK', 'Ares', 27000),
(2, 'RM. DAPUR SYANTIK', 'singang', 45000),
(3, 'RM. DAPUR SYANTIK', 'cah taoge', 15000),
(4, 'TANJUNG AAN RESTO', 'Pancake', 30000),
(5, 'TANJUNG AAN RESTO', 'Toasted bread ', 25000),
(6, 'TANJUNG AAN RESTO', 'Indo mie goreng', 35000),
(7, 'TANJUNG AAN RESTO', 'Thai red noodle', 50000),
(8, 'TANJUNG AAN RESTO', 'Vegetables cap cay', 35000),
(9, 'LALAPAN SANTAI MASAK RAJANG', 'Ayam Taliwang', 50000),
(10, 'LALAPAN SANTAI MASAK RAJANG', 'gado gado', 50000),
(11, 'LALAPAN SANTAI MASAK RAJANG', 'Burger', 45000),
(12, 'LALAPAN SANTAI MASAK RAJANG', 'Ayam Lalapan', 25000),
(13, 'LALAPAN SANTAI MASAK RAJANG', 'Nasi Campur', 25000),
(14, 'LALAPAN SANTAI MASAK RAJANG', 'Urap Urap', 38000);

-- --------------------------------------------------------

--
-- Table structure for table `menu_minuman`
--

CREATE TABLE `menu_minuman` (
  `id` int(11) NOT NULL,
  `nama_restoran` varchar(100) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_minuman`
--

INSERT INTO `menu_minuman` (`id`, `nama_restoran`, `nama_menu`, `harga`) VALUES
(1, 'RM. DAPUR SYANTIK', 'Club sandwich', 25000),
(2, 'RM. DAPUR SYANTIK', 'Garlic bread', 15000),
(3, 'RM. DAPUR SYANTIK', 'Chicken curry', 25000),
(4, 'TANJUNG AAN RESTO', 'Air Putih', 3000),
(5, 'TANJUNG AAN RESTO', 'Teh Gelas', 1000),
(6, 'TANJUNG AAN RESTO', 'Teh Gelas Botol', 5000),
(7, 'TANJUNG AAN RESTO', 'Sprite', 4000),
(8, 'TANJUNG AAN RESTO', 'Fanta', 4000),
(9, 'LALAPAN SANTAI MASAK RAJANG', 'Ice Tea', 8000),
(10, 'LALAPAN SANTAI MASAK RAJANG', 'soda Gembira', 20000),
(11, 'LALAPAN SANTAI MASAK RAJANG', 'Hot tea', 8000),
(12, 'LALAPAN SANTAI MASAK RAJANG', 'diet coke', 13000),
(13, 'LALAPAN SANTAI MASAK RAJANG', 'smal water', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_gallery`
--

CREATE TABLE `tabel_gallery` (
  `id` int(11) NOT NULL,
  `nama_restoran` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_gallery`
--

INSERT INTO `tabel_gallery` (`id`, `nama_restoran`, `nama_file`, `tgl_upload`) VALUES
(1, 'RM. DAPUR SYANTIK', '1.png', '2022-06-20'),
(2, 'RM. DAPUR SYANTIK', '3.png', '2022-06-20'),
(3, 'RM. DAPUR SYANTIK', '4.png', '2022-06-20'),
(4, 'RM. DAPUR SYANTIK', '5.png', '2022-06-20'),
(5, 'RM. DAPUR SYANTIK', '6.png', '2022-06-20'),
(6, 'RM. DAPUR SYANTIK', '7.png', '2022-06-20'),
(7, 'RM. DAPUR SYANTIK', '8.png', '2022-06-20'),
(8, 'LALAPAN SANTAI MASAK RAJANG', '1.png', '2022-07-26'),
(9, 'LALAPAN SANTAI MASAK RAJANG', '2.png', '2022-07-26'),
(10, 'LALAPAN SANTAI MASAK RAJANG', '3.png', '2022-07-26'),
(11, 'LALAPAN SANTAI MASAK RAJANG', '4.png', '2022-07-26'),
(12, 'LALAPAN SANTAI MASAK RAJANG', '5.png', '2022-07-26'),
(13, 'TANJUNG AAN RESTO', '1.png', '2022-07-26'),
(14, 'TANJUNG AAN RESTO', '3.png', '2022-07-26'),
(15, 'TANJUNG AAN RESTO', '4.png', '2022-07-26'),
(16, 'TANJUNG AAN RESTO', '5.png', '2022-07-26'),
(17, 'TANJUNG AAN RESTO', '6.png', '2022-07-26'),
(18, 'TANJUNG AAN RESTO', '7.png', '2022-07-26'),
(19, 'WAROENG MURAH MERIAH', '1.png', '2022-07-26'),
(20, 'WAROENG MURAH MERIAH', '2.png', '2022-07-26'),
(21, 'WAROENG MURAH MERIAH', '3.png', '2022-07-26'),
(22, 'WAROENG MURAH MERIAH', '4.png', '2022-07-26'),
(23, 'WAROENG MURAH MERIAH', '5.png', '2022-07-26'),
(24, 'WAROENG MURAH MERIAH', '6.png', '2022-07-26'),
(25, 'RUMAH MAKAN ASLI RESTU BUNDO MASAKAN PADANG', '1.png', '2022-07-26'),
(26, 'RUMAH MAKAN ASLI RESTU BUNDO MASAKAN PADANG', '2.png', '2022-07-26'),
(27, 'RUMAH MAKAN ASLI RESTU BUNDO MASAKAN PADANG', '3.png', '2022-07-26'),
(28, 'RUMAH MAKAN ASLI RESTU BUNDO MASAKAN PADANG', '4.png', '2022-07-26'),
(29, 'RUMAH MAKAN ASLI RESTU BUNDO MASAKAN PADANG', '5.png', '2022-07-26'),
(30, 'SMILE CAFE - SECRET PARADISE', '1.png', '2022-07-26'),
(31, 'SMILE CAFE - SECRET PARADISE', '2.png', '2022-07-26'),
(32, 'SMILE CAFE - SECRET PARADISE', '3.png', '2022-07-26'),
(33, 'SMILE CAFE - SECRET PARADISE', '4.png', '2022-07-26'),
(34, 'SMILE CAFE - SECRET PARADISE', '6.png', '2022-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_komentar`
--

CREATE TABLE `tabel_komentar` (
  `id` int(11) NOT NULL,
  `nama_restoran` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_komentar`
--

INSERT INTO `tabel_komentar` (`id`, `nama_restoran`, `username`, `email`, `komentar`) VALUES
(1, 'RM. DAPUR SYANTIK', 'Ogito uchia', 'ogitouciha7@gmail.com', 'restoran ini memiliki makanan yang enak'),
(2, 'TANJUNG AAN RESTO', 'ogi darma tena', 'ogidarmatena@gmail.com', 'restoran yang bagus sekali');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_restoran`
--

CREATE TABLE `tabel_restoran` (
  `id` int(11) NOT NULL,
  `nama_restoran` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `link` text NOT NULL,
  `buka` time NOT NULL,
  `tutup` time NOT NULL,
  `jarak` double NOT NULL,
  `deskripsi` text NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_restoran`
--

INSERT INTO `tabel_restoran` (`id`, `nama_restoran`, `nama_file`, `link`, `buka`, `tutup`, `jarak`, `deskripsi`, `lokasi`) VALUES
(1, 'RM. DAPUR SYANTIK', '2.png', 'https://www.google.com/maps/dir/Sirkuit+Internasional+Mandalika,+Kuta,+Kabupaten+Lombok+Tengah,+Nusa+Tenggara+Barat/RM.dapur+syantik+khas+west+nusa+tenggara,+Kuta,+Kec.+Pujut,+Kabupaten+Lombok+Tengah,+Nusa+Tenggara+Bar.+83573/@-8.8919532,116.2887087,15z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x2dcd071ecdcec477:0x44f271f670057e58!2m2!1d116.305952!2d-8.8951582!1m5!1m1!1s0x2dcda9c42751e803:0x21103ef359a5eb88!2m2!1d116.2829011!2d-8.8912306', '08:00:00', '22:00:00', 5.4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Kuta, Kec. Pujut, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83573'),
(2, 'RUMAH MAKAN ASLI RESTU BUNDO MASAKAN PADANG', '1.png', 'https://www.google.com/maps/dir/Sirkuit+Internasional+Mandalika,+Kuta,+Kabupaten+Lombok+Tengah,+Nusa+Tenggara+Barat/Rumah+Makan+Asli+Restu+Bundo+Masakan+Padang,+Jl.+Pariwisata+Pantai+Kuta,+Kuta,+Kec.+Pujut,+Kabupaten+Lombok+Tengah,+Nusa+Tenggara+Bar.+83573/@-8.8919532,116.287423,15z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x2dcd071ecdcec477:0x44f271f670057e58!2m2!1d116.305952!2d-8.8951582!1m5!1m1!1s0x2dcda9d367353b33:0x6ac77ec123525751!2m2!1d116.2793423!2d-8.8903546', '07:00:00', '23:00:00', 5.4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lokasi : Kuta, Kec. Pujut, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83573'),
(4, 'WAROENG MURAH MERIAH', '7.png', 'https://www.google.com/maps/dir/Sirkuit+Internasional+Mandalika,+Kuta,+Kabupaten+Lombok+Tengah,+Nusa+Tenggara+Barat/474M%2BGFJ+Waroeng+Murah+Meriah,+Kuta,+Kec.+Pujut,+Kabupaten+Lombok+Tengah,+Nusa+Tenggara+Bar.+83573/@-8.8931611,116.2895622,15z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x2dcd071ecdcec477:0x44f271f670057e58!2m2!1d116.305952!2d-8.8951582!1m5!1m1!1s0x2dcda9d67616c91d:0x48b35181a54e56f8!2m2!1d116.283656!2d-8.893662', '07:00:00', '23:00:00', 5.4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Kuta, Kec. Pujut, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83573'),
(5, 'SMILE CAFE - SECRET PARADISE', '5.png', 'https://www.google.com/maps/dir/Sirkuit+Internasional+Mandalika,+Kuta,+Kabupaten+Lombok+Tengah,+Nusa+Tenggara+Barat/38QJ%2BHHP+Smile+Cafe+-+Secret+Paradise,+Pengembur,+Kec.+Pujut,+Kabupaten+Lombok+Tengah,+Nusa+Tenggara+Bar.+83573/@-8.9022997,116.3134363,15.26z/data=!4m13!4m12!1m5!1m1!1s0x2dcd071ecdcec477:0x44f271f670057e58!2m2!1d116.305952!2d-8.8951582!1m5!1m1!1s0x2dcd00b61adc8d15:0xa4068ed0c8dbcdf0!2m2!1d116.3314645!2d-8.9110449', '09:00:00', '21:00:00', 4.7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Pengembur, Kec. Pujut, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83573'),
(6, 'LALAPAN SANTAI MASAK RAJANG', '2.png', 'https://www.google.com/maps/dir/Sirkuit+Internasional+Mandalika,+Kuta,+Kabupaten+Lombok+Tengah,+Nusa+Tenggara+Barat/LALAPAN+santai+MASAK+RAJANG,+Raya+Jalan+Kuta+Lombok,+Kuta,+Pujut,+Central+Lombok+Regency,+West+Nusa+Tenggara+83573/@-8.8927401,116.2985197,16z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x2dcd071ecdcec477:0x44f271f670057e58!2m2!1d116.305952!2d-8.8951582!1m5!1m1!1s0x2dcda9adc6ef00ab:0x44c45ad39f50bd98!2m2!1d116.2927732!2d-8.8929368', '09:00:00', '22:00:00', 3.6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Raya Jalan Kuta Lombok, Kuta, Pujut, Central Lombok Regency, West Nusa Tenggara ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `email`, `password`) VALUES
(1, 'ogidarma', 'ogidarmatena@gmail.com', '$2y$10$i9QNlERL4Vs7bhoCvHlQvew6vW4a6z2lRbXdY5GMcDHuxYg1OpyL6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_minuman`
--
ALTER TABLE `menu_minuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_gallery`
--
ALTER TABLE `tabel_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_restoran`
--
ALTER TABLE `tabel_restoran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu_minuman`
--
ALTER TABLE `menu_minuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tabel_gallery`
--
ALTER TABLE `tabel_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_restoran`
--
ALTER TABLE `tabel_restoran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
