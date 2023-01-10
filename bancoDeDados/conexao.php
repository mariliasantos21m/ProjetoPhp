<?php

    function getConnection(){

        $SERVER = "localhost";
        $USERNAME = "root";
        $PASSWORD = "";
        $DBNAME = "bancoDeDados";
        $PORT = 3306;

        $conexao = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DBNAME, $PORT);

        return $conexao;

    }

?>