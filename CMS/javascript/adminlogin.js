// Extract data from DOM
let username = document.getElementById("username");
let password = document.getElementById("password");

// Send POST Request to Server-side to check if username in DOM corresponds with username in DB
function verifyLogin(event) {
  event.preventDefault();

  sendRequest();
  return false;
}

// Send POST Request to verifyLogin.php
function sendRequest() {
  let xhr = new XMLHttpRequest();

  xhr.open("POST", "../server/verifyLogin.php", true);

  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  let data = "username=" + username.value + "&password=" + password.value;

  xhr.send(data);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // On Success
      let response = JSON.parse(xhr.responseText);

      if (response.isAuthorised) {
        window.location.href = "adminviewproducts.php";
      } else {
        openModal();
      }
    }
  };
}

// Display Modal
function openModal() {
  document.getElementById("demo-modal").style.visibility = "visible";
  document.getElementById("demo-modal").style.opacity = "1";
}

// Close Modal
function closeModal() {
  document.getElementById("demo-modal").style.visibility = "hidden";
  document.getElementById("demo-modal").style.opacity = "0";
}
