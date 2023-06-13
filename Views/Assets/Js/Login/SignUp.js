let fullName = document.querySelector("#FullName")
let email = document.querySelector("#Email")
let phone = document.querySelector("#Phone")
let cin = document.querySelector("#CIN")
let password = document.querySelector("#password")
let btnSignUp = document.querySelector("#btnSignUp")

let errorfullName = document.querySelector("#errorfullName")
let errorEmail = document.querySelector("#errorEmail")
let errorPhone = document.querySelector("#errorPhone")
let errorCin = document.querySelector("#errorCin")
let errorPassword = document.querySelector("#errorPassword")

let iconNam = document.querySelector("#iconFullName")
let iconEmail = document.querySelector("#iconEmail")
let iconPhone = document.querySelector("#iconPhone")
let iconCin = document.querySelector("#iconCin")
let iconPassword = document.querySelector("#iconPassword")

let regexemail = new RegExp('^[a-zA-Z0-9.-]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}(com|ma)$', 'g')
let regexpassw = new RegExp('^[a-zA-Z0-9.-_#$%]+[0-9.-_#$%]')
let regeNom = /^[a-zA-Z-\s]+$/;
let regePhone = /(05|06|07)\d{8}$/;
let regeCin = new RegExp('^[a-zA-Z]{1}[0-9]{4,6}$');



//  onfocus
fullName.onfocus = function () {
    if (fullName.value.length == 0) {
        fullName.style = "border-bottom: 2px solid #05c3fb"
        fullName.style.color = "#05c3fb"
        errorfullName.style.color = "#ffffff7d"
        errorfullName.innerHTML = "entre full name consisting of at least 4 letters"
    }
}

email.onfocus = function () {
    if (email.value.length == 0) {
        email.style = "border-bottom: 2px solid #05c3fb"
        email.style.color = "#05c3fb"
    }
}


phone.onfocus = function () {
    if (phone.value.length == 0) {
        phone.style = "border-bottom: 2px solid #05c3fb"
        phone.style.color = "#05c3fb"
    }
}

cin.onfocus = function () {
    if (cin.value.length == 0) {
        cin.style = "border-bottom: 2px solid #05c3fb"
        cin.style.color = "#05c3fb"
    }
}

password.onfocus = function () {
    if (password.value.length == 0) {
        password.style = "border-bottom: 2px solid purple"
        password.style.color = "purple"
    }
}

// onblur
fullName.onblur = function () {
    if (fullName.value.length == 0) {
        fullName.style = "border-bottom: 1px solid white"
        errorfullName.innerHTML = ""
        iconNam.classList.remove("fa-xmark")
    } else {

        if (fullName.value.length < 4 || regeNom.test(fullName.value) !== true) {
            errorfullName.innerHTML = "<p>The full name must contain at least 4 characters</p> <p> The full name should not contain numbers</p>"
        }
    }
}

email.onblur = function () {
    if (email.value.length == 0) {
        email.style = "border-bottom: 1px solid white"
        iconEmail.classList.remove("fa-xmark")
    }
}

phone.onblur = function () {
    if (phone.value.length == 0) {
        phone.style = "border-bottom: 1px solid white"
        iconPhone.classList.remove("fa-xmark")
        errorPhone.innerHTML = ""

    } else if (phone.value.length > 0 && regePhone.test(phone.value) !== true) {
        errorPhone.innerHTML = "<p>The field must contain 10 numbers starting with 05 or 06 or 07</p>"
    }
}

cin.onblur = function () {
    if (cin.value.length == 0) {
        cin.style = "border-bottom: 1px solid white"
        iconCin.classList.remove("fa-xmark")

    }
}

password.onblur = function () {
    if (password.value.length == 0) {
        password.style = "border-bottom: 1px solid white"
        iconPassword.classList.remove("fa-xmark")
    }
}


