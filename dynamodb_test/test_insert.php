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

$UserId = '107n';
$OSType = 'Windows';
$IMSI='boss';

$item = $marshaler->marshalJson('
    {
        "UserId": "' . $UserId . '",
        "OSType": "' . $OSType . '",
        "IMSI": "' . $IMSI . '"
    }
');

$params = [
    'TableName' => 'User',
    'IndexName' => 'IMSIIndex',
    'Item' => $item
];


try {
    $result = $dynamodb->putItem($params);
    echo "Added item: $UserId - $OSType\n";

} catch (DynamoDbException $e) {
    echo "Unable to add item:\n";
    echo $e->getMessage() . "\n";
}



