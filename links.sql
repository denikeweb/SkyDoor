-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 09 2014 г., 09:04
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `skydoor`
--

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surl` varchar(6) NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `surl` (`surl`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Таблица с короткими и длинными URL-адресами' AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`id`, `surl`, `url`) VALUES
(1, 'r3jF9U', 'http://albatrosscom.ru'),
(2, 'f2fGT4', 'http://jobs.dou.ua/companies/a-la-carte/vacancies/10987/'),
(3, 'f2fGT5', 'http://jobs.dou.ua/companies/a-la-carte/vacancies/10987/'),
(4, 'Zh2XBD', 'https://packagist.org/'),
(5, 'VwlkE', 'http://popel-studio.com/blog/article/snova-objavlyaem-stazhirovku-dlya-dizajnerov.html'),
(6, '0ytiL7', 'http://www.yiiframework.com/'),
(7, 'NtHTZf', 'http://www.dejurka.ru/graphics/30-high-quality-fonts/'),
(8, 'N6fA2m', 'http://goo.gl/'),
(9, 'W4Jol6', 'http://goo.gl/'),
(10, 'yigj7m', 'http://habrahabr.ru/post/156775/');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
