$(document).ready(function() {
    $.ajax({
        url: '../server/getOrder.php',
        type: 'GET',
        success: function(response) {
            var products = response;
            console.log(response);
            var tableBody = $('#table-body');
            for (var i = 0; i < products.length; i++) {
                var product = products[i];
                var row = '<tr>' +
                '<td>' + product._id.$oid + '</td>' +
                '<td>' + product.customerID.$oid + '</td>' +
                '<td>' + product.products[0].quantity + '</td>' +
                '<td>' + product.totalprice + '</td>' +
                '<td class="buttons">' +
                '<a class="button-68" href="editproduct.php" id="edit" role="button">Edit</a>' +
                '</div>' +
                '<div class="delete-button">' +
                '<button class="button-68" id="delete" role="button">Delete</button>' +
                '</div>' +
                '</td>' +
                '</tr>';
                tableBody.append(row);
            }
        },
        
        error: function(xhr, status, error) {
            alert("Error: " + error.message);
        }
    })
})