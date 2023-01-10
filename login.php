<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/hxi5epr.css">
    <title>Login</title>
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
    <form action="validacaoLogin.php" method="POST" id='form'>
        <div>
            <label for="email" class= "form_label">Email:</label>
            <input name="email" class= "form_input"><br>
            <small class="form_small">  
                <?php   
                    $erro= $_GET['erro'];
                    echo $erro;
                ?>
            </small><br>
        </div>

        <div>
            <label for="password" class= "form_label">Senha:</label>
            <input name="password" type='password' class= "form_input"><br>
            <small class="form_small"></small><br>
        </div>

        <button id= form_butSubmit>Entrar</button> <br><br>
        <small class="form_small">
            <?php
                session_start();
                isset($_SESSION['logou']) ? header('location: main.php') : $erro= $_SESSION['erro'];
                echo $erro;
            ?>
        </small>
    </form>
    <a href='cadastroUsuario.php' target="_self" id="link_cadastrar">Cadastre-se</a>
    <script src='./static/verificaCampoVazio.js'></script>
    
    <footer>©Desenvolvido por Nathy, Thiago e Marília </footer>
</body>
</html>