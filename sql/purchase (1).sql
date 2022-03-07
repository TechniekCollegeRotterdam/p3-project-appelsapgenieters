-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 feb 2022 om 14:58
-- Serverversie: 10.4.20-MariaDB
-- PHP-versie: 8.0.9

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
-- Tabelstructuur voor tabel `purchase`
--

CREATE TABLE `purchase` (
  `idpurchase` int(11) NOT NULL,
  `purchasedate` datetime NOT NULL,
  `paidamount` decimal(8,2) NOT NULL,
  `paidinfulldate` datetime NOT NULL,
  `deliverydate` datetime NOT NULL,
  `client` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `purchase`
--

INSERT INTO `purchase` (`idpurchase`, `purchasedate`, `paidamount`, `paidinfulldate`, `deliverydate`, `client`) VALUES
(1, '2015-11-12 10:32:22', '20.00', '2015-11-12 10:32:28', '2015-11-12 11:02:22', 25),
(2, '2016-05-03 18:08:42', '5.79', '2016-05-03 18:10:36', '2016-05-03 17:00:03', 132),
(3, '2016-09-13 11:30:22', '128.00', '2016-09-13 11:40:14', '2016-09-13 12:11:36', 67),
(4, '2021-09-10 21:09:22', '12.64', '2021-09-10 21:11:54', '2021-09-10 22:36:12', 125),
(5, '2019-04-10 16:20:18', '36.00', '2019-04-10 16:43:08', '2019-04-10 17:31:14', 10),
(6, '2022-02-25 16:22:09', '5.79', '2022-02-25 16:36:18', '2022-02-25 16:54:56', 96),
(7, '2014-03-29 21:15:36', '10.00', '2014-03-29 21:36:24', '2014-03-29 22:55:48', 29),
(8, '2014-05-05 17:55:55', '0.00', '2014-05-05 18:09:05', '2014-05-05 19:14:45', 24),
(9, '2017-01-31 18:27:42', '23.00', '2022-02-25 18:36:25', '2017-01-31 18:57:35', 112),
(10, '2019-06-28 11:10:32', '17.90', '2019-06-28 11:14:30', '2019-06-28 11:49:49', 141);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
