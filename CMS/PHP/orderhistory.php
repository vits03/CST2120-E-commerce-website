<?php

// Start the session
session_start();

 include('common.php');


 require __DIR__ . '/vendor/autoload.php';
 $mongoClient = new \MongoDB\Client("mongodb://localhost:27017");
 
 
 
  
 //Create instance of MongoDB client
  $ID = $_SESSION['id'];
 //Select a database
 $db = $mongoClient->ecommerce;
 $criteria=['customerID'=>new MongoDB\BSON\ObjectId($ID),];
 $orders = $db->orders->find($criteria);
 
 //Select a collection 
 
 
 //Work through the customers
 
 




 
outputHeader("homepage","order_history");


echo'

<!--INSERT ALL CONTENT HERE-->
<div class="order-history">
         <h2>Order history</h2>
          <div class="orders-container">
            <h3>Your orders</h3>
            <div class="orders">
              <table>
                <tr>
                  <th>Order Reference</th>
                  <th>Date</th>
                  <th>Total Price</th>
                  <th>Payment</th>
                </tr>';
                foreach ($orders as $order){
                  echo'<tr>
                  <td>'. $order['orderid'] .'</td>
                  <td>'. $order['dateplaced']->toDateTime()->format("d M Y") .'</td>
                  <td>' . $order['totalprice'] .'</td>
                  <td><div class="view-container">Cash On Delivery (C.O.D)<a class="view-btn"href="order_details.php?id=' . $order['_id'] . '">View</a> </div></td>
                </tr>';
                }
                  echo'
              </table> 
            </div>
          </div>
        </div>
        </div>
    


</div>
';


 
outputFooter('orderhistory');

?>