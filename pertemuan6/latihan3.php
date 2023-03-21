//array associative
//adalah yang indexnya adalah string yang kita buat sendiri

<?php
$mahasiswa = [
    [
        'nama' =>'Andiana',
        'makanan' =>['🥗','🌭'],
        'hewan' =>'🐇'
    ],
    [
        'nama' =>'Ekaa',
        'makanan' =>['🌭','🥗','🍳'],
        'hewan' =>'🙈'
    ],
    [
        'nama' =>'Riyanto',
        'makanan'=>['🍟','🍔'],
        'hewan'=>'🐷'
    ],
    [
        'nama' =>'Surya',
        'makanan' =>['🍳'],
        'hewan' =>'🐼'
    ],
    [
        'nama'=>'Mamang',
        'makanan' =>['🍔'],
        'hewan' =>'🐊'
        ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2> Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $mh) { ?>
    <ul>
        <li>Nama:<?= $mh['nama']?></li>
        <li>Makanan Favorit:
            <?php foreach ($mh ['makanan'] as $m) {
                echo $m;
            } ?>
        </li>
        <li>Peliharaan:<?= $mh['hewan']; ?></li>
    </ul>
    <?php } ?>
    
</body>
</html>