<?php
 include('common.php');
 outputHeader("checkout","checkout");

 if (!isset($_SESSION['username'])) {
  header("Location: login.php");
} else {
  echo '
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
                          
                      </div>
                  </div>
                  <form action="">
                    <div class="input-parent">
                      <input class="effect-20" id="email" type="email" placeholder="Email Address">
                        <span class="focus-border">
                          <i></i>
                        </span>
                  </div>
                  <div class="container1">
                      <h2>Shipping Address</h2>
                  </div>
                  
                  <div class="input-wrapper">
                      <div class="input-parent-half">
                        <input class="effect-20"  id="fname" type="text" placeholder="First Name">
                          <span class="focus-border">
                            <i></i>
                          </span>
                      </div>
                      <div class="input-parent-half">
                        <input class="effect-20" id="lname" type="text" placeholder="Last Name">
                          <span class="focus-border">
                            <i></i>
                          </span>
                      </div>
                    </div>
                    <div class="input-parent">
                      <input class="effect-20" id="address" type="text" placeholder="Address">
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
                        <button class="button-82-pushable" role="button" id="checkout-btn" onclick="openModal()">
                          <span class="button-82-shadow"></span>
                          <span class="button-82-edge"></span>
                          <span class="button-82-front text">
                          checkout
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
                      
                        <!-- Item 2 -->
                      
                        <!-- Item 3 -->
                        
                        <!-- Item 4 -->
                      
                    </div>

                    <!-- Display total of products -->
                    <div class="total">
                        <div class="subtotal">
                            <h4>Subtotal</h4>
                        </div>
                        <div class="total-price subtotalprice">
                            <h4></h4>
                        </div>
                    </div>
                    <div class="total">
                        <div class="subtotal">
                            <h4>Shipping</h4>
                        </div>
                        <div class="total-price shippingprice">
                            <h4></h4>
                        </div>
                    </div>
                    <hr class="solid">
                    <div class="total">
                        <div class="subtotal">
                            <h2>Total</h2>
                        </div>
                        <div class="total-price ">
                            <h2 class="totalprice"></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>';


  

}
outputFooter('checkout');

?>