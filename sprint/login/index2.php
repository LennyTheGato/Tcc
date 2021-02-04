<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:login.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
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
<link href="../assets/css/post.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="../assets/css/style.css" rel="stylesheet">

  <!-- Terminar os metas -->
	<title>Área exclusiva</title>


  </head>
<body>
<div class="container">
<header class="header">
<div >
	<?php
	include("../include/header2.php");
	?>
</div>
</header>


</div>

<div class="span12">

<div class="caption">

<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
<div class="row-fluid">

  <br/><br/>


  <?php

 echo"";
 echo" <div class='container' data-aos='fade-up'>";

     echo"<div class='section-title'>";
     echo"<h2>POSTS EXCLUSIVOS</h2>";
     echo"<p>Página dedicada aos alunos do medicina da terra</p>";
     echo" </div>";  
     echo" </div>";  
    require("connect_db.php");

    $sql=("SELECT * FROM blog");
    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
    $query=mysqli_query($mysqli,$sql);


    $comentado=("SELECT * FROM comentario");
    $dentro=mysqli_query($mysqli,$comentado);

    $_SESSION['usuario'] = $_SESSION['user'];
    $usuario = $_SESSION['usuario'];


    
    
  ?>
    

    
        
        
        
        
        
        
           
            
        
     

  <?php 
  $usuario = $_SESSION['user'];
     while($arranjo=mysqli_fetch_array($query)){
          echo "<center>";
          echo "<section class='blog-posts-home clearfix'>";
          echo "<div class='post-container clearfix'>";
          echo "<img class='blog-image' src='../assets/img/$arranjo[5]'/>";
          echo "<div class='post'>";


          echo "<h4>$arranjo[1]</h4>";
          echo "<p class='blog-snippet'>$arranjo[3]</p>";
          echo "<p></p>";
          echo "<div class='read-more-button'> <a href='#popup$arranjo[0]'>Read More</a></div>";
          echo "<hr/>";
          echo "<div class='blog-post-bottom'>";
          echo "<i><p>$arranjo[4]</p></i>";


          echo "</div>";
          echo " </div>";
          echo " </div>";

        echo "</section>";
        echo "</center>";
       
        echo  "<div id='popup$arranjo[0]' class='popup5'>";
        echo     "<div class='popup'>";
        echo       "<br/><br/><h2>$arranjo[1]</h2><br/><br/>";
        echo     "<a class='close' href='#'>&times;</a>";
        echo    "<div class='popup2'>";
        echo     "<br/><br/>$arranjo[2]<br/><br/>";
        echo     "<i><p>$arranjo[4]</p></i>";
        echo    "</div>";
        echo  "Comente algo: <br/>";

        /////////////////////////////////////COMENTARIOS////////////////////////////////////////////////////

        echo  "<form method='POST' action='comentario.php' role='form'>"; 
        echo  "<input type='hidden' name='usuario' value='$usuario'>";
        echo  "<textarea name='comentario' rows='5' data-rule='required' data-msg='Please write something for us' placeholder='Nos deixe um comentário!'></textarea>"; 
        echo  "<button type='submit' name='envcom' value='Comentar'>Enviar Comentário</button>"; 
        echo  "</form>"; 
        
        while($sequencia=mysqli_fetch_array($dentro)){
        echo   "$sequencia[2]";
        echo "<br/> Comentou: $sequencia[1] <br/><br/><br/>";
        }

        /////////////////////////////////////FIM COMENTARIOS////////////////////////////////////////////////////

        echo  "</div>";  
        echo "</div>";
  
    }

  ?>
  

  <!--------
                <form method="POST" action="proc_cad_msg.php" role="form" class="php-email-form">
              <div class="form-row">

                <div class="col form-group">
                <input type="text" name="nome" class="form-control" id="id_nome" placeholder="Digite seu nome" data-rule="minlen:4" data-msg="Mínimo 4 caracteres" />
                  <div class="validate"></div>
                </div>

                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="id_email" placeholder="Seu email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-group">
                <input type="number" class="form-control" name="telefone" id="id_telefone" placeholder="Telefone" data-rule="minlen:4" data-msg="Mínimo 8 números." />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <textarea class="form-control" id="id_mensagem" name="mensagem" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensagem"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada, obrigada!</div>
              </div>

              <div class="text-center">
              <button type="submit" name="SendCadCont" value="Cadastrar">Enviar Mensagem</button>
              </div>
  


                  </form>
  --------->

      
            
    


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