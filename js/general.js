function go_to_register() {
  location.href = "register.php";
}
function validate_user_register() {
  let control = true;

  let form = document.forms["register_form"];

  let _fname = form["fname"].value;
  let _lname = form["lname"].value;
  let _email = form["email"].value;
  let _password = form["password"].value;
  let _cpassword = form["cpassword"].value;

  document.getElementById("e_fname").style.visibility = "hidden";
  document.getElementById("e_lname").style.visibility = "hidden";
  document.getElementById("e_email").style.visibility = "hidden";
  document.getElementById("e_password").style.visibility = "hidden";
  document.getElementById("e_cpassword").style.visibility = "hidden";

  if (_fname.trim() == "" || _fname == null) {
    control = false;
    document.getElementById("e_fname").innerHTML = "*First name is required";
    document.getElementById("e_fname").style.visibility = "visible";
  }
  if (_lname.trim() == "" || _lname == null) {
    control = false;
    document.getElementById("e_lname").innerHTML = "*Last name is required";
    document.getElementById("e_lname").style.visibility = "visible";
  }
  if (_email.trim() == "" || _email == null) {
    control = false;
    document.getElementById("e_email").innerHTML = "*Email is required";
    document.getElementById("e_email").style.visibility = "visible";
  }
  if (_password.trim() == "" || _password == null) {
    control = false;
    document.getElementById("e_password").innerHTML = "*Password is required";
    document.getElementById("e_password").style.visibility = "visible";
  }
  if (_cpassword.trim() == "" || _cpassword == null) {
    control = false;
    document.getElementById("e_cpassword").style.visibility = "visible";
  }

  if (_password.trim().length < 6 && _password.trim() != "") {
    control = false;
    document.getElementById("e_password").innerHTML =
      "*Password can not be smaller than 6 characters";
    document.getElementById("e_password").style.visibility = "visible";
  }

  if (
    /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(_email) &&
    _email.trim() != ""
  ) {
  } else {
    control = false;
    document.getElementById("e_email").innerHTML = "*Invalid email address";
    document.getElementById("e_email").style.visibility = "visible";
  }
  if (_password != _cpassword && _cpassword.trim() != "" && _password.trim) {
    control = false;
    document.getElementById("e_cpassword").innerHTML =
      "*Passwords should be same";
    document.getElementById("e_cpassword").style.visibility = "visible";
  }

  return control;
}

function set_dates(price) {
  let start_picker = document.getElementById("start-date-picker");
  let end_picker = document.getElementById("end-date-picker");

  let start_date = new Date(start_picker.value);
  let end_date = new Date(end_picker.value);

  let millis = end_date - start_date;
  console.log(millis);

  if (millis < 0) {
    alert("End date should come later than start date");
    end_picker.value = start_picker.value;
    return;
  }

  let days = Math.floor(millis / (1000 * 60 * 60 * 24)) + 1;
  let days_count = document.getElementById("days-count");
  days_count.value = days;

  let count = parseInt(document.getElementById("people-count").value);

  let total = price * days * count;

  document.getElementById("total-price").innerHTML = "Total: " + total + "$";
}

function validate_reservation() {
  let myForm = document.forms["reservation_form"];
  let credit_card = myForm["traveller_credit"].value;

  if (credit_card == "" || credit_card == null) {
    alert("Please enter your credit card");
    return false;
  }

  return true;
}
function validate_admin_login() {
  let control = true;

  let form = document.forms["admin_login_form"];

  let _email = form["login_email_admin"].value;
  let _password = form["login_password_admin"].value;

  document.getElementById("e_email").style.visibility = "hidden";
  document.getElementById("e_password").style.visibility = "hidden";

  if (_email.trim() == "" || _email == null) {
    control = false;
    document.getElementById("e_email").innerHTML = "*Email is required";
    document.getElementById("e_email").style.visibility = "visible";
  }
  if (_password.trim() == "" || _password == null) {
    control = false;
    document.getElementById("e_password").innerHTML = "*Password is required";
    document.getElementById("e_password").style.visibility = "visible";
  }

  if (
    /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(_email) &&
    _email.trim() != ""
  ) {
  } else {
    control = false;
    document.getElementById("e_email").innerHTML = "*Invalid email address";
    document.getElementById("e_email").style.visibility = "visible";
  }

  return control;
}

function confirm_cancel_reservation() {
  let control = confirm("Are you sure to cancel your reservation?");

  if (control == true) {
    location.href = this.href;
  } else {
    return false;
  }
}
