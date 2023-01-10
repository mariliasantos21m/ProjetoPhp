<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/hxi5epr.css">
    <title>Cadastro Usuário</title>
</head>
<body>
    <header>
        <div id = "header">
            <img src="./static/estrela.png">
            <div id="header-text">
                <h2 id= "header-h2">PROGRAMAÇÃO</h2>
                <h1 id= "header-h1"> WEB</h1>
            </div>
        </div>
    </header>
    <h2>Cadastro Usuário</h2>
    <form action='cadUsuarioProcesso.php' method='POST' id="form">
        <div>
            <label for='email' class= "form_label">Email:</label>
            <input name='email' id='input_email' type='email' class= "form_input"><br>
            <small class= "form_small">
                <?php 
                    $erro= $_GET['erro'];
                    echo $erro;
                ?>
            </small><br>
        </div>

        <div>
            <label for='senha' class= "form_label">Senha:</label>
            <input name='senha' id='input_senha' class= "form_input"><br>
            <small class= "form_small"></small><br>
        </div>

        <div>
            <label for='confirmacao_senha' class= "form_label">Confirmação da senha:</label>
            <input name='confirmacao_senha' id='input_conf_senha' class= "form_input"><br>
            <small  class= "form_small"></small><br>
        </div>

        <button id= form_butSubmit>Concluir</button>
    </form>
    
    <script src="./static/verificaCampoVazio.js"></script>
    <footer>©Desenvolvido por Nathy, Thiago e Marília </footer>
</body>
</html>