$(document).ready(function() {
    $('form').submit(function(e) {
      e.preventDefault();
      var productName = $('#productname').val();
    var description = $('#description').val();
    var price = Number($('#price').val());
    var quantity = Number($('#quantity').val());
    var category = $('input[name=category]:checked').val();
    errorFound = false;

    if (typeof productName !== 'string' || productName == "") {
        console.log("Invalid Product Name");
        errorFound = true;
    }

    if (typeof description !== 'string' || description == "") {
        console.log("Invalid Description");
        errorFound = true;
    }

    if (typeof price !== 'number' || price == "" || isNaN(price)) {
        console.log("Invalid Price");
        errorFound = true;
    }

    if (typeof quantity !== 'number' || quantity == "" || isNaN(quantity)) {
        console.log("Invalid Quantity");
        errorFound = true;
    }

    if (typeof category !== 'string') {
        console.log("Please Select on Category");
        errorFound = true;
    }

    if (errorFound) {
        return;
    }

    $.ajax({
        url: '../server/addNewProduct.php',
        type: 'POST',
        data: {
          productName: productName,
          description: description,
          price: price,
          quantity: quantity,
          category: category
        },
        success: function(response) {
            console.log(response);
            window.location.href = "../PHP/adminviewproducts.php";
        },
        error: function(xhr, status, error) {
            alert("Error: " + error.message);
        }
      });
    });
  });