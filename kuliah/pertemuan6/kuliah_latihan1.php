<?php
//  Array Asosiatif
// array yang indexnya berasosiasi atau berpasangan dengan string
// array numerik hanyak menampilkan nilainya saja


$mahasiswa = [
    ["Zidane", "213040085", "ahmadzidane@gmail.com", "Teknik Informatika"],
    ["Faturrahman", "213040323", "fatur@gmail.com", "Teknik Informatika"],
    ["Ahmad"]
];

// var_dump($mahasiswa)[0][2];
?>

<?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?php echo $mhs[0] ?></li>
        <li>NPM : <?php echo $mhs[1] ?></li>
        <li>Email : <?php echo $mhs[2] ?></li>
        <li>Jurusan : <?php echo $mhs[3] ?></li>
    </ul>
<?php } ?>