-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for e_commerce
CREATE DATABASE IF NOT EXISTS `e_commerce` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `e_commerce`;

-- Dumping structure for table e_commerce.banners
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `banner_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e_commerce.banners: ~3 rows (approximately)
INSERT INTO `banners` (`id`, `banner_title`, `banner_img`, `status`, `created_at`, `updated_at`) VALUES
	(7, 'test', 'banner.png', '0', '2022-07-26 06:37:16', '2022-07-26 06:37:16'),
	(8, 'Maintain A COMFORTABLE', 'service3.png', '1', '2022-07-26 06:40:09', '2022-07-26 06:40:09'),
	(9, 'Maintain A COMFORTABLE  TESTING', 'news-banner.png', '1', '2022-07-26 08:01:50', '2022-07-26 08:01:50');

-- Dumping structure for table e_commerce.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `brand_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e_commerce.brands: ~4 rows (approximately)
INSERT INTO `brands` (`id`, `brand_name`, `brand_img`, `status`, `created_at`, `updated_at`) VALUES
	(8, 'Nike', 'Screenshot 2022-07-04 180611.png', '1', '2022-07-04 07:06:22', '2022-07-04 07:06:22'),
	(9, 'Adidas', 'Screenshot 2022-07-04 180702.png', '1', '2022-07-04 07:07:14', '2022-07-04 07:07:14'),
	(10, 'Levis', '1200px-Levis-logo-quer.svg.png', '1', '2022-07-04 07:07:54', '2022-07-04 07:07:54'),
	(11, 'Gucci', 'Screenshot 2022-07-04 180824.png', '1', '2022-07-04 07:08:39', '2022-07-04 07:08:39');

-- Dumping structure for table e_commerce.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cate_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e_commerce.categories: ~1 rows (approximately)
INSERT INTO `categories` (`id`, `cate_name`, `status`, `created_at`, `updated_at`) VALUES
	(5, 'Mens', '1', '2022-07-04 07:05:23', '2022-07-04 07:05:23');

-- Dumping structure for table e_commerce.coupons
CREATE TABLE IF NOT EXISTS `coupons` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `coupon_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` time NOT NULL,
  `start_date` date NOT NULL,
  `expire_time` time NOT NULL,
  `expire_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e_commerce.coupons: ~1 rows (approximately)
INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_code`, `coupon_value`, `product_id`, `start_time`, `start_date`, `expire_time`, `expire_date`, `status`, `created_at`, `updated_at`) VALUES
	(4, 'test', 'test', '100', '36', '10:28:00', '2022-07-27', '14:32:00', '2022-07-27', 0, '2022-07-26 23:28:53', '2022-07-26 23:28:53');

-- Dumping structure for table e_commerce.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e_commerce.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table e_commerce.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e_commerce.migrations: ~16 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_07_01_050019_create_categories_table', 2),
	(6, '2022_07_01_061624_create_brands_table', 3),
	(7, '2022_07_01_091512_create_products_table', 4),
	(8, '2022_07_01_101130_create_productimages_table', 5),
	(9, '2022_07_02_095519_create_banners_table', 6),
	(10, '2022_07_02_110341_create_pages_table', 7),
	(11, '2022_07_04_080229_create_coupons_table', 8),
	(12, '2022_07_07_091430_create_address_table', 9),
	(13, '2022_07_08_053906_create_orderadareess_table', 10),
	(14, '2022_07_12_054213_create_orders_table', 11),
	(15, '2022_07_15_071802_create_orderitems_table', 12),
	(16, '2022_07_21_061151_create_reviews_table', 13);

-- Dumping structure for table e_commerce.orderadareess
CREATE TABLE IF NOT EXISTS `orderadareess` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippijng_id` int(11) NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_id` int(11) DEFAULT NULL,
  `billingadress` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e_commerce.orderadareess: ~3 rows (approximately)
