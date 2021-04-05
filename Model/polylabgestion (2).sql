-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 06 fév. 2021 à 11:27
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `polylabgestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

DROP TABLE IF EXISTS `emprunt`;
CREATE TABLE IF NOT EXISTS `emprunt` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `nom` varchar(256) NOT NULL,
  `materielEmprunter` varchar(256) NOT NULL,
  `descript` longtext CHARACTER SET utf8 NOT NULL,
  `date ajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateRetour` date NOT NULL,
  `rendu` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emprunt`
--

INSERT INTO `emprunt` (`id`, `nom`, `materielEmprunter`, `descript`, `date ajout`, `dateRetour`, `rendu`) VALUES
(4, 'alpapie', 'outil de bricolage', 'Examples and usage guidelines for form control styles', '2021-01-20 20:36:23', '2021-01-27', 1),
(1, 'alpix 2234', 'arduino', 'Examples and usage guidelines for form control styles layout options and custom components for ', '2021-01-20 20:36:23', '2021-05-20', 1),
(7, 'alpix 2234', 'arduino', 'Examples and usage guidelines for form control styles layout options and custom components for ', '2021-01-20 20:36:28', '2021-02-02', 1),
(8, 'Mr hasalp', 'rasbery', 'doit etre rendu avant le 24/2/2021', '2021-01-21 10:55:41', '2021-01-24', 1),
(9, 'Mr gueye', 'boite a outil', 'maintenance', '2021-01-21 10:55:41', '2021-01-20', 1),
(10, 'papa ahmadou fall', ' une impriment 3d ', 'grang developpeur mais aussi voleur de materiaux\r\n:) :) ', '2021-01-23 13:05:45', '2021-01-21', 1),
(11, 'ndiaye', ' une impriment 3d 333', 'dfghjkl;lkjhjkmnbvcbnmnbvcvb', '2021-01-25 20:33:44', '2021-01-25', 0),
(12, 'faye', 'arduino', 'vdhasuiefo', '2021-01-29 17:07:41', '2021-01-31', 0),
(13, 'faye', ' une imprimenthhhgggffdddd', 'hdsiueeui', '2021-01-29 17:08:39', '2021-01-30', 1),
(14, 'fall', 'boite a outil 2.0', 'Qu\'est-ce que le Lorem Ipsum?\r\nLe Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.\r\n\r\nPourquoi l\'utiliser?\r\nOn sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).\r\nD\'où vient-il?\r\nContrairement à une opinion répandue, le Lorem Ipsum n\'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s\'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d\'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du \"De Finibus Bonorum et Malorum\" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l\'éthique. Les premières lignes du Lorem Ipsum, \"Lorem ipsum dolor sit amet...\", proviennent de la section 1.10.32.\r\n\r\nL\'extrait standard de Lorem Ipsum utilisé depuis le XVIè siècle est reproduit ci-dessous pour les curieux. Les sections 1.10.32 et 1.10.33 du \"De Finibus Bonorum et Malorum\" de Cicéron sont aussi reproduites dans leur version originale, accompagnée de la traduction anglaise de H. Rackham (1914).\r\n\r\nOù puis-je m\'en procurer?\r\nPlusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d\'entre elles a été altérée par l\'addition d\'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu\'il n\'y a rien d\'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d\'humour.', '2021-01-29 17:39:10', '2021-01-31', 1),
(15, 'ahmadou ', 'boite a outil ', 'salut , quand , jeudi , ', '2021-01-29 19:29:15', '2021-01-31', 1),
(18, 'gt445opj5j', 'WEmwlmndsfnm', 'Qu\'est-ce que le Lorem Ipsum?\r\nLe Lorem Ipsum est simplement du faux texte employÃ© dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les annÃ©es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour rÃ©aliser un livre spÃ©cimen de polices de texte. Il n\'a pas fait que survivre cinq siÃ¨cles, mais s\'est aussi adaptÃ© Ã  la bureautique informatique, sans que son contenu n\'en soit modifiÃ©. Il a Ã©tÃ© popularisÃ© dans les annÃ©es 1960 grÃ¢ce Ã  la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus rÃ©cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.\r\n\r\nPourquoi l\'utiliser?\r\nOn sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empÃªche de se concentrer sur la mise en page elle-mÃªme. L\'avantage du Lorem Ipsum sur un texte gÃ©nÃ©rique comme \'Du texte. Du texte. Du texte.\' est qu\'il possÃ¨de une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du franÃ§ais standard. De nombreuses suites logicielles de mise en page ou Ã©diteurs de sites Web ont fait du Lorem Ipsum leur faux texte par dÃ©faut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'Ã  leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).\r\n\r\n\r\nD\'oÃ¹ vient-il?\r\nContrairement Ã  une opinion rÃ©pandue, le Lorem Ipsum n\'est pas simplement du texte alÃ©atoire. Il trouve ses racines dans une oeuvre de la littÃ©rature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s\'est intÃ©ressÃ© Ã  un des mots latins les plus obscurs, consectetur, extrait d\'un passage du Lorem Ipsum, et en Ã©tudiant tous les usages de ce mot dans la littÃ©rature classique, dÃ©couvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du \"De Finibus Bonorum et Malorum\" (Des SuprÃªmes Biens et des SuprÃªmes Maux) de CicÃ©ron. Cet ouvrage, trÃ¨s populaire pendant la Renaissance, est un traitÃ© sur la thÃ©orie de l\'Ã©thique. Les premiÃ¨res lignes du Lorem Ipsum, \"Lorem ipsum dolor sit amet...\", proviennent de la section 1.10.32.\r\n\r\nL\'extrait standard de Lorem Ipsum utilisÃ© depuis le XVIÃ¨ siÃ¨cle est reproduit ci-dessous pour les curieux. Les sections 1.10.32 et 1.10.33 du \"De Finibus Bonorum et Malorum\" de CicÃ©ron sont aussi reproduites dans leur version originale, accompagnÃ©e de la traduction anglaise de H. Rackham (1914).\r\n\r\nOÃ¹ puis-je m\'en procurer?\r\nPlusieurs variations de Lorem Ipsum peuvent Ãªtre trouvÃ©es ici ou lÃ , mais la majeure partie d\'entre elles a Ã©tÃ© altÃ©rÃ©e par l\'addition d\'humour ou de mots alÃ©atoires qui ne ressemblent pas une seconde Ã  du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez Ãªtre sÃ»r qu\'il n\'y a rien d\'embarrassant cachÃ© dans le texte. Tous les gÃ©nÃ©rateurs de Lorem Ipsum sur Internet tendent Ã  reproduire le mÃªme extrait sans fin, ce qui fait de lipsum.com le seul vrai gÃ©nÃ©rateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour gÃ©nÃ©rer un Lorem Ipsum irrÃ©prochable. Le Lorem Ipsum ainsi obtenu ne contient aucune rÃ©pÃ©tition, ni ne contient des mots farfelus, ou des touches d\'humour.', '2021-02-01 11:29:17', '2021-02-03', 1),
(20, 'ndiaye alpapie', ' une impriment 34', 'adhhweoihjhwlk.,,.dmcml;kkc', '2021-02-01 13:43:06', '2021-02-02', 1),
(23, 'uwdgyd', 'jhX', 'HJCLKJ L KLJDPFWEIH', '2021-02-06 11:17:14', '2021-02-07', 0),
(24, 'KBLBDASVHIOW', 'VEPO', 'ASK.JCDWEFJK UF2NipoQOD ', '2021-02-06 11:17:49', '2021-02-08', 0),
(22, 'papa ahmadou tomber', 'boite a outil', 'while ($ligne =mysqli_fetch_assoc($resultat)) {\r\n\r\n  echo \'&lt;tr id=&quot;recherchert&quot;&gt;\r\n  &lt;td id=&quot;color&quot;  popup-open=&quot;popup\'.$ligne[\'id\'].\'&quot; href=&quot;javascript:void(0)&quot;&gt;\'\r\n   .$ligne[\'nom\'].\'&lt;/td&gt;&lt;td id=&quot;color&quot; popup-open=&quot;popup\'.$ligne[\'id\'].\'&quot; href=&quot;javascript:void(0)&quot;&gt;\'\r\n  .$ligne[\'materielEmprunter\'].\'&lt;/td&gt;&lt;td id=&quot;color&quot; popup-open=&quot;popup\'.$ligne[\'id\'].\'&quot; href=&quot;javascript:void(0)&quot;&gt;\'\r\n  .$ligne[\'date ajout\'].\'&lt;/td&gt;&lt;td &gt; \';\r\n  if ($ligne[\'rendu\']==1) {\r\n    echo \'&lt;h2 style=&quot;color:darkgray&quot;&gt;Rendue&lt;/h2&gt;\';\r\n  }elseif($ligne[\'rendu\']==0){\r\n   echo \' &lt;button class=&quot;btn btn-success &quot;&gt;&lt;a  href=&quot;../controller/listeEmpruntsup.php?id=\'.$ligne[\'id\'].\'&quot;&gt;&lt;i class=&quot;fa fa-check&quot; style=&quot;color:white;&quot;aria-hidden=&quot;true&quot;&gt;Rendre&lt;/i&gt;&lt;/a&gt;&lt;/button&gt;\';\r\n  }\r\n  if(date(\'Y-m-d\')&gt;$ligne[\'dateRetour\'] &amp;&amp; $ligne[\'rendu\']==0 ){\r\n    echo \'&lt;p style=&quot;color:red&quot; align=center&gt; Date de retour depasser &lt;/p&gt;\';\r\n    } \r\necho \'&lt;/td&gt; &lt;/tr&gt;\';', '2021-02-01 13:54:08', '2021-02-01', 1);

