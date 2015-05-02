<?php 
// EXERCISE 9.1.3 NOT COMPLETE Retrieving Data, User Side
// EXERCISE 9.1.4 Prepared Statememts, Dynamic Queries and User Input
// EXERCISE 9.9 Adlister project 
require 'db_connect.php'; 

$dbc->exec('TRUNCATE TABLE users');


$users = [
	['username' => 'KB_The_Magnificent',
	'email' => 'fashionassassin27@gmail.com',
	'password' => 'somehashedvalue',
    'profile_img' => '/img/kb_user_img.jpg',
	],

	['username' => 'FresherThanUx_x',
	'email' => 'swag_on_deck@gmail.com',
	'password' => 'anotherhashedvalue',
    'profile_img' => '/img/swagguy.jpg',
	],
];
 
$stmt = $dbc->prepare('INSERT INTO users (username, email, 
	password, profile_img) 
	VALUES (:username, :email, :password, :profile_img)');


foreach ($users as $user) {
    $stmt->bindValue(':username',         	$user['username'],         PDO::PARAM_STR);
    $stmt->bindValue(':email',    			$user['email'],   			PDO::PARAM_STR);
    $stmt->bindValue(':password',      		$user['password'],      		PDO::PARAM_STR);
    $stmt->bindValue(':profile_img',        $user['profile_img'],           PDO::PARAM_STR);

    $stmt->execute();
}
echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;

?>












