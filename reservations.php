<!DOCTYPE html>
<?php
    include('auth.php');
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>


<body>
    
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Rezerwacje</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <?php
require('connect.php');
$rezerwacje = new mysqli($host,$db_user,$db_password,$db_name);
$columns = array('imie','email','telefon','data','godzina','goscie');
$column = isset($_GET['column']) && in_array($_GET['column'], $columns) ? $_GET['column'] : $columns[0];
$sort_order = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC';
if ($result = $rezerwacje->query('SELECT * FROM rezerwacje ORDER BY ' .  $column . ' ' . $sort_order)) {
	// Some variables we need for the table.
	$up_or_down = str_replace(array('ASC','DESC'), array('up','down'), $sort_order); 
	$asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
	$add_class = ' class="highlight"';
	?>
		<head>
			<style>
			html {
				font-family: Tahoma, Geneva, sans-serif;
				padding: 10px;
			}
			table {
				border-collapse: collapse;
				width: 100%;
			}
			th {
				background-color: #54585d;
				border: 1px solid #54585d;
			}
			th:hover {
				background-color: #64686e;
			}
			th a {
				display: block;
				text-decoration:none;
				padding: 10px;
				color: #ffffff;
				font-weight: bold;
				font-size: 13px;
			}
			th a i {
				margin-left: 5px;
				color: rgba(255,255,255,0.4);
			}
			td {
				padding: 10px;
				color: #636363;
				border: 1px solid #dddfe1;
			}
			tr {
				background-color: #ffffff;
			}
			tr .highlight {
				background-color: #f9fafb;
			}
			</style>
		</head>
		<body>
			<table>
				<tr align="center">
					<th><a href="reservations.php?column=imie&order=<?php echo $asc_or_desc; ?>">Imię<i class="fas fa-sort<?php echo $column == 'imie' ? '-' . $up_or_down : ''; ?>"></i></a></th>
					<th><a href="reservations.php?column=email&order=<?php echo $asc_or_desc; ?>">Email<i class="fas fa-sort<?php echo $column == 'email' ? '-' . $up_or_down : ''; ?>"></i></a></th>
					<th><a href="reservations.php?column=telefon&order=<?php echo $asc_or_desc; ?>">Telefon<i class="fas fa-sort<?php echo $column == 'telefon' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                    <th><a href="reservations.php?column=dataa&order=<?php echo $asc_or_desc; ?>">Data<i class="fas fa-sort<?php echo $column == 'dataa' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                    <th><a href="reservations.php?column=godzina&order=<?php echo $asc_or_desc; ?>">Godzina<i class="fas fa-sort<?php echo $column == 'godzina' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                    <th><a href="reservations.php?column=goscie&order=<?php echo $asc_or_desc; ?>">Goście<i class="fas fa-sort<?php echo $column == 'goscie' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                    <th><a href="reservations.php?column=goscie&order=<?php echo $asc_or_desc; ?>">Stolik<i class="fas fa-sort<?php echo $column == 'stolik' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                    <th><a href="reservations.php?column=goscie&order=<?php echo $asc_or_desc; ?>">Edytor<i class="fas fa-sort<?php echo $column == 'Edytor' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                    <th><a>Edytuj</a></th>
                    <th><a>Usuń</a></th>
				</tr>
				<?php while ($row = $result->fetch_assoc()): ?>
				<tr align="center">
					<td<?php echo $column == 'imie' ? $add_class : ''; ?>><?php echo $row['imie']; ?></td>
					<td<?php echo $column == 'email' ? $add_class : ''; ?>><?php echo $row['email']; ?></td>
					<td<?php echo $column == 'telefon' ? $add_class : ''; ?>><?php echo $row['telefon']; ?></td>
                    <td<?php echo $column == 'dataa' ? $add_class : ''; ?>><?php echo $row['dataa']; ?></td>
                    <td<?php echo $column == 'godzina' ? $add_class : ''; ?>><?php echo $row['godzina']; ?></td>
                    <td<?php echo $column == 'goscie' ? $add_class : ''; ?>><?php echo $row['goscie']; ?></td>
                    <td<?php echo $column == 'stolik' ? $add_class : ''; ?>><?php echo $row['stolik']; ?></td>
                    <td<?php echo $column == 'Edytor' ? $add_class : ''; ?>><?php echo $row['Edytor']; ?></td>
                    <td align="center">
                    <a href="edit.php?id=<?php echo $row["id"]; ?>">Edytuj</a>
                    </td>
                    <td align="center">
                    <a href="delete.php?id=<?php echo $row["id"]; ?>">Usuń</a>
</td>
				</tr>
				<?php endwhile; ?>
			</table>
		</body>
	<?php
	$result->free();
}
?>
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
    <script src="js/validation.js"></script>
</body>

</html>