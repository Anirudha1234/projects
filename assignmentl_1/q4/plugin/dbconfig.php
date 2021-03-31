<?php
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount=ServiceAccount::fromJsonFile(__DIR__.'/apidb-7e235-firebase-adminsdk-rbbwt-1f252c1dcc.json');
$firebase = (new Factory)
     ->withServiceAccount($serviceAccount)
     ->withDatabaseUri('https://apidb-7e235-default-rtdb.firebaseio.com')
     ->create();

  $database =$firebase->getDatabase();
  ?>