<!--<style>

body{
    background-image: url("https://i.pinimg.com/originals/0d/9e/7b/0d9e7b514c84337976e586c63688c063.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-blend-mode:multiply;
   
}
    
    
    h3{
        text-align: center;
        font-size: 50px;
        font-family:lato;
        color:#000000;
    }
    

</style>
-->
<?php



include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

$result_usuario= "INSERT INTO cliente (nome, email, telefone, mensagem) VALUES ('$nome', '$email','$telefone','$mensagem')";
$result_usuario= mysqli_query($conn, $result_usuario);

?>

<h3>Agradecemos a sua mensagem! </br>Responderemos assim que possível.</h3>

<center><input class="botao" type='submit' value='Voltar' onclick='history.go(-1)' style='background-color:#FFFFFF; border-radius:3px;'/>
</center>



