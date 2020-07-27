CREATE TABLE `2017_12_15_Heimspiel` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `antw` int(2) unsigned NOT NULL,
  `anrede` varchar(10) NOT NULL,
  `v_name` varchar(50) NOT NULL,
  `n_name` varchar(50) NOT NULL,
  `strasse` varchar(80) NOT NULL,
  `plz` varchar(15) NOT NULL,
  `ort` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `geburtstag` varchar(15) NOT NULL,
  `eintrag` int(13) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
