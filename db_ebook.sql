-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 02:19 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `jenis_buku` varchar(50) NOT NULL,
  `harga_buku` varchar(50) NOT NULL,
  `tgl_masuk_buku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `nama_buku`, `jenis_buku`, `harga_buku`, `tgl_masuk_buku`) VALUES
(1, 'The Twing Light', 'Kartun', '50.000', '2018-08-23'),
(2, 'Jingle Christmas', 'Kartun', '50.000', '2019-01-14'),
(3, 'Monster from the Ground', 'Action', '120.000', '2019-01-05'),
(4, 'Hello World!', 'Drama', '70.000', '2018-12-25'),
(5, 'Horrible Moon', 'Horror', '100.000', '2018-09-05'),
(9, 'Menjadi yang Sempurna', 'Drama', '100.000', '2019-01-15'),
(10, 'Kelinci dan Kancil', 'Horror', '90000', '2019-01-09'),
(11, 'Membaca Indah', 'Drama', '60.000', '2019-01-15'),
(12, 'Joget Kemari', 'Komedi', '50.000', '2019-01-14'),
(16, 'Upin & Upin 2', 'Kartun', '200.000', '2019-01-08'),
(17, 'Cinta yang terpendam', 'Drama', '50.000', '2019-01-10'),
(18, 'JUNGLE LEAF', 'Action', '50.000', '2019-01-08'),
(19, 'BOOK OF DAWN', 'Action', '150.000', '2019-01-16'),
(20, 'INTROVERT\'S LIFE', 'Motivation', '110.000', '2019-01-08'),
(26, 'BINTANG TERANG', 'Drama', '120.000', '2019-01-08'),
(27, 'THE HULK', 'Action', '120.000', '2019-01-14'),
(28, 'AVENGERS 4 INFINITY WAR', 'Action', '200.000', '2019-01-14'),
(29, 'PENGENALAN JAVASCRIPT', 'Pendidikan', '150.000', '2019-01-13'),
(30, 'JONES BERTINGKAH', 'Drama', '90.000', '2019-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `tanggal_kategori` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`, `tanggal_kategori`) VALUES
(1, 'Komedi', '2019-01-18 15:16:05'),
(2, 'Action', '2019-01-18 15:16:32'),
(3, 'Drama', '2019-01-18 15:16:32'),
(4, 'Horror', '2019-01-18 15:17:18'),
(5, 'Kartun', '2019-01-18 15:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `jenis_kelamin_pelanggan` enum('L','P') NOT NULL,
  `agama_pelanggan` enum('Kristen','Buddha','Islam') NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `jenis_kelamin_pelanggan`, `agama_pelanggan`, `alamat_pelanggan`) VALUES
(2, 'Felix', 'L', 'Kristen', 'Jakarta'),
(3, 'WILSON', 'L', 'Kristen', 'Jalan Avros No 90'),
(4, 'Martin', 'L', 'Islam', 'Aceh'),
(5, 'Vina', 'P', 'Kristen', 'Medan'),
(9, 'JENNY', 'P', 'Kristen', 'Jakarta'),
(10, 'HANDI', 'L', 'Islam', 'Kalimantan Timur'),
(13, 'JESSICA', 'P', 'Buddha', 'Jalan Sekip No 345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `email_pengguna` varchar(50) NOT NULL,
  `jenis_kelamin_pengguna` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat_pengguna` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Admin','User') NOT NULL,
  `gambar_pengguna` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `nama_pengguna`, `email_pengguna`, `jenis_kelamin_pengguna`, `alamat_pengguna`, `username`, `password`, `level`, `gambar_pengguna`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'Laki-laki', 'Medan', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'blank.png'),
(5, 'DARWIN', 'darwinblacks@gmail.com', 'Laki-laki', 'Medan', '', 'd41d8cd98f00b204e9800998ecf8427e', 'User', 'a8fe8840958211ee109b27d579783f87.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_satuan`
--

CREATE TABLE `tbl_satuan` (
  `id_satuan` int(11) NOT NULL,
  `nama_satuan` varchar(50) NOT NULL,
  `tanggal_satuan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_satuan`
--

INSERT INTO `tbl_satuan` (`id_satuan`, `nama_satuan`, `tanggal_satuan`) VALUES
(1, 'set', '2019-01-18 16:03:19'),
(2, 'kotak', '2019-01-18 16:03:19'),
(3, 'lusin', '2019-01-18 16:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id_settings` int(11) NOT NULL,
  `nama_settings` varchar(50) NOT NULL,
  `alamat_settings` varchar(50) NOT NULL,
  `telepon_settings` varchar(50) NOT NULL,
  `email_settings` varchar(50) NOT NULL,
  `keterangan_settings` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id_settings`, `nama_settings`, `alamat_settings`, `telepon_settings`, `email_settings`, `keterangan_settings`) VALUES
(1, 'eBook', 'Jakarta', '423241', 'ebook@gmail.com', 'Mendapatkan buku yang berkualitas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `id_stock` int(11) NOT NULL,
  `tanggal_stock` varchar(50) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `detail_stock` enum('Penambahan Stok','Lain') NOT NULL,
  `jumlah_stock` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`id_stock`, `tanggal_stock`, `id_buku`, `id_supplier`, `detail_stock`, `jumlah_stock`) VALUES
(8, '0000-00-00 00:00:00', 5, 4, 'Penambahan Stok', '3'),
(9, '0000-00-00 00:00:00', 4, 4, 'Penambahan Stok', '4'),
(10, '0000-00-00 00:00:00', 16, 1, 'Penambahan Stok', '6'),
(11, '2019-01-17 00:00:00', 3, 5, 'Penambahan Stok', '3'),
(12, '01/19/2019 6:22 PM', 2, 3, 'Penambahan Stok', '3'),
(13, '2019-01-22 05:52:55', 2, 1, 'Penambahan Stok', '3'),
(14, '2019-01-22 05:54:28', 12, 3, 'Penambahan Stok', '9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat_supplier` text NOT NULL,
  `telepon_supplier` varchar(50) NOT NULL,
  `email_supplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `telepon_supplier`, `email_supplier`) VALUES
(1, 'Christopher', 'Jalan Brigjend Zein Hamid Gang Karya No 6 C', '081353123789', 'christopher@gmail.com'),
(2, 'HANA123', 'Medanasasx', '7443', 'hana@gmail.com'),
(3, 'Nene', 'Bandung', '085637212771', 'nene@gmail.com'),
(4, 'Jojo', 'Jakarta', '082342728882', 'jojo@gmail.com'),
(5, 'Kaka', 'Kalimantan', '082553389876', 'kaka@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `harga_buku` varchar(50) NOT NULL,
  `jumlah_buku` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_buku`, `nama_buku`, `harga_buku`, `jumlah_buku`) VALUES
(1, 2, 'Jingle Christmas', '50000', 4),
(2, 2, 'Jingle Christmas', '50000', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id_settings`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`id_stock`),
  ADD KEY `f_stock` (`id_buku`),
  ADD KEY `supplier` (`id_supplier`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id_settings` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD CONSTRAINT `f_stock` FOREIGN KEY (`id_buku`) REFERENCES `tbl_buku` (`id_buku`) ON UPDATE CASCADE,
  ADD CONSTRAINT `supplier` FOREIGN KEY (`id_supplier`) REFERENCES `tbl_supplier` (`id_supplier`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
