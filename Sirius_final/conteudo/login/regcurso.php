<?php

	$titulo=$_POST['titulo'];
	$preço=$_POST['preço'];
	$conteudo1=$_POST['lista1'];
	$conteudo2=$_POST['lista2'];
	$conteudo3=$_POST['lista3'];
	$conteudo4=$_POST['lista4'];


	require("connect_db.php");

	mysqli_query($mysqli,"INSERT INTO curso VALUES('','$titulo','$preço', '$conteudo1', '$conteudo2', '$conteudo3', '$conteudo4','')");
	
	echo ' <script language="javascript">alert("Curso criado!");</script> ';

	
			


	
?>