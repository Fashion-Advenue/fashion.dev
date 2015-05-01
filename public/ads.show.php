<?php 
require_once '../bootstrap.php';


if (!empty($_GET)) {
    $id = Input::get('show');
    $ad = Ads::find($id);
}

?>



 <html>
<?php require_once '../views/partials/head.php'; ?> 
    <title>Ads Index</title>


 <body>
<?php require_once '../views/partials/navbar.php'; ?>
<!-- change this headers img need something that doesn't distract the user
from the ad info/photos that they came to see -->
<header class="blkwht">
    <div class="header-content">
        <div class="header-content-inner">
            <h1>The intersection where fashion meets passion</h1>
        </div>
    </div>
</header>
<!-- php foreach $ads as $ad, php each inside of the list item which will link to show
the specific ad the user clicked in ads.show.php -->
<div class="container">
    <h1 class="show-ad">Ad Detail</h1>
    <hr>
        <?php if(isset($ad)): ?>
            <p class="ad-info"><?= $ad->title; ?>
                <div class="image">
                    <img src="<?= $ad->image ?>">
                </div>
                <ul>
                    <li class="ad-columns show-ad"><?= "Price: " . $ad->price; ?></li>
                    <li class="ad-columns"><?= "Size: " . $ad->size; ?></li>
                    <li class="ad-columns"><?= "Contact Seller By: " . $ad->contact; ?></li>
                    <li class="ad-columns"><?= "Item Category: " . $ad->category; ?></li>
                    <li class="ad-columns"><?= "Item Description: " . $ad->description; ?></li>
                </ul>
            </p>
        <?php endif; ?>
    </div>


<?php require_once '../views/partials/footer.php'; ?>
 </body>
 </html>

