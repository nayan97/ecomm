-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 05:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, 'Electronic', 'electronic', 1, 0, '2023-09-26 06:38:04', '2023-09-26 06:38:04'),
(2, 'Fashion', 'fashion', 1, 0, '2023-09-26 06:38:26', '2023-09-26 06:38:26'),
(3, 'Food', 'food', 1, 0, '2023-09-26 06:38:44', '2023-09-26 06:38:44'),
(4, 'Home  Appliance', 'home-appliance', 1, 0, '2023-09-26 06:39:49', '2023-09-26 06:39:49');

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
(10, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2023_09_18_053009_create_products_table', 2),
(15, '2023_09_19_093839_create_carts_table', 3),
(16, '2023_09_21_062007_create_orders_table', 4),
(17, '2014_10_12_000000_create_users_table', 5),
(18, '2023_09_24_125825_create_themes_table', 6),
(19, '2023_09_25_094610_create_protags_table', 7),
(20, '2023_09_25_120015_create_product_protag_table', 8),
(21, '2023_09_26_115844_create_categories_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `del_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `name`, `address`, `city`, `zip_code`, `del_status`, `payment_method`, `payment_status`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 'Nayan Islam', 'Vill: Baropakhia, P.O: Dhopapara, P.S: Puthia, Dist: Rajshahi', 'Rajshahi', '6260', 'pending', 'cash', 'pending', 1, 0, '2023-09-21 03:44:03', '2023-09-21 03:44:03'),
(3, 2, 1, 'Nayan Islam', 'Baropakhia, Puthia, Rajshahi', 'Rajshahi', '6260', 'pending', 'cash', 'pending', 1, 0, '2023-09-21 03:46:39', '2023-09-21 03:46:39'),
(4, 9, 2, 'Nayan Islam', 'Baropakhia, Puthia, Rajshahi', 'Rajshahi', '6260', 'pending', 'cash', 'pending', 1, 0, '2023-10-02 05:59:07', '2023-10-02 05:59:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dis_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `category`, `price`, `dis_price`, `photo`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(2, 'Macmini', 'macmini', 'New guts. More glory., Apple M1 chip with 8-core CPU, 8-core GPU, and 16-core', 'computer', '900', '870', '1695097231.jpg', 1, 0, '2023-09-18 22:20:31', '2023-09-18 22:20:31'),
(3, 'Macbook Air', 'macbook-air', 'New guts. More glory., Apple M1 chip with 8-core CPU, 8-core GPU, and 16-core', 'computer', '999', '990', '1695097287.jpeg', 1, 0, '2023-09-18 22:21:27', '2023-09-18 22:21:27'),
(4, 'mi note 10', 'mi-note-10', '6/128 gb', 'mobile', '200', '190', '1695097369.jpg', 1, 0, '2023-09-18 22:22:49', '2023-09-18 22:22:49'),
(8, 'iPhone 7', 'iphone-7', '2 gb, 32 gb', 'mobile', '70', '65', '1696245336.jpeg', 1, 0, '2023-10-02 05:15:36', '2023-10-02 05:15:36'),
(9, 'iPhone 14 pro Max', 'iphone-14-pro-max', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure optio, libero sapiente vitae illum officiis perferendis culpa necessitatibus aspernatur rem, dolor dicta temporibus eaque accusamus iste, in provident! Quasi, dolorum!', 'mobile', '1200', '1149', '1696245462.webp', 1, 0, '2023-10-02 05:17:42', '2023-10-02 05:17:42'),
(10, 'Three Pcs', 'three-pcs', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure optio, libero sapiente vitae illum officiis perferendis culpa necessitatibus aspernatur rem, dolor dicta temporibus eaque accusamus iste, in provident! Quasi, dolorum!', 'electronic', '99', '90', '1696246233.jpeg', 1, 0, '2023-10-02 05:30:33', '2023-10-02 05:30:33'),
(11, 'Polo Shirt', 'polo-shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure optio, libero sapiente vitae illum officiis perferendis culpa necessitatibus aspernatur rem, dolor dicta temporibus eaque accusamus iste, in provident! Quasi, dolorum!', 'electronic', '99', '90', '1696246326.webp', 1, 0, '2023-10-02 05:32:06', '2023-10-02 05:32:06'),
(12, 'HP Laptop', 'hp-laptop', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure optio, libero sapiente vitae illum officiis perferendis culpa necessitatibus aspernatur rem, dolor dicta temporibus eaque accusamus iste, in provident! Quasi, dolorum!', 'computer', '999', '949', '1696246544.png', 1, 0, '2023-10-02 05:35:44', '2023-10-02 05:35:44'),
(13, 'Three Pcs', 'three-pcs', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure optio, libero sapiente vitae illum officiis perferendis culpa necessitatibus aspernatur rem, dolor dicta temporibus eaque accusamus iste, in provident! Quasi, dolorum!', 'electronic', '299', '249', '1696246622.jpg', 1, 0, '2023-10-02 05:37:02', '2023-10-02 05:37:02'),
(14, 'Dell Laptop', 'dell-laptop', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure optio, libero sapiente vitae illum officiis perferendis culpa necessitatibus aspernatur rem, dolor dicta temporibus eaque accusamus iste, in provident! Quasi, dolorum!', 'electronic', '950', '899', '1696246734.webp', 1, 0, '2023-10-02 05:38:54', '2023-10-02 05:38:54'),
(15, 'Polo Shirt', 'polo-shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure optio, libero sapiente vitae illum officiis perferendis culpa necessitatibus aspernatur rem, dolor dicta temporibus eaque accusamus iste, in provident! Quasi, dolorum!', NULL, '499', '449', '1696246796.webp', 1, 0, '2023-10-02 05:39:56', '2023-10-02 05:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `product_protag`
--

CREATE TABLE `product_protag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `protag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_protag`
--

INSERT INTO `product_protag` (`id`, `product_id`, `protag_id`, `created_at`, `updated_at`) VALUES
(4, 7, 6, NULL, NULL),
(5, 7, 7, NULL, NULL),
(6, 8, 6, NULL, NULL),
(7, 8, 7, NULL, NULL),
(8, 9, 6, NULL, NULL),
(9, 9, 7, NULL, NULL),
(10, 10, 1, NULL, NULL),
(11, 10, 3, NULL, NULL),
(12, 10, 6, NULL, NULL),
(13, 10, 7, NULL, NULL),
(14, 11, 1, NULL, NULL),
(15, 11, 2, NULL, NULL),
(16, 11, 6, NULL, NULL),
(17, 11, 7, NULL, NULL),
(18, 12, 6, NULL, NULL),
(19, 12, 7, NULL, NULL),
(20, 13, 3, NULL, NULL),
(21, 13, 5, NULL, NULL),
(22, 13, 7, NULL, NULL),
(23, 14, 6, NULL, NULL),
(24, 14, 7, NULL, NULL),
(25, 15, 1, NULL, NULL),
(26, 15, 2, NULL, NULL),
(27, 15, 4, NULL, NULL),
(28, 15, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `protags`
--

CREATE TABLE `protags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `protags`
--

INSERT INTO `protags` (`id`, `name`, `slug`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, 'Fashion', 'fashion', 1, 0, '2023-09-25 04:14:58', '2023-09-25 04:14:58'),
(2, 'Men', 'men', 1, 0, '2023-09-25 04:16:20', '2023-09-25 04:16:20'),
(3, 'Wemen', 'wemen', 1, 0, '2023-09-25 04:16:44', '2023-09-25 04:16:44'),
(4, 'Shirt', 'shirt', 1, 0, '2023-09-25 04:16:55', '2023-09-25 04:16:55'),
(5, 'Saree', 'saree', 1, 0, '2023-09-25 04:17:07', '2023-09-25 04:17:07'),
(6, 'New', 'new', 1, 0, '2023-09-25 04:17:49', '2023-09-25 04:17:49'),
(7, 'Eid', 'eid', 1, 0, '2023-09-25 04:18:25', '2023-09-25 04:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'logo.png',
  `copy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '© 2023 eShop Agency.',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Easy Shop Agency',
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Shopping is so easy',
  `social` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `search` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `logo`, `copy`, `title`, `tagline`, `social`, `search`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', '© 2023 eShop Agency.', 'Easy Shop Agency', 'Shopping is so easy', '{\"fb\":\"https:\\/\\/www.facebook.com\\/nayanislam.dev\",\"din\":\"https:\\/\\/www.linkedin.com\\/feed\\/\",\"tw\":\"#\",\"wapp\":\"#\",\"ins\":\"222\"}', '', '2023-09-24 21:23:22', '2023-10-11 21:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `cell`, `user_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '01721088930', '1', NULL, '$2y$10$cYIJNVnur2vYhepBnF0nfOj7lnVKABTxSoiIB6yCqOv2CiL7Mn9qe', NULL, '2023-09-24 00:32:17', '2023-09-24 00:32:17'),
(2, 'user', 'user@gmail.com', '01721088932', '0', NULL, '$2y$10$T7KhXQXjV.6zI10dIlQOnuFWQKAqFdRJbIFJu52GsInsaRQNRNTxi', NULL, '2023-09-24 00:30:24', '2023-09-24 00:30:24'),
(4, 'Nayan Islam', 'nayanislam085@gmail.com', '01750639637', '0', NULL, '$2y$10$ikBmXn2pTmLhSrqcT3m6CuKA0u6/uCmwxK02Q633mH6UYbi/tP0Vm', NULL, '2023-09-24 00:23:20', '2023-09-24 00:23:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `product_protag`
--
ALTER TABLE `product_protag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `protags`
--
ALTER TABLE `protags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_cell_unique` (`cell`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_protag`
--
ALTER TABLE `product_protag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `protags`
--
ALTER TABLE `protags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
