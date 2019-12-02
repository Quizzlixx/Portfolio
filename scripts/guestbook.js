//document.getElementById(id = "guestbook-form").onsubmit = validate;

// hide/show mail format
let check = document.getElementById("Mailing-list")
check.addEventListener("click", function () {
    let emailFormat = document.getElementById("email-format");
    if (check.checked) {
        emailFormat.style.display = "block";
    } else {
        emailFormat.style.display = "none";
    }
});

// hide/show textarea other
let select = document.getElementById("meet");
select.addEventListener("change", function () {
    let other = document.getElementById("other-block");
    if (select.value == "other") {
        other.style.display = "block";
    } else {
        other.style.display = "none";
    }
});

function clearAllErrors() {
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.display = "none";
    }
}

function validate() {

    clearAllErrors();

    let isValid = true;

    // validate first name
    let first = document.getElementById("firstName").value.trim();
    if (first == "") {
        let errFirst = document.getElementById("err-fname");
        errFirst.style.display = "block";
        isValid = false;
    }

    // validate last name
    let last = document.getElementById("lastName").value.trim();
    if (last == "") {
        let errLast = document.getElementById("err-lname");
        errLast.style.display = "block";
        isValid = false;
    }

    // email validation
    // source: https://www.w3resource.com/javascript/form/email-validation.php
    let mailingList = document.getElementById("Mailing-list");
    let email = document.getElementById("email").value.trim();
    let mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (mailingList.checked && email == "") {
        let errEmail = document.getElementById("err-email");
        errEmail.style.display = "block";
        isValid = false;
    }

    // URL validation
    // source: https://www.w3resource.com/javascript-exercises/javascript-regexp-exercise-9.php
    let url = document.getElementById("linkedin").value.trim();
    let regexp = /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
    if (url != "") {
        if (!regexp.test(url)) {
            let errLinkedIn = document.getElementById("err-linkedin");
            errLinkedIn.style.display = "block";
            isValid = false;
        }
    }

    // dropdown validation
    let meet = document.getElementById("meet").value;
    if (meet == "none") {
        let errMeet = document.getElementById("err-meet");
        errMeet.style.display = "block";
        isValid = false;
    }
    let other = document.getElementById("other").value.trim();
    if(other == "") {
        let errOther = document.getElementById("err-other");
        errOther.style.display = "block";
        isValid = false;
    }

    return isValid;
}