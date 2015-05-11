-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2015 at 06:40 AM
-- Server version: 5.6.21-log
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci2`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`id` bigint(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `tempat_lahir` varchar(40) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `pendidikan_terakhir` varchar(50) DEFAULT NULL,
  `jenis_pekerjaan` varchar(50) DEFAULT NULL,
  `status_perkawinan` varchar(50) DEFAULT NULL,
  `status_hub_keluarga` varchar(50) DEFAULT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `ayah` varchar(50) DEFAULT NULL,
  `ibu` varchar(50) DEFAULT NULL,
  `nama_kk` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `rt_rw` varchar(50) DEFAULT NULL,
  `desa_kelurahan` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan_terakhir`, `jenis_pekerjaan`, `status_perkawinan`, `status_hub_keluarga`, `kewarganegaraan`, `ayah`, `ibu`, `nama_kk`, `alamat`, `rt_rw`, `desa_kelurahan`, `kecamatan`, `kabupaten`, `kode_pos`, `provinsi`) VALUES
(13, 'KHOLIFA ARTIKATAMA', 'P', NULL, '1995-09-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'czbj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'czbj', 'L', '1995-09-03', '1995-09-03', 'bdsjh', 'bfds', 'bfdsjq', 'bsfdkj', 'vbcskd', 'bcsk', 'vbcxsk', 'CVKSZ', 'VBSK', 'KVSB', 'BVSK', 'BFS', 'bkbvks', 'bvksd', 'bskd', 'bcsvk'),
(22, 'AHMAD SIDIQ', 'L', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'AHMAD SIDIQ', 'L', '1991-08-31', '1991-08-31', 'ISLAM', 'SMA', 'MAHASISWA', 'JOMBLO', 'ANAK', 'INDONESIA', 'BFCS', 'VDSJK', 'BFCS', 'PLOSOREJO', '02 / 04', 'GENTAN', 'BENDOSARI', 'SUKOHARJO', '57528', ''),
(24, 'AHMAD SIDIQ', 'L', '1991-08-31', '1991-08-31', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'AHMAD SIDIQ', 'L', '1991-08-31', '1991-08-31', 'ISLAM', 'SMA', 'MAHASISWA', 'JOMBLO', 'ANAK', 'INDONESIA', 'ABCD', 'EFGH', 'ABCD', 'PLOSOREJO', '02/04', 'GENTAN', 'BENDOSARI', 'SUKOHARJO', '57528', 'JAWA TENGAH'),
(26, 'PAIJO', 'P', '1995-09-03', '1995-09-03', 'ISLAM', 'S3', 'PENGANGGURAN', 'AKAN CERAI', 'ORANG TUA', 'LUPA', 'AYAHNYA PAIJO', 'IBUNYA PAIJO', 'BAPAKNYA PAIJO', 'PLOSOREJO', '02 / 04', 'GENTAN', 'BENDOSARI', 'SUKOHARJO', '57528', 'JAWA TENGAH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