-- --------------------------------------------------------

--
-- Structure de la table `materiels`
--

DROP TABLE IF EXISTS `materiels`;
CREATE TABLE IF NOT EXISTS `materiels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stock` int(50) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `typpe` varchar(256) NOT NULL,
  `images` varchar(256) NOT NULL,
  `date ajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lienDescription` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `materiels`
--

INSERT INTO `materiels` (`id`, `stock`, `nom`, `typpe`, `images`, `date ajout`, `lienDescription`) VALUES
(25, 12334069, 'imprimente 3d', 'Modelisation 3d', 'images/12334069.png', '2021-01-19 17:11:41', 'https://gestionpolylab.000webhostapp.com/gestion%20materiels/affichageMateriel.php'),
(32, 10009999, 'ardiin', 'Ã©lectronique', 'images/600ad85cb868e.png', '2021-01-22 13:51:24', 'https://gestionpolylab.000webhostapp.com/gestion%20materiels/affichageMateriel.php'),
(42, 436553507, 'arduino', 'Outillage', '../gestion materiels/images/600ff953307a6.png', '2021-01-26 11:13:23', 'https://gestionpolylab.000webhostapp.com/gestion%20materiels/affichageMateriel.php'),
(43, 800026753, 'arduino', 'Ã©lectronique', '../gestion materiels/images/6013f17758e4e.png', '2021-01-29 11:28:55', 'https://gestionpolylab.000webhostapp.com/gestion%20materiels/affichageMateriel.php'),
(46, 349039338, 'duino', 'Ã©lectronique', '../gestion materiels/images/60157c8f44b9d.png', '2021-01-30 15:34:39', 'https://gestionpolylab.000webhostapp.com/gestion%20materiels/affichageMateriel.php'),
(47, 12, 'khjsxk', 'Ã©lectronique', '../gestion materiels/images/601e77e70d220.png', '2021-02-06 11:05:11', 'https://gestionpolylab.000webhostapp.com/gestion%20materiels/affichageMateriel.php');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `identifiant` varchar(256) NOT NULL,
  `motDePasse` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `identifiant`, `motDePasse`) VALUES
(1, 'Ndiaye', 'mamoudou', 'alpapie', 'alpapie1234'),
(2, 'diallo', 'hassime', 'hasalp', '$2y$10$CMh.4.pxTIrPLFdJEBFedOnae5ZxzfZaIc87yQUgdkPIySGsQPN2e'),
(3, 'fall', 'ahmadou', 'alpix', '$2y$10$c95zog8VQ8iaB7NV38IYRu7b.rDKeSbpODDdyKANd5dKyvx5ghAla');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
