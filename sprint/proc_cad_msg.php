<?php

session_start();

include_once 'conexao.php';

$SendCadCont = filter_input (INPUT_POST, 'SendCadCont', FILTER_SANITIZE_STRING);

if($SendCadCont){

    //recebendo dados do formulario
    $nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $telefone = filter_input (INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $mensagem = filter_input (INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    // inserir no BD

    $result_msg_cont = "INSERT INTO mensagem (nome, email, telefone, mensagem) VALUES (:nome, :email, :telefone, :mensagem)";

        $insert_msg_cont = $conn -> prepare ($result_msg_cont);
        $insert_msg_cont -> bindParam(':nome', $nome);
        $insert_msg_cont -> bindParam(':email', $email);
        $insert_msg_cont -> bindParam(':telefone', $telefone);
        $insert_msg_cont -> bindParam(':mensagem', $mensagem);

        if($insert_msg_cont -> execute()){
            $_SESSION['msg']= "Mensagem enviada com sucesso!";
            header("Location: index.php");


        }else{
            $_SESSION['msg'] = "Falha ao enviar mensagem";

            header("Location: index.php");
        }


}else{
    $_SESSION['msg'] = "<p style='color:red'> Falha ao enviar mensagem </p>";
    header("Location: index.php");

};