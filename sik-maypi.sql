-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 02:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sik-maypi`
--

-- --------------------------------------------------------

--
-- Table structure for table `dana_keluar`
--

CREATE TABLE `dana_keluar` (
  `id` int(11) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `jenis_dana` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `uang_keluar` int(11) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dana_keluar`
--

INSERT INTO `dana_keluar` (`id`, `keperluan`, `jenis_dana`, `tanggal`, `uang_keluar`, `tahun_ajaran`) VALUES
(1, 'Ganti Keyboard Laptop', 'Infaq', '2020-01-08', 350000, '2019/2020'),
(2, 'Bunga', 'Infaq', '2020-01-15', 200000, '2019/2020'),
(3, 'Konsumsi Lomba', 'Infaq', '2020-01-16', 300000, '2019/2020'),
(18, 'Pewangi', 'Infaq', '2020-01-23', 100000, '2019/2020'),
(19, 'Bunga', 'Infaq', '2020-03-31', 55000, '2019/2020'),
(20, 'Konsumsi', 'Infaq', '2020-02-06', 50000, '2019/2020'),
(21, 'Jenguk Jesti', 'Infaq', '2020-02-10', 100000, '2019/2020'),
(22, 'Pewangi', 'Infaq', '2020-02-11', 65000, '2019/2020'),
(23, 'Bendera', 'Infaq', '2020-02-12', 50000, '2019/2020'),
(24, 'Aqua+Ojek Bendera', 'Infaq', '2020-02-18', 50000, '2019/2020'),
(25, 'Aqua 3 dus + Sabun', 'Infaq', '2020-02-26', 60000, '2019/2020'),
(26, 'ATK', 'Denda', '2020-03-02', 472000, '2019/2020'),
(27, 'Bata', 'Denda', '2020-03-03', 60000, '2019/2020'),
(37, 'Cable Ties + Tisu Ukuran Sedang', 'Denda', '2020-03-05', 44000, '2019/2020'),
(51, 'Fotokopi brosur dan Formulir 300 lembar', 'Denda', '2020-03-08', 60000, '2019/2020'),
(53, 'Aqua 3 Dus + Bensin', 'Denda', '2020-03-13', 75000, '2019/2020'),
(54, 'Pena 2 Kotak, Lem Kertas besar, Tisu Ukuran Sedang', 'Denda', '2020-03-15', 57000, '2019/2020'),
(55, 'Bu Rini Pinjam', 'Denda', '2020-03-17', 50000, '2019/2020'),
(56, 'Bensin service printer', 'Denda', '2020-03-19', 10000, '2019/2020'),
(57, 'Bu Rini Pinjam 2', 'Denda', '2020-03-28', 200000, '2019/2020'),
(59, 'Emis', 'Denda', '2020-04-08', 100000, '2019/2020'),
(60, 'Konsumsi saat Covid-19', 'Denda', '2020-04-11', 10000, '2019/2020'),
(61, 'Karpet', 'Denda', '2020-04-13', 165000, '2019/2020'),
(62, 'Konsumsi saat Covid-19', 'Denda', '2020-04-14', 20000, '2019/2020'),
(63, 'Semen 1 sak', 'Denda', '2020-04-14', 60000, '2019/2020'),
(64, 'Konsumsi saat Covid-19', 'Denda', '2020-04-15', 20000, '2019/2020'),
(65, 'Konsumsi saat Covid-19', 'Denda', '2020-04-16', 20000, '2019/2020'),
(66, 'Konsumsi saat Covid-19', 'Denda', '2020-04-17', 15000, '2019/2020'),
(67, 'Konsumsi saat Covid-19', 'Denda', '2020-04-18', 15000, '2019/2020'),
(68, 'Jenguk Pak Bani', 'Denda', '2020-04-18', 650000, '2019/2020'),
(70, 'Konsumsi saat Covid-19+Air Mineral', 'Denda', '2020-04-20', 31000, '2019/2020'),
(71, 'Konsumsi Menyambut Ramadhan', 'Denda', '2020-04-20', 150000, '2019/2020'),
(72, 'Konsumsi saat Covid-19', 'Denda', '2020-04-21', 15000, '2019/2020'),
(73, 'Bu Rini Beli Plastik', 'Denda', '2020-04-22', 5000, '2019/2020'),
(74, 'Lifeboy Cair + Stela', 'Denda', '2020-05-03', 58000, '2019/2020'),
(75, 'Fotocopy SK Kelulusan', 'Denda', '2020-05-04', 36000, '2019/2020'),
(76, 'Fotocopy Soal MID + Amplop F4', 'Denda', '2020-05-09', 245000, '2019/2020'),
(77, 'Marjan Merah Coco Pandan Sedus', 'Denda', '2020-05-13', 198000, '2019/2020'),
(79, 'Minyak Tropical 1 Liter 10 Sachet', 'Denda', '2020-05-14', 160000, '2019/2020'),
(80, 'Susu Frisian Flag 10 Kaleng+Tisu Paseo', 'Denda', '2020-05-15', 145000, '2019/2020'),
(81, 'Air Mineral Vin 1 dus', 'Denda', '2020-06-08', 16000, '2019/2020'),
(82, 'Konsumsi', 'Denda', '2020-06-08', 25000, '2019/2020'),
(83, 'Fotocopy Soal UAS+Formulir PPDB = 1885 Lembar', 'Denda', '2020-06-10', 377000, '2019/2020'),
(84, 'Double Folio(5 pack), Amplop Folio Coklat(1 Pack), Cutter Besar', 'Denda', '2020-06-10', 153000, '2019/2020'),
(85, 'Bu Novi Pinjam', 'Denda', '2020-06-10', 50000, '2019/2020'),
(86, 'Masih dibawak Bu Wiwit Untuk Fotocopy', 'Denda', '2020-06-10', 47000, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `dana_keluar_un`
--

CREATE TABLE `dana_keluar_un` (
  `id` int(11) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `uang_keluar` int(11) NOT NULL,
  `tahun_ajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dana_keluar_un`
--

INSERT INTO `dana_keluar_un` (`id`, `keperluan`, `tanggal`, `uang_keluar`, `tahun_ajaran`) VALUES
(1, 'Buku Bimbel', '2020-01-01', 4320000, '2019/2020'),
(2, 'UN Rayon', '0000-00-00', 3000000, '2019/2020'),
(3, 'UN Server', '0000-00-00', 200000, '2019/2020'),
(4, 'Konsumsi', '0000-00-00', 50000, '2019/2020'),
(5, 'Konsumsi', '0000-00-00', 300000, '2019/2020'),
(7, 'Bu Wiwit Pinjam', '2020-03-01', 1800000, '2019/2020'),
(8, 'Bu Nafis Pinjam', '2020-03-14', 400000, '2019/2020'),
(9, 'USB Lan', '2020-03-02', 130000, '2019/2020'),
(10, 'Keyboard Eksternal 2 Unit', '2020-03-08', 110000, '2019/2020'),
(11, 'Konsumsi UAMBN-BK Hari Ke-1', '2020-03-09', 115500, '2019/2020'),
(12, 'Konsumsi UAMBN-BK Hari Ke-2 + Transfer Pengawas', '2020-03-10', 420000, '2019/2020'),
(13, 'Konsumsi UAMBN-BK Hari Ke-3 + Token Listrik', '2020-03-11', 173000, '2019/2020'),
(14, 'Konsumsi Ujian Madrasah Hari ke-1', '2020-03-14', 69000, '2019/2020'),
(15, 'Konsumsi Ujian Madrasah Hari ke-2', '2020-03-16', 30000, '2019/2020'),
(16, 'Fotokopi Soal Ujian Madrasah', '2020-03-16', 72000, '2019/2020'),
(17, 'Konsumsi Ujian Madrasah Hari ke-3', '2020-03-17', 45000, '2019/2020'),
(19, 'Konsumsi Ujian Madrasah Hari ke-4', '2020-03-18', 35000, '2019/2020'),
(20, 'Konsumsi Ujian Madrasah Hari ke-5', '2020-03-19', 40000, '2019/2020'),
(21, 'Konsumsi Ujian Madrasah Hari ke-6', '2020-03-20', 80000, '2019/2020'),
(22, 'Konsumsi Ujian Madrasah Hari ke-7', '2020-03-21', 280000, '2019/2020'),
(23, 'Gaji Kegiatan Ujian', '2020-03-21', 2650000, '2019/2020'),
(24, 'Operasional UAMBN', '2020-04-15', 1580000, '2019/2020'),
(25, 'Operasional UAMBN', '2020-04-16', 500000, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `dana_masuk`
--

CREATE TABLE `dana_masuk` (
  `id` int(11) NOT NULL,
  `jenis_dana` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `nominal` int(11) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dana_masuk`
--

INSERT INTO `dana_masuk` (`id`, `jenis_dana`, `tanggal_masuk`, `nominal`, `tahun_ajaran`) VALUES
(1, 'Infaq', '2020-01-20', 150000, '2019/2020'),
(4, 'Infaq', '2020-02-04', 128000, '2019/2020'),
(5, 'Denda', '2020-02-29', 813000, '2019/2020'),
(6, 'Infaq', '2020-03-03', 220000, '2019/2020'),
(7, 'Denda', '2020-03-04', 64000, '2019/2020'),
(9, 'Denda', '2020-03-06', 163000, '2019/2020'),
(12, 'Denda', '2020-03-07', 69000, '2019/2020'),
(13, 'Denda', '2020-03-09', 181000, '2019/2020'),
(14, 'Denda', '2020-03-13', 135000, '2019/2020'),
(15, 'Denda', '2020-04-06', 18000, '2019/2020'),
(16, 'Denda', '2020-05-11', 150000, '2019/2020'),
(17, 'Denda', '2020-05-15', 300000, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `pelunasan_un`
--

CREATE TABLE `pelunasan_un` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `nominal` int(11) NOT NULL,
  `tahun_ajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelunasan_un`
--

INSERT INTO `pelunasan_un` (`id`, `nama`, `tanggal`, `nominal`, `tahun_ajaran`) VALUES
(5, 'AHMAD ROSYID', '2020-03-09', 1500000, '2019/2020'),
(6, 'AHMAD TAMRIN', '0000-00-00', 0, '2019/2020'),
(7, 'AHMAD YUSUF', '2020-02-01', 500000, '2019/2020'),
(8, 'ALDI ARDIANSYAH', '0000-00-00', 0, '2019/2020'),
(10, 'ALDI PRAYOGA', '0000-00-00', 0, '2019/2020'),
(11, 'ANDRE BAGUS PRAYOGA', '2020-01-20', 500000, '2019/2020'),
(12, 'BIMA ALDI P', '0000-00-00', 0, '2019/2020'),
(13, 'BUDI RAMENA', '0000-00-00', 0, '2019/2020'),
(14, 'DEO AGUS GRAHA', '0000-00-00', 0, '2019/2020'),
(15, 'DIAH PUSPITA SARI', '2020-01-13', 200000, '2019/2020'),
(16, 'FITRI RAHAYU', '0000-00-00', 0, '2019/2020'),
(17, 'INDAH NOVITA SARI', '2020-03-21', 1500000, '2019/2020'),
(18, 'INDRA WIJAYA', '0000-00-00', 0, '2019/2020'),
(19, 'ISTRIN PANGESTU', '2019-11-23', 1500000, '2019/2020'),
(20, 'JESTI ANDAYANI', '2020-01-05', 1000000, '2019/2020'),
(21, 'JONI KURNIAWAN', '2019-10-08', 1250000, '2019/2020'),
(22, 'LAILY KHOFIFAH', '2020-02-06', 500000, '2019/2020'),
(23, 'M. NUR KHOLIK', '2020-02-01', 500000, '2019/2020'),
(24, 'M. SHOLEH', '2020-01-23', 200000, '2019/2020'),
(25, 'MAHARANI', '2020-02-24', 1500000, '2019/2020'),
(26, 'MELIYANTI', '2019-10-08', 1250000, '2019/2020'),
(27, 'MIFTAHUL MAHMUDAH', '2020-04-18', 1500000, '2019/2020'),
(28, 'NOVI AGUSTINI', '2020-03-19', 1500000, '2019/2020'),
(29, 'RIZKI RAMADHANI', '2020-02-06', 500000, '2019/2020'),
(30, 'RODI HIDAYAT', '2020-01-08', 500000, '2019/2020'),
(31, 'RONI TRIYANTO', '2020-03-16', 500000, '2019/2020'),
(32, 'SHINTA ANGGRA YENI', '2020-03-07', 1400000, '2019/2020'),
(33, 'SLAMET RIYANTO', '0000-00-00', 0, '2019/2020'),
(34, 'TOMMY RIANSYAH', '2020-02-06', 700000, '2019/2020'),
(35, 'VICO SANJAYA', '0000-00-00', 0, '2019/2020'),
(36, 'WAHYU WIRAYUDA', '0000-00-00', 0, '2019/2020'),
(37, 'WULAN MEILANI', '0000-00-00', 0, '2019/2020'),
(38, 'ZULIA RAHMAWATI', '2019-09-26', 1500000, '2019/2020'),
(39, 'TAMIM NURAINI', '2020-05-06', 1000000, '2019/2020'),
(40, 'LIDIA ASTUTI', '2020-01-13', 200000, '2019/2020'),
(41, 'WARDAH NURUL JANAH', '0000-00-00', 0, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_siswa`
--

CREATE TABLE `pembayaran_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(24) DEFAULT NULL,
  `kelas` varchar(4) DEFAULT NULL,
  `tanggal` varchar(30) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `tahun_ajaran` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran_siswa`
--

INSERT INTO `pembayaran_siswa` (`id`, `nama`, `kelas`, `tanggal`, `nominal`, `tahun_ajaran`) VALUES
(1, 'Abim Sanjaya', 'X', '', 0, '2019/2020'),
(2, 'Aji Pangestu', 'X', '', 0, '2019/2020'),
(3, 'Andika', 'X', '', 0, '2019/2020'),
(4, 'Bima Putra Wira Darma', 'X', '2020-06-10', 100000, '2019/2020'),
(5, 'Dani Reza Pratama', 'X', '2020-06-10', 100000, '2019/2020'),
(6, 'Dian Ari Pratama', 'X', '2020-06-10', 100000, '2019/2020'),
(7, 'Doni Damara', 'X', '', 0, '2019/2020'),
(8, 'Eko', 'X', '', 0, '2019/2020'),
(9, 'Farhan Diki', 'X', '2020-06-10', 100000, '2019/2020'),
(10, 'Hafis Dermawan', 'X', '', 0, '2019/2020'),
(11, 'Herwin Afandi', 'X', '2020-06-10', 100000, '2019/2020'),
(12, 'Kholisatun N.', 'X', '2020-06-10', 100000, '2019/2020'),
(13, 'M. Amrulloh', 'X', '', 0, '2019/2020'),
(14, 'M. Fajri', 'X', '2020-06-10', 100000, '2019/2020'),
(15, 'M. Malik Rohman', 'X', '2020-06-10', 100000, '2019/2020'),
(16, 'M. Muzaqi', 'X', '2020-06-10', 100000, '2019/2020'),
(17, 'M. Rofiqul Hidayat', 'X', '', 0, '2019/2020'),
(18, 'M. Sahrial', 'X', '', 0, '2019/2020'),
(19, 'Masning', 'X', '', 0, '2019/2020'),
(20, 'Miftahul Huda', 'X', '2020-06-10', 100000, '2019/2020'),
(21, 'Nata', 'X', '', 0, '2019/2020'),
(22, 'Priyo Wahyudi', 'X', '2020-06-10', 100000, '2019/2020'),
(23, 'Putra Wijaya', 'X', '', 0, '2019/2020'),
(24, 'Rahmansyah', 'X', '', 0, '2019/2020'),
(25, 'Rendi', 'X', '', 0, '2019/2020'),
(26, 'Robin Sanjaya', 'X', '', 0, '2019/2020'),
(27, 'Rusmawati', 'X', '', 0, '2019/2020'),
(28, 'Setio Budiono', 'X', '', 0, '2019/2020'),
(29, 'Wahyu Dinata', 'X', '2020-06-10', 50000, '2019/2020'),
(30, 'Yuni Astuti', 'X', '', 0, '2019/2020'),
(31, 'Juandri Ardan', 'X', '', 0, '2019/2020'),
(32, 'Rizki Dinata', 'X', '', 0, '2019/2020'),
(33, 'Adi Cahyono', 'XI.1', '2020-06-10', 100000, '2019/2020'),
(34, 'Ahmad Sodik', 'XI.1', '2020-06-10', 100000, '2019/2020'),
(35, 'Ali Mustopa', 'XI.1', '2020-06-10', 100000, '2019/2020'),
(36, 'Dandi Saputra', 'XI.1', '1970-01-01', 0, '2019/2020'),
(37, 'Dea Nanda', 'XI.1', '2020-06-10', 100000, '2019/2020'),
(38, 'Dea Septia', 'XI.1', '2020-06-10', 100000, '2019/2020'),
(39, 'Dinda Novita Sari', 'XI.1', '2020-06-10', 100000, '2019/2020'),
(40, 'Doni Kurnadi', 'XI.1', '2020-06-10', 100000, '2019/2020'),
(41, 'Eli Nurul Nikmah', 'XI.1', '', 0, '2019/2020'),
(42, 'Habib Nurohman', 'XI.1', '', 0, '2019/2020'),
(43, 'Handoyo', 'XI.1', '', 0, '2019/2020'),
(44, 'Hardiansyah', 'XI.1', '2020-06-10', 100000, '2019/2020'),
(45, 'Istaib Suro', 'XI.1', '', 0, '2019/2020'),
(46, 'Joni', 'XI.1', '', 0, '2019/2020'),
(47, 'Nafa Yuhenda', 'XI.1', '2020-06-10', 100000, '2019/2020'),
(48, 'Putri Irmawati', 'XI.1', '2020-06-10', 100000, '2019/2020'),
(49, 'Ragil Alen Valensa', 'XI.1', '', 0, '2019/2020'),
(50, 'Rani', 'XI.1', '2020-06-10', 100000, '2019/2020'),
(51, 'Revi Mariska', 'XI.1', '', 0, '2019/2020'),
(52, 'Riko Pratama', 'XI.1', '2020-06-10', 100000, '2019/2020'),
(53, 'Rio Jatri Pratama', 'XI.1', '2020-06-10', 100000, '2019/2020'),
(54, 'Sukron Arifin', 'XI.1', '', 0, '2019/2020'),
(55, 'Syahrial', 'XI.1', '', 0, '2019/2020'),
(56, 'Tika Sari', 'XI.1', '2020-06-10', 100000, '2019/2020'),
(57, 'Yeni Julia', 'XI.1', '1970-01-01', 0, '2019/2020'),
(58, 'Revi Oktavia', 'XI.1', '2020-06-10', 100000, '2019/2020'),
(59, 'Ahmad Syahri', 'XI.2', '', 0, '2019/2020'),
(60, 'Andri Budianto', 'XI.2', '2020-06-10', 100000, '2019/2020'),
(61, 'Anggi Abdul Sahid', 'XI.2', '', 0, '2019/2020'),
(62, 'Dicki Vernando', 'XI.2', '', 0, '2019/2020'),
(63, 'Fajar Purnomo', 'XI.2', '', 0, '2019/2020'),
(64, 'Fitriani', 'XI.2', '2020-06-10', 100000, '2019/2020'),
(65, 'Hendra Surandi', 'XI.2', '2020-06-10', 100000, '2019/2020'),
(66, 'Ibnu Malik', 'XI.2', '', 0, '2019/2020'),
(67, 'Irvan Windarto', 'XI.2', '2020-06-10', 100000, '2019/2020'),
(68, 'Jeri Novendra', 'XI.2', '', 0, '2019/2020'),
(69, 'Jimmy', 'XI.2', '2020-06-10', 50000, '2019/2020'),
(70, 'Lilis Ainun Fatkul Janah', 'XI.2', '2020-06-10', 100000, '2019/2020'),
(71, 'M. Ngafifur Rosidin', 'XI.2', '', 0, '2019/2020'),
(72, 'Menik Andarwati', 'XI.2', '2020-06-10', 100000, '2019/2020'),
(73, 'Muhammad Suhendra', 'XI.2', '', 0, '2019/2020'),
(74, 'Purwanti', 'XI.2', '2020-06-10', 100000, '2019/2020'),
(75, 'Rano', 'XI.2', '', 0, '2019/2020'),
(76, 'Robi Malvino', 'XI.2', '', 0, '2019/2020'),
(77, 'Siti Fatimah', 'XI.2', '2020-06-10', 100000, '2019/2020'),
(78, 'Surya Adi Wijaya', 'XI.2', '', 0, '2019/2020'),
(79, 'Tania Wulandari', 'XI.2', '', 0, '2019/2020'),
(80, 'Wahid Rama Oktafian', 'XI.2', '', 0, '2019/2020'),
(81, 'Wardatun Nuriya', 'XI.2', '2020-06-10', 100000, '2019/2020'),
(82, 'Widia Ningsih', 'XI.2', '2020-06-10', 100000, '2019/2020'),
(83, 'Yeni Ika Violita', 'XI.2', '2020-06-10', 100000, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `tahun_ajaran`) VALUES
(1, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `sisa_dana`
--

CREATE TABLE `sisa_dana` (
  `id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sisa_dana`
--

INSERT INTO `sisa_dana` (`id`, `jumlah`) VALUES
(1, 3683500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Fajri', 'fajri', '$2y$10$iKTmQmVh73BpVkCqda3iYOFBrNnyzLu6eMm1sCo3C39Cjj52xP.zK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dana_keluar`
--
ALTER TABLE `dana_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dana_keluar_un`
--
ALTER TABLE `dana_keluar_un`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dana_masuk`
--
ALTER TABLE `dana_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelunasan_un`
--
ALTER TABLE `pelunasan_un`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran_siswa`
--
ALTER TABLE `pembayaran_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sisa_dana`
--
ALTER TABLE `sisa_dana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dana_keluar`
--
ALTER TABLE `dana_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `dana_keluar_un`
--
ALTER TABLE `dana_keluar_un`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `dana_masuk`
--
ALTER TABLE `dana_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pelunasan_un`
--
ALTER TABLE `pelunasan_un`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pembayaran_siswa`
--
ALTER TABLE `pembayaran_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sisa_dana`
--
ALTER TABLE `sisa_dana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
