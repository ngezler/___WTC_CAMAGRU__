
function checkForm(form)
{
    re = /^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9_\-\.]+\.[a-zA-Z]{2,15}$/;
    if(!re.test(form.email.value)) {
      alert("Error: Email is invalid.");
      form.email.focus();
      return false;
    }
    if(form.login.value == "") {
      alert("Error: Username cannot be blank!");
      form.login.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.login.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.login.focus();
      return false;
    }
    if(form.password.value != "") {
      if(form.password.value.length < 6 || form.password.value.length > 16) {
        alert("Error: Password must contain 6 and 16 characters!");
        form.password.focus();
        return false;
      }
      if(form.password.value == form.login.value) {
        alert("Error: Password must be different from Username!");
        form.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: Password must contain at least one number (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: Password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        alert("Error: Password must contain at least one uppercase letter (A-Z)!");
        form.password.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }
    return true;
  }

function passvis() {
    var x = document.getElementById("pw");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}