$("#searchbar-input").keypress(function () {
  let productName = $(this).val();
  $(".dropdown-content-search").empty();
  $(".dropdown-content-search").css("display", "block");
  if (productName == "") {
    $(".dropdown-content-search").css("display", "none");
  }

  $.get({ //fetches all details of the product clicked
    url: `../server/productsearch.php?search=${productName}`,
    type: "get",
    dataType: "JSON",
    success: function (data) {
      data.forEach((product) => {
        $(".dropdown-content-search").append(
          $("<a/>", {
            text: product.name,
            href: `productpage.php?id=${product._id.$oid}`,
          })
        );
      });
    },
  });
});

$(document).ready(function(){
  $('.cart-button').click(function(){
    let id=$(this).attr("id");
    add_to_cart(id);
    window.location.href="../PHP/cart.php"
  })
})

function add_to_cart(pid) {
  
  let increased = false;
  const cartdata = [];

  
  if (!sessionStorage.getItem("cart")) {
    sessionStorage.setItem("cart", JSON.stringify([{ id: pid, quantity: 1 }]));
  } else {
    let cart = JSON.parse(sessionStorage.getItem("cart"));
    cart.forEach((item) => {
      if (item.id == pid) {
        item.quantity = parseInt(item.quantity) + 1;
        sessionStorage.setItem("cart", JSON.stringify(cart));
        increased = true;
      }
    });
    if (increased == false) {
      cart.push({ id: pid, quantity: 1 });
      sessionStorage.setItem("cart", JSON.stringify(cart));
    }
    cart.forEach((cartitem) => {
      cartdata.push({ id: cartitem.id });
    });
    
  }
    
  ;
}