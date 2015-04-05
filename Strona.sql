-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 04 Kwi 2015, 22:38
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
-- Struktura tabeli dla tabeli `Friends`
--

CREATE TABLE IF NOT EXISTS `Friends` (
`friends_id` int(11) NOT NULL,
  `friend1_id` int(11) DEFAULT NULL,
  `friend2_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `Friends`
--

INSERT INTO `Friends` (`friends_id`, `friend1_id`, `friend2_id`) VALUES
(33, 7, 16),
(34, 7, 5),
(35, 9, 11),
(36, 9, 10),
(37, 9, 16),
(38, 9, 18),
(39, 9, 5),
(40, 9, 12),
(41, 9, 5),
(42, 9, 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Komentarze`
--

CREATE TABLE IF NOT EXISTS `Komentarze` (
`koment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `koment_tresc` varchar(60) DEFAULT NULL,
  `koment_data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Posts`
--

CREATE TABLE IF NOT EXISTS `Posts` (
`post_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tresc` varchar(140) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `Posts`
--

INSERT INTO `Posts` (`post_id`, `user_id`, `tresc`, `data`) VALUES
(1, NULL, 'xxx', '0000-00-00 00:00:00'),
(2, NULL, 'xxx', '2015-02-02 21:22:22'),
(4, 9, 'xxx', '2015-02-02 21:22:25'),
(5, 9, 'xxx', '2013-02-02 21:22:25'),
(6, 7, 'dgfdg', '2014-02-04 12:43:22'),
(11, 7, 'Pierwszy post!', NULL),
(12, 7, 'dada', NULL),
(14, 7, 'bla bla', '2015-04-02 00:10:28'),
(16, 7, 'Drugi kit\r\n:)', '2015-04-02 00:22:09'),
(21, 9, 'k!t k!t k!t', '2015-04-02 00:30:47'),
(34, 12, 'Tere fere', '2015-04-02 01:37:47'),
(35, 7, 'kit', '2015-04-02 01:45:21'),
(37, 14, 'to\r\nb?\r\ndzie\r\nkit\r\nwie\r\nlo\r\npo\r\nzio\r\nmo\r\nwy\r\n', '2015-04-02 02:25:06'),
(39, 14, 'a polskie znaczki? ??????ó??', '2015-04-02 02:28:19'),
(44, 7, 'jsfkjdlkasjkd', '2015-04-02 13:48:04'),
(46, 7, 'Ä…Ä™', '2015-04-02 13:48:27'),
(49, 7, 'dsjdisjd', '2015-04-02 14:25:29'),
(50, 7, 'dsjdisjd', '2015-04-02 14:25:36'),
(51, 7, 'dkfslkfmsdklvmÄ…Ä…Ä…Ä…', '2015-04-02 21:49:55'),
(52, 7, 'dkfslkfmsdklvmÄ…Ä…Ä…Ä…', '2015-04-02 21:50:05');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `User`
--

CREATE TABLE IF NOT EXISTS `User` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `User`
--

INSERT INTO `User` (`id`, `name`, `email`, `password`) VALUES
(5, 'Test2', 'Test2@test.pl', '$2y$11$349yPECgvi/imeiQEpoQA.lVwtDHzn8ANVxpTvWqlHCnKD5IkPzwK'),
(7, 'aaa', 'aaa@aaa.pl', '$2y$11$jI8JCxWtbik8kal3TOo9POcjYL7ojsbUvJC9zp0V3YFn0fBHwUclO'),
(9, 'ccc', 'ccc@ccc.pl', '$2y$11$w0vVkqIiXRT.Se9NcM3EtuQ75QaMwIQ2fQMxLv8Jp1NEaG9iZdeES'),
(10, 'abc', 'abc@abc.pl', '$2y$11$DN53vPvZeo8SfeWyLRKtr.I49vzVbGLeaQZBgw60HrP.XuxAhK4HS'),
(11, 'zzz', 'zzz@zzz.pl', '$2y$11$ktYIwdQu.T0N8Ds9PdEJKO3Ht2trUX3PsHLbO9pscdhQd3727cV2y'),
(12, 'xxx', 'xxx@xxx.pl', '$2y$11$t2rkKPs5056SzsYnAgDrXODxI.wz.Ox.KlDjNcCHY8Qq.EvkGqX0q'),
(14, 'qqq', 'qqq@qqq.pl', '$2y$11$wJjmhBmHDYSmR3M.eU1BX.hWy8lI/2e/k1FhAoTrknffj0r9yFDD2'),
(15, 'uuu', 'uuu@uuu.pl', '$2y$11$4gT761AytmfIxr6J4zGOMezfF6eP8171IZxVWvFXhM2X7CVIQaO3S'),
(16, 'fff', 'fff@fff.pl', '$2y$11$3.1d5BOrVqpswyf2H.ToX.M8WctMV2U8V74BG0o2t7l8gEBuMarAS'),
(18, '123', '123@123.pl', '$2y$11$5so8t8/mDjpR8jbHA1lNEueDjbn9TQUZO7N7k8zgZ0q64p6Olsh1K');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Wiadomosci`
--

CREATE TABLE IF NOT EXISTS `Wiadomosci` (
`wiado_id` int(11) NOT NULL,
  `od_id` int(11) NOT NULL,
  `do_id` int(11) NOT NULL,
  `wiado_tresc` varchar(255) DEFAULT NULL,
  `wiado_data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `Friends`
--
ALTER TABLE `Friends`
 ADD PRIMARY KEY (`friends_id`), ADD KEY `friend1_id` (`friend1_id`), ADD KEY `friend2_id` (`friend2_id`);

--
-- Indexes for table `Komentarze`
--
ALTER TABLE `Komentarze`
 ADD PRIMARY KEY (`koment_id`), ADD UNIQUE KEY `koment_data` (`koment_data`), ADD KEY `user_id` (`user_id`), ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `Posts`
--
ALTER TABLE `Posts`
 ADD PRIMARY KEY (`post_id`), ADD UNIQUE KEY `data` (`data`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `Wiadomosci`
--
ALTER TABLE `Wiadomosci`
 ADD PRIMARY KEY (`wiado_id`), ADD UNIQUE KEY `wiado_data` (`wiado_data`), ADD KEY `od_id` (`od_id`), ADD KEY `do_id` (`do_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `Friends`
--
ALTER TABLE `Friends`
MODIFY `friends_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT dla tabeli `Komentarze`
--
ALTER TABLE `Komentarze`
MODIFY `koment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `Posts`
--
ALTER TABLE `Posts`
MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT dla tabeli `User`
--
ALTER TABLE `User`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT dla tabeli `Wiadomosci`
--
ALTER TABLE `Wiadomosci`
MODIFY `wiado_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `Friends`
--
ALTER TABLE `Friends`
ADD CONSTRAINT `Friends_ibfk_1` FOREIGN KEY (`friend1_id`) REFERENCES `User` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `Friends_ibfk_2` FOREIGN KEY (`friend2_id`) REFERENCES `User` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `Komentarze`
--
ALTER TABLE `Komentarze`
ADD CONSTRAINT `Komentarze_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `Komentarze_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `Posts` (`post_id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `Posts`
--
ALTER TABLE `Posts`
ADD CONSTRAINT `Posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `Wiadomosci`
--
ALTER TABLE `Wiadomosci`
ADD CONSTRAINT `Wiadomosci_ibfk_1` FOREIGN KEY (`od_id`) REFERENCES `User` (`id`),
ADD CONSTRAINT `Wiadomosci_ibfk_2` FOREIGN KEY (`do_id`) REFERENCES `User` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
