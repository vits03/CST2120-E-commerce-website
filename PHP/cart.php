<?php
 include('common.php');



outputHeader("homepage","cart");


?>


<div class="page-title">
        <h1>Shopping Cart</h1>
        <a href="homepage.php"><strong> Continue shopping</strong></a>
    </div>

    <div class="cart-content">
        <!-- Cart List -->
        <div class="cart-container">
            <!-- Item 1 -->
            <div class="cart-item">
                <div class="product-image">
                    <img src="..\assets\images\tv.png">
                </div>
                <div class="product-name">Samsung 43" UHD Smart TV</div>
                <div class="product-price">Rs 75,000</div>
                <div class="product-qty">
                    <input type="number" id=prod-qty min="1" max="10">
                </div>
                <div class="product-delete">
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_pdepdwwd.json"
                    background="transparent"
                    speed="1"
                    style="width: 50px; height: 50px;"
                    hover></lottie-player>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="cart-item">
                <div class="product-image">
                    <img src="..\assets\images\phone1.png">
                </div>
                <div class="product-name">Apple Iphone 13 Pro Max</div>
                <div class="product-price">Rs 65,490</div>
                <div class="product-qty">
                    <input type="number" id=prod-qty min="1" max="10">
                </div>
                <div class="product-delete">
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_pdepdwwd.json"
                    background="transparent"
                    speed="1"
                    style="width: 50px; height: 50px;"
                    hover></lottie-player>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="cart-item">
                <div class="product-image">
                    <img src="..\assets\images\vacuum-cleaner.png">
                </div>
                <div class="product-name">Candy Vacuum Cleaner 2000W</div>
                <div class="product-price">Rs 3,990</div>
                <div class="product-qty">
                    <input type="number" id=prod-qty min="1" max="10">
                </div>
                <div class="product-delete">
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_pdepdwwd.json"
                    background="transparent"
                    speed="1"
                    style="width: 50px; height: 50px;"
                    hover></lottie-player>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="cart-item">
                <div class="product-image">
                    <img src="..\assets\images\phone2.png">
                </div>
                <div class="product-name">Huawei P50 Pro</div>
                <div class="product-price">Rs 52,990</div>
                <div class="product-qty">
                    <input type="number" id=prod-qty min="1" max="10">
                </div>
                <div class="product-delete">
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_pdepdwwd.json"
                    background="transparent"
                    speed="1"
                    style="width: 50px; height: 50px;"
                    hover></lottie-player>
                </div>
            </div>
            
        </div>
    
        <!-- Price List -->
        <div class="price-container">
            <div class="total-content">
                <div class="total">
                    <div class="subtotal">Subtotal (4 Items)</div>
                    <div class="price">Rs 197,470</div>
                </div>
                <div class="total">
                    <div class="subtotal">Estimated Shipping</div>
                    <div class="price">Rs 32,960</div>
                </div>
                <hr class="solid">
                <div class="total">
                    <div class="subtotal"><h3>Total</h3></div>
                    <div class="price"><h3>Rs 230,430</h3></div>
                </div>
                <!-- Proceed to Checkout Button -->
                <a href="checkout.php">
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

<?php
 
outputFooter();

?>