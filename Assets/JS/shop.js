function addInBasket (id) {
    $.ajax({
        method : "post",
        url : "shop/addproduct",
        data : {
            productId : id,
            productQuantity : 1
        }
    }).done(function (msg) {
        alert(msg);
    });
}