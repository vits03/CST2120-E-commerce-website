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
                <tbody>
                <tr>
                    <td>O8771</td>
                    <td>C0098</td>
                    <td>5</td>
                    <td>2500</td>
                    <td class="buttons">
                        <div class="edit-button" >
                            <button class="button-68" id="edit" role="button">Edit</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>O7667</td>
                    <td>C0091</td>
                    <td>2</td>
                    <td>69420</td>
                    <td class="buttons">
                        <div class="edit-button" >
                            <button class="button-68" id="edit" role="button">Edit</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="buttons">
                        <div class="edit-button" >
                            <button class="button-68" id="edit" role="button">Edit</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="buttons">
                        <div class="edit-button" >
                            <button class="button-68" id="edit" role="button">Edit</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="buttons">
                        <div class="edit-button" >
                            <button class="button-68" id="edit" role="button">Edit</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="buttons">
                        <div class="edit-button" >
                            <button class="button-68" id="edit" role="button">Edit</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="buttons">
                        <div class="edit-button" >
                            <button class="button-68" id="edit" role="button">Edit</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="buttons">
                        <div class="edit-button" >
                            <button class="button-68" id="edit" role="button">Edit</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="buttons">
                        <div class="edit-button" >
                            <button class="button-68" id="edit" role="button">Edit</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="buttons">
                        <div class="edit-button" >
                            <button class="button-68" id="edit" role="button">Edit</button>
                        </div>
                    </td>
                </tr>
                <tbody>
            </table>
        </div>


    </div>
</div>


';
outputFooter();

?>