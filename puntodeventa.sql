-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-02-2022 a las 16:39:58
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `puntodeventa`
--
CREATE DATABASE IF NOT EXISTS `puntodeventa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `puntodeventa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `businesses`
--

DROP TABLE IF EXISTS `businesses`;
CREATE TABLE IF NOT EXISTS `businesses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `businesses`
--

INSERT INTO `businesses` (`id`, `name`, `description`, `logo`, `mail`, `address`, `ruc`, `created_at`, `updated_at`) VALUES
(1, 'Prueba', 'sdasda', '1645325944_code.jpg', 'Eje@gmail.com', '8888 Cummings Vista Apt. 101, Susanbury, NY 95473', '123456789', '2022-02-20 04:40:18', '2022-02-20 07:59:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'prueba1', 'vvvvv', '2022-02-20 09:15:15', '2022-02-20 09:15:15'),
(2, 'prueba 2', 'vvvvvvv', '2022-02-20 09:15:29', '2022-02-20 09:15:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clients_dni_unique` (`dni`),
  UNIQUE KEY `clients_phone_unique` (`phone`),
  UNIQUE KEY `clients_ruc_unique` (`ruc`),
  UNIQUE KEY `clients_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `name`, `dni`, `ruc`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'prueba1', '123456789', '123456789', 'xxxxx', '213456799', 'Eje@gmail.com', '2022-02-20 09:15:51', '2022-02-20 09:15:51'),
(2, 'usuario prueba', '1234567890', '2453453454523', 'vvvvvvvv', '212457889', 'usuarioprueba@gmail.com', '2022-02-20 09:17:52', '2022-02-20 09:17:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(39, '2014_10_12_000000_create_users_table', 1),
(40, '2014_10_12_100000_create_password_resets_table', 1),
(41, '2015_01_20_084450_create_roles_table', 1),
(42, '2015_01_20_084525_create_role_user_table', 1),
(43, '2015_01_24_080208_create_permissions_table', 1),
(44, '2015_01_24_080433_create_permission_role_table', 1),
(45, '2015_12_04_003040_add_special_role_column', 1),
(46, '2017_10_17_170735_create_permission_user_table', 1),
(47, '2019_08_19_000000_create_failed_jobs_table', 1),
(48, '2022_02_12_202421_create_categories_table', 1),
(49, '2022_02_12_205711_create_providers_table', 1),
(50, '2022_02_12_214036_create_products_table', 1),
(51, '2022_02_12_223221_create_clients_table', 1),
(52, '2022_02_12_230814_create_purchases_table', 1),
(53, '2022_02_12_230950_create_purchase_details_table', 1),
(54, '2022_02_12_235012_create_sales_table', 1),
(55, '2022_02_12_235140_create_sale_details_table', 1),
(56, '2022_02_19_160909_create_businesses_table', 1),
(57, '2022_02_19_160937_create_printers_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Navegar usuarios', 'users.index', 'Lista y navega todos los usuarios del sistema', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(2, 'Creación de usuarios', 'users.create', 'Podría crear nuevos usuarios en el sistema', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(3, 'Ver detalle de usuario', 'users.show', 'Ve en detalle cada usuario del sistema', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(4, 'Edición de usuarios', 'users.edit', 'Podría editar cualquier dato de un usuario del sistema', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(5, 'Eliminar usuario', 'users.destroy', 'Podría eliminar cualquier usuario del sistema', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(6, 'Navegar roles', 'roles.index', 'Lista y navega todos los roles del sistema', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(7, 'Ver detalle de un rol', 'roles.show', 'Ve en detalle cada rol del sistema', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(8, 'Creación de roles', 'roles.create', 'Podría crear nuevos roles en el sistema', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(9, 'Edición de roles', 'roles.edit', 'Podría editar cualquier dato de un rol del sistema', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(10, 'Eliminar roles', 'roles.destroy', 'Podría eliminar cualquier rol del sistema', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(11, 'Navegar categorías', 'categories.index', 'Lista y navega por todos los categorías del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(12, 'Ver detalle de categoría', 'categories.show', 'Ver en detalle cada categoría del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(13, 'Edición de categorías', 'categories.edit', 'Editar cualquier dato de un categoría del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(14, 'Creación de categorías', 'categories.create', 'Crea cualquier dato de una categoría del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(15, 'Eliminar categorías', 'categories.destroy', 'Eliminar cualquier dato de una categoría del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(16, 'Navegar por clientes', 'clients.index', 'Lista y navega por todos los clientes del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(17, 'Ver detalle de cliente', 'clients.show', 'Ver en detalle cada cliente del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(18, 'Edición de clientes', 'clients.edit', 'Editar cualquier dato de un cliente del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(19, 'Creación de clientes', 'clients.create', 'Crea cualquier dato de un cliente del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(20, 'Eliminar clientes', 'clients.destroy', 'Eliminar cualquier dato de un cliente del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(21, 'Navegar por productos', 'products.index', 'Lista y navega por todos los productos del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(22, 'Ver detalle de producto', 'products.show', 'Ver en detalle cada producto del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(23, 'Edición de productos', 'products.edit', 'Editar cualquier dato de un producto del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(24, 'Creación de productos', 'products.create', 'Crea cualquier dato de un producto del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(25, 'Eliminar productos', 'products.destroy', 'Eliminar cualquier dato de un producto del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(26, 'Navegar por proveedores', 'providers.index', 'Lista y navega por todos los proveedores del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(27, 'Ver detalle de proveedor', 'providers.show', 'Ver en detalle cada proveedor del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(28, 'Edición de proveedores', 'providers.edit', 'Editar cualquier dato de un proveedor del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(29, 'Creación de proveedores', 'providers.create', 'Crea cualquier dato de un proveedor del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(30, 'Eliminar proveedores', 'providers.destroy', 'Eliminar cualquier dato de un proveedor del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(31, 'Navegar por compras', 'purchases.index', 'Lista y navega por todos los compras del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(32, 'Ver detalle de compra', 'purchases.show', 'Ver en detalle cada compra del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(33, 'Creación de compras', 'purchases.create', 'Crea cualquier dato de un compra del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(34, 'Navegar por ventas', 'sales.index', 'Lista y navega por todos los ventas del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(35, 'Ver detalle de venta', 'sales.show', 'Ver en detalle cada venta del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(36, 'Creación de ventas', 'sales.create', 'Crea cualquier dato de un venta del sistema.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(37, 'Descargar PDF reporte de compras', 'purchases.pdf', 'Puede descargar todos los reportes de las compras en PDF.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(38, 'Descargar PDF reporte de ventas', 'sales.pdf', 'Puede descargar todos los reportes de las ventas en PDF.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(39, 'Imprimir boleta de venta', 'sales.print', 'Puede imprimir boletas de todas las ventas.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(40, 'Ver datos de la empresa', 'business.index', 'Navega por los datos de la empresa.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(41, 'Edición de empresa', 'business.edit', 'Editar cualquier dato de la empresa.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(42, 'er datos de la impresora', 'printers.index', 'Navega por los datos de la impresora.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(43, 'Edición de impresora', 'printers.edit', 'Editar cualquier dato de la impresora.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(44, 'Subir archivo de compra', 'upload.purchases', 'Puede subir comprobantes de una compra.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(45, 'Cambiar estado de producto', 'change.status.products', 'Permite cambiar el estado de un producto.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(46, 'Cambiar estado de compra', 'change.status.purchases', 'Permite cambiar el estado de un compra.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(47, 'Cambiar estado de venta', 'change.status.sales', 'Permite cambiar el estado de un venta.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(48, 'Reporte por día', 'reports.day', 'Permite ver los reportes de ventas por día.', '2022-02-20 04:40:18', '2022-02-20 04:40:18'),
(49, 'Reporte por fechas', 'reports.date', 'Permite ver los reportes por un rango de fechas de las ventas.', '2022-02-20 04:40:18', '2022-02-20 04:40:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE IF NOT EXISTS `permission_user` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `permission_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_user_permission_id_index` (`permission_id`),
  KEY `permission_user_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `printers`
