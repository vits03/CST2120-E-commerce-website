
<?php
//Include libraries
require __DIR__ . '/vendor/autoload.php';
$mongoClient = new \MongoDB\Client("mongodb://localhost:27017");



 
//Create instance of MongoDB client
 $ID=$_GET["id"];
echo $ID;

//Select a database
$db = $mongoClient->ecommerce;
$products = $db->products->findone(array('_id'=>$ID));

//Select a collection 

   //Output each customer as a JSON object with comma in between
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



 

echo"error mofo";
exit();

?>