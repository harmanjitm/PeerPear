-- -----------------------------------------------------
-- CATEGORY
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CATEGORY` ;

CREATE TABLE IF NOT EXISTS `CATEGORY` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cname` VARCHAR(50) NOT NULL,
  `desc` VARCHAR(1000) NOT NULL,
  `status` INT NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- EVENTS
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EVENTS` ;

CREATE TABLE IF NOT EXISTS `EVENTS` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `uid` VARCHAR(50) NOT NULL,
  `location` VARCHAR(150) NOT NULL,
  `date` DATE NULL,
  `time` VARCHAR(50) NULL,
  `description` VARCHAR(1000) NOT NULL,
  `title` VARCHAR(100) NOT NULL,
  `phone#` VARCHAR(20) NULL,
  `email` VARCHAR(150) NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `EVENTS_USER_FK`
    FOREIGN KEY (`uid`)
    REFERENCES `USER` (`username`)
    ON DELETE CASCADE);


-- -----------------------------------------------------
-- POST
-- -----------------------------------------------------
DROP TABLE IF EXISTS `POST` ;

CREATE TABLE IF NOT EXISTS `POST` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `body` VARCHAR(10000) NULL,
  `upvotes` INT NULL DEFAULT 0,
  `uid` VARCHAR(50) NULL,
  `cid` INT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `POST_USER_FK`
    FOREIGN KEY (`uid`)
    REFERENCES `USER` (`username`)
    ON DELETE CASCADE,
  CONSTRAINT `POST_CAT_FK`
    FOREIGN KEY (`cid`)
    REFERENCES `CATEGORY` (`id`));


-- -----------------------------------------------------
-- PROFILE
-- -----------------------------------------------------
DROP TABLE IF EXISTS `PROFILE` ;

CREATE TABLE IF NOT EXISTS `PROFILE` (
  `id` VARCHAR(50) NOT NULL,
  `status` VARCHAR(150) NULL,
  `bio` VARCHAR(250) NULL,
  `occupation` VARCHAR(150) NULL,
  CONSTRAINT `PROFILE_USER_FK`
    FOREIGN KEY (`id`)
    REFERENCES `USER` (`username`)
    ON DELETE CASCADE);


-- -----------------------------------------------------
-- USER
-- -----------------------------------------------------
DROP TABLE IF EXISTS `USER` ;

CREATE TABLE IF NOT EXISTS `USER` (
  `username` VARCHAR(50) NOT NULL,
  `fname` VARCHAR(50) NOT NULL,
  `lname` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `type` INT NOT NULL,
  `dob` DATE NULL,
  PRIMARY KEY (`username`));