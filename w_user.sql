-- Adminer 4.8.1 MySQL 5.5.5-10.7.1-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `db_examples` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `db_examples`;

DROP TABLE IF EXISTS `w_user`;
CREATE TABLE `w_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `w_user` (`id`, `username`, `password`, `phone_number`) VALUES
(1,	'yqr',	'7c4a8d09ca3762af61e59520943dc26494f8941b',	'+8613714715608');

-- 2021-12-26 06:22:41
