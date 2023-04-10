<?php
    header('Access-Control-Allow-Origin: *');
    // root
    $beverage = [
     
[    
     
     "path" => ["../img/nes/nes1.png","../img/nes/nes2.png","../img/nes/nes3.png","../img/nes/nes4.jpg"],
     "name" => "Nescafe",
     "year" => "1938",
     "country" => "Switzerland", 
     "creator" => "Max Morgenthaler",
     "products" => ["Nescafe creamy white","Nescafe Creamy latte","Nescafe Original","Nescafe classic"]            
],

[   
     
    
     "path" => ["../img/maid/maid1.png","../img/maid/maid2.png","../img/maid/maid3.png","../img/maid/maid4.png",],
     "name" => "MinuteMaid",  
     "year" => "1945",
     "country" => "United States", 
     "creator" => "John M. Fox",
     "products" => ["AGUAS FRESCAS","ORANGE JUICES","LEMONADES AND FRUIT DRINKS","NVARIETY JUICES"]            
],

[    
    
     "path" => ["../img/coke/coke1.png","../img/coke/coke2.png","../img/coke/coke3.png","../img/coke/coke5.png", ],  
     "name" => "CocaCola", 
     "year" => "1886",
     "country" => "United States", 
     "creator" => "John Stith Pemberton",
     "products" => ["Coca-Cola","Coca-Cola Zero Sugar","Coca-Cola light","Coca-Cola life"]            
],

[   
     
     "path" => ["../img/vodka/ab1.png","../img/vodka/ab2.png","../img/vodka/ab3.png","../img/vodka/ab4.png"],
      "name" => "Vodka", 
     "year" => "1917",
     "country" => "Russia",     
     "creator" => "Isidore",
     "products" => ["Smirnoff","Svedka","Soplica","Nemiroff"]            
],   
               ];

               $data = json_encode($beverage);
               echo $data;
           
           ?>