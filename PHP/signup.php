<?php
 include('common.php');



outputHeader("homepage","signup");


?>

<div class="main-content">

        <!-- Modal -->
        <div id="demo-modal" class="modal">
          <div class="modal__content">
            <div class="message">
              <h3 id="content-modal"><strong>Welcome</strong>
              <br><br>Your Account Has Been Created! Thank You For Registering</h3>
            </div>       
            <a href="#" class="modal__close" onclick="closeModal()">
              <span class="material-symbols-outlined">
                close
              </span>
            </a>
          </div>
        </div>

        <div class="cover"></div>
        <div class="signup-container">
            <div class="company-logo">
                <img src="..\assets\images\temp-logo.png" alt="">
            </div>
            <div class="container1">
                <h4>Create your account</h4>
            </div>
            <form id="signup-form" onsubmit="return validateSignUpForm(event)">
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
                <div class="input-half">
                  <div class="error-message-half" id="errorFirstName"></div>
                  <div class="error-message-half" id="errorLastName"></div>
                </div>


                <div class="input-container1">
                    <input class="effect-21" type="text" id="username" placeholder="Username" required>
                      <span class="focus-border">
                        <i></i>
                      </span>
                </div>
                <div class="input-container-1">
                  <div class="error-message" id="errorUsername"></div>
                </div>


                <div class="input-container1">
                    <input class="effect-21" type="email" id="email" placeholder="Email Address" required>
                      <span class="focus-border">
                        <i></i>
                      </span>
                </div>
                <div class="input-container-1">
                  <div class="error-message" id="errorEmail"></div>
                </div>


                <div class="input-half">
                  <div class="input-container">
                    <input class="effect-21" type="tel" id="phone" placeholder="Phone" required>
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
                <div class="input-half">
                  <div class="error-message-half" id="errorPhone"></div>
                  <div class="error-message-half" id="errorDate"></div>
                </div>


                <div class="input-container1">
                  <input class="effect-21" type="password" id="password1" placeholder="Password" required>
                    <span class="focus-border">
                      <i></i>
                    </span>
                </div>
                <div class="input-container-1">
                  <div class="error-message" id="errorPassword1"></div>
                </div>

                <div class="input-container1">
                  <input class="effect-21" type="password" id="password2" placeholder="Confirm Password" required>
                    <span class="focus-border">
                      <i></i>
                    </span>
                </div>
                <div class="input-container-1">
                  <div class="error-message" id="errorPassword2"></div>
                </div>

                <div class="button">
                    <button class="button-58" role="button" type="submit">Sign Up</button>
                  </div>
                  <div class="container3">
                    <h5>Already have an account? <a href="login.php">Sign In</a></h5>
                  </div>
                
            </form>
        </div>
    </div>
    <script src="..\javascript\signup.js"></script>
        </div>
    


</div>


<?php
 
outputFooter("signup");

?>
