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

//delete 
function delete(){

  // delete query
    $query = "DELETE FROM " . $this->table_name . " WHERE stu_id = ?";
  
    // prepare query
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->stu_id=htmlspecialchars(strip_tags($this->stu_id));
  
    // bind id of record to delete
    $stmt->bindParam(1, $this->stu_id);
  
    // execute query
    if($stmt->execute()){
        return true;
    }
  
    return false;
}

// update product
function update(){
  
    // update query
    $query = "UPDATE
                " . $this->table_name . "
            SET
                Name = :Name,
                Branch = :Branch,
                email = :email
            WHERE
                stu_id = :stu_id";
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->Name=htmlspecialchars(strip_tags($this->Name));
    $this->Branch=htmlspecialchars(strip_tags($this->Branch));
    $this->email=htmlspecialchars(strip_tags($this->email));
   
    $this->stu_id=htmlspecialchars(strip_tags($this->stu_id));
  
    // bind new values
    $stmt->bindParam(':Name', $this->Name);
    $stmt->bindParam(':Branch', $this->Branch);
    $stmt->bindParam(':email', $this->email);
   
    $stmt->bindParam(':stu_id', $this->stu_id);
  
    // execute the query
    if($stmt->execute()){
        return true;
    }
  
    return false;
}
}

?>