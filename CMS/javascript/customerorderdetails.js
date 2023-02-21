$(document).ready(function () {
  // Get the URL query parameters
  const urlParams = new URLSearchParams(window.location.search);

  // Get the value of the "id" parameter
  $id = urlParams.get("id");
  let orderID = $id;

  // Send GET Request to obtain all Orders details from DB
  $.ajax({
    url: "../server/getOrderDetails.php?id=" + $id,
    type: "GET",
    success: function (response) {
      var orderDetails = response;

      var tableBody = $("#table-body");
      // Display on Row in Table
      for (var i = 0; i < orderDetails.products.length; i++) {
        // Essential Data (ProductID, CustomerID, Quantity, Order Total Price)
        var productID = orderDetails.products[i].productid.$oid;
        var customerID = orderDetails.customerID.$oid;
        var quantity = orderDetails.products[i].quantity;
        var orderTotalPrice = orderDetails.totalprice;

        $(".orderid").text(orderID);
        $("#total-price").text(orderTotalPrice);

        // Get Request to receive product details
        $.ajax({
          url: "../server/getProductDetails.php?id=" + productID,
          type: "GET",
          success: function (response) {
            var product = response;

            // Essential Data (Product Name)
            var ProductName = product.name;
            var productPrice = product.price;

            var row =
              "<tr>" +
              "<td>" +
              productID +
              "</td>" +
              "<td>" +
              customerID +
              "</td>" +
              "<td>" +
              ProductName +
              "</td>" +
              "<td>" +
              quantity +
              "</td>" +
              "<td>" +
              productPrice +
              "</td>" +
              "<td>" +
              quantity * productPrice +
              "</td>" +
              "</tr>";
            tableBody.append(row);
          },

          error: function (xhr, status, error) {
            console.log("Error: " + error.message);
          },
        });
      }
    },

    error: function (xhr, status, error) {
      console.log("Error: " + error.message);
    },
  });
});
