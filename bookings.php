<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Restauracja Oregano</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

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
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="main.html" class="navbar-brand">Restauracja <span>Oregano</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="main.html" class="nav-item nav-link ">Strona Główna</a>
                    <a href="about.html" class="nav-item nav-link">O nas</a>
                    <a href="team.html" class="nav-item nav-link">Kucharze</a>
                    <a href="menu.html" class="nav-item nav-link">Menu</a>
                    <a href="bookings.php" class="nav-item nav-link active">Rezerwacja</a>
                    <a href="contact.php" class="nav-item nav-link">Kontakt</a>
                    <a href="questions.php" class="nav-item nav-link">Pytania</a>
                    <a href="reservations.php" class="nav-item nav-link">Rezerwacje</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Page Header Start -->
    <div class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Rezerwacja</h2>
                </div>
                <div class="col-12">
                    <a href="./index.html">Strona Główna</a>
                    <a href="./booking.html">Rezerwacja</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Booking Start -->
    <div class="booking">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="booking-content">
                        <div class="section-header">
                            <p>Rezerwacja</p>
                            <h2>Zarezerwuj stolik, żeby nie czekać w kolejce</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Rezerwacja stolika online, nazywana inaczej wirtualnym bookingiem, w dzisiejszych
                                czasach jest oferowana przez większość restauracji i lokali gastronomicznych. Taka
                                możliwość wiąże się z wieloma korzyściami dla klienta.
                            </p>
                            <p>
                                Rezerwację stolika online można przeprowadzić wszędzie, niezależnie od miejsca pobytu i
                                godzin otwarcia lokalu, bez konieczności dzwonienia. Wirtualny booking pozwala
                                zaoszczędzić czas, co jest niezwykle cenione ze względu na rosnące tempo życia oraz
                                natłok codziennych obowiązków zawodowych i rodzinnych.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="booking-form">
                        <form method="post" action="booking.php">
                            <div class="control-group">
                                <div class="input-group">
                                    <input type="text" name="imie" class="form-control" placeholder="Imię" required="required" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="far fa-user"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group">
                                    <input type="text" name="telefon" class="form-control" placeholder="Nr. Telefonu" required="required" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group date" id="date" data-target-input="nearest">
                                    <input type="text" name="dataa" class="form-control datetimepicker-input" placeholder="Data" data-target="#date" data-toggle="datetimepicker" />
                                    <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group time" name="godzina" id="time" data-target-input="nearest">
                                    <input type="text" name="godzina" class="form-control datetimepicker-input" placeholder="Godzina" data-target="#time" data-toggle="datetimepicker" required="required" />
                                    <div class="input-group-append" data-target="#time" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group">
                                    <div class="input-group">
                                        <!-- Zmieniono input na rozwijalną listę z numerami stolików -->
                                        <select required="required" name="Nr_stolika" class="form-control">
                                            <option value="" disabled selected>Wybierz numer stolika</option>
                                            <?php
                                            include("connect.php");
                                            $sql = "SELECT stolik FROM stoliki WHERE czy_zajety = 0";
                                            $result = mysqli_query($conn, $sql);
                                            if ($result && mysqli_num_rows($result) > 0) {
                                                while ($rowStolik = mysqli_fetch_assoc($result)) {
                                                    echo "<option value=\"{$rowStolik['stolik']}\">{$rowStolik['stolik']}</option>";
                                                }
                                            } else {
                                                echo "<option disabled selected>Brak dostępnych stolików</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input required="required" name="goscie" type="number" min="1" max="10" class="form-control" placeholder="Liczba gości" />
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input class="btn custom-btn" type="submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <img src="./img/restauracja_stoliki.png" alt="Image">
    </div>

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
                                <a class="btn custom-btn" href="/menu.html">Zoabcz nasze całe menu</a>

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
                                <a class="btn custom-btn" href="/menu.html">Zoabcz nasze całe menu</a>
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
                                <a class="btn custom-btn" href="/menu.html">Zoabcz nasze całe menu</a>
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
                                    <a href="https://www.facebook.com/daniel.kochaneek"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.youtube.com/channel/UCq_0gLwc-DG7PQ0HYh_R2GQ"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.instagram.com/daniel.kochaneek/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/daniel-kochanek-4423a321a/"><i class="fab fa-linkedin-in"></i></a>
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