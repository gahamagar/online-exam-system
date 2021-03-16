<?php

$rahul=array("buff momo", "chicken chowmin");
for($i=0;$i<count($rahul); $i++){
    echo $rahul[$i];
    echo "</br>";
}

$ganesh=array("lion"=>"wild", "sheep"=>"Domestic", "tiger"=>"wild");
foreach ($ganesh as $key => $value) {
    echo "key".$key. "value=".$value;
    echo"</br>";
}

?>