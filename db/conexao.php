<?php

    define("HOST", "localhost");
    define("DATABASE", "SISTEMANOTAS");
    define("USUARIO", "root");
    define("SENHA", "");
    try{
        $conexao = new PDO("mysql:host=".HOST.";dbname=".DATABASE,USUARIO,SENHA);
    }catch(PDOException $e){
        echo "erro ao se conectar".$e->getMessage();
    }

?>