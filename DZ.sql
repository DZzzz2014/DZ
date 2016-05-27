-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 27 2016 г., 18:06
-- Версия сервера: 5.5.48
-- Версия PHP: 5.3.29

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
(1, 'Это только начало ...', 'это мастерская мебели с тотальной дизайн-поддержкой для клиентов: от проектирования и создания предметов из ваших идей до консультаций по сочетанию их с готовым или планирующимся интерьером. \r\n			Простые и естественные материалы, из которых мы создаем нашу мебель, передают ей красоту и гармонию, которые сама природа заложила в дерево и камень. Сталь, бетон, древесина – всё здесь является воплощением силы, надежности, спокойствия и молчаливого благородства. Именно эти качества мы стремимся привнести в дома наших клиентов, приближая облик мебели к сути используемых материалов, выбирая простые, строгие формы предметов, нейтральные цвета, избегая лишнего декора. Мы подчиняем дизайн функциональности и удобству, чтобы мебель служила вам долго и приносила радость.\r\n			Самовыражение без риска разочароваться. Поможем сделать круто. Всегда впечатляющий результат.\r\n			\r\n			<p><img src="media/img/flower.jpg" width="200" height="354" align="left" vspace="20"></p>', 'index', 'ru', 'show', '2016-05-11'),
(2, 'Контакты', 'Телефон:\r\n+375 29 608-29-88\r\n', 'contacts', 'ru', 'show', '2016-05-11'),
(3, 'Кто мы', 'мы это мы - изготовление уникальных дизайнерских элементов декора', 'about', 'ru', 'show', '2016-05-11'),
(4, 'Что мы можем', '<p> DZ is positioned at the intersection of art, architecture and design. The building, space, business or design generates new questions, arising from the information of particular problems or design challenges resulting in a unique design solution for the client. Drawings, sketches, free flow art, high end graphic programs allows us to work in a non restrained innovative environment. This provides a space for personal and natural explorations that contribute to the foundation of future work. 3D modelling and documentation in the digital environment is an integral part in showcasing and delivering successful design output for the client.</p>\r\n<p> </p>\r\n<p></p>\r\n<h3>SERVICES</h3>\r\n<p>+ Architectural Design</p>\r\n<p>+ Renovation Design Concepts</p>\r\n<p>+Custom New Home Concepts</p>\r\n<p>+ Luxury & Prestige Home Concepts</p>\r\n<p>+ External works & Landscape Concepts</p>\r\n<p>+ Interior Design</p>\r\n<p>+ Graphic Design</p>\r\n<p>+ Logo Design</p>\r\n<p>+ Freelance Art</p>\r\n<p> </p>\r\n<h3>COSTS</h3>\r\n<p>As the scope of each projects varies, therefore, a tailor made package will be calculated for the client.</p>\r\n<p>No job is considered to small and we would love to hear from you.</p>\r\n<p>For any enquirers please refer to the <a href="index.php?url=contacts">contact page</a></p>', 'examples', 'ru', 'show', '2016-05-16');

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `cat_id`, `name`, `body`, `price`, `product_code`, `picture`, `picture_small`, `currency`, `status`, `putdate`, `user_id`, `showhide`) VALUES
(11, '3', 'цПРДЖО', '<p>ЗШЦКО</p>\r\n', '33', '2222', '/uploads/1463732257Tulips.jpg', '', 'BYR', 'new', '2016-05-20', 5, 'show'),
(12, '1', 'последний загружаемы товар', '<p>последний загружаемый товар 11:22</p>\r\n', '1', '1122', '/uploads/1463732569FIL2829.JPG', '', 'BYR', 'new', '2016-05-20', 5, 'show'),
(13, '3', 'tutut', '<p>ututututu</p>\r\n', '123', '21', '/uploads/1464157831shelf_for_glasses 2.jpg', '', 'USD', 'new', '2016-05-25', 5, 'show'),
(14, '2', 'стул2', '<p>стулк к к клооро</p>\r\n', '100', '100', '/uploads/1464157858shelf_for_glasses.jpg', '', 'USD', 'new', '2016-05-25', 5, 'show'),
(19, '1', 'стул деревянный', '<p>ыцпфыпры</p>\r\n', '123', '111', '/uploads/146415815633kVx5_j0FE.jpg', '', 'RUR', 'new', '2016-05-25', 5, 'show');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `registration`
--

INSERT INTO `registration` (`id`, `email`, `password`, `repeat_password`, `name`, `block_unblock`, `date_reg`, `last_visit`) VALUES
(5, '123@nbv.ru', '123', '123', '123', 'unblock', '2016-05-16', '2016-05-25 09:30:01'),
(6, '123@kfjag.ru', '321', '321', '321', 'unblock', '2016-05-20', '2016-05-23 09:08:37');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
