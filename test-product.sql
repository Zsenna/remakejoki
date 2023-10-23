-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 12:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test-product`
--

-- --------------------------------------------------------

--
-- Table structure for table `boxproduct`
--

CREATE TABLE `boxproduct` (
  `boxproduct_id` bigint(20) UNSIGNED NOT NULL,
  `itemImg` varchar(100) NOT NULL,
  `itemText` varchar(100) NOT NULL,
  `itemDesc` varchar(10000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boxproduct`
--

INSERT INTO `boxproduct` (`boxproduct_id`, `itemImg`, `itemText`, `itemDesc`, `created_at`, `updated_at`) VALUES
(2, 'http://127.0.0.1:8000/image/1697704313.png', 'Wire', 'LOREM IPSUM', NULL, NULL),
(3, 'http://127.0.0.1:8000/image/1697704340.png', 'Device', 'LOREM IPSUM', NULL, NULL);

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
-- Table structure for table `mainbox`
--

CREATE TABLE `mainbox` (
  `mainbox_id` bigint(20) UNSIGNED NOT NULL,
  `itemImg` varchar(100) NOT NULL,
  `itemText` varchar(100) NOT NULL,
  `itemDesc` varchar(10000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `itemTo` varchar(100) NOT NULL,
  `compt` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mainbox`
--

INSERT INTO `mainbox` (`mainbox_id`, `itemImg`, `itemText`, `itemDesc`, `created_at`, `updated_at`, `itemTo`, `compt`) VALUES
(2, '', 'LOREM IPSUM', 'Lorem Ipsum', NULL, NULL, 'training', ''),
(4, '', 'LOREM IPSUM', 'Lorem Ipsum', NULL, NULL, 'comprofile', 'Lorem Ipsum'),
(5, '', 'LOREM IPSUM', 'Lorem Ipsum', NULL, NULL, 'mainp', ''),
(6, '', 'LOREM IPSUM', 'Lorem Ipsum', NULL, NULL, 'prod', ''),
(7, '', 'LOREM IPSUM', 'Lorem Ipsum', NULL, NULL, 'highl', '');

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
(5, '2023_10_19_080024_boxproduct', 1),
(6, '2023_10_19_081144_create_boxproduct_table', 2),
(7, '2023_10_19_082904_create_ourproduct_table', 3),
(8, '2023_10_19_083704_create_mainbox_table', 4),
(9, '2023_10_19_095312_create_trainingbox_table', 5),
(10, '2023_10_19_100657_add_item_to_to_mainbox_table', 6),
(11, '2023_10_19_161049_add_compt_to_mainbox_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `ourproduct`
--

CREATE TABLE `ourproduct` (
  `ourproduct_id` bigint(20) UNSIGNED NOT NULL,
  `itemImg` varchar(100) NOT NULL,
  `itemText` varchar(100) NOT NULL,
  `itemDesc` varchar(10000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourproduct`
--

INSERT INTO `ourproduct` (`ourproduct_id`, `itemImg`, `itemText`, `itemDesc`, `created_at`, `updated_at`) VALUES
(1, '', 'robot', 'Lorem Ipsum', NULL, NULL),
(2, '', 'agv', 'Lorem Ipsum', NULL, NULL),
(3, '', 'plc', 'Lorem Ipsum', NULL, NULL),
(4, '', 'nplc', 'Lorem Ipsum', NULL, NULL);

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
-- Table structure for table `trainingbox`
--

CREATE TABLE `trainingbox` (
  `trainingbox_id` bigint(20) UNSIGNED NOT NULL,
  `itemImg` varchar(100) NOT NULL,
  `itemText` varchar(100) NOT NULL,
  `itemDesc` varchar(10000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boxproduct`
--
ALTER TABLE `boxproduct`
  ADD PRIMARY KEY (`boxproduct_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mainbox`
--
ALTER TABLE `mainbox`
  ADD PRIMARY KEY (`mainbox_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourproduct`
--
ALTER TABLE `ourproduct`
  ADD PRIMARY KEY (`ourproduct_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `trainingbox`
--
ALTER TABLE `trainingbox`
  ADD PRIMARY KEY (`trainingbox_id`);

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
-- AUTO_INCREMENT for table `boxproduct`
--
ALTER TABLE `boxproduct`
  MODIFY `boxproduct_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mainbox`
--
ALTER TABLE `mainbox`
  MODIFY `mainbox_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ourproduct`
--
ALTER TABLE `ourproduct`
  MODIFY `ourproduct_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainingbox`
--
ALTER TABLE `trainingbox`
  MODIFY `trainingbox_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
