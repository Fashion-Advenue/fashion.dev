<?php  
// EXERCISE 9.9 AD LISTER PROJECT

require_once 'BaseModel.php';

class Users extends BaseModel {

    protected static $table = 'users';

    protected function update()
    {
        $query = "UPDATE users 
        SET name = :name, email = :email, :phone, :houseNum, :street, :city, :state, :zipCode, :preferContact
        WHERE id = :id";
        $stmt = self::$dbc->prepare($query);

    	$stmt->bindValue(':id', 		$this->id, 				PDO::PARAM_STR);
        $stmt->bindValue(':firstname', 	$this->firstName, 		PDO::PARAM_STR);
        $stmt->bindValue(':lastname', 	$this->lastName, 		PDO::PARAM_STR);
        $stmt->bindValue(':email', 		$this->email, 			PDO::PARAM_STR);
        $stmt->bindValue(':phone', 		$this->phone, 			PDO::PARAM_STR);
        $stmt->bindValue(':houseNum', 	$this->houseNum, 		PDO::PARAM_STR);
        $stmt->bindValue(':street', 	$this->street, 			PDO::PARAM_STR);
        $stmt->bindValue(':city', 		$this->city, 			PDO::PARAM_STR);
        $stmt->bindValue(':state', 		$this->state, 			PDO::PARAM_STR);
        $stmt->bindValue(':zipCode', 	$this->zipCode, 		PDO::PARAM_STR);
        $stmt->bindValue(':preferContact', $this->preferContact, PDO::PARAM_STR);
            
        $stmt->execute();
    
        echo "The update() method was called by the save() method";
    }

        protected function insert()
     {   
        $query = "INSERT INTO users (id, name, email)
        VALUES (:id, :name, :email)";
        
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_STR);
        $stmt->bindValue(':firstname', 	$this->firstName, 		PDO::PARAM_STR);
        $stmt->bindValue(':lastname', 	$this->lastName, 		PDO::PARAM_STR);
        $stmt->bindValue(':email', 		$this->email, 			PDO::PARAM_STR);
        $stmt->bindValue(':phone', 		$this->phone, 			PDO::PARAM_STR);
        $stmt->bindValue(':houseNum', 	$this->houseNum, 		PDO::PARAM_STR);
        $stmt->bindValue(':street', 	$this->street, 			PDO::PARAM_STR);
        $stmt->bindValue(':city', 		$this->city, 			PDO::PARAM_STR);
        $stmt->bindValue(':state', 		$this->state, 			PDO::PARAM_STR);
        $stmt->bindValue(':zipCode', 	$this->zipCode, 		PDO::PARAM_STR);
        $stmt->bindValue(':preferContact', $this->preferContact, PDO::PARAM_STR);

        
        $stmt->execute();
        echo "Inserted ID: " . self::$dbc->lastInsertId() . PHP_EOL;
        echo "The insert() method was called by the save() method" . PHP_EOL;
        
    }
    
}

 ?>