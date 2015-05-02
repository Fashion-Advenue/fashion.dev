<?php 
require_once '../bootstrap.php';


$ads = Ads::all();

if(Input::has('show'))
{
     $id = Input::get('show');
     header("Location:ads.show.php?show=$id");
     exit();
}
?>



 <html>
<?php require_once '../views/partials/head.php'; ?> 
 	
 <body>
<?php require_once '../views/partials/navbar.php'; ?>
<header class="blkwht">
    <div class="header-content">
        <div class="header-content-inner">
            <h1>The intersection where fashion meets passion</h1>
        </div>
    </div>
</header>

    <div class="container">
        <h1>Browse All Ads</h1>
        <hr>
        <ul>
            <?php foreach ($ads as $ad): ?>
                <li><a href="?show=<?= $ad['id']?>"><?= $ad['title'] ?></a></li>
        

            <?php endforeach; ?>
        </ul>
    </div>



<?php require_once '../views/partials/footer.php'; ?>
 </body>
 </html>

