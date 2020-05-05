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
  	document.getElementById("e_fname").innerHTML="*First name is required";
    document.getElementById("e_fname").style.visibility = "visible";
  }
  if (_lname.trim() == "" || _lname == null) {
    document.getElementById("e_lname").style.visibility = "visible";
  }
  if (_email.trim() == "" || _email == null) {
    document.getElementById("e_email").style.visibility = "visible";
  }
  if (_password.trim() == "" || _password == null) {
  	document.getElementById("e_password").innerHTML="*Password is required";
    document.getElementById("e_password").style.visibility = "visible";
  }
  if (_cpassword.trim() == "" || _cpassword == null) {
    document.getElementById("e_cpassword").style.visibility = "visible";
  }
  if (_picture_url.trim() == "" || _picture_url == null) {
    document.getElementById("e_picture_url").style.visibility = "visible";
  }

  if(_password.trim().length<6 && _password.trim()!=""){

    document.getElementById("e_password").innerHTML="*Password can not be smaller than 6 characters";
    document.getElementById("e_password").style.visibility = "visible";
  
  }

 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(_email) && _email.trim()!=""){
         
 }else{

  	document.getElementById("e_email").innerHTML="*Invalid email address";
    document.getElementById("e_email").style.visibility = "visible";

 }
 if(_password!=_cpassword && _cpassword.trim()!="" && _password.trim()!=""){
 	document.getElementById("e_cpassword").innerHTML="*Passwords should be same";
    document.getElementById("e_cpassword").style.visibility = "visible";
 }





  return false;

}