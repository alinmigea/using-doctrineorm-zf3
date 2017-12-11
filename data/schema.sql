CREATE DATABASE `db_books`;

CREATE TABLE `db_books`.`tb_books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) DEFAULT NULL,
  `author` varchar(65) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `db_books`.`tb_books`
(`id`,`name`,`author`,`status`)
VALUES
(1,'Book 1','Jonh',1),
(2,'Book 2','Jim',1);
