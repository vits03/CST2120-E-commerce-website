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
            <form name="login-form" action="homepage.html" onsubmit="return validateLoginForm()">
              <div class="input-container">
                <input class="effect-21" type="text" id="username" placeholder="Username" required>
                  <span class="focus-border">
                    <i></i>
                  </span>
              </div>
              <div class="container2">
                <a href="">Forgot Password?</a>
              </div>
              <div class="input-container">
                <input class="effect-21" type="password" id="password" placeholder="Password">
                  <span class="focus-border">
                    <i></i>
                  </span>
              </div>
      
              <div class="button">
                <button class="button-58" role="button" type="submit">Sign In</button>
              </div>
              <div class="container3">
                <h5>Don't have an account? <a href="signup.html">Sign Up</a></h5>
              </div>
            </form>
            
          </div>
        </div>
      </body>
        </div>
        <script src="..\javascript\login.js"></script>
    


</div>


<?php
 
outputFooter();

?>