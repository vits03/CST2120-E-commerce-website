<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->ecommerce;

//Select a collection 
$collection = $db->orders;

// Get all products
$cursor = $collection->find();

// Convert cursor to array
$products = iterator_to_array($cursor);

// Return products in JSON format
header('Content-Type: application/json');
echo json_encode($products);
?>