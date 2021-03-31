<?php
class Product{
 
    // database connection and table product_name
    private $conn;
    private $table_name = "product";
 
    // object properties
    public $bundle_id;
    public $product_name;
    public $quantity;
    public $price;
 
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
                bundle_id=:bundle_id, product_name=:product_name, quantity=:quantity, price=:price";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->bundle_id=htmlspecialchars(strip_tags($this->bundle_id));
    $this->product_name=htmlspecialchars(strip_tags($this->product_name));
    $this->quantity=htmlspecialchars(strip_tags($this->quantity));
    $this->price=htmlspecialchars(strip_tags($this->price));
 
    // bind values
    $stmt->bindParam(":bundle_id", $this->bundle_id);
    $stmt->bindParam(":product_name", $this->product_name);
    $stmt->bindParam(":quantity", $this->quantity);
    $stmt->bindParam(":price", $this->price);
 
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}

//delete 
function delete(){

  // delete query
    $query = "DELETE FROM " . $this->table_name . " WHERE bundle_id = ?";
  
    // prepare query
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->bundle_id=htmlspecialchars(strip_tags($this->bundle_id));
  
    // bind id of record to delete
    $stmt->bindParam(1, $this->bundle_id);
  
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
                product_name = :product_name,
                quantity = :quantity,
                price = :price
            WHERE
                bundle_id = :bundle_id";
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->product_name=htmlspecialchars(strip_tags($this->product_name));
    $this->quantity=htmlspecialchars(strip_tags($this->quantity));
    $this->price=htmlspecialchars(strip_tags($this->price));
   
    $this->bundle_id=htmlspecialchars(strip_tags($this->bundle_id));
  
    // bind new values
    $stmt->bindParam(':product_name', $this->product_name);
    $stmt->bindParam(':quantity', $this->quantity);
    $stmt->bindParam(':price', $this->price);
   
    $stmt->bindParam(':bundle_id', $this->bundle_id);
  
    // execute the query
    if($stmt->execute()){
        return true;
    }
  
    return false;
}
}

?>