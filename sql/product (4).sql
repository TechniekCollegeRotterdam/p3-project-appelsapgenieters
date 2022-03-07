-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 feb 2022 om 14:04
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
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `idproduct` int(5) NOT NULL,
  `typeid` int(5) NOT NULL,
  `stockquantity` int(6) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `imageref` varchar(20) NOT NULL,
  `prodname` varchar(15) NOT NULL,
  `proddesc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`idproduct`, `typeid`, `stockquantity`, `price`, `imageref`, `prodname`, `proddesc`) VALUES
(1, 5, 1, '1.85', 'Rivella1.jpg', 'Rivella Origina', 'Rivella is dé licht '),
(2, 3, 1, '7.98', 'ArrogantFrogSingleBi', 'ARROGANT FROG S', 'Een mooi gemaakte ro'),
(3, 5, 1, '2.03', 'rivella2.jpg', 'Rivella Cranber', 'Het recept van Rivel'),
(4, 3, 1, '10.65', 'CantinaDiVeronaBier.', 'CANTINA DI VERO', 'Met natuurlijke ingr'),
(5, 5, 1, '2.29', 'rivella3.jpg', 'Rivella Green T', 'Ripasso vergist voor'),
(6, 8, 1, '2.59', 'Liptonicetea1.jpg', 'Lipton Ice Tea ', 'Lipton Ice Tea Green'),
(7, 5, 1, '2.79', 'Liptonicetea2.jpg', 'Lipton Ice Tea ', 'Lipton Ice Tea Green'),
(8, 2, 1, '34.99', 'POMMERYBRUTROYALCham', 'POMMERY BRUT RO', 'Frisse, levendige, f'),
(9, 5, 1, '2.79', 'Liptonicetea3.jpg', 'Lipton Ice Tea ', 'Frisse, levendige, f'),
(10, 5, 1, '1.63', 'CrystalClear1.jpg', 'Crystal Clear S', 'Crystal Clear is een'),
(11, 5, 1, '1.63', 'CrystalClear2.jpg', 'Crystal Clear S', 'Crystal Clear is een'),
(12, 6, 1, '0.99', 'Spamineraalwater.jpg', 'Spa Mineraalwat', 'Natuurlijk mineraalw'),
(13, 5, 1, '1.63', 'Crystalclear3.jpg', 'Crystal Clear S', 'Crystal Clear is een'),
(14, 5, 1, '1.67', 'CrystalClear4.jpg', 'Crystal Clear S', 'Crystal Clear is een'),
(15, 6, 1, '1.09', 'SpaIntense.jpg', 'Spa Intense', 'Natuurlijk mineraalw'),
(16, 5, 1, '1.73', 'herocassis1.jpg', 'Hero Cassis Zer', 'Hero Cassis Zero is '),
(17, 5, 1, '1.73', 'herocassis2.jpg', 'Hero Cassis 1,2', 'Hero \'THE ORIGINAL\' '),
(18, 7, 8, '3.25', 'yakultoriginal.jpg', 'Yakult Drink or', ' Gefermenteerde melk'),
(19, 5, 1, '2.03', 'fantacassis1.jpg', 'Fanta Cassis 1,', 'Proef de heerlijke c'),
(20, 7, 1, '1.45', 'OpIsOptimel.jpg', 'Optimel Drink f', 'Magere drinkyoghurt '),
(21, 4, 1, '2.45', 'campinaopjemel.jpg', 'Campina Halfvol', 'Een glas verse melk '),
(22, 6, 1, '1.05', 'spafinesse.jpg', 'Spa Finesse', 'Natuurlijk bruisend '),
(23, 7, 1, '1.87', 'chocolaOpjeMel.jpg', 'Chocolademelk v', 'Romig, vol van smaak'),
(24, 6, 6, '5.79', 'Spamineraalwater6x.j', 'Spa Mineraalwat', 'Natuurlijk mineraalw'),
(25, 8, 1, '1.45', 'TaksiTropischFruit.j', 'Taksi Tropisch ', 'Drank met de heerlij'),
(26, 3, 24, '13.47', 'heineken.jpg', 'heineken 30cl', 'Heineken is een goud'),
(27, 3, 24, '17.99', 'HertogJan.jpg', 'Hertog Jan Natu', 'Hertog Jan pilsener '),
(28, 8, 1, '1.99', 'IceTeaLemon.jpg', 'Lipton Ice tea ', 'Lipton ice tea peach'),
(29, 8, 1, '1.99', 'IceTeaPeach.jpg', 'Lipton Ice Tea ', 'Lipton ice tea peach'),
(30, 3, 6, '8.99', 'ExtraCorona.jpg', 'Corona Extra pi', 'Corona extra: het bi'),
(31, 1, 1, '5.29', 'Lindeman\'sWijn.jpg', 'Lindeman\'s Sout', 'Altijd-goed-wijn gem'),
(32, 2, 1, '35.99', 'PiperScheidziek.jpg', 'Piper Heidsieck', 'De Piper-Heidsieck C'),
(33, 2, 1, '59.00', 'RDeRuinart.jpg', 'R DE RUINART 75', 'Sinds de oprichting '),
(34, 4, 1, '2.09', 'Biologischemelk.jpg', 'AH Biologisch H', 'Biologische halfvoll'),
(35, 4, 4, '4.79', 'melk4pakjes.jpg', 'Campina Langlek', 'Campina langlekker i'),
(36, 2, 1, '62.00', 'BollingChampagne.jpg', 'BOLLINGER BRUT ', 'Helder, lichtgeel va');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idproduct`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
