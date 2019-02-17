-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 16 2019 г., 21:23
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `diploma`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cold_woter`
--

CREATE TABLE `cold_woter` (
  `id` int(11) NOT NULL,
  `id_object` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `january` float DEFAULT NULL,
  `february` float DEFAULT NULL,
  `march` float DEFAULT NULL,
  `april` float DEFAULT NULL,
  `may` float DEFAULT NULL,
  `june` float DEFAULT NULL,
  `juli` float DEFAULT NULL,
  `august` float DEFAULT NULL,
  `september` float DEFAULT NULL,
  `october` float DEFAULT NULL,
  `november` float DEFAULT NULL,
  `december` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `electricity`
--

CREATE TABLE `electricity` (
  `id` int(11) NOT NULL,
  `id_object` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `january` float DEFAULT NULL,
  `february` float DEFAULT NULL,
  `march` float DEFAULT NULL,
  `april` float DEFAULT NULL,
  `may` float DEFAULT NULL,
  `june` float DEFAULT NULL,
  `juli` float DEFAULT NULL,
  `august` float DEFAULT NULL,
  `september` float DEFAULT NULL,
  `october` float DEFAULT NULL,
  `november` float DEFAULT NULL,
  `december` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `heating`
--

CREATE TABLE `heating` (
  `id` int(11) NOT NULL,
  `id_object` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `january` float DEFAULT NULL,
  `february` float DEFAULT NULL,
  `march` float DEFAULT NULL,
  `april` float DEFAULT NULL,
  `may` float DEFAULT NULL,
  `june` float DEFAULT NULL,
  `juli` float DEFAULT NULL,
  `august` float DEFAULT NULL,
  `september` float DEFAULT NULL,
  `october` float DEFAULT NULL,
  `november` float DEFAULT NULL,
  `december` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `heat_loss`
--

CREATE TABLE `heat_loss` (
  `id` int(11) NOT NULL,
  `id_object` int(11) NOT NULL,
  `walls_loss` float NOT NULL,
  `windows_loss` float NOT NULL,
  `floor_loss` float NOT NULL,
  `ceiling_loss` float NOT NULL,
  `doors_loss` float NOT NULL,
  `fencing_structures_loss` float NOT NULL,
  `ventilation_loss` float NOT NULL,
  `sum_all_loss` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `hot_water`
--

CREATE TABLE `hot_water` (
  `id` int(11) NOT NULL,
  `id_object` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `january` float DEFAULT NULL,
  `february` float DEFAULT NULL,
  `march` float DEFAULT NULL,
  `april` float DEFAULT NULL,
  `may` float DEFAULT NULL,
  `june` float DEFAULT NULL,
  `juli` float DEFAULT NULL,
  `august` float DEFAULT NULL,
  `september` float DEFAULT NULL,
  `october` float DEFAULT NULL,
  `november` float DEFAULT NULL,
  `december` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `inference_cold_woter`
--

CREATE TABLE `inference_cold_woter` (
  `id` int(11) NOT NULL,
  `id_object` int(11) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `inference_electricity`
--

CREATE TABLE `inference_electricity` (
  `id` int(11) NOT NULL,
  `id_object` int(11) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `inference_heating`
--

CREATE TABLE `inference_heating` (
  `id` int(11) NOT NULL,
  `id_object` int(11) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `inference_hot_woter`
--

CREATE TABLE `inference_hot_woter` (
  `id` int(11) NOT NULL,
  `id_object` int(11) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `object`
--

CREATE TABLE `object` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` text NOT NULL,
  `address` varchar(1000) NOT NULL,
  `year` int(11) NOT NULL,
  `amount_people` int(11) NOT NULL,
  `working_days` int(11) NOT NULL,
  `heating_days` int(11) NOT NULL,
  `volume_building` float NOT NULL,
  `heat_leakage` float NOT NULL,
  `auditor_name` varchar(255) NOT NULL,
  `uploaded_img` varchar(255) NOT NULL,
  `average_specific_heating_loss` float NOT NULL,
  `class_energy_efficiency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cold_woter`
