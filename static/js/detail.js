$(".btn-card").click(function () {
    var id = $(".idinput").val();
    console.log("id là", id);
    var dataCard = localStorage.getItem("keydatacard");
    var img = $("#img-product-modal").val();
    var productName = $(".name-product").html();
    var priceProduct = $(".price").html().match(/\d/g).join("");
    dataCard = JSON.parse(dataCard);
    console.log(img);
    console.log(dataCard);

    // var dataCard;
    if (dataCard && dataCard.length > 0) {
        var item = {};
        item.old_price = parseInt(priceProduct);
        for (var i = 0; i < dataCard.length; i++) {
            if (dataCard[i].id == id) {
                if (dataCard[i].quantity != 10) {
                    dataCard[i].quantity += 1;
                }
                dataCard[i].price = parseInt(dataCard[i].old_price) * parseInt(dataCard[i].quantity);
                item = {};
                break;
            } else {
                item.price = parseInt(priceProduct);
                item.nameProduct = productName;
                item.img = img;
                item.id = id;
                item.quantity = 1;
            }
        }
        if (!jQuery.isEmptyObject(item)) {
            dataCard.push(item);
        }
    } else {

        var itemProduct = {};
        dataCard = [];
        itemProduct.price = parseInt(priceProduct);
        itemProduct.old_price = parseInt(priceProduct);
        itemProduct.nameProduct = productName;
        itemProduct.img = img;
        itemProduct.id = id;
        itemProduct.quantity = 1;

        dataCard.push(itemProduct);

    }
    localStorage.setItem("keydatacard", JSON.stringify(dataCard));

    var HTMLListItem = ''
    var priceModal = 0;
    for (var i = 0; i < dataCard.length; i++) {
        var item = dataCard[i];
        var html = "";
        html += '<tr  class="parent" data-id="' + item.id + '" >'
        html += '<td>' + (i + 1) + '</td>'
        html += '<td><img id="imgModal" src="/maneger_shop_basic1/static/img/category-img/product/phone/' + item.img + '" alt=""></td>'
        html += '<td id="nameProductModal">' + item.nameProduct + '</td>'
        html += '<td class="parent_quantity"><input class="quantity" data-id="' + item.id + '" type="number" style=" width: 40px;" value="' + item.quantity + '" min="1" max="10"></td>'
        html += '<td id="priceProductModal" data-id="' + item.id + '" class="priceModal">' + item.price.toLocaleString('VND', { style: 'currency', currency: 'vnd' }) + '</td>'
        html += '<td><button type="button" class="btn btn-danger remove-card" data-id="' + item.id + '">Remove</button></td>'
        html += '</tr>'
        var htmlItem = html;
        var HTMLListItem = HTMLListItem + htmlItem;
        var priceModal = priceModal + parseFloat(item.price);
    }
    $(".bodyModal").html(HTMLListItem);
    $(".totalPrice").html(priceModal.toFixed(3).replace(/(\d)(?=(\d{3})+\.)/g, '$1.'));

    $('.parent').change(function () {
        var priceModal = 0;
        var id = $(this).find(".quantity").data("id");
        var new_quantity = parseInt($(this).find(".quantity").val());
        for (i = 0; i < dataCard.length; i++) {
            if (dataCard[i].id == id) {
                dataCard[i].quantity = new_quantity;
                dataCard[i].price = dataCard[i].old_price * new_quantity;
                localStorage.setItem("keydatacard", JSON.stringify(dataCard));
                $(this).find('.priceModal').html(dataCard[i].price.toLocaleString('VND', { style: 'currency', currency: 'vnd' }));

            }
            var priceModal = priceModal + parseFloat(dataCard[i].price);
            console.log(priceModal);
            $(".totalPrice").html(priceModal.toFixed(3).replace(/(\d)(?=(\d{3})+\.)/g, '$1.'));
        }
    })

    $(".remove-card").click(function () {
        console.log("aaaaaaaaaaaaaaa")
        $(this).parents(".parent").remove();
        var dataCard = JSON.parse(localStorage.getItem("keydatacard"));
        id = $(this).data("id");

        for (i = 0; i < dataCard.length; i++) {
            if (dataCard[i].id == id) {
                dataCard.splice(i, 1);
            }
        }
        // console.log(dataCard);
        localStorage.setItem("keydatacard", JSON.stringify(dataCard));

        var HTMLListItem = '';
        var priceModal = 0;
        for (var i = 0; i < dataCard.length; i++) {
            var item = dataCard[i];

            var html = "";
            html += '<tr class="parent">'
            html += '<td>' + (i + 1) + '</td>'
            html += '<td><img id="imgModal" src="/maneger_shop_basic1/static/img/category-img/product/phone/' + item.img + '" alt=""></td>'
            html += '<td id="nameProductModal">' + item.nameProduct + '</td>'
            html += '<td >' + item.quantity + '</td>'
            html += '<td id="priceProductModal" class="priceModal"> ' + item.price + ' </td>'
            html += '<td>VND</td>'
            html += '<td><button type="button" class="btn btn-danger remove-card" data-id="' + item.id + '">Remove</button></td>'
            html += '</tr>'
            var htmlItem = html;
            var HTMLListItem = HTMLListItem + htmlItem;
            priceModal = priceModal + parseFloat(item.price);

        }
        $(".bodyCart").html(HTMLListItem);
        $(".totalPrice").html(priceModal);
    })

})
