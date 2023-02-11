<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->ecommerce;

//Select a collection 
$collection = $db->users;

// Get data
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
$lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);

$findUser = [
    "username" => $username
];

// Search for username database
$cursor = $db->users->find($findUser);

$isFound = false;
foreach ($cursor as $user) {
    if($user['username'] == $username){   
        $isFound = true;
        break;
    }
}

if ($isFound == true) {
    $response['success'] = false;
} else {
    $dataArray = [
        "username" => $username,
        "password" => $password,
        "name" => $firstName,
        "surname" => $lastName,
        "email" => $email,
        "telephonenum" => $phone
    ];
    
    //Add the new product to the database
    $insertResult = $collection->insertOne($dataArray);

    $response['success'] = true;
}

echo json_encode($response);
?>