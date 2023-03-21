<?php
// ARRAY
// Membuat Array
$hari = array ('Senin','Selasa','Rabu');
$bulan = ['Januari','Februari','Maret'];
$myArray = ['Andien',18,false];
$binatang = ['🐇','🙈','🐷','🐼','🐊'];
// Menampilkan list Array
// mencetak satu elemen pada array menggunakan index
echo $hari[1];
echo "<hr>";

//mencetak seluruh isi array
//var_dump, print_r
var_dump ($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($myArray);
echo "<br>";

//memanipulasi isi array
$hari[]="Juma'at";
print_r($hari);
echo "<br>";

//Menambahkan elemen baru diakhir array menggunakan array_push()
array_push($bulan,'April','Mei','Juni','Juli');
print_r($bulan);
echo "<hr>";

//menambahkan elemen baru di awal array menggunakan array_unshift
array_unshift($binatang,'🕊️');
print_r($binatang);
//menghapus elemen di akhir array menggunakan array_pop
array_pop($hari);
array_pop($hari);
print_r($hari);
echo"<hr>";

//
array_shift($hari);
print_r($hari);
?>
