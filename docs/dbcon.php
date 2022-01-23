<?php
//Initialize the database
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory = (new Factory)
->withServiceAccount('road-digital-safety-assurance-firebase-adminsdk-ubnn0-85bf5c0fc2.json')
->withDatabaseUri('https://road-digital-safety-assurance-default-rtdb.firebaseio.com/');

//Create the database
$database = $factory->createDatabase();
$auth = $factory->createAuth();


?>