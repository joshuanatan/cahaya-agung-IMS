-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 04:00 PM
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
-- Database: `project-leadership`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_submit_absen` int(11) NOT NULL,
  `tgl_absen` date NOT NULL,
  `id_submit_karyawan` int(11) NOT NULL,
  `id_user_add` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_submit_barang` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan_barang` varchar(200) NOT NULL,
  `harga_jual_barang` int(11) NOT NULL,
  `tgl_masuk_barang` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_aktif_barang` int(11) NOT NULL,
  `id_user_add` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `id_submit_distributor` int(11) NOT NULL,
  `nama_distributor` int(200) NOT NULL,
  `alamat_distributor` text NOT NULL,
  `notelp_distributor` varchar(20) NOT NULL,
  `nama_pic` varchar(200) NOT NULL,
  `nohp_pic` varchar(20) NOT NULL,
  `status_aktif_distributor` int(11) NOT NULL,
  `tgl_tambah_distributor` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user_add` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_pemesanan_barang`
--

CREATE TABLE `item_pemesanan_barang` (
  `id_submit_item_pemesanan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_submit_pemesanan` int(11) NOT NULL,
  `harga_item_pemesanan` int(11) NOT NULL,
  `jumlah_item_pemesanan` int(11) NOT NULL,
  `id_user_add` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_penerimaan_barang`
--

CREATE TABLE `item_penerimaan_barang` (
  `id_submit_item_penerimaan` int(11) NOT NULL,
  `id_submit_penerimaan` int(11) NOT NULL,
  `id_submit_item_pemesanan` int(11) NOT NULL,
  `tgl_terima` date NOT NULL,
  `jumlah_terima` int(11) NOT NULL,
  `id_user_add` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_penjualan`
--

CREATE TABLE `item_penjualan` (
  `id_submit_item_penjualan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_terjual` int(11) NOT NULL,
  `id_submit_penjualan` int(11) NOT NULL,
  `id_user_add` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_submit_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(200) NOT NULL,
  `tgl_masuk_karyawan` datetime NOT NULL,
  `gaji_perjam` int(11) NOT NULL,
  `status_aktif_karyawan` int(11) NOT NULL,
  `nohp_karyawan` varchar(20) NOT NULL,
  `id_user_add` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_barang`
--

CREATE TABLE `pemesanan_barang` (
  `id_submit_pemesanan` int(11) NOT NULL,
  `id_submit_distributor` int(11) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `status_aktif_pemesanan` int(11) NOT NULL,
  `is_done_pemesanan` int(11) NOT NULL,
  `id_user_add` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan_barang`
--

CREATE TABLE `penerimaan_barang` (
  `id_submit_penerimaan` int(11) NOT NULL,
  `tgl_penerimaan` date NOT NULL,
  `id_submit_pemesanan` int(11) NOT NULL,
  `id_user_add` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_submit_penjualan` int(11) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `jumlah_item_terjual` int(11) NOT NULL,
  `jumlah_uang_masuk` int(11) NOT NULL,
  `id_user_add` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_submit_user` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `role_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_submit_absen`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_submit_barang`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id_submit_distributor`);

--
-- Indexes for table `item_pemesanan_barang`
--
ALTER TABLE `item_pemesanan_barang`
  ADD PRIMARY KEY (`id_submit_item_pemesanan`);

--
-- Indexes for table `item_penerimaan_barang`
--
ALTER TABLE `item_penerimaan_barang`
  ADD PRIMARY KEY (`id_submit_item_penerimaan`);

--
-- Indexes for table `item_penjualan`
--
ALTER TABLE `item_penjualan`
  ADD PRIMARY KEY (`id_submit_item_penjualan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_submit_karyawan`);

--
-- Indexes for table `pemesanan_barang`
--
ALTER TABLE `pemesanan_barang`
  ADD PRIMARY KEY (`id_submit_pemesanan`);

--
-- Indexes for table `penerimaan_barang`
--
ALTER TABLE `penerimaan_barang`
  ADD PRIMARY KEY (`id_submit_penerimaan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_submit_penjualan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_submit_absen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_submit_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id_submit_distributor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_pemesanan_barang`
--
ALTER TABLE `item_pemesanan_barang`
  MODIFY `id_submit_item_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_penerimaan_barang`
--
ALTER TABLE `item_penerimaan_barang`
  MODIFY `id_submit_item_penerimaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_penjualan`
--
ALTER TABLE `item_penjualan`
  MODIFY `id_submit_item_penjualan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_submit_karyawan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan_barang`
--
ALTER TABLE `pemesanan_barang`
  MODIFY `id_submit_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penerimaan_barang`
--
ALTER TABLE `penerimaan_barang`
  MODIFY `id_submit_penerimaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_submit_penjualan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
