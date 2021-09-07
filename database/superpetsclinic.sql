-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 03, 2021 at 01:50 AM
-- Server version: 8.0.25-15
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superpetsclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int UNSIGNED NOT NULL,
  `description_image` text COLLATE utf8mb4_unicode_ci,
  `about_image` text COLLATE utf8mb4_unicode_ci,
  `vision_image` text COLLATE utf8mb4_unicode_ci,
  `mission_image` text COLLATE utf8mb4_unicode_ci,
  `values_image` text COLLATE utf8mb4_unicode_ci,
  `approach_image` text COLLATE utf8mb4_unicode_ci,
  `goals_image` text COLLATE utf8mb4_unicode_ci,
  `features_image` text COLLATE utf8mb4_unicode_ci,
  `bio_image` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description_image`, `about_image`, `vision_image`, `mission_image`, `values_image`, `approach_image`, `goals_image`, `features_image`, `bio_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'storage/images/about/1630157939about-page.jpg', 'storage/images/about/1630439821about1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-28 09:44:27', '2021-08-31 17:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `about_lang`
--

CREATE TABLE `about_lang` (
  `id` int UNSIGNED NOT NULL,
  `about_id` int UNSIGNED NOT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `subtitle` text COLLATE utf8mb4_unicode_ci,
  `description_text` text COLLATE utf8mb4_unicode_ci,
  `about_title` text COLLATE utf8mb4_unicode_ci,
  `about_subtitle` text COLLATE utf8mb4_unicode_ci,
  `about_description_text` text COLLATE utf8mb4_unicode_ci,
  `vision_text` text COLLATE utf8mb4_unicode_ci,
  `mission_text` text COLLATE utf8mb4_unicode_ci,
  `values_text` text COLLATE utf8mb4_unicode_ci,
  `approach_text` text COLLATE utf8mb4_unicode_ci,
  `goals_text` text COLLATE utf8mb4_unicode_ci,
  `features_text` text COLLATE utf8mb4_unicode_ci,
  `bio_text` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_lang`
--

INSERT INTO `about_lang` (`id`, `about_id`, `lang`, `title`, `subtitle`, `description_text`, `about_title`, `about_subtitle`, `about_description_text`, `vision_text`, `mission_text`, `values_text`, `approach_text`, `goals_text`, `features_text`, `bio_text`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'about super pets clinic', 'any subtitle for now', '<p>Saudi Vision 2030 is a strategic framework to reduce Saudi Arabia&#39;s dependence on oil, diversify its economy, and develop public service sectors such as health, education, infrastructure, recreation, and tourism.</p>', 'about title test', NULL, '<p>about description test</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-28 09:44:27', '2021-08-29 13:18:32'),
(2, 1, 'ar', 'عنوان العيادة', 'عنوان آخر للعيادة', '<p>وصف العيادة</p>', 'عنوان من نحن', 'عنوان آخر لمن نحن', '<p>وصف من نحن</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-28 09:44:27', '2021-08-29 13:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `city` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `info` text COLLATE utf8mb4_unicode_ci,
  `street` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `block` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apartment` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `city`, `phone`, `info`, `street`, `block`, `floor`, `apartment`, `postal`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'cairo', NULL, 'shar3 osama el fe2e el motafar3 men shar3 el talatene', 'elharam shar3 eltalatene', 'block number 12', 'floor number 3', 'apartment number 10', '25458', '2021-09-01 17:45:07', '2021-08-28 09:44:27', '2021-08-28 09:44:27'),
