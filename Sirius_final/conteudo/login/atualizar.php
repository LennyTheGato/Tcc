<!DOCTYPE html>
	<!-- O código php abaixo é o que define qual menu será apresentado de acordo com o usuário logado -->
	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:login.php");
	}
	?>		
	<html>
		<head>
			<!-- botar os metas aki -->
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">

		<meta content="" name="descriptison">
		<meta content="" name="keywords">

		<!-- Favicons -->
		<link href="../assets/img/logo_mt.png" rel="icon">
		<link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		<!-- Vendor CSS Files -->
		<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
		<link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		<link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
		<link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
		<link href="../assets/vendor/aos/aos.css" rel="stylesheet">
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../assets/css/manage.css" rel="stylesheet">
		<link href="../assets/css/post.css" rel="stylesheet">
		<link href="../assets/css/login.css" rel="stylesheet">

		<!-- Template Main CSS File -->
		<link href="../assets/css/style.css" rel="stylesheet">

		<!-- Terminar os metas -->
		</head>
		<body>
		<div class="container">
		<header class="header">
		<div class="row">
			<?php
			include("../include/header3.php");
			?>
		</div>
		</header>

		<?php
			echo"</br>";
			echo" <div class='container' data-aos='fade-up'>";

				echo"<div class='section-title'>";
				echo"<h2>Administrar Usuarios Cadastrados</h2>";
				echo"<p>Edição de Usuários</p>";
				echo" </div>";  echo" </div>";  

		?>	
		<div class="span12">
		<div class="caption">
		<br/>

		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM login WHERE id=$id";
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$pass=$row[2];
		    	$email=$row[3];
		    	$passadmin=$row[4];
		    }
		?>
		<div class="span11">

		<div class="fundo">   
		<div class='container' data-aos='fade-up'><div class='section-title'><br>
			<h2>Editor de texto:</h2></div></div>

				<form action="exatualizar.php" method="post">

					<label>
						<b>Id:ㅤㅤ</b>
					</label>
					<input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>

					<label>
						<b>Usuário:</b>
					</label>  <input type="text" name="user" value="<?php echo $user?>"><br>

					<label>
						<b>Senha:</b>
					</label>  <input type="text" name="pass" value="<?php echo $pass?>"><br>

					<label>
						<b>Email:</b>
					</label>  <input type="text" name="email" value="<?php echo $email?>"><br>

					<label>
						<b>Senha: </b>
					</label> <input type="text" name="passadmin" value="<?php echo $passadmin?>" placeholder="Senha administrador"><br>
					
					<input type="submit" value="Guardar" class="btn btn-success btn-primary">
				</form>
		</div>
		<br>
		
		<div class="span8">
		</div>	
		</div>			
		</div>
		</div>	
		</div>		
		</div>
		</div>
		</div>
			<br><br>
			<div id="footer">
			<!-- FOOTER E CRÉDITOS. -->

			<div class="container">
				<div class="copyright">
					&copy; Copyright <strong><span>Medicina da Terra</span></strong>. All Rights Reserved
				</div>
				<div class="credits">
				
					Designed by <a href="https://instagram.com/siriuswebdesign">Sirius Web Design</a>
				</div>
				</div>
			</footer><!-- End Footer -->

			<div id="preloader"></div>
			<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

					<!-- Vendor JS Files -->
				<script src="../assets/vendor/jquery/jquery.min.js"></script>
			<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>

			<script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
			<script src="../assets/vendor/counterup/counterup.min.js"></script>
			<script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
			<script src="../assets/vendor/venobox/venobox.min.js"></script>
			<script src="../assets/vendor/aos/aos.js"></script>

			<!-- Template Main JS File -->
			<script src="../assets/js/main.js"></script>


			</div>
				</style>
  </body>
</html>


