-- Tabela użytkownika
CREATE  TABLE IF NOT EXISTS `user` (
  `id` INT NOT NULL ,
  `first` VARCHAR(45) NULL ,
  `last` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `password` VARCHAR(32) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB

-- Testowe zapytanie
insert into user (email,password) values ('test@test.pl', MD5('test'));
