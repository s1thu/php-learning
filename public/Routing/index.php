<?php
 $urlMap =[
     '/1' => 'public/Routing/1.php',
     '/2' => 'public/Routing/2.php',
     '/3' => 'public/Routing/3.php'
 ];

 if(isset($urlMap[$_SERVER['REQUEST_URI']])) {
     include(__DIR__ . '/' . $urlMap[$_SERVER['REQUEST_URI']]);
 }else{
     $title = "Home Page";
     include(__DIR__ . '/1.php');
 }