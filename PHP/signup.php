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
            <form action="login.html">
                <div class="personal-details-title">
                    <h2>Personal Details</h2>
                </div>
                <div class="input-half">
                    <div class="input-container">
                        <input class="effect-21" type="text" placeholder="First Name">
                          <span class="focus-border">
                            <i></i>
                          </span>
                    </div>
                    <div class="input-container">
                        <input class="effect-21" type="text" placeholder="Last Name">
                          <span class="focus-border">
                            <i></i>
                          </span>
                    </div>
                </div>
                <div class="input-container1">
                    <input class="effect-21" type="email" placeholder="Email Address">
                      <span class="focus-border">
                        <i></i>
                      </span>
                </div>
                <div class="input-half">
                    <div class="input-container">
                        <input class="effect-21" type="text" placeholder="Phone">
                          <span class="focus-border">
                            <i></i>
                          </span>
                    </div>
                    <div class="input-container">
                        <input class="effect-21" type="date" placeholder="Date of Birth">
                          <span class="focus-border">
                            <i></i>
                          </span>
                    </div>
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
    
        </div>
    


</div>


<?php
 
outputFooter("signup");

?>