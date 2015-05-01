<?php 

require_once '../bootstrap.php'; 
// To send this info to the DB I will need to call Ads::save(); I think??



if(!empty($_POST))
{
    $newAd =  new Ads;

    $newAd->title = Input::has('title') ? Input::get('title') : '';
    $newAd->price = Input::has('price') ? Input::get('price') : '';
    $newAd->size = Input::has('size') ? Input::get('size') : '';
    $newAd->description = Input::has('description') ? Input::get('description') : '';
    $newAd->category = Input::has('optionsRadios') ? Input::get('optionsRadios') : '';
    $newAd->contact = Input::has('optionsCheckbox') ? Input::get('optionsCheckbox') : '';
    $newAd->image = Input::has('image') ? Input::get('image') : '';

    $newAd->save();
}


var_dump($_POST);
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
    <div class="container">
      <h1>Create Your Ad</h1>
      <form method="POST" action="ads.create2.php" class="form-horizontal">
    <div class="form-group">
      <label for="inputTitle" class="col-sm-2 control-label">Title of Ad</label>
      <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Title of Ad">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPrice" class="col-sm-2 control-label">Price</label>
      <div class="col-sm-10">
        <input type="text" name="price" class="form-control" id="inputPrice" placeholder="Price($)">
      </div>
    </div>
    <div class="form-group">
      <label for="inputSize" class="col-sm-2 control-label">Size</label>
      <div class="col-sm-10">
        <input type="text" name="size" class="form-control" id="inputSize" placeholder="Item Size">
      </div>
    </div>

  <h3>Item Description</h3> 
    <textarea class="form-control" name="description" rows="3" placeholder="Enter Item Description"></textarea>
  <h3>File Uploader</h3>

  <div class="form-group">
    <label for="exampleInputFile">Upload Image(s)</label>
    <input type="file" name="image" id="exampleInputFile">
    <p class="help-block">Images limited to a maximum of four (4) uploads.</p>
  </div>

  <h3>Item Category</h3> 
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Women's Clothing">
          Women's Clothing
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="Men's Clothing">
          Men's Clothing
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios3" value="Women's Shoes">
          Women's Shoes
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Men's Shoes">
          Men's Shoes
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="Jewelry">
          Jewelry
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios3" value="Accessories">
          Accessories
        </label>
      </div>

  <h3>Preferred Contact Method</h3>

      <div class="checkbox">
        <label>
          <input type="checkbox" name="optionsCheckbox" value="Call">
          Call
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="optionsCheckbox" value="Text">
          Text
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="optionsCheckbox" value="Email">
          Email
        </label>
      </div>
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

