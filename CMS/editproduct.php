<?php
include('common.php');
outputHeader('editproduct','TabaJ-Admin');


echo' <!--INSERT ALL CONTENT HERE-->
<div class="addproduct-addition-container">
   <div class="addproducts-container">
      
       <div class="add-product"> 
           <form action="/action_category.php"><p>Edit a product</p>
             <label for="fname" class="block">Product name</label>
             <textarea id="productname" name="productname" rows="4" cols="50">Nintendo Switch – OLED Model w/ Neon Red & Neon Blue Joy-Con</textarea><br><br>
             

             <label for="fname" class="block">Product Description</label>
             <textarea id="description" name="Description" rows="4" cols="50">7-inch OLED screen - Enjoy vivid colors and crisp contrast with a screen that makes colors pop
               Wired LAN port - Use the dock’s LAN port when playing in TV mode for a wired internet connection
               64 GB internal storage - Save games to your system with 64 GB of internal storage
               Enhanced audio – Enjoy enhanced sound from the system’s onboard speakers when playing in Handheld and Tabletop modes.
               Wide adjustable stand – Freely angle the system’s wide, adjustable stand for comfortable viewing in Tabletop mode. Nintendo Switch – OLED Model supports all Joy-Con controllers and Nintendo Switch software</textarea><br><br>
            
             <label for="fname" class="block">Price</label>
             <textarea id="price" name="Description" rows="4" cols="50">Rs 45,000</textarea><br><br>
                 
             <label for="fname" class="block">Quantity</label>
             <textarea id="description" name="Description" rows="4" cols="50">1</textarea><br><br>
              <p>Choose a category</p>
              <input type="radio" checked="checked" id="category1" name="category" value="mobile">
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