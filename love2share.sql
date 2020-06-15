-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2020 at 04:56 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `love2share`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_adm` varchar(100) NOT NULL,
  `foto_adm` varchar(255) DEFAULT NULL,
  `moto_adm` varchar(255) NOT NULL,
  `whatsapp` varchar(15) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `username`, `password`, `nama_adm`, `foto_adm`, `moto_adm`, `whatsapp`, `instagram`, `facebook`, `twitter`, `active`) VALUES
(1, 'ahauwlie', '$2a$04$2ehLg5n1rsceQgGdLx58WOvKqI//p3RZ6ZhU5NwBlcyeRzZkBdFqy', 'Hauw', 'http://kavio_such_ci.test/inti/images/blog/author.png', 'bfnjdlskFnrilgjmivmzhviunrhimzvmifbfmxmgvibtho', '089514055817', NULL, NULL, NULL, 1),
(22, 'salim_nurRichard@gmail.com', '$2y$10$H9UIKcPy.PdLSoMmtb2bmeZJ8/i.IDkgN/RGzFc6OOhommTfvzq5K', 'Salim', 'http://kavio_such_ci.test/inti/images/upload/thumb/20170204153010_IMG_0447.JPG', 'pokok\'e joss', '', '', '', '', 1),
(23, 'ahauwlie@gmail.com', '$2y$10$O2dKj.oGgZjlsJsdHGYppeshSmHy2UkjNMrgUGl/63JulHyE9x3PS', 'sony', 'http://kavio_such_ci.test/inti/images/upload/thumb/935.jpg', 'gelas gelas kaca', '647608943457', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_ar` int(8) NOT NULL,
  `tanggal_ar` date NOT NULL,
  `id_kat` varchar(50) NOT NULL,
  `judul_ar` varchar(100) NOT NULL,
  `isi_ar` text NOT NULL,
  `ayat_ar` text NOT NULL,
  `id_tag` varchar(50) NOT NULL,
  `foto_ar` varchar(255) NOT NULL,
  `id_adm` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_ar`, `tanggal_ar`, `id_kat`, `judul_ar`, `isi_ar`, `ayat_ar`, `id_tag`, `foto_ar`, `id_adm`) VALUES
(1, '2020-06-01', '2', 'Teruntuk Kamu12123', '123', 'ini nihh -&gt;&gt; “Sebab Engkaulah harapanku, ya Tuhan, kepercayaanku sejak masa muda, ya Allah.kepada-Mulah aku bertopang mulai dari kandungan, Engkau telah mengeluarkan aku dari perut ibuku; Engkau yang selalu kupuji-puji.” (Mazmur 71:5-6).', '43yre', 'http://kavio_such_ci.test/inti/images/slider/bg2.jpg', 1),
(357, '2003-03-20', 'Kopi', 'Designer to try to break rules and ', '32', 'kopi_indo', '1', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(358, '2003-04-20', 'Kopi', 'I\'m passionate about food, the tradition of it, cooking it, sharing ', '32', 'kopi_indo', '1', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(359, '2003-05-20', 'Kopi', '232hgngf', '32', 'kopi_indo', '1', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(360, '2003-06-20', 'Kopi', 'fdbgd', '32', 'kopi_indo', '1', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(362, '2003-08-20', 'Kopi', 'e4h6yn', '32', 'kopi_indo', '1', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(363, '2003-09-20', 'Kopi', 'ty,k54h5reb', '32', 'kopi_indo', '1', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(364, '2003-10-20', 'Kopi', 'I think it\'s the responsibility of a designer to try to ', '32', 'kopi_indo', '1', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(365, '2003-11-20', 'Kopi', 'apa aja boleh', '33', 'kopi_indo', '2', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(366, '2003-12-20', 'Kopi', 'dvs', '34', 'kopi_indo', '3', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(367, '0000-00-00', 'Kopi', 'nrryd', '35', 'kopi_indo', '4', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(368, '0000-00-00', 'Kopi', '54t5ht', '36', 'kopi_indo', '5', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(369, '0000-00-00', 'Kopi', 'rtjnt', '37', 'kopi_indo', '6', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(370, '0000-00-00', 'Kopi', 'hrtbty64er', '38', 'kopi_indo', '7', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(371, '0000-00-00', 'Kopi', 'tymty ', '39', 'kopi_indo', '8', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(372, '0000-00-00', 'Kopi', 'fdbdw232', '40', 'kopi_indo', '9', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(373, '0000-00-00', 'Kopi', 'dssvdbdfb', '41', 'kopi_indo', '10', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(374, '0000-00-00', 'Kopi', 'dfbdf', '42', 'kopi_indo', '11', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(375, '0000-00-00', 'Kopi', 'fdbbd', '43', 'kopi_indo', '12', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1),
(376, '0000-00-00', 'Kopi', 'dfbdfbdf', '44', 'kopi_indo', '13', 'https://id.kingdomsalvation.org/wp-content/uploads/2019/07/words-in-bible-crop.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_ar`),
  ADD KEY `admin` (`id_adm`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_ar` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_adm`) REFERENCES `admin` (`id_adm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
