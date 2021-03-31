<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="refresh" content="30" > 
</head>

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

$tableName = 'User';

$a = '101n';
$b='Window';


$key = $marshaler->marshalJson('
    {
        "UserId": "' . $a . '",
        "OSType": "' . $b . '"
    }
');

$params = [
    'TableName' => $tableName,
    'Key' => $key
];

try {
    $result = $dynamodb->getItem($params);
    print_r($result["Item"]);

} catch (DynamoDbException $e) {
    echo "Unable to get item:\n";
    echo $e->getMessage() . "\n";
}

?>


</html>