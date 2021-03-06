<?php
session_start();


			// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada.
			$link = new PDO('mysql:host=localhost;dbname=badbunny', 'admin', 'admin'); // el campo vaciío es para la password.

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Insertar Noticia</title>
	<link rel="stylesheet" type="text/css" href="view.css" media="all">
	<script type="text/javascript" src="view.js"></script>
	<script type="text/javascript" src="calendar.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Administrador</title>

	<!-- Bootstrap core CSS-->
	<link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template-->
	<link href="vendor1/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="vendor1/datatables/dataTables.bootstrap4.css" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

		<a class="navbar-brand mr-1" href="inicioAdmin.php">🐰 BadBunny 🐰</a>



		<!-- Navbar Search -->
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Buscar" aria-label="Search" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button class="btn btn-primary" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
		</form>

		<!-- Navbar -->
		<ul class="navbar-nav ml-auto ml-md-0">
			<li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-user-circle fa-fw"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="index.php">Cerrar Sesion</a>
				</div>
			</li>
		</ul>

	</nav>

	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="sidebar navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="inicioAdmin.php">
					<i class="fa fa-home"></i>
					<span>Inicio</span>
				</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="noticiasAdmin.php">
					<i class="fa fa-newspaper-o"></i>
					<span>Noticias</span>
				</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="girasAdmin.php">
					<i class="fa fa-plane"></i>
					<span>Giras</span>
				</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="ruedasAdmin.php">
					<i class="fa fa-microphone"></i>
					<span>Rueda de prensa</span>
				</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="index.html">
					<i class="fa fa-shopping-cart"></i>
					<span>Tienda</span>
				</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="historiaAdmin.php">
					<i class="fa fa-history"></i>
					<span>Historia</span>
				</a>
			</li>
		</ul>

		<div id="content-wrapper">




			<img id="top" src="top.png" alt="">
				<div id="form_container">

					<h1><a>Insertar Noticia</a></h1>
					<form id="form_35166" class="appnitro"  method="post" action="">
								<div class="form_description">
						<h2>Insertar Noticia</h2>
						<p></p>
					</div>
						<ul >

								<li id="li_1" >
					<label class="description" for="titular">Titular </label>
					<div class="col-xs-3">
						<input id="titular" name="titular" class="element text medium form-control" type="text" maxlength="255" value=""/>
					</div>
					</li>		<li id="li_2"  >
					<label class="description" for="element_2">Fecha de publicación </label>
					<span>
						<input id="element_2_1" name="element_2_1" class="element text form-control" size="5" maxlength="2" value="" type="text">
						<center><label for="element_2_1">MM</label></center>
					</span>
					<span>
						<input id="element_2_2" name="element_2_2" class="element text form-control" size="5" maxlength="2" value="" type="text">
						<center><label for="element_2_2">DD</label></center>
					</span>
					<span>
				 		<input id="element_2_3" name="element_2_3" class="element text form-control" size="5" maxlength="4" value="" type="text">
						<center><label for="element_2_3">YYYY</label></center>
					</span>

					<span id="calendar_2">
						<img id="cal_img_2" class="datepicker" src="calendar.gif" alt="Pick a date.">
					</span>
					<script type="text/javascript">
						Calendar.setup({
						inputField	 : "element_2_3",
						baseField    : "element_2",
						displayArea  : "calendar_2",
						button		 : "cal_img_2",
						ifFormat	 : "%B %e, %Y",
						onSelect	 : selectDate
						});
					</script>

					</li>		<li id="li_3" >
					<label class="description" for="entrada">Entrada </label>
					<div>
						<textarea id="entrada" name="entrada" class="element textarea medium form-control"></textarea>
					</div>
					</li>

								<li class="buttons">
						    <input type="hidden" name="form_id" value="35166" />

							<input id="saveForm" class="btn btn-primary btn-block" type="submit" name="submit" value="Submit" />
					</li>
						</ul>
					</form>

					<div id="segundaCapa">
						<?php
						        $conn = mysqli_connect("localhost","admin", "admin", "badbunny");
			             // Check connection
			                    if (!$conn) {
			                    die("Connection failed: " . mysqli_connect_error());
			                    }

			                    if(isset($_POST['titular']))
			                    {
			                          $titularVar=$_POST['titular'];
			                          $entradaVar=$_POST['entrada'];
			                          $cod_admin=$_SESSION['cod_admin'];


			                     $sql = "INSERT into noticia(titular_noticia, entrada_noticia, cod_admin) values ('$titularVar','$entradaVar',1)";

			                          if($conn->query($sql) == true)
			                          {
			                          	echo "Dato insertado correctamente";
			                          }
			                          else
			                          {
			                          	echo $cod_admin;
			                          	echo "Error";
			                          }

			                    }

						?>

					</div>
					<div id="footer">

					</div>
				</div>
				<img id="bottom" src="bottom.png" alt="">


			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<footer class="sticky-footer">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright © Your Website 2018</span>
					</div>
				</div>
			</footer>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="login.html">Logout</a>
				</div>
			</div>
		</div>
	</div>



	<!-- Bootstrap core JavaScript-->
	<script src="vendor1/jquery/jquery.min.js"></script>
	<script src="vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor1/jquery-easing/jquery.easing.min.js"></script>

	<!-- Page level plugin JavaScript-->
	<script src="vendor1/chart.js/Chart.min.js"></script>
	<script src="vendor1/datatables/jquery.dataTables.js"></script>
	<script src="vendor1/datatables/dataTables.bootstrap4.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin.min.js"></script>

	<!-- Demo scripts for this page-->
	<script src="js/demo/datatables-demo.js"></script>
	<script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
