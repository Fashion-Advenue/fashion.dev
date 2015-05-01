<?php 
// EXERCISE 9.1.3 NOT COMPLETE Retrieving Data, User Side
// EXERCISE 9.1.4 Prepared Statememts, Dynamic Queries and User Input
// EXERCISE 9.9

require 'db_connect.php'; 

$dbc->exec('TRUNCATE TABLE ads');

$ads = [
	[
		'title' => 'Women\'s Christian Louboutin Crystal Pumps',
		'price' => '3945.00',
		'size' => '7',
		'category' => 'women\'s shoes',
		'description'  => 'Shimmering crystals form a bold leopard pattern on these streamlined pumps, creating a head-turning effect. Self-covered 4" heel will have you commanding attention from even the most seasoned fashionistas. Size 7, willnot last long! ',
		'contact' => 'call',
		'image' => '/img/redbottoms.png'
	],
	[
		'title' => 'Men\'s Suede Biker Jacket',
		'price' => '249.00',
		'size' => '38R',
		'category' => 'men\'s clothing',
		'description' => 'Dark gray biker jacket in soft suede. Diagonal zip at front, one chest pocket, side pockets with zip, and one inner pocket. Collar and lapels with snap fasteners and zips at cuffs. Lined.',
		'contact' => 'call',
		'image' => '/img/mensmoto.jpeg'
	],
	[
		'title' => 'Faux Turquoise Filigree Necklace',
		'price' => '22.90',
		'size' => 'N/A',
		'category' => 'jewelry',
		'description' => 'Stay true to your boho style while you boldly accessorize with this tiered statement necklace! Adorned with marbled and faceted faux stones resembling turquoise, dangling beads, and allover filigree, this piece will stand out no matter what its backdrop is (and make you look standout as well!).',
		'contact' => 'text',
		'image' => '/img/fauxnecklace.png'
	],
	[
		'title' => 'Ornate-Etched Hinge Bracelet',
		'price' => '6.90',
		'size' => 'N/A',
		'category' => 'jewelry',
		'description' => 'Go bold with this hinge bracelet! Donning a burnished finish and an ornately etched design, this piece is guaranteed to add a subtle dose of glam to your look.',
		'contact' => 'text',
		'image' => '/img/goldbangle.png'
	],
	[
		'title' => 'Sprayground Money Stacks Duffle',
		'price' => '60.00',
		'size' => 'N/A',
		'category' => 'accessories',
		'description' => 'Printed with cold, hard piles of cash - Benjamins, if you\'re counting - this Money Stacks Duffle by Sprayground™ makes it rain and easy to port your essentials. It\'s equipped with two exterior zip pockets, a side sneaker compartment (keep those kicks separated), and an interior zip pocket.',
		'contact' => 'text',
		'image' => '/img/moneyduffle.png'
	],
	[
		'title' => 'Embroidered Fit & Flare Dress',
		'price' => '29.90',
		'size' => 'M',
		'category' => 'women\'s clothing',
		'description' => 'A classic silhouette with feminine appeal: this sleeveless fit and flare dress has it all. It\'s crafted from a floral lace with a floral embroidered front, crochet trim, and a V-cutout back. You\'ll be sitting (or standing) pretty in this uniquely lovely number, no matter what you wear it with.',
		'contact' => 'text',
		'image' => '/img/vintagedress.png'
	],
	[
		'title' => 'Tortoiseshell Round Sunglasses',
		'price' => '5.90',
		'size' => 'N/A',
		'category' => 'accessories',
		'description' => 'As cool as they are classic in design, these round sunglasses will sharpen up your look in an instant. They boast a tortoiseshell frame and will complement your dapper sensibility.',
		'contact' => 'text',
		'image' => '/img/mensglasses.png'
	],
	[
		'title' => 'Men\'s Faux Leather High-Top Sneakers',
		'price' => '32.90',
		'size' => '11',
		'category' => 'men\'s shoes',
		'description' => 'We updated the simple, versatile design of these classic lace-up high-tops with a lightly textured faux leather construction and a slightly tapered round toe, then finished them with a gingham flannel lining. Warm, functional, and seriously dapper - these are the grown-up way to do sneakers.',
		'contact' => 'text',
		'image' => '/img/menssneakers.png'	
	]
];

$stmt = $dbc->prepare('INSERT INTO ads (title, price, size, contact, category, description, image) 
	VALUES (:title, :price, :size, :contact, :category, :description, :image)');


foreach ($ads as $ad) {
    $stmt->bindValue(':title',       $ad['title'],    PDO::PARAM_STR);
    $stmt->bindValue(':price',          $ad['price'],       PDO::PARAM_STR);
    $stmt->bindValue(':size', 			$ad['size'],		PDO::PARAM_STR);
    $stmt->bindValue(':contact',		$ad['contact'],    PDO::PARAM_STR);
    $stmt->bindValue(':category',	$ad['category'], PDO::PARAM_STR);
    $stmt->bindValue(':description',		$ad['description'],		PDO::PARAM_STR);
    $stmt->bindValue(':image',         $ad['image'], PDO::PARAM_STR);

    $stmt->execute();
}
echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;


?>












