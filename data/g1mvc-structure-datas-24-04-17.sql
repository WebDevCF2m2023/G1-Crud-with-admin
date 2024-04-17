-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 17 avr. 2024 à 09:25
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `g1mvc`
--
DROP DATABASE IF EXISTS `g1mvc`;
CREATE DATABASE IF NOT EXISTS `g1mvc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `g1mvc`;

-- --------------------------------------------------------

--
-- Structure de la table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `idadministrator` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `userpwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`idadministrator`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `administrator`
--

INSERT INTO `administrator` (`idadministrator`, `username`, `userpwd`) VALUES
(1, 'Admin', '$2y$10$f2lLBtgC8Cu0nMMIUUzGC.hnH9QhNXLAGndrdVan2vxcc0Z5WpA1i');

-- --------------------------------------------------------

--
-- Structure de la table `geoloc`
--

DROP TABLE IF EXISTS `geoloc`;
CREATE TABLE IF NOT EXISTS `geoloc` (
  `idgeoloc` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `geolocdesc` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `latitude` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `longitude` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idgeoloc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
