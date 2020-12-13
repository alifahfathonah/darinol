-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 12:09 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_darinol`
--

-- --------------------------------------------------------

--
-- Table structure for table `dn_admin`
--

CREATE TABLE `dn_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(150) NOT NULL,
  `date_admin` datetime NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dn_admin`
--

INSERT INTO `dn_admin` (`id_admin`, `username`, `full_name`, `password`, `email`, `date_admin`, `last_login`) VALUES
(1, 'admin', 'Super Admin', '3d6298189e3f5835aed6912e4ca38085', 'agung.jamali@yahoo.co.id', '2020-08-23 00:00:00', '2020-09-16 05:30:37'),
(2, 'agung', 'Agung Jamali', '3d6298189e3f5835aed6912e4ca38085', 'agung.jamali@yahoo.co.id', '2020-09-04 15:13:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dn_article`
--

CREATE TABLE `dn_article` (
  `id_article` int(11) NOT NULL,
  `title_article` varchar(200) NOT NULL,
  `id_category` int(11) NOT NULL,
  `image_article` varchar(200) NOT NULL,
  `alias_article` varchar(200) NOT NULL,
  `contain_article` longtext NOT NULL,
  `id_admin` int(11) NOT NULL,
  `status_article` tinyint(1) NOT NULL COMMENT '0: Unpublish, 1: Publish',
  `date_article` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dn_article`
--

INSERT INTO `dn_article` (`id_article`, `title_article`, `id_category`, `image_article`, `alias_article`, `contain_article`, `id_admin`, `status_article`, `date_article`, `date_update`) VALUES
(1, 'Kemudahan belajar dengan Tablet Advance', 3, 'asset/images/slider2.jpg', 'kemudahan-belajar-dengan-tablet-advance', '\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>', 1, 1, '2020-08-23 09:48:51', '2020-08-23 09:48:51'),
(2, 'Mengenal Laptop Ergonomis', 1, 'asset/images/slider1.jpg', 'mengenal-laptop-ergonomis', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>', 1, 1, '2020-08-23 14:48:51', '2020-08-23 14:48:51'),
(3, 'Tips Mencari Tablet Murah', 1, 'asset/images/slider3.jpg', 'tips-mencari-tablet-murah', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>', 1, 1, '2020-08-23 06:48:51', '2020-08-23 06:48:51'),
(6, 'Ini Cuma contoh artikel saja', 2, 'asset/images/article/artikel-ini-cuma-contoh-artikel-saja-20200907071329.jpeg', 'ini-cuma-contoh-artikel-saja', '<p><span style=\"color: #212529; font-family: \'Baloo Tamma 2\', cursive; font-size: 16px; background-color: #ffffff;\">Lorems ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </span><span style=\"background-color: #ffffff; color: #212529; font-family: \'Baloo Tamma 2\', cursive; font-size: 16px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', 1, 1, '2020-09-07 19:18:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dn_category`
--

CREATE TABLE `dn_category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `alias_category` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `id_admin` int(11) NOT NULL,
  `date_category` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dn_category`
--

INSERT INTO `dn_category` (`id_category`, `category`, `alias_category`, `description`, `id_admin`, `date_category`) VALUES
(1, 'Tips-tips', 'tips-tips', '', 1, '2020-08-22 07:37:00'),
(2, 'Pendidikan', 'pendidikan', '', 1, '2020-08-23 00:00:00'),
(3, 'Cara Belajar', 'cara-belajar', '', 1, '2020-08-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dn_menu`
--

CREATE TABLE `dn_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(20) NOT NULL,
  `link` varchar(200) NOT NULL,
  `link_type` tinyint(1) NOT NULL COMMENT '0: Direct Link, 1: Internal Link',
  `sort_order` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0: active, 1: deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dn_menu`
--

INSERT INTO `dn_menu` (`id_menu`, `menu`, `link`, `link_type`, `sort_order`, `status`) VALUES
(1, 'Home', 'http://localhost/vidostore', 0, 1, 0),
(2, 'Produk', 'produk', 1, 2, 0),
(3, 'Artikel', 'artikel', 1, 3, 0),
(4, 'Kontak', 'p/kontak', 1, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dn_product`
--

CREATE TABLE `dn_product` (
  `id_product` int(11) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `alias_product` varchar(200) NOT NULL,
  `name_product` varchar(200) NOT NULL,
  `short_description` varchar(300) NOT NULL,
  `description` longtext NOT NULL,
  `image_featured` varchar(200) NOT NULL,
  `status_stock` tinyint(4) NOT NULL COMMENT '0: Available, 1: Not Available',
  `product_featured` tinyint(1) NOT NULL COMMENT '0: Not Popular, 1: Popular',
  `id_admin` int(11) NOT NULL,
  `date_product` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dn_product`
--

INSERT INTO `dn_product` (`id_product`, `product_category`, `alias_product`, `name_product`, `short_description`, `description`, `image_featured`, `status_stock`, `product_featured`, `id_admin`, `date_product`, `date_update`) VALUES
(1, 'laptop, asus', 'laptop-asus', 'Laptop Asus', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cill', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n', 'asset/images/slider1.jpg', 0, 1, 1, '2020-08-21 00:00:00', '2020-08-21 00:00:00'),
(2, 'tablet, advan', 'tablet-advan', 'Tablet Advan', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n', 'asset/images/slider2.jpg', 0, 1, 1, '2020-08-21 15:24:15', '2020-08-21 15:24:15'),
(3, 'tablet, education', 'tablet-pendidikan', 'Tablet Pendidikan', 'Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n', 'asset/images/slider3.jpg', 0, 1, 1, '2020-08-21 14:28:51', '2020-08-21 14:28:51'),
(4, 'laptop, notebook, hp', 'notebook-hp-murah', 'Notebook HP Murah', 'Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n', 'asset/images/slider4.jpg', 0, 0, 1, '2020-08-21 17:12:23', '2020-08-21 17:12:23'),
(5, 'tablet, ergonomis, murah', 'tablet-ergonomis-murah', 'Tablet Ergonomis Murah', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n', 'asset/images/product1.jpg', 0, 1, 1, '2020-08-21 23:30:17', '2020-08-21 23:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `dn_product_gallery`
--

CREATE TABLE `dn_product_gallery` (
  `id_product_gallery` bigint(20) NOT NULL,
  `id_product` int(11) NOT NULL,
  `image_product_gallery` varchar(200) NOT NULL,
  `caption` varchar(200) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `date_product_gallery` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dn_product_gallery`
--

INSERT INTO `dn_product_gallery` (`id_product_gallery`, `id_product`, `image_product_gallery`, `caption`, `sort_order`, `date_product_gallery`) VALUES
(4, 1, 'asset/images/product4.jpg', 'Laptop Asus', 1, '2020-08-31 02:22:22'),
(6, 1, 'asset/images/product3.jpg', 'Laptop Asus', 2, '2020-08-31 02:22:22'),
(9, 5, 'asset/images/product/product-tablet-20200916083339.jpg', 'Tablet', 1, '2020-09-16 08:33:39'),
(10, 5, 'asset/images/product/product-tablet-20200916083421.jpg', 'Tablet', 2, '2020-09-16 08:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `dn_setting`
--

CREATE TABLE `dn_setting` (
  `id_setting` tinyint(4) NOT NULL,
  `title_website` varchar(200) NOT NULL,
  `logo_website` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `footer` varchar(200) NOT NULL,
  `copyright` varchar(100) NOT NULL,
  `gmaps_link` varchar(500) NOT NULL,
  `email_website` varchar(200) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `whatsapp_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dn_setting`
--

INSERT INTO `dn_setting` (`id_setting`, `title_website`, `logo_website`, `facebook`, `twitter`, `instagram`, `footer`, `copyright`, `gmaps_link`, `email_website`, `phone_number`, `whatsapp_number`) VALUES
(1, 'Darinol - Jual Laptop Tablet untuk Sekolah & Umum', 'asset/images/logo-darinol.png', '#', '#', '#', '<p>Darinol siap menjadi partner anda dalam menyediakan laptop, table, gadget, device dan berbagai perangkat lain nya yang mendukung keberlangsungan aktivitas anda.</p>', '2020 Darinol All Right Reserved', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.596992367447!2d106.69712196080158!3d-6.184654734100737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f92a9fddd711%3A0x936ffa0090ca7d6d!2sPT%20Violet%20Niaga%20Indonesia!5e0!3m2!1sen!2sid!4v1597118945028!5m2!1sen!2sid', 'email@darinol.com', '085342265140', '+6285342265140');

-- --------------------------------------------------------

--
-- Table structure for table `dn_slider`
--

CREATE TABLE `dn_slider` (
  `id_slider` int(11) NOT NULL,
  `title_slider` varchar(200) NOT NULL,
  `image_slider` varchar(200) NOT NULL,
  `url_slider` varchar(200) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `date_slider` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dn_slider`
--

INSERT INTO `dn_slider` (`id_slider`, `title_slider`, `image_slider`, `url_slider`, `sort_order`, `date_slider`) VALUES
(1, 'slider1', 'asset/images/slider1.jpg', '#', 1, '2020-08-28 00:00:00'),
(2, 'slider2', 'asset/images/slider2.jpg', '#', 2, '2020-08-28 00:00:00'),
(3, 'slider3', 'asset/images/slider3.jpg', '#', 3, '2020-08-28 00:00:00'),
(4, 'slider4', 'asset/images/slider4.jpg', '#', 4, '2020-08-28 00:00:00'),
(5, 'slider5', 'asset/images/product1.jpg', '#', 5, '2020-08-28 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dn_admin`
--
ALTER TABLE `dn_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dn_article`
--
ALTER TABLE `dn_article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `dn_category`
--
ALTER TABLE `dn_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `dn_menu`
--
ALTER TABLE `dn_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `dn_product`
--
ALTER TABLE `dn_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `dn_product_gallery`
--
ALTER TABLE `dn_product_gallery`
  ADD PRIMARY KEY (`id_product_gallery`);

--
-- Indexes for table `dn_setting`
--
ALTER TABLE `dn_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `dn_slider`
--
ALTER TABLE `dn_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dn_admin`
--
ALTER TABLE `dn_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dn_article`
--
ALTER TABLE `dn_article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dn_category`
--
ALTER TABLE `dn_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dn_menu`
--
ALTER TABLE `dn_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dn_product`
--
ALTER TABLE `dn_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dn_product_gallery`
--
ALTER TABLE `dn_product_gallery`
  MODIFY `id_product_gallery` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dn_setting`
--
ALTER TABLE `dn_setting`
  MODIFY `id_setting` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dn_slider`
--
ALTER TABLE `dn_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
