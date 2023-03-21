<?php
    $mahasiswa = [
        [
            "nama"      => "Melinda Sulaeman",
            "nrp"       => 223040135,
            "email"     => "melmel04@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "cw1.jpeg"
        ],
        [
            "nama"      => "Naufal Zul Faza",
            "nrp"       => 223040141,
            "email"     => "naufal21@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "cowo1.jpeg"
        ],
        [
            "nama"      => "Lolyn Maria",
            "nrp"       => 223040176,
            "email"     => "Marialoly@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "lolycw.jpeg"
        ],
        [
            "nama"      => "Rafa Octa",
            "nrp"       => 223040051,
            "email"     => "sadboy12@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "cowo2.jpeg"
        ],
        [
            "nama"      => "Revi syahputra",
            "nrp"       => 223040053,
            "email"     => "rev98@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "cowo3.jpeg"
        ],
        [
            "nama"      => "Febi Alia Rahman",
            "nrp"       => 223040159,
            "email"     => "febialia@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "cw2.jpeg"
            
        ],
        [
            "nama"      => "Syahira Mutiara",
            "nrp"       => 223040065,
            "email"     => "mutiaraaa7@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "cw3.jpeg"
        ],
        [
            "nama"      => "Malika Pramesti",
            "nrp"       => 223040056,
            "email"     => "hikaf890@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "cw5.jpeg"
        ],
        [
            "nama"      => "Andiana Eka Riyanto",
            "nrp"       => 223040041,
            "email"     => "ekiii90@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "cwekii.jpeg"
        ],
        [
            "nama"      => "Lisvindanu",
            "nrp"       => 223040038,
            "email"     => "danulisvin@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "cowo5.jpeg"
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center p-2">Daftar Mahasiswa</h1>
    <section>
        
        <div class="row p-3">
        <?php foreach($mahasiswa as $mhs): ?>
            <div class="col-lg-2">
                <div class="card mb-2">
                <div class="card-body align-self-center">
                    <img src="<?= $mhs['gambar']; ?>" alt="avatar <?= $mhs['nama']; ?>"
                    class="rounded-circle img-fluid" style="width: 150px;">
                </div>
                </div>  
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Nama</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['nama']; ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">NRP</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['nrp']; ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['email']; ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Jurusan</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['jurusan']; ?></p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
    </section>
</body>
</html><?php
    $mahasiswa = [
        [
            "nama"      => "Melinda Sulaeman",
            "nrp"       => 223040135,
            "email"     => "melmel04@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/cw1.png"
        ],
        [
            "nama"      => "Naufal Zul Faza",
            "nrp"       => 223040141,
            "email"     => "naufal21@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/cowo1.png"
        ],
        [
            "nama"      => "Lolyn Maria",
            "nrp"       => 223040176,
            "email"     => "Marialoly@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/lolycw.png"
        ],
        [
            "nama"      => "Rafa Octa",
            "nrp"       => 223040051,
            "email"     => "sadboy12@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/cowo2.png"
        ],
        [
            "nama"      => "Revi syahputra",
            "nrp"       => 223040053,
            "email"     => "rev98@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/cowo3.png"
        ],
        [
            "nama"      => "Febi Alia Rahman",
            "nrp"       => 223040159,
            "email"     => "febialia@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/cw2.png"
            
        ],
        [
            "nama"      => "Syahira Mutiara",
            "nrp"       => 223040065,
            "email"     => "mutiaraaa7@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/cw3.png"
        ],
        [
            "nama"      => "Malika Pramesti",
            "nrp"       => 223040056,
            "email"     => "hikaf890@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/cw5.png"
        ],
        [
            "nama"      => "Andiana Eka Riyanto",
            "nrp"       => 223040041,
            "email"     => "ekiii90@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/cwekii.png"
        ],
        [
            "nama"      => "Lisvindanu",
            "nrp"       => 223040038,
            "email"     => "danulisvin@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/cowo5.png"
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center p-2">Daftar Mahasiswa</h1>
    <section>
        
        <div class="row p-3">
        <?php foreach($mahasiswa as $mhs): ?>
            <div class="col-lg-2">
                <div class="card mb-2">
                <div class="card-body align-self-center">
                    <img src="<?= $mhs['gambar']; ?>" alt="avatar <?= $mhs['nama']; ?>"
                    class="rounded-circle img-fluid" style="width: 150px;">
                </div>
                </div>  
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Nama</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['nama']; ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">NRP</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['nrp']; ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['email']; ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Jurusan</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['jurusan']; ?></p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
    </section>
</body>
</html>