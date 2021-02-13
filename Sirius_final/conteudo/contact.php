<?php

use database\DBQuery;
include_once '../database/DBQuery.class.php';


$tableName  = "mensagem";
$fieldsName = "id, nome, email, telefone, mensagem";
$fieldKey   = "id";

$dbMensagem = new DBQuery($tableName, $fieldsName, $fieldKey);

if (isset($_POST['email'])){
    $values = array(
        0,
        $_POST['nome'],
        $_POST['email'],
        $_POST['telefone'],
        $_POST['mensagem']
    );
       $la = $dbMensagem->insert($values);
       if ($la > 0){
        echo "Mensagem enviada com sucesso!";   
       }
       else {
          echo "Mensagem não enviada";
       }
}

?>
