<?php 


 ?>



 <html>
 <head>
 	<title>Create Ad</title>

 </head>
 <body>
 <h1>Create Your Ad</h1>

<form method="POST" action="">
	
	<input id="addHeadline" placeholder="Enter your headine">
	<input id="price" 		placeholder="Enter price in whole dollar amount">	
	<input id="location" 	placeholder="Enter location, i.e. Stone Oak, I-10 and Wurzbach">
	
	<p>Categories:</p>
	<label><input type="checkbox" 	id="clothing" 		name="">Clothing</label>
	<label> <input type="checkbox" 	id="jewelry" 		name="" >Jewelry</label>
	<label> <input type="checkbox" 	id="crafted" 		name="">Crafted</label>
	<label> <input type="checkbox" 	id="manufactured" 	name="">Manufactured</label>
	
	<textarea 	id="description" 	placeholder="Enter a description, maximum 100 characters"><textarea>

	<input 		id="best contact" 	placeholder="Enter your best contact info">

	<p>Add Your Image: <br> 
		<img src="">
	</p>
	
	<button type="submit"></button>

</form>



 </body>
 </html>