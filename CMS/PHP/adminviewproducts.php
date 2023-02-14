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
        <div class="search-button">
            <button class="button-68" id="search-btn" role="button">Search</button>
        </div>
    </div>
    <div class="filter">
        <details class="dropdown">
            <summary role="button">
              <a class="button">Filter by</a>
            </summary>
            <ul>
              <li><a href="#">Product ID</a></li>
              <li><a href="#">Product Name</a></li>
              <li><a href="#">Category</a></li>
              <li><a href="#">Price</a></li>
              <li><a href="#">Quantity</a></li>
          </ul>
        </details>
    </div>
</div>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
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