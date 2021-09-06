$(".signout").click(function () {
    console.log("logout")
    localStorage.clear();
    location.replace("http://localhost/maneger_shop_basic1/login-page");
})
