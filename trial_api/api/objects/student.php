<?php
class Student{
 
    // database connection and table name
    private $conn;
    private $table_name = "stu_details";
 
    // object properties
    public $stu_id;
    public $Name;
    public $Branch;
    public $email;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

function read(){
 
    // select all query
    $query = "SELECT * FROM
                " . $this->table_name ;
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
}

// create product
function create(){
 
    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                stu_id=:stu_id, Name=:Name, Branch=:Branch, email=:email";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->stu_id=htmlspecialchars(strip_tags($this->stu_id));
    $this->Name=htmlspecialchars(strip_tags($this->Name));
    $this->Branch=htmlspecialchars(strip_tags($this->Branch));
    $this->email=htmlspecialchars(strip_tags($this->email));
 
    // bind values
    $stmt->bindParam(":stu_id", $this->stu_id);
    $stmt->bindParam(":Name", $this->Name);
    $stmt->bindParam(":Branch", $this->Branch);
    $stmt->bindParam(":email", $this->email);
 
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}
}
?>