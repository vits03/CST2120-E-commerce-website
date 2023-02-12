function validateLoginForm() {
    let errorFound = false;

    // Extract Data from Input Fields
    let username = document.getElementById("username");
    let password = document.getElementById("password");

    // Checks if username starts with alphabet, has 8-30 characters & Number and underscore
    const usernameRegex = new RegExp("^[A-Za-z][A-Za-z0-9_]{7,29}$");

    // Checks if password has Uppercase, Lowercase, atleast 8 characters & Number
    const passwordRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");

    if (!usernameRegex.test(username.value)) {
        errorFound = true;
        username.style.border = '2px solid red';
    } else {
        username.style.border = '2px solid green';
    }

    if (!passwordRegex.test(password.value)) {
        errorFound = true;
        password.style.border = '2px solid red';
    } else {
        password.style.border = '2px solid green';
    }


    // Return false if error is found in Form
    if (errorFound) {
        return false;
    }

}