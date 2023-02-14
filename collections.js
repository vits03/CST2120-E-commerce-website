
 
 db.users.insert([{
     _id:ObjectId('63da0baf8ad50028be088512'),
     username:"sam",
     password:"F45J34534B345B346",
     name:"samy",
     surname:"smith",
    address:"boulevard street,california",
     email:"samsmith3@gmail.com",
    telephonenum:"23059245312",
     country:"Mauritius",
     cart:[{productid:ObjectId('63de644583cd1eff2b722f64')}]
    
     },{
     username:"tom",
     password:"F45Jsssssss45B346",
     name:"tommmy",
     surname:"smith",
    address:"boulevard street,california",
     email:"tommysmith3@gmail.com",
    telephonenum:23059245312,
     country:"Mauritius"}
    
    ])
 
 db.products.insert([{
     name:"Apple iPhone 14, 128GB, Blue - Unlocked",
     description: [ "Vibrant 6.1-inch Super Retina XDR display with OLED technology. Action mode for smooth, steady, handheld videos",
     "High resolution and color accuracy make everything look sharp and true to life",
     "New Main camera and improved image processing to capture your shots in all kinds of light - especially low light",
     "4K Cinematic mode at 24 fps automatically shifts focus to the most important subject in a scene.",
     "A15 Bionic, with a 5‑core GPU for lightning-fast performance. Superfast 5G"],
    
     price:56500,
     quantity:25,
     category:"Mobile Phones",
     path:"iphone14.png",
     isRemoved:false
 },{

 name:"Samsung s22 128gb",
 description:["6.1, 1080 x 2340pixels, Infinity-O FHD+ Dynamic AMOLED 2X Display, 3700mAh Battery, Wireless Powershare128GB ROM",
 " 8GB RAM, No SD Card Slot, Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm), Octa-Core, Adreno 730",
 "Rear Camera: 50MP f/1.8 + 10MP, f/2.4 + 12MP, f/2.2, Front Camera: 10 MP, f/2.2, Android 12, One UI 4.1",
  "GSM 850/900/1800/1900, CDMA 800/1900, 3G: HSDPA 850/900/1700(AWS)/1900/2100, CDMA2000 1xEV-DO, 4G LTE"],
 price:"66500",
 quantity:21,
 category:"Mobile Phones",
 path:"samsungs22.png",
 isRemoved:false

 }

])
 
 db.orders.insert([{
     orderid:"SS0001",
     totalprice:76800,
     address:"boulevard street,california",
     dateplaced:ISODate("2022-05-15T00:00:00Z"),
     products:[{productid:ObjectId('63de644583cd1eff2b722f64'),quantity:3}],
     customerID:ObjectId('63da0baf8ad50028be088512')
     },{
    orderid:"SS0001",
    totalprice:94300,
    address:"boulevard street,california",
    dateplaced:ISODate("2022-05-15T00:00:00Z"),
    products:[{productid:ObjectId('63de644583cd1eff2b722f64'),quantity:5},{productid:ObjectId('63e3e1bd9edaff14d4c0d694'),quantity:5}],
    customerID:ObjectId('63da0baf8ad50028be088512')
     }])
 

     db.admin.insert([{
        username:"john21",
        password:"admin1234"
        },{
        username:"mary",
        password:"admin9098"
        }])



       ["7-inch OLED screen - Enjoy vivid colors and crisp contrast with a screen that makes colors pop ",
        "Wired LAN port - Use the dock’s LAN port when playing in TV mode for a wired internet connection" ,
       "64 GB internal storage - Save games to your system with 64 GB of internal storage",
     "  Enhanced audio – Enjoy enhanced sound from the system’s onboard speakers when playing in Handheld and Tabletop modes. ",
      " Wide adjustable stand – Freely angle the system’s wide, adjustable stand for comfortable viewing in Tabletop mode. Nintendo Switch – OLED Model supports all Joy-Con controllers and Nintendo Switch software"];

     [ "Vibrant 6.1-inch Super Retina XDR display with OLED technology. Action mode for smooth, steady, handheld videos",
"High resolution and color accuracy make everything look sharp and true to life",
"New Main camera and improved image processing to capture your shots in all kinds of light - especially low light",
"4K Cinematic mode at 24 fps automatically shifts focus to the most important subject in a scene.",
"A15 Bionic, with a 5‑core GPU for lightning-fast performance. Superfast 5G"]


