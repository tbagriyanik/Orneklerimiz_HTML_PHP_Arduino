-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Şub 2022, 15:17:19
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
-- Veritabanı: `amp12a`
--
CREATE DATABASE IF NOT EXISTS `amp12a` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `amp12a`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenciler`
--

CREATE TABLE `ogrenciler` (
  `id` int(11) NOT NULL,
  `isim` varchar(100) NOT NULL,
  `maas` float NOT NULL,
  `mezunMu` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ogrenciler`
--

INSERT INTO `ogrenciler` (`id`, `isim`, `maas`, `mezunMu`) VALUES
(1, 'ahmet mehmet', 11.333, b'1'),
(2, 'ayşe ğüişçöİı', 22, b'0'),
(3, 'ahmet mehmet', 11.333, b'1'),
(4, 'ayşe fatma', 22.555, b'0');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ogrenciler`
--
ALTER TABLE `ogrenciler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ogrenciler`
--
ALTER TABLE `ogrenciler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Veritabanı: `hafta3`
--
CREATE DATABASE IF NOT EXISTS `hafta3` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hafta3`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `birtablo`
--

CREATE TABLE `birtablo` (
  `kimlik` int(11) NOT NULL,
  `ad` varchar(15) NOT NULL,
  `mezunMu` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `birtablo`
--

INSERT INTO `birtablo` (`kimlik`, `ad`, `mezunMu`) VALUES
(1, 'ahmet', b'1'),
(2, 'ayşe', b'0'),
(3, 'ahmet', b'1'),
(4, 'ayşe', b'0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kimlik` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `parola` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kimlik`, `ad`, `parola`) VALUES
(1, 'amp12a', '123');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `birtablo`
--
ALTER TABLE `birtablo`
  ADD PRIMARY KEY (`kimlik`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kimlik`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `birtablo`
--
ALTER TABLE `birtablo`
  MODIFY `kimlik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kimlik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
