<?php
// array multidimensi 
// array didalam array

$mahasiswa = [
    ["Ahmad Zidane", "213040085", "ahmad@gmail.com", "teknik Informatika"],
    ["Faturrahman", "213056545", "fatur@gmail.com", [1, 2, 3], "Teknik Mesin"]
];
echo $mahasiswa[0][1][2];
