<?php
 include('common.php');



outputHeader("homepage","login");


?>

 <!--INSERT ALL CONTENT HERE-->
 <div class="main-content">
          <div class="login-container">
            <div class="company-logo">
              <img src="..\assets\images\temp-logo.png" alt="">
            </div>
            <div class="container1">
              <h4>Access to your account</h4>
            </div>
            <form action="homepage.html">
              <div class="input-container">
                <input class="effect-21" type="text" placeholder="Email Address">
                  <span class="focus-border">
                    <i></i>
                  </span>
              </div>
              <div class="container2">
                <a href="">Forgot Password?</a>
              </div>
              <div class="input-container">
                <input class="effect-21" type="password" placeholder="Password">
                  <span class="focus-border">
                    <i></i>
                  </span>
              </div>
      
              <div class="button">
                <button class="button-58" role="button" type="submit">Sign In</button>
              </div>
              <div class="container3">
                <h5>Don't have an account? <a href="signup.php">Sign Up</a></h5>
              </div>
            </form>
            
          </div>
        </div>
      </body>
        </div>
    


</div>


<?php
 
outputFooter("login");

?>