<?php
include('common.php');
outputHeader('editproduct','TabaJ-Admin');


echo'<!--INSERT ALL CONTENT HERE-->
<div class="addproduct-addition-container">
   <div class="addproducts-container">
      
       <div class="add-product"> 
           <form><p>Add a product</p>

             <label for="fname" class="block">Product name</label>
             <textarea id="productname" rows="4" cols="50" type="text" required></textarea><br><br>
             

             <label for="fname" class="block">Product Description</label>
             <textarea id="description" rows="4" cols="50" type="text" required></textarea><br><br>
            
             <label for="fname" class="block">Price</label>
             <textarea id="price"rows="2" cols="50" type="number" min"0" max="9999999"required></textarea><br><br>
                 
             <label for="fname" class="block">Quantity</label>
             <textarea id="quantity" rows="2" cols="50" type="number" min="0" max="9999"required></textarea><br><br>


              <p>Choose a category</p>

              <input type="radio" id="category1" name="category" value="Mobile Phones">
              <label for="category1">Mobile Phones</label><br>

              <input type="radio" id="category1" name="category" value="Tablets">
              <label for="category2">Tablets</label><br>  

              <input type="radio" id="category1" name="category" value="Monitors">
              <label for="category3">Monitors</label><br>

              <input type="radio" id="category1" name="category" value="Wireless Earbuds">
              <label for="category3">Wireless earbuds</label><br>

              <input type="radio" id="category1" name="category" value="Televisions">
              <label for="category3">Televisions</label><br><br><br>

              <input type="file" id="image" name="image">

             <input type="submit" value="Submit">
            
             
           </form></div>
   </div>
</div>


<script src="..\javascript\editproduct.js"></script>
</div>

';


outputFooter();
?>