<?php
    session_start();
    //print_r($_GET);

    $login = $_GET["login"];
    $senha = $_GET["senha"];

    try{
        $conexao = new PDO("mysql:
            host=localhost;
            dbname=minicurso;
            port=3306",
            "root",
            "");

        $stmt = $conexao->prepare("select * from usuario
        where
        login = :login and senha = :senha");
        $stmt->bindValue(":login",$login);
        $stmt->bindValue(":senha",$senha);
        $stmt->execute();
        $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(sizeof($retorno) >0){
            $_SESSION["usuario"] = $retorno[0];
            echo json_encode($retorno[0]);
        }else{
            $vetor = Array(
                "id" => "-1",
                "mensagem" => "Login ou senha Invalido"
            );
            echo json_encode($vetor);
        }



    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
?>
