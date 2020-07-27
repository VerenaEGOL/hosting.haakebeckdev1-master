CREATE TABLE `2017_11_22_upn_swutsch` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `anrede` int(1) NOT NULL,
  `antwort` int(1) NOT NULL,
  `vorname` varchar(80) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `nachname` varchar(80) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `strasse` varchar(80) COLLATE utf8_unicode_ci DEFAULT '',
  `plz` varchar(5) COLLATE utf8_unicode_ci DEFAULT '',
  `ort` varchar(80) COLLATE utf8_unicode_ci DEFAULT '',
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `telefon` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `geburtstag` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;