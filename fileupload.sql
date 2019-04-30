-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 30 avr. 2019 à 11:56
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fileupload`
--

-- --------------------------------------------------------

--
-- Structure de la table `accord_permission`
--

DROP TABLE IF EXISTS `accord_permission`;
CREATE TABLE IF NOT EXISTS `accord_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `demande_id` int(11) NOT NULL,
  `accordeur_id` int(11) NOT NULL,
  `dateAccordPermission` datetime NOT NULL,
  `valeur` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BD560D4680E95E18` (`demande_id`),
  KEY `IDX_BD560D4618AF9C4F` (`accordeur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `accord_permission`
--

INSERT INTO `accord_permission` (`id`, `demande_id`, `accordeur_id`, `dateAccordPermission`, `valeur`) VALUES
(65, 43, 2, '2019-04-30 11:38:40', 1),
(66, 44, 2, '2019-04-30 11:39:58', 1),
(67, 45, 2, '2019-04-30 11:42:15', 1),
(68, 46, 2, '2019-04-30 11:54:55', 1);

-- --------------------------------------------------------

--
-- Structure de la table `banque`
--

DROP TABLE IF EXISTS `banque`;
CREATE TABLE IF NOT EXISTS `banque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomDeLaBanque` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `compte_compta_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B1F6CB3CBE29CF45` (`compte_compta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `banque`
--

INSERT INTO `banque` (`id`, `nomDeLaBanque`, `compte_compta_id`) VALUES
(3, 'ECOBANK', 10),
(4, 'BSIC', 6);

-- --------------------------------------------------------

--
-- Structure de la table `class_compta`
--

DROP TABLE IF EXISTS `class_compta`;
CREATE TABLE IF NOT EXISTS `class_compta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `class_compta`
--

INSERT INTO `class_compta` (`id`, `libelle`, `num`, `description`) VALUES
(1, '6', '6', '6'),
(2, '7', '7', '7'),
(3, '2', '2', '2'),
(4, '3', '3', '3');

-- --------------------------------------------------------

--
-- Structure de la table `compte_compta`
--

DROP TABLE IF EXISTS `compte_compta`;
CREATE TABLE IF NOT EXISTS `compte_compta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_compta_id` int(11) NOT NULL,
  `num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1202CF4E16786E48` (`class_compta_id`),
  KEY `IDX_1202CF4E3D8E604F` (`parent`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `compte_compta`
--

INSERT INTO `compte_compta` (`id`, `class_compta_id`, `num`, `libelle`, `description`, `parent`) VALUES
(2, 2, '70', '70', '70', NULL),
(3, 1, '60', '60', '60', NULL),
(4, 2, '705510', '705510', '705510', 2),
(5, 1, '65011', '65011', '65011', 3),
(6, 2, '7045', '7045', '7045', 2),
(7, 3, '2030', '2030', '2030', 8),
(8, 2, '20', '20', '20', NULL),
(9, 2, '89', '89', '89', NULL),
(10, 2, '2531', 'Ecobank', 'Ecobank', 8),
(11, 3, '8921', 'BSIC', 'BSIC', 9),
(12, 3, '2040', '2040', '2040', 8),
(13, 3, '2050', '2050', '2050', 8);

-- --------------------------------------------------------

--
-- Structure de la table `demande_permission`
--

DROP TABLE IF EXISTS `demande_permission`;
CREATE TABLE IF NOT EXISTS `demande_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `demandeur_id` int(11) NOT NULL,
  `journal_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `Etat` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1685980B95A6EE59` (`demandeur_id`),
  KEY `IDX_1685980B478E8802` (`journal_id`),
  KEY `IDX_1685980BC54C8C93` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `demande_permission`
--

INSERT INTO `demande_permission` (`id`, `demandeur_id`, `journal_id`, `date`, `Etat`, `status`, `type_id`) VALUES
(43, 1, 603, '2019-04-30 11:37:48', 1, 1, 2),
(44, 1, 607, '2019-04-30 11:39:48', 1, 1, 2),
(45, 1, 611, '2019-04-30 11:42:04', 1, 1, 2),
(46, 1, 615, '2019-04-30 11:54:46', 1, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `exportation`
--

DROP TABLE IF EXISTS `exportation`;
CREATE TABLE IF NOT EXISTS `exportation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jourExportation` datetime DEFAULT NULL,
  `jourJournal` datetime DEFAULT NULL,
  `numPiece` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numFacture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numCompteGeneral` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numCompteTiers` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `libelleEcriture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateEcheance` datetime DEFAULT NULL,
  `positionJournal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `montantDebit` int(11) DEFAULT NULL,
  `montantCredit` int(11) DEFAULT NULL,
  `journal_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F2D01343478E8802` (`journal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'landogroup', 'landogroup', 'yao.tskapo@landogroup.com', 'yao.tskapo@landogroup.com', 1, NULL, '$2y$13$dNNV7Xib1d.mQuJdaygmbeVGBH6pj42UxaRpZklTgaBurNs2h4gri', '2019-04-30 11:17:04', NULL, NULL, 'a:1:{i:0;s:11:\"ROLE_COMPTA\";}'),
(2, 'landoadmin', 'landoadmin', 'lando@landogroup.com', 'lando@landogroup.com', 1, NULL, '$2y$13$YTuLoya9Y4cCldLHoZgEw.yJ9QTrsGE.t.8FnvPLfCVy/q6orY8dC', '2019-04-30 11:22:02', NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}');

-- --------------------------------------------------------

--
-- Structure de la table `importation`
--

DROP TABLE IF EXISTS `importation`;
CREATE TABLE IF NOT EXISTS `importation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateCreation` datetime NOT NULL,
  `mois` date NOT NULL,
  `annee` date NOT NULL,
  `source` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `type_operation_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_394DCB28C3EF8F86` (`type_operation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `importation`
--

INSERT INTO `importation` (`id`, `dateCreation`, `mois`, `annee`, `source`, `status`, `type_operation_id`) VALUES
(51, '2019-04-30 11:22:29', '1970-04-01', '2019-01-01', 'datacsv_5cc82ff5c7db7.txt', 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `journal`
--

DROP TABLE IF EXISTS `journal`;
CREATE TABLE IF NOT EXISTS `journal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `importation_id` int(11) DEFAULT NULL,
  `jour` datetime NOT NULL,
  `numPiece` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numFacture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `libelleEcriture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateEcheance` date DEFAULT NULL,
  `positionJournal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cumul` int(11) DEFAULT NULL,
  `dispatch` int(11) DEFAULT NULL,
  `codeOperation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `suppression` int(11) DEFAULT NULL,
  `num_compte_id` int(11) DEFAULT NULL,
  `montant` int(11) DEFAULT NULL,
  `isDebit` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C1A7E74D1212529D` (`cumul`),
  KEY `IDX_C1A7E74D707CE1F9` (`importation_id`),
  KEY `IDX_C1A7E74D801B12FC` (`num_compte_id`)
) ENGINE=InnoDB AUTO_INCREMENT=621 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `journal`
--

INSERT INTO `journal` (`id`, `importation_id`, `jour`, `numPiece`, `numFacture`, `reference`, `libelleEcriture`, `dateEcheance`, `positionJournal`, `cumul`, `dispatch`, `codeOperation`, `suppression`, `num_compte_id`, `montant`, `isDebit`) VALUES
(592, 51, '2019-04-30 11:35:05', NULL, NULL, NULL, 'Remboursement - virement', NULL, NULL, NULL, 0, NULL, 0, 13, 88518, 1),
(593, 51, '2019-04-30 11:35:05', NULL, NULL, NULL, 'Remboursement - virement', NULL, NULL, 592, NULL, NULL, 0, 5, 14235, 0),
(594, 51, '2019-04-30 11:35:05', NULL, NULL, NULL, 'Remboursement - virement', NULL, NULL, 592, NULL, NULL, 0, 5, 19700, 0),
(595, 51, '2019-04-30 11:35:05', NULL, NULL, NULL, 'Remboursement - virement', NULL, NULL, 592, NULL, NULL, 0, 5, 54583, 0),
(596, 51, '2019-04-30 11:35:05', NULL, NULL, NULL, 'Remboursement - virement', NULL, NULL, NULL, NULL, NULL, 0, 13, 109166, 1),
(597, 51, '2019-04-30 11:35:05', NULL, NULL, NULL, 'Remboursement - virement', NULL, NULL, 596, NULL, NULL, 0, 5, 54583, 0),
(598, 51, '2019-04-30 11:35:05', NULL, NULL, NULL, 'Remboursement - virement', NULL, NULL, 596, NULL, NULL, 0, 5, 54583, 0),
(599, 51, '2019-04-30 11:35:05', NULL, NULL, NULL, 'Remboursement - virement', NULL, NULL, NULL, NULL, NULL, 0, 13, 54583, 1),
(600, 51, '2019-04-30 11:35:05', NULL, NULL, NULL, 'Remboursement - virement', NULL, NULL, 599, NULL, NULL, 0, 5, 54583, 0),
(601, 51, '2019-04-30 11:35:57', NULL, NULL, NULL, 'test Ecobank', NULL, NULL, 592, 1, '5cc8331d0b2e7', 1, 8, 88518, 1),
(602, 51, '2019-04-30 11:35:57', NULL, NULL, NULL, 'test Ecobank', NULL, NULL, 592, 1, '5cc8331d0b2e7', 1, 8, 88518, 0),
(603, 51, '2019-04-30 11:35:57', NULL, NULL, NULL, 'test Ecobank', NULL, NULL, 592, 1, '5cc8331d0b2e7', 1, 10, 88518, 1),
(604, 51, '2019-04-30 11:35:57', NULL, NULL, NULL, 'test Ecobank', NULL, NULL, 592, 1, '5cc8331d0b2e7', 1, 13, 88518, 0),
(605, 51, '2019-04-30 11:39:00', NULL, NULL, NULL, 'test BSIC', NULL, NULL, 592, 1, '5cc833d485fd3', 1, 8, 50000, 1),
(606, 51, '2019-04-30 11:39:00', NULL, NULL, NULL, 'test BSIC', NULL, NULL, 592, 1, '5cc833d485fd3', 1, 8, 50000, 0),
(607, 51, '2019-04-30 11:39:00', NULL, NULL, NULL, 'test BSIC', NULL, NULL, 592, 1, '5cc833d485fd3', 1, 10, 50000, 1),
(608, 51, '2019-04-30 11:39:00', NULL, NULL, NULL, 'test BSIC', NULL, NULL, 592, 1, '5cc833d485fd3', 1, 13, 50000, 0),
(609, 51, '2019-04-30 11:40:21', NULL, NULL, NULL, 'test BSIC', NULL, NULL, 592, 1, '5cc8342539930', 1, 2, 88518, 1),
(610, 51, '2019-04-30 11:40:21', NULL, NULL, NULL, 'test BISC', NULL, NULL, 592, 1, '5cc8342539930', 1, 8, 88518, 0),
(611, 51, '2019-04-30 11:40:21', NULL, NULL, NULL, 'test BSIC', NULL, NULL, 592, 1, '5cc8342539930', 1, 6, 88518, 1),
(612, 51, '2019-04-30 11:40:21', NULL, NULL, NULL, 'test BSIC', NULL, NULL, 592, 1, '5cc8342539930', 1, 13, 88518, 0),
(613, 51, '2019-04-30 11:54:41', NULL, NULL, NULL, 'test BSIC', NULL, NULL, 592, 1, '5cc8378103b10', 1, 2, 10000, 1),
(614, 51, '2019-04-30 11:54:41', NULL, NULL, NULL, 'test BSIC', NULL, NULL, 592, 1, '5cc8378103b10', 1, 8, 10000, 0),
(615, 51, '2019-04-30 11:54:41', NULL, NULL, NULL, 'test BSIC', NULL, NULL, 592, 1, '5cc8378103b10', 1, 6, 10000, 1),
(616, 51, '2019-04-30 11:54:41', NULL, NULL, NULL, 'test BSIC', NULL, NULL, 592, 1, '5cc8378103b10', 1, 13, 10000, 0),
(617, 51, '2019-04-30 11:56:05', NULL, NULL, NULL, 'test BSIC', NULL, NULL, 592, 1, '5cc837d59b5b9', 0, 2, 88518, 1),
(618, 51, '2019-04-30 11:56:05', NULL, NULL, NULL, 'test BSIC', NULL, NULL, 592, 1, '5cc837d59b5b9', 0, 8, 88518, 0),
(619, 51, '2019-04-30 11:56:05', NULL, NULL, NULL, 'test BSIC', NULL, NULL, 592, 1, '5cc837d59b5b9', 0, 6, 88518, 1),
(620, 51, '2019-04-30 11:56:05', NULL, NULL, NULL, 'test BSIC', NULL, NULL, 592, 1, '5cc837d59b5b9', 0, 13, 88518, 0);

-- --------------------------------------------------------

--
-- Structure de la table `operation_caisse`
--

DROP TABLE IF EXISTS `operation_caisse`;
CREATE TABLE IF NOT EXISTS `operation_caisse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CodeProduit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ModeDeComptabilisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Classification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CodeApporteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Apporteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NumeroPolice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `StatutPolice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NumeroSouscripteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Souscripteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NumeroAssure` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Assure` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DateNaissanceAssure` date NOT NULL,
  `Compte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DateSouscription` date NOT NULL,
  `DateEffet` date NOT NULL,
  `DateEcheance` date NOT NULL,
  `Accessoires` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CoutSms` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PrimeDC` int(11) NOT NULL,
  `PrimeEpargne` int(11) NOT NULL,
  `Periodicite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Prime` int(11) NOT NULL,
  `KDC` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `KTerme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EtatPolice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DateSort` date NOT NULL,
  `PMActuelle` int(11) NOT NULL,
  `DateDeLaPM` date NOT NULL,
  `TypeDeReglement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ModeDePaiement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SourceDeBordereau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `BanqueDeRemise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ReferenceRegt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NCLE` int(11) NOT NULL,
  `DateDeReglement` date NOT NULL,
  `DateDeSaisie` date NOT NULL,
  `UtilisateurAyantSaisie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MtReglement` int(11) NOT NULL,
  `MtReglementHt` int(11) NOT NULL,
  `CoutDePolice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Taxe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NetAPayer` int(11) NOT NULL,
  `Utilisateur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DateDeValidation` date NOT NULL,
  `BeneficiaireEnCasDeDeces` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `produit_id` int(11) DEFAULT NULL,
  `importation_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CF23EAAAF347EFB` (`produit_id`),
  KEY `IDX_CF23EAAA707CE1F9` (`importation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=255 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `operation_caisse`
--

INSERT INTO `operation_caisse` (`id`, `CodeProduit`, `ModeDeComptabilisation`, `Categorie`, `Classification`, `CodeApporteur`, `Apporteur`, `NumeroPolice`, `StatutPolice`, `NumeroSouscripteur`, `Souscripteur`, `NumeroAssure`, `Assure`, `DateNaissanceAssure`, `Compte`, `DateSouscription`, `DateEffet`, `DateEcheance`, `Accessoires`, `CoutSms`, `PrimeDC`, `PrimeEpargne`, `Periodicite`, `Prime`, `KDC`, `KTerme`, `EtatPolice`, `DateSort`, `PMActuelle`, `DateDeLaPM`, `TypeDeReglement`, `ModeDePaiement`, `SourceDeBordereau`, `BanqueDeRemise`, `ReferenceRegt`, `NCLE`, `DateDeReglement`, `DateDeSaisie`, `UtilisateurAyantSaisie`, `MtReglement`, `MtReglementHt`, `CoutDePolice`, `Taxe`, `NetAPayer`, `Utilisateur`, `DateDeValidation`, `BeneficiaireEnCasDeDeces`, `produit_id`, `importation_id`) VALUES
(249, '811.', 'EMISSION', 'INDIVIDUEL', 'MIXTES CLASSIQUES', '1785', '1785-13-KOFFI KODJO OGNANDON YVES LAURENT', '811052X', 'EN COURS', '14167', 'KAWANA', '141607', 'KAWAN', '1979-12-31', '0 0 0', '2018-06-22', '2018-07-01', '2035-06-30', '0', '0', 0, 14235, 'M', 14235, '300000', '3000000', '10', '2019-04-30', 0, '2018-07-01', 'ENCAISSEMENT DE PRIME', 'ESPECE', 'ESPECES', '', 'CTA-CAP-20194-35365', 591867, '2019-04-09', '2019-04-09', 'MIMI', 14235, 14235, '0', '0', 14235, 'GEMEG', '2019-04-09', 'OTAKA UDUNMA PATIENCE\r\n', 3, 51),
(250, '811.', 'EMISSION', 'INDIVIDUEL', 'MIXTES CLASSIQUES', '1737', '1737-04-SALAMI', '811070Q', 'EN COURS', '16018', 'AKAKPO KODJO', '160218', 'AKAKPO KODJO', '1983-03-07', '0 0 0', '2018-11-28', '2018-12-01', '2038-11-30', '0', '0', 0, 19700, 'M', 19700, '500000', '5000000', '10', '2019-04-30', 0, '2018-12-01', 'ENCAISSEMENT DE PRIME', 'ESPECE', 'ESPECES', '', 'CTA-CAP-20194-35366', 727390, '2019-04-09', '2019-04-09', 'MIMI', 19700, 19700, '0', '0', 19700, 'GEMEG', '2019-04-09', 'AKAKPO AKOFALA ESTRELLA EVGENIYA\r\n', 3, 51),
(251, '655.', 'ENCAISSEMENT', 'INDIVIDUEL', 'FAUSSES MIXTES INDIVIDUELLES', '1829', '1829-06-koffi', '6550071C', 'EN COURS', '141865', 'TOSSOU ', '141865', 'TOSSOU AKOUAVI B ', '1969-10-08', '0 0 0', '2018-06-29', '2018-07-01', '2028-06-30', '0', '0', 4583, 50000, 'M', 54583, '5000000', '6532807', '10', '2019-04-30', 0, '2018-07-01', 'ENCAISSEMENT DE PRIME', 'ESPECE', 'ESPECES', '', 'CTA-CAP-20194-35367', 931904, '2019-04-09', '2019-04-09', 'MIMI', 54583, 54583, '0', '0', 54583, 'GEMEG', '2019-04-09', 'AMEGNIGNO KOKOU SYLVAIN A DEFAUT TOSSOU KOMLAN A DEFAUT HOUMKPATI SOSSOU\r\n', 4, 51),
(252, '655.', 'ENCAISSEMENT', 'INDIVIDUEL', 'FAUSSES MIXTES INDIVIDUELLES', '1829', '1829-06-koffi', '6550071C', 'EN COURS', '141865', 'TOSSOU ', '141865', 'TOSSOU AKOUAVI B ', '1969-10-08', '0 0 0', '2018-06-29', '2018-07-01', '2028-06-30', '0', '0', 4583, 50000, 'M', 54583, '5000000', '6532807', '10', '2019-04-30', 0, '2018-07-01', 'ENCAISSEMENT DE PRIME', 'ESPECE', 'ESPECES', '', 'CTA-CAP-20194-35367', 931904, '2019-04-10', '2019-04-09', 'MIMI', 54583, 54583, '0', '0', 54583, 'GEMEG', '2019-04-09', 'AMEGNIGNO KOKOU SYLVAIN A DEFAUT TOSSOU KOMLAN A DEFAUT HOUMKPATI SOSSOU\r\n', 4, 51),
(253, '655.', 'ENCAISSEMENT', 'INDIVIDUEL', 'FAUSSES MIXTES INDIVIDUELLES', '1829', '1829-06-koffi', '6550071C', 'EN COURS', '141865', 'TOSSOU ', '141865', 'TOSSOU AKOUAVI B ', '1969-10-08', '0 0 0', '2018-06-29', '2018-07-01', '2028-06-30', '0', '0', 4583, 50000, 'M', 54583, '5000000', '6532807', '10', '2019-04-30', 0, '2018-07-01', 'ENCAISSEMENT DE PRIME', 'ESPECE', 'ESPECES', '', 'CTA-CAP-20194-35367', 931904, '2019-04-10', '2019-04-09', 'MIMI', 54583, 54583, '0', '0', 54583, 'GEMEG', '2019-04-09', 'AMEGNIGNO KOKOU SYLVAIN A DEFAUT TOSSOU KOMLAN A DEFAUT HOUMKPATI SOSSOU\r\n', 4, 51),
(254, '655.', 'ENCAISSEMENT', 'INDIVIDUEL', 'FAUSSES MIXTES INDIVIDUELLES', '1829', '1829-06-koffi', '6550071C', 'EN COURS', '141865', 'TOSSOU ', '141865', 'TOSSOU AKOUAVI B ', '1969-10-08', '0 0 0', '2018-06-29', '2018-07-01', '2028-06-30', '0', '0', 4583, 50000, 'M', 54583, '5000000', '6532807', '10', '2019-04-30', 0, '2018-07-01', 'ENCAISSEMENT DE PRIME', 'ESPECE', 'ESPECES', '', 'CTA-CAP-20194-35367', 931904, '2019-04-11', '2019-04-09', 'MIMI', 54583, 54583, '0', '0', 54583, 'GEMEG', '2019-04-09', 'AMEGNIGNO KOKOU SYLVAIN A DEFAUT TOSSOU KOMLAN A DEFAUT HOUMKPATI SOSSOU\r\n', 4, 51);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NomProduit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NnumeroDeCodeProduit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `compte_compta_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_29A5EC27BE29CF45` (`compte_compta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `NomProduit`, `NnumeroDeCodeProduit`, `compte_compta_id`) VALUES
(3, 'VISA ETUDES PLUS-VEP BIS', '2536', 5),
(4, 'SERENITE BIS', '3648', 5);

-- --------------------------------------------------------

--
-- Structure de la table `type_demande`
--

DROP TABLE IF EXISTS `type_demande`;
CREATE TABLE IF NOT EXISTS `type_demande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_demande`
--

INSERT INTO `type_demande` (`id`, `libelle`) VALUES
(1, 'Suppression'),
(2, 'Modification');

-- --------------------------------------------------------

--
-- Structure de la table `type_operation`
--

DROP TABLE IF EXISTS `type_operation`;
CREATE TABLE IF NOT EXISTS `type_operation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LibelleTypeOperation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `compte_compta_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AD47E77DBE29CF45` (`compte_compta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_operation`
--

INSERT INTO `type_operation` (`id`, `LibelleTypeOperation`, `compte_compta_id`) VALUES
(5, 'virement', 13),
(6, 'Espèce', 7),
(7, 'Chèque', 12);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accord_permission`
--
ALTER TABLE `accord_permission`
  ADD CONSTRAINT `FK_BD560D4618AF9C4F` FOREIGN KEY (`accordeur_id`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_BD560D4680E95E18` FOREIGN KEY (`demande_id`) REFERENCES `demande_permission` (`id`);

--
-- Contraintes pour la table `banque`
--
ALTER TABLE `banque`
  ADD CONSTRAINT `FK_B1F6CB3CBE29CF45` FOREIGN KEY (`compte_compta_id`) REFERENCES `compte_compta` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `compte_compta`
--
ALTER TABLE `compte_compta`
  ADD CONSTRAINT `FK_1202CF4E16786E48` FOREIGN KEY (`class_compta_id`) REFERENCES `class_compta` (`id`),
  ADD CONSTRAINT `FK_1202CF4E3D8E604F` FOREIGN KEY (`parent`) REFERENCES `compte_compta` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `demande_permission`
--
ALTER TABLE `demande_permission`
  ADD CONSTRAINT `FK_1685980B478E8802` FOREIGN KEY (`journal_id`) REFERENCES `journal` (`id`),
  ADD CONSTRAINT `FK_1685980B95A6EE59` FOREIGN KEY (`demandeur_id`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_1685980BC54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type_demande` (`id`);

--
-- Contraintes pour la table `exportation`
--
ALTER TABLE `exportation`
  ADD CONSTRAINT `FK_F2D01343478E8802` FOREIGN KEY (`journal_id`) REFERENCES `journal` (`id`);

--
-- Contraintes pour la table `importation`
--
ALTER TABLE `importation`
  ADD CONSTRAINT `FK_394DCB28C3EF8F86` FOREIGN KEY (`type_operation_id`) REFERENCES `type_operation` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `journal`
--
ALTER TABLE `journal`
  ADD CONSTRAINT `FK_C1A7E74D1212529D` FOREIGN KEY (`cumul`) REFERENCES `journal` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_C1A7E74D707CE1F9` FOREIGN KEY (`importation_id`) REFERENCES `importation` (`id`),
  ADD CONSTRAINT `FK_C1A7E74D801B12FC` FOREIGN KEY (`num_compte_id`) REFERENCES `compte_compta` (`id`);

--
-- Contraintes pour la table `operation_caisse`
--
ALTER TABLE `operation_caisse`
  ADD CONSTRAINT `FK_CF23EAAA707CE1F9` FOREIGN KEY (`importation_id`) REFERENCES `importation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CF23EAAAF347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC27BE29CF45` FOREIGN KEY (`compte_compta_id`) REFERENCES `compte_compta` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `type_operation`
--
ALTER TABLE `type_operation`
  ADD CONSTRAINT `FK_AD47E77DBE29CF45` FOREIGN KEY (`compte_compta_id`) REFERENCES `compte_compta` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
