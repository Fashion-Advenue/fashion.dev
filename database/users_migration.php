<?php 
// exercise 9.9 Adlister project

require 'db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS users');

$query = 'CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(60) NOT NULL,
    email VARCHAR(60) NOT NULL,
    password VARCHAR(75) NOT NULL,
    profile_img VARCHAR(75),
    PRIMARY KEY (id)
)';

$dbc->exec($query);