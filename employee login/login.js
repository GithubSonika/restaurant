const email = document.getElementById("email");
const emailPopup = document.getElementById("emailPopup");
const password = document.getElementById("password");
const passwordError = document.getElementById("passwordError");
const loginButton = document.getElementById("login-button");

let emailValid = false;
let passwordValid = false;

function validateButton() {
    if (emailValid && passwordValid) {
        loginButton.removeAttribute("disabled");
    } else {
        loginButton.setAttribute("disabled", "");
    }
}

email.addEventListener("change", () => {
    emailValid = email.value.includes("@foodandwine.com");
    if (emailValid) {
        email.classList.remove("error");
        emailPopup.style.display = "none"; 
    } else {
        email.classList.add("error");
        emailPopup.style.display = "block";
    }
    validateButton();
});



password.addEventListener("change", () => {
    const passwordValue = password.value;
    passwordValid = passwordValue.length >= 8 &&
        /[A-Z]/.test(passwordValue) &&
        /[a-z]/.test(passwordValue) &&
        /[0-9]/.test(passwordValue) &&
        /[\!\@\#\$\%\^\&\*\(\)\_\+\.\,\;\:]/.test(passwordValue);

    if (passwordValid) {
        password.classList.remove("error");
        passwordError.style.display = "none"; 
    } else {
        password.classList.add("error");
        passwordError.style.display = "block";
    }
    validateButton();
});


