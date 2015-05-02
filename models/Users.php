<?php

require_once 'BaseModel.php';

class Users extends BaseModel {

    protected static $table = 'users';

    protected function update()
    {
        $hashed_pass = password_hash($this->password, PASSWORD_DEFAULT);

        $query = "UPDATE users 
        SET username = :username, email = :email, 
        password = :password, profile_img = :profile_img
        WHERE id = :id";
        
        $stmt = self::$dbc->prepare($query);

        $stmt->bindValue(':id',         $this->id,              PDO::PARAM_STR);
        $stmt->bindValue(':username',   $this->username,        PDO::PARAM_STR);
        $stmt->bindValue(':email',      $this->email,           PDO::PARAM_STR);
        $stmt->bindValue(':password',   $this->password,        PDO::PARAM_STR);
        $stmt->bindValue(':profile_img', $this->profile_img,    PDO::PARAM_STR);
        
        $stmt->execute();
    
        echo "The update() method was called by the save() method";
    }
    protected function insert()
     {   
        $hashed_pass = password_hash($this->password, PASSWORD_DEFAULT);
        
        $query = "INSERT INTO users (id, username, email, password, profile_img)
        VALUES (:id, :username, :email, :password, :profile_img)";
        
        $stmt = self::$dbc->prepare($query);
       
        $stmt->bindValue(':id', $this->id, PDO::PARAM_STR);
        $stmt->bindValue(':username',   $this->username,        PDO::PARAM_STR);
        $stmt->bindValue(':email',      $this->email,           PDO::PARAM_STR);
        $stmt->bindValue(':password',   $this->password,        PDO::PARAM_STR);
        $stmt->bindValue(':profile_img', $this->profile_img,    PDO::PARAM_STR);
        
        $stmt->execute();
        
        echo "Inserted ID: " . self::$dbc->lastInsertId() . PHP_EOL;
        echo "The insert() method was called by the save() method" . PHP_EOL;
        
    }

}