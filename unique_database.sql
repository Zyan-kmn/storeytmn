-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 02, 2020 at 12:41 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unique`
--

-- --------------------------------------------------------

--
-- Table structure for table `billdetails`
--

CREATE TABLE `billdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `bill_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billdetails`
--

INSERT INTO `billdetails` (`id`, `qty`, `product_id`, `bill_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 5, 1, NULL, '2020-09-02 04:10:18', '2020-09-02 04:10:18'),
(2, '1', 7, 1, NULL, '2020-09-02 04:10:18', '2020-09-02 04:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `billdate` date NOT NULL,
  `voucherno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `billdate`, `voucherno`, `total`, `status`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2020-09-02', '7145565875', '0', 'Bill', 3, NULL, '2020-09-02 04:10:18', '2020-09-02 04:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `category_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Good Morning', 'logo/brand/1598866251.png', 1, NULL, '2020-08-31 03:00:51', '2020-08-31 03:00:51'),
(2, 'SamparOO', 'logo/brand/1598866294.png', 6, NULL, '2020-08-31 03:01:34', '2020-08-31 03:01:34'),
(3, 'Coca Cola', 'logo/brand/1598866335.jpeg', 5, NULL, '2020-08-31 03:02:15', '2020-08-31 03:02:15'),
(4, 'Biogisic', 'logo/brand/1598866412.png', 2, NULL, '2020-08-31 03:03:32', '2020-08-31 03:03:32'),
(5, 'Milo', 'logo/brand/1598866499.png', 3, NULL, '2020-08-31 03:04:59', '2020-08-31 03:04:59'),
(6, 'Hlaing Company', 'logo/brand/1598866548.jpeg', 4, NULL, '2020-08-31 03:05:48', '2020-08-31 03:05:48'),
(7, 'Myanmar Beer', 'logo/brand/1598866589.jpeg', 4, NULL, '2020-08-31 03:06:29', '2020-08-31 03:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Bread', 'images/category/1598865788.jpeg', NULL, '2020-08-31 02:53:08', '2020-08-31 02:53:08'),
(2, 'Medicine', 'images/category/1598865875.jpeg', NULL, '2020-08-31 02:54:35', '2020-08-31 02:54:35'),
(3, 'Snacks', 'images/category/1598865954.jpeg', NULL, '2020-08-31 02:55:54', '2020-08-31 02:55:54'),
(4, 'Alcohol', 'images/category/1598866032.png', NULL, '2020-08-31 02:57:12', '2020-08-31 02:57:12'),
(5, 'Juice', 'images/category/1598866112.jpeg', NULL, '2020-08-31 02:58:32', '2020-08-31 02:58:32'),
(6, 'Water', 'images/category/1598866156.jpeg', NULL, '2020-08-31 02:59:16', '2020-08-31 02:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_28_152823_create_categories_table', 1),
(5, '2020_08_28_210023_create_products_table', 1),
(6, '2020_08_28_210452_create_brands_table', 1),
(7, '2020_08_29_090040_create_shops_table', 1),
(8, '2020_08_31_053029_create_permission_tables', 1),
(9, '2020_08_31_084501_create_instocks_table', 1),
(10, '2020_09_01_183241_create_bills_table', 2),
(11, '2020_09_02_051333_create_billdetails_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 4),
(3, 'App\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codeno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `codeno`, `name`, `photo`, `price`, `category_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'JPM-80270', 'ghg', 'images/product/1598867878.png', '2500', 3, '2020-09-01 00:13:43', '2020-08-31 03:27:58', '2020-09-01 00:13:43'),
(2, 'JPM-37483', 'Aye gh', 'images/product/1598902093.jpeg', '2500', 1, '2020-09-01 00:13:41', '2020-08-31 12:58:13', '2020-09-01 00:13:41'),
(3, 'JPM-49256', 'Chocolates 🍫  Bread 🍞', 'images/product/1598942615.jpeg', '200', 1, NULL, '2020-09-01 00:13:35', '2020-09-01 00:13:35'),
(4, 'JPM-90781', 'Cheeses 🧀   Bread 🍞', 'images/product/1598942681.jpeg', '250', 1, NULL, '2020-09-01 00:14:41', '2020-09-01 00:14:41'),
(5, 'JPM-21631', 'Milo Cookie 🍪', 'images/product/1598942831.jpeg', '1200', 3, NULL, '2020-09-01 00:17:11', '2020-09-01 00:17:11'),
(6, 'JPM-98749', 'Coconuts 🥥 Bread🥯', 'images/product/1598942929.jpeg', '350', 1, NULL, '2020-09-01 00:18:49', '2020-09-01 00:18:49'),
(7, 'JPM-59454', 'CakeBoy Strawberry 🍓', 'images/product/1598943094.jpeg', '1500', 1, NULL, '2020-09-01 00:21:34', '2020-09-01 00:21:34'),
(8, 'JPM-69858', 'CakeBoy Cheese 🧀', 'images/product/1598943131.jpeg', '1500', 1, NULL, '2020-09-01 00:22:11', '2020-09-01 00:22:11'),
(9, 'JPM-74203', 'Pal Bread', 'images/product/1598943195.jpeg', '300', 1, NULL, '2020-09-01 00:23:15', '2020-09-01 00:23:15'),
(10, 'JPM-39244', 'Good Morning Bread', 'images/product/1598943255.jpeg', '1500', 1, NULL, '2020-09-01 00:24:15', '2020-09-01 00:24:15'),
(11, 'JPM-50275', 'Fruit Cake 🧁', 'images/product/1598943323.jpeg', '1500', 1, NULL, '2020-09-01 00:25:23', '2020-09-01 00:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2020-08-31 02:42:33', '2020-08-31 02:42:33'),
(2, 'manager', 'web', '2020-08-31 02:42:33', '2020-08-31 02:42:33'),
(3, 'staff', 'web', '2020-08-31 02:42:33', '2020-08-31 02:42:33');

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
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `name`, `address`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Kyimyinding unique', 'Kyimyinding', NULL, '2020-08-31 02:44:12', '2020-08-31 02:44:12'),
(2, 'TharKayTa Unique', 'No. 731, Ka Gyi Ward,Su Paung Aung Mingalar St, TharKayta Kyun Tp. Yangon', NULL, '2020-09-01 03:34:05', '2020-09-01 03:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stockdate` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `qty`, `stockdate`, `status`, `product_id`, `brand_id`, `user_id`, `shop_id`, `created_at`, `updated_at`) VALUES
(2, '4', '2020-05-11', 'Instock', 2, 1, 2, 1, '2020-08-31 03:27:58', '2020-08-31 03:27:58'),
(3, '4', '2020-05-11', 'Instock', 1, 2, 2, 1, '2020-08-31 12:58:13', '2020-08-31 12:58:13'),
(4, '10', '2020-05-11', 'Instock', 1, 3, 2, 1, '2020-09-01 00:13:35', '2020-09-01 00:13:35'),
(5, '10', '2020-05-11', 'Instock', 1, 4, 2, 1, '2020-09-01 00:14:41', '2020-09-01 00:14:41'),
(6, '10', '2020-05-11', 'Instock', 5, 5, 2, 1, '2020-09-01 00:17:11', '2020-09-01 00:17:11'),
(7, '20', '2020-05-15', 'Instock', 1, 6, 2, 1, '2020-09-01 00:18:49', '2020-09-01 00:18:49'),
(8, '23', '2020-06-12', 'Instock', 1, 7, 2, 1, '2020-09-01 00:21:34', '2020-09-01 00:21:34'),
(9, '23', '2020-06-12', 'Instock', 1, 8, 2, 1, '2020-09-01 00:22:11', '2020-09-01 00:22:11'),
(10, '10', '2020-05-11', 'Instock', 1, 9, 2, 1, '2020-09-01 00:23:15', '2020-09-01 00:23:15'),
(11, '20', '2020-06-12', 'Instock', 1, 10, 2, 1, '2020-09-01 00:24:15', '2020-09-01 00:24:15'),
(12, '10', '2020-06-12', 'Instock', 1, 11, 2, 1, '2020-09-01 00:25:23', '2020-09-01 00:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `registerdate` date NOT NULL DEFAULT '2020-08-31',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `registerdate`, `name`, `profile`, `email`, `email_verified_at`, `password`, `phone`, `address`, `shop_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '2020-08-31', 'Kaung Myat', 'images/user/admin.png', 'admin@gmail.com', NULL, '$2y$10$7Qtb5fBkR2/eU2CJUkdvl.TmFmOvKHYMU9oulY0AK/1eREXd5ybpy', '0987654321', 'YGN', NULL, '0', NULL, '2020-08-31 02:42:33', '2020-08-31 02:42:33'),
(2, '2020-08-31', 'Manager One', 'profile/manager/1598865278.png', 'managerone@gmail.com', NULL, '$2y$10$XweaY2aLG5jyOU2focNKAu8v93y.KdAwKMa2ekTmYiCgaHCX9oDy.', '0987654321', 'No. 731, Ka Gyi Ward,Su Paung Aung Mingalar St, Thingyun Kyun Tp.\r\nYangon', 1, '0', NULL, '2020-08-31 02:44:38', '2020-08-31 02:44:38'),
(3, '2020-08-31', 'StaffOne', 'profile/manager/1598865309.jpeg', 'staffone@gmail.com', NULL, '$2y$10$N3sOwDsV7sfXxufKA.6.Uec.IaWwQ3TvaHc5MJCkYjGRuFbzOAt2q', '1234567890', 'No. 731, Ka Gyi Ward,Su Paung Aung Mingalar St, Thingyun Kyun Tp.\r\nYangon', 1, '0', NULL, '2020-08-31 02:45:09', '2020-08-31 02:45:09'),
(4, '2020-08-31', 'Manager Two', 'profile/manager/1598977259.jpeg', 'mangertwo@gmail.com', NULL, '$2y$10$kF2zNzDN2BOr/n40fYBesOuQsQuXl4dRS/p32o7/HtJ5YSptudjmq', '0912345678', 'Pyima Street, No 10 4foor', 2, '0', NULL, '2020-09-01 09:50:59', '2020-09-01 09:50:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billdetails`
--
ALTER TABLE `billdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billdetails_product_id_foreign` (`product_id`),
  ADD KEY `billdetails_bill_id_foreign` (`bill_id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_user_id_foreign` (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brands_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stocks_product_id_foreign` (`product_id`),
  ADD KEY `stocks_brand_id_foreign` (`brand_id`),
  ADD KEY `stocks_user_id_foreign` (`user_id`),
  ADD KEY `stocks_shop_id_foreign` (`shop_id`);

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
-- AUTO_INCREMENT for table `billdetails`
--
ALTER TABLE `billdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billdetails`
--
ALTER TABLE `billdetails`
  ADD CONSTRAINT `billdetails_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `billdetails_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `brands`
--
ALTER TABLE `brands`
  ADD CONSTRAINT `brands_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

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
