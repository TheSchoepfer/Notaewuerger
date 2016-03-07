-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 20. Jan 2016 um 19:52
-- Server-Version: 10.0.17-MariaDB
-- PHP-Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `notaewuerger`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fest`
--

CREATE TABLE `fest` (
  `ID` int(11) NOT NULL,
  `datum` date NOT NULL,
  `ort` text NOT NULL,
  `festname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `fest`
--

INSERT INTO `fest` (`ID`, `datum`, `ort`, `festname`) VALUES
(1, '2016-01-08', 'Schwyz', 'Aateigätä'),
(2, '2016-01-09', 'Küssnacht', 'Guslerparty Rigigusler'),
(3, '2016-01-16', 'Sporthalle Rubiswil', 'Chaos-Gala'),
(4, '2016-01-23', 'Rampassä Schwyz', 'Rampassä-Ball'),
(5, '2016-01-29', 'Seewen', 'BSZ Ball'),
(6, '2016-01-30', 'Stans', 'Chälti-Sägler, Guggenüberfall'),
(7, '2016-02-04', 'Brunnen', 'Schmudo, Nessiguugger'),
(8, '2016-02-05', 'Ballwil', 'Guguba'),
(9, '2016-02-06', 'Müürig', 'Holdrio-Fäger'),
(10, '2016-02-09', 'Seewen', 'Güdelziischtig');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `foto`
--

CREATE TABLE `foto` (
  `fotoID` int(11) NOT NULL,
  `foto` text NOT NULL,
  `fotogross` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `foto`
--

INSERT INTO `foto` (`fotoID`, `foto`, `fotogross`) VALUES
(1, 'images/thumbs/1.jpg', 'images/1.jpg'),
(2, 'images/thumbs/2.jpg', 'images/2.jpg'),
(3, 'images/thumbs/3.jpg', 'images/3.jpg'),
(4, 'images/thumbs/4.jpg', 'images/4.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gattung`
--

CREATE TABLE `gattung` (
  `ID` int(11) NOT NULL,
  `gattung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `gattung`
--

INSERT INTO `gattung` (`ID`, `gattung`) VALUES
(1, 'Rhythmus'),
(2, 'Posaunen'),
(3, 'Trompeten'),
(4, 'Sousaphone');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sound`
--

CREATE TABLE `sound` (
  `ID` int(11) NOT NULL,
  `gName` text NOT NULL,
  `jahr` int(11) NOT NULL,
  `artist` text NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `sound`
--

INSERT INTO `sound` (`ID`, `gName`, `jahr`, `artist`, `Name`) VALUES
(1, 'Bligg', 2013, 'Bligg', 'I''d kill for You (YBBB Version)'),
(2, 'Lauf&auml', 2013, 'Foo Fighters', 'Walk'),
(5, 'Schaff&auml', 2013, 'Amerie', 'Gotta Work'),
(6, 'Bertl', 2012, 'Adam Lambert', 'Whataya want from me');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`ID`, `username`, `password`) VALUES
(1, 'mitglied', '$2y$10$SJhQ1VS3hhh.rEWT0MCAZesA0HnLZwVhW56x0SVKAzJZ0LCDsyQsi'),
(2, 'admin', '$2y$10$eVQgF3RbeSbxd7aBDdUg8eb8yq6I0uM2IWWEWQjKcMeTWy1PE2EHC');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `wuerger`
--

CREATE TABLE `wuerger` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `wuergerzeit` text NOT NULL,
  `instrument` text NOT NULL,
  `gattungID` int(11) NOT NULL,
  `bild` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `wuerger`
--

INSERT INTO `wuerger` (`ID`, `name`, `wuergerzeit`, `instrument`, `gattungID`, `bild`) VALUES
(1, 'Patrick Schöpfer', 'Würger seit 2015', 'Glocke', 1, 'logo.jpg'),
(2, 'Lucy Ann Owen', 'Würger seit 2014', 'Glocke', 1, 'logo.jpg'),
(3, 'Stephan Schuler', 'Würger seit 2011', 'Pauke rechts', 1, 'logo.jpg'),
(4, 'Thomas Japichino', 'Würger seit 2004', 'Hi-Hat Chuchi', 1, 'logo.jpg'),
(6, 'Jorin Burgert', 'Würger seit 2014', '2. Posaune', 2, 'logo.jpg'),
(7, 'Melanie Kennel', 'Würger seit 2010', '3. Posaune', 2, 'logo.jpg'),
(8, 'Sascha Jörg', 'Würger seit 2005', '1. Trompete', 3, 'logo.jpg'),
(9, 'Daniel Öchslin', 'Würger seit 2007', 'Sousaphon', 4, 'logo.jpg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `fest`
--
ALTER TABLE `fest`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`fotoID`);

--
-- Indizes für die Tabelle `gattung`
--
ALTER TABLE `gattung`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `sound`
--
ALTER TABLE `sound`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `wuerger`
--
ALTER TABLE `wuerger`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `fest`
--
ALTER TABLE `fest`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT für Tabelle `foto`
--
ALTER TABLE `foto`
  MODIFY `fotoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `gattung`
--
ALTER TABLE `gattung`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `sound`
--
ALTER TABLE `sound`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `wuerger`
--
ALTER TABLE `wuerger`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
