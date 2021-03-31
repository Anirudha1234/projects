<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="refresh" content="30" > 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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


$params = [
    'TableName' => 'Game',
    
];



echo "<center><table id ='table-to-refresh' border = '3'><thead>
<tr>
<td>userid#clientid</td>
<td>action</td>
<td>gameid</td>
<td>gameid#roomid</td>
<td>otherusers</td>
<td>room</td>
<td>time</td>
<td>userid</td>
<td>jointime</td>
<td>leavetime</td>
<td>roomid</td>
<td>status</td>
<td>userid#status</td>
</tr></thead>
";

try {
    while (true) {
        $result = $dynamodb->scan($params);

        foreach ($result['Items'] as $i) {
            $game = $marshaler->unmarshalItem($i);

              if (!isset($game['gameid#roomid'])) {
                     $value = null;
                      } 
              else {
                $value = $game['gameid#roomid'];
                   }

              if (!isset($game['userid'])) {
                     $userid = null;
                      } 
              else {
                $userid = $game['userid'];
                   }

              if (!isset($game['gameid'])) {
                     $gameid = null;
                      } 
              else {
                $gameid = $game['gameid'];
                   }

                   if (!isset($game['action'])) {
                     $action = null;
                      } 
              else {
                $action = $game['action'];
                   }

              if (!isset($game['room'])) {
                     $room = null;
                      } 
              else {
                $room = $game['room'];
                   }

              if (!isset($game['time'])) {
                     $time = null;
                      } 
              else {
                $time = $game['time'];
                   }
               
               if (!isset($game['otherusers'])) {
                     $otherusers = null;
                      } 
              else {
                $otherusers = $game['otherusers'];
                   }

               if (!isset($game['userid#status'])) {
                     $value1 = null;
                      } 
              else {
                $value1 = $game['userid#status'];
                   }
                   
                if (!isset($game['roomid'])) {
                     $roomid = null;
                      } 
              else {
                $roomid = $game['roomid'];
                   }
                   
               if (!isset($game['jointime'])) {
                     $jointime = null;
                      } 
              else {
                $jointime = $game['jointime'];
                   }


               if (!isset($game['status'])) {
                     $status = null;
                      } 
              else {
                $status = $game['status'];
                   }

               if (!isset($game['leavetime'])) {
                     $leavetime = null;
                      } 
              else {
                $leavetime = $game['leavetime'];
                   }    



            echo "<tr><td>" . $game['userid#clientid'] ."</td><td>" . $action ."</td><td>" . $gameid ."</td><td>" .  $value ."</td><td>" . $otherusers ."</td><td>" . $room ."</td><td>" . $time ."</td><td>" . $userid ."</td><td>" . $jointime ."</td><td>" .$leavetime ."</td><td>" . $roomid ."</td><td>" . $status ."</td><td>" . $value1 ."</td></tr>";
        }
        echo "<table></center>";

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


<script type="text/javascript">
$(document).ready(function () {
$(document).on('click', '.refresher', function () {
$.ajax({
url: 'game_scan.php',
method: "GET",
success: function(response) {
   $('#table-to-refresh').html(response);
}
});
});
});
</script>

</html>