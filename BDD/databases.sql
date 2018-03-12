-- Host: localhost
-- Base de données :  `PiePHP`
--

-- --------------------------------------------------------

DROP DATABASE IF EXISTS PiePHP;
CREATE DATABASE PiePHP;

USE PiePHP;

-- --------------------------------------------------------
--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`email`  varchar(255) NOT NULL UNIQUE,
	`password` varchar(128) NOT NULL,
	PRIMARY KEY(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

TRUNCATE TABLE users;
INSERT INTO users (`id`, `email`, `password`)
VALUES
('1', 'rayane.slimani@epitech.eu', 'admin');
