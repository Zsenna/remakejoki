-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 07:29 AM
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
  `itemImg` varchar(255) DEFAULT NULL,
  `itemText` varchar(100) NOT NULL,
  `itemDesc` varchar(10000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `itemTo` varchar(100) NOT NULL,
  `compt` varchar(255) DEFAULT NULL,
  `headImg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mainbox`
--

INSERT INTO `mainbox` (`mainbox_id`, `itemImg`, `itemText`, `itemDesc`, `created_at`, `updated_at`, `itemTo`, `compt`, `headImg`) VALUES
(20, 'http://127.0.0.1:8000/image2/1699148879.png', 'test', '<p>bismillah bisa</p>', NULL, NULL, 'mainp', NULL, ''),
(24, 'http://127.0.0.1:8000/image2/1699776306.png', 'LOREM IPSUM', '<p>Lorem Ipsum</p>', NULL, NULL, 'highl', NULL, 'http://127.0.0.1:8000/headimage/1699776306.png'),
(25, 'http://127.0.0.1:8000/image2/1699776519.png', 'LOREM IPSUM', '<p>Lorem Ipsum</p>', NULL, NULL, 'mainp', NULL, 'http://127.0.0.1:8000/headimage/1699776519.png'),
(26, 'http://127.0.0.1:8000/image2/1699776747.png', 'LOREM IPSUM', '<p>Lorem Ipsum</p>', NULL, NULL, 'comprofile', NULL, 'http://127.0.0.1:8000/headimage/1699776747.png'),
(27, 'http://127.0.0.1:8000/image2/1699777152.png', 'LOREM IPSUM', '<p>Lorem Ipsum</p>', NULL, NULL, 'trackrecord', NULL, 'http://127.0.0.1:8000/headimage/1699777152.png'),
(28, 'http://127.0.0.1:8000/image2/1699777536.png', 'LOREM IPSUM', '<p>Lorem Ipsum</p>', NULL, NULL, 'competition', NULL, 'http://127.0.0.1:8000/headimage/1699777536.png'),
(29, 'http://127.0.0.1:8000/image2/1699777724.png', 'LOREM IPSUM', '<p>Lorem Ipsum</p>', NULL, NULL, 'workshop', NULL, 'http://127.0.0.1:8000/headimage/1699777724.png'),
(30, 'http://127.0.0.1:8000/image2/1699778061.png', 'LOREM IPSUM', '<p>Lorem Ipsum</p>', NULL, NULL, 'training', NULL, 'http://127.0.0.1:8000/headimage/1699778061.png'),
(32, 'http://127.0.0.1:8000/image2/1699931336.png', 'test1', '<p>test1</p>', NULL, NULL, 'highl', NULL, ''),
(33, 'http://127.0.0.1:8000/image2/1699931351.png', 'test2', '<p>test2</p>', NULL, NULL, 'highl', NULL, ''),
(34, 'http://127.0.0.1:8000/image2/1699931366.png', 'test3', '<p>test3</p>', NULL, NULL, 'highl', NULL, ''),
(35, 'http://127.0.0.1:8000/image2/1699931402.png', 'test4', '<p>test4</p>', NULL, NULL, 'highl', NULL, ''),
(36, 'http://127.0.0.1:8000/image2/1699931424.png', 'test5', '<p>test5</p>', NULL, NULL, 'highl', NULL, '');

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
(11, '2023_10_19_161049_add_compt_to_mainbox_table', 7),
(12, '2023_10_27_155031_modify_mainbox_itemimg_nullable', 8),
(13, '2023_11_12_073032_add_head_img_to_mainbox_table', 9),
(14, '2023_11_12_100905_add_head_img_to_boxproduct_table', 10),
(15, '2023_11_12_101729_add_item_to_to_boxproduct_table', 11),
(16, '2023_11_12_121044_create_robot_table', 12),
(17, '2023_11_12_121057_create_agv_table', 12),
(18, '2023_11_12_121101_create_plc_table', 12),
(19, '2023_11_12_121106_create_nplc_table', 12),
(20, '2023_11_12_121303_create_spesifikasi_table', 12),
(21, '2023_11_12_121851_create_product_table', 13),
(22, '2023_11_12_122208_create_product_table', 14);

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `itemImg` varchar(100) NOT NULL,
  `itemText` varchar(100) NOT NULL,
  `itemDesc` varchar(10000) NOT NULL,
  `itemSpec` varchar(1000) NOT NULL,
  `itemTo` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `itemImg`, `itemText`, `itemDesc`, `itemSpec`, `itemTo`, `created_at`, `updated_at`) VALUES
