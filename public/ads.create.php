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


	// Add data to be used in the HTML view.
	$data['message'] = 'Hello Keyasha!';

	// Return the completed data array.
	return $data;

}
// Call the pageController function 
// and extract all the returned array as local variables.

extract(pageController());

// Only use echo, conditionals and loops anywhere within the HTML.







 ?>



 <html>
 <head>
 	<title>Create Ad</title>

 </head>
 <body>
	 <h1>Create Your Ad</h1>
	 <div>

		<form method="POST" action="">
			
			<input id="addHeadline" placeholder="Enter your headine">
			<input id="price" 		placeholder="Enter price in whole dollar amount">
			<input id="size"		placeholder="Enter the size, unknown if unknown">

			<!-- <input id="location" 	placeholder="Enter location, i.e. Stone Oak, I-10 and Wurzbach"> -->

	
			<p>Categories:</p>
			<label><input 	type="checkbox" 	id="clothing" 		name="">Clothing</label>
			<label> <input 	type="checkbox" 	id="jewelry" 		name="" >Jewelry</label>
			<label> <input 	type="checkbox" 	id="shoes" 			name="">Shoes</label>
			<label> <input 	type="checkbox" 	id="accessories" 	name="">Accessories</label>
			
			<textarea 	id="description" 	placeholder="Enter a description, maximum 100 characters"><textarea>
			
			<p>Your Best Contact Info:</p>
			<label>	<input type="checkbox" 	id="callUser" 		name="">Call</label>
			<label>	<input type="checkbox" 	id="textUser" 		name="">Call</label>
			<label> <input type="checkbox" 	id="emailUser" 		name="">Email</label>
			
			<button type="submit"></button>

		</form>
	</div>

	<
 </body>
 </html>

