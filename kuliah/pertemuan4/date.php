<?php
// Date
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// EPOCH time / UNIX Timestap
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();

// menghitung 100 hari kedepan
echo date("l", time() + 60 * 60 * 24 * 100);
echo "<br>";
// menghitung 100 hari kebelakang
echo date("d-M-Y", time() - 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik 
// mktime(0,0,0,0,0,0)
//  jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0, 0, 0, 10, 2, 2002));

// strtotime
echo date("l", strtotime("2 oct 2002"));


// String
// strlen()
// strcmp()
// explode()

// Utility
// var_dump()
// isset()
// empty()
// die()
// sleep()