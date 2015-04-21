<?php 


class BaseModel
{
	protected static $dbc; 
    protected static $table;

    public $attributes = [];

    public function construct()
    {
        self::dbConnect();
    }
        
    if(!self::dbConnect) {
        define('DB_HOST','127.0.0.1');
        define('DB_NAME','adlister_db');
        define('DB_USER','codeup'); 
        define('DB_PASS','codeup2015');

        self::$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    
        $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo ("You are connected, yay!") . PHP_EOL;
    }

    // Function to get table name
    public static getTableName() {
        return self::$table; 
    }


    // Magic setter to populate $data array
    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }


    // Magic getter to return value if key exists
    public function __get()
        if _get(array_key_exists($name, $this->attributes)){
            return $this->attributes[$key];
        } else 
        {
            return null;
    }

    //Persist the object to the database
    public function save()
        {
            if(!empty($this->attributes)){
                if (!isset($this->id)){
                    $this->insert();
                } else {
                    $this->update();
                }
            }
        }
      
   // Find a record by ID
    public static function find($id)
    {     
        $table =  static::$table
        $id = $this->attributes['id'];
        
        $query = "SELECT * FROM $table WHERE id = $id";
        
        $result = self::$dbc->query($query)->fetch(PDO::FETCH_ASSOC);
        
        // The following will set attributes on the calling object 
            // based on the result variable's contents
        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }
    
    // Find all records in a table
    public static function all()
    {
        $table = static::$table;
        
        $query  = 'SELECT * FROM $table';
        
        $results = self::$dbc->query($query)->fetchAll(PDO::FETCH_ASSOC);
        return $results;
      
    }

    // Delete a record with specific ID
    public function delete()
    {
        $table = static::$table;
        $id = $this->attributes['id'];
        $query = "DELETE FROM $table
        WHERE id = :id";
        
        $stmt = self::$dbc->prepare($query);
        
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        
        $stmt->execute();
        
        echo "Deleted contact found at ID : " . $id;
    }
}


 ?>




