
<?php

use database\DBQuery;
include_once '../database/DBQuery.class.php';

$tableName  = "curso";
$fieldsName = "id, titulo, preço, lista1, lista2, lista3, lista4, rol";
$fieldKey   = "id";

$dbCurso = new DBQuery($tableName, $fieldsName, $fieldKey);

if (isset($_POST['id'])){
    $retornoSQL = false;   
    $values = array(
        $_POST['id'],
        $_POST['titulo'],
        $_POST['preço'],
        $_POST['lista1'],
        $_POST['lista2'],
        $_POST['lista3'],
        $_POST['lista4'],
        $_POST['rol']
    );
    $mensagem  = "";
    if($_POST['acao'] == "btnSave"){
        if ($_POST['id'] == 0){
            $retornoSQL = ( $dbCurso->insert($values) > 0 );
            $mensagem  = (($retornoSQL)?"Registro Inserido!":"Falha ao Inserir Registro!");
        }else{
            $retornoSQL = ( $dbCurso->update($values) > 0 );
            $mensagem  = (($retornoSQL)?"Registro Atualizado!":"Falha ao Atualizar Registro!");
        }  
    } else
    if($_POST['acao'] == "btnDel"){
        $retornoSQL = ( $dbCurso->delete($_POST['id']));
        $mensagem  = (($retornoSQL)?"Registro Excluído!":"Falha ao Excluir Registro!");
    }
    echo "$mensagem";
}