function go_to_register() {
  location.href = "register.php";
}
function validate_user_register() {
  let form = document.forms["register_form"];

  let _fname = form["fname"].value;
  let _lname = form["lname"].value;
  let _email = form["email"].value;
  let _password = form["password"].value;
  let _cpassword = form["cpassword"].value;
  let _picture_url = form["picture_url"].value;

  if (_fname.trim() == "" || _fname == null) {
    document.getElementById("e_fname").style.visibility = "visible";
  }
  if (_lname.trim() == "" || _lname == null) {
    document.getElementById("e_lname").style.visibility = "visible";
  }
  if (_email.trim() == "" || _email == null) {
    document.getElementById("e_email").style.visibility = "visible";
  }
  if (_password.trim() == "" || _website == null) {
    document.getElementById("e_password").style.visibility = "visible";
  }
  if (_cpassword.trim() == "" || _cpassword == null) {
    document.getElementById("e_cpassword").style.visibility = "visible";
  }
  if (_picture_url.trim() == "" || _picture_url == null) {
    document.getElementById("e_picture_url").style.visibility = "visible";
  }

  return false;
}
