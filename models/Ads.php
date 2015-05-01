<?php

require_once 'BaseModel.php';

class Ads extends BaseModel {

    protected static $table = 'ads';


    protected function update()
    {
        $query = "UPDATE ads 
        SET title = :title, price = :price, size = :size, contact = :contact, 
        category = :category, description = :description, image = :image
        WHERE id = :id";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id',         $this->id,              PDO::PARAM_STR);
        $stmt->bindValue(':title',   $this->title,        PDO::PARAM_STR);
        $stmt->bindValue(':price',      $this->price,           PDO::PARAM_STR);
        $stmt->bindValue(':size',   $this->size,        PDO::PARAM_STR);
        $stmt->bindValue(':optionsCheckbox', $this->contact,    PDO::PARAM_STR);
        $stmt->bindValue(':optionsRadios',    $this->category,         PDO::PARAM_STR);
        $stmt->bindValue(':description',    $this->description,         PDO::PARAM_STR);
        $stmt->bindValue(':image',    $this->image,         PDO::PARAM_STR);


        $stmt->execute();
    
        echo "The update() method was called by the save() method";
    }
    protected function insert()
     {   
        $query = "INSERT INTO ads (id, title, price, size, contact, category, description, image)
        VALUES (:id, :title, :price, :size, :optionsCheckbox, :optionsRadios, :description, :image)";
        
        $stmt = self::$dbc->prepare($query);
       
        $stmt->bindValue(':id', $this->id, PDO::PARAM_STR);
        $stmt->bindValue(':title',   $this->title,        PDO::PARAM_STR);
        $stmt->bindValue(':price',      $this->price,           PDO::PARAM_STR);
        $stmt->bindValue(':size',   $this->size,        PDO::PARAM_STR);
        $stmt->bindValue(':optionsCheckbox', $this->contact,    PDO::PARAM_STR);
        $stmt->bindValue(':optionsRadios',    $this->category,         PDO::PARAM_STR);
        $stmt->bindValue(':description',    $this->description,         PDO::PARAM_STR);
        $stmt->bindValue(':image',    $this->image,         PDO::PARAM_STR);

        $stmt->execute();

        echo "Inserted ID: " . self::$dbc->lastInsertId() . PHP_EOL;
        echo "The insert() method was called by the save() method" . PHP_EOL;
        
    }

}