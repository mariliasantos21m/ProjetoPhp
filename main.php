<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="./static/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/hxi5epr.css">
</head>
<body>
    <?php
        session_start();

        if (! isset($_SESSION['logou'])) header('location: login.php');

        include_once "./bancoDeDados/operacoes.php";
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
    <div id="menu">
        <a class= "link-menu" href='cadastroPaciente.php'>Cadastrar Paciente</a>
        <a class= "link-menu" href='listarPacientes.php'>Listar Paciente</a>
        <a class= "link-menu" href='logOut.php'>Sair</a>
    </div>
    <p> 
            Esse site foi desenvolvido por alunos do segundo período no curso de Ciência da Computação,
            visando a obtenção de nota na disciplina de Programação Web. 
            O site tem por objetivo
            mostrar na prática os conteúdos vistos em sala. A partir desse site você pode realizar 
            um cadastro como usuário, cadastrar pacientes no banco de dados e listar os pacientes que 
            estão armazenados. 
    </p>
    <script type='text/javascript'>
        let params = new URLSearchParams(document.location.search);
        let esta = params.get("cadastrado");

        if (esta){
            alert("O Paciente foi cadastrado.")
        }
    </script>
    <footer>©Desenvolvido por Nathy, Thiago e Marília </footer>
</body>
</html>