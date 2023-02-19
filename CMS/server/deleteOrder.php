<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->ecommerce;

//Select a collection 
$collection = $db->orders;

// Get data
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

// Delete the document
$deleteResult = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($id)]);

?>

