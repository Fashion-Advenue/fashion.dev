<?php 
// EXERCISE 9.9 AD LISTER PROJECT

require_once 'BaseModel.php';



class Ads extends BaseModel {

	protected static $table = 'users';

	protected function update()
    {
        $query = "UPDATE contacts 
        SET name = :name, email = :email, :phone, :houseNum, :street, :city, :state, :zipCode, :preferContact
        WHERE id = :id";
        $stmt = self::$dbc->prepare($query);

        $stmt->bindValue(':id', 		$this->id, 				PDO::PARAM_STR);
        $stmt->bindValue(':headline', 	$this->headline, 		PDO::PARAM_STR);
        $stmt->bindValue(':price', 		$this->price, 			PDO::PARAM_STR);
        $stmt->bindValue(':size', 		$this->size, 			PDO::PARAM_STR);
        $stmt->bindValue(':category', 	$this->category, 		PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->description, 	PDO::PARAM_STR);
        $stmt->bindValue(':contact', 	$this->contact, 		PDO::PARAM_STR);
       
        $stmt->execute();
    
        echo "The update() method was called by the save() method";
    }
    protected function insert()
     {   
        $query = "INSERT INTO ads (id, headline, price, size, category, description, contact)
        VALUES (:id, :headline, :price, :size, :cagetory, :description, :contact)";
        
        $stmt = self::$dbc->prepare($query);
       
        $stmt->bindValue(':id', $this->id, PDO::PARAM_STR);
		$stmt->bindValue(':headline', 	$this->headline, 		PDO::PARAM_STR);
        $stmt->bindValue(':price', 		$this->price, 			PDO::PARAM_STR);
        $stmt->bindValue(':size', 		$this->size, 			PDO::PARAM_STR);
        $stmt->bindValue(':category', 	$this->category, 		PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->description, 	PDO::PARAM_STR);
        $stmt->bindValue(':contact', 	$this->contact, 		PDO::PARAM_STR);

        $stmt->execute();

        echo "Inserted ID: " . self::$dbc->lastInsertId() . PHP_EOL;
        echo "The insert() method was called by the save() method" . PHP_EOL;
        
    }

       public static function all()
    {
        self::dbConnect();
        
        $query  = 'SELECT * FROM ads';
        
        $results = self::$dbc->query($query)->fetchAll(PDO::FETCH_ASSOC);
        return $resultsAds;
      
    }

        public function delete()
    {
        $id = $this->attributes['id'];
        $query = "DELETE FROM ads
        WHERE id = :id";
        
        $stmt = self::$dbc->prepare($query);
        
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        
        $stmt->execute();
        
        echo "Deleted contact found at ID : " . $id;
    }
}

}




