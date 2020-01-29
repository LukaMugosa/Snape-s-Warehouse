CREATE TABLE `potions` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(250) NOT NULL,
 `picture` varchar(500) NOT NULL,
 `description` text NOT NULL,
 `recipe_id` int(11) NOT NULL,
 `category` varchar(250) NOT NULL,
 `quantity` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB