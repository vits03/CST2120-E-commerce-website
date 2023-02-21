<?php

      require __DIR__ . '/vendor/autoload.php';
      $mongoClient = new \MongoDB\Client("mongodb://localhost:27017");
      
      $db = $mongoClient->ecommerce;
     //returns all details of products in cart
if  ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cart_contents = '['; 
    $productids=array();
    
    $modifiedData = $_POST;
    
    foreach($modifiedData['array'] as $x ) {
       
    foreach($x as $xy => $xy_value) {
        
        array_push($productids,new MongoDB\BSON\ObjectId($xy_value));
       }
      }

    $products=$db->products->find(['_id'=>['$in'=>$productids]]);
foreach($products as $product){
  
     $cart_contents .= json_encode($product);
     $cart_contents .= ',';
}

; 



$cart_contents = substr($cart_contents, 0, strlen($cart_contents) - 1);


$cart_contents .= ']';
echo $cart_contents;
    } 
?>