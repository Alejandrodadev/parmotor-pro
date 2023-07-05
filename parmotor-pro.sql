-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2023 a las 09:41:34
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parmotor-pro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `published_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url_images` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `title`, `subtitle`, `author`, `content`, `published_at`, `created_at`, `updated_at`, `url_images`) VALUES
(1, 'Moto del año 2023', 'Moto  premiada', 'Alejandro', '\" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis diam urna, posuere nec sem ut, semper gravida sapien. Cras nec molestie purus. Nunc ut felis maximus, mattis ante in, mollis eros. Quisque laoreet rhoncus auctor. Donec at consequat ipsum, id dignissim justo. Sed scelerisque ligula a gravida tempus. Donec et venenatis massa. Cras et purus a erat fringilla porta a quis lorem. Donec maximus dui nec imperdiet suscipit. Donec lobortis velit id massa mollis, id cursus est porttitor. Praesent accumsan ornare ante. Nulla facilisi.\"', '2023-06-20', '2023-06-21 12:16:20', '2023-06-26 22:39:46', '701_supermoto.png'),
(2, 'Otro Articulo 2', 'Seguridad 1', 'Carla', '\"Nunc eleifend tellus non diam scelerisque fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus arcu urna, fringilla quis viverra et, varius et mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse lobortis maximus sapien, et rhoncus velit consectetur a. Etiam volutpat nulla turpis, ac dignissim turpis fringilla vel. Phasellus at nulla magna. Aenean pellentesque urna dolor, posuere maximus nisl fermentum sit amet. Nam porta lorem leo, ac lacinia magna laoreet quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut ultricies lorem. Integer dolor ligula, rutrum id gravida eu, ornare nec nulla. Phasellus felis sapien, egestas ut tristique non, dignissim a velit. Proin volutpat turpis nunc, et condimentum purus ultrices vel.\"', '2023-07-04', '2023-06-21 20:27:09', '2023-07-04 15:28:59', 'CB_650_R.png'),
(3, 'Accesorios', 'Accesorio', 'Pepe', 'Nunc iaculis ut arcu at iaculis. Ut hendrerit bibendum congue. Quisque pulvinar tortor eu neque condimentum lacinia. Sed ac lorem nec nisl commodo sollicitudin. Cras facilisis, nulla fermentum venenatis interdum, est ex gravida lacus, vel dignissim metus quam id ipsum. Vestibulum euismod ultricies dui vel elementum. In hac habitasse platea dictumst. In velit enim, porttitor condimentum iaculis sit amet, viverra a enim. Maecenas iaculis ante sit amet velit varius elementum. Vestibulum pellentesque mollis velit in tincidunt. Maecenas gravida augue id justo ullamcorper malesuada. Aliquam commodo augue est, vitae semper nisi dictum eleifend.', '2023-06-21', '2023-06-22 08:26:55', '2023-07-04 16:17:02', 'R_1250_GS_adventure.png'),
(44, 'Mas motos', 'Prueba 4', 'Admin', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.\"', '2023-06-26', '2023-06-26 20:47:27', '2023-06-27 10:57:29', 'versys_1000.png'),
(45, 'Articulo de prueba 2', 'Prueba 2', 'Admin', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.\"', '2023-06-26', '2023-06-26 20:57:00', '2023-06-27 10:56:42', 'mt_07.png'),
(48, 'DIAVEL 2023', '¡Motor V4 y 13 kg menos!', 'Admin', 'La Ducati Diavel V4 llega al mercado 2023 como un modelo completamente nuevo, aunque basándose en las generaciones anteriores de Ducati Diavel. \r\nLa novedad destacable es su nuevo motor V4 Granturismo, heredado de la Ducati Multistrada V4 y a su vez esta de la primigenia Ducati Panigale V4.\r\n\r\nCon este nuevo motor Ducati lanza una nueva generación de Ducati Diavel V4, más potente, más ligera, más tecnológica, más eficiente y más moderna. \r\nAdemás Ducati ha realizado un arduo esfuerzo en mejorar no solo sus cifras sobre el papel, sino las sensaciones sobre ella y el comportamiento \r\nen carretera, siendo ahora mucho más ágil y dinámica sin perder su característica estabilidad.\r\n\r\nprotagonista es el motor V4 Granturismo de 1.158 cc, ya conocido en la Multistrada V4, con una potencia de casi 168 cv y un par motor de 125 nm. \r\nCuenta con cigüeñal contrarrotante, secuencia de encendido Twin Pulse (similar a un bicilíndrico): 0°, 90°, 290° y 380°, muñequillas caladas a 70° \r\ny unos sorprendentes intervalos de mantenimiento: 60.000 ajuste/reglaje de válvulas, y 30.000 km para aceite y filtro. Además cuenta con un sistema \r\nde desactivación de la bancada posterior para reducir consumo (6,4 L/100km) y emisiones, permitiendo que el motor funcione como un bicilíndrico o \r\ncomo un tetracilíndrico con una transición imperceptible por su gradualidad. Este motor le permite acelerar de 0 a 100 km/h en menos de 3\" segundos.\r\n\r\nEl chasis de la Ducati Diavel V4 2023 es un diseño tubular similar al de la Diavel 1260, solo que con un ahorro en el peso total del conjunto de \r\n-13 kg (5kg menos en el motor y 8kg menos en la carrocería-chasis). En el apartado de las suspensiones cuenta con una horquilla invertida de 50 mm \r\nde diámetro regulable en hidráulico y precarga, y un amortiguador trasero (también completamente regulable) en cantilever, 15 mm más largo que las \r\ngeneraciones anteriores de Diavel.\r\n\r\nLos frenos de la Ducati Diavel V4 2023 vienen como no podía ser menos firmados por Brembo con su pinza más eficaz, la Brembo Stylema, por supuesto \r\nde anclaje radial y mordiendo dos discos de 330 mm, lo que le permite decelerar hasta 11,5 m/s2.\r\n\r\nLos neumáticos de serie son los Pirelli Diablo Rosso III en medidas 120/70-17 para el tren delantero y, ojo ahí, 240/45-17.\r\n\r\nLa ergonomía de la Diavel V4 2023 permite un fácil acceso al suelo aunque con una altura del asiento al suelo ligeramente más alta (790 mm) que las \r\ngeneraciones anteriores (780 mm), pero por otro lado cuenta con una toma de mandos (manillar) 20 mm mas cercana.\r\n\r\nPor último la electrónica de la Ducati Diavel V4 2023 no podía ser menos y cuenta con toda la tecnología y el paquete electrónico más completo y \r\navanzado de la marca hasta la fecha. Cuenta con plataforma de medición inercial IMU de 6 ejes, acelerador electrónico, cuatro modos de conducción \r\n(Sport, Touring, Urban y el nuevo Wet para lluvia). En los modos de conducción encontramos de forma inherente los diferentes sistemas de ayuda a la \r\nconducción como el Ducati Traction Control (control de tracción) con versión cornering, ABS con versión cornering y Ducati Wheelie Control (anti-caballito).\r\n También cuenta con cambio semi-automático de subida y bajada de marcha, control de crucero, una instrumentación TFT a color de 5\" pulgadas, piñas \r\nretroiluminadas y conectividad Smartphone y sistema de navegación Turn-by (accesorio) través de la app Ducati Link.\r\n\r\nLa Ducati Diavel V4 2023 está disponible en dos colores:\r\n\r\nDucati Red y\r\nThrilling Black', '2023-07-04', '2023-06-27 07:47:07', '2023-07-04 15:31:43', 'SPIN_DIAVEL_V4_RED.webp'),
(51, 'Ventajas de conducir moto', 'O no...', 'Admin', 'Mauris lobortis, ex sed tincidunt dignissim, ex lectus consectetur massa, nec tincidunt erat dolor vitae leo. Vivamus nibh velit, aliquet sed fringilla eget, euismod in sapien. Aenean interdum, eros ut vehicula vulputate, erat dui luctus turpis, in semper nibh leo vitae leo. Maecenas sed placerat enim. Morbi pellentesque ultrices venenatis. Etiam laoreet in lorem sit amet fermentum. Ut dignissim efficitur tortor at rutrum. Aliquam tempus magna non pretium vehicula.', '2023-07-04', '2023-07-04 15:19:44', '2023-07-04 15:20:38', 'multistrada_1260_S.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(11, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2023_06_09_180049_create_sessions_table', 1),
(15, '2023_06_09_191815_products', 1),
(16, '2023_06_20_122612_create_articles_table', 1),
(17, '2023_06_26_115630_add_url_images_to_articles', 2),
(18, '2023_06_29_183913_create_permission_tables', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 13),
(3, 'App\\Models\\User', 14),
(3, 'App\\Models\\User', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `cylinder_capacity` varchar(255) DEFAULT NULL,
  `power` varchar(255) DEFAULT NULL,
  `transmission` varchar(255) DEFAULT NULL,
  `cycle` varchar(255) DEFAULT NULL,
  `cooling` varchar(255) DEFAULT NULL,
  `cylinders` varchar(255) DEFAULT NULL,
  `start` varchar(255) DEFAULT NULL,
  `secondary_transmission` varchar(255) DEFAULT NULL,
  `wheelbase` varchar(255) DEFAULT NULL,
  `front_brake` varchar(255) DEFAULT NULL,
  `rear_brake` varchar(255) DEFAULT NULL,
  `seat_height` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `tank_capacity` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `brand`, `model`, `year`, `price`, `cylinder_capacity`, `power`, `transmission`, `cycle`, `cooling`, `cylinders`, `start`, `secondary_transmission`, `wheelbase`, `front_brake`, `rear_brake`, `seat_height`, `weight`, `tank_capacity`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'DUCATI', 'Multistrada 1260 S', '2021', '20.590,00 €', '1.262 cc', '158 cv', 'Manual', '4 T', 'Liquida', '2', 'Electrico', 'Cadena', '1585', 'Doble disco', 'Disco', '825', '212kg', '20 litros', 'multistrada_1260_s.png', NULL, '2023-06-27 07:19:59'),
(2, 'DUCATI', 'Multistrada 1260 Pikes peak', '2021', '24.990,00 €', '1.262 cc', '158 cv', 'Manual', '4 T', 'Liquida', '2', 'Electrico', 'Cadena', '1585', 'Doble disco', 'Disco', '825', '206kg', '20 litros', 'multistrada_1260_pikes_peak.png', NULL, NULL),
(3, 'DUCATI', 'Multistrada V2', '2021', '14.900,00 €', '937 cc', '937 cv', 'Manual', '4 T', 'Liquida', '2', 'Electrico', 'Cadena', '1594', 'Doble disco', 'Disco', '830', '199kg', '20 litros', 'multistrada_v2.png', NULL, NULL),
(4, 'KAWASAKI', 'Versys 1000', '2023', '14.299,00 €', '1043 cc', '120 cv', 'Manual', '4 T', 'Liquida', '4', 'Electrico', 'Cadena', '1520', 'Disco', 'Disco', '840', '232kg', '21 litros', 'versys_1000.png', NULL, '2023-07-04 11:29:34'),
(5, 'KAWASAKI', 'Versys 650 SE', '2022', '8.799,00 €', '649 cc', '69 cv', 'Manual', '4 T', 'Liquida', '2', 'Electrico', 'Cadena', '1415', 'Doble disco', 'Disco', '840', '216kg', '21 litros', 'versys_650_se.png', NULL, '2023-06-25 17:42:49'),
(6, 'KAWASAKI', 'Ninja H2 R', '2022', '55.000,00 €', '998 cc', '326 cv', 'Manual', '4 T', 'Liquida', '4', 'Electrico', 'Cadena de retenes', '1450', 'Doble disco', 'Disco', '830', '199kg', '17 litros', 'ninja_h2_r.png', NULL, '2023-06-25 16:10:11'),
(7, 'BMW', 'F 850 GS', '2022', '12.350,00 €', '853 cc', '95 cv', 'Manual', '4 T', 'Liquida', '2', 'Electrico', 'Cadena', '1593', 'Doble disco', 'Disco', '860', '214kg', '15 litros', 'f_850_gs.png', NULL, '2023-06-29 15:31:20'),
(8, 'BMW', 'S 1000 XR', '2022', '17.950,00 €', '999 cc', '165 cv', 'Manual', '4 T', 'Liquida', '4', 'Electrico', 'Cadena', '1552', 'Doble disco', 'Disco', '840', '205 kg', '20 litros', 's_1000_xr.png', NULL, '2023-06-25 16:57:04'),
(9, 'BMW', 'R 1250 GS Adventure', '2023', '19.950,00 €', '1.254 cc', '136 cv', 'Manual', '4 T', 'Liquida', '2', 'Electrico', 'Cadena', '1504', 'Doble disco', 'Disco', '890', '238 kg', '30 litros', 'r_1250_gs_adventure.png', NULL, NULL),
(10, 'YAMAHA', 'Tenere 700 World Raid', '2023', '13.099,00 €', '689 cc', '73 cv', 'Manual', '4 T', 'Liquida', '2', 'Electrico', 'Cadena', '1595', 'Doble disco', 'Disco', '890', '203 kg', '23 litros', 'tenere_700_world_raid.png', NULL, '2023-06-25 16:11:00'),
(11, 'YAMAHA', 'XSR900', '2023', '11.999,00 €', '889 cc', '119 cv', 'Manual', '4 T', 'Liquida', '3', 'Electrico', 'Cadena', '1495', 'Doble disco', 'Disco', '810', '179 kg', '14 litros', 'xsr900.png', NULL, '2023-06-29 10:48:15'),
(12, 'YAMAHA', 'Mt 07', '2023', '7.499,00 €', '689 cc', '73 cv', 'Manual', '4 T', 'Liquida', '2', 'Electrico', 'Cadena', '1400', 'Doble disco', 'Disco', '805', '170 kg', '14 litros', 'mt_07.png', NULL, NULL),
(13, 'HONDA', 'CB 750 Hornet', '2022', '7.950,00 €', '755 cc', '92 cv', 'Manual', '4 T', 'Liquida', '2', 'Electrico', 'Cadena', '1520', 'Doble disco', 'Disco', '795', '190 kg', '15 litros', 'cb_750_hornet.png', NULL, NULL),
(14, 'HONDA', 'NC 750 S', '2022', '7.300,00 €', '745 cc', '55 cv', 'Manual', '4 T', 'Liquida', '2', 'Electrico', 'Cadena', '1520', 'Disco', 'Disco', '790', '217 kg', '14 litros', 'nc_750_s.png', NULL, '2023-06-25 17:41:31'),
(15, 'HONDA', 'CB 650 R', '2022', '8.650,00 €', '649 cc', '95 cv', 'Manual', '4 T', 'Liquida', '4', 'Electrico', 'Cadena', '1450', 'Doble disco', 'Disco', '810', '187 kg', '15 litros', 'cb_650_r.png', NULL, NULL),
(16, 'HUSQVARNA', '701 Supermoto', '2022', '10.749,00 €', '692 cc', '74 cv', 'Manual', '4 T', 'Liquida', '1', 'Electrico', 'Cadena', '1480', 'Doble', 'Disco', '890', '145 Kg', '13 litros', '701_supermoto.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'writer', 'create_articles|edit_articles', '2023-06-29 17:16:54', '2023-06-29 17:16:54'),
(2, 'admin', 'web', '2023-06-29 17:17:40', '2023-06-29 17:17:40'),
(3, 'client', 'web', '2023-06-29 17:28:49', '2023-06-29 17:28:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5f5SLP0JYdPg89RRqrMHQtNXo117tT8BavPbvS93', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYkFuR28xUXR3TTNKVzlTdDByaHZpWEdCcVMyMnZyTFNjTjFVcXc3MCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM4OiJodHRwOi8vd3d3LnBhcm1vdG9yLXByby5jb20vY29tcGFyYXRvciI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkcy5sZkZyY2NZakVOWnB2cDlGNkJhTzl6TnRxUEFEdC5Ma0d4QkxoZ1pqbW1lN1pKTXh0a0siO30=', 1688498931);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Alex', 'acostaalejandro223@gmail.com', NULL, '$2y$10$s.lfFrccYjENZpvp9F6BaO9zNtqPADt.LkGxBLhgZjmme7ZJMxtkK', NULL, NULL, NULL, 'moHFKCjd2jdMzm8wQwxvK9IpY6MP4zceKdpnijLikyC0X6AZC9qZdiK57SWZ', NULL, NULL, '2023-06-21 10:12:55', '2023-06-29 19:48:19'),
(2, 'Pedro', 'pedroperez@gmail.com', NULL, '$2y$10$kjpFtVGPVRvEXLRfjgHPEuOvVXIBeK2tlhALvgC8NJxiHGx68Xq9C', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 10:20:20', '2023-06-21 10:20:20'),
(3, 'Ana', 'Ana@gmail.com', NULL, '$2y$10$k6pXTU5PYsWrxNcYY1YiHuacRY/fSReFW.pcBIrCyICDYcagajlOy', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 10:25:40', '2023-06-21 10:25:40'),
(4, 'Patricia', 'Patri@hotmail.com', NULL, '$2y$10$6xHLJAM4wmHPHJJ5z2xcyO8TmVb1slPyZAulyfju6.rFX.86jFqsG', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 10:27:12', '2023-06-21 10:27:12'),
(5, 'Andres', 'Andre123@hotmail.com', NULL, '$2y$10$pYpI4j9biYp/Be0KHl8EbuLkdWzmFAtP7E34TrFL3wgUvVKvVE7dK', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 10:29:34', '2023-06-21 10:30:28'),
(6, 'Maria Rodriguez', 'mariro@gmail.com', NULL, '$2y$10$EPifzN0N15db2/P9w84rSO.JiY6LQStoWHKx3BB7rtqOWraSeaCsa', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 10:33:48', '2023-06-21 10:33:48'),
(7, 'Antonio', 'antonio@gmail.com', NULL, '$2y$10$SPAd.EEB.1kN0f75QznVkuqEssd3CmUD.3eX9cbJReLPtVK9cgnVW', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 07:48:41', '2023-06-22 07:48:41'),
(8, 'Vanesa', 'Vane@gmail.com', NULL, '$2y$10$KKyiYaOI1BnoKXfBdI2MV.MwzaU9Z7/NKxf870QIKecVrRaGZMTXS', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 07:49:33', '2023-06-27 07:19:10'),
(9, 'Manuel', 'Manuel123@gmail.com', NULL, '$2y$10$8CI7agUkD53The2z2hfsZuhqcYE250ik1DOHWBsqQdWAz1il2sdx6', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 07:50:21', '2023-06-22 07:50:21'),
(10, 'Marcos', 'marcos@gmail.com', NULL, '$2y$10$AzA/4BO6v7XIBJFxBPdHaug8hpafffZmOlNnqNA.tFTNImb551uVm', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 07:51:28', '2023-06-22 07:51:28'),
(11, 'Miguel', 'Miguel321@hotmail.com', NULL, '$2y$10$ehRxkw48Bcf.hGDwG3CnYeeqsHxmNOjV8LWazO8U9ghrBS0svgjsS', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 07:52:38', '2023-06-22 07:52:38'),
(12, 'Ricky', 'ricardo@gmail.com', NULL, '$2y$10$jvd7ywUi8tFpW2KDx4JKYeuxThqLPqhciHuPN5UHCp22ZQ6l1IBZ6', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-29 17:44:56', '2023-06-29 17:44:56'),
(13, 'pepe', 'pepelopez@gmail.com', NULL, '$2y$10$H1PEi50tjqlttyBcHS1J9.aDQ.CwoXGZiPZpVK8UjfyNYLNvXUG/a', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-29 18:20:05', '2023-06-29 18:20:05'),
(14, 'newuser', 'new@gmail.com', NULL, '$2y$10$fE3ViAYy175Hsj.AGf4y7uzY7aqbYUjr1EHQnORUu/PALL5Mm/pzG', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-30 11:39:04', '2023-06-30 11:39:04'),
(15, 'Martin', 'martin123@gmail.com', NULL, '$2y$10$EwnoSxgjboXyW8cRLX8y/Oa4ujIXzPRvL4XPb1xXEV2yKMLZN0IQW', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-04 10:14:50', '2023-07-04 10:15:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image_url` (`image_url`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
