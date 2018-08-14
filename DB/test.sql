-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Авг 14 2018 г., 19:08
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `login` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `role` varchar(5) CHARACTER SET utf8 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `dateCreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`name`, `login`, `email`, `role`, `password`, `dateCreated`) VALUES
('Admin', 'Admin', 'admin@mail.ru', 'admin', 'admin', '2013-08-20'),
('Djohn Doe', 'Djon', 'DjonDoe@mail.ru', 'user', 'Djon', '2012-08-20'),
('Gun Gunner', 'Doom', 'gunner@mail.tu', 'admin', 'Gunner', '2013-08-20'),
('Ð˜Ð²Ð°Ð½Ð¾Ð²Ð° ÐÐ½Ð°ÑÑ‚Ð°ÑÐ¸Ñ', 'IvanovaA', 'Ivanova@mail.ru', 'user', 'ivanova', '2012-08-20'),
('John Dorian', 'JD', 'JD@hotmail.com', 'user', 'Eagle', '2012-08-20'),
('Aleks Low', 'LowAl', 'aleks@mail.ru', 'user', 'aleks', '2012-08-20'),
('ÐÐ¾Ð²Ñ‹Ð¹ ÐŸÐ¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒ', 'NewPol', 'NewPol@mail.ru', 'user', 'New', '2012-08-20'),
('ÐŸÐµÑ‚Ñ€Ð¾Ð²', 'Petrov', 'petrov@mail.ru', 'user', 'petrov', '2010-08-20'),
('ÐŸÐµÑ‚Ñ€Ð¾Ð²Ð° ÐžÐ»ÑŒÐ³Ð°', 'Petrova', 'PetroOlga@mail.ru', 'user', 'Petrova', '2012-08-20'),
('Ð¡Ð¸Ð´Ð¾Ñ€Ð¾Ð²', 'Sidorov', 'sidorov@mail.ru', 'user', 'sidorov', '2012-08-20'),
('Ð˜Ð²Ð°Ð½Ð¾Ð²', 'Vanja', 'ivanov@gmail.com', 'user', 'ivanov', '2010-08-20');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
