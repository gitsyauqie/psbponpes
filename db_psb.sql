-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2022 at 08:56 PM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Sistem sebagai Admin'),
(2, 'santri', 'hanya bisa ubah datanya masing-masing');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 5),
(2, 2),
(2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 6),
(2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '127.0.0.1', 'fajricrt@gmail.com', 3, '2022-11-20 00:58:05', 0),
(2, '127.0.0.1', 'akfajri', 2, '2022-11-20 01:01:40', 0),
(3, '127.0.0.1', '191111104', NULL, '2022-11-20 01:18:37', 0),
(4, '127.0.0.1', 'fajriae@gmail.com', 1, '2022-11-20 01:19:04', 0),
(5, '127.0.0.1', 'fajricrt@gmail.com', 3, '2022-11-20 01:20:34', 0),
(6, '127.0.0.1', 'akfajri', 2, '2022-11-20 01:21:25', 0),
(7, '127.0.0.1', 'ach.khoirulfajri1@gmail.com', 5, '2022-11-20 01:28:57', 1),
(8, '127.0.0.1', '191111104', NULL, '2022-11-20 01:31:55', 0),
(9, '127.0.0.1', 'ach.khoirulfajri1@gmail.com', 5, '2022-11-20 01:32:18', 1),
(10, '127.0.0.1', 'ach.khoirulfajri1@gmail.com', 5, '2022-11-20 01:33:34', 1),
(11, '127.0.0.1', 'data@gmail.com', 6, '2022-11-20 01:39:14', 1),
(12, '127.0.0.1', 'data@gmail.com', 6, '2022-11-20 01:52:49', 1),
(13, '127.0.0.1', 'santri@mail.com', 7, '2022-11-20 02:23:37', 1),
(14, '127.0.0.1', 'data@mail.com', NULL, '2022-11-20 02:45:22', 0),
(15, '127.0.0.1', 'data@gmail.com', 6, '2022-11-20 02:45:57', 1),
(16, '127.0.0.1', 'data@gmail.com', 6, '2022-11-20 05:52:25', 1),
(17, '127.0.0.1', 'data@gmail.com', 6, '2022-11-20 06:01:47', 1),
(18, '127.0.0.1', 'data@gmail.com', 6, '2022-11-20 06:06:24', 1),
(19, '127.0.0.1', 'santri@mail.com', 7, '2022-11-20 06:08:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'bisa memanagement data user'),
(2, 'manage-profile', 'Manage User\'s Profile'),
(3, 'manage-data-wali', 'management data wali santri'),
(4, 'manage-data-pendidikan', 'bisa memanagement data pendidikan '),
(5, 'manage-jadwal-tes', 'bisa management jadwal tes santri'),
(6, 'manage-data-prestasi', 'siswa bisa mamanagement data prestasinya masing masing'),
(7, 'manage-data-santri', 'santri dapat mamanagement datanya santri masing-masing'),
(8, 'manage-data-kamari', '');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tes`
--

CREATE TABLE `jadwal_tes` (
  `id` int NOT NULL,
  `sesi` varchar(100) NOT NULL,
  `tgl_tes` date NOT NULL,
  `kuota` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` int NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `kapasitas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1668865099, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ref_jenispendaftaran`
--

CREATE TABLE `ref_jenispendaftaran` (
  `id` int NOT NULL,
  `ref_tahun_id` int NOT NULL,
  `jenis_pendaftaran` varchar(50) NOT NULL,
  `is_active` int NOT NULL,
  `is_open` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `ref_jenjang`
--

CREATE TABLE `ref_jenjang` (
  `id` int NOT NULL,
  `jenjang` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ref_jenjang`
--

INSERT INTO `ref_jenjang` (`id`, `jenjang`) VALUES
(1, 'MTs'),
(2, 'MA');

-- --------------------------------------------------------

--
-- Table structure for table `ref_tahun`
--

CREATE TABLE `ref_tahun` (
  `id` int NOT NULL,
  `tahun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id` int NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `gol_darah` enum('A','AB','B','O') NOT NULL,
  `no_wa` varchar(16) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_daftar` datetime NOT NULL,
  `foto` varchar(300) NOT NULL,
  `no_pendaftaran` varchar(50) DEFAULT NULL,
  `ref_jenjang_id` int NOT NULL,
  `ref_jenispendaftaran_id` int NOT NULL,
  `is_valid` int DEFAULT NULL,
  `is_complate` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id`, `nik`, `nama`, `tmp_lahir`, `tgl_lahir`, `gender`, `gol_darah`, `no_wa`, `email`, `tgl_daftar`, `foto`, `no_pendaftaran`, `ref_jenjang_id`, `ref_jenispendaftaran_id`, `is_valid`, `is_complate`) VALUES
(1, '12345678', 'asdsdf', 'asdfsdf', '2022-11-16', '0', 'A', '11111', 'ahmadkhoirulfajri664@gmail.com', '2022-11-23 00:00:00', 'aaaa', NULL, 0, 0, NULL, 0),
(2, '160212121212', 'ahmad', 'asdfsdf', '2022-11-16', '0', 'A', '0822222', 'ahmadkhoirulfajri664@gmail.com', '2022-11-15 00:00:00', 'sdfsdf', NULL, 0, 0, NULL, 0),
(3, '121313131', 'asdsdf', 'asdfsdf', '2022-11-23', '0', 'A', '1212121212', 'ahmadkhoirulfajri664@gmail.com', '2022-11-23 00:00:00', 'sadf', NULL, 0, 0, NULL, 0),
(4, '2222222222', 'asdsdfS', 'asdfsdfASDFSADF', '2022-11-15', '0', '', '1212121212', 'ahmadkhoirulfajri664@gmail.com', '2022-11-15 00:00:00', 'sadf', NULL, 0, 0, NULL, 0),
(5, '144', 'Asssss', 'asdfsd', '2022-11-25', 'L', 'A', '343434', 'ahmadkhoirulfajri664@gmail.com', '2022-11-23 00:00:00', 'a', NULL, 0, 0, NULL, 0),
(6, '1466623434', 'sadfsadf', 'asdfsdf', '2022-11-16', 'L', 'A', '34343434', 'ahmadkhoirulfajri664@gmail.com', '2022-11-23 00:00:00', 'Screenshot from 2021-07-28 11-01-55.png', NULL, 0, 0, NULL, 0),
(7, '23232323232', 'asdsdf', 'asfsef', '2022-11-15', 'L', 'A', '2323232', 'ahmadkhoirulfajri664@gmail.com', '2022-11-16 00:00:00', '1668768871_093a31d99b2179bbe3cb.png', NULL, 0, 0, NULL, 0),
(8, '123123123123', 'sadfsadf', 'asdfsdf', '2022-11-15', 'on', '', '343434', 'fajri@mail.com', '0000-00-00 00:00:00', '1668790133_928f291bbd953b69aff9.png', NULL, 0, 0, NULL, 0),
(9, '121212121212', 'ASDaSD', 'ASDasd', '2022-11-21', 'on', '', '23131313', 'ach.khoirulfajri@gmail.com', '0000-00-00 00:00:00', '1668790322_8323f70f86a03a95205d.png', NULL, 0, 0, NULL, 0),
(10, '334343434', 'sdasfsad', 'asdfasdf', '2022-11-22', 'Laki-Laki', 'B', '33334343', 'ahmadkhoirulfajri664@gmail.com', '0000-00-00 00:00:00', 'default.jpg', NULL, 0, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `santri_backup`
--

CREATE TABLE `santri_backup` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` tinyint NOT NULL,
  `gol_darah` enum('A','AB','B','O') NOT NULL,
  `no_wa` varchar(16) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_daftar` datetime NOT NULL,
  `foto` varchar(300) NOT NULL,
  `no_pendaftaran` varchar(50) DEFAULT NULL,
  `ref_jenjang_id` int NOT NULL,
  `ref_jenispendaftaran_id` int NOT NULL,
  `is_valid` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `santri_berkas`
--

CREATE TABLE `santri_berkas` (
  `id` int NOT NULL,
  `nik` int NOT NULL,
  `file_surat_sehat` varchar(200) NOT NULL,
  `file_skkb` varchar(200) NOT NULL,
  `file_tatatertib` varchar(200) NOT NULL,
  `file_perjanjian` varchar(200) NOT NULL,
  `file_alumni` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `santri_data_ortu`
--

CREATE TABLE `santri_data_ortu` (
  `id` int NOT NULL,
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
  `pekerjaan_ayah_id` int NOT NULL,
  `penghasilan` int NOT NULL,
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
  `pekerjaan_ibu` int NOT NULL,
  `penghasilan_ibu` int NOT NULL,
  `nama_wali` varchar(50) DEFAULT NULL,
  `nik_wali` varchar(20) DEFAULT NULL,
  `alamat_wali` text,
  `telpon_wali` varchar(20) DEFAULT NULL,
  `is_complate` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `santri_detail`
--

CREATE TABLE `santri_detail` (
  `id` int NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `file_kk` varchar(200) NOT NULL,
  `anak_ke` int NOT NULL,
  `jml_saudara` int NOT NULL,
  `kewarganegaraan` enum('WNI','WNA') NOT NULL,
  `status_anak` enum('Kandung','Angkat/Tiri') NOT NULL,
  `file_akte` varchar(200) NOT NULL,
  `riwayat_penyakit` text NOT NULL,
  `alamat` text NOT NULL,
  `ref_provinsi_id` int NOT NULL,
  `ref_kabupaten_id` int NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  `is_complate` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `santri_kamar`
--

CREATE TABLE `santri_kamar` (
  `id` int NOT NULL,
  `kamar_id` int NOT NULL,
  `nik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `santri_pendidikan`
--

CREATE TABLE `santri_pendidikan` (
  `id` int NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `file_nisn` varchar(200) NOT NULL,
  `sekolah_asal` varchar(200) NOT NULL,
  `jenis_sekolah` enum('MTS','SMP','MI','SD') NOT NULL,
  `npsn` varchar(200) NOT NULL,
  `nss` varchar(200) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `tahun_masuk` year NOT NULL,
  `tahun_keluar` year NOT NULL,
  `file_npsn` varchar(200) NOT NULL,
  `file_ijazah` varchar(200) NOT NULL,
  `file_skhun` varchar(200) NOT NULL,
  `rapot7` varchar(200) NOT NULL,
  `rapot8` varchar(200) NOT NULL,
  `is_complate` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `santri_prestasi`
--

CREATE TABLE `santri_prestasi` (
  `id` int NOT NULL,
  `nik` int NOT NULL,
  `prestasi` int NOT NULL,
  `tingkat` enum('Internasional','Nasional','Provinsi','Kabupaten') NOT NULL,
  `file_prestasi` int NOT NULL,
  `juara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `santri_prestasi`
--

INSERT INTO `santri_prestasi` (`id`, `nik`, `prestasi`, `tingkat`, `file_prestasi`, `juara`) VALUES
(1, 0, 1, 'Nasional', 1668794055, 'Lomba Kaligrafi'),
(2, 0, 4, 'Internasional', 1668803594, 'Lomba Kaligrafi'),
(3, 0, 4, 'Nasional', 1668806006, 'Lomba Kaligrafi'),
(4, 0, 1, 'Nasional', 1668806091, '2');

-- --------------------------------------------------------

--
-- Table structure for table `santri_tes`
--

CREATE TABLE `santri_tes` (
  `id` int NOT NULL,
  `nik` varchar(20) NOT NULL,
  `jadwal_tes_id` int NOT NULL,
  `status` int DEFAULT NULL,
  `nilai_quran` int DEFAULT NULL,
  `nilai_hafalan` int DEFAULT NULL,
  `nilai_kitab` int DEFAULT NULL,
  `nilai_fasholatan` int DEFAULT NULL,
  `nilai_psikotes` int DEFAULT NULL,
  `catatan_quran` text,
  `catatan_hafalan` text,
  `catatan_kitab` text,
  `catatan_fasholatan` text,
  `catatan_psikotes` text,
  `status_quran` int DEFAULT NULL,
  `status_hafalan` int DEFAULT NULL,
  `status_kitab` int DEFAULT NULL,
  `status_fasholatan` int DEFAULT NULL,
  `status_psikotes` int DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `rata` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `nik` int DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `nik`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'data@gmail.com', NULL, '160215070397', '$2y$10$b62qVejrOFwN6DDcoeWaAeXDX1oh1IN7NYNiV.xfPJlABvvV1DLTW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-20 01:37:50', '2022-11-20 01:37:50', NULL),
(7, 'santri@mail.com', NULL, '12345678', '$2y$10$3fSB06b1Iwyze0YK7H1D3eNXU0WGelakvDjxpQLeLp5gGCOzgXMnu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-20 02:12:42', '2022-11-20 02:12:42', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`) USING BTREE,
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_tes`
--
ALTER TABLE `jadwal_tes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ref_jenispendaftaran`
--
ALTER TABLE `ref_jenispendaftaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_jenjang`
--
ALTER TABLE `ref_jenjang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ref_tahun`
--
ALTER TABLE `ref_tahun`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `santri_berkas`
--
ALTER TABLE `santri_berkas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri_data_ortu`
--
ALTER TABLE `santri_data_ortu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri_detail`
--
ALTER TABLE `santri_detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri_kamar`
--
ALTER TABLE `santri_kamar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri_pendidikan`
--
ALTER TABLE `santri_pendidikan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri_prestasi`
--
ALTER TABLE `santri_prestasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `santri_tes`
--
ALTER TABLE `santri_tes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
