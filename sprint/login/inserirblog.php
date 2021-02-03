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
<link href="../assets/css/login.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="../assets/css/style.css" rel="stylesheet">

  <!-- Terminar os metas -->

  <title>Adminstração</title>
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
        echo"<h2>Inserção de texto</h2>";
        echo"<p>Página para controle e inserção de textos publicados ao usuário.</p>";
        echo" </div>";  echo" </div>";  

  ?>


<div class="span11">

<div class="caption">

<div class="fundo">   
<div class='container' data-aos='fade-up'><div class='section-title'><br>
<h2>Editor de texto:</h2></div></div>

<form method="POST" action="" role="form" class="php-email-form">

	<div class="form-group"> 
		<label> 
			<b>Digite o Título</b>
		</label>
            <input type="text" name="titulo" class="form-control" placeholder="Coloque seu Título"/>

	</div>
	</div>



	<div class="form-group">
		<label>
			<b>Digite uma Prévia</b>
		</label>
            <input type="text" name="previa" class="form-control" placeholder="Digite sua prévia"/>

	</div>
	</div>

    <div class="form-group">
		<label>
			<b>Digite o Texto</b>
		</label>
            <input type="text" name="texto" class="form-control" placeholder="Digite seu texto" ></textarea>

	</div>
	<div class="col form-group">
		<label for="img">
			<b>Escolha uma Imagem</b>
			</label>
		<input type="file" id="img" name="imagem" accept="image/*,gif/*">
	</div>



	<?php

date_default_timezone_set('America/Sao_Paulo');
$tempo = date('Y/d/m h:i:s a', time());
echo "<input type='hidden' name='datapost' value='$tempo'>";

?>

	<div class="text-center">
    <button type="submit" name="submit" value="Postar!">Postar!</button>
	</div>

	


</form></div>
<?php
		if(isset($_POST['submit'])){
			require("registroblog.php");
		}
	?>


<!--///////////////////////////////////////////////////EDITAR////////////////////////////////////////////-->



		<div class="row-fluid">
		
			<br/>


			<?php

				require("connect_db.php");
				$sql=("SELECT * FROM blog");
	
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Titulo</td>";
						echo "<td>Excluir</td>";

					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arranjo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arranjo[0]</td>";
				    	echo "<td>$arranjo[1]</td>";

						
						echo "<td><a href='inserirblog.php?id=$arranjo[0]&idborrar=2' class='botao_apagar'>Apagar</a></td>";
						/* echo "<td><a href='inserirblog.php?id=$arranjo[0]&idborrar=2'><img src='../images/eliminar.png' class='img-rounded'/></a></td>";*/
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM blog WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("Texto Excluido!")</script> ';

						echo "<script>location.href='inserirblog.php'</script>";
					}

			?>
			
				  
			  			  
			  
		

		</div>	








</div>
</div>







</div>

</div>

<!--///////////////////////////////////////////////////Fim da div do table////////////////////////////////////////////-->

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
  </body>
</html>