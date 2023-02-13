<?php

echo'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Taba-J Admin</title>

    <!-- CSS Link -->
    <link rel="stylesheet" href="..\css\adminlogin.css">
    
</head>
<body>
    <div class="main-content">
        <div class="cover"></div>
        <div class="login-container">
            <div class="login-heading">
                <h1>Taba-J Admin</h1>
            </div>
            <div class="login-input">
                <div class="input-container">
                    <input class="effect-21" type="text" placeholder="User ID">
                      <span class="focus-border">
                        <i></i>
                      </span>
                  </div>

                <div class="input-container">
                    <input class="effect-21" type="password" placeholder="Password">
                      <span class="focus-border">
                        <i></i>
                      </span>
                </div>

                <a href="adminviewproducts.php">
                    <div class="button">
                        <button class="button-58" role="button" type="submit">Sign In</button>
                    </div>
                </a>
                
            </div>
        </div>
    </div>
</body>
</html>';
?>