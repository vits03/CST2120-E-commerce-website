<?php

include('common.php');
outputHeader('customerorderdetails','TabaJ-Admin');



echo' <!--INSERT ALL CONTENT HERE-->
<div class="product-detail">
    <p>Order details</p>
    <h3>OrderID  <span class="orderid"></span> </h3>
    <table>
      <thead>
        <tr>
          <th>ProductID</th> 
          <th>CustomerID</th>
          <th >Product</th>
          <th >quanity</th>
          <th >Unit price</th>
          <th >Total price</th>
        </tr>
      </thead>

      <tbody id="table-body">

      <tbody>
      



 <tr>
 <td></td>
 <td></td>
  <td > </td>
  <td ></td>
  <td ><b>Total:</b></td>
 <td id="total-price"class="Total price"></td>
</tr>
    </table>
  </div>
  <script src="..\javascript\customerorderdetails.js"></script>
</div>
';

outputFooter();
?>