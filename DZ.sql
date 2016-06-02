-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 02 2016 г., 17:24
-- Версия сервера: 5.5.48
-- Версия PHP: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `DZ`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `parent id` int(11) NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `lang` enum('ru','eng') NOT NULL DEFAULT 'ru',
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `putdate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `lang`, `showhide`, `putdate`) VALUES
(1, 'Это только начало ...', 'это мастерская мебели с тотальной дизайн-поддержкой для клиентов: от проектирования и создания предметов из ваших идей до консультаций по сочетанию их с готовым или планирующимся интерьером. \r\n			Простые и естественные материалы, из которых мы создаем нашу мебель, передают ей красоту и гармонию, которые сама природа заложила в дерево и камень. Сталь, бетон, древесина – всё здесь является воплощением силы, надежности, спокойствия и молчаливого благородства. Именно эти качества мы стремимся привнести в дома наших клиентов, приближая облик мебели к сути используемых материалов, выбирая простые, строгие формы предметов, нейтральные цвета, избегая лишнего декора. Мы подчиняем дизайн функциональности и удобству, чтобы мебель служила вам долго и приносила радость.\r\n			Самовыражение без риска разочароваться. Поможем сделать круто. Всегда впечатляющий результат.\r\n			\r\n			<p><img src="media/img/flower0.jpg" width="100%"></p>', 'index', 'ru', 'show', '2016-05-11'),
(2, 'Контакты', 'Телефон:\r\n+375 29 608-29-88\r\n', 'contacts', 'ru', 'show', '2016-05-11'),
(3, 'Кто мы и что мы умеем', 'МЫ это - изготовление уникальных дизайнерских элементов декора </br>\r\n<p></p>\r\n<p> DZ is positioned at the intersection of art, architecture and design. The building, space, business or design generates new questions, arising from the information of particular problems or design challenges resulting in a unique design solution for the client. Drawings, sketches, free flow art, high end graphic programs allows us to work in a non restrained innovative environment. This provides a space for personal and natural explorations that contribute to the foundation of future work. 3D modelling and documentation in the digital environment is an integral part in showcasing and delivering successful design output for the client.</p>\r\n<p> </p>\r\n<p></p>\r\n<h3>SERVICES</h3>\r\n<p>+ Architectural Design</p>\r\n<p>+ Renovation Design Concepts</p>\r\n<p>+Custom New Home Concepts</p>\r\n<p>+ Luxury & Prestige Home Concepts</p>\r\n<p>+ External works & Landscape Concepts</p>\r\n<p>+ Interior Design</p>\r\n<p>+ Graphic Design</p>\r\n<p>+ Logo Design</p>\r\n<p>+ Freelance Art</p>\r\n<p> </p>\r\n<h3>COSTS</h3>\r\n<p>As the scope of each projects varies, therefore, a tailor made package will be calculated for the client.</p>\r\n<p>No job is considered to small and we would love to hear from you.</p>\r\n<p>For any enquirers please refer to the <a href="index.php?url=contacts">contact page</a></p>', 'about', 'ru', 'show', '2016-05-11'),
(4, 'Примеры наших работ', '<p><img src="media/img/flower.jpg" width="200" height="354" align="left" vspace="20"></p>', 'examples', 'ru', 'show', '2016-05-16');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `cat_id` tinytext NOT NULL,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `price` tinytext NOT NULL,
  `product_code` tinytext NOT NULL,
  `picture` tinytext NOT NULL,
  `picture_small` tinytext NOT NULL,
  `currency` tinytext NOT NULL,
  `status` tinytext NOT NULL,
  `putdate` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show'
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `cat_id`, `name`, `body`, `price`, `product_code`, `picture`, `picture_small`, `currency`, `status`, `putdate`, `user_id`, `showhide`) VALUES
(20, '1', '1', '<p>1</p>\r\n', '1', '1', '/uploads/1464875505t2.jpg', '', 'BYR', 'new', '2016-06-02', 7, 'show'),
(21, '1', '2', '<p>2</p>\r\n', '2', '2', '/uploads/1464875528t4.jpeg', '', 'BYR', 'new', '2016-06-02', 7, 'show'),
(22, '2', '3', '<p>3</p>\r\n', '3', '3', '/uploads/1464875554ch3.jpg', '', 'BYR', 'new', '2016-06-02', 7, 'show'),
(23, '2', '1', '<p>1</p>\r\n', '1', '11', '/uploads/1464875567ch5.jpg', '', 'BYR', 'new', '2016-06-02', 7, 'show'),
(24, '2', '2', '<p>2</p>\r\n', '2', '2', '/uploads/1464875577ch7.jpg', '', 'BYR', 'new', '2016-06-02', 7, 'show'),
(25, '2', '6', '<p>6</p>\r\n', '6', '6', '/uploads/1464875591K1.jpg', '', 'BYR', 'new', '2016-06-02', 7, 'show'),
(26, '3', '77', '<p>7</p>\r\n', '7', '7', '/uploads/1464875610so.png', '', 'BYR', 'new', '2016-06-02', 7, 'show'),
(27, '3', '6', '<p>6</p>\r\n', '6', '6', '/uploads/1464875622shelf_for_glasses.jpg', '', 'BYR', 'new', '2016-06-02', 7, 'show'),
(28, '3', '5', '<p>5</p>\r\n', '5', '5', '/uploads/1464875633shelf_for_glasses 2.jpg', '', 'BYR', 'new', '2016-06-02', 7, 'show'),
(29, '3', '4', '<p>4</p>\r\n', '4', '4', '/uploads/1464875650s3.jpeg', '', 'BYR', 'new', '2016-06-02', 7, 'show');

-- --------------------------------------------------------

--
-- Структура таблицы `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `repeat_password` tinytext NOT NULL,
  `name` tinytext NOT NULL,
  `block_unblock` enum('block','unblock') NOT NULL DEFAULT 'unblock',
  `date_reg` date NOT NULL,
  `last_visit` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `registration`
--

INSERT INTO `registration` (`id`, `email`, `password`, `repeat_password`, `name`, `block_unblock`, `date_reg`, `last_visit`) VALUES
(5, '123@nbv.ru', '123', '123', '123', 'unblock', '2016-05-16', '2016-05-25 09:30:01'),
(6, '123@kfjag.ru', '321', '321', '321', 'unblock', '2016-05-20', '2016-05-23 09:08:37'),
(7, '123@123.com', '123', '123', '123', 'unblock', '2016-06-01', '2016-06-01 17:01:35');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `maintexts`
--
ALTER TABLE `maintexts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `maintexts`
--
ALTER TABLE `maintexts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT для таблицы `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
