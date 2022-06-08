<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Css -->
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">


    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    <title>TUBES</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand title ms-4" href="#">TechSpec</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse float-end menu" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#tag-card">Asus</a></li>
                            <li><a class="dropdown-item" href="#tag-card">Acer</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#tag-card">Lenovo</a></li>
                            <li><a class="dropdown-item" href="#tag-card">HP</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item log-sig">
                        <a class="btn btn-danger btn-md button-order" href="./logout.php" role="button">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <header>
        <div class="text-mid">
            <h1>Your Laptop Specifications <br> Affect <br> Your Performance</h1>
            <h6>Jika ingin mencari beberapa spesifikasi laptop terbaik dan terlengkap, <br>
                temukan detail lebih lanjut di sini</h6>
            <a class="btn btn-primary btn-md button-order" href="#tag-card" role="button">More Details</a>
        </div>
    </header>

    <section class="cs2">
        <div class="mid-mid">
            <img src="../image/logohp.png" alt="" width="100">
            <img src="../image/logoacer.png" alt="" width="200">
            <img src="../image/logoasusnew.png" alt="" width="200">
            <img src="../image/Logolenovo.jpg" alt="" width="200">
        </div>
    </section>


    <section class="cs3" id="about">
        <div>
            <h1>TechSpec</h1>
        </div>

        <div class="about">
            <h5>TechSpec adalah situs web untuk memberi tahu mereka yang mencari beberapa
                informasi tentang spesifikasi laptop yang bagus dan lengkap.
                dan juga dapat membantu untuk menemukan laptop apa dan
                spesifikasi apa yang sesuai dengan yang Anda inginkan</h5>
        </div>
    </section>

    <!-- CARD  -->
    <section class="tag-card" id="tag-card">
        <div class="col">
            <div class="card">
                <img src="../image/hpimage.png" alt="" width="40%">
                <h5>Hp</h5>
                <p>Spesifikasi Laptop HP</p>
                <a class="btn btn-primary btn-md button-order" href="../hp/hp.php" role="button">Select</a>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="../image/acerimage.png" alt="" width="45%">
                <h5>Acer</h5>
                <p>Spesifikasi Laptop Acer</p>
                <a class="btn btn-primary btn-md button-order" href="../acer/acer.php" role="button">Select</a>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="../image/asusimage.png" alt="" width="40%">
                <h5>Asus</h5>
                <p>Spesifikasi Laptop Asus.</p>
                <a class="btn btn-primary btn-md button-order" href="../asus/asus.php" role="button">Select</a>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="../image/lenovoimage.png" alt="" width="40%">
                <h5>Lenovo</h5>
                <p>Spesifikasi Laptop Lenovo</p>
                <a class="btn btn-primary btn-md button-order" href="../lenovo/lenovo.php" role="button">Select</a>
            </div>
        </div>
    </section>


    <footer id="contact">

        <div class="fot">
            <h2>TechSpec</h2>
        </div>

        <div class="men-fot1">
            <h3>Service</h3>
            <h6>Home</h6>
            <h6>About</h6>
            <h6>Menu</h6>
            <h6>Contact</h6>
        </div>

        <div class="men-fot">
            <h3>Social</h3>
            <a class="link" href="#">Facebook</a>
            <br>
            <a class="link" href="#">Twitter</a>
            <br>
            <a class="link" href="#">Instagram</a>
        </div>

        <div class="men-fot2">
            <h3>Activity</h3>
            <h6>Detail</h6>
            <h6>Description</h6>
            <h6>Specifications</h6>
            <h6>Information</h6>
        </div>
    </footer>


    <div class="down">
        <h2>f</h2>
    </div>




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