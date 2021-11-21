-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Lis 2021, 17:45
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `banasbaza`
--
CREATE DATABASE IF NOT EXISTS `banasbaza` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `banasbaza`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `album`
--

DROP TABLE IF EXISTS `album`;
CREATE TABLE `album` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `privacy` tinyint(1) NOT NULL,
  `album_name` varchar(32) NOT NULL,
  `description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `album`:
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date_posted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image_id` bigint(20) UNSIGNED NOT NULL,
  `contents` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `comment`:
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `privacy` tinyint(1) NOT NULL,
  `image_name` varchar(32) NOT NULL,
  `description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `image`:
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `image_album`
--

DROP TABLE IF EXISTS `image_album`;
CREATE TABLE `image_album` (
  `image_id` bigint(20) UNSIGNED NOT NULL,
  `album_id` bigint(20) UNSIGNED NOT NULL,
  `id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `image_album`:
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `image_tag`
--

DROP TABLE IF EXISTS `image_tag`;
CREATE TABLE `image_tag` (
  `image_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `image_tag`:
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `tag`:
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `user`:
--

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `album`
--
ALTER TABLE `album`
  ADD UNIQUE KEY `Id` (`id`);

--
-- Indeksy dla tabeli `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeksy dla tabeli `image`
--
ALTER TABLE `image`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeksy dla tabeli `tag`
--
ALTER TABLE `tag`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `Id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `album`
--
ALTER TABLE `album`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `image`
--
ALTER TABLE `image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tag`
--
ALTER TABLE `tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;


--
-- Metadane
--
USE `phpmyadmin`;

--
-- Metadane dla tabeli album
--

--
-- Metadane dla tabeli comment
--

--
-- Metadane dla tabeli image
--

--
-- Metadane dla tabeli image_album
--

--
-- Metadane dla tabeli image_tag
--

--
-- Metadane dla tabeli tag
--

--
-- Metadane dla tabeli user
--

--
-- Metadane dla Bazy danych banasbaza
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
