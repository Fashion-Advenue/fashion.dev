<?php 

// Require or include statements are allowed here.
// All other code goes in the pageController function.



/*
 *The pageController function handles all processing for this page.
 *@return array an associative array of data used in rendering the HTML view.
 */
function pageController()
{
	// Initialize an empty data array.
	$users = [];

	// Add data to be used in the HTML view.
	$data['message'] = 'Hello Keyasha!';

	// Return the completed data array.
	return $data

}
// Call the pageController function 
// and extract all the returned array as local variables.

extract(pageController());

// Only use echo, conditionals and loops anywhere within the HTML.





?>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Register Your Account</h1>
	 <div>

		<form method="POST" action="">
			<label for="userName">*Please enter a user name.</label>
			<input id="userName" placeholder="Username">
			<label for="firstName">*First Name</label>
			<input id="firstName" 		placeholder="First Name">
			<label id="lastName">*Last Name</label>
			<input id="lastName"		placeholder="Last Name">
			<label for="email">*Email</label>
			<input id="email"			placeholder="email">
			<label id="phone">*Enter your phone in the suggested format.</label>
			<input id="phone"			placeholder="phone xxx-xxx-xxxx">
		
			<p>Your Contact Preference:</p>
			<label>	<input type="checkbox" 	id="callUser" 		name="">Call</label>
			<label>	<input type="checkbox" 	id="textUser" 		name="">Call</label>
			<label> <input type="checkbox" 	id="emailUser" 		name="">Email</label>
			
			<label>Address Number</label>
			<input id="houseNum" >
			<label>Street</label>
			<input id="street">
			<label>Apt. or Unit</label>
			<input id="apartment">
			<label>City</label>
			<input id="city">
			<label>State</label>
			<input id="state">
			<label>5-Digit Zip Code</label>
			<input id="zipCode">

			<button type="submit"></button>

		</form>
	</div>

</body>
</html>


 