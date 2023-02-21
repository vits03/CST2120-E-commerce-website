

<?php
//Include libraries
require __DIR__ . '/vendor/autoload.php';
    

$mongoClient = new \MongoDB\Client("mongodb://localhost:27017");
$db = $mongoClient->ecommerce;
$products = $db->products->find();



   

//returns all products in database
$jsonStr = '['; 

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

exit();

?>