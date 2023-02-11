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

    let errorFirstName = document.getElementById("errorFirstName");
    let errorLastName = document.getElementById("errorLastName");
    let errorUsername = document.getElementById("errorUsername");
    let errorEmail = document.getElementById("errorEmail");
    let errorPhone = document.getElementById("errorPhone");
    let errorDate = document.getElementById("errorDate");
    let errorPassword1 = document.getElementById("errorPassword1");
    let errorPassword2 = document.getElementById("errorPassword2");

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
        errorFirstName.innerHTML = "must contain only alphabets, '-' or space";
    } else {
        errorFirstName.innerHTML = "";
        firstName.style.border = '2px solid green';
    }

    // Validation for LastName
    if (!nameRegex.test(lastName.value)) {
        errorFound = true;
        lastName.style.border = '2px solid red';
        errorLastName.innerHTML = "must contain only alphabets, '-' or space";
    } else {
        errorLastName.innerHTML = "";
        lastName.style.border = '2px solid green';
    }

    // Validation for Username
    if (!usernameRegex.test(username.value)) {
        errorFound = true;
        username.style.border = '2px solid red';
        errorUsername.innerHTML = "must have 8-30 chraracters & contain only alphabets, digits or '-'";
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

    if (errorFound) {
        return false;
    }
    else if (!errorFound) {
        registerUser(username, password2, firstName, lastName, email, phone);
    }
}


async function registerUser(username, password2, firstName, lastName, email, phone) {
    try {
      const response = await $.ajax({
        type: "POST",
        url: "../server/register.php",
        data: {
          username: username.value,
          password: password2.value,
          firstName: firstName.value,
          lastName: lastName.value,
          email: email.value,
          phone: phone.value
        }
      });
      const data = JSON.parse(response);
      if (data.success === true) {
        window.location.href = "login.php";
      }
    } catch (error) {
      alert("Error: Try Again Later.");
    }
  }


// function openModal() {
//     document.getElementById("demo-modal").style.visibility = "visible";
//     document.getElementById("demo-modal").style.opacity = "1";
// }

// function closeModal() {
//     document.getElementById("demo-modal").style.visibility = "hidden";
//     document.getElementById("demo-modal").style.opacity = "0";
// }