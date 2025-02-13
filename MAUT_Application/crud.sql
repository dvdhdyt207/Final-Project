-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 11:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bobot`
--

CREATE TABLE `tbl_bobot` (
  `id_b` int(11) NOT NULL,
  `bobot` varchar(10) NOT NULL,
  `bbt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bobot`
--

INSERT INTO `tbl_bobot` (`id_b`, `bobot`, `bbt`) VALUES
(1, 'Bobot 1', 0.2),
(2, 'Bobot 2', 0.3),
(3, 'Bobot 3', 0.2),
(4, 'Bobot 4', 0.2),
(5, 'Bobot 5', 0.15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `mp` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nip`, `nama`, `mp`) VALUES
(5, '198705022019032019', 'Zainal, S.pd', 'SKI'),
(6, '199206082019032023', 'Rahmi Fauza, M.pd', 'Matematika'),
(7, '199009092019031012', 'Anggia Martaliza, S.Pd', 'Informatika'),
(8, '1993022320190320021', 'Rifda Wahyuni, S.Pd', 'Penjaskes'),
(9, '198603212019031004', 'Meidina Rahmi, S.Pd', 'Matematika'),
(10, '1992021720190320115', 'Susi Suswanti, S.Pd', 'Alquran Hadist'),
(11, '197801302005012006', 'Ria Mina Dewi, S.Pd', 'TIK'),
(12, '196608041996031002', 'Engga Randa Putra, S.Pd', 'Penjaskes'),
(13, '1970010519960032003', 'Ahmad Syukir, S.Pd', 'Matematika'),
(14, '19730119199800032002', 'Marisa, S.Pd.I', 'Bahasa Arab'),
(15, '196705072003022001', 'Fatma karmila, S.Pd', 'Sejarah'),
(16, '1967121520000320003', 'Eva Jelita, S.Pd', 'SKI'),
(17, '1965070920011220001', 'Yuni Erpita, S.Pd.I', 'Matematika'),
(18, '1975080220011220002', 'Anggi Febrianto S.pd', 'Sejarah'),
(19, '1978031220050120005', 'Novita Marda Yola, S.Pd', 'Bahasa Indonesia'),
(20, '197406242005012003', 'Nola Zulfiati, S.Pd', 'Sosiologi'),
(21, '197210202006042021', 'Nofia Hermaniza, S.Pd', 'Fikih'),
(22, '197209161992032002', 'Rifki Fernando, S.Pd', 'PKN'),
(23, '197810052002122002', 'Marwan Ilhami, Lc', 'Akidah Akhlak'),
(24, '197512272007101004', 'Al bahri, S.Pd.I', 'BK'),
(25, '197912032007101001', 'Meira Putri, S.Pd', 'Geografi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maut`
--

CREATE TABLE `tbl_maut` (
  `id_maut` int(11) NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `np` double NOT NULL,
  `penilaian` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_maut`
--

INSERT INTO `tbl_maut` (`id_maut`, `id_guru`, `np`, `penilaian`) VALUES
(1, 5, 0.69071428571429, 'Kinerja Baik'),
(2, 6, 0.67166666666667, 'Kinerja Baik'),
(3, 7, 0.72547619047619, 'Kinerja Baik'),
(4, 8, 0.67785714285714, 'Kinerja Baik'),
(5, 9, 0.79428571428571, 'Kinerja Baik'),
(6, 10, 0.6097619047619, 'Kinerja Baik'),
(7, 11, 0.82547619047619, 'Kinerja Baik'),
(8, 12, 0.73761904761905, 'Kinerja Baik'),
(9, 13, 0.52595238095238, 'Kinerja Kurang Baik'),
(10, 14, 0.7002380952381, 'Kinerja Baik'),
(11, 15, 0.82904761904762, 'Kinerja Baik'),
(12, 16, 0.61761904761905, 'Kinerja Baik'),
(13, 17, 0.61452380952381, 'Kinerja Baik'),
(14, 18, 0.62738095238095, 'Kinerja Baik'),
(15, 19, 0.67071428571429, 'Kinerja Baik'),
(16, 20, 0.9, 'Kinerja Baik'),
(17, 21, 0.23095238095238, 'Kinerja Kurang Baik'),
(18, 22, 0.64071428571429, 'Kinerja Baik'),
(19, 23, 0.82785714285714, 'Kinerja Baik'),
(20, 24, 0.96666666666667, 'Kinerja Baik'),
(21, 25, 0.90380952380952, 'Kinerja Baik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian`
--

CREATE TABLE `tbl_penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `c1` int(11) DEFAULT NULL,
  `c2` int(11) DEFAULT NULL,
  `c3` int(11) DEFAULT NULL,
  `c4` int(11) DEFAULT NULL,
  `c5` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_penilaian`
--

INSERT INTO `tbl_penilaian` (`id_penilaian`, `id_guru`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(5, 5, 16, 23, 13, 13, 11),
(6, 6, 16, 21, 12, 13, 14),
(7, 7, 16, 23, 14, 12, 12),
(8, 8, 15, 23, 16, 12, 9),
(9, 9, 16, 28, 13, 13, 10),
(10, 10, 14, 25, 14, 13, 8),
(11, 11, 16, 27, 14, 12, 12),
(12, 12, 16, 26, 14, 11, 10),
(13, 13, 15, 23, 12, 10, 10),
(14, 14, 16, 23, 12, 13, 13),
(15, 15, 15, 30, 14, 12, 11),
(16, 16, 15, 24, 14, 10, 10),
(17, 17, 12, 27, 15, 13, 9),
(18, 18, 13, 27, 15, 9, 11),
(19, 19, 16, 27, 10, 12, 11),
(20, 20, 16, 30, 16, 14, 7),
(21, 21, 14, 18, 12, 4, 10),
(22, 22, 14, 29, 13, 8, 11),
(23, 23, 16, 27, 16, 12, 9),
(24, 24, 16, 28, 15, 14, 14),
(25, 25, 16, 28, 15, 13, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `pw` varchar(30) NOT NULL,
  `lv` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `pw`, `lv`) VALUES
(1, 'admin', 'man1bkt', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  ADD PRIMARY KEY (`id_b`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `tbl_maut`
--
ALTER TABLE `tbl_maut`
  ADD PRIMARY KEY (`id_maut`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  MODIFY `id_b` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_maut`
--
ALTER TABLE `tbl_maut`
  MODIFY `id_maut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_maut`
--
ALTER TABLE `tbl_maut`
  ADD CONSTRAINT `tbl_maut_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `tbl_guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD CONSTRAINT `tbl_penilaian_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `tbl_guru` (`id_guru`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
