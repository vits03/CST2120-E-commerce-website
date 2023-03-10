let categories = [];
let allProducts;
let selectedProducts;
$(document).ready(function () {
  $.ajax({ //get request to fetch all data from server
    url: "../server/products.php",
    type: "get",
    dataType: "JSON",
    success: function (data) {
      allProducts = data;
      allProducts = allProducts.filter((product) => {
        return product.isRemoved == false;
      });

      selectedProducts = allProducts;
      data.forEach((product) => { //display each product in their container
        if (product.isRemoved == false) {
          let $pcontainer = $("body div.product-wrapper");

          $pcontainer.append(
            $("<div/>", { class: "product-container" })
              .append(
                $("<div/>", { class: "btn-container" })
                  .append(
                    $("<a/>", {
                      text: "View",
                      id: product._id.$oid,
                      class: "product-link",
                      href: `../PHP/productpage.php?id=${product._id.$oid}`,
                    })
                  )
                  .append(
                    $("<a/>", {
                      onclick: "openNav()",
                      class: "addtocart",
                      id: product._id.$oid,
                      text: "Add to cart",
                    })
                  )
              )
              .append(
                $("<img/>", { src: `..\\assets\\images\\${product.path}` })
              )
              .append(
                $("<div/>", {
                  class: "product-description",
                  text: product.name,
                })
              )
              .append(
                $("<div/>", {
                  class: "product-price",
                  text: "Rs " + product.price,
                })
              )
          );
        }
      });

      if (!sessionStorage.getItem("cart")) {
        sessionStorage.setItem("cart", JSON.stringify([]));
      }
      
      //event listener to add items to cart
      $(".addtocart").click(function () {
        let increased = false;
        const cartdata = [];
        let pid = $(this).attr("id");
        
        if (!sessionStorage.getItem("cart")) {
          sessionStorage.setItem(
            "cart",
            JSON.stringify([{ id: pid, quantity: 1 }])
          );
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
        $(".cart-item").detach();
        let cartObj = {};
        cartObj.array = cartdata;

        //get request to server to get all products details
        $.ajax("../server/cartcontent.php", {
          type: "POST", // http method
          data: cartObj,
          dataType: "JSON", // data to submit
          success: function (data, status, xhr) {
            data.forEach((product) => {
              let $sidebar = $("body div.item-container");

              $sidebar.append(
                $("<div/>", { class: "cart-item" })
                  .append(
                    $("<div/>", { class: "product-image" }).append(
                      $("<img/>", {
                        src: `..\\assets\\images\\${product.path}`,
                      })
                    )
                  )
                  .append(
                    $("<div/>", { class: "product-name", text: product.name })
                  )
                  .append(
                    $("<div/>", { class: "product-price", text: product.price })
                  )
              );
            });
          },
          error: function (jqXhr, textStatus, errorMessage) {
            console.log("Error" + errorMessage);
          },
        });
      });

      $(".product-link").click(function () {
        let path = `../PHP/productpage.php?id=${$(this).attr("id")}`;
        window.location = path;
      });
    },
  });
});


$("#searchbar-input").keyup(function () {
  let productName = $(this).val();

  if (productName == "") {
    $(".dropdown-content-search").css("display", "none");
  }
});


//send data to server when user searches for a product
$("#searchbar-input").keypress(function () {
  let productName = $(this).val();

  $(".dropdown-content-search").empty();
  $(".dropdown-content-search").css("display", "block");
  if (productName == "") {
    $(".dropdown-content-search").css("display", "none");
  }
  $.ajax({
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


//carousel
(function () {
  const slider = document.querySelector(".main-slider");
  const imagenes = document.querySelector(".slider-imagenes");
  const controles = document.querySelectorAll(".count-imagenes-num");
  const img = document.querySelectorAll(".slider-img");
  const countimg = document.querySelectorAll(".slider-img").length;
  const next = document.querySelector(".slider-controles-next");
  const previous = document.querySelector(".slider-controles-previous");
  const imgactivo = document.querySelectorAll(".slider-img.activo");

  controlesPuntos();
  desplazamiento();
  setInterval(auto, 4500);
  next.addEventListener("click", () => btnNext());
  previous.addEventListener("click", () => btnPrevious());

  function controlesPuntos() {
    controles.forEach((punto, i) => {
      controles[i].addEventListener("click", () => {
        let scrollWidth = slider.scrollWidth;
        let posicion = i;
        let operacion = posicion * -scrollWidth;
        controles.forEach((punto, i) => {
          controles[i].classList.remove("activo");
        });
        img.forEach((punto, i) => {
          img[i].classList.remove("activo");
        });
        img[i].classList.add("activo");
        controles[i].classList.add("activo");
      });
    });
  }

  function posicion() {
    var pos;
    img.forEach((punto, i) => {
      if (img[i].className === "slider-img activo") {
        pos = i;
      }
    });
    return pos;
  }

  function btnNext() {
    let pos = posicion();
    pos = pos + 1;
    if (pos >= countimg) {
      pos = 0;
    } else {
      pos = pos;
    }
    controles.forEach((punto, i) => {
      controles[i].classList.remove("activo");
    });
    img.forEach((punto, i) => {
      img[i].classList.remove("activo");
    });
    img[pos].classList.add("activo");
    controles[pos].classList.add("activo");
  }

  function btnPrevious() {
    let pos = posicion();
    pos = pos - 1;
    if (pos < 0) {
      pos = countimg - 1;
    } else {
      pos = pos;
    }
    controles.forEach((punto, i) => {
      controles[i].classList.remove("activo");
    });
    img.forEach((punto, i) => {
      img[i].classList.remove("activo");
    });
    img[pos].classList.add("activo");
    controles[pos].classList.add("activo");
  }

  function auto() {
    let pos = posicion();
    pos = pos + 1;
    if (pos >= countimg) {
      pos = 0;
    } else {
      pos = pos;
    }
    controles.forEach((punto, i) => {
      controles[i].classList.remove("activo");
    });
    img.forEach((punto, i) => {
      img[i].classList.remove("activo");
    });
    img[pos].classList.add("activo");
    controles[pos].classList.add("activo");
  }

  function desplazamiento() {
    img.forEach((punto, i) => {
      img[i].addEventListener("dragstart", (e) => e.preventDefault());
      let pressed = false;
      let startX = 0;

      img[i].addEventListener("mousedown", function (e) {
        pressed = true;
        startX = e.clientX;
      });

      img[i].addEventListener("mouseleave", function (e) {
        pressed = false;
      });

      window.addEventListener("mouseup", function (e) {
        pressed = false;
      });

      img[i].addEventListener("mousemove", function (e) {
        if (!pressed) {
          return;
        }

        let abc = (this.scrollLeft += startX - e.clientX);

        if (abc >= 0) {
          btnNext();
        } else {
          btnPrevious();
        }
      });
    });
  }
})();

var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function () {
  output.textContent = this.value;
  filterPrice(this.value);
};

function openNav() {
  document.getElementById("mySidebar").style.width = "25%";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
}
function openProductPage() {
  $(".product-link").click(function () {
    let path = `../PHP/productpage.php?id=${$(this).attr("id")}`;
    window.location = path;
  });
}

//display products for each category selected
function render_Category(category) {
  let $pcontainer = $("body div.product-wrapper");
  $pcontainer.empty();
  selectedProducts = [];
  allProducts.forEach((product) => {
    if (product.category == category) {
      selectedProducts.push(product);
      $pcontainer.append(
        $("<div/>", { class: "product-container" })
          .append(
            $("<div/>", { class: "btn-container" })
              .append(
                $("<a/>", {
                  text: "View",
                  href: `../PHP/productpage.php?id=${product._id.$oid}`,
                  id: product._id.$oid,
                  class: "product-link",
                })
              )
              .append(
                $("<a/>", {
                  onclick: `add_to_cart("${product._id.$oid}")`,
                  class: "addtocart",
                  id: product._id.$oid,
                  text: "Add to cart",
                })
              )
          )
          .append($("<img/>", { src: `..\\assets\\images\\${product.path}` }))
          .append(
            $("<div/>", { class: "product-description", text: product.name })
          )
          .append(
            $("<div/>", { class: "product-price", text: "Rs" + product.price })
          )
      );
    }
  });
}

//display products greater than  slider range value
function filterPrice(price) {
  let $pcontainer = $("body div.product-wrapper");
  $pcontainer.empty();

  selectedProducts.forEach((product) => {
    if (parseInt(product.price) > price) {
      $pcontainer.append(
        $("<div/>", { class: "product-container" })
          .append(
            $("<div/>", { class: "btn-container" })
              .append(
                $("<a/>", {
                  text: "View",
                  onclick: "openProductPage()",
                  href: `../PHP/productpage.php?id=${product._id.$oid}`,
                  id: product._id.$oid,
                  class: "product-link",
                })
              )
              .append(
                $("<a/>", {
                  onclick: `add_to_cart("${product._id.$oid}")`,
                  class: "addtocart",
                  id: product._id.$oid,
                  text: "Add to cart",
                })
              )
          )
          .append($("<img/>", { src: `..\\assets\\images\\${product.path}` }))
          .append(
            $("<div/>", { class: "product-description", text: product.name })
          )
          .append(
            $("<div/>", { class: "product-price", text: "Rs" + product.price })
          )
      );
    }
  });
}

//displays product in ascending or descending order
function filter(filterType) {
  if (filterType == "Ascending") {
    selectedProducts.sort(function (a, b) {
      return a.price - b.price;
    });
  } else if (filterType == "Descending") {
    selectedProducts.sort(function (a, b) {
      return b.price - a.price;
    });
  } else {
    selectedProducts.sort(function () {
      return Math.random() - 0.5;
    });
  }
  let $pcontainer = $("body div.product-wrapper");
  $pcontainer.empty();

  selectedProducts.forEach((product) => {
    $pcontainer.append(
      $("<div/>", { class: "product-container" })
        .append(
          $("<div/>", { class: "btn-container" })
            .append(
              $("<a/>", {
                text: "View",
                href: `../PHP/productpage.php?id=${product._id.$oid}`,
                id: product._id.$oid,
                class: "product-link",
              })
            )
            .append(
              $("<a/>", {
                onclick: `add_to_cart("${product._id.$oid}")`,
                class: "addtocart",
                id: product._id.$oid,
                text: "Add to cart",
              })
            )
        )
        .append($("<img/>", { src: `..\\assets\\images\\${product.path}` }))
        .append(
          $("<div/>", { class: "product-description", text: product.name })
        )
        .append(
          $("<div/>", { class: "product-price", text: "Rs" + product.price })
        )
    );
  });
}

function renderProducts() {
  let $pcontainer = $("body div.product-wrapper");
  $pcontainer.empty();
  selectedProducts = [];

  allProducts.forEach((product) => {
    categories.forEach((category) => {
      if (product.category == category) {
        selectedProducts.push(product);
        $pcontainer.append(
          $("<div/>", { class: "product-container" })
            .append(
              $("<div/>", { class: "btn-container" })
                .append(
                  $("<a/>", {
                    text: "View",
                    href: `../PHP/productpage.php?id=${product._id.$oid}`,
                    id: product._id.$oid,
                    class: "product-link",
                  })
                )
                .append(
                  $("<a/>", {
                    onclick: `add_to_cart("${product._id.$oid}")`,
                    class: "addtocart",
                    id: product._id.$oid,
                    text: "Add to cart",
                  })
                )
            )
            .append($("<img/>", { src: `..\\assets\\images\\${product.path}` }))
            .append(
              $("<div/>", { class: "product-description", text: product.name })
            )
            .append(
              $("<div/>", {
                class: "product-price",
                text: "Rs" + product.price,
              })
            )
        );
      }
    });
  });
}

$(".phones").click(function () {
  //selectedProducts=allProducts.sort(function(a, b){return a.price - b.price});
  resetCheckbox();
  render_Category("Mobile Phones");
});

function resetCheckbox() {
  $("input[type=checkbox]").prop("checked", false);
  categories = [];
}

$(".televisions").click(function () {
  resetCheckbox();
  render_Category("Televisions");
});

$(".monitors").click(function () {
  resetCheckbox();
  render_Category("Monitors");
});

$(".earbuds").click(function () {
  resetCheckbox();
  render_Category("Wireless Earbuds");
});
$(".tablets").click(function () {
  resetCheckbox();
  render_Category("Tablets");
});

$("select").change(function () {
  filter($(this).val());
});


//checkboxes functionality
$("#Phones").change(function () {
  if (document.getElementById("Phones").checked) {
    categories.push("Mobile Phones");
  } else {
    const index = categories.indexOf("Mobile Phones");
    const x = categories.splice(index, 1);
  }
  renderProducts();
});

$("#Tablets").change(function () {
  if (document.getElementById("Tablets").checked) {
    categories.push("Tablets");
  } else {
    const index = categories.indexOf("Tablets");
    const x = categories.splice(index, 1);
  }
  renderProducts();
});

$("#Monitors").change(function () {
  if (document.getElementById("Monitors").checked) {
    categories.push("Monitors");
  } else {
    const index = categories.indexOf("Monitors");
    const x = categories.splice(index, 1);
  }
  renderProducts();
});

$("#Televisions").change(function () {
  if (document.getElementById("Televisions").checked) {
    categories.push("Televisions");
  } else {
    const index = categories.indexOf("Televisions");
    const x = categories.splice(index, 1);
  }
  renderProducts();
});

$("#wireless-earbuds").change(function () {
  if (document.getElementById("wireless-earbuds").checked) {
    categories.push("Wireless Earbuds");
  } else {
    const index = categories.indexOf("Wireless Earbuds");
    const x = categories.splice(index, 1);
  }
  renderProducts();
});

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
  $(".cart-item").detach();
  let cartObj = {};
  cartObj.array = cartdata;
  

  //get request to server to get all products details
  $.ajax("../server/cartcontent.php", {
    type: "POST", // http method
    data: cartObj,
    dataType: "JSON", // data to submit
    success: function (data, status, xhr) {
      data.forEach((product) => {
        let $sidebar = $("body div.item-container");

        $sidebar.append(
          $("<div/>", { class: "cart-item" })
            .append(
              $("<div/>", { class: "product-image" }).append(
                $("<img/>", { src: `..\\assets\\images\\${product.path}` })
              )
            )
            .append($("<div/>", { class: "product-name", text: product.name }))
            .append(
              $("<div/>", { class: "product-price", text: product.price })
            )
        );
      });
      openNav();
    },
    error: function (jqXhr, textStatus, errorMessage) {
      console.log("Error" + errorMessage);
    },
  });
  //display in sidebar.
}
