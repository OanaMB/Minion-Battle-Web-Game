-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: localhost
-- Timp de generare: aug. 04, 2022 la 03:02 PM
-- Versiune server: 10.4.24-MariaDB
-- Versiune PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `minions'_battle_royale`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `all_battles_data_history`
--

CREATE TABLE `all_battles_data_history` (
  `winner` varchar(65) NOT NULL,
  `winner_health` int(10) UNSIGNED NOT NULL,
  `loser` varchar(65) NOT NULL,
  `loser_health` int(10) UNSIGNED NOT NULL,
  `no_of_rounds` int(10) UNSIGNED NOT NULL,
  `no_usage_banana_strike` int(10) UNSIGNED NOT NULL,
  `no_usage_umbrella_shield` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `all_battles_data_history`
--

INSERT INTO `all_battles_data_history` (`winner`, `winner_health`, `loser`, `loser_health`, `no_of_rounds`, `no_usage_banana_strike`, `no_usage_umbrella_shield`, `id`) VALUES
('Evil Guy', 12, 'Tim', 0, 6, 0, 0, 1),
('Evil Guy', 31, 'Tim', 0, 9, 0, 0, 2),
('Evil Guy', 50, 'Tim', 0, 7, 0, 1, 3),
('Evil Guy', 2, 'Tim', 0, 9, 2, 1, 4),
('Evil Guy', 25, 'Tim', 0, 15, 0, 1, 5),
('Tim', 42, 'Evil Guy', 0, 16, 2, 2, 6),
('Tim', 12, 'Evil Guy', 0, 12, 0, 2, 7),
('Tim', 1, 'Evil Guy', 0, 6, 0, 0, 8),
('Tim', 25, 'Evil Guy', 0, 8, 0, 3, 9),
('Tim', 8, 'Evil Guy', 37, 21, 0, 1, 10),
('Tim', 34, 'Evil Guy', 0, 11, 1, 2, 11),
('Tim', 15, 'Evil Guy', 0, 7, 1, 0, 12),
('Tim', 94, 'Evil Guy', 0, 3, 0, 0, 13),
('Evil Guy', 32, 'Tim', 0, 7, 0, 1, 14),
('Tim', 19, 'Evil Guy', 0, 8, 0, 0, 15),
('Tim', 9, 'Evil Guy', 0, 10, 0, 3, 16),
('Tim', 5, 'Evil Guy', 0, 6, 0, 0, 17),
('Evil Guy', 37, 'Tim', 0, 7, 0, 1, 18),
('Tim', 52, 'Evil Guy', 0, 6, 2, 0, 19),
('Evil Guy', 35, 'Tim', 0, 10, 1, 0, 20),
('Evil Guy', 6, 'Tim', 0, 12, 0, 1, 21),
('Evil Guy', 39, 'Tim', 0, 7, 0, 2, 22),
('Tim', 20, 'Evil Guy', 0, 8, 0, 1, 23),
('Tim', 24, 'Evil Guy', 0, 12, 0, 1, 24),
('Evil Guy', 10, 'Tim', 0, 9, 0, 1, 25),
('Tim', 62, 'Evil Guy', 0, 6, 0, 0, 26),
('Evil Guy', 31, 'Tim', 0, 5, 0, 1, 27),
('Tim', 58, 'Evil Guy', 0, 10, 0, 2, 28),
('Evil Guy', 11, 'Tim', 0, 5, 0, 0, 29),
('Evil Guy', 54, 'Tim', 0, 7, 0, 2, 30),
('Evil Guy', 41, 'Tim', 0, 10, 0, 0, 31),
('Tim', 43, 'Evil Guy', 0, 6, 2, 0, 32),
('Tim', 57, 'Evil Guy', 0, 5, 1, 0, 33),
('Tim', 54, 'Evil Guy', 0, 11, 0, 1, 34),
('Tim', 36, 'Evil Guy', 0, 11, 2, 1, 35),
('Evil Guy', 13, 'Tim', 0, 6, 0, 0, 36),
('Tim', 27, 'Evil Guy', 0, 7, 0, 1, 37),
('Tim', 32, 'Evil Guy', 0, 9, 0, 0, 38),
('Evil Guy', 69, 'Tim', 0, 11, 0, 1, 39),
('Tim', 76, 'Evil Guy', 0, 7, 0, 0, 40),
('Evil Guy', 74, 'Tim', 0, 9, 1, 0, 41),
('Tim', 64, 'Evil Guy', 0, 6, 1, 0, 42),
('Evil Guy', 40, 'Tim', 0, 3, 0, 0, 43),
('Tim', 28, 'Evil Guy', 0, 10, 1, 1, 44),
('Tim', 58, 'Evil Guy', 0, 7, 0, 0, 45),
('Tim', 7, 'Evil Guy', 0, 11, 0, 1, 46),
('', 0, '', 0, 0, 0, 0, 47),
('Evil Guy', 51, 'Tim', 0, 9, 0, 1, 48),
('Tim', 7, 'Evil Guy', 0, 6, 0, 0, 49),
('Evil Guy', 49, 'Tim', 0, 9, 0, 2, 50),
('Evil Guy', 43, 'Tim', 0, 3, 0, 0, 51),
('Tim', 79, 'Evil Guy', 0, 4, 1, 0, 52),
('Tim', 16, 'Evil Guy', 0, 14, 0, 2, 53),
('Tim', 7, 'Evil Guy', 0, 13, 1, 1, 54);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `all_battles_data_history`
--
ALTER TABLE `all_battles_data_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `all_battles_data_history`
--
ALTER TABLE `all_battles_data_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
