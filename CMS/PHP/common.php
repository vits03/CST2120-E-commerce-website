<?php

function outputHeader($page,$title){
  echo'<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>' . $title .'</title>
      <link rel="stylesheet" href="../css/' . $page .'.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!--GOOGLE FONTS-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
  
  
  </head>
  <body>
  
      <div class="navbar">
          <div class="nav">
              
               <div class="logo"><a href="adminviewproducts.php">TabaJ Admin </a></div>
               <div class="right-container">
               <div class="view-product-link"><a href="adminviewproducts.php">View products</a></div>
               <div class="add-product-link"><a href="addproduct.php">Add products</a></div>
               <div class="Customer-order-link"><a href="admincustomerorder.php">Customer Orders</a></div>
               <div class="logout"><a href="../server/logout.php">Log out</a></div>
              </div>
  
          </div>
      </div>
  
  
    <div class="spacer"></div>
     <div class="wrapper">';


}


function outputfooter(){
echo'
    
<!--footer-->
<footer class="padding_4x">
    
   
      <section class="flex-content padding_1x">
        <p>Copyright ©2023 All rights reserved ||  TabaJ 2000</p>
      </section>
    
  </footer>

</body>

<script src="https://kit.fontawesome.com/32d80fb20c.js" crossorigin="anonymous"></script>
</html>';
}



?>