<?php
    include_once "./bancoDeDados/operacoes.php";

    $email=$_POST['email'];
    $senha= $_POST['senha'];
    $confirmacaoSenha= $_POST['confirmacao_senha'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("location: cadastroUsuario.php?erro=Email inexistente!");
    }else{
        if ($senha == $confirmacaoSenha){
            if (saveCadastroUsuario($email, $senha)){
            header("location: login.php");
            }
        }else{
            header("location: cadastroUsuario.php?erro=Senhas diferentes!");
        }
    }

?>