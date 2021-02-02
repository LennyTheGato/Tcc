<?php


	$titulo=$_POST['titulo'];
	$texto=$_POST['texto'];
	$previa=$_POST['previa'];
	$tempo=$_POST['datapost'];
	$imagem=$_POST['imagem'];
	



	require("connect_db.php");

	mysqli_query($mysqli,"INSERT INTO blog VALUES('','$titulo','$texto','$previa','$tempo','$imagem','')");
	//echo 'Se ha registrado con exito';
	echo ' <script language="javascript">alert("Texto criado!");</script> ';

			

	
?>