(8, 'http://127.0.0.1:8000/image/1699933461.png', 'test1', '<p>test1</p>', '<p>test1</p>', 'robot', NULL, NULL),
(9, 'http://127.0.0.1:8000/image/1699933481.png', 'test1', '<p>test1</p>', '<p>test1</p>', 'AGV', NULL, NULL),
(10, 'http://127.0.0.1:8000/image/1699933491.png', 'test1', '<p>test1</p>', '<p>test1</p>', 'plc', NULL, NULL),
(11, 'http://127.0.0.1:8000/image/1699933499.png', 'test1', '<p>test1</p>', '<p>test1</p>', 'nplc', NULL, NULL),
(12, 'http://127.0.0.1:8000/image/1699933511.png', 'test2', '<p>test2</p>', '<p>test2</p>', 'robot', NULL, NULL),
(13, 'http://127.0.0.1:8000/image/1699933547.png', 'test2', '<p>test2</p>', '<p>test2</p>', 'AGV', NULL, NULL),
(14, 'http://127.0.0.1:8000/image/1699933555.png', 'test2', '<p>test2</p>', '<p>test2</p>', 'plc', NULL, NULL),
(15, 'http://127.0.0.1:8000/image/1699933562.png', 'test2', '<p>test2</p>', '<p>test2</p>', 'nplc', NULL, NULL),
(16, 'http://127.0.0.1:8000/image/1699933575.png', 'test3', '<p>test3</p>', '<p>test3</p>', 'robot', NULL, NULL),
(17, 'http://127.0.0.1:8000/image/1699933584.png', 'test3', '<p>test3</p>', '<p>test3</p>', 'AGV', NULL, NULL),
(18, 'http://127.0.0.1:8000/image/1699933592.png', 'test3', '<p>test3</p>', '<p>test3</p>', 'plc', NULL, NULL),
(19, 'http://127.0.0.1:8000/image/1699933634.png', 'test3', '<p>test3</p>', '<p>test3</p>', 'nplc', NULL, NULL),
(20, 'http://127.0.0.1:8000/image/1699933649.png', 'test4', '<p>test4</p>', '<p>test4</p>', 'robot', NULL, NULL),
(21, 'http://127.0.0.1:8000/image/1699933656.png', 'test4', '<p>test4</p>', '<p>test4</p>', 'AGV', NULL, NULL),
(22, 'http://127.0.0.1:8000/image/1699933664.png', 'test4', '<p>test4</p>', '<p>test4</p>', 'plc', NULL, NULL),
(23, 'http://127.0.0.1:8000/image/1699933671.png', 'test4', '<p>test4</p>', '<p>test4</p>', 'nplc', NULL, NULL),
(24, 'http://127.0.0.1:8000/image/1699933686.png', 'test5', '<p>test5</p>', '<p>test5</p>', 'robot', NULL, NULL),
(25, 'http://127.0.0.1:8000/image/1699933694.png', 'test5', '<p>test5</p>', '<p>test5</p>', 'AGV', NULL, NULL),
(26, 'http://127.0.0.1:8000/image/1699933703.png', 'test5', '<p>test5</p>', '<p>test5</p>', 'plc', NULL, NULL),
(27, 'http://127.0.0.1:8000/image/1699933713.png', 'test5', '<p>test5</p>', '<p>test5</p>', 'nplc', NULL, NULL),
(28, 'http://127.0.0.1:8000/image/1699933758.png', 'test6', '<p>test6</p>', '<p>test6</p>', 'robot', NULL, NULL),
(29, 'http://127.0.0.1:8000/image/1699933775.png', 'test6', '<p>test6</p>', '<p>test6</p>', 'AGV', NULL, NULL),
(30, 'http://127.0.0.1:8000/image/1699933781.png', 'test6', '<p>test6</p>', '<p>test6</p>', 'nplc', NULL, NULL),
(31, 'http://127.0.0.1:8000/image/1699933788.png', 'test6', '<p>test6</p>', '<p>test6</p>', 'plc', NULL, NULL);

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mainbox`
--
ALTER TABLE `mainbox`
  MODIFY `mainbox_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
