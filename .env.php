<?php 
return array(
	'DB_HOST' => '127.0.0.1',
	'DB_NAME' => 'adlister_db',
	'DB_USER' => 'adlister_user',
	'DB_PASS' => 'password'
);



 //  What is happening in this file, its purpose, structure?? 

// We should put this code in a place where it will always be accessible. A great place to do this would be the bootstrap.php file in the sites root folder. Then, the bootstrap.php file should get required in all other PHP files. You can also put other important initialization code there and you will always know that it got done. For example, if you wanted to make logging available across your application, you may initialize your site logger there.

// Now, you will have access to variables such as your database name by doing the following:

// echo $_ENV['DB_NAME'];