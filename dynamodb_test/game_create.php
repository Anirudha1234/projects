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

$params = $dynamodb->createTable(array(
'TableName' => 'Game',
'AttributeDefinitions' => array(
    array('AttributeName' => 'userid#clientid',      'AttributeType' => 'S'),
    array('AttributeName' => 'gameid#roomid',      'AttributeType' => 'S'),
        array('AttributeName' => 'userid#status',        'AttributeType' => 'S'),
),
'KeySchema' => array(
    array('AttributeName' => 'userid#clientid', 'KeyType' => 'HASH')
),
'GlobalSecondaryIndexes' => array(
    array(
        'IndexName' => 'game_roomIndex',
        'KeySchema' => array(
            array('AttributeName' => 'userid#clientid',    'KeyType' => 'HASH'),
            array('AttributeName' => 'gameid#roomid',    'KeyType' => 'RANGE')
        ),
        'Projection' => array(
            'ProjectionType' => 'KEYS_ONLY',
        ),
        'ProvisionedThroughput' => array(
            'ReadCapacityUnits'  => 10,
            'WriteCapacityUnits' => 10
        )
    ),

array(
        'IndexName' => 'game_statusIndex',
        'KeySchema' => array(
            array('AttributeName' => 'userid#clientid',    'KeyType' => 'HASH'),
            array('AttributeName' => 'userid#status',    'KeyType' => 'RANGE')
        ),
        'Projection' => array(
            'ProjectionType' => 'KEYS_ONLY',
        ),
        'ProvisionedThroughput' => array(
            'ReadCapacityUnits'  => 10,
            'WriteCapacityUnits' => 10
        )
    )),
'ProvisionedThroughput' => array(
    'ReadCapacityUnits'  => 50,
    'WriteCapacityUnits' => 50
)));


try {
    echo 'Created table.  Status: ' . 
        $params['TableDescription']['TableStatus'] ."\n";

} catch (DynamoDbException $e) {
    echo "Unable to create table:\n";
    echo $e->getMessage() . "\n";
}


?>