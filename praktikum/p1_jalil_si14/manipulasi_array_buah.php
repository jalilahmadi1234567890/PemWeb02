<?php
$arrayBuah = ["Apel","Jeruk","Mangga","Melon","Durian"];

//mengurutkan value dari array
sort($arrayBuah);

//menghapus value array yang terakhir
array_pop($arrayBuah);

//menghapus spesifik value pada array
unset($arrayBuah[2]);

//menambah value array di akhir
array_push($arrayBuah,"Salak");

//menghapus value yang paling depan
array_shift($arrayBuah);

//menambahkan value array di depan
array_unshift($arrayBuah,"Sirsak");

//mengubah value array tertentu
$arrayBuah[2] = "Pisang";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}