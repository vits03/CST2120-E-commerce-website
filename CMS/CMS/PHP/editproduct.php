<?php
include('common.php');

outputHeader('editproduct','TabaJ-Admin');

// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If the user is not logged in, redirect them to the login page
    header("Location: adminlogin.php");
    exit();
} else {
    echo'<!--INSERT ALL CONTENT HERE-->
    <div class="addproduct-addition-container">
    <div class="addproducts-container">
        
        <div class="add-product"> 
            <form><p>Edit a product</p>

            <label for="fname" class="block">Product name</label>
            <textarea id="productname" rows="4" cols="50" type="text"></textarea>
            <div class="error-message" id="errorProductName"></div>

            <label for="fname" class="block">Product Description (separate with comma)</label>
            <textarea id="description" rows="8" cols="50" type="text"></textarea>
            <div class="error-message" id="errorDescription"></div>

            <label for="fname" class="block">Price (Rs)</label>
            <textarea id="price"rows="2" cols="50" type="number" min"0" max="9999999"></textarea>
            <div class="error-message" id="errorPrice"></div>
            <label for="fname" class="block">Quantity</label>
            <textarea id="quantity" rows="2" cols="50" type="number" min="0" max="9999"></textarea>
            <div class="error-message" id="errorQuantity"></div>


                <p>Choose a category</p>

                <input type="radio" id="category1" name="category" value="Mobile Phones">
                <label for="category1">Mobile Phones</label><br>

                <input type="radio" id="category2" name="category" value="Tablets">
                <label for="category2">Tablets</label><br>  

                <input type="radio" id="category3" name="category" value="Monitors">
                <label for="category3">Monitors</label><br>

                <input type="radio" id="category3" name="category" value="Wireless Earbuds">
                <label for="category3">Wireless earbuds</label><br>

                <input type="radio" id="category3" name="category" value="Televisions">
                <label for="category3">Televisions</label>
                <div class="error-message" id="errorCategory"></div><br>

                <input type="file" id="image" name="image">
                <div class="error-message" id="errorImage"></div><br>

            <input type="submit" value="Submit">
                
                
            </form></div>
    </div>
    </div>


    <script src="..\javascript\editproduct.js"></script>
    </div>

    ';
}




outputFooter();
?>