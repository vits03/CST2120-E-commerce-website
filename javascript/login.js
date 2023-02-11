async function verifyLogin() {
    var username = document.getElementById("username");
    var password = document.getElementById("password");
  
    try {
        const response = await $.ajax({
            type: "POST",
            url: "../server/verifyLogin.php",
            data: {
                username: username.value,
                password: password.value
            }
        });
        const data = JSON.parse(response);
        if (data.message === true) {
            window.location.href = "homepage.php";
        } else {
            alert("Invalid Username/Password. Please Try Again.");
        }
    } catch (error) {
        alert("Error: Try Again Later.");
    }
  }
  