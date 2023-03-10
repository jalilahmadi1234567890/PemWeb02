<?php
$profileArray = [
    "nama" => "Jalil Rambe", 
    "kelas" => "SI14"
];

print_r($profileArray);
echo "<br>";

$profileMultiArray = [
    [
        'nama' => 'Jalil',
        'kelas' => 'SI14'
    ],  [
        'nama' => 'Ahmad',
        'kelas' => 'SI13'
    ],  [
        'nama' => 'Rambe',
        'kelas' => 'SI15'
    ]
    ];

foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
}