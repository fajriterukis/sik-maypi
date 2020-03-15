-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2020 pada 12.40
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si-maypi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dana_keluar`
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
-- Dumping data untuk tabel `dana_keluar`
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
(26, 'ATK + USB Lan', 'Denda', '2020-03-02', 602000, '2019/2020'),
(27, 'Bata', 'Denda', '2020-03-03', 60000, '2019/2020'),
(37, 'Cable Ties + Tisu Ukuran Sedang', 'Denda', '2020-03-05', 44000, '2019/2020'),
(38, 'Keyboard Eksternal + Fotokopi 300 Lembar', 'Denda', '2020-03-08', 170000, '2019/2020'),
(39, 'Air mineral 1 dus + Konsumsi', 'Denda', '2020-03-09', 115500, '2019/2020'),
(40, 'Pinjam', 'Denda', '2020-03-09', 85000, '2019/2020'),
(41, 'Konsumsi + Transfer Pengawas', 'Denda', '2020-03-10', 420000, '2019/2020'),
(42, 'Konsumsi + Token Listrik', 'Denda', '2020-03-11', 173000, '2019/2020'),
(43, 'Aqua 3 Dus + Bensin', 'Denda', '2020-03-13', 75000, '2019/2020'),
(44, 'Konsumsi Ujian Sekolah Hari ke-1', 'Denda', '2020-03-14', 69000, '2019/2020'),
(45, 'Pena 2 Kotak, Lem Kertas besar, Tisu Ukuran Sedang', 'Denda', '2020-03-15', 57000, '2019/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dana_keluar_un`
--

CREATE TABLE `dana_keluar_un` (
  `id` int(11) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `uang_keluar` int(11) NOT NULL,
  `tahun_ajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dana_keluar_un`
--

INSERT INTO `dana_keluar_un` (`id`, `keperluan`, `tanggal`, `uang_keluar`, `tahun_ajaran`) VALUES
(1, 'Buku Bimbel', '2020-01-01', 4320000, '2019/2020'),
(2, 'UN Rayon', '0000-00-00', 3000000, '2019/2020'),
(3, 'UN Server', '0000-00-00', 200000, '2019/2020'),
(4, 'Konsumsi', '0000-00-00', 50000, '2019/2020'),
(5, 'Konsumsi', '0000-00-00', 300000, '2019/2020'),
(7, 'Bu Wiwit', '2020-03-01', 1800000, '2019/2020'),
(8, 'Bu Nafis', '2020-03-14', 400000, '2019/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dana_masuk`
--

CREATE TABLE `dana_masuk` (
  `id` int(11) NOT NULL,
  `jenis_dana` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `nominal` int(11) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dana_masuk`
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
(14, 'Denda', '2020-03-13', 135000, '2019/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelunasan_un`
--

CREATE TABLE `pelunasan_un` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `nominal` int(11) NOT NULL,
  `tahun_ajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelunasan_un`
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
(17, 'INDAH NOVITA SARI', '0000-00-00', 0, '2019/2020'),
(18, 'INDRA WIJAYA', '0000-00-00', 0, '2019/2020'),
(19, 'ISTRIN PANGESTU', '2019-11-23', 1500000, '2019/2020'),
(20, 'JESTI ANDAYANI', '2020-01-05', 1000000, '2019/2020'),
(21, 'JONI KURNIAWAN', '2019-10-08', 1250000, '2019/2020'),
(22, 'LAILY KHOFIFAH', '2020-02-06', 500000, '2019/2020'),
(23, 'M. NUR KHOLIK', '2020-02-01', 500000, '2019/2020'),
(24, 'M. SHOLEH', '2020-01-23', 200000, '2019/2020'),
(25, 'MAHARANI', '2020-02-24', 1500000, '2019/2020'),
(26, 'MELIYANTI', '2019-10-08', 1250000, '2019/2020'),
(27, 'MIFTAHUL MAHMUDAH', '0000-00-00', 800000, '2019/2020'),
(28, 'NOVI AGUSTINI', '2020-03-04', 1250000, '2019/2020'),
(29, 'RIZKI RAMADHANI', '2020-02-06', 500000, '2019/2020'),
(30, 'RODI HIDAYAT', '2020-01-08', 500000, '2019/2020'),
(31, 'RONI TRIYANTO', '0000-00-00', 0, '2019/2020'),
(32, 'SHINTA ANGGRA YENI', '2020-03-07', 1400000, '2019/2020'),
(33, 'SLAMET RIYANTO', '0000-00-00', 0, '2019/2020'),
(34, 'TOMMY RIANSYAH', '2020-02-06', 700000, '2019/2020'),
(35, 'VICO SANJAYA', '0000-00-00', 0, '2019/2020'),
(36, 'WAHYU WIRAYUDA', '0000-00-00', 0, '2019/2020'),
(37, 'WULAN MEILANI', '0000-00-00', 0, '2019/2020'),
(38, 'ZULIA RAHMAWATI', '2020-09-26', 1500000, '2019/2020'),
(39, 'TAMIM NURAINI', '0000-00-00', 0, '2019/2020'),
(40, 'LIDIA ASTUTI', '2020-01-13', 200000, '2019/2020'),
(41, 'WARDAH NURUL JANAH', '0000-00-00', 0, '2019/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_siswa`
--

CREATE TABLE `pembayaran_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `nominal` int(11) NOT NULL,
  `tahun_ajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `tahun_ajaran`) VALUES
(1, '2019/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sisa_dana`
--

CREATE TABLE `sisa_dana` (
  `id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sisa_dana`
--

INSERT INTO `sisa_dana` (`id`, `jumlah`) VALUES
(1, 3783500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Fajri', 'fajri', '$2y$10$iKTmQmVh73BpVkCqda3iYOFBrNnyzLu6eMm1sCo3C39Cjj52xP.zK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dana_keluar`
--
ALTER TABLE `dana_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dana_keluar_un`
--
ALTER TABLE `dana_keluar_un`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dana_masuk`
--
ALTER TABLE `dana_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelunasan_un`
--
ALTER TABLE `pelunasan_un`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran_siswa`
--
ALTER TABLE `pembayaran_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sisa_dana`
--
ALTER TABLE `sisa_dana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dana_keluar`
--
ALTER TABLE `dana_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `dana_keluar_un`
--
ALTER TABLE `dana_keluar_un`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `dana_masuk`
--
ALTER TABLE `dana_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pelunasan_un`
--
ALTER TABLE `pelunasan_un`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_siswa`
--
ALTER TABLE `pembayaran_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sisa_dana`
--
ALTER TABLE `sisa_dana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
