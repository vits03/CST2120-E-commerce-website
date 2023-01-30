<?php
 include('common.php');



outputHeader("homepage","checkout");


?>

<div class="main-content">
            <div class="contact-info">
                <div class="company-logo">
                    <img src="..\assets\images\temp-logo.png">
                </div>
                <div class="contact-details">
                    <div class="container1">
                        <h2>Contact Information</h2>
                    </div>
                    <div class="container2">
                        <span>Already have an account? <a href="login.html">Log In</a></span>
                    </div>
                </div>
                <form action="">
                  <div class="input-parent">
                    <input class="effect-20" type="email" placeholder="Email Address">
                      <span class="focus-border">
                        <i></i>
                      </span>
                </div>
                <div class="container1">
                    <h2>Shipping Address</h2>
                </div>
                <div class="input-parent">
                    <input class="effect-20" type="text" placeholder="Country">
                      <span class="focus-border">
                        <i></i>
                      </span>
                </div>
                <div class="input-wrapper">
                    <div class="input-parent-half">
                      <input class="effect-20" type="text" placeholder="First Name">
                        <span class="focus-border">
                          <i></i>
                        </span>
                    </div>
                    <div class="input-parent-half">
                      <input class="effect-20" type="text" placeholder="Last Name">
                        <span class="focus-border">
                          <i></i>
                        </span>
                    </div>
                  </div>
                  <div class="input-parent">
                    <input class="effect-20" type="text" placeholder="Address">
                      <span class="focus-border">
                        <i></i>
                      </span>
                  </div>
                  <div class="input-wrapper">
                    <div class="input-parent-half">
                      <input class="effect-20" type="text" placeholder="City">
                        <span class="focus-border">
                          <i></i>
                        </span>
                    </div>
                    <div class="input-parent-half">
                      <input class="effect-20" type="text" placeholder="Postal Code">
                        <span class="focus-border">
                          <i></i>
                        </span>
                    </div>
                  </div>
                  <div class="input-parent">
                    <input class="effect-20" type="tel" placeholder="Phone">
                      <span class="focus-border">
                        <i></i>
                      </span>
                  </div>
                </form>
                
                  <div class="input-parent">
                      <div class="checkbox-wrapper-14">
                          <input id="s1-14" type="checkbox" class="switch" >
                          <label for="s1-14">Save this information for next time</label>
                      </div>
                  </div>
                  <div class="button-container">
                    <div class="return-cart">
                        <a href="cart.php"><strong>Return to cart</strong></a>
                    </div>
                    <div class="continue">
                      <button class="button-82-pushable" role="button" onclick="openModal()">
                        <span class="button-82-shadow"></span>
                        <span class="button-82-edge"></span>
                        <span class="button-82-front text">
                          Continue to shipping
                        </span>
                    </button>
                        
                    </div>
                </div>
            </div>

            
            <!-- Modal -->
            <div id="demo-modal" class="modal">
              <div class="modal__content">
                <div class="animation">
                  <img src="..\assets\images\confirmed-order.gif">
              </div>
              <div class="message">
                <h3>Your order has been received!</h3>
              </div>       
                  <a href="#" class="modal__close" onclick="closeModal()">
                    <span class="material-symbols-outlined">
                      close
                      </span>
                  </a>
              </div>
          </div>

            <!-- Items in Checkout -->
            <div class="checkout-details">
              <!-- Items -->
                <div class="items">
                  <!-- Item 1 -->
                    <div class="item-detail">
                        <div class="product-photo">
                            <img src="..\assets\images\tv.png" alt="">
                        </div>
                        <div class="product-desc">
                            <h4>Samsung 43" UHD Smart TV</h4>
                        </div>
                        <div class="product-price">
                            <h4>Rs 75,000</h4>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="item-detail">
                        <div class="product-photo">
                            <img src="..\assets\images\phone1.png" alt="">
                        </div>
                        <div class="product-desc">
                            <h4>Apple Iphone 13 Pro Max</h4>
                        </div>
                        <div class="product-price">
                            <h4>Rs 65,490</h4>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="item-detail">
                        <div class="product-photo">
                            <img src="..\assets\images\vacuum-cleaner.png" alt="">
                        </div>
                        <div class="product-desc">
                            <h4>Candy Vacuum Cleaner 2000W</h4>
                        </div>
                        <div class="product-price">
                            <h4>Rs 3,990</h4>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="item-detail">
                        <div class="product-photo">
                            <img src="..\assets\images\phone2.png" alt="">
                        </div>
                        <div class="product-desc">
                            <h4>Huawei P50 Pro</h4>
                        </div>
                        <div class="product-price">
                            <h4>Rs 52,990</h4>
                        </div>
                    </div>
                </div>

                <!-- Display total of products -->
                <div class="total">
                    <div class="subtotal">
                        <h4>Subtotal</h4>
                    </div>
                    <div class="total-price">
                        <h4>Rs 197,470</h4>
                    </div>
                </div>
                <div class="total">
                    <div class="subtotal">
                        <h4>Shipping</h4>
                    </div>
                    <div class="total-price">
                        <h4>Rs 32,960</h4>
                    </div>
                </div>
                <hr class="solid">
                <div class="total">
                    <div class="subtotal">
                        <h2>Total</h2>
                    </div>
                    <div class="total-price">
                        <h2>Rs 230,430</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
 
outputFooter();

?>