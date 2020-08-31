-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 май 2017 в 16:00
-- Версия на сървъра: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `address_book`
--

-- --------------------------------------------------------

--
-- Структура на таблица `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) NOT NULL,
  `address1` varchar(45) DEFAULT NULL,
  `address2` varchar(45) DEFAULT NULL,
  `post_code` varchar(20) DEFAULT NULL,
  `populated_place` varchar(45) DEFAULT NULL,
  `area` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `addresses`
--

INSERT INTO `addresses` (`id`, `address1`, `address2`, `post_code`, `populated_place`, `area`, `country`) VALUES
(1, 'Ul. &quot;Dimitar Talev&quot; 61', 'ет. 2  ап. 10', '4004', 'Пловдив', 'Пловдив', 'България'),
(2, 'Ul. &quot;Dimitar Talev&quot; 61', 'ет. 2  ап. 10', '4004', 'Пловдив', 'Пловдив', 'България'),
(3, 'Ul. &quot;Dimitar Talev&quot; 61', 'ет. 2  ап. 10', '4004', 'Пловдив', 'Пловдив', 'България'),
(4, 'Ul. &quot;Dimitar Talev&quot; 61', 'ет. 2  ап. 10', '4004', 'Пловдив', 'Пловдив', 'България'),
(5, 'ул. &quot;Димитър Талев&quot; 61', 'ет. 2  ап. 10', '4004', 'Пловдив', 'Пловдив', 'България'),
(6, 'Ul. &quot;Dimitar Talev&quot; 61', 'ет. 2  ап. 10', '4004', 'Пловдив', 'Пловдив', 'България'),
(7, 'fasfas', 'afsa', 'afsfasasf', 'afsafs', 'asasfasff', 'fasfsaasfa'),
(8, 'afsafsasfasf', '', 'asfasfasf', 'afasfasfasf', 'asfasffasfas', ''),
(9, 'ул. &quot;Димитър Талев&quot; 61', 'ет. 2 ап. 10', '4004', 'Пловдив', 'Пловдив', 'България'),
(10, 'ул. &quot;Народни будители&quot; 25', 'ет.1 ап. 1', '4235', 'Нова Загора', 'Сливен', 'България');

-- --------------------------------------------------------

--
-- Структура на таблица `notes`
--

CREATE TABLE `notes` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `notes`
--

INSERT INTO `notes` (`id`, `user_id`, `note`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis leo ac mi pharetra, eu dictum ex pharetra. Proin finibus mi non turpis tempor, vel elementum lacus ultrices. Phasellus sagittis vel dolor nec placerat. Phasellus in nibh at lectus placerat sagittis eu nec est. Donec rhoncus, est eu pharetra lobortis, enim lectus laoreet mauris, vel aliquet lectus neque ut arcu. Aliquam erat volutpat. Pellentesque mollis, lectus in tempus malesuada, lectus tortor mollis diam, ut convallis justo orci quis metus. Proin sed finibus est. Phasellus commodo mi id justo aliquet, quis sodales libero faucibus. Aliquam erat volutpat. Curabitur justo magna, vehicula ut lectus aliquam, dictum pretium eros. Aliquam pellentesque odio id sem lacinia malesuada. Integer consequat, odio sit amet vestibulum interdum, libero elit scelerisque urna, nec convallis turpis orci a lorem.'),
(2, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis leo ac mi pharetra, eu dictum ex pharetra. Proin finibus mi non turpis tempor, vel elementum lacus ultrices. Phasellus sagittis vel dolor nec placerat. Phasellus in nibh at lectus placerat sagittis eu nec est. Donec rhoncus, est eu pharetra lobortis, enim lectus laoreet mauris, vel aliquet lectus neque ut arcu. Aliquam erat volutpat. Pellentesque mollis, lectus in tempus malesuada, lectus tortor mollis diam, ut convallis justo orci quis metus. Proin sed finibus est. Phasellus commodo mi id justo aliquet, quis sodales libero faucibus. Aliquam erat volutpat. Curabitur justo magna, vehicula ut lectus aliquam, dictum pretium eros. Aliquam pellentesque odio id sem lacinia malesuada. Integer consequat, odio sit amet vestibulum interdum, libero elit scelerisque urna, nec convallis turpis orci a lorem.'),
(3, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis leo ac mi pharetra, eu dictum ex pharetra. Proin finibus mi non turpis tempor, vel elementum lacus ultrices. Phasellus sagittis vel dolor nec placerat. Phasellus in nibh at lectus placerat sagittis eu nec est. Donec rhoncus, est eu pharetra lobortis, enim lectus laoreet mauris, vel aliquet lectus neque ut arcu. Aliquam erat volutpat. Pellentesque mollis, lectus in tempus malesuada, lectus tortor mollis diam, ut convallis justo orci quis metus. Proin sed finibus est. Phasellus commodo mi id justo aliquet, quis sodales libero faucibus. Aliquam erat volutpat. Curabitur justo magna, vehicula ut lectus aliquam, dictum pretium eros. Aliquam pellentesque odio id sem lacinia malesuada. Integer consequat, odio sit amet vestibulum interdum, libero elit scelerisque urna, nec convallis turpis orci a lorem.'),
(4, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis leo ac mi pharetra, eu dictum ex pharetra. Proin finibus mi non turpis tempor, vel elementum lacus ultrices. Phasellus sagittis vel dolor nec placerat. Phasellus in nibh at lectus placerat sagittis eu nec est. Donec rhoncus, est eu pharetra lobortis, enim lectus laoreet mauris, vel aliquet lectus neque ut arcu. Aliquam erat volutpat. Pellentesque mollis, lectus in tempus malesuada, lectus tortor mollis diam, ut convallis justo orci quis metus. Proin sed finibus est. Phasellus commodo mi id justo aliquet, quis sodales libero faucibus. Aliquam erat volutpat. Curabitur justo magna, vehicula ut lectus aliquam, dictum pretium eros. Aliquam pellentesque odio id sem lacinia malesuada. Integer consequat, odio sit amet vestibulum interdum, libero elit scelerisque urna, nec convallis turpis orci a lorem.'),
(5, 3, 'asffassfasafsfsasafsfafsa'),
(6, 3, 'asfasfas'),
(7, 4, 'afsasfasf'),
(8, 5, 'У нас'),
(9, 5, 'У баба');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `user_name`, `email`, `phone`) VALUES
(1, 'Иван', 'Петров', 'Георгиев', 'ivancho', 'ivo993@abv.bg', '08842486'),
(2, 'Иван', 'Петров', 'Георгиев', 'ivancho', 'ivo993@abv.bg', '08842486'),
(3, 'afsfas', 'afsfasas', 'fafsasf', 'asfasfasf', 'sfasfafsafs@abv.bg', 'asffasafs'),
(4, 'fasfasafsafs', '', 'asffasasfasf', 'afsasfasf', 'asfasfafs@abv.bg', ''),
(5, 'Ивайло', 'Рангелов', 'Гатев', 'FrostKiller', 'ivo993@abv.bg', '0885005844');

-- --------------------------------------------------------

--
-- Структура на таблица `users_addresses`
--

CREATE TABLE `users_addresses` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `address_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users_addresses`
--

INSERT INTO `users_addresses` (`id`, `user_id`, `address_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 4),
(5, 2, 5),
(6, 2, 6),
(7, 3, 7),
(8, 4, 8),
(9, 5, 9),
(10, 5, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_addresses`
--
ALTER TABLE `users_addresses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users_addresses`
--
ALTER TABLE `users_addresses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
