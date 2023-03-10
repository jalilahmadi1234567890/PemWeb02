<?php
//array asosiatif
        $ns1 = ['id'=>1, 'nim'=>01101, 'uts'=>80, 'uas'=>84, 'tugas'=>78];
        $ns2 = ['id'=>2, 'nim'=>01121, 'uts'=>70, 'uas'=>50, 'tugas'=>68];
        $ns3 = ['id'=>3, 'nim'=>01130, 'uts'=>60, 'uas'=>86, 'tugas'=>70];
        $ns4 = ['id'=>4, 'nim'=>01134, 'uts'=>90, 'uas'=>91, 'tugas'=>82];
        

        $ar_nilai =[$ns1, $ns2, $ns3, $ns4,];

        foreach($ar_nilai as $hasil)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">>
</head>
<body>
    <h3>Tugas Pertemuan 1</h3>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">NIM</th>
            <th scope="col">UTS</th>
            <th scope="col">UAS</th>
            <th scope="col">Tugas</th>
            <th scope="col">Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>


        <?php
//cetak
                $nomor = 1;

                foreach($ar_nilai as $ms){
                    $nilai_akhir = ($ms['uts'] + $ms['uas'] + $ms['tugas']) /3;

        ?>

                <tr>
                    <td> <?= $nomor ?> </td>
                    <td> <?= $ms ['nim'] ?> </td>
                    <td> <?= $ms ['uts'] ?> </td>
                    <td> <?= $ms ['uas'] ?> </td>
                    <td> <?= $ms ['tugas'] ?> </td>
                    <td> <?= number_format($nilai_akhir,2) ?></td>
                </tr>

        <?php
                $nomor++ ;


                }
        ?>
    </tbody>
    </table>
    
</body>
</html>