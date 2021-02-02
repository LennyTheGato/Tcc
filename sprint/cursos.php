<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- INICIO DO CSS  -->

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicina da Terra</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo_mt.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<!-- FIM DO CSS  -->


<body>

  
    <!-- ======= Pricing Section ======= -->
    <?php
    echo"</br></br></br>";
    echo" <div class='container' data-aos='fade-up'>";

        echo"<div class='section-title'>";
        echo"<h2>Conheça nossos cursos</h2>";
        echo"<p>Página dedicada à catalogação de cursos disponíveis</p>";
        echo" </div>";  
 

require("login/connect_db.php");
$sql=("SELECT * FROM curso");

$query=mysqli_query($mysqli,$sql);

 /////////////////////////////////////////////////////////// Loop pra acrescentar os cursos ///////////////////////////////////////////////////////////
while($arreglo=mysqli_fetch_array($query)){
  
  echo" <section id='pricing' class='pricing'>";

  echo "<div class='row'>";

  echo "<div class='col-lg-3 col-md-6 mt-4 mt-md-0'>";
  echo "<div class='box featured' data-aos='fade-up' data-aos-delay='200'>";


    echo "<h3>$arreglo[1]</h3>";
    echo "<h4><sup>R$</sup>$arreglo[2]<span> / month</span></h4>";
    echo "<ul>";
      echo "<li>$arreglo[3]</li>";
      echo "<li>$arreglo[4]</li>";
      echo "<li>$arreglo[5]</li>";
      echo "<li>$arreglo[6]</li>";
      
      echo "<div class='btn-wrap'>";
        echo "<a href='#' class='btn-buy'>Comprar</a>";
      echo "<div/>";

    echo "</ul>";
    

    echo "<div/>";
    echo "<div/>";
    
    
    
    
    echo "<div/>";
    echo "<div/>";
     
       echo"</section>"; 

/////////////////////////////////////////////////////////// FIM do loop ///////////////////////////////////////////////////////////

}

    ?>
  



  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>


