let email = document.getElementById("Email")
let password = document.getElementById("Password")

let errorEmail = document.getElementById("errorEmail")
let errorPassword = document.getElementById("errorPassword")

let iconEmail = document.getElementById("iconEmail")
let iconPassword = document.getElementById("iconPassword")

let regexemail = new RegExp('^[a-zA-Z0-9.-]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}(com|ma)$', 'g')
let regexpassw = new RegExp('^[a-zA-Z0-9.-_#$%]+[0-9.-_#$%]')

let btnSignIn = document.querySelector('#btnSignIn')

// onfocus
email.onfocus = function () {
    if (email.value.length == 0) {
        email.style = "border-bottom: 2px solid #00C2FF"
        email.style.color = "#00C2FF"
    }
}

password.onfocus = function () {
    if (password.value.length == 0) {
        password.style = "border-bottom: 2px solid purple"
        password.style.color = "purple"
    }
}



// onblur
email.onblur = function () {
    if (email.value.length == 0) {
        email.style = "border-bottom: 1px solid white"
        iconEmail.classList.remove("fa-xmark")
    }
}

password.onblur = function () {
    if (password.value.length == 0) {
        password.style = "border-bottom: 1px solid white"
        iconPassword.classList.remove("fa-xmark")
    }
}



// oninput
email.oninput = function () {
    if (regexemail.test(email.value) === true) {
        email.style = 'border-bottom: 2px solid purple'
        email.style.color = "purple"
        iconEmail.style.color = "purple"
        iconEmail.classList.remove("fa-xmark")
        iconEmail.classList.add("fa-check")
    } else {
        email.style = 'border-bottom: 2px solid red'
        email.style.color = "red"
        iconEmail.style.color = "red"
        iconEmail.classList.remove("fa-check")
        iconEmail.classList.add("fa-xmark")
    }
}

password.oninput = function () {
    if (password.value.length >= 8 && regexpassw.test(password.value) === true) {
        password.style = 'border-bottom: 2px solid purple ';
        password.style.color = "purple"
        iconPassword.style.color = "purple"
        iconPassword.classList.remove("fa-xmark")
        iconPassword.classList.add("fa-check")
    } else {
        password.style = 'border-bottom: 2px solid red';
        password.style.color = "red"
        iconPassword.style.color = "red"
        iconPassword.classList.remove("fa-check")
        iconPassword.classList.add("fa-xmark")
    }

    if (password.value.length > 0) {
        icon1.style.display = "block"
    } else {
        icon1.style.display = "none"
    }

}



// onclick
btnSignIn.onclick = function validvalue(event) {
    emailValid = false
    passwordValid = false
    if (regexemail.test(email.value) === true) {
        emailValid = true
    }
    if (password.value.length >= 8 && regexpassw.test(password.value) === true) {
        passwordValid = true
    }
    if (
        emailValid == false || passwordValid == false


    ) {
        event.preventDefault()
    }
}
