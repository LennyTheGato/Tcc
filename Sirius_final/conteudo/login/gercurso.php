<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:login.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>

<!DOCTYPE html>
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

    <!-- ======= Pricing Section ======= -->
    <?php
    echo"</br>";
    echo" <div class='container' data-aos='fade-up'>";

        echo"<div class='section-title'>";
        echo"<h2>Gerenciamento de cursos</h2>";
        echo"<p>Abaixo, acrescente os cursos e admnistre-os.</p>";
        echo" </div>";  echo" </div>";  

  ?> 

<div class="row">
	
	
		
	

		<div class="caption">
		<div class="fundo">   

		
		<div class="row-fluid">
		
			<br/>


			<?php

				require("connect_db.php");
				$sql=("SELECT * FROM curso");

?>

	
				<div class="span11">

				<div class="fundo">   
<div class='container' data-aos='fade-up'><div class='section-title'><br>
<h2>Adicione cursos:</h2></div></div>


				<form method="POST" action="" role="form" class="php-email-form">
		
		
				<div class="col form-group">
					
						<label>
							<b>Digite o Título</b> 
						</label>
						<input type="text" name="titulo" class="form-control" placeholder="Coloque seu Título"/>
			
				</div>
			
				<div class="form-group">
					<label>
						<b>Digite o Preço</b>
					</label>
						<input type="number" name="preço" class="form-control" step="0.010" placeholder="Digite o Preço"/>
			
				</div>

				<div class="form-group">
					<label>
						<b>Digite o conteúdo 1</b>
					</label>
						<input type="text" name="lista1" class="form-control" placeholder="Digite o conteúdo 1"/>
			
				</div>

				<div class="form-group">
					<label>
						<b>Digite o conteúdo 2</b>
					</label>
						<input type="text" name="lista2" class="form-control" placeholder="Digite o conteúdo 2"/>
			
				</div>

				<div class="form-group">
					<label>
						<b>Digite o conteúdo 3</b>
					</label>
						<input type="text" name="lista3" class="form-control" placeholder="Digite o conteúdo 3"/>
			
				</div>
				
				<div class="form-group">
					<label>
						<b>Digite o conteúdo 4</b>
					</label>
						<input type="text" name="lista4" class="form-control" placeholder="Digite o conteúdo 4"/>
			
				</div>
			
				
			
				  
				<div class="text-center">
				<button type="submit" name="submit" value="Postar!">Postar!</button>
				</div>
			
				
			
			
			</form></div></div></div></div>
			
			<?php
					if(isset($_POST['submit'])){
						require("regcurso.php");
					}
				?>
		
		
		
		<br/><br/><br/><br/>

		
			
				<!-- ////////////////////////////////////////////Fim do add curso;////////////////////////////////////////////-->
<?php
	
				$query=mysqli_query($mysqli,$sql);


				echo "<div class='overflow-x:auto;'>";
				echo "<div class='table-responsive'>";


				echo "<table border='1'; class='table table-hover';>";
				

					echo "<tr class='warning'>";
						echo "<td>id</td>";
						echo "<td>Título</td>";
						echo "<td>Preço</td>";
						echo "<td>Conteúdo 1</td>";
						echo "<td>Conteúdo 2</td>";
						echo "<td>Conteúdo 3</td>";
						echo "<td>Conteúdo 4</td>";

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
						echo "<td>$arranjo[5]</td>";
						echo "<td>$arranjo[6]</td>";


						echo "<td><a href='atcurso.php?id=$arranjo[0]' class='botao_alterar'>Alterar</td>";
						
						echo "<td><a href='gercurso.php?id=$arranjo[0]&idborrar=2' class='botao_apagar'>Apagar</a></td>";


						
					echo "</tr>";
				}

				echo "</table>";echo "</div>";echo "</div>";echo "</div>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM curso WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("Curso Excluido!")</script> ';
						echo "<script>location.href='gercurso.php'</script>";
					}

			?>
			
				  
			  			  
			  
		

		</div>	
		<br/>
		


		



		
		
		</div>

		


		

</div>

	</div>
</div>

<div id="footer">

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


</div>
  </body>
</html>