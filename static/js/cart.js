$(".container").ready(function () {
    // var dataCard = localStorage.getItem("keydatacard");
    dataCard = JSON.parse(localStorage.getItem("keydatacard"));
    // console.log(dataCard);
    var HTMLListItem = '';
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
    $(".bodyCart").html(HTMLListItem);
    $(".totalPrice").html(priceModal.toLocaleString('VND', { style: 'currency', currency: 'vnd' }));

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
            $(".totalPrice").html(priceModal.toLocaleString('VND', { style: 'currency', currency: 'vnd' }));
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
            html += '<td><img id="imgModal" src="http://localhost/maneger_shop_basic1/static/img/category-img/product/phone/' + item.img + '" alt=""></td>'
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
        location.reload();
    })
})
