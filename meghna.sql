-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2025 at 11:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meghna`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_@|::1', 'i:1;', 1741407758),
('laravel_cache_@|::1:timer', 'i:1741407758;', 1741407758);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cylinder`
--

CREATE TABLE `cylinder` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cylinder`
--

INSERT INTO `cylinder` (`id`, `name`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'FJM', 1, NULL, '2025-03-07 22:02:06', '2025-03-07 22:02:06');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_07_094433_client_table', 2),
(5, '2025_03_07_110719_cylinder_table', 2),
(8, '2025_03_08_042455_origin_table', 3),
(9, '2025_03_08_061854_report_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `origin_table`
--

CREATE TABLE `origin_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `origin_table`
--

INSERT INTO `origin_table` (`id`, `name`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'India', 1, NULL, '2025-03-08 00:51:01', '2025-03-08 00:51:01');

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
-- Table structure for table `report_table`
--

CREATE TABLE `report_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_date` varchar(2000) NOT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `cylinder_manu` varchar(255) NOT NULL,
  `cylinder_number` varchar(255) NOT NULL,
  `cylinder_origin` varchar(255) NOT NULL,
  `manufacture_date` varchar(255) NOT NULL,
  `water_capacity` varchar(255) NOT NULL,
  `marked_weight` varchar(255) NOT NULL,
  `cylinder_installation` varchar(255) NOT NULL,
  `cylinder_type` varchar(255) NOT NULL,
  `marking_defects` varchar(255) NOT NULL,
  `crack` varchar(255) NOT NULL,
  `thred_condition` varchar(255) NOT NULL,
  `inside_condition` varchar(255) NOT NULL,
  `actual_weight` varchar(255) NOT NULL,
  `test_step` varchar(255) NOT NULL,
  `test_pressure` varchar(255) NOT NULL,
  `water_hiter` varchar(255) NOT NULL,
  `total_expension` varchar(255) NOT NULL,
  `permanent_expension` varchar(2000) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `thickness_test` varchar(255) NOT NULL,
  `air_dry` varchar(255) NOT NULL,
  `next_retest` varchar(255) NOT NULL,
  `physical_test` varchar(255) NOT NULL,
  `hydrostatic_test` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_table`
--

INSERT INTO `report_table` (`id`, `test_date`, `serial_number`, `name`, `user_name`, `vehicle_number`, `cylinder_manu`, `cylinder_number`, `cylinder_origin`, `manufacture_date`, `water_capacity`, `marked_weight`, `cylinder_installation`, `cylinder_type`, `marking_defects`, `crack`, `thred_condition`, `inside_condition`, `actual_weight`, `test_step`, `test_pressure`, `water_hiter`, `total_expension`, `permanent_expension`, `percentage`, `thickness_test`, `air_dry`, `next_retest`, `physical_test`, `hydrostatic_test`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '2025-03-08', '1011', 'jfejkfnej', '@ibfief', 'HFIHEF-DEFE-26', 'FJM', '4846', 'India', '2025-03-08', '26.5', '25.2', 'FEUFUEW', 'EBFEBF', 'No', 'No', 'Good', 'Good', '35.2', '2ND', '35.2', '3.5', '45.0', '45.0', '1.56', '6.0', '0.8', '2025-03-28', 'Pass', 'Pass', 1, NULL, '2025-03-08 00:59:08', '2025-03-08 00:59:08'),
(2, '', '1011', 'jfejkfnej', '@ibfief', 'HFIHEF-DEFE-26', 'FJM', '4846', 'India', '2025-03-08', '26.5', '25.2', 'FEUFUEW', 'EBFEBF', 'No', 'No', 'Good', 'Good', '35.2', '2ND', '35.2', '3.5', '45.0', '45.0', '1.56', '6.0', '0.8', '2025-03-28', 'Pass', 'Pass', 1, NULL, '2025-03-08 00:59:36', '2025-03-08 00:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('gBzWlN8hL0NTmHNXzCBAvsk4DOOcUoSThvpm5pkP', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicHVKS3dvSW5tcGdLa3ZwOUprOE1zcWpQbmQwZ2ZORUNXY1NKMkVLTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTc6Imh0dHA6Ly9sb2NhbGhvc3QvTWVnaG5hL21vZGVyYXRvci9Nb2RlcmF0b3Itdmlldy1SZXBvcnQvMiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1741423472);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_role` varchar(255) NOT NULL DEFAULT 'client',
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `user_role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md.Moshin Khan', '@moshin13', 'admin', 'moshinkhan1303@gmail.com', '2025-03-06 09:31:59', '$2y$12$TsUnEQ78cXATEcTB.HEueu9RqVfgRvrhkq2RqNg5u7BJjAc2b8slS', 'MLtpU8bIjOI3dnoWST4kc7bv2YdHaiCymuMErshLxhkiCHS1ry16ntLgqWGl', '2025-03-06 09:31:59', '2025-03-06 09:31:59'),
(2, 'Al Amin', '@alamin', 'moderator', 'meghna.retesting.cng@gmail.com', '2025-03-06 09:32:00', '$2y$12$swnmwmosuu3BgrAeHtcPCuYeEm33w77xW/k0sFrMG7XBjOeZuy4dG', 'TMjFyuNwPVD1QVSDjCCrzqA0b2XNWR7ti5DMKlq3sybcGL2obHGU0vjTXNS3', '2025-03-06 09:32:00', '2025-03-06 09:32:00'),
(6, 'Users', '@users_725', 'client', 'user@gmail.com', NULL, '$2y$12$6yAbgRQtHfqazKZK1zKeQ.nB/BaEPUUF5pkZaTuzT8cqlo2WVwYAi', NULL, '2025-03-06 22:04:32', '2025-03-06 22:04:32'),
(13, 'Jeshan', '@jeshan_426', 'client', NULL, NULL, '$2y$12$VLwjRosmCMe7Z58Xqcozkuit/lU0MjiAEV9A4KeQ.1TFNxPV6cEIe', NULL, '2025-03-07 21:45:57', '2025-03-07 21:45:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cylinder`
--
ALTER TABLE `cylinder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `origin_table`
--
ALTER TABLE `origin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `report_table`
--
ALTER TABLE `report_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cylinder`
--
ALTER TABLE `cylinder`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `origin_table`
--
ALTER TABLE `origin_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report_table`
--
ALTER TABLE `report_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
