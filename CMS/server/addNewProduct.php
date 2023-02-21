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
$desc = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_INT);
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);

if ($quantity != 0) {
    $isRemoved = false;
} else {
    $isRemoved = true;
}
$delimiter = ",";
$description = explode($delimiter,$desc);

$uploadFileName = $_FILES["image"]["name"];
if(getimagesize($_FILES["image"]["tmp_name"]) === false) {
    echo "File is not an image.";
    return;
}

//Specify where file will be stored
$target_file = '../../assets/images/' . $uploadFileName;

/* Files are uploaded to a temporary location. 
    Need to move file to the location that was set earlier in the script */
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    echo '<p>Uploaded image: <img src="' . $target_file . '"></p>';//Include uploaded image on page
} 
else {
    echo "Sorry, there was an error uploading your file.";
}
    

// Update product Collection
$result = [
    "name" => $productName,
    "description" => $description,
    "price" => (int)$price,
    "quantity" => (int)$quantity,
    "category" => $category,
    "path" => $uploadFileName,
    "isRemoved" => $isRemoved
];

$insertResult = $collection->insertOne($result);
$response['isSuccess'] = true;
echo json_encode($response);
?>