-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Users` (
  `UserID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstName` VARCHAR(60) NOT NULL,
  `lastName` VARCHAR(60) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `zip code` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NULL,
  PRIMARY KEY (`UserID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Location`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Location` (
  `LocalID` INT UNSIGNED NOT NULL,
  `Zip code` INT NOT NULL,
  `Street` VARCHAR(45) NOT NULL,
  `State` VARCHAR(2) NOT NULL,
  `PostID` INT UNSIGNED NOT NULL,
  `UserID` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`LocalID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Ads`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Ads` (
  `PostID` INT NOT NULL,
  `Headline` VARCHAR(45) NOT NULL,
  `StartDate` DATETIME NOT NULL,
  `EndDate` DATETIME NOT NULL,
  `Price` DECIMAL(7) NOT NULL,
  `Category` VARCHAR(45) NOT NULL,
  `Description` VARCHAR(300) NOT NULL,
  `Size` VARCHAR(15) NOT NULL,
  `LocalID` INT UNSIGNED NULL,
  `UserID` INT UNSIGNED NULL,
  PRIMARY KEY (`PostID`),
  INDEX `AdLocation_idx` (`LocalID` ASC),
  CONSTRAINT `AdLocation`
    FOREIGN KEY (`LocalID`)
    REFERENCES `mydb`.`Location` (`LocalID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `AdUser`
    FOREIGN KEY (`UserID`)
    REFERENCES `mydb`.`Users` (`UserID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
