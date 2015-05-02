<?php  
// EXERCISE 9.1.1 AND 9.1.2 Creating tables in SQL with PHP
// EXERCISE 9.2.6 
// EXERCISE 9.9 Adlister.dev project

define('DB_HOST','127.0.0.1');

define('DB_NAME','adlister_db');

define('DB_USER','adlister_user'); 

define('DB_PASS','password');


$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
