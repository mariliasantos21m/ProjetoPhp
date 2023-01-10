<?php

    include_once "conexao.php";
    function saveCadastroUsuario($email, $senha){
        //abrir a conexão
        $conexao = getConnection();
        //realizar a query no banco de dados
        mysqli_query($conexao, "INSERT INTO `login` (email, senha) VALUES ('$email', '$senha')");

        mysqli_close($conexao);

        return true;
        
    }

    function saveCadastroPaciente($nome, $idade, $peso, $altura, $imc){
        //abrir a conexão
        $conexao = getConnection();
        //realizar a query no banco de dados
        mysqli_query($conexao, "INSERT INTO `pacientes` (nome, idade, peso, altura, imc) 
        VALUES ('$nome', '$idade', '$peso', '$altura', '$imc')");

        mysqli_close($conexao);

        return true;
        
    }

    function findLogin($email, $senha){

        $conexao = getConnection();

        $rows = mysqli_query($conexao, "SELECT * FROM `login` ");

        while($row = mysqli_fetch_assoc($rows)){
            if ($row['email']==  $email && $row['senha']== $senha){
                print_r($row);
                return true;
                break;
            }
        }

        mysqli_close($conexao);
        return false;

    }


    function listarPacientes(){

        $conexao = getConnection();

        $rows = mysqli_query($conexao, "SELECT * FROM `pacientes` ");
        $pacientes=[];

        while($row = mysqli_fetch_assoc($rows)){
            $paciente=[
                'nome'=>$row['nome'],
                'idade'=>$row['idade'],
                'peso'=> $row['peso'],
                'altura'=> $row['altura'],
                'imc'=> $row['imc'],
            ];
            array_push($pacientes, $paciente);
        }

        mysqli_close($conexao);

        return $pacientes;

    }
?>