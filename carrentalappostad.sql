-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2024 at 05:02 PM
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
-- Database: `carrentalappostad`
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
('2a139b513cb7887d0db7ceccd69df947', 'i:1;', 1727535658),
('2a139b513cb7887d0db7ceccd69df947:timer', 'i:1727535658;', 1727535658),
('d0ed97f4092f906ea66efe376702c37d', 'i:1;', 1727535636),
('d0ed97f4092f906ea66efe376702c37d:timer', 'i:1727535636;', 1727535636);

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
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `daily_rent_price` decimal(8,2) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `brand`, `model`, `year`, `car_type`, `daily_rent_price`, `availability`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Model S', 'Tesla', 'S', 2022, 'Sedan', 120.50, 1, 'uploads/1727095833_tesla_model_s.jpeg', NULL, '2024-09-28 09:00:19'),
(3, 'Corolla', 'Toyota', 'Corolla XLE', 2021, 'Sedan', 50.00, 0, 'uploads/1727095943_toyota_corolla_xle.jpg', NULL, NULL),
(4, 'Mustang GT', 'Ford', 'Mustang GT', 2022, 'Sports', 150.00, 1, 'uploads/1727096086_ford_mustang_gt.jpeg', NULL, NULL),
(5, 'Accord', 'Honda', 'Accord LX', 2022, 'Sedan', 60.00, 0, NULL, NULL, NULL),
(6, 'Camry', 'Toyota', 'Camry SE', 2021, 'Sedan', 55.00, 1, 'uploads/1727096335_toyota_camry_se.jpeg', NULL, NULL),
(7, 'X5', 'BMW', 'X5 2021', 2021, 'SUV', 110.00, 1, 'uploads/1727096416_bmw_x5.jpg', NULL, NULL),
(8, 'A6', 'Audi', 'A6 Quattro', 2020, 'Sedan', 85.00, 0, 'uploads/1727096504_audi_a6_quattro.jpeg', NULL, NULL),
(9, 'Explorer', 'Ford', 'Explorer XLT', 2022, 'SUV', 95.00, 1, 'uploads/1727098126_ford_explorer_xlt.jpg', NULL, NULL),
(10, 'Altima', 'Nissan', 'Altima S', 2021, 'Sedan', 48.00, 0, 'uploads/1727098047_nissan_altima_s.jpg', NULL, NULL),
(11, 'Model 3', 'Tesla', 'Model 3', 2023, 'Sedan', 100.00, 1, 'uploads/1727097963_tesla_model_3.jpg', NULL, NULL),
(12, 'Range Rover', 'Land Rover', 'Sport 2022', 2022, 'SUV', 200.00, 1, 'uploads/1727098204_range_rover_sport.jpg', NULL, NULL),
(13, 'Wrangler', 'Jeep', 'Wrangler Unlimited', 2022, 'SUV', 130.00, 1, 'uploads/1727098285_jeep_wrangler_unlimited.jpg', NULL, NULL),
(14, 'Rio', 'Kia', 'Rio LX', 2020, 'Hatchback', 35.00, 0, 'uploads/1727098380_kia_rio_lx.jpg', NULL, NULL),
(15, 'Fusion', 'Ford', 'Fusion Hybrid', 2021, 'Sedan', 65.00, 1, 'uploads/1727098447_ford_fusion_hybrid.jpg', NULL, NULL);

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
(4, '2024_09_18_061458_create_cars_table', 1),
(5, '2024_09_18_091409_create_rentals_table', 1),
(6, '2024_09_19_104914_add_two_factor_columns_to_users_table', 1);

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
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_cost` decimal(8,2) NOT NULL,
  `status` enum('Ongoing','Completed','Canceled') NOT NULL DEFAULT 'Ongoing',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `user_id`, `car_id`, `start_date`, `end_date`, `total_cost`, `status`, `created_at`, `updated_at`) VALUES
(1, 17, 5, '2024-09-10', '2024-09-20', 202.00, 'Ongoing', '2024-09-27 03:14:57', '2024-09-27 03:15:07'),
(2, 17, 5, '2024-09-21', '2024-09-27', 60.00, 'Canceled', '2024-09-27 03:49:47', '2024-09-27 03:59:56'),
(3, 17, 5, '2024-09-21', '2024-09-25', 60.00, 'Completed', '2024-09-27 04:00:10', '2024-09-28 05:41:38'),
(21, 17, 1, '2024-09-06', '2024-09-06', 120.50, 'Ongoing', '2024-09-28 06:35:22', '2024-09-28 06:35:22');

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
('HXvIPMTjshijJsPnPVUtBIqxlvBOtpEN0zzLU8cF', 16, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiY3NPU0FOTDNmMjZqdTdaeExJRDlmdDVrdTJ5RFRMZFRWRm5PNnJQcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozOToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL2NhcnMvMS9lZGl0Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTY7fQ==', 1727525929),
('jFIEHp6dhPcgMLt8o2VmQPBbqpmQykhC1QlSIDEX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiREVTdDE1VmhEWFo5Vm9GZ0tLR2t5Q2h3cFNzWnpPaGFsQW92N2M3biI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9fQ==', 1727535708),
('unbCfaDw2y9TpuPmA92t4Ho5lFehvXa1KUP8bY0N', 17, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiY1V5WVhEcWhoRjk3MHF3QVFPY0ZFZGdvRndDdW1tRmx0WlhldzF6MyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0ODoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2N1c3RvbWVyL2N1cnJlbnRCb29raW5nLzE3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTc7fQ==', 1727522975),
('YsPdByL4yqZFurPo982fgThH1bRQwkpDFeZGouty', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVFZLWVF6S3U1c3luVDZEeW9JNENXcVhERGFEQkRXVzI0Y05CeXF6VCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9fQ==', 1727527074);

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `role` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `address`, `phone_number`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Morgan Lockman', 'xquigley@example.org', '2024-09-26 22:52:26', '$2y$12$qObzcWwxIl9a28fj6MqS4eN.FAi/kVyBqI5W8D4Dp6coh5YJPfSDG', NULL, NULL, NULL, 'Oran Village, Raquelton', '01011298467', 'customer', 'JHfKGkhsWF', '2024-09-26 22:52:26', '2024-09-26 22:52:26'),
(4, 'Albina Simonis', 'sandra73@example.com', '2024-09-26 22:52:26', '$2y$12$qObzcWwxIl9a28fj6MqS4eN.FAi/kVyBqI5W8D4Dp6coh5YJPfSDG', NULL, NULL, NULL, 'Janiya Locks, East Florenciochester', '01646067361', 'customer', 'QMpXW2FjIj', '2024-09-26 22:52:26', '2024-09-26 22:52:26'),
(5, 'Orpha Berge', 'albertha.metz@example.org', '2024-09-26 22:52:26', '$2y$12$qObzcWwxIl9a28fj6MqS4eN.FAi/kVyBqI5W8D4Dp6coh5YJPfSDG', NULL, NULL, NULL, 'Giovani Greens, Ziemefort', '01800457738', 'customer', 'FG0ZdyYtJS', '2024-09-26 22:52:26', '2024-09-26 22:52:26'),
(6, 'Geraldine Ledner IV', 'anastacio.treutel@example.net', '2024-09-26 22:52:26', '$2y$12$qObzcWwxIl9a28fj6MqS4eN.FAi/kVyBqI5W8D4Dp6coh5YJPfSDG', NULL, NULL, NULL, 'Raynor Views, Lake Lorenzoton', '01233591201', 'customer', '5xx9DRqve8', '2024-09-26 22:52:26', '2024-09-26 22:52:26'),
(7, 'Hal Kub', 'delilah67@example.org', '2024-09-26 22:52:26', '$2y$12$qObzcWwxIl9a28fj6MqS4eN.FAi/kVyBqI5W8D4Dp6coh5YJPfSDG', NULL, NULL, NULL, 'Jenkins Islands, East Florianville', '01947283945', 'customer', 'Rlo29CNdo4', '2024-09-26 22:52:26', '2024-09-26 22:52:26'),
(8, 'Prof. Izaiah Crona', 'ally11@example.net', '2024-09-26 22:52:26', '$2y$12$qObzcWwxIl9a28fj6MqS4eN.FAi/kVyBqI5W8D4Dp6coh5YJPfSDG', NULL, NULL, NULL, 'Leonora Pike, Delilahland', '01757720419', 'customer', 'HuGfcKpzSF', '2024-09-26 22:52:26', '2024-09-26 22:52:26'),
(9, 'Miss Jewell Heidenreich', 'twehner@example.com', '2024-09-26 22:52:26', '$2y$12$qObzcWwxIl9a28fj6MqS4eN.FAi/kVyBqI5W8D4Dp6coh5YJPfSDG', NULL, NULL, NULL, 'Brady Drive, West Lavonne', '01498190588', 'customer', 'zvuDMEuHNX', '2024-09-26 22:52:26', '2024-09-26 22:52:26'),
(10, 'Ms. Jude Hudson Jr.', 'treutel.bridget@example.org', '2024-09-26 22:52:26', '$2y$12$qObzcWwxIl9a28fj6MqS4eN.FAi/kVyBqI5W8D4Dp6coh5YJPfSDG', NULL, NULL, NULL, 'Vallie Mission, North Kiraview', '01494743979', 'customer', 'cOvdY9pzZv', '2024-09-26 22:52:26', '2024-09-26 22:52:26'),
(11, 'Dr. Albin Pouros', 'xkutch@example.net', '2024-09-26 22:52:26', '$2y$12$qObzcWwxIl9a28fj6MqS4eN.FAi/kVyBqI5W8D4Dp6coh5YJPfSDG', NULL, NULL, NULL, 'Boyle Rapid, Kenyattaport', '01791912167', 'customer', '26seBYzca5', '2024-09-26 22:52:26', '2024-09-26 22:52:26'),
(12, 'Susan Weimann', 'chloe60@example.com', '2024-09-26 22:52:26', '$2y$12$qObzcWwxIl9a28fj6MqS4eN.FAi/kVyBqI5W8D4Dp6coh5YJPfSDG', NULL, NULL, NULL, 'Adelia Stream, New Margareteport', '01992687726', 'customer', 'Y5ATj8zkgr', '2024-09-26 22:52:26', '2024-09-26 22:52:26'),
(13, 'Lilly Klocko', 'gleichner.connor@example.net', '2024-09-26 22:52:26', '$2y$12$qObzcWwxIl9a28fj6MqS4eN.FAi/kVyBqI5W8D4Dp6coh5YJPfSDG', NULL, NULL, NULL, 'Runolfsdottir Road, East Nikostad', '01071892884', 'customer', 'yJUbHdziYR', '2024-09-26 22:52:26', '2024-09-26 22:52:26'),
(14, 'Damon Powlowski Sr.', 'xklocko@example.net', '2024-09-26 22:52:26', '$2y$12$qObzcWwxIl9a28fj6MqS4eN.FAi/kVyBqI5W8D4Dp6coh5YJPfSDG', NULL, NULL, NULL, 'Ali Squares, Port Emmachester', '01751144867', 'customer', '2lgzcvfDtK', '2024-09-26 22:52:26', '2024-09-26 22:52:26'),
(15, 'Miss Kaci Cummings', 'xmraz@example.com', '2024-09-26 22:52:26', '$2y$12$qObzcWwxIl9a28fj6MqS4eN.FAi/kVyBqI5W8D4Dp6coh5YJPfSDG', NULL, NULL, NULL, 'Prudence Crossing, Kennedyview', '01857761825', 'customer', 'QE0Q9hwbVm', '2024-09-26 22:52:26', '2024-09-26 22:52:26'),
(16, 'Mr Admin', 'soft.rifat@gmail.com', '2024-09-26 22:52:26', '$2y$12$qObzcWwxIl9a28fj6MqS4eN.FAi/kVyBqI5W8D4Dp6coh5YJPfSDG', NULL, NULL, NULL, 'Kamren Plains, South Salma', '01080889688', 'admin', 'k3rO1dlUVbXlgrsMai8t6sYIyoqrcBd0uNgocFjhMz6z63wBihreo9bBOCYS', '2024-09-26 22:52:26', '2024-09-26 22:52:26'),
(17, 'rifat', 'rifat266@gmail.com', NULL, '$2y$12$uBgBHsV0zXb8460g70S7MexPGWZJGKFAjEyYSSe3NzOh7zcR8pzXu', NULL, NULL, NULL, '63 Milton Boulevard', '01680597355', 'customer', NULL, '2024-09-27 03:11:36', '2024-09-27 03:11:36');

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
-- Indexes for table `cars`
--
ALTER TABLE `cars`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rentals_user_id_foreign` (`user_id`),
  ADD KEY `rentals_car_id_foreign` (`car_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `rentals_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`),
  ADD CONSTRAINT `rentals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
