CREATE DATABASE IF NOT EXISTS cardb;

USE cardb;

CREATE TABLE IF NOT EXISTS cars (id INT AUTO_INCREMENT, brand VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, color VARCHAR(255) NOT NULL, licenseNumber VARCHAR(255), PRIMARY KEY (id));

SHOW tables;

DESCRIBE cars;
