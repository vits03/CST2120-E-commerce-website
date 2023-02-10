<?php

include('common.php');


outputHeader('addproduct','TabaJ-Admin');


echo'<!--INSERT ALL CONTENT HERE-->
<div class="addproduct-addition-container">
   <div class="addproducts-container">
      
       <div class="add-product"> 
           <form action="/action_category.php"><p>Add a product</p>
             <label for="fname" class="block">Product name</label>
             <textarea id="productname" name="productname" rows="4" cols="50"></textarea><br><br>
             

             <label for="fname" class="block">Product Description</label>
             <textarea id="description" name="Description" rows="4" cols="50"></textarea><br><br>
            
             <label for="fname" class="block">Price</label>
             <textarea id="price" name="Description" rows="4" cols="50"></textarea><br><br>
                 
             <label for="fname" class="block">Quantity</label>
             <textarea id="description" name="Description" rows="4" cols="50"></textarea><br><br>
              <p>Choose a category</p>
              <input type="radio" id="category1" name="category" value="mobile">
                <label for="category1">Mobile Phones</label><br>
              <input type="radio" id="category2" name="category" value="60">
              <label for="category2">Tablets</label><br>  
               <input type="radio" id="category3" name="category" value="100">
              <label for="category3">Monitors</label><br>
                 <input type="radio" id="category3" name="category" value="100">
                
                 <label for="category3">Wireless earbuds</label>
            <br>
             <input type="submit" value="Submit">
            
             
           </form></div>
   </div>
</div>



</div>

';


outputFooter();
?>


