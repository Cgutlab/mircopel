-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2020 a las 04:09:04
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mircopel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `status` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT 'on',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `cod`, `name`, `username`, `type`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Pablo', 'pablo', 'admin', 'on', NULL, '$2y$10$GBZ31yZdofBknz7D3h8azu86kW6GMMc3geUiEU0A4GeyJdAaDoLXC', NULL, NULL, NULL),
(2, NULL, 'Carlos', 'carlos', 'user', 'on', NULL, '$2y$10$vTOApE48YFRXwN0FTSrd1.DF42WjGbtMaqmFuJl2l62haPwJYeye2', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`id`, `section`, `type`, `order`, `image`, `title_es`, `subtitle_es`, `button_es`, `route`, `created_at`, `updated_at`) VALUES
(1, 'home', 'right', 'AA', 'b1.jpg', 'SOLICITÁ PRESUPUESTO', 'de manera rápida y sin costo', 'SOLICITAR PRESUPUESTO', 'solicitar-presupuesto', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `code`, `image`, `title_es`, `order`, `created_at`, `updated_at`) VALUES
(1, '01', '01.jpg', 'SERVILLETAS', 'AA', NULL, NULL),
(2, '02', '02.jpg', 'MANTELES INDIVIDUALES', 'BB', NULL, NULL),
(3, '03', '03.jpg', 'HIGIENE INSTITUCIONAL', 'CC', NULL, NULL),
(4, '04', '04.jpg', 'CAJAS DE TORTA, BOMBONES Y MASAS FINAS', 'DD', NULL, NULL),
(5, '05', '05.jpg', 'RESMAS', 'EE', NULL, NULL),
(6, '06', '06.jpg', 'BANDEJAS DE CARTÓN', 'FF', NULL, NULL),
(7, '07', '07.jpg', 'PLATOS DORADOS', 'FF', NULL, NULL),
(8, '08', '08.jpg', 'PAPEL', 'FF', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `colors`
--

INSERT INTO `colors` (`id`, `cod`, `title_es`, `created_at`, `updated_at`) VALUES
(1, 'FFFFFF', 'Blanco', NULL, NULL),
(2, 'FA8072', 'Salmón', NULL, NULL),
(3, 'FFFF00', 'Amarillo', NULL, NULL),
(4, 'FF0000', 'Rojo', NULL, NULL),
(5, '808840', 'Bordó', NULL, NULL),
(6, '0000FF', 'Azul', NULL, NULL),
(7, '00FF00', 'Verde', NULL, NULL),
(8, '6c4675', 'Lila', NULL, NULL),
(9, '000000', 'Negro', NULL, NULL),
(10, '9C9C9C', 'Gris', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contents`
--

INSERT INTO `contents` (`id`, `section`, `type`, `order`, `image1`, `image2`, `image3`, `title_es`, `text_es`, `created_at`, `updated_at`) VALUES
(1, 'empresa', 'content-left', 'AA', 'empresa1.jpg', 'empresa2.jpg', 'empresa3.jpg', 'EMPRESA', '<p>Mircopel es una empresa familiar dedicada a la conversión de papel. Fabricamos servilletas en diversos formatos, manteles individuales impresos, productos para la higiene institucional, papel seda liso e impreso, papel para embalaje en resmas y bobinas en sus diferentes tamaños y gramajes. Además comercializamos directo de fábrica resmas Duplituc y Tempo en todas sus variedades.</p><p>Tenemos a disposición de nuestros clientes un equipo de profesionales que están en constante perfeccionamiento para poder brindar el mejor servicio del mercado. Con una visión sustentada en el esfuerzo, acercamos a cada cliente soluciones pensadas exclusivamente para su necesidad.</p><p>Llevamos operando en éste sector más de 40 años y gozamos de una reputación construida con honestidad y compromiso</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `data`
--

INSERT INTO `data` (`id`, `type`, `text`, `route`, `created_at`, `updated_at`) VALUES
(1, 'info-direccion1', 'Esteban Merlo 5894', 'Esteban Merlo 5894, Caseros - Prov. de Buenos Aires', NULL, NULL),
(2, 'info-direccion2', 'Caseros - Prov. de Buenos Aires', 'Esteban Merlo 5894, Caseros - Prov. de Buenos Aires', NULL, NULL),
(3, 'info-telefono1', '011 5195 - 6848', '+5401151956848', NULL, NULL),
(4, 'info-telefono2', '011 5195 - 6849', '+5401151956849', NULL, NULL),
(5, 'info-correo', 'consultas@papeleramircopel.com', 'consultas@papeleramircopel.com', NULL, NULL),
(6, 'header-telefono', '011 5195 - 6848 / 011 5195 - 6849', '+5401151956848', NULL, NULL),
(7, 'header-correo', 'consultas@papeleramircopel.com', 'consultas@papeleramircopel.com', NULL, NULL),
(8, 'contacto-mapa', 'api-google', '#', NULL, NULL),
(9, 'contacto-informacion', 'Términos y condiciones de privacidad...', 'Términos y condiciones de privacidad...', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `order`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '001_1.jpg', 'AA', 1, NULL, NULL),
(2, '002_1.jpg', 'AA', 2, NULL, NULL),
(3, '003_1.jpg', 'AA', 3, NULL, NULL),
(4, '004_1.jpg', 'AA', 4, NULL, NULL),
(5, '005_1.jpg', 'AA', 5, NULL, NULL),
(6, '001_2.jpg', 'BB', 1, NULL, NULL),
(7, '001_3.jpg', 'CC', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grammages`
--

CREATE TABLE `grammages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `grammages`
--

INSERT INTO `grammages` (`id`, `title_es`, `order`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '55-60g/m2', 'AA', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `icons`
--

CREATE TABLE `icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `icons`
--

INSERT INTO `icons` (`id`, `section`, `image`, `title_es`, `order`, `created_at`, `updated_at`) VALUES
(1, 'home', 'i1.png', 'GRAN VARIEDAD Y STOCK PERMANENTE', 'AA', NULL, NULL),
(2, 'home', 'i2.png', 'CALIDAD GARANTIZADA', 'BB', NULL, NULL),
(3, 'home', 'i3.png', '40 AÑOS DE TRAYECTORIA', 'CC', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `logos`
--

INSERT INTO `logos` (`id`, `type`, `image`, `created_at`, `updated_at`) VALUES
(1, 'header', 'header.png', NULL, NULL),
(2, 'footer', 'footer.png', NULL, NULL),
(3, 'favicon', 'favicon.png', NULL, NULL),
(4, 'default', 'default.png', NULL, NULL),
(5, 'security', 'default.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metadata`
--

CREATE TABLE `metadata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `metadata`
--

INSERT INTO `metadata` (`id`, `section`, `keyword_es`, `description_es`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Palabras Clave', 'Descripcion Para la búsqueda avanzada', NULL, NULL),
(2, 'empresa', 'Palabras Clave', 'Descripcion Para la búsqueda avanzada', NULL, NULL),
(3, 'productos', 'Palabras Clave', 'Descripcion Para la búsqueda avanzada', NULL, NULL),
(4, 'solicitud-presupuesto', 'Palabras Clave', 'Descripcion Para la búsqueda avanzada', NULL, NULL),
(5, 'contacto', 'Palabras Clave', 'Descripcion Para la búsqueda avanzada', NULL, NULL),
(6, 'buscador', 'Palabras Clave', 'Descripcion Para la búsqueda avanzada', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_04_10_012122_create_admins_table', 1),
(2, '2019_04_10_012128_create_data_table', 1),
(3, '2019_04_10_012133_create_metadata_table', 1),
(4, '2019_04_10_012136_create_logos_table', 1),
(5, '2019_04_10_012144_create_sliders_table', 1),
(6, '2019_04_10_012147_create_contents_table', 1),
(7, '2019_04_10_012156_create_icons_table', 1),
(8, '2019_04_10_012159_create_colors_table', 1),
(9, '2019_04_10_012205_create_categories_table', 1),
(10, '2019_04_10_012206_create_sizes_table', 1),
(11, '2019_04_10_012207_create_presentations_table', 1),
(12, '2019_04_10_012208_create_grammages_table', 1),
(13, '2019_04_10_012210_create_products_table', 1),
(14, '2019_04_10_012220_create_galleries_table', 1),
(15, '2019_04_10_013056_create_banners_table', 1),
(16, '2019_04_10_064818_create_reds_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentations`
--

CREATE TABLE `presentations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `presentations`
--

INSERT INTO `presentations` (`id`, `title_es`, `order`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '4, 6 Y 18 (con y sin guarda)', 'AA', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outstanding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `code`, `title_es`, `text_es`, `keyword_es`, `order`, `outstanding`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '001', 'Servilletas Tissue', '<p>El papel tissue es un derivado de la celulosa con el que se consigue un papel fino y absorbente. Es un papel ideal para la fabricación de Servilletas, papel higiénico, papel de cocina, etc… Se puede fabricar de dos o tres capas obteniendo mas o menos dureza y absorbencia con cada una de estas configuraciones de capas de papel.</p>', 'Palabras Para La Búsqueda', 'AA', 'on', 1, NULL, NULL),
(2, '002', 'Servilletas Decoradas de Papel', '', 'Palabras Para La Búsqueda', 'BB', '', 1, NULL, NULL),
(3, '003', 'Servilletas planas', '', 'Palabras Para La Búsqueda', 'CC', 'on', 1, NULL, NULL),
(4, '004', 'Servilletas Zig Zag', '', 'Palabras Para La Búsqueda', 'DD', 'on', 1, NULL, NULL),
(5, '005', 'Servilletas Cocktail 25x25', '', 'Palabras Para La Búsqueda', 'EE', 'on', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products_colors`
--

CREATE TABLE `products_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products_colors`
--

INSERT INTO `products_colors` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL),
(9, 1, 9, NULL, NULL),
(10, 1, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products_grammages`
--

CREATE TABLE `products_grammages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `grammage_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products_grammages`
--

INSERT INTO `products_grammages` (`id`, `product_id`, `grammage_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products_presentations`
--

CREATE TABLE `products_presentations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `presentation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products_presentations`
--

INSERT INTO `products_presentations` (`id`, `product_id`, `presentation_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products_sizes`
--

CREATE TABLE `products_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `size_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products_sizes`
--

INSERT INTO `products_sizes` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reds`
--

CREATE TABLE `reds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reds`
--

INSERT INTO `reds` (`id`, `section`, `order`, `icon`, `route`, `image`, `created_at`, `updated_at`) VALUES
(1, 'footer', 'AA', 'fab fa-facebook-square', 'https://www.facebook.com', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sizes`
--

INSERT INTO `sizes` (`id`, `title_es`, `order`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Servilletas de 33 x 33 cm', 'AA', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle_es` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `section`, `type`, `image`, `order`, `title_es`, `subtitle_es`, `created_at`, `updated_at`) VALUES
(1, 'home', 'title-center', 's1.jpg', 'AA', 'EXCELENCIA EN SERVICIO', 'calidad y tiempo', NULL, NULL),
(2, 'empresa', 'title-center', 's2.jpg', 'AA', '40 AÑOS DE TRAYECTORIA', 'acompañando a la industria papelera', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `grammages`
--
ALTER TABLE `grammages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grammages_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metadata`
--
ALTER TABLE `metadata`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `presentations`
--
ALTER TABLE `presentations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `presentations_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `products_colors`
--
ALTER TABLE `products_colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_colors_product_id_foreign` (`product_id`),
  ADD KEY `products_colors_color_id_foreign` (`color_id`);

--
-- Indices de la tabla `products_grammages`
--
ALTER TABLE `products_grammages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_grammages_product_id_foreign` (`product_id`),
  ADD KEY `products_grammages_grammage_id_foreign` (`grammage_id`);

--
-- Indices de la tabla `products_presentations`
--
ALTER TABLE `products_presentations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_presentations_product_id_foreign` (`product_id`),
  ADD KEY `products_presentations_presentation_id_foreign` (`presentation_id`);

--
-- Indices de la tabla `products_sizes`
--
ALTER TABLE `products_sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_sizes_product_id_foreign` (`product_id`),
  ADD KEY `products_sizes_size_id_foreign` (`size_id`);

--
-- Indices de la tabla `reds`
--
ALTER TABLE `reds`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sizes_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `grammages`
--
ALTER TABLE `grammages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `icons`
--
ALTER TABLE `icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `metadata`
--
ALTER TABLE `metadata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `presentations`
--
ALTER TABLE `presentations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `products_colors`
--
ALTER TABLE `products_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `products_grammages`
--
ALTER TABLE `products_grammages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `products_presentations`
--
ALTER TABLE `products_presentations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `products_sizes`
--
ALTER TABLE `products_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reds`
--
ALTER TABLE `reds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `grammages`
--
ALTER TABLE `grammages`
  ADD CONSTRAINT `grammages_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `presentations`
--
ALTER TABLE `presentations`
  ADD CONSTRAINT `presentations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products_colors`
--
ALTER TABLE `products_colors`
  ADD CONSTRAINT `products_colors_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_colors_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products_grammages`
--
ALTER TABLE `products_grammages`
  ADD CONSTRAINT `products_grammages_grammage_id_foreign` FOREIGN KEY (`grammage_id`) REFERENCES `grammages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_grammages_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products_presentations`
--
ALTER TABLE `products_presentations`
  ADD CONSTRAINT `products_presentations_presentation_id_foreign` FOREIGN KEY (`presentation_id`) REFERENCES `presentations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_presentations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products_sizes`
--
ALTER TABLE `products_sizes`
  ADD CONSTRAINT `products_sizes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_sizes_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sizes`
--
ALTER TABLE `sizes`
  ADD CONSTRAINT `sizes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
