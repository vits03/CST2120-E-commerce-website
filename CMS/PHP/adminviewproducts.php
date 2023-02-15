<?php

include('common.php');

outputHeader('adminviewproducts','TabaJ-Admin');

echo'
<div class="main-content">
<div class="page-heading">
    <h1>View Products</h1>
</div>
<div class="filter-container">
    <div class="search-container">
        <div class="search-input">
            <input id="search" placeholder="Search..." type="text">
        </div>
    </div>
    <div class="filter">
        <details class="dropdown">
            <summary role="button">
              <a class="button">Sort by</a>
            </summary>
            <ul>
              <li><a href="#" id="sort-asc">Name: Ascending</a></li>
              <li><a href="#" id="sort-desc">Name: Descending</a></li>
              <li><a href="#" id="sort-price-low-to-high">Price: Low to High</a></li>
              <li><a href="#" id="sort-price-high-to-low">Price: High to Low</a></li>
          </ul>
        </details>
    </div>
</div>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>Product ID</th>
                <th id="product-name-header">Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody id="table-body">
            <tbody>
        </table>
        <script src="..\javascript\adminviewproducts.js"></script>
        
    </div>
    
    '
    ;
outputFooter();

?>