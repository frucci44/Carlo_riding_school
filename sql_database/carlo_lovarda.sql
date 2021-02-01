-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2021. Feb 01. 19:58
-- Kiszolgáló verziója: 10.4.17-MariaDB
-- PHP verzió: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `carlo_lovarda`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Kapcsolat`
--

CREATE TABLE `Kapcsolat` (
  `Id` int(11) NOT NULL,
  `Nev` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `Tel` int(15) DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Cim` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Uzenet` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `Kapcsolat`
--
ALTER TABLE `Kapcsolat`
  ADD PRIMARY KEY (`Id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `Kapcsolat`
--
ALTER TABLE `Kapcsolat`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
