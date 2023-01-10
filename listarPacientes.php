<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/hxi5epr.css">
    <title>Lista de Pacientes</title>
</head>
<body>
    <?php
        session_start();

        if (! isset($_SESSION['logou'])) header('location: login.php');

        include_once "./bancoDeDados/operacoes.php";

        $pacientes= listarPacientes();
    ?>
    <header>
        <div id = "header">
            <img src="./static/estrela.png">
            <div id="header-text">
                <h2 id= "header-h2">PROGRAMAÇÃO</h2>
                <h1 id= "header-h1"> WEB</h1>
            </div>
        </div>
    </header>
    <h2>Lista de pacientes</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>IMC</th>
        </tr>
        <?php
        foreach($pacientes as $paciente){
            $nome=$paciente['nome'];
            $idade=$paciente['idade'];
            $peso=$paciente['peso'];
            $altura=$paciente['altura'];
            $imc=$paciente['imc'];
            echo"<tr>
                    <td>$nome</td>
                    <td>$idade</td>
                    <td>$peso</td>
                    <td>$altura</td>
                    <td>$imc</td>
                </tr>";
        }
        ?>
    </table>
    <br>
    <footer>©Desenvolvido por Nathy, Thiago e Marília </footer>
</body>
</html>