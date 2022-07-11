-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 01 2022 г., 00:38
-- Версия сервера: 5.6.51-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `money`
--

-- --------------------------------------------------------

--
-- Структура таблицы `account`
--

CREATE TABLE `account` (
  `accountid` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `accountnumber` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `budget`
--

CREATE TABLE `budget` (
  `budgetid` int(5) NOT NULL,
  `userid` int(5) NOT NULL,
  `categoryid` int(5) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `categoryid` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `type` int(11) NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`categoryid`, `name`, `description`, `type`, `color`) VALUES
(3, 'Квартира и связь', NULL, 2, '#2A12FF'),
(6, 'Бизнес и коммерция', NULL, 2, '#FF8F0F'),
(7, 'Благотворительность', NULL, 2, '#21A62A'),
(8, 'Продукты', NULL, 2, '#C431B1'),
(9, 'Коммуникации и связь', NULL, 2, '#AD0A0A'),
(10, 'Внешний вид, аксессуары, одежда', NULL, 2, '#50E6E6'),
(12, 'Ипотека, долги, кредиты', NULL, 2, '#8A8A8A'),
(13, 'Отдых и развлечения', NULL, 2, '#08FF20'),
(14, 'Транспорт', NULL, 2, '#FF1414'),
(15, 'Заработная плата', NULL, 1, '#0AFF12'),
(16, 'Арендная плата', NULL, 1, '#A238FF'),
(17, 'Проценты по вкладам', NULL, 1, '#FFF700'),
(18, 'Аванс', NULL, 1, '#8A8EFF'),
(19, 'Пенсия', NULL, 1, '#54FF9E'),
(20, 'Премия', NULL, 1, '#0F0F0F'),
(21, 'Социальное пособие', NULL, 1, '#FF4D17'),
(22, 'Стипендия', NULL, 1, '#FF99A0'),
(23, 'Домашние животные', NULL, 2, '#2A4F2B'),
(25, 'Здоровье и красота', NULL, 2, '#47733E'),
(26, 'Телефон', NULL, 2, '#FFFFFF'),
(27, 'Образование', NULL, 2, '#FFD278');

-- --------------------------------------------------------

--
-- Структура таблицы `goals`
--

CREATE TABLE `goals` (
  `goalsid` int(5) NOT NULL,
  `userid` int(5) NOT NULL,
  `accountid` int(5) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `deposit` decimal(10,2) NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `roleid` int(5) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`roleid`, `name`) VALUES
(2, 'Транзакции'),
(3, 'Доход'),
(4, 'Расход'),
(5, 'Счета'),
(6, 'Бюджет'),
(7, 'Цели'),
(8, 'Календарь'),
(9, 'Категории доходов'),
(10, 'Категории расходов'),
(11, 'Отчеты доходов'),
(12, 'Категории расходов'),
(13, 'Отчеты о доходах и расходах'),
(14, 'Ежемесячный отчет о доходах'),
(15, 'Ежемесячный отчет о расходах'),
(16, 'Отчеты о транзакциях по счету'),
(17, 'Пользователи'),
(18, 'Настройка сайта'),
(19, 'Предстоящий доход'),
(20, 'Предстоящий расход');

-- --------------------------------------------------------

--
-- Структура таблицы `roleaccess`
--

CREATE TABLE `roleaccess` (
  `roleaccessid` int(5) NOT NULL,
  `roleid` int(5) NOT NULL,
  `userid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roleaccess`
--

INSERT INTO `roleaccess` (`roleaccessid`, `roleid`, `userid`) VALUES
(18, 2, 1),
(19, 3, 1),
(20, 4, 1),
(21, 5, 1),
(22, 6, 1),
(23, 7, 1),
(24, 8, 1),
(25, 9, 1),
(26, 10, 1),
(27, 11, 1),
(28, 12, 1),
(29, 13, 1),
(30, 14, 1),
(31, 15, 1),
(32, 16, 1),
(33, 17, 1),
(34, 18, 1),
(35, 19, 1),
(36, 20, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `settingsid` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `city` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `logo` text NOT NULL,
  `currency` varchar(5) NOT NULL,
  `languages` varchar(10) NOT NULL,
  `dateformat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`settingsid`, `company`, `city`, `address`, `website`, `phone`, `logo`, `currency`, `languages`, `dateformat`) VALUES
(1, 'Cube Money', 'г. Москва', 'ул. Тверская, д. 9', 'http://cube-money.com', '8-989-998-9343', 'mplogo.png', '₽', 'ru', 'd.m.Y');

-- --------------------------------------------------------

--
-- Структура таблицы `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategoryid` int(11) NOT NULL,
  `categoryid` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subcategory`
--

INSERT INTO `subcategory` (`subcategoryid`, `categoryid`, `name`, `type`, `description`) VALUES
(3, 3, 'Вывоз мусора', 2, NULL),
(4, 3, 'Электричество', 2, NULL),
(5, 3, 'Вода', 2, NULL),
(6, 3, 'Оплата за лифт', 2, NULL),
(7, 3, 'Тепло', 2, NULL),
(8, 3, 'Оплата труда дворника', 2, NULL),
(9, 3, 'Газ', 2, NULL),
(10, 6, 'Налоги', 2, NULL),
(11, 6, 'Реклама', 2, NULL),
(12, 6, 'Канцелярия', 2, NULL),
(13, 23, 'Товары для животных', 2, NULL),
(14, 23, 'Корм', 2, NULL),
(15, 23, 'Услуги ветеринара', 2, NULL),
(16, 25, 'Косметика', 2, NULL),
(17, 25, 'Парфюмерия', 2, NULL),
(18, 25, 'Салоны красоты', 2, NULL),
(19, 25, 'Спорт', 2, NULL),
(20, 25, 'Лекарства', 2, NULL),
(21, 12, 'Выплата по кредиту', 2, NULL),
(22, 12, 'Выплата по ипотеке', 2, NULL),
(23, 12, 'Досрочное гашение долга', 2, NULL),
(24, 12, 'Покрытие процентов', 2, NULL),
(25, 3, 'Радио', 2, NULL),
(26, 3, 'Интернет', 2, NULL),
(27, 3, 'Аренда', 2, NULL),
(28, 3, 'Кабельное телевидение', 2, NULL),
(29, 3, 'Охрана', 2, NULL),
(30, 3, 'Консьерж', 2, NULL),
(31, 27, 'Учебники', 2, NULL),
(32, 27, 'Канцтовары', 2, NULL),
(33, 27, 'Плата за обучение', 2, NULL),
(34, 27, 'Репетитор', 2, NULL),
(35, 14, 'Автобус', 2, NULL),
(36, 14, 'Проездные', 2, NULL),
(37, 14, 'Авиарейсы', 2, NULL),
(38, 14, 'Метро', 2, NULL),
(39, 14, 'Такси', 2, NULL),
(40, 14, 'Электричка', 2, NULL),
(41, 8, 'Основные продукты', 2, NULL),
(42, 8, 'Деликатесы', 2, NULL),
(43, 8, 'Алкоголь', 2, NULL),
(44, 15, 'Фриланс', 1, NULL),
(45, 18, 'Основная работа', 1, NULL),
(46, 18, 'Подработка', 1, NULL),
(47, 18, 'Работа онлайн', 1, NULL),
(48, 8, 'Картофель', 2, NULL),
(49, 8, 'Хлеб', 2, NULL),
(50, 8, 'Морковь', 2, NULL),
(51, 8, 'Лук', 2, NULL),
(52, 8, 'Чеснок', 2, NULL),
(53, 8, 'Петрушка', 2, NULL),
(54, 8, 'Укроп', 2, NULL),
(55, 8, 'Яблоки', 2, NULL),
(56, 8, 'Лимон', 2, NULL),
(57, 8, 'Масло сливочное', 2, NULL),
(58, 8, 'Кефир', 2, NULL),
(59, 8, 'Сметана', 2, NULL),
(60, 8, 'Творог', 2, NULL),
(61, 8, 'Сыр', 2, NULL),
(62, 8, 'Горчица', 2, NULL),
(63, 8, 'Томатная паста', 2, NULL),
(64, 8, 'Сгущенка', 2, NULL),
(65, 8, 'Мед', 2, NULL),
(66, 8, 'Консервы', 2, NULL),
(67, 8, 'Детское питание', 2, NULL),
(68, 8, 'Яйца', 2, NULL),
(69, 8, 'Масло растительное', 2, NULL),
(70, 8, 'Соевый соус', 2, NULL),
(71, 3, 'Уксус', 2, NULL),
(72, 8, 'Суповой набор', 2, NULL),
(73, 8, 'Мясо', 2, NULL),
(74, 8, 'Сало', 2, NULL),
(75, 8, 'Маргарин', 2, NULL),
(76, 8, 'Шпинат', 2, NULL),
(77, 8, 'Грибы', 2, NULL),
(78, 8, 'Рыба', 2, NULL),
(79, 8, 'Крабовые палочки', 2, NULL),
(80, 3, 'Мука', 2, NULL),
(81, 8, 'Дрожжи', 2, NULL),
(82, 8, 'Сода', 2, NULL),
(83, 8, 'Разрыхлитель теста', 2, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `transaction`
--

CREATE TABLE `transaction` (
  `transactionid` int(5) NOT NULL,
  `userid` int(5) NOT NULL,
  `categoryid` int(5) NOT NULL,
  `accountid` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `transactiondate` date NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `file` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`userid`, `email`, `name`, `password`, `role`, `phone`, `status`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 'contact@mail.com', 'Администратор', '$2a$10$lLaP4N0RTAuTxjRFLnfXvePd0pq0Zhbpx..zN4qH.VdMDJlBZvoSK', 'Administrator', '8-989-998-9343', 'Active', 'yuLOIuwEQUT5Pbp622UlITEm7PQLmNuDpoeUNGRx7jNgMYQIc9xEQoR9l8LS', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountid`);

--
-- Индексы таблицы `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`budgetid`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Индексы таблицы `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`goalsid`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleid`);

--
-- Индексы таблицы `roleaccess`
--
ALTER TABLE `roleaccess`
  ADD PRIMARY KEY (`roleaccessid`),
  ADD KEY `deleteroleaccess` (`userid`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settingsid`);

--
-- Индексы таблицы `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategoryid`),
  ADD KEY `deletesubquery` (`categoryid`);

--
-- Индексы таблицы `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transactionid`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `account`
--
ALTER TABLE `account`
  MODIFY `accountid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `budget`
--
ALTER TABLE `budget`
  MODIFY `budgetid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `goals`
--
ALTER TABLE `goals`
  MODIFY `goalsid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `roleaccess`
--
ALTER TABLE `roleaccess`
  MODIFY `roleaccessid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `settingsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT для таблицы `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `roleaccess`
--
ALTER TABLE `roleaccess`
  ADD CONSTRAINT `deleteroleaccess` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `deletesubquery` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