--

DROP TABLE IF EXISTS `printers`;
CREATE TABLE IF NOT EXISTS `printers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `printers`
--

INSERT INTO `printers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'AURES', '2022-02-20 04:40:18', '2022-02-20 08:21:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_price` decimal(12,2) NOT NULL,
  `status` enum('ACTIVE','DESACTIVED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `category_id` bigint UNSIGNED NOT NULL,
  `provider_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`),
  UNIQUE KEY `products_code_unique` (`code`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_provider_id_foreign` (`provider_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `stock`, `image`, `sell_price`, `status`, `category_id`, `provider_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'prueba1', -150, '1645330742_code.jpg', '10000.00', 'ACTIVE', 1, 1, '2022-02-20 09:19:02', '2022-02-20 09:54:26'),
(2, '2', 'prueba 3', 366, '1645330763_default.jpg', '10000.00', 'ACTIVE', 2, 2, '2022-02-20 09:19:23', '2022-02-20 09:19:23'),
(3, NULL, 'cliente', 0, '1645462913_photo_2021-08-17_20-23-13.jpg', '10000.00', 'ACTIVE', 2, 2, '2022-02-21 22:01:53', '2022-02-21 22:01:53'),
(4, NULL, 'usuario prueba', 0, '1645463303_photo_2021-08-17_20-23-13.jpg', '10000.00', 'ACTIVE', 2, 2, '2022-02-21 22:08:23', '2022-02-21 22:08:23'),
(5, '5', 'prueba 2', 0, '1645467319_photo_2021-08-17_20-23-13.jpg', '15000.00', 'ACTIVE', 2, 2, '2022-02-21 23:15:19', '2022-02-21 23:15:19'),
(6, '12345678', 'prueba 6', 0, '1645471275_photo_2021-08-17_20-23-13.jpg', '5000.00', 'ACTIVE', 1, 1, '2022-02-22 00:21:15', '2022-02-22 00:21:15'),
(7, '00000007', 'prueba 7', 0, '1645471802_photo_2021-08-17_20-23-13.jpg', '50.00', 'ACTIVE', 1, 1, '2022-02-22 00:30:02', '2022-02-22 00:30:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `providers`
--

DROP TABLE IF EXISTS `providers`;
CREATE TABLE IF NOT EXISTS `providers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruc_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `providers_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `providers`
--

INSERT INTO `providers` (`id`, `name`, `email`, `ruc_number`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'prueba1', 'Eje@gmail.com', '4542542444', 'xxxxx', '213456799', '2022-02-20 09:18:23', '2022-02-20 09:18:23'),
(2, 'prueba 3', 'Eje@gmail.com', '4525225424452', 'fffff', '31245678935', '2022-02-20 09:18:40', '2022-02-20 09:18:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchases`
--

DROP TABLE IF EXISTS `purchases`;
CREATE TABLE IF NOT EXISTS `purchases` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `provider_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `purchase_date` datetime NOT NULL,
  `tax` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `status` enum('VALID','CANCELED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'VALID',
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `purchases_provider_id_foreign` (`provider_id`),
  KEY `purchases_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `purchases`
--

INSERT INTO `purchases` (`id`, `provider_id`, `user_id`, `purchase_date`, `tax`, `total`, `status`, `picture`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-02-19 23:20:37', '19.00', '6628.30', 'VALID', NULL, '2022-02-20 09:20:37', '2022-02-20 10:49:29'),
(2, 2, 1, '2022-02-19 23:21:02', '19.00', '259.42', 'VALID', NULL, '2022-02-20 09:21:02', '2022-02-20 10:49:33'),
(3, 1, 1, '2022-02-20 00:52:36', '19.00', '59500.00', 'VALID', NULL, '2022-02-20 10:52:36', '2022-02-20 10:53:18');

--
-- Disparadores `purchases`
--
DROP TRIGGER IF EXISTS `tr_updStockCompraAnular`;
DELIMITER $$
CREATE TRIGGER `tr_updStockCompraAnular` AFTER UPDATE ON `purchases` FOR EACH ROW BEGIN
  UPDATE products p
    JOIN purchase_details di
      ON di.product_id = p.id
     AND di.purchase_id = new.id
     set p.stock = p.stock - di.quantity;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchase_details`
--

DROP TABLE IF EXISTS `purchase_details`;
CREATE TABLE IF NOT EXISTS `purchase_details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `purchase_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `purchase_details_purchase_id_foreign` (`purchase_id`),
  KEY `purchase_details_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `purchase_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 250, '22.00', '2022-02-20 09:20:37', '2022-02-20 09:20:37'),
(2, 1, 1, 10, '2.00', '2022-02-20 09:20:37', '2022-02-20 09:20:37'),
(3, 1, 1, 25, '2.00', '2022-02-20 09:20:37', '2022-02-20 09:20:37'),
(4, 2, 2, 2, '3.00', '2022-02-20 09:21:02', '2022-02-20 09:21:02'),
(5, 2, 2, 56, '2.00', '2022-02-20 09:21:02', '2022-02-20 09:21:02'),
(6, 2, 2, 4, '25.00', '2022-02-20 09:21:02', '2022-02-20 09:21:02'),
(7, 3, 2, 10, '5000.00', '2022-02-20 10:52:36', '2022-02-20 10:52:36');

--
-- Disparadores `purchase_details`
--
DROP TRIGGER IF EXISTS `tr_updStockCompra`;
DELIMITER $$
CREATE TRIGGER `tr_updStockCompra` AFTER INSERT ON `purchase_details` FOR EACH ROW BEGIN
 UPDATE products SET stock = stock + NEW.quantity
 WHERE products.id = NEW.product_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `special`) VALUES
(1, 'Admin', 'admin', NULL, '2022-02-20 04:40:18', '2022-02-20 04:40:18', 'all-access');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_index` (`role_id`),
  KEY `role_user_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-02-20 04:40:18', '2022-02-20 04:40:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `sale_date` datetime NOT NULL,
  `tax` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `status` enum('VALID','CANCELED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'VALID',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sales_client_id_foreign` (`client_id`),
  KEY `sales_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`id`, `client_id`, `user_id`, `sale_date`, `tax`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-02-19 23:22:32', '19.00', '678300.00', 'VALID', '2022-02-20 09:22:32', '2022-02-20 10:42:12'),
(2, 2, 1, '2022-02-19 23:24:18', '9.00', '602988.00', 'VALID', '2022-02-20 09:24:18', '2022-02-20 10:42:09'),
(3, 2, 1, '2022-02-20 00:21:22', '19.00', '113050.00', 'VALID', '2022-02-20 10:21:22', '2022-02-20 10:42:06'),
(4, 1, 1, '2022-02-20 00:51:09', '19.00', '23562.00', 'VALID', '2022-02-20 10:51:09', '2022-02-21 20:54:20');

--
-- Disparadores `sales`
--
DROP TRIGGER IF EXISTS `tr_updStockVentaAnular`;
DELIMITER $$
CREATE TRIGGER `tr_updStockVentaAnular` AFTER UPDATE ON `sales` FOR EACH ROW BEGIN
  UPDATE products p
    JOIN sale_details dv
      ON dv.product_id = p.id
     AND dv.sale_id= new.id
     set p.stock = p.stock + dv.quantity;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sale_details`
--

DROP TABLE IF EXISTS `sale_details`;
CREATE TABLE IF NOT EXISTS `sale_details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `sale_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sale_details_sale_id_foreign` (`sale_id`),
  KEY `sale_details_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sale_details`
--

INSERT INTO `sale_details` (`id`, `sale_id`, `product_id`, `quantity`, `price`, `discount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 20, '10000.00', '5.00', '2022-02-20 09:22:32', '2022-02-20 09:22:32'),
(2, 1, 1, 20, '10000.00', '5.00', '2022-02-20 09:22:32', '2022-02-20 09:22:32'),
(3, 1, 2, 20, '10000.00', '5.00', '2022-02-20 09:22:32', '2022-02-20 09:22:32'),
(4, 2, 2, 50, '10000.00', '1.00', '2022-02-20 09:24:18', '2022-02-20 09:24:18'),
(5, 2, 2, 2, '10000.00', '5.00', '2022-02-20 09:24:18', '2022-02-20 09:24:18'),
(6, 2, 2, 4, '10000.00', '2.00', '2022-02-20 09:24:18', '2022-02-20 09:24:18'),
(7, 3, 1, 10, '10000.00', '5.00', '2022-02-20 10:21:22', '2022-02-20 10:21:22'),
(8, 4, 2, 198, '10000.00', '99.00', '2022-02-20 10:51:09', '2022-02-20 10:51:09');

--
-- Disparadores `sale_details`
--
DROP TRIGGER IF EXISTS `tr_updStockVenta`;
DELIMITER $$
CREATE TRIGGER `tr_updStockVenta` AFTER INSERT ON `sale_details` FOR EACH ROW BEGIN
 UPDATE products SET stock = stock - NEW.quantity
 WHERE products.id = NEW.product_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Luis', 'lepiedrahita5@misena.edu.co', NULL, '$2y$10$KFM4WygJWAxj5A/l/0gCiuZzKRLU0Xl9Pj.TChxEspBd.IwItuXhS', NULL, '2022-02-20 04:40:18', '2022-02-20 04:40:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
