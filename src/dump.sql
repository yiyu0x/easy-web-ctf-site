create database my_db1;

use my_db1;

DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `passwd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


LOCK TABLES `account` WRITE;
INSERT INTO `account` VALUES (1,'oliver','hello123'),(2,'barbara','apple555apple'),(3,'belle','belle123'),(4,'admin','helloworld');
UNLOCK TABLES;