<?php
 include('common.php');



outputHeader("homepage","order_details");


?>

  <!--INSERT ALL CONTENT HERE-->
  <div class="order-details">
            <h1>Order details</h1>
            <div class="ref-date-detail"> <div class="ref-detail"><span> Order Reference: </span>
              <span class="ref-num">#A3DUI98</span>
            </div> 
            <div class="date-detail">
              <span>Order placed on:</span>
              <span class="date-num">12/12/2022</span>
            </div>
          </div>
            <div class="payment-detail"><span>Payment method:</span><span class="payment-type">Cash On Delivery (C.O.D)</span></div>
            <div class="address-detail"><p class="del-header">Delivery Address</p>
           <p class="delivery-name">Prakass Sookdev</p>
           <p class="delivery-address">Royal Road,chemin endans</p>
           <p class="delivery-postalcode">69420</p>
           <p class="delivery-country">Mauritius</p>
           <p class="delivery-phonenumber">59394434</p></div>
            <div class="product-detail">
              <table>
                <tr>
                  <th >Product</th>
                  <th >quanity</th>
                  <th >Unit price</th>
                  <th >Total price</th>
                </tr>
                <tr>
                   <td class="product">IR Obstacle Avoidance infrared Sensor Module </td>
                   <td class="quanity">2</td>
                   <td class="unit-price">Rs 50</td>
                  <td class="Total price">Rs 100</td>
                </tr>

                <tr>
                  <td class="product">IR Obstacle Avoidance infrared Sensor Module </td>
                  <td class="quanity">2</td>
                  <td class="unit-price">Rs 50</td>
                 <td class="Total price">Rs 100</td>
               </tr>


               <tr>
                <td class="product">IR Obstacle Avoidance infrared Sensor Module </td>
                <td class="quanity">2</td>
                <td class="unit-price">Rs 50</td>
               <td class="Total price">Rs 100</td>
             </tr>


             <tr>
              <td class="product">Ultrasonic Ranging module HC-SR04 - 5V </td>
              <td class="quanity">2</td>
              <td class="unit-price">Rs 50</td>
             <td class="Total price">Rs 100</td>
           </tr>


           <tr>
            <td class="product">Ultrasonic Ranging module HC-SR04 - 5V </td>
            <td class="quanity">2</td>
            <td class="unit-price">Rs 50</td>
           <td class="Total price">Rs 100</td>
         </tr>

           <tr>
            <td > </td>
            <td ></td>
            <td ><b>Total:</b></td>
           <td class="Total price">Rs 500</td>
         </tr>
              </table>
            </div>
          </div>
        </div>
    


</div>


<?php
 
outputFooter("orderdetails");

?>