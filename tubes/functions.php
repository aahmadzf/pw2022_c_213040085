<?php
function koneksi()
{
  $spek = mysqli_connect("localhost", "root", "", "laptop") or die;
  return $spek;
}

function this_query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  return $result;
}

function message($message, $location)
{
  return "<script>
  alert('$message');
  document.location.href = '$location';
   </script>";
}

function registrasi($data)
{
  $conn = koneksi();

  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password_confirmation = mysqli_real_escape_string($conn, $data['password_confirmation']);
  $username_existed = this_query("SELECT username FROM users WHERE username = '$username'");
  // cek username duplikat
  validation(mysqli_fetch_assoc($username_existed), "Username telah Terdaftar", "");
  // cek kesesuaian password 
  validation($password !== $password_confirmation, "Password tidak sesuai", "");
  // mengubah password menjadi text enskripsi
  $password = password_hash($password, PASSWORD_DEFAULT);


  $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function validation($condition, $message, $page)
{
  if ($condition) {
    echo message($message, $page);
    return false;
  } else {
    return true;
  }
}
