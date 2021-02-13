<?php 

use database\DBQuery;
include_once '../database/DBQuery.class.php';

$tableName  = "curso";
$fieldsName = "id, titulo, preço, lista1, lista2, lista3, lista4, rol";
$fieldKey   = "id";

$dbCurso = new DBQuery($tableName, $fieldsName, $fieldKey);

if(isset($_GET['id'])){
    $id      = $_GET['id'];
    $resultSet = $dbCurso->select("id='".$id."'");
    $linha = mysqli_fetch_assoc($resultSet);
    $titulo  = $linha['titulo'];
    $preço   = $linha['preço'];
    $lista1  = $linha['lista1'];
    $lista2  = $linha['lista2'];
    $lista3  = $linha['lista3'];
    $lista4  = $linha['lista4'];
    $rol     = $linha['rol'];
}else{
    $id      = $_GET['id'];
    $titulo  = "";
    $preço   = "";
    $lista1  = "";
    $lista2  = "";
    $lista3  = "";
    $lista4  = "";
    $rol     = "";
}

?>


      
<!-- Modal Header -->
<div class="modal-header">
	<h4 class="modal-title">Cadastro</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
        
<!-- Modal body -->
<div class="modal-body">

 <form id="frmCad" name="frmCad" >
  <div class="form-group"> <label for="id">id:</label>
    <input form="frmCad" type="text" readonly value="<?=$id?>" name="id" class="form-control" placeholder="id" id="id">
  </div>
    <div class="form-group"> <label for="titulo">titulo:</label>
    <input form="frmCad" type="text" value="<?=$titulo?>"  name="titulo" class="form-control" placeholder="titulo" id="titulo">
  </div>
    <div class="form-group"><label for="preço">preço:</label>
    <input form="frmCad" type="text"  value="<?=$preço?>"  name="preço" class="form-control" placeholder="preço" id="preço">
  </div>
    <div class="form-group"><label for="lista1">lista1 :</label>
    <input form="frmCad" type="text" value="<?=$lista1?>"  name="lista1" class="form-control" placeholder="lista1" id="lista1">
  </div>
    <div class="form-group"><label for="lista2">lista2:</label>
    <input form="frmCad" type="text" value="<?=$lista2?>"  name="lista2" class="form-control" placeholder="lista2" id="lista2">
  </div>
    <div class="form-group"><label for="lista3">lista3:</label>
    <input form="frmCad" type="text" value="<?=$lista3?>"  name="lista3" class="form-control" placeholder="lista3" id="lista3">
  </div>
    <div class="form-group"><label for="lista4">lista4:</label>
    <input form="frmCad" type="text" value="<?=$lista4?>"   name class="form-control" placeholder="lista4" id="lista4">
  </div>
    <div class="form-group"><label for="rol">rol:</label>
    <input form="frmCad" type="text" value="<?=$rol?>"   name="rol" class="form-control" placeholder="rol" id="rol">
  </div>
  <input form="frmCad" id="acao" type="hidden" name="acao" value="close">
</form> 

</div>
        
<!-- Modal footer -->
<div class="modal-footer">
	<button type="button" id="btnSave"  class="btn btn-info btnAcao"   >Salvar</button>
    <button type="button" id="btnDel"   class="btn btn-warning btnAcao">Excluir</button>
    <button type="button" id="btnClose" class="btn btn-danger"  data-dismiss="modal">Close</button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  	$(document).ready(function() {
		$(".btnAcao").click(function() {
			$("#acao").val(this.id);
			var url     = "cursos.acao.php";
			var frmData = $("#frmCad").serialize();
			$.post( url, frmData, function(data) {
				$("#mensagem").html(data);
				$("#listCursos").html("");
				$("#listCursos").load("cursos.list.php");
				$("[data-dismiss=modal]").trigger({ type: "click" });
				location.reload();
			});
		});
	});
</script>

