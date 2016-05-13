-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3307
-- Время создания: Май 13 2016 г., 11:51
-- Версия сервера: 5.5.38-log
-- Версия PHP: 5.5.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `DZ`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `parent id` int(11) NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent id`, `showhide`) VALUES
(1, 'Столы', 0, 'show'),
(2, 'Стулья', 0, 'show'),
(3, 'Прочее', 0, 'show');

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE IF NOT EXISTS `maintexts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `lang` enum('ru','eng') NOT NULL DEFAULT 'ru',
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `putdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `lang`, `showhide`, `putdate`) VALUES
(1, 'Добро пожаловать на сайт', 'это мастерская мебели с тотальной дизайн-поддержкой для клиентов: от проектирования и создания предметов из ваших идей до консультаций по сочетанию их с готовым или планирующимся интерьером. \r\n			Простые и естественные материалы, из которых мы создаем нашу мебель, передают ей красоту и гармонию, которые сама природа заложила в дерево и камень. Сталь, бетон, древесина – всё здесь является воплощением силы, надежности, спокойствия и молчаливого благородства. Именно эти качества мы стремимся привнести в дома наших клиентов, приближая облик мебели к сути используемых материалов, выбирая простые, строгие формы предметов, нейтральные цвета, избегая лишнего декора. Мы подчиняем дизайн функциональности и удобству, чтобы мебель служила вам долго и приносила радость.\r\n			Самовыражение без риска разочароваться. Поможем сделать круто. Всегда впечатляющий результат.\r\n			\r\n			<p><img src="media/img/flower.jpg" width="200" height="354" align="left" vspace="20"></p>', 'index', 'ru', 'show', '2016-05-11'),
(2, 'Контакты', 'Телефон:\r\n555 555 555\r\n', 'contacts', 'ru', 'show', '2016-05-11'),
(3, 'Кто мы', 'мы это мы - изготовление уникальных дизайнерских элементов декора', 'about', 'ru', 'show', '2016-05-11');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `price` tinytext NOT NULL,
  `product_code` int(11) NOT NULL,
  `picture` tinytext NOT NULL,
  `picture_small` tinytext NOT NULL,
  `currency` tinytext NOT NULL,
  `status` tinytext NOT NULL,
  `putdate` date NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
