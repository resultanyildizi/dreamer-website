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

function validate_admin_profile() {
  let control = true;

  let form = document.forms["profile-form-area"];

  let _name = form["a_name"].value;
  let _surname = form["a_surname"].value;
  let _password = form["a_password"].value;
  let _cpassword = form["a_cpassword"].value;

  document.getElementById("e_a_name").style.visibility = "hidden";
  document.getElementById("e_a_surname").style.visibility = "hidden";
  document.getElementById("e_a_password").style.visibility = "hidden";
  document.getElementById("e_a_cpassword").style.visibility = "hidden";

  if (_name.trim() == "" || _name == null) {
    control = false;
    document.getElementById("e_a_name").innerHTML = "*Name is required";
    document.getElementById("e_a_name").style.visibility = "visible";
  }
  if (_surname.trim() == "" || _surname == null) {
    control = false;
    document.getElementById("e_a_surname").innerHTML = "*Surname is required";
    document.getElementById("e_a_surname").style.visibility = "visible";
  }

  if (_password.trim() == "" || _password == null) {
    control = false;
    document.getElementById("e_a_password").innerHTML = "*Password is required";
    document.getElementById("e_a_password").style.visibility = "visible";
  }
  if (_cpassword.trim() == "" || _cpassword == null) {
    control = false;
    document.getElementById("e_a_cpassword").innerHTML =
      "*Confirm the password";
    document.getElementById("e_a_cpassword").style.visibility = "visible";
  }
  if (_password.trim().length < 6 && _password.trim() != "") {
    control = false;
    document.getElementById("e_a_password").innerHTML =
      "*Password can not be smaller than 6 characters";
    document.getElementById("e_a_password").style.visibility = "visible";
  }
  if (
    _password != "" &&
    _cpassword != "" &&
    _cpassword.trim() != _password.trim()
  ) {
    control = false;
    document.getElementById("e_a_cpassword").innerHTML =
      "*Passwords should be same";
    document.getElementById("e_a_cpassword").style.visibility = "visible";
  }

  console.log(_cpassword.trim() == _password.trim());

  if (control == true) {
    form.submit();
  }
}

function validate_city() {
  let control = true;

  let form = document.forms["city_form_area"];

  let _name = form["name"].value;
  let _country = form["country"].value;
  let _cost = form["cost"].value;
  let _small_text = form["small_text"].value;
  let _details = form["details"].value;

  document.getElementById("e_c_name").style.visibility = "hidden";
  document.getElementById("e_c_country").style.visibility = "hidden";
  document.getElementById("e_c_cost").style.visibility = "hidden";
  document.getElementById("e_c_small_text").style.visibility = "hidden";
  document.getElementById("e_c_details").style.visibility = "hidden";

  if (_name.trim() == "" || _name == null) {
    control = false;
    document.getElementById("e_c_name").innerHTML = "*City name is required";
    document.getElementById("e_c_name").style.visibility = "visible";
  }
  if (_country.trim() == "" || _country == null) {
    control = false;
    document.getElementById("e_c_country").innerHTML =
      "*Country name is required";
    document.getElementById("e_c_country").style.visibility = "visible";
  }

  if (_cost.trim() == "" || _cost == null) {
    control = false;
    document.getElementById("e_c_cost").innerHTML = "*Cost is required";
    document.getElementById("e_c_cost").style.visibility = "visible";
  }
  if (_small_text.trim() == "" || _small_text == null) {
    control = false;
    document.getElementById("e_c_small_text").innerHTML =
      "*Small text is required";
    document.getElementById("e_c_small_text").style.visibility = "visible";
  }
  if (_small_text.trim().length > 50) {
    control = false;
    document.getElementById("e_c_small_text").innerHTML =
      "*Small text cannot be longer than 50 characters";
    document.getElementById("e_c_small_text").style.visibility = "visible";
  }
  if (_details.trim() == "" || _details == null) {
    control = false;
    document.getElementById("e_c_details").innerHTML = "*Details are required";
    document.getElementById("e_c_details").style.visibility = "visible";
  }

  return control;
}

function image_preview() {
  let small_img_inp = document.getElementById("small_img_inp");
  let back_img_inp = document.getElementById("back_img_inp");

  console.log(small_img_inp);

  small_img_inp.addEventListener("change", function () {
    let file = this.files[0];
    if (file) {
      let reader = new FileReader();

      reader.addEventListener("load", function () {
        document.getElementById("city_small_img").style.backgroundImage =
          "url(" + this.result + ")";
      });

      reader.readAsDataURL(file);
    } else {
      console.log(file);
      document.getElementById("city_small_img").style.backgroundImage = "";
      document.getElementById("city_small_img").style.backgroundImage =
        "url(resources/undefined_image.jpg)";
    }
  });

  back_img_inp.addEventListener("change", function () {
    let file = this.files[0];
    if (file) {
      let reader = new FileReader();

      reader.addEventListener("load", function () {
        document.getElementById("city_back_img").style.backgroundImage =
          "url(" + this.result + ")";
      });

      reader.readAsDataURL(file);
    } else {
      document.getElementById("city_back_img").style.backgroundImage = "";
      document.getElementById("city_back_img").style.backgroundImage =
        "url(resources/undefined_image.jpg)";
    }
  });
}
