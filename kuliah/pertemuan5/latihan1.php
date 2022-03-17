<?php
// pertemuan 5 ARRAY 
// Array merupakan adalah variable yang bisa menampung / menyimpan banyak nilai sekaligus
$hari1 = "senin";
$hari2 = "selasa";

$bulan1 = "Januari";
$bulan2 = "Febuari";

$mahasiswa = "Ahmad";




// membuat array
$hari = ["senin", "selasa", "rabu", "kamis", "jumat"]; //cara baru 
$bulan = ["januari", "febuari", "maret"]; //cara lama
$myArr = [10, "ahmad", true];
// Mencetak Array
// mencetak 1 elemen di dalam array
// dimulai dari = 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";
echo $myArr[1];
// mencetak menggunakan var_dump() atau print_r()
var_dump($hari[1]);
print_r($bulan[2]);
echo "<hr>";



// mencetak semua isi array menggunakan looping
// for
for ($i = 0; $i < 4; $i++) {
    echo $hari[$i];
};
echo "<hr>";



//  looping for each
foreach ($bulan as $bln) {
    echo $bln;
};
echo "<hr>";

foreach ($hari as $key => $value) {
    echo "$key - value : $value";
    echo "<br>";
};
echo "<hr>";


// memanipulasi array
// menambah elemen baru di akhir array
$hari[0] = "senin";
$hari[] = "jumat";
print_r($hari);
