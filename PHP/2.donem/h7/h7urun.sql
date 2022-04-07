-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Mar 2022, 15:27:41
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
-- Veritabanı: `h7urun`
--
CREATE DATABASE IF NOT EXISTS `h7urun` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `h7urun`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE `urun` (
  `id` int(11) NOT NULL,
  `urunAdi` varchar(50) NOT NULL,
  `urunResmi` varchar(150) NOT NULL,
  `fiyat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`id`, `urunAdi`, `urunResmi`, `fiyat`) VALUES
(1, 'ryzen', 'resimler/ryzenAMD.jpg', 1500),
(2, 'intel', 'resimler/i3core.jpg', 1600),
(3, 'Corsair RAM', 'resimler/corsairRAM.jpg', 600),
(4, 'CoolerMaster', 'resimler/coolerMasterKasa.jpg', 2000.55);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
