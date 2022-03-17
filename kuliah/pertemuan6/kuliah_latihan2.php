<?php

// Array Assosiatif array yang indexnya string


$mahasiswa = [
    [
        "nama" => "Zidane",
        "npm" => "213040085",
        "email" => "ahmadzidane@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Faturrahman",
        "npm" => "213040323",
        "email" => "fatur@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Ahmad",
        "email" => "ahmad@gmail.com",
        "jurusan" => "Teknik Informatika",
        "npm" => "213040085"
    ]
];

?>

<?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?php echo $mhs["nama"] ?></li>
        <li>NPM : <?php echo $mhs["npm"] ?></li>
        <li>Email : <?php echo $mhs["email"] ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"] ?></li>
    </ul>
<?php }
?>