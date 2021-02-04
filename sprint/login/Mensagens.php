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
        echo"<h2>Mensagens</h2>";
        echo"<p>As mensagens enviadas pelos usuários na aba Contato aparecerão aqui.</p>";
        echo" </div>";  echo" </div>";  

  ?>




<div class="span12">

<div class="caption">

<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
<div class="row-fluid">

  <br/>


  <?php

    require("connect_db.php");
    $sql=("SELECT * FROM mensagem");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
    $query=mysqli_query($mysqli,$sql);


    
    echo "<div class='overflow-x:auto;'>";
    echo "<div class='table-responsive'>";

    echo "<table border='1'; class='table table-hover';>";
      echo "<tr class='warning'>";
        echo "<td>Id</td>";
        echo "<td>Usuário</td>";
        echo "<td>E-mail</td>";
        echo "<td>Telefone</td>";
        echo "<td>Comentários</td>";
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

        
        echo "<td><a href='Mensagens.php?id=$arranjo[0]&idborrar=2' class='botao_apagar'>Apagar</a></td>";

        
      echo "</tr>";
    }

    echo "</table>";
    echo" </div>";  echo" </div>";  

      extract($_GET);
      if(@$idborrar==2){

        $sqlborrar="DELETE FROM mensagem WHERE id=$id";
        $resborrar=mysqli_query($mysqli,$sqlborrar);
        echo '<script>alert("Comentario Excluido!")</script> ';
        //header('Location: proyectos.php');
        echo "<script>location.href='Mensagens.php'</script>";
      }

  ?>
  
      
            
    


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
  </body>
</html>