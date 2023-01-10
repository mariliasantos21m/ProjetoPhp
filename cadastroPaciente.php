<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/hxi5epr.css">
    <title>Cadastro Paciente</title>
</head>
<body>
    <?php
        session_start();

        if (! isset($_SESSION['logou'])) header('location: login.php');
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
    <h2>Cadastro Paciente</h2>
    <form action='cadPacienteProcesso.php' method='POST' id='form'>
        <div>
            <label for='nome' class= "form_label">Nome:</label>
            <input name='nome' class= "form_input"><br><br>
            <small class="form_small"></small>
        </div>

        <div>
            <label for='idade' class= "form_label">Idade:</label>
            <input name='idade' class= "form_input"><br><br>
            <small class="form_small">
                <?php
                    $erroIdade= $_GET['erroIdade'];
                    echo $erroIdade;
                ?>
            </small>
        </div>

        <div>
            <label for='peso' class= "form_label">Peso:</label>
            <input name='peso' class= "form_input"><br>
            <small class="form_small">
                <?php
                    $erroPeso= $_GET['erroPeso'];
                    echo $erroPeso;
                ?>
            </small><br>
        </div>

        <div>
            <label for='altura' class= "form_label">Altura:</label>
            <input name='altura' class= "form_input"><br>
            <small class="form_small">
                <?php
                    $erroAltura= $_GET['erroAltura'];
                    echo $erroAltura;
                ?>
            </small><br>
        </div>

        <button  id= form_butSubmit>Concluir</button>

    </form>
    <script src='./static/verificaCampoVazio.js'></script>
    <footer>©Desenvolvido por Nathy, Thiago e Marília </footer>
</body>
</html>