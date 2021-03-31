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

$tableName = 'Game';

$a = '101a#101b';

$key = $marshaler->marshalJson('
    {
        "userid#clientid": "' . $a . '"
    }
');

$eav = $marshaler->marshalJson('
    {
        ":r": "102g" 
    }
');

$params = [
    'TableName' => $tableName,
    'Key' => $key, 
    'ConditionExpression' => 'gameid = :r',
    'ExpressionAttributeValues'=> $eav
];

try {
    $result = $dynamodb->deleteItem($params);
    echo "Deleted item.\n";

} catch (DynamoDbException $e) {
    echo "Unable to delete item:\n";
    echo $e->getMessage() . "\n";
}


?>
