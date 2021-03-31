<?php
class Game{
 
    // database connection and table name
    private $conn;
    private $table_name = "game";
 
    // object properties
    public $cl_id;
    public $game_id;
    public $date;
    public $play_count;
    public $sess_count;
    public $ply_chip;
    public $win_chip;
 
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

}
?>