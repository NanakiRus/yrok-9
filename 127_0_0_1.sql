-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 11 2017 г., 21:07
-- Версия сервера: 5.5.50
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yrok9`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` bigint(20) unsigned NOT NULL,
  `header` varchar(500) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `header`, `text`) VALUES
(1, 'Главная страница', 'Боже, Царя храни!\r\nСильный, державный,\r\nЦарствуй на славу, на славу намъ!\r\nЦарствуй на страхъ врагамъ,\r\nЦарь православный!\r\nБоже, Царя храни!\r\nБоже, Царя храни!\r\nСлавному долги дни\r\nДай на земли! Дай на земли!\r\nГордыхъ смирителю,\r\nСлабыхъ хранителю,\r\nВсѣхъ утѣ́шителю\r\nВсе ниспошли!\r\nПерводержавную\r\nРусь православную,\r\nБоже, храни! Боже, храни!\r\nЦарство ей стройное,\r\nВъ силѣ спокойное!\r\nВсе-жъ недостойное прочь отжени!\r\nВоинство бранное,\r\nСлавой избранное,\r\nБоже, храни! Боже, храни!\r\nВоинамъ-мстителямъ,\r\nЧести спасителямъ,\r\nМиротворителямъ долгiе дни!\r\nМирныхъ воителей,\r\nПравды блюстителей\r\nБоже, храни! Боже, храни!\r\nЖизнь ихъ примѣрную\r\nНелицемѣрную,\r\nДоблестямъ вѣрную воспомяни!\r\nО, Провидѣнiе!\r\nБлагословенiе\r\nНамъ ниспошли! Намъ ниспошли!\r\nКъ благу стремленiе,\r\nВъ счастьѣ смиренiе,\r\nВъ скорби терпѣнiе дай на земли!\r\nБудь намъ заступникомъ,\r\nВѣрнымъ сопутникомъ\r\nНасъ провожай! Насъ провожай!\r\nСвѣтло-прелестная,\r\nЖизнь поднебесная,\r\nСердцу извѣстная, сердцу сіяй!');

-- --------------------------------------------------------

--
-- Структура таблицы `guestBook`
--

CREATE TABLE IF NOT EXISTS `guestBook` (
  `id` bigint(20) unsigned NOT NULL,
  `date` datetime NOT NULL,
  `author` varchar(500) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `guestBook`
--

INSERT INTO `guestBook` (`id`, `date`, `author`, `text`) VALUES
(3, '2017-01-11 16:59:46', 'Иванов Иван Иванович', 'Тестирую запись, интересно!'),
(4, '2017-01-11 17:00:12', 'Валентин', 'Вроде всё работает как надо!\r\nЗамечательно.'),
(5, '2017-01-11 20:59:02', 'Гена', 'Последний тест!');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `guestBook`
--
ALTER TABLE `guestBook`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `guestBook`
--
ALTER TABLE `guestBook`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
