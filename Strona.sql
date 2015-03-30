-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 30 Mar 2015, 03:14
-- Wersja serwera: 5.6.21
-- Wersja PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `Strona`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Posts`
--

CREATE TABLE IF NOT EXISTS `Posts` (
`posts_id` int(11) NOT NULL,
  `tresc` varchar(140) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `User`
--

CREATE TABLE IF NOT EXISTS `User` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `User`
--

INSERT INTO `User` (`id`, `name`, `email`, `password`) VALUES
(5, 'Test2', 'Test2@test.pl', '$2y$11$349yPECgvi/imeiQEpoQA.lVwtDHzn8ANVxpTvWqlHCnKD5IkPzwK'),
(6, 'qwerty', 'qwerty@qwerty.pl', '$2y$11$8LdD9m1/uvUW8A2jVlswKe.NPjQNcN3ASPdVFQ0A6PHrd/.VYmltK'),
(7, 'aaa', 'aaa@aaa.pl', '$2y$11$jI8JCxWtbik8kal3TOo9POcjYL7ojsbUvJC9zp0V3YFn0fBHwUclO'),
(8, 'bbb', 'bbb@bbb.pl', '$2y$11$ijt3aio36vWPYTvZ0WMUW.vPAhQ8znFfagzCu7OFS116ktmWbrmP.'),
(9, 'ccc', 'ccc@ccc.pl', '$2y$11$w0vVkqIiXRT.Se9NcM3EtuQ75QaMwIQ2fQMxLv8Jp1NEaG9iZdeES'),
(10, 'abc', 'abc@abc.pl', '$2y$11$DN53vPvZeo8SfeWyLRKtr.I49vzVbGLeaQZBgw60HrP.XuxAhK4HS'),
(11, 'zzz', 'zzz@zzz.pl', '$2y$11$ktYIwdQu.T0N8Ds9PdEJKO3Ht2trUX3PsHLbO9pscdhQd3727cV2y');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `Posts`
--
ALTER TABLE `Posts`
 ADD PRIMARY KEY (`posts_id`), ADD UNIQUE KEY `tresc` (`tresc`), ADD UNIQUE KEY `data` (`data`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `Posts`
--
ALTER TABLE `Posts`
MODIFY `posts_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `User`
--
ALTER TABLE `User`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `Posts`
--
ALTER TABLE `Posts`
ADD CONSTRAINT `Posts_ibfk_1` FOREIGN KEY (`posts_id`) REFERENCES `User` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
