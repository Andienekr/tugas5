<?php
$film = [
    [
        'Judul' =>'Aladdin',
        'Tahun' =>'2019',
        'Genre' =>'Romantis',
        'Pemeran Utama' => ['Mena Massoud','Naomi Scoutt'],
        'Sutradara' => 'Guy Ritchie',
        'poster' =>'aladdin.png'
    ],
    [
        'Judul' =>'Tangled',
        'Tahun' =>'2010',
        'Genre' =>'Advanture',
        'Pemeran Utama' => ['Zachary levi','Mandy Moore','Donna Murphy'],
        'Sutradara' => 'Nathan Greno',
        'poster' =>'tangled.png'
    ],
    [
        'Judul' =>'Mars Need Mom',
        'Tahun' =>'2011',
        'Genre' =>'Animation',
        'Pemeran Utama' => ['Seth Green','Wendy Wells','Dan Fogler'],
        'Sutradara' => 'Simon Wells',
        'poster' =>'mars need mom.png'
    ],
    [
        'Judul' =>'The Heirs',
        'Tahun' =>'2013',
        'Genre' =>'Romantis',
        'Pemeran Utama' => ['Lee minho','Park shin hye'],
        'Sutradara' => 'kim woo bin',
        'poster' => 'the heirs.png'
    ],
    [
        'Judul' =>'Bussines Proposal',
        'Tahun' =>'2022',
        'Genre' =>'Romantis',
        'Pemeran Utama' => ['Ahn hyeo seop','Seojong kim'],
        'Sutradara' => 'seol in ah',
        'poster' => 'bp.png'
    ]
    ];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>latihan film</title>
    </head>
    <body>
        <h2> Daftar Film</h2>
        <ol>
        <?php foreach($film as $f) { ?>
        <li><strong><?= $f['Judul'];?></strong>
        <ul>
            <br>
            <li>
                <img src="poster/<?= $f['poster']; ?>"width =200px>
        </li>
            <li>Judul: <?= $f['Judul'];?></li>
            <li>Tahun: <?= $f['Tahun'];?></li>
            <li>Sutradara: <?= $f['Sutradara'];?></li>
            <li>Genre: <?= $f['Genre'];?></li>
             <li>Pemeran Utama:
                <?php foreach ($f ['Pemeran Utama']as $f) {
                    echo $f;
                } ?>
            </li>
        </ul>
        <br>
            </li>
        <?php } ?>
        </ol>
        
    </body>
    </html>
