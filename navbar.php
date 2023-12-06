<!-- navbar.php -->
<?php
if(!isset($_SESSION)) {
    session_start();
}
?>
<style>
    /* Navbar styles */
    .navbar {
        background-color: #f8f9fa;
        padding: 15px 0;
    }

    .navbar-brand {
        font-size: 24px;
        font-weight: bold;
        color: #343a40;
    }

    .navbar-toggler {
        background-color: #007bff;
    }

    .navbar-toggler-icon {
        background-color: #ffffff;
    }

    .navbar-nav .nav-item {
        margin-right: 15px;
    }

    .navbar-nav .nav-link {
        color: #343a40;
    }

    .navbar-nav .nav-link:hover {
        color: #007bff;
    }
</style>

<div class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container-fluid">
        <a href="main.php" class="navbar-brand">Restauracja <span>Oregano</span></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <?php  
                    // Check if the user is logged in
                    if (isset($_SESSION['username'])) {
                        // Display these links only for logged-in users
                        echo '<a href="questions.php" class="nav-item nav-link">Pytania</a>';
                        echo '<a href="reservations.php" class="nav-item nav-link">Rezerwacje</a>';
                        echo '<a href="menuMaintance.php" class="nav-item nav-link">Edycja Menu</a>';
                        echo '<a href="logout.php" class="nav-item nav-link">Wyloguj</a>';
                    }
                    if (!isset($_SESSION['username'])) {
                      echo  '<a href="main.php" class="nav-item nav-link">Strona Główna</a>';
                      echo '<a href="about.php" class="nav-item nav-link">O nas</a>';
                      echo '<a href="team.php" class="nav-item nav-link">Kucharze</a>';
                      echo  '<a href="menu.php" class="nav-item nav-link ">Menu</a>';
                      echo '<a href="bookings.php" class="nav-item nav-link">Rezerwacja</a>';
                      echo  '<a href="contact.php" class="nav-item nav-link">Kontakt</a>';
                      echo  '<a href="index.php" class="nav-item nav-link">Zaloguj</a>';
                    }
                ?>
                
            </div>
        </div>
    </div>
</div>
