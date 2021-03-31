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
$b = 'gem#aka';


$item = $marshaler->marshalJson('
    {
        "userid#clientid": "' . $a . '",
        "gameid#roomid": "' . $b . '",
        "userid":"101",
        "gameid":"101g",
        "action":"ser",
        "room":"101ap",
        "time":"6AM",
        "otherusers":"null"
    }
');

$params = [
    'TableName' => 'Game',
    'IndexName' => 'game_roomIndex',
    'Item' => $item
];


try {
    $result = $dynamodb->putItem($params);
    echo "Added item: $a - $b\n";

} catch (DynamoDbException $e) {
    echo "Unable to add item:\n";
    echo $e->getMessage() . "\n";
}



