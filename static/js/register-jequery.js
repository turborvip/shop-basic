$(function () {

  // validate by liblary jquery
  $("#form-register").validate({
    rules: {
      username: {
        required: true,
      },
      fullname: {
        required: true,
      },
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 6
      },
      repassword: {
        equalTo: "#password"
      },
      username: {
        required: true,
      },
      birthday: {
        required: true,
      },
    },

    messages: {
      username: {
        required: "Please enter your username !",
      },
      fullname: {
        required: "Please enter your fullname !",
      },
      email: {
        required: "Please enter your email !",
        email: "Email is not in the correct format"
      },
      password: {
        required: "Please enter your password !",
        minlength: "Least 6 characters !"
      },
      repassword: {
        equalTo: "You must enter password is the correct!"
      },
      birthday: {
        required: "Please enter your date of birth !",
      },
    },
    // test validate by liblary
    // submitHandler: function(form) {
    //     alert("Click submit");
    // }
  });
})
function checkphone() {
  console.log($("#phone").value); debugger
  var phone = document.getElementById('phone').value;
  var errorPhone = document.getElementById('errorPhone');
  var regexPhone = /(84|0[3|5|7|8|9])+([0-9]{8})\b/g;
  if (phone == '' || phone == null) {
    errorPhone.innerHTML = "Please enter your phone !";
  } else if (!regexPhone.test(phone)) {
    errorPhone.innerHTML = "Phone number is the not correct !";
  } else {
    errorPhone.innerHTML = "";
    return phone;
  }

}

