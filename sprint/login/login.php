<!DOCTYPE html>
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

<!-- Template Main CSS File -->
<link href="../assets/css/style.css" rel="stylesheet">

  <!-- Terminar os metas -->
	<title>Login</title>

</head>
<body >
<div class="container">
	<div class="section-title">
		<h2>Iniciar Sessão</h2>
	</div>
	

		<form action="validar.php" method="POST" role="form" class="php-email-form">
			<div class="form-row">
				
						<label>
							<b>E-mail:</b>
						</label>
				<div class="col form-group">
						<input class="form-control" style="border-radius:15px;" type="text" name="mail">
				</div>

						<label>
							<b>Senha:</b>
						</label>
				<div class="col form-group">
					<input style="border-radius:15px;" type="password" name="pass">
				</div>
				<div class="text-center">
					<input class="form-control" type="submit" value="Entrar">
				</div>


			</div>
		</form>
<br>
<!-- formulario registro -->

<form method="POST" action="" role="form" class="php-email-form">
	<div class="form-row">

	<b>Registra-se</b> 

	<div class="col form-group">
		
			<label>
				<b>Digite seu Nome</b> 
			</label>
			<input type="text" name="realname" class="form-control" placeholder="Coloque seu nome"/>

	</div>

    <div class="form-group">
		<label>
			<b>Digite seu email</b>
		</label>
		<input type="text" name="nick" class="form-control"  required placeholder="Coloque seu email"/>
	</div>
</div>
	
    <div class="form-group">
      <label>
		  <b>Digite sua senha</b>
		</label>
      <input type="password" name="pass" class="form-control"  placeholder="Coloque a senha" />
	</div>
	
    <div class="form-group">
      <label>
		  <b>Repita sua senha</b>
		</label>
      <input type="password" name="rpass" class="form-control" required placeholder="Repita sua senha" />
    </div>
      
	<div class="text-center">
    <button type="submit" name="submit" value="Registre-se!">Registrar!</button>
	</div>

	


</form>
</div>

<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fim formulario registro -->

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