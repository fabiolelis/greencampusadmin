-- MySQL Script generated by MySQL Workbench
-- Thu Apr  7 16:50:39 2016
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema greencampus
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema greencampus
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `greencampus` DEFAULT CHARACTER SET utf8 ;
USE `greencampus` ;

-- -----------------------------------------------------
-- Table `greencampus`.`species`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greencampus`.`species` (
  `idspecies` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `latin_name` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
  PRIMARY KEY (`idspecies`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greencampus`.`tree`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greencampus`.`tree` (
  `idtree` INT NOT NULL AUTO_INCREMENT,
  `species_idspecies` INT NOT NULL,
  `longitude` VARCHAR(45) NULL,
  `latitude` VARCHAR(45) NULL,
  `age` INT NULL,
  PRIMARY KEY (`idtree`),
  INDEX `fk_tree_species_idx` (`species_idspecies` ASC),
  CONSTRAINT `fk_tree_species`
    FOREIGN KEY (`species_idspecies`)
    REFERENCES `greencampus`.`species` (`idspecies`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greencampus`.`characteristic`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greencampus`.`characteristic` (
  `idcharacteristic` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
  `pictures_path` VARCHAR(45) NULL,
  `characteristic_idcharacteristic` INT NULL,
  PRIMARY KEY (`idcharacteristic`),
  INDEX `fk_characteristic_characteristic1_idx` (`characteristic_idcharacteristic` ASC),
  CONSTRAINT `fk_characteristic_characteristic1`
    FOREIGN KEY (`characteristic_idcharacteristic`)
    REFERENCES `greencampus`.`characteristic` (`idcharacteristic`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greencampus`.`species_has_characteristic`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greencampus`.`species_has_characteristic` (
  `species_idspecies` INT NOT NULL,
  `characteristic_idcharacteristic` INT NOT NULL,
  PRIMARY KEY (`species_idspecies`, `characteristic_idcharacteristic`),
  INDEX `fk_species_has_characteristic_characteristic1_idx` (`characteristic_idcharacteristic` ASC),
  INDEX `fk_species_has_characteristic_species1_idx` (`species_idspecies` ASC),
  CONSTRAINT `fk_species_has_characteristic_species1`
    FOREIGN KEY (`species_idspecies`)
    REFERENCES `greencampus`.`species` (`idspecies`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_species_has_characteristic_characteristic1`
    FOREIGN KEY (`characteristic_idcharacteristic`)
    REFERENCES `greencampus`.`characteristic` (`idcharacteristic`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greencampus`.`event`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greencampus`.`event` (
  `idevent` INT NOT NULL AUTO_INCREMENT,
  `date_time` DATETIME NULL,
  `location` VARCHAR(45) NULL,
  `description` VARCHAR(500) NULL,
  `images` VARCHAR(200) NULL,
  `videos` VARCHAR(200) NULL,
  PRIMARY KEY (`idevent`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
