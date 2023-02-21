<?php
 include('common.php');



outputHeader("homepage","login");


?>

 <!--INSERT ALL CONTENT HERE-->
 <div class="main-content">

          <!-- Modal -->
          <div id="demo-modal" class="modal">
            <div class="modal__content">
              <div class="message">
                <h3 id="content-modal"><strong>Login Failed</strong>
                <br><br>Invalid Username/Password. Please Try Again</h3>
              </div>       
              <a href="#" class="modal__close" onclick="closeModal()">
                <span class="material-symbols-outlined">
                  close
                </span>
              </a>
            </div>
          </div>

          <div class="login-container">
            <div class="company-logo">
              <img src="..\assets\images\temp-logo.png" alt="">
            </div>
            <div class="container1">
              <h4>Access to your account</h4>
            </div>
            <form name="login-form" id="login-form" onsubmit="return verifyLogin(event)">
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
                <input class="effect-21" type="password" id="password" placeholder="Password" required>
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
        <script src="..\javascript\login.js"></script>
    


</div>


<?php
 
outputFooter("login");

?>
