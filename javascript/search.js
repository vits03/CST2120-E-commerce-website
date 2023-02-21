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
  