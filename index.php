<?php 
$multiArray = Array( 
    Array("count" => 8, "title" => "Defg", "data" => "adnna"), 
    Array("count" => 67, "title" => "Abcd", "data" => "adnna"), 
    Array("count" => 5, "title" => "Bcde", "data" => "adnna"), 
    Array("count" => 12,"title" => "Cdef", "data" => "adnna")); 
$tmp = Array(); 
foreach($multiArray as &$ma) 
    $tmp[] = &$ma["count"]; 
array_multisort($tmp, $multiArray); 
foreach($multiArray as &$ma) 
    echo $ma["count"]."<br/>"; 
                
/* Outputs 
    Abcd 
    Bcde 
    Cdef 
    Defg 
*/ 
?> 
