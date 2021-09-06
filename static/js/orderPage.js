window.onload = function () {
    if (!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}
function getTable() {
    var data = JSON.parse(localStorage.getItem("orderOld"));

    for (var i = 0; i < data.length; i++) {
        var item = data[i];
        id = item.id;
        cancel = '';
        if (item.status_order == 0) {
            status = 'Pendding';
            cancel = '<button class="btn btn-danger cancel" data-id1="' + item.id + '" data-id2="' + item.order_id + '">Cancel</button></a>'
        } else if (item.status_order == 1) {
            status = 'Delivering'
        } else if (item.status_order == 2) {
            status = '<h5>Received</h5>'
        }
        button = '<button class="btn btn-success received" data-id="' + item.order_id + '">Received</button> ';

        var html = "";
        html += '<tr class="">'
        html += '<td>' + (i + 1) + '</td>'
        html += '<td><img id="imgModal" src="http://localhost/maneger_shop_basic1/static/img/category-img/product/phone/' + item.image + '" alt=""></td>'
        html += '<td id="nameProductModal">' + item.product_name + '</td>'
        html += '<td >' + item.quantity + '</td>'
        html += '<td id="priceProductModal" class="priceModal"> ' + item.total_price.toLocaleString('VND', { style: 'currency', currency: 'vnd' }) + ' </td>'
        html += '<td>' + status + '</td>'
        html += '<td>' + button + '</td>'
        html += '<td>' + cancel + '</td>'
        html += '</tr>'
        var htmlItem = html;
        var HTMLListItem = HTMLListItem + htmlItem;

    }
    $(".bodyCart").html(HTMLListItem);

}
getTable();

$('.cancel').click(function () {
    id_product = $(this).data("id1");
    id_order = $(this).data("id2");
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
        $.ajax({
            type: "post",
            url: "/maneger_shop_basic1/complete-page/cancel",

            data: {
                id_product: id_product,
                id_order: id_order,
            },
            success: function () {
                $(".yourorder").ready(function () {
                    var user = JSON.parse(localStorage.getItem("user"));
                    if (user) {
                        $.ajax({
                            type: "post",
                            url: "/maneger_shop_basic1/complete-page",

                            // data: $('.formPayment').serialize(),
                            data: {
                                idUser: user.id,
                            },
                            success: function (res) {
                                // alert(res);
                                localStorage.setItem("orderOld", res)
                                // | JSON.stringify(res);
                                window.location.replace("/maneger_shop_basic1/complete-page");
                            },
                        });
                    } else {
                        if (confirm("Let's sign in !") == true) {
                            location.replace("/maneger_shop_basic1/login-page");
                        }

                    }
                })

            },
        });
    });
})

$('.received').click(function () {
    id_received = $(this).data("id");
    if (confirm("Are you sure ?") == true) {
        $.ajax({
            type: "post",
            url: "/maneger_shop_basic1/complete-page/received",

            data: {
                id_received: id_received,
            },
            success: function (res) {
                $(".yourorder").ready(function () {
                    var user = JSON.parse(localStorage.getItem("user"));
                    if (user) {
                        $.ajax({
                            type: "post",
                            url: "/maneger_shop_basic1/complete-page",

                            // data: $('.formPayment').serialize(),
                            data: {
                                idUser: user.id,
                            },
                            success: function (res) {
                                // alert(res);
                                localStorage.setItem("orderOld", res)
                                // | JSON.stringify(res);
                                window.location.replace("/maneger_shop_basic1/complete-page");
                            },
                        });
                    } else {
                        if (confirm("Let's sign in !") == true) {
                            location.replace("http://localhost/maneger_shop_basic1/login-page");
                        }

                    }
                })

            },
        });
    };
})

