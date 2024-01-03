<!DOCTYPE html>
<?php
    include('displayMenu.php');
    include('navbar.php');
?>

<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Restauracja Oregano</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Page Header Start -->
    <div class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Menu</h2>
                </div>
                <div class="col-12">
                    <a href="./main.php">Strona Główna</a>
                    <a href="./menu.php">Menu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Food Start -->
    <div class="food">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="food-item">
                        <i class="fa fa-pizza-slice"></i>
                        <h2>Pizza</h2>
                        <p>
                            Spróbuj naszej pizzy.
                        </p>
                        <a href="./menu.php">Zobacz Menu</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <i class="fa fa-carrot"></i>
                        <h2>Sałatki</h2>
                        <p>
                            Spróbuj naszych sałatek.
                        </p>
                        <a href="./menu.php">Zobacz Menu</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <i class="flaticon-cocktail"></i>
                        <h2>Napoje</h2>
                        <p>
                            Spróbuj naszych napojów
                        </p>
                        <a href="./menu.php">Zobacz Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Food End -->


    <!-- Menu Start -->
    <div class="menu">
        <div class="container">
            <div class="section-header text-center">
                <p>Menu</p>
                <h2>Nasze przepyszne menu</h2>
            </div>
            <div class="menu-tab">
                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#pizza">Pizza</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#salad">Sałatki</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#napoje">Napoje</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="pizza" class="container tab-pane active">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <?php displayMenu('Pizza'); ?>
                                <a class="btn custom-btn" href="/menu.php">Zobacz nasze całe menu</a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block">
                                <img src="img/pizza-menu.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div id="salad" class="container tab-pane fade">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <?php displayMenu('Sałatki'); ?>
                                <a class="btn custom-btn" href="/menu.php">Zobacz nasze całe menu</a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block">
                                <img src="img/menu-salad-img.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    
                    <div id="napoje" class="container tab-pane fade">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <?php displayMenu('Napoje'); ?>
                                <a class="btn custom-btn" href="/menu.php">Zobacz nasze całe menu</a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block">
                                <img src="img/drinks.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="footer-contact">
                                <h2>Kontakt</h2>
                                <p><i class="fa fa-map-marker-alt"></i>lorem 39, 46-022 lorem</p>
                                <p><i class="fa fa-phone-alt"></i>123 123 123</p>
                                <p><i class="fa fa-envelope"></i>loremlorem@gmail.com</p>
                                <div class="footer-social">
                                <a href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href=""><i
                                            class="fab fa-youtube"></i></a>
                                    <a href=""><i
                                            class="fab fa-instagram"></i></a>
                                    <a href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>