-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Mar 2022, 13:39:52
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `h6puan`
--
CREATE DATABASE IF NOT EXISTS `h6puan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `h6puan`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `takimlar`
--

CREATE TABLE `takimlar` (
  `id` int(11) NOT NULL,
  `takimAdi` varchar(50) NOT NULL,
  `galibiyet` int(11) NOT NULL,
  `maglubiyet` int(11) NOT NULL,
  `beraberlik` int(11) NOT NULL,
  `atilanGol` int(11) NOT NULL,
  `yenilenGol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `takimlar`
--

INSERT INTO `takimlar` (`id`, `takimAdi`, `galibiyet`, `maglubiyet`, `beraberlik`, `atilanGol`, `yenilenGol`) VALUES
(1, 'Başakşehir', 12, 2, 4, 44, 50),
(2, 'Konyaspor', 14, 3, 2, 33, 22),
(3, 'Fenerbahçe', 13, 2, 3, 45, 33),
(4, 'Galatasaray', 13, 2, 4, 33, 22),
(5, 'Tranbzonspor', 15, 2, 3, 44, 43),
(6, 'Alanyaspor', 10, 2, 4, 22, 30),
(7, 'Karagümrük', 9, 6, 8, 10, 5),
(8, 'Antalyaspor', 9, 5, 4, 55, 55),
(9, 'Hatayspor', 12, 12, 10, 11, 11),
(10, 'Sivasspor', 9, 6, 6, 55, 55);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `takimlar`
--
ALTER TABLE `takimlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `takimlar`
--
ALTER TABLE `takimlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
