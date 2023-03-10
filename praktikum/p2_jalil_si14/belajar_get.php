<?php
$nama = $_GET['nama'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$matkul = $_GET['matkul'];
$nilai = $_GET['nilai'];

echo "Form Pendaftaran Mahasiswa <br>";
echo "Nama : " . $nama . "<br>";
echo "Jenis Kelamin : " . $jenis_kelamin . "<br>";
echo "Mata Kuliah : " . $matkul . "<br>";
echo "Nilai : " . $nilai . "<br>";