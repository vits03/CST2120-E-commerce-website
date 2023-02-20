function openModal() {
    document.getElementById("demo-modal").style.visibility = "visible";
    document.getElementById("demo-modal").style.opacity = "1";
}

function closeModal() {
    document.getElementById("demo-modal").style.visibility = "hidden";
    document.getElementById("demo-modal").style.opacity = "0";
}

$(document).ready(function(){
    let total=0
    let quantity=0;
    const cartdata=[];
    let cart = JSON.parse(localStorage.getItem("cart"));
    if (cart != null){
    cart.forEach(cartitem=>{
        cartdata.push({'id':cartitem.id});
      });
      let cartObj={}
      cartObj.array=cartdata;
  $('.button-82-pushable').click(function(){
    
    const currentdate = Date.now();
let order={"orderid":"S00432","totalprice":23331,"address":"temple road belle",
"dateplaced":currentdate,"products":cart,"customerID":"63de635283cd1eff2b722f60"}
    $.ajax('../server/checkout_server.php', {
        type: 'POST',  // http method
        data: order,            // data to submit
        success: function (data, status, xhr) {
           console.log(data);
        }
        });
  })
$.ajax('../server/cartcontent.php', {
    type: 'POST',  // http method
    data: cartObj,
    dataType:'JSON',            // data to submit
    success: function (data, status, xhr) {
         let $pcontainer = $('.items');
         let $cartcontainer=$('.cart');
       console.log('status: ' + status + ', data: ' + data)
       data.forEach(product=>{
        cart.forEach(cartitem=>{
            if (cartitem.id == product._id.$oid){
                quantity=cartitem.quantity;
            }
        });
        total+=parseInt(product.price)*quantity;
      
        $pcontainer.append($('<div/>',{'class':'item-detail'})
        .append($('<div/>',{'class':'product-photo'})
        .append($('<img/>',{'src':`..\\assets\\images\\${product.path}`}))).append($('<div/>',{'class':'product-desc'}).append($('<h4/>',{text:product.name}))
        ).append($('<div/>',{'class':'product-price'}).append($("<h4/>",{text:"Rs"+" "+product.price}))).append($("<div/>",{"class":"quantity",text:"X"+quantity})));
      
       });
       $(".totalprice").text('Rs ' + total);
       $(".subtotalprice").text('Rs ' + total*0.75);
       $(".shippingprice").text('Rs ' + total*0.15);
      
         
       
    },
    error: function (jqXhr, textStatus, errorMessage) {
           console.log('Error' + errorMessage);
    }
});
    }
});