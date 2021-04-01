CREATE TABLE `flights`.`user_info` ( `id` INT(20) NOT NULL ,  `name` VARCHAR(30) NOT NULL ,  `password` VARCHAR(20) NOT NULL ,  `phone_no` VARCHAR(10) NOT NULL ,  `email` VARCHAR(20) NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB;




CREATE TABLE `flights`.`credit` ( `Card Name` VARCHAR(50) NOT NULL ,  `Card Number` VARCHAR(10) NOT NULL ,  `date` INT(2) NOT NULL ,  `year` INT(4) NOT NULL ,  `cvv` INT(3) NOT NULL ) ENGINE = InnoDB;




CREATE TABLE `flights`.`debit` ( `email` VARCHAR(50) NOT NULL ,  `name` VARCHAR(30) NOT NULL ,  `cname` VARCHAR(20) NOT NULL ,  `cno` INT(10) NOT NULL ,  `cdate` INT(2) NOT NULL ,  `cyear` INT(4) NOT NULL ,  `cvv` INT(3) NOT NULL ) ENGINE = InnoDB;