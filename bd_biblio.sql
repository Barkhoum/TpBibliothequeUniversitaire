-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 déc. 2021 à 15:19
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_biblio`
--
CREATE DATABASE IF NOT EXISTS `bd_biblio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_biblio`;

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id_auteur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `naiss_auteur` date NOT NULL,
  `vnaiss_auteur` varchar(50) NOT NULL,
  `deces_auteur` date NOT NULL,
  `lang_ecriture` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONS POUR LA TABLE `auteur`:
--

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom`, `prenom`, `naiss_auteur`, `vnaiss_auteur`, `deces_auteur`, `lang_ecriture`, `genre`) VALUES
(1, 'nom1', 'prenom1', '0000-00-00', 'vnaiss_auteur1', '0000-00-00', 'lang_ecriture1', 'genre1'),
(2, 'nom2', 'prenom2', '0000-00-00', 'vnaiss_auteur2', '0000-00-00', 'lang_ecriture2', 'genre2'),
(3, 'nom3', 'prenom3', '0000-00-00', 'vnaiss_auteur3', '0000-00-00', 'lang_ecriture3', 'genre3'),
(4, 'nom4', 'prenom4', '0000-00-00', 'vnaiss_auteur4', '0000-00-00', 'lang_ecriture4', 'genre4'),
(5, 'nom5', 'prenom5', '0000-00-00', 'vnaiss_auteur5', '0000-00-00', 'lang_ecriture5', 'genre5'),
(6, 'nom6', 'prenom6', '0000-00-00', 'vnaiss_auteur6', '0000-00-00', 'lang_ecriture6', 'genre6'),
(7, 'nom7', 'prenom7', '0000-00-00', 'vnaiss_auteur7', '0000-00-00', 'lang_ecriture7', 'genre7'),
(8, 'nom8', 'prenom8', '0000-00-00', 'vnaiss_auteur8', '0000-00-00', 'lang_ecriture8', 'genre8'),
(9, 'nom9', 'prenom9', '0000-00-00', 'vnaiss_auteur9', '0000-00-00', 'lang_ecriture9', 'genre9'),
(10, 'nom10', 'prenom10', '0000-00-00', 'vnaiss_auteur10', '0000-00-00', 'lang_ecriture10', 'genre10'),
(11, 'nom11', 'prenom11', '0000-00-00', 'vnaiss_auteur11', '0000-00-00', 'lang_ecriture11', 'genre11'),
(12, 'nom12', 'prenom12', '0000-00-00', 'vnaiss_auteur12', '0000-00-00', 'lang_ecriture12', 'genre12'),
(13, 'nom13', 'prenom13', '0000-00-00', 'vnaiss_auteur13', '0000-00-00', 'lang_ecriture13', 'genre13'),
(14, 'nom14', 'prenom14', '0000-00-00', 'vnaiss_auteur14', '0000-00-00', 'lang_ecriture14', 'genre14'),
(15, 'nom15', 'prenom15', '0000-00-00', 'vnaiss_auteur15', '0000-00-00', 'lang_ecriture15', 'genre15');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_genre` int(11) NOT NULL,
  `genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONS POUR LA TABLE `categorie`:
