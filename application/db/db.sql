SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `ngodoy_appwtdev` ;
CREATE SCHEMA IF NOT EXISTS `ngodoy_appwtdev` DEFAULT CHARACTER SET utf8 ;
USE `ngodoy_appwtdev` ;

-- -----------------------------------------------------
-- Table `ngodoy_appwtdev`.`frases`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ngodoy_appwtdev`.`frases` ;

CREATE  TABLE IF NOT EXISTS `ngodoy_appwtdev`.`frases` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` TEXT NOT NULL ,
  `descripcionCorta` TEXT NULL ,
  `fecha` DATETIME NOT NULL ,
  `status` INT NOT NULL DEFAULT 0 ,
  `imgUrl` TEXT NULL ,
  `Autor` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

CREATE UNIQUE INDEX `id_UNIQUE` ON `ngodoy_appwtdev`.`frases` (`id` ASC) ;


-- -----------------------------------------------------
-- Table `ngodoy_appwtdev`.`categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ngodoy_appwtdev`.`categoria` ;

CREATE  TABLE IF NOT EXISTS `ngodoy_appwtdev`.`categoria` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` TEXT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

CREATE UNIQUE INDEX `id_UNIQUE` ON `ngodoy_appwtdev`.`categoria` (`id` ASC) ;


-- -----------------------------------------------------
-- Table `ngodoy_appwtdev`.`frases_has_categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ngodoy_appwtdev`.`frases_has_categoria` ;

CREATE  TABLE IF NOT EXISTS `ngodoy_appwtdev`.`frases_has_categoria` (
  `frases_id` INT NOT NULL ,
  `categoria_id` INT NOT NULL ,
  PRIMARY KEY (`frases_id`, `categoria_id`) ,
  CONSTRAINT `fk_frases_has_categoria_frases`
    FOREIGN KEY (`frases_id` )
    REFERENCES `ngodoy_appwtdev`.`frases` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_frases_has_categoria_categoria1`
    FOREIGN KEY (`categoria_id` )
    REFERENCES `ngodoy_appwtdev`.`categoria` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_frases_has_categoria_categoria1_idx` ON `ngodoy_appwtdev`.`frases_has_categoria` (`categoria_id` ASC) ;

CREATE INDEX `fk_frases_has_categoria_frases_idx` ON `ngodoy_appwtdev`.`frases_has_categoria` (`frases_id` ASC) ;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
