<?php
session_start();
require '../functions.php';

if (isset($_POST['login'])) {
    $conn = koneksi();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username_existed = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    if (mysqli_num_rows($username_existed) === 1) {
        $row = mysqli_fetch_assoc($username_existed);
        if (password_verify($password, $row['password'])) {
            $_SESSION["login"] = true;
            echo "<script>
                document.location.href = '../form/index.php';
                </script>";
            exit;
        }
    }

    $error = true;
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
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
    <title>Halaman Login</title>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/68d494af55.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
</head>

<body>
    <?php if (isset($login['error'])) : ?>
        <p><?= $login['pesan']; ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <div class="mb-3">
            <h2>Login</h2>
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" autofocus id="username" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" name="login" class="btn btn-primary">Sign in</button>
        <div class="log">
            <label>Belum Memiliki Akun?</label>
            <a href="register.php">Daftar Disini</a>
        </div>
    </form>









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