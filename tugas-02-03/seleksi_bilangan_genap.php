<?php
$data=array();
"</br>";
 for ($i=1; $i<=100; $i++){
     //echo "Ini Perulangan ke : ".$i."</br>";
 }
$i = rand(1, 1000);
//print_r($i);

array_push($data, $i);
print_r($data);

if($i % 2 == 0){
    
    echo "</br>.$i Adalah bilangan genap";
}
else
{
    echo "";
}

?>