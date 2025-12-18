-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2025 at 11:11 AM
-- Server version: 11.4.8-MariaDB-cll-lve
-- PHP Version: 8.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ighp6117_dinkes`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang_kesehatan_masyarakats`
--

CREATE TABLE `bidang_kesehatan_masyarakats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` year(4) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `angka_kematian_ibu_per_100000` int(11) DEFAULT NULL,
  `angka_kematian_bayi_per_1000` int(11) DEFAULT NULL,
  `prevalensi_stunting` decimal(5,2) DEFAULT NULL,
  `cakupan_asi_eksklusif` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bidang_kesehatan_masyarakats`
--

INSERT INTO `bidang_kesehatan_masyarakats` (`id`, `year`, `month`, `lokasi`, `angka_kematian_ibu_per_100000`, `angka_kematian_bayi_per_1000`, `prevalensi_stunting`, `cakupan_asi_eksklusif`, `created_at`, `updated_at`) VALUES
(1, '2025', 'Mei', 'Kabupaten X', 120, 12, 24.50, 42.00, '2025-11-02 18:15:53', '2025-11-09 05:39:33'),
(4, '2024', 'Juni', 'Kabupaten X', 150, 25, 34.50, 42.00, '2025-11-02 18:15:53', '2025-11-02 21:00:32'),
(5, '2024', 'Juli', 'Kabupaten X', 90, 50, 34.50, 42.00, '2025-11-02 18:15:53', '2025-11-02 21:00:32'),
(6, '2024', 'Agustus', 'Kabupaten X', 70, 20, 14.50, 42.00, '2025-11-02 18:15:53', '2025-11-02 21:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `bidang_pelayanan_kesehatan_masyarakats`
--

CREATE TABLE `bidang_pelayanan_kesehatan_masyarakats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` year(4) DEFAULT NULL,
  `month` varchar(20) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `persentase_fasyankes_terakreditasi` decimal(5,2) DEFAULT NULL,
  `jumlah_rs_terakreditasi` int(11) DEFAULT NULL,
  `jumlah_puskesmas_terakreditasi_madya` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bidang_pelayanan_kesehatan_masyarakats`
--

