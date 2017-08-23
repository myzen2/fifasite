/*https://www.it-connect.fr/wp-content-itc/uploads/2013/08/import4.png*/

/*
Script SQL pour  tutoriel Neoflow.fr
Créé en août 2017
myzen2
*/
DROP DATABASE IF EXISTS TestSQL ;
CREATE DATABASE TestSQL CHARACTER SET 'utf8' ;
USE TestSQL ;

CREATE TABLE players
(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  first_name varchar(255) NOT NULL,
  last_name varchar(255) NOT NULL,
  birthday date NOT NULL,
  position varchar(50),
  number INT NULL
);
CREATE TABLE teams
(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  team_name varchar(255) NOT NULL,
  creation_date TIMESTAMP NULL,
  points INT NOT NULL DEFAULT 0
);
CREATE TABLE matchs
(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  team_home varchar(255) not NULL,
  team_away varchar(255) NOT NULL,
  date_match datetime NULL,
  day INT NOT NULL
);
