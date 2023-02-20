 $(document).ready(function(){
      $.ajax({
      url:'../server/products.php',
      type:'get',
      dataType:'JSON',
      success:function(data)
      {
       //console.log(data)
      data.forEach(product => {
        // alert(product.name,product.price,product.path)
         if(product.isRemoved==false){
          let $pcontainer = $('body div.product-wrapper');
  
       $pcontainer.append($('<div/>',{'class':'product-container'}).append(
     ($('<div/>',{'class':'btn-container'}).append(
                      $('<a/>',{text:'View','id':product._id.$oid,'class':'product-link'})
                   ).append(
                      $('<a/>',{'onclick':"openNav()",'class':"addtocart",'id':product._id.$oid,text:'Add to cart'})
                   ))
  
                   
  
  
  
  ).append(
      $('<img/>',{'src':`..\\assets\\images\\${product.path}`})
  ).append(
      $('<div/>',{'class':'product-description',text:product.name}
      )
  ).append(
      $('<div/>',{'class':'product-price',text:"Rs"+product.price})
  )
      )}}); 


       if (!localStorage.getItem("cart")){
        localStorage.setItem("cart",JSON.stringify([]))
       }
      
       $('.addtocart').click(function(){
        let increased=false;
        const cartdata=[];
      let pid=$(this).attr("id");
      //localStorage.setItem("63e3e1bd9edaff14d4c0d694","vitthal");
      if (! localStorage.getItem("cart")){
          localStorage.setItem("cart",JSON.stringify([{"id":pid,"quantity":1}]));
      }
      else{
        let cart = JSON.parse(localStorage.getItem("cart"));
         cart.forEach(item => {
          console.log(pid,item.id,item.id == pid)
          if (item.id == pid){
            item.quantity=parseInt(item.quantity)+1;
            localStorage.setItem('cart',JSON.stringify(cart));
            increased=true
          }
        
         })
         if (increased == false){
            cart.push({"id":pid,"quantity":1});
            localStorage.setItem('cart',JSON.stringify(cart));
          }
          cart.forEach(cartitem=>{
            cartdata.push({'id':cartitem.id});
          })
       // localStorage.setItem("cart",JSON.stringify(cart));
      }
      $('.cart-item').detach();
      let cartObj={}
      cartObj.array=cartdata;
      console.table(cartObj);
      console.table(cartdata);
      //get request to server to get all products details
      $.ajax('../server/cartcontent.php', {
        type: 'POST',  // http method
        data: cartObj,
        dataType:'JSON',            // data to submit
        success: function (data, status, xhr) {
           console.log('status: ' + status + ', data: ' + data)
           data.forEach(product=>{
            let $sidebar = $('body div.item-container');
  
            $sidebar.append($('<div/>',{'class':'cart-item'})
            .append($('<div/>',{'class':'product-image'})
            .append($('<img/>',{'src':`..\\assets\\images\\${product.path}`}))).append($('<div/>',{'class':'product-name',text:product.name})
            ).append($('<div/>',{'class':'product-price',text:product.price})));
           })
          
        
        },
        error: function (jqXhr, textStatus, errorMessage) {
               console.log('Error' + errorMessage);
        }
    });
      //display in sidebar.
      });
     
      $('.product-link').click(function(){
        let path=`../PHP/productpage.php?id=${$(this).attr("id")}`;
        window.location=path;
      
      });
  
  }})
  
  });






  $("#searchbar-input").keyup(function(){
    let  productName=$(this).val()
    alert(productName);
    if (productName==""){
      $('.dropdown-content-search').css('display','none');

    }
  })

  $("#searchbar-input").keypress(function(){
  
    let  productName=$(this).val()
    //alert(productName);
    //alert(productName);
    $('.dropdown-content-search').empty();
   // $("#searchbar-input").append($('<div/>',{'class':'dropdown-content-search'}))
    $('.dropdown-content-search').css('display','block');
 if (productName==""){
      $('.dropdown-content-search').css('display','none');

    }
    $.ajax({
      url:`../server/productsearch.php?search=${productName}`,
      type:'get',
      dataType:'JSON',
      success:function(data)
      {
       console.table(data)
      data.forEach(product => {
        $('.dropdown-content-search').append($('<a/>',{text:product.name,'href':`productpage.php?id=${product._id.$oid}`}))
        console.log(product)
      }
    
     )
    }
    }
    )



     });
  

