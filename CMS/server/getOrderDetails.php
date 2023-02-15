<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->ecommerce;

//Select a collection 
$collection = $db->orders;

// Get the value of the "id" parameter
$id = $_GET['id'];

// Check if the ID exists in the collection
$document = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
if (!$document) {
    echo "Document not found";
} else {
    // The ID matches - echo all the data of the collection
    header('Content-Type: application/json');
    echo json_encode($document);
}
?>