--
ALTER TABLE `cold_woter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_object` (`id_object`);

--
-- Индексы таблицы `electricity`
--
ALTER TABLE `electricity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_object` (`id_object`);

--
-- Индексы таблицы `heating`
--
ALTER TABLE `heating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_object` (`id_object`);

--
-- Индексы таблицы `heat_loss`
--
ALTER TABLE `heat_loss`
  ADD PRIMARY KEY (`id`),
  ADD KEY `heat_loss_ibfk_1` (`id_object`);

--
-- Индексы таблицы `hot_water`
--
ALTER TABLE `hot_water`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hot_water_ibfk_1` (`id_object`);

--
-- Индексы таблицы `inference_cold_woter`
--
ALTER TABLE `inference_cold_woter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inference_cold_woter_ibfk_1` (`id_object`);

--
-- Индексы таблицы `inference_electricity`
--
ALTER TABLE `inference_electricity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inference_electricity_ibfk_1` (`id_object`);

--
-- Индексы таблицы `inference_heating`
--
ALTER TABLE `inference_heating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inference_heating_ibfk_1` (`id_object`);

--
-- Индексы таблицы `inference_hot_woter`
--
ALTER TABLE `inference_hot_woter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inference_hot_woter_ibfk_1` (`id_object`);

--
-- Индексы таблицы `object`
--
ALTER TABLE `object`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cold_woter`
--
ALTER TABLE `cold_woter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `electricity`
--
ALTER TABLE `electricity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `heating`
--
ALTER TABLE `heating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `heat_loss`
--
ALTER TABLE `heat_loss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `hot_water`
--
ALTER TABLE `hot_water`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `inference_cold_woter`
--
ALTER TABLE `inference_cold_woter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `inference_electricity`
--
ALTER TABLE `inference_electricity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `inference_heating`
--
ALTER TABLE `inference_heating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `inference_hot_woter`
--
ALTER TABLE `inference_hot_woter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `object`
--
ALTER TABLE `object`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cold_woter`
--
ALTER TABLE `cold_woter`
  ADD CONSTRAINT `cold_woter_ibfk_1` FOREIGN KEY (`id_object`) REFERENCES `object` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `electricity`
--
ALTER TABLE `electricity`
  ADD CONSTRAINT `electricity_ibfk_1` FOREIGN KEY (`id_object`) REFERENCES `object` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `heating`
--
ALTER TABLE `heating`
  ADD CONSTRAINT `heating_ibfk_1` FOREIGN KEY (`id_object`) REFERENCES `object` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `heat_loss`
--
ALTER TABLE `heat_loss`
  ADD CONSTRAINT `heat_loss_ibfk_1` FOREIGN KEY (`id_object`) REFERENCES `object` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `hot_water`
--
ALTER TABLE `hot_water`
  ADD CONSTRAINT `hot_water_ibfk_1` FOREIGN KEY (`id_object`) REFERENCES `object` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `inference_cold_woter`
--
ALTER TABLE `inference_cold_woter`
  ADD CONSTRAINT `inference_cold_woter_ibfk_1` FOREIGN KEY (`id_object`) REFERENCES `object` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `inference_electricity`
--
ALTER TABLE `inference_electricity`
  ADD CONSTRAINT `inference_electricity_ibfk_1` FOREIGN KEY (`id_object`) REFERENCES `object` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `inference_heating`
--
ALTER TABLE `inference_heating`
  ADD CONSTRAINT `inference_heating_ibfk_1` FOREIGN KEY (`id_object`) REFERENCES `object` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `inference_hot_woter`
--
ALTER TABLE `inference_hot_woter`
  ADD CONSTRAINT `inference_hot_woter_ibfk_1` FOREIGN KEY (`id_object`) REFERENCES `object` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
