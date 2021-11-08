-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 08 2021 г., 07:59
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `block`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `aid` int NOT NULL,
  `adate` date NOT NULL,
  `atitle` varchar(255) NOT NULL,
  `atxt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`aid`, `adate`, `atitle`, `atxt`) VALUES
(1, '2021-11-08', 'Название статьи', 'Текст статьи. Lorem, ipsum dolor sit amet consectetur \r\n                        adipisicing elit. Optio maxime minus \r\n                        inventore, repudiandae harum quae \r\n                        fugit excepturi ipsum id nihil \r\n                        ipsa culpa dolorum molestiae rerum, \r\n                        repellendus sapiente eum non aliquid?\r\n                        Lorem, ipsum dolor sit amet consectetur \r\n                        adipisicing elit. Optio maxime minus \r\n                        inventore, repudiandae harum quae \r\n                        fugit excepturi ipsum id nihil \r\n                        ipsa culpa dolorum molestiae rerum, \r\n                        repellendus sapiente eum non aliquid?\r\n                        Lorem, ipsum dolor sit amet consectetur \r\n                        adipisicing elit. Optio maxime minus \r\n                        inventore, repudiandae harum quae \r\n                        fugit excepturi ipsum id nihil \r\n                        ipsa culpa dolorum molestiae rerum, \r\n                        repellendus sapiente eum non aliquid?\r\n                        Lorem, ipsum dolor sit amet consectetur \r\n                        adipisicing elit. Optio maxime minus \r\n                        inventore, repudiandae harum quae \r\n                        fugit excepturi ipsum id nihil \r\n                        ipsa culpa dolorum molestiae rerum, \r\n                        repellendus sapiente eum non aliquid?\r\n                        Lorem, ipsum dolor sit amet consectetur \r\n                        adipisicing elit. Optio maxime minus \r\n                        inventore, repudiandae harum quae \r\n                        fugit excepturi ipsum id nihil \r\n                        ipsa culpa dolorum molestiae rerum, \r\n                        repellendus sapiente eum non aliquid? ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`aid`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `aid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
