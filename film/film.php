<?php
$film = [
    [
        'Judul' =>'Aladdin',
        'Tahun' =>'2019',
        'Genre' =>'Romantis',
        'Pemeran Utama' => ['Mena Massoud','Naomi Scoutt'],
        'Sutradara' => 'Guy Ritchie'
        'gambar' => 'aladdin.png'
    ],
    [
        'Judul' =>'Tangled',
        'Tahun' =>'2010',
        'Genre' =>'Advanture',
        'Pemeran Utama' => ['Zachary levi','Mandy Moore','Donna Murphy'],
        'Sutradara' => 'Nathan Greno'
    ],
    [
        'Judul' =>'Mars Need Mom',
        'Tahun' =>'2011',
        'Genre' =>'Animation',
        'Pemeran Utama' => ['Seth Green','Wendy Wells','Dan Fogler'],
        'Sutradara' => 'Simon Wells'
    ],
    [
        'Judul' =>'The Heirs',
        'Tahun' =>'2013',
        'Genre' =>'Romantis',
        'Pemeran Utama' => ['Lee minho','Park shin hye'],
        'Sutradara' => 'kim woo bin'
    ],
    [
        'Judul' =>'Bussines Proposal',
        'Tahun' =>'2022',
        'Genre' =>'Romantis',
        'Pemeran Utama' => ['Ahn hyeo seop','Seojong kim'],
        'Sutradara' => 'seol in ah'
    ],
    [
        'Judul' =>'The lion king',
        'Tahun' =>'2019',
        'Genre' =>'Advanture',
        'Pemeran Utama' => ['Beyonce','Jeff nathason'],
        'Sutradara' => 'Jon favreau'
    ],
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
            <li>
                <img src='img/<?= $mh['gambar']; ?>'>
        </li>
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
