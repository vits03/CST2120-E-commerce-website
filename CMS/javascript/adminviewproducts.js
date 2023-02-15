

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
                var row = '<tr>' +
                '<td>' + product._id.$oid + '</td>' +
                '<td>' + product.name + '</td>' +
                '<td>' + product.category + '</td>' +
                '<td>' + product.price + '</td>' +
                '<td>' + product.quantity + '</td>' +
                '<td class="buttons">' +
                '<a class="button-68" href="editproduct.php?id=' + product._id.$oid +'" id="edit" role="button">Edit</a>' +
                '<div class="delete-button">' +
                '<button class="button-68" id="delete" onclick="deleteCollection()" role="button">Delete</button>' +
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