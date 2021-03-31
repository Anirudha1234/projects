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
'TableName' => 'User',
'AttributeDefinitions' => array(
    array('AttributeName' => 'UserId',      'AttributeType' => 'S'),
    array('AttributeName' => 'OSType',      'AttributeType' => 'S'),
        array('AttributeName' => 'IMSI',        'AttributeType' => 'S')
),
'KeySchema' => array(
    array('AttributeName' => 'UserId', 'KeyType' => 'HASH'),
    array('AttributeName' => 'OSType', 'KeyType' => 'RANGE')
),
'LocalSecondaryIndexes' => array(
    array(
        'IndexName' => 'IMSIIndex',
        'KeySchema' => array(
            array('AttributeName' => 'UserId', 'KeyType' => 'HASH'),
            array('AttributeName' => 'IMSI',    'KeyType' => 'RANGE')
        ),
        'Projection' => array(
            'ProjectionType' => 'KEYS_ONLY',
        ),
        'ProvisionedThroughput' => array(
            'ReadCapacityUnits'  => 10,
            'WriteCapacityUnits' => 10
        )
    )
),
'ProvisionedThroughput' => array(
    'ReadCapacityUnits'  => 50,
    'WriteCapacityUnits' => 50
)));
?>