(function () {
    const slider = document.querySelector(".main-slider");
    const imagenes = document.querySelector(".slider-imagenes");
    const controles = document.querySelectorAll(".count-imagenes-num");
    const img = document.querySelectorAll(".slider-img");
    const countimg = document.querySelectorAll(".slider-img").length;
    const next = document.querySelector(".slider-controles-next");
    const previous = document.querySelector(".slider-controles-previous");
    const imgactivo = document.querySelectorAll(".slider-img.activo");
   
  

    controlesPuntos();
    desplazamiento();
    setInterval(auto, 4500);
    next.addEventListener("click", () => btnNext());
    previous.addEventListener("click", () => btnPrevious());
  
    function controlesPuntos() {
      controles.forEach((punto, i) => {
        controles[i].addEventListener("click", () => {
          let scrollWidth = slider.scrollWidth;
          let posicion = i;
          let operacion = posicion * -scrollWidth;
          controles.forEach((punto, i) => {
            controles[i].classList.remove("activo");
          });
          img.forEach((punto, i) => {
            img[i].classList.remove("activo");
          });
          img[i].classList.add("activo");
          controles[i].classList.add("activo");
        });
      });
    }
  
    function posicion() {
      var pos;
      img.forEach((punto, i) => {
        if (img[i].className === "slider-img activo") {
          pos = i;
        }
      });
      return pos;
    }
  
    function btnNext() {
      let pos = posicion();
      pos = pos + 1;
      if (pos >= countimg) {
        pos = 0;
      } else {
        pos = pos;
      }
      controles.forEach((punto, i) => {
        controles[i].classList.remove("activo");
      });
      img.forEach((punto, i) => {
        img[i].classList.remove("activo");
      });
      img[pos].classList.add("activo");
      controles[pos].classList.add("activo");
    }
  
    function btnPrevious() {
      let pos = posicion();
      pos = pos - 1;
      if (pos < 0) {
        pos = countimg - 1;
      } else {
        pos = pos;
      }
      controles.forEach((punto, i) => {
        controles[i].classList.remove("activo");
      });
      img.forEach((punto, i) => {
        img[i].classList.remove("activo");
      });
      img[pos].classList.add("activo");
      controles[pos].classList.add("activo");
    }
  
    function auto() {
      let pos = posicion();
      pos = pos + 1;
      if (pos >= countimg) {
        pos = 0;
      } else {
        pos = pos;
      }
      controles.forEach((punto, i) => {
        controles[i].classList.remove("activo");
      });
      img.forEach((punto, i) => {
        img[i].classList.remove("activo");
      });
      img[pos].classList.add("activo");
      controles[pos].classList.add("activo");
    }
  
    function desplazamiento() {
      img.forEach((punto, i) => {
        img[i].addEventListener("dragstart", (e) => e.preventDefault());
        let pressed = false;
        let startX = 0;
  
        img[i].addEventListener("mousedown", function (e) {
          pressed = true;
          startX = e.clientX;
        });
  
        img[i].addEventListener("mouseleave", function (e) {
          pressed = false;
        });
  
        window.addEventListener("mouseup", function (e) {
          pressed = false;
        });
  
        img[i].addEventListener("mousemove", function (e) {
          if (!pressed) {
            return;
          }
  
          let abc = (this.scrollLeft += startX - e.clientX);
  
          if (abc >= 0) {
            console.log(abc);
            btnNext();
          } else {
            btnPrevious();
          }
        });
      });
    }
  })();
  

  var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.textContent = this.value;
} 

function openNav() {
  document.getElementById("mySidebar").style.width = "25%";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
}

