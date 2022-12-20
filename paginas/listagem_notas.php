<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Notas</title>
    <style>
         .conteudo{
            margin-left: 400px;
        }
        .conteudo h1{
            text-align: center;
        }

        .lista{
            margin: 22px auto 0;
            width: 90%;
            height: 500px;
        }

        .nota{
            background-color: #ccc;
            padding: 15px;
            margin-bottom: 13px;
            border-radius: 8px;
        }
        .acao{
            display: inline-block;
            margin-top: 10px;
            padding: 10px;
            font-size: 18px;
            text-decoration: none;
        }

        .deletar{
            background-color: red;
            color: #fff;
        }
        .editar{
            background: #ffc517;
            color: #444;
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
    <?php require('menu.php')?>
    <div class="conteudo">
        <h1>Listagem de Notas</h1>
        <ul class="lista">
            <?php 
            
                require("operacoesDB.php");

                $lista_notas = listarNotas();

                if(count($lista_notas) <= 0){
                    echo "Não há notas cadastradas <a href='cadastrar_nota.php'>Cadastrar Nota</a>";
                }else{
                    $notaHTML = '';
                    foreach($lista_notas as $nota){
                        $notaHTML .= 
                        "<li class='nota'>
                            <h3>{$nota['TITULO']}</h3>
                            <p>{$nota['DESCRICAO']}</p>
                            <a class='acao deletar' href='operacoesDB.php?deletar={$nota['ID']}'>Deletar<i class='fa-solid fa-trash'></i></a>
                            <a class='acao editar'  href='editar_nota.php?edicao={$nota['ID']}'>Editar<i class='fa-solid fa-pen-to-square'></i></a>
                        </li>";
                    }
                    echo $notaHTML;
                }
            
            ?>
        </ul>
        <?php 
            if(isset($_SESSION['retorno'])){
                echo "<p class='{$_SESSION['retorno']['tipo']}'>{$_SESSION['retorno']['mensagem']}</p>";
                $_SESSION['retorno'] = ["tipo" => "" , "mensagem" => ""];
            }
        ?>
    </div>
</body>
</html>