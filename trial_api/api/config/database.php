<?php
// class Database{
 
    // specify your own database credentials
   $host = "localhost";
   $db_name = "api_db";
   $username = "root";
   $password = "password";
     $conn;
 
    // get the database connection
    getConnection(){
 
        // $this->conn = null;
 

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
// }

getConnection();
?>