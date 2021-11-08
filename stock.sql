-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Nov-2021 às 17:30
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `stock`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `products_categories_id` int(11) NOT NULL,
  `created` timestamp NOT NULL,
  `modified` timestamp NOT NULL,
  `name` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `products_categories_id`, `created`, `modified`, `name`) VALUES
(1, 1, '2021-11-08 17:00:46', '2021-11-08 17:00:46', 'A revolução dos bichos'),
(2, 1, '2021-11-08 17:01:04', '2021-11-08 17:01:04', 'O povo brasileiro'),
(3, 1, '2021-11-08 17:01:16', '2021-11-08 17:01:24', 'O cortiço'),
(4, 1, '2021-11-08 17:01:52', '2021-11-08 17:01:52', 'O auto da Compadecida'),
(5, 1, '2021-11-08 17:02:18', '2021-11-08 17:02:18', 'Grande sertão: varedas '),
(6, 1, '2021-11-08 17:02:59', '2021-11-08 17:02:59', 'Quarto de despejo'),
(7, 1, '2021-11-08 17:03:57', '2021-11-08 17:03:57', 'Memórias póstumas de Brás Cubas '),
(8, 1, '2021-11-08 17:09:42', '2021-11-08 17:09:42', 'Dom casmurro'),
(9, 2, '2021-11-08 17:24:39', '2021-11-08 17:24:39', 'Eternos '),
(10, 2, '2021-11-08 17:25:21', '2021-11-08 17:26:01', 'Venom: tempo de carnificina '),
(11, 2, '2021-11-08 17:25:44', '2021-11-08 17:25:44', 'Aquaman'),
(12, 2, '2021-11-08 17:26:48', '2021-11-08 17:26:48', 'O esquadrão suicida '),
(13, 3, '2021-11-08 17:27:09', '2021-11-08 17:27:09', 'Bolo'),
(14, 3, '2021-11-08 17:27:16', '2021-11-08 17:27:16', 'Torta'),
(15, 3, '2021-11-08 17:27:27', '2021-11-08 17:28:15', 'Coxinha '),
(16, 3, '2021-11-08 17:28:28', '2021-11-08 17:28:28', 'Esfirra');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products_categories`
--

DROP TABLE IF EXISTS `products_categories`;
CREATE TABLE IF NOT EXISTS `products_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_category` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `products_categories`
--

INSERT INTO `products_categories` (`id`, `name_category`, `created`, `modified`) VALUES
(1, 'Book', '2021-11-08 16:58:48', '2021-11-08 16:58:48'),
(2, 'Movies ', '2021-11-08 17:24:11', '2021-11-08 17:24:11'),
(3, 'Food', '2021-11-08 17:26:59', '2021-11-08 17:26:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
