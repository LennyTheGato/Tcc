<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:login.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html >
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
   
    $query=mysqli_query($mysqli,$sql);
    
    
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







        
  



        echo  "</div>";  
        echo  "</div>";  
        echo  "</div>";  



    

        echo  "</div>";  
        echo "</div>";
        echo "</div>";
  
    }

  ?>
  

 

<div class="span8">

</div>	
</div>	
<br/>








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
    
	</style>
  </body>
</html>