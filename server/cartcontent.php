<?php
//get arrray of ids of products
//find products in database
//return collections of products found in json format.
      require __DIR__ . '/vendor/autoload.php';
      $mongoClient = new \MongoDB\Client("mongodb://localhost:27017");
      //Select a database
      $db = $mongoClient->ecommerce;
     
if  ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cart_contents = '['; 
    $productids=array();
    //$dataa=$_POST;
    $modifiedData = $_POST;
    //var_dump($modifiedData['array']);
    foreach($modifiedData['array'] as $x ) {
       
    foreach($x as $xy => $xy_value) {
        //echo "Key=" . $xy . ", Value=" . $xy_value;
        array_push($productids,new MongoDB\BSON\ObjectId($xy_value));
       }
      }

    $products=$db->products->find(['_id'=>['$in'=>$productids]]);
foreach($products as $product){
    // echo $product['name'];
     $cart_contents .= json_encode($product);//Convert PHP representation of customer into JSON 
     $cart_contents .= ',';//Separator between customers
}

; //Start of array of customers in JSON



//Remove last comma
$cart_contents = substr($cart_contents, 0, strlen($cart_contents) - 1);

//Close array
$cart_contents .= ']';
echo $cart_contents;
    } 
?>