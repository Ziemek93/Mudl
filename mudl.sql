-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Cze 2019, 17:03
-- Wersja serwera: 10.3.15-MariaDB
-- Wersja PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mudl`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `course`
--

CREATE TABLE `course` (
  `Id_k` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `course` (`Id_k`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `testdone`
--

CREATE TABLE `testdone` (
  `Id_ft` int(6) NOT NULL,
  `Id_fk` int(6) DEFAULT NULL,
  `Id_fu` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `testdone`
--

INSERT INTO `testdone` (`Id_ft`, `Id_fk`, `Id_fu`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `testquery`
--

CREATE TABLE `testquery` (
  `Id_t` int(6) NOT NULL,
  `QText` varchar(100) NOT NULL,
  `Correct` tinyint(1) NOT NULL,
  `Content` varchar(100) NOT NULL,
  `Id_fk` int(6) DEFAULT NULL,
  `Type` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `testquery`
--

INSERT INTO `testquery` (`Id_t`, `QText`, `Correct`, `Content`, `Id_fk`, `Type`) VALUES
(1, 'Czy na pendrive jest instalowany system Debian?', 1, 'https://www.youtube.com/embed/GairG0s-mvs', 1, 'V'),
(2, 'Czy podczas instalacji jest dodawany uzytkownik root?', 1, 'https://www.youtube.com/embed/aZxv6xypB64', 1, 'V'),
(3, 'Czy do instalacji sluzy komenda sudo apt-get install?', 1, 'https://www.youtube.com/embed/sPEzh2ZvcQs', 1, 'V'),
(4, 'Czy na pendrive jest instalowany system Debian?', 1, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/449136228&color=%23ff5500&a', 2, 'S'),
(5, 'Czy podczas instalacji jest dodawany uzytkownik root?', 0, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/213950673&color=%23ff5500&a', 2, 'S'),
(6, 'Czy do instalacji sluzy komenda sudo apt-get install?', 0, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/213950667&color=%23ff5500&a', 2, 'S');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `Id_u` int(6) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Login` varchar(45) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Admin` int(1) NOT NULL DEFAULT 0,
  `Type` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`Id_u`, `Name`, `Login`, `Password`, `Admin`, `Type`) VALUES
(1, 'Maciej', 'Maciejski', '$argon2i$v=19$m=1024,t=2,p=2$SGJyUDJFY2JXM3dIbW81NQ$1NOxHwSkHmuM9xNV5kAu1S5O3OvKBfALIRHFTWoFAI0', 0, 'V'),
(2, 'Krzys', 'Niekowalski', '$argon2i$v=19$m=1024,t=2,p=2$a3NTSFQ4aldadkJlL3ZkLw$JqQe3ud3/LiAMhg1pQTYXsm9X/LNWkay133JEb/0vEY', 0, 'V'),
(3, 'Niekrzys', 'Kowalski', '$argon2i$v=19$m=1024,t=2,p=2$MnBWRWt3cWRZNEhoUXRaaQ$cuzI/mw9+qQ3Nrco5bzzvCLO0k1CrZHmKir0o5joYQ4', 0, 'S');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Id_k`);

--
-- Indeksy dla tabeli `testdone`
--
ALTER TABLE `testdone`
  ADD KEY `Id_ft` (`Id_ft`),
  ADD KEY `Id_fk` (`Id_fk`),
  ADD KEY `Id_fu` (`Id_fu`);

--
-- Indeksy dla tabeli `testquery`
--
ALTER TABLE `testquery`
  ADD PRIMARY KEY (`Id_t`),
  ADD KEY `Id_fk` (`Id_fk`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_u`),
  ADD UNIQUE KEY `Login` (`Login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `course`
--
ALTER TABLE `course`
  MODIFY `Id_k` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `testquery`
--
ALTER TABLE `testquery`
  MODIFY `Id_t` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `Id_u` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `testdone`
--
ALTER TABLE `testdone`
  ADD CONSTRAINT `testdone_ibfk_1` FOREIGN KEY (`Id_ft`) REFERENCES `testquery` (`Id_t`),
  ADD CONSTRAINT `testdone_ibfk_2` FOREIGN KEY (`Id_fk`) REFERENCES `course` (`Id_k`),
  ADD CONSTRAINT `testdone_ibfk_3` FOREIGN KEY (`Id_fu`) REFERENCES `users` (`Id_u`);

--
-- Ograniczenia dla tabeli `testquery`
--
ALTER TABLE `testquery`
  ADD CONSTRAINT `testquery_ibfk_1` FOREIGN KEY (`Id_fk`) REFERENCES `course` (`Id_k`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
