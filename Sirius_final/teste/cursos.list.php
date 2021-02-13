<?php

use database\DBQuery;
include_once '../database/DBQuery.class.php';
$tableName  = "curso";
$fieldsName = "id, titulo, preço, lista1, lista2, lista3, lista4, rol";
$fieldKey   = "id";
$dbCurso = new DBQuery($tableName, $fieldsName, $fieldKey);
$resultSet = $dbCurso->select("");
?>
  <script type="text/javascript">
  	$(document).ready(function() {
  		$('#example').DataTable();
	    $(".btnEdit").click(function() {
			var url = "cursos.frm.php?id="+this.value;
			$.get( url , function(data) {
				$("#frmDetail").html(data);
			})
		});
	});
  </script>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            	<th>Edit</th>
                <th>id</th>
                <th>titulo</th>
                <th>preço</th>
                <th>lista1</th>
                <th>lista2</th>
                <th>lista3</th>
                <th>lista4</th>
                <th>rol</th>
            </tr>
        </thead>
        <tbody>
<?php 
while ($linha = mysqli_fetch_assoc($resultSet)) {
    echo
        "<tr>".
        "<td>"."<button type='button' value='".$linha['id']."' class='btn btn-primary btnEdit' data-toggle='modal' data-target='#myModal'>".
        "Editar".
        "</button>"."</td>".
        "<td>". $linha['id']    ."</td>".
        "<td>". $linha['titulo']."</td>".
        "<td>". $linha['preço'] ."</td>".
        "<td>". $linha['lista1']."</td>".
        "<td>". $linha['lista2']."</td>".
        "<td>". $linha['lista3']."</td>".
        "<td>". $linha['lista4']."</td>".
        "<td>". $linha['rol']   ."</td>".
        "</tr>";   
}
?>
</tbody>
        <tfoot>
            <tr>
            	<th>Edit</th>
                <th>id</th>
                <th>titulo</th>
                <th>preço</th>
                <th>lista1</th>
                <th>lista2</th>
                <th>lista3</th>
                <th>lista4</th>
                <th>rol</th>
            </tr>
        </tfoot>
    </table>