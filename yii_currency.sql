-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 23 2013 г., 12:25
-- Версия сервера: 5.1.53
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `yiimployee`
--

-- --------------------------------------------------------

--
-- Структура таблицы `yii_currency`
--

CREATE TABLE IF NOT EXISTS `yii_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT '0',
  `value` float NOT NULL,
  `is_auto` tinyint(1) NOT NULL DEFAULT '1',
  `date_update` datetime NOT NULL,
  `is_main` tinyint(1) NOT NULL DEFAULT '0',
  `code` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `is_visible` (`is_visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `yii_currency`
--

INSERT INTO `yii_currency` (`id`, `name`, `is_visible`, `value`, `is_auto`, `date_update`, `is_main`, `code`) VALUES
(1, 'RUB', 1, 1, 0, '2013-08-04 00:00:00', 1, 810),
(2, 'USD', 1, 33.1908, 1, '2013-08-23 12:22:31', 0, 840),
(3, 'EUR', 1, 44.2765, 1, '2013-08-23 12:22:31', 0, 978),
(4, 'UAH', 1, 4.08452, 1, '2013-08-23 12:22:31', 0, 980);
