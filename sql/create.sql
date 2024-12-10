--create database
CREATE DATABASE Africa;
USE Africa;

--create tables
 CREATE TABLE Pays (
    id int NOT NULL AUTO_INCREMENT,
    nom varchar(255) NOT NULL UNIQUE,
    population int NOT NULL,
    langue varchar(255) NOT NULL,
    PRIMARY KEY(id)
    );

 CREATE TABLE Villes (
    id int NOT NULL AUTO_INCREMENT,
    pays_id int NOT NULL,
    nom varchar(255) NOT NULL UNIQUE,
    description varchar(2550) NOT NULL,
    type ENUM ('capitale', 'autre') NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (pays_id) REFERENCES Pays(id)
    );