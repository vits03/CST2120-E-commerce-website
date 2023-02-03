<?php
 include('common.php');



outputHeader("homepage","order_history");


?>

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
                </tr>
                <tr>
                  <td>#GH764JK</td>
                  <td>12/12/2022</td>
                  <td>Rs2300</td>
                  <td><div class="view-container">Cash On Delivery (C.O.D)<a class="view-btn"href="order_details.php">View</a> </div></td>
                </tr>
                <tr>
                  <td>#Y67UI98</td>
                  <td>16/10/2021</td>
                  <td>Rs7865</td>
                  <td><div class="view-container">Cash On Delivery (C.O.D) <a class="view-btn"href="order_details.php">View</a> </div></td>
                </tr>
                <tr>
                  <td>#A3DUI98</td>
                  <td>12/11/2021</td>
                  <td>Rs312</td>
                  <td><div class="view-container">Cash On Delivery (C.O.D) <a class="view-btn"href="order_details.php">View</a> </div></td>
                </tr>
              </table> 
            </div>
          </div>
        </div>
        </div>
    


</div>


<?php
 
outputFooter();

?>