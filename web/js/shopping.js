function goConfirm() {
    window.location.assign("confirm.php")
}

function addToCart(sku, quantity) {
    jQuery.ajax({
       url: "cartFunctions.php",
       type: 'POST',
       data: {
           item: sku,
           quantity: quantity
       },
       success: function(){
            document.getElementById("cartNum").innerHTML = Number(document.getElementById("cartNum").innerHTML) + Number(quantity);
            console.log("added item:" + sku + " #" + quantity);
       }
    });
}

function removeItem(sku) {
    jQuery.ajax({
       url: "removeItem.php",
       type: 'POST',
       data: {
           item: sku
       },
       success: function(){
           console.log("removed item:" + sku);
           $("tr").remove("." + sku)
       }
    });
}

function updateCart(sku, quantity) {
    jQuery.ajax({
       url: "/js/addItem.php",
       type: 'POST',
       data: {
           item: sku,
           quantity: quantity
       },
       success: function(){
           console.log("updated item:" + sku + " #" + quantity);
       }
    });
}


function checkout(buttonId) {
    document.getElementById(buttonId).onclick = function () {
        console.log("checkout");
        location.href = "viewCart.php";
    }
}