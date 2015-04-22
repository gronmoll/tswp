drop table user;
drop table predmet;
drop table user_predmet;
drop table skuska;
drop table user_skuska;
drop table termin_predmet;
drop table user_rozvrh;

CREATE TABLE user (
id INT UNSIGNED NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id),
titul VARCHAR(45),
meno VARCHAR(45) NOT NULL,
priezvisko VARCHAR(45) NOT NULL,
email VARCHAR(60) NOT NULL,
pass CHAR(64) NOT NULL,
fakulta VARCHAR(100) NOT NULL,
odbor VARCHAR(60) NOT NULL,
type VARCHAR(20) NOT NULL DEFAULT 'student',
datum_vytvorenia TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE predmet (
id INT UNSIGNED NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id),
nazov VARCHAR(60) NOT NULL,
fakulta VARCHAR(60) NOT NULL,
katedra VARCHAR(60) NOT NULL
);

CREATE TABLE user_predmet (
id INT UNSIGNED NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id),
id_user INT UNSIGNED NOT NULL,
id_predmet INT UNSIGNED NOT NULL,
FOREIGN KEY(id_user) REFERENCES user(id), 
FOREIGN KEY(id_predmet) REFERENCES predmet(id)
);

CREATE TABLE skuska (
id INT UNSIGNED NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id),
datum TIMESTAMP NOT NULL,
cas VARCHAR(60) NOT NULL,
miestnost VARCHAR(60) NOT NULL,
kapacita INT,
poznamka TEXT,
id_predmet INT UNSIGNED NOT NULL,
FOREIGN KEY(id_predmet) REFERENCES predmet(id) 
);

CREATE TABLE user_skuska (
id INT UNSIGNED NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id),
id_user INT UNSIGNED NOT NULL,
id_skuska INT UNSIGNED NOT NULL,
FOREIGN KEY(id_user) REFERENCES user(id), 
FOREIGN KEY(id_skuska) REFERENCES skuska(id)
);

CREATE TABLE termin_predmet (
id INT UNSIGNED NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id),
miestnost VARCHAR(60) NOT NULL,
vyucujuci VARCHAR(60) NOT NULL,
den VARCHAR(10) NOT NULL,
cas VARCHAR(60) NOT NULL,
kapacita INT,
id_predmet INT UNSIGNED NOT NULL,
FOREIGN KEY(id_predmet) REFERENCES predmet(id)
);

CREATE TABLE user_rozvrh (
id INT UNSIGNED NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id),
id_user INT UNSIGNED NOT NULL,
id_termin_predmet INT UNSIGNED NOT NULL,
FOREIGN KEY(id_user) REFERENCES user(id), 
FOREIGN KEY(id_termin_predmet) REFERENCES termin_predmet(id)
);