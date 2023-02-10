$(".product-link").Click(function(){
    $.get({
    url:`../server/productdetails.php?id=${$(this).id}`,
    type:'get',
    dataType:'JSON',
    success:function(data)
    {
     console.log(data)
    data.forEach(product => {
      // alert(product.name,product.price,product.path)
        let $pcontainer = $('body div.product-wrapper');

    }
   )

}
}
)});
    