(2, 2, 'cairo', '01121226689', 'i don\'t wanna see you face', 'Mokattam 9 Street', '7170', '2', '6', '11571', NULL, '2021-09-01 15:58:32', '2021-09-01 15:58:32'),
(3, 2, 'giza', '545 665 4554', 'you can come now', 'canada 1232', 'f1231', '6', '11', '25458', NULL, '2021-09-01 16:02:21', '2021-09-01 16:02:21'),
(4, 1, 'cairo', '1091132295', 'one ,, two ,, three', '159-future city-cairo-egypt', '11', '20', '33', '11839', NULL, '2021-09-02 08:17:40', '2021-09-02 08:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SPC Admin', 'admin@example.com', NULL, '$2y$10$mhi6uoTAI9PFzYIwOOPXQuGeQD0upOQmp4dFsIVS7Zh7/jOe2WYgW', 'YtWE9hsW9qMy9E1Kfhvh0OfyrXUk8gAnFVwhHISLIr4Ofcd2iTWrWEaBYIHB', '2021-08-28 09:44:27', '2021-08-28 09:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int UNSIGNED NOT NULL,
  `fullname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `fullname`, `phone`, `email`, `message`, `confirmed`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'mohamed seif', '1091132295', 'moh.seif113@gmail.com', 'Hello ,,', 0, '2021-08-29 16:29:28', '2021-08-28 13:16:29', '2021-08-29 16:29:28'),
(2, 'Abdelrahman', '01121226689', 'catch.code2015@gmail.com', 'from landing', 0, NULL, '2021-08-31 17:40:08', '2021-09-01 22:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `messenger` text COLLATE utf8mb4_unicode_ci,
  `twitter` text COLLATE utf8mb4_unicode_ci,
  `instagram` text COLLATE utf8mb4_unicode_ci,
  `youtube` text COLLATE utf8mb4_unicode_ci,
  `linkedin` text COLLATE utf8mb4_unicode_ci,
  `snapchat` text COLLATE utf8mb4_unicode_ci,
  `whatsapp` text COLLATE utf8mb4_unicode_ci,
  `google_plus` text COLLATE utf8mb4_unicode_ci,
  `pinterest` text COLLATE utf8mb4_unicode_ci,
  `behance` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `email_alt`, `phone`, `phone_alt`, `location`, `facebook`, `messenger`, `twitter`, `instagram`, `youtube`, `linkedin`, `snapchat`, `whatsapp`, `google_plus`, `pinterest`, `behance`, `created_at`, `updated_at`) VALUES
(1, 'superpets@gmail.com', 'superpets@gmail.com', '01265487998', '01165448898', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.466128344425!2d30.928001415442996!3d29.966031281910862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e0!4m0!4m0!5e0!3m2!1sen!2seg!4v1582205364423!5m2!1sen!2seg', 'https://www.facebook.com/', 'https://www.facebook.com/messages/t/', 'https://www.twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com', 'https://www.linkedin.com/', 'https://www.exampel.snap.com', 'https://wa.me/', 'https://plus.google.com/exampel', 'pintres.com', 'behance.com', '2021-08-28 09:44:27', '2021-08-28 09:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `contact_lang`
--

CREATE TABLE `contact_lang` (
  `id` int UNSIGNED NOT NULL,
  `contact_id` int UNSIGNED NOT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `address_alt` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_lang`
--

INSERT INTO `contact_lang` (`id`, `contact_id`, `lang`, `address`, `address_alt`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Building 1 , St 67 , Block 10 , Carrefour Maadi - Cairo', NULL, '2021-08-28 09:44:27', '2021-08-28 10:02:06'),
(2, 1, 'ar', NULL, NULL, '2021-08-28 09:44:27', '2021-08-28 09:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`code`, `language`, `created_at`, `updated_at`) VALUES
('ar', 'Arabic', '2021-08-28 09:44:27', NULL),
('en', 'English', '2021-08-28 09:44:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int UNSIGNED NOT NULL,
  `fullname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `fullname`, `phone`, `email`, `message`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Abdelrahman', '01121226689', 'catch.code2015@gmail.com', 'from store', NULL, '2021-08-31 17:42:28', '2021-08-31 17:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_02_200248_create_admins_table', 1),
(5, '2021_08_10_060422_create_sliders_table', 1),
(6, '2021_08_10_060455_create_slides_table', 1),
(7, '2021_08_10_060511_create_slides_lang_table', 1),
(8, '2021_08_10_093652_create_languages_table', 1),
(9, '2021_08_15_174128_create_about_table', 1),
(10, '2021_08_15_174134_create_about_lang_table', 1),
(11, '2021_08_16_064653_create_contact_table', 1),
(12, '2021_08_16_064702_create_contact_lang_table', 1),
(13, '2021_08_16_064806_create_settings_table', 1),
(14, '2021_08_16_065232_create_settings_lang_table', 1),
(15, '2021_08_16_074138_create_appointments_table', 1),
(16, '2021_08_16_074211_create_products_table', 1),
(17, '2021_08_16_074225_create_products_lang_table', 1),
(18, '2021_08_16_074233_create_products_images_table', 1),
(19, '2021_08_16_074258_create_cart_table', 1),
(20, '2021_08_16_111846_create_wishlist_table', 1),
(21, '2021_08_16_111927_create_mail_table', 1),
(22, '2021_08_19_015914_create_tag_tables', 1),
(23, '2021_08_26_142417_create_orders_table', 1),
(24, '2021_08_26_142733_create_addresses_table', 1),
(25, '2021_08_27_001126_create_order_details_table', 1),
(26, '2400_08_10_065716_create_constraints_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int UNSIGNED NOT NULL,
  `code` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `address_id` int UNSIGNED NOT NULL,
  `subtotal` double(8,2) NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `user_id`, `address_id`, `subtotal`, `confirmed`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '#kZAY1630161458', 1, 1, 699.99, 0, '2021-09-02 08:19:24', '2021-08-28 12:37:38', '2021-09-02 08:19:24'),
(2, '#UOR71630163282', 1, 1, 19.99, 0, '2021-09-02 08:19:20', '2021-08-28 13:08:02', '2021-09-02 08:19:20'),
(3, '#NZwd1630257394', 1, 1, 5399.94, 0, '2021-09-02 08:19:16', '2021-08-29 15:16:34', '2021-09-02 08:19:16'),
(4, '#3ypO1630419976', 1, 1, 19.99, 0, '2021-09-02 08:19:00', '2021-08-31 12:26:16', '2021-09-02 08:19:00'),
(5, '#2FcS1630513991', 1, 1, 699.99, 0, '2021-09-02 08:18:56', '2021-09-01 14:33:11', '2021-09-02 08:18:56'),
(6, '#10T61630519132', 2, 2, 1450.00, 0, '2021-09-02 08:18:49', '2021-09-01 15:58:52', '2021-09-02 08:18:49'),
(8, '#2sTI1630519358', 2, 3, 250.00, 0, '2021-09-02 08:18:37', '2021-09-01 16:02:38', '2021-09-02 08:18:37'),
(9, '#19Q01630577892', 1, 4, 2850.00, 0, '2021-09-02 08:18:52', '2021-09-02 08:18:12', '2021-09-02 08:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int UNSIGNED NOT NULL,
  `order_id` int UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `quantity` int DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `total` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 1, 699.99, 699.99, NULL, NULL),
(2, 2, 4, 1, 19.99, 19.99, NULL, NULL),
(3, 3, 3, 1, 1200.00, 1200.00, NULL, NULL),
(4, 3, 6, 6, 699.99, 4199.94, NULL, NULL),
(5, 4, 4, 1, 19.99, 19.99, NULL, NULL),
(6, 5, 6, 1, 699.99, 699.99, NULL, NULL),
(7, 6, 2, 1, 250.00, 250.00, NULL, NULL),
(8, 6, 3, 1, 1200.00, 1200.00, NULL, NULL),
(9, 8, 2, 1, 250.00, 250.00, NULL, NULL),
(10, 9, 1, 2, 100.00, 200.00, NULL, NULL),
(11, 9, 2, 1, 250.00, 250.00, NULL, NULL),
(12, 9, 3, 2, 1200.00, 2400.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int UNSIGNED NOT NULL,
  `code` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int UNSIGNED NOT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int NOT NULL,
  `top` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `slug`, `admin_id`, `thumbnail`, `price`, `quantity`, `top`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '#PKpx1630158393', 'dog_toy', 1, 'storage/images/products/163015837513.jpg', 100.00, 18, 1, NULL, '2021-08-28 11:46:33', '2021-09-02 08:18:12'),
(2, '#b92d1630158958', 'cat_fuzzy_toy', 1, 'storage/images/products/1630158947photo-1615332591802-dddd86b35238.jpeg', 250.00, 17, 1, NULL, '2021-08-28 11:55:58', '2021-09-02 08:18:12'),
(3, '#iKAa1630159041', 'cat_tower', 1, 'storage/images/products/1630159028photo-1616492222236-e393b08f6994.jpeg', 1200.00, 46, 1, NULL, '2021-08-28 11:57:21', '2021-09-02 08:18:12'),
(4, '#oXJ01630160279', 'pets_product', 1, 'storage/images/products/163016025912.jpg', 19.99, 0, 1, NULL, '2021-08-28 12:17:59', '2021-08-31 12:26:16'),
(5, '#jXZt1630160345', 'cat_toy', 1, 'storage/images/products/16301603312.jpg', 49.99, 10, 1, NULL, '2021-08-28 12:19:05', '2021-08-28 12:19:05'),
(6, '#qUsY1630160633', 'rudent_product', 1, 'storage/images/products/163016062313.jpg', 699.99, 12, 1, NULL, '2021-08-28 12:23:53', '2021-09-01 14:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, 'storage/images/products/16301583909.jpg', '2021-08-28 11:46:33', '2021-08-28 11:46:33'),
(2, 1, 'storage/images/products/163015839012.jpg', '2021-08-28 11:46:33', '2021-08-28 11:46:33'),
(3, 2, 'storage/images/products/1630158955photo-1616493039661-8a63de6ead09.jpeg', '2021-08-28 11:55:58', '2021-08-28 11:55:58'),
(4, 2, 'storage/images/products/1630158955photo-1616493123363-0cd62bd9a6dd.jpeg', '2021-08-28 11:55:58', '2021-08-28 11:55:58'),
(5, 3, 'storage/images/products/1630159037photo-1625142918110-5f9fe7a56027.jpeg', '2021-08-28 11:57:21', '2021-08-28 11:57:21'),
(6, 3, 'storage/images/products/1630159037photo-1603118034132-a21911e496bb.jpeg', '2021-08-28 11:57:21', '2021-08-28 11:57:21'),
(7, 4, 'storage/images/products/16301602752.jpg', '2021-08-28 12:17:59', '2021-08-28 12:17:59'),
(8, 4, 'storage/images/products/163016026612.jpg', '2021-08-28 12:17:59', '2021-08-28 12:17:59'),
(9, 5, 'storage/images/products/163016034212.jpg', '2021-08-28 12:19:05', '2021-08-28 12:19:05'),
(10, 5, 'storage/images/products/16301603372.jpg', '2021-08-28 12:19:05', '2021-08-28 12:19:05'),
(11, 6, 'storage/images/products/163016063012.jpg', '2021-08-28 12:23:53', '2021-08-28 12:23:53'),
(12, 6, 'storage/images/products/16301606272.jpg', '2021-08-28 12:23:53', '2021-08-28 12:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `products_lang`
--

CREATE TABLE `products_lang` (
  `id` int UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_lang`
--

INSERT INTO `products_lang` (`id`, `product_id`, `lang`, `title`, `subtitle`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'dog toy', NULL, '<p>rubber dog toy</p>', NULL, '2021-08-28 11:46:33', '2021-08-28 11:46:33'),
(2, 1, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:46:33', '2021-08-28 11:46:33'),
(3, 2, 'en', 'cat fuzzy toy', NULL, '<p>cool fuzzy toy for cat</p>', NULL, '2021-08-28 11:55:58', '2021-08-28 11:55:58'),
(4, 2, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:55:58', '2021-08-28 11:55:58'),
(5, 3, 'en', 'cat tower', NULL, '<p>nice cat tower for your cat</p>', NULL, '2021-08-28 11:57:21', '2021-08-28 11:57:21'),
(6, 3, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:57:21', '2021-08-28 11:57:21'),
(7, 4, 'en', 'pets product', 'Any Thing That Pets Wants', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>', NULL, '2021-08-28 12:17:59', '2021-08-28 12:17:59'),
(8, 4, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 12:17:59', '2021-08-28 12:17:59'),
(9, 5, 'en', 'Cat Toy', 'Any Thing That Pets Wants', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>', NULL, '2021-08-28 12:19:05', '2021-08-28 12:19:05'),
(10, 5, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 12:19:05', '2021-08-28 12:19:05'),
(11, 6, 'en', 'Rudent product', 'Any Thing That Pets Wants', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>', NULL, '2021-08-28 12:23:53', '2021-08-28 12:23:53'),
(12, 6, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 12:23:53', '2021-08-28 12:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int UNSIGNED NOT NULL,
  `h_logo` text COLLATE utf8mb4_unicode_ci,
  `f_logo` text COLLATE utf8mb4_unicode_ci,
  `store_logo` text COLLATE utf8mb4_unicode_ci,
  `clinic_logo` text COLLATE utf8mb4_unicode_ci,
  `admin_logo` text COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) DEFAULT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `h_logo`, `f_logo`, `store_logo`, `clinic_logo`, `admin_logo`, `active`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'storage/images/logos/1630151777logo.png', 'storage/images/logos/1630151780logo.png', 'storage/images/logos/1630630748store.jpg', 'storage/images/logos/1630630755clinic.jpg', 'storage/images/logos/1630151774logo.png', 1, 'en', '2021-08-28 09:44:27', '2021-09-02 22:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `settings_lang`
--

CREATE TABLE `settings_lang` (
  `id` int UNSIGNED NOT NULL,
  `setting_id` int UNSIGNED NOT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings_lang`
--

INSERT INTO `settings_lang` (`id`, `setting_id`, `lang`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'super pets clinic', '<p>online ecommerce webstie for all what your pet needs.</p>', '2021-08-28 09:44:27', '2021-08-28 09:56:27'),
(2, 1, 'ar', NULL, NULL, '2021-08-28 09:44:27', '2021-08-28 09:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `description`, `slug`, `domain`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'homepage slider', 'store\'s homepage slider', 'homepage_slider', 'store', NULL, '2021-08-28 09:44:27', '2021-08-28 09:44:27'),
(2, 'partners', 'store\'s partners slider', 'partners', 'store', NULL, '2021-08-28 09:44:27', '2021-08-28 09:44:27'),
(3, 'team', 'store\'s team\'s slider', 'team', 'store', NULL, '2021-08-28 09:44:27', '2021-08-28 09:44:27'),
(4, 'clinic home slider', 'clinic\'s home slider', 'clinic_home_slider', 'clinic', NULL, '2021-08-31 11:44:08', '2021-08-31 11:44:08'),
(5, 'clinic services', 'clinic\'s services slider', 'clinic_services', 'clinic', NULL, '2021-08-31 11:44:08', '2021-08-31 11:44:08'),
(6, 'clinic gallery', 'clinic\'s gallery slider', 'clinic_gallery', 'clinic', NULL, '2021-08-31 11:44:08', '2021-08-31 11:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int UNSIGNED NOT NULL,
  `slider_id` int UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `image_path` text COLLATE utf8mb4_unicode_ci,
  `admin_id` int UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slider_id`, `url`, `image_path`, `admin_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '#', 'storage/images/slides/163015641817.jpg', 1, NULL, '2021-08-28 11:13:40', '2021-08-28 11:13:40'),
(2, 1, '#', 'storage/images/slides/163015646318.jpg', 1, NULL, '2021-08-28 11:14:25', '2021-08-28 11:14:25'),
(3, 2, NULL, 'storage/images/slides/163015648310.png', 1, NULL, '2021-08-28 11:14:45', '2021-08-28 11:14:45'),
(4, 2, NULL, 'storage/images/slides/163015650811.png', 1, NULL, '2021-08-28 11:15:11', '2021-08-28 11:15:11'),
(5, 2, NULL, 'storage/images/slides/163015652112.png', 1, NULL, '2021-08-28 11:15:24', '2021-08-28 11:15:24'),
(6, 2, NULL, 'storage/images/slides/163015653314.png', 1, NULL, '2021-08-28 11:15:35', '2021-08-28 11:15:35'),
(7, 2, NULL, 'storage/images/slides/163015654615.png', 1, NULL, '2021-08-28 11:15:48', '2021-08-28 11:15:48'),
(8, 2, NULL, 'storage/images/slides/163015658617.png', 1, NULL, '2021-08-28 11:16:28', '2021-08-28 11:16:28'),
(9, 2, NULL, 'storage/images/slides/16301566009.png', 1, NULL, '2021-08-28 11:16:42', '2021-08-28 11:16:42'),
(10, 3, NULL, 'storage/images/slides/1630156934photo-1622253692010-333f2da6031d.jpeg', 1, NULL, '2021-08-28 11:22:17', '2021-08-28 11:22:17'),
(11, 3, NULL, 'storage/images/slides/1630156957photo-1594824476967-48c8b964273f.jpeg', 1, NULL, '2021-08-28 11:22:39', '2021-08-28 11:22:39'),
(12, 3, NULL, 'storage/images/slides/1630157001photo-1622902046580-2b47f47f5471.jpeg', 1, NULL, '2021-08-28 11:23:23', '2021-08-28 11:23:23'),
(13, 3, NULL, 'storage/images/slides/1630157028photo-1623854767276-5025b88735d3.jpeg', 1, NULL, '2021-08-28 11:23:50', '2021-08-28 11:23:50'),
(14, 2, NULL, 'storage/images/slides/1630247324photo-1603118034132-a21911e496bb.jpeg', 1, '2021-08-29 12:29:42', '2021-08-29 12:28:46', '2021-08-29 12:29:42'),
(15, 2, NULL, 'storage/images/slides/1630247496photo-1603118034132-a21911e496bb.jpeg', 1, '2021-08-29 12:31:55', '2021-08-29 12:31:38', '2021-08-29 12:31:55'),
(16, 3, NULL, 'storage/images/slides/1630247699photo-1615332591802-dddd86b35238.jpeg', 1, '2021-08-29 12:36:43', '2021-08-29 12:35:01', '2021-08-29 12:36:43'),
(17, 2, NULL, 'storage/images/slides/1630370932logo.png', 1, NULL, '2021-08-30 22:48:54', '2021-08-30 22:48:54'),
(18, 4, NULL, 'storage/images/slides/1630432499slider-1.jpg', 1, NULL, '2021-08-31 15:55:04', '2021-08-31 15:55:04'),
(19, 4, NULL, 'storage/images/slides/1630432514slider-2.jpg', 1, NULL, '2021-08-31 15:55:59', '2021-08-31 15:55:59'),
(20, 5, NULL, 'storage/images/slides/16304400421.jpg', 1, NULL, '2021-08-31 18:00:46', '2021-08-31 18:00:46'),
(21, 5, NULL, 'storage/images/slides/16304400522.jpg', 1, NULL, '2021-08-31 18:00:54', '2021-08-31 18:00:54'),
(22, 5, NULL, 'storage/images/slides/16304400623.jpg', 1, NULL, '2021-08-31 18:01:06', '2021-08-31 18:07:44'),
(23, 5, NULL, 'storage/images/slides/16304401344.jpg', 1, NULL, '2021-08-31 18:02:17', '2021-08-31 18:02:17'),
(24, 5, NULL, 'storage/images/slides/16304401475.jpg', 1, NULL, '2021-08-31 18:02:30', '2021-08-31 18:02:30'),
(25, 5, NULL, 'storage/images/slides/16304401566.jpg', 1, NULL, '2021-08-31 18:02:38', '2021-08-31 18:02:38'),
(26, 6, NULL, 'storage/images/slides/16304401931.jpg', 1, NULL, '2021-08-31 18:03:15', '2021-08-31 18:03:15'),
(27, 6, NULL, 'storage/images/slides/16304402022.jpg', 1, NULL, '2021-08-31 18:03:24', '2021-08-31 18:03:24'),
(28, 6, NULL, 'storage/images/slides/16304402133.jpg', 1, NULL, '2021-08-31 18:03:36', '2021-08-31 18:03:36'),
(29, 6, NULL, 'storage/images/slides/16304402274.jpg', 1, NULL, '2021-08-31 18:03:50', '2021-08-31 18:03:50'),
(30, 6, NULL, 'storage/images/slides/16304402365.jpg', 1, NULL, '2021-08-31 18:03:58', '2021-08-31 18:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `slides_lang`
--

CREATE TABLE `slides_lang` (
  `id` int UNSIGNED NOT NULL,
  `slide_id` int UNSIGNED NOT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_text` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides_lang`
--

INSERT INTO `slides_lang` (`id`, `slide_id`, `lang`, `title`, `subtitle`, `description`, `btn_text`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'every pet is different', 'let\'s shop', NULL, 'shop now', '2021-08-28 11:13:40', '2021-08-28 11:13:40'),
(2, 1, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:13:40', '2021-08-28 11:13:40'),
(3, 2, 'en', 'Any thing the pets want', 'let\'s shop', NULL, 'shop now', '2021-08-28 11:14:25', '2021-08-28 11:14:25'),
(4, 2, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:14:25', '2021-08-28 11:14:25'),
(5, 3, 'en', NULL, NULL, NULL, NULL, '2021-08-28 11:14:45', '2021-08-28 11:14:45'),
(6, 3, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:14:45', '2021-08-28 11:14:45'),
(7, 4, 'en', NULL, NULL, NULL, NULL, '2021-08-28 11:15:11', '2021-08-28 11:15:11'),
(8, 4, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:15:11', '2021-08-28 11:15:11'),
(9, 5, 'en', NULL, NULL, NULL, NULL, '2021-08-28 11:15:24', '2021-08-28 11:15:24'),
(10, 5, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:15:24', '2021-08-28 11:15:24'),
(11, 6, 'en', NULL, NULL, NULL, NULL, '2021-08-28 11:15:35', '2021-08-28 11:15:35'),
(12, 6, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:15:35', '2021-08-28 11:15:35'),
(13, 7, 'en', NULL, NULL, NULL, NULL, '2021-08-28 11:15:48', '2021-08-28 11:15:48'),
(14, 7, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:15:48', '2021-08-28 11:15:48'),
(15, 8, 'en', NULL, NULL, NULL, NULL, '2021-08-28 11:16:28', '2021-08-28 11:16:28'),
(16, 8, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:16:28', '2021-08-28 11:16:28'),
(17, 9, 'en', NULL, NULL, NULL, NULL, '2021-08-28 11:16:42', '2021-08-28 11:16:42'),
(18, 9, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:16:42', '2021-08-28 11:16:42'),
(19, 10, 'en', 'doctor 1', 'doctor 1 subtitle', '<p>doctor description test</p>', 'Read More', '2021-08-28 11:22:17', '2021-08-29 14:03:30'),
(20, 10, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:22:17', '2021-08-28 11:22:17'),
(21, 11, 'en', 'doctor 2', 'doctor 2 subtitle', NULL, 'Read More', '2021-08-28 11:22:39', '2021-08-28 12:51:51'),
(22, 11, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:22:39', '2021-08-28 11:22:39'),
(23, 12, 'en', 'doctor 3', 'doctor 3 subtitle', NULL, 'Read More', '2021-08-28 11:23:23', '2021-08-29 14:09:16'),
(24, 12, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:23:23', '2021-08-28 11:23:23'),
(25, 13, 'en', 'doctor 4', 'doctor 4 subtitle', NULL, 'Read More', '2021-08-28 11:23:50', '2021-08-28 12:52:07'),
(26, 13, 'ar', NULL, NULL, NULL, NULL, '2021-08-28 11:23:50', '2021-08-28 11:23:50'),
(27, 14, 'en', NULL, NULL, NULL, NULL, '2021-08-29 12:28:46', '2021-08-29 12:28:46'),
(28, 14, 'ar', NULL, NULL, NULL, NULL, '2021-08-29 12:28:46', '2021-08-29 12:28:46'),
(29, 15, 'en', NULL, NULL, NULL, NULL, '2021-08-29 12:31:39', '2021-08-29 12:31:39'),
(30, 15, 'ar', NULL, NULL, NULL, NULL, '2021-08-29 12:31:39', '2021-08-29 12:31:39'),
(31, 16, 'en', NULL, NULL, NULL, NULL, '2021-08-29 12:35:01', '2021-08-29 12:35:01'),
(32, 16, 'ar', NULL, NULL, NULL, NULL, '2021-08-29 12:35:01', '2021-08-29 12:35:01'),
(33, 17, 'en', NULL, NULL, NULL, NULL, '2021-08-30 22:48:54', '2021-08-30 22:48:54'),
(34, 17, 'ar', NULL, NULL, NULL, NULL, '2021-08-30 22:48:54', '2021-08-30 22:48:54'),
(35, 18, 'en', 'All For Prices You’ll Love', NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', NULL, '2021-08-31 15:55:04', '2021-08-31 15:55:04'),
(36, 18, 'ar', NULL, NULL, NULL, NULL, '2021-08-31 15:55:04', '2021-08-31 15:55:04'),
(37, 19, 'en', 'All For Prices You’ll Love', NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', NULL, '2021-08-31 15:55:59', '2021-08-31 15:55:59'),
(38, 19, 'ar', NULL, NULL, NULL, NULL, '2021-08-31 15:55:59', '2021-08-31 15:55:59'),
(39, 20, 'en', 'service', NULL, NULL, NULL, '2021-08-31 18:00:46', '2021-08-31 18:06:03'),
(40, 20, 'ar', NULL, NULL, NULL, NULL, '2021-08-31 18:00:46', '2021-08-31 18:00:46'),
(41, 21, 'en', 'service', NULL, NULL, NULL, '2021-08-31 18:00:54', '2021-08-31 18:06:08'),
(42, 21, 'ar', NULL, NULL, NULL, NULL, '2021-08-31 18:00:54', '2021-08-31 18:00:54'),
(43, 22, 'en', 'service', NULL, NULL, NULL, '2021-08-31 18:01:06', '2021-08-31 18:06:13'),
(44, 22, 'ar', NULL, NULL, NULL, NULL, '2021-08-31 18:01:06', '2021-08-31 18:01:06'),
(45, 23, 'en', 'service', NULL, NULL, NULL, '2021-08-31 18:02:17', '2021-08-31 18:06:18'),
(46, 23, 'ar', NULL, NULL, NULL, NULL, '2021-08-31 18:02:17', '2021-08-31 18:02:17'),
(47, 24, 'en', 'service', NULL, NULL, NULL, '2021-08-31 18:02:30', '2021-08-31 18:06:23'),
(48, 24, 'ar', NULL, NULL, NULL, NULL, '2021-08-31 18:02:30', '2021-08-31 18:02:30'),
(49, 25, 'en', 'service', NULL, NULL, NULL, '2021-08-31 18:02:38', '2021-08-31 18:06:36'),
(50, 25, 'ar', NULL, NULL, NULL, NULL, '2021-08-31 18:02:38', '2021-08-31 18:02:38'),
(51, 26, 'en', NULL, NULL, NULL, NULL, '2021-08-31 18:03:15', '2021-08-31 18:03:15'),
(52, 26, 'ar', NULL, NULL, NULL, NULL, '2021-08-31 18:03:15', '2021-08-31 18:03:15'),
(53, 27, 'en', NULL, NULL, NULL, NULL, '2021-08-31 18:03:24', '2021-08-31 18:03:24'),
(54, 27, 'ar', NULL, NULL, NULL, NULL, '2021-08-31 18:03:24', '2021-08-31 18:03:24'),
(55, 28, 'en', NULL, NULL, NULL, NULL, '2021-08-31 18:03:36', '2021-08-31 18:03:36'),
(56, 28, 'ar', NULL, NULL, NULL, NULL, '2021-08-31 18:03:36', '2021-08-31 18:03:36'),
(57, 29, 'en', NULL, NULL, NULL, NULL, '2021-08-31 18:03:50', '2021-08-31 18:03:50'),
(58, 29, 'ar', NULL, NULL, NULL, NULL, '2021-08-31 18:03:50', '2021-08-31 18:03:50'),
(59, 30, 'en', NULL, NULL, NULL, NULL, '2021-08-31 18:03:58', '2021-08-31 18:03:58'),
(60, 30, 'ar', NULL, NULL, NULL, NULL, '2021-08-31 18:03:58', '2021-08-31 18:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `taggables`
--

CREATE TABLE `taggables` (
  `tag_id` bigint UNSIGNED NOT NULL,
  `taggable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taggable_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taggables`
--

INSERT INTO `taggables` (`tag_id`, `taggable_type`, `taggable_id`) VALUES
(1, 'App\\Models\\Product', 1),
(2, 'App\\Models\\Product', 2),
(2, 'App\\Models\\Product', 3),
(2, 'App\\Models\\Product', 4),
(2, 'App\\Models\\Product', 5),
(4, 'App\\Models\\Product', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` json NOT NULL,
  `slug` json NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `order_column` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `type`, `image`, `order_column`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\": \"كلاب\", \"en\": \"dogs\"}', '{\"ar\": \"klab\", \"en\": \"dogs\"}', 'category', 'storage/images/category/16301574611.jpg', 1, '2021-08-28 11:31:04', '2021-08-28 11:32:07'),
(2, '{\"ar\": \"القطط\", \"en\": \"cats\"}', '{\"ar\": \"alktt\", \"en\": \"cats\"}', 'category', 'storage/images/category/16301575032.jpg', 2, '2021-08-28 11:31:33', '2021-08-28 11:31:46'),
(3, '{\"ar\": \"طيور\", \"en\": \"Birds\"}', '{\"ar\": \"tyor\", \"en\": \"birds\"}', 'category', 'storage/images/category/16301575883.jpg', 3, '2021-08-28 11:33:11', '2021-08-28 11:33:11'),
(4, '{\"ar\": \"القوارض\", \"en\": \"Rodents\"}', '{\"ar\": \"alkoard\", \"en\": \"rodents\"}', 'category', 'storage/images/category/16301576424.jpg', 4, '2021-08-28 11:34:04', '2021-08-28 11:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'John', 'mike', 'john@example.com', NULL, '$2y$10$Mjc3TNWTCkxv11lF6lKts.qLBqk462B6H0p2ymK8JWyT6E3MB9CX6', 'my6RdTGxi0OuvdDD7vcsZnrcrJrDRAt57b0BYCrYZUlJO7OV8KvPDOiYZ5GU', NULL, '2021-08-28 09:44:27', '2021-09-01 15:28:15'),
(2, 'Abdelrahman', 'Mohammed', 'catch.code2015@gmail.com', NULL, '$2y$10$futYFy0cyRXOTXOnbifejeQeIpzsKUdh82H.W.LwtpEcHWw8qymWG', NULL, NULL, '2021-09-01 15:57:25', '2021-09-01 15:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_lang`
--
ALTER TABLE `about_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_lang_about_id_foreign` (`about_id`),
  ADD KEY `about_lang_lang_foreign` (`lang`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_user_id_foreign` (`user_id`),
  ADD KEY `cart_product_id_foreign` (`product_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_lang`
--
ALTER TABLE `contact_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_lang_contact_id_foreign` (`contact_id`),
  ADD KEY `contact_lang_lang_foreign` (`lang`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD UNIQUE KEY `languages_code_unique` (`code`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_code_unique` (`code`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_address_id_foreign` (`address_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_code_unique` (`code`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `products_lang`
--
ALTER TABLE `products_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_lang_product_id_foreign` (`product_id`),
  ADD KEY `products_lang_lang_foreign` (`lang`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_lang_foreign` (`lang`);

--
-- Indexes for table `settings_lang`
--
ALTER TABLE `settings_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_lang_setting_id_foreign` (`setting_id`),
  ADD KEY `settings_lang_lang_foreign` (`lang`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slides_slider_id_foreign` (`slider_id`),
  ADD KEY `slides_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `slides_lang`
--
ALTER TABLE `slides_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slides_lang_slide_id_foreign` (`slide_id`),
  ADD KEY `slides_lang_lang_foreign` (`lang`);

--
-- Indexes for table `taggables`
--
ALTER TABLE `taggables`
  ADD UNIQUE KEY `taggables_tag_id_taggable_id_taggable_type_unique` (`tag_id`,`taggable_id`,`taggable_type`),
  ADD KEY `taggables_taggable_type_taggable_id_index` (`taggable_type`,`taggable_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_lang`
--
ALTER TABLE `about_lang`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_lang`
--
ALTER TABLE `contact_lang`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products_lang`
--
ALTER TABLE `products_lang`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings_lang`
--
ALTER TABLE `settings_lang`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `slides_lang`
--
ALTER TABLE `slides_lang`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_lang`
--
ALTER TABLE `about_lang`
  ADD CONSTRAINT `about_lang_about_id_foreign` FOREIGN KEY (`about_id`) REFERENCES `about` (`id`),
  ADD CONSTRAINT `about_lang_lang_foreign` FOREIGN KEY (`lang`) REFERENCES `languages` (`code`);

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `contact_lang`
--
ALTER TABLE `contact_lang`
  ADD CONSTRAINT `contact_lang_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`),
  ADD CONSTRAINT `contact_lang_lang_foreign` FOREIGN KEY (`lang`) REFERENCES `languages` (`code`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `products_images`
--
ALTER TABLE `products_images`
  ADD CONSTRAINT `products_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products_lang`
--
ALTER TABLE `products_lang`
  ADD CONSTRAINT `products_lang_lang_foreign` FOREIGN KEY (`lang`) REFERENCES `languages` (`code`),
  ADD CONSTRAINT `products_lang_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_lang_foreign` FOREIGN KEY (`lang`) REFERENCES `languages` (`code`);

--
-- Constraints for table `settings_lang`
--
ALTER TABLE `settings_lang`
  ADD CONSTRAINT `settings_lang_lang_foreign` FOREIGN KEY (`lang`) REFERENCES `languages` (`code`),
  ADD CONSTRAINT `settings_lang_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`);

--
-- Constraints for table `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slides_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `slides_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`);

--
-- Constraints for table `slides_lang`
--
ALTER TABLE `slides_lang`
  ADD CONSTRAINT `slides_lang_lang_foreign` FOREIGN KEY (`lang`) REFERENCES `languages` (`code`),
  ADD CONSTRAINT `slides_lang_slide_id_foreign` FOREIGN KEY (`slide_id`) REFERENCES `slides` (`id`);

--
-- Constraints for table `taggables`
--
ALTER TABLE `taggables`
  ADD CONSTRAINT `taggables_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
