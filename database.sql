-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql200.byetcluster.com
-- Czas generowania: 22 Sie 2022, 18:31
-- Wersja serwera: 10.3.27-MariaDB
-- Wersja PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `epiz_31332499_bloxcreatefixed`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `alphakeys`
--

CREATE TABLE `alphakeys` (
  `email` longtext NOT NULL,
  `code` longtext NOT NULL,
  `ip` longtext NOT NULL,
  `redeemed` int(11) NOT NULL DEFAULT 0,
  `active` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `banner`
--

CREATE TABLE `banner` (
  `text` longtext NOT NULL,
  `link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `configuration`
--

CREATE TABLE `configuration` (
  `SiteName` text COLLATE utf8_unicode_ci NOT NULL,
  `GameURL` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `owner` text COLLATE utf8_unicode_ci NOT NULL,
  `visits` int(11) NOT NULL,
  `favorites` int(11) NOT NULL,
  `Created` date NOT NULL,
  `playing` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `play` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `games`
--

INSERT INTO `games` (`id`, `title`, `description`, `owner`, `visits`, `favorites`, `Created`, `playing`, `image`, `play`) VALUES
(1, 'Test', 'Test', 'Grizler', 312, 7, '2022-08-22', 0, 'http://i.imgur.com/tWj4Ohs.png', '1/');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `groupmembers`
--

CREATE TABLE `groupmembers` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `groupid` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `groupmembers`
--

INSERT INTO `groupmembers` (`id`, `userid`, `groupid`, `status`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `vault` text COLLATE utf8_unicode_ci NOT NULL,
  `members` int(11) NOT NULL,
  `owner` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `private` varchar(8) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `groups`
--

INSERT INTO `groups` (`id`, `title`, `vault`, `members`, `owner`, `description`, `image`, `private`) VALUES
(1, 'BLOX Create-Fixed!', '1000', 1, 'Grizler', 'The official group of BLOX Create-Fixed!', 'http://i.imgur.com/2P4Qsbm.png', 'false');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `inventory`
--

CREATE TABLE `inventory` (
  `item` int(11) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `inventory`
--

INSERT INTO `inventory` (`item`, `user`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ipbans`
--

CREATE TABLE `ipbans` (
  `ip` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `iplogs`
--

CREATE TABLE `iplogs` (
  `ip` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `type` text NOT NULL,
  `image` text NOT NULL,
  `creator` text NOT NULL,
  `created` text NOT NULL,
  `wearable` text NOT NULL,
  `price` int(11) NOT NULL,
  `onsale` int(11) NOT NULL DEFAULT 1,
  `collectable` varchar(32) NOT NULL DEFAULT 'false',
  `amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `type`, `image`, `creator`, `created`, `wearable`, `price`, `onsale`, `collectable`, `amount`) VALUES
(1, 'Brick-Town Cap', 'Ah.... Brick-Town...', 'hat', '/Market/Storage/btcap.png', 'Grizler', '07.08.2022', 'btcapR.png', 0, 1, 'false', -1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lottery`
--

CREATE TABLE `lottery` (
  `username` text NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `maintenance`
--

INSERT INTO `maintenance` (`id`, `status`) VALUES
(1, 'up');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `messages`
--

CREATE TABLE `messages` (
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `messages`
--

INSERT INTO `messages` (`sender`, `receiver`, `title`, `message`) VALUES
(21, 1, 'hi', 'yo bro i got banned from the discord for no reason ;(( i asked a simple question'),
(97, 1, 'lol', 'lol'),
(107, 105, '12', '20'),
(283, 283, 'f', 'f'),
(0, 283, 'test', 'test'),
(287, 287, 'hi me', 'how are you doing'),
(307, 308, '<a href=\"https://www.youtube.com/SkateAlert\">THE BEST YOUTUBER EVER</a>', '<a href=\"https://www.youtube.com/SkateAlert\">THE BEST YOUTUBER EVER</a>'),
(307, 308, '<img src=\"http://i1.ytimg.com/vi/IA5yUXVIcHA/hqdefault.jpg\" alt=\"hi\"> ', '<img src=\"http://i1.ytimg.com/vi/IA5yUXVIcHA/hqdefault.jpg\" alt=\"hi\"> '),
(307, 326, '<script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script>', '<script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script> <script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script> <script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script> <script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script> <script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script> <script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script>'),
(307, 308, '<script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script>', '<script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script><script>alert(\"#Hacked by Team Nice. YouTube - https://www.youtube.com/SkateAlert Website: https://skatealert.xyz\")</script>'),
(286, 106, 'hi', 'ugly'),
(315, 315, '<script>alert(\"hey fix this xss\")</script>', '<script>alert(\"hey fix this xss\")</script>'),
(329, 1, 'I would love to be an administrator', 'My discord is iVarialChase#2564 add me please!'),
(326, 1, 'Testing', 'Testing'),
(326, 1, 'Hi send me back something', 'Reply'),
(326, 326, 'Hi', 'papapapaa'),
(0, 326, 'saaaaaaaaaaaaaaaaaa', 'asssssssssssssssss'),
(0, 326, 'sadsadsa', 'sadsadsa'),
(326, 326, 'aaaa', 'aaaaaaaaaa'),
(326, 326, '2', '2');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `replies`
--

CREATE TABLE `replies` (
  `threadId` int(11) NOT NULL,
  `postBy` text NOT NULL,
  `postText` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `threads`
--

CREATE TABLE `threads` (
  `topicId` int(11) NOT NULL DEFAULT 1,
  `threadId` int(11) NOT NULL,
  `threadAdmin` text NOT NULL,
  `threadTitle` text NOT NULL,
  `threadBody` text NOT NULL,
  `views` int(11) NOT NULL,
  `replies` int(11) NOT NULL,
  `pinned` varchar(32) NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `threads` int(11) NOT NULL,
  `replies` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `description` varchar(512) NOT NULL,
  `lastPostTitle` varchar(512) NOT NULL,
  `lastPostBy` varchar(512) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `topics`
--

INSERT INTO `topics` (`id`, `threads`, `replies`, `name`, `description`, `lastPostTitle`, `lastPostBy`) VALUES
(1, 0, 0, 'General Discussion', 'General information regarding anything throughout the website should be posted here!', 'Thread', 'Username'),
(2, 0, 0, 'Off-Topic', 'General information regarding anything should be posted here!', 'Thread', 'Username');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `userips`
--

CREATE TABLE `userips` (
  `id` int(11) NOT NULL,
  `ip` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `userposts`
--

CREATE TABLE `userposts` (
  `id` int(11) NOT NULL,
  `poster` text COLLATE utf8_unicode_ci NOT NULL,
  `posted` int(11) NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` longtext NOT NULL,
  `password` longtext NOT NULL,
  `email` longtext NOT NULL,
  `ip` longtext NOT NULL,
  `datecreated` longtext NOT NULL,
  `verified` int(11) NOT NULL DEFAULT 0,
  `banned` int(11) NOT NULL DEFAULT 0,
  `reason` text NOT NULL,
  `emeralds` varchar(2048) NOT NULL DEFAULT '0',
  `getemeralds` int(11) NOT NULL,
  `trades` int(11) NOT NULL,
  `requests` int(11) NOT NULL,
  `messages` int(11) NOT NULL DEFAULT 1,
  `elite` int(11) NOT NULL DEFAULT 0,
  `eliteexpire` longtext NOT NULL,
  `admin` varchar(32) NOT NULL DEFAULT 'false',
  `bouncer` varchar(32) NOT NULL DEFAULT 'false',
  `designer` varchar(32) NOT NULL DEFAULT 'false',
  `visittick` longtext NOT NULL,
  `expiretime` longtext NOT NULL,
  `description` varchar(1000) NOT NULL DEFAULT 'Hello! I''m new to BLOX Create-Fixed!',
  `package` varchar(32) NOT NULL DEFAULT 'Avatar.png',
  `hat` text NOT NULL,
  `accessory` text NOT NULL,
  `shirt` text NOT NULL,
  `pants` text NOT NULL,
  `tshirt` text NOT NULL,
  `face` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `ip`, `datecreated`, `verified`, `banned`, `reason`, `emeralds`, `getemeralds`, `trades`, `requests`, `messages`, `elite`, `eliteexpire`, `admin`, `bouncer`, `designer`, `visittick`, `expiretime`, `description`, `package`, `hat`, `accessory`, `shirt`, `pants`, `tshirt`, `face`) VALUES
(1, 'Grizler', '', '', '4', '1661207120', 0, 0, '', '20', 1661293530, 0, 0, 1, 0, '', 'true', 'false', 'false', '1661207203', '1661207503', 'Hi! I\'m Grizler.', 'Avatar.png', 'btcapR.png', '', '', '', '', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `groupmembers`
--
ALTER TABLE `groupmembers`
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indeksy dla tabeli `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `lottery`
--
ALTER TABLE `lottery`
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indeksy dla tabeli `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`threadId`),
  ADD UNIQUE KEY `threadId` (`threadId`);

--
-- Indeksy dla tabeli `topics`
--
ALTER TABLE `topics`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indeksy dla tabeli `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `userposts`
--
ALTER TABLE `userposts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `threads`
--
ALTER TABLE `threads`
  MODIFY `threadId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
