-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 06 mai 2019 à 02:02
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `animalia`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etat` int(40) NOT NULL DEFAULT '1',
  `id_user` int(40) NOT NULL,
  `id_prod` int(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `prodfk` (`id_prod`),
  KEY `userfk` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `etat`, `id_user`, `id_prod`) VALUES
(3, 1, 7, 3),
(4, 0, 4, 3),
(5, 0, 6, 3);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(50) NOT NULL,
  `type_animaux` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`, `type_animaux`) VALUES
(8, 'accessoires', 'chats'),
(6, 'hello', 'chiens'),
(4, 'test', 'chats'),
(9, 'nourriture', 'chiens');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` int(10) NOT NULL DEFAULT '0',
  `joining_date` timestamp(1) NOT NULL DEFAULT CURRENT_TIMESTAMP(1),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom_utilisateur`, `password`, `email`, `message`, `joining_date`) VALUES
(1, 'rami', '5e26853cb7d7d97fb6ef2d5697b9fbafb0cc718b', 'ramijaiem@gmail.com', 1, '2019-05-05 23:10:10.3'),
(2, 'ramy', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'ramijaiem@gmail.com', 0, '2019-05-05 23:10:10.3'),
(3, 'test', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'kajsd@kjasd.asd', 0, '2019-05-05 23:10:10.3'),
(4, 'sirine', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'asf@asf.df', 1, '2019-05-05 23:10:10.3'),
(5, 'rami', '9bcdb846cd4b33436daf2beb315502c36a6e7895', 'ramijaiem@gmail.com', 1, '2019-05-05 23:10:10.3'),
(6, 'amin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'asjfd@asf.asd', 1, '2019-05-05 23:10:10.3'),
(7, 'amin', '8d589e7f5ea57b9b28beb346ff56c309feae9c52', 'asf222@qfs.com', 0, '2019-05-05 23:10:10.3');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `datecreation` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `prixtotale` int(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`datecreation`, `status`, `username`, `prixtotale`, `id`) VALUES
('2019-05-05', 'en cours', 'sirine', 440, 1),
('2019-05-05', 'en cours', 'sirine', 80, 2),
('2019-05-05', 'en cours', 'amin', 100, 4);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `login` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(180) NOT NULL,
  `comment` varchar(129) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`login`, `name`, `comment`) VALUES
(5, 'sirine', 'tets');

-- --------------------------------------------------------

--
-- Structure de la table `coupon`
--

DROP TABLE IF EXISTS `coupon`;
CREATE TABLE IF NOT EXISTS `coupon` (
  `promotion` double NOT NULL,
  `nb_user` int(200) NOT NULL,
  `couponid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`couponid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `coupon`
--

INSERT INTO `coupon` (`promotion`, `nb_user`, `couponid`, `code`) VALUES
(5, 8, 2, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `userid` int(30) NOT NULL,
  `productid` int(20) NOT NULL,
  KEY `productid-fk` (`productid`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`userid`, `productid`) VALUES
(4, 3),
(6, 4),
(6, 3),
(7, 3);

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id_feed` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(10) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id_feed`),
  KEY `idclientfk` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `feedback`
--

INSERT INTO `feedback` (`id_feed`, `id_client`, `msg`) VALUES
(1, 6, 'nkjjkasnfd');

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

DROP TABLE IF EXISTS `ligne_commande`;
CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `produitid` int(11) NOT NULL,
  `prix` int(30) NOT NULL,
  `quantity` int(50) NOT NULL,
  `ligneid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ligneid`),
  KEY `produitidfk` (`produitid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `order_id_fk` int(20) NOT NULL,
  `etat` varchar(11) NOT NULL,
  `date` varchar(40) NOT NULL,
  `id_livreur` int(20) NOT NULL,
  `prix_livraison` int(11) NOT NULL,
  `adresse` varchar(90) NOT NULL,
  `numero` int(20) NOT NULL,
  `zip` int(20) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id_fk` (`order_id_fk`),
  KEY `id_livreur` (`id_livreur`),
  KEY `clientfk` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`order_id_fk`, `etat`, `date`, `id_livreur`, `prix_livraison`, `adresse`, `numero`, `zip`, `nom`, `prenom`, `id`, `id_client`) VALUES
(2, 'confirmer', '5 / 3 / 2019', 58, 8, 'Immeuble Nous-MÃªmes, Rue Habib Chatti, Tunis, Tunisie', 3214, 124, 'amin', 'ben chiekh', 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `codePostale` varchar(20) NOT NULL,
  `numero` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dateR` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `dispo` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`id`, `nom`, `adresse`, `codePostale`, `numero`, `email`, `dateR`, `salary`, `dispo`) VALUES
(57, 'beji', '3 rue essatouel', '4391', '72918761', 'bejimatrix@gmail.com', '4 / 1 / 2019', '1200', 7),
(58, 'rami', 'ajkshd', '87', '12897348', 'ramijaiem@gmail.com', '4 / 28 / 2019', '868', 7);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur` varchar(50) NOT NULL,
  `prix` int(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`order_id`, `utilisateur`, `prix`, `date`) VALUES
(2, 'ramy', 15, '');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `produitid1` int(40) NOT NULL,
  `prix1` int(40) NOT NULL,
  `quantity1` int(40) NOT NULL,
  `commandeid1` int(40) DEFAULT NULL,
  `ligneid1` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ligneid1`),
  KEY `commandefk` (`commandeid1`),
  KEY `produitfk` (`produitid1`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`produitid1`, `prix1`, `quantity1`, `commandeid1`, `ligneid1`) VALUES
(4, 110, 4, 1, 1),
(3, 80, 1, 2, 2),
(2, 100, 1, 4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(70) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `category` varchar(70) NOT NULL,
  `type_animaux` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nfavoris` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `description`, `category`, `type_animaux`, `price`, `image`, `date`, `nfavoris`) VALUES
