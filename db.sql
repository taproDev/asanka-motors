-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema asanka
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema asanka
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `asanka` DEFAULT CHARACTER SET utf8 ;
USE `asanka` ;

-- -----------------------------------------------------
-- Table `asanka`.`productType`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `asanka`.`productType` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(50) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `asanka`.`vehicleType`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `asanka`.`vehicleType` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(20) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `asanka`.`model`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `asanka`.`model` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `model` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `asanka`.`product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `asanka`.`product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(150) NULL,
  `partnum` VARCHAR(50) NULL,
  `price` VARCHAR(45) NULL,
  `description` LONGTEXT NULL,
  `productType_id` INT NOT NULL,
  `vehicleType_id` INT NOT NULL,
  `samplediscription` LONGTEXT NULL,
  `model_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_product_productType_idx` (`productType_id` ASC) VISIBLE,
  INDEX `fk_product_vehicleType1_idx` (`vehicleType_id` ASC) VISIBLE,
  INDEX `fk_product_model1_idx` (`model_id` ASC) VISIBLE,
  CONSTRAINT `fk_product_productType`
    FOREIGN KEY (`productType_id`)
    REFERENCES `asanka`.`productType` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_vehicleType1`
    FOREIGN KEY (`vehicleType_id`)
    REFERENCES `asanka`.`vehicleType` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_model1`
    FOREIGN KEY (`model_id`)
    REFERENCES `asanka`.`model` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `asanka`.`color`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `asanka`.`color` (
  `id` INT NOT NULL,
  `color` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `asanka`.`color_has_product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `asanka`.`color_has_product` (
  `color_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  PRIMARY KEY (`color_id`, `product_id`),
  INDEX `fk_color_has_product_product1_idx` (`product_id` ASC) VISIBLE,
  INDEX `fk_color_has_product_color1_idx` (`color_id` ASC) VISIBLE,
  CONSTRAINT `fk_color_has_product_color1`
    FOREIGN KEY (`color_id`)
    REFERENCES `asanka`.`color` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_color_has_product_product1`
    FOREIGN KEY (`product_id`)
    REFERENCES `asanka`.`product` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `asanka`.`admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `asanka`.`admin` (
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NULL,
  PRIMARY KEY (`email`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
