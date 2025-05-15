-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2025 at 09:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kripto`
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
(4, '2025_04_24_193606_add_balance_to_users_table', 2),
(5, '2025_04_24_194809_add_rude_to_users_table', 3),
(6, '2025_04_24_195546_remove_rude_column_from_users_table', 3),
(7, '2025_04_30_212758_remove_zlato_from_users_table', 4),
(8, '2025_04_30_213203_remove_dijamant_from_users_table', 5),
(9, '2025_04_30_213304_add_rude_to_users_table', 6),
(10, '2025_04_30_214315_add_rude_to_users_table', 7),
(11, '2025_05_04_123454_create_rude_table', 8),
(12, '2025_05_04_133134_add_simbol_to_rude', 9),
(13, '2025_05_04_135940_delete_simbol_from_rude', 10),
(14, '2025_05_04_142001_create_rude_user_table', 11),
(15, '2025_05_04_193621_create_proizvodi_table', 12),
(16, '2025_05_04_200018_add_opis_to_proizvodi', 13),
(17, '2025_05_04_205703_add_kolicina_to_proizvodi', 14),
(18, '2025_05_05_190410_remove_rude_from_users_table', 15),
(19, '2025_05_12_194019_create_vault_table', 16);

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
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ime` varchar(255) NOT NULL,
  `cijena` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `opis` varchar(255) DEFAULT NULL,
  `kolicina` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`id`, `user_id`, `ime`, `cijena`, `created_at`, `updated_at`, `status`, `opis`, `kolicina`) VALUES
(1, 1, 'Gold', 222, '2025-05-04 18:59:29', '2025-05-04 18:59:29', 1, 'sdsdds', 3.00),
(2, 1, 'Gold', 24242, '2025-05-04 19:01:16', '2025-05-04 19:01:16', 1, 'dfdfdf', 1.00),
(3, 1, 'Gold', 1141414, '2025-05-04 19:02:41', '2025-05-04 19:02:41', 1, 'sdssd', 22.00),
(5, 1, 'Uranium', 222, '2025-05-05 16:36:26', '2025-05-05 16:36:26', 1, '44sd', 2.00),
(6, 1, 'Iron', 5555, '2025-05-05 16:39:28', '2025-05-05 16:39:28', 1, 'sdsddsds', 2.00),
(7, 2, 'Rhodium', 535345, '2025-05-05 17:10:01', '2025-05-05 17:10:01', 1, 'dobar', 2.00),
(9, 1, 'Uranium', 34, '2025-05-12 15:19:27', '2025-05-12 15:19:27', 1, 'fdfdf', 1.00),
(27, 1, 'Coal', 555, '2025-05-14 18:52:18', '2025-05-14 18:52:18', 1, 'hghghgh', 4.00);

-- --------------------------------------------------------

--
-- Table structure for table `rude`
--

CREATE TABLE `rude` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ime` varchar(255) NOT NULL,
  `vrijednost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rude`
--

INSERT INTO `rude` (`id`, `created_at`, `updated_at`, `ime`, `vrijednost`) VALUES
(24, NULL, NULL, 'Painite', 1000000),
(25, NULL, NULL, 'Ruby', 500000),
(26, NULL, NULL, 'Black Opal', 200000),
(27, NULL, NULL, 'Blue Garnet', 100000),
(28, NULL, NULL, 'Diamond', 70000),
(29, NULL, NULL, 'Radium', 30000),
(30, NULL, NULL, 'Plutonium', 15000),
(31, NULL, NULL, 'Osmium', 8000),
(32, NULL, NULL, 'Rhodium', 3000),
(33, NULL, NULL, 'Iridium', 1600),
(34, NULL, NULL, 'Gold', 800),
(35, NULL, NULL, 'Platinum', 400),
(36, NULL, NULL, 'Uranium', 200),
(37, NULL, NULL, 'Iron', 100),
(38, NULL, NULL, 'Coal', 50);

-- --------------------------------------------------------

--
-- Table structure for table `rude_user`
--

CREATE TABLE `rude_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rude_id` bigint(20) UNSIGNED NOT NULL,
  `kolicina` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rude_user`
--

INSERT INTO `rude_user` (`id`, `user_id`, `rude_id`, `kolicina`, `created_at`, `updated_at`) VALUES
(14, 1, 38, 79.00, NULL, '2025-05-14 20:10:20'),
(15, 3, 38, 4.00, NULL, '2025-05-12 16:55:45');

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
('DJXQgyNnD7PXfajJKm1NO6pwHZtTCusqaDnsUrVc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTDZWcE1id2lYZ1pLZ05NYWx6bmlTcHZuMVpzaDQ3eGh0WDVmV1h6bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1747292058),
('s4lCtgZjoz5tAELmrX4wivR2edKfYadJtqtFe9KW', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibmxoTGJWeFllUWJabXpiT3FNOTVmbXVuYngzMzBXUHJ3VE83c1d3MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9idXlkZXBvc2l0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3Nob3AiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1747260641);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `balance` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `balance`) VALUES
(1, 'Ajdin', 'ajdinsusic@gmail.com', NULL, '$2y$12$gBVySHhKobSEF7Gvv2joAu2P/hkqA.JucapJRu3m.PhbfTnyv9d6O', NULL, '2025-04-20 15:25:41', '2025-05-14 20:10:20', 860),
(2, 'Ses', 'ses123@gmail.com', NULL, '$2y$12$Thrb3qXJD6yJViZtDAVvXOh3ipbxJv1IjeW3C3ayXWhyokrjm1puO', NULL, '2025-05-05 17:05:38', '2025-05-05 17:10:01', 0),
(3, 'Adi', 'adi123@gmail.com', NULL, '$2y$12$NEHTa5MdXvJz.PfZIEPAb.huL/pqLTlwFdP4/FQRRBssDs8q.etUG', NULL, '2025-05-12 16:50:29', '2025-05-12 16:56:05', 5535);

-- --------------------------------------------------------

--
-- Table structure for table `vault`
--

CREATE TABLE `vault` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ime` varchar(255) NOT NULL,
  `kolicina` varchar(255) NOT NULL,
  `cijena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vault`
--

INSERT INTO `vault` (`id`, `created_at`, `updated_at`, `ime`, `kolicina`, `cijena`) VALUES
(1, NULL, '2025-05-14 19:46:35', 'Coal Mine', '900', '150');

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proizvodi_user_id_foreign` (`user_id`);

--
-- Indexes for table `rude`
--
ALTER TABLE `rude`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rude_user`
--
ALTER TABLE `rude_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rude_user_user_id_foreign` (`user_id`),
  ADD KEY `rude_user_rude_id_foreign` (`rude_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vault`
--
ALTER TABLE `vault`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `rude`
--
ALTER TABLE `rude`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `rude_user`
--
ALTER TABLE `rude_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vault`
--
ALTER TABLE `vault`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD CONSTRAINT `proizvodi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rude_user`
--
ALTER TABLE `rude_user`
  ADD CONSTRAINT `rude_user_rude_id_foreign` FOREIGN KEY (`rude_id`) REFERENCES `rude` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rude_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
