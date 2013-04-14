SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `nlgcinfo_y1` ;
CREATE SCHEMA IF NOT EXISTS `nlgcinfo_y1` DEFAULT CHARACTER SET utf8 ;
USE `nlgcinfo_y1` ;

-- -----------------------------------------------------
-- Table `nlgcinfo_y1`.`frases`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nlgcinfo_y1`.`frases` ;

CREATE  TABLE IF NOT EXISTS `nlgcinfo_y1`.`frases` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` TEXT NOT NULL ,
  `descripcionCorta` TEXT NULL ,
  `fecha` DATETIME NOT NULL ,
  `status` INT NOT NULL DEFAULT 0 ,
  `imgUrl` TEXT NULL ,
  `Autor` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

CREATE UNIQUE INDEX `id_UNIQUE` ON `nlgcinfo_y1`.`frases` (`id` ASC) ;


-- -----------------------------------------------------
-- Table `nlgcinfo_y1`.`categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nlgcinfo_y1`.`categoria` ;

CREATE  TABLE IF NOT EXISTS `nlgcinfo_y1`.`categoria` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` TEXT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

CREATE UNIQUE INDEX `id_UNIQUE` ON `nlgcinfo_y1`.`categoria` (`id` ASC) ;


-- -----------------------------------------------------
-- Table `nlgcinfo_y1`.`frases_has_categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nlgcinfo_y1`.`frases_has_categoria` ;

CREATE  TABLE IF NOT EXISTS `nlgcinfo_y1`.`frases_has_categoria` (
  `frases_id` INT NOT NULL ,
  `categoria_id` INT NOT NULL ,
  PRIMARY KEY (`frases_id`, `categoria_id`) ,
  CONSTRAINT `fk_frases_has_categoria_frases`
    FOREIGN KEY (`frases_id` )
    REFERENCES `nlgcinfo_y1`.`frases` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_frases_has_categoria_categoria1`
    FOREIGN KEY (`categoria_id` )
    REFERENCES `nlgcinfo_y1`.`categoria` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_frases_has_categoria_categoria1_idx` ON `nlgcinfo_y1`.`frases_has_categoria` (`categoria_id` ASC) ;

CREATE INDEX `fk_frases_has_categoria_frases_idx` ON `nlgcinfo_y1`.`frases_has_categoria` (`frases_id` ASC) ;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
