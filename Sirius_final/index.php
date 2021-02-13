<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Nathalia das Chagas">

  <!-- Título da página-->
  <title>Medicina da Terra</title>

  <!-- Bootstrap core CSS -->
  <!-- Bootstrap core CSS -->

  <!-- Favicon da página -->
  <link href="imagens/logo.png" rel="icon">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="icons/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="CSS.css" rel="stylesheet">
  <style type="text/css">
	#closeIcon{
		width: 22px;
		height: 22px;
		background-image : url("imagens/close.png");
		float: right;
		margin-left : 500px;
		margin-top : 60px;
		z-index: 99;
		position: absolute;
	}
	#closeIcon:hover{
		background-color: #AAAAAA;
	}
  </style>
	<script type="text/javascript">
		var closeDest = "conteudo/";
		
		$(document).ready( function() {
			$("#closeIcon").click(function() {
				$(location).attr('href',closeDest);
			});
			$("#btnClose").click(function() {
				$(location).attr('href',closeDest);
			});	
		});
	</script>
</head>

<body>
  <div id="closeIcon"></div>
  
  <div class="overlay"></div>
  <img src="imagens/home.jpg">
 
  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <h1 class="mb-3">Receba as novidades!</h1>
            <p class="mb-5">Inscreva-se para receber as novidades do nosso site direto na sua caixa de entrada, além de receber um 
              <strong>Curso Grátis</strong> na primeira compra.</p>
            <div class="input-group input-group-newsletter">
              <input type="email" class="form-control" placeholder="Insira o seu email" aria-label="Enter email..." aria-describedby="submit-button">
            </div>
              <br/>
              <br/>
              <div class="botoes">
                
                <button class="btn btn-secondary" type="button" id="submit-button">Inscreva-me</button>
            
             
                <button class="btn btn-secondary" type="button" id="btnClose">Não, obrigado(a)</button>
            
              </div>
              
           
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Início do código das redes sociais-->
  <div class="social-icons">
    <ul class="list-unstyled text-center mb-0">
      <li class="list-unstyled-item">
        <a href="https://api.whatsapp.com/message/EQM23V4ZGYRYO1" target="_blank">
          <i class="fab fa-whatsapp"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="https://www.facebook.com/medicinadaterraoficial/" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="https://www.instagram.com/medicinadaterraoficial/" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="https://t.me/canalmedicinadaterra" target="_blank">
          <i class="fab fa-telegram"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="https://twitter.com/medicinadaterra" target="_blank">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
    </ul>
  </div>
</body>

</html>
