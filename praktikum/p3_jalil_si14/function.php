<?php

function hitungUmur($tahunLahir){
    $tahunSekarang =2023;
    echo $tahunSekarang - $tahunLahir;
}

hitungUmur(2001);
echo "<br>";
hitungUmur(1999);
echo "<br>";
hitungUmur(1998);
echo "<br>";
hitungUmur(2004);
echo "<br>";

function welcome($nama)
{
    echo "Hello, Selamat datang $nama!";
}

welcome("Jalil");
echo "<br>";
welcome("Rambe");