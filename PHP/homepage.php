<?php
 include('common.php');



outputHeader("homepage","homepage");


?>


<div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <div class="item-container">
    <div class="button">
      <a href="cart.php">
        <button class="button-87" role="button">Go to Cart</button>
      </a>
    </div>
  </div>
</div>


<!-- Carousel -->
<div class="carousel">
    <div class="container-main">
        <div class="main-slider">
          <div class="slider-imagenes">
            <div class="slider-img activo"><img src="..\assets\images\tablet.webp" alt=""></div>
            <div class="slider-img"><img src="..\assets\images\monitor.jpg" alt=""></div>
            <div class="slider-img"><img src="..\assets\images\phone4.jpg" alt=""></div>
            <div class="slider-img"><img src="..\assets\images\phone3.webp" alt=""></div>
          </div>
          <div class="slider-controles">
            <div class="slider-controles-previous">
              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="35" height="35" x="0" y="0" viewBox="0 0 55.753 55.753" style="enable-background:new 0 0 35 35" xml:space="preserve" class="">
                <g>
                  <g>
                    <path d="M12.745,23.915c0.283-0.282,0.59-0.52,0.913-0.727L35.266,1.581c2.108-2.107,5.528-2.108,7.637,0.001
              c2.109,2.108,2.109,5.527,0,7.637L24.294,27.828l18.705,18.706c2.109,2.108,2.109,5.526,0,7.637
              c-1.055,1.056-2.438,1.582-3.818,1.582s-2.764-0.526-3.818-1.582L13.658,32.464c-0.323-0.207-0.632-0.445-0.913-0.727
              c-1.078-1.078-1.598-2.498-1.572-3.911C11.147,26.413,11.667,24.994,12.745,23.915z" fill="#FFFFFF" data-original="#FFFFFF" class=""></path>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </g>
              </svg>
            </div>
            <div class="slider-controles-next">
              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="35" height="35" x="0" y="0" viewBox="0 0 55.752 55.752" style="enable-background:new 0 0 35 35" xml:space="preserve" class="">
                <g>
                  <g>
                    <path d="M43.006,23.916c-0.28-0.282-0.59-0.52-0.912-0.727L20.485,1.581c-2.109-2.107-5.527-2.108-7.637,0.001
              c-2.109,2.108-2.109,5.527,0,7.637l18.611,18.609L12.754,46.535c-2.11,2.107-2.11,5.527,0,7.637c1.055,1.053,2.436,1.58,3.817,1.58
              s2.765-0.527,3.817-1.582l21.706-21.703c0.322-0.207,0.631-0.444,0.912-0.727c1.08-1.08,1.598-2.498,1.574-3.912
              C44.605,26.413,44.086,24.993,43.006,23.916z" fill="#FFFFFF" data-original="#FFFFFF" class=""></path>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </g>
              </svg>
            </div>
          </div>
          <div class="slider-count-imagenes">
            <div class="count-imagenes">
              <div class="count-imagenes-num activo"></div>
              <div class="count-imagenes-num"></div>
              <div class="count-imagenes-num"></div>
              <div class="count-imagenes-num"></div>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="recommended"><div class="recommended-text">Recomended for you</div>
<div class="recommended-container">
  
<div class="product-container">
              
</div>
</div>
<!-- Categories of Electronics -->
<div class="option-container">
  <div class="option phones">
      Mobile phones
  </div>
  <div class="option televisions">Televisions</a></div>
  <div class="option tablets">Tablets</div>
  <div class="option earbuds">wireless earbuds</div>
  <div class="option monitors">Monitors</div>
</div>

<!-- Filter Container -->
<div class="product-filter">
  <div class="filter">

  <p>Sort by price</p>
  <div class="slidecontainer">
    <input type="range" min="500" max="100000" value="5000" class="slider" id="myRange">
  </div>
   <span>Rs</span> <span id="demo"></span>
<div class="categories">
  <p>Categories</p>
  <form >
    <input type="checkbox" id="Phones" name="Phones" value="Phones">
    <label for="Phones"> Mobile Phones</label><br>
    <input type="checkbox" id="Tablets" name="Tablets" value="Tablets">
    <label for="Tablets"> Tablets</label><br>
    <input type="checkbox" id="Televisions" name="Televisions" value="Televisions">
    <label for="Televisions"> Televisions</label><br>
    <input type="checkbox" id="Monitors" name="Monitors" value="Monitors">
    <label for="Monitors"> Monitors</label><br>
    <input type="checkbox" id="wireless-earbuds" name="wireless earbuds" value="wireless earbuds">
    <label for="earbuds">wireless Earbuds</label><br>
  </form>
</div>
  </div>

  <!-- Sort by Products -->
  <div class="products">
   
     <div class="filter-menu"><select name="language" id="language">
          <option value="javascript" selected>Sort by </option>
          <option value="Ascending">Price:Ascending</option>
          <option value="Descending" >Price:Descending</option>
          <option value="Sort by Popularity" >Popularity</option>
        </select>
      </div>

      <div class="product-wrapper">
        
          </div>       
      </div>

  </div>
</div>
</div>


<?php
 
outputFooter("homepage");

?>