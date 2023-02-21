<?php
 include('common.php');



outputHeader("homepage","cart");


echo'


<div class="page-title">
        <h1>Shopping Cart</h1>
        <a href="homepage.php"><strong> Continue shopping</strong></a>
    </div>

    <div class="cart-content">
        <!-- Cart List -->
        <div class="cart-container">
            <!-- Item 1 -->
           
            
            

           
            
        </div>
    
        <!-- Price List -->
        <div class="price-container">
            <div class="total-content">
                <div class="total">
                    <div class="subtotal">Subtotal (4 Items)</div>
                    <div class="price subtotalprice"></div>
                </div>
                <div class="total">
                    <div class="subtotal">Estimated Shipping</div>
                    <div class="price shippingprice"></div>
                </div>
                <hr class="solid">
                <div class="total">
                    <div class="subtotal"><h3>Total</h3></div>
                    <div class="price"><h3 class="totalprice"></h3></div>
                </div>
                <!-- Proceed to Checkout Button -->
                <a class="checkout-btn" href="checkout.php">
                    <div class="total1">
                        <button class="button-82-pushable" role="button">
                            <span class="button-82-shadow"></span>
                            <span class="button-82-edge"></span>
                            <span class="button-82-front text">
                              Proceed to Checkout
                            </span>
                        </button>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>

';
 
outputFooter("cart");

?>