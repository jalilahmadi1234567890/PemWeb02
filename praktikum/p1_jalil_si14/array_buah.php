<?php
//membuat array
$arrayBuah = ["Apel","Jeruk","Mangga","Apel","Durian"];

//cara pertama
print_r($arrayBuah);
echo "<br>";
//cara kedua
var_dump($arrayBuah);
echo "<br>";
//cara ketiga
foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}