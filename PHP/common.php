<?php


function outputHeader($title,$page){

  //start the session
  session_start();

    echo'
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . $title . '</title>
   <link rel="stylesheet" href="../css/' . $page .'.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 


</head>

<body>
    <div class="navbar">
        <div class="nav">
             <div class="logo"><a href="homepage.php">Taba-J 2000</a></div>
             <div class="searchbar  searchbarhover">
               
              <input type="text" placeholder="Search bar" id="searchbar-input" name="fname">   
              <div class="dropdown-content-search">
                <a href="#">Link 1</a>
                <a href="#">kkLik2</a>
                <a href="#">Link 3</a>
              </div>
  
             </div>
             <div class="right-container">';
             if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {
              echo '<div class="login"><a href="login.php">Log In</a></div>';
             }
             
             echo '<div class="cart"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></div>';

             if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
              echo '<div class="dropdown">
              <button class="dropbtn">            <i id="user" class="fa-solid fa-user"></i>
              </button>
              <div class="dropdown-content">
                <a href="userdetails.php">Account Details</a>
                <a href="orderhistory.php">Order History</a>
                <a href="../server/logout.php">Log Out</a>
              </div>';
             }

             
echo '</div>
            </div>
        </div>
    </div>

   <div class="wrapper">
    ';
}


function outputFooter($page){
   echo ' 

    <!--footer-->
    <footer class="padding_4x">
        <div class="flex">
          <section class="flex-content padding_1x">
            <h3>Useful Links</h3>
            <a href="#">Terms of service</a>
            <a href="#">Refund Policy</a>
            <a href="#">Shipping Policy</a>
            <a href="#">Marketing Service</a>
          </section>
          <section class="flex-content padding_1x">
            <h3>Quick Links</h3>
            <a href="#">Jobs</a>
            <a href="#">Brand Assets</a>
            <a href="#">Investor Relations</a>
            <a href="#">Terms of Service</a>
          </section>
          <section class="flex-content padding_1x">
            <h3>Features</h3>
            <a href="#">Jobs</a>
            <a href="#">Brand Assets</a>
            <a href="#">Investor Relations</a>
            <a href="#">Terms of Service</a>
          </section>
          <section class="flex-content padding_1x">
            <h3>Resources</h3>
            <a href="#">Guides</a>
            <a href="#">Research</a>
            <a href="#">Experts</a>
            <a href="#">Agencies</a>
          </section>
          
        </div>
        <div class="flex">
          <section class="flex-content padding_1x">
            <p>Copyright ??2023 All rights reserved || website name</p>
          </section>
          <section class="flex-content padding_1x">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
          </section>
        </div>
      </footer>
    
    </body>
    
    <script src="https://kit.fontawesome.com/32d80fb20c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="search.js"></script>
    ';
    if ($page == "homepage"){
      echo' <script src="..\javascript\main.js"></script>
       <script src="..\javascript\tracker.js"></script>
   ';}
    elseif($page == 'userdetails'){
      echo' <script src="..\javascript\userdetails.js"></script>';
    }
    elseif($page == 'productpage'){
      echo' <script src="..\javascript\productpage.js"></script>';
    }
    elseif($page == 'cart'){
      echo' <script src="..\javascript\cart.js"></script>';
     echo'<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>';
    }
    elseif($page == 'checkout'){
      echo' <script src="..\javascript\checkout.js"></script>';
    }
   echo ' </html>';
;


}
