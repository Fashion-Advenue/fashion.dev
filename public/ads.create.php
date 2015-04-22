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
<?php require_once '../views/partials/head.php'; ?>
 <body>
<?php require_once '../views/partials/navbar.php'; ?>
<header class="lookbook">
    <div class="header-content">
        <div class="header-content-inner">
            <h1>The intersection where fashion meets passion</h1>
            <hr>
            <h2>::LOOKBOOKS::</h2>
        </div>
    </div>
</header>
	 <h1>Create Your Ad</h1>
	 <div>

		<form method="POST" action="">
			<fieldset>
				<legend>Your Item</legend>	
				Title of Ad: <input type="text"><br>
				Price: <input type="text"><br>
				Size: <input type="text"><br>
				Item Description: <input type="text">
			</fieldset>
		</form>

			<!-- <input id="location" 	placeholder="Enter location, i.e. Stone Oak, I-10 and Wurzbach"> -->

		<form method="POST" action="">
			<fieldset>
				<legend>Item Categories</legend>
				Women's Clothing <input 	type="checkbox" class="tags"><br>
				Women's Shoes <input 	type="checkbox" class="tags"><br>
				Men's Clothing <input 	type="checkbox" class="tags"><br>
				Men's Shoes <input 	type="checkbox" class="tags"><br>
				Jewelry <input 	type="checkbox" class="tags"><br>
				Accessories <input 	type="checkbox" class="tags"><br>
			</fieldset>
		</form>
			
		<form method="POST" action="">
			<fieldset>
				<legend>Preferred Contact Method</legend>
				Call <input type="checkbox"  class="tags"><br>
				Text <input type="checkbox"  class="tags"><br>
			    Email <input type="checkbox"  class="tags"><br>
			</fieldset>
			<button type="submit">Submit Ad</button>
		</form>
	</div>
 </body>
 </html>