--

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_genre`, `genre`) VALUES
(1, 'gtttgtgt'),
(2, 'bvnnbnbvn,,'),
(3, 'id_genre1'),
(4, 'id_genre2'),
(5, 'id_genre3'),
(6, 'id_genre4'),
(7, 'id_genre5'),
(8, 'id_genre6'),
(9, 'id_genre7'),
(10, 'id_genre8'),
(11, 'id_genre9'),
(12, 'id_genre10'),
(13, 'id_genre11'),
(14, 'id_genre12'),
(15, 'id_genre13'),
(16, 'id_genre14'),
(17, 'id_genre15'),
(18, 'id_genre16'),
(19, 'id_genre17'),
(20, 'id_genre18'),
(21, 'id_genre19'),
(22, 'id_genre20'),
(23, 'id_genre21'),
(24, 'id_genre22'),
(25, 'id_genre23'),
(26, 'id_genre24'),
(27, 'id_genre25'),
(28, 'id_genre26'),
(29, 'id_genre27'),
(30, 'id_genre28'),
(31, 'id_genre29'),
(32, 'id_genre30'),
(33, 'id_genre31'),
(34, 'id_genre32'),
(35, 'id_genre33'),
(36, 'id_genre34'),
(37, 'id_genre35'),
(38, 'id_genre36'),
(39, 'id_genre37');

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

CREATE TABLE `editeur` (
  `id_editeur` int(11) NOT NULL,
  `maison_edition` varchar(50) NOT NULL,
  `pays_edition` varchar(50) NOT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONS POUR LA TABLE `editeur`:
--

-- --------------------------------------------------------

--
-- Structure de la table `emprunter`
--

CREATE TABLE `emprunter` (
  `id_livre` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date_emprunt_debut` date NOT NULL,
  `date_fin_emprunt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONS POUR LA TABLE `emprunter`:
--   `id_livre`
--       `livre` -> `id_livre`
--   `id_users`
--       `users` -> `id_users`
--

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id_livre` int(11) NOT NULL,
  `titre_livre` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `date_parution` varchar(50) NOT NULL,
  `editeur` varchar(50) NOT NULL,
  `collection` varchar(50) DEFAULT NULL,
  `extrait_livre` text DEFAULT NULL,
  `photo_livre` longblob NOT NULL,
  `id_editeur` int(11) DEFAULT NULL,
  `id_auteur` int(11) DEFAULT NULL,
  `id_genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONS POUR LA TABLE `livre`:
--   `id_auteur`
--       `auteur` -> `id_auteur`
--   `id_genre`
--       `categorie` -> `id_genre`
--   `id_editeur`
--       `editeur` -> `id_editeur`
--

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id_livre`, `titre_livre`, `genre`, `auteur`, `date_parution`, `editeur`, `collection`, `extrait_livre`, `photo_livre`, `id_editeur`, `id_auteur`, `id_genre`) VALUES
(1, 'titre_livre1', 'genre1', 'auteur1', 'date_parution1', 'editeur1', 'collection1', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(2, 'titre_livre2', 'genre2', 'auteur2', 'date_parution2', 'editeur2', 'collection2', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(3, 'titre_livre3', 'genre3', 'auteur3', 'date_parution3', 'editeur3', 'collection3', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(4, 'titre_livre4', 'genre4', 'auteur4', 'date_parution4', 'editeur4', 'collection4', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(5, 'titre_livre5', 'genre5', 'auteur5', 'date_parution5', 'editeur5', 'collection5', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(6, 'titre_livre6', 'genre6', 'auteur6', 'date_parution6', 'editeur6', 'collection6', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(7, 'titre_livre7', 'genre7', 'auteur7', 'date_parution7', 'editeur7', 'collection7', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(8, 'titre_livre8', 'genre8', 'auteur8', 'date_parution8', 'editeur8', 'collection8', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(9, 'titre_livre9', 'genre9', 'auteur9', 'date_parution9', 'editeur9', 'collection9', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(10, 'titre_livre10', 'genre10', 'auteur10', 'date_parution10', 'editeur10', 'collection10', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(11, 'titre_livre11', 'genre11', 'auteur11', 'date_parution11', 'editeur11', 'collection11', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(12, 'titre_livre12', 'genre12', 'auteur12', 'date_parution12', 'editeur12', 'collection12', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(13, 'titre_livre13', 'genre13', 'auteur13', 'date_parution13', 'editeur13', 'collection13', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(14, 'titre_livre14', 'genre14', 'auteur14', 'date_parution14', 'editeur14', 'collection14', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(15, 'titre_livre15', 'genre15', 'auteur15', 'date_parution15', 'editeur15', 'collection15', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(16, 'titre_livre16', 'genre16', 'auteur16', 'date_parution16', 'editeur16', 'collection16', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(17, 'titre_livre17', 'genre17', 'auteur17', 'date_parution17', 'editeur17', 'collection17', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(18, 'titre_livre18', 'genre18', 'auteur18', 'date_parution18', 'editeur18', 'collection18', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(19, 'titre_livre19', 'genre19', 'auteur19', 'date_parution19', 'editeur19', 'collection19', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(20, 'titre_livre20', 'genre20', 'auteur20', 'date_parution20', 'editeur20', 'collection20', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(21, 'titre_livre21', 'genre21', 'auteur21', 'date_parution21', 'editeur21', 'collection21', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(22, 'titre_livre22', 'genre22', 'auteur22', 'date_parution22', 'editeur22', 'collection22', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(23, 'titre_livre23', 'genre23', 'auteur23', 'date_parution23', 'editeur23', 'collection23', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(24, 'titre_livre24', 'genre24', 'auteur24', 'date_parution24', 'editeur24', 'collection24', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(25, 'titre_livre25', 'genre25', 'auteur25', 'date_parution25', 'editeur25', 'collection25', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(26, 'titre_livre26', 'genre26', 'auteur26', 'date_parution26', 'editeur26', 'collection26', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(27, 'titre_livre27', 'genre27', 'auteur27', 'date_parution27', 'editeur27', 'collection27', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(28, 'titre_livre28', 'genre28', 'auteur28', 'date_parution28', 'editeur28', 'collection28', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(29, 'titre_livre29', 'genre29', 'auteur29', 'date_parution29', 'editeur29', 'collection29', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(30, 'titre_livre30', 'genre30', 'auteur30', 'date_parution30', 'editeur30', 'collection30', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(31, 'titre_livre31', 'genre31', 'auteur31', 'date_parution31', 'editeur31', 'collection31', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(32, 'titre_livre32', 'genre32', 'auteur32', 'date_parution32', 'editeur32', 'collection32', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(33, 'titre_livre33', 'genre33', 'auteur33', 'date_parution33', 'editeur33', 'collection33', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(34, 'titre_livre34', 'genre34', 'auteur34', 'date_parution34', 'editeur34', 'collection34', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(35, 'titre_livre35', 'genre35', 'auteur35', 'date_parution35', 'editeur35', 'collection35', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(36, 'titre_livre36', 'genre36', 'auteur36', 'date_parution36', 'editeur36', 'collection36', NULL, 0x70686f746f312c6a7067, 0, 0, 0),
(37, 'titre_livre37', 'genre37', 'auteur37', 'date_parution37', 'editeur37', 'collection37', NULL, 0x70686f746f312c6a7067, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONS POUR LA TABLE `status`:
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nom_user` varchar(50) NOT NULL,
  `prenom_user` varchar(50) NOT NULL,
  `adresse_user` varchar(50) NOT NULL,
  `telephone_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `id_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONS POUR LA TABLE `users`:
--   `id_status`
--       `status` -> `id_status`
--

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `nom_user`, `prenom_user`, `adresse_user`, `telephone_user`, `email_user`, `id_status`) VALUES
(24, 'aaaaa', 'ag', 'dfdf', 'dfdg', 'fgf@gmail.com', NULL),
(25, 'nom', 'prenom', 'adresse', 'telephone', 'email@gmail.com', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id_auteur`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `editeur`
--
ALTER TABLE `editeur`
  ADD PRIMARY KEY (`id_editeur`);

--
-- Index pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD PRIMARY KEY (`id_livre`,`id_users`),
  ADD KEY `emprunter_users0_FK` (`id_users`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id_livre`),
  ADD KEY `livre_editeur_FK` (`id_editeur`),
  ADD KEY `livre_auteur0_FK` (`id_auteur`),
  ADD KEY `livre_categorie1_FK` (`id_genre`);

--
-- Index pour la table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `id_status` (`id_status`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `editeur`
--
ALTER TABLE `editeur`
  MODIFY `id_editeur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id_livre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD CONSTRAINT `emprunter_livre_FK` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`),
  ADD CONSTRAINT `emprunter_users0_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `livre_auteur0_FK` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id_auteur`),
  ADD CONSTRAINT `livre_categorie1_FK` FOREIGN KEY (`id_genre`) REFERENCES `categorie` (`id_genre`),
  ADD CONSTRAINT `livre_editeur_FK` FOREIGN KEY (`id_editeur`) REFERENCES `editeur` (`id_editeur`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_status_FK` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
