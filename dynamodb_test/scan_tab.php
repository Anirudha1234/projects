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


$params = [
    'TableName' => 'tab',
    
];



try {
    while (true) {
        $result = $dynamodb->scan($params);

        foreach ($result['Items'] as $i) {
            $tab = $marshaler->unmarshalItem($i);

              if (!isset($tab['uber'])) {
                     $value = null;
                      } 
              elseif (is_array($tab['uber'])) {
                $value = false;
                } 
              else {
                $value = $tab['uber'];
                   }

              if (!isset($tab['ola'])) {
                     $value1 = null;
                      } 
              elseif (is_array($tab['ola'])) {
                $value = false;
                } 
              else {
                $value1 = $tab['ola'];
                   }

              if (!isset($tab['fg'])) {
                     $value2 = null;
                      } 
              elseif (is_array($tab['fg'])) {
                $value2 = false;
                } 
              else {
                $value2 = $tab['fg'];
                   }

            echo $tab['cab'] ." , ". $value." , " . $value1." , ". $value2;
        }

        if (isset($result['LastEvaluatedKey'])) {
            $params['ExclusiveStartKey'] = $result['LastEvaluatedKey'];
        } else {
            break;
        }
    }

} catch (DynamoDbException $e) {
    echo "Unable to scan:\n";
    echo $e->getMessage() . "\n";
}

?>

