-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 02:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `herbnest`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `subject` varchar(191) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(24, 'ahmed', 'ahmed@gmail.com', '01026868277', 'contact me', 'ahmed salah', '2024-06-26 16:47:19', '2024-06-26 16:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `file_name` varchar(191) NOT NULL,
  `mime_type` varchar(191) DEFAULT NULL,
  `disk` varchar(191) NOT NULL,
  `conversions_disk` varchar(191) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Product', 1, '4b230fa3-e038-48ec-868f-755c8604caf2', 'main_image', 'images (4)', 'images-(4).jpeg', 'image/jpeg', 'media', 'media', 16025, '[]', '[]', '[]', '[]', 1, '2024-06-24 13:52:46', '2024-06-24 13:52:46'),
(2, 'App\\Models\\Product', 1, '56921659-5b32-4a2b-8905-b87db7aa0b18', 'multi_image', 'images (4)', 'images-(4).jpeg', 'image/jpeg', 'media', 'media', 16025, '[]', '[]', '[]', '[]', 2, '2024-06-24 13:52:46', '2024-06-24 13:52:46'),
(3, 'App\\Models\\Product', 1, '231f8be3-b658-468c-b286-8eaf43744c93', 'multi_image', 'images (3)', 'images-(3).jpeg', 'image/jpeg', 'media', 'media', 14633, '[]', '[]', '[]', '[]', 3, '2024-06-24 13:52:46', '2024-06-24 13:52:46'),
(4, 'App\\Models\\Product', 1, 'bc637b65-3719-488d-ad41-5e0c6ef8fb4f', 'multi_image', 'images (2)', 'images-(2).jpeg', 'image/jpeg', 'media', 'media', 12789, '[]', '[]', '[]', '[]', 4, '2024-06-24 13:52:46', '2024-06-24 13:52:46'),
(5, 'App\\Models\\Product', 2, '2b91d7b9-89be-42ae-ab30-1ac406cb7f87', 'main_image', 'images (3)', 'images-(3).jpeg', 'image/jpeg', 'media', 'media', 14633, '[]', '[]', '[]', '[]', 1, '2024-06-24 13:53:25', '2024-06-24 13:53:25'),
(6, 'App\\Models\\Product', 2, '0af69480-6ebf-467b-b52b-607456523472', 'multi_image', 'images (3)', 'images-(3).jpeg', 'image/jpeg', 'media', 'media', 14633, '[]', '[]', '[]', '[]', 2, '2024-06-24 13:53:25', '2024-06-24 13:53:25'),
(7, 'App\\Models\\Product', 2, '868ecc3a-19f2-4b9c-8706-e9db1a9c4963', 'multi_image', 'images (2)', 'images-(2).jpeg', 'image/jpeg', 'media', 'media', 12789, '[]', '[]', '[]', '[]', 3, '2024-06-24 13:53:25', '2024-06-24 13:53:25'),
(8, 'App\\Models\\Product', 2, 'a6ce06f1-eb04-42cc-ac16-bdd9adb6cf1d', 'multi_image', 'images (1)', 'images-(1).jpeg', 'image/jpeg', 'media', 'media', 13766, '[]', '[]', '[]', '[]', 4, '2024-06-24 13:53:25', '2024-06-24 13:53:25'),
(9, 'App\\Models\\Product', 3, 'f57904f1-d609-4ad8-b0b4-0a8b86fa844f', 'main_image', 'images (2)', 'images-(2).jpeg', 'image/jpeg', 'media', 'media', 12789, '[]', '[]', '[]', '[]', 1, '2024-06-24 13:53:56', '2024-06-24 13:53:56'),
(10, 'App\\Models\\Product', 3, '5693453c-fdc6-46a8-973c-bba382320c31', 'multi_image', 'images (2)', 'images-(2).jpeg', 'image/jpeg', 'media', 'media', 12789, '[]', '[]', '[]', '[]', 2, '2024-06-24 13:53:56', '2024-06-24 13:53:56'),
(11, 'App\\Models\\Product', 3, '8e5717a0-731d-4a3b-9f03-bc803b48c8e6', 'multi_image', 'images (1)', 'images-(1).jpeg', 'image/jpeg', 'media', 'media', 13766, '[]', '[]', '[]', '[]', 3, '2024-06-24 13:53:56', '2024-06-24 13:53:56'),
(12, 'App\\Models\\Product', 3, 'c41a938a-c348-4bd7-a938-aca2c98ad1a3', 'multi_image', 'download (2)', 'download-(2).jpeg', 'image/jpeg', 'media', 'media', 13348, '[]', '[]', '[]', '[]', 4, '2024-06-24 13:53:56', '2024-06-24 13:53:56'),
(13, 'App\\Models\\Product', 4, 'a5f256fe-ded0-4ff3-a5f2-6293886547d1', 'main_image', 'images (1)', 'images-(1).jpeg', 'image/jpeg', 'media', 'media', 13766, '[]', '[]', '[]', '[]', 1, '2024-06-24 13:54:48', '2024-06-24 13:54:48'),
(14, 'App\\Models\\Product', 4, '68d1ab24-bb92-4238-8366-847c37e50151', 'multi_image', 'images (1)', 'images-(1).jpeg', 'image/jpeg', 'media', 'media', 13766, '[]', '[]', '[]', '[]', 2, '2024-06-24 13:54:48', '2024-06-24 13:54:48'),
(15, 'App\\Models\\Product', 4, '09687f24-09cb-4616-af52-1f76bec41bfd', 'multi_image', 'download (2)', 'download-(2).jpeg', 'image/jpeg', 'media', 'media', 13348, '[]', '[]', '[]', '[]', 3, '2024-06-24 13:54:48', '2024-06-24 13:54:48'),
(16, 'App\\Models\\Product', 4, '56acbf77-9c94-497e-8ade-1506248bb341', 'multi_image', 'download (1)', 'download-(1).jpeg', 'image/jpeg', 'media', 'media', 7229, '[]', '[]', '[]', '[]', 4, '2024-06-24 13:54:48', '2024-06-24 13:54:48'),
(17, 'App\\Models\\Product', 5, '6b1ab81a-104a-4259-b72d-f0d8580023f6', 'main_image', 'download (1)', 'download-(1).jpeg', 'image/jpeg', 'media', 'media', 7229, '[]', '[]', '[]', '[]', 1, '2024-06-24 13:55:48', '2024-06-24 13:55:48'),
(18, 'App\\Models\\Product', 5, '9f21223c-428a-4a46-9e77-49bd94d8d1e0', 'multi_image', 'images (3)', 'images-(3).jpeg', 'image/jpeg', 'media', 'media', 14633, '[]', '[]', '[]', '[]', 2, '2024-06-24 13:55:48', '2024-06-24 13:55:48'),
(19, 'App\\Models\\Product', 5, 'ab6404f2-619d-468f-a733-663cf9f63883', 'multi_image', 'images (2)', 'images-(2).jpeg', 'image/jpeg', 'media', 'media', 12789, '[]', '[]', '[]', '[]', 3, '2024-06-24 13:55:48', '2024-06-24 13:55:48'),
(20, 'App\\Models\\Product', 5, 'd531177f-20d8-469e-912e-6bf0e6a7c89f', 'multi_image', 'download (1)', 'download-(1).jpeg', 'image/jpeg', 'media', 'media', 7229, '[]', '[]', '[]', '[]', 4, '2024-06-24 13:55:48', '2024-06-24 13:55:48'),
(21, 'App\\Models\\Product', 6, 'd66d1215-46ba-4c87-9460-ff795d55b06d', 'main_image', 'images (1)', 'images-(1).jpeg', 'image/jpeg', 'media', 'media', 13766, '[]', '[]', '[]', '[]', 1, '2024-06-24 13:58:00', '2024-06-24 13:58:00'),
(22, 'App\\Models\\Product', 6, 'e04de3bf-f299-456a-b797-8db698447f6e', 'multi_image', 'images (4)', 'images-(4).jpeg', 'image/jpeg', 'media', 'media', 16025, '[]', '[]', '[]', '[]', 2, '2024-06-24 13:58:00', '2024-06-24 13:58:00'),
(23, 'App\\Models\\Product', 6, 'ea254bdc-4e9f-4263-83f0-815297dfda5a', 'multi_image', 'download (2)', 'download-(2).jpeg', 'image/jpeg', 'media', 'media', 13348, '[]', '[]', '[]', '[]', 3, '2024-06-24 13:58:00', '2024-06-24 13:58:00'),
(24, 'App\\Models\\Product', 6, '761e7f30-45c1-4c99-bd24-bc5920b6fb45', 'multi_image', 'download (1)', 'download-(1).jpeg', 'image/jpeg', 'media', 'media', 7229, '[]', '[]', '[]', '[]', 4, '2024-06-24 13:58:00', '2024-06-24 13:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
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
(5, '2024_06_23_135458_create_products_table', 1),
(6, '2024_06_23_135730_create_product_translations_table', 1),
(7, '2024_06_23_144015_create_media_table', 1),
(8, '2024_06_26_165416_create_contacts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_image` varchar(191) DEFAULT NULL,
  `multi_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `main_image`, `multi_image`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost:8000/media/1/images-(4).jpeg', '[\"http:\\/\\/localhost:8000\\/media\\/2\\/images-(4).jpeg\",\"http:\\/\\/localhost:8000\\/media\\/3\\/images-(3).jpeg\",\"http:\\/\\/localhost:8000\\/media\\/4\\/images-(2).jpeg\"]', '2024-06-24 13:52:45', '2024-06-24 13:52:46'),
(2, 'http://localhost:8000/media/5/images-(3).jpeg', '[\"http:\\/\\/localhost:8000\\/media\\/6\\/images-(3).jpeg\",\"http:\\/\\/localhost:8000\\/media\\/7\\/images-(2).jpeg\",\"http:\\/\\/localhost:8000\\/media\\/8\\/images-(1).jpeg\"]', '2024-06-24 13:53:25', '2024-06-24 13:53:25'),
(3, 'http://localhost:8000/media/9/images-(2).jpeg', '[\"http:\\/\\/localhost:8000\\/media\\/10\\/images-(2).jpeg\",\"http:\\/\\/localhost:8000\\/media\\/11\\/images-(1).jpeg\",\"http:\\/\\/localhost:8000\\/media\\/12\\/download-(2).jpeg\"]', '2024-06-24 13:53:56', '2024-06-24 13:53:56'),
(4, 'http://localhost:8000/media/13/images-(1).jpeg', '[\"http:\\/\\/localhost:8000\\/media\\/14\\/images-(1).jpeg\",\"http:\\/\\/localhost:8000\\/media\\/15\\/download-(2).jpeg\",\"http:\\/\\/localhost:8000\\/media\\/16\\/download-(1).jpeg\"]', '2024-06-24 13:54:48', '2024-06-24 13:54:48'),
(5, 'http://localhost:8000/media/17/download-(1).jpeg', '[\"http:\\/\\/localhost:8000\\/media\\/18\\/images-(3).jpeg\",\"http:\\/\\/localhost:8000\\/media\\/19\\/images-(2).jpeg\",\"http:\\/\\/localhost:8000\\/media\\/20\\/download-(1).jpeg\"]', '2024-06-24 13:55:48', '2024-06-24 13:55:48'),
(6, 'http://localhost:8000/media/21/images-(1).jpeg', '[\"http:\\/\\/localhost:8000\\/media\\/22\\/images-(4).jpeg\",\"http:\\/\\/localhost:8000\\/media\\/23\\/download-(2).jpeg\",\"http:\\/\\/localhost:8000\\/media\\/24\\/download-(1).jpeg\"]', '2024-06-24 13:58:00', '2024-06-24 13:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_translations`
--

INSERT INTO `product_translations` (`id`, `product_id`, `locale`, `name`, `description`) VALUES
(1, 1, 'en', 'product1', 'product1'),
(2, 1, 'ar', 'منتج واحد', 'منتج واحد'),
(3, 2, 'en', 'product2', 'product2'),
(4, 2, 'ar', 'منتج 2', 'منتج 2'),
(5, 3, 'en', 'product3', 'product3'),
(6, 3, 'ar', 'منتج3', 'منتج3'),
(7, 4, 'en', 'product4', 'product4'),
(8, 4, 'ar', 'منتج4', 'منتج4'),
(9, 5, 'en', 'product5', 'product5'),
(10, 5, 'ar', 'منتج5', 'منتج5'),
(11, 6, 'en', 'product6', 'product6'),
(12, 6, 'ar', 'منتج6', 'منتج6');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `role` enum('super','manage','reader') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'super manager', 'supermanager@herbnest.eg', NULL, '$2y$12$z5QIAizI47PkFiAgzyTSbu/2IchCUZZgy8ncgYvi.FVrDH/O5CTaO', 'super', 'Yw4K53iD6Bao4mgi8Hb2PBby5CTHdy5JCm5DCBmdeW2YGeYJi8BKDw7oYvai', '2024-06-24 13:46:10', '2024-06-24 13:46:10'),
(2, 'super admin', 'manager@herbnest.eg', NULL, '$2y$12$UsEXTHuEKHT9mxBw//AaJuxgE1s36IGgzX75YcY.KF5W29wYWD14W', 'manage', NULL, '2024-06-24 13:46:11', '2024-06-24 13:46:11'),
(3, 'admin', 'admin@herbnest.eg', NULL, '$2y$12$YcI6wkim04pdR2MuV711uOkSks0.3Gzy4dtfhZoslsfmI1dB8s3V2', 'reader', NULL, '2024-06-24 13:46:11', '2024-06-24 13:46:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
