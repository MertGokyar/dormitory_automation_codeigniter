-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 May 2023, 12:48:07
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yurtotomasyonu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(250) NOT NULL,
  `admin_sifre` varchar(250) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `yurt_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin`, `admin_sifre`, `admin_id`, `yurt_id`) VALUES
('senademirbas', '$2y$10$ddQ5hhVYT/SDbG7LlU1Y..5syCxAZWLe301ICjONmdGE1vSA.dG.u', 1, 1),
('geokdeniz', '$2y$10$xFSRqwbxk/trC8rrr3kFQuhnm6OJWQSdeCaPK3zuQbTWmg2AqO2Me', 2, 2),
('gokyarmert', '$2y$10$iEezE.yK8DvzkJ5L2jjedeZrtomrmveMMytkUF11aHQKF.Z0ZpW4y', 3, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolumler`
--

CREATE TABLE `bolumler` (
  `bolum_id` int(2) NOT NULL,
  `bolum_adi` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bolumler`
--

INSERT INTO `bolumler` (`bolum_id`, `bolum_adi`) VALUES
(1, 'Bilişim Sistemleri Mühendisliği'),
(2, 'Yazılım Mühendisliği');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `konaklamabilgi`
--

CREATE TABLE `konaklamabilgi` (
  `kb_id` int(5) NOT NULL,
  `giris_tarih` date NOT NULL,
  `cikis_tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `konaklamabilgi`
--

INSERT INTO `konaklamabilgi` (`kb_id`, `giris_tarih`, `cikis_tarih`) VALUES
(1, '2023-05-19', '2023-02-17'),
(2, '2023-05-21', '2023-02-15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odalar`
--

CREATE TABLE `odalar` (
  `oda_id` int(5) NOT NULL,
  `oda_no` varchar(5) NOT NULL,
  `oda_kisi_sayisi` int(1) NOT NULL,
  `oda_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `odalar`
--

INSERT INTO `odalar` (`oda_id`, `oda_no`, `oda_kisi_sayisi`, `oda_aktif`) VALUES
(1, 'Z12', 4, 1),
(2, '106', 4, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odemeler`
--

CREATE TABLE `odemeler` (
  `odeme_id` int(7) NOT NULL,
  `borclu_mu` tinyint(1) NOT NULL,
  `yurt_ucreti` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `odemeler`
--

INSERT INTO `odemeler` (`odeme_id`, `borclu_mu`, `yurt_ucreti`) VALUES
(1, 0, 850),
(2, 1, 800);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenciler`
--

CREATE TABLE `ogrenciler` (
  `ogr_id` int(11) NOT NULL,
  `ogr_ad` varchar(50) NOT NULL,
  `ogr_soyad` varchar(40) NOT NULL,
  `ogr_cinsiyet` varchar(1) NOT NULL,
  `ogr_dg` date NOT NULL,
  `ogr_mail` varchar(80) NOT NULL,
  `ogr_veliAd` varchar(60) NOT NULL,
  `ogr_veliTel` varchar(16) NOT NULL,
  `ogr_veliAdres` varchar(150) NOT NULL,
  `oda_id` int(5) NOT NULL,
  `bolum_id` int(2) NOT NULL,
  `ogr_tcNo` char(11) NOT NULL,
  `odeme_id` int(7) NOT NULL,
  `yurt_id` int(5) NOT NULL,
  `kb_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ogrenciler`
--

INSERT INTO `ogrenciler` (`ogr_id`, `ogr_ad`, `ogr_soyad`, `ogr_cinsiyet`, `ogr_dg`, `ogr_mail`, `ogr_veliAd`, `ogr_veliTel`, `ogr_veliAdres`, `oda_id`, `bolum_id`, `ogr_tcNo`, `odeme_id`, `yurt_id`, `kb_id`) VALUES
(1, 'Mert', 'Gökyar', '0', '2001-11-03', 'mertgokyar@gmail.com', 'Berk', '05345212543', 'Ömerağa, Tahsin Marmara Sk, 41300 İzmit/Kocaeli', 1, 1, '45773245056', 1, 1, 1),
(2, 'Gökdeniz ', 'YILMAZ', '0', '2001-03-26', 'geokdenizyilmaz01@gmail.com', 'Anıl', '05345429528', 'Anılağa, Tahsin Marmara Sk, 41300 İzmit/Kocaeli', 2, 2, '45772142046', 2, 2, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

CREATE TABLE `personel` (
  `prs_id` int(5) NOT NULL,
  `prs_ad` varchar(50) NOT NULL,
  `prs_soyad` varchar(50) NOT NULL,
  `prs_gorevi` varchar(40) NOT NULL,
  `yurt_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`prs_id`, `prs_ad`, `prs_soyad`, `prs_gorevi`, `yurt_id`) VALUES
(1, 'Leyla', 'YILMAZ', 'Yemekhane Aşçısı', 1),
(2, 'Anıl', 'CENGİZ', 'Temizlik Personeli', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoneticiler`
--

CREATE TABLE `yoneticiler` (
  `y_id` int(100) NOT NULL,
  `y_username` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `y_sifre` varchar(250) NOT NULL,
  `yurt_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yoneticiler`
--

INSERT INTO `yoneticiler` (`y_id`, `y_username`, `y_sifre`, `yurt_id`) VALUES
(1, 'anilce', '$2y$10$ZbK2CWk0qaFBU6TsjwlKK..AlItVCsxAfNIdJ2v7qlUpVZhlRhcs.', 1),
(2, 'bsm', '*00A51F3F48415C7', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yurt`
--

CREATE TABLE `yurt` (
  `yurt_id` int(5) NOT NULL,
  `yurt_ad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `yurt_adres` varchar(150) NOT NULL,
  `yurt_telefon` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yurt`
--

INSERT INTO `yurt` (`yurt_id`, `yurt_ad`, `yurt_adres`, `yurt_telefon`) VALUES
(1, 'İkinci Mehmet Erkek Yurdu', 'Sakarya mahallesi, Türbe caddesi, Hülya sokak, İzmit/Kocaeli', 2626258770),
(2, 'Gazi Süleyman Erkek Yurdu', 'İzmit Mahallesi, Yokuş Caddesi, Adnan sokak, İzmit/Kocaeli', 2626858770);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `FK_yurt_id_3` (`yurt_id`);

--
-- Tablo için indeksler `bolumler`
--
ALTER TABLE `bolumler`
  ADD PRIMARY KEY (`bolum_id`);

--
-- Tablo için indeksler `konaklamabilgi`
--
ALTER TABLE `konaklamabilgi`
  ADD PRIMARY KEY (`kb_id`);

--
-- Tablo için indeksler `odalar`
--
ALTER TABLE `odalar`
  ADD PRIMARY KEY (`oda_id`);

--
-- Tablo için indeksler `odemeler`
--
ALTER TABLE `odemeler`
  ADD PRIMARY KEY (`odeme_id`);

--
-- Tablo için indeksler `ogrenciler`
--
ALTER TABLE `ogrenciler`
  ADD PRIMARY KEY (`ogr_id`),
  ADD KEY `FK_yurt_id_4` (`yurt_id`),
  ADD KEY `FK_kb_id` (`kb_id`),
  ADD KEY `FK_odeme_id` (`odeme_id`),
  ADD KEY `FK_bolum_id` (`bolum_id`),
  ADD KEY `FK_oda_id` (`oda_id`);

--
-- Tablo için indeksler `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`prs_id`),
  ADD KEY `FK_yurt_id` (`yurt_id`);

--
-- Tablo için indeksler `yoneticiler`
--
ALTER TABLE `yoneticiler`
  ADD PRIMARY KEY (`y_id`),
  ADD KEY `FK_yurt_id_2` (`yurt_id`);

--
-- Tablo için indeksler `yurt`
--
ALTER TABLE `yurt`
  ADD PRIMARY KEY (`yurt_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `bolumler`
--
ALTER TABLE `bolumler`
  MODIFY `bolum_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `konaklamabilgi`
--
ALTER TABLE `konaklamabilgi`
  MODIFY `kb_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `odalar`
--
ALTER TABLE `odalar`
  MODIFY `oda_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `odemeler`
--
ALTER TABLE `odemeler`
  MODIFY `odeme_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `ogrenciler`
--
ALTER TABLE `ogrenciler`
  MODIFY `ogr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `personel`
--
ALTER TABLE `personel`
  MODIFY `prs_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `yoneticiler`
--
ALTER TABLE `yoneticiler`
  MODIFY `y_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `yurt`
--
ALTER TABLE `yurt`
  MODIFY `yurt_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_yurt_id_3` FOREIGN KEY (`yurt_id`) REFERENCES `yurt` (`yurt_id`);

--
-- Tablo kısıtlamaları `ogrenciler`
--
ALTER TABLE `ogrenciler`
  ADD CONSTRAINT `FK_bolum_id` FOREIGN KEY (`bolum_id`) REFERENCES `bolumler` (`bolum_id`),
  ADD CONSTRAINT `FK_kb_id` FOREIGN KEY (`kb_id`) REFERENCES `konaklamabilgi` (`kb_id`),
  ADD CONSTRAINT `FK_oda_id` FOREIGN KEY (`oda_id`) REFERENCES `odalar` (`oda_id`),
  ADD CONSTRAINT `FK_odeme_id` FOREIGN KEY (`odeme_id`) REFERENCES `odemeler` (`odeme_id`),
  ADD CONSTRAINT `FK_yurt_id_4` FOREIGN KEY (`yurt_id`) REFERENCES `yurt` (`yurt_id`);

--
-- Tablo kısıtlamaları `personel`
--
ALTER TABLE `personel`
  ADD CONSTRAINT `FK_yurt_id` FOREIGN KEY (`yurt_id`) REFERENCES `yurt` (`yurt_id`);

--
-- Tablo kısıtlamaları `yoneticiler`
--
ALTER TABLE `yoneticiler`
  ADD CONSTRAINT `FK_yurt_id_2` FOREIGN KEY (`yurt_id`) REFERENCES `yurt` (`yurt_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
