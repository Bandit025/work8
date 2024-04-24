CREATE TABLE prefix(
id_prefix int(5) NOT NULL,
name_prefix varchar(255)NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `prefix`(`id_prefix`, `name_prefix`) VALUES ('1','นาย'),('2','นาง'),('3','นางสาว')


CREATE TABLE users (
id_user int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
fname varchar(255) NOT NULL,
lname varchar(255) NOT NULL,
email varchar(255)NOT NULL,
pass varchar(255)NOT NULL,
prefix int(5) NOT NULL,
id_card_code varchar(255)NOT NULL,
urole int(5)NOT NULL,
create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8;