function openModal() {
  document.getElementById("demo-modal").style.visibility = "visible";
  document.getElementById("demo-modal").style.opacity = "1";
}

function closeModal() {
  document.getElementById("demo-modal").style.visibility = "hidden";
  document.getElementById("demo-modal").style.opacity = "0";
}

$(document).ready(function () {
  displayUsername(); //fill form with username and email addresss
  total = 0;
  let quantity = 0;
  const cartdata = [];
  let cart = JSON.parse(sessionStorage.getItem("cart"));
  if (cart != null) {
    cart.forEach((cartitem) => {
      cartdata.push({ id: cartitem.id });
    });
    let cartObj = {};
    cartObj.array = cartdata;
   
    //display all items details in cart
    $.ajax("../server/cartcontent.php", {
      type: "POST", // http method
      data: cartObj,
      dataType: "JSON", // data to submit
      success: function (data, status, xhr) {
        let $pcontainer = $(".items");
        let $cartcontainer = $(".cart");

        data.forEach((product) => {
          cart.forEach((cartitem) => {
            if (cartitem.id == product._id.$oid) {
              quantity = cartitem.quantity;
            }
          });
          total += parseInt(product.price) * quantity;

          $pcontainer.append(
            $("<div/>", { class: "item-detail" })
              .append(
                $("<div/>", { class: "product-photo" }).append(
                  $("<img/>", { src: `..\\assets\\images\\${product.path}` })
                )
              )
              .append(
                $("<div/>", { class: "product-desc" }).append(
                  $("<h4/>", { text: product.name })
                )
              )
              .append(
                $("<div/>", { class: "product-price" }).append(
                  $("<h4/>", { text: "Rs" + " " + product.price })
                )
              )
              .append($("<div/>", { class: "quantity", text: "X" + quantity }))
          );
        });
        $(".totalprice").text(total);
        $(".subtotalprice").text(total * 0.75);
        $(".shippingprice").text(total * 0.15);
      },
      error: function (jqXhr, textStatus, errorMessage) {
        console.log("Error" + errorMessage);
      },
    });
  }
});

function displayUsername() {
  $.get({
    url: "../server/userdetails.php?id=63de635283cd1eff2b722f60",
    type: "get",
    dataType: "JSON",
    success: function (data) {
      data.forEach((user) => {
        $("#fname").attr("value", user["name"]);
        $("#lname").attr("value", user["surname"]);
        $("#email").attr("value", user["email"]);
        $("#address").val(user["address"]);
      });
    },
  });
}
function getRandomInt(max) {
  return Math.floor(Math.random() * max);
}

//checkout btn to send data to server
$("#checkout-btn").click(function () {
  let cart = JSON.parse(sessionStorage.getItem("cart"));
  let orderid = (Math.random() + 1).toString(36).substring(6).toUpperCase();
  address =
    $("#address").val() + "," + $("#city").val() + "," + $("#postalcode").val();
  let name = $("#fname").val() + " " + $("#lname").val();
  const currentdate = Date.now();
  let order = {
    orderid: orderid,
    totalprice: total,
    name: name,
    address: address,
    dateplaced: currentdate,
    products: cart,
  };
  $.ajax("../server/checkout_server.php", {
    type: "POST", // http method
    data: order, // data to submit
    success: function (data, status, xhr) {
      sessionStorage.setItem("cart", []);
      window.location.href = "../PHP/homepage.php";
    },
  });
});
