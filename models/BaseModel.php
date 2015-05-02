<?php
// This file is not in this location may be req .env file but idk yet

class BaseModel {

    protected static $dbc;
    protected static $table;

    public $attributes = array();

    /*
     * Constructor
     */
    public function __construct()
    {
        self::dbConnect();
    }

    /*
     * Connect to the DB
     */
    private static function dbConnect()
    {
        if (!self::$dbc)
        {
            self::$dbc = new PDO(
                'mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS
                );
            self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
    }

    // Function to get the name of the table
    public static function getTableName()
    {
        return self::table;
    }

    /*
     * Get a value from attributes based on name
     */
    public function __get($name)
    {
        // @TODO: Return the value from attributes with a matching $name, if it exists
        if (array_key_exists($name, $this->attributes)) 
        {

            return $this->attributes[$name];
        }

        return null;
    }



    /*
     * Set a new attribute for the object
     */
    public function __set($name, $value)
    {
        // @TODO: Store name/value pair in attributes array
         $this->attributes[$name] = $value;
    }

    /*
     * Persist the object to the database
     */
    public function save()
    {
        if (!empty($this->attributes['id']))
        {
            $this->update();
        } else {
            $this->insert();
        }
    }

        // @TODO: Perform the proper action - if the key is set, this is an update, if not it is a insert
    protected function update()
    {
        $query = "UPDATE contacts 
        SET name = :name, email = :email
        WHERE id = :id";
        $stmt = self::$dbc->prepare($query);

            $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
            $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindValue(':id', $this->id, PDO::PARAM_STR);

            $stmt->execute();
    
        echo "The update() method was called by the save() method";
    }

     protected function insert()
     {   
        $query = "INSERT INTO contacts (id, name, email)
        VALUES (:id, :name, :email)";
        
        $stmt = self::$dbc->prepare($query);

        $stmt->bindValue(':id', $this->id, PDO::PARAM_STR);
        $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
        $stmt->execute();
        echo "Inserted ID: " . self::$dbc->lastInsertId() . PHP_EOL;

        echo "The insert() method was called by the save() method" . PHP_EOL;
        
    }
        
    // /*
    //  * Find a record based on an id
    //  */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();
        $table = static::$table;

        $query = "SELECT * FROM $table WHERE id = $id";
        $result = self::$dbc->query($query)->fetch(PDO::FETCH_ASSOC);
        

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    /*
     * Find all records in a table
     */
    public static function all()
    {
        self::dbConnect();
        $table = static::$table;

        $query  = "SELECT * FROM $table";

        $results = self::$dbc->query($query)->fetchAll(PDO::FETCH_ASSOC);
        return $results;

      
    }

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


