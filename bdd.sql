CREATE DATABASE utilisateurs; 
CREATE TABLE utilisateur (
    NOM varchar(50),
    PRENOM varchar(50),
    LOGIN varchar(50) UNIQUE,
    PASSWORD varchar(50)
);