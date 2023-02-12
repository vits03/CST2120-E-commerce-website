
<?php
//Include libraries
require __DIR__ . '/vendor/autoload.php';
$mongoClient = new \MongoDB\Client("mongodb://localhost:27017");



 
//Create instance of MongoDB client
 $searchval=strval($_GET["search"]);
//Select a database
$db = $mongoClient->ecommerce;
$regex = new MongoDB\BSON\Regex('^' . $searchval . '','i');
$criteria=['name'=>$regex,];
$products = $db->products->find($criteria);

//Select a collection 
$jsonStr = '['; //Start of array of customers in JSON

//Work through the customers
foreach ($products as $customer){
    //var_dump($customer);
    $jsonStr .= json_encode($customer);//Convert PHP representation of customer into JSON 
    $jsonStr .= ',';//Separator between customers
}

//Remove last comma
$jsonStr = substr($jsonStr, 0, strlen($jsonStr) - 1);

//Close array
$jsonStr .= ']';

//Echo final string
echo ($jsonStr);
   //Output each customer as a JSON object with comma in between
   


 


exit();

?>