// Extract data from Input Fields
let firstName = document.getElementById("firstName");
let lastName = document.getElementById("lastName");
let username = document.getElementById("username");
let email = document.getElementById("email");
let phone = document.getElementById("phone");
let date = document.getElementById("date");
let password1 = document.getElementById("password1");
let password2 = document.getElementById("password2");

let errorFirstName = document.getElementById("errorFirstName");
let errorLastName = document.getElementById("errorLastName");
let errorUsername = document.getElementById("errorUsername");
let errorEmail = document.getElementById("errorEmail");
let errorPhone = document.getElementById("errorPhone");
let errorDate = document.getElementById("errorDate");
let errorPassword1 = document.getElementById("errorPassword1");
let errorPassword2 = document.getElementById("errorPassword2");

let contentModel = document.getElementById("content-model");

function validateSignUpForm(event) {
    event.preventDefault();

    let isError = validateForm();
    if (isError) {
        return false;
    }

    sendRequest();

    return false;
}


function sendRequest() {
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "../server/register.php", true);

    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    let data = "firstName=" + firstName.value +
    "&lastName=" + lastName.value +
    "&username=" + username.value +
    "&email=" + email.value +
    "&phone=" + phone.value +
    "&date=" + date.value +
    "&password=" + password1.value;

    xhr.send(data);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            let response = JSON.parse(xhr.responseText);
            
            if (response.isTaken == true) {
                errorUsername.innerHTML = "username already taken";
                username.style.border = '2px solid red';
            }
            else if (response.success == true) {
                errorUsername.innerHTML = "";
                username.style.border = '2px solid green';
                openModal();
            }
        }
    };
}


function validateForm () {
    let errorFound = false;

    // Checks if firstName & lastName starts and ends with alphabet, can contain '-'
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
        errorFirstName.innerHTML = "must contain only alphabets or '-'";
    } else {
        errorFirstName.innerHTML = "";
        firstName.style.border = '2px solid green';
    }

    // Validation for LastName
    if (!nameRegex.test(lastName.value)) {
        errorFound = true;
        lastName.style.border = '2px solid red';
        errorLastName.innerHTML = "must contain only alphabets or '-'";
    } else {
        errorLastName.innerHTML = "";
        lastName.style.border = '2px solid green';
    }

    // Validation for Username
    if (!usernameRegex.test(username.value)) {
        errorFound = true;
        username.style.border = '2px solid red';
        errorUsername.innerHTML = "must have 8-30 chraracters & contain only alphabets, digits or '_'";
    } else {
        errorUsername.innerHTML = "";
        username.style.border = '2px solid green';
    }


    // Validation for email
    if (!emailRegex.test(email.value)) {
        errorFound = true;
        email.style.border = '2px solid red';
        errorEmail.innerHTML = "Invalid Email";
    } else {
        email.style.border = '2px solid green';
        errorEmail.innerHTML = "";
    }

    // Validation for phone
    if (!phoneRegex.test(phone.value)) {
        errorFound = true;
        phone.style.border = '2px solid red';
        errorPhone.innerHTML = "must contain only digits";
    } else {
        phone.style.border = '2px solid green';
        errorPhone.innerHTML = "";
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
        errorPassword1.innerHTML = "must contain uppercase, lowercase, atleast 8 characters & digit";
    } else {
        password1.style.border = '2px solid green';
        errorPassword1.innerHTML = "";
    }

    // Validate for password2
    if (password2.value == password1.value) {
        password2.style.border = '2px solid green';
        errorPassword2.innerHTML = "";
    } else {
        errorFound = true;
        password2.style.border = '2px solid red';
        errorPassword2.innerHTML = "password does not match";
    }

    return errorFound;
}


function openModal() {
    document.getElementById("demo-modal").style.visibility = "visible";
    document.getElementById("demo-modal").style.opacity = "1";
}

function closeModal() {
    window.location.href = "login.php";
    document.getElementById("demo-modal").style.visibility = "hidden";
    document.getElementById("demo-modal").style.opacity = "0";

}