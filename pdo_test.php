<?php 

define('DB_HOST','127.0.0.1');

define('DB_NAME','adlister_db');

define('DB_USER','codeup'); 

define('DB_PASS','codeup2015');

REQUIRE ('db_connect.php'); 

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

 ?>