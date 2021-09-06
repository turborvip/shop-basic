function checkphone() {
    console.log($("#phonenumber").value); debugger
    var phone = document.getElementById('phonenumber').value;
    var errorPhone = document.getElementById('errorPhone');
    var regexPhone = /(84|0[3|5|7|8|9])+([0-9]{8})\b/g;
    if (phone == '' || phone == null) {
        errorPhone.innerHTML = "Không để trống !";
    } else if (!regexPhone.test(phone)) {
        errorPhone.innerHTML = "Số điện thoại sai !";
    } else {
        errorPhone.innerHTML = "";
        return phone;
    }
}

function checkpass() {
    console.log($("#repassword").value); debugger
    var pass = document.getElementById('password').value;
    var repass = document.getElementById('repassword').value;
    var errorPass = document.getElementById('errorPass');

    if (repass == '' || repass == null) {
        errorPass.innerHTML = "Không để trống !";
    } else if (pass == repass) {
        errorPass.innerHTML = "";
        return pass;
    } else {
        errorPass.innerHTML = "Bạn cần nhập đúng mật khẩu!";
    }
}