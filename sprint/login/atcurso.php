<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:login.php");
}
?>		
<html lang="en">
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
<link href="../assets/css/login.css" rel="stylesheet">
<link href="../assets/css/manage.css" rel="stylesheet">
<link href="../assets/css/post.css" rel="stylesheet">

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
        echo"<h2>Administrar Cursos Cadastrados</h2>";
        echo"<p>Edição de cursos</p>";
        echo" </div>";  echo" </div>";  

  ?>

	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->

		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM curso WHERE id=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$titulo=$row[1];
		    	$preço=$row[2];
		    	$conteudo1=$row[3];
				$conteudo2=$row[4];
				$conteudo3=$row[5];
				$conteudo4=$row[6];
		    }



		?>
<div class="span11">
	
<div class="fundo">   
<div class='container' data-aos='fade-up'><div class='section-title'><br>
<h2>Editor de cursos:</h2></div></div>
		<form action="exatcurso.php" method="post">
			
		<label>
			<b>Id:</b>
		</label><br>
				
				<input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>



							
		<label>
			<b>Título:</b>
		</label><br> <input type="text" name="titulo" value="<?php echo $titulo?>"><br>


							
		<label>
			<b>Preço:</b>
		</label><br> <input type="text" class="form-control-cinza" name="preço" step="0.010" value="<?php echo $preço?>"><br>


							
		<label>
			<b>Conteúdo 1:</b>
		</label><br> <input type="text" name="conteudo1" value="<?php echo $conteudo1?>"><br>


		<label>
			<b>Conteúdo 2:</b>
		</label><br> <input type="text" name="conteudo2" value="<?php echo $conteudo2?>"><br>


		<label>
			<b>Conteúdo 3:</b>
		</label><br> <input type="text" name="conteudo3" value="<?php echo $conteudo3?>"><br>


		<label>
			<b>Conteúdo 4:</b>
		</label><br> <input type="text" name="conteudo4" value="<?php echo $conteudo4?>"><br>


				
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>
			</div></div></div>

				  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div></div>

<div id="footer">
 <!-- FOOTER E CRÉDITOS. -->

 <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Medicina da Terra</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
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


