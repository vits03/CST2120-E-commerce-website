$(document).ready(function() {
    $.ajax({
        url: '../server/getOrder.php',
        type: 'GET',
        success: function(response) {
            var orders = response;
            console.log(orders);
            var tableBody = $('#table-body');
            for (var i = 0; i < orders.length; i++) {
                var order = orders[i];
                var row = '<tr data-id="' + order._id.$oid + '">' +
                '<td>' + order._id.$oid + '</td>' +
                '<td>' + order.customerID.$oid + '</td>' +
                '<td>' + order.products[0].quantity + '</td>' +
                '<td>' + order.totalprice + '</td>' +
                '<td class="buttons">' +
                '<a class="button-68" href="customerorderdetails.php?id=' + order._id.$oid +'" id="edit" role="button">View</a>' +
                '<div class="delete-button">' +
                '<button class="button-68 delete" id="delete" data-id="' + order._id.$oid + '">Delete</button>' +
                '</div>' +
                '</td>' +
                '</tr>';
                tableBody.append(row);
            }
            
            // Add a click event listener to the "Delete" buttons
            $('.delete-button').on('click', 'button.delete', function() {
                var orderID = $(this).data('id');
                // Confirm the deletion
                if (confirm("Are you sure you want to delete this order?")) {
                    deleteProduct(orderID);
                }
            });
        },
        
        error: function(xhr, status, error) {
            alert("Error: " + error.message);
        }
    })
});

// Function to delete a order from the database
function deleteProduct(orderID) {
    $.ajax({
        url: '../server/deleteOrder.php',
        type: 'POST',
        data: {
            id: orderID
        },
        success: function(response) {
            // Remove the table row for the deleted order
            $('#table-body').find('tr[data-id="' + orderID + '"]').remove();
        },
        error: function(xhr, status, error) {
            alert("Error: " + error.message);
        }
    });
}
