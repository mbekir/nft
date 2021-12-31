-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 31 déc. 2021 à 16:52
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nft`
--

-- --------------------------------------------------------

--
-- Structure de la table `categoire`
--

CREATE TABLE `categoire` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `produit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categoire`
--

INSERT INTO `categoire` (`id`, `nom`, `type`, `produit_id`) VALUES
(1, 'categ', 'cat', 1),
(4, 'cat2', 'tye2', 2),
(5, 'catuser2', 'type2', 2),
(6, 'cat3', 'type3', 3),
(7, 'cat4', 'type4', 4),
(8, 'cat5', 'type5', 5),
(9, 'cat6', 'type6', 6),
(10, 'cat7', 'produit7', 7),
(11, 'cat8', 'produit8', 8),
(12, 'cat9', 'type9', 9),
(13, 'cat10', 'type10', 10);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `image`, `alt`, `produit_id`, `type`) VALUES
(2, 'user1-img1.jpg', 'user1-img1.jpg', 1, 'seconde'),
(3, 'user1-img2.jpg', 'user1-img2.jpg', 1, 'seconde'),
(4, 'user1-img3.jpg', 'user1-img3.jpg', 1, 'seconde'),
(5, 'user1-imgif.gif', 'user1-imgif.gif', 1, 'premiere'),
(6, 'imgif-user2.gif', 'mauser2', 2, 'premiere'),
(7, 'user2-img1.jpg', 'imageuser2', 2, 'seconde'),
(8, 'user2-img2.jpg', 'imguser2', 2, 'seconde'),
(9, 'user2-img3.jpg', 'imuser2', 2, 'seconde'),
(10, 'imgif-user3.gif', 'imagegit', 3, 'premiere'),
(11, 'user3-img1.jpg', 'imagetest', 3, 'seconde'),
(12, 'user3-img2.jpg', 'imagesec', 3, 'seconde'),
(13, 'user3-img3.jpg', 'imagetes', 3, 'seconde'),
(14, 'imgif-user4.gif', 'imagegit', 4, 'premiere'),
(15, 'user4-img1.jpg', 'imagetest1', 4, 'seconde'),
(16, 'user4-img2.jpg', 'imagetest2', 4, 'seconde'),
(17, 'user4-img3.jpg', 'imagetest3', 4, 'seconde'),
(22, 'user5-img1.jpg', 'user5-img1.jpg', 5, 'seconde'),
(23, 'user5-img2.jpg', 'user5-img2.jpg', 5, 'seconde'),
(24, 'imgif-user5.gif', 'imgif-user5.gif', 5, 'premiere'),
(25, 'imgif-user6.gif', 'imgif-user6.gif', 6, 'premiere'),
(26, 'user6-img1.jpg', 'user6-img1.jpg', 6, 'seconde'),
(27, 'user6-img2.jpg', 'user6-img2.jpg', 6, 'seconde'),
(28, 'user6-img3.jpg', 'user6-img3.jpg', 6, 'seconde'),
(29, 'imgif-user7.gif', 'imgif-user7.gif', 7, 'premiere'),
(30, 'user7-img1.jpg', 'user7-img1.jpg', 7, 'seconde'),
(31, 'user7-img2.jpg', 'user7-img2.jpg', 7, 'seconde'),
(32, 'user7-img3.jpg', 'user7-img3.jpg', 7, 'seconde'),
(33, 'imgif-user8.gif', 'imgif-user8.gif', 8, 'premiere'),
(34, 'user8-img1.JPG', 'user8-img1.JPG', 8, 'seconde'),
(35, 'user8-img2.JPG', 'user8-img2.JPG', 8, 'seconde'),
(37, 'imgif-user9.gif', 'imgif-user9.gif', 9, 'premiere'),
(38, 'user9-img2.jpg', 'user6-img2.jpg', 9, 'seconde'),
(39, 'user9-img1.jpg', 'user9-img1.jpg', 9, 'seconde'),
(40, 'user10-img1.jpg', 'user10-img1.jpg', 10, 'premiere'),
(41, 'user10-img2.jpg', 'user10-img2.jpg', 10, 'seconde'),
(42, 'user10-img3.jpg', 'user10-img3.jpg', 10, 'seconde');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_prod` int(11) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `like` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `nom_produit`, `prix`, `user_id`, `description`, `like`) VALUES
(1, 'produit1', 1200, 1, '#22 Portal , Info bellow', 320),
(2, 'produit2', 1200, 2, 'test description', 0),
(3, 'produit 3', 1300, 3, 'test description produit 3', 0),
(4, 'produit 4', 1400, 4, 'test description produit 4', 0),
(5, 'produit 5', 1500, 5, 'test description produit 5', 0),
(6, 'produit 6', 1600, 6, 'test description produit 6', 0),
(7, 'produit 7', 1700, 7, 'test description produit 7', 0),
(8, 'produit 8', 1800, 8, 'test description produit 8', 0),
(9, 'produit 9', 1900, 9, 'test description produit 9', 0),
(10, 'produit 10', 2000, 10, 'test description produit 10', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `photo`, `balance`) VALUES
(1, 'user1', 'user1', 'user1@gmail.com', 'client-1.jpg', 100),
(2, 'user2', 'user2', 'user2@gmail.com', 'client-2.jpg', 200),
(3, 'user3', 'user3', 'user3@gmail.com', 'client-3.jpg', 300),
(4, 'user4', 'user4', 'user4@gmail.com', 'client-4.jpg', 400),
(5, 'user5', 'user5', 'user5@gmail.com', 'client-5.jpg', 500),
(6, 'user6', 'user6', 'user6@gmail.com', 'client-6.jpg', 600),
(7, 'user7', 'user7', 'user7@gmail.com', 'client-7.jpg', 700),
(8, 'user8', 'user8', 'user8@gmail.com', 'client-8.jpg', 800),
(9, 'user9', 'user9', 'user9@gmail.com', 'client-9.jpg', 900),
(10, 'user10', 'user10', 'user10@gmail.com', 'client-10.jpg', 1000);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categoire`
--
ALTER TABLE `categoire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cat` (`produit_id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_images` (`produit_id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `fk_produit` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categoire`
--
ALTER TABLE `categoire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categoire`
--
ALTER TABLE `categoire`
  ADD CONSTRAINT `fk_cat` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id_prod`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_images` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id_prod`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fk_produit` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
