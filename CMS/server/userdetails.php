
<?php
//Include libraries
require __DIR__ . '/vendor/autoload.php';
$mongoClient = new \MongoDB\Client("mongodb://localhost:27017");

session_start();

 


 if ($_SERVER["REQUEST_METHOD"] == "GET") {
//Select a database 
$ID = $_SESSION['id'];
$db = $mongoClient->ecommerce;
$criteria=['_id'=>new MongoDB\BSON\ObjectId($ID),];
$users = $db->users->find($criteria);

//Select a collection 
$details = '['; //Start of array of customers in JSON


foreach ($users as $user){
    //var_dump($customer);
    $details .= json_encode($user);//Convert PHP representation of customer into JSON 
    $details .= ',';//Separator between customers
}

//Remove last comma
$details = substr($details, 0, strlen($details) - 1);

//Close array
$details .= ']';

//Echo final string
echo ($details);
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