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

echo "<table id = 'table-to-refresh'>
<thead>
<tr>
<td>cab</td>
<td>uber</td>
<td>ola</td>
<td>fg</td>
</tr>
</thead> 
";

try {
    while (true) {
        $result = $dynamodb->scan($params);

        foreach ($result['Items'] as $i) {
            $tab = $marshaler->unmarshalItem($i);

              if (!isset($tab['uber'])) {
                     $value = null;
                      } 
              else {
                $value = $tab['uber'];
                   }

              if (!isset($tab['ola'])) {
                     $value1 = null;
                      } 
              else {
                $value1 = $tab['ola'];
                   }

              if (!isset($tab['fg'])) {
                     $value2 = null;
                      } 
              else {
                $value2 = $tab['fg'];
                   }

            echo "<tr><td>" . $tab['cab'] . "</td><td>" . $value. "</td><td>" . $value1 . "</td><td>" . $value2 . "</td></tr>";
        }
        echo "</table>";

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
url: 'tab_read_all.php',
method: "GET",
success: function(response) {
   $('#table-to-refresh').html(response);
}
});
});
});
</script>

</body>

</html>