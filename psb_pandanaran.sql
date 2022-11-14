-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 14, 2022 at 02:28 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb_pandanaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tes`
--

CREATE TABLE `jadwal_tes` (
  `id` int(11) NOT NULL,
  `sesi` varchar(100) NOT NULL,
  `tgl_tes` date NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` int(11) NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ref_jenispendaftaran`
--

CREATE TABLE `ref_jenispendaftaran` (
  `id` int(11) NOT NULL,
  `ref_tahun_id` int(11) NOT NULL,
  `jenis_pendaftaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ref_jenjang`
--

CREATE TABLE `ref_jenjang` (
  `id` int(11) NOT NULL,
  `jenjang` enum('mts','ma') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ref_tahun`
--

CREATE TABLE `ref_tahun` (
  `id` int(11) NOT NULL,
  `tahun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` tinyint(2) NOT NULL,
  `gol_darah` enum('A','AB','B','O') NOT NULL,
  `no_wa` varchar(16) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_daftar` datetime NOT NULL,
  `foto` varchar(300) NOT NULL,
  `no_pendaftaran` varchar(50) DEFAULT NULL,
  `ref_jenjang_id` int(11) NOT NULL,
  `ref_jenispendaftaran_id` int(11) NOT NULL,
  `is_valid` int(11) DEFAULT NULL,
  `is_complate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `santri_backup`
--

CREATE TABLE `santri_backup` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` tinyint(2) NOT NULL,
  `gol_darah` enum('A','AB','B','O') NOT NULL,
  `no_wa` varchar(16) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_daftar` datetime NOT NULL,
  `foto` varchar(300) NOT NULL,
  `no_pendaftaran` varchar(50) DEFAULT NULL,
  `ref_jenjang_id` int(11) NOT NULL,
  `ref_jenispendaftaran_id` int(11) NOT NULL,
  `is_valid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `santri_berkas`
--

CREATE TABLE `santri_berkas` (
  `id` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `file_surat_sehat` varchar(200) NOT NULL,
  `file_skkb` varchar(200) NOT NULL,
  `file_tatatertib` varchar(200) NOT NULL,
  `file_perjanjian` varchar(200) NOT NULL,
  `file_alumni` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `santri_data_ortu`
--

CREATE TABLE `santri_data_ortu` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nik_ayah` varchar(20) DEFAULT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `tmp_lahir_ayah` varchar(50) NOT NULL,
  `telpon_ayah` varchar(50) DEFAULT NULL,
  `status_ayah` enum('Kandung','Tiri') NOT NULL,
  `keadaan_ayah` enum('Sehat','Meninggal') NOT NULL,
  `file_ktp_ayah` varchar(200) DEFAULT NULL,
  `pendidikan_ayah` enum('SD','SMP','SMA','S1','S2','S3') NOT NULL,
  `pekerjaan_ayah_id` int(11) NOT NULL,
  `penghasilan` int(11) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nik_ibu` varchar(20) DEFAULT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `tmp_lahir_ibu` varchar(30) NOT NULL,
  `telpon_ibu` varchar(20) DEFAULT NULL,
  `status_ibu` enum('Kandung','Tiri') NOT NULL,
  `keadaan_ibu` enum('Sehat','Meninggal') NOT NULL,
  `file_ktp_ibu` varchar(200) DEFAULT NULL,
  `pendidikan_ibu` enum('SD','SMP','SMA','S1','S2','S3') NOT NULL,
  `pekerjaan_ibu` int(11) NOT NULL,
  `penghasilan_ibu` int(11) NOT NULL,
  `nama_wali` varchar(50) DEFAULT NULL,
  `nik_wali` varchar(20) DEFAULT NULL,
  `alamat_wali` text,
  `telpon_wali` varchar(20) DEFAULT NULL,
  `is_complate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `santri_detail`
--

CREATE TABLE `santri_detail` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `file_kk` varchar(200) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `jml_saudara` int(11) NOT NULL,
  `kewarganegaraan` enum('WNI','WNA') NOT NULL,
  `status_anak` enum('Kandung','Angkat/Tiri') NOT NULL,
  `file_akte` varchar(200) NOT NULL,
  `riwayat_penyakit` text NOT NULL,
  `alamat` text NOT NULL,
  `ref_provinsi_id` int(11) NOT NULL,
  `ref_kabupaten_id` int(11) NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  `is_complate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `santri_kamar`
--

CREATE TABLE `santri_kamar` (
  `id` int(11) NOT NULL,
  `kamar_id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `santri_pendidikan`
--

CREATE TABLE `santri_pendidikan` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `file_nisn` varchar(200) NOT NULL,
  `sekolah_asal` varchar(200) NOT NULL,
  `jenis_sekolah` enum('MTS','SMP','MI','SD') NOT NULL,
  `npsn` varchar(200) NOT NULL,
  `nss` varchar(200) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `tahun_keluar` year(4) NOT NULL,
  `file_npsn` varchar(200) NOT NULL,
  `file_ijazah` varchar(200) NOT NULL,
  `file_skhun` varchar(200) NOT NULL,
  `rapot7` varchar(200) NOT NULL,
  `rapot8` varchar(200) NOT NULL,
  `is_complate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `santri_prestasi`
--

CREATE TABLE `santri_prestasi` (
  `id` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `prestasi` int(11) NOT NULL,
  `tingkat` enum('Internasional','Nasional','Provinsi','Kabupaten') NOT NULL,
  `file_prestasi` int(11) NOT NULL,
  `juara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `santri_tes`
--

CREATE TABLE `santri_tes` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `jadwal_tes_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `nilai_quran` int(11) DEFAULT NULL,
  `nilai_hafalan` int(11) DEFAULT NULL,
  `nilai_kitab` int(11) DEFAULT NULL,
  `nilai_fasholatan` int(11) DEFAULT NULL,
  `nilai_psikotes` int(11) DEFAULT NULL,
  `catatan_quran` text,
  `catatan_hafalan` text,
  `catatan_kitab` text,
  `catatan_fasholatan` text,
  `catatan_psikotes` text,
  `status_quran` int(11) DEFAULT NULL,
  `status_hafalan` int(11) DEFAULT NULL,
  `status_kitab` int(11) DEFAULT NULL,
  `status_fasholatan` int(11) DEFAULT NULL,
  `status_psikotes` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `rata` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_tes`
--
ALTER TABLE `jadwal_tes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_jenispendaftaran`
--
ALTER TABLE `ref_jenispendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ref_tahun_id` (`ref_tahun_id`);

--
-- Indexes for table `ref_jenjang`
--
ALTER TABLE `ref_jenjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_tahun`
--
ALTER TABLE `ref_tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `ref_jenjang_id` (`ref_jenjang_id`),
  ADD KEY `ref_jenispendaftaran_id` (`ref_jenispendaftaran_id`);

--
-- Indexes for table `santri_backup`
--
ALTER TABLE `santri_backup`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `ref_jenjang_id` (`ref_jenjang_id`),
  ADD KEY `ref_jenispendaftaran_id` (`ref_jenispendaftaran_id`);

--
-- Indexes for table `santri_berkas`
--
ALTER TABLE `santri_berkas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `santri_data_ortu`
--
ALTER TABLE `santri_data_ortu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `santri_detail`
--
ALTER TABLE `santri_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `santri_kamar`
--
ALTER TABLE `santri_kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kamar_id` (`kamar_id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `santri_pendidikan`
--
ALTER TABLE `santri_pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `santri_prestasi`
--
ALTER TABLE `santri_prestasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `santri_tes`
--
ALTER TABLE `santri_tes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_tes`
--
ALTER TABLE `jadwal_tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_jenispendaftaran`
--
ALTER TABLE `ref_jenispendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_jenjang`
--
ALTER TABLE `ref_jenjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_tahun`
--
ALTER TABLE `ref_tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri_berkas`
--
ALTER TABLE `santri_berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri_data_ortu`
--
ALTER TABLE `santri_data_ortu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri_detail`
--
ALTER TABLE `santri_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri_kamar`
--
ALTER TABLE `santri_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri_pendidikan`
--
ALTER TABLE `santri_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri_prestasi`
--
ALTER TABLE `santri_prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri_tes`
--
ALTER TABLE `santri_tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
