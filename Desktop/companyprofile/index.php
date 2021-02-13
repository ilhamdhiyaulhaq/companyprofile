<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- home css -->
    <link rel="stylesheet" href="css/testing2.css">
    <!-- my fonts -->
    <!-- menu navbar -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- benner-top p -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin&display=swap" rel="stylesheet">
    <!-- info-panel p -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Cabin&display=swap" rel="stylesheet">
    <!-- process h1 -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Cabin&family=Francois+One&family=Righteous&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Home Page</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparant">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/smarthubHD.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link menu" href="index.php">Home</a>
                    <a class="nav-link menu" href="about.php">About</a>
                    <a class="nav-link menu" href="#">Service</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Product
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"><i class="fas fa-caret-right"></i> Action</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-caret-right"></i> Another action</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-caret-right"></i> Something else here</a>
                        </div>
                    </li>
                </div>
                <a href="login.php" class="btn btn-info tombol" data-toggle="modal" data-target="#exampleModalCenter">Login Admin</a>
            </div>
        </div>
    </nav>
    <!-- modal login-->
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once("admin/models/Users.php");
    $login = new Users();

    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $login->login($username, $password);
    }
    ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Username</label>
                            <input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
                        </div>
                        <input type="submit" name="login" class="btn btn-primary float-right" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir -->
    <!-- akhir -->
    <!-- jumbotron -->
    <div class="jumbotron benner-top jumbotron-fluid">
        <div class="container">

            <h1 class="display-4">We Think Digital</h1>
            <p class="lead">
                Smarthub adalah perusahaan Digital Agency yang akan membantu anda mewujudkan Goal Digital<br>
                Marketing dan Branding perusahaan atau produk anda.
            </p>
            <a href="" class="btn btn-info tombol-benner mt-5">Learn More <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
    <!-- akhir -->
    <!-- Service -->
    <div class="container container-service">
        <h4>Bagaimana Kami Bisa<br>Membantu Anda</h4>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-4">
                <div class="card service">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <img src="img/design.png" alt="">
                            <footer class="blockquote-footer">
                                <h5>Design</h5>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae quos iure in eveniet neque officia.</p>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card service">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <img src="img/development.png" alt="">
                            <footer class="blockquote-footer">
                                <h5>Website Development</h5>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, consectetur quam! Repellat voluptates culpa accusantium.</p>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card service">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <img src="img/communicate.png" alt="">
                            <footer class="blockquote-footer">
                                <h5>Digital Marketing</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eligendi quis dolore suscipit, ipsa et.</p>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card service">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <img src="img/social-media.png" alt="">
                            <footer class="blockquote-footer">
                                <h5>Social Media Mnagement</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi repellat rem quaerat, eveniet sit quia.</p>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card service">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <img src="img/online-shop.png" alt="">
                            <footer class="blockquote-footer">
                                <h5>eCommerce</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptates, cumque nulla sapiente fugit eveniet!</p>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card service">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <img src="img/support.png" alt="">
                            <footer class="blockquote-footer">
                                <h5>Help & Support</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aperiam consectetur iste? Laborum,</p>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- akhir -->
    <!-- portofolio -->
    <!-- <section class="portofolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg">
                            <img src="" alt="" width="200" height="200">
                        </div>
                        <div class="col-lg">
                            <img src="" alt="" width="200" height="200">
                        </div>
                        <div class="col-lg">
                            <img src="" alt="" width="200" height="200">
                        </div>
                        <div class="col-lg">
                            <img src="" alt="" width="200" height="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- akhir -->
    <!-- workingspace -->

    <!-- akhir -->
    <!-- contact us -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 contact-us">
                <div class="row">
                    <div class="col-lg contact-text">
                        <h2>Would you like to start a project with us ?</h2>
                        <p class="contact-us-p">Hubungi kami kapan saja, kam siap membantu anda mewujudkan Solusi IT<br>
                            perusahaan anda.
                        </p>
                        <a href="" class="btn btn-info btn-sm"><i class="fab fa-whatsapp"></i> 081-239-438-228</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir -->
    <!-- footer -->
    <footer class="footer-class">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-lg">
                            <h3>Smarthub</h3><br>
                            <p class="footer-p">One Stop IT And Digital Solution</p>
                            <p><a href=""><i class="fab fa-whatsapp"></i></a> <a href=""><i class="fab fa-instagram"></i></a></p>
                        </div>
                        <div class="col-lg">
                            <h3>Company</h3><br>
                            <p><a href="">Home</a></p>
                            <p><a href="">About</a></p>
                            <p><a href="">Service</a></p>
                            <p><a href="">Contact</a></p>
                        </div>
                        <div class="col-lg">
                            <h3>Get In Touch</h3><br>
                            <p class="footer-p"><i class="fas fa-map-marker-alt"></i> Jl. Karangsaru No. 9-A, Jagalan Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50136</p>
                            <p class="footer-p"><i class="fas fa-envelope"></i> smarthub.smg@gmail.com</p>
                            <p class="footer-p"><i class="fas fa-phone"></i> (021)-354-5543</p>
                            <p><a href=""><i class="fab fa-whatsapp"></i> 081-239-438-228</a></p>
                        </div>
                    </div>
                    <p class="footer-p" style="margin-top:30px; text-align:center;">Copyright &copy 2021 SmartHub | Powered by SmartHub</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- akhir -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>
