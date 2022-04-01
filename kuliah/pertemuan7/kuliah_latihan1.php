<?php
// supergoals
// variable milik php yg bisa kita gunakan 
// bentuknya array asosiative
// $_GET
// $_POST
// $_SERVER

// $nama = "Ahmad";
// var_dump($_GET);

// $_GET["nama"] = "ahmad";
// $_GET["email"] = "Ahmad@gmail.com";
if (isset($_GET["nama"])) {
    $nama = $_GET["nama"];
} else {
    $nama = "Tidak Diketahui";
}

?>

<h1>Hallo, <?= $nama; ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php?nama=Fatur">Fatur</a>
    </li>
    <li>
        <a href="kuliah_latihan1.php?nama=Jamal">Jamal</a>
    </li>
</ul>