$(".body_profile").ready(function () {
    var data = JSON.parse(localStorage.getItem("user"));
    $("#fullname").val(data.fullname);
    $(".username_profile").html('<span> ' + data.username + '</span>');
    $("#phonenumber").val("0" + data.phonenumber);
    $("#email").val(data.email);
    $("#address").val(data.address);
    $("#date").val(data.birthday);
    $("#username").val(data.username);
    $("#gender").val(data.gender);
    $("#id").val(data.id);
    if (data.image) {
        html2 = '<img style="width:155px;border: 2px solid gray;border-style:dotted;border-radius:20px;padding:3px 3px" src ="/maneger_shop_basic1/static/img/category-img/product/phone/' + data.image + '">'
        html1 = '<img style="width:80px;border: 2px solid gray;border-style:dotted;border-radius:100px;padding:3px 3px" src ="/maneger_shop_basic1/static/img/category-img/product/phone/' + data.image + '">'
        $(".avartar-img").html(html1);
        $(".lable-avartar2").html(html2);
    }
})
$("#image2").change(function () {
    var img = $("#image2")[0].files[0];
    console.log(img.name);
    html = '<img src="/maneger_shop_basic1/static/img/category-img/product/phone/' + img.name + '" style="width:155px;border: 2px solid gray;border-style:dotted;border-radius:10px;padding:3px 3px">';
    $(".lable-avartar2").html(html);
})
// ----------------change pass --------------------------//

$(".new-pass1").blur(function () {

    console.log($(".new-pass1").val().length);
    if ($(".new-pass1").val().length < 6) {
        $(".errpass").html("Please enter true format !");
        $('.save_profile').attr("type", "button");
    } else {
        $(".errpass").html("");
        $('.save_profile').attr("type", "submit");
    }
})
$(".new-pass2").blur(function () {
    if ($(".new-pass1").val() != $(".new-pass2").val()) {
        $(".errpass").html("Re-enter your password is wrong!");
        $('.save_profile').attr("type", "button");
    } else {
        $(".errpass").html("");
        $('.save_profile').attr("type", "submit");
    }
})
$('.save_password').click(function () {
    if (!$(".new-pass1").val() || !$(".new-pass2").val() || !$(".old-pass").val()) {
        $(".errpass").html("You need enter all password!");
        $('.save_profile').attr("type", "button");
    } else {
        $(".errpass").html("");
        $('.save_profile').attr("type", "submit");
    }
})
//--------------------order complete----------------------//
$('.text_order_complete').click(function () {
    console.log($("#id").val());
    $.ajax({
        type: "POST",
        url: "/maneger_shop_basic1/account-page/order-completed",
        data: {
            id: $("#id").val(),
        },
        success: function (res) {
            localStorage.setItem("orderHistory", res)
        },
        error: function (xhr, resp, text) {
            console.log(xhr, resp, text);
        }
    });
})

