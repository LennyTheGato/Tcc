<?php


extract($_POST);	
	require("connect_db.php");
	$sentencia="update login set user='$user', password='$pass', email='$email', passadmin='$passadmin' where id='$id'";
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