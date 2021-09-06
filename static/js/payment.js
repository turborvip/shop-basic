
$(".information").ready(function () {
    // var dataCard = localStorage.getItem("keydatacard");
    dataCard = JSON.parse(localStorage.getItem("keydatacard"));
    // console.log(dataCard);
    var HTMLListItem = '';
    var priceModal = 0;
    for (var i = 0; i < dataCard.length; i++) {
        var item = dataCard[i];

        var html = "";
        html += '<tr class="parent">'
        html += '<td>' + (i + 1) + '</td>'
        html += '<td id="nameProductModal">' + item.nameProduct + '</td>'
        html += '<td >' + item.quantity + '</td>'
        html += '<td id="priceProductModal" class="priceModal"> ' + item.price.toFixed(3).replace(/(\d)(?=(\d{3})+\.)/g, '$1.') + ' </td>'
        html += '<td>VND</td>'
        html += '</tr>'
        var htmlItem = html;
        var HTMLListItem = HTMLListItem + htmlItem;
        priceModal = priceModal + parseFloat(item.price);

    }
    $(".bodyCart").html(HTMLListItem);
    $(".totalPrice").html(priceModal.toFixed(3).replace(/(\d)(?=(\d{3})+\.)/g, '$1.'));
    console.log(dataCard);
    $(".getArrayCart").add(dataCard);
    // data muốn gửi cần cái gì
    // ==> idproduct, code, user_id, address...


});
$('.phonenumber').blur(function () {
    console.log($('.phonenumber').val());
    var phone = $('.phonenumber').val();
    var regexPhone = /(84|0[3|5|7|8|9])+([0-9]{8})\b/g;
    if (phone == '' || phone == null) {
        $('.error').html("Don't leave blank!");
    } else if (!regexPhone.test(phone)) {
        $('.error').html("Phone number is wrong format");
    } else {
        $('.error').html("");
        return phone;
    }
})
$('.email').blur(function () {
    console.log($('.email').val());
    var email = $('.email').val();
    var regexEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (email == '' || email == null) {
        $('.error').html("Don't leave blank!");
    } else if (!regexEmail.test(email)) {
        $('.error').html("Email is wrong format");
    } else {
        $('.error').html("");
        return email;
    }
})
$(".next").click(function () {

    $(".modal-box-custom").show();
    $(".close").click(function () {
        $(".modal-box-custom").hide();
    });
    $(".no").click(function () {
        $(".modal-box-custom").hide();
    });
    $(window).on('click', function (e) {
        if ($(e.target).is('.modal-box-custom')) {
            $(".modal-box-custom").hide();
        }
    });
    $(".yes").click(function () {

        if (!$(".fullname").val() || !$(".phonenumber").val() || !$(".email").val() || !$(".address").val()
            || $(".allcity").val() == '' || $(".allDistrict").val() == '' || $(".allward").val() == '') {
            $(".modal-box-custom").show();
            $(".modal-content1-custom").hide();
            $(".modal-content2-custom").show();

            $(".yes-err").click(function () {
                $(".modal-box-custom").hide();
                $(".modal-content1-custom").show();
                $(".modal-content2-custom").hide();

            })
        } else if (!JSON.parse(localStorage.getItem("keydatacard")) || JSON.parse(localStorage.getItem("keydatacard")) == "") {
            $(".modal-content1-custom").hide();
            $(".modal-content2-custom").show();

            $(".yes-err").click(function () {
                $(".modal-box-custom").hide();
                $(".modal-content1-custom").show();
                $(".modal-content2-custom").hide();

            })
        } else {
            $.ajax({
                type: "POST",
                url: "/maneger_shop_basic1/completecontroller",
                data: {
                    fullname: $(".fullname").val(),
                    phonenumber: $(".phonenumber").val(),
                    email: $(".email").val(),
                    address: $(".address").val(),
                    province: $(".allcity").val(),
                    district: $(".allDistrict").val(),
                    ward: $(".allward").val(),
                    description: $(".description").val(),
                    layout: $(".layout").val(),
                    getprice: $(".getprice").val(),
                    id: $(".id").val(),
                    dataCard: JSON.parse(localStorage.getItem("keydatacard")),
                },
                success: function (res) {

                    localStorage.setItem("orderOld", res);
                    localStorage.removeItem("keydatacard");
                    window.location.replace("/maneger_shop_basic1/complete-page");

                },
            });
        }
    });
})
$(".fullname").ready(function () {
    var data = JSON.parse(localStorage.getItem("user"));
    if (data) {
        $(".fullname").val(data.fullname);
        $(".phonenumber").val("0" + data.phonenumber);
        $(".email").val(data.email);
        $(".address").val(data.address);
        $(".id").val(data.id);
    }
})
$('.allcity').ready(function () {
    $.ajax({
        type: "POST",
        url: "/maneger_shop_basic1//payment-page/choose-province",
        data: {
        },
        success: function (res) {
            var html = "<option value=''>Choose province</option>";
            for (var i = 0; i < JSON.parse(res).length; i++) {
                var province = JSON.parse(res)[i]
                html += '<option  value="' + province.id + '">' + province.name + '</option>'
            }
            $(".allcity").html(html);
        },
    });
})
$('.allcity').change(function () {
    $('.allward').html('<option value="" >Choose ward</option>');
    if ($(".allcity").val()) {
        $.ajax({
            type: "POST",
            url: "/maneger_shop_basic1//payment-page/choose-district",
            data: {
                province: $(".allcity").val()
            },
            success: function (res) {
                var html = "<option value=''>Choose district</option>";
                for (var i = 0; i < JSON.parse(res).length; i++) {
                    var district = JSON.parse(res)[i]
                    html += '<option value="' + district.id + '">' + district.name + '</option>'
                }
                $(".allDistrict").html(html);
            },
        });
    }
})
$('.allDistrict').change(function () {
    // console.log()
    if ($(".allDistrict").val()) {
        $.ajax({
            type: "POST",
            url: "/maneger_shop_basic1//payment-page/choose-ward",
            data: {
                district: $(".allDistrict").val()
            },
            success: function (res) {
                var html = "<option value=''>Choose ward</option>";
                for (var i = 0; i < JSON.parse(res).length; i++) {
                    var ward = JSON.parse(res)[i]
                    html += '<option>' + ward.name + '</option>'
                }
                $(".allward").html(html);
            },
        });
    }
})
