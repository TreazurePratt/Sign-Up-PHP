function signUpValidation() {
    let name = document.querySelector("#name").value;
    let email = document.querySelector("#email").value;
    let password = document.querySelector("#password").value;

    let isValid = true;

    if(name === "") {
        isValid = false;
        document.getElementById("name_error").innerHTML = "Required.";
    }
    return isValid;
}

// preventDefault()
function myFunction() {
    document.getElementById("myForm").reset();
  }