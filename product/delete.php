<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once 'database.php';
 
// instantiate product object
include_once 'product.php';
 
$database = new Database();
$db = $database->getConnection();
 
$product = new Product($db);

// get product id
$data = json_decode(file_get_contents("php://input"));
  
// set product id to be deleted
$product->bundle_id = $data->bundle_id;
  
// delete the product
if($product->delete()){
  
    // set response code - 200 ok
    http_response_code(200);
  
    // tell the user
    echo json_encode(array("message" => "record successfully deleted."));
}
  
// if unable to delete the product
else{
  
    // set response code - 503 service unavailable
    http_response_code(503);
  
    // tell the user
    echo json_encode(array("message" => "Unable to delete record."));
}
?>
