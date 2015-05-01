<?php 

require_once '../bootstrap.php';

if(!empty($_POST))
{
    $newUser =  new Users;

    $newUser->email = Input::has('email') ? Input::get('email') : '';
    $newUser->username = Input::has('username') ? Input::get('username') : '';
    $newUser->password = Input::has('password') ? Input::get('password') : '';
    $newUser->profile_img = Input::has('profile_img') ? Input::get('profile_img') : '';

    $newUser->save();
}

var_dump($_POST);
?>
<!-- This is the user signup page -->
<html>
<?php require_once '../views/partials/head.php'; ?>
<body>
<?php require_once '../views/partials/navbar.php'; ?>
<header class="ad">
    <div class="header-content">
        <div class="header-content-inner">
            <h1>The intersection where fashion meets passion</h1>
        </div>
    </div>
</header>

<!-- This should add the user the the db in the users table -->
  <h1>Create Your Account</h1>
<hr>
	<div class="container">
       <form method="POST" action="users.create.php">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputUsername1">Username</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
  <h3>Upload Profile Image</h3>

      <div class="form-group">
        <label for="exampleInputFile">Upload Profile Image</label>
        <input type="file" name="profile_img" id="exampleInputFile">
        <p class="help-block">Profile image should be limited to a size of 150px x 150px.</p>
      </div>
    <hr>
      <button type="submit" class="btn btn-default form-btn">Submit</button>
    </form>
  </div>
<!-- Once create account successful header redirect to myaccount page for that user
issue message: Welcome, $username!  -->
<?php require_once '../views/partials/footer.php'; ?>
</body>
</html>


 