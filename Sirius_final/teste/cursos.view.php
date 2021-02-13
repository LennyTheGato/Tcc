
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro de Cursos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
  
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
  
  
  <script type="text/javascript">
	
  	$(document).ready(function() {
  	  	$("#listCursos").load("cursos.list.php");
	    $('#example').DataTable();
	    
	    $(".btnEdit").click(function() {
			var url = "cursos.frm.php?id="+this.value;
			$.get( url , function(data) {
				$("#frmDetail").html(data);
			})
		});
	});
  </script>
</head>
<body>
<?php

use database\DBQuery;
include_once '../database/DBQuery.class.php';


$tableName  = "curso";
$fieldsName = "id, titulo, preço, lista1, lista2, lista3, lista4, rol";
$fieldKey   = "id";

$dbCurso = new DBQuery($tableName, $fieldsName, $fieldKey);
$resultSet = $dbCurso->select("");
?>
<div class="alert alert-dark" id="mensagem" role="alert"></div>
  <button type="button" value="0" class="btn btn-primary btnEdit" data-toggle="modal" data-target="#myModal">
    Inserir Novo Registro
  </button>
<hr>
<div id="listCursos"></div>
  <!-- Start Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">   
		<div id="frmDetail"> </div>
      </div>
    </div>
  </div>
  <!-- End Modal -->
</body>

</html>