-- MySQL Workbench Synchronization
-- Generated: 2023-09-02 02:57
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: sahan

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

ALTER SCHEMA `asanka`  DEFAULT CHARACTER SET utf8  DEFAULT COLLATE utf8_general_ci ;

ALTER TABLE `asanka`.`product` 
DROP FOREIGN KEY `fk_product_productType`,
DROP FOREIGN KEY `fk_product_vehicleType1`;

ALTER TABLE `asanka`.`color_has_product` 
DROP FOREIGN KEY `fk_color_has_product_color1`,
DROP FOREIGN KEY `fk_color_has_product_product1`;

ALTER TABLE `asanka`.`product` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;

ALTER TABLE `asanka`.`productType` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;

ALTER TABLE `asanka`.`vehicleType` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;

ALTER TABLE `asanka`.`model` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ,
CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT ;

ALTER TABLE `asanka`.`color` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;

ALTER TABLE `asanka`.`color_has_product` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;

ALTER TABLE `asanka`.`admin` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;

ALTER TABLE `asanka`.`product` 
DROP FOREIGN KEY `fk_product_model1`;

ALTER TABLE `asanka`.`product` ADD CONSTRAINT `fk_product_productType`
  FOREIGN KEY (`productType_id`)
  REFERENCES `asanka`.`productType` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_product_vehicleType1`
  FOREIGN KEY (`vehicleType_id`)
  REFERENCES `asanka`.`vehicleType` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_product_model1`
  FOREIGN KEY (`model_id`)
  REFERENCES `asanka`.`model` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `asanka`.`color_has_product` 
ADD CONSTRAINT `fk_color_has_product_color1`
  FOREIGN KEY (`color_id`)
  REFERENCES `asanka`.`color` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_color_has_product_product1`
  FOREIGN KEY (`product_id`)
  REFERENCES `asanka`.`product` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
