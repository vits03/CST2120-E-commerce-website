<?php
 include('common.php');
 require __DIR__ . '/vendor/autoload.php';
 $mongoClient = new \MongoDB\Client("mongodb://localhost:27017");
 
 
 
  
 //Create instance of MongoDB client
  $ID=strval($_GET["id"]);
 //Select a database
 $db = $mongoClient->ecommerce;
 $criteria=['_id'=>new MongoDB\BSON\ObjectId($ID),];
 $products = $db->products->find($criteria);
 
 //Select a collection 
 
 
 //Work through the customers
 
 


outputHeader("homepage","product-page");
foreach ($products as $cust){
  echo "<p>";
  echo "Customer name: " . $cust['name'];
  echo " Email: ". $cust['price'] ;
  echo " Email: ".  $cust['description'][0];
  
     
 
 



echo'<div class="product-container">';
echo'               <div class="product-image">';
echo'                <img src="..\assets\images\\' . $cust['path'] .'"alt="">';
echo'               ';
echo'               ';
echo'             </div>';
echo'             <div class="product-details">';
echo'                    <div class="product-description">'. $cust['name'] .'</div>';
echo'                    <div class="product-price">Rs '. $cust['price'] .'</div>';
echo'                    <div class="product-specification">';
echo'                      <p><b>Product Description</b></p>';
echo'                      <ul class="product-list-description">';
                             foreach($cust['description']  as $specs){
                              echo '<li>'. $specs .'</li>';
                             }                     
echo'                      </ul>';
echo'                    </div>';
echo'                    <div  class="cart-btn" onclick="add_to_cart("'. $ID .'")"><a class="cart-button"id='. $ID .'>Add to cart</a> <a>Buy Now</a></div>';
echo'                    ';
echo'                    ';
echo'';
echo'              </div>';
echo'';
echo'      </div>';
echo'   </div>';

 


};
outputFooter("productpage");

?>