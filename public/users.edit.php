<?php 

require_once '../bootstrap.php';

function pageController()
{
	// Initialize an empty data array.


	// Add data to be used in the HTML view.
	$data['username'] = 'Keyasha!';

	// Return the completed data array.
	return $data;

}
// Call the pageController function 
// and extract all the returned array as local variables.

extract(pageController());

// Only use echo, conditionals and loops anywhere within the HTML.


 ?>

 <!-- This is the page where the user can edit their profile -->
 <html>
 <?php require_once '../views/partials/head.php'; ?>
 <body>
<?php require_once '../views/partials/navbar.php'; ?>
<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1>The intersection where fashion meets passion</h1>
        </div>
    </div>
</header> 

 	<h1>Welcome <?php echo $username; ?></h1>
    <!-- <img src=""> Display photo for user float left of page-->
 <h1>Update Your Account</h1>
    <hr>
    <div class="container">
         <form method="POST" action="">
          <div class="form-group">
            <label for="exampleInputEmail1">Update Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Update Username</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Update Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
  <h3>Edit Profile Image</h3>

  <div class="form-group">
    <label for="exampleInputFile">Update Profile Image</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Profile image should be limited to 150px x 150px.</p>
  </div>
    <hr>
          <button type="submit" class="btn btn-default form-btn">Submit</button>
        </form> 
    </div>
 

 <?php require_once '../views/partials/footer.php'; ?> 
</body>
</html>