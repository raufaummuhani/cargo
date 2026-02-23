-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2026 at 04:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `cargos`
--

CREATE TABLE `cargos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mitra_id` bigint(20) UNSIGNED NOT NULL,
  `no_resi` varchar(255) NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `jenis_pengiriman` varchar(255) NOT NULL,
  `tarif_per_kg` int(11) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `berat` int(5) NOT NULL,
  `status` enum('pending','proses','transit','sampai','diterima') NOT NULL DEFAULT 'pending',
  `total` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cargos`
--

INSERT INTO `cargos` (`id`, `mitra_id`, `no_resi`, `driver_id`, `vehicle_id`, `name`, `jenis_pengiriman`, `tarif_per_kg`, `pengirim`, `penerima`, `asal`, `tujuan`, `berat`, `status`, `total`, `created_at`, `updated_at`) VALUES
(1, 7, '000000000000000000', 3, 1, '', 'nnnnnnnnn', 0, 'uuuuuu', 'iiiiiiiiiiii', 'jjjjj', 'iiiiiiii', 9, 'sampai', 2000000, NULL, NULL),
(3, 9, 'FTL-0896-909', 11, 1, 'cengkeh', 'FTL', 5000, 'IQBAL', 'IGHFAR', 'BANDA ACEH', 'BIREUEN', 900, 'pending', 2000000, NULL, NULL),
(4, 9, '000000000000000000', 3, 1, '', 'nnnnnnnnn', 0, 'uuuuuu', 'iiiiiiiiiiii', 'jjjjj', 'iiiiiiii', 9, 'sampai', 2000000, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cargo_trackings`
--

CREATE TABLE `cargo_trackings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cargo_id` bigint(20) UNSIGNED NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cargo_trackings`
--

INSERT INTO `cargo_trackings` (`id`, `cargo_id`, `lokasi`, `status`, `keterangan`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 3, 'blang panjoe', 'pending', 'mmmmmmmmmmmmmm mmmmmmmmmmmm nnnnnnnnnnnnn bbbbbbbbbbbbb kkkkkkkk', NULL, NULL, NULL, '2026-02-12 13:20:04'),
(2, 4, 'blang panjoe', 'sampai', 'mmmmmmmmmmmmmm mmmmmmmmmmmm nnnnnnnnnnnnn bbbbbbbbbbbbb kkkkkkkk', NULL, NULL, NULL, '2026-02-12 13:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_sim` varchar(255) DEFAULT NULL,
  `user_id` int(20) NOT NULL,
  `mitra_id` int(20) NOT NULL,
  `status` enum('available','unavailable') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `nama`, `no_hp`, `alamat`, `no_sim`, `user_id`, `mitra_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ivan', '0909999999', 'mmmmmmmmmm', '77777777', 0, 9, 'available', NULL, NULL),
(2, 'ivan', '0909999999', 'mmmmmmmmmm', '77777777', 0, 7, 'available', NULL, NULL),
(3, 'ighfar', '08999999999999', 'kkkkkkkkkk', '7777777', 8, 9, 'available', '2026-02-13 00:20:38', '2026-02-13 00:20:38');

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
(5, '2025_10_29_035426_create_permission_tables', 1),
(6, '2025_11_01_032715_create_bidang_kesehatan_masyarakats_table', 1),
(7, '2025_11_05_034737_create_bidang_pelayanan_kesehatan_masyarakats_table', 1),
(8, '2025_11_06_045641_create_bidang_pencegahan_penyakit_menulars_table', 1),
(9, '2025_11_08_045845_create_bidang_sumber_daya_kesehatan_masyarakats_table', 1),
(10, '2025_11_09_014751_create_sekretariats_table', 1),
(14, '2026_01_05_032327_create_drivers_table', 2),
(15, '2026_01_05_032449_create_vehicles_table', 2),
(16, '2026_01_05_042333_create_cargo_trackings_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mitras`
--