INSERT INTO `bidang_pelayanan_kesehatan_masyarakats` (`id`, `year`, `month`, `lokasi`, `persentase_fasyankes_terakreditasi`, `jumlah_rs_terakreditasi`, `jumlah_puskesmas_terakreditasi_madya`, `created_at`, `updated_at`) VALUES
(1, '2025', 'Juli', NULL, 75.50, 8, 15, '2025-11-05 01:11:15', '2025-11-09 22:09:01'),
(2, '2025', 'Juni', NULL, 78.30, 9, 16, '2025-11-05 01:11:15', '2025-11-09 22:10:10'),
(3, '2025', 'Agustus', NULL, 80.10, 10, 17, '2025-11-05 01:11:15', '2025-11-09 22:08:35'),
(8, '2025', 'September', 'Maluku', 8.00, 8, 8, '2025-11-09 22:06:08', '2025-11-09 22:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `bidang_pencegahan_penyakit_menulars`
--

CREATE TABLE `bidang_pencegahan_penyakit_menulars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(20) DEFAULT NULL,
  `year` year(4) NOT NULL DEFAULT 2025,
  `persentase_pelayanan_klb` decimal(5,2) DEFAULT NULL,
  `temuan_kasus_tb` int(11) DEFAULT NULL,
  `persentase_imunisasi_dasar` decimal(5,2) DEFAULT NULL,
  `pengendalian_merokok_usia_10_18` decimal(5,2) DEFAULT NULL,
  `persentase_penanganan_krisis` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bidang_pencegahan_penyakit_menulars`
--

INSERT INTO `bidang_pencegahan_penyakit_menulars` (`id`, `month`, `year`, `persentase_pelayanan_klb`, `temuan_kasus_tb`, `persentase_imunisasi_dasar`, `pengendalian_merokok_usia_10_18`, `persentase_penanganan_krisis`, `created_at`, `updated_at`) VALUES
(1, 'Mei', '2025', 80.00, 9, 87.00, 75.00, 59.00, NULL, NULL),
(2, 'Juni', '2025', 60.00, 20, 80.00, 75.00, 59.00, NULL, NULL),
(3, 'Juli', '2025', 80.00, 9, 87.00, 55.00, 59.00, NULL, NULL),
(4, 'Agustus', '2025', 60.00, 21, 80.00, 75.00, 79.00, NULL, '2025-11-09 08:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `bidang_sumber_daya_kesehatan_masyarakats`
--

CREATE TABLE `bidang_sumber_daya_kesehatan_masyarakats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` year(4) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `indeks_rasio_dokter_dengan_penduduk` decimal(6,5) DEFAULT NULL,
  `indeks_rasio_dokter_spesialis_dengan_penduduk` decimal(6,5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bidang_sumber_daya_kesehatan_masyarakats`
--

INSERT INTO `bidang_sumber_daya_kesehatan_masyarakats` (`id`, `year`, `month`, `lokasi`, `indeks_rasio_dokter_dengan_penduduk`, `indeks_rasio_dokter_spesialis_dengan_penduduk`, `created_at`, `updated_at`) VALUES
(1, '2025', 'Mei', 'Maluku', 0.00040, 0.00010, '2025-11-07 23:51:13', '2025-11-07 23:51:13'),
(2, '2025', 'Juni', 'Maluku', 0.00060, 0.00070, '2025-11-09 21:25:00', '2025-11-09 21:47:56'),
(3, '2025', 'Juli', 'Maluku', 0.00070, 0.00070, '2025-11-09 21:31:49', '2025-11-09 21:48:23'),
(4, '2025', 'Agustus', 'Maluku', 0.00060, 0.00030, '2025-11-09 21:42:04', '2025-11-09 21:42:04'),
(5, '2025', 'September', NULL, 0.00890, 0.00430, '2025-11-23 21:04:27', '2025-11-23 21:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_10_29_035426_create_permission_tables', 2),
(6, '2025_11_01_032715_create_bidang_kesehatan_masyarakats_table', 3),
(7, '2025_11_05_034737_create_bidang_pelayanan_kesehatan_masyarakats_table', 4),
(8, '2025_11_06_045641_create_bidang_pencegahan_penyakit_menulars_table', 5),
(9, '2025_11_08_045845_create_bidang_sumber_daya_kesehatan_masyarakats_table', 6),
(10, '2025_11_09_014751_create_sekretariats_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sekretariats`
--

CREATE TABLE `sekretariats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` year(4) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `nilai_sakip` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sekretariats`
--

INSERT INTO `sekretariats` (`id`, `year`, `month`, `nilai_sakip`, `created_at`, `updated_at`) VALUES
(1, '2025', 'Mei', 85.50, '2025-11-08 20:09:10', '2025-11-09 22:04:25'),
(2, '2025', 'Juni', 89.00, '2025-11-08 20:10:37', '2025-11-09 22:04:57'),
(3, '2024', 'Agustus', 87.89, '2025-11-08 20:13:29', '2025-11-23 06:20:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@admin.com', NULL, '$2y$12$EXs3aPgo0UE0gaWlIdcCsuy9xtsAVRAEQXxrrQYj17xcp8Miu5/7K', 'admin', 'c7xDjDZMBPLmbKaiQegdnjqDDj8T59x2qaitxMLPXnTJR4XXHHX2ZOyBPxUt', '2025-11-09 23:18:26', '2025-11-09 23:18:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang_kesehatan_masyarakats`
--
ALTER TABLE `bidang_kesehatan_masyarakats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidang_pelayanan_kesehatan_masyarakats`
--
ALTER TABLE `bidang_pelayanan_kesehatan_masyarakats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidang_pencegahan_penyakit_menulars`
--
ALTER TABLE `bidang_pencegahan_penyakit_menulars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidang_sumber_daya_kesehatan_masyarakats`
--
ALTER TABLE `bidang_sumber_daya_kesehatan_masyarakats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sekretariats`
--
ALTER TABLE `sekretariats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang_kesehatan_masyarakats`
--
ALTER TABLE `bidang_kesehatan_masyarakats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bidang_pelayanan_kesehatan_masyarakats`
--
ALTER TABLE `bidang_pelayanan_kesehatan_masyarakats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bidang_pencegahan_penyakit_menulars`
--
ALTER TABLE `bidang_pencegahan_penyakit_menulars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bidang_sumber_daya_kesehatan_masyarakats`
--
ALTER TABLE `bidang_sumber_daya_kesehatan_masyarakats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sekretariats`
--
ALTER TABLE `sekretariats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
