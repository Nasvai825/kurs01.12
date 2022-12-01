-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 28 2022 г., 16:18
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sakila`
--

DELIMITER $$
--
-- Процедуры
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `film_in_stock` (IN `p_film_id` INT, IN `p_store_id` INT, OUT `p_film_count` INT)  READS SQL DATA BEGIN
     SELECT inventory_id
     FROM inventory
     WHERE film_id = p_film_id
     AND store_id = p_store_id
     AND inventory_in_stock(inventory_id);

     SELECT FOUND_ROWS() INTO p_film_count;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `film_not_in_stock` (IN `p_film_id` INT, IN `p_store_id` INT, OUT `p_film_count` INT)  READS SQL DATA BEGIN
     SELECT inventory_id
     FROM inventory
     WHERE film_id = p_film_id
     AND store_id = p_store_id
     AND NOT inventory_in_stock(inventory_id);

     SELECT FOUND_ROWS() INTO p_film_count;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `karta`
--

CREATE TABLE `karta` (
  `idkarta` int(11) NOT NULL,
  `Start_kart` date DEFAULT NULL,
  `End_kart` date DEFAULT NULL,
  `stoimost_uslug` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `klient`
--

CREATE TABLE `klient` (
  `idklient` int(11) NOT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `FIO` tinytext DEFAULT NULL,
  `Adress` varchar(60) DEFAULT NULL,
  `karta_idkarta` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `raspisanie`
--

CREATE TABLE `raspisanie` (
  `idRaspisanie` int(11) NOT NULL,
  `Date` datetime DEFAULT NULL,
  `Uslugi_idUslugi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `raspisanie_has_klient`
--

CREATE TABLE `raspisanie_has_klient` (
  `Raspisanie_idRaspisanie` int(11) NOT NULL,
  `klient_idklient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sotrudnic`
--

CREATE TABLE `sotrudnic` (
  `idSotrudnic` int(11) NOT NULL,
  `Phone` varchar(30) DEFAULT NULL,
  `FIO` tinytext DEFAULT NULL,
  `Adress` varchar(45) DEFAULT NULL,
  `Stazh` year(4) DEFAULT NULL,
  `Oklad` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `uslugi`
--

CREATE TABLE `uslugi` (
  `idUslugi` int(11) NOT NULL,
  `Vremya_Zanyatii` time DEFAULT NULL,
  `Name_Uslugi` tinytext DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `karta_idkarta` int(11) NOT NULL,
  `Sotrudnic_idSotrudnic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `zal`
--

CREATE TABLE `zal` (
  `idZal` int(11) NOT NULL,
  `Name_Zal` tinytext DEFAULT NULL,
  `Opisanie` tinytext DEFAULT NULL,
  `Raspisanie_idRaspisanie` int(11) NOT NULL,
  `Sotrudnic_idSotrudnic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `karta`
--
ALTER TABLE `karta`
  ADD PRIMARY KEY (`idkarta`);

--
-- Индексы таблицы `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`idklient`,`karta_idkarta`),
  ADD KEY `fk_klient_karta1_idx` (`karta_idkarta`);

--
-- Индексы таблицы `raspisanie`
--
ALTER TABLE `raspisanie`
  ADD PRIMARY KEY (`idRaspisanie`),
  ADD KEY `fk_Raspisanie_Uslugi1_idx` (`Uslugi_idUslugi`);

--
-- Индексы таблицы `raspisanie_has_klient`
--
ALTER TABLE `raspisanie_has_klient`
  ADD PRIMARY KEY (`Raspisanie_idRaspisanie`,`klient_idklient`),
  ADD KEY `fk_Raspisanie_has_klient_klient1_idx` (`klient_idklient`),
  ADD KEY `fk_Raspisanie_has_klient_Raspisanie1_idx` (`Raspisanie_idRaspisanie`);

--
-- Индексы таблицы `sotrudnic`
--
ALTER TABLE `sotrudnic`
  ADD PRIMARY KEY (`idSotrudnic`);

--
-- Индексы таблицы `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`idUslugi`),
  ADD KEY `fk_Uslugi_karta1_idx` (`karta_idkarta`),
  ADD KEY `fk_Uslugi_Sotrudnic1_idx` (`Sotrudnic_idSotrudnic`);

--
-- Индексы таблицы `zal`
--
ALTER TABLE `zal`
  ADD PRIMARY KEY (`idZal`,`Raspisanie_idRaspisanie`,`Sotrudnic_idSotrudnic`),
  ADD KEY `fk_Zal_Raspisanie1_idx` (`Raspisanie_idRaspisanie`),
  ADD KEY `fk_Zal_Sotrudnic1_idx` (`Sotrudnic_idSotrudnic`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `karta`
--
ALTER TABLE `karta`
  MODIFY `idkarta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `klient`
--
ALTER TABLE `klient`
  MODIFY `idklient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `raspisanie`
--
ALTER TABLE `raspisanie`
  MODIFY `idRaspisanie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sotrudnic`
--
ALTER TABLE `sotrudnic`
  MODIFY `idSotrudnic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `idUslugi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `zal`
--
ALTER TABLE `zal`
  MODIFY `idZal` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `klient`
--
ALTER TABLE `klient`
  ADD CONSTRAINT `fk_klient_karta1` FOREIGN KEY (`karta_idkarta`) REFERENCES `karta` (`idkarta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `raspisanie`
--
ALTER TABLE `raspisanie`
  ADD CONSTRAINT `fk_Raspisanie_Uslugi1` FOREIGN KEY (`Uslugi_idUslugi`) REFERENCES `uslugi` (`idUslugi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `raspisanie_has_klient`
--
ALTER TABLE `raspisanie_has_klient`
  ADD CONSTRAINT `fk_Raspisanie_has_klient_Raspisanie1` FOREIGN KEY (`Raspisanie_idRaspisanie`) REFERENCES `raspisanie` (`idRaspisanie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Raspisanie_has_klient_klient1` FOREIGN KEY (`klient_idklient`) REFERENCES `klient` (`idklient`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `uslugi`
--
ALTER TABLE `uslugi`
  ADD CONSTRAINT `fk_Uslugi_Sotrudnic1` FOREIGN KEY (`Sotrudnic_idSotrudnic`) REFERENCES `sotrudnic` (`idSotrudnic`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Uslugi_karta1` FOREIGN KEY (`karta_idkarta`) REFERENCES `karta` (`idkarta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `zal`
--
ALTER TABLE `zal`
  ADD CONSTRAINT `fk_Zal_Raspisanie1` FOREIGN KEY (`Raspisanie_idRaspisanie`) REFERENCES `raspisanie` (`idRaspisanie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Zal_Sotrudnic1` FOREIGN KEY (`Sotrudnic_idSotrudnic`) REFERENCES `sotrudnic` (`idSotrudnic`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
