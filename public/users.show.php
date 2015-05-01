<?php 

require_once '../bootstrap.php';


if (!Auth::check()) 
    {
    header("Location:auth.login.php");
    exit();
    } 

function pageController()
{
	// Initialize an empty data array.


	// Add data to be used in the HTML view.
	$data['username'] = 'KB_The_Magnificent!';

	// Return the completed data array.
	return $data;

}
// Call the pageController function 
// and extract all the returned array as local variables.

extract(pageController());

// Only use echo, conditionals and loops anywhere within the HTML.


 ?>

 <!-- This is the individual users profile page -->
 <html>
 <?php require_once '../views/partials/head.php'; ?>
 <body>
 	<header class="blkwht">
    <div class="header-content">
        <div class="header-content-inner">
            <h1>The intersection where fashion meets passion</h1>
        </div>
    </div>
</header>

<?php require_once '../views/partials/navbar.php'; ?>
    <div class="container">
        <h1>Welcome, <?php echo $username; ?></h1>
        <div>
            <h1 class="user-profile">MY PROFILE</h1>
        </div>  
        <div class="profile-img">
            <!-- php echo each users image not hardcoded -->
            <img src="/img/kb_user_img.jpg">
            <h4 class="profile-links profile-text">About Me</h4>
            <p>I'm Awesome...end of story.</p>
        <div>
            <div class="stats">
                <h4 class="profile-text">Last Login: <?= date('Y-m-d'); ?></h4>
                <h5 class="profile-text">Ads Posted: 2</h5>
                <h5 class="profile-text">Fav Category: Women's Shoes, Women's Clothing</h5>

        </div>
        </div>
        <p class="profile-links">When the user is logged in they should have links to get to :</p>

            <div class="container profile-links">
                <a href="users.edit.php"><i class="fa fa-refresh"></i> Update Profile</a><br>
                <a href="ads.create2.php"><i class="fa fa-pencil-square-o"></i> Create An Ad</a><br>
                <a href="ads.edit.php"><i class="fa fa-pencil-square-o"></i> Edit An Ad</a><br>
        <!-- clicking this should fire the delete function from Ads class -->
                <a href="#"><i class="fa fa-scissors"></i> Delete An Ad</a><br>
                <a href="auth.logout.php"> <i class="fa fa-sign-out"></i> Logout</a><br>

            </div>
        </div>
    </div>
<hr>
<?php require_once '../views/partials/footer.php'; ?> 
 </body>
 </html>