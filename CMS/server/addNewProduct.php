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

// Update product Collection
$result = [
    "name" => $productName,
    "description" => $description,
    "price" => (int)$price,
    "quantity" => (int)$quantity,
    "category" => $category,
    "isRemoved" => $isRemoved
];

$insertResult = $collection->insertOne($result);
$response['isSuccess'] = true;
echo json_encode($response);
?>