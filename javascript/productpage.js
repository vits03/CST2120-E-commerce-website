
$("#searchbar-input").keypress(function(){
  
    let  productName=$(this).val()
    //alert(productName);
    $('.dropdown-content-search').empty();
   // $("#searchbar-input").append($('<div/>',{'class':'dropdown-content-search'}))
    $('.dropdown-content-search').css('display','block');
 if (productName==""){
      $('.dropdown-content-search').css('display','none');

    }
    console.log("outer ");
    $.get({
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
  