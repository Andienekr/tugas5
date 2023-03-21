<?php
$mahasiswa = [
    ['Andiana','🥗','🐇'],
    ['Ekaa','🌭','🙈'],
    ['Riyanto','🍟','🐷'],
    ['Surya','🍳','🐼'],
    ['Mamang','🍔','🐊']
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
        <li>Nama:<?= $mh[0]?></li>
        <li>Makanan Favorit:<?= $mh[1]; ?></li>
        <li>Peliharaan:<?= $mh[2]; ?></li>
    </ul>
    <?php } ?>
    
</body>
</html>
