-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2016 at 10:39 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus_ekonomi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kd_admin` varchar(4) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kd_admin`, `nama_admin`, `username`, `password`) VALUES
('AD01', 'M.Naufal', 'fahmi', 'fahmi');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `npm` varchar(12) NOT NULL,
  `nama_anggota` varchar(20) NOT NULL,
  `jeniskel` char(9) NOT NULL,
  `almt` varchar(100) NOT NULL,
  `kd_prodi` varchar(4) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(12) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`npm`, `nama_anggota`, `jeniskel`, `almt`, `kd_prodi`, `no_telp`, `email`, `status`, `username`, `password`) VALUES
('141105150808', 'Dewi', 'Perempuan', 'Test', 'EK03', '00', 'test@gmail.com', 'aktif', 'dewi', 'dewi'),
('141105151137', 'M.Yuda', 'Laki-Laki', 'Ciluer', 'EK01', '08777321846', 'myudaaja@gmail.com', 'aktif', 'yuda', 'apaajaloh');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kd_buku` varchar(6) NOT NULL,
  `jdl_buku` varchar(25) NOT NULL,
  `kd_ktg_buku` varchar(5) NOT NULL,
  `pengarang` varchar(15) NOT NULL,
  `penerbit` varchar(15) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `rak_buku` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kd_buku`, `jdl_buku`, `kd_ktg_buku`, `pengarang`, `penerbit`, `jumlah`, `rak_buku`) VALUES
('FE0001', 'Managemen Ekonomi', 'KTG01', 'Abraham', 'MediaIndo', 10, '02'),
('FE0212', 'Perbankan', 'KTG02', 'Smith', 'UtahTemp', 20, '04'),
('FE035', 'Ilmu Perbankan', 'KTG03', 'Sigit', 'Ganesha', 24, '02');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `kd_ktg_buku` varchar(5) NOT NULL,
  `nama_ktg` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_buku`
--

INSERT INTO `kategori_buku` (`kd_ktg_buku`, `nama_ktg`) VALUES
('KTG01', 'Managemen'),
('KTG02', 'Ekonomi'),
('KTG03', 'Ekonomi Perbank');

-- --------------------------------------------------------

--
-- Table structure for table `kepala_perpus`
--

CREATE TABLE `kepala_perpus` (
  `kd_kp` varchar(4) NOT NULL,
  `nama_kp` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepala_perpus`
--

INSERT INTO `kepala_perpus` (`kd_kp`, `nama_kp`, `username`, `password`) VALUES
('KP01', 'M.Nafis', 'nafis', 'nafis');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `kd_op` varchar(4) NOT NULL,
  `nama_op` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`kd_op`, `nama_op`, `username`, `password`, `no_telp`, `email`) VALUES
('OP01', 'Ghamal', 'ghamal', 'honomaki', '081213728276', 'ghamal231296@gmail.com'),
('OP02', 'Riyan Saputra Irawan', 'riyan', 'riyan', '083819125429', 'riyansaputrai007@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `kd_peminjaman` int(5) NOT NULL,
  `npm` varchar(12) NOT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_tempo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`kd_peminjaman`, `npm`, `tgl_pinjam`, `tgl_tempo`) VALUES
(51, '141105150808', '2016-05-24', '2016-05-25'),
(52, '141105151137', '2016-05-24', '2016-05-31'),
(53, '141105151137', '2016-05-24', '2016-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kd_prodi` varchar(4) NOT NULL,
  `nama_prodi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kd_prodi`, `nama_prodi`) VALUES
('EK01', 'Managemen'),
('EK02', 'Akuntansi'),
('EK03', 'Ek.Syariah');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_peminjaman`
--

CREATE TABLE `transaksi_peminjaman` (
  `id_faktur` int(5) NOT NULL,
  `kd_peminjaman` int(5) NOT NULL,
  `kd_buku` varchar(6) NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `denda` int(12) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_peminjaman`
--

INSERT INTO `transaksi_peminjaman` (`id_faktur`, `kd_peminjaman`, `kd_buku`, `tgl_kembali`, `denda`, `jumlah`, `status`) VALUES
(2, 51, 'FE0212', '2016-05-01', 0, 1, 'Sudah Kembali'),
(4, 51, 'FE0001', '2016-05-27', 1000, 1, 'Sudah Kembali'),
(5, 52, 'FE0001', '2016-05-27', 0, 1, 'Sudah Kembali'),
(6, 53, 'FE0212', NULL, 0, 1, 'Belum Kembali'),
(7, 53, 'FE0001', NULL, 0, 1, 'Belum Kembali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`npm`),
  ADD KEY `kd_prodi` (`kd_prodi`),
  ADD KEY `kd_prodi_2` (`kd_prodi`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kd_buku`),
  ADD KEY `kd_ktg_buku` (`kd_ktg_buku`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`kd_ktg_buku`);

--
-- Indexes for table `kepala_perpus`
--
ALTER TABLE `kepala_perpus`
  ADD PRIMARY KEY (`kd_kp`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`kd_op`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`kd_peminjaman`),
  ADD KEY `npm` (`npm`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kd_prodi`);

--
-- Indexes for table `transaksi_peminjaman`
--
ALTER TABLE `transaksi_peminjaman`
  ADD PRIMARY KEY (`id_faktur`),
  ADD KEY `kd_buku` (`kd_buku`),
  ADD KEY `kd_peminjaman` (`kd_peminjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `kd_peminjaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `transaksi_peminjaman`
--
ALTER TABLE `transaksi_peminjaman`
  MODIFY `id_faktur` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi` (`kd_prodi`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`npm`) REFERENCES `anggota` (`npm`);

--
-- Constraints for table `transaksi_peminjaman`
--
ALTER TABLE `transaksi_peminjaman`
  ADD CONSTRAINT `transaksi_peminjaman_ibfk_2` FOREIGN KEY (`kd_buku`) REFERENCES `buku` (`kd_buku`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
