-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 04:56 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `si-notaris-ppat`
--

-- --------------------------------------------------------

--
-- Table structure for table `akta_biasa`
--

CREATE TABLE IF NOT EXISTS `akta_biasa` (
  `akta_biasa_id` int(11) NOT NULL AUTO_INCREMENT,
  `akta_biasa_nomor` varchar(255) NOT NULL,
  `akta_biasa_tanggal` date NOT NULL,
  `akta_biasa_sifat` varchar(255) NOT NULL,
  `akta_biasa_penghadap` varchar(255) NOT NULL,
  `akta_biasa_dibuat_oleh` int(11) NOT NULL,
  PRIMARY KEY (`akta_biasa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `akta_biasa`
--

INSERT INTO `akta_biasa` (`akta_biasa_id`, `akta_biasa_nomor`, `akta_biasa_tanggal`, `akta_biasa_sifat`, `akta_biasa_penghadap`, `akta_biasa_dibuat_oleh`) VALUES
(2, '1', '2018-09-20', 'AKTA BIASA', 'JOHN SNOW', 1),
(3, '2', '2018-09-20', 'AKTA BIASA', 'KING T''CHAKA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `akta_ppat`
--

CREATE TABLE IF NOT EXISTS `akta_ppat` (
  `akta_ppat_id` int(11) NOT NULL AUTO_INCREMENT,
  `akta_ppat_nomor` varchar(255) NOT NULL,
  `akta_ppat_tanggal` date NOT NULL,
  `akta_ppat_sifat` varchar(255) NOT NULL,
  `akta_ppat_penghadap` varchar(255) NOT NULL,
  `akta_ppat_dibuat_oleh` int(11) NOT NULL,
  PRIMARY KEY (`akta_ppat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `akta_ppat`
--

INSERT INTO `akta_ppat` (`akta_ppat_id`, `akta_ppat_nomor`, `akta_ppat_tanggal`, `akta_ppat_sifat`, `akta_ppat_penghadap`, `akta_ppat_dibuat_oleh`) VALUES
(1, '1', '2018-09-19', 'AKTA JUAL BELI', 'KING LEBRON JAMES II', 1),
(2, '2', '2018-09-19', 'JAMINAN', 'MOHAMMAD ALI', 1),
(3, '3', '2018-09-20', 'VIDUSIA', 'ANAK ALAY JAMAN SMP DHOELOE', 3),
(4, '4', '2018-09-20', 'AKTA JUAL BELI', 'UZUMAKI NARUTO', 3),
(5, '5', '2018-09-20', 'JAMINAN', 'UCIHA SASUKE', 3);

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE IF NOT EXISTS `surat` (
  `surat_id` int(11) NOT NULL AUTO_INCREMENT,
  `surat_nomor` varchar(255) NOT NULL,
  `surat_tanggal` date NOT NULL,
  `surat_sifat` varchar(255) NOT NULL,
  `surat_penanda_tangan` varchar(255) NOT NULL,
  `surat_dibuat_oleh` varchar(255) NOT NULL,
  PRIMARY KEY (`surat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`surat_id`, `surat_nomor`, `surat_tanggal`, `surat_sifat`, `surat_penanda_tangan`, `surat_dibuat_oleh`) VALUES
(2, '4', '2018-09-20', 'SURAT SKORSING', 'DEKAN LAMA', '1'),
(3, '4', '2018-09-21', 'SURAT CINTA UNTUK STARLA', 'VIRGOUN', '1'),
(4, '5', '2018-09-21', 'PEMALU', 'YAMPUNYA  MAKASSAR SETENGAH', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE IF NOT EXISTS `tamu` (
  `tamu_id` int(11) NOT NULL AUTO_INCREMENT,
  `tamu_nama` varchar(255) NOT NULL,
  `tamu_alamat` varchar(255) NOT NULL,
  `tamu_tanggal` date NOT NULL,
  `tamu_no_hp` varchar(255) NOT NULL,
  `tamu_keterangan` varchar(255) NOT NULL,
  `tamu_dimasukkan_oleh` varchar(255) NOT NULL,
  PRIMARY KEY (`tamu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`tamu_id`, `tamu_nama`, `tamu_alamat`, `tamu_tanggal`, `tamu_no_hp`, `tamu_keterangan`, `tamu_dimasukkan_oleh`) VALUES
(1, 'LORD VOLDEMORT', 'AZKABAN', '2018-09-20', '081324244622', 'CARI ALAMAT', '2'),
(2, 'HARRY POTTER', 'GODRIC''S HOLLOWS', '2018-09-22', '08134224422', 'TEMBAK-TEMBAK GOJEK', '1'),
(3, 'KING T''CHALLA', 'WAKANDA', '2018-09-23', '081344662211', 'JUALAN VIBRANIUM', '3'),
(4, 'JOKO WIDODO', 'ISTANA NEGARA BOGOR', '2018-09-21', '081288462213', 'BAGI-BAGI SEPEDA', '1'),
(5, 'MIA KHILAFAH', 'JL. METRO TANJUNG BUNGA FAKE BROTHER AND SISTER NO.96 MAKASSAR', '2018-09-23', '0813422445211', 'MENANYAKAN KONDISI PASIEN YANG SAKIT DAN DOKTER JOHNNY SONS YANG MENGOBATI DENGAN SABAR', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `user_created_date` date NOT NULL,
  `user_created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_name`, `user_status`, `user_created_date`, `user_created_by`) VALUES
(1, 'admin1', '21232F297a57a5a743894a0e4a801fc3', 'Super Administratooor', 'Administrator', '2018-09-17', 'Nobody'),
(2, 'staff1', '21232f297a57a5a743894a0e4a801fc3', 'Staff Pertama', 'Staff', '2018-09-17', '1'),
(3, 'staff2', '1253208465b1efa876f982d8a9e73eef', 'Staff Kedua', 'Staff', '2018-09-17', '1'),
(6, 'staff3', '1253208465b1efa876f982d8a9e73eef', 'Staff Ketiga', 'Staff', '2018-09-17', '1'),
(7, 'admin3', '21232f297a57a5a743894a0e4a801fc3', 'Junior Administrator Hey', 'Administrator', '2018-09-17', '1'),
(8, 'admin2', '21232f297a57a5a743894a0e4a801fc3', 'Admin Baru Lagi', 'Administrator', '2018-09-18', '1'),
(9, 'admin4', '21232f297a57a5a743894a0e4a801fc3', 'Admin Baru Dari Sana', 'Administrator', '2018-09-18', '8'),
(10, 'staff4', '1253208465b1efa876f982d8a9e73eef', 'Staff Muda', 'Administrator', '2018-09-19', '1'),
(11, 'admin5', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Administrator', '2018-09-19', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