INSERT INTO `orderadareess` (`id`, `user_id`, `shippijng_id`, `shipping_address`, `billing_id`, `billingadress`) VALUES
	(58, '5', 38, 'a:6:{s:7:"address";s:52:"WZ 2/2, Lower Ground, Hari Singh Park, Multan Nagar,";s:4:"flat";s:37:"WZ 2/2, Lower Ground, Hari Singh Park";s:8:"landmark";s:28:"Multan Nagar, Paschim Vihar,";s:4:"city";s:4:"dehi";s:5:"state";s:5:"delhi";s:3:"zip";s:6:"110056";}', NULL, NULL),
	(59, '5', 38, NULL, 1, 'a:6:{s:7:"address";s:60:"WZ 2/2, LOWER GROUND, HARI SINGH PARK, MULTAN NAGAR, PASCHIM";s:4:"flat";s:34:"WZ 2/2, LOWER GROUND, HARI SINGH P";s:8:"landmark";s:27:"MULTAN NAGAR, PASCHIM VIHAR";s:4:"city";s:5:"delhi";s:5:"state";s:5:"delhi";s:3:"zip";s:6:"110056";}'),
	(60, '5', 55, 'a:6:{s:7:"address";s:4:"test";s:4:"flat";s:4:"test";s:8:"landmark";s:4:"test";s:4:"city";s:4:"test";s:5:"state";s:4:"test";s:3:"zip";s:4:"test";}', NULL, NULL);

-- Dumping structure for table e_commerce.orderitems
CREATE TABLE IF NOT EXISTS `orderitems` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `item_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_qty` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_order_id` (`order_id`),
  CONSTRAINT `fk_order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e_commerce.orderitems: ~13 rows (approximately)
INSERT INTO `orderitems` (`id`, `item_name`, `item_price`, `item_qty`, `item_img`, `product_id`, `order_id`, `created_at`, `updated_at`) VALUES
	(54, 'test2', '200', '1', 'about-team-2.jpg', 35, 80, NULL, NULL),
	(55, 'test', '100', '1', 'download (1).jpg', 34, 80, NULL, NULL),
	(56, 'test3', '300', '1', 'about-us.jpg', 36, 81, NULL, NULL),
	(57, 'test4', '400', '1', 'values.jpg', 37, 81, NULL, NULL),
	(58, 'test', '100', '1', 'download (1).jpg', 34, 81, NULL, NULL),
	(59, 'test2', '200', '2', 'about-team-2.jpg', 35, 82, NULL, NULL),
	(60, 'test', '100', '2', 'download (1).jpg', 34, 82, NULL, NULL),
	(61, 'test4', '400', '1', 'values.jpg', 37, 82, NULL, NULL),
	(62, 'test3', '300', '2', 'about-us.jpg', 36, 82, NULL, NULL),
	(63, 'test2', '200', '2', 'about-team-2.jpg', 35, 83, NULL, NULL),
	(64, 'test', '100', '2', 'download (1).jpg', 34, 83, NULL, NULL),
	(65, 'test4', '400', '1', 'values.jpg', 37, 83, NULL, NULL),
	(66, 'test3', '300', '2', 'about-us.jpg', 36, 83, NULL, NULL);

-- Dumping structure for table e_commerce.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_subtotal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_charges` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'free for now',
  `total_amount` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_adress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e_commerce.orders: ~4 rows (approximately)
INSERT INTO `orders` (`id`, `order_id`, `user_id`, `cart_subtotal`, `discount`, `coupon_code`, `coupon_value`, `shipping_charges`, `total_amount`, `shipping_address`, `billing_adress`, `created_at`, `updated_at`) VALUES
	(80, 57, '5', '300', '0', 'test', '100', 'free for now', '300', 'a:4:{i:0;s:2:"WZ";i:1;s:2:"WZ";i:2;s:5:"delhi";i:3;s:6:"Multan";}', 'a:4:{i:0;s:2:"WZ";i:1;N;i:2;s:5:"delhi";i:3;N;}', '2022-08-22 00:16:22', '2022-08-22 00:16:22'),
	(81, 47, '5', '800', '0', 'test', '100', 'free for now', '800', 'a:4:{i:0;s:18:"data-shippingflat=";i:1;N;i:2;s:1:"0";i:3;s:1:"0";}', 'a:4:{i:0;s:2:"WZ";i:1;N;i:2;s:1:"0";i:3;N;}', '2022-08-22 00:30:56', '2022-08-22 00:30:56'),
	(82, 80, '5', '1600', '0', 'test', '100', 'free for now', '1600', 'a:4:{i:0;s:1:"0";i:1;s:1:"0";i:2;s:1:"0";i:3;s:1:"0";}', 'a:4:{i:0;s:1:"0";i:1;N;i:2;s:1:"0";i:3;N;}', '2022-08-22 00:51:34', '2022-08-22 00:51:34'),
	(83, 50, '5', '1600', '0', 'test', '100', 'free for now', '1600', 'a:4:{i:0;s:2:"WZ";i:1;s:2:"WZ";i:2;s:5:"delhi";i:3;s:6:"Multan";}', 'a:4:{i:0;s:2:"WZ";i:1;N;i:2;s:5:"delhi";i:3;N;}', '2022-08-22 00:52:05', '2022-08-22 00:52:05');

-- Dumping structure for table e_commerce.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `page_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e_commerce.pages: ~0 rows (approximately)

