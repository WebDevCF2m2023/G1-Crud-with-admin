-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema g1mvc
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `g1mvc` ;

-- -----------------------------------------------------
-- Schema g1mvc
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `g1mvc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci ;
USE `g1mvc` ;

-- -----------------------------------------------------
-- Table `g1mvc`.`administrator`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `g1mvc`.`administrator` ;

CREATE TABLE IF NOT EXISTS `g1mvc`.`administrator` (
  `idadministrator` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_bin' NOT NULL,
  `userpwd` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_bin' NOT NULL,
  PRIMARY KEY (`idadministrator`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `username_UNIQUE` ON `g1mvc`.`administrator` (`username` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `g1mvc`.`geoloc`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `g1mvc`.`geoloc` ;

CREATE TABLE IF NOT EXISTS `g1mvc`.`geoloc` (
  `idgeoloc` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `geolocdesc` VARCHAR(500) NULL,
  `latitude` VARCHAR(25) NOT NULL,
  `longitude` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`idgeoloc`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
