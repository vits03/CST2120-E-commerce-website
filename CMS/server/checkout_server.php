<?php
session_start();
$ID = new MongoDB\BSON\ObjectId($_SESSION['id']);
//find products in database
//return collections of products found in json format.
      require __DIR__ . '/vendor/autoload.php';
      $mongoClient = new \MongoDB\Client("mongodb://localhost:27017");
      $db = $mongoClient->ecommerce;


     //saves user order in db and decrements products quantity
if  ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_ordered=array();
    $order_Data = $_POST;
    $date=new MongoDB\BSON\UTCDatetime( $order_Data["dateplaced"]);
   
    foreach($order_Data["products"] as $products){
    
            $product=["productid"=>new MongoDB\BSON\ObjectId($products["id"]),"quantity"=>(int)$products['quantity']];
            $quantity=["quantity"=>-$product['quantity'],];
            $db->products->updateOne(['_id'=>$product["productid"],],['$inc'=>$quantity]);
            array_push($product_ordered,$product);
            
       }
        $order=["orderid"=>$order_Data["orderid"],"totalprice"=>$order_Data['totalprice'],"address"=>$order_Data['address'],"dateplaced"=>$date,"products"=>$product_ordered,"customerID"=>$ID,"name"=>$order_Data['name']];
    $add=$db->orders->insertOne($order);
   
   

}

?>