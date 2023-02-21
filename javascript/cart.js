$(document).ready(function(){
    let total=0
    let quantity=0;
    const cartdata=[];
    let cart = JSON.parse(sessionStorage.getItem("cart"));
    //console.log(cart.length != null);
    if (cart != null & cart.length != 0){
    cart.forEach(cartitem=>{
        cartdata.push({'id':cartitem.id});
      });
      let cartObj={}
      cartObj.array=cartdata;

$.ajax('../server/cartcontent.php', {
    type: 'POST',  // http method
    data: cartObj,
    dataType:'JSON',            // data to submit
    success: function (data, status, xhr) {
         let $pcontainer = $('.cart-container');
       console.log('status: ' + status + ', data: ' + data)
       data.forEach(product=>{
        cart.forEach(cartitem=>{
            if (cartitem.id == product._id.$oid){
                quantity=cartitem.quantity;
            }
        })
        total+=parseInt(product.price)*quantity;
       let input='<div class="product-qty">'+
      ` <input pid="${product._id.$oid}"  type="number" value="${quantity}" id="prod-qty" min="1" max="${product.quantity}">`+
      `</div><div pid="${product._id.$oid}" class="product-delete">`+
      '<lottie-player src="https://assets8.lottiefiles.com/packages/lf20_pdepdwwd.json" background="transparent" speed="1" style="width: 50px; height: 50px;" hover=""></lottie-player>'+
      ' </div>';

        $pcontainer.append($('<div/>',{'class':'cart-item'})
        .append($('<div/>',{'class':'product-image'})
        .append($('<img/>',{'src':`..\\assets\\images\\${product.path}`}))).append($('<div/>',{'class':'product-name',text:product.name})
        ).append($('<div/>',{'class':'product-price',text:"Rs"+" "+product.price})).append(input));
      
       });
       $(".totalprice").text(total);
       $(".subtotalprice").text(total*0.75);
       $(".shippingprice").text(total*0.15);


       $('input[type="number"]').on('change',function(){
        let pid=$(this).attr('pid');
        cart.forEach(cartitem=>{
            if (cartitem.id==pid){
               
                cartitem.quantity=$(this).val();
            }
        })

      
      sessionStorage.setItem("cart",JSON.stringify(cart));
      location.reload();
       });

       
         $('.product-delete').click(function(){  
             let pid=$(this).attr('pid');
             cart.forEach(cartitem=>{
            if (cartitem.id==pid){
            console.log(cart,cartitem);
           const index = cart.indexOf(cartitem);
           if (index > -1) { // only splice array when item is found
             cart.splice(index, 1); // 2nd parameter means remove one item only
           }
              // cart.pop(cartitem.id);
            }
        })
        sessionStorage.setItem("cart",JSON.stringify(cart));
        location.reload();
        });
       
    },
    error: function (jqXhr, textStatus, errorMessage) {
           console.log('Error' + errorMessage);
    }
});
    }
    else{
        $('.checkout-btn').attr('href',"#");
    }
});

