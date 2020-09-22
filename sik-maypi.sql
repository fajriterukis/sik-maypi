-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2020 at 02:46 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14573075_sikmaypi`
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
(25, 'Air Mineral 3 Dus + Sabun', 'Infaq', '2020-02-26', 60000, '2019/2020'),
(26, 'ATK', 'Denda', '2020-03-02', 472000, '2019/2020'),
(27, 'Bata', 'Denda', '2020-03-03', 60000, '2019/2020'),
(37, 'Cable Ties + Tisu Ukuran Sedang', 'Denda', '2020-03-05', 44000, '2019/2020'),
(51, 'Fotokopi brosur dan Formulir 300 lembar', 'Denda', '2020-03-08', 60000, '2019/2020'),
(53, 'Air Mineral 3 Dus + Bensin', 'Denda', '2020-03-13', 75000, '2019/2020'),
(54, 'Pena 2 Kotak, Lem Kertas besar, Tisu Ukuran Sedang', 'Denda', '2020-03-15', 57000, '2019/2020'),
(56, 'Bensin service printer', 'Denda', '2020-03-19', 10000, '2019/2020'),
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
(87, 'Tinta printer hitam blueprint 2 botol', 'Denda', '2020-06-12', 80000, '2019/2020'),
(88, 'Konsumsi', 'Denda', '2020-06-15', 10000, '2019/2020'),
(90, 'Konsumsi = Gorengan (30.000) + Air Mineral (17000)', 'Denda', '2020-06-17', 47000, '2019/2020'),
(91, 'Konsumsi = Gorengan (30.000) + Nasi (175.000) ', 'Denda', '2020-06-18', 205000, '2019/2020'),
(92, 'Beli Sabun Cuci Piring (Sunlight)', 'Denda', '2020-06-18', 1000, '2019/2020'),
(93, 'Tisu', 'Denda', '2020-06-18', 19000, '2019/2020'),
(94, 'Konsumsi = Gorengan(30.000) + Nasi Rendang (144.000)', 'Denda', '2020-06-19', 174000, '2019/2020'),
(95, 'Air Mineral', 'Denda', '2020-06-19', 17000, '2019/2020'),
(96, 'Kertas A4 2 rim', 'Denda', '2020-06-19', 76000, '2019/2020'),
(97, 'Konsumsi (Gorengan)', 'Denda', '2020-06-20', 20000, '2019/2020'),
(100, 'Catridge 811', 'Denda', '2020-07-01', 275000, '2019/2020'),
(101, 'A4 & F4 Sidu 75 Gram (1 Rim), Pena & Gunting 1 Buah ', 'Denda', '2020-07-01', 101000, '2019/2020'),
(102, 'Air Mineral Winro 1 Dus', 'Denda', '2020-07-08', 16000, '2019/2020'),
(103, 'Pena Greebel 1 Kotak', 'Denda', '2020-07-08', 15000, '2019/2020'),
(104, 'Konsumsi', 'Denda', '2020-07-09', 50000, '2019/2020'),
(106, 'Gayung 3 Buah', 'Denda', '2020-07-12', 12000, '2019/2020'),
(111, 'Air Mineral (17.000) dan Konsumsi (50.000)', 'Denda', '2020-07-15', 67000, '2020/2021'),
(112, 'Konsumsi', 'Denda', '2020-07-16', 50000, '2020/2021');

-- --------------------------------------------------------

--
-- Table structure for table `dana_keluar_uas`
--

CREATE TABLE `dana_keluar_uas` (
  `id` int(11) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `uang_keluar` int(11) NOT NULL,
  `tahun_ajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dana_keluar_uas`
--

INSERT INTO `dana_keluar_uas` (`id`, `keperluan`, `tanggal`, `uang_keluar`, `tahun_ajaran`) VALUES
(2, 'Service PC (Ganti Motherboard)', '2020-06-13', 1435000, '2019/2020'),
(6, 'Dana Ke Kemenag ', '2020-06-29', 1000000, '2019/2020'),
(8, 'Gaji EBS', '2020-07-08', 1499000, '2019/2020'),
(9, 'Semen 4 Sak dan Konsumsi', '2020-07-10', 400000, '2019/2020'),
(11, 'FC ', '2020-07-28', 30000, '2020/2021'),
(12, 'Kuota Axis 2', '2020-07-25', 18000, '2020/2021'),
(13, 'Kuota M3 2', '2020-07-25', 20000, '2020/2021'),
(14, 'Kuota 3 ', '2020-07-25', 21000, '2020/2021'),
(15, 'Lakban Hitam 2', '2020-07-21', 20000, '2020/2021'),
(16, 'Kertas Kambing 2 pack', '2020-07-21', 66000, '2020/2021'),
(17, 'AQUA', '2020-07-20', 18000, '2020/2021'),
(18, 'Data EMIS Kemenag', '2020-07-27', 200000, '2020/2021'),
(19, 'FC ', '2020-07-25', 34000, '2020/2021'),
(20, 'pena', '2020-07-25', 4000, '2020/2021'),
(21, 'Kertas A4 80g', '2020-07-25', 45000, '2020/2021'),
(22, 'Tipe X dan Label', '2020-07-25', 6000, '2020/2021'),
(23, 'Materai', '2020-08-18', 12000, '2020/2021'),
(24, 'FC surat izin masuk skolah', '2020-08-19', 50000, '2020/2021'),
(25, 'Air Mineral', '2020-08-19', 17000, '2020/2021'),
(26, 'obat-obatan uks ', '2020-08-23', 197000, '2020/2021'),
(27, 'face sheld 10 buah', '2020-08-23', 200000, '2020/2021'),
(29, 'Foto copy', '2020-08-22', 74000, '2020/2021'),
(30, 'sunlight', '2020-08-22', 5000, '2020/2021'),
(31, 'sabun cair hand sanitizer wipol ', '2020-08-22', 191000, '2020/2021'),
(32, 'Bantal, selimut, kain', '2020-08-23', 145000, '2020/2021'),
(33, 'Tisu, baterai pembalut, sabun cair stela', '2020-08-23', 120500, '2020/2021'),
(34, 'buah', '2020-08-23', 100000, '2020/2021'),
(35, 'laptangan', '2020-08-23', 20000, '2020/2021'),
(36, 'konsumsi', '2020-08-23', 25000, '2020/2021'),
(37, '2 sabun lifebuoy', '2020-08-24', 6000, '2020/2021'),
(38, '4 ember', '2020-08-25', 28000, '2020/2021'),
(39, '2 baterai jam', '2020-08-25', 6000, '2020/2021'),
(40, '2 gayung', '2020-08-25', 10000, '2020/2021'),
(41, 'Air mineral', '2020-08-25', 17000, '2020/2021'),
(42, 'Air mineral ', '2020-08-29', 17000, '2020/2021'),
(43, 'Air mineral ', '2020-09-08', 17500, '2020/2021'),
(44, 'FC', '2020-09-14', 141000, '2020/2021'),
(45, 'Service laptop lenovo', '2020-09-16', 80000, '2020/2021'),
(46, 'FC', '2020-09-12', 10000, '2020/2021'),
(47, 'Air mineral ', '2020-09-22', 17000, '2020/2021');

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
(25, 'Operasional UAMBN', '2020-04-16', 500000, '2019/2020'),
(37, 'Mesin Air', '2020-07-27', 450000, '2020/2021'),
(38, 'operpal', '2020-07-27', 6000, '2020/2021'),
(39, 'Gembok ', '2020-07-27', 35000, '2020/2021'),
(40, '2 Sambungan', '2020-08-03', 8000, '2020/2021'),
(41, '1 Drat luar', '2020-08-03', 4000, '2020/2021'),
(42, '1 lem', '2020-08-03', 8000, '2020/2021'),
(43, 'Siltip', '2020-08-03', 5000, '2020/2021'),
(45, 'Pulsa Listrik', '2020-07-25', 102000, '2020/2021'),
(46, 'Instal Notebook', '2020-08-15', 100000, '2020/2021'),
(47, 'Masker', '2020-09-22', 1339000, '2020/2021'),
(48, 'Transport', '2020-09-22', 20000, '2020/2021');

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
(17, 'Denda', '2020-05-15', 300000, '2019/2020'),
(18, 'Denda', '2020-06-16', 200000, '2019/2020'),
(19, 'Denda', '2020-06-19', 300000, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `hutang`
--

CREATE TABLE `hutang` (
  `id` int(11) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `jenis_dana` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `nominal` int(11) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hutang`
