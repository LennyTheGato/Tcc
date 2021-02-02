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
<link href="../assets/css/login.css" rel="stylesheet">




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="../assets/css/login.css" rel="stylesheet">


<!-- Template Main CSS File -->
<link href="../assets/css/style.css" rel="stylesheet">

  <!-- Terminar os metas -->
	<title>Login</title>

</head>
<body >
	
<main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

	<div class="d-flex justify-content-between align-items-center">
	  <h2>Área exclusiva para alunos</h2>
	  <ol>
		<li><a href="../index.php">Home</a></li>
		<li>Login</li>
	  </ol>
	</div>

  </div>
</section><!-- End Breadcrumbs Section --><br>







<div class="container">
	<div class="section-title">
		<h2>Iniciar Sessão</h2>
	</div></div>
	


	<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

<!-- Icon -->
<div class="fadeIn first">
      <br><h2>Acesse:</h2>
    </div>

 <!-- Login Form -->
 



 <form action="validar.php" method="POST" role="form" class="php-email-form">
		
      <input type="text" id="login" class="fadeIn second" name="mail" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Digite sua senha"><br>
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <!-- Remind Passowrd 
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
-->

<div class="fadeIn cinco">
      <h2>Ou registre-se:</h2>
    </div>

	<form method="POST" action="" role="form" class="php-email-form">
		


		<input type="text" id="login" class="fadeIn first" name="realname" placeholder="Coloque seu nome">

		<input type="text" id="login" class="fadeIn second" name="nick" placeholder="Coloque seu email">




		<input type="password" id="password" class="fadeIn third" name="pass" placeholder="Coloque a senha"><br>

		<input type="password" id="password" class="fadeIn third" name="rpass" placeholder="Repita sua senha"><br>


		<input type="submit" name="submit" class="fadeIn fourth" value="Registre-se!">




	  </form>


  </div>
</div>


			 <!-- Remind Passowrd 	
						<label>
							<b>E-mail:</b>
						</label>
						<input type="text" id="login" class="fadeIn second" name="mail"placeholder="login">
						

						<label>
							<b>Senha:</b>
						</label>
				<div class="col form-group">
					<input class="fadeIn third" style="border-radius:15px;" type="password" name="pass">
				</div>
				<div class="text-center">
					<input class="form-control" type="submit" value="Entrar">
				</div>


			</div>
			
		</form>
<br>-->
<!-- formulario registro 

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
</div>-->

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