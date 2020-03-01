-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 01 2020 г., 15:19
-- Версия сервера: 10.1.34-MariaDB
-- Версия PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `marlin_task`
--

-- --------------------------------------------------------

--
-- Структура таблицы `marlin_task_products`
--

CREATE TABLE `marlin_task_products` (
  `id` int(11) NOT NULL,
  `prod_name` tinytext NOT NULL,
  `prod_short_text` text NOT NULL,
  `prod_full_text` text NOT NULL,
  `prod_img` tinytext NOT NULL,
  `prod_category` int(11) NOT NULL,
  `prod_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `marlin_task_products`
--

INSERT INTO `marlin_task_products` (`id`, `prod_name`, `prod_short_text`, `prod_full_text`, `prod_img`, `prod_category`, `prod_status`) VALUES
(1, '1 продукт', 'Красткое описание 1 продукта ', 'Полное описание 1 продукта', 'logo-fb.jpg', 1, 1),
(2, '2 товар', 'краткое описание 2 товара', 'полное описание 2 товара', '', 1, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `marlin_task_products`
--
ALTER TABLE `marlin_task_products`
  ADD KEY `id_products` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `marlin_task_products`
--
ALTER TABLE `marlin_task_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
