-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 04 Oca 2023, 19:20:16
-- Sunucu sürümü: 5.7.40
-- PHP Sürümü: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `otopark`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arac_kayit`
--

DROP TABLE IF EXISTS `arac_kayit`;
CREATE TABLE IF NOT EXISTS `arac_kayit` (
  `arac_id` int(11) NOT NULL AUTO_INCREMENT,
  `arac_plaka` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arac_kat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arac_blok` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arac_giris_tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `arac_cikis_tarih` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`arac_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `arac_kayit`
--

INSERT INTO `arac_kayit` (`arac_id`, `arac_plaka`, `arac_kat`, `arac_blok`, `arac_giris_tarih`, `arac_cikis_tarih`) VALUES
(14, '16 asa 523', 'KAT 3', 'D BLOK', '2023-01-04 17:02:58', '04-01-2023 18:07:12'),
(11, '16 bbb 102', 'KAT 2', 'C BLOK', '2023-01-04 12:07:57', '04-01-2023 18:00:19'),
(10, '20 ggg 124', 'KAT 3', 'E BLOK', '2023-01-04 12:07:36', NULL),
(12, '41 aa 484255', 'KAT 1', 'B BLOK', '2023-01-04 12:08:32', '04-01-2023 17:04:32'),
(13, '34 bgf 858', 'KAT 3', 'C BLOK', '2023-01-04 12:34:14', NULL),
(15, '34 sdf 524', 'KAT 2', 'B BLOK', '2023-01-04 17:03:18', NULL),
(16, '34 mmg 222', 'KAT 2', 'D BLOK', '2023-01-04 17:03:40', '04-01-2023 17:04:27'),
(17, '10 asw 325', 'KAT 2', 'C BLOK', '2023-01-04 17:03:57', NULL),
(18, '10 kue 563', 'KAT 2', 'D BLOK', '2023-01-04 17:04:10', NULL),
(19, '16 asd 555', 'KAT 3', 'D BLOK', '2023-01-04 17:59:09', NULL),
(20, '34 khk 25', 'KAT 1', 'B BLOK', '2023-01-04 18:12:05', '04-01-2023 18:12:11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_giris`
--

DROP TABLE IF EXISTS `kullanici_giris`;
CREATE TABLE IF NOT EXISTS `kullanici_giris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kullanici_giris`
--

INSERT INTO `kullanici_giris` (`id`, `adsoyad`, `mail`, `sifre`) VALUES
(1, 'arzu çakır', 'arzu@arzu.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
