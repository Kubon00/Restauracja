-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 15, 2023 at 02:24 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restauracja`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pytania`
--

CREATE TABLE `pytania` (
  `id` int(11) NOT NULL,
  `imie` text NOT NULL,
  `email` text NOT NULL,
  `temat` text NOT NULL,
  `wiadomosc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `pytania`
--

INSERT INTO `pytania` (`id`, `imie`, `email`, `temat`, `wiadomosc`) VALUES
(13, 'Jakub', 'jakub0002@o2.pl', 'Kolacja', 'Jedzenie za zimne'),
(14, 'Jakub', 'jakub0002@o2.pl', 'Kolacja', 'Czy jest możliwość zorganizowania oświadczyn?'),
(15, 'Jakub', 'jakub0002@o2.pl', 'Kolacja', 'Czy byłaby możliwość uzyskania zniżki?');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacje`
--

CREATE TABLE `rezerwacje` (
  `id` int(11) NOT NULL,
  `imie` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `telefon` int(11) NOT NULL,
  `dataa` date NOT NULL DEFAULT current_timestamp(),
  `godzina` time NOT NULL,
  `goscie` int(11) NOT NULL,
  `Edytor` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rezerwacje`
--

INSERT INTO `rezerwacje` (`id`, `imie`, `email`, `telefon`, `dataa`, `godzina`, `goscie`, `Edytor`) VALUES
(119, 'Jakub', 'j.momot@interia.pl', 243454234, '2022-06-30', '23:40:00', 4, ''),
(120, 'Sylwia', 's.prawo@gmail.com', 983182482, '2022-06-25', '21:40:00', 2, ''),
(121, 'Jakub', 'jakub0002@o2.pl', 514179348, '2023-11-15', '20:00:00', 2, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(2, 'Kubon', 'jakub0002@o2.pl', '1434df7afdb2a29c2b5bf76bc3ce1af6', '2022-06-12 21:47:14'),
(3, 'Jakub', 'jakub0002@o2.pl', 'a182dc704aab47bad4489a20f517f0bd', '2023-10-12 15:32:42');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pytania`
--
ALTER TABLE `pytania`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pytania`
--
ALTER TABLE `pytania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rezerwacje`
--
ALTER TABLE `rezerwacje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
