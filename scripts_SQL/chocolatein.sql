-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 19 août 2021 à 17:11
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chocolatein`
--
CREATE DATABASE IF NOT EXISTS `chocolatein` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `chocolatein`;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` timestamp NOT NULL DEFAULT current_timestamp(),
  `personne` text DEFAULT NULL,
  `statut` text DEFAULT NULL,
  `mail` text DEFAULT NULL,
  `telephone` text DEFAULT NULL,
  `ville` text DEFAULT NULL,
  `site` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `details_produits`
--

DROP TABLE IF EXISTS `details_produits`;
CREATE TABLE IF NOT EXISTS `details_produits` (
  `idproduit` varchar(25) NOT NULL,
  `num` int(11) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`idproduit`,`num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `details_produits`
--

INSERT INTO `details_produits` (`idproduit`, `num`, `details`) VALUES
('cadeau_convive_cube', 1, 'Dragées de couleur rose et blanc en forme de mini-coeur.'),
('cadeau_convive_cube', 2, 'Ces dragées en forme de coeur sont au chocolat'),
('cadeau_convive_enfant', 1, 'Possibilité de choisir les couleurs de dragées'),
('cadeau_convive_enfant', 2, 'Ou de remplir de toutes autres friandises...'),
('cadeau_convive_sachet', 1, 'Boule de 5 cm'),
('cadeau_convive_sachet', 2, 'Hauteur : 10,5 cm'),
('cadeau_convive_sachet', 3, 'Largeur : 7 cm'),
('choc_o_lait', 1, 'Lait'),
('choc_o_lait', 2, 'Noir'),
('choc_o_lait', 3, 'Noisette'),
('choc_o_lait', 4, 'Café'),
('coffret_27_tablettes', 1, 'noir orange'),
('coffret_27_tablettes', 2, 'noir citron gingembre'),
('coffret_27_tablettes', 3, 'noir 88 % cacao'),
('coffret_27_tablettes', 4, 'lait noisette'),
('coffret_27_tablettes', 5, 'lait spéculos'),
('coffret_27_tablettes', 6, 'lait'),
('coffret_27_tablettes', 7, 'noir amandes'),
('coffret_27_tablettes', 8, 'lait caramel'),
('coffret_27_tablettes', 9, 'noir poivre rose'),
('dragees_amandes_corsees', 1, 'Dragées de la marque Medicis, une marque de qualité'),
('dragees_amandes_corsees', 2, 'Chocolat à 70% de cacao'),
('dragees_amandes_fines', 1, 'Dragées de la marque Medicis, une marque de qualité'),
('dragees_amandes_fines', 2, 'Chocolat à 70% de cacao'),
('dragees_petits_coeurs', 1, 'Dragées de la marque Medicis, une marque de qualité'),
('dragees_petits_coeurs', 2, 'Chocolat à 70% de cacao'),
('dragees_petits_coeurs', 3, 'De nombreuses couleurs disponibles :  bleu galaxie, rose, mauve, fuchsia, prune, dune, safran, orange, gris taupe et vert bambou.'),
('escarpin', 1, 'Excellent cadeau à offrir ou à s\'offrir pour toutes les occasions !'),
('escarpin', 2, 'Anniversaire, Noël ou encore pour la Saint Valentin.'),
('escarpin_chocolat_rose', 1, 'Excellent cadeau à offrir ou à s\'offrir pour toutes les occasions !'),
('escarpin_chocolat_rose', 2, 'Anniversaire, Noël ou encore pour la Saint Valentin.'),
('feuilles_d_automne', 1, 'Feuilles'),
('feuilles_d_automne', 2, 'Fleurs'),
('feuilles_d_automne', 3, 'Champignons'),
('feuilles_d_automne', 4, 'Des colorants naturels uniquement'),
('gateau_de_bonbons', 1, 'Des guimauves'),
('gateau_de_bonbons', 2, 'Des fraises tagadas'),
('gateau_de_bonbons', 3, 'Des oeufs au plat'),
('gateau_de_bonbons', 4, 'Des schtroumpfs'),
('gateau_de_bonbons', 5, 'Des framboises'),
('gateau_de_bonbons', 6, '...'),
('mendiants', 1, 'Tapis moelleux, saveurs croquantes et décor de fruits secs'),
('mendiants', 2, 'Disques de chocolat plein'),
('mendiants', 3, 'Chocolat noir'),
('mendiants', 4, 'Chocolat au lait'),
('outils_chocolat_noir', 1, 'Tournevis'),
('outils_chocolat_noir', 2, 'Marteau'),
('outils_chocolat_noir', 3, 'Scie'),
('outils_chocolat_noir', 4, 'Clef anglaise'),
('outils_chocolat_noir', 5, 'Et pince. '),
('rose_chocolat', 1, 'Excellent cadeau à offrir ou à s\'offrir pour toutes les occasions !'),
('rose_chocolat', 2, 'Anniversaire, Noël ou encore pour la Saint Valentin.'),
('tablettes', 1, 'lait 38 %'),
('tablettes', 2, 'noir 70 %'),
('tablettes', 3, 'lait spéculos'),
('tablettes', 4, 'noir poivre rose'),
('tablettes', 5, 'noir macadamia'),
('tablettes', 6, 'noir orange épice');

-- --------------------------------------------------------

--
-- Structure de la table `gamme`
--

DROP TABLE IF EXISTS `gamme`;
CREATE TABLE IF NOT EXISTS `gamme` (
  `id` varchar(25) NOT NULL,
  `libelle` text NOT NULL,
  `picto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gamme`
--

INSERT INTO `gamme` (`id`, `libelle`, `picto`) VALUES
('chocolats', 'Chocolats', 'box-open'),
('confiseries', 'Confiseries', 'candy-cane'),
('dragees', 'Dragées et cadeaux invités', 'shopping-bag'),
('idees_cadeaux', 'Idées cadeaux', 'gifts'),
('produits_de_saison', 'Produits de saison', 'calendar-alt'),
('test', 'un beau test', 'atom');

-- --------------------------------------------------------

--
-- Structure de la table `infolettre`
--

DROP TABLE IF EXISTS `infolettre`;
CREATE TABLE IF NOT EXISTS `infolettre` (
  `id` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` text DEFAULT NULL,
  `confirmation` tinyint(1) DEFAULT NULL,
  `dateconfirmation` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` varchar(25) NOT NULL,
  `nom` text NOT NULL,
  `description` text DEFAULT NULL,
  `packaging` text NOT NULL,
  `urlimg` text NOT NULL,
  `idgamme` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idgamme` (`idgamme`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `description`, `packaging`, `urlimg`, `idgamme`) VALUES
('ballotins', 'Ballotins', 'Ballotins &agrave; composer directement devant les pr&eacute;sentoirs.', 'de 125 g &agrave; 1000 g', './vues/images/produits/chocolats/ballotins', 'chocolats'),
('berlingots', 'Berlingots ', 'Assortiment de différents parfums de berlingots', 'en bonbonnière', './vues/images/produits/confiseries/berlingots', 'confiseries'),
('boite_de_luxe', 'Boite de luxe', 'Boite de luxe', 'de 4 à 49 chocolats', './vues/images/produits/chocolats/luxe', 'chocolats'),
('bonbons_espelette', 'Bonbons à la cerise et au piment d’Espelette', 'Surprenant par ses épices et son caractère, c\'est le fleuron du Pays Basque.', 'en bonbonnière', './vues/images/produits/confiseries/piment-espelette', 'confiseries'),
('bonbons_seve_pin', 'Bonbons à la sève de pin', 'Un bonbon traditionnel à la saveur des montagnes qui désencombre les sinus.', 'en bonbonnière', './vues/images/produits/confiseries/seve-pin', 'confiseries'),
('cadeau_convive_cube', 'Cadeau convive cube', 'Dragées présentées dans un élégant cube de plexiglas.', '120 grammes', './vues/images/produits/dragees/cadeau-convive-cube', 'dragees'),
('cadeau_convive_enfant', 'Cadeau convive en bonbonnière', 'Dragées présentées dans une bonbonnière en verre surplombée d\'un petit garçon ou d\'une petite fille.', '180 grammes', './vues/images/produits/dragees/cadeau-convive-pot', 'dragees'),
('cadeau_convive_sachet', 'Élégant sachet de dragées', 'Dragées dans une boule en plastique présentées dans un élégant sachet.', '90 grammes', './vues/images/produits/dragees/cadeau-convive-sachet', 'dragees'),
('choc_o_lait', 'Choc\' o\' lait', 'Carré de chocolat à faire fondre dans du lait chaud.', '33 grammes', './vues/images/produits/saison/choc-o-lait', 'produits_de_saison'),
('citrouille', 'Citrouille', 'En praliné au lait...', '50 grammes', './vues/images/produits/saison/citrouille', 'produits_de_saison'),
('coffret_27_tablettes', 'Coffret de 27 tablettes', 'Coffret de 27 tablettes', '270 grammes', './vues/images/produits/chocolats/tablettes27', 'chocolats'),
('dfgdfg', 'dgdf', 'fdg', 'fdg', './vues/images/produits/chocolats/', 'chocolats'),
('dragees_amandes_corsees', 'Dragées amandes corsées', 'Nappées de fin chocolat noir aux notes chaudes de brioche et de miel. Pour garnir les cadeaux de vos invités.', 'Environ 80 dragées pour 250g', './vues/images/produits/dragees/dragees-amandes-corsees', 'dragees'),
('dragees_amandes_fines', 'Dragées amandes finesse extrême', 'Amande fraîche au goût délicat de la douce amertume. Pour garnir les cadeaux de vos invités.', 'Environ 85 dragées pour 250g', './vues/images/produits/dragees/dragees-amandes-finesse-extreme', 'dragees'),
('dragees_petits_coeurs', 'Dragées Petits Coeurs', 'Du bon chocolat au lait moulé avec une finition au sucre coloré. Pour garnir les cadeaux de vos invités.', '250 grammes', './vues/images/produits/dragees/dragees-chocolat', 'dragees'),
('escarpin', 'Escarpin en chocolat', 'Un palet mendiant est à l\'avant de la chaussure en chocolat.', 'un cadeau original', './vues/images/produits/idees_cadeaux/chaussure-noire', 'idees_cadeaux'),
('escarpin_chocolat_rose', 'Escarpin en chocolat rose', 'Talon haut en chocolat blanc, coloré en rouge betterave. Intérieur en chocolat au lait.', 'un cadeau original', './vues/images/produits/idees_cadeaux/chaussure-rose', 'idees_cadeaux'),
('feuilles_d_automne', 'Feuilles d\'automne', 'Chocolats pralinés sous différentes formes...', '180 grammes', './vues/images/produits/saison/feuilles_automne', 'produits_de_saison'),
('gateau_de_bonbons', 'Gâteau de bonbons', 'Assemblage de bonbons en forme de gâteau fourni dans une boîte de luxe', 'tout en élégance', './vues/images/produits/confiseries/gateau-bonbons', 'confiseries'),
('grelons', 'Grêlons', 'Noisettes caramélisées, enrobées de chocolat au lait, puis légèrement saupoudrées de sucre glace.', '150 grammes ou vrac', './vues/images/produits/dragees/grelons', 'dragees'),
('herisson', 'Hérisson', 'Chocolat praliné blanc ou lait.', 'environ 25 grammes', './vues/images/produits/saison/herisson', 'produits_de_saison'),
('hh', 'hh', 'hh', 'hh', './vues/images/produits/chocolats/', 'chocolats'),
('mendiants', 'Mendiants', 'Composition de différents types de mendiants', '200 grammes', './vues/images/produits/chocolats/mendiants', 'chocolats'),
('outils_chocolat_noir', 'Outils en chocolat noir', 'Excellent cadeau à offrir ou à s\'offrir pour toutes les occasions ! Anniversaire, Noël ou encore pour la Saint Valentin.', '5 outils', './vues/images/produits/idees_cadeaux/outils', 'idees_cadeaux'),
('plateau_traiteur', 'Plateau traiteur', 'Plateau traiteur à composer devant les présentoirs.', '25 ou 49 chocolats', './vues/images/produits/chocolats/plateau', 'chocolats'),
('pralines_roses', 'Pralines roses', 'Des amandes enveloppées de sucre cuit, une gourmandise dont il est difficile de se détacher.', '200 grammes', './vues/images/produits/saison/praline-rose', 'produits_de_saison'),
('rose_chocolat', 'Rose en chocolat', 'Réalisée en chocolat au lait, cette rose fondante est décorée à la main.', '80 grammes', './vues/images/produits/idees_cadeaux/rose', 'idees_cadeaux'),
('tablettes', 'Tablettes', 'Tablettes de 70 grammes', '70 grammes', './vues/images/produits/chocolats/tablettes', 'chocolats');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `IDROLES` int(11) NOT NULL AUTO_INCREMENT,
  `nomRoles` varchar(255) NOT NULL,
  PRIMARY KEY (`IDROLES`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`IDROLES`, `nomRoles`) VALUES
(1, 'Administrateur'),
(2, 'Utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `userdaily`
--

DROP TABLE IF EXISTS `userdaily`;
CREATE TABLE IF NOT EXISTS `userdaily` (
  `IDUSERDAILY` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `ip` text NOT NULL,
  PRIMARY KEY (`IDUSERDAILY`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `userdaily`
--

INSERT INTO `userdaily` (`IDUSERDAILY`, `date`, `ip`) VALUES
(2, '2021-05-13', '127.0.0.1'),
(9, '2021-05-12', '127.0.0.1'),
(11, '2021-05-12', '192.168.1.34'),
(12, '2021-08-18', '127.0.0.1'),
(13, '2021-08-19', '127.0.0.1');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `IDUTILISATEURS` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` text NOT NULL,
  `mail` text NOT NULL,
  `motdepasse` text NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`IDUTILISATEURS`),
  KEY `utilisateurs_roles` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`IDUTILISATEURS`, `pseudo`, `mail`, `motdepasse`, `role`) VALUES
(1, 'admin', 'admin@chocolatein.com', 'f4f263e439cf40925e6a412387a9472a6773c2580212a4fb50d224d3a817de17', 1),
(2, 'utilisateur', 'utilisateur@chocolatein.com', 'f4f263e439cf40925e6a412387a9472a6773c2580212a4fb50d224d3a817de17', 2),
(3, 'tab', 'tab@chocolatein.com', 'f4f263e439cf40925e6a412387a9472a6773c2580212a4fb50d224d3a817de17', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `details_produits`
--
ALTER TABLE `details_produits`
  ADD CONSTRAINT `fk_idproduit` FOREIGN KEY (`idproduit`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fk_idgamme` FOREIGN KEY (`idgamme`) REFERENCES `gamme` (`id`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_roles` FOREIGN KEY (`role`) REFERENCES `roles` (`IDROLES`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
