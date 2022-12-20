<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Notas</title>
    <style>
        .conteudo{
            margin-left: 400px;
        }
        .conteudo h1{
            text-align: center;
        }
        form{
            display: flex;
            flex-direction: column;
            margin-top: 10px;
            padding: 10px;
            gap: 10px;
        }

        form > input{
            padding: 10px;
            font-size: 1.2rem;
        }
        form > input[type="submit"]{
            border: none;
            font-size: 20px;
            background-color: lightgreen;
        }
        form > textarea{
            height: 200px;
            resize: none;
        }
        .sucesso{
            background-color: green;
            color: white;
            padding: 10px;
        }
        .erro{
            background-color: red;
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php 
        require("menu.php");
    ?>

    <div class="conteudo">
        <h1>Cadastro de Notas</h1>

        <form method="POST" action="operacoesDB.php">
            <label for="">Titulo</label>
            <input type="text" name="TITULO">
            <label for="">Descrição</label>
            <textarea name="DESCRICAO"></textarea>
            <input type="submit" name="Cadastrar" value="Cadastrar">
        </form>

        <?php 
            if(isset($_SESSION['retorno'])){
                echo "<p class='{$_SESSION['retorno']['tipo']}'>{$_SESSION['retorno']['mensagem']}</p>";
                $_SESSION['retorno'] = ["tipo" => "" , "mensagem" => ""];
            }
        ?>
    </div>
</body>
</html>