<?php
    session_start();
    require('../db/conexao.php');
    function inserirNota($dados){
        global $conexao;
        extract($dados);
        try{
            $query_insert = $conexao->prepare("INSERT INTO NOTA (TITULO , DESCRICAO) VALUES (:titulo , :descricao)");
            $query_insert->bindParam(":titulo",$TITULO);
            $query_insert->bindParam(":descricao",$DESCRICAO);
            $query_insert->execute();
            $_SESSION['retorno'] = ["tipo" => "sucesso" , "mensagem" => "Nota cadastrada com sucesso!"];
        }catch(PDOException $e){
            $_SESSION['retorno'] = ["tipo" => "sucesso" , "mensagem" => "Erro ao inserir dados, contate ao suporte!"];
        }

    }

    function listarNotas(){
        global $conexao;
        $lista_notas;
        try{
            $query_select_notas = $conexao->prepare("SELECT * FROM NOTA");
            $query_select_notas->execute();
            $lista_notas = $query_select_notas->fetchAll(PDO::FETCH_ASSOC);
      
        }catch(PDOException $e){
            echo "Erro ao retornar contatos";
        }
        return $lista_notas;
    }

    function deletarNota($id){
        global $conexao;
        try{
            $query_delete = $conexao->prepare("DELETE FROM NOTA WHERE ID = :id");
            $query_delete->bindParam(":id",$id);
            $query_delete->execute();
            $_SESSION['retorno'] = ["tipo" => "sucesso" , "mensagem" => "Nota Deletada com sucesso!"];
        }catch(PDOException $e){
            $_SESSION['retorno'] = ["tipo" => "sucesso" , "mensagem" => "Erro ao inserir dados, contate ao suporte!"];
        }
    }


    if(isset($_POST['Cadastrar'])){
        inserirNota($_POST);
        header('Location: cadastrar_nota.php');
    }else if(isset($_GET['deletar'])){
        deletarNota($_GET['deletar']);
        header('Location: listagem_notas.php');
    }
