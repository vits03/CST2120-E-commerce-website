<?php

// Start the session
session_start();

//Include libraries
require __DIR__ . '/vendor/autoload.php';
$mongoClient = new \MongoDB\Client("mongodb://localhost:27017");



 
//Create instance of MongoDB client

 if ($_SERVER["REQUEST_METHOD"] == "GET") {
//Select a database
$ID = $_SESSION['id']; 
$db = $mongoClient->ecommerce;
$criteria=['_id'=>new MongoDB\BSON\ObjectId($ID),];
$users = $db->users->find($criteria);

//Select a collection 
$jsonStr = '['; //Start of array of customers in JSON

//Work through the customers
foreach ($users as $user){
    //var_dump($customer);
    $jsonStr .= json_encode($user);//Convert PHP representation of customer into JSON 
    $jsonStr .= ',';//Separator between customers
}

//Remove last comma
$jsonStr = substr($jsonStr, 0, strlen($jsonStr) - 1);

//Close array
$jsonStr .= ']';

//Echo final string
echo ($jsonStr);
   //Output each customer as a JSON object with comma in between
   

 }
 

 
 if  ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //$dataa=$_POST;
    $modifiedData = $_REQUEST;
    
    

//Select a database
$db = $mongoClient->ecommerce;
$criteria=['_id'=>new MongoDB\BSON\ObjectId($_SESSION['id']),];
$users = $db->users->updateOne($criteria,['$set'=>$modifiedData]);


   

 }
 

exit();
?>