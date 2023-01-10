<?php
    include_once "./bancoDeDados/operacoes.php";

    session_start();

    $email= $_POST['email'];
    $password= $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("location:login.php?erro=Email inexistente!");
    }else{
        if (findLogin($email, $password)){

            $_SESSION['logou']= 1;
            $_SESSION['usuario']= $email;
            $_SESSION['codigo']= $password;
            $_SESSION ['erro']= '';
    
            header('location: main.php');
        }else{
            $_SESSION ['erro']= 'Email ou senha inválidos!';
            header('location:login.php');
        }
    }


?>