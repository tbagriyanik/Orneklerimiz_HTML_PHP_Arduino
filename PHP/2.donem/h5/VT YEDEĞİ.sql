-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Mar 2022, 15:27:37
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
-- Veritabanı: `hafta5urun`
--
CREATE DATABASE IF NOT EXISTS `hafta5urun` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hafta5urun`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `kimlik` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `fiyat` float NOT NULL,
  `tur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`kimlik`, `ad`, `fiyat`, `tur`) VALUES
(1, 'elma', 1543.5, 'meyve'),
(5, 'mesela', 33, 'SAÇMA'),
(7, 'asd', 444, 'asd'),
(8, '1222', 2333, '3444'),
(9, 'hazar', 1.9, 'insan'),
(10, 'bişey', 123, 'bakliyat'),
(11, 'bişey', 123, 'bakliyat');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`kimlik`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `kimlik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
