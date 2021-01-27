<?php

session_start();

?>

<!DOCTYPE HTML>


<html lang="">

    <head>

    <meta charset="UTF-8">
    <title>Area dos contatos</title>
    </head>


    <body>

        <h1>Cadastrar mensagem</h1>

        <?php

        if(isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        
        //code here

        ?>

        <form method="POST" action="proc_cad_msg.php">
           
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Inserir Nome Completo"> <br><br>

            <label>E-mail:</label>
            <input type="email" name="email" placeholder="Seu melhor email"> <br><br>

            <label>Telefone:</label>
            <input type="number" name="telefone" placeholder="Digite seu telefone"> <br><br>

            <label>Mensagem:</label>
            <textarea name="mensagem" rows="3" cols="50"></textarea><br><br>

            <input name="SendCadCont" type="submit" value="Cadastrar">


            </form>