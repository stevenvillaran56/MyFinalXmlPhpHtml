<?php
    header('Access-Control-Allow-Origin: *');
    // root
    $Beverage = [
        [ 
     "name" => "Nescafe",
     "year" => "1938",
     "country" => "Switzerland", 
     "place" => "Swiss town of Orbe", 
     "creator" => "Max Morgenthaler",
     "products" => ["Nescafe creamy white","Nescafe Creamy latte","Nescafe Original","Nescafe classic"]            
],
[    "name" => "MinuteMaid",  
     "year" => "1945",
     "country" => "United States", 
     "place" => "Sugar Land, Texas", 
     "creator" => "John M. Fox",
     "products" => ["AGUAS FRESCAS","ORANGE JUICES","LEMONADES AND FRUIT DRINKS","NVARIETY JUICES"]            
],

[    "name" => "CocaCola", 
     "year" => "1886",
     "country" => "United States", 
     "place" => "Georgia", 
     "creator" => "John Stith Pemberton",
     "products" => ["Coca-Cola","Coca-Cola Zero Sugar","Coca-Cola light","Coca-Cola life"]            
],

[    "name" => "Vodka", 
     "year" => "1917",
     "country" => "Russia", 
     "place" => "St. Petersburg", 
     "creator" => "Isidore",
     "products" => ["Smirnoff","Svedka","Soplica","Nemiroff"]            
],   

               ];

               $data = json_encode($Beverage);
               echo $data;
               ?>