--

INSERT INTO `hutang` (`id`, `peminjam`, `jenis_dana`, `tanggal`, `nominal`, `tahun_ajaran`) VALUES
(1, 'Bu Wiwit', 'UN', '2020-03-01', 1500000, '2019/2020'),
(2, 'Bu Nafis', 'UN', '2020-03-14', 400000, '2019/2020'),
(3, 'Bu Rini', 'Infaq_Denda', '2020-03-17', 50000, '2019/2020'),
(4, 'Bu Rini 2', 'Infaq_Denda', '2020-03-28', 200000, '2019/2020'),
(5, 'Bu Ulan', 'Infaq_Denda', '2020-06-16', 100000, '2019/2020'),
(6, 'Bu Novi', 'UN', '2020-08-02', 100000, '2020/2021');

-- --------------------------------------------------------

--
-- Table structure for table `ketentuan_pembayaran`
--

CREATE TABLE `ketentuan_pembayaran` (
  `id` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `un` int(11) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketentuan_pembayaran`
--

INSERT INTO `ketentuan_pembayaran` (`id`, `uas`, `un`, `tahun_ajaran`) VALUES
(1, 100000, 1500000, '2019/2020'),
(7, 0, 0, '2020/2021'),
(9, 0, 0, '2021/2022');

-- --------------------------------------------------------

--
-- Table structure for table `pelunasan_un`
--

CREATE TABLE `pelunasan_un` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nominal` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `tahun_ajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelunasan_un`
--

INSERT INTO `pelunasan_un` (`id`, `nama`, `kelas`, `tanggal`, `nominal`, `diskon`, `tahun_ajaran`) VALUES
(5, 'AHMAD ROSYID', 'XII.1', '2020-03-09', 1500000, 0, '2019/2020'),
(6, 'AHMAD TAMRIN', 'XII.1', '0000-00-00', 0, 0, '2019/2020'),
(7, 'AHMAD YUSUF', 'XII.1', '2020-02-01', 500000, 0, '2019/2020'),
(8, 'ALDI ARDIANSYAH', 'XII.1', '0000-00-00', 0, 0, '2019/2020'),
(10, 'ALDI PRAYOGA', 'XII.1', '0000-00-00', 0, 0, '2019/2020'),
(11, 'ANDRE BAGUS PRAYOGA', 'XII.1', '2020-01-20', 500000, 0, '2019/2020'),
(12, 'BIMA ALDI P', 'XII.1', '0000-00-00', 0, 0, '2019/2020'),
(13, 'BUDI RAMENA', 'XII.1', '0000-00-00', 0, 0, '2019/2020'),
(14, 'DEO AGUS GRAHA', 'XII.1', '0000-00-00', 0, 0, '2019/2020'),
(15, 'DIAH PUSPITA SARI', 'XII.1', '2020-01-13', 200000, 0, '2019/2020'),
(16, 'FITRI RAHAYU', 'XII.1', '0000-00-00', 0, 0, '2019/2020'),
(17, 'INDAH NOVITA SARI', 'XII.1', '2020-03-21', 1500000, 0, '2019/2020'),
(18, 'INDRA WIJAYA', 'XII.1', '0000-00-00', 0, 0, '2019/2020'),
(19, 'ISTRIN PANGESTU', 'XII.1', '2019-11-23', 1500000, 0, '2019/2020'),
(20, 'JESTI ANDAYANI', 'XII.1', '2020-01-05', 1500000, 0, '2019/2020'),
(21, 'JONI KURNIAWAN', 'XII.1', '2019-10-08', 1250000, 250000, '2019/2020'),
(22, 'LAILY KHOFIFAH', 'XII.1', '2020-02-06', 500000, 0, '2019/2020'),
(23, 'M. NUR KHOLIK', 'XII.1', '2020-02-01', 500000, 0, '2019/2020'),
(24, 'M. SHOLEH', 'XII.1', '2020-01-23', 200000, 0, '2019/2020'),
(25, 'MAHARANI', 'XII.1', '2020-02-24', 1500000, 0, '2019/2020'),
(26, 'MELIYANTI', 'XII.1', '2019-10-08', 1250000, 250000, '2019/2020'),
(27, 'MIFTAHUL MAHMUDAH', 'XII.1', '2020-04-18', 1500000, 0, '2019/2020'),
(28, 'NOVI AGUSTINI', 'XII.1', '2020-03-19', 1500000, 0, '2019/2020'),
(29, 'RIZKI RAMADHANI', 'XII.1', '2020-02-06', 500000, 0, '2019/2020'),
(30, 'RODI HIDAYAT', 'XII.1', '2020-01-08', 500000, 0, '2019/2020'),
(31, 'RONI TRIYANTO', 'XII.1', '2020-03-16', 500000, 0, '2019/2020'),
(32, 'SHINTA ANGGRA YENI', 'XII.1', '2020-03-07', 1500000, 0, '2019/2020'),
(33, 'SLAMET RIYANTO', 'XII.1', '0000-00-00', 0, 0, '2019/2020'),
(34, 'TOMMY RIANSYAH', 'XII.1', '2020-02-06', 700000, 0, '2019/2020'),
(35, 'VICO SANJAYA', 'XII.1', '0000-00-00', 0, 0, '2019/2020'),
(36, 'WAHYU WIRAYUDA', 'XII.1', '0000-00-00', 0, 0, '2019/2020'),
(37, 'WULAN MEILANI', 'XII.1', '0000-00-00', 0, 0, '2019/2020'),
(38, 'ZULIA RAHMAWATI', 'XII.1', '2019-09-26', 1500000, 0, '2019/2020'),
(39, 'TAMIM NURAINI', 'XII.1', '2020-05-06', 1000000, 0, '2019/2020'),
(40, 'LIDIA ASTUTI', 'XII.1', '2020-01-13', 200000, 0, '2019/2020'),
(41, 'WARDAH NURUL JANAH', 'XII.1', '0000-00-00', 0, 0, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_uas`
--

CREATE TABLE `pembayaran_uas` (
  `id` int(11) NOT NULL,
  `nama` varchar(24) DEFAULT NULL,
  `kelas` varchar(4) DEFAULT NULL,
  `tanggal` varchar(30) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `diskon` int(11) NOT NULL,
  `tahun_ajaran` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran_uas`
--

INSERT INTO `pembayaran_uas` (`id`, `nama`, `kelas`, `tanggal`, `nominal`, `diskon`, `tahun_ajaran`) VALUES
(1, 'Abim Sanjaya', 'X', '2020-06-29', 100000, 0, '2019/2020'),
(2, 'Aji Pangestu', 'X', '', 0, 0, '2019/2020'),
(3, 'Andika', 'X', '2020-06-11', 100000, 0, '2019/2020'),
(4, 'Bima Putra Wira Darma', 'X', '2020-06-10', 100000, 0, '2019/2020'),
(5, 'Dani Reza Pratama', 'X', '2020-06-10', 100000, 0, '2019/2020'),
(6, 'Dian Ari Pratama', 'X', '2020-06-10', 100000, 0, '2019/2020'),
(7, 'Doni Damara', 'X', '2020-06-11', 100000, 0, '2019/2020'),
(8, 'Eko Patrio', 'X', '2020-06-11', 100000, 0, '2019/2020'),
(9, 'Farhan Diki', 'X', '2020-06-10', 100000, 0, '2019/2020'),
(10, 'Hafis Dermawan', 'X', '2020-06-13', 100000, 0, '2019/2020'),
(11, 'Herwin Afandi', 'X', '2020-06-10', 100000, 0, '2019/2020'),
(12, 'Kholisatun N.', 'X', '2020-06-10', 100000, 0, '2019/2020'),
(13, 'M. Amrulloh', 'X', '2020-08-15', 100000, 0, '2019/2020'),
(14, 'M. Fajri', 'X', '2020-05-18', 100000, 0, '2019/2020'),
(15, 'M. Malik Rohman', 'X', '2020-06-10', 100000, 0, '2019/2020'),
(16, 'M. Muzaqi', 'X', '2020-06-10', 100000, 0, '2019/2020'),
(17, 'M. Rofiqul Hidayat', 'X', '2020-06-11', 100000, 0, '2019/2020'),
(18, 'M. Sahrial', 'X', '', 0, 0, '2019/2020'),
(19, 'Masning', 'X', '', 0, 0, '2019/2020'),
(20, 'Miftahul Huda', 'X', '2020-06-10', 100000, 0, '2019/2020'),
(21, 'Nata', 'X', '', 0, 0, '2019/2020'),
(22, 'Priyo Wahyudi', 'X', '2020-06-10', 100000, 0, '2019/2020'),
(23, 'Putra Wijaya', 'X', '2020-06-11', 100000, 0, '2019/2020'),
(24, 'Rahmansyah', 'X', '2020-06-11', 100000, 0, '2019/2020'),
(25, 'Rendi', 'X', '2020-06-11', 100000, 0, '2019/2020'),
(26, 'Robin Sanjaya', 'X', '2020-06-11', 100000, 0, '2019/2020'),
(27, 'Rusmawati', 'X', '', 0, 0, '2019/2020'),
(28, 'Setio Budiono', 'X', '', 0, 0, '2019/2020'),
(29, 'Wahyu Dinata', 'X', '2020-06-10', 50000, 0, '2019/2020'),
(30, 'Yuni Astuti', 'X', '', 0, 0, '2019/2020'),
(31, 'Juandri Ardan', 'X', '2020-06-11', 100000, 0, '2019/2020'),
(32, 'Rizki Dinata', 'X', '2020-06-20', 80000, 0, '2019/2020'),
(33, 'Adi Cahyono', 'XI.1', '2020-06-10', 100000, 0, '2019/2020'),
(34, 'Ahmad Sodik', 'XI.1', '2020-06-10', 100000, 0, '2019/2020'),
(35, 'Ali Mustopa', 'XI.1', '2020-06-10', 100000, 0, '2019/2020'),
(36, 'Dandi Saputra', 'XI.1', '2020-06-13', 90000, 0, '2019/2020'),
(37, 'Dea Nanda', 'XI.1', '2020-06-10', 100000, 0, '2019/2020'),
(38, 'Dea Septia', 'XI.1', '2020-06-10', 100000, 0, '2019/2020'),
(39, 'Dinda Novita Sari', 'XI.1', '2020-06-10', 100000, 0, '2019/2020'),
(40, 'Doni Kurnadi', 'XI.1', '2020-06-10', 100000, 0, '2019/2020'),
(41, 'Eli Nurul Nikmah', 'XI.1', '2020-06-15', 100000, 0, '2019/2020'),
(42, 'Habib Nurohman', 'XI.1', '2020-06-13', 100000, 0, '2019/2020'),
(43, 'Handoyo', 'XI.1', '', 0, 0, '2019/2020'),
(44, 'Hardiansyah', 'XI.1', '2020-06-10', 100000, 0, '2019/2020'),
(45, 'Istaib Suro', 'XI.1', '2020-06-13', 100000, 0, '2019/2020'),
(46, 'Joni', 'XI.1', '2020-06-13', 100000, 0, '2019/2020'),
(47, 'Nafa Yuhenda', 'XI.1', '2020-06-10', 100000, 0, '2019/2020'),
(48, 'Putri Irmawati', 'XI.1', '2020-06-10', 100000, 0, '2019/2020'),
(49, 'Ragil Alen Valensa', 'XI.1', '2020-06-11', 100000, 0, '2019/2020'),
(50, 'Rani', 'XI.1', '2020-06-10', 100000, 0, '2019/2020'),
(51, 'Revi Mariska', 'XI.1', '2020-06-20', 100000, 0, '2019/2020'),
(52, 'Riko Pratama', 'XI.1', '2020-06-10', 100000, 0, '2019/2020'),
(53, 'Rio Jatri Pratama', 'XI.1', '2020-06-10', 100000, 0, '2019/2020'),
(54, 'Sukron Arifin', 'XI.1', '', 0, 0, '2019/2020'),
(55, 'Syahrial', 'XI.1', '2020-06-20', 100000, 0, '2019/2020'),
(56, 'Tika Sari', 'XI.1', '2020-06-10', 100000, 0, '2019/2020'),
(57, 'Yeni Julia', 'XI.1', '2020-06-11', 100000, 0, '2019/2020'),
(58, 'Revi Oktavia', 'XI.1', '2020-06-10', 100000, 0, '2019/2020'),
(59, 'Ahmad Syahri', 'XI.2', '2020-06-20', 100000, 0, '2019/2020'),
(60, 'Andri Budianto', 'XI.2', '2020-06-10', 100000, 0, '2019/2020'),
(61, 'Anggi Abdul Sahid', 'XI.2', '2020-06-11', 100000, 0, '2019/2020'),
(62, 'Dicki Vernando', 'XI.2', '2020-06-11', 90000, 0, '2019/2020'),
(63, 'Fajar Purnomo', 'XI.2', '2020-06-11', 100000, 0, '2019/2020'),
(64, 'Fitriani', 'XI.2', '2020-06-10', 100000, 0, '2019/2020'),
(65, 'Hendra Surandi', 'XI.2', '2020-06-10', 100000, 0, '2019/2020'),
(66, 'Ibnu Malik', 'XI.2', '2020-06-11', 100000, 0, '2019/2020'),
(67, 'Irvan Windarto', 'XI.2', '2020-06-10', 100000, 0, '2019/2020'),
(68, 'Jeri Novendra', 'XI.2', '2020-06-13', 100000, 0, '2019/2020'),
(69, 'Jimmy', 'XI.2', '2020-06-20', 100000, 0, '2019/2020'),
(70, 'Lilis Ainun Fatkul Janah', 'XI.2', '2020-06-10', 100000, 0, '2019/2020'),
(71, 'M. Ngafifur Rosidin', 'XI.2', '2020-06-11', 100000, 0, '2019/2020'),
(72, 'Menik Andarwati', 'XI.2', '2020-06-10', 100000, 0, '2019/2020'),
(73, 'Muhammad Suhendra', 'XI.2', '', 0, 0, '2019/2020'),
(74, 'Purwanti', 'XI.2', '2020-06-10', 100000, 0, '2019/2020'),
(75, 'Rano Hidayatullah', 'XI.2', '2020-06-13', 100000, 0, '2019/2020'),
(76, 'Robi Malvino', 'XI.2', '2020-06-13', 100000, 0, '2019/2020'),
(77, 'Siti Fatimah', 'XI.2', '2020-06-10', 100000, 0, '2019/2020'),
(78, 'Surya Adi Wijaya', 'XI.2', '', 0, 0, '2019/2020'),
(79, 'Tania Wulandari', 'XI.2', '', 0, 0, '2019/2020'),
(80, 'Wahid Rama Oktafian', 'XI.2', '2020-06-13', 100000, 0, '2019/2020'),
(81, 'Wardatun Nuriya', 'XI.2', '2020-06-10', 100000, 0, '2019/2020'),
(82, 'Widia Ningsih', 'XI.2', '2020-06-10', 100000, 0, '2019/2020'),
(83, 'Yeni Ika Violita', 'XI.2', '2020-06-10', 100000, 0, '2019/2020'),
(85, 'Ahmad Ade Saputra', 'XI.2', '2020-06-16', 100000, 0, '2019/2020');

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
(1, '2020/2021');

-- --------------------------------------------------------

--
-- Table structure for table `sisa_dana`
--

CREATE TABLE `sisa_dana` (
  `id` int(11) NOT NULL,
  `denda_infaq` int(11) NOT NULL,
  `un` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sisa_dana`
--

INSERT INTO `sisa_dana` (`id`, `denda_infaq`, `un`, `uas`, `tahun_ajaran`) VALUES
(1, 3683500, 0, 0, '2018/2019'),
(18, 259500, 5700500, 2776000, '2019/2020'),
(22, 142500, 3523500, 788000, '2020/2021');

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
(1, 'MA YPI', 'maypi', '$2y$10$Ej2CoptK/sNB3EPMpNG5h.D8ZdVcb1u71s48HM61xbEbDL1gc1jXS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dana_keluar`
--
ALTER TABLE `dana_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dana_keluar_uas`
--
ALTER TABLE `dana_keluar_uas`
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
-- Indexes for table `hutang`
--
ALTER TABLE `hutang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ketentuan_pembayaran`
--
ALTER TABLE `ketentuan_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelunasan_un`
--
ALTER TABLE `pelunasan_un`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran_uas`
--
ALTER TABLE `pembayaran_uas`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `dana_keluar_uas`
--
ALTER TABLE `dana_keluar_uas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `dana_keluar_un`
--
ALTER TABLE `dana_keluar_un`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `dana_masuk`
--
ALTER TABLE `dana_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `hutang`
--
ALTER TABLE `hutang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ketentuan_pembayaran`
--
ALTER TABLE `ketentuan_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pelunasan_un`
--
ALTER TABLE `pelunasan_un`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pembayaran_uas`
--
ALTER TABLE `pembayaran_uas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sisa_dana`
--
ALTER TABLE `sisa_dana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
