<?php

include('common.php');

outputHeader('admincustomerorder',"TabaJ-Admin");

echo'
<!--INSERT ALL CONTENT HERE-->
<div class="main-content">
    <div class="page-heading">
        <h1>Customer Order</h1>
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
                  <a class="button">Filter by</a>
                </summary>
                <ul>
                  <li><a href="#">Order ID</a></li>
                  <li><a href="#">Customer ID</a></li>
                  <li><a href="#">Products</a></li>
                  <li><a href="#">Total</a></li>
                  <li><a href="#">Options</a></li>
              </ul>
            </details>
        </div>
    </div>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer ID</th>
                    <th>Products</th>
                    <th>Total</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody id="table-body">

                <tbody>
            </table>
            <script src="..\javascript\admincustomerorder.js"></script>
        </div>


    </div>
</div>


';
outputFooter();

?>