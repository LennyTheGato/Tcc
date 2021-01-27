<?php
session_start();
include_once 'conexao.php';

$sendinfo = filter_input(INPUT_POST, 'sendinfo', FILTER_SANITIZE_STRING);
if($sendinfo){

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    $result_usuario= "INSERT INTO cliente (nome, email, telefone, mensagem) VALUES (:nome, :email, :telefone, :mensagem)";

    $insert_usuario = $conn->prepare($result_usuario);
    $insert_usuario->bindParam(':nome', $nome);
    $insert_usuario->bindParam(':email', $email);
    $insert_usuario->bindParam(':telefone', $telefone);
    $insert_usuario->bindParam(':mensagem', $mensagem);

    if($insert_usuario->execute()){
        $_SESSION['msg'] = "<p style='color:green;'>Mensagem enviada<p>";
        header ("Location: index.php");
    }

    else{
        $_SESSION['msg'] = "<p style='color:red;'>Mensagem não enviada<p>";
        header ("Location: index.php");

    }
}
else{
    $_SESSION['msg'] = "<p style='color:red;'>Mensagem não enviada<p>";
    header ("Location: index.php");

}