CREATE TABLE `mitras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mitra` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(4, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 7),
(5, 'App\\Models\\User', 3),
(5, 'App\\Models\\User', 8),
(5, 'App\\Models\\User', 11),
(6, 'App\\Models\\User', 5),
(7, 'App\\Models\\User', 9),
(7, 'App\\Models\\User', 10);

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

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'web', '2026-01-18 20:56:05', '2026-01-18 20:56:05'),
(5, 'driver', 'web', '2026-01-18 20:56:05', '2026-01-18 20:56:05'),
(6, 'super-admin', 'web', '2026-01-26 03:38:36', '2026-01-26 03:38:36'),
(7, 'mitra', 'web', '2026-02-03 20:26:29', '2026-02-03 20:26:29');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('super-admin','admin','mitra','driver','') NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'adminn', 'n@j.comm', 'admin', NULL, '$2y$12$CHoKDL015B2xsfBdE1i2pe9qeeF664xZ837thklgVzAyqWAho7dwa', NULL, '2026-01-15 00:13:25', '2026-01-22 21:13:30'),
(2, 'Admin', 'admin@mail.com', 'admin', NULL, '$2y$12$qho0E4uTdgONOyeAJZsf1.FEKI1e9HomE/n02wcjoNnA8xx0BLZB2', 'qiq5L5UUF4ZkZBdKTOf8gkXwCulwYoECARjzhewQXJinsodDCDuuUmxZlR50', '2026-01-18 20:56:05', '2026-01-18 20:56:05'),
(3, 'Driver', 'driver@mail.com', 'driver', NULL, '$2y$12$9ZUZOZvr0S3Jo7.eueeunOL57jc5wrQa04ZCijYjEcY3z.1oKZcgq', NULL, '2026-01-18 20:56:06', '2026-01-22 01:27:28'),
(5, 'Super Admin', 'superadmin@mail.com', 'super-admin', NULL, '$2y$12$EFLz7W8FGGSz4yCdUr2vnejqoNfUddUabPk4zQuStAfY8EulRcmo2', NULL, '2026-01-26 03:38:37', '2026-01-26 03:38:37'),
(6, 'super admin', 'superadmin@gmail.com', 'super-admin', NULL, '$2y$12$LLRI4H2RgQDBQXND2QV5n.i27oyi0HKK5mdxb1P8glaMsH9jmc.EC', NULL, '2026-02-02 00:48:45', '2026-02-02 00:48:45'),
(7, 'Mitra', 'mitra@mail.com', 'mitra', NULL, '$2y$12$deC8iOQbJwEvbo5iBmYkNO6qRSQyyZP4HxIfFZxsBf9nB8vtJoNG6', NULL, '2026-02-03 20:26:30', '2026-02-03 20:26:30'),
(8, 'driv', 'driv@gmail.com', 'driver', NULL, '$2y$12$.Hfp.8SjlcuGMfk7w7hLHO4OPYENMMfbeYGY5UgGZEVOGsihgRuku', NULL, '2026-02-07 03:20:13', '2026-02-07 03:20:13'),
(9, 'mit', 'mitra@maill.com', 'driver', NULL, '$2y$12$6HN4rFUWcFrWuA/Kfl2sfOw/0MeivaL8LQJY1a7bewclx8Y/kPELW', NULL, '2026-02-08 01:32:46', '2026-02-08 01:32:46'),
(10, 'mitra', 'mitra@maill.co', 'driver', NULL, '$2y$12$Bkxu6MDPtSwRx.zZ6bFl6OLk3zVzPRWfR.Ky.ivLvZx.qyE2z7Z6u', NULL, '2026-02-11 02:06:27', '2026-02-11 02:06:27'),
(11, 'drive', 'drivv@mail.com', 'driver', NULL, '$2y$12$EUXIrHyIf6FnlRiARZPI9.cSzBJL4TU.bAZyN7ZL1kiwuRryIx45q', NULL, '2026-02-13 05:18:18', '2026-02-13 05:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_polisi` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `warna` varchar(255) DEFAULT NULL,
  `kapasitas_kg` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `nomor_polisi`, `jenis`, `merk`, `warna`, `kapasitas_kg`, `created_at`, `updated_at`) VALUES
(1, '9999999', 'truck', 'truk', 'biru', 900, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargos_driver_id_foreign` (`driver_id`),
  ADD KEY `mitra_id` (`mitra_id`);

--
-- Indexes for table `cargo_trackings`
--
ALTER TABLE `cargo_trackings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargo_trackings_cargo_id_foreign` (`cargo_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
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
-- Indexes for table `mitras`
--
ALTER TABLE `mitras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mitras_user` (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicles_nomor_polisi_unique` (`nomor_polisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cargo_trackings`
--
ALTER TABLE `cargo_trackings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mitras`
--
ALTER TABLE `mitras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cargos`
--
ALTER TABLE `cargos`
  ADD CONSTRAINT `cargos_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cargo_trackings`
--
ALTER TABLE `cargo_trackings`
  ADD CONSTRAINT `cargo_trackings_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mitras`
--
ALTER TABLE `mitras`
  ADD CONSTRAINT `fk_mitras_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
