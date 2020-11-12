<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);

$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);

$comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);

$resultado= "INSERT INTO cliente (nome, sobrenome, estado, comentario) VALUES ('$username', '$idade','$telefone','$endereco','$email','$motivo')";
$resultado= mysqli_query($on, $resultado);
