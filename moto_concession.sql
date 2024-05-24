-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : ven. 24 mai 2024 à 13:46
-- Version du serveur : 11.2.2-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moto_concession`
--

-- --------------------------------------------------------

--
-- Structure de la table `motos`
--

DROP TABLE IF EXISTS `motos`;
CREATE TABLE IF NOT EXISTS `motos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `motos`
--

INSERT INTO `motos` (`id`, `brand`, `model`, `type`, `price`, `image`) VALUES
(1, 'Yamaha', 'XT660R', 'Enduro', 6999.99, 'https://media.motoservices.com/media/cache/slider_lg/media/vehicle/781/Yamaha-XT660R.jpg'),
(2, 'Harley-Davidson', 'Iron 883', 'Custom', 9999.99, 'https://d2bywgumb0o70j.cloudfront.net/2019/08/22/0e1191a48bd9296f173ac1c36bb815da_77dae876625a15f4.jpg'),
(3, 'Ducati', 'Panigale V2', 'Sportive', 17000, 'https://www.motoplanete.com/ducati/zoom-700px/Ducati-955-panigale-V2-2020-700px.webp'),
(4, 'Kawasaki', 'Z650', 'Roadster', 7999.99, 'https://storage.kawasaki.eu/public/kawasaki.eu/en-EU/model/22MY_Z650__GN1_Urban_STU_RF.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
