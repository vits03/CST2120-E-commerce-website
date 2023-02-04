<?php
 include('common.php');



outputHeader("homepage","product-page");


?>

<div class="product-container">
               
               <div class="product-image">
                <img src="..\assets\images\nintendo.jpg" alt="">
               
               
             </div>
             <div class="product-details">
                    <div class="product-description">Nintendo Switch – OLED Model w/ Neon Red & Neon Blue Joy-Con </div>
                    <div class="product-price">Rs 45,000</div>
                    <div class="product-specification">
                      <p><b>Product Description</b></p>
                      <ul class="product-list-description">
                        <li>7-inch OLED screen - Enjoy vivid colors and crisp contrast with a screen that makes colors pop </li>
                        <li>Wired LAN port - Use the dock’s LAN port when playing in TV mode for a wired internet connection </li>
                        <li>64 GB internal storage - Save games to your system with 64 GB of internal storage</li>
                        <li>Enhanced audio – Enjoy enhanced sound from the system’s onboard speakers when playing in Handheld and Tabletop modes. </li>
                        <li>Wide adjustable stand – Freely angle the system’s wide, adjustable stand for comfortable viewing in Tabletop mode. Nintendo Switch – OLED Model supports all Joy-Con controllers and Nintendo Switch software</li>
                      </ul>
                    </div>
                    <div class="cart-btn"><a href="cart.php">Add to cart</a> <a href="checkout.php">Buy Now</a></div>
                    
                    

              </div>

      </div>
      <div class="product-review">
          <p>Product Review</p>
        <iframe width="1046" height="523" src="https://www.youtube.com/embed/Chy9V9uY2eQ" title="Nintendo nailed it. - Nintendo Switch OLED" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
   </div>
  
 


<?php
 
outputFooter("productpage");

?>