function validateSignUpForm() {
    let errorFound = false;

    // Extract data from Input Fields
    let firstName = document.getElementById("firstName");
    let lastName = document.getElementById("lastName");
    let username = document.getElementById("username");
    let email = document.getElementById("email");
    let phone = document.getElementById("phone");
    let date = document.getElementById("date");
    let password1 = document.getElementById("password1");
    let password2 = document.getElementById("password2");

    // Checks if firstName & lastName starts and ends with alphabet, can contain '-' or space
    const nameRegex = new RegExp("^[A-Za-z][A-Za-z-]{0,48}[A-Za-z]$");

    // Checks if username starts with alphabet, has 8-30 characters & Number and underscore
    const usernameRegex = new RegExp("^[A-Za-z][A-Za-z0-9_]{7,29}$");

    // Checks if email starts and ends with an alphabet, have a '@' symbol,
    // has one or more characters after '@' symbol and followed by more characters
    const emailRegex = new RegExp("^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$");

    // Checks if phone contains only digits and have a minimum of 5 characters & maximum or 20 characters
    const phoneRegex = new RegExp("^[0-9]{5,20}$");

    // Checks if password has Uppercase, Lowercase, atleast 8 characters & Number
    const passwordRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");

    // Validation for FirstName
    if (!nameRegex.test(firstName.value)) {
        errorFound = true;
        firstName.style.border = '2px solid red';
    } else {
        firstName.style.border = '2px solid green';
    }

    // Validation for LastName
    if (!nameRegex.test(lastName.value)) {
        errorFound = true;
        lastName.style.border = '2px solid red';
    } else {
        lastName.style.border = '2px solid green';
    }

    // Validation for Username
    if (!usernameRegex.test(username.value)) {
        errorFound = true;
        username.style.border = '2px solid red';
    } else {
        username.style.border = '2px solid green';
    }


    // Validation for email
    if (!emailRegex.test(email.value)) {
        errorFound = true;
        email.style.border = '2px solid red';
    } else {
        email.style.border = '2px solid green';
    }

    // Validation for phone
    if (!phoneRegex.test(phone.value)) {
        errorFound = true;
        phone.style.border = '2px solid red';
    } else {
        phone.style.border = '2px solid green';
    }

    // Validation for date
    // let result = validateDate(date);
    // if (result == false) {
    //     date.style.border = '2px solid red';
    // } else {
    //     date.style.border = '2px solid green';
    // }
    date.style.border = '2px solid green';
    
    // Validate for password1
    if (!passwordRegex.test(password1.value)) {
        errorFound = true;
        password1.style.border = '2px solid red';
    } else {
        password1.style.border = '2px solid green';
    }

    // Validate for password2
    if (password2.value == password1.value) {
        password2.style.border = '2px solid green';
    } else {
        errorFound = true;
        password2.style.border = '2px solid red';
    }

    if (errorFound) {
        return false;
    } else if (!errorFound) {
        registerUser(username, password2, firstName, lastName, email, phone);
    }
}


function registerUser(username, password2, firstName, lastName, email, phone) {
  $.ajax({
    type: "POST",
    url: "../server/register.php",
    data: {
      username: username.value,
      password: password2.value,
      firstName: firstName.value,
      lastName: lastName.value,
      email: email.value,
      phone: phone.value
    },
    success: function(responseData) {
      alert(responseData);
    },
    error: function(xhr, status, error) {
      alert("Error " + xhr.status + ": Try Again Later.");
    }
  });
}
