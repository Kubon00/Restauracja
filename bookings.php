<!DOCTYPE html>
<?php
    include('navbar.php');
?>
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
    <!-- Page Header Start -->
    <div class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Rezerwacja</h2>
                </div>
                <div class="col-12">
                    <a href="./main.php">Strona Główna</a>
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