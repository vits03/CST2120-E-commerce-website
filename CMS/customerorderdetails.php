<?php

include('common.php');
outputHeader('customerorderdetails','TabaJ-Admin');



echo' <!--INSERT ALL CONTENT HERE-->
<div class="product-detail">
    <p>Order details</p>
    <h3>OrderID  <span class="orderid">#F54HGT6</span> </h3>
    <table>
      <tr>
        <th>ProductID</th> 
        <th>CustomerID</th>
        <th >Product</th>
        <th >quanity</th>
        <th >Unit price</th>
        <th >Total price</th>
      </tr>
      <tr>
          <td class="productid">FJ32JSJ</td>
          <td class="customerid">GJR43J3</td>
         <td class="product">IR Obstacle Avoidance infrared Sensor Module </td>
         <td class="quanity">2</td>
         <td class="unit-price">Rs 50</td>
        <td class="Total price">Rs 100</td>
      </tr>

      <tr>
        <td class="productid">F46JUKJ</td>
        <td class="customerid">GJR43J3</td>
        <td class="product">IR Obstacle Avoidance infrared Sensor Module </td>
        <td class="quanity">2</td>
        <td class="unit-price">Rs 50</td>
       <td class="Total price">Rs 100</td>
     </tr>


     <tr>
        <td class="productid">G67JSJW</td>
        <td class="customerid">GJR43J3</td>
      <td class="product">IR Obstacle Avoidance infrared Sensor Module </td>
      <td class="quanity">2</td>
      <td class="unit-price">Rs 50</td>
     <td class="Total price">Rs 100</td>
   </tr>


   <tr>
    
    
    <td class="productid">FJ89JSJT</td>
    <td class="customerid">GJR43J3</td>
    <td class="product">Ultrasonic Ranging module HC-SR04 - 5V </td>
    <td class="quanity">2</td>
    <td class="unit-price">Rs 50</td>
   <td class="Total price">Rs 100</td>
 </tr>


 <tr>
    <td class="productid">FR45JSAJ</td>
    <td class="customerid">GJR43J3</td>
  <td class="product">Ultrasonic Ranging module HC-SR04 - 5V </td>
  <td class="quanity">2</td>
  <td class="unit-price">Rs 50</td>
 <td class="Total price">Rs 100</td>
</tr>


 <tr>
 <td></td>
 <td></td>
  <td > </td>
  <td ></td>
  <td ><b>Total:</b></td>
 <td class="Total price">Rs 500</td>
</tr>
    </table>
    <div class="delete-order-btn"><a href="#">Delete Order</a></div>
  </div>
</div>
';

outputFooter();
?>