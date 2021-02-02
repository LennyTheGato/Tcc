<?php
session_start();
require("connect_db.php");
$sql=("SELECT * FROM blog");
$query=mysqli_query($mysqli,$sql);
$arranjo=mysqli_fetch_array($query);

include_once '../conexao.php';

$envcom = filter_input (INPUT_POST, 'envcom', FILTER_SANITIZE_STRING);

if($envcom){

    //recebendo dados do formulario

    $comentario = filter_input (INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);
    $usuario = filter_input (INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);

    // inserir no BD

    $result_msg_cont = "INSERT INTO comentario (comentario, usuario) VALUES (:comentario, :usuario)";

        $insert_msg_cont = $conn -> prepare ($result_msg_cont);
        $insert_msg_cont -> bindParam(':comentario', $comentario);
        $insert_msg_cont -> bindParam(':usuario', $usuario);

        if($insert_msg_cont -> execute()){
            $_SESSION['msg']= "Comentário enviado com sucesso!";
            header("Location: index2.php#popup$arranjo[0]");


        }else{
            $_SESSION['msg'] = "Falha ao enviar comentário";

            header("Location: index2.php#popup$arranjo[0]");
        }


}else{
    $_SESSION['msg'] = "<p style='color:red'> Falha ao enviar comentário </p>";
    header("Location: index2.php#popup$arranjo[0]");

};