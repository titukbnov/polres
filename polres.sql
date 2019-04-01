-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 10:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polres`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_laporan_kehilangan`
--

CREATE TABLE `data_laporan_kehilangan` (
  `no_surat_kehilangan` varchar(25) NOT NULL,
  `id_polsek` varchar(15) NOT NULL,
  `id_pendaftaran` varchar(10) NOT NULL,
  `no_polisi` varchar(8) NOT NULL,
  `no_rangka` varchar(20) NOT NULL,
  `no_mesin` varchar(15) NOT NULL,
  `melapor_pada` varchar(20) NOT NULL,
  `lampiran_sim` varchar(100) NOT NULL,
  `lampiran_stnk` varchar(100) NOT NULL,
  `merk_kendaraan` varchar(25) NOT NULL,
  `warna_kendaraan` varchar(25) NOT NULL,
  `tgl_hilang` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_laporan_kehilangan`
--

INSERT INTO `data_laporan_kehilangan` (`no_surat_kehilangan`, `id_polsek`, `id_pendaftaran`, `no_polisi`, `no_rangka`, `no_mesin`, `melapor_pada`, `lampiran_sim`, `lampiran_stnk`, `merk_kendaraan`, `warna_kendaraan`, `tgl_hilang`, `deskripsi`) VALUES
('NSK001', 'polsekkoya', 'pelapor002', '123', '123', '123', 'pak fredi', '123', '123', 'honda', 'putih hitam', '2019-03-01', 'hilang di rumah'),
('NSK002', 'polseksentani', 'pelapor003', '123', '123', '123', 'hasan', '123', '123', 'honda', 'putih hitam', '2019-03-06', 'hilang di sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `data_pendaftaran`
--

CREATE TABLE `data_pendaftaran` (
  `id_pendaftaran` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `stts` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pendaftaran`
--

INSERT INTO `data_pendaftaran` (`id_pendaftaran`, `nik`, `nama_lengkap`, `username`, `jenis_kelamin`, `alamat`, `email`, `no_hp`, `stts`) VALUES
('pelapor001', '123123123123', 'Kristovel Edoway', 'kristo', 'Laki-laki', 'Abepura', 'kristovele@gmail.com', '0845454545', 'pelapor'),
('pelapor002', '123123123123', 'Marlon Wanggai', 'marlon', 'Laki-laki', 'Jayapura', 'marlon@gmail.com', '0845454545', 'pelapor'),
('pelapor003', '123123123123', 'Yahya Sumardi', 'yahya', 'Laki-laki', 'Abepura', 'yade@gmail.com', '0845454545', 'pelapor'),
('pelapor004', '123123123123', 'Yohanes Rumbewas', 'yohanes', 'Laki-laki', 'Abepura', 'yohanes@gmail.com', '0845454545', 'pelapor');

-- --------------------------------------------------------

--
-- Table structure for table `data_penemuan`
--

CREATE TABLE `data_penemuan` (
  `id_penemuan` varchar(25) NOT NULL,
  `no_surat_kehilangan` varchar(25) NOT NULL,
  `tgl_temuan` date NOT NULL,
  `lokasi_temuan` varchar(25) NOT NULL,
  `temuan_polres` varchar(100) NOT NULL,
  `temuan_polsek` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penemuan`
--

INSERT INTO `data_penemuan` (`id_penemuan`, `no_surat_kehilangan`, `tgl_temuan`, `lokasi_temuan`, `temuan_polres`, `temuan_polsek`, `status`, `deskripsi`) VALUES
('P001', 'NSK001', '2019-03-20', 'pasar sore', 'polres jayapura', 'polsek angkasa', 'Ditemukan', 'asek');

-- --------------------------------------------------------

--
-- Table structure for table `polsek`
--

CREATE TABLE `polsek` (
  `id_polsek` varchar(15) NOT NULL,
  `nama_polsek` varchar(20) NOT NULL,
  `alamat_polsek` varchar(20) NOT NULL,
  `no_telp_polsek` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polsek`
--

INSERT INTO `polsek` (`id_polsek`, `nama_polsek`, `alamat_polsek`, `no_telp_polsek`) VALUES
('polsekabe', 'Polsek Abepura', 'Abepura', '085254400951'),
('polsekabepantai', 'Polsek Abepura Panta', 'Abepura, Nafri', '085254400951'),
('polsekkoya', 'Polsek Koya', 'Jayapura, Koya', '085254400951'),
('polseknabarua', 'Polsek Nabarua', 'Nabire', '085254400951'),
('polseksentani', 'Polsek Sentani', 'Kabupaten Jayapura', '085254400951');

-- --------------------------------------------------------

--
-- Table structure for table `sms_gateway`
--

CREATE TABLE `sms_gateway` (
  `id_pendaftaran` varchar(10) NOT NULL,
  `id_penemuan` varchar(25) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `isi_pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(75) NOT NULL,
  `stts` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`, `stts`) VALUES
('admin', 'admin', 'admin'),
('pelapor', 'pelapor', 'pelapor'),
('petugas', 'petugas', 'petugas'),
('polsekabe', '12345', 'petugas'),
('polsekabepantai', '12345', 'petugas'),
('polsekkoya', '12345', 'petugas'),
('polseknabarua', '12345', 'petugas'),
('polseksentani', '12345', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_laporan_kehilangan`
--
ALTER TABLE `data_laporan_kehilangan`
  ADD PRIMARY KEY (`no_surat_kehilangan`);

--
-- Indexes for table `data_pendaftaran`
--
ALTER TABLE `data_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `data_penemuan`
--
ALTER TABLE `data_penemuan`
  ADD PRIMARY KEY (`id_penemuan`);

--
-- Indexes for table `polsek`
--
ALTER TABLE `polsek`
  ADD PRIMARY KEY (`id_polsek`);

--
-- Indexes for table `sms_gateway`
--
ALTER TABLE `sms_gateway`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
