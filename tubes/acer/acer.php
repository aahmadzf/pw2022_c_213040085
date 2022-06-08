<?php
require 'function.php';

$spek = query("SELECT * FROM acer");

// query sesuai dengan keyword pencarian ketika tombol cari di klik
if (isset($_GET['cari'])) {
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM acer WHERE nama LIKE '%$keyword%' OR deskripsi LIKE '%keyword%' ";
    $spek = query($query);
}
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="acer.css?v=<?php echo time(); ?>">

    <title>ACER</title>
</head>

<body>

    <a href="../form/index.php" class="btn btn-danger ms-4"> Back</a>
    <div class="image">
        <img src="../image/logoacer.png" alt="" width="500">
    </div>

    <div class="text">
        <h2>SPESIFIKASI</h2>
    </div>

    <a href="tambah.php" class="btn btn-primary ms-5">Tambah Spesifikasi Laptop</a>

    <form action="" method="GET">
        <div class="input-group find  mb-4 ">
            <input type="text" name="keyword" class="form-control input-find" aria-describedby="button-addon2" placeholder="Masukkan Pencarian........." autocomplete="off">
            <button class="btn btn-primary find-key " name="cari" type="submit" id="cari">Cari</button>
        </div>
    </form>


    <table class="table">
        <thead class="">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($spek as $lap) { ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td>
                        <img src="../image/<?php echo $lap["gambar"]; ?>" height="80">
                    </td>
                    <td><?php echo $lap["nama"] ?></td>
                    <td><?php echo $lap["deskripsi"] ?></td>
                    <td>
                        <a href="ubah.php?id=<?php echo $lap["id"]; ?>" class="btn badge bg-warning aksi">Edit</a>
                        <a href="hapus.php?id=<?php echo $lap["id"]; ?>" onclick="return confirm('Yakin?');" class=" btn badge bg-danger aksi">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>