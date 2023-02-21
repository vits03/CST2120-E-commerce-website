<?php


if (isset($_SESSION['username'])) {
  include('common.php');

  require __DIR__ . '/vendor/autoload.php';
 $mongoClient = new \MongoDB\Client("mongodb://localhost:27017");
 
 
 
  
 //Create instance of MongoDB client
  $ID= $_GET['id'];
 //Select a database
 $db = $mongoClient->ecommerce;
 $criteria=['_id'=>new MongoDB\BSON\ObjectId($ID),];
 $orders = $db->orders->find($criteria);
 //Select a collection 
 $pcriteria=['_id'=>new MongoDB\BSON\ObjectId($ID),'products'=>1,];
 $products=$db->products->find($criteria);
 //$pdetails=$db->products.find(array("_id"=>))
 //Work through the customers
 //echo $products;
 //foreach ($products as $product){
 // foreach( $product['products'] as $pid){
 ///   echo $pid['productid'];
  //};
//};

 



 
 
outputHeader("homepage","order_details");

foreach ($orders as $order){
  



echo'
  <!--INSERT ALL CONTENT HERE-->
  <div class="order-details">
            <h1>Order details</h1>
            <div class="ref-date-detail"> <div class="ref-detail"><span> Order Reference: </span>
              <span class="ref-num">'. $order['orderid'] . '</span>
            </div> 
            <div class="date-detail">
              <span>Order placed on:</span>
              <span class="date-num">'. $order['dateplaced']->toDateTime()->format("d M Y") .'</span>
            </div>
          </div>
            <div class="payment-detail"><span>Payment method:</span><span class="payment-type">Cash On Delivery (C.O.D)</span></div>
            <div class="address-detail"><p class="del-header">Delivery Address</p>';
            $uid= $order['customerID'];
            $usercriteria=['_id'=>new MongoDB\BSON\ObjectId($uid,)];
            $user = $db->users->findOne($usercriteria);
            
            echo'
     
           <p class="delivery-name">' . $user['name'] .'</p>
           <p class="delivery-address">' . $user['address'] .'</p>
        
           <p class="delivery-country">' . $user['country'] .'</p>
           <p class="delivery-phonenumber">' . $user['telephonenum'] .'</p></div>
            <div class="product-detail">
              <table>
                <tr>
                  <th >Product</th>
                  <th >quanity</th>
                  <th >Unit price</th>
                  <th >Total price</th>
                </tr>';
                foreach ($order['products'] as $product){
                  $pid=$product['productid'];
      
                  $pcriteria=['_id'=>new MongoDB\BSON\ObjectId($pid),];
                  $products = $db->products->findOne($pcriteria);
                
                    //echo $product['name']; 
                    echo'<tr>
                   <td class="product">' . $products['name'] . '</td>
                   <td class="quanity">' . $products['quantity'] . '</td>';
                   
                 
                  echo '  
                   <td class="unit-price">Rs ' . $products['price'] . '</td>
                  <td class="Total price">' . $products['quantity']*$products['price'] . '</td>
                </tr>';
                  
                };
               
            echo'
           <tr>
            <td > </td>
            <td ></td>
            <td ><b>Total:</b></td>
           <td class="Total price">' . $order['totalprice'] . '</td>
         </tr>
              </table>
            </div>
          </div>
        </div>
    


</div>


';}
 
outputFooter("orderdetails");

} else {
  header("Location: login.php");
  exit();
}

 
?>