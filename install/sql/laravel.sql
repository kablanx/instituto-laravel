-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-03-2020 a las 17:54:43
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel`
--
CREATE DATABASE IF NOT EXISTS `laravel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `laravel`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

DROP TABLE IF EXISTS `incidencias`;
CREATE TABLE IF NOT EXISTS `incidencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `aula` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `gravedad` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id`, `id_usuario`, `aula`, `descripcion`, `gravedad`, `updated_at`, `created_at`) VALUES
(1, 1, 1, '23', 'Leve', '2020-03-02 22:17:58', '2020-03-01 04:48:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`id`, `id_usuario`, `descripcion`, `created_at`) VALUES
(1, 1, 'Se ha logueado', '2020-03-03 00:00:00'),
(2, 1, 'Se ha logueado', '2020-03-03 00:00:00'),
(3, 1, 'Se ha logueado', '2020-03-03 00:00:00'),
(4, 1, 'Se ha logueado', '2020-03-03 00:00:00'),
(5, 1, 'Se ha logueado', '2020-03-03 00:00:00'),
(6, 1, 'Se ha logueado', '2020-03-03 00:14:11'),
(7, 1, 'Se ha logueado', '2020-03-03 00:15:24'),
(8, 1, 'Se ha logueado', '2020-03-03 00:15:39'),
(9, 1, 'Se ha logueado', '2020-03-03 00:18:31'),
(10, 1, 'Se ha logueado', '2020-03-03 00:18:34'),
(11, 1, 'Se ha logueado', '2020-03-03 00:18:42'),
(12, 1, 'Se ha logueado', '2020-03-03 00:18:43'),
(13, 1, 'Se ha logueado', '2020-03-03 00:18:43'),
(14, 1, 'Se ha logueado', '2020-03-03 00:19:28'),
(15, 1, 'Se ha logueado', '2020-03-03 00:19:36'),
(16, 1, 'Se ha logueado', '2020-03-03 00:20:59'),
(17, 1, 'Se ha logueado', '2020-03-03 00:24:00'),
(18, 1, 'Se ha logueado', '2020-03-03 00:25:44'),
(19, 1, 'Se ha logueado', '2020-03-03 00:25:58'),
(20, 1, 'Se ha logueado', '2020-03-03 00:26:02'),
(21, 4, 'Ha editado un usuario', '2020-03-03 00:29:47'),
(22, 1, 'Ha editado un usuario', '2020-03-03 00:30:37'),
(23, 1, 'Ha eliminado un usuario', '2020-03-03 00:31:51'),
(24, 1, 'Ha creado una incidencia', '2020-03-03 00:40:49'),
(25, 1, 'Ha editado una incidencia', '2020-03-03 00:41:03'),
(26, 1, 'Ha eliminado una incidencia', '2020-03-03 00:41:09'),
(27, 1, 'Ha creado una incidencia', '2020-03-03 00:42:04'),
(28, 1, 'Ha eliminado una incidencia', '2020-03-03 00:42:27'),
(29, 1, 'Ha creado una incidencia', '2020-03-03 02:06:39'),
(30, 1, 'Ha creado una incidencia', '2020-03-03 02:06:53'),
(31, 6, 'Se ha logueado', '2020-03-03 02:11:55'),
(32, 6, 'Se ha logueado', '2020-03-03 02:15:07'),
(33, 6, 'Se ha logueado', '2020-03-03 02:15:21'),
(34, 6, 'Se ha logueado', '2020-03-03 02:17:32'),
(35, 6, 'Se ha logueado', '2020-03-03 02:18:09'),
(36, 1, 'Se ha logueado', '2020-03-03 02:21:45'),
(37, 1, 'Ha eliminado una incidencia', '2020-03-03 02:32:34'),
(38, 1, 'Ha eliminado una incidencia', '2020-03-03 02:32:43'),
(39, 1, 'Se ha logueado', '2020-03-04 00:20:25'),
(40, 1, 'Se ha logueado', '2020-03-04 00:21:45'),
(41, 4, 'Se ha logueado', '2020-03-04 01:13:41'),
(42, 4, 'Se ha logueado', '2020-03-04 01:26:18'),
(43, 4, 'Ha enviado un mensaje', '2020-03-04 02:07:49'),
(44, 4, 'Ha enviado un mensaje', '2020-03-04 02:08:15'),
(45, 4, 'Ha eliminado un mensaje', '2020-03-04 02:15:39'),
(46, 4, 'Se ha logueado', '2020-03-04 02:31:27'),
(47, 4, 'Ha eliminado un mensaje', '2020-03-04 03:26:56'),
(48, 4, 'Se ha logueado', '2020-03-04 03:27:50'),
(49, 4, 'Se ha logueado', '2020-03-04 03:28:03'),
(50, 4, 'Ha enviado un mensaje', '2020-03-04 05:02:42'),
(51, 7, 'Se ha logueado', '2020-03-04 06:04:30'),
(52, 4, 'Se ha logueado', '2020-03-04 06:08:45'),
(53, 4, 'Ha eliminado un usuario', '2020-03-04 06:08:52'),
(54, 4, 'Ha eliminado un usuario', '2020-03-04 06:08:55'),
(55, 8, 'Se ha logueado', '2020-03-04 06:09:08'),
(56, 4, 'Se ha logueado', '2020-03-04 06:54:13'),
(57, 14, 'Se ha logueado', '2020-03-04 06:57:26'),
(58, 15, 'Se ha logueado', '2020-03-04 07:01:22'),
(59, 16, 'Se ha logueado', '2020-03-04 07:03:27'),
(60, 17, 'Se ha logueado', '2020-03-04 07:03:57'),
(61, 18, 'Se ha logueado', '2020-03-04 07:04:23'),
(62, 19, 'Se ha logueado', '2020-03-04 07:05:31'),
(63, 19, 'Se ha logueado', '2020-03-04 07:07:18'),
(64, 20, 'Se ha logueado', '2020-03-04 17:13:17'),
(65, 21, 'Se ha logueado', '2020-03-04 17:14:01'),
(66, 22, 'Se ha logueado', '2020-03-04 17:16:23'),
(67, 23, 'Se ha logueado', '2020-03-04 17:20:56'),
(68, 23, 'Se ha logueado', '2020-03-04 17:23:25'),
(69, 23, 'Se ha logueado', '2020-03-04 17:23:26'),
(70, 20, 'Se ha logueado', '2020-03-04 17:25:21'),
(71, 20, 'Ha enviado un mensaje', '2020-03-04 17:25:35'),
(72, 20, 'Ha enviado un mensaje', '2020-03-04 17:27:00'),
(73, 20, 'Ha enviado un mensaje', '2020-03-04 17:27:24'),
(74, 20, 'Ha eliminado un mensaje', '2020-03-04 17:27:46'),
(75, 20, 'Se ha logueado', '2020-03-04 17:49:00'),
(76, 20, 'Se ha logueado', '2020-03-04 17:49:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario_e` int(11) NOT NULL,
  `id_usuario_r` int(11) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `id_usuario_e`, `id_usuario_r`, `texto`, `created_at`, `updated_at`) VALUES
(1, 4, 4, '1', '2020-03-04 02:07:32', '2020-03-04 02:07:32'),
(5, 4, 6, 'hola mirkito, estoy funcionando ;)', '2020-03-04 05:02:42', '2020-03-04 05:02:42'),
(4, 6, 4, 'hola', '2020-03-04 02:07:49', '2020-03-04 02:07:49'),
(6, 20, 20, 'hola', '2020-03-04 17:25:35', '2020-03-04 17:25:35'),
(8, 20, 23, 'hola 3', '2020-03-04 17:27:24', '2020-03-04 17:27:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_04_03_create_table_mensajes', 1),
(4, '2020_04_03_create_table_logs', 1),
(5, '2020_04_03_create_table_incidencias', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sebastianperezreal@gmail.com', '$2y$10$aQ0Ch82v/SsCsdIBjlxl..uXjpfDXzFsSTiEkqlLibHl1NR/ymhoe', '2020-03-04 16:31:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rol` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `usuario`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `rol`, `imagen`, `email_verified_at`) VALUES
(20, 'Sebinha', 'kablanx23', 'sebastianperezreal@gmail.com', '$2y$10$OIW3EeZ5o8W9GBbVCJKOc.qq6zsJT89yAZcQWsBZeIw6OU.QRnVJ6', 'nNlseLHWwpZlsNCBhGs9pjJKIGfMAnI86nhdUfFtFwlvPxhxNg6v8dQOBw1E', '2020-03-04 16:13:17', '2020-03-04 16:13:17', 'administrador', '1583027971bulbasaur.jpg', '1970-01-01 01:02:03'),
(23, 'hola', 'kablanx123', 'mirkitopokemon@gmail.com', '$2y$10$DcRi27V.r8nV35ityw76ZuvHh0JbR.HkWcciyIRr9f4hEOWjsHFlS', 'HrLhkOCjxHYrYWEiY9GaxG37Pt6TCv3jiq51bDyWigZTZewJgVlqJqgOKfg9', '2020-03-04 16:20:56', '2020-03-04 16:23:44', 'usuario', '1583339024paleta.png', '1970-01-01 01:02:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
