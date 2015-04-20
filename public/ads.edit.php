<?php 
// *** ROUGH DRAFT, PASTED ADS.CREATE.PHP FOR 
// *** BASIC IDEA OF WHAT NEEDS TO ACTUALLY DISPLAY ON THIS PAGE FOR THE USER


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








 ?>



 <html>
 <head>
 	<title>Edit Ad</title>

 </head>
 <body>
  	<div>

		<form method="POST" action="">
			
			
			<button type="submit"></button>

		</form>
	</div>


 </body>
 </html>