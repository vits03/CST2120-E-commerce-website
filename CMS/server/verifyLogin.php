<?php
// Start the session
session_start();

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->ecommerce;

//Select a collection 
$collection = $db->admin;

// Get data
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$findUser = [
    "username" => $username,
    "password" => $password
];

// Search for username & password in database
$cursor = $db->admin->find($findUser);

$isFound = false;
foreach ($cursor as $user) {
    if($user['username'] == $username and $user['password'] == $password){   
        $isFound = true;
        
        // Store the username in a session
        $_SESSION['username'] = $username;
        
        break;
    }
}

if ($isFound) {
    $response['isAuthorised'] = true;
} else {
    $response['isAuthorised'] = false;
}

echo json_encode($response);
?>