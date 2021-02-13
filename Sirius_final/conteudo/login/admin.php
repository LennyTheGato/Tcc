
<!-- O código php abaixo é o que define qual menu será apresentado de acordo com o usuário logado -->
<?php
		session_start();
		if (@!$_SESSION['user']) {
			header("Location:login.php");
		}elseif ($_SESSION['rol']==2) {
			header("Location:index2.php");
		}
	?>

<!DOCTYPE html>
<html>
  <head>
	<!-- Metas -->
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

	<!-- Template Main CSS File -->
	<link href="../assets/css/style.css" rel="stylesheet">

	<!-- Terminar os metas -->
	<title>Administração</title>
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

		
		
		<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	</body>


    <!-- ======= Pricing Section ======= -->


    <?php
    	echo"</br></br></br>";
    	echo" <div class='container' data-aos='fade-up'>";
        	echo"<div class='section-title'>";
        		echo"<h2>Gestão de usuários</h2>";
        		echo"<p>Fichamento, alteração de senha e exclusões de conta pelo administrador.</p>";
        	echo" </div>";  
  	?>

	<div class="span12">
	<div class="container">	
	<div class="row-fluid">
		
	<?php
		require("connect_db.php");
			$sql=("SELECT * FROM login");

			$query=mysqli_query($mysqli,$sql);

			echo "<div class='overflow-x:auto;'>";
				echo "<div class='table-responsive'>";
					echo "<table border='1'; class='table table-hover';>";
						echo "<tr class='warning'>";
							echo "<td>Id</td>";
							echo "<td>Usuário</td>";
							echo "<td>Senha</td>";
							echo "<td>Email</td>";
							echo "<td>Senha de Administrador</td>";
							echo "<td>Editar</td>";
							echo "<td>Excluir</td>";
						echo "</tr>";
	?>
			  
	<?php 
		while($arranjo=mysqli_fetch_array($query)){
			echo "<tr class='success'>";
				echo "<td>$arranjo[0]</td>";
				echo "<td>$arranjo[1]</td>";
				echo "<td>$arranjo[2]</td>";
				echo "<td>$arranjo[3]</td>";
				echo "<td>$arranjo[4]</td>";		
				echo "<td><a href='atualizar.php?id=$arranjo[0]' class='botao_alterar'>Alterar</td>";
				echo "<td><a href='admin.php?id=$arranjo[0]&idborrar=2' class='botao_apagar'>Apagar</a></td>";		
			echo "</tr>";
				}
				echo "</table>"; echo "</div>";echo "</div>";echo "</div>";
			
					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM login WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("Usuário Excluido!")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}
					echo" </div>";  
	?>
			
				  
	</div>	
	<br/>
	</div>
	</div>
	</div></div>
	</div></div>
	</div>

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
	</footer><!-- Final do código footer -->

	<div id="preloader"></div>
	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

			<!-- Arquivos JS - vendor -->
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
  </body>
</html>