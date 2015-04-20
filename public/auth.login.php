<?php 

session_start();

require_once '/auth.php';


$message = 'Please login.';

var_dump($POST) . PHP_EOL;

// ***************************
// Require or include statements are allowed here.
// All other code goes in the pageController function.

/*
 *The pageController function handles all processing for this page.
 *@return array an associative array of data used in rendering the HTML view.
 */
function pageController()
{
	// Initialize an empty data array.


	// Add data to be used in the HTML view.
	$data['message'] = 'Hello Keyasha!';

	// Return the completed data array.
	return $data

}
// Call the pageController function 
// and extract all the returned array as local variables.

extract(pageController());

// Only use echo, conditionals and loops anywhere within the HTML.

// ************************



 ?>
<html>
<head>
	<title>Login-Adlister</title>
</head>
<body>
	<h1><?= $message?></h1>

	<form metho="POST" action="/login.php">
		<label for="email" >Email</label>
		<input id="email" name="email" type="text"><br>

		<label for="password">Password</label>
        <input id="password" name="password" type="password"><br>
        
        <input type="submit">
	</form>

</body>
</html>

