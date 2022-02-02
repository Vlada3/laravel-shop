-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 24 2022 г., 01:30
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Футер', 'futer', '2022-01-23 22:20:19', '2022-01-23 22:20:19'),
(2, 'Кулирка', 'kulirka', '2022-01-23 22:20:19', '2022-01-23 22:20:19'),
(3, 'Кашкорсе', 'kashkorse', '2022-01-23 22:20:19', '2022-01-23 22:20:19'),
(4, 'Фурнитура', 'furnitura', '2022-01-23 22:20:19', '2022-01-23 22:20:19');


-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `status_id` int UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double UNSIGNED NOT NULL DEFAULT '0',
  `old_price` double UNSIGNED NOT NULL DEFAULT '0',
  `hit` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `sale` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `new` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `content`, `category_id`, `status_id`, `img`, `price`, `old_price`, `hit`, `sale`, `new`, `created_at`, `updated_at`) VALUES
(1, 'Авокадо', 'avokado', '', 2, 1, NULL, 850, 0, 1, 0, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(2, 'Абрикос', 'abrikos', '', 1, 1, NULL, 1050, 0, 0, 0, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(3, 'Божьи коровки', 'bozyakorovka', '', 2, 1, NULL, 850, 0, 0, 0, 1, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(4, 'Тесьма киперная', 'braid', '', 4, 1, NULL, 15, 0, 0, 0, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(5, 'Читос', 'cheetos', '', 1, 1, NULL, 850, 0, 0, 0, 1, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(6, 'Фламинго', 'flamingo', '', 2, 1, NULL, 750, 900, 1, 1, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(7, 'Шнур плоский', 'flat_cord', '', 4, 1, NULL, 18, 0, 0, 0, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(8, 'Салатовый', 'green', '', 2, 1, NULL, 550, 0, 0, 0, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(9, 'Уют', 'uyt', '', 1, 1, NULL, 860, 0, 0, 0, 1, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(10, 'Хлопок', 'hlopok', '', 2, 2, NULL, 750, 0, 1, 1, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(11, 'Светло зеленый', 'kashkorse_light_green', '', 3, 1, NULL, 600, 0, 0, 0, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(12, 'Краски', 'kraski', '', 1, 1, NULL, 1390, 0, 0, 0, 1, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(13, 'Лимонный', 'limon', '', 1, 1, NULL, 850, 0, 1, 0, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(14, 'Пчелки', 'bees', '', 2, 1, NULL, 260, 400, 0, 1, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(15, 'Вишенки', 'cherry', '', 4, 1, NULL, 770, 900, 0, 1, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(16, 'Снеговик', 'snegovik', '', 1, 2, NULL, 890, 0, 1, 1, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(17, 'Снежинки', 'snezinki', '', 1, 1, NULL, 750, 900, 1, 1, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(18, 'Пыльная роза', 'rose', '', 1, 1, NULL, 800, 900, 0, 1, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(19, 'Том и Джерри', 'tomjerry', '', 2, 2, NULL, 790, 0, 0, 1, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(20, 'В горошек', 'vgoroshek', '', 2, 1, NULL, 850, 0, 1, 0, 0, '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(21, 'Зверята', 'zveryata', '', 1, 1, NULL, 210, 0, 0, 0, 1, '2022-01-23 19:20:19', '2022-01-23 19:20:19');

-- --------------------------------------------------------

--
-- Структура таблицы `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statuses`
--

INSERT INTO `statuses` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'В наличии', '2022-01-23 19:20:19', '2022-01-23 19:20:19'),
(2, 'Нет в наличии', '2022-01-23 19:20:19', '2022-01-23 19:20:19');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
