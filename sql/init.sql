DROP SCHEMA IF EXISTS `ewetube`;

CREATE SCHEMA IF NOT EXISTS `ewetube` DEFAULT CHARACTER SET utf8;
USE `ewetube`;

DROP TABLE IF EXISTS `ewetube`.`animals`;

CREATE TABLE IF NOT EXISTS `ewetube`.`animals` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));


DROP TABLE IF EXISTS `ewetube`.`months`;

CREATE TABLE IF NOT EXISTS `ewetube`.`months` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`));


DROP TABLE IF EXISTS `ewetube`.`states`;

CREATE TABLE IF NOT EXISTS `ewetube`.`states` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));


DROP TABLE IF EXISTS `ewetube`.`units`;

CREATE TABLE IF NOT EXISTS `ewetube`.`units` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));


DROP TABLE IF EXISTS `ewetube`.`produce`;

CREATE TABLE IF NOT EXISTS `ewetube`.`produce` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `state` INT(10) NULL DEFAULT NULL,
  `animal` INT(10) NULL DEFAULT NULL,
  `unit` INT(10) NULL DEFAULT NULL,
  `month` INT(10) NULL DEFAULT NULL,
  `year` INT(10) NULL DEFAULT NULL,
  `original` INT(10) NULL DEFAULT NULL,
  `adjusted` INT(10) NULL DEFAULT NULL,
  `trend` INT(7) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `state` (`state` ASC),
  INDEX `animal` (`animal` ASC),
  INDEX `unit` (`unit` ASC),
  INDEX `month` (`month` ASC),
  CONSTRAINT `produce_ibfk_8`
  FOREIGN KEY (`month`)
  REFERENCES `ewetube`.`months` (`id`),
  CONSTRAINT `produce_ibfk_1`
  FOREIGN KEY (`animal`)
  REFERENCES `ewetube`.`animals` (`id`),
  CONSTRAINT `produce_ibfk_2`
  FOREIGN KEY (`state`)
  REFERENCES `ewetube`.`states` (`id`),
  CONSTRAINT `produce_ibfk_3`
  FOREIGN KEY (`unit`)
  REFERENCES `ewetube`.`units` (`id`),
  CONSTRAINT `produce_ibfk_4`
  FOREIGN KEY (`unit`)
  REFERENCES `ewetube`.`produce` (`id`),
  CONSTRAINT `produce_ibfk_5`
  FOREIGN KEY (`state`)
  REFERENCES `ewetube`.`states` (`id`),
  CONSTRAINT `produce_ibfk_6`
  FOREIGN KEY (`animal`)
  REFERENCES `ewetube`.`animals` (`id`),
  CONSTRAINT `produce_ibfk_7`
  FOREIGN KEY (`unit`)
  REFERENCES `ewetube`.`units` (`id`));