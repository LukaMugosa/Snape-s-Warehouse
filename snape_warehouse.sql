-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 11:48 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snape_warehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `picture`, `name`, `description`, `quantity`) VALUES
(1, 'https://vignette.wikia.nocookie.net/harrypotter/images/1/1f/Dried-nettle.png/revision/latest?cb=20120712210707', 'Nettle', 'The nettle, also known as the stinging nettle (Urtica diocia) or burn hazel,[1] is a widespread plant known for the stinging hairs that grows on its leaves.', 50),
(2, 'https://vignette.wikia.nocookie.net/harrypotter/images/9/96/SnakeFangs.png/revision/latest?cb=20110830080709', 'Snake fang', 'Snake fangs, when crushed, are an ingredient used in the preparation of some potions, like the Strength Potion, the Boil-Cure Potion, and the Wideye Potion. This plentiful ingredient must not be harvested from venomous snakes.[1]', 50),
(3, 'https://vignette.wikia.nocookie.net/harrypotter/images/8/8d/HornedSlug.png/revision/latest?cb=20110830105429', 'Horned slug', 'Horned slugs are a type of a slug that, when stewed, are used as an ingredient in the Boil-Cure Potion. They are kept with other potion ingredients in the Potions Classroom at Hogwarts School of Witchcraft and Wizardry.[1][2]\r\n\r\n', 50),
(4, 'https://vignette.wikia.nocookie.net/harrypotter/images/d/d9/PorcupineQuills.png/revision/latest?cb=20160519023339', 'Porcupine quill', 'Porcupine quills are the sharp spines that cover porcupines, defending them from predators. Porcupine quills are plentiful since the animals continually replenish them.\r\n\r\nPorcupine quills are an ingredient in several potions, either whole or powdered, including the Cure for Boils and Elixir to Induce Euphoria.[1] Quills that cause no harm are considered the best by potion-makers.[2]\r\n\r\nThe Porcupine Robe is a special type of robe made out of porcupine quills.[3] It protects the wearer by hurting anyone who tried to physically attack them.[3]', 50),
(5, 'https://vignette.wikia.nocookie.net/harrypotter/images/d/d6/PungousOnion.png/revision/latest?cb=20131113174350', 'Pungous Onion', 'Pungous Onion is a magical plant comprised of a swathe of green leaves and an orange elongated bulb at the base. It is very pungent and, because of this, contact with freshly chopped Pungous Onions is dis-advised. Chopping these onions seems to create an eye irritation that makes one cry.[1]\r\n\r\nPungous Onions have magical properties that make them useful as an ingredient in Potion-making: they are an ingredient for the Cure for Boils.[1]', 50),
(6, 'https://vignette.wikia.nocookie.net/harrypotter/images/e/e0/FlobberwormMucus.png/revision/latest?cb=20110830091650', 'Flobberworm Mucus', 'A popular potion ingredient, it is used in the Wiggenweld Potion[4], Herbicide, and the Sleeping Draught. Flobberworm mucus is sold at the Apothecary, costing one Galleon for eight bottles.[3] This mucus is also spread all over the roof beams on the Hogwarts attic.[2]', 50),
(7, 'https://vignette.wikia.nocookie.net/harrypotter/images/b/b9/ShrakeSpines.png/revision/latest?cb=20131222000824', 'Shrake spine', 'The spines of the Shrake can be used as a potion ingredient. When added to a potion, the mixture must be stirred gently, as overly vigourous stirring can \"overexcite\" the spines. Zygmunt Budge used pickled Shrake spine in his version of the Cure for Boils.[1]', 50);

-- --------------------------------------------------------

--
-- Table structure for table `potions`
--

