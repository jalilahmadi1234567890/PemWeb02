<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "Jalil" && $password == "jalil"){
    echo "Login Berhasil";
} else{
    echo "Login Gagal";
}