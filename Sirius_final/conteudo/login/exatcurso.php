<?php


extract($_POST);	
	require("connect_db.php");
	$sentencia="update curso set titulo='$titulo', preço='$preço', lista1='$conteudo1', lista2='$conteudo2', lista3='$conteudo3', lista4='$conteudo4' where id='$id'";
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Ocorreu um erro no processamento de dados!";
		echo '<script>alert("Erro na alteração de dados!")</script> ';
		header("location: gercurso.php");
		
		echo "<script>location.href='gercurso.php'</script>";
	}else {
		echo '<script>alert("Curso Atualizado!")</script> ';
		
		echo "<script>location.href='gercurso.php'</script>";

		
	}
?>