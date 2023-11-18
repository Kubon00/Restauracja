<!DOCTYPE html>
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
                    <a href="bookings.php" class="nav-item nav-link">Rezerwacja</a>
                    <a href="contact.php" class="nav-item nav-link active">Kontakt</a>
                    <a href="questions.php" class="nav-item nav-link">Pytania</a>
                    <a href="reservations.php" class="nav-item nav-link">Rezerwacje</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Kontakt</h2>
                </div>
                <div class="col-12">
                    <a href="./index.html">Strona Główna</a>
                    <a href="./contact.html">Kontakt</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Skontaktuj się</p>
                <h2>Prosimy o kontakt w razie pytań</h2>
            </div>
            <div class="row align-items-center contact-information">
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Adres</h3>
                            <p>Zielińskiego 22/41, 53-538 Wrocław</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Zadzwoń do nas</h3>
                            <p>514 179 348</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email</h3>
                            <p>jakub0002@o2.pl</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-share"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Obserwuj nas</h3>
                            <div class="contact-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row contact-form">
                <div class="col-md-6">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.466736256812!2d17.020394677003296!3d51.09984824039394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fc26ce02e506b%3A0xc026935434cd5e85!2sTadeusza%20Zieli%C5%84skiego%2022%2C%2053-534%20Wroc%C5%82aw!5e0!3m2!1spl!2spl!4v1699536428792!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <div id="success"></div>
                    <form name="sentMessage" method="post" action="message.php" id="contactForm" >
                        <div class="control-group">
                            <input type="text" name="imie" class="form-control" id="name" placeholder="Imię" required="required"
                                data-validation-required-message="Proszę wprowadzić swoje imię" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required"
                                data-validation-required-message="Proszę wprowadzić swój adres email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="temat" class="form-control" id="subject" placeholder="Temat" required="required"
                                data-validation-required-message="Proszę podać temat wiadomości" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" name="wiadomosc" id="message" placeholder="Wiadomość" required="required"
                                data-validation-required-message="Proszę wpisać swoją Wiadomość"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <input class="btn custom-btn" type="submit" id="sendMessageButton"
                                onclick="validateName(),validateEmail(),validateMessage()"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

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