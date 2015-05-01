<?php 
require_once '../bootstrap.php';

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
<header class="ad">
    <div class="header-content">
        <div class="header-content-inner">
            <h1>The intersection where fashion meets passion</h1>
        </div>
    </div>
</header>
    <h1>Edit Your Ad</h1>
    <div class="container">
        <form method="POST" action="" class="form-horizontal">
      <div class="form-group">
        <label for="inputTitle" class="col-sm-2 control-label">Title of Ad</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputTitle" placeholder="Title of Ad">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPrice" class="col-sm-2 control-label">Price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPrice" placeholder="Price($)">
        </div>
      </div>
      <div class="form-group">
        <label for="inputSize" class="col-sm-2 control-label">Size</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputSize" placeholder="Item Size">
        </div>
      </div>

    <h3>Edit Item Description</h3> 
      <textarea class="form-control" rows="3" placeholder="Enter Item Description"></textarea>

    <h3>Edit Item Category</h3> 
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
            Women's Clothing
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Men's Clothing
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
            Women's Shoes
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option4">
            Men's Shoes
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option5">
            Jewelry
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option6">
            Accessories
          </label>
        </div>

    <h3>Edit Preferred Contact Method</h3>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="">
            Call
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="">
            Text
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="">
            Email
          </label>
        </div>
    <h3>Add Photo(s)</h3>
    <div class="form-group">
    <label for="exampleInputFile">Upload Image(s)</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Images limited to a maximum of four (4) uploads.</p>
  </div>
    <hr>
    <h3>Delete Photo(s)</h3>
    <hr>

      <div class="form-group">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-default form-btn">Submit Ad</button>
        </div>
      </div>
    </form>
  </div>

<?php require_once '../views/partials/footer.php'; ?>  
</body>
</html>

