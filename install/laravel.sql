-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-03-2020 a las 23:17:06
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.4.0

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
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

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
(38, 1, 'Ha eliminado una incidencia', '2020-03-03 02:32:43');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
('sebastianperezreal@gmail.com', '$2y$10$NJ1UoVZ3itw7YJ8ihiJ2MeXMb6DgbIZBuiVAt7isJwp.xXu7EWA1a', '2020-03-02 01:57:23');

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `usuario`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `rol`, `imagen`) VALUES
(1, 'Sebinha23', 'kablanxito23', 'sebastianperezreal@gmail.com', '$2y$10$CwAV8.v1JvhzD4hGYLkkbOJ4FHS71/i5PtWsoKsF.28n3Xc4diQKm', 'LjjPPG9CNm1vQWo7yvTvT6MPhQETZha9PD8I8YcfIHYeE48TqW6PIJQdtRHb', '2020-02-27 23:38:18', '2020-03-02 16:57:22', 'administrador', '1583027971bulbasaur.jpg'),
(4, 'mirkito', 'mirkito23', 'mirkohijo@gmail.com', '$2y$10$lB059ra0V2efu1a48gmrV..FXBQUDqy62jl7jvDxEyC8.5IyWBc5S', 'Kzh0204J2FzcAmR03PxjlH4dJJwrfqGqcRxTIfOfBkJJCUPzlzWtGm2nDI7S', '2020-03-02 17:19:07', '2020-03-02 23:30:37', 'administrador', '1583027971bulbasaur.jpg'),
(6, '123', 'comunica', '23sebastianperezreal@gmail.com', '$2y$10$ynCtd80FSDmOrNdg9LWe/O/istgypYQjRMkdTLCee62MlIHbzo9Te', 'GA82p3G4GetZS88agVQMstlvLDq9JMcl58d0d6cuBzb3T9TajwHGpw3U6ScQ', '2020-03-03 01:11:55', '2020-03-03 01:20:26', 'usuario', '1583198426bulbasaur.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