CREATE TABLE `potions` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `category` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potions`
--

INSERT INTO `potions` (`id`, `name`, `picture`, `description`, `recipe_id`, `category`, `quantity`) VALUES
(2, 'Cure for Boils', 'https://vignette.wikia.nocookie.net/harrypotter/images/c/c9/Cure-for-boils.png/revision/latest?cb=20150226163753', 'The Cure for Boils[3][2] (also known as simply Boil Cure[4]) is a potion which removes boils, such as those produced by the Pimple Jinx.[5] It is an elementary potion and the recipe can be found in Magical Drafts and Potions[1] and Book of Potions.[6]', 2, 'Antidote', 0),
(3, 'Forgetfulness Potion', 'https://vignette.wikia.nocookie.net/harrypotter/images/a/aa/Forgetfulness-potion.png/revision/latest?cb=20150226164846', 'The Forgetfulness Potion is a potion which causes an unknown degree of memory loss in the drinker.[1] The recipe for this potion can be found in Magical Drafts and Potions; its key ingredients include Lethe River Water, mistletoe berries, and Valerian sprigs.[1][2]', 3, 'Mental Potions', 0),
(4, 'Herbicide', 'https://vignette.wikia.nocookie.net/harrypotter/images/d/d0/Herbicide.png/revision/latest?cb=20150226163145', 'Herbicide Potion (or simply Herbicide) is a poisonous potion that kills or damages plants. It has a disgusting taste and is not fit for human consumption since it may affect the drinker\'s health.[2] The recipe for this potion can be found in Magical Drafts and Potions.[1]', 4, 'Poisons', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `recipe_name` varchar(50) NOT NULL,
  `instructions` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `recipe_name`, `instructions`) VALUES
(2, 'Cure for Boils', 'Part 1\r\nAdd 6 snake fangs to the mortar.\r\nCrush into a fine powder using the pestle.\r\nAdd 4 measures of the crushed fangs to your cauldron.\r\nHeat the mixture to 250 for 10 seconds.\r\nWave your wand.\r\nLeave to brew and return in 33-45 minutes.\r\nPart 2\r\nAdd 4 horned slugs to your cauldron.\r\nTake the cauldron off the fire before adding the next ingredient.[1]\r\nAdd 2 porcupine quills to your cauldron.\r\nStir 5 times, clockwise.\r\nWave your wand to complete the potion.\r\nAccording to Book of Potions:\r\nAdd crushed snake fangs to your cauldron and stir.\r\nSlice your Pungous Onions finely and place in cauldron, then heat the mixture.\r\nAdd dried nettles.\r\nAdd a dash of Flobberworm mucus and stir vigourously.\r\nAdd a sprinkle of powdered ginger root and stir vigourously again.\r\nAdd pickled Shrake spines.\r\nStir gently, so as not to overexcite the Shrake spines.\r\nAdd a glug of stewed horned slugs.\r\nAdd porcupine quills.\r\nFinally, wave your wand over the cauldron to finish the potion.'),
(3, 'Forgetfulness Potion', 'Part 1\r\nAdd 2 drops of Lethe River Water to your cauldron\r\nGently heat for 20 seconds\r\nAdd 2 Valerian sprigs to your cauldron\r\nStir 3 times, clockwise\r\nWave your wand\r\nLeave to brew and return in 45-60 minutes\r\nPart 2\r\nAdd 2 measures of Standard Ingredient to the mortar\r\nAdd 4 mistletoe berries to the mortar\r\nCrush into a medium-fine powder using the pestle\r\nAdd 2 pinches of the crushed mixture to your cauldron\r\nStir 5 times, anti-clockwise\r\nWave your wand to complete the potion'),
(4, 'Herbicide Potion', 'Part 1\r\nAdd 4 lionfish spines to the mortar\r\nCrush into a rough powder using the pestle\r\nAdd 2 measurements of Standard Ingredient to the mortar\r\nCrush into a rough powder\r\nAdd 3 measures of the crushed mixture to your cauldron\r\nWave your wand\r\nLeave to brew and return in 45/51/60 minutes (depending on your cauldron)\r\nPart 2\r\nAdd 2 measures of Horklump juice to your cauldron\r\nHeat to a medium temperature for 10 seconds\r\nAdd 2 blobs of Flobberworm mucus to your cauldron while it\'s still on the heat\r\nStir 4 times, clockwise\r\nWave your wand to complete the potion');

-- --------------------------------------------------------

--
-- Table structure for table `rec_ingred`
--

CREATE TABLE `rec_ingred` (
  `recipe_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rec_ingred`
--

INSERT INTO `rec_ingred` (`recipe_id`, `ingredient_id`) VALUES
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `active`) VALUES
(1, 'admin', 'Severus', 'Snape', 'potionmaster@gmail.com', '0329249a91513cf15ba19e17c19fa510', 1),
(9, 'ivana_sliterin', 'Ivana', 'Djukic', 'ivana@test.com', '604f8825a203a21caaff5759b6ad53d8', 1),
(31, 'luka_grifindor', 'Luka', 'Mugosa', 'lukamugosa1945@gmail.com', '604f8825a203a21caaff5759b6ad53d8', 1),
(32, 'expecto_patronum', 'Harry ', 'Potter', 'harry@gmail.com', '219779c84d7d8804922a6ffab04e635d', 1),
(33, '123123123', 'Aleksandar', 'Dragas', 'aleks@gmail.com', '101193d7181cc88340ae5b2b17bba8a1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potions`
--
ALTER TABLE `potions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rec_ingred`
--
ALTER TABLE `rec_ingred`
  ADD PRIMARY KEY (`recipe_id`,`ingredient_id`),
  ADD KEY `ingredient_id` (`ingredient_id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `potions`
--
ALTER TABLE `potions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `potions`
--
ALTER TABLE `potions`
  ADD CONSTRAINT `potions_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rec_ingred`
--
ALTER TABLE `rec_ingred`
  ADD CONSTRAINT `rec_ingred_ibfk_1` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rec_ingred_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
