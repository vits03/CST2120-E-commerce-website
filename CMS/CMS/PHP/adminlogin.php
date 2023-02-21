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

        <div class="cover"></div>
        <div class="login-container">
            <div class="login-heading">
                <h1>Taba-J Admin</h1>
            </div>
            <form id="login-form" onsubmit="return verifyLogin(event)">
                <div class="login-input">
                    <div class="input-container">
                        <input class="effect-21" type="text" id="username" placeholder="User ID" required>
                        <span class="focus-border">
                            <i></i>
                        </span>
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
                    
                </div>
            </form>
        </div>
    </div>
    <script src="..\javascript\adminlogin.js"></script>
</body>
</html>';
?>