-- Dumping structure for table e_commerce.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e_commerce.password_resets: ~0 rows (approximately)

-- Dumping structure for table e_commerce.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e_commerce.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table e_commerce.products
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `optional_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_feature` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_discount_rs` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_discount_perc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `fk_cate_id` (`cate_id`),
  KEY `fk_brand_id` (`brand_id`),
  CONSTRAINT `fk_brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  CONSTRAINT `fk_cate_id` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e_commerce.products: ~7 rows (approximately)
INSERT INTO `products` (`product_id`, `cate_id`, `brand_id`, `product_name`, `product_price`, `feature_img`, `status`, `optional_img`, `product_description`, `product_feature`, `created_at`, `updated_at`, `product_discount_rs`, `product_discount_perc`) VALUES
	(34, 5, 8, 'test', '100', 'download (1).jpg', 1, '["download (2).jpg","download (3).jpg"]', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2022-07-06 23:23:12', '2022-07-06 23:23:12', NULL, NULL),
	(35, 5, 9, 'test2', '200', 'about-team-2.jpg', 1, '["cooker.jpeg","IMG_20211201_135733.jpg"]', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '2022-07-06 23:23:59', '2022-07-06 23:23:59', NULL, NULL),
	(36, 5, 10, 'test3', '300', 'about-us.jpg', 1, '["window.jpg","values.png"]', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '2022-07-06 23:24:54', '2022-07-06 23:24:54', NULL, NULL),
	(37, 5, 11, 'test4', '400', 'values.jpg', 1, '["Sliding-window.png","slidingdoor.jpg"]', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '2022-07-06 23:25:26', '2022-07-06 23:25:26', NULL, NULL),
	(40, 5, 9, 'test5', '500', 'banner-3 (1).jpg', 1, '["banner-3.jpg"]', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '2022-08-22 01:17:34', '2022-08-22 01:17:34', NULL, NULL),
	(41, 5, 9, 'test6', '1200', 'bi-fold-door.jpg', 1, '["about-banner.jpg"]', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-09-01 04:22:00', '2022-09-01 04:22:00', NULL, '10'),
	(42, 5, 11, 'test7', '1500', 'For-End-Client-bottom-img-2.jpg', 1, '["Sliding-window.jpg"]', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-09-01 04:22:50', '2022-09-01 04:22:50', '100', NULL);

-- Dumping structure for table e_commerce.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(25) NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e_commerce.reviews: ~3 rows (approximately)
INSERT INTO `reviews` (`id`, `name`, `email`, `review`, `stars`, `product_id`, `status`, `created_at`, `updated_at`) VALUES
	(3, 'test', 'TEST@MAIL.COM', 'test', '3', 35, '1', '2022-07-26 06:56:49', '2022-07-26 06:56:49'),
	(4, 'DEEPAK', 'admin@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '5', 35, '1', '2022-07-26 07:19:48', '2022-07-26 07:19:48'),
	(5, 'deepak', 'admin@gmail.com', 'good product', '5', 34, '1', '2022-08-22 00:57:14', '2022-08-22 00:57:14');

-- Dumping structure for table e_commerce.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e_commerce.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(5, 'DEEPAK', 'admin@gmail.com', NULL, 'user', '$2y$10$l8mQEFUIACAQXZUuvAPZ5OHUKHNXEm8dWYazjnw9dIUwZHAxqx.mu', NULL, '2022-07-14 03:12:32', '2022-07-14 03:12:32');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
