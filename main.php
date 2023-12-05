<!DOCTYPE html>
<?php
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
    <!-- Slider Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="./img/Ingredients.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Najlepszej <span>Jakości</span> Składniki</h1>
                        <p>
                            Stawiamy tylko na sprawdzonych dostawców i wysokiej jakości składniki, bo to one są
                            gwarantem niepowtarzalnego i dobrego smaku naszych potraw.
                        </p>
                        <div class="carousel-btn">
                            <a class="btn custom-btn" href="./menu.php">Zobacz Menu</a>
                            <a class="btn custom-btn" href="./bookings.php">Zarezerwuj Stolik</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/Cookers.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Najlepsi <span>Pracownicy</span> Na Świecie</h1>
                        <p>
                            W naszej pizzeri pracują najlepsi kucharze oraz najelpsze kelnerki. Każdy nasz pracownik ma
                            wieloletni staż oraz doświadczenie.
                        </p>
                        <div class="carousel-btn">
                            <a class="btn custom-btn" href="./menu.php">Zobacz Menu</a>
                            <a class="btn custom-btn" href="./bookings.php">Zarezerwuj Stolik</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/Dezynfekcja.png" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Każdy stolik jest <span>Zdezynfekowany</span></h1>
                        <p>
                            Wszystkie stoliki są nieustannie dezynfekowane.
                        </p>
                        <div class="carousel-btn">
                            <a class="btn custom-btn" href="./menu.php">Zobacz Menu</a>
                            <a class="btn custom-btn" href="./bookings.php">Zarezerwuj Stolik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End -->
    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/Chef.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header">
                            <p>O nas</p>
                            <h2>Gotujemy od 1987 roku</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Ważny jest dla nas nie tylko włoski smak i klimat, ale również włoska kultura, szczególnie
                                ta związana z rodziną. Rodzina jest dla nas najważniejsza i chcemy, aby każdy z
                                odwiedzających nas gości poczuł się jak u siebie w domu. Chcemy, aby restauracja
                                kojarzyła się wszystkim z rodzinnymi i przyjacielskimi spotkaniami, aby atmosfera była
                                iście włoska.

                            </p>
                            Nasza pizzeria jest rodzinnym przedsięwzięciem, w które angażuje się każdy z jej członków
                            Pragniemy, abyś i Ty wspólnie z własną rodziną i przyjaciółmi poczuli ten niesamowity,
                            ciepły klimat.
                            <p>

                            </p>
                            <a class="btn custom-btn" href="/bookings.php">Zarezerwuj stolik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-header">
                        <p>Dlaczego jesteśmy najlepsi</p>
                        <h2>Nasz klucz do sukcesu</h2>
                    </div>
                    <div class="feature-text">
                        <div class="feature-img">
                            <div class="row">
                                <div class="col-6">
                                    <img src="img/food1.jpg" alt="Image">
                                </div>
                                <div class="col-6">
                                    <img src="img/food2.jpg" alt="Image">
                                </div>
                                <div class="col-6">
                                    <img src="img/food3.jpg" alt="Image">
                                </div>
                                <div class="col-6">
                                    <img src="img/food4.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <a class="btn custom-btn" href="/bookings.php">Zarezerwuj Stolik</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-cooking"></i>
                                <h3>Najlepsi szefowie kuchni</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-vegetable"></i>
                                <h3>Naturalne składniki</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-medal"></i>
                                <h3>Najlepszej jakości produkty</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-meat"></i>
                                <h3>Świeże warzywa i mięso</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-courier"></i>
                                <h3>Najszybsza dostawa</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-fruits-and-vegetables"></i>
                                <h3>Najlepsze mięso</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


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
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/margharita.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span> Pizza Margharita </span> <strong>24,90 / 36,20 zł</strong></h3>
                                        <p>sos , ser , oregano </p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/caciatore.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span> Pizza Capriciosa</span><strong>29,30 / 39,00 zł</strong></h3>
                                        <p>sos , ser , salami , oregano</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/wegetariana.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Pizza Wgetariana</span> <strong>32,50 / 42,60 zł</strong></h3>
                                        <p>sos , ser, pieczarki , papryka , kukurydza , cebula , oregano, brokuły</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/bawarska.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Pizza Bawarska</span> <strong>35,30 / 48,20 zł</strong></h3>
                                        <p>sos musztardowo - śmietanowy , ser, bekon , cebulka czerwona, kiełbasa ,
                                            ogórek kiszony, oregano</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/włoska-uczta.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Pizza Włoska Uczta</span> <strong>35,30 / 48,20 zł</strong></h3>
                                        <p>Pizza jest robiona TYLKO na cienkim włoskiem cieście! sos pomidorowy , ser,
                                            czosnek świeży , pomidorki koktajlowe , szynka parmeńska , rukola , ser
                                            parmeński , oliwa z oliwek</p>
                                    </div>
                                </div>
                                <a class="btn custom-btn" href="/menu.php">Zoabcz nasze całe menu</a>

                            </div>
                            <div class="col-lg-5 d-none d-lg-block">
                                <img src="img/pizza-menu.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div id="salad" class="container tab-pane fade">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/morska.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Sałatka Morska</span> <strong>22,40 zł</strong></h3>
                                        <p>kapusta pekińska, tuńczyk, pomidor, kapary, oliwki, ser żółty, sos vinegrette
                                            <p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/caprese.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Sałatka Caprese</span> <strong>22,40 zł</strong></h3>
                                        <p>kapusta pekińska, kukurydza, ananas, ogórek zielony, kurczak, sos vinegrette
                                        </p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/mexicana.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Sałatka Mexicana</span> <strong>22,40 zł</strong></h3>
                                        <p>kapusta pekińska, fasola czerwona, por, korniszon, kukurydza, papryka,
                                            kurczak, pepperoni</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/firmowa.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Sałatka Firmowa</span> <strong>22,40 zł</strong></h3>
                                        <p>kapusta pekińska, jajko, brokuły, ser sałatkowy, kurczak, pomidor, sos
                                            firmowy</p>
                                    </div>
                                </div>
                                <a class="btn custom-btn" href="/menu.php">Zoabcz nasze całe menu</a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block">
                                <img src="img/menu-salad-img.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div id="napoje" class="container tab-pane fade">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/woda.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Woda</span> <strong>5zł/0.3</strong></h3>
                                        <p>Do wyboru cisowianka gazowana lub niegazowana</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/Cola.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>CocaCola</span> <strong>8zł/03</strong></h3>
                                        <p>Do wyboru CocaCola zero lub zwykła </p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/sok.png" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Sok</span> <strong>8zł/0.3</strong></h3>
                                        <p>Do wyboru sok pomarańczowy, porzeczkowy lub jabłkowy</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/wino.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Wino</span> <strong>15zł/kieliszek</strong></h3>
                                        <p>Do wyboru wino białe lub czerwone</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/kawa.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Kawa</span> <strong>10zł</strong></h3>
                                        <p>Do wyboru espresso, rstretto, cappuccino, macchiato, mocha </p>
                                    </div>
                                </div>
                                <a class="btn custom-btn" href="/menu.php">Zoabcz nasze całe menu</a>
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


    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Nasz zespół</p>
                <h2>Szefowie kuchni</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Daniel Kochanek</h2>
                            <p>CEO, Co Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-2.jpg" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Dylan Adams</h2>
                            <p>Szef Kuchni</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-3.jpg" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Jhon Doe</h2>
                            <p>Szef Kuchni</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-4.jpg" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Josh Dunn</h2>
                            <p>Szef Kuchni</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Opinion Start -->
    <div class="opinion">
        <div class="container">
            <div class="owl-carousel opinions-carousel">
                <div class="opinion-item">
                    <div class="opinion-img">
                        <img src="img/testimonial-1.jpg" alt="Image">
                    </div>
                    <p>
                        Świetne jedzenie oraz obsługa.
                    </p>
                    <h2>Agata</h2>
                </div>
                <div class="opinion-item">
                    <div class="opinion-img">
                        <img src="img/testimonial-2.jpg" alt="Image">
                    </div>
                    <p>
                        Bardzo szybka obsługa!
                    </p>
                    <h2>Mariusz</h2>
                </div>
                <div class="opinion-item">
                    <div class="opinion-img">
                        <img src="img/testimonial-3.jpg" alt="Image">
                    </div>
                    <p>
                        Świeże składniki
                    </p>
                    <h2>Małgorzata</h2>
                </div>
                <div class="opinion-item">
                    <div class="opinion-img">
                        <img src="img/testimonial-4.jpg" alt="Image">
                    </div>
                    <p>
                        Bardzo smaczne
                    </p>
                    <h2>Arkadiusz</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Opinion End -->
    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="footer-contact">
                                <h2>Kontakt</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Opolska 39, 46-022 Luboszyce</p>
                                <p><i class="fa fa-phone-alt"></i>735 911 901</p>
                                <p><i class="fa fa-envelope"></i>kodaniel100@gmail.com</p>
                                <div class="footer-social">
                                    <a href="https://www.facebook.com/daniel.kochaneek"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.youtube.com/channel/UCq_0gLwc-DG7PQ0HYh_R2GQ"><i
                                            class="fab fa-youtube"></i></a>
                                    <a href="https://www.instagram.com/daniel.kochaneek/"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/daniel-kochanek-4423a321a/"><i
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
    <script src="js/validation.js"></script>
</body>

</html>