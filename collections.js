
 
 db.users.insert([{
     username:"sam",
     password:"F45J34534B345B346",
     name:"samy",
     surname:"smith",
    address:"boulevard street,california",
     email:"samsmith3@gmail.com",
    telephonenum:"23059245312",
     country:"Mauritius"
    
     },{
     username:"tom",
     password:"F45Jsssssss45B346",
     name:"tommmy",
     surname:"smith",
    address:"boulevard street,california",
     email:"tommysmith3@gmail.com",
    telephonenum:"23059245312",
     country:"Mauritius"}
    
    ])
 
 db.products.insert([{
    
     name:"Iphone 14 128gb",
     description:"......",
     price:"56500",
     quantity:"25",
     category:"Mobile Phones",
     path:"iphone14.png",
     isRemoved:false
 },{

 name:"Samsung s22 128gb",
 description:"......",
 price:"66500",
 quantity:"21",
 category:"Mobile Phones",
 path:"samsungs22.png",
 isRemoved:false

 }

])
 
 db.orders.insert([{

     totalprice:76800,
     address:"boulevard street,california",
     dateplaced:ISODate("2022-05-15T00:00:00Z"),
     products:[{productid:ObjectId('63de644583cd1eff2b722f64'),quantity:3}],
     customerID:ObjectId('63da0baf8ad50028be088512')
     },{

    totalprice:"94300",
    address:"boulevard street,california",
    dateplaced:ISODate("2022-05-15T00:00:00Z"),
    products:[{productid:ObjectId('63de644583cd1eff2b722f64'),quantity:5}],
    customerID:ObjectId('63da0baf8ad50028be088512')
     }])
 

     db.admin.insert([{
        username:"john21",
        password:"admin1234"
        },{
        username:"mary",
        password:"admin9098"
        }])