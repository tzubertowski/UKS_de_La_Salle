-- Tabela użytkownika
CREATE TABLE IF NOT EXISTS `useraccount` (
  `id` INT NOT NULL ,
  `email` VARCHAR(45) NULL ,
  `first` VARCHAR(45) NULL ,
  `last` VARCHAR(45) NULL ,
  `password` VARCHAR(32) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB

