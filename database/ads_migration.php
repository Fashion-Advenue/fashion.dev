<?php 
// exercise 9.9 Adlister project

require 'db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS ads');

$query = 'CREATE TABLE IF NOT EXISTS ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(150) NOT NULL,
    price VARCHAR(10) NOT NULL,
    size VARCHAR(10),
    contact VARCHAR(10) NOT NULL,
    category VARCHAR(20) NOT NULL,
    description VARCHAR(400),
    image VARCHAR(250),
    PRIMARY KEY (id)
)';

$dbc->exec($query);

