<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->ecommerce;

//Select a collection 
$collection = $db->products;

// Get data
$id = $_GET['id'];


$productName = filter_input(INPUT_POST, 'productName', FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_INT);
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);

if ($quantity != 0) {
    $isRemoved = false;
} else {
    $isRemoved = true;
}

// Create an update document
$update = [
    '$set' => [
        'name' => $productName,
        'description' => $description,
        'price' => $price,
        'quantity' => $quantity,
        'category' => $category
    ]
];

// Update the document with the given ID
$result = $collection->updateOne(
    ['_id' => new MongoDB\BSON\ObjectID($id)],
    $update
)

?>