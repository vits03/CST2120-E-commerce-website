$(document).ready(function() {
    $.ajax({
        url: '../server/getProducts.php',
        type: 'GET',
        success: function(response) {
            var products = response;
            console.log(products);
            var tableBody = $('#table-body');
            for (var i = 0; i < products.length; i++) {
                var product = products[i];
                var row = '<tr data-id="' + product._id.$oid + '">' +
                '<td>' + product._id.$oid + '</td>' +
                '<td>' + product.name + '</td>' +
                '<td>' + product.category + '</td>' +
                '<td>' + product.price + '</td>' +
                '<td>' + product.quantity + '</td>' +
                '<td class="buttons">' +
                '<a class="button-68" href="editproduct.php?id=' + product._id.$oid +'" id="edit" role="button">Edit</a>' +
                '<div class="delete-button">' +
                '<button class="button-68 delete" id="delete" data-id="' + product._id.$oid + '">Delete</button>' +
                '</div>' +
                '</td>' +
                '</tr>';
                tableBody.append(row);
            }
            
            // Add a click event listener to the "Delete" buttons
            $('.delete-button').on('click', 'button.delete', function() {
                var productId = $(this).data('id');
                // Confirm the deletion
                if (confirm("Are you sure you want to delete this product?")) {
                    deleteProduct(productId);
                }
            });
        },
        
        error: function(xhr, status, error) {
            alert("Error: " + error.message);
        }
    })
});

// Function to delete a product from the database
function deleteProduct(productId) {
    $.ajax({
        url: '../server/deleteProduct.php',
        type: 'POST',
        data: {
            id: productId
        },
        success: function(response) {
            // Remove the table row for the deleted product
            $('#table-body').find('tr[data-id="' + productId + '"]').remove();
        },
        error: function(xhr, status, error) {
            alert("Error: " + error.message);
        }
    });
}
