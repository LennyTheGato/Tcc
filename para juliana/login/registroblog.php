<?php

	$titulo=$_POST['titulo'];
	$texto=$_POST['texto'];


	require("connect_db.php");

	mysqli_query($mysqli,"INSERT INTO blog VALUES('','$titulo','$texto','')");
	//echo 'Se ha registrado con exito';
	echo ' <script language="javascript">alert("Texto criado!");</script> ';

			


	
?>