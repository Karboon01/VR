-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 23 2024 г., 19:37
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `VR`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about_us_cards`
--

CREATE TABLE `about_us_cards` (
  `id` bigint UNSIGNED NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `about_us_cards`
--

INSERT INTO `about_us_cards` (`id`, `header`, `old_header`, `text`, `old_text`, `background`, `old_background`, `created_at`, `updated_at`) VALUES
(1, 'WE?', 'WE?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e', '0752db670031d2c26e881c2497d1c8c9_1.png', '0752db670031d2c26e881c2497d1c8c9_1.png', NULL, '2024-01-23 13:27:29'),
(2, 'History', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem', NULL, '0752db670031d2c26e881c2497d1c8c9_1.png', NULL, NULL, NULL),
(3, 'WE?', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e', NULL, 'Introducing_Apple_Vision_Pro_(getmp3.pro).mp4', NULL, NULL, NULL),
(4, 'History', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem', NULL, 'Introducing_Apple_Vision_Pro_(getmp3.pro).mp4', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `about_us_text`
--

CREATE TABLE `about_us_text` (
  `id` bigint UNSIGNED NOT NULL,
  `text` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_text` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `about_us_text`
--

INSERT INTO `about_us_text` (`id`, `text`, `old_text`, `created_at`, `updated_at`) VALUES
(1, 'Need more leads. Want to grow but don’t know how. Not getting the ROAS you once were or need a new strategy. Sound familiar? You’re not alone. We work with CEOs, GMs, CMOs and Marketing Managers all over Australia solving these exact problems with digital marketing solutions.', 'Need more leads. Want to grow but don’t know how. Not getting the ROAS you once were or need a new strategy. Sound familiar? You’re not alone. We work with CEOs, GMs, CMOs and Marketing Managers all over Australia solving these exact problems with digital marketing solutions.', NULL, '2024-01-23 13:34:55'),
(2, 'Need more leads. Want to grow but don’t know how. Not getting the ROAS you once were or need a new strategy. Sound familiar? You’re not alone. We work with CEOs, GMs, CMOs and Marketing Managers all over Australia solving these exact problems with digital marketing solutions.', NULL, NULL, NULL),
(3, 'Need more leads. Want to grow but don’t know how. Not getting the ROAS you once were or need a new strategy. Sound familiar? You’re not alone. We work with CEOs, GMs, CMOs and Marketing Managers all over Australia solving these exact problems with digital marketing solutions.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `banner`
--

CREATE TABLE `banner` (
  `id` int UNSIGNED NOT NULL,
  `heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `old_heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `background` varchar(255) NOT NULL,
  `old_background` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `page` varchar(255) NOT NULL,
  `old_page` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `banner`
--

INSERT INTO `banner` (`id`, `heading`, `old_heading`, `background`, `old_background`, `page`, `old_page`, `created_at`, `updated_at`) VALUES
(1, 'TIME CLUB', 'TIME CLUB', 'Introducing_Apple_Vision_Pro_(getmp3.pro).mp4', 'Introducing_Apple_Vision_Pro_(getmp3.pro).mp4', 'main', 'main', NULL, '2024-01-23 11:03:04'),
(2, 'ABOUT US', NULL, '1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png', NULL, 'about_us', NULL, NULL, NULL),
(3, 'GAMES1', 'GAMES', '1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png', '1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png', 'games', 'games', NULL, '2024-01-23 11:01:34'),
(4, 'GALLERY', NULL, '1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png', NULL, 'gallery', NULL, NULL, NULL),
(5, 'CONTACT', NULL, '1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png', NULL, 'contact', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `change_log`
--

CREATE TABLE `change_log` (
  `id` int NOT NULL,
  `name` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `table` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `change_log`
--

INSERT INTO `change_log` (`id`, `name`, `table`, `datetime`) VALUES
(1, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">TEXT</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">Board Games</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">Board Games</td></tr>', 'MAIN - HEADER - EDIT', '2024-01-22 12:29:55'),
(2, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">HIGHLANDS</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">HIGHLANDS</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">LOCATION</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">SCOTLAND</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">SCOTLAND</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">DESCRIPTION</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">The montains are calling</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">The montains are calling</td></tr>', 'MAIN - CARD 1 - EDIT', '2024-01-22 12:44:03'),
(3, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">HIGHLANDS</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">HIGHLANDS1</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">LOCATION</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">SCOTLAND</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">SCOTLAND1</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">DESCRIPTION</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">The montains are calling</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">The montains are calling1</td></tr>', 'MAIN - CARD 1 - EDIT', '2024-01-22 12:44:16'),
(4, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">VIDEO</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">https://www.youtube.com/embed/TX9qSaGXFyg</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">https://www.youtube.com/embed/TX9qSaGXFyg1</td></tr>', 'MAIN - CARDS 2 - EDIT', '2024-01-22 12:49:14'),
(5, '<tr class=\"flex gap-5\"><td>NAME</td><td>123</td><td> => </td><td>123</td></tr>\n            <tr class=\"flex gap-5\"><td>E-MAIL</td><td>pavelata128@gmail.com</td><td> => </td><td>pavelata128@gmail.com</td></tr>\n            <tr class=\"flex gap-5\"><td>ADMIN</td><td>1</td><td> => </td><td>1</td></tr>\n            <tr class=\"flex gap-5\"><td>VIP</td><td>0</td><td> => </td><td>1</td></tr>', 'USER - EDIT', '2024-01-22 13:01:06'),
(6, '<tr class=\"flex gap-5\"><td>NAME</td><td>123</td><td> => </td><td>123</td></tr>\n            <tr class=\"flex gap-5\"><td>E-MAIL</td><td>pavelata128@gmail.com</td><td> => </td><td>pavelata128@gmail.com</td></tr>\n            <tr class=\"flex gap-5\"><td>ADMIN</td><td>1</td><td> => </td><td>1</td></tr>\n            <tr class=\"flex gap-5\"><td>VIP</td><td>1</td><td> => </td><td>0</td></tr>', 'USER - EDIT', '2024-01-22 15:41:55'),
(7, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">VIDEO</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">https://www.youtube.com/embed/TX9qSaGXFyg1</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">https://www.youtube.com/embed/TX9qSaGXFyg</td></tr>', 'MAIN - CARDS 2 - EDIT', '2024-01-22 15:42:58'),
(8, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">PHONE</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">123-456-78902</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">123-456-7890</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">E-MAIL</td><td>-</td><td class=\"break-all text-balance w-[500px]\">info@mystie.com</td><td> => </td><td class=\"break-all text-balance w-[500px]\">info@mystie.com</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">ADDRESS</td><td>-</td><td class=\"break-all text-balance w-[500px]\">Shree. Lab of Arts GmbH  Wichertstrasse 4, 10439, Berlin</td><td> => </td><td class=\"break-all text-balance w-[500px]\">Shree. Lab of Arts GmbH  Wichertstrasse 4, 10439, Berlin</td></tr>', 'CONTACTS - EDIT', '2024-01-23 04:15:53'),
(9, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">1f0a764b0324125b6d91de4e84b6eea5_1.png</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">1f0a764b0324125b6d91de4e84b6eea5_1.png</td></tr>', 'GALLERY - CARDS 1 - EDIT', '2024-01-23 04:37:57'),
(10, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">1f0a764b0324125b6d91de4e84b6eea5_1.png</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">1f0a764b0324125b6d91de4e84b6eea5_1.png2</td></tr>', 'GALLERY - CARDS 1 - EDIT', '2024-01-23 04:38:08'),
(11, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">1f0a764b0324125b6d91de4e84b6eea5_1.png2</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">1f0a764b0324125b6d91de4e84b6eea5_1.png</td></tr>', 'GALLERY - CARDS 1 - EDIT', '2024-01-23 04:38:28'),
(12, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">https://images.unsplash.com/photo-1414609245224-afa02bfb3fda?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg1NTd8&amp;ixlib=rb-4.0.3&amp;q=85</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">https://images.unsplash.com/photo-1414609245224-afa02bfb3fda?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg1NTd8&amp;ixlib=rb-4.0.3&amp;q=85</td></tr>', 'GALLERY - CARDS 2 - EDIT', '2024-01-23 04:42:46'),
(13, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-normal text-wrap break-all w-[500px]\">1f0a764b0324125b6d91de4e84b6eea5_1.png</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">1f0a764b0324125b6d91de4e84b6eea5_1.png</td></tr>', 'GALLERY - CARDS 1 - EDIT', '2024-01-23 04:43:36'),
(14, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-normal text-wrap break-all w-[500px]\">https://images.unsplash.com/photo-1414609245224-afa02bfb3fda?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg1NTd8&amp;ixlib=rb-4.0.3&amp;q=85</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">https://images.unsplash.com/photo-1414609245224-afa02bfb3fda?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg1NTd8&amp;ixlib=rb-4.0.3&amp;q=85</td></tr>', 'GALLERY - CARDS 2 - EDIT', '2024-01-23 04:43:39'),
(15, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-normal text-wrap break-all w-[500px]\">https://images.unsplash.com/photo-1510797215324-95aa89f43c33?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg2MzR8&amp;ixlib=rb-4.0.3&amp;q=85</td><td> => </td><td class=\"break-normal text-wrap break-all w-[500px]\">https://images.unsplash.com/photo-1510797215324-95aa89f43c33?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg2MzR8&amp;ixlib=rb-4.0.3&amp;q=85</td></tr>', 'GALLERY - CARDS 2 - EDIT', '2024-01-23 04:44:10'),
(16, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">TEXT</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td></tr>', 'GAME - CARDS - EDIT', '2024-01-23 04:54:11'),
(17, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">HEADER</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">Card One</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">Card One</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">TEXT</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">1f0a764b0324125b6d91de4e84b6eea5_1.png</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">1f0a764b0324125b6d91de4e84b6eea5_1.png2</td></tr>', 'GAME - CARDS - EDIT', '2024-01-23 04:57:03'),
(18, '<tr class=\"flex gap-5\"><td class=\"w-[125px]\">HEADING</td><td>-</td><td class=\"break-normal text-balance\">TIME CLUB</td><td> => </td><td class=\"break-normal text-balance\">TIME CLUB</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">BACKGROUND</td><td>-</td><td class=\"break-all text-balance\">Introducing_Apple_Vision_Pro_(getmp3.pro).mp4</td><td> => </td><td class=\"break-all text-balance\">Introducing_Apple_Vision_Pro_(getmp3.pro).mp4</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">PAGE</td><td>-</td><td class=\"break-all text-balance\">main</td><td> => </td><td class=\"break-all text-balance\">main</td></tr>', 'BANNERS - EDIT', '2024-01-23 13:59:42'),
(19, '<tr class=\"flex gap-5\"><td class=\"w-[125px]\">HEADING</td><td>-</td><td class=\"break-normal text-balance\">TIME CLUB</td><td> => </td><td class=\"break-normal text-balance\">TIME CLUB</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">BACKGROUND</td><td>-</td><td class=\"break-all text-balance\">Introducing_Apple_Vision_Pro_(getmp3.pro).mp4</td><td> => </td><td class=\"break-all text-balance\">Introducing_Apple_Vision_Pro_(getmp3.pro).mp4</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">PAGE</td><td>-</td><td class=\"break-all text-balance\">main</td><td> => </td><td class=\"break-all text-balance\">main</td></tr>', 'BANNERS - EDIT', '2024-01-23 13:59:53'),
(20, '<tr class=\"flex gap-5\"><td class=\"w-[125px]\">HEADING</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">GAMES</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">GAMES1</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">BACKGROUND</td><td>-</td><td class=\"break-all text-balance w-[500px]\">1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png</td><td> => </td><td class=\"break-all text-balance w-[500px]\">1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">PAGE</td><td>-</td><td class=\"break-all text-balance w-[500px]\">games</td><td> => </td><td class=\"break-all text-balance w-[500px]\">games</td></tr>', 'BANNERS - EDIT', '2024-01-23 14:01:34'),
(21, '<tr class=\"flex gap-5 justify-between\"><td class=\"w-[125px]\">HEADING</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">TIME CLUB</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">TIME CLUB</td></tr>\n            <tr class=\"flex gap-5 justify-between\"><td class=\"w-[125px]\">BACKGROUND</td><td>-</td><td class=\"break-all text-balance w-[500px]\">Introducing_Apple_Vision_Pro_(getmp3.pro).mp4</td><td> => </td><td class=\"break-all text-balance w-[500px]\">Introducing_Apple_Vision_Pro_(getmp3.pro).mp4</td></tr>\n            <tr class=\"flex gap-5 justify-between\"><td class=\"w-[125px]\">PAGE</td><td>-</td><td class=\"break-all text-balance w-[500px]\">main</td><td> => </td><td class=\"break-all text-balance w-[500px]\">main</td></tr>', 'BANNERS - EDIT', '2024-01-23 14:03:04'),
(22, '<tr class=\"flex gap-5\"><td>NAME</td><td>facebook</td><td> => </td><td>facebook</td></tr>\n             <tr class=\"flex gap-5\"><td>ICON</td><td><i class=\"fa fa-facebook\"></i></td><td> => </td><td><i class=\"fa fa-facebook\"></i></td></tr>', 'SOCIAL - EDIT', '2024-01-23 14:06:59'),
(23, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance\">123</td></tr>\n             <tr class=\"flex gap-5\"><td class=\"w-[75px]\">ICON</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>', 'SOCIAL - CREATE', '2024-01-23 14:13:22'),
(24, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance\">123</td></tr>\n             <tr class=\"flex gap-5\"><td class=\"w-[75px]\">ICON</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>', 'SOCIAL - CREATE', '2024-01-23 14:13:23'),
(25, '<tr class=\"flex gap-5\"><td>NAME</td><td>123</td><td> => </td><td>123</td></tr>\n             <tr class=\"flex gap-5\"><td>ICON</td><td>123</td><td> => </td><td>111</td></tr>', 'SOCIAL - EDIT', '2024-01-23 14:13:30'),
(26, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance\">123</td></tr>\n             <tr class=\"flex gap-5\"><td class=\"w-[75px]\">ICON</td><td>-</td><td class=\"break-all text-balance\">111</td></tr>', 'SOCIAL - DELETE', '2024-01-23 14:13:33'),
(27, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance\">123</td></tr>\n             <tr class=\"flex gap-5\"><td class=\"w-[75px]\">ICON</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>', 'SOCIAL - DELETE', '2024-01-23 14:13:35'),
(28, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">HEADER</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">WE?</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">WE?</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">TEXT</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">BACKGROUND</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">0752db670031d2c26e881c2497d1c8c9_1.png</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">0752db670031d2c26e881c2497d1c8c9_1.png</td></tr>', 'MAIN - HEADER - EDIT', '2024-01-23 16:26:41'),
(29, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">HEADER</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">WE?</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">WE?</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">TEXT</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">BACKGROUND</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">0752db670031d2c26e881c2497d1c8c9_1.png</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">0752db670031d2c26e881c2497d1c8c9_1.png</td></tr>', 'ABOUT US - CARDS - EDIT', '2024-01-23 16:27:29'),
(30, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">Need more leads. Want to grow but don’t know how. Not getting the ROAS you once were or need a new strategy. Sound familiar? You’re not alone. We work with CEOs, GMs, CMOs and Marketing Managers all over Australia solving these exact problems with digital marketing solutions.</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">Need more leads. Want to grow but don’t know how. Not getting the ROAS you once were or need a new strategy. Sound familiar? You’re not alone. We work with CEOs, GMs, CMOs and Marketing Managers all over Australia solving these exact problems with digital marketing solutions.</td></tr>', 'ABOUT US - TEXT - EDIT', '2024-01-23 16:34:55');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int UNSIGNED NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `old_phone`, `email`, `old_email`, `address`, `old_address`, `created_at`, `updated_at`) VALUES
(1, '123-456-7890', '123-456-78902', 'info@mystie.com', 'info@mystie.com', 'Shree. Lab of Arts GmbH  Wichertstrasse 4, 10439, Berlin', 'Shree. Lab of Arts GmbH  Wichertstrasse 4, 10439, Berlin', NULL, '2024-01-23 01:15:53');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
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
-- Структура таблицы `gallery_cards_1`
--

CREATE TABLE `gallery_cards_1` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_image` varchar(2555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gallery_cards_1`
--

INSERT INTO `gallery_cards_1` (`id`, `image`, `old_image`, `created_at`, `updated_at`) VALUES
(1, '1f0a764b0324125b6d91de4e84b6eea5_1.png', '1f0a764b0324125b6d91de4e84b6eea5_1.png', NULL, '2024-01-23 01:43:36'),
(2, '1f0a764b0324125b6d91de4e84b6eea5_1.png', NULL, NULL, NULL),
(3, '1f0a764b0324125b6d91de4e84b6eea5_1.png', NULL, NULL, NULL),
(4, '1f0a764b0324125b6d91de4e84b6eea5_1.png', NULL, NULL, NULL),
(5, '1f0a764b0324125b6d91de4e84b6eea5_1.png', NULL, NULL, NULL),
(6, '1f0a764b0324125b6d91de4e84b6eea5_1.png', NULL, NULL, NULL),
(7, '1f0a764b0324125b6d91de4e84b6eea5_1.png', NULL, NULL, NULL),
(8, '1f0a764b0324125b6d91de4e84b6eea5_1.png', NULL, NULL, NULL),
(9, '1f0a764b0324125b6d91de4e84b6eea5_1.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery_cards_2`
--

CREATE TABLE `gallery_cards_2` (
  `id` int UNSIGNED NOT NULL,
  `image` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `old_image` varchar(2555) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `gallery_cards_2`
--

INSERT INTO `gallery_cards_2` (`id`, `image`, `old_image`, `created_at`, `updated_at`) VALUES
(1, 'https://images.unsplash.com/photo-1414609245224-afa02bfb3fda?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg1NTd8&amp;ixlib=rb-4.0.3&amp;q=85', 'https://images.unsplash.com/photo-1414609245224-afa02bfb3fda?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg1NTd8&amp;ixlib=rb-4.0.3&amp;q=85', NULL, '2024-01-23 01:43:39'),
(2, 'https://images.unsplash.com/photo-1470813740244-df37b8c1edcb?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg1NTd8&amp;ixlib=rb-4.0.3&amp;q=85', NULL, NULL, NULL),
(3, 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg2MzR8&amp;ixlib=rb-4.0.3&amp;q=85', NULL, NULL, NULL),
(4, 'https://images.unsplash.com/photo-1510797215324-95aa89f43c33?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg2MzR8&amp;ixlib=rb-4.0.3&amp;q=85', 'https://images.unsplash.com/photo-1510797215324-95aa89f43c33?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg2MzR8&amp;ixlib=rb-4.0.3&amp;q=85', NULL, '2024-01-23 01:44:10'),
(5, 'https://images.unsplash.com/photo-1510525009512-ad7fc13eefab?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg2MzR8&amp;ixlib=rb-4.0.3&amp;q=85', NULL, NULL, NULL),
(6, 'https://images.unsplash.com/photo-1439853949127-fa647821eba0?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg1NTd8&amp;ixlib=rb-4.0.3&amp;q=85', NULL, NULL, NULL),
(7, 'https://images.unsplash.com/photo-1504870712357-65ea720d6078?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg2NjZ8&amp;ixlib=rb-4.0.3&amp;q=85', NULL, NULL, NULL),
(8, 'https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg2NjZ8&amp;ixlib=rb-4.0.3&amp;q=85', NULL, NULL, NULL),
(9, 'https://images.unsplash.com/photo-1507692812060-98338d07aca3?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTM3MDg2NjZ8&amp;ixlib=rb-4.0.3&amp;q=85', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `games_cards`
--

CREATE TABLE `games_cards` (
  `id` bigint UNSIGNED NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_header` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_image` varchar(2555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `games_cards`
--

INSERT INTO `games_cards` (`id`, `header`, `old_header`, `text`, `old_text`, `image`, `old_image`, `created_at`, `updated_at`) VALUES
(1, 'Card One', 'Card One', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '1f0a764b0324125b6d91de4e84b6eea5_1.png2', '1f0a764b0324125b6d91de4e84b6eea5_1.png', NULL, '2024-01-23 01:57:03'),
(2, 'Card Two', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', NULL, '0752db670031d2c26e881c2497d1c8c9_1.png', NULL, NULL, NULL),
(3, 'Card Three', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', NULL, '1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png', NULL, NULL, NULL),
(4, 'Card Four', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', NULL, '1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png', NULL, NULL, NULL),
(5, 'Card Five', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', NULL, '1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `main_cards_1`
--

CREATE TABLE `main_cards_1` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_descr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `main_cards_1`
--

INSERT INTO `main_cards_1` (`id`, `name`, `old_name`, `location`, `old_location`, `descr`, `old_descr`, `created_at`, `updated_at`) VALUES
(1, 'HIGHLANDS1', 'HIGHLANDS1', 'SCOTLAND1', 'SCOTLAND1', 'The montains are calling1', 'The montains are calling1', NULL, '2024-01-22 09:47:13'),
(2, 'PS 5', NULL, 'PERU', NULL, 'Adventure is never far away', NULL, NULL, NULL),
(3, 'CHAMONIX', NULL, 'FRANCE', NULL, 'Let your dreams come true', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `main_cards_2`
--

CREATE TABLE `main_cards_2` (
  `id` bigint UNSIGNED NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `main_cards_2`
--

INSERT INTO `main_cards_2` (`id`, `video`, `old_video`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/embed/TX9qSaGXFyg', 'https://www.youtube.com/embed/TX9qSaGXFyg1', NULL, '2024-01-22 12:42:58'),
(2, 'https://www.youtube.com/embed/TX9qSaGXFyg', NULL, NULL, NULL),
(3, 'https://www.youtube.com/embed/TX9qSaGXFyg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `main_header`
--

CREATE TABLE `main_header` (
  `id` bigint UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `main_header`
--

INSERT INTO `main_header` (`id`, `text`, `old_text`, `created_at`, `updated_at`) VALUES
(1, 'Board Games', 'Board Games', NULL, '2024-01-22 09:29:55');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_20_10_main_header', 1),
(6, '2024_01_20_11_main_cards_1', 1),
(7, '2024_01_20_12_main_cards_2', 1),
(8, '2024_01_20_1_banner', 1),
(9, '2024_01_20_20_about_us_text', 1),
(10, '2024_01_20_21_about_us_cards', 1),
(11, '2024_01_20_2_social', 1),
(12, '2024_01_20_30_games_cards', 1),
(13, '2024_01_20_31_gallery_cards', 1),
(14, '2024_01_20_3_contacts', 1),
(15, '2024_01_20_40_profile_vip', 1),
(16, '2024_01_20_41_profile_cards', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `profile_check`
--

CREATE TABLE `profile_check` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `old_date` date DEFAULT NULL,
  `price` int NOT NULL,
  `old_price` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `profile_check`
--

INSERT INTO `profile_check` (`id`, `user_id`, `name`, `old_name`, `background`, `old_background`, `date`, `old_date`, `price`, `old_price`, `created_at`, `updated_at`) VALUES
(1, 2, 'VIP', NULL, '', NULL, '2024-01-18', NULL, 100, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `profile_vip`
--

CREATE TABLE `profile_vip` (
  `id` bigint UNSIGNED NOT NULL,
  `descr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_descr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int NOT NULL,
  `old_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `profile_vip`
--

INSERT INTO `profile_vip` (`id`, `descr`, `old_descr`, `price`, `old_price`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum iure, blanditiis labore quidem voluptate harum sequi quam eius modi non. Ut tempore excepturi harum culpa incidunt eligendi officiis, id et.', NULL, 10, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `social`
--

CREATE TABLE `social` (
  `id` bigint UNSIGNED NOT NULL,
  `icon` varchar(5255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `social`
--

INSERT INTO `social` (`id`, `icon`, `old_icon`, `name`, `old_name`, `created_at`, `updated_at`) VALUES
(1, '<i class=\"fa fa-facebook\"></i>', '<i class=\"fa fa-facebook\"></i>', 'facebook', 'facebook', NULL, '2024-01-23 11:06:59'),
(2, '<i class=\"fa fa-twitter\"></i>', '', 'twitter', '', NULL, NULL),
(3, '<i class=\"fa fa-instagram\"></i>', '', 'instagram', '', NULL, NULL),
(4, '<i class=\"fa fa-youtube\"></i>', '', 'youtube', '', NULL, NULL),
(5, '<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 448 512\"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d=\"M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z\"></path></svg>', '', 'tiktok', '', NULL, NULL),
(6, '<i class=\"fa fa-spotify\"></i>', '', 'spotify', '', NULL, NULL),
(7, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 27 27\" fill=\"none\"> <path d=\"M19.1815 13.495L15.5753 14.709V18.6321L13.3396 15.4615L9.73337 16.6656L11.969 13.495L9.73337 10.3344L13.3396 11.5385L15.5753 8.36789V12.291L19.1815 13.495Z\" fill=\"#000\"></path><path d=\"M19.1815 13.495V21.6823H7.88651V5.16722H19.1815V13.495L24.1875 11.8194V3.19063L21.2811 0H2.8125V27H21.2617L24.1875 23.9799V15.1806L19.1815 13.495Z\" fill=\"#000\"></path></svg>', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_vip` tinyint NOT NULL DEFAULT '0',
  `old_is_vip` tinyint DEFAULT NULL,
  `is_admin` tinyint NOT NULL DEFAULT '0',
  `old_is_admin` tinyint DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `old_name`, `email`, `old_email`, `email_verified_at`, `password`, `is_vip`, `old_is_vip`, `is_admin`, `old_is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, '123', '123', 'pavelata128@gmail.com', 'pavelata128@gmail.com', NULL, '$2y$10$zeBIvhXwoi/vHx8ssJlHrufunMoASgrbHyELeWtF5BcxsTIXyCZ26', 0, 1, 1, 1, NULL, '2024-01-22 09:56:48', '2024-01-22 12:41:55');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about_us_cards`
--
ALTER TABLE `about_us_cards`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `about_us_text`
--
ALTER TABLE `about_us_text`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `change_log`
--
ALTER TABLE `change_log`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `gallery_cards_1`
--
ALTER TABLE `gallery_cards_1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery_cards_2`
--
ALTER TABLE `gallery_cards_2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `games_cards`
--
ALTER TABLE `games_cards`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main_cards_1`
--
ALTER TABLE `main_cards_1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main_cards_2`
--
ALTER TABLE `main_cards_2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main_header`
--
ALTER TABLE `main_header`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `profile_check`
--
ALTER TABLE `profile_check`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `profile_vip`
--
ALTER TABLE `profile_vip`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about_us_cards`
--
ALTER TABLE `about_us_cards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `about_us_text`
--
ALTER TABLE `about_us_text`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `change_log`
--
ALTER TABLE `change_log`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `gallery_cards_1`
--
ALTER TABLE `gallery_cards_1`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `gallery_cards_2`
--
ALTER TABLE `gallery_cards_2`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `games_cards`
--
ALTER TABLE `games_cards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `main_cards_1`
--
ALTER TABLE `main_cards_1`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `main_cards_2`
--
ALTER TABLE `main_cards_2`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `main_header`
--
ALTER TABLE `main_header`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `profile_check`
--
ALTER TABLE `profile_check`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `profile_vip`
--
ALTER TABLE `profile_vip`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `social`
--
ALTER TABLE `social`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `profile_check`
--
ALTER TABLE `profile_check`
  ADD CONSTRAINT `profile_check_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
