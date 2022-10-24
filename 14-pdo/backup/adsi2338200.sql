-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-10-2022 a las 18:52:43
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adsi2338200`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gyms`
--

CREATE TABLE `gyms` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gyms`
--

INSERT INTO `gyms` (`id`, `name`) VALUES
(1, 'Palette'),
(2, 'Rocket'),
(3, 'Rockstone');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemons`
--

CREATE TABLE `pokemons` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `strength` int(11) NOT NULL,
  `stamina` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `accuracy` int(11) NOT NULL,
  `image` varchar(64) NOT NULL DEFAULT 'public/images/pokeball.png',
  `trainer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pokemons`
--

INSERT INTO `pokemons` (`id`, `name`, `type`, `strength`, `stamina`, `speed`, `accuracy`, `image`, `trainer_id`) VALUES
(1, 'pikachu', 'Electric', 90, 80, 96, 79, 'public/images/1663342522.png', 1),
(2, 'charmander', 'Fire', 95, 78, 80, 82, 'public/images/1663342476.png', 1),
(3, 'bulbasaour', 'Grass', 80, 88, 70, 75, 'public/images/1663342398.png', 1),
(4, 'squirtle', 'Water', 70, 90, 75, 90, 'public/images/1663342493.png', 2),
(5, 'Snorlax', 'Normal', 180, 320, 30, 180, '../public/images/1664895287.png', 1),
(6, 'Vaporeon', 'Water', 186, 260, 90, 168, 'public/images/pokeball.png', 2),
(7, 'Lapras', 'Water', 111, 255, 100, 168, 'public/images/pokeball.png', 1),
(8, 'Blastoise', 'Water', 720, 158, 70, 222, 'public/images/pokeball.png', 2),
(9, 'Golem', 'Water', 500, 160, 80, 198, 'public/images/pokeball.png', 1),
(10, 'Dragonite', 'Dragon', 900, 250, 120, 182, 'public/images/pokeball.png', 1),
(11, 'Exeggutor', 'Grass', 596, 190, 90, 232, 'public/images/pokeball.png', 2),
(12, 'Omaster', 'Rock', 1500, 140, 112, 202, 'public/images/pokeball.png', 1),
(13, 'Muk', 'Poison', 1070, 210, 112, 180, 'public/images/pokeball.png', 1),
(14, 'Onix', 'Rock', 662, 70, 80, 90, 'public/images/pokeball.png', 1),
(15, 'Poliwag', 'Water', 815, 80, 70, 108, 'public/images/pokeball.png', 4),
(16, 'Mankey', 'Water', 563, 80, 70, 122, 'public/images/pokeball.png', 1),
(17, 'Magnemite', 'Electric', 750, 50, 40, 128, 'public/images/pokeball.png', 4),
(18, 'Pidgey', 'Normal', 818, 80, 95, 90, 'public/images/pokeball.png', 1),
(19, 'Gastly', 'Ghost', 750, 60, 60, 82, 'public/images/pokeball.png', 4),
(20, 'Rattata', 'Normal', 810, 60, 65, 22, 'public/images/pokeball.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `level` int(11) NOT NULL DEFAULT 1,
  `email` varchar(32) NOT NULL,
  `photo` varchar(64) NOT NULL DEFAULT 'public/images/trainer.png',
  `password` varchar(64) NOT NULL DEFAULT '827ccb0eea8a706c4c34a16891f84e7b',
  `gym_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `level`, `email`, `photo`, `password`, `gym_id`) VALUES
(1, 'Ash Ketchum', 1, 'ash@gmail.com', '../public/images/1664899933.png', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(2, 'Brock', 5, 'brock@gmail.com', 'public/images/trainer.png', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(3, 'Misty', 4, 'misty@gmail.com', 'public/images/trainer.png', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(4, 'Serena', 4, 'serena@gmail.com', 'public/images/trainer.png', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(5, 'Oak', 9, 'oak@gmail.com', 'public/images/trainer.png', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(6, 'Zaphir', 3, 'zaphir@gmail.com', '../public/images/1664899920.png', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_pokemons`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_pokemons` (
`name_trainer` varchar(32)
,`name_gym` varchar(32)
,`num_pokemons` bigint(21)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `view_pokemons`
--
DROP TABLE IF EXISTS `view_pokemons`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pokemons`  AS  select `trainers`.`name` AS `name_trainer`,`gyms`.`name` AS `name_gym`,count(`pokemons`.`id`) AS `num_pokemons` from ((`trainers` left join `gyms` on(`trainers`.`gym_id` = `gyms`.`id`)) left join `pokemons` on(`pokemons`.`trainer_id` = `trainers`.`id`)) group by `trainers`.`id` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gyms`
--
ALTER TABLE `gyms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `pokemons`
--
ALTER TABLE `pokemons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indices de la tabla `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `gym_id` (`gym_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gyms`
--
ALTER TABLE `gyms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pokemons`
--
ALTER TABLE `pokemons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pokemons`
--
ALTER TABLE `pokemons`
  ADD CONSTRAINT `pokemons_ibfk_1` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`);

--
-- Filtros para la tabla `trainers`
--
ALTER TABLE `trainers`
  ADD CONSTRAINT `trainers_ibfk_1` FOREIGN KEY (`gym_id`) REFERENCES `gyms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
