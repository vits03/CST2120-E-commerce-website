<?php
 include('common.php');



outputHeader("homepage","signup");


?>

<div class="main-content">
        <div class="cover"></div>
        <div class="signup-container">
            <div class="company-logo">
                <img src="..\assets\images\temp-logo.png" alt="">
            </div>
            <div class="container1">
                <h4>Create your account</h4>
            </div>
            <form onsubmit="return validateSignUpForm()" action="login.html">
                <div class="personal-details-title">
                    <h2>Personal Details</h2>
                </div>
                <div class="input-half">
                    <div class="input-container">
                        <input class="effect-21" type="text" id="firstName" placeholder="First Name" required>
                          <span class="focus-border">
                            <i></i>
                          </span>
                    </div>
                    <div class="input-container">
                        <input class="effect-21" type="text" id="lastName" placeholder="Last Name" required>
                          <span class="focus-border">
                            <i></i>
                          </span>
                    </div>
                </div>
                <div class="input-container1">
                    <input class="effect-21" type="text" id="username" placeholder="Username" required>
                      <span class="focus-border">
                        <i></i>
                      </span>
                </div>
                <div class="input-container1">
                    <input class="effect-21" type="email" id="email" placeholder="Email Address" required>
                      <span class="focus-border">
                        <i></i>
                      </span>
                </div>
                <div class="input-half">
                    <div class="input-container">
                        <input class="effect-21" type="tel" id="phone" pattern="[0-9]" placeholder="Phone" required>
                          <span class="focus-border">
                            <i></i>
                          </span>
                    </div>
                    <div class="input-container">
                        <input class="effect-21" type="date" id="date" placeholder="Date of Birth" required>
                          <span class="focus-border">
                            <i></i>
                          </span>
                    </div>
                </div>
                <div class="input-container1">
                  <input class="effect-21" type="password" id="password1" placeholder="Password" required>
                    <span class="focus-border">
                      <i></i>
                    </span>
                </div>
                <div class="input-container1">
                  <input class="effect-21" type="password" id="password2" placeholder="Confirm Password" required>
                    <span class="focus-border">
                      <i></i>
                    </span>
                </div>

                <div class="button">
                    <button class="button-58" role="button" type="submit">Sign Up</button>
                  </div>
                  <div class="container3">
                    <h5>Already have an account? <a href="login.html">Sign In</a></h5>
                  </div>
                
            </form>
        </div>
    </div>
    <script src="..\javascript\signup.js"></script>
        </div>
    


</div>


<?php
 
outputFooter();

?>