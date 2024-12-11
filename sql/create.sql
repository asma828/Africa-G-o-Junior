--create database
CREATE DATABASE Africa;
USE Africa;

--create tables
 CREATE TABLE Pays (
    id int NOT NULL AUTO_INCREMENT,
    nom varchar(255) NOT NULL UNIQUE,
    id_continent int,
    population int NOT NULL,
    langue varchar(255) NOT NULL,
    PRIMARY KEY(id)
     FOREIGN KEY (id_continent) REFERENCES continent (id_continent) ON DELETE CASCADE
    );

 CREATE TABLE Villes (
    id int NOT NULL AUTO_INCREMENT,
    pays_id int NOT NULL,
    nom varchar(255) NOT NULL UNIQUE,
    description varchar(2550) NOT NULL,
    type ENUM ('capitale', 'autre') NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (pays_id) REFERENCES Pays(id) ON DELETE CASCADE
    );

 CREATE TABLE continent(
    id_continent int  AUTO_INCREMENT,
    nom varchar(255) NOT NULL UNIQUE,
    PRIMARY KEY(id_continent)
    );