["6.1, 1080 x 2340pixels, Infinity-O FHD+ Dynamic AMOLED 2X Display, 3700mAh Battery, Wireless Powershare128GB ROM",
" 8GB RAM, No SD Card Slot, Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm), Octa-Core, Adreno 730",
"Rear Camera: 50MP f/1.8 + 10MP, f/2.4 + 12MP, f/2.2, Front Camera: 10 MP, f/2.2, Android 12, One UI 4.1",
 "GSM 850/900/1800/1900, CDMA 800/1900, 3G: HSDPA 850/900/1700(AWS)/1900/2100, CDMA2000 1xEV-DO, 4G LTE"]



 db.products.insert([{

    name:"Nintendo Switch-128gb 4K",
    description:
    ["7-inch OLED screen - Enjoy vivid colors and crisp contrast with a screen that makes colors pop ",
     "Wired LAN port - Use the dock’s LAN port when playing in TV mode for a wired internet connection" ,
    "64 GB internal storage - Save games to your system with 64 GB of internal storage",
  "  Enhanced audio – Enjoy enhanced sound from the system’s onboard speakers when playing in Handheld and Tabletop modes. ",
   " Wide adjustable stand – Freely angle the system’s wide, adjustable stand for comfortable viewing in Tabletop mode. Nintendo Switch – OLED Model supports all Joy-Con controllers and Nintendo Switch software"],
    price:"22500",
    quantity:61,
    category:"Tablets",
    path:"nintendoswitch.jpg",
    isRemoved:false
   
    }])


    db.products.insert([{

        name:"KOORUI 24 Inch , FHD PC Monitors 1920 x 1080p",
        description:["FHD Computer Monitor 】 KOORUI 24 inch Full HD ( 1920x1080 ) 16:9 monitor adopts an VA panel with 20000000:1 contrast ratio, display with 85% DCI-P3 color gamut cover, the colors are richer and transitions between hues are smoother. Renders images with stunning color reproduction and precise detail.",
          "【 Motion Blur Reduction 】 The blazing fast 165Hz Refresh Rate displays smooth images, enhancing the overall experience in any game, while providing a crucial advantage in eSports. Experience games in near real time thanks to the 1ms MPRT, which makes the display strobe the backlight. That is highly beneficial in competitive fast-paced games.※ 165Hz Refresh Rate can achieved with DP 1.2 cable; HDMI 1.4 only achieves 144Hz ※",
          "【 Build-in AMD FreeSync Technology 】 Don't let hardware issues negatively impact your performance. Minimize stutter, screen tearing, input lag, and maintain high FPS rates through use of AMD FreeSync technology, no ghosting, no glitching, no blurring. 24 inch monitor also compatible with G-sync technology, presenting you with the most realistic and pure CG game picture quality"],
        price:"6900",
        quantity:48,
        category:"Monitors",
        path:"koorui24inch.jpg",
        isRemoved:false
        
        }])


     
            db.products.insert([{
        
                name:"Apple AirPods (3rd Generation)",
                description: ["Single fit",
                "Force sensor lets you control your entertainment and answer or end calls",
                "Sweat and water resistant for AirPods and charging case",
               " Lightning Charging Case or MagSafe Charging Case",
               " Up to 6 hours of listening time",
               " Up to 30 hours total listening time"],
            
              
                price:"12500",
                quantity:68,
                category:"Wireless Earbuds",
                path:"airpods.jpg",
                isRemoved:false
                
            }])
    

      ["Single fit",
        "Force sensor lets you control your entertainment and answer or end calls",
        "Sweat and water resistant for AirPods and charging case",
       " Lightning Charging Case or MagSafe Charging Case",
       " Up to 6 hours of listening time",
       " Up to 30 hours total listening time"]