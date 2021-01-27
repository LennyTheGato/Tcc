<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'medicinadaterra');
    
//Criar a conexao
$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);