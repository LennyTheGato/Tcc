<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$sentencia="update login set user='$user', password='$pass', email='$email', passadmin='$passadmin' where id='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Ocorreu um erro no processamento de dados!";
		echo '<script>alert("Erro na alteração de dados!")</script> ';
		header("location: admin.php");
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("Dados Atualizados!")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
?>