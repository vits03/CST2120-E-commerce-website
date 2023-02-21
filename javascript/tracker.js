//create an object in local storage 
//store the users search items on the main page and store them in local storage.

keywordFound=false;

//store their searched product query and the frequency of categories .
tracking={
   keywordSearched:[{word:"app",frequency:1},{word:"s",frequency:1},{word:"n",frequency:1}],
   categories:[{category:"Mobile Phones",frequency:2},]
   

}

localStorage.setItem("tracking",JSON.stringify(tracking));

console.log(JSON.parse(localStorage.getItem("tracking")).keywordSearched[0].word);


function DisplayRecommended(){
   
    let keywords=JSON.parse(localStorage.getItem("tracking")).keywordSearched;
     for(let i=0;i<2;i++){
     getProduct(keywords[i].word);

}
}

$("input").change(function(){
    keywordFound=false;
    keyword=$(this).val();
    if (keyword == ""){
        return;
    }
    tracker_arr=JSON.parse(localStorage.getItem("tracking"));
    alert(keyword);
    tracker_arr.keywordSearched.forEach(element => {
    if (element.word == keyword){
        element.frequency+=1;
        
        keywordFound=true;
    }

    
});
  tracker_arr.keywordSearched.sort(function(a, b){return b.frequency - a.frequency});
  if (keywordFound  == false){
    if (tracker_arr.keywordSearched.length > 5){
        alert("limit");
        tracker_arr.keywordSearched.pop();
    }
    tracker_arr.keywordSearched.push({word:keyword,frequency:1})
  }
  localStorage.setItem("tracking",JSON.stringify(tracker_arr));

  DisplayRecommended();
  

})









function getProduct(product){
    let $pcontainer = $('body div.recommended-container');
$pcontainer.empty()
$.ajax({
    url:`../server/productsearch.php?search=${product}`,
    type:'get',
    dataType:'JSON',
    success:function(data)
    {
     let index=0;
     console.log(data)
    data.forEach(product => {
      // alert(product.name,product.price,product.path)
       if(product.isRemoved==false && index<2){
         index+=1;

     $pcontainer.append($('<div/>',{'class':'product-container'}).append(
   ($('<div/>',{'class':'btn-container'}).append(
                    $('<a/>',{text:'View','id':product._id.$oid,'class':'product-link',"href":`../PHP/productpage.php?id=${product._id.$oid}`})
                 ).append(
                    $('<a/>',{'onclick':`add_to_cart("${product._id.$oid}")`,'class':"addtocart",'id':product._id.$oid,text:'Add to cart'})
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
    }});

}


$(document).ready(function(){
    DisplayRecommended();
})


//send request to server to find 2 or more  most searched keywords in tracking (first two elements in array keywords searched)
//display data using jquery 