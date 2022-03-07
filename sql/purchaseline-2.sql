-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Gegenereerd op: 25 feb 2022 om 13:05
-- Serverversie: 5.7.34
-- PHP-versie: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appelsapgenieters`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `purchaseline`
--

CREATE TABLE `purchaseline` (
  `idpurchaseline` int(5) NOT NULL,
  `productid` int(5) NOT NULL,
  `quantity` int(3) NOT NULL,
  `pricecharged` decimal(7,2) NOT NULL,
  `purchaseid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `purchaseline`
--

INSERT INTO `purchaseline` (`idpurchaseline`, `productid`, `quantity`, `pricecharged`, `purchaseid`) VALUES
(1, 1, 1, '1.00', 1),
(2, 2, 1, '1.00', 2),
(3, 3, 3, '6.00', 3),
(4, 4, 2, '3.00', 4),
(5, 5, 1, '2.00', 5),
(6, 6, 5, '18.00', 6),
(7, 7, 1, '5.00', 7),
(8, 8, 10, '12.00', 8),
(9, 9, 11, '40.00', 9),
(10, 10, 4, '6.00', 10),
(11, 11, 9, '13.00', 11),
(12, 12, 7, '17.00', 12),
(13, 13, 3, '12.00', 13),
(14, 14, 3, '34.00', 14),
(15, 15, 1, '3.00', 15),
(16, 16, 20, '80.00', 16),
(17, 17, 10, '22.00', 17),
(18, 18, 5, '20.00', 18),
(19, 19, 12, '34.00', 19),
(20, 20, 2, '4.00', 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
