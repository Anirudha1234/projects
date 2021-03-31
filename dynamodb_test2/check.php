<?php

require 'vendor/autoload.php';
require 'credentials.php';

date_default_timezone_set('UTC');

use Aws\DynamoDb\Exception\DynamoDbException;
use Aws\DynamoDb\Marshaler;

use Aws\DynamoDb\DynamoDbClient;

$dynamodb = DynamoDbClient::factory(array(
'credentials'=>array(
'key'=>$access_key,
'secret'=>$secret_key
),
'region'=>$region,
'version'=>'latest'
));

$marshaler = new Marshaler();

$tableName = 'Game1';

$a = $_REQUEST['var1'];
$b = $_REQUEST['var2'];
$gameid = $_REQUEST['gameid'];
$userid = $_REQUEST['userid'];
$action = $_REQUEST['action'];
$jointime = $_REQUEST['jointime'];
$leavetime = $_REQUEST['leavetime'];
$otherusers = $_REQUEST['otherusers'];
$room = $_REQUEST['room'];
$roomid = $_REQUEST['roomid'];
$status = $_REQUEST['status'];
$time = $_REQUEST['time'];
$var3 = $_REQUEST['var3'];


$key = $marshaler->marshalJson('
    {
        "userid#clientid": "' . $a . '", 
        "gameid#roomid": "' . $b . '"
    }
');

 
$eav = $marshaler->marshalJson('
    {
        
        ":p": "' . $gameid . '",
        ":q": "' . $userid . '",
        ":r": "' . $action . '",
        ":s": "' . $jointime . '",
        ":t": "' . $leavetime . '",
        ":u": "' . $otherusers . '",
        ":v": "' . $room . '",
        ":w": "' . $roomid . '",
        ":x": "' . $status . '",
        ":y": "' . $time . '",
        ":z": "' . $var3 . '"


    }
');

$params = [
    'TableName' => $tableName,
    'Key' => $key,
    'UpdateExpression' => 
        'set gameid = :p , userid = :q ,#act = :r , jointime = :s , leavetime = :t , otherusers = :u , room = :v , roomid =:w , #stat = :x , #tim = :y , #var = :z',
    'projection-expression'=> '#act , #stat , #tim , #var',
    'ExpressionAttributeValues'=> $eav,
    'ExpressionAttributeNames'=>[ '#act' => 'action' , '#stat' => 'status' , '#tim' => 'time' , '#var' => 'userid#status'],
    'ReturnValues' => 'UPDATED_NEW'
];

$params1 = [
    'TableName' => $tableName,
    'Key' => $key
];



try {
    $result1 = $dynamodb->scan($params1);

    echo "Query succeeded.\n";

    foreach ($result1['Items'] as $game) {
        $c = $marshaler->unmarshalValue($game['userid#clientid']);
        $d = $marshaler->unmarshalValue($game['gameid#roomid']);
    }

   if ($a==$c && $b==$d) {
      try {
    $result = $dynamodb->updateItem($params);
    echo "Partion key and Sort key matched with dynamodb game table !! Updated item.\n";
    print_r($result['Attributes']);

} catch (DynamoDbException $e) {
    echo "Unable to update item:\n";
    echo $e->getMessage() . "\n";
}
   }

 else{

try {
    $result = $dynamodb->updateItem($params);
    echo "Partition key and Sort key doesnot match . So, Insert item.\n";
    print_r($result['Attributes']);

} catch (DynamoDbException $e) {
    echo "Unable to insert item:\n";
    echo $e->getMessage() . "\n";
}
 }

}

catch (DynamoDbException $e) {
    echo "Unable to scan:\n";
    echo $e->getMessage() . "\n";
}






/*try {
    $result = $dynamodb->updateItem($params);
    echo "inserted item.\n";
    print_r($result['Attributes']);

} catch (DynamoDbException $e) {
    echo "Unable to insert item:\n";
    echo $e->getMessage() . "\n";
}
*/


?>

