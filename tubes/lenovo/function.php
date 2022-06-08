<?php


function koneksi()
{
      $spek = mysqli_connect("localhost", "root", "", "laptop") or die;
      return $spek;
}


function query($query)
{
      $spek = koneksi();
      // query table spek
      $result = mysqli_query($spek, $query) or die(mysqli_error($spek));
      // siapkan data $spek
      $rows = [];
      while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
      }
      return $rows;
}

function tambah($data)
{
      $spek = koneksi();


      // upload gambar
      if ($_FILES['gambar']['error'] === 4) {
            $gambar = 'Asus1.png';
      } else {
            $gambar = upload();
            // jika upload gagal
            if (!$gambar) {
                  return false;
            }
      }

      $nama = htmlspecialchars($data['nama']);
      $deskripsi = htmlspecialchars($data['deskripsi']);


      $query = "INSERT INTO lenovo VALUES(null, '$gambar', '$nama', '$deskripsi')";

      mysqli_query($spek, $query) or die(mysqli_error($spek));

      return mysqli_affected_rows($spek);
}

function hapus($id)
{
      $spek = koneksi();
      mysqli_query($spek, "DELETE FROM lenovo WHERE lenovo. id= $id");
      return mysqli_affected_rows($spek);
}

function ubah($data)
{
      $spek = koneksi();

      $id = $data['id'];

      $nama = htmlspecialchars($data['nama']);
      $deskripsi = htmlspecialchars($data['deskripsi']);
      if ($_FILES['gambar']['error'] === 4) {
            $gambar = 'laptop5.png';
      } else {
            $gambar = upload();

            if (!$gambar) {
                  return false;
            }
      }

      $query = "UPDATE lenovo SET 
    gambar      = '$gambar',
    nama        = '$nama',
    deskripsi   = '$deskripsi'
    WHERE id    = $id";

      mysqli_query($spek, $query);
      return mysqli_affected_rows($spek);
}


function upload()
{
      $filename = $_FILES['gambar']['name'];
      $filetmpname = $_FILES['gambar']['tmp_name'];
      $filesize = $_FILES['gambar']['size'];
      $filetype = pathinfo($filename, PATHINFO_EXTENSION);
      $allowedtype = ["jpg", "jpeg", "png"];

      // cek apakah file yg diupload bukan gambar
      if (!in_array($filetype, $allowedtype)) {
            echo "<script>
        alert('File yg dimasukan bukan berbentuk gambar');
        </script>";

            return false;
      }

      // cek apakah gambar size terlalu besar 
      if ($filesize > 1000000) {
            echo "<script>
        alert('Ukuran File terlalu besar');
        </script>";
            return false;
      }

      // lolos pengecekkan
      $new_file = uniqid() . $filename;

      move_uploaded_file($filetmpname, '../image/' . $filename);
      return $filename;
}
