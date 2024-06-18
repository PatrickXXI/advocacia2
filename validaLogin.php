<?php
    $usuario = $_POST ['usuario'];
    $senha = $_POST ['senha'];

    if($usuario != "patrick"){
        echo "nome de usuario invalido!! ";
    }
    if ($senha != 1234){
        echo "senha invalida!! ";
    }
    if($usuario == "patrick" && $senha == 1234){
        header("Location: home.php");  
        exit;
    }
?>