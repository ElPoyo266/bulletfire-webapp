function removeFromBasket (id) {
    $.ajax({
        method : "post",
        url : "shop/removeproduct",
        data : {
            productId : id
        }
    }).done(function (msg) {
        if(msg == "success") {
            var ele = document.getElementById("prod_" + id);
            ele.parentElement.removeChild(ele);
        }
    });
}

function increaseProd (id) {
    $.ajax({
        method : "post",
        url : "shop/increaseproduct",
        data : {
            productId : id
        }
    }).done(function (msg) {
        if(msg == "success") {
            var ele = document.getElementById("prod_" + id);
            ele.querySelector("*[quantity]").innerHTML = parseInt(ele.querySelector("*[quantity]").innerHTML)+1; 
        }
    });
}

function decreaseProd (id) {
    $.ajax({
        method : "post",
        url : "shop/reduceproduct",
        data : {
            productId : id
        }
    }).done(function (msg) {
        if(msg == "success") {
            var ele = document.getElementById("prod_" + id);
            ele.querySelector("*[quantity]").innerHTML = parseInt(ele.querySelector("*[quantity]").innerHTML)-1;
        }
    });
}