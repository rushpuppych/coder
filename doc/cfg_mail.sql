-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Erstellungszeit: 10. Sep 2016 um 09:25
-- Server-Version: 5.5.42
-- PHP-Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `coder`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cfg_mail`
--

CREATE TABLE `cfg_mail` (
  `id` int(11) NOT NULL,
  `config_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `host` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_auth` int(11) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_secure` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `port` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `cfg_mail`
--
ALTER TABLE `cfg_mail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cfg_mail_id_uindex` (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `cfg_mail`
--
ALTER TABLE `cfg_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;