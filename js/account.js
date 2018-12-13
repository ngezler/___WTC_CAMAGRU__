function checkForm(form, login)
{
    if (form.type.value == "notify"){
	if (!(form.password2.value == "Y" && !(form.password2.value == "N"))) {
		alert("Error: email notification must be set as 'Y' or 'N'.");
		form.password2.focus();
		return false;
	}
    }
    if (form.type.value == "email"){
    re = /^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9_\-\.]+\.[a-zA-Z]{2,5}$/;
    if(!re.test(form.password2.value)) {
      alert ("Error: Email invalid");
      form.password2.focus();
      return false;
    }
    }
    if (form.type.value == "login"){
    if(form.password2.value == "") {
      alert("Error: Username cannot be blank!");
      form.password2.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.password2.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.password2.focus();
      return false;
    }
    }
    if (form.type.value == "password"){
    if(form.password2.value != "") {
      if(form.password2.value.length < 6 || form.password2.value.length > 16) {
        alert("Error: Password must contain 6 and 16 characters!");
        form.password2.focus();
        return false;
      }
      if(form.password2.value == login) {
        alert("Error: Password must be different from Username!");
        form.password2.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password2.value)) {
        alert("Error: Password must contain at least one number (0-9)!");
        form.password2.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password2.value)) {
        alert("Error: Password must contain at least one lowercase letter (a-z)!");
        form.password2.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password2.value)) {
        alert("Error: Password must contain at least one uppercase letter (A-Z)!");
        form.password2.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password2.focus();
      return false;
    }
    return true;
    }
}

function passvis() {
    var p1 = document.getElementById("password");
    var p2 = document.getElementById("password");
    if (arguments[0] == "0") {
        password2.type = "text";
    } else {
        password2.type = "password";
    }
}