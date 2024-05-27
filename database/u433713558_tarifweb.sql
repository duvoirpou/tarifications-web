-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 27 mai 2024 à 15:03
-- Version du serveur : 10.11.7-MariaDB-cll-lve
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u433713558_tarifweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sites web d\'entreprise', '2024-04-06 13:31:55', '2024-04-06 13:31:55'),
(2, 'Sites web d\'information', '2024-04-06 13:31:55', '2024-04-06 13:31:55'),
(3, 'Sites web communautaires', '2024-04-06 13:39:38', '2024-04-06 13:39:38'),
(4, 'Sites web de services', '2024-04-06 13:39:38', '2024-04-06 13:39:38'),
(5, 'Sites web éducatifs', '2024-04-06 13:40:29', '2024-04-06 13:40:29'),
(6, 'Sites web de divertissement', '2024-04-06 13:41:01', '2024-04-06 13:41:01');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `functionalities`
--

CREATE TABLE `functionalities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ranking_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `functionalities`
--

INSERT INTO `functionalities` (`id`, `ranking_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 6, 'Page d\'accueil', 'Présente l\'entreprise, ses produits ou services et ses valeurs.', '2024-04-06 14:20:03', '2024-04-06 14:20:03'),
(2, 1, 'Page de présentation de l\'entreprise', 'Détaille l\'histoire, l\'équipe et les valeurs de l\'entreprise.', '2024-04-06 14:20:03', '2024-04-06 14:20:03'),
(3, 1, 'Pages produits ou services', 'Décrivent les produits ou services proposés, avec des photos, des vidéos et des témoignages clients.', '2024-04-06 14:23:34', '2024-04-06 14:23:34'),
(4, 1, 'Page contact', 'Indique les coordonnées de l\'entreprise et un formulaire de contact.', '2024-04-06 14:27:16', '2024-04-06 14:27:16'),
(5, 2, 'Formulaire de contact', 'Permet aux visiteurs de contacter l\'entreprise.', '2024-04-06 14:40:20', '2024-04-06 14:40:20'),
(6, 2, 'Blog', 'Partage des actualités et des articles.', '2024-04-06 14:40:20', '2024-04-06 14:40:20'),
(7, 2, 'Newsletter', 'Permet aux visiteurs de s\'inscrire à la newsletter de l\'entreprise.', '2024-04-06 14:42:12', '2024-04-06 14:42:12'),
(8, 4, 'Référencement naturel (SEO)', 'Optimise le site web pour les moteurs de recherche.', '2024-04-06 14:44:04', '2024-04-06 14:44:04'),
(9, 4, 'Réseaux sociaux', 'Intègre des boutons de partage vers les réseaux sociaux.', '2024-04-06 14:44:04', '2024-04-06 14:44:04'),
(10, 5, 'Responsive design', 'Adapte le site web aux différents formats d\'écran (ordinateurs, tablettes, smartphones).', '2024-04-06 14:45:26', '2024-04-06 14:45:26'),
(11, 7, 'Hébergement sécurisé', 'Protège le site web des attaques et des virus.', '2024-04-06 14:46:33', '2024-04-06 14:46:33'),
(12, 5, 'Sauvegardes régulières', 'Assure la sécurité des données du site web.', '2024-04-06 14:47:25', '2024-04-06 14:47:25'),
(13, 1, 'Catalogue produits', 'Présente les produits à vendre avec des photos, des descriptions et des prix.', '2024-04-06 23:28:20', '2024-04-06 23:28:20'),
(14, 1, 'Fiche produit détaillée', 'Détaille les caractéristiques du produit, les avis clients et les options d\'achat.', '2024-04-06 23:28:20', '2024-04-06 23:28:20'),
(15, 1, 'Panier d\'achat', 'Permet aux clients de sélectionner les produits qu\'ils souhaitent acheter.', '2024-04-06 23:29:39', '2024-04-06 23:29:39'),
(16, 2, 'Paiement en ligne', 'Permet aux clients ou aux utilisateurs de payer leurs achats de manière sécurisée.', '2024-04-06 23:30:24', '2024-04-06 23:30:24'),
(17, 2, 'Livraison et suivi des commandes', 'Indique les options de livraison et permet aux clients de suivre l\'état de leurs commandes', '2024-04-06 23:30:50', '2024-04-06 23:30:50'),
(18, 2, 'Moteur de recherche', 'Permet aux clients de trouver facilement les produits qu\'ils recherchent.', '2024-04-06 23:31:58', '2024-04-06 23:31:58'),
(19, 2, 'Filtres et tris', 'Permettent aux clients de filtrer les produits par catégorie, prix, etc.', '2024-04-06 23:31:58', '2024-04-06 23:31:58'),
(20, 2, 'Recommandations de produits', 'Proposent aux clients des produits susceptibles de les intéresser.', '2024-04-06 23:31:58', '2024-04-06 23:31:58'),
(21, 2, 'Avis clients', 'Permettent aux clients de lire les avis d\'autres clients sur les produits.', '2024-04-06 23:33:42', '2024-04-06 23:33:42'),
(22, 3, 'Programme de fidélité', 'Récompense les clients fidèles.', '2024-04-06 23:36:31', '2024-04-06 23:36:31'),
(23, 4, 'Outils d\'analyse web', 'Suivi du trafic et des performances du site web.', '2024-04-21 11:47:16', '2024-04-21 11:47:16'),
(24, 3, 'Espace client', 'Permet aux clients de créer et de gérer leur compte.', '2024-04-21 12:01:48', '2024-04-21 12:01:48'),
(25, 4, 'Marketing automation', 'Envoie des emails automatiques aux clients en fonction de leur comportement.', '2024-04-21 12:02:19', '2024-04-21 12:02:19'),
(26, 4, 'Campagnes de promotion', 'Propose des réductions et des offres spéciales aux clients.', '2024-04-21 12:03:59', '2024-04-21 12:03:59'),
(27, 2, 'Gestion des documents', 'Permet aux utilisateurs de stocker, de partager et de gérer des documents.', '2024-04-21 12:23:07', '2024-04-21 12:23:07'),
(28, 2, 'Outils de gestion de projet', 'Permet aux utilisateurs de gérer des projets, de suivre les tâches et de collaborer avec d\'autres personnes.', '2024-04-21 12:24:22', '2024-04-21 12:24:22'),
(29, 2, 'Formation en ligne', 'Permet aux utilisateurs de suivre des formations en ligne.', '2024-04-21 12:25:15', '2024-04-21 12:25:15'),
(30, 2, 'Sondages et enquêtes', 'Permet aux utilisateurs de donner leur avis sur divers sujets.', '2024-04-21 12:26:06', '2024-04-21 12:26:06'),
(31, 2, 'Système de suggestion d\'idées', 'Permet aux utilisateurs de soumettre des idées d\'amélioration.', '2024-04-21 12:26:48', '2024-04-21 12:26:48'),
(32, 1, 'Communication et collaboration', 'Permet aux employés de communiquer entre eux, de partager des fichiers et de collaborer sur des projets.', '2024-04-21 12:29:23', '2024-04-21 12:29:23'),
(33, 1, 'Accès à l\'information', 'Permet aux employés d\'accéder à l\'information dont ils ont besoin pour faire leur travail, comme les procédures, les manuels, les politiques et les annonces de l\'entreprise.', '2024-04-21 12:29:53', '2024-04-21 12:29:53'),
(34, 1, 'Gestion des ressources humaines', 'Permet aux employés de gérer leurs informations personnelles, de demander des congés, de consulter leur paie et de s\'inscrire à des formations.', '2024-04-21 12:30:36', '2024-04-21 12:30:36'),
(35, 1, 'Annuaire des employés', 'Permet aux employés de trouver les coordonnées des autres employés.', '2024-04-21 12:31:06', '2024-04-21 12:31:06'),
(36, 1, 'Recherche interne', 'Permet aux employés de trouver rapidement des informations sur le site intranet.', '2024-04-21 12:31:37', '2024-04-21 12:31:37'),
(37, 1, 'Création d\'articles', 'Permet de créer et de publier des articles de blog. Elle inclut généralement un éditeur de texte, des options de mise en forme et la possibilité d\'ajouter des images et des vidéos.', '2024-04-21 12:35:57', '2024-04-21 12:35:57'),
(38, 1, 'Gestion des commentaires', 'Permet aux lecteurs de laisser des commentaires sur les articles. Elle inclut généralement la possibilité de modérer les commentaires et de répondre aux lecteurs.', '2024-04-21 12:36:42', '2024-04-21 12:36:42'),
(39, 1, 'Gestion des utilisateurs', 'Permet de créer des comptes utilisateurs, de gérer les profils et de définir les permissions.', '2024-04-21 12:37:22', '2024-04-21 12:37:22'),
(40, 1, 'Catégorisation et étiquetage', 'Permet de catégoriser et d\'étiqueter les articles pour faciliter leur organisation et leur recherche.', '2024-04-21 12:37:54', '2024-04-21 12:37:54'),
(41, 1, 'Flux RSS', 'Permet aux lecteurs de s\'abonner au flux RSS du blog et de recevoir les nouveaux articles dans leur lecteur RSS.', '2024-04-21 12:39:55', '2024-04-21 12:39:55'),
(42, 2, 'Multilinguisme', 'Permet de proposer le site en plusieurs langues.', '2024-04-21 12:54:47', '2024-04-21 12:54:47'),
(43, 2, 'Contenus multimédias', 'Permet de proposer des contenus multimédias riches, tels que des vidéos, des infographies et des podcasts.', '2024-04-21 12:55:48', '2024-04-21 12:55:48'),
(44, 2, 'Données en temps réel', 'Permet d\'afficher des données en temps réel, telles que des cours de bourse, des résultats sportifs et/ou autres.', '2024-04-21 12:57:34', '2024-04-21 12:57:34'),
(45, 1, 'Personnalisation du contenu', 'Permet aux lecteurs de personnaliser le contenu du site en fonction de leurs intérêts.', '2024-04-21 12:58:41', '2024-04-21 12:58:41'),
(46, 2, 'Recherche avancée', 'Permet aux utilisateurs de trouver rapidement des articles sur le site en utilisant des critères de recherche avancés.', '2024-04-21 13:07:50', '2024-04-21 13:07:50'),
(47, 1, 'Espace membres', 'Permet aux utilisateurs de s\'inscrire, de se connecter, de mettre à jour leurs informations personnelles, de gérer leur compte en fonction de ce que l\'application propose.', '2024-04-21 14:49:52', '2024-04-21 14:49:52'),
(48, 1, 'Système de dons', 'Permet aux internautes de faire des dons.', '2024-04-21 14:52:21', '2024-04-21 14:52:21'),
(49, 7, 'Mises à jour et maintenance', 'Assure l\'amélioration et la réparation du site en cas de dysfonctionnements ou bugs.', '2024-04-21 15:17:48', '2024-04-21 15:17:48'),
(50, 1, 'Publication de contenu', 'Permet aux utilisateurs de publier du contenu, tels que des messages texte, des photos, des vidéos ou des liens vers des sites web externes.', '2024-04-21 15:42:22', '2024-04-21 15:42:22'),
(51, 1, 'Suivi d\'autres utilisateurs', 'Permet aux utilisateurs de suivre d\'autres utilisateurs afin de voir leurs publications dans leur flux d\'actualités.', '2024-04-21 15:42:56', '2024-04-21 15:42:56'),
(52, 1, 'Interaction avec le contenu', 'Permet aux utilisateurs d\'aimer, de commenter et de partager le contenu publié par d\'autres utilisateurs.', '2024-04-21 15:44:43', '2024-04-21 15:44:43'),
(53, 1, 'Messagerie privée', 'Permet aux utilisateurs d\'envoyer des messages privés à d\'autres utilisateurs.', '2024-04-21 15:45:21', '2024-04-21 15:45:21'),
(54, 2, 'Groupes et communautés', 'Permet aux utilisateurs de créer ou de rejoindre des groupes et des communautés autour de centres d\'intérêt communs.', '2024-04-21 15:48:22', '2024-04-21 15:48:22'),
(55, 2, 'Événements', 'Permet aux utilisateurs de créer ou de rejoindre des événements en ligne ou en présentiel.', '2024-04-21 15:48:56', '2024-04-21 15:48:56'),
(56, 2, 'Marketplace', 'Permet aux utilisateurs de vendre ou d\'acheter des biens et des services entre eux.', '2024-04-21 15:49:20', '2024-04-21 15:49:20'),
(57, 2, 'Fonctionnalités de publicité', 'Permet aux entreprises de diffuser des publicités ciblées sur les utilisateurs du réseau social.', '2024-04-21 15:50:03', '2024-04-21 15:50:03'),
(58, 2, 'Fonctionnalités de streaming', 'Permet aux utilisateurs de diffuser des vidéos en direct ou de regarder des vidéos préenregistrées.', '2024-04-21 15:50:26', '2024-04-21 15:50:26'),
(59, 2, 'Fonctionnalités de messagerie instantanée', 'Permet aux utilisateurs de communiquer en temps réel avec d\'autres utilisateurs via des messages instantanés.', '2024-04-21 15:50:50', '2024-04-21 15:50:50'),
(60, 1, 'Création de sujets et de messages', 'Permet aux utilisateurs de créer de nouveaux sujets de discussion et de publier des messages dans les sujets existants.', '2024-04-23 21:43:56', '2024-04-23 21:43:56'),
(61, 1, 'Modération des forums', 'Permet aux modérateurs de gérer les forums, de supprimer les messages inappropriés, de bannir les utilisateurs abusifs et de garantir le bon déroulement des discussions.', '2024-04-23 21:47:15', '2024-04-23 21:47:15'),
(62, 1, 'Système d\'abonnement', 'Permet aux utilisateurs de s\'abonner à des sujets et de recevoir des notifications par email lorsqu\'un nouveau message est publié.', '2024-04-23 21:49:03', '2024-04-23 21:49:03'),
(63, 2, 'Système de réputation', 'Permet de récompenser les utilisateurs actifs et contributeurs en leur attribuant des points de réputation ou des badges.', '2024-04-23 21:51:39', '2024-04-23 21:51:39'),
(64, 2, 'Système de vote', 'Permet aux utilisateurs de voter pour les messages et les sujets, ce qui peut aider à mettre en avant les contributions les plus utiles ou les plus intéressantes.', '2024-04-23 21:55:47', '2024-04-23 21:55:47'),
(65, 1, 'Information et services aux citoyens', 'Permet aux citoyens d\'accéder à des informations sur les services gouvernementaux, les procédures administratives, les lois et réglementations en vigueur. Elle peut inclure des formulaires en ligne, des outils de recherche et des FAQ.', '2024-04-23 22:04:23', '2024-04-23 22:04:23'),
(66, 1, 'Actualités et communications gouvernementales', 'Permet aux citoyens de suivre les actualités gouvernementales, les communiqués de presse et les discours des dirigeants.', '2024-04-23 22:05:50', '2024-04-23 22:05:50'),
(67, 1, 'Participation citoyenne', 'Permet aux citoyens de donner leur avis sur les politiques publiques, de participer à des consultations en ligne et de déposer des pétitions.', '2024-04-23 22:06:58', '2024-04-23 22:06:58'),
(68, 1, 'Paiement des taxes et impôts', 'Permet aux citoyens de payer leurs taxes et impôts en ligne.', '2024-04-23 22:08:09', '2024-04-23 22:08:09'),
(69, 1, 'Espace personnel sécurisé', 'Permet aux citoyens de créer un compte personnel et de gérer leurs informations personnelles, de consulter leurs dossiers administratifs et de suivre leurs demandes en cours.', '2024-04-23 22:09:42', '2024-04-23 22:09:42'),
(70, 2, 'Services en ligne aux citoyens', 'Permet aux citoyens d\'accéder à une large gamme de services en ligne, tels que la demande de passeport, la demande de permis de conduire ou la déclaration de naissance.', '2024-04-23 22:13:11', '2024-04-23 22:13:11'),
(71, 2, 'Outils de transparence et de lutte contre la corruption', 'Permet aux citoyens de signaler des cas de corruption, de consulter les données sur les dépenses publiques et de suivre les progrès des réformes gouvernementales.', '2024-04-23 22:14:11', '2024-04-23 22:14:11'),
(72, 2, 'Espace entreprises', 'Permet aux entreprises de créer un compte, de gérer leurs démarches administratives et de consulter les informations sur les aides et les subventions gouvernementales.', '2024-04-23 22:15:01', '2024-04-23 22:15:01'),
(73, 2, 'Espace dédié aux étrangers', 'Permet aux étrangers d\'obtenir des informations sur les visas, les permis de séjour et les conditions d\'intégration dans le pays.', '2024-04-23 22:16:05', '2024-04-23 22:16:05'),
(74, 1, 'Présentation de l\'événement', 'Permet de présenter l\'événement, sa date, son heure, son lieu, son programme et ses intervenants. Elle peut inclure des textes, des images, des vidéos et des cartes.', '2024-04-23 22:20:56', '2024-04-23 22:20:56'),
(75, 1, 'Inscription et billetterie', 'Permet aux visiteurs de s\'inscrire à l\'événement et d\'acheter des billets en ligne.', '2024-04-23 22:22:02', '2024-04-23 22:22:02'),
(76, 1, 'Espace personnel aux participants', 'Permet aux participants de gérer leur inscription, de consulter leur billet et de télécharger des documents importants.', '2024-04-23 22:27:23', '2024-04-23 22:27:23'),
(77, 1, 'Actualités et communications', 'Permet de publier des actualités sur l\'événement, des communiqués de presse et des informations pratiques.', '2024-04-23 22:29:29', '2024-04-23 22:29:29'),
(78, 2, 'Diffusion de contenu en direct', 'Permet de diffuser des présentations, des ateliers ou des événements en direct sur le site web.', '2024-04-23 22:31:46', '2024-04-23 22:31:46'),
(79, 2, 'Système de vote et d\'évaluation des événements', 'Permet aux participants de voter pour les présentations ou les ateliers qu\'ils ont préférés.', '2024-04-23 22:36:30', '2024-04-23 22:36:30'),
(80, 2, 'Gestion des stands et des exposants', 'Permet aux organisateurs de gérer les stands des exposants, de collecter les inscriptions et de gérer les paiements.', '2024-04-23 22:37:32', '2024-04-23 22:37:32'),
(81, 1, 'Création de profil', 'Permet aux utilisateurs de créer un profil personnel en renseignant des informations sur eux-mêmes, telles que leur âge, leur sexe, leur lieu de résidence, leurs intérêts et leurs centres d\'intérêt.', '2024-04-23 22:52:49', '2024-04-23 22:52:49'),
(82, 1, 'Recherche d\'autres membres', 'Permet aux utilisateurs de rechercher d\'autres membres en fonction de critères tels que l\'âge, le sexe, le lieu de résidence, les intérêts et les centres d\'intérêt.', '2024-04-23 22:53:40', '2024-04-23 22:53:40'),
(83, 1, 'Consultation des profils', 'Permet aux utilisateurs de consulter les profils des autres membres et de voir leurs photos, leurs informations personnelles et leur description.', '2024-04-23 22:54:27', '2024-04-23 22:54:27'),
(84, 1, 'Fonctionnalités de \"matchmaking\"', 'Permet au site web de suggérer des correspondances potentielles aux utilisateurs en fonction de leurs critères de recherche et de leur profil.', '2024-04-23 22:55:47', '2024-04-23 22:55:47'),
(85, 2, 'Appels vidéo et chats en direct', 'Permet aux utilisateurs de passer des appels vidéo ou de chatter en direct avec d\'autres membres.', '2024-04-23 22:57:28', '2024-04-23 22:57:28'),
(86, 2, 'Événements et groupes', 'Permet aux utilisateurs de participer à des événements et à des groupes en ligne ou en présentiel.', '2024-04-23 22:58:35', '2024-04-23 22:58:35'),
(87, 1, 'Compte personnel', 'Permet aux utilisateurs de créer un compte personnel et de gérer leurs informations personnelles.', '2024-04-25 14:37:51', '2024-04-25 14:37:51'),
(88, 1, 'Recherche et sélection', 'Permet aux utilisateurs de rechercher et de sélectionner les biens ou services qu\'ils souhaitent réserver, en utilisant des critères tels que la destination, les dates, le type de logement, le nombre de personnes, etc.', '2024-04-25 14:38:48', '2024-04-25 14:38:48'),
(89, 1, 'Disponibilité et prix', 'Permet aux utilisateurs de vérifier la disponibilité des biens ou services en temps réel et de consulter les prix.', '2024-04-25 14:39:22', '2024-04-25 14:39:22'),
(90, 1, 'Réservation et paiement', 'Permet aux utilisateurs de réserver les biens ou services en ligne et de payer en toute sécurité.', '2024-04-25 14:40:00', '2024-04-25 14:40:00'),
(91, 1, 'Confirmation et gestion de la réservation', 'Permet aux utilisateurs de recevoir une confirmation de leur réservation et de gérer leur réservation en ligne, par exemple en modifiant la date de leur séjour ou en annulant leur réservation.', '2024-04-25 14:40:28', '2024-04-25 14:40:28'),
(92, 2, 'Fonctionnalités de recommandation', 'Permet au site web de recommander aux utilisateurs d\'autres biens ou services qui pourraient les intéresser.', '2024-04-25 14:44:04', '2024-04-25 14:44:04'),
(93, 2, 'Avis et évaluations', 'Permet aux utilisateurs de lire les avis et les évaluations des autres clients.', '2024-04-25 14:46:08', '2024-04-25 14:46:08'),
(94, 2, 'Photos et vidéos', 'Permet aux utilisateurs de visualiser des photos et des vidéos des biens ou services.', '2024-04-25 14:47:09', '2024-04-25 14:47:09'),
(95, 1, 'Comparaison des prix', 'Permet aux utilisateurs de comparer les prix d\'un même produit proposé par différents vendeurs.', '2024-04-25 14:55:34', '2024-04-25 14:55:34'),
(96, 1, 'Liens vers les vendeurs', 'Permet aux utilisateurs de cliquer sur un produit pour être redirigés vers le site web du vendeur où ils peuvent l\'acheter.', '2024-04-25 14:59:14', '2024-04-25 14:59:14'),
(97, 2, 'Outils de comparaison d\'offres', 'Permet aux utilisateurs de comparer les offres de différents vendeurs pour un même produit.', '2024-04-25 15:00:56', '2024-04-25 15:00:56'),
(98, 2, 'Historique des prix', 'Permet aux utilisateurs de voir l\'évolution du prix d\'un produit au fil du temps.', '2024-04-25 15:02:26', '2024-04-25 15:02:26'),
(99, 1, 'Recherche d\'avis', 'Permet aux utilisateurs de rechercher des avis sur des produits, des services, des entreprises ou des lieux en fonction de divers critères, tels que le nom, la catégorie, le lieu, la note, etc.', '2024-04-25 15:05:42', '2024-04-25 15:05:42'),
(100, 1, 'Rédaction d\'avis', 'Permet aux utilisateurs de rédiger et de publier leurs propres avis sur les produits, les services, les entreprises ou les lieux qu\'ils ont utilisés ou fréquentés.', '2024-04-25 15:06:31', '2024-04-25 15:06:31'),
(101, 1, 'Classement des avis', 'Permet de classer les avis par ordre de pertinence, en fonction de divers critères tels que la note, le nombre de votes, la date de publication, etc.', '2024-04-25 15:07:32', '2024-04-25 15:07:32'),
(102, 2, 'Questions et réponses', 'Permet aux utilisateurs de poser des questions aux auteurs d\'avis et d\'obtenir des réponses.', '2024-04-25 15:08:05', '2024-04-25 15:08:05'),
(103, 2, 'Fonctionnalités de gestion de la réputation', 'Permet aux entreprises de gérer leur réputation en ligne en répondant aux avis des clients et en résolvant les problèmes.', '2024-04-25 15:09:33', '2024-04-25 15:09:33'),
(104, 1, 'Création et gestion de cours', 'Permet aux instructeurs ou formateurs de créer et de gérer leurs cours, notamment d\'ajouter du contenu, de définir des horaires et de noter les devoirs ou les exercices.', '2024-04-25 15:21:28', '2024-04-25 15:21:28'),
(105, 1, 'Diffusion de contenu de cours', 'Permet aux étudiants d\'accéder aux supports de cours, tels que des vidéos, des textes et des fichiers audio.', '2024-04-25 15:22:19', '2024-04-25 15:22:19'),
(106, 1, 'Outils de communication et de collaboration éducatives', 'Permet aux instructeurs et aux étudiants de communiquer entre eux, par exemple via des forums de discussion, des chats et des e-mails.', '2024-04-25 15:24:55', '2024-04-25 15:24:55'),
(107, 1, 'Suivi et rapports des apprenants', 'Permet aux instructeurs et aux administrateurs de suivre les progrès des étudiants et de générer des rapports.', '2024-04-25 15:26:39', '2024-04-25 15:26:39'),
(108, 1, 'Recherche de tutoriels', 'Permet aux utilisateurs de rechercher des tutoriels par sujet, par mot-clé ou par niveau de difficulté.', '2024-04-25 16:53:31', '2024-04-25 16:53:31'),
(109, 1, 'Création et publication de tutoriels', 'Permet aux utilisateurs de créer et de publier leurs propres tutoriels, en utilisant du texte, des images, des vidéos et d\'autres supports.', '2024-04-25 16:54:01', '2024-04-25 16:54:01'),
(110, 1, 'Organisation des tutoriels', 'Permet d\'organiser les tutoriels en catégories, sous-catégories et tags.', '2024-04-25 16:54:49', '2024-04-25 16:54:49'),
(111, 1, 'Système de commentaires et d\'évaluation des tutoriels', 'Permet aux utilisateurs de commenter et d\'évaluer les tutoriels.', '2024-04-25 16:55:43', '2024-04-25 16:55:43'),
(112, 1, 'Recherche et découverte de ressources', 'Permet aux utilisateurs de rechercher des ressources numériques par titre, auteur, sujet, mot-clé et autres critères.', '2024-04-25 17:17:26', '2024-04-25 17:17:26'),
(113, 1, 'Navigation dans la bibliothèque', 'Permet aux utilisateurs de parcourir la collection de la bibliothèque par genre, sujet ou autres catégories.', '2024-04-25 17:18:57', '2024-04-25 17:18:57'),
(114, 1, 'Accès aux ressources numériques', 'Permet aux utilisateurs d\'accéder et de consulter des ressources numériques, telles que des livres électroniques, des livres audio, des revues électroniques et des fichiers multimédias.', '2024-04-25 21:10:54', '2024-04-25 21:10:54'),
(115, 1, 'Téléchargement et impression', 'Permet aux utilisateurs de télécharger des ressources numériques sur leurs ordinateurs ou appareils mobiles pour une utilisation hors ligne, et de les imprimer.', '2024-04-25 21:11:31', '2024-04-25 21:11:31'),
(116, 2, 'Gestion des droits numériques', 'Permet à la bibliothèque de contrôler la façon dont les ressources numériques peuvent être accédées et utilisées, par exemple en limitant le nombre de fois qu\'une ressource peut être téléchargée ou en restreignant l\'impression.', '2024-04-25 21:12:48', '2024-04-25 21:12:48'),
(117, 1, 'Navigation et recherche de jeux', 'Permet aux utilisateurs de naviguer et de rechercher des jeux par genre, plateforme, date de sortie et autres critères.', '2024-04-25 21:24:24', '2024-04-25 21:24:24'),
(118, 1, 'Détails des jeux', 'Fournit des informations détaillées sur chaque jeu, telles que des captures d\'écran, des bandes-annonces, des critiques et la configuration système requise.', '2024-04-25 21:24:50', '2024-04-25 21:24:50'),
(119, 1, 'Téléchargements et achats de jeux', 'Permet aux utilisateurs de télécharger ou d\'acheter des jeux directement depuis le site web.', '2024-04-25 21:25:16', '2024-04-25 21:25:16'),
(120, 2, 'Streaming de jeux et cloud gaming', 'Permet aux utilisateurs de diffuser des jeux directement sur leurs ordinateurs ou appareils mobiles sans avoir à les télécharger.', '2024-04-25 21:26:27', '2024-04-25 21:26:27'),
(121, 2, 'E-sport et jeux compétitifs', 'Permet aux utilisateurs de regarder et de participer à des tournois d\'e-sport et à d\'autres événements de jeux compétitifs.', '2024-04-25 21:26:53', '2024-04-25 21:26:53'),
(122, 2, 'Jeux éducatifs et d\'apprentissage', 'Permet aux utilisateurs de jouer à des jeux éducatifs et d\'acquérir de nouvelles compétences.', '2024-04-25 21:27:42', '2024-04-25 21:27:42'),
(123, 1, 'Navigation et recherche de vidéos', 'Permet aux utilisateurs de parcourir et de rechercher des vidéos par genre, sujet, titre et autres critères.', '2024-04-25 21:32:59', '2024-04-25 21:32:59'),
(124, 1, 'Lecture de vidéos', 'Permet aux utilisateurs de regarder des vidéos à la demande, en direct ou en rattrapage.', '2024-04-25 21:33:19', '2024-04-25 21:33:19'),
(125, 1, 'Système de gestion de contenu (CMS)', 'Permet au propriétaire du site web d\'ajouter, de gérer et d\'organiser le contenu.', '2024-04-25 21:34:23', '2024-04-25 21:34:23'),
(126, 1, 'Diffusion vidéo', 'Permet au site web de diffuser des vidéos aux utilisateurs dans une variété de formats et de débits, en fonction de l\'appareil de l\'utilisateur et de sa connexion internet.', '2024-04-25 21:35:10', '2024-04-25 21:35:10'),
(127, 2, 'Abonnement et monétisation', 'Cette fonctionnalité utilise des algorithmes pour recommander des contenus aux utilisateurs en fonction de leur historique, de leurs préférences et d\'autres facteurs.', '2024-04-25 21:35:56', '2024-04-25 21:35:56'),
(128, 2, 'Streaming en direct', 'Permet au site web de diffuser des événements en direct, tels que des concerts, des événements sportifs et des bulletins d\'information.', '2024-04-25 21:36:17', '2024-04-25 21:36:17'),
(129, 2, 'Fonctionnalités interactives', 'Permet aux utilisateurs d\'interagir avec les vidéos, par exemple en ajoutant des commentaires, en aimant ou en n\'aimant pas les vidéos, et en participant à des sondages.', '2024-04-25 21:36:57', '2024-04-25 21:36:57'),
(130, 1, 'Navigation et recherche de musique', 'Cette fonctionnalité permet aux utilisateurs de parcourir et de rechercher de la musique par genre, artiste, album, titre et autres critères.', '2024-04-25 21:41:13', '2024-04-25 21:41:13'),
(131, 1, 'Lecture de musique', 'Cette fonctionnalité permet aux utilisateurs d\'écouter de la musique à la demande, dans des playlists ou à la radio.', '2024-04-25 21:41:37', '2024-04-25 21:41:37'),
(132, 1, 'Streaming musical', 'Cette fonctionnalité permet au site web de diffuser de la musique en continu vers les utilisateurs dans une variété de formats et de débits, en fonction de l\'appareil de l\'utilisateur et de sa connexion internet.', '2024-04-25 21:42:12', '2024-04-25 21:42:12'),
(133, 2, 'Musique en direct', 'Cette fonctionnalité permet aux utilisateurs d\'écouter des concerts et des émissions de radio en direct.', '2024-04-25 21:42:58', '2024-04-25 21:42:58'),
(134, 1, 'Création et envoi de factures', 'Création de factures personnalisées avec les logos, les informations de l\'entreprise et les détails des articles et services ; ajout d\'articles et de services avec des descriptions, des prix et des quantités ; calcul automatique des totaux des factures, y compris les taxes et les remises ; envoi de factures par e-mail ou téléchargement au format PDF.', '2024-05-27 14:28:02', '2024-05-27 14:28:02'),
(135, 1, 'Gestion des clients et des contacts', 'Stockage des informations de contact, telles que les noms, adresses, e-mails et numéros de téléphone.', '2024-05-27 14:37:22', '2024-05-27 14:37:22'),
(136, 1, 'Présentation personnelle', 'Section \"À propos\" ou \"Biographie\" détaillant le parcours professionnel, les compétences, les intérêts et les valeurs.', '2024-05-27 14:53:13', '2024-05-27 14:53:13'),
(137, 1, 'Galerie de projets', 'Affichage des projets passés avec des images, descriptions, et résultats.', '2024-05-27 14:53:37', '2024-05-27 14:53:37'),
(138, 1, 'Études de cas', 'Détails approfondis sur certains projets, incluant les objectifs, le processus, les défis, et les résultats ; témoignages ou citations de clients satisfaits.', '2024-05-27 14:54:49', '2024-05-27 14:54:49'),
(139, 1, 'Compétences et services', 'Liste des compétences spécifiques avec des niveaux de maîtrise ou des certificats ; description des services offerts avec des exemples concrets d’utilisation.', '2024-05-27 14:55:36', '2024-05-27 14:55:36'),
(140, 2, 'Témoignages et recommandations', 'Section dédiée aux avis et recommandations de clients, collègues ou employeurs.', '2024-05-27 14:57:18', '2024-05-27 14:57:18'),
(141, 2, 'Téléchargement de CV', 'Option pour les visiteurs de télécharger un CV ou un portfolio complet en format PDF ; liens vers des profils professionnels externes comme LinkedIn.', '2024-05-27 14:58:00', '2024-05-27 14:58:00');

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '0001_01_01_000000_create_users_table', 1),
(8, '0001_01_01_000001_create_cache_table', 1),
(9, '0001_01_01_000002_create_jobs_table', 1),
(10, '2024_04_06_131656_create_clients_table', 1),
(11, '2024_04_06_131720_create_categories_table', 1),
(12, '2024_04_06_131731_create_types_table', 1),
(13, '2024_04_06_140144_create_rankings_table', 2),
(14, '2024_04_06_140441_create_functionalities_table', 2),
(15, '2024_04_06_141202_create_types_functionalities_table', 2),
(16, '2024_04_06_143114_add_type_id_colonne_to_functionalities_table', 3),
(17, '2024_04_06_223616_add_prix_colonne_to_types_table', 4),
(18, '2024_04_06_231912_delete_type_id_colonne_to_functionalities_table', 5),
(21, '2024_04_10_220800_create_orders_table', 6),
(22, '2024_04_10_222029_create_order_details_table', 6),
(23, '2024_04_11_011924_add_project_name_colonne_to_orders_table', 7);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_address` varchar(255) DEFAULT NULL,
  `additional_information` text DEFAULT NULL,
  `total_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `functionality_id` int(10) UNSIGNED NOT NULL,
  `price` decimal(10,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rankings`
--

CREATE TABLE `rankings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `coefficient` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rankings`
--

INSERT INTO `rankings` (`id`, `name`, `coefficient`, `created_at`, `updated_at`) VALUES
(1, 'Fonctionnalités de base', '0.10', '2024-04-06 14:15:19', '2024-04-06 14:15:19'),
(2, 'Fonctionnalités avancées', '0.30', '2024-04-06 14:15:19', '2024-04-06 14:15:19'),
(3, 'Fonctionnalités de personnalisation', '0.50', '2024-04-06 14:16:01', '2024-04-06 14:16:01'),
(4, 'Fonctionnalités marketing', '0.40', '2024-04-06 14:17:14', '2024-04-06 14:17:14'),
(5, 'Fonctionnalités techniques', '0.20', '2024-04-06 14:17:42', '2024-04-06 14:17:42'),
(6, 'Fonctionnalités requises', '0.01', '2024-04-10 11:03:35', '2024-04-10 11:03:35'),
(7, 'Services annexes', '0.00', '2024-05-06 01:11:05', '2024-05-06 01:11:05');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0BUBLZf7OpsgLHE1ITIvJxvUCi5q3zBPilyrHyFL', NULL, '172.96.85.40', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36 OPR/54.0.2952.64', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYTlFYmFyUDUyOWRnZWNMV2o5Y0hqQzZ1TFZzdXpzbTN3dmlXR3BibiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vdGFyaWZpY2F0aW9ucy13ZWIud2VlZ29zb2Z0LmNvbS9vcmRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716715511),
('16F2hvDPqJAYLPHVJCgucL4AxVmZl1sd4tZcMij6', NULL, '66.249.66.201', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.137 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNjZINTFHYjg4S2lpZXk1eGxMRHgyb21BZXowN0JJUUxhZ1hzdHdzNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vdGFyaWZpY2F0aW9ucy13ZWIud2VlZ29zb2Z0LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716740741),
('1ApzBAmXYD9UIqgGjcMLSZS2aN8XG5ud7cl8alJO', NULL, '185.191.171.17', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR2R2aVBObjhEUTlNRWo5bWVEMTFuM0hzcGJrM0g4aXVlaE1TSmJDZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vdGFyaWZpY2F0aW9ucy13ZWIud2VlZ29zb2Z0LmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716410737),
('1PutNDj1pmbXmMytsb4cjBnAQcQar4VCFQXVPzSC', NULL, '52.167.144.170', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS3cxdndlZk5DZnExdEpwNGVUREtINUJTM3FQMFJkVXBmVWJzYVk4VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vdGFyaWZpY2F0aW9ucy13ZWIud2VlZ29zb2Z0LmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716703550),
('1rop3i4phd1nvho4wbpV9Ctb5hNcDmUw5tRGkoLV', NULL, '40.77.167.235', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid2NITHdQUkRISHFvWFVFSE0zQ0h2MGxYSE1mY0VuTGo5ZUNFQVREZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vdGFyaWZpY2F0aW9ucy13ZWIud2VlZ29zb2Z0LmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716717841),
('54ceBK3b0t4JH2t4RAZ6cAo74Ue3WDLOddPOonZX', NULL, '205.210.31.142', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWxVT2xseWFnZklaRlZUZHNTZXlwTlI1MkJ3MUtCb0Y4cUtWVDl6dSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd2ViY3JlYXRpdmUud2VlZ29zb2Z0LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716585378),
('7r90v1SywZQ8a6l49C4pqUdJMLTOGVke9zGxuECJ', NULL, '102.129.75.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMVRXSzJ0MURERmNCaHlFcFhncmZVeHc2WGhEZHh6OTBHSkk0U3pFZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vd2ViY3JlYXRpdmUud2VlZ29zb2Z0LmNvbS9kZXZpcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716822134),
('9Acet9jLWcavbQd2UBtvHemZ9F00btK3OnQlBQhO', NULL, '2a02:4780:1:5::1a', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiZVVZQWZTR0RlZ0FsR3ZXaVpTUkhzZGFuUFBXSXZHMmFLRjVvd2dyUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716689326),
('AFr9ASUahSD6PCbExGHCfHflzvhMCzzYCG41mn3J', NULL, '40.77.167.68', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid3JIaHJKMEkySVlLRjNIb09IVmdEWmZqZGxxZlNHaDRyajZzdlhPZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd2ViY3JlYXRpdmUud2VlZ29zb2Z0LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716791282),
('bqYhkBW6QmQX4ezo3oo5g7rHqbDHRx9NTSH42B6F', NULL, '2a02:4780:1:5::1a', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTkY2bUxDTWdiU0hrOEpORFkwVGhCS3AwdGhlZHREeGRneDl5V1dEMyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716704986),
('Bw4XgHPZ3ZX54tyJFpmnvQKKaazZr3sBSsipkAwL', NULL, '45.128.160.143', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:98.0) Gecko/20100101 Firefox/98.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM0x4MDlCRzV3YzZDaDBaUmFNMUlzdU1PbWVRRFFRYktFR1pvc2RvUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd2ViY3JlYXRpdmUud2VlZ29zb2Z0LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716509402),
('GHU2OB8wqJRJTRQhhQ69fmDya2S8xOMKxLiFBElU', NULL, '2a02:4780:1:5::1a', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiemVNYnRkZXZhamVoTGRIVHdrMnJVY0t6TDBadUV0NE9YWWxuWkxGSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716775726),
('HizjHVgZ7Q06ltWFSDelLXN3tkwRjc5D6Ow2YOVh', NULL, '212.1.215.43', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVk9EZGQwWkxIZklpTVFwb2t2Q2JLTE9zeTMwUGZaVkduaGlkR0dOMSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716596976),
('HSuAs4SBY66j4y6K8LrLjtTVO02Nsp6gmerwuxEy', NULL, '138.229.98.60', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU3NlV2VJdDU4aDRCczFFZlRJMUY0QmFBQlg5M1Y3anMxR0lHU09ldSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vdGFyaWZpY2F0aW9ucy13ZWIud2VlZ29zb2Z0LmNvbS9vcmRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716715506),
('jAmm16jE8JpwAh29krdwkHymYGxNGckbT5HVbEO4', NULL, '2a04:cec0:1089:5d81:8cbe:2f9e:78df:4e63', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_5_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/21F90 [FBAN/FBIOS;FBAV/464.0.0.39.106;FBBV/599886571;FBDV/iPhone13,2;FBMD/iPhone;FBSN/iOS;FBSV/17.5.1;FBSS/3;FBID/phone;FBLC/fr_FR;FBOP/5;FBRV/602370396]', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUWo2YnpUa043RFVOaUMzV3FNT1h0ZDBSU2VFc3RJOHQ0YXhidkg1biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vd2ViY3JlYXRpdmUud2VlZ29zb2Z0LmNvbS9kZXZpcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716556040),
('Lguik1S3sA0VpS9tXQrDSDVLVHeSWqbAZ7fJjLp2', NULL, '2a02:4780:1:5::1a', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiUzFRZWl6bmtyYkw3ZnZEd2FLUlR2cWllUUdqRlZFQng3Vmozbks2byI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716791386),
('mR4duvqAt4rhiIahb2UYCFTNkZ1WOOuewGqBZZWy', NULL, '40.77.167.230', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVNUVnhaZ2Y2SDNsZUh2N3NBZ2hMRkZGM3I5NFEycFZ4TVd4S0pTcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHBzOi8vd2ViY3JlYXRpdmUud2VlZ29zb2Z0LmNvbS8/dHJrPXB1YmxpY19wb3N0LXRleHQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1716528966),
('nBqxUxlOF4sfaY6CRzNnoiZ7Vt9TbDvuribF89eX', NULL, '2a02:4780:1:5::1a', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiakxsdDJySGZpTTdNbUR3cmRZR2RJcE5icDc4S2VsMmxPbFhZU0JobCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716602236),
('olMPY6ZmouwRRtwe5DBTTU6Val4HYJLOaBEV1Ns3', NULL, '2a03:2880:13ff:1d::face:b00c', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibllENFg1WWJEZlZUbDJobVJabk9kc2xkalU3VGZBQ21yUGwxZkVGOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vdGFyaWZpY2F0aW9ucy13ZWIud2VlZ29zb2Z0LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716680250),
('OPOdE8prDgPbJAQ6QJAxFrbvJfZhYJjsCNSgldP4', NULL, '207.46.13.116', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNE03anNCTlFERG1ITkQwT0k1VWlrb1gxSkhEUFRtWXd5ekVqb1JtVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vdGFyaWZpY2F0aW9ucy13ZWIud2VlZ29zb2Z0LmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716456257),
('pGDPMoMoU7RU2WoHBUK0zSPRk99fQLboglVra7Ly', NULL, '199.34.90.236', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.170 Safari/537.36 OPR/52.0.2871.64', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXRJSVU0R0xiaWVLSjhkcUl5SXpMSVdsZHpQc21KQlJyeGZMVUJBWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vdGFyaWZpY2F0aW9ucy13ZWIud2VlZ29zb2Z0LmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716715523),
('PggTnvVXV1KgAlVPcTk4pAcqIrKwHDSK20hUw6WA', NULL, '2a02:4780:1:5::1a', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiempXMW5jRjNMVXVBZEU5MG5ob1hESW9vRklkUmlFNlR3cnF4SUdXQSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716510575),
('PisNpk3kPAj9TXGXURK3UpJzdYtvl6Mo13hzCo6c', NULL, '154.13.125.10', 'Mozilla/5.0 (X11; Linux i686; rv:50.0.2) Gecko/20100101 Firefox/50.0.2', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMEQ2Z0J0NHdqcnV1MmZ6dWxFMHdPem5DNmt3Ukl6UXJ3a3BSNnhGUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vdGFyaWZpY2F0aW9ucy13ZWIud2VlZ29zb2Z0LmNvbS9kZXZpcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716715502),
('plyrMstcBLJPoIzQ6Et6eofK0NsPeKOSLWPEIqz8', NULL, '169.255.121.236', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:126.0) Gecko/20100101 Firefox/126.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid1lWTkhYUm1PZGZ3ZmpIRDkwU2I2SjV4QTU3aGtvMEc2b25yeVJRZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vd2ViY3JlYXRpdmUud2VlZ29zb2Z0LmNvbS9hZG1pbi90eXBlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716503544),
('PvgabOCP5mVJCzNKDJsGNGTTWziWpZ28CqDzTmai', NULL, '40.77.167.65', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaklleEJYRUlEMFVaRERWWVhheHZhZ2RUMjJPcndEYnRWeXpMTVlBNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vd2ViY3JlYXRpdmUud2VlZ29zb2Z0LmNvbS9kZXZpcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716529533),
('QvxdCWG745U5m6CXAks9aScHU3ZoOr6FBx0VHFJ0', NULL, '209.251.19.71', 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:50.0) Gecko/20100101 Firefox/50.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidjRXOUVLVkxoaUNKSFVRNUFBVXdXNEVybU4zNXFtSktQdzVhVlBXcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vdGFyaWZpY2F0aW9ucy13ZWIud2VlZ29zb2Z0LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716715478),
('rZWDYtm6yZVjdjQRTPgcljhKZTjRu0t9KQMHH22Y', NULL, '169.255.121.236', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR0RraVl2bnF6QTl6Q2ZIcFZxb3dEd3dsZ3dQVnBPeU90VnVpRFJkTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vd2ViY3JlYXRpdmUud2VlZ29zb2Z0LmNvbS9kZXZpcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716492303),
('SHPPLCQ9NBFWEGW33UjnN4PjvGGcoFLBq5b6VZQt', NULL, '2a02:4780:1:5::1a', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiT3hHYmFXZFR2T0V2bVZBZGc0RzhwbkhzUHZWMExBdjNuNFNhb2FkRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716429436),
('T0DcIuUDrcqCKwF8CWEhUf5Zxzw78H2YGpNYRToD', NULL, '52.167.144.145', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVJZV1YycXhkdzY4dXZqTlYySDFjTXlvNjBvcGtZZm1ITVlSbUQyMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vd2ViY3JlYXRpdmUud2VlZ29zb2Z0LmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716529132),
('TlXltvG2Pt86o0Go9YkHJtVqp370PE6pVRpnD5hc', NULL, '2a02:4780:1:5::1a', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTXMzU0plbkFickUwT01nQVl5RWtzTTZkSXZpZGl1SHlCZ1MwVXR2ZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716515836),
('tSVp2Dp5o30LECuB0VjVoie0qNiJnv278ZGJ8nsj', NULL, '23.106.22.12', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Vivaldi/5.3.2679.68', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU29kSjRqcHYzSXpXQVo4SVNZS1ZLeHFQeTRzQVZCbkd1U0dENUNoUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vdGFyaWZpY2F0aW9ucy13ZWIud2VlZ29zb2Z0LmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716708795),
('tt7oF4kI3u3KYYLCiSzuh9rhMzyeI5ecMuUUWhgI', NULL, '2a02:4780:1:5::1a', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiaG9FWm5icDdCYWhZSFdPc0tpd0lrTHpVRFFmQmNLN1ZCQjNmQnVFQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716424176),
('uk79XyeSbkvA0XFM0nqMUeXvX7uiLNH8qIlIVe95', NULL, '167.160.68.26', 'Mozilla/5.0 (X11; Linux i686; rv:59.0.3) Gecko/20100101 Firefox/59.0.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmREVWlJcEJhWWNFRHVxMjhBbnNNR2JjN3pveGxLWUpuZk1vejNoVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vdGFyaWZpY2F0aW9ucy13ZWIud2VlZ29zb2Z0LmNvbS9vcmRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716715509),
('WHsoAZ6OkwU4VD3SrhoPXrrK5WPGN8yLHuvPPVAS', NULL, '40.77.167.36', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRUZ1c1N3dE1sVG1IWHRYcVRNNjBrV3ZISnhWc3VqbVRXcGpnVXpGQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd2ViY3JlYXRpdmUud2VlZ29zb2Z0LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716531747),
('wru8nkPUmCubKY4BzqfYfeHwRWqVZZ5aUiyesfsH', NULL, '66.249.66.200', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.66 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV3NjQkJiMjVheEV3U3VKSW1nd1FZY0FNaTNIVVZsbEhiS0R0MGo4SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vdGFyaWZpY2F0aW9ucy13ZWIud2VlZ29zb2Z0LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716367290),
('X1DmJlwVZFIZCiUzHdd86njQtiJNLHwwrBvLecKp', NULL, '40.77.167.73', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEs5czJ2emU4OTZXdDc1Q29vOVVJUGJHSmxla2VmVE5Pdk9VWDd3NyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzA6Imh0dHBzOi8vd2ViY3JlYXRpdmUud2VlZ29zb2Z0LmNvbS8/dHJrPXB1YmxpY19wb3N0X21haW4tZmVlZC1jYXJkLXRleHQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1716534635);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id`, `category_id`, `name`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Site web vitrine', 'Présente l\'entreprise et ses produits ou services.', '327926.00', '2024-04-06 13:33:05', '2024-04-06 13:33:05'),
(2, 1, 'Site web e-commerce', 'Vend des produits ou services en ligne.', '1311703.00', '2024-04-06 13:33:05', '2024-04-06 13:33:05'),
(3, 1, 'Site web intranet', 'Fournit des informations et des services aux employés d\'une entreprise.', '3278593.00', '2024-04-06 13:34:46', '2024-04-06 13:34:46'),
(4, 2, 'Blog', 'Partage des actualités, des articles et des opinions sur un sujet particulier.', '655719.00', '2024-04-06 13:36:27', '2024-04-06 13:36:27'),
(5, 2, 'Site d\'actualité', 'Publie des articles d\'actualité et des reportages.', '1639296.00', '2024-04-06 13:36:27', '2024-04-06 13:36:27'),
(6, 2, 'Site web d\'association', 'Présente les activités et les missions d\'une association.', '655719.00', '2024-04-06 13:38:10', '2024-04-06 13:38:10'),
(7, 2, 'Site web gouvernemental', 'Fournit des informations et des services aux citoyens.', '9835778.00', '2024-04-06 13:38:10', '2024-04-06 13:38:10'),
(8, 3, 'Réseau social', 'Permet aux utilisateurs de se connecter et de partager du contenu.', '13114371.00', '2024-04-06 13:42:23', '2024-04-06 13:42:23'),
(9, 3, 'Forum', 'Permet aux utilisateurs de discuter de sujets d\'intérêt commun.', '655719.00', '2024-04-06 13:42:23', '2024-04-06 13:42:23'),
(10, 3, 'Site de rencontre', 'Permet aux utilisateurs de rencontrer d\'autres personnes.', '12458653.00', '2024-04-06 13:43:51', '2024-04-06 13:43:51'),
(11, 4, 'Site web de réservation', 'Permet de réserver des billets d\'avion, des hôtels, etc.', '6557186.00', '2024-04-06 13:44:32', '2024-04-06 13:44:32'),
(12, 4, 'Site web de comparaison de prix', 'Permet de comparer les prix des produits et services.', '10491497.00', '2024-04-06 13:44:32', '2024-04-06 13:44:32'),
(13, 4, 'Site web d\'avis', 'Permet aux utilisateurs de donner leur avis sur des produits et services.', '9835778.00', '2024-04-06 13:46:06', '2024-04-06 13:46:06'),
(14, 5, 'Site web de cours en ligne', 'Propose des cours et des formations en ligne.', '13114371.00', '2024-04-06 13:46:58', '2024-04-06 13:46:58'),
(15, 5, 'Site web de tutoriels', 'Fournis des instructions étape par étape sur un sujet particulier.', '6557186.00', '2024-04-06 13:46:58', '2024-04-06 13:46:58'),
(16, 5, 'Site web de bibliothèques numériques', 'Offre un accès à des livres électroniques et à d\'autres ressources numériques.', '11802934.00', '2024-04-06 13:48:08', '2024-04-06 13:48:08'),
(17, 6, 'Site web de jeux vidéo', 'Propose des jeux vidéo en ligne.', '19671557.00', '2024-04-06 13:49:13', '2024-04-06 13:49:13'),
(18, 6, 'Site web de streaming vidéo', 'Propose des films et des séries télévisées en streaming.', '19671557.00', '2024-04-06 13:49:13', '2024-04-06 13:49:13'),
(19, 6, 'Site web de musique', 'Propose des chansons et des albums en streaming.', '19671557.00', '2024-04-06 13:50:11', '2024-04-06 13:50:11'),
(20, 2, 'Site web événementiel', 'Offre une plateforme interactive pour découvrir, explorer et participer à une variété d\'événements captivants.', '5901467.00', '2024-04-21 16:02:04', '2024-04-21 16:02:04'),
(21, 4, 'Site web de facturation', 'Simplifie et automatise le processus de facturation.', '1310211.00', '2024-05-27 14:17:13', '2024-05-27 14:17:13'),
(22, 1, 'Portfolio', 'Présente les travaux, les compétences et les réalisations d\'un professionnel ou d\'une entreprise.', '327553.00', '2024-05-27 14:46:40', '2024-05-27 14:46:40');

