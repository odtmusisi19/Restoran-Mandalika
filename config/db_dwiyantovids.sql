-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2022 at 06:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dwiyantovids`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `show_banner` tinyint(1) NOT NULL,
  `banner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id`, `title`, `genre`, `description`, `show_banner`, `banner`) VALUES
(1, 'Luca the pro player', 'adventure, mysteri, drama', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio velit dignissimos deleniti error ipsam cumque numquam quia eos enim, qui placeat excepturi, nemo corrupti inventore sed. Quibusdam placeat cumque et!', 1, 'luca-banner.webp'),
(2, 'Mulan', 'adventure, mysteri, drama', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, rem necessitatibus? Labore cum perspiciatis facilis blanditiis mollitia ducimus optio consectetur!', 1, 'banner.webp'),
(4, 'Encanto', 'Fantasy, Animation, Adventure', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum minus, a incidunt magni aliquid corrupti vel optio voluptates ullam nemo! Blanditiis hic maiores impedit optio cupiditate rerum ipsum obcaecati vero?', 1, 'encanto.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `email`, `password`) VALUES
(3, 'admin', 'zakiyul.py@gmail.com', '*469C02C769BE5F89DC332AB08A8DC7703BCC1A4B'),
(4, 'adminz', 'zakiyul.py@gmail.com', '$2y$10$XASQgELwxE0HuoUC9Vvoq.8xStFykRelCHUe4GnD.4wj1IO0IxDZC');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `genre` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `tampilkan` tinyint(1) NOT NULL,
  `release_date` date NOT NULL,
  `language` varchar(100) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `title`, `genre`, `type`, `description`, `tampilkan`, `release_date`, `language`, `thumbnail`, `banner`, `video`) VALUES
(16, 'Raya', 'Horror Animation Fantasy', 'hollywood', '<p>Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. However, when sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, those same monsters have returned, and it&#39;s up to a lone warrior to track down the last dragon and stop the Druun for good.</p>\r\n', 1, '2022-01-01', 'English', 'raya thumb.png', 'raya poster.webp', 'the-northman-trailer-1_h480p.mov'),
(17, 'Finding Nemo', 'Animation Adventure Fantasy', 'Warner Bros', '<p>Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. However, when sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, those same monsters have returned, and it&#39;s up to a lone warrior to track down the last dragon and stop the Druun for good.</p>\r\n', 1, '2022-01-06', 'English', 'finding nemo thumb.png', 'finding nemo.webp', 'big-gold-brick-trailer-1b_h480p.mov'),
(18, 'Dr Strange', 'Sci-Fi Mystery Fantasy Movie', 'Marvel Studio', '<p>Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. However, when sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, those same monsters have returned, and it&#39;s up to a lone warrior to track down the last dragon and stop the Druun for good.</p>\r\n', 1, '2022-01-05', 'English', 'dr strange tmumb.png', 'dr strange.webp', 'doctor-strange-in-the-multiverse-of-madness-teaser-1_h480p.mov'),
(19, 'Shang Chi', 'Action Superhero Fantasy', 'Marvel Studio', '<p>Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. However, when sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, those same monsters have returned, and it&#39;s up to a lone warrior to track down the last dragon and stop the Druun for good.</p>\r\n', 1, '2021-10-11', 'English', 'shangchi-thumb.png', 'shang-chi.webp', 'shangchi.mp4'),
(21, 'Smash N Grab', 'Drama Action Movie', 'Paramount Pictures', '<p>Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. However, when sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, those same monsters have returned, and it&#39;s up to a lone warrior to track down the last dragon and stop the Druun for good.</p>\r\n', 0, '2022-01-01', 'English', 'smashngrab_thum.png', 'smash n grab.webp', 'sundown-trailer-1_h480p.mov'),
(22, 'Narnia', 'History War Action', 'Columbia Picture', '<p>Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. However, when sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, those same monsters have returned, and it&#39;s up to a lone warrior to track down the last dragon and stop the Druun for good.</p>\r\n', 0, '2022-01-02', 'English', 'narnia_thumb.png', 'narnia.webp', 'desperate-riders-trailer-1_h480p.mov'),
(23, 'Amphibia', 'Horror Animation Fantasy', 'hollywood', '<p>Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. However, when sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, those same monsters have returned, and it&#39;s up to a lone warrior to track down the last dragon and stop the Druun for good.</p>\r\n', 0, '2022-01-06', 'English', 'amphibia_thumb.png', '728899-v.webp', 'arctic-void-trailer-1_h480p.mov'),
(24, 'Platinum End', 'Romance Thriller Animation', 'Ghibli', '<p>Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. However, when sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, those same monsters have returned, and it&#39;s up to a lone warrior to track down the last dragon and stop the Druun for good.</p>\r\n', 0, '2022-01-03', 'Japan', 'platinumend_thumb.png', 'platinum end.webp', 'king-car-trailer-1_h480p.mov'),
(25, 'Ghibah', 'Mystery Drama Horror', 'Columbia Picture', '<p>Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. However, when sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, those same monsters have returned, and it&#39;s up to a lone warrior to track down the last dragon and stop the Druun for good.</p>\r\n', 0, '2022-01-03', 'Indonesia', 'ghibah_thumb.png', 'ghibah.webp', 'death-of-the-nile-trailer-2_h480p.mov'),
(26, 'Bohemian Rhapsody', 'Comedy Drama Musical', 'Universal Picture', '<p>Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. However, when sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, those same monsters have returned, and it&#39;s up to a lone warrior to track down the last dragon and stop the Druun for good.</p>\r\n', 0, '2020-06-09', 'English', 'american sieg thumb.png', 'br.webp', 'american-siege-trailer-1_h480p.mov'),
(27, 'The Book of Bobba Fett', 'Mystery Drama Fantasy', 'Warner Bros', '<p>Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. However, when sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, those same monsters have returned, and it&#39;s up to a lone warrior to track down the last dragon and stop the Druun for good.</p>\r\n', 0, '2022-01-04', 'English', 'bobba fett_thumb.png', 'the book of bobba fetts.webp', 'the-dumpster-fire-trailer-1_h480p.mov'),
(28, 'Paraway Paladin', 'Drama Action Animation', 'Ghibli', '<p>Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. However, when sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, those same monsters have returned, and it&#39;s up to a lone warrior to track down the last dragon and stop the Druun for good.</p>\r\n', 0, '2022-01-07', 'Japan', 'paraway paladin_thumb.png', 'paraway paladin.webp', 'ditched-trailer-1_h480p.mov'),
(29, '911 Lone Star', 'Comedy Horror Fantasy', 'Columbia Picture', '<p>Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. However, when sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, those same monsters have returned, and it&#39;s up to a lone warrior to track down the last dragon and stop the Druun for good.</p>\r\n', 0, '2022-01-09', 'English', 'lone star_thumb.png', '911 lone star.webp', 'butter-trailer-1_h480p.mov');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
