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

$findUser = [
    "username" => $username,
    "password" => $password
];

// Search for username & password in database
$cursor = $db->users->find($findUser);

$isFound = false;
foreach ($cursor as $user) {
    if($user['username'] == $username and $user['password'] == $password){   
        $isFound = true;
        break;
    }
}

if ($isFound) {
    $message = "Authentication Success";
} else {
    $message = "Authentication Fail";
}

echo $message;