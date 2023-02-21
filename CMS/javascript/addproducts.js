$(document).ready(function () {
  $("form").submit(function (e) {
    e.preventDefault();

    // Extract Data from HTML using JQuery
    var productName = $("#productname").val();
    var description = $("#description").val();
    var price = Number($("#price").val());
    var quantity = Number($("#quantity").val());
    var category = $("input[name=category]:checked").val();
    var image = $("#image")[0].files[0];

    let errorProductName = document.getElementById("errorProductName");
    let errorDescription = document.getElementById("errorDescription");
    let errorPrice = document.getElementById("errorPrice");
    let errorQuantity = document.getElementById("errorQuantity");
    let errorCategory = document.getElementById("errorCategory");
    let errorImage = document.getElementById("errorImage");

    errorFound = false;

    // Validation for ProductName
    if (typeof productName !== "string" || productName == "") {
      errorProductName.innerHTML = "Invalid Product Name";
      $("#productname").css("border", "2px solid red");
      errorFound = true;
    } else {
      $("#productname").css("border", "2px solid green");
      errorProductName.innerHTML = "";
    }

    // Validation for Description
    if (typeof description !== "string" || description == "") {
      errorDescription.innerHTML = "Invalid Description";
      $("#description").css("border", "2px solid red");
      errorFound = true;
    } else {
      $("#description").css("border", "2px solid green");
      errorDescription.innerHTML = "";
    }

    // Validation for Price
    if (typeof price !== "number" || price == "" || isNaN(price)) {
      errorPrice.innerHTML = "Invalid Price";
      $("#price").css("border", "2px solid red");
      errorFound = true;
    } else {
      $("#price").css("border", "2px solid green");
      errorPrice.innerHTML = "";
    }

    // Validation for Quantity
    if (typeof quantity !== "number" || quantity == "" || isNaN(quantity)) {
      errorQuantity.innerHTML = "Invalid Quantity";
      $("#quantity").css("border", "2px solid red");
      errorFound = true;
    } else {
      $("#quantity").css("border", "2px solid green");
      errorQuantity.innerHTML = "";
    }

    // Validation for Category
    if (typeof category !== "string" || category == "") {
      errorCategory.innerHTML = "Please Select on Category";
      errorFound = true;
    } else {
      errorCategory.innerHTML = "";
    }

    // Validation for File Upload
    if (!image) {
      errorImage.innerHTML = "Please Select an Image to Upload";
      errorFound = true;
    } else {
      errorImage.innerHTML = "";
    }

    if (errorFound) {
      return;
    }

    // Use FormData object to send file along with other form data
    var formData = new FormData();
    formData.append("productName", productName);
    formData.append("description", description);
    formData.append("price", price);
    formData.append("quantity", quantity);
    formData.append("category", category);
    formData.append("image", image);

    // Send data to Server-Side (addNewProduct.php)
    $.ajax({
      url: "../server/addNewProduct.php",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (response) {
        // Redirect to adminviewproducts.php
        window.location.href = "../PHP/adminviewproducts.php";
      },
      error: function (xhr, status, error) {
        alert("Error: " + error.message);
      },
    });
  });
});