(2, 'PetSafe - Bac Ã  LitiÃ¨re Autonettoyante ScoopFree Ultra', 'HYGIÃ‰NIQUE : La litiÃ¨re de cristaux bleu absorbe l\'urine et dessÃ¨che les excrÃ©ments, assurant une neutralisation incomparable des odeurs ; vous nâ€™avez plus Ã  manipuler les dÃ©chets.\r\nAUTOMATIQUE : La litiÃ¨re pour chats ScoopFree contient un rÃ¢teau automatique activÃ© 5, 10 ou 20 minutes aprÃ¨s le passage the votre chat, selon vos prÃ©fÃ©rences.\r\nSANS DANGER : Le rÃ¢teau est Ã©quipÃ© de de capteurs de sÃ©curitÃ© qui dÃ©tecte la prÃ©sence du chat dans le bac.\r\nBAC JETABLE PRATIQUE : Quand le bac Ã  litiÃ¨re Ã©tanche est plein, vous nâ€™avez plus quâ€™Ã  le retirer et le remplacer par un nouveau, minimisant ainsi la manipulation de la boite et des dÃ©chets.', 'accessoires', 'chats', 100, 'images/81VqVaa3nBL._SL1500_.jpg', '2019-05-02 21:32:54', 0),
(3, 'Todeco Grotte pour Animaux en Peluche', 'Standards/Certifications: SGS\r\nConÃ§u avec des matÃ©riaux doux et confortable pour offrir un lieu de repos agrÃ©able et relaxant pour votre animal de compagnie * Offre un espace de jeu et de repos sÃ»r pour votre animal de compagnie * LÃ©ger: facile Ã  plier et Ã  ranger lorsqu\'il n\'est pas utilisÃ©, ou Ã  emmener avec vous lorsque vous voyagez avec votre animal de compagnie\r\nLa taille de la grotte donne un sentiment d\'intimitÃ© et de sÃ©curitÃ© Ã  l\'animal * IdÃ©al pour les petits chiens et les chats * C\'est un produit bien conÃ§u avec un aspect moderne qui convient au style de votre maison\r\nLe revÃªtement en peluche garde votre animal de compagnie au chaud pendant les jours froids * Fourni avec un coussin intÃ©rieur amovible pour un nettoyage facile\r\nHauteur: 26 cm * MÃ©thode de nettoyage recommandÃ©e: Lavage Ã  la main', 'accessoires', 'chats', 80, 'images/81ODae0vo+L._SL1500_.jpg', '2019-05-02 21:34:37', 3),
(4, 'Sailnovo Distributeur Automatique de Nourriture ', 'ã€Heure et quantite des nourritures preregleã€‘: Ce distributeur de nourriture automatique peut fournir 4 repas possibles d\'un jour, vous pouvez prÃ©programmer l\'heure Ã  laquelle vous souhaitez que votre animal ait Ã  manger et la quantitÃ© de chaque repas ( de 10g Ã  390 g par repas, il existe 39 portions, 10g pour une portion) , le distributeur peut fonctionner automatiquement chaque jour.\r\nã€Enregistrement des messageries vocalesã€‘: mÃªme si vous ne restez pas dans la maison, vous pouvez enregistrer une messagerie vocale pour appeler les chiens ou les chats Ã  manger ou boire. ce distributeur peut enregistrer votre voix pendant 10 secondes pour appeler des animaux de compagnie pour des repas.\r\nã€Alimentation doubleã€‘: Comme un ordinateur portable, lorsque l\'alimentation secteur est en panne, l\'alimentation de la batterie sera disponible. Batterie d\'alimentation, Avec trois piles alcalines D (Non inclus), l\'appareil peut fonctionner pendant 2 ans.\r\nã€Grande capacite de stockage 6Lã€‘: ce distributeur de nourriture possÃ¨de un rÃ©cipient de 6l pour stocker 6lb de croquettes, ainsi il peut nourrir vos animaux de compagnie pour plusieurs jours mÃªme en votre absence tout en gardant ses bons rÃ©gimes.', 'accessoires', 'chats', 110, 'images/61dXBQPa5XL._SL1500_.jpg', '2019-05-02 21:37:00', 1),
(5, 'BRIT Care', 'BRIT Care Junior Croquette Grandes Races Agneau/Riz pour Chiot 12 kg', 'nourriture', 'chiens', 120, 'images/BPN8JUS.png', '2019-05-05 22:36:23', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reaction`
--

DROP TABLE IF EXISTS `reaction`;
CREATE TABLE IF NOT EXISTS `reaction` (
  `id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reaction`
--

INSERT INTO `reaction` (`id`, `type`) VALUES
('asd', 'vsd'),
('qw', 'qw');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`) VALUES
(1, 'ramy', 'jaiem');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `prodfk` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `userfk` FOREIGN KEY (`id_user`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `productid-fk` FOREIGN KEY (`productid`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `userid-fk` FOREIGN KEY (`userid`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `idclientfk` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `clientfk` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `livfk` FOREIGN KEY (`id_livreur`) REFERENCES `livreur` (`id`),
  ADD CONSTRAINT `orderfk` FOREIGN KEY (`order_id_fk`) REFERENCES `orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
