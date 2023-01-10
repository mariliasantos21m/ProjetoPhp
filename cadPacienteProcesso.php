<?php
    include_once "./bancoDeDados/operacoes.php";


    $nome= $_POST['nome'];
    $idade= $_POST['idade'];
    $peso= $_POST['peso'];
    $altura= $_POST['altura'];

    if (!filter_var($idade, FILTER_VALIDATE_FLOAT)){
        header("location: cadastroPaciente.php?erroIdade=Idade inválida!");
    }else if (!filter_var($peso, FILTER_VALIDATE_FLOAT)){
        header("location: cadastroPaciente.php?erroPeso=Peso Inválido!");
    }else if (!filter_var($altura, FILTER_VALIDATE_FLOAT)){
        header("location: cadastroPaciente.php?erroAltura=Altura Inválida!");
    }else{
        $imc=number_format($peso / ($altura * $altura), 2);
        if(saveCadastroPaciente($nome, $idade, $peso, $altura, $imc)) header('location: main.php?cadastrado=true');
    }
?>