-- --------------------------------------------------------

--
-- Structure de la table `types_functionalities`
--

CREATE TABLE `types_functionalities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` int(11) NOT NULL,
  `functionality_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `types_functionalities`
--

INSERT INTO `types_functionalities` (`id`, `type_id`, `functionality_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-04-06 23:21:06', '2024-04-06 23:21:06'),
(2, 1, 2, '2024-04-06 23:21:06', '2024-04-06 23:21:06'),
(3, 1, 3, '2024-04-06 23:22:13', '2024-04-06 23:22:13'),
(4, 1, 4, '2024-04-06 23:22:13', '2024-04-06 23:22:13'),
(5, 2, 1, '2024-04-21 10:43:52', '2024-04-21 10:43:52'),
(6, 1, 8, '2024-04-21 10:45:05', '2024-04-21 10:45:05'),
(7, 1, 5, '2024-04-21 10:46:35', '2024-04-21 10:46:35'),
(8, 1, 10, '2024-04-21 10:47:09', '2024-04-21 10:47:09'),
(9, 1, 11, '2024-04-21 10:48:05', '2024-04-21 10:48:05'),
(10, 2, 2, '2024-04-21 10:49:32', '2024-04-21 10:49:32'),
(11, 2, 13, '2024-04-21 10:50:17', '2024-04-21 10:50:17'),
(12, 2, 15, '2024-04-21 10:51:32', '2024-04-21 10:51:32'),
(13, 2, 16, '2024-04-21 10:55:23', '2024-04-21 10:55:23'),
(14, 2, 14, '2024-04-21 10:56:03', '2024-04-21 10:56:03'),
(15, 2, 18, '2024-04-21 10:57:22', '2024-04-21 10:57:22'),
(16, 2, 19, '2024-04-21 10:58:12', '2024-04-21 10:58:12'),
(17, 2, 8, '2024-04-21 10:58:39', '2024-04-21 10:58:39'),
(18, 2, 21, '2024-04-21 10:59:59', '2024-04-21 10:59:59'),
(19, 2, 20, '2024-04-21 11:01:08', '2024-04-21 11:01:08'),
(20, 2, 10, '2024-04-21 11:02:50', '2024-04-21 11:02:50'),
(21, 2, 11, '2024-04-21 11:03:55', '2024-04-21 11:03:55'),
(22, 2, 9, '2024-04-21 11:45:05', '2024-04-21 11:45:05'),
(23, 2, 23, '2024-04-21 11:47:40', '2024-04-21 11:47:40'),
(24, 2, 12, '2024-04-21 11:49:00', '2024-04-21 11:49:00'),
(25, 2, 25, '2024-04-21 12:02:43', '2024-04-21 12:02:43'),
(26, 2, 26, '2024-04-21 12:04:19', '2024-04-21 12:04:19'),
(27, 3, 32, '2024-04-21 12:32:04', '2024-04-21 12:32:04'),
(28, 3, 33, '2024-04-21 12:32:16', '2024-04-21 12:32:16'),
(29, 3, 34, '2024-04-21 12:32:28', '2024-04-21 12:32:28'),
(30, 3, 35, '2024-04-21 12:32:43', '2024-04-21 12:32:43'),
(31, 3, 36, '2024-04-21 12:32:57', '2024-04-21 12:32:57'),
(32, 3, 27, '2024-04-21 12:33:18', '2024-04-21 12:33:18'),
(33, 3, 28, '2024-04-21 12:33:35', '2024-04-21 12:33:35'),
(34, 3, 29, '2024-04-21 12:33:55', '2024-04-21 12:33:55'),
(35, 3, 30, '2024-04-21 12:34:12', '2024-04-21 12:34:12'),
(36, 4, 37, '2024-04-21 12:40:19', '2024-04-21 12:40:19'),
(37, 4, 38, '2024-04-21 12:40:31', '2024-04-21 12:40:31'),
(38, 4, 39, '2024-04-21 12:40:43', '2024-04-21 12:40:43'),
(39, 4, 40, '2024-04-21 12:41:08', '2024-04-21 12:41:08'),
(40, 4, 41, '2024-04-21 12:41:20', '2024-04-21 12:41:20'),
(41, 4, 8, '2024-04-21 12:41:38', '2024-04-21 12:41:38'),
(42, 4, 9, '2024-04-21 12:41:55', '2024-04-21 12:41:55'),
(43, 4, 10, '2024-04-21 12:42:08', '2024-04-21 12:42:08'),
(44, 4, 7, '2024-04-21 12:43:18', '2024-04-21 12:43:18'),
(45, 4, 23, '2024-04-21 12:49:10', '2024-04-21 12:49:10'),
(46, 5, 37, '2024-04-21 13:00:08', '2024-04-21 13:00:08'),
(47, 5, 46, '2024-04-21 13:08:09', '2024-04-21 13:08:09'),
(48, 5, 45, '2024-04-21 13:09:09', '2024-04-21 13:09:09'),
(49, 5, 9, '2024-04-21 13:09:51', '2024-04-21 13:09:51'),
(50, 5, 43, '2024-04-21 13:10:31', '2024-04-21 13:10:31'),
(51, 5, 42, '2024-04-21 13:10:59', '2024-04-21 13:10:59'),
(52, 5, 44, '2024-04-21 13:11:26', '2024-04-21 13:11:26'),
(53, 5, 7, '2024-04-21 13:12:57', '2024-04-21 13:12:57'),
(54, 5, 10, '2024-04-21 13:13:10', '2024-04-21 13:13:10'),
(55, 5, 8, '2024-04-21 13:13:33', '2024-04-21 13:13:33'),
(56, 5, 11, '2024-04-21 13:13:57', '2024-04-21 13:13:57'),
(57, 5, 12, '2024-04-21 13:14:34', '2024-04-21 13:14:34'),
(58, 5, 4, '2024-04-21 13:15:19', '2024-04-21 13:15:19'),
(59, 5, 5, '2024-04-21 13:15:34', '2024-04-21 13:15:34'),
(60, 5, 23, '2024-04-21 13:16:26', '2024-04-21 13:16:26'),
(61, 6, 1, '2024-04-21 14:20:04', '2024-04-21 14:20:04'),
(62, 6, 2, '2024-04-21 14:23:55', '2024-04-21 14:23:55'),
(63, 6, 4, '2024-04-21 14:24:38', '2024-04-21 14:24:38'),
(64, 6, 5, '2024-04-21 14:24:52', '2024-04-21 14:24:52'),
(65, 6, 47, '2024-04-21 14:50:12', '2024-04-21 14:50:12'),
(66, 6, 48, '2024-04-21 14:52:39', '2024-04-21 14:52:39'),
(67, 6, 37, '2024-04-21 15:09:13', '2024-04-21 15:09:13'),
(68, 6, 43, '2024-04-21 15:09:58', '2024-04-21 15:09:58'),
(69, 6, 10, '2024-04-21 15:10:33', '2024-04-21 15:10:33'),
(70, 6, 8, '2024-04-21 15:11:42', '2024-04-21 15:11:42'),
(71, 6, 11, '2024-04-21 15:11:55', '2024-04-21 15:11:55'),
(72, 6, 12, '2024-04-21 15:12:48', '2024-04-21 15:12:48'),
(73, 5, 49, '2024-04-21 15:18:40', '2024-04-21 15:18:40'),
(75, 4, 49, '2024-04-21 15:19:21', '2024-04-21 15:19:21'),
(76, 3, 49, '2024-04-21 15:19:40', '2024-04-21 15:19:40'),
(77, 2, 49, '2024-04-21 15:19:51', '2024-04-21 15:19:51'),
(78, 1, 49, '2024-04-21 15:20:01', '2024-04-21 15:20:01'),
(79, 8, 47, '2024-04-21 15:40:57', '2024-04-21 15:40:57'),
(80, 8, 50, '2024-04-21 15:46:22', '2024-04-21 15:46:22'),
(81, 8, 51, '2024-04-21 15:46:42', '2024-04-21 15:46:42'),
(82, 8, 52, '2024-04-21 15:46:58', '2024-04-21 15:46:58'),
(83, 8, 53, '2024-04-21 15:47:09', '2024-04-21 15:47:09'),
(84, 8, 54, '2024-04-21 15:51:32', '2024-04-21 15:51:32'),
(85, 8, 55, '2024-04-21 15:51:49', '2024-04-21 15:51:49'),
(86, 8, 56, '2024-04-21 15:52:04', '2024-04-21 15:52:04'),
(87, 8, 57, '2024-04-21 15:52:22', '2024-04-21 15:52:22'),
(88, 8, 58, '2024-04-21 15:52:39', '2024-04-21 15:52:39'),
(89, 8, 59, '2024-04-21 15:52:58', '2024-04-21 15:52:58'),
(90, 8, 10, '2024-04-21 15:53:13', '2024-04-21 15:53:13'),
(91, 8, 8, '2024-04-21 15:53:36', '2024-04-21 15:53:36'),
(92, 8, 23, '2024-04-21 15:54:07', '2024-04-21 15:54:07'),
(93, 8, 11, '2024-04-21 15:54:19', '2024-04-21 15:54:19'),
(94, 8, 12, '2024-04-21 15:54:49', '2024-04-21 15:54:49'),
(95, 9, 60, '2024-04-23 21:45:14', '2024-04-23 21:45:14'),
(96, 9, 61, '2024-04-23 21:47:35', '2024-04-23 21:47:35'),
(97, 9, 46, '2024-04-23 21:48:14', '2024-04-23 21:48:14'),
(98, 9, 62, '2024-04-23 21:49:21', '2024-04-23 21:49:21'),
(99, 9, 47, '2024-04-23 21:49:55', '2024-04-23 21:49:55'),
(100, 9, 63, '2024-04-23 21:51:59', '2024-04-23 21:51:59'),
(101, 9, 53, '2024-04-23 21:53:21', '2024-04-23 21:53:21'),
(102, 9, 64, '2024-04-23 21:56:04', '2024-04-23 21:56:04'),
(103, 9, 9, '2024-04-23 21:56:35', '2024-04-23 21:56:35'),
(104, 9, 10, '2024-04-23 22:00:07', '2024-04-23 22:00:07'),
(105, 9, 8, '2024-04-23 22:00:25', '2024-04-23 22:00:25'),
(106, 9, 49, '2024-04-23 22:01:10', '2024-04-23 22:01:10'),
(107, 9, 11, '2024-04-23 22:01:20', '2024-04-23 22:01:20'),
(108, 9, 23, '2024-04-23 22:02:28', '2024-04-23 22:02:28'),
(109, 7, 65, '2024-04-23 22:05:07', '2024-04-23 22:05:07'),
(110, 7, 66, '2024-04-23 22:06:16', '2024-04-23 22:06:16'),
(111, 7, 67, '2024-04-23 22:07:18', '2024-04-23 22:07:18'),
(112, 7, 68, '2024-04-23 22:08:30', '2024-04-23 22:08:30'),
(113, 7, 69, '2024-04-23 22:10:03', '2024-04-23 22:10:03'),
(114, 7, 70, '2024-04-23 22:13:26', '2024-04-23 22:13:26'),
(115, 7, 71, '2024-04-23 22:14:30', '2024-04-23 22:14:30'),
(116, 7, 72, '2024-04-23 22:15:22', '2024-04-23 22:15:22'),
(117, 7, 73, '2024-04-23 22:16:30', '2024-04-23 22:16:30'),
(118, 7, 11, '2024-04-23 22:16:59', '2024-04-23 22:16:59'),
(119, 7, 23, '2024-04-23 22:17:11', '2024-04-23 22:17:11'),
(120, 7, 10, '2024-04-23 22:17:20', '2024-04-23 22:17:20'),
(121, 7, 49, '2024-04-23 22:17:37', '2024-04-23 22:17:37'),
(122, 20, 74, '2024-04-23 22:21:19', '2024-04-23 22:21:19'),
(123, 20, 75, '2024-04-23 22:22:24', '2024-04-23 22:22:24'),
(124, 20, 9, '2024-04-23 22:24:27', '2024-04-23 22:24:27'),
(125, 20, 76, '2024-04-23 22:27:42', '2024-04-23 22:27:42'),
(126, 20, 77, '2024-04-23 22:29:51', '2024-04-23 22:29:51'),
(127, 20, 78, '2024-04-23 22:32:02', '2024-04-23 22:32:02'),
(128, 20, 16, '2024-04-23 22:33:37', '2024-04-23 22:33:37'),
(129, 20, 79, '2024-04-23 22:36:54', '2024-04-23 22:36:54'),
(130, 20, 80, '2024-04-23 22:38:03', '2024-04-23 22:38:03'),
(131, 20, 11, '2024-04-23 22:38:28', '2024-04-23 22:38:28'),
(132, 20, 23, '2024-04-23 22:38:41', '2024-04-23 22:38:41'),
(133, 20, 49, '2024-04-23 22:39:39', '2024-04-23 22:39:39'),
(134, 20, 10, '2024-04-23 22:41:03', '2024-04-23 22:41:03'),
(135, 10, 81, '2024-04-23 22:53:13', '2024-04-23 22:53:13'),
(136, 10, 82, '2024-04-23 22:53:57', '2024-04-23 22:53:57'),
(137, 10, 83, '2024-04-23 22:54:46', '2024-04-23 22:54:46'),
(138, 10, 53, '2024-04-23 22:55:05', '2024-04-23 22:55:05'),
(139, 10, 84, '2024-04-23 22:56:03', '2024-04-23 22:56:03'),
(140, 10, 85, '2024-04-23 22:57:55', '2024-04-23 22:57:55'),
(141, 10, 86, '2024-04-23 22:59:05', '2024-04-23 22:59:05'),
(142, 10, 10, '2024-04-23 22:59:48', '2024-04-23 22:59:48'),
(143, 10, 11, '2024-04-23 23:00:01', '2024-04-23 23:00:01'),
(144, 10, 23, '2024-04-23 23:00:13', '2024-04-23 23:00:13'),
(145, 10, 8, '2024-04-23 23:00:52', '2024-04-23 23:00:52'),
(146, 10, 49, '2024-04-23 23:01:39', '2024-04-23 23:01:39'),
(147, 20, 8, '2024-04-23 23:02:41', '2024-04-23 23:02:41'),
(148, 11, 87, '2024-04-25 14:38:19', '2024-04-25 14:38:19'),
(149, 11, 88, '2024-04-25 14:41:13', '2024-04-25 14:41:13'),
(150, 11, 89, '2024-04-25 14:41:32', '2024-04-25 14:41:32'),
(151, 11, 90, '2024-04-25 14:41:52', '2024-04-25 14:41:52'),
(152, 11, 91, '2024-04-25 14:42:10', '2024-04-25 14:42:10'),
(153, 11, 92, '2024-04-25 14:44:25', '2024-04-25 14:44:25'),
(154, 11, 93, '2024-04-25 14:46:23', '2024-04-25 14:46:23'),
(155, 11, 94, '2024-04-25 14:47:38', '2024-04-25 14:47:38'),
(156, 11, 26, '2024-04-25 14:48:44', '2024-04-25 14:48:44'),
(157, 11, 22, '2024-04-25 14:49:07', '2024-04-25 14:49:07'),
(158, 11, 10, '2024-04-25 14:49:28', '2024-04-25 14:49:28'),
(159, 11, 23, '2024-04-25 14:49:45', '2024-04-25 14:49:45'),
(160, 11, 11, '2024-04-25 14:49:56', '2024-04-25 14:49:56'),
(161, 11, 49, '2024-04-25 14:50:19', '2024-04-25 14:50:19'),
(162, 11, 12, '2024-04-25 14:51:18', '2024-04-25 14:51:18'),
(163, 11, 8, '2024-04-25 14:51:59', '2024-04-25 14:51:59'),
(164, 11, 25, '2024-04-25 14:52:40', '2024-04-25 14:52:40'),
(165, 12, 18, '2024-04-25 14:56:39', '2024-04-25 14:56:39'),
(166, 12, 95, '2024-04-25 14:56:51', '2024-04-25 14:56:51'),
(167, 12, 19, '2024-04-25 14:57:18', '2024-04-25 14:57:18'),
(168, 12, 14, '2024-04-25 14:58:13', '2024-04-25 14:58:13'),
(169, 12, 96, '2024-04-25 14:59:29', '2024-04-25 14:59:29'),
(170, 12, 21, '2024-04-25 15:00:12', '2024-04-25 15:00:12'),
(171, 12, 97, '2024-04-25 15:01:11', '2024-04-25 15:01:11'),
(172, 12, 20, '2024-04-25 15:01:48', '2024-04-25 15:01:48'),
(173, 12, 98, '2024-04-25 15:02:44', '2024-04-25 15:02:44'),
(174, 12, 10, '2024-04-25 15:03:07', '2024-04-25 15:03:07'),
(175, 12, 11, '2024-04-25 15:03:22', '2024-04-25 15:03:22'),
(176, 12, 8, '2024-04-25 15:03:41', '2024-04-25 15:03:41'),
(177, 12, 23, '2024-04-25 15:04:05', '2024-04-25 15:04:05'),
(178, 13, 99, '2024-04-25 15:11:12', '2024-04-25 15:11:12'),
(179, 13, 100, '2024-04-25 15:11:28', '2024-04-25 15:11:28'),
(180, 13, 101, '2024-04-25 15:14:19', '2024-04-25 15:14:19'),
(181, 13, 102, '2024-04-25 15:14:42', '2024-04-25 15:14:42'),
(182, 13, 103, '2024-04-25 15:15:44', '2024-04-25 15:15:44'),
(183, 13, 10, '2024-04-25 15:15:56', '2024-04-25 15:15:56'),
(184, 13, 11, '2024-04-25 15:16:06', '2024-04-25 15:16:06'),
(185, 13, 8, '2024-04-25 15:16:18', '2024-04-25 15:16:18'),
(186, 13, 49, '2024-04-25 15:16:27', '2024-04-25 15:16:27'),
(187, 13, 9, '2024-04-25 15:16:59', '2024-04-25 15:16:59'),
(188, 14, 104, '2024-04-25 15:27:36', '2024-04-25 15:27:36'),
(189, 14, 105, '2024-04-25 15:27:47', '2024-04-25 15:27:47'),
(190, 14, 106, '2024-04-25 15:28:01', '2024-04-25 15:28:01'),
(191, 14, 107, '2024-04-25 15:28:23', '2024-04-25 15:28:23'),
(192, 14, 10, '2024-04-25 15:28:55', '2024-04-25 15:28:55'),
(193, 14, 6, '2024-04-25 15:29:40', '2024-04-25 15:29:40'),
(194, 14, 11, '2024-04-25 16:48:07', '2024-04-25 16:48:07'),
(195, 14, 8, '2024-04-25 16:48:41', '2024-04-25 16:48:41'),
(196, 14, 23, '2024-04-25 16:48:53', '2024-04-25 16:48:53'),
(197, 14, 49, '2024-04-25 16:49:02', '2024-04-25 16:49:02'),
(198, 14, 12, '2024-04-25 16:50:37', '2024-04-25 16:50:37'),
(199, 15, 108, '2024-04-25 16:57:39', '2024-04-25 16:57:39'),
(200, 15, 109, '2024-04-25 16:58:57', '2024-04-25 16:58:57'),
(201, 15, 110, '2024-04-25 17:04:31', '2024-04-25 17:04:31'),
(202, 15, 111, '2024-04-25 17:05:14', '2024-04-25 17:05:14'),
(203, 15, 54, '2024-04-25 17:06:12', '2024-04-25 17:06:12'),
(204, 15, 62, '2024-04-25 17:06:39', '2024-04-25 17:06:39'),
(205, 15, 23, '2024-04-25 17:07:30', '2024-04-25 17:07:30'),
(206, 15, 11, '2024-04-25 17:07:48', '2024-04-25 17:07:48'),
(207, 15, 8, '2024-04-25 17:08:05', '2024-04-25 17:08:05'),
(208, 15, 9, '2024-04-25 17:08:36', '2024-04-25 17:08:36'),
(209, 15, 49, '2024-04-25 17:08:48', '2024-04-25 17:08:48'),
(210, 15, 47, '2024-04-25 17:09:32', '2024-04-25 17:09:32'),
(211, 16, 112, '2024-04-25 21:14:31', '2024-04-25 21:14:31'),
(212, 16, 113, '2024-04-25 21:14:50', '2024-04-25 21:14:50'),
(213, 16, 114, '2024-04-25 21:15:04', '2024-04-25 21:15:04'),
(214, 16, 115, '2024-04-25 21:15:14', '2024-04-25 21:15:14'),
(215, 16, 47, '2024-04-25 21:15:44', '2024-04-25 21:15:44'),
(216, 16, 116, '2024-04-25 21:16:03', '2024-04-25 21:16:03'),
(217, 16, 9, '2024-04-25 21:16:20', '2024-04-25 21:16:20'),
(218, 16, 8, '2024-04-25 21:16:48', '2024-04-25 21:16:48'),
(219, 16, 11, '2024-04-25 21:16:57', '2024-04-25 21:16:57'),
(220, 16, 23, '2024-04-25 21:17:08', '2024-04-25 21:17:08'),
(221, 16, 49, '2024-04-25 21:17:22', '2024-04-25 21:17:22'),
(222, 16, 10, '2024-04-25 21:17:34', '2024-04-25 21:17:34'),
(223, 16, 12, '2024-04-25 21:17:51', '2024-04-25 21:17:51'),
(224, 17, 117, '2024-04-25 21:28:22', '2024-04-25 21:28:22'),
(225, 17, 118, '2024-04-25 21:28:38', '2024-04-25 21:28:38'),
(226, 17, 119, '2024-04-25 21:28:50', '2024-04-25 21:28:50'),
(227, 17, 47, '2024-04-25 21:29:06', '2024-04-25 21:29:06'),
(228, 17, 120, '2024-04-25 21:29:29', '2024-04-25 21:29:29'),
(229, 17, 121, '2024-04-25 21:29:40', '2024-04-25 21:29:40'),
(230, 17, 122, '2024-04-25 21:29:52', '2024-04-25 21:29:52'),
(231, 17, 11, '2024-04-25 21:30:11', '2024-04-25 21:30:11'),
(232, 17, 10, '2024-04-25 21:30:22', '2024-04-25 21:30:22'),
(233, 17, 8, '2024-04-25 21:30:37', '2024-04-25 21:30:37'),
(234, 17, 49, '2024-04-25 21:30:47', '2024-04-25 21:30:47'),
(235, 17, 23, '2024-04-25 21:30:59', '2024-04-25 21:30:59'),
(236, 18, 123, '2024-04-25 21:37:28', '2024-04-25 21:37:28'),
(237, 18, 124, '2024-04-25 21:37:40', '2024-04-25 21:37:40'),
(238, 18, 47, '2024-04-25 21:37:56', '2024-04-25 21:37:56'),
(239, 18, 125, '2024-04-25 21:38:11', '2024-04-25 21:38:11'),
(240, 18, 126, '2024-04-25 21:38:24', '2024-04-25 21:38:24'),
(241, 18, 127, '2024-04-25 21:38:38', '2024-04-25 21:38:38'),
(242, 18, 128, '2024-04-25 21:39:08', '2024-04-25 21:39:08'),
(243, 18, 129, '2024-04-25 21:39:33', '2024-04-25 21:39:33'),
(244, 18, 9, '2024-04-25 21:39:45', '2024-04-25 21:39:45'),
(245, 19, 130, '2024-04-25 21:50:25', '2024-04-25 21:50:25'),
(246, 19, 131, '2024-04-25 21:50:46', '2024-04-25 21:50:46'),
(247, 19, 125, '2024-04-25 21:53:05', '2024-04-25 21:53:05'),
(248, 19, 132, '2024-04-25 21:53:28', '2024-04-25 21:53:28'),
(249, 19, 127, '2024-04-25 21:53:48', '2024-04-25 21:53:48'),
(250, 19, 133, '2024-04-25 21:54:02', '2024-04-25 21:54:02'),
(251, 19, 9, '2024-04-25 21:54:23', '2024-04-25 21:54:23'),
(252, 19, 8, '2024-04-25 21:54:36', '2024-04-25 21:54:36'),
(253, 19, 11, '2024-04-25 21:54:46', '2024-04-25 21:54:46'),
(254, 19, 23, '2024-04-25 21:54:57', '2024-04-25 21:54:57'),
(255, 19, 49, '2024-04-25 21:55:14', '2024-04-25 21:55:14'),
(256, 19, 10, '2024-04-25 21:55:50', '2024-04-25 21:55:50'),
(257, 4, 11, '2024-05-11 08:07:57', '2024-05-11 08:07:57'),
(258, 21, 11, '2024-05-27 14:19:27', '2024-05-27 14:19:27'),
(259, 21, 49, '2024-05-27 14:19:58', '2024-05-27 14:19:58'),
(260, 21, 134, '2024-05-27 14:29:46', '2024-05-27 14:29:46'),
(261, 21, 10, '2024-05-27 14:31:07', '2024-05-27 14:31:07'),
(262, 21, 42, '2024-05-27 14:31:53', '2024-05-27 14:31:53'),
(263, 21, 23, '2024-05-27 14:32:58', '2024-05-27 14:32:58'),
(264, 21, 5, '2024-05-27 14:33:27', '2024-05-27 14:33:27'),
(265, 21, 135, '2024-05-27 14:37:52', '2024-05-27 14:37:52'),
(266, 22, 1, '2024-05-27 14:47:14', '2024-05-27 14:47:14'),
(267, 22, 11, '2024-05-27 14:47:26', '2024-05-27 14:47:26'),
(268, 22, 49, '2024-05-27 14:47:50', '2024-05-27 14:47:50'),
(269, 22, 4, '2024-05-27 14:48:00', '2024-05-27 14:48:00'),
(270, 22, 42, '2024-05-27 14:48:49', '2024-05-27 14:48:49'),
(271, 22, 8, '2024-05-27 14:49:19', '2024-05-27 14:49:19'),
(272, 21, 8, '2024-05-27 14:49:58', '2024-05-27 14:49:58'),
(273, 22, 10, '2024-05-27 14:50:09', '2024-05-27 14:50:09'),
(274, 22, 9, '2024-05-27 14:50:28', '2024-05-27 14:50:28'),
(275, 22, 6, '2024-05-27 14:51:11', '2024-05-27 14:51:11'),
(276, 22, 7, '2024-05-27 14:51:36', '2024-05-27 14:51:36'),
(277, 22, 136, '2024-05-27 14:58:56', '2024-05-27 14:58:56'),
(278, 22, 137, '2024-05-27 14:59:13', '2024-05-27 14:59:13'),
(279, 22, 138, '2024-05-27 14:59:32', '2024-05-27 14:59:32'),
(280, 22, 139, '2024-05-27 14:59:51', '2024-05-27 14:59:51'),
(282, 22, 140, '2024-05-27 15:01:36', '2024-05-27 15:01:36'),
(283, 22, 141, '2024-05-27 15:01:55', '2024-05-27 15:01:55');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `functionalities`
--
ALTER TABLE `functionalities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `rankings`
--
ALTER TABLE `rankings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rankings_name_unique` (`name`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `types_functionalities`
--
ALTER TABLE `types_functionalities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `functionalities`
--
ALTER TABLE `functionalities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rankings`
--
ALTER TABLE `rankings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `types_functionalities`
--
ALTER TABLE `types_functionalities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