// oninput
fullName.oninput = function () {
    errorfullName.innerHTML = ""

    if (fullName.value.length >= 4 && regeNom.test(fullName.value) === true) {
        fullName.style = 'border-bottom: 2px solid #05c3fb'
        fullName.style.color = "#05c3fb"
        iconNam.style.color = "#05c3fb"
        iconNam.classList.remove("fa-xmark")
        iconNam.classList.add("fa-check")

    } else if (fullName.value.length < 4 || regeNom.test(fullName.value) !== true) {
        fullName.style = 'border-bottom: 2px solid #e82646'
        fullName.style.color = "#e82646"
        iconNam.style.color = "#e82646"
        iconNam.classList.remove("fa-check")
        iconNam.classList.add("fa-xmark")
    }
}

email.oninput = function () {
    if (regexemail.test(email.value) === true) {
        email.style = 'border-bottom: 2px solid #05c3fb'
        email.style.color = "#05c3fb"
        iconEmail.style.color = "#05c3fb"
        iconEmail.classList.remove("fa-xmark")
        iconEmail.classList.add("fa-check")
    } else {
        email.style = 'border-bottom: 2px solid #e82646'
        email.style.color = "#e82646"
        iconEmail.style.color = "#e82646"
        iconEmail.classList.remove("fa-check")
        iconEmail.classList.add("fa-xmark")
    }
}



phone.oninput = function () {
    if (regePhone.test(phone.value) == true) {
        phone.style = 'border-bottom: 2px solid #15AAD9';
        phone.style.color = "#15AAD9"
        iconPhone.style.color = "#05c3fb"
        iconPhone.classList.remove("fa-xmark")
        iconPhone.classList.add("fa-check")
    } else {
        phone.style = 'border-bottom: 2px solid #e82646';
        phone.style.color = "#e82646"
        iconPhone.style.color = "#e82646"
        iconPhone.classList.remove("fa-check")
        iconPhone.classList.add("fa-xmark")
    }
}

cin.oninput = function () {
    if (regeCin.test(cin.value) === true) {
        cin.style = 'border-bottom: 2px solid #15AAD9'
        cin.style.color = "#15AAD9"
        iconCin.style.color = "#15AAD9"
        iconCin.classList.remove("fa-xmark")
        iconCin.classList.add("fa-check")
    } else {
        cin.style = 'border-bottom: 2px solid #e82646'
        cin.style.color = "#e82646"
        iconCin.style.color = "#e82646"
        iconCin.classList.remove("fa-check")
        iconCin.classList.add("fa-xmark")
    }
}



password.oninput = function () {
    if (password.value.length >= 8 && regexpassw.test(password.value) === true) {
        password.style = 'border-bottom: 2px solid #15AAD9 ';
        password.style.color = "#15AAD9"
        iconPassword.style.color = "#15AAD9"
        iconPassword.classList.remove("fa-xmark")
        iconPassword.classList.add("fa-check")
    } else {
        password.style = 'border-bottom: 2px solid #e82646';
        password.style.color = "#e82646"
        iconPassword.style.color = "#e82646"
        iconPassword.classList.remove("fa-check")
        iconPassword.classList.add("fa-xmark")
    }

    if (password.value.length > 0) {
        icon1.style.display = "block"
    } else {
        icon1.style.display = "none"
    }

}


btnSignUp.onclick = function validvalue(event) {

    fullanameVallid = false
    emailValid = false
    phoneValid = false
    cinValid = false
    passwordValid = false

    if (fullName.value.length >= 4 && regeNom.test(fullName.value) === true) {
        fullanameVallid = true
    }


    if (regexemail.test(email.value) === true) {
        emailValid = true
    }

    if (regePhone.test(phone.value) == true) {
        phoneValid = true

    }

    if (regeCin.test(cin.value) === true) {
        cinValid = true
    }


    if (password.value.length >= 8 && regexpassw.test(password.value) === true) {
        passwordValid = true
    }



    if (
        fullanameVallid == false ||
        emailValid == false ||
        phoneValid == false ||
        cinValid == false ||
        passwordValid == false
    ) {
        event.preventDefault()
    }
}