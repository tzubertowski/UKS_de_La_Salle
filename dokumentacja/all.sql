SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';


-- -----------------------------------------------------
-- Table `user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `user` ;

CREATE  TABLE IF NOT EXISTS `user` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `first` VARCHAR(45) NULL ,
  `last` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `password` VARCHAR(32) NULL ,
  `rank` INT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `category`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `category` ;

CREATE  TABLE IF NOT EXISTS `category` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(50) NULL ,
  `description` VARCHAR(255) NULL ,
  `weight` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `subcategory_type`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `subcategory_type` ;

CREATE  TABLE IF NOT EXISTS `subcategory_type` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) NULL ,
  `description` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `subcategory`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `subcategory` ;

CREATE  TABLE IF NOT EXISTS `subcategory` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(50) NULL ,
  `description` VARCHAR(255) NULL ,
  `weight` INT NULL ,
  `id_category` INT NULL ,
  `id_subcategory_type` INT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_subcategory_1` (`id_category` ASC) ,
  INDEX `fk_subcategory_2` (`id_subcategory_type` ASC) ,
  CONSTRAINT `fk_subcategory_1`
    FOREIGN KEY (`id_category` )
    REFERENCES `category` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_subcategory_2`
    FOREIGN KEY (`id_subcategory_type` )
    REFERENCES `subcategory_type` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `news`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `news` ;

CREATE  TABLE IF NOT EXISTS `news` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `id_user` INT NULL ,
  `id_category` INT NULL ,
  `title` VARCHAR(50) NULL ,
  `content` TEXT NULL ,
  `date_added` DATETIME NULL ,
  `date_modified` DATETIME NULL ,
  `user_modified` INT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_news_1` (`id_user` ASC) ,
  INDEX `fk_news_2` (`id_category` ASC) ,
  INDEX `fk_news_3` (`user_modified` ASC) ,
  CONSTRAINT `fk_news_1`
    FOREIGN KEY (`id_user` )
    REFERENCES `user` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_news_2`
    FOREIGN KEY (`id_category` )
    REFERENCES `category` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_news_3`
    FOREIGN KEY (`user_modified` )
    REFERENCES `user` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `calendar`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `calendar` ;

CREATE  TABLE IF NOT EXISTS `calendar` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `id_user` INT NULL ,
  `id_category` INT NULL ,
  `title` VARCHAR(50) NULL ,
  `description` VARCHAR(255) NULL ,
  `place` VARCHAR(255) NULL ,
  `date_start` DATETIME NULL ,
  `date_end` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_calendar_1` (`id_user` ASC) ,
  INDEX `fk_calendar_2` (`id_category` ASC) ,
  CONSTRAINT `fk_calendar_1`
    FOREIGN KEY (`id_user` )
    REFERENCES `user` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_calendar_2`
    FOREIGN KEY (`id_category` )
    REFERENCES `category` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
