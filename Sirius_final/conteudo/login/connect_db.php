<?php


		$mysqli = new MySQLi("localhost", "root","", "medicinadaterra");
		if ($mysqli -> connect_errno) {
			die( "Falha na conexão com o MYSQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else

?>