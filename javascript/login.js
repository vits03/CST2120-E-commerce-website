let username = document.getElementById("username");
let password = document.getElementById("password");
  

function verifyLogin(event) {
    event.preventDefault();

    sendRequest();
    return false;
}
  
function sendRequest() {
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "../server/verifyLogin.php", true);

    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    let data = "username=" + username.value +
    "&password=" + password.value;

    xhr.send(data);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            let response = JSON.parse(xhr.responseText);
            
            if (response.isAuthorised) {
                window.location.href = "homepage.php";
            } else {
                alert("Invalid Username/Password.Please Try Again");
            }
        }
    };
}