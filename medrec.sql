-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 08:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medrec`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokters`
--

CREATE TABLE `dokters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `spesialisasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medcheckups`
--

CREATE TABLE `medcheckups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_medrec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `tinggi_badan` double NOT NULL,
  `berat_badan` double NOT NULL,
  `pregnancies` int(11) NOT NULL,
  `glucose` double NOT NULL,
  `blood_pressure` double NOT NULL,
  `skin_thickness` double NOT NULL,
  `insulin` double NOT NULL,
  `bmi` double NOT NULL,
  `diabetes_pedigree_fx` double NOT NULL,
  `age` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medcheckups`
--

INSERT INTO `medcheckups` (`id`, `id_medrec`, `id_rs`, `tanggal`, `tinggi_badan`, `berat_badan`, `pregnancies`, `glucose`, `blood_pressure`, `skin_thickness`, `insulin`, `bmi`, `diabetes_pedigree_fx`, `age`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '2022-02-13', 175, 72, 0, 124, 110, 32, 72, 24, 537, 37, '2022-04-22 11:00:52', '2022-04-22 11:00:52'),
(2, '1', '1', '2022-03-18', 175, 70, 0, 119, 110, 32, 82, 23.333333333333, 497, 37, '2022-04-22 11:03:21', '2022-04-22 11:03:21'),
(3, '2', '1', '2022-03-18', 160, 76, 0, 245, 120, 48, 97, 25.333333333333, 368, 29, '2022-04-22 11:04:47', '2022-04-22 11:04:47'),
(4, '2', '2', '2022-04-05', 160, 75, 0, 298, 120, 48, 102, 25, 571, 29, '2022-04-22 11:05:35', '2022-04-22 11:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `medrecs`
--

CREATE TABLE `medrecs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_nikah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanggungjawab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klinik_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_rekam` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medrecs`
--

INSERT INTO `medrecs` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `alamat`, `agama`, `status_nikah`, `pendidikan`, `pekerjaan`, `kewarganegaraan`, `pembayaran`, `penanggungjawab`, `no_telp`, `klinik_tujuan`, `tanggal_rekam`, `created_at`, `updated_at`) VALUES
(1, 'Abdul', 'Bandung', '1985-09-23', 'L', 'Cihampelas', '1', '1', '4', '2', '1', '1', 'Amir', '08123456789', '3', '2022-02-13', '2022-04-22 10:50:02', '2022-04-22 10:50:02'),
(2, 'Budi', 'Cirebon', '1992-11-09', 'L', 'Dago', '2', '2', '4', '1', '1', '1', 'Barry', '08213465978', '4', '2022-02-19', '2022-04-22 10:51:31', '2022-04-22 10:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(79, '2014_10_12_000000_create_users_table', 1),
(80, '2014_10_12_100000_create_password_resets_table', 1),
(81, '2019_08_19_000000_create_failed_jobs_table', 1),
(82, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(83, '2022_04_02_045907_create_medrecs_table', 1),
(84, '2022_04_04_054604_create_rawat_jalans_table', 1),
(85, '2022_04_04_080944_create_rawat_inaps_table', 1),
(86, '2022_04_04_144239_create_dokters_table', 1),
(87, '2022_04_09_152838_create_medcheckups_table', 1),
(88, '2022_04_12_040539_create_riwayat_rekam_medis_table', 1),
(89, '2022_04_22_140038_create_rumah_sakits_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'MedrecToken', '1853013726798db54d412547c89345df7d40b57a130da648885786af8a0edfc8', '[\"*\"]', NULL, '2022-04-22 10:45:07', '2022-04-22 10:45:07'),
(2, 'App\\Models\\User', 1, 'MedrecTokenLogin', '14a8e2b381f865bf828b3ceae928f6390e9203532cd4f8dc772f6c6d3f44b805', '[\"*\"]', '2022-04-22 11:21:02', '2022-04-22 10:45:21', '2022-04-22 11:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_inaps`
--

CREATE TABLE `rawat_inaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `id_medrec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_perawatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cara_masuk_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pindah_internrs_dari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pindar_internrs_ke` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_keluar_rs_hidup` time DEFAULT NULL,
  `waktu_keluar_rs_mati` time DEFAULT NULL,
  `diagnosis_utama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komplikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebab_luar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_tindakan` date NOT NULL,
  `dokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cara_keluar_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi_keluar_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rawat_jalans`
--

CREATE TABLE `rawat_jalans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `id_medrec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cara_kunjungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kunjungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindak_lanjut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kematian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kasus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyebab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terapi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_rekam_medis`
--

CREATE TABLE `riwayat_rekam_medis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_medrec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat_rekam_medis`
--

INSERT INTO `riwayat_rekam_medis` (`id`, `hash`, `id_medrec`, `id_rs`, `nama_file`, `created_at`, `updated_at`) VALUES
(1, 'belum ada', '1', '1', '11650651434.json', '2022-04-22 11:17:14', '2022-04-22 11:17:14'),
(2, 'belum ada', '1', '1', '11650651507.json', '2022-04-22 11:18:27', '2022-04-22 11:18:27'),
(3, 'belum ada', '2', '1', '21650651534.json', '2022-04-22 11:18:54', '2022-04-22 11:18:54'),
(4, 'belum ada', '2', '1', '21650651662.json', '2022-04-22 11:21:02', '2022-04-22 11:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `rumah_sakits`
--

CREATE TABLE `rumah_sakits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepemilikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_tidur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `id_rs`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'Musa', '1', 'naomi@rumahsakit1.com', NULL, '$2y$10$NO4HVqvi0rmGI2NlSms/ne4QfQHDTcXsbyVhiha80eg7x5Ji.WgJu', '1', NULL, '2022-04-22 10:45:07', '2022-04-22 10:45:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokters`
--
ALTER TABLE `dokters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `medcheckups`
--
ALTER TABLE `medcheckups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medrecs`
--
ALTER TABLE `medrecs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rawat_inaps`
--
ALTER TABLE `rawat_inaps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rawat_jalans`
--
ALTER TABLE `rawat_jalans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat_rekam_medis`
--
ALTER TABLE `riwayat_rekam_medis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rumah_sakits`
--
ALTER TABLE `rumah_sakits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokters`
--
ALTER TABLE `dokters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medcheckups`
--
ALTER TABLE `medcheckups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medrecs`
--
ALTER TABLE `medrecs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rawat_inaps`
--
ALTER TABLE `rawat_inaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rawat_jalans`
--
ALTER TABLE `rawat_jalans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_rekam_medis`
--
ALTER TABLE `riwayat_rekam_medis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rumah_sakits`
--
ALTER TABLE `rumah_sakits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
