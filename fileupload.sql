-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 19 avr. 2019 à 14:40
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
-- Structure de la table `banque`
--

DROP TABLE IF EXISTS `banque`;
CREATE TABLE IF NOT EXISTS `banque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomDeLaBanque` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numCptDispatch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `banque`
--

INSERT INTO `banque` (`id`, `nomDeLaBanque`, `numCptDispatch`) VALUES
(1, 'ECOBANK', 2531),
(2, 'BSIC', 8921);

-- --------------------------------------------------------

--
-- Structure de la table `exportation`
--

DROP TABLE IF EXISTS `exportation`;
CREATE TABLE IF NOT EXISTS `exportation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F2D01343478E8802` (`journal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `exportation`
--

INSERT INTO `exportation` (`id`, `journal_id`, `jourExportation`, `jourJournal`, `numPiece`, `numFacture`, `reference`, `numCompteGeneral`, `numCompteTiers`, `libelleEcriture`, `dateEcheance`, `positionJournal`, `montantDebit`, `montantCredit`) VALUES
(29, 101, '2019-04-19 12:39:32', '2019-04-16 15:09:40', NULL, NULL, NULL, '3030', NULL, 'Remboursement - Virement', NULL, NULL, 74283, NULL),
(30, 102, '2019-04-19 12:39:35', '2019-04-16 15:09:40', NULL, NULL, NULL, '65010', NULL, 'Remboursement - Virement', NULL, NULL, NULL, 19700),
(31, 103, '2019-04-19 12:39:35', '2019-04-16 15:09:41', NULL, NULL, NULL, '65011', NULL, 'Remboursement - Virement', NULL, NULL, NULL, 54583),
(32, 104, '2019-04-19 12:39:35', '2019-04-16 15:09:41', NULL, NULL, NULL, '3030', NULL, 'Remboursement - Virement', NULL, NULL, 109166, NULL),
(33, 105, '2019-04-19 12:39:35', '2019-04-16 15:09:41', NULL, NULL, NULL, '65011', NULL, 'Remboursement - Virement', NULL, NULL, NULL, 54583),
(34, 106, '2019-04-19 12:39:35', '2019-04-16 15:09:41', NULL, NULL, NULL, '65011', NULL, 'Remboursement - Virement', NULL, NULL, NULL, 54583),
(35, 107, '2019-04-19 12:39:36', '2019-04-16 15:09:41', NULL, NULL, NULL, '3030', NULL, 'Remboursement - Virement', NULL, NULL, 54583, NULL),
(36, 108, '2019-04-19 12:39:36', '2019-04-16 15:09:41', NULL, NULL, NULL, '65011', NULL, 'Remboursement - Virement', NULL, NULL, NULL, 54583),
(37, 117, '2019-04-19 12:39:36', '2019-04-18 11:22:40', NULL, NULL, NULL, '2531', NULL, 'test1', NULL, NULL, 10000, NULL),
(38, 118, '2019-04-19 12:39:36', '2019-04-18 11:22:40', NULL, NULL, NULL, '3030', NULL, 'test1', NULL, NULL, NULL, 10000),
(39, 119, '2019-04-19 12:39:36', '2019-04-18 11:23:32', NULL, NULL, NULL, '8921', NULL, 'test2', NULL, NULL, 20000, NULL),
(40, 120, '2019-04-19 12:39:36', '2019-04-18 11:23:32', NULL, NULL, NULL, '3030', NULL, 'test2', NULL, NULL, NULL, 20000),
(41, 121, '2019-04-19 12:39:36', '2019-04-18 11:26:11', NULL, NULL, NULL, '8921', NULL, 'test3', NULL, NULL, 44283, NULL),
(42, 122, '2019-04-19 12:39:36', '2019-04-18 11:26:11', NULL, NULL, NULL, '3030', NULL, 'test3', NULL, NULL, NULL, 44283);

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
(1, 'yaotsakpo', 'yaotsakpo', 'emmanueltsakpo5@gmail.com', 'emmanueltsakpo5@gmail.com', 1, NULL, '$2y$13$eeki4MIzQdEjnK9d3ZRDjO1fhrMf7mMgllvkAPoQs4RSLeLSN7w/6', '2019-04-19 14:32:35', NULL, NULL, 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}');

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `importation`
--

INSERT INTO `importation` (`id`, `dateCreation`, `mois`, `annee`, `source`, `status`, `type_operation_id`) VALUES
(24, '2019-04-16 15:09:24', '1970-04-01', '2019-01-01', 'datacsv_5cb5f02401c2d.txt', 2, 3);

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
  `numCompteGeneral` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numComptTiers` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `libelleEcriture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateEcheance` date DEFAULT NULL,
  `positionJournal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `montantDebit` int(11) DEFAULT NULL,
  `montantCredit` int(11) DEFAULT NULL,
  `cumul` int(11) DEFAULT NULL,
  `dispatch` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C1A7E74D1212529D` (`cumul`),
  KEY `IDX_C1A7E74D707CE1F9` (`importation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `journal`
--

INSERT INTO `journal` (`id`, `importation_id`, `jour`, `numPiece`, `numFacture`, `reference`, `numCompteGeneral`, `numComptTiers`, `libelleEcriture`, `dateEcheance`, `positionJournal`, `montantDebit`, `montantCredit`, `cumul`, `dispatch`) VALUES
(101, 24, '2019-04-16 15:09:40', NULL, NULL, NULL, '3030', NULL, 'Remboursement - Virement', NULL, NULL, 74283, NULL, NULL, 0),
(102, 24, '2019-04-16 15:09:40', NULL, NULL, NULL, '65010', NULL, 'Remboursement - Virement', NULL, NULL, NULL, 19700, 101, NULL),
(103, 24, '2019-04-16 15:09:41', NULL, NULL, NULL, '65011', NULL, 'Remboursement - Virement', NULL, NULL, NULL, 54583, 101, NULL),
(104, 24, '2019-04-16 15:09:41', NULL, NULL, NULL, '3030', NULL, 'Remboursement - Virement', NULL, NULL, 109166, NULL, NULL, NULL),
(105, 24, '2019-04-16 15:09:41', NULL, NULL, NULL, '65011', NULL, 'Remboursement - Virement', NULL, NULL, NULL, 54583, 104, NULL),
(106, 24, '2019-04-16 15:09:41', NULL, NULL, NULL, '65011', NULL, 'Remboursement - Virement', NULL, NULL, NULL, 54583, 104, NULL),
(107, 24, '2019-04-16 15:09:41', NULL, NULL, NULL, '3030', NULL, 'Remboursement - Virement', NULL, NULL, 54583, NULL, NULL, NULL),
(108, 24, '2019-04-16 15:09:41', NULL, NULL, NULL, '65011', NULL, 'Remboursement - Virement', NULL, NULL, NULL, 54583, 107, NULL),
(117, 24, '2019-04-18 11:22:40', NULL, NULL, NULL, '2531', NULL, 'test1', NULL, NULL, 10000, NULL, 101, 1),
(118, 24, '2019-04-18 11:22:40', NULL, NULL, NULL, '3030', NULL, 'test1', NULL, NULL, NULL, 10000, 101, 1),
(119, 24, '2019-04-18 11:23:32', NULL, NULL, NULL, '8921', NULL, 'test2', NULL, NULL, 20000, NULL, 101, 1),
(120, 24, '2019-04-18 11:23:32', NULL, NULL, NULL, '3030', NULL, 'test2', NULL, NULL, NULL, 20000, 101, 1),
(121, 24, '2019-04-18 11:26:11', NULL, NULL, NULL, '8921', NULL, 'test3', NULL, NULL, 44283, NULL, 101, 1),
(122, 24, '2019-04-18 11:26:11', NULL, NULL, NULL, '3030', NULL, 'test3', NULL, NULL, NULL, 44283, 101, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `operation_caisse`
--

INSERT INTO `operation_caisse` (`id`, `CodeProduit`, `ModeDeComptabilisation`, `Categorie`, `Classification`, `CodeApporteur`, `Apporteur`, `NumeroPolice`, `StatutPolice`, `NumeroSouscripteur`, `Souscripteur`, `NumeroAssure`, `Assure`, `DateNaissanceAssure`, `Compte`, `DateSouscription`, `DateEffet`, `DateEcheance`, `Accessoires`, `CoutSms`, `PrimeDC`, `PrimeEpargne`, `Periodicite`, `Prime`, `KDC`, `KTerme`, `EtatPolice`, `DateSort`, `PMActuelle`, `DateDeLaPM`, `TypeDeReglement`, `ModeDePaiement`, `SourceDeBordereau`, `BanqueDeRemise`, `ReferenceRegt`, `NCLE`, `DateDeReglement`, `DateDeSaisie`, `UtilisateurAyantSaisie`, `MtReglement`, `MtReglementHt`, `CoutDePolice`, `Taxe`, `NetAPayer`, `Utilisateur`, `DateDeValidation`, `BeneficiaireEnCasDeDeces`, `produit_id`, `importation_id`) VALUES
(125, '811.', 'EMISSION', 'INDIVIDUEL', 'MIXTES CLASSIQUES', '1737', '1737-04-SALAMI', '811070Q', 'EN COURS', '16018', 'AKAKPO KODJO', '160218', 'AKAKPO KODJO', '1983-03-07', '0 0 0', '2018-11-28', '2018-12-01', '2038-11-30', '0', '0', 0, 19700, 'M', 19700, '500000', '5000000', '10', '2019-04-16', 0, '2018-12-01', 'ENCAISSEMENT DE PRIME', 'ESPECE', 'ESPECES', '', 'CTA-CAP-20194-35366', 727390, '2019-04-09', '2019-04-09', 'MIMI', 19700, 19700, '0', '0', 19700, 'GEMEG', '2019-04-09', 'AKAKPO AKOFALA ESTRELLA EVGENIYA\r\n', 1, 24),
(126, '655.', 'ENCAISSEMENT', 'INDIVIDUEL', 'FAUSSES MIXTES INDIVIDUELLES', '1829', '1829-06-koffi', '6550071C', 'EN COURS', '141865', 'TOSSOU ', '141865', 'TOSSOU AKOUAVI B ', '1969-10-08', '0 0 0', '2018-06-29', '2018-07-01', '2028-06-30', '0', '0', 4583, 50000, 'M', 54583, '5000000', '6532807', '10', '2019-04-16', 0, '2018-07-01', 'ENCAISSEMENT DE PRIME', 'ESPECE', 'ESPECES', '', 'CTA-CAP-20194-35367', 931904, '2019-04-09', '2019-04-09', 'MIMI', 54583, 54583, '0', '0', 54583, 'GEMEG', '2019-04-09', 'AMEGNIGNO KOKOU SYLVAIN A DEFAUT TOSSOU KOMLAN A DEFAUT HOUMKPATI SOSSOU\r\n', 2, 24),
(127, '655.', 'ENCAISSEMENT', 'INDIVIDUEL', 'FAUSSES MIXTES INDIVIDUELLES', '1829', '1829-06-koffi', '6550071C', 'EN COURS', '141865', 'TOSSOU ', '141865', 'TOSSOU AKOUAVI B ', '1969-10-08', '0 0 0', '2018-06-29', '2018-07-01', '2028-06-30', '0', '0', 4583, 50000, 'M', 54583, '5000000', '6532807', '10', '2019-04-16', 0, '2018-07-01', 'ENCAISSEMENT DE PRIME', 'ESPECE', 'ESPECES', '', 'CTA-CAP-20194-35367', 931904, '2019-04-10', '2019-04-09', 'MIMI', 54583, 54583, '0', '0', 54583, 'GEMEG', '2019-04-09', 'AMEGNIGNO KOKOU SYLVAIN A DEFAUT TOSSOU KOMLAN A DEFAUT HOUMKPATI SOSSOU\r\n', 2, 24),
(128, '655.', 'ENCAISSEMENT', 'INDIVIDUEL', 'FAUSSES MIXTES INDIVIDUELLES', '1829', '1829-06-koffi', '6550071C', 'EN COURS', '141865', 'TOSSOU ', '141865', 'TOSSOU AKOUAVI B ', '1969-10-08', '0 0 0', '2018-06-29', '2018-07-01', '2028-06-30', '0', '0', 4583, 50000, 'M', 54583, '5000000', '6532807', '10', '2019-04-16', 0, '2018-07-01', 'ENCAISSEMENT DE PRIME', 'ESPECE', 'ESPECES', '', 'CTA-CAP-20194-35367', 931904, '2019-04-10', '2019-04-09', 'MIMI', 54583, 54583, '0', '0', 54583, 'GEMEG', '2019-04-09', 'AMEGNIGNO KOKOU SYLVAIN A DEFAUT TOSSOU KOMLAN A DEFAUT HOUMKPATI SOSSOU\r\n', 2, 24),
(129, '655.', 'ENCAISSEMENT', 'INDIVIDUEL', 'FAUSSES MIXTES INDIVIDUELLES', '1829', '1829-06-koffi', '6550071C', 'EN COURS', '141865', 'TOSSOU ', '141865', 'TOSSOU AKOUAVI B ', '1969-10-08', '0 0 0', '2018-06-29', '2018-07-01', '2028-06-30', '0', '0', 4583, 50000, 'M', 54583, '5000000', '6532807', '10', '2019-04-16', 0, '2018-07-01', 'ENCAISSEMENT DE PRIME', 'ESPECE', 'ESPECES', '', 'CTA-CAP-20194-35367', 931904, '2019-04-11', '2019-04-09', 'MIMI', 54583, 54583, '0', '0', 54583, 'GEMEG', '2019-04-09', 'AMEGNIGNO KOKOU SYLVAIN A DEFAUT TOSSOU KOMLAN A DEFAUT HOUMKPATI SOSSOU\r\n', 2, 24);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NomProduit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NnumeroDeCodeProduit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numCptCredit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `NomProduit`, `NnumeroDeCodeProduit`, `numCptCredit`) VALUES
(1, 'VISA ETUDES PLUS-VEP BIS', '2536', '65010'),
(2, 'SERENITE BIS', '3648', '65011');

-- --------------------------------------------------------

--
-- Structure de la table `type_operation`
--

DROP TABLE IF EXISTS `type_operation`;
CREATE TABLE IF NOT EXISTS `type_operation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LibelleTypeOperation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numCptDebit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_operation`
--

INSERT INTO `type_operation` (`id`, `LibelleTypeOperation`, `numCptDebit`) VALUES
(2, 'Chèque', '2020'),
(3, 'Virement', '3030'),
(4, 'Espèce', '1010');

--
-- Contraintes pour les tables déchargées
--

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
  ADD CONSTRAINT `FK_C1A7E74D1212529D` FOREIGN KEY (`cumul`) REFERENCES `journal` (`id`),
  ADD CONSTRAINT `FK_C1A7E74D707CE1F9` FOREIGN KEY (`importation_id`) REFERENCES `importation` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `operation_caisse`
--
ALTER TABLE `operation_caisse`
  ADD CONSTRAINT `FK_CF23EAAA707CE1F9` FOREIGN KEY (`importation_id`) REFERENCES `importation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CF23EAAAF347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
