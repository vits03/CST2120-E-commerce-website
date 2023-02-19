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

            // Add an input event listener to the search input element
            $('#search').on('input', function() {
                var searchValue = $(this).val().toLowerCase();
                $('#table-body tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
                });
            });

            $('#sort-asc').on('click', function() {
                var tableRows = $('#table-body tr');
                tableRows.sort(function(a, b) {
                    var aVal = $(a).find('td:nth-child(2)').text();
                    var bVal = $(b).find('td:nth-child(2)').text();
                    return aVal.localeCompare(bVal);
                });
                $('#table-body').empty().append(tableRows);
            });

            // Add a click event listener to the "Sort by" dropdown
            $('#sort-desc').on('click', function() {
                var rows = tableBody.find('tr').get();
                rows.sort(function(a, b) {
                var nameA = $(a).find('td:eq(1)').text().toUpperCase();
                var nameB = $(b).find('td:eq(1)').text().toUpperCase();
                if (nameA < nameB) {
                    return 1;
                }
                if (nameA > nameB) {
                    return -1;
                }
                return 0;
                });
                $.each(rows, function(index, row) {
                tableBody.append(row);
                });
            });

            $('#sort-price-low-to-high').on('click', function() {
                var tableRows = $('#table-body tr');
                tableRows.sort(function(a, b) {
                    var aVal = parseFloat($(a).find('td:nth-child(4)').text().replace('$', ''));
                    var bVal = parseFloat($(b).find('td:nth-child(4)').text().replace('$', ''));
                    return aVal - bVal;
                });
                $('#table-body').empty().append(tableRows);
            });

            // Add a click event listener to the "Sort by" dropdown
            $('#sort-price-high-to-low').on('click', function() {
                var rows = tableBody.find('tr').get();
                rows.sort(function(a, b) {
                    var priceA = parseFloat($(a).find('td:eq(3)').text());
                    var priceB = parseFloat($(b).find('td:eq(3)').text());
                    return priceB - priceA;
                });
                $.each(rows, function(index, row) {
                    tableBody.append(row);
                });
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
