<?php 
// exercise 9.9 Adlister project

require 'db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS users');

$query = 'CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    userName VARCHAR(60) NOT NULL,
    firstName VARCHAR(60) NOT NULL,
    lastName VARCHAR(60) NOT NULL,
    email VARCHAR(60) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    houseNum VARCHAR(6) NOT NULL,
    street VARCHAR(60) NOT NULL,
    city VARCHAR(20) NOT NULL,
    state VARCHAR(2) NOT NULL,
    zipCode VARCHAR(5) NOT NULL,
    preferContact VARCHAR(6) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);