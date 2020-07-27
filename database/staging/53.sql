CREATE TABLE `werder_kader_2019` (
  `id` int(11) NOT NULL,
  `vorname` varchar(50) NOT NULL,
  `nachname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `bei_werder_seit` date NOT NULL,
  `groesse` float NOT NULL,
  `gewicht` float NOT NULL,
  `nation` varchar(50) NOT NULL,
  `geburtstag` date NOT NULL,
  `geburtsort` varchar(50) NOT NULL,
  `familienstand` varchar(100) NOT NULL,
  `kinder` varchar(100) NOT NULL,
  `erfolge` text NOT NULL,
  `vereine` text NOT NULL,
  `trainerlaufbahn` text NOT NULL,
  `trainererfolge` text NOT NULL,
  `spielerlaufbahn` text NOT NULL,
  `bild` varchar(100) NOT NULL,
  `rueckennummer` int(11) NOT NULL,
  `einsaetze` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `werder_kader_2019`
--

INSERT INTO `werder_kader_2019` (`id`, `vorname`, `nachname`, `position`, `bei_werder_seit`, `groesse`, `gewicht`, `nation`, `geburtstag`, `geburtsort`, `familienstand`, `kinder`, `erfolge`, `vereine`, `trainerlaufbahn`, `trainererfolge`, `spielerlaufbahn`, `bild`, `rueckennummer`, `einsaetze`) VALUES
(1, 'Jirí', 'Pavlenka', 'Torwart', '2017-07-01', 196, 81, 'Tschechien', '1992-04-04', 'Hlucin', 'verlobt mit Freundin Misa', '', 'Tschechischer Meister 2017', 'FC Banik Ostrau, FC Hlucin, Slavia Prag', '', '', '', 'Pavlenka.png', 1, 'BUNDESLIGA: 34 Spiele<br>\r\nDFB-POKAL: 4 Spiele'),
(2, 'Stefanos', 'Kapino', 'Torwart', '2018-08-01', 196, 85, 'Griechenland', '1994-03-18', 'Piraeus', '', '', '', '', '', '', '', 'Kapino.png', 27, 'BUNDESLIGA: 2 Spiele\r\nCHAMPIONSHIP: 4 Spiele\r\nSUPER LEAGUE: 67 Spiele\r\nCHAMPIONS LEAGUE: 1 Spiel\r\nCHAMPIONS LEAGUE QUALIFIKATION: 2 Spiele\r\nEUROPA LEAGUE QUALIFIKATION: 2 Spiele\r\nGRIECHISCHER POKAL: 15 Spiele\r\nA-LÄNDERSPIELE: 9 Spiele<br><br>'),
(3, 'Luca', 'Plogmann', 'Torwart', '2017-08-01', 188, 78, 'Deutschland', '2000-03-10', 'Bremen', 'ledig', '', 'Norddeutscher Meister mit der U 17 2016/17', '', '', '', '', 'Plogmann.png', 40, 'REGIONALLIGA NORD: 1 Spiel'),
(4, 'Felix', 'Beijmo', 'Abwehr', '2017-07-01', 185, 77, 'Schweden', '1998-01-31', 'Stockholm', 'ledig', '', 'Schwedischer Pokalsieger 2018', 'Djurgardens IF', '', '', '', 'Beijmo.png', 2, 'ALLSVENSKAN: 37 Spiele / 3 Tore\r\nSVENSKA CUPEN: 14 Spiele / 2 Tore<br><br>'),
(5, 'Ludwig', 'Augustinsson', 'Abwehr', '2017-07-01', 181, 76, 'Schweden', '1994-04-21', 'Stockholm', 'ledig', '', 'U 21-Europameister 2015, Dänischer Meister 2016 und 2017, Dänischer Pokalsieger 2015, 2016 und 2017, Schwedischer Pokalsieger 2013', 'IF Brommapojkarna, IFK Göteborg, FC Kopenhagen', '', '', '', 'Augustinsson.png', 5, 'DÄNISCHE LIGA: 70 Spiele / 3 Tore\r\nSCHWEDISCHE LIGA: 29 Spiele / 1 Tor\r\nEUROPA LEAGUE: 4 Spiele\r\nEUROPA LEAGUE QUALITFIKATION: 9 Spiele\r\nCHAMPIONS LEAGUE: 6 Spiele\r\nCHAMPIONS LEAGUE QUALIFIKATION: 6 Spiele \r\nA-LÄNDERSPIELE: 20 Spiele / 1 Tor\r\nBUNDESLIGA: 29 Spiele\r\nDFB-POKAL: 4 Spiele<br><br>'),
(6, 'Milos', 'Veljkovic', 'Abwehr', '2016-02-01', 188, 85, 'Serbien/Schweiz', '1995-09-26', 'Basel', '', '', 'WM-Teilnehmer 2018, U 20-Weltmeister mit Serbien, U 19-Europameister mit Serbien', 'Tottenham Hotspur, Carlton Athletic, Middlesbrough', '', '', '', 'Veljkovic.png', 13, 'BUNDESLIGA: 59 Spiele / 1 Tor\r\n3. LIGA: 8 Spiele \r\nPREMIER LEAGUE: 2 Spiele\r\nU 21 PREMIER LEAGUE: 41 Spiele / 2 Tore\r\nDFB-POKAL: 5 Spiele\r\nFA-CUP: 1 Spiel\r\nA-LÄNDERSPIELE: 3 Spiele<br><br>'),
(7, 'Sebastian', 'Langkamp', 'Abwehr', '2018-01-31', 191, 85, 'Deutschland', '1988-01-15', 'Speyer', '', '', 'UI-Cup-Sieger 2007/08 mit dem Hamburger SV', 'Hertha BSC, FC Augsburg, Karlsruher SC, Hamburger HSV, FC Bayern München (Jugend), Preußen Münster (Jugend)', '', '', '', 'Langkamp.png', 15, 'BUNDESLIGA: 162 Spiele / 6 Tore\r\n2. BUNDESLIGA: 50 Spiele / 3 Tore\r\nDFB-POKAL: 17 Spiele\r\nEUROPA LEAGUE: 3 Spiele\r\nEUROPA LEAGUE QUALIFIKATION: 2 Spiele<br><br>'),
(8, 'Niklas', 'Moisander', 'Abwehr', '2018-01-31', 183, 75, 'Finnland', '1985-09-29', 'Turku', 'Verheiratet mit Caroline', 'Tochter Stella', 'Niederländischer Meister (2009, 2013)', 'Sampdoria Genua, Ajax Amsterdam, AZ Alkmaar, FC Zwolle, Ajax Amsterdam, Turun Palloseura', '', '', '', 'Moisander.png', 18, 'BUNDESLIGA: 55 Spiele\r\nDFB-POKAL: 4 Spiele\r\nEREDIVISE: 188 Spiele / 8 Tore\r\nJUPILER LEAGUE: 72 Spiele / 4 Tore\r\nSERIE A: 22 Spiele\r\nCHAMPIONS LEAGUE: 20 Spiele / 2 Tore\r\nEUROPA LEAGUE: 19 Spiele / 1 Tor\r\nA-LÄNDERSPIELE: 62 Spiele / 2 Tore<br><br>'),
(10, 'Theodor Gebre ', 'Selassie', 'Abwehr', '2012-07-01', 181, 71, 'Tschechien', '1986-12-24', 'Trebic', 'verheiratet mit Leona', 'Söhne Noe und Eli', 'Tschechischer Meister 2012 mit Slovan Liberec und 2009 und 2008 mit Slavia Prag, Erreichen des Viertelfinals der EURO 2012', 'Slovan Liberec, Slavia Prag, SK Velke Mezirici, FC Vysocina Jilhava (alle Tschechien)', '', '', '', 'Selassie.png', 23, 'BUNDESLIGA: 177 Spiele / 15 Tore\r\nCHAMPIONS LEAGUE QUALIFIKATION: 1 Spiel\r\nEUROPA LEAGUE QUALIFIKATION: 4 Spiele\r\nDFB-POKAL: 10 Spiele\r\nTSCHECHISCHE LIGA: 108 Spiele / 8 Tore\r\nA-LÄNDERSPIELE: 47 Spiele / 3 Tore<br><br>'),
(11, 'Marco', 'Friedl', 'Abwehr', '2019-07-01', 187, 71, 'Österreich', '1998-03-16', 'Kirchbichl', 'ledig', '', 'Superpokalsieger 17/18 mit Bayern München', 'FC Bayern München, FC Kufstein (Jugend)', '', '', '', 'Friedl.png', 32, 'BUNDESLIGA: 10 Spiele\r\nCHAMPIONS LEAGUE: 1 Spiel\r\n3. LIGA: 1 Spielx<br><br>'),
(12, 'Kevin', 'Möhwald', 'Mittelfeld', '2018-07-01', 183, 77, 'Deutschland', '1993-07-03', 'Erfurt', '', '', 'Aufstieg in die Bundesliga mit dem 1. FC Nürnberg 2018', 'Rot-Weiss Erfurt, 1. FC Nürnberg', '', '', '', 'Moehwald.png', 6, '2. BUNDESLIGA: 87 Spiele / 12 Tore\r\n3. LIGA: 103 Spiele / 12 Tore\r\nDFB-POKAL: 6 Spiele<br><br>'),
(13, 'Milot', 'Rashica', 'Mittelfeld', '2018-01-31', 177, 73, 'Kosovo', '1996-06-28', 'Vushtrri', 'ledig, Freundin Belkiz', '', 'Niederländischer Pokalsieger 16/17 mit Vitesse Arnheim', 'Vitesse Arnheim, Kosova Vushtrri', '', '', '', 'Rashica.png', 7, 'EREDIVISIE: 83 Spiele / 13 Tore\r\nKNVB-POKAL: 8 Spiele / 2 Tore\r\nEUROPA LEAGUE: 6 Spiele\r\nEUROPA LEAGUE QUALIFIKATION: 2 Spiele\r\nA-LÄNDERSPIELE: 11 Spiele\r\nBUNDESLIGA: 9 Spiele / 1 Tor\r\nDFB-POKAL: 1 Spiele\r\nA-LÄNDERSPIELE: 12 Spiele<br><br>'),
(14, 'Nuri', 'Sahin', 'Mittelfeld', '2018-08-31', 180, 73, 'Türkei', '1988-09-05', 'Lüdenscheid', '', '', 'Deutscher Meister 2011, DFB-Pokalsieger 2017, Deutscher Supercup-Sieger 2014, 2015, Spanischer Meister 2012, KNVB-Pokal 2008', 'Borussia Dortmund, Feynoord Rotterdam (Leihe), Borussia Dortmund, Real Madrid, FC Liverpool (Leihe), Borussia Dortmund', '', '', '', 'Sahin.png', 17, 'BUNDESLIGA: 223 Spiele / 21 Tore\r\nDFB-POKAL: 15 Spiele / 2 Tore\r\nLA LIGA: 4 Spiele\r\nPREMIER LEAGUE: 7 Spiele / 1 Tor\r\nEREDIVISIE: 29 Spiele / 6 Tore\r\nA-LÄNDERSPIELE: 52 Spiele / 2 Tore<br><br>'),
(15, 'Fin', 'Bartels', 'Mittelfeld', '2014-07-01', 176, 69, 'Deutschland', '1987-02-07', 'Kiel', 'verheiratet mit Jessika', 'Töchter Lina und Mila, Sohn Mika', '', 'FC St.Pauli, Hansa Rostock, Holstein Kiel, SpVg Eidertal Molfsee, TSV Russee', '', '', '', 'Bartels.png', 22, 'BUNDESLIGA: 154 Spiele / 28 Tore\r\nDFB-POKAL: 17 Spiele / 2 Tore\r\n2. BUNDESLIGA: 144 Spiele / 30 Tore<br><br>'),
(16, 'Davy', 'Klaassen', 'Mittelfeld', '2018-07-27', 179, 70, 'Niederlande', '1993-02-21', 'Hilversum', 'ledig, Freundin Laura', '', '3x Niederländischer Meister 2011/12, 2012/2013, 2013/2014, 1x Niederländischer Superpokal Sieger 2014, Europa League Finalist 2017', 'FC Everton, Ajax Amsterdam', '', '', '', 'Klaassen.png', 30, 'EREDIVISIE: 126 Spiele / 44 Tore\r\nNIEDERLÄNDISCHER POKAL: 8 Spiele\r\nPREMIER LEAGUE: 7 Spiele\r\nFA CUP: 1 Spiel \r\nCHAMPIONS LEAGUE: 11 Spiele / 2 Tore\r\nCHAMPIONS LEAGUE QUALIFIKATION: 6 Spiele / 6 Tore\r\nEUROPA LEAGUE: 31 Spiele / 3 Tore\r\nEUROPA LEAGUE QUALIFIKATION: 5 Spiele\r\nA-LÄNDERSPIELE: 16 Spiele / 4 Tore<br><br>'),
(17, 'Maximilian', 'Eggestein', 'Mittelfeld', '2011-07-01', 181, 75, 'Deutschland', '1996-12-08', 'Hannover', 'ledig', '', 'Aufstieg in die 3. Liga 2015 mit Werder Bremen U 23', 'TSV Havelse', '', '', '', 'M-Eggestein.png', 35, 'BUNDESLIGA: 57 Spiele / 5 Tore\r\nDFB-POKAL: 5 Spiele\r\n3. LIGA: 22 Spiele / 3 Tore\r\nREGIONALLIGA NORD: 32 Spiele / 4 Tore<br><br>'),
(18, 'Philipp', 'Bargfrede', 'Mittelfeld', '2004-07-01', 174, 71, 'Deutschland', '1989-03-03', 'Zeven', 'verheiratet mit Carola', 'Sohn Elias, Tochter Sophia', 'Erreichen der Champions League 2011 mit Werder Bremen, DFB-Pokal-Sieger 2009 mit Werder Bremen, UEFA-Pokal-Finalist 2009 mit Werder Bremen, Norddeutscher U-19-Meister 2007 mit Werder Bremen', 'Werder Bremen Jugend, TuS Heeslingen', '', '', '', 'Bargfrede.png', 44, 'BUNDESLIGA: 175 Spiele \r\nDFB-POKAL: 15 Spiele / 1 Tor\r\n3.LIGA: 15 Spiele / 1 Tor\r\nCHAMPIONS LEAGUE: 6 Spiele\r\nCHAMPIONS LEAGUE QUALIFIKATION: 1 Spiel\r\nEUROPA LEAGUE: 6 Spiele\r\nEUROPA LEAGUE QUALIFIKATION: 1 Spiel<br><br>'),
(19, 'Claudio', 'Pizarro', 'Angriff', '2018-07-29', 184, 84, 'Peru', '1978-10-03', 'Callao', 'verheiratet mit Karla', 'zwei Söhne und eine Tochter', 'Erfolgreichster ausländischer Torschütze der Bundesliga, 6x DFB-Pokalsieger (u.a. 2009 mit Werder Bremen), UEFA-Cup-Finalist 2009 mit Werder Bremen, sechsfacher Deutscher Meister sowie Champions-League-Sieger 2013 mit dem FC Bayern', '1. FC Köln, SV Werder Bremen, FC Bayern München, SV Werder Bremen, FC Chelsea, FC Bayern München, SV Werder Bremen, Alianza Lima, Deportivo Pesquero', '', '', '', 'Pizarro.png', 14, 'BUNDESLIGA: 446 Spiele / 192 Tore\r\nCHAMPIONS LEAGUE: 73 Spiele / 21 Tore\r\nCHAMPIONS LEAGUE QUALIFIKATION: 4 Spiele / 3 Tore\r\nEUROPA LEAGUE: 31 Spiele / 21 Tore\r\nEUROPA LEAGUE QUALIFIKATION: 2 Spiele / 3 Tore\r\nDFB-POKAL: 53 Spiele / 30 Tore\r\nPREMIER LEAGUE: 21 Spiele\r\nFA-CUP: 4 Spiele\r\nA-LÄNDERSPIELE: 85 Spiele / 20 Tore<br><br>'),
(20, 'Yuya', 'Osako', 'Angriff', '2018-07-01', 182, 71, 'Japan', '1990-05-18', 'Kaseda', '', '', '', 'Kashima Antlers, TSV 1860 München, 1. FC Köln', '', '', '', 'Osako.png', 8, 'BUNDESLIGA: 108 Spiele / 15 Tore\r\n2. BUNDESLIGA: 15 Spiele / 6 Tore\r\nJ1 LEAGUE: 139 Spiele / 40 Tore\r\nEUROPA LEAGUE: 6 Spiele / 2 Tore\r\nDFB-POKAL: 6 Spiele / 2 Tore\r\nA-LÄNDERSPIELE: 33 Spiele / 8 Tore<br><br>'),
(21, 'Martin', 'Harnik', 'Angriff', '2018-07-01', 185, 75, 'Österreich', '1987-06-10', 'Hamburg', 'verheiratet mit Sharon', 'eine Tochter', 'Deutscher Pokalsieger 2009', 'SV Werder Bremen U 23, SV Werder Bremen, Fortuna Düsseldorf, VfB Stuttgart, Hannover 96', '', '', '', 'Harnik.png', 9, 'BUNDESLIGA: 220 Spiele / 62 Tore\r\n2. BUNDESLIGA: 60 Spiele / 30 Tore\r\n3. LIGA: 8 Spiele / 1 Tor\r\nDFB-POKAL: 24 Spiele / 18 Tore\r\nCHAMPIONS LEAGUE: 2 Spiele \r\nCHAMPIONS LEAGUE QUALIFIKATION: 2 Spiele \r\nEUROPA LEAGUE: 22 Spiele / 5 Tore\r\nEUROPA LEAGUE QUALIFIKATION: 5 Spiele / 2 Tore\r\nA-LÄNDERSPIELE: 68 Spiele / 15 Tore<br><br>'),
(22, 'Niclas', 'Füllkrug', 'Angriff', '2019-07-01', 189, 83, 'Deutschland', '1993-02-09', 'Hannover', '', '', '', '', '', '', '', 'Fuellkrug.png', 11, ''),
(23, 'Joshua', 'Sargent', '', '2018-07-01', 185, 79, 'Vereinigte Staaten', '2000-02-20', 'O\'Fallon', 'ledig, Freundin Kirsten', '', 'U 20-WM-Teilnehmer, U 17-WM-Teilnehmer', 'St. Louis Scott Gallagher Missouri Soccer Club', '', '', '', 'Sargent.png', 19, 'REGIONALLIGA NORD: 2 Spiele / 2 Tore\r\nA-LÄNDERSPIELE: 3 Spiele / 1 Tor<br><br>'),
(24, 'Johannes', 'Eggestein', 'Angriff', '2016-07-01', 183, 75, 'Deutschland', '1998-05-08', 'Hannover', 'ledig', '', 'Meister A-Junioren Bundesliga Nord/Nordost 2016', 'TSV Havelse', '', '', '', 'J-Eggestein.png', 24, '3. LIGA: 31 Spiele / 3 Tore\r\nA-JUNIOREN BUNDESLIGA NORD/NORDOST: 28 Spiele / 39 Tore\r\nB-JUNIOREN BUNDESLIGA NORD/NORDOST: 51 Spiele / 41 Tore<\r\nDFB-POKAL1BUNDESLIGA: 7 Spiele<br><br>'),
(25, 'Benjamin', 'Goller', 'Angriff', '2019-07-01', 180, 65, 'Deutschland', '1999-01-01', 'Reutlingen', '', '', '', '', '', '', '', 'Goller.png', 39, ''),
(26, 'David', 'Philipp', 'Mittelfeld', '2019-07-01', 180, 75, 'Deutschland', '2000-04-10', 'Hamburg', '', '', '', '', '', '', '', 'Philipp.png', 31, ''),
(28, 'Florian', 'Kohfeldt', 'Cheftrainer', '2001-01-01', 0, 0, 'Deutschland', '1982-10-05', 'Siegen', '', '', '', '', '2006: Werder Bremen U14 (Co-Trainer)<br>\r\n2007 - 2010: Werder Bremen U16 (Co-Trainer)<br>\r\n2010 - 2013: Werder Bremen U17 (Co-Trainer)<br>\r\n06/2013 - 12/2013: Werder Bremen U16<br>\r\n01/2014 - 06/2014: Werder Bremen U23 (Co-Trainer)<br>\r\n06/2014 - 10/2014: Werder Bremen U15<br>\r\n10/2014 - 09/2016: Werder Bremen (Co-Trainer)\r\n09/2016 - 11/2017: Werder Bremen U23<br>\r\nseit 11/2017: Werder Bremen (Cheftrainer)', '', '', 'Kohfeldt.png', 0, ''),
(29, 'Thomas', 'Horsch', 'Co-Trainer', '2017-01-01', 0, 0, 'Deutschland', '1968-10-30', 'Bremen', 'verheiratet, zwei Kinder', '', '', '', '2003 – 2008: DFB-Stützpunkttrainer Bremen<br>\r\n2003 – 2009: VfL 07 Bremen<br>\r\n2003 – 2016: Trainer Eliteschule des Fußballs Bremen<br>\r\n2013 – 2014: Torwarttrainer U 20 Deutschland<br>\r\n2014 – 2016: Torwarttrainer U 16- & U 17-Juniorinnen-Nationalmannschaft Deutschland<br>\r\n2008 – 2016: DFB-Stützpunkt Koordinator Bremen<br>\r\n2016 - 2017: Werder Bremen U 23', '', '', 'Horsch.png', 0, ''),
(30, 'Ilia', 'Gruev', 'Co-Trainer', '2019-07-01', 0, 0, 'Bulgarien', '1969-10-30', 'Sofia', '', '', '', '', '2007-2009: RW Erfurt U19 (Co-Trainer)<br>\r\n2009-2010: Chernomorets Burgas (Co-Trainer)<br>\r\n2011: Nationalmannschaft Bulgarien (Co-Trainer)<br>\r\n2011-2012: Hajduk Split (Co-Trainer)<br>\r\n2012: 1. FC Kaiserslautern (Co-Trainer)<br>\r\n2012-2013: MSV Duisburg (Co-Trainer)<br>\r\n2013-2015: 1. FC Kaiserslautern (Co-Trainer)<br>\r\n2015-2018: MSV Duisburg (Trainer)<br>\r\n2019: SV Werder Bremen (Co-Trainer', '', '1988-1992: Lewski Sofia<br>\r\n1992-1993: Altay Izmir<br>\r\n1993-1994: Lokomotive Sofia<br>\r\n1994-1995: Altay Izmir<br>\r\n1995-1996: PFK Montana<br>\r\n1996-2000: FC Neftochimic Burgas<br>\r\n2000-2004: MSV Duisburg<br>\r\n2004-2005: KFC Uerdingen 05<br>\r\n2005-2006: FC Rot-Weiß Erfurt<br><br>', 'Gruev.png', 0, ''),
(31, 'Tim', 'Borowski', 'Co-Trainer', '2017-08-16', 0, 0, 'Deutschland', '1980-05-02', 'Neubrandenburg', '', '', '', '', '08/2017 - 10/2017: Werder Bremen U 17 (Co-Trainer)', '', 'bis 1996: 1.FC Neubrandenburg Jugend<br>\r\n1996 - 2008: SV Werder Bremen<br>\r\n2008 - 2009: FC Bayern München<br>\r\n2009 - 2012: SV Werder Bremen<br><br>', 'Borowski.png', 0, ''),
(32, 'Christian', 'Vander', 'Torwarttrainer', '2005-08-12', 0, 0, 'Deutschland', '1980-10-24', 'Willich', 'verheiratet, 2 Kinder', '', '', '', '2013 - 2014: Torwart-Trainer Werder Bremen U 23<br>\r\n2013 - 2014: Torwart-Trainer Deutschland U 16<br>\r\n2014 - 2015: Torwart-Trainer Deutschland U 20', '', 'bis 1996: Viktoria Anrath und 1. FC Viersen<br>\r\n1996 - 2000: KFC Uerdingen 05<br>\r\n2000 - 2005: VfL Bochum<br>\r\n2005 - 2013: Werder Bremen<br><br>', 'Vander.png', 0, ''),
(33, 'Günther', 'Stoxreiter', 'Athletiktrainer', '2016-07-07', 0, 0, 'Deutschland', '1980-11-30', 'Klagenfurt', '', '', '', '', '', '', '', 'Stoxreiter.png', 0, '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `werder_kader_2019`
--
ALTER TABLE `werder_kader_2019`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `werder_kader_2019`
--
ALTER TABLE `werder_kader_2019`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
